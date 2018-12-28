@extends('layouts.master')

@section('header')
    <h1>Homepage</h1>
@endsection

@section('nav')

    <ul>
        <li><a href="{{Route ('registratie.form')}}">Registratie</a></li>
        {{--<li><a href="{{Route ('homepagina')}}">Tour</a></li>--}}
        {{--<li><a href="{{Route ('homepagina')}}">Over</a></li>--}}
    </ul>

@endsection

@section('content')
    Deze website gaat over de band Bring Me The Horizon. Klik op 'over' voor meer informatie.
@endsection