<!DOCTYPE html>
<html lang="en">


    <!-- Mirrored from phpstack-1384472-5121645.cloudwaysapps.com/template/html/ki-admin/template/basic_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jul 2025 16:42:30 GMT -->

    <head>
        <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
        <meta content="IE=edge" http-equiv="X-UA-Compatible">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Multipurpose, super flexible, powerful, clean modern responsive bootstrap 5 admin template"
            name="description">
        <meta
            content="admin template, ki-admin admin template, dashboard template, flat admin template, responsive admin template, web app"
            name="keywords">
        <meta content="la-themes" name="author">
        <link href="../assets/images/logo/favicon.png" rel="icon" type="image/x-icon">
        <link href="../assets/images/logo/favicon.png" rel="shortcut icon" type="image/x-icon">

        <title>Basic Table | ki-admin - Premium Admin Template</title>

        <!--font-awesome-css-->
        <link href="../assets/vendor/fontawesome/css/all.css" rel="stylesheet">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/" rel="preconnect">
        <link crossorigin href="https://fonts.gstatic.com/" rel="preconnect">
        <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&amp;display=swap"
            rel="stylesheet">

        <!-- tabler icons-->
        <link href="{{ asset('backend/assets/vendor/tabler-icons/tabler-icons.css') }}" rel="stylesheet" type="text/css">

        <!--flag Icon css-->
        <link href="{{ asset('backend/assets/vendor/flag-icons-master/flag-icon.css') }}" rel="stylesheet" type="text/css">

        <!-- Bootstrap css-->
        <link href="{{asset('backend/assets/vendor/bootstrap/bootstrap.min.css')}}" rel="stylesheet" type="text/css">

        <!-- Data Table css-->
        <link href="{{asset('backend/assets/vendor/datatable/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css">

        <!-- simplebar css-->
        <link href="{{asset('backend/assets/vendor/simplebar/simplebar.css')}}" rel="stylesheet" type="text/css">

        <!-- App css-->
        <link href="{{asset('backend/assets/css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Responsive css-->
        <link href="{{ asset('backend/assets/css/responsive.css') }}" rel="stylesheet" type="text/css">

    </head>

    <body>
        <div class="app-wrapper">

            @include('backend.layouts.components.sidebar')

         

            <div class="app-content">
                <div>

                  @include('backend.layouts.components.header')
                    

                    <!-- Body main section starts -->
                    <main>

                      @section('main')

                        
                      
                      @show

                    </main>
                    <!-- Body main section ends -->

                    @include('backend.layouts.components.footer')

                </div>
            </div>

        </div>


        <!--customizer-->
        <div id="customizer"></div>

        <!-- latest jquery-->
        <script src="{{asset('backend/assets/js/jquery-3.6.3.min.js')}}"></script>

        <!-- latest jquery-->
        <script src="{{ asset('backend/assets/vendor/datatable/jquery.dataTables.min.js') }}"></script>

        <!-- Bootstrap js-->
        <script src="{{ asset('backend/assets/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>

        <!-- Simple bar js-->
        <script src="{{ asset('backend/assets/vendor/simplebar/simplebar.js') }}"></script>

        <!-- phosphor js -->
        <script src="{{ asset('backend/assets/vendor/phosphor/phosphor.js') }}"></script>

        <!-- data table js-->
        <script src="{{ asset('backend/assets/js/data_table.js') }}"></script>

        <!-- table-js  -->
        <script src="{{ asset('backend/assets/js/table.js') }}"></script>

        <!-- App js-->
        <script src="{{ asset('backend/assets/js/script.js') }}"></script>

        <!-- Customizer js-->
        <script src="{{ asset('backend/assets/js/customizer.js') }}"></script>

    </body>


    <!-- Mirrored from phpstack-1384472-5121645.cloudwaysapps.com/template/html/ki-admin/template/basic_table.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 06 Jul 2025 16:42:31 GMT -->

</html>
