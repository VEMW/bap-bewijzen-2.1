@extends('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>

    @foreach($photos as $photo);
    <p><img src="{{ asset('photos/'.$photo->photo) }}" /></p>

    @endforeach

    <p><a href="{{ route('gallery.add_photo') }}" class="btn btn-primary">Foto toevoegen</a></p>
    @endsection