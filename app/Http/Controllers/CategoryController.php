<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function store(CategoryRequest $request)
    {
        $store = request()->all();
        $category_name = $request[app()->getLocale()]['name'];

        if($store['image'])
        {
          $ext = $request->file('image')->getClientOriginalExtension();
          $file_name = str_replace(' ', '_', $category_name) . '_image_' . time() . '.' . $ext;
          $store['image'] = $request->file('image')->storeAs('categories/image', $file_name, 'public');
        }

        if(Category::create($store))
        {
          session()->flash('success', "Category $category_name succesfully created");

          return response()->json([
            'status' => true,
            'flash' => view('partials.flashs')->render()
          ]);
        }
        session()->flash('danger', "Can\'t create Category ' . $category_name");

        unlink(storage_path('app/public/') . $file_name);
        return response()->json([
          'status' => true,
          'flash' => view('partials.flashs')->render()
        ]);
      }
  public function edit(Category $category)
  {
    return view('manager.forms.categories.edit')->with('cat', $category);
  }
  public function update(CategoryRequest $request, Category $category)
  {
    $update = request()->all();

    $image_old_file_name = null;

    if($request->hasFile('image'))
    {
      $ext = $request->file('image')->getClientOriginalExtension();
      $image_file_name = str_replace(' ', '_', $category->name) . '_image_' . time() . '.' . $ext;
      $update['image'] = $request->file('image')->storeAs('categories/image', $image_file_name, 'public');
      $image_old_file_name = $category->image;
      $image_old_logo_path = storage_path('app/public/') . $image_old_file_name;
    }

    if($category->update($update))
    {
        if(!is_null($image_old_file_name) && file_exists($image_old_logo_path))
        {
            unlink($image_old_logo_path);
        }

        return redirect(session('previous_page'))->with('success', 'category ' . $category->name . ' succesfully updated');
    }
    unlink(storage_path('app/public/').$image_file_name);

    return redirect(session('previous_page'))->with('danger', 'Can\'t update category ' . $category->name);
    }

    public function delete(Category $category)
    {
    $name = $category->name;
    
    if($category->delete())
    {
        return redirect(session('previous_page'))->with('danger', "Category $name succesfully deleted");
    }
    return redirect(session('previous_page'))->with('danger', "Can\'t delete Category");
  }
}

