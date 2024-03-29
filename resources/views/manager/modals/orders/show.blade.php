<!-- Pop Out Modal -->
<div class="modal fade" id="modal-popout-show{{$order->id}}" tabindex="-1" aria-labelledby="modal-popout"
     style="display: none;"
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

               <table class="table  table-striped table-vcenter js-dataTable-full">
                  <thead>
                  <tr>
                     <th class="text-center">ID | NAME</th>
                     <th>PRICE</th>
                     <th>COUNT</th>
                     <th>TOTAL</th>
                     <th class="text-center" style="width: 15%;">IMAGE</th>
                  </tr>
                  </thead>
                  <tbody>
                  <div class="row p-3">
                     <div class="col-6">
                        Customer Name: <h5>{{$order->user->name}}</h5>
                     </div>
                     <div class="col-6">
                        Customer Phone: <h5><a href="tel:{{$order->user->phone}}">{{$order->user->phone}}</a></h5>
                     </div>
                     <div class="col-6">
                        Confirmed At: <h5>{{$order->created_at}}</h5>
                     </div>
                     <div class="col-6">
                        Total Sum: <h3>{{$order->formattedSum()}} sum</h3>
                     </div>
                  </div>
                  <h4>Order Products:</h4>
                  @foreach ($order->products as $product)
{{--                  {{dump($product)}}--}}
                     <tr>
                        <td class="text-center">{{ $product->id }}
                           <hr> {{ $product->name }} <code> {{$product->art}}</code></td>
                        <td>{{ $product->price }} sum</td>
                        <td>{{ $product->pivot->count }}</td>
                        <td>{{$product->pivot->amount}} sum</td>
                        <td class="text-center">
                           <img class="img-fluid options-item" src="{{ asset('storage/'.$product->image) }}"
                                alt="">
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

