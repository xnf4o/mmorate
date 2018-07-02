@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            {{--{{ config('app.name') }}--}}
            <img src="https://camo.githubusercontent.com/17319f3103f4fdd4b66e8cf3cf2f6b5b9e284dde/68747470733a2f2f696d616765732e76666c2e72752f69692f313532373932393236372f34373335636231622f32313936363930352e706e67" data-canonical-src="https://images.vfl.ru/ii/1527929267/4735cb1b/21966905.png" style="max-width:100%;">
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            &copy; {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
