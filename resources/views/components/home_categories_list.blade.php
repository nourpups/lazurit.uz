@foreach ($categories as $category)
    <div class="col-sm-4 col-4">
        <div class="banner-wrap mb-30" data-aos="fade-up" data-aos-delay="200">
            <a href="{{route('catalog', $category->name)}}"><img src="{{ asset('storage/'.$category->image) }}" alt=""></a>
            <div class="banner-content-11">
                <h3>{{ $category->name }}</h3>
            </div>
        </div>
    </div>
@endforeach
