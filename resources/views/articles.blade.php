@extends('layouts.main')
@section('content')
    {{-- <section> --}}
    <h1 class="text-center"> Halaman Article</h1>
    @if ($articles->count())
    {{-- <div class="section"> --}}
            @foreach ( $articles as $article)
            <div class="container my-5">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header">
                                <h5 class="card-title"><a href="/articles/{{ $article->id }}" class="text-decoration-none text-dark ">{{ $article->title }}</a></h5>
                            </div>
                            <div class="card-body">
                            <h5 class="card-title text-end fs-6">Category Article : {{ $article->category->name }}</h5>
                            <p class="card-text">{{ $article->excerpt }}</p>
                            <a href="/articles/{{ $article->id }}" class="btn btn-primary">Read More</a>
                            <h5 class="card-title text-start fs-6 mt-2">Created at : {{ $article->created_at }}</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach     
        @else
            <p class="text-center fs-4">No article Found.</p>
        @endif  
    {{-- </div>
    </section> --}}
@endsection