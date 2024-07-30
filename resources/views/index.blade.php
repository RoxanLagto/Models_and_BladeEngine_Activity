@include('partials.header')

<div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
            <tr>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    ISBN
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Title
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Author
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Description
                </th>
                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                    Date Published
                </th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            @foreach($books as $book)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->isbn }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->title }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->author }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->description }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $book->date_published }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@include('partials.footer')
