@extends('layouts.app')

@section('title')
Message from {{ $data->firstName }} {{ $data->lastName }}
@endsection

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title">{{ $data->subject }}</h2>
        <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">{{ $data->firstName }} {{ $data->lastName }}</a></p>

        <p>{{ $data->message }}</p>

        <a href="{{ route('feedback-edit', $data->id) }}">
            <button class="w-50 btn btn-primary btn-lg" type="submit">Edit</button>
        </a>
    </article>
@endsection
