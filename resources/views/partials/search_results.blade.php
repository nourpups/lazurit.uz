@if($results->isEmpty())
   <div class="fs-5 text-center mt-md-3 mt-1">
      <i>{{__('Nothing found...')}}</i>
   </div>
@else
   @foreach ($results as $result)

      <div class="col-sm-6 col-lg-6 col-12 p-1">
         <a href="{{route('product', [$result->category, $result])}}">
            <div class="search-product-box d-flex">
               <div class="search-image">
                  <img src="{{asset('storage/'.$result->image)}}" alt="{{$result->name}}">
               </div>
               <div class="search-description">
                  <div class="search-product-name">
                     {{$result->name}}
                  </div>
                  <div class="search-product-art">
                     <span class="text-muted small"> Art. {{$result->art}}</span>
                  </div>
{{--                  <div class="search-product-price    new-price">--}}
{{--                     {{$result->formattedPrice()}} sum--}}
{{--                  </div>--}}
               </div>
            </div>
         </a>
      </div>

   @endforeach

   {{$results->links('pagination::bootstrap-4-search')}}

@endif
