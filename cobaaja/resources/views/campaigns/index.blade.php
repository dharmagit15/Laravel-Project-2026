@extends('app')

@section('content')
<div class="container mx-auto p-4">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Campaign</h2>
        <a href="{{ route('campaigns.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow transition">
            + Tambah Campaign
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white shadow-md rounded-lg overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="p-4 font-semibold text-gray-700">Judul</th>
                        <th class="p-4 font-semibold text-gray-700 text-right">Target</th>
                        <th class="p-4 font-semibold text-gray-700 text-right">Terkumpul</th>
                        <th class="p-4 font-semibold text-gray-700 text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($campaigns as $c)
                    <tr class="border-b hover:bg-gray-50 transition">
                        <td class="p-4 text-gray-800 font-medium">{{ $c->title }}</td>
                        <td class="p-4 text-gray-600 text-right">Rp{{ number_format($c->target_donation, 0, ',', '.') }}</td>
                        <td class="p-4 text-gray-600 text-right">Rp{{ number_format($c->collected_donation, 0, ',', '.') }}</td>
                        <td class="p-4">
                            <div class="flex justify-center space-x-2">
                                <a href="{{ route('campaigns.edit', $c->id) }}" class="bg-yellow-400 hover:bg-yellow-500 text-white px-3 py-1 rounded text-sm transition">
                                    Edit
                                </a>

                                <form action="{{ route('campaigns.destroy', $c->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 rounded text-sm transition">
                                        Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection