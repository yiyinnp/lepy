@extends('layouts.main')
@section('container')
<div class="pt-28 pb-10">
    <h1 class="text-4xl font-extrabold text-center pb-4">{{ $title }}</h1>
    <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Rank
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Nama Siswa
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Kelas
                        </th>
                        <th class="px-6 py-3 text-center text-sm font-medium text-gray-500 uppercase tracking-wider">
                            Skor
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($leaderboard->take(10) as $item)
                    <tr>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $loop->iteration }}
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $item->user->name }}
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $item->user->kelas }}
                        </td>
                        <td class="px-6 py-4 text-center whitespace-nowrap">
                            {{ $item->score }}
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection