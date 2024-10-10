@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <h1 class="text-4xl font-extrabold text-center pb-5">{{ $title }}</h1>
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
                    @foreach ($leaderboard as $item)
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
        <div class="flex justify-end items-center my-8 mx-1 lg:mx-18">
            <div class="flex-shrink-0">
                {{ $leaderboard->links() }}
            </div>
        </div>
    </div>
</div>
@endsection