<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-delete{{$cat->id}}" tabindex="-1" aria-labelledby="modal-popout"
     style="display: none;"
     aria-hidden="true">
    <form action="{{ route('category.delete', $cat->id) }}" method="post">
        @csrf
        @method('DELETE')
        <div class="modal-dialog modal-dialog-popout" role="document">
            <div class="modal-content">
                <div class="block block-rounded shadow-none mb-0">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Delete category</h3>
                        <div class="block-options">
                            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                                <i class="fa fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="block-content fs-sm">
                        <div class="block-content p-3">
                            <div class="row">
                                <div class="col-lg-12">
                                    Name: <h4> {{ $cat->name }} </h4>

                                </div>
                                <div class="w-75">
                                    Image:
                                    <img class="img-fluid options-item" src="{{ asset('storage/'.$cat->image) }}"
                                         alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="block-content block-content-full block-content-sm text-end border-top">
                        <button type="button" class="btn btn-alt-secondary" data-bs-dismiss="modal">
                            No, don't delete
                        </button>
                        <button type="submit" class="btn btn-alt-danger" data-bs-dismiss="modal">
                            Yes, delete
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>

