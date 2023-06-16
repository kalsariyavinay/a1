@extends('layouts.app')
@section('content')

<section class="page-title bg-transparent">
    <div class="container">
        <div class="page-title-row">
            <div class="page-title-content">
                <h1>Blog</h1>
                <span>Our Latest News</span>
            </div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
        </div>
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div id="posts" class="post-grid row grid-container gutter-30" data-layout="fitRows">
                @foreach ($blogs as $blog)
                <div class="entry col-lg-3 col-md-4 col-sm-6 col-12">
                    <div class="grid-inner">
                        @foreach($blog->blog_medias as $blog_media)
                        @if($blog_media->media_type == 1)
                        @if($blog_media->primary_img == 1)
                        <div class="entry-image">
                            <a href="{{route('blog_single',$blog->id ?? "")}}" data-lightbox="image">
                                <img src="{{asset($blog_media->url ?? "")}}" style="width: 300; height: 200px " alt="Standard Post with Image">
                            </a>
                        </div>
                        @endif
                        @endif
                        {{-- @if($blog_media->media_type == 2)
                        <div class="entry-image">
                            <iframe src="{{asset($blog_media->url ?? "")}}" width="500" height="281" allow="autoplay; fullscreen" allowfullscreen></iframe>
                        </div>
                        @endif --}}
                        @endforeach
                        <div class="entry-title">
                            <h2><a href="{{route('blog_single',$blog->id ?? "")}}">
                                @if (session()->get('locale') == 'en')
                                {{$blog->title}}
                                @else
                                {{$blog->title_spanish}}
                                @endif
                            
                            </a></h2>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="uil uil-schedule"></i>{{get_formatted_date($blog->created_at, 'd-m-y')}}</li>
                                <li><a href="{{route('blog_single',$blog->id ?? "")}}"><i class="uil uil-comments-alt"></i> 13</a></li>
                                <li><a href="#"><i class="uil uil-camera"></i></a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            
                            <p> @if (session()->get('locale') == 'en')
                               <?php echo $blog->description ?>
                                @else
                               <?php $blog->description_spanish ?>

                                @endif
                            </p>
                            {{-- <a href="{{route('blog_single',$blog->id ?? "")}}" class="more-link">Read More</a> --}}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <ul class="pagination mt-5 pagination-circle justify-content-center">{{ $blogs->links() }}</ul> --}}
        </div>
    </div>
</section>

@endsection
