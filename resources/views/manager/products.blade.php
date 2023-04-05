@extends('manager.layouts.manager')

@section('title', 'Products || glossy.uz')

@section('content')
    <!-- Dynamic Table Full -->
    <div class="block block-rounded">
        <div class="block-header block-header-default">
            <h3 class="block-title">
                Products table
            </h3>

            <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal" data-bs-target="#modal-popout-store">
                <i class="fa fa-plus-circle"></i> Add Product
            </button>
        </div>
        <div class="block-content block-content-full">
            <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _js/pages/be_tables_datatables.js -->
            <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                <thead>
                    <tr>
                        <th class="text-center">ID</th>
                        <th style="width: 12%;">NAME</th>
                        <th class="d-none d-sm-table-cell">DESCRIPTION</th>
                        <th class="d-none d-sm-table-cell" style="width: 12%;">PRICE</th>
                        <th class="d-none d-sm-table-cell" style="width: 25%;">IMAGE</th>
                        <th class="text-center" style="width: 13%;">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach ($products as $product)
                        <tr>
                            <td class="text-center">{{ $product->id }}</td>
                            <td class="fw-semibold">{{ $product->name }}</td>
                            <td class="d-none d-sm-table-cell">{{ $product->description }}</td>
                            <td class="fw-semibold">{{ number_format($product->price,0,'',' ')}} sum</td>
                            <td class="text-center">
                                <img class="img-fluid options-item" src="{{ asset('storage/'.$product->image) }}" alt="">
                            </td>
                            <td class="d-none d-sm-table-cell">

                                <a class="btn btn-alt-primary mb-2 w-100" href="{{ route('product.edit', $product) }}"> <i class="fa fa-pen"></i> Edit
                                </a>

                                <button type="button" class="btn btn-danger mb-2 w-100" data-bs-toggle="modal"
                                    data-bs-target="#modal-popout-delete{{ $product->id }}"><i class="fa fa-trash"></i> Delete
                                </button>

                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        {{$products->links()}}
    </div>
    <!-- END Dynamic Table Full -->
@endsection

@section('modals')
  @include('manager.modals.products.store', ['categories' => $categories])

  @foreach ($products as $product)
      {{-- @include('manager.modals.products.edit',['product' => $product]) --}}
      @include('manager.modals.products.delete',['product' => $product])
  @endforeach

@endsection
@section('js')
<script>

</script>
@endsection
