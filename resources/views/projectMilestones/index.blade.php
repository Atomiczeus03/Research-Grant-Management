<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Milestones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-500 text-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{ route('projectMilestones.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-400 hover:bg-blue-300 text-white font-semibold rounded-lg shadow-md">
                        Add Project Milestone
                    </a>
                    <table class="min-w-full table-auto bg-blue-300 rounded-lg shadow-md overflow-hidden">
                        <thead>
                            <tr class="bg-blue-400 text-left text-sm text-gray-900">
                                <th class="px-6 py-3">Milestone Name</th>
                                <th class="px-6 py-3">Research Grant</th>
                                <th class="px-6 py-3">Target Completion Date</th>
                                <th class="px-6 py-3">Status</th>
                                <th class="px-6 py-3">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($projectMilestones as $milestone)
                                <tr class="bg-blue-300 hover:bg-blue-200 text-gray-900">
                                    <td class="px-6 py-4 text-sm">{{ $milestone->milestone_name }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $milestone->researchGrant->project_title }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $milestone->target_completion_date }}</td>
                                    <td class="px-6 py-4 text-sm">{{ $milestone->status }}</td>
                                    <td class="px-6 py-4 text-sm flex space-x-4">
                                        <a href="{{ route('projectMilestones.show', $milestone->id) }}" class="px-2 py-1 bg-blue-400 hover:bg-blue-300 text-white rounded-md shadow-md">
                                            View
                                        </a>
                                        <a href="{{ route('projectMilestones.edit', $milestone->id) }}" class="px-2 py-1 bg-yellow-500 hover:bg-yellow-400 text-white rounded-md shadow-md">
                                            Edit
                                        </a>
                                        <form action="{{ route('projectMilestones.destroy', $milestone->id) }}" method="POST" style="display:inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="px-2 py-1 bg-red-500 hover:bg-red-400 text-white rounded-md shadow-md" onclick="return confirm('Are you sure?')">
                                                Delete
                                            </button>
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
