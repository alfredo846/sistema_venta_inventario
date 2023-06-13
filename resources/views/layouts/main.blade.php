<!DOCTYPE html>
<html lang="es">

@include('layouts.head')

@yield('head')


<body>
    <div id="container" class="effect aside-float aside-bright mainnav-lg footer-fixed navbar-fixed mainnav-fixed">
        
        @include('layouts.navbar')

        <div class="boxed">

            @yield('content')


            @include('layouts.sidebar')


        </div>

        

        @include('layouts.footer')

    </div>
    
    @include('layouts.script')

    @yield('script')


    

</body>
</html>
