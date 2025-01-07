<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-700 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="space-y-6">
                        <!-- Project Title -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Project Title:</h3>
                            <p class="text-gray-200">{{ $researchGrant->project_title }}</p>
                        </div>

                        <!-- Project Leader -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Project Leader:</h3>
                            <p class="text-gray-200">{{ $researchGrant->projectLeader->name }}</p>
                        </div>

                        <!-- Grant Amount -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Grant Amount:</h3>
                            <p class="text-gray-200">${{ number_format($researchGrant->grant_amount, 2) }}</p>
                        </div>

                        <!-- Grant Provider -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Grant Provider:</h3>
                            <p class="text-gray-200">{{ $researchGrant->grant_provider }}</p>
                        </div>

                        <!-- Start Date -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Start Date:</h3>
                            <p class="text-gray-200">{{ \Carbon\Carbon::parse($researchGrant->start_date)->format('M d, Y') }}</p>
                        </div>

                        <!-- Duration -->
                        <div class="bg-blue-800 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Duration (Months):</h3>
                            <p class="text-gray-200">{{ $researchGrant->duration_months }}</p>
                        </div>
                    </div>

                    <!-- Back to List Button -->
                    <div class="mt-6">
                        <a href="{{ route('researchGrants.index') }}" class="px-6 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-md shadow-md">
                            Back to List
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
