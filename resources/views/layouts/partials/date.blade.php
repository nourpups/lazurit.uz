@php
$today = now()
            ->settings(
                [
                    'locale' => app()->getLocale(),
                ]
            );
        // LL is macro placeholder for MMMM D, YYYY (you could write same as dddd, MMMM D, YYYY)
        $dateMessage = $today->isoFormat('dddd, LL');
@endphp
{{ $dateMessage }}
