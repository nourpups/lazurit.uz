<?php

namespace App\Http\Controllers;

use App\Actions\Category\StoreCategoryGroupAction;
use App\Actions\Category\UpdateCategoryGroupAction;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\Images;

class CategoryController extends
   Controller
{
    public function store(CategoryRequest $request, StoreCategoryGroupAction $storeCategoryGroupAction)
    {
        $data = $request->validated();

        $name = $data[app()->getLocale()]['name'];

        $imageName = $request['en']['name'].'_'.time();
        $imageAndSlug = $storeCategoryGroupAction($request['image'], $imageName, $request['ru']['name']);

        $data = array_merge($data, $imageAndSlug);

        if (Category::create($data)) {
            session()->flash('success', "Category $name succesfully created");

            return response()->json([
               'status' => true,
               'flash' => view('partials.flashs')->render()
            ]);
        }
        session()->flash('danger', "Can\'t create Category $name");

        unlink(storage_path('app/public/').$data['image']);
        return response()->json([
           'status' => true,
           'flash' => view('partials.flashs')->render()
        ]);
    }

    public function edit(Category $category)
    {
        return view('manager.forms.categories.edit', compact('category'));
    }

    public function update(CategoryRequest $request, Category $category, UpdateCategoryGroupAction $updateCategoryGroupAction)
    {
        $data = $request->validated();

        $imageName = $data['en']['name'].'_'.time();
        $imageAndSlug = $updateCategoryGroupAction($request['image'], $category->image, $imageName, $data['ru']['name']);

        $data = array_merge($data, $imageAndSlug);

        if ($category->update($data)) {
            return redirect(session('previous_page'))->with('success', "Category $category->name succesfully updated");
        }
        unlink(storage_path('app/public/').$data['image']);
        return redirect(session('previous_page'))->with('danger', "Can't update category $category->name");
    }

    public function delete(Category $category)
    {
        $name = $category->name;

        unlink(storage_path('app/public/').$category->image);
        if ($category->delete()) {
            return redirect(session('previous_page'))->with('danger', "Category $name succesfully deleted");
        }
        return redirect(session('previous_page'))->with('danger', "Can\'t delete Category $name");
    }
}

