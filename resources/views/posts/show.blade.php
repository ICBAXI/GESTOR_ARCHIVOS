<x-layouts.app title="Blog" meta-description="Blog meta description" :title="$post->title" :meta-description="$post->body">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->body }}</p>
    <a href="{{ route('post.index') }}">Regresar</a>
</x-layouts.app>
