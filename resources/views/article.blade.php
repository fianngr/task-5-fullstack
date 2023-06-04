@extends('layouts.main')
@section('content')
    {{-- <h1>{{ $article->title }}</h1> --}}
    <section>
    <div class="section">
        <div class="container-content">
            <div class="container-content-data">
                <div class="title">
                    <h1> {{ $article->title }} </h1>
                    <p><a>{{ $article->user->user_id }}</a></p>
                </div>
                <div class="article">
                    <div class="content-article">
                        {{ $article->content }}
                    </div>
                    <div class="image">
                        {{ $article->image }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>
@endsection

