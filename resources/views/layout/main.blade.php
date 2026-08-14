<!DOCTYPE html>
<html lang="en">

@include('partials.head')

<body>

    <!--~~~~~~~~~Start Preloader~~~~-->
    {{-- <div class="preloader">
        <div class="drawing" id="loading">
            <div class="loading-dot"></div>
        </div>
    </div> --}}
    <!--~~~~~ End Preloader ~~~-->


    <div class="cursor"></div>
    <div class="cursor-follower"></div>


    <!--~~~~ Start Header ~~~~~~~-->
    @include('partials.header')
    <!--~~~~~~~~~~  End Header ~~~~~~~-->

    @yield('content')

    <!--~~~~~~~~~  Start Footer ~~~~~~~~-->
    @include('partials.footer')
    <!--~~~~~~~ End Footer ~~~~~~~~~~~-->

    @include('partials.script')

</body>

</html>
