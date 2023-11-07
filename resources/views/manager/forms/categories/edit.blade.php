@extends('manager.layouts.manager')

@section('title', "Edit Category $category->name")

@section('content')
   <form class="p-4" action="{{ route('categories.update', $category) }}"
         enctype="multipart/form-data"
         method="POST">
      @csrf
      @method('PUT')
      <div class="row gap-3">
         <div class="col-12 col-sm-6">
            <a class="btn btn-secondary" href="{{ session('previous_page') }}">
               <i class="fa fa-angle-left"></i> Go Back
            </a>
         </div>
         <div class="col-12 col-sm-6 text-sm-end">
            <h1 class="ms-auto">Edit Category "<b>{{ $category->name }}</b>"</h1>
         </div>

      </div>
      @foreach (config('translatable.locales') as $locale)
         <div class="form-floating mb-4">
            <input type="text" class="form-control "
                   name="{{ $locale }}[name]" value="{{ old($locale . '.name', $category->translate($locale)->name) }}">
            <label class="form-label">Name [{{ $locale }}]</label>

         </div>
      @endforeach
      <div class="mb-4">
         <label class="form-label">Category Image</label>
         <input type="file" class="form-control " name="image">
      </div>
      <button type="submit" class="btn btn-alt-primary">
         Update Category
      </button>
   </form>
@endsection
