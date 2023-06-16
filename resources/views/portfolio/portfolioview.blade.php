@extends('layouts.app')
@section('content')

<section id="content">
    <div class="content-wrap">
        <div class="container sectionload">
            <div id="portfolio-ajax-wrap">
                <div id="portfolio-ajax-container"></div>
            </div>
            <div class="grid-filter-wrap">
                <ul class="grid-filter" data-container="#portfolio">
                    <li class="activeFilter showall"><a href="#" data-filter="*">Show All</a></li>
                    @foreach ($categorys as $cat)
                    <li class="class-{{$cat->id}}"><a href="#" data-filter=".pf-icons" data-id="{{$cat->id}}" class="language-filter">{{$cat->category_name}}</a></li>
                    {{-- <li><a href="#" data-filter=".{{str_replace(" ","", $cat->category_name ?? "")}}" onclick="catchange('{{str_replace(' ','',$cat->category_name ?? '')}}')">{{$cat->category_name ?? ""}}</a></li> --}}
                    @endforeach
                </ul>
                <div class="grid-shuffle rounded" id="pageload" data-container="#portfolio">
                    <i class="uil uil-sync"></i>
                </div>
            </div>
            <div id="portfolio" class="portfolio portfolio-ajax row grid-container g-0" data-layout="fitRows">
                @foreach ($portfolios as $portfolio)
                <div data-loader="include/ajax/portfolio-ajax-image.php" class="portfolio-item-{{$portfolio->category}} col-lg-3 col-md-4 col-sm-6 col-12 pf-media pf-icons">
                    <div class="grid-inner">
                        <div class="portfolio-image" style="margin:5px" >
                            @foreach($portfolio->portfolio_medias as $portfolio_media)
                            @if ($portfolio_media->primary_img == 1)
                            <a href="{{route('portfolio_single',$portfolio->id ?? "")}}">
                                <img src="{{asset($portfolio_media->url ?? "")}}" alt="Open Imagination" height="200px" width="300px">
                            </a>
                            @endif
                            @endforeach
                        </div>
                        <div class="portfolio-desc">
                            <h3><a href="">{{$portfolio->title ?? ""}}</a></h3>
                            <span> <a href="#"><?php echo $portfolio->description; ?></a></span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<script>
    jQuery(document).ready(function() {
        jQuery("#pageload").click(function() {
            location.reload(true);
        });
    });

    jQuery(document).ready(function($) {
        jQuery(document).on('click', '.language-filter', function() {
            var id = $(this).attr('data-id');
            jQuery('.activeFilter').removeClass('activeFilter');
            jQuery('.class-' + id).addClass('activeFilter');
            jQuery(".pf-icons").hide();
            jQuery(".portfolio-item-" + id).show();
        });
        jQuery(document).on('click', '.showall', function() {
            jQuery('.activeFilter').removeClass('activeFilter');
            jQuery('.showall').addClass('activeFilter');
            jQuery(".pf-icons").show();
        });
    });

</script>
@endsection
