<div class="col-lg-3 col-md-3 col-sm-4 col-6">
   <div class="product-wrap mb-35" data-aos="fade-up">
      <div class="product-img img-zoom mb-25">
{{--@dd($product->slug, $product->art)--}}
         <a href="{{ route('product', [$product->category, $product]) }}">
            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
         </a>
      </div>
      <div class="product-content">
         <h3><a href={{ route('product', [$product->category, $product]) }}>{{ $product->name }} {{$product->art}}</a></h3>
         <div class="product-price">
            {{-- <span class="old-price">$ {{ ceil($product['price'] * 1.25) }}</span> --}}
{{--            <span class="new-price price-format">{{ $product->price}} sum</span>--}}
         </div>
      </div>
   </div>
</div>
