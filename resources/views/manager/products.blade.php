@extends('manager.layouts.manager')

@section('title', 'Products || glossy.uz')

@section('content')

   <!-- Dynamic Table Full -->
   <div class="block-rounded block">
      <div class="block-header block-header-default">
         <h3 class="block-title">
            Products table
         </h3>
         <button type="button" class="btn btn-alt-primary" data-bs-toggle="modal"
                 data-bs-target="#modal-popout-store">
            <i class="fa fa-plus-circle"></i> Add Product
         </button>
      </div>
      <div class="block-content block-content-full">
         <table class=" table-striped table-vcenter js-dataTable-full table">
            <thead>
            <tr>
               <th style="width: 20%;" class="text-center">ID | ART.</th>
               <th>NAME</th>
               <th class="text-center" style="width: 25%;">PRICE | IMAGE</th>
               <th style="width: 13%;">ACTIONS</th>
            </tr>
            </thead>
            <tbody>

            @foreach ($products as $product)
               <tr>
                  <td class="text-center"><b>{{ $product->id }}</b>
                     <br>
                     <br>
                     <code>{{$product->art }}</code></td>
                  <td>
                     <span class="fw-semibold">{{ $product->name }}</span>
                  </td>
                  <td class="text-center">
                     <img class="img-fluid options-item" src="{{ asset('storage/' . $product->image) }}" alt="">
                     <b>{{ $product->formattedPrice() }} sum</b>
                  </td>
                  <td>

                     <a class="btn btn-alt-primary w-100 mb-2" href="{{ route('product.edit', $product) }}">
                        <i class="fa fa-pen"></i> Edit
                     </a>

                     <button type="button" class="btn btn-danger w-100 mb-2" data-bs-toggle="modal"
                             data-bs-target="#modal-popout-delete{{ $product->id }}"><i class="fa fa-trash"></i>
                        Delete
                     </button>

                  </td>

               </tr>
            @endforeach

            </tbody>
         </table>
      </div>
      {{ $products->links() }}
   </div>
   <!-- END Dynamic Table Full -->
@endsection

@section('modals')
   @include('manager.modals.products.store', ['categories' => $categories])

   @foreach ($products as $product)
      {{-- @include('manager.modals.products.edit',['product' => $product]) --}}
      @include('manager.modals.products.delete', ['product' => $product])
   @endforeach

@endsection

