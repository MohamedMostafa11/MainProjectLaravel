<x-layout>
    <x-slot:heading>
        jobs page
    </x-slot:heading>
<ul>
    @foreach($jobs as $job)
        <a href="/job/{{$job['id']}}">
            <li>
            <strong> {{ $job['title'] }} :</strong> pays {{ $job['salary'] }} per year.
            </li>
        </a>
    @endforeach
</ul>
</x-layout>
