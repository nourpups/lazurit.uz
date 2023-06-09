<?php

namespace App\Http\Controllers;

use App\Actions\Category\StoreCategoryGroupAction;
use App\Actions\Category\UpdateCategoryGroupAction;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use App\Services\Images;
use Illuminate\Support\Facades\Storage;

class CategoryController extends
   Controller
{
    public function index()
    {
        session()->put('previous_page', url()->full());
        $categories = Category::withTranslation()->latest()->paginate('16');

        return view('manager.categories', compact('categories'));
    }
    public function store(CategoryRequest $request, StoreCategoryGroupAction $storeCategoryGroupAction)
    {
        $data = $request->validated();

        $name = $data[app()->getLocale()]['name'];

        $imageAndSlug = $storeCategoryGroupAction($data['image'], $data['en']['name'], $data['ru']['name']);

        $data = array_merge($data, $imageAndSlug);

        if (Category::create($data)) {
            session()->flash('success', "Category $name succesfully created");

            return response()->json([
               'status' => true,
               'flash' => view('partials.flashs')->render()
            ]);
        }
        session()->flash('danger', "Can\'t create Category $name");

        Storage::delete($data['image']);
        return response()->json([
           'status' => false,
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

        $imageAndSlug = $updateCategoryGroupAction($request['image'], $category->image, $data['en']['name'], $data['ru']['name']);

        $data = array_merge($data, $imageAndSlug);

        if ($category->update($data)) {
            return redirect(session('previous_page'))->with('success', "Category $category->name succesfully updated");
        }
        unlink(storage_path('app/public/').$data['image']);
        return redirect(session('previous_page'))->with('danger', "Can't update category $category->name");
    }

    public function destroy(Category $category)
    {
        $name = $category->name;

        Storage::delete($category->image);

        if ($category->delete()) {
            return redirect(session('previous_page'))->with('danger', "Category $name succesfully deleted");
        }
        return redirect(session('previous_page'))->with('danger', "Can\'t delete Category $name");
    }
}

