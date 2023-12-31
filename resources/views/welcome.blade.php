@extends('layouts.app')
@section('content')

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

<!-- Content

		============================================= -->

<section id="content">

    <div class="content-wrap">

        <div class="container">

            <div class="row align-items-center">



                <div class="col-lg-5">

                    <div class="heading-block">

                        <h1>Welcome to Canvas.<br>MultiPurpose Template.</h1>

                    </div>

                    <p class="lead">Create a website that you are gonna be proud of. Be it Business, Portfolio, Agency, Photography, eCommerce &amp; much more.</p>

                </div>



                <div class="col-lg-7 align-self-end">



                    <div class="position-relative overflow-hidden">

                        <img src="{{ asset('frontend/images/services/main-fbrowser.png')}}" data-animate="fadeInUp" data-delay="100" alt="Chrome">

                        <img src="{{ asset('frontend/images/services/main-fmobile.png')}}" style="top: 0; left: 0; min-width: 100%; min-height: 100%;" data-animate="fadeInUp" data-delay="400" alt="iPhone" class="position-absolute">

                    </div>



                </div>



            </div>

        </div>



        <div class="section my-0">

            <div class="container">



                <div class="row mt-4 col-mb-50">



                    <div class="col-lg-4">

                        <i class="i-plain color i-large bi-display inline-block mb-3"></i>

                        <div class="heading-block border-bottom-0 mb-3">

                            <span class="before-heading">Scalable on Devices.</span>

                            <h4>Responsive &amp; Retina</h4>

                        </div>

                        <p>Employment respond committed meaningful fight against oppression social challenges rural legal aid governance. Meaningful work, implementation, process cooperation, campaign inspire.</p>

                    </div>



                    <div class="col-lg-4">

                        <i class="i-plain color i-large bi-lightning-charge inline-block mb-3"></i>

                        <div class="heading-block border-bottom-0 mb-3">

                            <span class="before-heading">Smartly Coded &amp; Maintained.</span>

                            <h4>Powerful Performance</h4>

                        </div>

                        <p>Medecins du Monde Jane Addams reduce child mortality challenges Ford Foundation. Diversification shifting landscape advocate pathway to a better life rights international. Assessment.</p>

                    </div>



                    <div class="col-lg-4">

                        <i class="i-plain color i-large bi-sliders2-vertical inline-block mb-3"></i>

                        <div class="heading-block border-bottom-0 mb-3">

                            <span class="before-heading">Flexible &amp; Customizable.</span>

                            <h4>Truly Multi-Purpose</h4>

                        </div>

                        <p>Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>

                    </div>



                </div>



            </div>

        </div>



        <div class="container">



            <div class="heading-block mt-6 text-center">

                <h2>Even more Feature Rich</h2>

                <span class="mx-auto">Philanthropy convener livelihoods, initiative end hunger gender rights local. John Lennon storytelling; advocate, altruism impact catalyst.</span>

            </div>



            <div class="row align-items-center col-mb-50 mb-4">

                <div class="col-lg-4 col-md-6">



                    <div class="feature-box flex-md-row-reverse text-md-end" data-animate="fadeIn">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-heart"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Boxed &amp; Wide Layouts</h3>

                            <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>

                        </div>

                    </div>



                    <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="200">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-file-earmark-richtext"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Extensive Documentation</h3>

                            <p>We have covered each &amp; everything in our Docs including Videos &amp; Screenshots.</p>

                        </div>

                    </div>



                    <div class="feature-box flex-md-row-reverse text-md-end mt-5" data-animate="fadeIn" data-delay="400">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-mouse"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Parallax Support</h3>

                            <p>Display your Content attractively using Parallax Sections with HTML5 Videos.</p>

                        </div>

                    </div>



                </div>



                <div class="col-lg-4 d-md-none d-lg-block text-center">

                    <img src="{{ asset('frontend/images/services/iphone7.png')}}" alt="iphone 2">

                </div>



                <div class="col-lg-4 col-md-6">



                    <div class="feature-box" data-animate="fadeIn">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-camera-video"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>HTML5 Video</h3>

                            <p>Canvas provides support for Native HTML5 Videos that can be added to a Background.</p>

                        </div>

                    </div>



                    <div class="feature-box mt-5" data-animate="fadeIn" data-delay="200">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-check-lg"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Endless Possibilities</h3>

                            <p>Complete control on each &amp; every element that provides endless customization.</p>

                        </div>

                    </div>



                    <div class="feature-box mt-5" data-animate="fadeIn" data-delay="400">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-lightbulb"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Light &amp; Dark Color Schemes</h3>

                            <p>Change your Website's Primary Scheme instantly by simply adding the dark class.</p>

                        </div>

                    </div>



                </div>

            </div>



        </div>



        <div class="row align-items-stretch">



            <div class="col-lg-6 text-center col-padding" style="background: url('{{ asset('frontend/images/services/main-bg.jpg')}}') center center no-repeat; background-size: cover;">

            </div>



            <div class="col-lg-6 text-center col-padding bg-contrast-100">

                <div class="heading-block border-bottom-0">

                    <span class="before-heading color">Easily Understandable &amp; Customizable.</span>

                    <h3>Walkthrough Videos &amp; Demos</h3>

                </div>



                <div class="text-center mb-5">

                    <a class="d-block position-relative" href="https://vimeo.com/101373765" data-lightbox="iframe">

                        <img src="{{ asset('frontend/images/services/video.jpg')}}" alt="Video">

                        <div class="bg-overlay">

                            <div class="bg-overlay-content dark">

                                <span class="overlay-trigger-icon size-lg op-ts op-07 bg-light text-dark" data-hover-animate="op-1" data-hover-animate-out="op-07" data-hover-parent=".row"><i class="uil uil-play"></i></span>

                            </div>

                        </div>

                    </a>

                </div>

                <p class="lead mb-0">Democracy inspire breakthroughs, Rosa Parks; inspiration raise awareness natural resources. Governance impact; transformative donation philanthropy, respect reproductive.</p>

            </div>



        </div>



        <div class="row align-items-stretch mb-6">



            <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #515875;">

                <i class="i-plain i-xlarge mx-auto bi-signpost-split"></i>

                <div class="counter counter-lined"><span data-from="100" data-to="846" data-refresh-interval="50" data-speed="2000"></span></div>

                <h5>Lines of Codes</h5>

            </div>



            <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #576F9E;">

                <i class="i-plain i-xlarge mx-auto bi-bezier"></i>

                <div class="counter counter-lined"><span data-from="3000" data-to="21500" data-refresh-interval="100" data-speed="2500"></span></div>

                <h5>KBs of HTML Files</h5>

            </div>



            <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #6697B9;">

                <i class="i-plain i-xlarge mx-auto bi-layers"></i>

                <div class="counter counter-lined"><span data-from="10" data-to="408" data-refresh-interval="25" data-speed="3500"></span></div>

                <h5>No. of Templates</h5>

            </div>



            <div class="col-lg-3 col-md-6 dark text-center col-padding" style="background-color: #88C3D8;">

                <i class="i-plain i-xlarge mx-auto bi-clock"></i>

                <div class="counter counter-lined"><span data-from="60" data-to="1400" data-refresh-interval="30" data-speed="2700"></span></div>

                <h5>Hours of Coding</h5>

            </div>



        </div>



        <div class="container">



            <div class="row col-mb-50 gx-5">

                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-display"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Responsive Layout</h3>

                            <p>Powerful Layout with Responsive functionality that can be adapted to any screen size.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="200">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-eye"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Retina Ready Graphics</h3>

                            <p>Looks beautiful &amp; ultra-sharp on Retina Displays with Retina Icons, Fonts &amp; Images.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="400">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-star"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Powerful Performance</h3>

                            <p>Optimized code that are completely customizable and deliver unmatched fast performance.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">

                        <div class="fbox-icon">

                            <a href="#"><i class="uil uil-play"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>HTML5 Video</h3>

                            <p>Canvas provides support for Native HTML5 Videos that can be added to a Full Width Background.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-mouse"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Parallax Support</h3>

                            <p>Display your Content attractively using Parallax Sections that have unlimited customizable areas.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-check-circle"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Endless Possibilities</h3>

                            <p>Complete control on each &amp; every element that provides endless customization possibilities.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="600">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-lightbulb"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Light &amp; Dark Color Schemes</h3>

                            <p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="800">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-heart"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Boxed &amp; Wide Layouts</h3>

                            <p>Stretch your Website to the Full Width or make it boxed to surprise your visitors.</p>

                        </div>

                    </div>

                </div>



                <div class="col-sm-6 col-lg-4">

                    <div class="feature-box fbox-sm fbox-plain" data-animate="fadeIn" data-delay="1000">

                        <div class="fbox-icon">

                            <a href="#"><i class="bi-card-text"></i></a>

                        </div>

                        <div class="fbox-content">

                            <h3>Extensive Documentation</h3>

                            <p>We have covered each &amp; everything in our Documentation including Videos &amp; Screenshots.</p>

                        </div>

                    </div>

                </div>

            </div>

        </div>


        <div class="section mt-5 mb-0 border-bottom-0">
            <div class="container">
                <div class="heading-block text-center m-0">
                    <h3>Portfolio</h3>
                </div>
            </div>
        </div>
        <div id="portfolio" class="portfolio row g-0 portfolio-reveal grid-container">
            @foreach ($portfolios as $portfolio)
            <div class="portfolio-item col-6 col-md-4 col-lg-3 pf-media pf-icons">
                <div class="grid-inner">
                    <div class="portfolio-image">
                        @foreach($portfolio->portfolio_medias as $portfolio_media)
                        @if ($portfolio_media->primary_img == 1)
                        <a href="{{route('portfolio_single',$portfolio->id ?? "")}}">
                            <img src="{{asset($portfolio_media->url ?? "")}}" alt="Open Imagination" style="width: 300; height: 200px">
                        </a>
                        @endif
                        @endforeach
                        <div class="bg-overlay">
                            <div class="bg-overlay-content dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item">
                                <a href="{{route('portfolio_single',$portfolio->id ?? "")}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item" data-lightbox="image" title="Image"><i class="uil uil-plus"></i></a>
                                <a href="{{route('portfolio_single',$portfolio->id ?? "")}}" class="overlay-trigger-icon bg-light text-dark" data-hover-animate="fadeInDownSmall" data-hover-animate-out="fadeOutUpSmall" data-hover-speed="350" data-hover-parent=".portfolio-item"><i class="uil uil-ellipsis-h"></i></a>
                            </div>
                            <div class="bg-overlay-bg dark" data-hover-animate="fadeIn" data-hover-parent=".portfolio-item"></div>
                        </div>
                    </div>
                    <div class="portfolio-desc">
                        <h3><a href="{{route('portfolio_single',$portfolio->id ?? "")}}"><a href="">{{$portfolio->title ?? ""}}</a></h3>
                        <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <a href="portfolio.html" class="button button-full button-dark text-center text-end mb-6">
            <div class="container">
                More than 100+ predefined Portfolio Grid Layouts. <strong>See More</strong> <i class="fa-solid fa-caret-right" style="top:4px;"></i>
            </div>
        </a>

        <div class="container">
            <div class="row align-items-center col-mb-50">

                <div class="col-md-4 text-center">

                    <img data-animate="fadeInLeft" src="{{ asset('frontend/images/services/iphone6.png')}}" alt="Iphone">

                </div>



                <div class="col-md-8 text-center text-md-start">

                    <div class="heading-block border-bottom-0">

                        <h3>Optimized for Mobile &amp; Touch Enabled Devices.</h3>

                    </div>



                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero quod consequuntur quibusdam, enim expedita sed quia nesciunt incidunt accusamus necessitatibus modi adipisci officia libero accusantium esse hic, obcaecati, ullam, laboriosam!</p>



                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti vero, animi suscipit id facere officia. Aspernatur, quo, quos nisi dolorum aperiam fugiat deserunt velit rerum laudantium cum magnam.</p>



                    <a href="#" class="button button-border button-dark button-rounded button-large ms-0 mt-4">Learn more</a>

                </div>

            </div>



        </div>



        <div class="section parallax dark mb-0 py-6">

            <img src="{{ asset('frontend/images/services/home-testi-bg.jpg')}}" class="parallax-bg">



            <div class="heading-block text-center">

                <h3>What Clients Say?</h3>

            </div>



            <div class="fslider testimonial testimonial-full" data-animation="fade" data-arrows="false">

                <div class="flexslider">

                    <div class="slider-wrap">

                        <div class="slide">

                            <div class="row flex-column text-center align-items-center gy-3">

                                <div class="col-auto pt-1">

                                    <img class="rounded-circle w-auto mx-auto" src="{{ asset('frontend/images/testimonials/3.jpg')}}" width="56" height="56" alt="Customer Testimonails">

                                </div>

                                <div class="col-lg-5">

                                    <p class="mb-3 fs-5 font-secondary">Similique fugit repellendus expedita excepturi iure perferendis provident quia eaque. Repellendus, vero numquam?</p>

                                    <h4 class="h6 mb-0 fw-medium">Steve Jobs</h4>

                                    <small class="text-muted">Apple Inc.</small>

                                </div>

                            </div>

                        </div>

                        <div class="slide">

                            <div class="row flex-column text-center align-items-center gy-3">

                                <div class="col-auto pt-1">

                                    <img class="rounded-circle w-auto mx-auto" src="{{ asset('frontend/images/testimonials/2.jpg')}}" width="56" height="56" alt="Customer Testimonails">

                                </div>

                                <div class="col-lg-5">

                                    <p class="mb-3 fs-5 font-secondary">Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>

                                    <h4 class="h6 mb-0 fw-medium">Collis Ta'eed</h4>

                                    <small class="text-muted">Envato Inc.</small>

                                </div>

                            </div>

                        </div>

                        <div class="slide">

                            <div class="row flex-column text-center align-items-center gy-3">

                                <div class="col-auto pt-1">

                                    <img class="rounded-circle w-auto mx-auto" src="{{ asset('frontend/images/testimonials/1.jpg')}}" width="56" height="56" alt="Customer Testimonails">

                                </div>

                                <div class="col-lg-5">

                                    <p class="mb-3 fs-5 font-secondary">Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>

                                    <h4 class="h6 mb-0 fw-medium">John Doe</h4>

                                    <small class="text-muted">XYZ Inc.</small>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



        </div>



        <div class="section mt-0 border-top-0">
            <div class="container">
                <div class="heading-block text-center m-0 border-0">
                    <h3>Blog</h3>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row posts-md col-mb-30">
                @foreach ($blogs as $blog)
                <div class="col-lg-3 col-md-6">
                    <div class="entry">
                        @foreach($blog->blog_medias as $blog_media)
                        @if($blog_media->media_type == 1)
                        @if($blog_media->primary_img == 1)
                        <div class="entry-image">
                            <a href="{{route('blog_single',$blog->id ?? "")}}" data-lightbox="image">
                                <img src="{{asset($blog_media->url ?? "")}}" style="width: 300; height: 200px" alt="Image" class="rounded">
                            </a>
                        </div>
                        @endif
                        @endif
                        @endforeach
                        <div class="entry-title title-xs text-transform-none px-2">
                            <h3><a href="{{route('blog_single',$blog->id ?? "")}}">{{$blog->title}}</a></h3>
                        </div>
                        <div class="entry-meta px-2">
                            <ul>
                                <li><i class="uil uil-schedule"></i> 13th Jun 2021</li>
                                {{-- <li><a href="blog-single.html#comments"><i class="uil uil-comments-alt"></i> 53</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>

        </div>



        <div class="section">

            <div class="container">



                <div class="heading-block mt-4 text-center">

                    <h3>Meet Our Team</h3>

                </div>



                <div class="row g-5 mb-5">



                    <div class="col-lg-3 col-md-6">



                        <div class="team">

                            <div class="team-image">

                                <img src="{{ asset('frontend/images/team/3.jpg')}}" alt="John Doe">

                            </div>

                            <div class="team-desc team-desc-bg">

                                <div class="team-title">
                                    <h4>John Doe</h4><span>CEO</span>
                                </div>

                                <div class="d-flex justify-content-center mt-4">

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">

                                        <i class="fa-brands fa-facebook-f"></i>

                                        <i class="fa-brands fa-facebook-f"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-twitter">

                                        <i class="fa-brands fa-twitter"></i>

                                        <i class="fa-brands fa-twitter"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">

                                        <i class="fa-brands fa-google"></i>

                                        <i class="fa-brands fa-google"></i>

                                    </a>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-lg-3 col-md-6">



                        <div class="team">

                            <div class="team-image">

                                <img src="{{ asset('frontend/images/team/2.jpg')}}" alt="Josh Clark">

                            </div>

                            <div class="team-desc team-desc-bg">

                                <div class="team-title">
                                    <h4>Josh Clark</h4><span>Co-Founder</span>
                                </div>

                                <div class="d-flex justify-content-center mt-4">

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">

                                        <i class="fa-brands fa-facebook-f"></i>

                                        <i class="fa-brands fa-facebook-f"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-twitter">

                                        <i class="fa-brands fa-twitter"></i>

                                        <i class="fa-brands fa-twitter"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">

                                        <i class="fa-brands fa-google"></i>

                                        <i class="fa-brands fa-google"></i>

                                    </a>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-lg-3 col-md-6">



                        <div class="team">

                            <div class="team-image">

                                <img src="{{ asset('frontend/images/team/8.jpg')}}" alt="Mary Jane">

                            </div>

                            <div class="team-desc team-desc-bg">

                                <div class="team-title">
                                    <h4>Mary Jane</h4><span>Sales</span>
                                </div>

                                <div class="d-flex justify-content-center mt-4">

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">

                                        <i class="fa-brands fa-facebook-f"></i>

                                        <i class="fa-brands fa-facebook-f"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-twitter">

                                        <i class="fa-brands fa-twitter"></i>

                                        <i class="fa-brands fa-twitter"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">

                                        <i class="fa-brands fa-google"></i>

                                        <i class="fa-brands fa-google"></i>

                                    </a>

                                </div>

                            </div>

                        </div>



                    </div>



                    <div class="col-lg-3 col-md-6">



                        <div class="team">

                            <div class="team-image">

                                <img src="{{ asset('frontend/images/team/4.jpg')}}" alt="Nix Maxwell">

                            </div>

                            <div class="team-desc team-desc-bg">

                                <div class="team-title">
                                    <h4>Nix Maxwell</h4><span>Support</span>
                                </div>

                                <div class="d-flex justify-content-center mt-4">

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-facebook">

                                        <i class="fa-brands fa-facebook-f"></i>

                                        <i class="fa-brands fa-facebook-f"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-twitter">

                                        <i class="fa-brands fa-twitter"></i>

                                        <i class="fa-brands fa-twitter"></i>

                                    </a>

                                    <a href="#" class="social-icon si-small bg-light rounded-circle h-bg-google">

                                        <i class="fa-brands fa-google"></i>

                                        <i class="fa-brands fa-google"></i>

                                    </a>

                                </div>

                            </div>

                        </div>



                    </div>



                </div>



            </div>

        </div>


        <div class="container">

            <div id="oc-clients" class="owl-carousel image-carousel carousel-widget" data-margin="60" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/1.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/2.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/3.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/4.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/5.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/6.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/7.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/8.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/9.png')}}" alt="Clients"></a></div>

                <div class="oc-item p-4 op-ts op-05 h-op-1"><a href="#"><img src="{{asset('frontend/images/clients/10.png')}}" alt="Clients"></a></div>

            </div>

        </div>

    </div>

</section><!-- #content end -->


@endsection
