<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="min-h-screen" style="
        background-image: url('https://wallpaperaccess.com/full/4128936.jpg'); 
        background-size: cover; 
        background-repeat: no-repeat; 
        background-position: center; 
        -webkit-background-size: cover; 
        -moz-background-size: cover; 
        -o-background-size: cover;">
        <div class="py-12">
            <div class="max-w-md mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 bg-opacity-90 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <!-- Small container with 4 attributes in solid blue shades -->
                        <div class="space-y-4">
                            <!-- Academicians -->
                            <a href="{{ route('academicians.index') }}" 
                               class="block p-4 rounded-md text-center text-white bg-blue-900 hover:bg-blue-800 shadow-md transition duration-200">
                                <i class="fas fa-users mr-2"></i> <!-- Font Awesome icon for users -->
                                Academicians
                            </a>

                            <!-- Research Grants -->
                            <a href="{{ route('researchGrants.index') }}" 
                               class="block p-4 rounded-md text-center text-white bg-blue-700 hover:bg-blue-600 shadow-md transition duration-200">
                                <i class="fas fa-file-alt mr-2"></i> <!-- Font Awesome icon for files -->
                                Research Grants
                            </a>

                            <!-- Project Milestones -->
                            <a href="{{ route('projectMilestones.index') }}" 
                               class="block p-4 rounded-md text-center text-white bg-blue-500 hover:bg-blue-400 shadow-md transition duration-200">
                                <i class="fas fa-tasks mr-2"></i> <!-- Font Awesome icon for tasks -->
                                Project Milestones
                            </a>

                            <!-- Project Members -->
                            <a href="{{ route('projectMembers.index') }}" 
                               class="block p-4 rounded-md text-center text-white bg-blue-300 hover:bg-blue-200 shadow-md transition duration-200">
                                <i class="fas fa-user-friends mr-2"></i> <!-- Font Awesome icon for team -->
                                Project Members
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
