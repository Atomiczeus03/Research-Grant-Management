<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Research Grant') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-700 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('researchGrants.update', $researchGrant->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Project Title -->
                        <div class="mb-4">
                            <label for="project_title" class="block text-sm font-medium text-white">Project Title</label>
                            <input type="text" name="project_title" id="project_title" value="{{ $researchGrant->project_title }}" class="form-input rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                        </div>

                        <!-- Project Leader -->
                        <div class="mb-4">
                            <label for="project_leader_id" class="block text-sm font-medium text-white">Project Leader</label>
                            <select name="project_leader_id" id="project_leader_id" class="form-select rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                                @foreach ($academicians as $academician)
                                    <option value="{{ $academician->id }}" {{ $researchGrant->project_leader_id == $academician->id ? 'selected' : '' }}>
                                        {{ $academician->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Grant Amount -->
                        <div class="mb-4">
                            <label for="grant_amount" class="block text-sm font-medium text-white">Grant Amount</label>
                            <input type="number" name="grant_amount" id="grant_amount" value="{{ $researchGrant->grant_amount }}" class="form-input rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                        </div>

                        <!-- Grant Provider -->
                        <div class="mb-4">
                            <label for="grant_provider" class="block text-sm font-medium text-white">Grant Provider</label>
                            <input type="text" name="grant_provider" id="grant_provider" value="{{ $researchGrant->grant_provider }}" class="form-input rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                        </div>

                        <!-- Start Date -->
                        <div class="mb-4">
                            <label for="start_date" class="block text-sm font-medium text-white">Start Date</label>
                            <input type="date" name="start_date" id="start_date" value="{{ $researchGrant->start_date }}" class="form-input rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                        </div>

                        <!-- Duration in Months -->
                        <div class="mb-4">
                            <label for="duration_months" class="block text-sm font-medium text-white">Duration (Months)</label>
                            <input type="number" name="duration_months" id="duration_months" value="{{ $researchGrant->duration_months }}" class="form-input rounded-md shadow-sm mt-1 block w-full border-blue-500 focus:ring-blue-300 focus:border-blue-300 text-black" required>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-md shadow-md">
                            Update Research Grant
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
