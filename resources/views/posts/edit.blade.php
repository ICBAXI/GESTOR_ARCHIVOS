<x-layouts.app title="Blog" meta-description="Blog meta description" :title="$post->title" :meta-description="$post->body">
    <h1>Edit Form</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @method('PATCH')
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{ route('post.index') }}">Regresar</a>
</x-layouts.app>
