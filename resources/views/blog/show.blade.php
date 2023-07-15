@extends('layouts.app')

@section('title','List Books in ')
@section('content')


    <div class="container">
        <div class="row">
                <div class="col-md-12 col-sm-12">
                    <div class="post-default">
                        <div class="post-thumb"> <a href="/blog/{{$blog->slug}}">
                                <img src="{{$blog->photo}}" alt="{{$blog->title}}" class="img-fluid"> </a> </div>
                        <div class="post-data">
                            <div class="cats"><a href="/category/{{$blog->Category->slug}}">{{$blog->Category->title}}</a></div>
                            <div class="title">
                                <h2><a href="/blog/{{$blog->slug}}">{{$blog->title}}</a></h2>
                            </div>
                            <div class="desc">
                                <p>
                                   {{$blog->detail}}
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
