@extends('layouts.app')
@section('title')All Messages @endsection
@section('content')
    <article class="blog-post">
        <h3>Example table</h3>
        <p>And don't forget about tables in these posts:</p>
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
            @foreach($data as $el)
                <tr>
                    <td>{{ $el->firstname }}</td>
                    <td>{{ $el->lastname }}</td>
                    <td>{{ $el->email }}</td>
                    <td><a href="{{ route('user-data', $el->id) }}">read...</a></td>
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
