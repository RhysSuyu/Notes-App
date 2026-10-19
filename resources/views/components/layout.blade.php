@props(['title' => 'My Notes'])

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="max-w-2x1 mx-auto p-6">
    <div>
        <header class="mb-6">
            <a href="{{ route('notes.index') }}" class="text -x1 font-bold text-gray-900"><h1>My Notes</h1></a>
        </header>

        {{ $slot }}


    </div>

</body>
</html>
