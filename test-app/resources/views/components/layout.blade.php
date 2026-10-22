@props([
    'title' => 'Home'
])

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" @class(['dark' => ($appearance ?? 'system') == 'dark'])>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class="w-full flex justify-between p-4">

        <?php echo $slot ?? ''; ?>

        <ul class="flex gap-4">
            <li>
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li>
                <a href="{{ route('about') }}">About</a>
            </li>
            <li>
                <a href="{{ route('contact') }}">Contact</a>
            </li>
        </ul>

    </div>
</body>

</html>