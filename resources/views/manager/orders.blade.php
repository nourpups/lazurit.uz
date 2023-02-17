@extends('manager.layouts.manager')

@section('title', 'Orders || glossy.uz')

@section('content')
    <!-- Dynamic Table Full -->
    <div class="block block-rounded" style="margin:  4rem 0 0 0">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Orders table
            </h3>
        </div>
        <div class="block-content block-content-full">
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th>NAME</th>
                        <th class="d-none d-sm-table-cell">PHONE</th>
                        <th class="d-none d-sm-table-cell">TOTAL PRICE</th>
                        <th class="d-none d-sm-table-cell" style="width: 15%;">CONFIRMED AT</th>
                        <th class="text-center" style="width: 15%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($orders as $order)
                        <tr>
                            <td class="text-center">{{ $order->id }}</td>
                            <td class="fw-semibold text-uppercase">{{ $order->user->name }}</td>
                            <td class="d-none d-sm-table-cell">{{ $order->user->phone }}</td>
                            <td class="">${{ $order->total_sum() }}</td>
                            <td class="fw-semibold">
                                {{$order->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y')}}
                            </td>
                            <td class="d-none d-sm-table-cell">

                                <button type="button" class="btn btn-alt-primary mb-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#modal-popout-show{{ $order->id }}"> <i class="fa fa-eye"></i> Show details
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

