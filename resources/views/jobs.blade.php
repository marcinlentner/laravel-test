<x-layout>
    <x-slot:heading>Jobs Page</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <a href="/job/{{ $job['id'] }}" class="underline">
                <li>
                    <strong class="capitalize">{{ $job['title'] }}: </strong>{{ $job['wage'] }}
                </li>
            </a>
        @endforeach
    </ul>
</x-layout>
