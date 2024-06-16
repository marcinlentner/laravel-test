<x-layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h2 class="text-2xl capitalize">{{ $job['title'] }}</h2>
    <p>Pay: {{ $job['wage'] }} per year</p>
</x-layout>
