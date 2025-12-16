<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>پنل مدیریت</title>

@include('Mobile.layouts.links')
@livewireStyles

<style>
@font-face {
    font-family: 'Yekan';
    src: url('/fonts/Yekan.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
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
