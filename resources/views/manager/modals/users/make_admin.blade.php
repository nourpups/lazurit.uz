<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-make_admin{{ $user->id }}" tabindex="-1" aria-labelledby="modal-popout"
  style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-popout" role="document">
    <div class="modal-content">
      <div class="block-rounded mb-0 block shadow-none">
        <div class="block-header block-header-default">
          <h3 class="block-title">Make Admin</h3>
          <div class="block-options">
            <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
              <i class="fa fa-times"></i>
            </button>
          </div>
        </div>
        <div class="block-content fs-sm">
          <div class="block-content">
            <div class="row">
              <div class="col-lg-12">
                Name: <h4> {{ $user->name }} </h4>
                Phone: <h4>{{ $user->phone }}</h4>

              </div>
            </div>
          </div>
        </div>
        <div class="block-content block-content-full block-content-sm border-top text-end">
          <button type="button" class="btn btn-alt-danger" data-bs-dismiss="modal">
            No, don't make
          </button>
          <a href="{{ route('user.make_admin', $user) }}" class="btn btn-alt-primary">
            Yes, make
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
