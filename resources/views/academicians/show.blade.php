<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Academician') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-900 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="space-y-6">
                        <!-- Name -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Name:</h3>
                            <p class="text-gray-200">{{ $academician->name }}</p>
                        </div>

                        <!-- Staff Number -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Staff Number:</h3>
                            <p class="text-gray-200">{{ $academician->staff_number }}</p>
                        </div>

                        <!-- Email -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Email:</h3>
                            <p class="text-gray-200">{{ $academician->email }}</p>
                        </div>

                        <!-- College -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">College:</h3>
                            <p class="text-gray-200">{{ $academician->college }}</p>
                        </div>

                        <!-- Department -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Department:</h3>
                            <p class="text-gray-200">{{ $academician->department }}</p>
                        </div>

                        <!-- Position -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Position:</h3>
                            <p class="text-gray-200">{{ $academician->position }}</p>
                        </div>
                    </div>

                    <!-- Back to List Button -->
                    <div class="mt-6">
                        <a href="{{ route('academicians.index') }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-md shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
