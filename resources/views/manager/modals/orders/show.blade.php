<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-show{{$order->id}}" tabindex="-1" aria-labelledby="modal-popout" style="display: none;"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-popout modal-lg" role="document">
        <div class="modal-content">
            <div class="block block-rounded shadow-none mb-0">
                <div class="block-header block-header-default">
                    <h3 class="block-title">Order № {{$order->id}}</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-bs-dismiss="modal" aria-label="Close">
                            <i class="fa fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content fs-sm">

                    <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                        <thead>
                            <tr>
                                <th class="text-center">ID</th>
                                <th>NAME</th>
                                <th class="d-none d-sm-table-cell">PRICE</th>
                                <th>COUNT</th>
                                <th class="d-none d-sm-table-cell">TOTAL</th>
                                <th class="text-center" style="width: 15%;">IMAGE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <div class="mb-3">
                            <div style="font-size:30px"><span style="font-size:22px">Customer name:  </span><span class="fw-bold text-uppercase">{{$order->user->name}}</span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Customer phone:  </span><span class="fw-bold text-uppercase">{{$order->user->phone}}</span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Confirmed at:  </span><span class="fw-bold text-uppercase">{{$order->created_at->timezone('Asia/Tashkent')->format('H:i d/m/Y')}}</span></div>
                            <div style="font-size:30px"><span style="font-size:22px">Total sum:  </span><span class="fw-bold text-uppercase">${{$order->total_sum()}}</span></div>
                        </div>
                            <h4>Order Products:</h4>
                            @foreach ($order->products as $product)
                                <tr>
                                    <td class="text-center">{{ $product->id }}</td>
                                    <td class="fw-semibold">{{ $product->name }}</td>
                                    <td class="d-none d-sm-table-cell">${{ $product->price }}</td>
                                    <td class="d-none d-sm-table-cell">{{ $product->pivot->count }}</td>
                                    <td class="d-none d-sm-table-cell">${{ $product->price_for_count() }}</td>
                                    <td class="text-center">
                                        <img class="img-fluid options-item" src="{{ asset('storage/'.$product->image) }}" alt="">
                                    </td>

                                </tr>
                            @endforeach

                        </tbody>
                    </table>
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
    </div>
</div>

