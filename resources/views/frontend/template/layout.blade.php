<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>    	
    
	    <!-- start:header -->
	    @include('frontend.include.header')
	    <!-- end:header -->
    
	    <!-- start:css -->
	    @include('frontend.include.css')
	    <!-- end:css -->



	    <!-- start: script -->
	    @include('frontend.include.script')
	    <!-- end: script -->

	    @stack('css')

	    @stack('script')
    </head>
    <body>
        <!-- quickview-modal -->
        @include('frontend.include.quick-modal')
        <!-- quickview-modal / end -->

        <!-- mobilemenu -->
        @include('frontend.include.mobile-menu')
        <!-- mobilemenu / end -->

        <!-- site -->
        <div class="site">
            <!-- mobile site__header -->
            @include('frontend.include.mobile-site-header')
            <!-- mobile site__header / end -->

            <!-- desktop site__header -->
            @include('frontend.include.desktop-site-header')
            <!-- desktop site__header / end -->

            <!-- site__body -->
            @yield('frontend-content')
            <!-- site__body / end -->

            <!-- site__footer -->
            @include('frontend.include.footer')
            <!-- site__footer / end -->
        </div>
        <!-- site / end -->
    </body>
</html>
