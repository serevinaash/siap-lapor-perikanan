<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produksi Perikanan') }}
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
                    <form action="{{ route('petugas.tambahproduksi.store') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                      
                        <input type="hidden" name="Pengola_Produksi" value="{{ auth()->user()->id }}">
                        <input type="hidden" name="ID_Ikan" value="{{ $idIkan }}" required>

                        
                    
                        <div class="mb-4">
                            <label for="Jumlah_Produksi" class="block text-sm font-medium text-gray-700">Jumlah Produksi</label>
                            <input type="number" name="Jumlah_Produksi" id="Jumlah_Produksi" class="mt-1 block w-full" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Tanggal_Produksi" class="block text-sm font-medium text-gray-700">Tanggal Produksi</label>
                            <input type="date" name="Tanggal_Produksi" id="Tanggal_Produksi" class="mt-1 block w-full" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Lokasi_Produksi" class="block text-sm font-medium text-gray-700">Lokasi Produksi</label>
                            <input type="text" name="Lokasi_Produksi" id="Lokasi_Produksi" class="mt-1 block w-full" required>
                        </div>
                        
                        <div class="mb-4">
                            <label for="Harga_Ikan" class="block text-sm font-medium text-gray-700">Harga Ikan</label>
                            <input type="text" name="Harga_Ikan" id="Harga_Ikan" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="Status_Produksi" class="block text-sm font-medium text-gray-700">Status Produksi</label>
                            <select name="Status_Produksi" id="Status_Produksi" class="mt-1 block w-full" required>
                                <option value="proses">Proses</option>
                                <option value="selesai">Selesai</option>
                            </select>
                        </div>


                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2 bg-green-500 hover:bg-green-700 text-white rounded">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
