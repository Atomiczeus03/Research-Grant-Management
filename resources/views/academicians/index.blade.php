<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Academicians') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-900 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Add Academician Button -->
                    <a href="{{ route('academicians.create') }}" class="inline-block mb-4 px-4 py-2 bg-black hover:bg-gray-800 text-white font-semibold rounded-md shadow-md">
                        Add Academician
                    </a>
                    <table class="min-w-full table-auto bg-blue-800 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-blue-700 text-left text-sm text-white">
                                <th class="px-6 py-3">Name</th>
                                <th class="px-6 py-3">Staff Number</th>
                                <th class="px-6 py-3">Email</th>
                                <th class="px-6 py-3">College</th>
                                <th class="px-6 py-3">Department</th>
                                <th class="px-6 py-3">Position</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($academicians as $academician)
                                <tr class="bg-blue-900 hover:bg-blue-800 text-white">
                                    <td class="px-6 py-4 text-sm">{{ $academician->name }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $academician->staff_number }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $academician->email }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $academician->college }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $academician->department }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $academician->position }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-4">
                                        <a href="{{ route('academicians.show', $academician->id) }}" class="px-2 py-2 bg-blue-600 hover:bg-blue-500 text-white rounded-md shadow-md">View</a>
                                        <!-- Edit Button -->
                                        <a href="{{ route('academicians.edit', $academician->id) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-400 text-white rounded-lg shadow-md">Edit</a>
                                        <form action="{{ route('academicians.destroy', $academician->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-2 py-2 bg-red-600 hover:bg-red-500 text-white rounded-md shadow-md" onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
