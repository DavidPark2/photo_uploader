@extends('layouts.app')

@section('content')
    <form action="/photo" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <input type="file" name="photo">
        <button type="submit">Save photo</button>
    </form>
@endsection