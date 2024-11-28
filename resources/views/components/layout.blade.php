<!DOCTYPE html>
<html lang="en" class="h-full bg-gray-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="h-full">
<div class="min-h-full">

    <x-nav-bar></x-nav-bar>


    <main class="flex">
        <aside class="w-64 bg-gray-200">
            <x-side-bar></x-side-bar>
        </aside>


        <div class="flex-1 mx-auto max-w-7xl px-4 py-6 pt-16 sm:px-6 lg:px-8">
            {{ $slot }}
        </div>

    </main>








    

</div>
</body>
</html>
