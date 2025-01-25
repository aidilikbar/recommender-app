<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-lg mb-4">Welcome, <span class="font-bold">{{ auth()->user()->name }}</span></h2>
                    <p class="text-sm">
                        This is the dashboard of the Recommender App. You can view your health status, monitoring data, and decision support here.
                    </p>
                </div>
                <div class="p-6 text-gray-900 dark:text-gray-100">
                <h2 class="text-lg mb-4">Current Weather in <span class="font-bold">Enschede</span></h2>
                    <p class="text-sm">
                        Date: <strong>{{ \Carbon\Carbon::now()->format('l, F j, Y') }}</strong><br>
                        Temperature: <strong>{{ round($weather['temperature'], 1) }}°C</strong><br>
                        Condition: <strong>{{ ucfirst($weather['condition']) }}</strong><br>
                        Wind Speed: <strong>{{ $weather['wind_speed'] }} km/h</strong>
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
