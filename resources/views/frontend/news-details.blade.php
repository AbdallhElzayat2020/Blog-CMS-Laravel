@extends('frontend.layouts.master')

@section('title', 'News Details')

@section('content')
    <section class="pb-80">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- breaddcrumb -->
                    <!-- Breadcrumb -->
                    <ul class="breadcrumbs bg-light mb-4">
                        <li class="breadcrumbs__item">
                            <a href="{{ route('home') }}" class="breadcrumbs__url">
                                <i class="fa fa-home"></i> {{_('Home')}}</a>
                        </li>
                        <li class="breadcrumbs__item">
                            <a href="javascript:void(0)" class="breadcrumbs__url">{{__('News')}}</a>
                        </li>
                        {{--                        <li class="breadcrumbs__item breadcrumbs__item--current">--}}
                        {{--                            {{$news->title}}--}}
                        {{--                        </li>--}}
                    </ul>
                    <!-- end breadcrumb -->
                </div>
                <div class="col-md-8">
                    <!-- content article detail -->
                    <!-- Article Detail -->
                    <div class="wrap__article-detail">
                        <div class="wrap__article-detail-title">
                            <h1>
                                {!! $news->title !!}
                            </h1>

                        </div>
                        <hr>
                        <div class="wrap__article-detail-info">
                            <ul class="list-inline d-flex flex-wrap justify-content-start">
                                <li class="list-inline-item">
                                    By
                                    <a href="javascript:void(0)">
                                        {{$news->author->name}}
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize ml-1">
                                    {{ date('M D, Y', strtotime($news->created_at)) }}
                                    </span>
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-dark text-capitalize">
                                       {{__(' in')}}
                                    </span>
                                    <a href="#">
                                        {{$news->category->name}}
                                    </a>


                                </li>
                            </ul>
                        </div>

                        <div class="wrap__article-detail-image mt-4">
                            <figure>
                                <img src="{{asset($news->image)}}" alt="{{$news->title}}" class="img-fluid">
                            </figure>
                        </div>
                        <div class="wrap__article-detail-content">
                            <div class="total-views">
                                <div class="total-views-read">
                                    {{\App\Helpers\formatViews($news->views)}}
                                    <span>
                                        {{__('views')}}
                                    </span>
                                </div>

                                <ul class="list-inline">
                                    <span class="share">{{__('share on:')}}</span>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o facebook" href="#">
                                            <i class="fa fa-facebook-f"></i>
                                            <span>{{__('facebook')}}</span>
                                        </a>

                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o twitter" href="#">
                                            <i class="fa fa-twitter"></i>
                                            <span>twitter</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o whatsapp" href="#">
                                            <i class="fa fa-whatsapp"></i>
                                            <span>{{__('whatsapp')}}</span>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a class="btn btn-social-o telegram" href="#">
                                            <i class="fa fa-telegram"></i>
                                            <span>{{__('telegram')}}</span>
                                        </a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a class="btn btn-linkedin-o linkedin" href="#">
                                            <i class="fa fa-linkedin"></i>
                                            <span>{{__('linkedin')}}</span>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <p class="has-drop-cap-fluid">
                                {!! $news->description !!}
                            </p>
                        </div>

                    </div>
                    <!-- end content article detail -->

                    <!-- tags -->
                    <!-- News Tags -->
                    <div class="blog-tags">
                        <ul class="list-inline">
                            <li class="list-inline-item">
                                <i class="fa fa-tags">
                                </i>
                            </li>
                            @foreach($news->tags as $tag)
                                <li class="list-inline-item">
                                    <a href="#">
                                        #{{$tag->name}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <!-- end tags-->

                    <!-- authors-->
                    <!-- Profile author -->
                    <div class="wrap__profile">
                        <div class="wrap__profile-author">
                            <figure>
                                <img style="width: 200px; height: 200px;object-fit: cover"
                                     src="{{asset($news->author->image)}}"
                                     alt="{{$news->author->name}}" class="img-fluid rounded-circle">
                            </figure>
                            <div class="wrap__profile-author-detail">
                                <div class="wrap__profile-author-detail-name">{{__('author')}}</div>
                                <h4>
                                    {{$news->author->name}}
                                </h4>
                                <p>
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis laboriosam ad
                                    beatae itaque ea non
                                    placeat officia ipsum praesentium! Ullam?
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o facebook ">
                                            <i class="fa fa-facebook"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o twitter ">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o instagram ">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o telegram ">
                                            <i class="fa fa-telegram"></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="btn btn-social btn-social-o linkedin ">
                                            <i class="fa fa-linkedin"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end author-->

                    <!-- Comment  -->
                    @auth
                        <div id="comments" class="comments-area">
                            <h3 class="comments-title">{{$news->comments()->count()}} {{__('Comments:')}}</h3>

                            <ol class="comment-list">
                                @foreach($news->comments()->with('user')->whereNull('parent_id')->get() as $comment)
                                    <li class="comment">

                                        <aside class="comment-body">
                                            <div class="comment-meta">
                                                <div class="comment-author vcard">
                                                    <img src="{{asset('assets/frontend/images/news2.jpg')}}"
                                                         class="avatar" alt="image">
                                                    <b class="fn">{{$comment->user->name}}</b>
                                                    <span class="says">{{__('says')}}:</span>
                                                </div>

                                                <div class="comment-metadata">
                                                    <a href="javascript:void(0)">
                                                        <span>{{date('M,d,y H:i',strtotime($comment->created_at))}}</span>
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="comment-content">
                                                <p>
                                                    {{$comment->comment}}
                                                </p>
                                            </div>

                                            <div class="reply">
                                                <a href="#" class="comment-reply-link" data-toggle="modal"
                                                   data-target="#exampleModal-{{$comment->id}}">Reply</a>
                                                @if(auth()->user()->id === $comment->user_id || auth()->user()->id === $news->user_id)
                                                    <span class="delete-msg" data-id="{{$comment->id}}">
                                <i class="fa fa-trash"></i>
                            </span>
                                                @endif
                                            </div>
                                        </aside>

                                        @if($comment->replay()->count() > 0)
                                            @foreach($comment->replay as $replay)

                                                <ol class="children">
                                                    <li class="comment">
                                                        <aside class="comment-body">
                                                            <div class="comment-meta">
                                                                <div class="comment-author vcard">
                                                                    <img
                                                                        src="{{asset('assets/frontend/images/news2.jpg')}}"
                                                                        class="avatar" alt="image">
                                                                    <b class="fn">{{$replay->user->name}}</b>
                                                                    <span class="says">{{__('says:')}}</span>
                                                                </div>

                                                                <div class="comment-metadata">
                                                                    <a href="javascript:void(0)">
                                                                        <span>{{$replay->created_at}}</span>
                                                                    </a>
                                                                </div>
                                                            </div>

                                                            <div class="comment-content">
                                                                <p>
                                                                    {{$replay->comment}}
                                                                </p>
                                                            </div>

                                                            <div class="reply">
                                                                @if($loop->last)
                                                                    <a href="javascript:void(0)"
                                                                       class="comment-reply-link" data-toggle="modal"
                                                                       data-target="#exampleModal-{{$comment->id}}">
                                                                        {{__('Reply')}}
                                                                    </a>
                                                                @endif
                                                                @if(auth()->user()->id === $replay->user_id || auth()->user()->id === $news->user_id)
                                                                    <span class="delete-msg" data-id="{{$replay->id}}">
                                                <i class="fa fa-trash"></i>
                                            </span>
                                                                @endif
                                                            </div>
                                                        </aside>
                                                    </li>
                                                </ol>
                                            @endforeach
                                        @endif

                                        <!-- Modal -->
                                        <div class="comment_modal">
                                            <div class="modal fade" id="exampleModal-{{$comment->id}}" tabindex="-1"
                                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Write Your
                                                                Comment</h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="{{ route('news-comment-reply') }}"
                                                                  method="post">
                                                                @csrf
                                                                <input type="hidden" name="news_id"
                                                                       value="{{$news->id}}">
                                                                <input type="hidden" name="parent_id"
                                                                       value="{{$comment->id}}">
                                                                <textarea name="replay" cols="30" rows="7"
                                                                          placeholder="Type. . ."></textarea>
                                                                <button type="submit">submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </li>
                                @endforeach
                            </ol>

                            <div class="comment-respond">
                                <h3 class="comment-reply-title">{{__('Leave a Reply')}}</h3>

                                <form action="{{ route('news-comment') }}" method="POST" class="comment-form">
                                    @csrf

                                    <p class="comment-notes">
                                        <span id="email-notes">Your email address will not be published.</span>
                                        Required fields are marked
                                        <span class="required">*</span>
                                    </p>

                                    <p class="comment-form-comment">
                                        <label for="comment">Comment</label>
                                        <textarea name="comment" id="comment" cols="45" rows="5" maxlength="65525"
                                                  required="required"></textarea>
                                        <input type="hidden" name="news_id" value="{{$news->id}}">
                                        <input type="hidden" name="parent_id" value="">
                                        @error('comment')
                                        <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </p>

                                    <p class="form-submit mb-0">
                                        <button type="submit" class="btn btn-primary">{{__('Submit')}}</button>
                                    </p>
                                </form>
                            </div>
                        </div>
                    @else
                        <div class="card my-5">
                            <div class="card-body">
                                <h6 class="p-0">Please <a class="text-primary" href="{{ route('login') }}">Login</a> to
                                    Comment in the Post</h6>
                            </div>
                        </div>
                    @endauth


                    <!-- end comment -->


                    <div class="row">
                        <div class="col-md-6">
                            <div class="single_navigation-prev">
                                <a href="#">
                                    <span>previous post</span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Rem, similique.
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="single_navigation-next text-left text-md-right">
                                <a href="#">
                                    <span>next post</span>
                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Perferendis, nesciunt.
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="small_add_banner mb-5 pb-4">
                        <div class="small_add_banner_img">
                            <img src="images/placeholder_large.jpg" alt="adds">
                        </div>
                    </div>


                    <div class="clearfix"></div>

                    <div class="related-article">
                        <h4>
                            you may also like
                        </h4>

                        <div class="article__entry-carousel-three">
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage5.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage6.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage7.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage8.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <!-- Post Article -->
                                <div class="article__entry">
                                    <div class="article__image">
                                        <a href="#">
                                            <img src="images/newsimage9.png" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="article__content">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                                <span class="text-primary">
                                                    by david hall
                                                </span>
                                            </li>
                                            <li class="list-inline-item">
                                                <span>
                                                    descember 09, 2016
                                                </span>
                                            </li>

                                        </ul>
                                        <h5>
                                            <a href="#">
                                                Maecenas accumsan tortor ut velit pharetra mollis.
                                            </a>
                                        </h5>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4">
                    <div class="sticky-top">
                        <aside class="wrapper__list__article ">
                            <!-- <h4 class="border_section">Sidebar</h4> -->
                            <div class="mb-4">
                                <div class="widget__form-search-bar  ">
                                    <div class="row no-gutters">
                                        <div class="col">
                                            <input class="form-control border-secondary border-right-0 rounded-0"
                                                   value="" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button
                                                class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper__list__article-small">
                                @foreach($recentNews as $key=> $recentNew)
                                    @if($loop->index <= 2)
                                        <div class="mb-3">
                                            <!-- Post Article -->
                                            <div class="card__post card__post-list">
                                                <div class="image-sm">
                                                    <a href="{{ route('news-details',$recentNew->slug) }}">
                                                        <img src="{{asset($recentNew->image)}}" class="img-fluid"
                                                             alt="{{$recentNew->title}}">
                                                    </a>
                                                </div>

                                                <div class="card__post__body ">
                                                    <div class="card__post__content">

                                                        <div class="card__post__author-info mb-2">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item">
                                                            <span class="text-primary">
                                                                {{__('by')}} {{$recentNew->author->name}}
                                                            </span>
                                                                </li>
                                                                <li class="list-inline-item">
                                                            <span class="text-dark text-capitalize">
                                                               {{date('Y-m-d',strtotime($recentNew->created_at))}}
                                                            </span>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="card__post__title">
                                                            <h6>
                                                                <a href="{{ route('news-details',$recentNew->slug) }}">
                                                                    {!! \App\Helpers\truncate($recentNew->title , 20,'...') !!}
                                                                </a>
                                                            </h6>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endif

                                    @if($loop->index === 2)
                                        <!-- Post Article -->
                                        <div class="article__entry">
                                            <div class="article__image">
                                                <a href="{{ route('news-details',$recentNew->slug) }}">
                                                    <img src="{{asset($recentNew->image)}}" alt="{{$recentNew->name}}"
                                                         class="img-fluid">
                                                </a>
                                            </div>
                                            <div class="article__content">
                                                <div class="article__category">
                                                    {{$recentNew->category->name}}
                                                </div>
                                                <ul class="list-inline">
                                                    <li class="list-inline-item">
                                                <span class="text-primary">
                                                    {{__('by')}} {{$recentNew->author->name}}
                                                </span>
                                                    </li>
                                                    <li class="list-inline-item">
                                                <span class="text-dark text-capitalize">
                                                   {{date('Y-m-d',strtotime($recentNew->created_at))}}
                                                </span>
                                                    </li>
                                                </ul>
                                                <h5>
                                                    <a href="{{ route('news-details',$recentNew->slug) }}">
                                                        {!! \App\Helpers\truncate($recentNew->title, 30 , '...') !!}
                                                    </a>
                                                </h5>
                                                <p>
                                                    {!!\App\Helpers\truncate($recentNew->description, 150,'...')!!}
                                                </p>
                                                <a href="{{ route('news-details',$recentNew->slug) }}"
                                                   class="btn btn-outline-primary mb-4 text-capitalize">
                                                    {{__('read more')}}
                                                </a>
                                            </div>
                                        </div>
                                    @endif
                                @endforeach


                            </div>
                        </aside>

                        <!-- social media -->
                        <aside class="wrapper__list__article">
                            <h4 class="border_section">stay conected</h4>
                            <!-- widget Social media -->
                            <div class="wrap__social__media">
                                <a href="#" target="_blank">
                                    <div class="social__media__widget facebook">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-facebook"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            19,243 fans
                                        </span>
                                        <span class="social__media__widget-name">
                                            like
                                        </span>
                                    </div>
                                </a>
                                <a href="#" target="_blank">
                                    <div class="social__media__widget twitter">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-twitter"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            2.076 followers
                                        </span>
                                        <span class="social__media__widget-name">
                                            follow
                                        </span>
                                    </div>
                                </a>
                                <a href="#" target="_blank">
                                    <div class="social__media__widget youtube">
                                        <span class="social__media__widget-icon">
                                            <i class="fa fa-youtube"></i>
                                        </span>
                                        <span class="social__media__widget-counter">
                                            15,200 followers
                                        </span>
                                        <span class="social__media__widget-name">
                                            subscribe
                                        </span>
                                    </div>
                                </a>

                            </div>
                        </aside>
                        <!-- End social media -->

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">{{__('tags')}}</h4>
                            <div class="blog-tags p-0">
                                <ul class="list-inline">
                                    @foreach($mostTags as $tag)

                                        <li class="list-inline-item">
                                            <a href="#">
                                                #{{$tag->name}} ({{$tag->count}})
                                            </a>
                                        </li>
                                    @endforeach

                                </ul>
                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">newsletter</h4>
                            <!-- Form Subscribe -->
                            <div class="widget__form-subscribe bg__card-shadow">
                                <h6>
                                    The most important world news and events of the day.
                                </h6>
                                <p><small>Get magzrenvi daily newsletter on your inbox.</small></p>
                                <div class="input-group ">
                                    <input type="text" class="form-control" placeholder="Your email address">
                                    <div class="input-group-append">
                                        <button class="btn btn-primary" type="button">sign up</button>
                                    </div>
                                </div>
                            </div>
                        </aside>

                        <aside class="wrapper__list__article">
                            <h4 class="border_section">Advertise</h4>
                            <a href="#">
                                <figure>
                                    <img src="images/news6.jpg" alt="" class="img-fluid">
                                </figure>
                            </a>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


@push('content')
    <script>
        $(document).ready(function () {
            $('.delete-msg').on('click', function (e) {
                e.preventDefault();

                let id = $(this).data('id');

                Swal.fire({
                    title: "Are you sure?",
                    text: "You will delete it forever!",
                    icon: "warning",
                    showCancelButton: true,
                    confirmButtonColor: "#3085d6",
                    cancelButtonColor: "#d33",
                    confirmButtonText: "Yes, delete it!"
                }).then((result) => {
                    if (result.isConfirmed) {
                        $.ajax({
                            method: 'DELETE',
                            url: "{{route('news-comment-delete')}}",
                            data: {
                                id: id,
                                _token: $('meta[name="csrf-token"]').attr('content') // CSRF Token
                            },
                            success: function (response) {
                                Swal.fire({
                                    title: response.status === "success" ? "Deleted!" : "Warning!",
                                    text: response.message,
                                    icon: response.status === "success" ? "success" : "warning"
                                }).then(() => {
                                    if (response.status === "success") {
                                        location.reload();
                                    }
                                });
                            },
                            error: function (xhr) {
                                let errorMessage = "Something went wrong.";
                                if (xhr.responseJSON && xhr.responseJSON.message) {
                                    errorMessage = xhr.responseJSON.message;
                                }
                                Swal.fire({
                                    title: "Error!",
                                    text: errorMessage,
                                    icon: "error"
                                });
                                console.log(xhr.responseText);
                            }
                        });
                    }
                });
            });
        })
    </script>
@endpush
