@foreach ($categories as $cat)
<li><a href="{{route('catalog', $cat->name)}}">{{$cat->name}}</a></li>
@endforeach
