@extends('layouts.app')
@section('content')

<section id="content">
    @foreach ($blogs as $blog)

    <div class="content-wrap pt-0 bg-light">
        <div class="container">

            <!-- Entry Image
            ============================================= -->
            <div class="entry-image align-full mb-0">
                @foreach($blog->blog_medias as $blog_media)
                @if($blog_media->media_type == 1)
                @if($blog_media->primary_img == 1)
                <img src="{{asset($blog_media->url ?? "")}}" alt="Blog Single" class="align-wide-full" style="height: 400px">
                @endif
                @endif
                @endforeach
                <div class="p-4 bg-white position-relative shadow-sm rounded text-center align-wide-lg" style="transform: translateY(-30%);">
                    <!-- Entry Title
                    ============================================= -->
                    <div class="entry-title pt-3">
                        <h2>{{$blog->title}}</h2>
                    </div><!-- .entry-title end -->

                    <!-- Entry Meta
                    ============================================= -->
                    <div class="entry-meta mb-0 pb-3">
                        <ul class="justify-content-center m-0">
                            <li><i class="uil uil-schedule"></i>{{$blog->created_at}}</li>
                            {{-- <li><a href="#author"><i class="uil uil-user"></i> admin</a></li>
                            <li><a href="#comments-title"><i class="uil uil-comments-alt"></i> 43 Comments</a></li> --}}
                        </ul>
                    </div><!-- .entry-meta end -->

                </div>
            </div>

            <div class="single-post mw-sm mx-auto">

                <!-- Single Post
                ============================================= -->
                <div class="entry">

                    <div class="clear"></div>

                    <!-- Entry Content
                    ============================================= -->
                    <div class="entry-content"><?php echo $blog->description ?><br><br><br>
                        <div class="tagcloud mb-5">
                            @php $taga = explode(",", $blog->tags); @endphp
                            @foreach ($taga as $tag)
                                <a href="#"> {{$tag}} </a>
                            @endforeach
                        </div>
                        

                        {{-- <div class="tagcloud mb-5">
                            <a href="#">{{$blog->tags}}</a>
                    </div> --}}

                    <!-- Post Single - Share
                        ============================================= -->
                    <div class="card my-4 border rounded border-default">
                        <div class="card-body p-3">
                            <div class="d-flex align-items-center justify-content-between">
                                <h6 class="fs-6 fw-semibold mb-0">Share:</h6>
                                <div class="d-flex">
                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-facebook" title="Facebook">
                                        <i class="fa-brands fa-facebook-f"></i>
                                        <i class="fa-brands fa-facebook-f"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-twitter" title="Twitter">
                                        <i class="fa-brands fa-twitter"></i>
                                        <i class="fa-brands fa-twitter"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-pinterest" title="Pinterest">
                                        <i class="fa-brands fa-pinterest-p"></i>
                                        <i class="fa-brands fa-pinterest-p"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-whatsapp" title="Whatsapp">
                                        <i class="fa-brands fa-whatsapp"></i>
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-rss" title="RSS">
                                        <i class="fa-solid fa-rss"></i>
                                        <i class="fa-solid fa-rss"></i>
                                    </a>

                                    <a href="#" class="social-icon si-small text-white border-transparent rounded-circle bg-email3 me-0" title="Mail">
                                        <i class="fa-solid fa-envelope"></i>
                                        <i class="fa-solid fa-envelope"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div><!-- Post Single - Share End -->

                </div>
            </div><!-- .entry end -->

            <!-- Post Navigation
                ============================================= -->
            {{-- <div class="row text-center text-md-start justify-content-between my-5">
                    <div class="col-md-auto">
                        <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><i class="uil uil-angle-left-b fs-3 me-1"></i><span>15 Ways to create Healthy Habits</span></a>
                    </div>
                    <div class="col-md-auto">
                        <a href="#" class="d-inline-flex align-items-center text-dark h-text-color"><span>The Next big thing is AI</span><i class="uil uil-angle-right-b fs-3 ms-1"></i></a>
                    </div>
                </div><!-- .post-navigation end --> --}}

            <!-- Post Author Info
                ============================================= -->
            {{-- <div id="author" class="card border-default mb-5">
                    <div class="card-body p-4">
                        <div class="row">
                            <div class="col-auto">
                                <img src="images/author/1.jpg" alt="Author Image" class="rounded-circle square square-md">
                            </div>
                            <div class="col">
                                <div class="d-flex align-items-start mb-2">
                                    <div>
                                        <h5 class="text-medium fw-semibold mb-0"><a href="#" class="text-dark">Jonathan Swift</a></h5>
                                        <span class="text-muted text-smaller">12.5K Followers</span>
                                    </div>
                                    <a href="#" class="btn btn-light btn-sm rounded-pill px-3 ms-auto">Follow</a>
                                </div>
                                <p class="mb-3">Writer at Canvas Inc. Posting stories about Best Blog Designs.</p>
                                <a href="#" class="more-link">More Posts by Jonathan Swift</a>
                            </div>
                        </div>
                    </div>
                </div><!-- Post Single - Author End --> --}}

            <!-- Comments
                ============================================= -->
            {{-- <div id="comments">

                    <h3 id="comments-title"><span>3</span> Comments</h3>

                    <!-- Comments List
                    ============================================= -->
                    <ol class="commentlist">

                        <li class="comment even thread-even depth-1" id="li-comment-1">

                            <div id="comment-1" class="comment-wrap">

                                <div class="comment-meta">

                                    <div class="comment-author vcard">

                                        <span class="comment-avatar">
                                            <img alt='Image' src='https://0.gravatar.com/avatar/ad516503a11cd5ca435acc9bb6523536?s=60' class='avatar avatar-60 photo avatar-default' height='60' width='60'></span>

                                    </div>

                                </div>

                                <div class="comment-content">

                                    <div class="comment-author">John Doe<span><a href="#" title="Permalink to this comment">April 24, 2012 at 10:46 am</a></span></div>

                                    <p>Donec sed odio dui. Nulla vitae elit libero, a pharetra augue. Nullam id dolor id nibh ultricies vehicula ut id elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                    <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                </div>

                                <div class="clear"></div>

                            </div>


                            <ul class='children'>

                                <li class="comment byuser comment-author-_smcl_admin odd alt depth-2" id="li-comment-3">

                                    <div id="comment-3" class="comment-wrap">

                                        <div class="comment-meta">

                                            <div class="comment-author vcard">

                                                <span class="comment-avatar">
                                                    <img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=40&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D40&amp;r=G' class='avatar avatar-40 photo' height='40' width='40'></span>

                                            </div>

                                        </div>

                                        <div class="comment-content">

                                            <div class="comment-author"><a href='#' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                            <p>Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

                                            <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                        </div>

                                        <div class="clear"></div>

                                    </div>

                                </li>

                            </ul>

                        </li>

                        <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                            <div id="comment-2" class="comment-wrap">

                                <div class="comment-meta">

                                    <div class="comment-author vcard">

                                        <span class="comment-avatar">
                                            <img alt='Image' src='https://1.gravatar.com/avatar/30110f1f3a4238c619bcceb10f4c4484?s=60&amp;d=http%3A%2F%2F1.gravatar.com%2Favatar%2Fad516503a11cd5ca435acc9bb6523536%3Fs%3D60&amp;r=G' class='avatar avatar-60 photo' height='60' width='60'></span>

                                    </div>

                                </div>

                                <div class="comment-content">

                                    <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb' rel='external nofollow' class='url'>SemiColon</a><span><a href="#" title="Permalink to this comment">April 25, 2012 at 1:03 am</a></span></div>

                                    <p>Integer posuere erat a ante venenatis dapibus posuere velit aliquet.</p>

                                    <a class='comment-reply-link' href='#'><i class="bi-reply-fill"></i></a>

                                </div>

                                <div class="clear"></div>

                            </div>

                        </li>

                    </ol><!-- .commentlist end -->

                    <div class="clear"></div>

                    <!-- Comment Form
                    ============================================= -->
                    <div id="respond">

                        <h3>Leave a <span>Comment</span></h3>

                        <form class="row" action="#" method="post" id="commentform">
                            <div class="col-md-4 form-group">
                                <label for="author">Name</label>
                                <input type="text" name="author" id="author" value="" size="22" tabindex="1" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="form-control">
                            </div>

                            <div class="col-md-4 form-group">
                                <label for="url">Website</label>
                                <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="form-control">
                            </div>

                            <div class="w-100"></div>

                            <div class="col-12 form-group">
                                <label for="comment">Comment</label>
                                <textarea name="comment" cols="58" rows="7" tabindex="4" class="form-control"></textarea>
                            </div>

                            <div class="col-12 form-group">
                                <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Submit Comment</button>
                            </div>
                        </form>

                    </div><!-- #respond end -->

                </div><!-- #comments end --> --}}

        </div>

    </div>
    </div>
    @endforeach

</section><!-- #content end -->

@endsection
