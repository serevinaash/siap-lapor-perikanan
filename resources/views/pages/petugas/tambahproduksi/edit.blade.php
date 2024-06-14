<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produksi Perikanan') }}
        </h2>
    </x-slot>

    
    <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    @if (session('error'))
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2">
                            Error
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <p>{{ session('error') }}</p>
                        </div>
                    @endif
                    <form action="{{ route('petugas.tambahproduksi.update', $produksi->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="mb-4">
                            <input type="number" name="Pengola_Produksi" value="{{ auth()->user()->id }}" hidden>
                            <input type="number" name="ID_Ikan" value="{{ $produksi->ID_Ikan }}" hidden>
                        </div>
                    
                        <div class="mb-4">
                            <label for="Jumlah_Produksi" class="block text-sm font-medium text-gray-700">Jumlah Produksi</label>
                            <input type="number" name="Jumlah_Produksi" id="Jumlah_Produksi" class="mt-1 block w-full" value="{{ $produksi->Jumlah_Produksi }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Tanggal_Produksi" class="block text-sm font-medium text-gray-700">Tanggal Produksi</label>
                            <input type="date" name="Tanggal_Produksi" id="Tanggal_Produksi" class="mt-1 block w-full" value="{{ $produksi->Tanggal_Produksi }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Lokasi_Produksi" class="block text-sm font-medium text-gray-700">Lokasi Produksi</label>
                            <input type="text" name="Lokasi_Produksi" id="Lokasi_Produksi" class="mt-1 block w-full" value="{{ $produksi->Lokasi_Produksi }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Harga_Ikan" class="block text-sm font-medium text-gray-700">Harga Ikan</label>
                            <input type="text" name="Harga_Ikan" id="Harga_Ikan" class="mt-1 block w-full" value="{{ $produksi->Harga_Ikan }}" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Status_Produksi" class="block text-sm font-medium text-gray-700">Status Produksi</label>
                            <input type="text" name="Status_Produksi" id="Status_Produksi" class="mt-1 block w-full" value="{{ $produksi->Status_Produksi }}" required>
                        </div>

                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-blue-500 hover:bg-blue-700 text-white rounded">
                                Update Produksi
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
