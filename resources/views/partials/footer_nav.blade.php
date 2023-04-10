@foreach ($categories as $category)
  <li><a href="{{ route('catalog', $category->name) }}">{{ $category->name }}</a></li>
@endforeach
