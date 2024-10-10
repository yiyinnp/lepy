@extends('layouts.main1')
@section('container')
<div class="main-content lg:ml-[250px] transition-all duration-300 ease-in-out py-28">
    <h1 class="text-4xl font-extrabold text-center">{{ $title }}</h1>
    <div class="flex justify-center items-center pt-5">
        
        <div class="w-10/12">
            @if (session()->has('success'))
            <div class="pb-3">
                <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 w-full rounded-lg relative" role="alert">
                    <span class="block sm:inline">{{ session('success') }}</span>
                    <button type="button" class="absolute top-0 bottom-0 right-0 px-4 py-3" aria-label="CloseSuccessEditUserlist">
                        <svg class="h-6 w-6 text-green-500 cursor-pointer" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a.5.5 0 0 1-.706 0L10 10.707l-3.646 3.646a.5.5 0 0 1-.707-.707L9.293 10 5.646 6.354a.5.5 0 1 1 .707-.707L10 9.293l3.646-3.646a.5.5 0 0 1 .707.707L10.707 10l3.647 3.646a.5.5 0 0 1 0 .707z"/></svg>
                    </button>
                </div>
            </div>
            @endif

            <div class="flex justify-between pt-1 space-x-2 mx-2 lg:mx-38">
                <a href="{{ route('userlist.create') }}">
                    <button class="border-2 border-green-400 bg-green-400 text-white py-2 px-2 w-28 rounded-full 
                    hover:bg-green-600 hover:border-green-600 font-medium">
                    <i class="bi bi-plus-circle"></i> Tambah</button>
                </a>
        
                <form action="{{ route('userlist.index') }}" method="get" class="flex">
                    <input type="text" name="search" class="border border-gray-300 rounded-l-lg px-4 py-2 w-full md:w-64 focus:outline-none focus:border-[#395886]" placeholder="Cari...">
                    <button class="bg-blue-500 hover:bg-[#395886] text-white px-4 py-2 rounded-r-lg md:ml-0"><i class="bi bi-search"></i></button>
                </form>
            </div>

            <div class="overflow-x-auto">
                <table class="table-auto border-collapse w-full rounded-md">
                    <thead class="text-white">
                        <tr class="bg-gray-500 text-center">
                            <th class="px-4 py-2">#</th>
                            <th class="px-4 py-2">Username</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Role</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white divide-y divide-gray-400">
                            <td class="text-center py-1">{{ $loop->iteration }}</td>
                            <td class="text-center py-1">{{ $user->username }}</td>
                            <td class="text-center py-1">{{ $user->email }}</td>
                            <td class="text-center py-1">{{ $user->level }}</td>
                            <td class="text-center py-1"> 
                                <form action="{{ route('userlist.edit', ['user' => $user->id]) }}" method="GET" class="mb-1">
                                    @csrf
                                    <button class="w-10 h-6 bg-amber-300 hover:bg-amber-500 hover:border-amber-500 rounded-md">
                                    <i class="bi bi-pencil"></i></button>
                                </form>
                                <form action="{{ route('userlist.destroy', [$user->id]) }}" method="POST" class="mb-0">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="w-10 h-6 bg-rose-400 
                                    hover:bg-rose-600 hover:border-rose-600 rounded-md"><i class="bi bi-trash"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const closeButtonSuccessEditUserlist = document.querySelector('[aria-label="CloseSuccessEditUserlist"]');
        const alertBoxSuccessEditUserlist = closeButtonSuccessEditUserlist ? closeButtonSuccessEditUserlist.closest('.bg-green-100') : null;

        if (closeButtonSuccessEditUserlist) {
            closeButtonSuccessEditUserlist.addEventListener('click', function() {
                alertBoxSuccessEditUserlist.remove();
            });
        }
    });
</script>