<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project Milestone') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-500 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <form action="{{ route('projectMilestones.update', $projectMilestone->id) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <!-- Research Grant Dropdown -->
                        <div class="mb-4">
                            <label for="research_grant_id" class="block text-sm font-medium text-white">Research Grant</label>
                            <select name="research_grant_id" id="research_grant_id" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black" required>
                                @forelse ($researchGrants as $grant)
                                    <option value="{{ $grant->id }}" @selected($grant->id == $projectMilestone->research_grant_id)>{{ $grant->project_title }}</option>
                                @empty
                                    <option value="" disabled>No Research Grants available</option>
                                @endforelse
                            </select>
                            @error('research_grant_id')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Milestone Name -->
                        <div class="mb-4">
                            <label for="milestone_name" class="block text-sm font-medium text-white">Milestone Name</label>
                            <input type="text" name="milestone_name" id="milestone_name" value="{{ old('milestone_name', $projectMilestone->milestone_name) }}" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black" required>
                            @error('milestone_name')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Target Completion Date -->
                        <div class="mb-4">
                            <label for="target_completion_date" class="block text-sm font-medium text-white">Target Completion Date</label>
                            <input type="date" name="target_completion_date" id="target_completion_date" value="{{ old('target_completion_date', $projectMilestone->target_completion_date) }}" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black" required>
                            @error('target_completion_date')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Deliverable -->
                        <div class="mb-4">
                            <label for="deliverable" class="block text-sm font-medium text-white">Deliverable</label>
                            <textarea name="deliverable" id="deliverable" rows="3" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black" required>{{ old('deliverable', $projectMilestone->deliverable) }}</textarea>
                            @error('deliverable')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Status -->
                        <div class="mb-4">
                            <label for="status" class="block text-sm font-medium text-white">Status</label>
                            <select name="status" id="status" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black" required>
                                <option value="Not Started" @selected($projectMilestone->status == 'Not Started')>Not Started</option>
                                <option value="In Progress" @selected($projectMilestone->status == 'In Progress')>In Progress</option>
                                <option value="Completed" @selected($projectMilestone->status == 'Completed')>Completed</option>
                            </select>
                            @error('status')
                                <div class="text-red-500 text-xs mt-1">{{ $message }}</div>
                            @enderror
                        </div>

                        <!-- Remarks -->
                        <div class="mb-4">
                            <label for="remark" class="block text-sm font-medium text-white">Remarks (Optional)</label>
                            <textarea name="remark" id="remark" rows="3" class="mt-1 block w-full border-blue-400 rounded-md shadow-sm text-black">{{ old('remark', $projectMilestone->remark) }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="px-4 py-2 bg-blue-400 hover:bg-blue-300 text-white font-semibold rounded-md shadow-md">
                            Update Milestone
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
