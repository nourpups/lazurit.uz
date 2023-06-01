@extends('manager.layouts.manager')

@section('title', "Edit Product $product->name")

@section('content')

   <form class="p-4" action="{{ route('product.update', $product) }}"
         enctype="multipart/form-data" method="POST">
      @csrf
      @method('PUT')
      <div class="row gap-3">
         <div class="col-12 col-sm-4">
            <a class="btn btn-secondary" href="{{ session('previous_page') }}">
               <i class="fa fa-angle-left"></i> Go Back
            </a>
         </div>
         <div class="col-12 col-sm-7 text-sm-end">
            <h2 class="ms-auto">Edit Product "<b>{{ $product->name}}</b> <code>{{$product->art }}</code>" </h2>
         </div>
      </div>
      @foreach (config('translatable.locales') as $locale)
         <div class="form-floating mb-4">
            <input type="text" class="form-control @error($locale . '.name') is-invalid @enderror"
                   name="{{ $locale }}[name]"
                   value="{{ old($locale . '.name', $product->translate($locale)->name) }}"
            >
            <label class="form-label">Name [{{ $locale }}]</label>
            @error($locale . '.name')
            <div id="val-password-error" class="invalid-feedback animated fadeIn">
               {{ $message }}
            </div>
            @enderror
         </div>
      @endforeach
      <div class="form-floating mb-4">
         <select class="form-select" name="category_id">
            @foreach ($categories as $cat)
               <option value="{{ $cat->id }}" {{ $cat->id == $product->category_id ? 'selected' : '' }}>
                  {{ $cat->name }}</option>
            @endforeach
         </select>
         <label class="form-label">Category</label>
      </div>
      <div class="form-floating mb-4">
         <input type="text" class="form-control @error('price') is-invalid @enderror"
                value="{{ old('price', $product->formattedPrice()) }}" name="price">
         <label class="form-label">Price</label>
         @error('price')
         <div id="val-password-error" class="invalid-feedback animated fadeIn">
            {{ $message }}
         </div>
         @enderror
      </div>
      <div class="mb-4">
         <label class="form-label">Product Image</label>
         <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
         @error('image')
         <div id="val-password-error" class="invalid-feedback animated fadeIn">
            {{ $message }}
         </div>
         @enderror
      </div>
      <button type="submit" class="btn btn-alt-primary">
         Update Product
      </button>
   </form>

@endsection
