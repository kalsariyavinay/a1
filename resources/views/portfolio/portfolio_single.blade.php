@extends('layouts.app')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container">
            @foreach ($portfolios as $portfolio)
            <div class="row gutter-50">

                <!-- Portfolio Single Image
                ============================================= -->
                @foreach ($portfolio->portfolio_medias as $item)
                <div class="col-lg-7 portfolio-single-image" data-lightbox="gallery">
                    <div class="row col-mb-30">
                        <a href="{{asset($item->url ?? "")}}" class="col-lg-12 col-md-6" data-lightbox="gallery-item"><img src="{{asset($item->url ?? "")}}" alt="Image 1"></a>
                    </div>
                </div><!-- .portfolio-single-image end -->
                @endforeach
                <!-- Portfolio Single Content
                ============================================= -->
                <div class="col-lg-5 portfolio-single-content content-sticky">

                    <!-- Portfolio Single - Description
                    ============================================= -->
                    <h2>{{$portfolio->title}}</h2>
                    <p class="op-07"><?php echo $portfolio->description ?></p>
                    <!-- Portfolio Single - Description End -->

                    <div class="line my-5"></div>

                    <!-- Portfolio Single - Meta
                    ============================================= -->
                    <ul class="portfolio-meta mb-5">
                        <li><span><i class="uil uil-user"></i>Created by:</span> John Doe</li>
                        <li><span><i class="uil uil-schedule"></i>Completed on:</span> 17th March 2021</li>
                        <li><span><i class="bi-lightbulb"></i>Skills:</span> HTML5 / PHP / CSS3</li>
                        <li><span><i class="uil uil-link"></i>Client:</span> <a href="#">Google</a></li>
                    </ul>
                    <!-- Portfolio Single - Meta End -->

                    <div class="line my-5"></div>

                    <!-- Portfolio Single - Share
                    ============================================= -->
                    <div class="d-flex justify-content-between align-items-center">
                        <span>Share:</span>
                        <div>
                            <a href="#" class="social-icon si-small bg-light h-bg-facebook">
                                <i class="fa-brands fa-facebook-f"></i>
                                <i class="fa-brands fa-facebook-f"></i>
                            </a>
                            <a href="#" class="social-icon si-small bg-light h-bg-twitter">
                                <i class="fa-brands fa-twitter"></i>
                                <i class="fa-brands fa-twitter"></i>
                            </a>
                            <a href="#" class="social-icon si-small bg-light h-bg-pinterest">
                                <i class="fa-brands fa-pinterest-p"></i>
                                <i class="fa-brands fa-pinterest-p"></i>
                            </a>
                            <a href="#" class="social-icon si-small bg-light h-bg-google">
                                <i class="fa-brands fa-google"></i>
                                <i class="fa-brands fa-google"></i>
                            </a>
                            <a href="#" class="social-icon si-small bg-light h-bg-rss">
                                <i class="fa-solid fa-rss"></i>
                                <i class="fa-solid fa-rss"></i>
                            </a>
                            <a href="#" class="social-icon si-small bg-light h-bg-email3">
                                <i class="fa-solid fa-envelope"></i>
                                <i class="fa-solid fa-envelope"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Portfolio Single - Share End -->

                </div><!-- .portfolio-single-content end -->

            </div>
            @endforeach

        </div>
    </div>
</section><!-- #content end -->

</div><!-- #wrapper end -->

@endsection
