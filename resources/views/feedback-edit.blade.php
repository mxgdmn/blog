{{-- Template - https://getbootstrap.com/docs/5.0/examples/checkout/ --}}
@extends('layouts.app')

@section('title')
    Edit message from {{ $data->firstName }} {{ $data->lastName }}
@endsection

@section('content')
    <h1>{{ $data->subject }}</h1>

    <form action="{{ route('feedback-update', $data->id) }}" method="post" novalidate>

        @csrf

        <div class="row g-3">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Bob" value="{{ $data->firstName }}" required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>

            <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Jonson" value="{{ $data->lastName }}" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>

            <div class="col-12">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com" value="{{ $data->email }}" required="">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>

            <div class="col-12">
                <label for="subject" class="form-label">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="" value="{{ $data->subject }}" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>

            <div class="col-12">
                <label for="message" class="form-label">Your message</label>
                <textarea class="form-control" id="message" name="message">{{ $data->message }}</textarea>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>

            <div class="col-md-6">
                <button class="w-100 btn btn-primary btn-lg" type="submit">Update</button>
            </div>
            <div class="col-md-6">
                <a href="<?PHP echo $_SERVER['HTTP_REFERER'] ?>">
                    <button class="w-100 btn btn-primary btn-lg" type="button">Cancel</button>
                </a>
            </div>

        </div>
    </form>
@endsection
