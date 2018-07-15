@include('layouts.default.header')
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Home - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('assets/libs/bootstrap/4.0.0/css/bootstrap.min.css')}} ">
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->

    {{--add the asset function into the css path--}}
    <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/custom-styles.css')}}" rel="stylesheet">

</head>

<body>


<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">


            @yield('content')
           {{-- @yield('contentContact')
            @yield('contentAbout')
            @yield('contentServices')--}}

        </div>


       {{-- @yield('contentSidebar')--}}
        {{--include option every page apper--}}
       {{-- @include('layouts.default.sidebar')--}}

    <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Side Bar Contents -->
            <div class="card my-4">
                <h5 class="card-header">Side Bar</h5>
                <div class="card-body">
                    <p>
                        You can put anything you want inside of these side widgets. They are easy to use, and feature
                        the new Bootstrap 4 card containers!
                    </p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet</li>
                        <li>Aliquam tincidunt risus.</li>
                        <li>Vestibulum auctor neque.</li>
                        <li>Pellentesque habitant.</li>
                        <li>Mauris placerat eleifend</li>
                        <li>Donec non enim in turpis</li>
                        <li>Aliquam quam lectus</li>
                    </ul>
                    <p>
                        <strong>Pellentesque habitant morbi tristique</strong> senectus et netus et malesuada fames ac
                        turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante.
                    </p>

                </div>
            </div>

        </div>


    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

@include('layouts.default.footer')

<!-- Bootstrap core JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="{{asset('assets/libs/jquery/3.3.1/jquery.min.js')}}"></script>
<script src="{{asset('assets/libs/bootstrap/4.0.0/js/bootstrap.min.js')}}"></script>


</body>

</html>
