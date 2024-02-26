<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="min-h-screen font-sans antialiased">
    {{-- The navbar with `sticky` and `full-width` --}}
    <x-mary-nav sticky full-width>
        <x-slot:brand>
            {{-- Brand --}}
            <div>Sese</div>
        </x-slot:brand>

        {{-- Right side actions --}}
        <x-slot:actions>
            <x-mary-button label="Home" icon="o-home" link="/" class="btn-ghost btn-sm" />
            <x-mary-button label="About" icon="o-shield-exclamation" link="/" class="btn-ghost btn-sm" />
            <x-mary-button label="Services" icon="o-scissors" link="###" class="btn-ghost btn-sm" />
            <x-mary-button label="Login" icon="o-user" link="###" class="btn-ghost btn-sm" />
        </x-slot:actions>
    </x-mary-nav>

    {{-- The main content with `full-width` --}}
    <x-mary-main with-nav full-width>
        {{-- The `$slot` goes here --}}
        <x-slot:content>
            {{ $slot }}
        </x-slot:content>

        {{-- Footer area --}}
        <x-slot:footer>
            <hr />
            <div class="p-6">
                Footer
            </div>
        </x-slot:footer>
    </x-mary-main>
    @livewireScripts
</body>

</html>