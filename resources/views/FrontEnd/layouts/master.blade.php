<!DOCTYPE html>
<html>


@include('FrontEnd.layouts.head')


<body>

    <!-- Start Header -->
   @include('FrontEnd.layouts.navbar')
    <!-- End Header-->




    @yield('content')


    {{-- footer --}}
    @include('FrontEnd.layouts.footer')
    <!-- End Footer -->




   @include('FrontEnd.layouts.scripts')
</body>

</html>
