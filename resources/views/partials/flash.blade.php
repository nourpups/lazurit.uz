
@if (session('success'))
  <div class="alert alert-success fade show modal-position text-center">
    {{ session('success') }}
  </div>
@endif
@if (session('warning'))
  <div class="alert alert-warning fade show modal-position text-center">
    {{ session('warning') }}
  </div>
@endif
@if (session('danger'))

  <div class="alert alert-danger fade show modal-position text-center">
    {{ session('danger') }}
  </div>
@endif
@if (session('login'))
  <div class="alert alert-success fade show modal-position text-center">
    {{ session('login') }}
  </div>
@endif
