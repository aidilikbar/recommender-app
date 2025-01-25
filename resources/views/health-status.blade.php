<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Health Status') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold mb-4">Health Records</h2>
                    @if($healthRecords)
                        <ul>
                            @foreach($healthRecords as $record)
                            <li>
                                {{ ucfirst($record['record_type'] ?? 'Unknown') }}: 
                                <p class="mt-2 text-sm">{{ $record['description'] ?? 'No description available' }}</p>
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No health records available.</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold mb-4">Monitoring Data</h2>
                    @if($monitoringData)
                        <ul>
                            @foreach($monitoringData as $data)
                            <li>
                                <strong>{{ ucfirst($data['sensor_type'] ?? 'Unknown Sensor') }}</strong>: 
                                {{ $data['sensor_value'] ?? 'No Value' }}
                            </li>
                            @endforeach
                        </ul>
                    @else
                        <p>No monitoring data available.</p>
                    @endif
                </div>
            </div>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mt-4">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <h2 class="text-lg font-bold mb-4">Decision Support</h2>
                    @if($decisionSupport)
                        <ul>
                            @foreach($decisionSupport as $support)
                                <li>{{ $support['recommendation'] }}</li>
                            @endforeach
                        </ul>
                    @else
                        <p>No decision support data available.</p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>