@extends('app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-xl mt-10">
    <h2 class="text-2xl font-bold mb-6 text-gray-800">Buat Campaign Baru</h2>
    
    <form action="{{ route('campaigns.store') }}" method="POST" class="space-y-4">
        @csrf
        <div>
            <label class="block text-sm font-medium text-gray-700">Judul Campaign</label>
            <input type="text" name="title" required class="mt-1 border border-gray-300 p-2 w-full rounded-md focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="description" rows="4" class="mt-1 border border-gray-300 p-2 w-full rounded-md"></textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Target Donasi (Rp)</label>
                <input type="number" name="target_donation" required class="mt-1 border border-gray-300 p-2 w-full rounded-md">
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Deadline</label>
                <input type="date" name="deadline" required class="mt-1 border border-gray-300 p-2 w-full rounded-md">
            </div>
        </div>

        <div class="flex space-x-3 pt-4">
            <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-6 py-2 rounded-lg font-bold transition w-full">Simpan</button>
            <a href="{{ route('campaigns.index') }}" class="bg-gray-200 hover:bg-gray-300 text-gray-700 px-6 py-2 rounded-lg font-bold transition text-center w-full">Batal</a>
        </div>
    </form>
</div>
@endsection