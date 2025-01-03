<x-layout>
    <x-slot:heading>
        Jobs Page
    </x-slot:heading>

    <div class="space-y-5">
        @foreach ($jobs as $job)

        <a href="/jobs/{{ $job['id'] }}" class="block px-4 py-6 border border-gray-200 rounded-lg">
            <div>
                <h1 class="font-bold text-blue-500 text-sm">{{ $job->employer->name}}</h1>
            </div>

            <div>
                <strong>{{ $job['title'] }}:</strong> pays {{ $job['salary'] }}
            </div>
        </a>

        @endforeach

        <div>
            {{ $jobs->links() }}
        </div>
    </div>
</x-layout>