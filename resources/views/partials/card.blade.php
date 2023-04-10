<div class="col-lg-3 col-md-3 col-sm-4 col-6">
    <div class="product-wrap mb-35" data-aos="fade-up">
        <div class="product-img img-zoom mb-25">
            <a href="{{ route('product', $product['id']) }}">
                <img src="{{ asset('storage/' . $product['image']) }}" alt="{{ $product['name'] }}">
            </a>
        </div>
        <div class="product-content">
            <h3><a href={{ route('product', $product['id']) }}>{{ $product['name'] }}</a></h3>
            <div class="product-price">
                {{-- <span class="old-price">$ {{ ceil($product['price'] * 1.25) }}</span> --}}
                <span class="new-price">{{ number_format($product->price,0,'',' ')}} sum</span>
            </div>
        </div>
    </div>
</div>
