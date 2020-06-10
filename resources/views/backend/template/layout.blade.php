<!DOCTYPE html>
<html lang="en">
  <head>
    
    <!-- start:header -->
    @include('backend.include.header')
    <!-- end:header -->
    
    <!-- start:css -->
    @include('backend.include.css');
    <!-- end:css -->
  </head>

  <body>

    <!--  START: LEFT PANEL  -->
    @include('backend.include.menu')
    <!--  END: LEFT PANEL  -->

    <!--  START: HEAD PANEL  -->
    @include('backend.include.topbar')
    <!--  END: HEAD PANEL  -->

    <!--  START: RIGHT PANEL  -->
    @include('backend.include.message')
     <!-- END: RIGHT PANEL   -->

    <!--  START: MAIN PANEL -->

    @yield('dashboard-content')

    <!-- start:footer  -->
      @include('backend.include.footer')
      <!-- end:footer  -->
    </div><!-- br-mainpanel -->
    <!--  END: MAIN PANEL  -->

    <!-- start: script -->
    @include('backend.include.script')
    <!-- end: script -->
  </body>
</html>
