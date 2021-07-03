<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>PATTHOBOI - @yield('title', 'FIND YOUR BOOK')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta content="Patthoboi.com" name="description" />
        <meta content="legenditinstitute.com" name="author" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />

        <!-- App favicon -->
        <link rel="shortcut icon" href="{{ asset('admin') }}/images/favicon.ico">

        <!-- App css -->
        <link href="{{ asset('admin') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/metismenu.min.css" rel="stylesheet" type="text/css" />
        <link href="{{ asset('admin') }}/css/style.css" rel="stylesheet" type="text/css" />

        <script src="{{ asset('admin') }}/js/modernizr.min.js"></script>

    </head>


    <body class="bg-accpunt-pages">

        <!-- HOME -->
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="wrapper-page">

                            @yield('main_content')
                            
                            <!-- end card-box-->


                        </div>
                        <!-- end wrapper -->

                    </div>
                </div>
            </div>
          </section>
          <!-- END HOME -->



        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="{{ asset('admin') }}/js/jquery.min.js"></script>
        <script src="{{ asset('admin') }}/js/popper.min.js"></script><!-- Popper for Bootstrap -->
        <script src="{{ asset('admin') }}/js/bootstrap.min.js"></script>
        <script src="{{ asset('admin') }}/js/metisMenu.min.js"></script>
        <script src="{{ asset('admin') }}/js/waves.js"></script>
        <script src="{{ asset('admin') }}/js/jquery.slimscroll.js"></script>

        <!-- App js -->
        <script src="{{ asset('admin') }}/js/jquery.core.js"></script>
        <script src="{{ asset('admin') }}/js/jquery.app.js"></script>

    </body>
</html>
