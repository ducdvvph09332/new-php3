<!DOCTYPE html>
    <html lang="en">

    <!-- Mirrored from designreset.com/cork/ltr/demo4/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 05:27:18 GMT -->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">
        <title>@yield('title') </title>
        @include('admin.layout.commons.style')

    </head>
    <body>
        <!-- BEGIN LOADER -->
        <div id="load_screen"> <div class="loader"> <div class="loader-content">
            <div class="spinner-grow align-self-center"></div>
        </div></div></div>
        <!--  END LOADER -->

        <!--  BEGIN NAVBAR  -->
        @include('admin.layout.commons.navbar')
        <!--  END NAVBAR  -->

        <!--  BEGIN NAVBAR  -->
        @include('admin.layout.commons.second_navbar')
        <!--  END NAVBAR  -->

        <!--  BEGIN MAIN CONTAINER  -->
        <div class="main-container" id="container">

            <div class="overlay"></div>
            <div class="search-overlay"></div>

            <!--  BEGIN SIDEBAR  -->
            @include('admin.layout.commons.sidebar')
            <!--  END SIDEBAR  -->
            
            <!--  BEGIN CONTENT AREA  -->
            <div id="content" class="main-content">
                <div class="layout-px-spacing">

                    <div class="row layout-top-spacing">
                        @yield('content')
                    </div>

                </div>
                @include('admin.layout.commons.footer')
            </div>
            <!--  END CONTENT AREA  -->

        </div>
        <!-- END MAIN CONTAINER -->

        @include('admin.layout.scripts.foot')

    </body>

    <!-- Mirrored from designreset.com/cork/ltr/demo4/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 24 Sep 2020 05:28:38 GMT -->
    </html>