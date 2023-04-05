@if(empty($search_result))
    <div class="fs-5 text-center mt-md-3 mt-1">
        <i>{{__('Nothing found...')}}</i>
    </div>
@else
@foreach ($search_result as $item)

    <div class="col-sm-6 col-lg-6 col-12 p-1">
        <a href="{{route('product', $item->id)}}">
            <div class="search-product-box d-flex">
                <div class="search-image">
                    <img src="{{asset('storage/'.$item->image)}}" alt="{{$item->name}}">
                </div>
                <div class="search-description">
                    <div class="search-product-name">
                        {{$item->name}}
                    </div>
                    <div class="search-product-price new-price">
                        {{number_format($item->price, 0, '', ' ')}} sum
                    </div>
                </div>
            </div>
        </a>
    </div>

@endforeach

{{$search_result->links('pagination::bootstrap-4')}}

@endif
