<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>پنل مدیریت</title>
<link href="https://cdn.jsdelivr.net/gh/rastikerdar/vazir-font@30.1.0/dist/font-face.css" rel="stylesheet" type="text/css" />

@include('Mobile.layouts.links')
@livewireStyles

<style>
body {
    font-family: 'Vazir', 'Poppins', sans-serif;
}
</style>
</head>

<body class="bg-white">

    <div class="flex min-h-screen">

        <!-- Sidebar -->
        <aside class="w-0 bg-white sm:w-72 lg:block">
            @include('Mobile.layouts.sidebar')
        </aside>

        <!-- Main content -->
        <main class="flex-1 px-4 pt-20">
            {{ $slot ?? '' }}
            @yield('content')
        </main>

    </div>

@livewireScripts
</body>
</html>
