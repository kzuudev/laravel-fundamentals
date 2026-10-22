@props([
    'title' => 'Contact Us',
    'heading' => 'Contact'
])


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout title="{{ $title }}">
        <h1 class="text-2xl font-bold">{{ $heading }}</h1>
    </x-layout>
</body>
</html>