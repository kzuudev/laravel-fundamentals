@props([
    'title' => 'About Us',
    'heading' => 'About'
])


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

    <head>
        <title>{{ $title }}</title>
    </head>
    <body class="font-sans antialiased">
        <x-layout title="{{ $title }}">
            <h1 class="text-2xl font-bold">{{ $heading }}</h1>
        </x-layout>
    </body>
</html>
