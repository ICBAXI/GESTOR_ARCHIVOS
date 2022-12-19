<div class="space-y-4">
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-800">Title</span>
        <input
            class="rounded-md shadow-sm border-slate-300 dark:bg-withe text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-withe dark:border-slate-900 dark:text-slate-800 dark:placeholder:text-slate-400"
            name="title" type="text" value="{{ old('title', $post->title) }}">
        @error('title')
            <small>{{ $message }}</small>
        @enderror
    </label>
    <br>
    <label class="flex flex-col">
        <span class="font-serif text-slate-600 dark:text-slate-800">Body</span>
        <textarea
            class="rounded-md shadow-sm border-slate-300 dark:bg-withe text-slate-600 dark:text-slate-400 focus:ring focus:ring-slate-300 dark:focus:ring-slate-800 focus:ring-opacity-50 dark:focus:border-slate-700 focus:border-slate-300 dark:bg-withe dark:border-slate-900 dark:text-slate-800 dark:placeholder:text-slate-400"
            name="body">{{ old('body', $post->body) }}</textarea>
        @error('body')
            <small>{{ $message }}</small>
        @enderror
    </label>
</div>
