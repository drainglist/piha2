@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
    <h1>Контакты</h1>
    <p>Свяжитесь с нами любым удобным способом:</p>
    <ul>
        @foreach($contacts as $contact)
            <li>{{ $contact }}</li>
        @endforeach
    </ul>
@endsection