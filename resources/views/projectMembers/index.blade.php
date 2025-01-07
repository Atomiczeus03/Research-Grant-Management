<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Project Members') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-blue-300 text-gray-900 dark:text-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <a href="{{ route('projectMembers.create') }}" class="inline-block mb-4 px-4 py-2 bg-blue-300 hover:bg-blue-200 text-gray-900 font-semibold rounded-lg shadow-md">
                        Add/Update Project Member
                    </a>

                    @forelse($researchGrants as $grant)
                        <div class="mb-6 border-b border-gray-500 pb-4">
                            <!-- Link to view the specific research grant -->
                            <h3 class="text-lg font-medium text-gray-900 dark:text-gray-800 mb-2">
                                <a href="{{ route('researchGrants.show', $grant->id) }}" class="hover:text-blue-500">
                                    Research Grant : {{ $grant->project_title }}
                                </a>
                            </h3>

                            <!-- Display the Project Leader -->
                            <div class="mb-4">
                                <strong>Project Leader:</strong>
                                <span class="text-gray-900 dark:text-gray-800">{{ $grant->projectLeader->name }}</span>
                            </div>

                            <!-- Check if there are project members excluding the leader -->
                            @if($grant->projectMembers->where('id', '!=', $grant->projectLeader->id)->count() > 0)
                                <table class="min-w-full table-auto bg-blue-200 rounded-lg shadow-md overflow-hidden">
                                    <thead>
                                        <tr class="bg-blue-400 text-left text-sm text-gray-900">
                                            <th class="px-6 py-3">Name</th>
                                            <th class="px-6 py-3">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($grant->projectMembers as $member)
                                            @if ($member->id != $grant->projectLeader->id) <!-- Exclude project leader -->
                                                <tr class="bg-blue-300 hover:bg-blue-200 text-gray-900">
                                                    <td class="px-6 py-4 text-sm">{{ $member->name }}</td>
                                                    <td class="px-6 py-4 text-sm">
                                                        <div class="flex space-x-4">
                                                            <a href="{{ route('academicians.edit', $member->id) }}" class="px-4 py-2 bg-yellow-500 hover:bg-yellow-400 text-white rounded-lg shadow-md">
                                                                Edit
                                                            </a>
                                                            <form action="{{ route('projectMembers.destroy', $member->pivot->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this member?')">
                                                                @csrf
                                                                @method('DELETE')
                                                                <button type="submit" class="px-2 py-2 bg-red-500 hover:bg-red-400 text-white rounded-lg shadow-md">
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>
                                </table>
                            @else
                                <p class="text-sm text-gray-700">No project members added yet.</p>
                            @endif
                        </div>
                    @empty
                        <p class="text-sm text-gray-700">No research grants available.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
