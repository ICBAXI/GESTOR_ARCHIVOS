@extends('layout')
@section('title', 'files')
@section('content')
    <h1>@lang('files')</h1>
    @auth
        <a href="{{ route('files.create') }}">Crear Proyecto</a>
    @endauth
    <ul>
        @forelse ($files as $file)
            <img src="/storage/{{ $file->files }}" alt="{{ $files->title }}">
            <li><a href="{{ route('files.show', $files) }}">{{ $files->title }}</a></li>
        @empty
            <li>No hay proyectos para mostrar</li>
        @endforelse
        {{ $files->links() }}
    </ul>

@endsection
