<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>BOOKWORM</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-gray-400">
    @include('partials.header')

    <div class="mx-auto px-6 py-4">
        <div class="w-full max-w-6xl mx-auto">
            <table class="table-auto w-full text-gray-900 border border-gray-300">
                <thead class="bg-gray-600 text-left text-xs font-medium text-white uppercase tracking-wider">
                    <tr class="border-b border-gray-500">
                        <th class="px-6 py-3">ID</th>
                        <th class="px-6 py-3">ISBN</th>
                        <th class="px-6 py-3">TITLE</th>
                        <th class="px-6 py-3">AUTHOR</th>
                        <th class="px-6 py-3">DESCRIPTION</th>
                        <th class="px-6 py-3">DATE PUBLISHED</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-300">
                    @foreach($books as $book)
                        <tr class="border-b border-gray-300">
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->id }}</td>
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->isbn }}</td>
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->title }}</td>
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->author }}</td>
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->description }}</td>
                            <td class="px-6 py-4 whitespace-wrap">{{ $book->date_published }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @yield('content')
    </div>

    @include('partials.footer')
</body>
</html>
