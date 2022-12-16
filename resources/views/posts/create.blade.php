<x-layouts.app title="Blog" meta-description="Blog meta description" title="Crear nuevo post"
    meta-description="Formulario para crear un nuevo blog post">

    <h1>Create new post</h1>

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        @include('posts.form-fields')
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="{{ route('post.index') }}">Regresar</a>
</x-layouts.app>
