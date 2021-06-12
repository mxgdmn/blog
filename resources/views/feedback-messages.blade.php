@extends('layouts.app')

@section('title')
Feedback messages
@endsection

@section('content')
    <article class="blog-post">
        <h3>Feedback messages</h3>
        <p>These messages sent from the feedback page:</p>

        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Last Name</th>
                <th>E-mail</th>
                <th>Message</th>
            </tr>
            </thead>

            <tbody>
            @foreach($data as $row)
                <tr>
                    <td>{{ $row->firstName }}</td>
                    <td>{{ $row->lastName }}</td>
                    <td>{{ $row->email }}</td>
                    <td><a href="{{ route('feedback-message', $row->id) }}">read...</a></td>
                </tr>
            @endforeach
            </tbody>

            <tfoot>
            <tr>
                <td>Totals</td>
                <td>{{ $data->count() }}</td>
            </tr>
            </tfoot>

        </table>

    </article>
@endsection
