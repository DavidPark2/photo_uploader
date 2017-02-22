@extends('layouts.app')

@section('content')
    <img src="{{ asset('storage/V6ib2AD3TI6eUxy5Nf0eq0yOvK5jp04NpHYCNSnD.jpeg') }}">

    <form action="/photo" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="photo">
        <button type="submit">Save photo</button>
    </form>
@endsection
