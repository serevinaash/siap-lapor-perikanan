<x-app-layout>
  <x-slot name="header">
    <h2>{{ __('Edit Ikan') }}</h2>
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

          <form action="{{ route('petugas.ikan.update', $ikan->ID_Ikan) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
              <label for="Nama_Ikan" class="block text-gray-700 text-sm font-bold mb-2">Nama Ikan:</label>
              <input type="text" name="Nama_Ikan" id="Nama_Ikan" value="{{ old('Nama_Ikan', $ikan->Nama_Ikan) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>

            <div class="mb-4">
              <label for="Deskripsi" class="block text-gray-700 text-sm font-bold mb-2">Deskripsi:</label>
              <textarea name="Deskripsi" id="Deskripsi" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">{{ old('Deskripsi', $ikan->Deskripsi) }}</textarea>
            </div>

            <div class="mb-4">
              <label for="Kategori_Ikan" class="block text-gray-700 text-sm font-bold mb-2">Kategori Ikan:</label>
              <input type="text" name="Kategori_Ikan" id="Kategori_Ikan" value="{{ old('Kategori_Ikan', $ikan->Kategori_Ikan) }}" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
            </div>
            <input type="hidden" name="id_kategori" value="{{ $ikan->id_kategori }}">


            <div class="flex items-center justify-between">
              <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Update
              </button>
              <a href="{{ route('petugas.ikan.index') }}" class="inline-block align-baseline font-bold text-sm text-red-500 hover:text-red-800">
                Cancel
              </a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-app-layout>
