<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        
        <title>Client Side - @yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/ionicons/css/ionicons.min.css') }}">
        @stack('pre-styles')
        <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
        @stack('post-styles')
    </head>
    <body>
        @include('frontend._partials.navbar')
        <div class="wrapper" style>
            <div class="container" style="min-height: 516px;">
                <div class="blog-header">
                    <h1 class="blog-title"> @yield('blog-title')</h1>
                </div>

                <div class="row">
                    <div class="col-sm-8 blog-main">
                        @yield('content')
                    </div>
                </div>
            
            </div>
            @include('frontend._partials.footer')
        </div>

        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="{{ asset('css/bootstrap/js/bootstrap.min.js') }}"></script>
        @stack('scripts')
    </body>
</html>


