<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tambah Ikan') }}
        </h2>
    </x-slot>

    <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                <form action="{{ route('petugas.ikan.store') }}" method="POST">
                        @csrf
                        
                        <div class="mb-4">
                            <label for="Nama_Ikan" class="block text-sm font-medium text-gray-700">Nama Ikan</label>
                            <input type="text" name="Nama_Ikan" id="Nama_Ikan" class="mt-1 block w-full" required>
                        </div>
                        <div class="mb-4">
                            <label for="Deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                            <textarea name="Deskripsi" id="Deskripsi" rows="3" class="mt-1 block w-full" required></textarea>
                        </div>
                      
                        <div class="mb-4">
                            <label for="Kategori_Ikan" class="block text-sm font-medium text-gray-700">Kategori Ikan</label>
                            <input type="text" name="Kategori_Ikan" id="Kategori_Ikan" class="mt-1 block w-full" required>
                        </div>
                        <div class="mt-6">
                            <button type="submit" class="px-4 py-2  bg-green-500 hover:bg-green-700 text-white rounded">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
