<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? 'Page Title' }}</title>
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
    <div class="bg-base-200 drawer lg:drawer-open">
        <input id="drawer" type="checkbox" class="drawer-toggle">
        <!-- drawer content-->
        <div class="drawer-content">
            {{-- <!--navbar-->
            @include('layouts.navbar') --}}

            <!-- content-->
            <main class="bg-base-200 neutral-content p-2">
                {{$slot}}
            </main>

        </div>

        <!-- drawer-->
        {{-- @include('layouts.drawer') --}}


    </div>

</body>

</html>
