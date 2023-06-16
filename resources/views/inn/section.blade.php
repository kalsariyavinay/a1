<section id="slider" class="slider-element slider-parallax swiper_wrapper min-vh-60 min-vh-md-100 include-header">

    <div class="slider-inner">



        <div class="swiper-container swiper-parent">

            <div class="swiper-wrapper">

                <div class="swiper-slide dark">

                    <div class="container">

                        <div class="slider-caption slider-caption-center">

                            <h2 data-animate="fadeInUp">Welcome to Canvas</h2>

                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Create just what you need for your Perfect Website. Choose from a wide range of Elements &amp; simply put them on your own Canvas.</p>

                        </div>

                    </div>

                    <div class="swiper-slide-bg" style="background-image: url('{{ asset('frontend/images/slider/swiper/1.jpg')}}');"></div>

                </div>

                <div class="swiper-slide dark">

                    <div class="container">

                        <div class="slider-caption slider-caption-center">

                            <h2 data-animate="fadeInUp">Beautifully Flexible</h2>

                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>

                        </div>

                    </div>

                    <div class="video-wrap no-placeholder">

                        <video id="slide-video" poster="{{ asset('frontend/images/videos/explore-poster.jpg')}}" preload="auto" loop autoplay muted playsinline>

                            <source src='{{ asset('frontend/images/videos/explore.webm')}}' type='video/webm'>

                            <source src='{{ asset('frontend/images/videos/explore.mp4')}}' type='video/mp4'>

                        </video>

                        <div class="video-overlay" style="background-color: rgba(0,0,0,0.55);"></div>

                    </div>

                </div>

                <div class="swiper-slide">

                    <div class="container">

                        <div class="slider-caption">

                            <h2 data-animate="fadeInUp">Great Performance</h2>

                            <p class="d-none d-sm-block" data-animate="fadeInUp" data-delay="200">You'll be surprised to see the Final Results of your Creation &amp; would crave for more.</p>

                        </div>

                    </div>

                    <div class="swiper-slide-bg" style="background-image: url('{{ asset('frontend/images/slider/swiper/3.jpg')}}'); background-position: center top;"></div>

                </div>

            </div>

            <div class="slider-arrow-left"><i class="uil uil-angle-left-b"></i></div>

            <div class="slider-arrow-right"><i class="uil uil-angle-right-b"></i></div>

        </div>



        <a href="#" data-scrollto="#content" class="one-page-arrow dark"><i class="bi-chevron-down infinite animated fadeInDown"></i></a>



    </div>

</section>