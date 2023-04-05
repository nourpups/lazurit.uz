<div class="row">
  @foreach ($categories as $category)
    <div class="col-sm-3 col-6" style="padding: 10px">
      <div class="banner-wrap" data-aos="fade-up" data-aos-delay="200">
        <a href="{{ route('catalog', $category->name) }}"><img  src="{{ asset('storage/' . $category->image) }}"
            alt=""></a>
        <div class="banner-content-11">
          <h3>{{ $category->name }}</h3>
        </div>
      </div>
    </div>
  @endforeach
</div>
