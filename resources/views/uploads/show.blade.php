@extends('layout')
@section('title', 'upload | ' . $upload->title)
@section('content')
    <h1>{{ $upload->title }}</h1>
    @auth
        <a href="{{ route('uploads.edit', $upload) }}">Editar</a>
        <form method="POST" action="{{ route('uploads.destroy', $upload) }}">
            @csrf
            @method('DELETE')
            <button>Eliminar</button>
        </form>
    @endauth
    <p>{{ $upload->description }}</p>
    <p>{{ $upload->created_at->diffForHumans() }}</p>
@endsection
