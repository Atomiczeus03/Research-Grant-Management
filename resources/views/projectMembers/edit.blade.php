<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project Member') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-300 text-gray-900 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('projectMembers.update', $projectMember->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Research Grant Dropdown -->
                        <div class="mb-4">
                            <label for="research_grant_id" class="block font-medium text-gray-900">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="form-select rounded-md shadow-sm mt-1 block w-full border-blue-500 text-black" required>
                                @foreach($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" {{ $projectMember->research_grant_id == $grant->id ? 'selected' : '' }}>
                                        {{ $grant->project_title }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Academician Dropdown -->
                        <div class="mb-4">
                            <label for="academician_id" class="block font-medium text-gray-900">Academician</label>
                            <select name="academician_id" id="academician_id" class="form-select rounded-md shadow-sm mt-1 block w-full border-blue-500 text-black" required>
                                @foreach($academicians as $academician)
                                    <option value="{{ $academician->id }}" {{ $projectMember->academician_id == $academician->id ? 'selected' : '' }}>
                                        {{ $academician->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <!-- Submit Button -->
                        <div class="mb-4">
                            <button type="submit" class="px-4 py-2 bg-blue-600 hover:bg-blue-500 text-white font-semibold rounded-md shadow-md">
                                Update Member
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
