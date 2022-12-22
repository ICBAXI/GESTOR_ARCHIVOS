<!DOCTYPE html>
<html lang="en">
<title>@yield('title', 'Babalú')</title>
<link rel="stylesheet" href="/build/assets/app-67dcdfd2.css" />
<link src="/build/assets/app-957afdf3.js" defer />

<head>
    <title>Home</title>
</head>

<body>
    @include('partials.nav')
    @include('partials.session-status')
    @yield('content')
</body>

</html>
