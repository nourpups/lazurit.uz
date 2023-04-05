@extends('manager.layouts.manager')

@section('title', "Edit Category $cat->name")

@section('content')
  <form style="margin: 4.2rem; padding: 3rem 0" action="{{ route('category.update', $cat) }}" enctype="multipart/form-data"
    method="POST">
    @csrf
    @method('PUT')
    <div class="d-flex">
      <div>
        <a class="btn btn-secondary" href="{{ session('previous_page') }}"><i class="fa fa-angle-left"></i> Go Back </a>
      </div>
      <h1 class="ms-auto">Edit Category "<b>{{ $cat->name }}</b>"</h1>
    </div>
    @foreach (config('translatable.locales') as $locale)
      <div class="form-floating mb-4">
        <input type="text" class="form-control @error($locale . '.name') is-invalid @enderror"
          name="{{ $locale }}[name]" value="{{ old($locale . '.name', $cat->translate($locale)->name) }}">
        <label class="form-label">Name [{{ $locale }}]</label>
        @error($locale . '.name')
          <div id="val-password-error" class="invalid-feedback animated fadeIn">
            {{ $message }}
          </div>
        @enderror
      </div>
    @endforeach
    <div class="form-floating mb-4">
      <input type="file" class="form-control @error('image') is-invalid @enderror" name="image"
        placeholder="Category Image">
      <label class="form-label">Category Image</label>
      @error('image')
        <div id="val-password-error" class="invalid-feedback animated fadeIn">
          {{ $message }}
        </div>
      @enderror
    </div>
    <button type="submit" class="btn btn-alt-primary">
      Update
    </button>
  </form>
@endsection
