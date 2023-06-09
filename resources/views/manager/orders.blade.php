@extends('manager.layouts.manager')

@section('title', 'Orders')

@section('content')
   <!-- Dynamic Table Full -->
   <div class="block block-rounded">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Orders table
         </h3>
      </div>
      <div class="block-content block-content-full">
         <table class="table  table-striped table-vcenter js-dataTable-full">
            <thead>
            <tr>
               <th class="text-center">ID</th>
               <th class="text-center text-sm-start">NAME | PHONE</th>
               <th>TOTAL SUM</th>
               <th style="width: 15%;">CONFIRMED AT</th>
               <th class="text-center" style="width: 15%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($orders as $order)
               <tr>
                  <td class="text-center">{{ $order->id }}</td>
                  <td class="fw-semibold text-center text-sm-start">{{ $order->user->name }}
                     <hr>
                     <a href="tel:{{ $order->user->phone }}">{{ $order->user->phone }}</a></td>
                  <td class="">{{ $order->formattedSum() }} sum</td>
                  <td class="fw-semibold">
                     {{$order->createdAt()}}
                  </td>
                  <td>

                     <button type="button" class="btn btn-alt-primary mb-2 w-100" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-show{{ $order->id }}"><i class="fa fa-eye"></i> Show
                        details
                     </button>

                  </td>

               </tr>
            @endforeach

            </tbody>
         </table>
      </div>
      {{$orders->links()}}
   </div>
   <!-- END Dynamic Table Full -->
@endsection

@section('modals')
   @foreach ($orders as $order)
      @include('manager.modals.orders.show',['order' => $order])
   @endforeach
@endsection

