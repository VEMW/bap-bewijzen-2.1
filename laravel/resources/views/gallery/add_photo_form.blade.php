@extends('layouts.master')

@section('content')
    <h1>Photo Gallery</h1>

<form action="{{route('gallery.save_photo')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="">Titel</label>
        <input type="text" name="title" class="form-control" />
        @if($errors->has('title'))
            <p class="text-danger">{{ $errors->first('title') }}</p>
            @endif
    </div>

    <div class="form-group">
        <label for="">Omschrijving</label>
        <textarea name="description" rows="10" cols="40" class="form-control"></textarea>
        @if($errors->has('title'))
            <p class="text-danger">{{ $errors->first('title') }}</p>
        @endif
    </div>

    <div class="form-group">
        <label for="">Omschrijving</label>
        <input type="file" name="photo" />
        @if($errors->has('photo'))
            <p class="text-danger"> $errors->first('photo') </p>
        @endif
    </div>
    <button type="submit" class="btn btn-succes">Opslaan</button>
</form>
    @endsection