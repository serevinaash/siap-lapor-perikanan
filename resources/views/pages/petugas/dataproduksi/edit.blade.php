<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Edit Produksi Perikanan') }}
        </h2>
    </x-slot>

    
    <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    @if ($errors->any())
                        <div class="mb-4">
                            <ul class="text-red-500 list-none pl-5">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('petugas.dataproduksi.update', $dataproduksi->ID_Produksi) }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="mb-4">
                            <label for="ID_Ikan" class="block text-gray-700 text-sm font-bold mb-2">ID Ikan:</label>
                            <input type="text" name="ID_Ikan" id="ID_Ikan" value="{{ old('ID_Ikan', $dataproduksi->ID_Ikan) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="Jumlah_Produksi" class="block text-gray-700 text-sm font-bold mb-2">Jumlah Produksi:</label>
                            <input type="number" name="Jumlah_Produksi" id="Jumlah_Produksi" value="{{ old('Jumlah_Produksi', $dataproduksi->Jumlah_Produksi) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="Tanggal_Produksi" class="block text-gray-700 text-sm font-bold mb-2">Tanggal Produksi:</label>
                            <input type="date" name="Tanggal_Produksi" id="Tanggal_Produksi" value="{{ old('Tanggal_Produksi', $dataproduksi->Tanggal_Produksi) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="Lokasi_Produksi" class="block text-gray-700 text-sm font-bold mb-2">Lokasi Produksi:</label>
                            <input type="text" name="Lokasi_Produksi" id="Lokasi_Produksi" value="{{ old('Lokasi_Produksi', $dataproduksi->Lokasi_Produksi) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="mb-4">
                            <label for="Harga_Ikan" class="block text-gray-700 text-sm font-bold mb-2">Harga Ikan:</label>
                            <input type="text" name="Harga_Ikan" id="Harga_Ikan" value="{{ old('Harga_Ikan', $dataproduksi->Harga_Ikan) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>


                        <div class="mb-4">
                            <label for="Status_Produksi" class="block text-gray-700 text-sm font-bold mb-2">Status Produksi:</label>
                            <input type="text" name="Status_Produksi" id="Status_Produksi" value="{{ old('Status_Produksi', $dataproduksi->Status_Produksi) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                        </div>

                        <div class="flex items-center justify-between">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                                Update
                            </button>
                            <a href="{{ route('petugas.dataproduksi.index') }}" class="inline-block align-baseline font-bold text-sm text-red-500 hover:text-red-800">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
