@extends('layouts.app')

@section('title',$video->title)
@section('image',''.$video->thumb_big)
@section('detail',$video->detail)

@section('url',$video->getlink())

@section('content')



    <div class="container pt-120 pb-90">
        <div class="row">
            <div class="col-md-10 offset-md-2">
                <div class="post-details-cover post-has-full-width-image">
                    <!-- Post Thumbnail -->
                    <div class="post-thumb-cover">
                        <div class="post-thumb item-center">
                            <div class="single-video  mdi-margin" width="60%"  id="player" >
                                <iframe width="100%"
                                        height="315"
                                        src="https://www.youtube.com/embed/{{$video->videoId}}?start=5"
                                        frameborder="0"
                                        allow="accelerometer;
                                     autoplay;
                                     encrypted-media;
                                      gyroscope;
                                       picture-in-picture"
                                        allowfullscreen></iframe>

                            </div>


                        </div>
                        <!-- Post Meta Info -->
                        <div class="post-meta-info">
                            <!-- Category -->
                            <p class="cats">
                                <a href="#">{{$video->tags}}</a>
                            </p>
                            <div class="fb-like" data-href="{{$video->getlink()}}" data-width="" data-layout="button_count" data-action="like" data-size="large" data-share="true"></div>

                            <!-- Title -->
                            <div class="title">
                                <h2>{{$video->title}}</h2>
                            </div>

                            <!-- Meta -->

                        </div>
                        <!-- End of Post Meta Info -->
                    </div>
                    <!-- End oF Post Thumbnail -->

                    <!-- Post Content -->
                    <div class="post-content-cover my-drop-cap">



                        <div>
                            {!!html_entity_decode($video->detail)!!}
                        </div>

                    </div>
                    <!-- End of Post Content -->

                    <!-- Tags -->
                    <div class="post-all-tags">
                        <a href="#">Fashion</a>
                        <a href="#">Art</a>
                        <a href="#">Lifestyle</a>
                        <a href="#">Love</a>
                        <a href="#">Travel</a>
                        <a href="#">Movie</a>
                        <a href="#">Games</a>
                    </div>
                    <!-- End of Tags -->


                    <!-- Comments -->
                    <button class="btn btn-comment" type="button" data-toggle="collapse" data-target="#commentToggle" aria-expanded="false" aria-controls="commentToggle">
                        Hide Comments (0)
                    </button>
                    <!-- Comment Form -->

                </div>
            </div>
        </div>
    </div>


@endsection
