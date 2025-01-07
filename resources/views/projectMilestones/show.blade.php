<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Milestone Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-500 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <div class="space-y-6">
                        <!-- Milestone Name -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Milestone Name:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->milestone_name }}</p>
                        </div>

                        <!-- Research Grant -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Research Grant:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->researchGrant->project_title }}</p>
                        </div>

                        <!-- Target Completion Date -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Target Completion Date:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->target_completion_date }}</p>
                        </div>

                        <!-- Deliverable -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Deliverable:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->deliverable }}</p>
                        </div>

                        <!-- Status -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Status:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->status }}</p>
                        </div>

                        <!-- Remarks -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Remarks:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->remark }}</p>
                        </div>

                        <!-- Last Updated -->
                        <div class="bg-blue-400 p-4 rounded-lg shadow-sm">
                            <h3 class="text-lg font-medium text-white">Last Updated:</h3>
                            <p class="text-gray-200">{{ $projectMilestone->date_updated ? $projectMilestone->date_updated->format('Y-m-d H:i:s') : 'Not Updated' }}</p>
                        </div>
                    </div>

                    <!-- Back Button -->
                    <div class="mt-6">
                        <a href="{{ route('projectMilestones.index') }}" class="px-6 py-2 bg-blue-400 hover:bg-blue-300 text-white font-semibold rounded-md shadow-md">
                            Back to Milestones
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
