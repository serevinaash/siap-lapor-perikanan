<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Produksi Perikanan &raquo; Tambah
        </h2>
    </x-slot>

    <div class="py-12 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                @if($errors->any())
                    <div class="mb-5" role="alert">
                        <div class="bg-red-500 text-white font-bold rounded-t px-4 py-2 mb-3">
                            Ada kesalahan!
                        </div>
                        <div class="border border-t-0 border-red-400 rounded-b bg-red-100 px-4 py-3 text-red-700">
                            <ul>
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                @endif
                <form action="{{ route('petugas.perikanan.store') }}" class="w-full" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="ikan" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Nama Ikan</label>
                            <input type="text" id="ikan" name="Nama_Ikan" placeholder="Nama Ikan" value="{{ old('Nama_Ikan') }}" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="jumlah" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Jumlah Produksi</label>
                            <input placeholder="Jumlah Produksi" type="number" value="{{ old('Jumlah_Produksi') }}" id="jumlah" name="Jumlah_Produksi" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="tanggal" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Tanggal Produksi</label>
                            <input placeholder="Tanggal Produksi" type="date" value="{{ old('Tanggal_Produksi') }}" id="tanggal" name="Tanggal_Produksi" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="lokasi" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Lokasi Produksi</label>
                            <input placeholder="Lokasi Produksi" type="text" value="{{ old('Lokasi_Produksi') }}" id="lokasi" name="Lokasi_Produksi" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <label for="harga" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2">Harga Ikan</label>
                            <input placeholder="Harga Ikan" type="number" value="{{ old('Harga_Ikan') }}" id="harga" name="Harga_Ikan" class="block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"> 
                        </div>
                    </div>
                    <div class="flex flex-wrap -mx-3 mb-6">
                        <div class="w-full px-3">
                            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                                Simpan Produksi
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
