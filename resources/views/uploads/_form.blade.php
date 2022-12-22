@csrf
<br>
<label>
    Titulo del Proyecto
    <br>
    <input type="text" name="title" value="{{ old('title', $file->title) }}">
</label>
<br>
<label>
    Url del Proyecto
    <br>
    <input type="text" name="url" value="{{ old('url', $file->url) }}">
</label>
<br>
<label>
    Descripción del Proyecto
    <br>
    <textarea type="text" name="description">{{ old('description', $file->description) }}</textarea>
</label>
<br>
<button class="btn btn-primary btn-block mt-4">
    {{ $btnText }}
</button>
