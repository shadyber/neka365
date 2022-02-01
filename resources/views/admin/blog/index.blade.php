@extends('layouts.app')

@section('title','List Blog')
@section('content')



    <div class="blog-details-wrapper section-space--ptb_80">
        <div class="container">
            <div class="row row--17">



                    <div class="row">
                        @foreach($blogs as $blog)
                            <div class="col-md-4 col-sm-6">
                                <div class="post-default">
                                    <div class="post-thumb"> <a href="/blog/{{$blog->slug}}">
                                            <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid"> </a> </div>
                                    <div class="post-data">
                                        <div class="cats"><a href="/blogcategory/{{$blog->Category->slug}}">{{$blog->Category->title}}</a></div>
                                        <div class="title">
                                            <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                                        </div>
                                        <div class="desc">
                                            <p>
                                             {{strip_tags(substr($blog->detail,0,30))}}...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        @endforeach


            </div>
        </div>
    </div>


@endsection
