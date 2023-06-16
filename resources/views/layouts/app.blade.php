<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="SemiColonWeb">
    <meta name="description" content="Get Canvas to build powerful websites easily with the Highly Customizable &amp; Best Selling Bootstrap Template, today.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=PT+Serif:ital@0;1&display=swap" rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{{asset('frontend/style.css')}}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{{asset('frontend/css/font-icons.css')}}">

    <!-- Plugins/Components CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/swiper.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('frontend/css/custom.css')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title -->
    <title>Canvas | The Multi-Purpose HTML5 Template</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
</head>

<body class="stretched">

    <!-- Document Wrapper -->
    <div id="wrapper">
        @include('inn.header')
        {{-- @include('inn.section') --}}
        @yield('content')
        @include('inn.footer')
    </div><!-- #wrapper end -->

    <!-- Go To Top -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- Javascripts -->
    <script src="{{asset('frontend/js/functions.js')}}"></script>
    <script src="{{asset('frontend/js/sweetalert2.js')}}"></script>

    <script>
        function showFrontendAlert(type, message) {
            Swal.fire({
                position: 'center'
                , icon: type
                , title: message
                , showConfirmButton: false
                , timer: 1500
            })
        }

    </script>
    @if (Session::has('message'))
    <script>
        showFrontendAlert('{{ Session::get('
            errormsg ') }}', '{{ Session::get('
            message ') }}');

    </script>
    @endif
    <script type="text/javascript">
        var url = "{{ url('/lang') }}";
        $(".Langchange").change(function() {
            window.location.href = url + "?lang=" + $(this).val();
        });

    </script>
</body>

</html>
