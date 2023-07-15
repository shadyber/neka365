@extends('layouts.app')

@section('title',$blog->title)
@section('image','https://AINews.com'.$blog->photo)
@section('detail',$blog->detail)
@section('url',$blog->getlink())

@section('content')

    <div class="container pb-120">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="post-details-cover post-has-full-width-image align-items-center">
                    <div class="post-thumb-cover">
                        <div class="post-thumb"> <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="img-fluid" width="50%" align="center"> </div>
                        <div class="post-meta-info">
                            <p class="cats"> <a href="#">Featured</a> <a href="#">{{$blog->Category->title}}</a> </p>
                            <div class="title">
                                <h2>{{$blog->title}}</h2> </div>
                            <ul class="nav meta align-items-center">
                                <li class="meta-author"> <img src="/assets/images/blog/author.jpg" alt="" class="img-fluid"> <a href="#">{{$blog->User->name}}</a> </li>
                                <li class="meta-date"><a href="#">{{$blog->created_at->diffForHumans()}}</a></li>
                                <li> {{$blog->visit}}   read </li>
                                <li class="meta-comments"><a href="#"><i class="fa fa-comment"></i> {{count($blog->blogComments)}}</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="post-content-cover my-drop-cap">
                        <blockquote>
                            <p>{{$blog->title}}</p>
                            <cite>{{$blog->User->name}}</cite> </blockquote>

                         <p> {{strip_tags(substr($blog->detail,0,50))}}</p>
                        <div class="fb-like" data-href="{{$blog->getlink()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>
                      {{!$blog->detail}}
                    </div>
                    <div class="post-all-tags">

                        <a href="#">{{$blog->tags}}</a>


                    </div>

                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle"> Hide Comments ({{count($blog->blogComments)}}) </button>
                    <div class="collapse show" id="commentToggle">
                        <ul class="post-all-comments">
                           @foreach($blog->blogComments as $comment)
                            <li class="single-comment-wrapper">
                                <div class="single-post-comment">
                                    <div class="comment-author-image">
                                        <img src="{{$comment->User->avatar}}" alt="" class="img-fluid"> </div>
                                    <div class="comment-content">
                                        <div class="comment-author-name">
                                            <h6> {{$comment->User->name}} </h6> <span> {{$comment->created_at->diffForHumans()}} </span> </div>
                                        <p>
                                            {{$comment->comment}}  </p>
                                        <a href="#" class="reply-btn">Reply</a>
                                    </div>
                                </div>
                                <ul class="children">
                                    <li class="single-comment-wrapper">

                                    </li>
                                </ul>
                            </li>
                            @endforeach

                        </ul>
                    </div>
                    <div class="post-comment-form-cover">
                        <h3>Write your comment</h3>
                        <form class="comment-form" method="post" action="/comment">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                                    <input type="hidden" name="blog_id" value="{{$blog->id}}">
                                    <input type="text" class="form-control" placeholder="Name" name="name" value="{{Auth::user()->name}}"> </div>
                                <div class="col-md-6">
                                    <input type="email" class="form-control" placeholder="Email" name  value="{{Auth::user()->email}}"> </div>
                                <div class="col-md-12">
                                    <textarea class="form-control" placeholder="Write your comment" name="comment"></textarea>
                                </div>
                                <div class="col-md-12">
                                    <button class="btn btn-primary" type="submit">Submit </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
