<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>
<div class="space-y-4">
    @foreach($jobs as $job)
        <a href="/job/{{$job['id']}}" class="block px-4 py-6 border border-gray-200 rounded-1">
        <div class="font-bold text-blue-500 text-sm">{{$job -> employer -> name}}</div>
        <div>
            <strong> {{ $job['title'] }} :</strong> pays {{ $job['salary'] }} per year.
        </div>
        </a>
    @endforeach
</div>
</x-layout>
