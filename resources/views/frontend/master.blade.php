<!--
    Author : Swarnali Mollick
    Date   : 09-April-2021
-->

<!DOCTYPE html>
<html lang="en">

@include('frontend.head')

<body>
    @include('frontend.header')
    

    @yield('main_content')

    {{-- @include('frontend.booking') --}}
    {{-- @yield('booking') --}}

    @include('frontend.subscribe')

    @include('frontend.footer')

    @include('frontend.scroll')

    @include('frontend.script')



</body>

</html>