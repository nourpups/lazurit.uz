<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-edit{{$product->id}}" tabindex="-1" aria-labelledby="modal-popout" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Edit Product</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">
                    <form action="{{ route('product.edit', $product->id) }}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PUT')
                        @foreach (config('translatable.locales') as $locale)
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control @error($locale.'.name') is-invalid @enderror" name="{{$locale}}[name]" value="{{old($locale.'.name', $product->translate($locale)->name)}}">
                            <label class="form-label">Name [{{$locale}}]</label>
                            @error($locale.'.name')
                                <div id="val-password-error" class="invalid-feedback animated fadeIn">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <textarea class="form-control @error($locale.'.description') is-invalid @enderror" name="{{$locale}}[description]" style="height: 200px">
                                {{old($locale.'.description', $product->translate($locale)->description)}}
                            </textarea>
                            <label class="form-label">Description [{{$locale}}]</label>
                            @error($locale.'.description')
                                <div id="val-password-error" class="invalid-feedback animated fadeIn">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        @endforeach
                        <div class="form-floating mb-4">
                            <select class="form-select" name="category_id">
                                @foreach ($categories as $cat)
                                <option value="{{$cat->id}}" {{ $cat->id == $product->category_id ? 'selected' : ''}}>{{$cat->name}}</option>
                                @endforeach
                            </select>
                            <label class="form-label">Category</label>
                        </div>
                        <div class="form-floating mb-4">
                            <input type="text" class="form-control @error('price') is-invalid @enderror" value="{{old('price', $product->price)}}" name="price">
                            <label class="form-label">Price</label>
                            @error('price')
                                <div id="val-password-error" class="invalid-feedback animated fadeIn">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <div class="form-floating mb-4">
                            <input type="file" class="form-control @error('image') is-invalid @enderror" name="image">
                            <label class="form-label">Product Image</label>
                            @error('image')
                                <div id="val-password-error" class="invalid-feedback animated fadeIn">
                                    {{$message}}
                                </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-alt-primary">
                            Done
                        </button>
                    </form>
                </div>
                <div class="block-content block-content-full block-content-sm text-end border-top">
                    <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
