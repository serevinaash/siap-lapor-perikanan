<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Produksi Perikanan') }}
        </h2>
    </x-slot>

    
    <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <form method="POST" action="{{ route('petugas.produksi.store') }}">
                        @csrf
                        
                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="ID_Ikan">
                                Nama Ikan
                            </label>
                            <select name="ID_Ikan" id="ID_Ikan" class="form-select w-full" required>
                                <option value="">Pilih Nama Ikan</option>
                                <!-- Loop through your Ikan data and populate the options -->
                                @foreach ($ikanData as $ikan)
                                    <option value="{{ $ikan->ID_Ikan }}">{{ $ikan->Nama_Ikan }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Jumlah_Produksi">
                                Jumlah Produksi
                            </label>
                            <input type="number" name="Jumlah_Produksi" id="Jumlah_Produksi" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Tanggal_Produksi">
                                Tanggal Produksi
                            </label>
                            <input type="date" name="Tanggal_Produksi" id="Tanggal_Produksi" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Lokasi_Produksi">
                                Lokasi Produksi
                            </label>
                            <input type="text" name="Lokasi_Produksi" id="Lokasi_Produksi" class="form-input w-full" required>
                        </div>

                        <div class="mb-4">
                            <label class="block text-gray-700 text-sm font-bold mb-2" for="Harga_Ikan">
                                Harga Ikan
                            </label>
                            <input type="number" name="Harga_Ikan" id="Harga_Ikan" class="form-input w-full" required>
                        </div>

                        <!-- You may include more fields as needed -->

                        <div class="flex items-center justify-end mt-4">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                Simpan
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
