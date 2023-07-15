@extends('layouts.app')

@section('title','List Books in ')
@section('content')


    <div class="container">
        <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="post-default">
                        <div class="post-thumb"> <a href="/book/{{$blog->slug}}">
                                <img src="{{$blog->thumb}}" alt="{{$blog->title}}" class="img-fluid"> </a> </div>
                        <div class="post-data">
                            <div class="cats"><a href="/category/{{$blog->Category->slug}}">{{$blog->Category->title}}</a></div>
                            <div class="title">
                                <h2><a href="/book/{{$blog->slug}}">{{$blog->title}}</a></h2>
                            </div>
                            <div class="desc">
                                <p>
                                    {{strip_tags(substr($blog->detail,0,30))}}...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
        </div>


        <!-- Post Pagination -->
        <div class="post-pagination d-flex justify-content-center">



        </div>
        <!-- End of Post Pagination -->

    </div>
@endsection
