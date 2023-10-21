<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
    rel="stylesheet">
    <link rel="stylesheet" href="https://flowbite-admin-dashboard.vercel.app//app.css">


    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <!-- Livewire -->
    @livewireStyles
    {{-- Wire UI --}}
    @wireUiScripts

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 dark:bg-gray-800">

    @include('layouts.navigation')
  <div class="flex pt-16 overflow-hidden bg-gray-50 dark:bg-gray-900">

    <x-sidebar></x-sidebar>

    <div class="fixed inset-0 z-10 hidden bg-gray-900/50 dark:bg-gray-900/90" id="sidebarBackdrop"></div>

    <div id="main-content" class="relative w-full h-full overflow-y-auto bg-gray-50 lg:ml-64 dark:bg-gray-900">
      <main>
        {{ $slot }}
      </main>
      <p class="my-10 text-sm text-center text-gray-500">
        &copy; 2019-2023 <a href="https://flowbite.com/" class="hover:underline" target="_blank">Flowbite.com</a>. All
        rights reserved.
      </p>

    </div>

  </div>



  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="https://flowbite-admin-dashboard.vercel.app//app.bundle.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>

   {{-- Livewire --}}
   @livewireScripts
</body>

</html>
