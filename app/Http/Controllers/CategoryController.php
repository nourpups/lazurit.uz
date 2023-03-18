<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller {
    public function store(Request $request)
    {
        $store = request()->all();
        $category_name = $request[app()->getLocale()]['name'];

        if($request->hasFile('image'))
        {
        $ext = $request->file('image')->getClientOriginalExtension();
        $image_file_name = str_replace(' ', '_', $category_name) . '_image_' . time() . '.' . $ext;
        $store['image'] = $request->file('image')->storeAs('categories/image', $image_file_name, 'public');
        }

        if(Category::create($store))
        {
        return redirect()->back()->with('success', 'Category ' . $category_name . ' succesfully created');
        }

        unlink(storage_path('app/public/').$image_file_name);
        return redirect()->back()->with('fail', 'Can\'t create Category ' . $category_name);
  }
  public function edit(Request $request, Category $category)
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

        return redirect()->back()->with('success', 'category ' . $category->name . ' succesfully updated');
    }
    unlink(storage_path('app/public/').$image_file_name);

    return redirect()->back()->with('fail', 'Can\'t update category ' . $category->name);
    }

    public function delete(Category $category)
    {
   $category->delete();

    if($category)
    {
        return redirect()->back()->with('success', 'category succesfully deleted');
    }
    return redirect()->back()->with('fail', 'Can\'t delete Category');
  }
}

