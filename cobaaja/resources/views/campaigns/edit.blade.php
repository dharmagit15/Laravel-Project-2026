@extends('app')

@section('content')
<div class="max-w-2xl mx-auto p-6 bg-white shadow-lg rounded-xl mt-10">
    <div class="flex items-center justify-between mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Edit Campaign</h2>
        <a href="{{ route('campaigns.index') }}" class="text-blue-600 hover:underline">← Kembali</a>
    </div>
    
    <form action="{{ route('campaigns.update', $campaign->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block text-sm font-medium text-gray-700">Judul Campaign</label>
            <input type="text" name="title" value="{{ $campaign->title }}" required 
                class="mt-1 border border-gray-300 p-2 w-full rounded-md focus:ring-blue-500 focus:border-blue-500">
        </div>

        <div>
            <label class="block text-sm font-medium text-gray-700">Deskripsi</label>
            <textarea name="description" rows="4" 
                class="mt-1 border border-gray-300 p-2 w-full rounded-md">{{ $campaign->description }}</textarea>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Target Donasi (Rp)</label>
                <input type="number" name="target_donation" value="{{ $campaign->target_donation }}" required 
                    class="mt-1 border border-gray-300 p-2 w-full rounded-md">
            </div>
            
            <div>
                <label class="block text-sm font-medium text-gray-700">Donasi Terkumpul (Rp)</label>
                <input type="number" name="collected_donation" value="{{ $campaign->collected_donation }}" required 
                    class="mt-1 border border-gray-300 p-2 w-full rounded-md bg-gray-50 focus:ring-green-500">
            </div>

            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700">Deadline</label>
                <input type="date" name="deadline" value="{{ $campaign->deadline }}" required 
                    class="mt-1 border border-gray-300 p-2 w-full rounded-md">
            </div>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white px-6 py-3 rounded-lg font-bold transition shadow-lg">
                Simpan Perubahan
            </button>
        </div>
    </form>
</div>
@endsection