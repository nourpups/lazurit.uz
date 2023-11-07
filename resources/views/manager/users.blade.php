@extends('manager.layouts.manager')

@section('title', 'Users')

@section('content')
   <!-- Dynamic Table Full -->
   <div class="block-rounded block">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Users table
         </h3>
      </div>
      <div class="block-content block-content-full">
         <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
         <table class=" table-striped table-vcenter js-dataTable-full table">
            <thead>
            <tr>
               <th class="text-center">ID</th>
               <th class="">Role</th>
               <th>NAME</th>
               <th>PHONE</th>
               <th class="text-center" style="width: 15%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($users as $user)
               <tr>
                  <td class="text-center">{{ $user->id }}</td>
                  <td class="fw-semibold text-uppercase"><i
                        class="fa fa-user{{$user->is_admin ? '-shield' : ''}}"></i> {{ $user->is_admin ? 'Admin' : 'User' }}
                  </td>
                  <td class="fw-semibold ">{{ $user->name }}</td>
                  <td class="fw-semibold">{{ $user->phone }}</td>
                  <td>

                     <button type="button" class="btn btn-danger w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-delete{{ $user->id }}">
                        <i class="fa fa-trash"></i> Delete
                     </button>
                     <button type="button" class="btn btn-info w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-make_admin{{ $user->id }}">
                        <i class="fa fa-user-shield"></i> Make Admin
                     </button>

                  </td>

               </tr>
            @endforeach

            </tbody>
         </table>
      </div>
      {{ $users->links() }}
   </div>
   <!-- END Dynamic Table Full -->
@endsection

@section('modals')

   @foreach ($users as $user)
      @include('manager.modals.users.delete', ['user' => $user])
      @include('manager.modals.users.make_admin', ['user' => $user])
   @endforeach
@endsection
