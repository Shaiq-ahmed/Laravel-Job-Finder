<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from technext.github.io/jobfinderportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 14:09:37 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
         <title>Job Portal </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="manifest" href="site.html">
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

		<!-- CSS here -->
        @include('home.css')

   </head>

   <body>
    <!-- Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="home/assets/img/logo/logo.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->
    @include('home.header')
    <main>

        <!-- slider Area Start-->
        @include('home.slider')
        <!-- slider Area End-->
        <!-- Our Services Start -->
       @include('home.ourservices')
        <!-- Our Services End -->
        <!-- Online CV Area Start -->
        @include('home.cv')
        <!-- Online CV Area End-->
        <!-- Featured_job_start -->
        @include('home.featuredjobs')
        <!-- Featured_job_end -->
        <!-- How  Apply Process Start-->
        @include('home.howtoapply')
        <!-- How  Apply Process End-->
        <!-- Testimonial Start -->
        @include('home.testimonials')
        <!-- Testimonial End -->
         <!-- Support Company Start-->
         @include('home.supportCompany')
        <!-- Support Company End-->
        <!-- Blog Area Start -->
        @include('home.blogArea')
        <!-- Blog Area End -->

    </main>
    @include('home.footer')
  @include('home.script')

    </body>

<!-- Mirrored from technext.github.io/jobfinderportal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 09 Dec 2022 14:09:50 GMT -->
</html>
