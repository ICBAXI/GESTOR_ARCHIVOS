<x-layouts.app title="Home" meta-description="Home meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Home
    </h1>
    @auth
        <div><a href="#" class="text-black">
                Authenticated User: {{ Auth::user()->name }}</a></div>
    @endauth
</x-layouts.app>
