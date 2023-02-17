@foreach(config('app.available_locales') as $locale_name => $available_locale)
  @if (app()->getLocale() !== $available_locale)
  <a href="{{ route('language', $available_locale)}}">
    @if($locale_name === 'English')
    English <img src="{{asset('assets/images/flags/uk32.png')}}" alt="united kingdom flag icon">
    @else
    Русский <img src="{{asset('assets/images/flags/rus32.png')}}" alt="russia flag icon">
    @endif
  </a>
  @endif
@endforeach
