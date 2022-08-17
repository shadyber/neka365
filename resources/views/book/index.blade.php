@extends('layouts.app')

@section('title','List of Books ')
@section('content')


    <div class="container">
        <div class="row">
            @foreach($books as $book)
                <div class="col-md-4 col-sm-6">
                    <div class="post-default">
                        <div class="post-thumb"> <a href="/book/{{$book->slug}}">
                                <img src="{{$book->thumb}}" alt="{{$book->title}}" class="img-fluid"> </a> </div>
                        <div class="post-data">
                            <div class="cats"><a href="/category/{{$book->Category->slug}}">{{$book->Category->title}}</a></div>
                            <div class="title">
                                <h2><a href="/book/{{$book->slug}}">{{$book->title}}</a></h2>
                            </div>
                            <div class="desc">
                                <p>
                                    {{strip_tags(substr($book->detail,0,30))}}...
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            @endforeach
        </div>


        <!-- Post Pagination -->
        <div class="post-pagination d-flex justify-content-center">

            {{ $books->links('vendor.pagination.bootstrap-4') }}

        </div>
        <!-- End of Post Pagination -->

    </div>
@endsection
