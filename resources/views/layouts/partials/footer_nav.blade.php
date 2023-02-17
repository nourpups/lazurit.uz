<div class="footer-widget footer-list mb-40">
    <h3 class="footer-title">{{__('Catalog')}}</h3>
    <ul>
        @foreach ($categories as $category)

            <li><a href="{{route('catalog', $category->name)}}">{{$category->name}}</a></li>
        @endforeach
    </ul>
</div>
