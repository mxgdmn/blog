{{-- Template - https://getbootstrap.com/docs/5.0/examples/checkout/ --}}
@extends('layouts.app')
@section('title')Мои контакты@endsection
@section('content')
    <h1>Контакты</h1>

    <form action="{{ route('contact-form') }}" method="post" novalidate>
        @csrf
        <div class="row g-3">
            <div class="col-sm-6">
                <label for="firstName" class="form-label">First name</label>
                <input type="text" class="form-control" id="firstName" name="firstname" placeholder="Bob" value="" required="">
                <div class="invalid-feedback">
                    Valid first name is required.
                </div>
            </div>
            <div class="col-sm-6">
                <label for="lastName" class="form-label">Last name</label>
                <input type="text" class="form-control" id="lastName" name="lastname" placeholder="Jonson" value="" required="">
                <div class="invalid-feedback">
                    Valid last name is required.
                </div>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                <input type="email" class="form-control" id="email" name="email" placeholder="you@example.com">
                <div class="invalid-feedback">
                    Please enter a valid email address for shipping updates.
                </div>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Your message</label>
                <textarea class="form-control" id="message" name="message" ></textarea>
                <div class="invalid-feedback">
                    Please enter your shipping address.
                </div>
            </div>
            <button class="w-100 btn btn-primary btn-lg" type="submit">Send</button>
        </div>
    </form>
@endsection
