<!DOCTYPE html>
<html lang="en">
<head>

    @include('layouts.dashboard.partials.meta')

    <title>SIMAS-LH | SUL-SEL</title>

    @include('layouts.dashboard.partials.link')

</head>
<body>

    @include('layouts.dashboard.partials.navbar')
    

    <!--  BEGIN MAIN CONTAINER  -->
    <div class="main-container" id="container">

        <div class="overlay"></div>
        <div class="search-overlay"></div>

        <!--  BEGIN SIDEBAR  -->
        @include('layouts.dashboard.partials.sidebar')
        
        <!--  END SIDEBAR  -->
        
        <!--  BEGIN CONTENT AREA  -->
        @yield('content')
        <!--  END CONTENT AREA  -->


    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    @include('layouts.dashboard.partials.script')

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    @yield('script')
    

</body>
</html>