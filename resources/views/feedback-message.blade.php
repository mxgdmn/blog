@extends('layouts.app')

@section('title')
Message from {{ $data->firstName }} {{ $data->lastName }}
@endsection

@section('content')
    <article class="blog-post">
        <h2 class="blog-post-title">{{ $data->subject }}</h2>
        <p class="blog-post-meta">{{ $data->created_at }} by <a href="#">{{ $data->firstName }} {{ $data->lastName }}</a></p>

        <p>{{ $data->message }}</p>

        <div class="row">
            <div class="col-md-6">
                <a href="{{ route('feedback-edit', $data->id) }}">
                    <button class="w-100 btn btn-warning btn-lg" type="submit">Edit</button>
                </a>
            </div>

            <div class="col-md-6">
                <a href="{{ route('feedback-delete', $data->id) }}">
                    <button class="w-100 btn btn-danger btn-lg" type="submit">Delete</button>
                </a>
            </div>
        </div>
    </article>
@endsection
