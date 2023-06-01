@foreach ($categories as $category)
   <li><a href="{{route('catalog', $category)}}">{{$category->name}}</a></li>
@endforeach
