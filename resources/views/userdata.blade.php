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
            </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $data->message }}</td>
                </tr>
            </tbody>
            <tfoot>
            <tr>
                <td>Totals</td>
                </tr>
            </tfoot>
        </table>
    </article>
@endsection
