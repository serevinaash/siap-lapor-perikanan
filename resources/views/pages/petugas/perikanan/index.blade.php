<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perikanan') }}
        </h2>
    </x-slot>

    <div class="py-12 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="mb-10">
                <!-- Link to add a new fish category -->
                <a href="{{ route('tambah.ikan') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Tambah Kategori Ikan
                </a>
           </div>
           <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <!-- Table to display fish data -->
                    <table id="ikanTable" class="text-center">
                        <thead>
                            <tr>
                                <th>ID Ikan</th>
                                <th>Nama Ikan</th>
                                <th>Deskripsi</th>
                                <th>ID Kategori</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Table rows will be populated dynamically -->
                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            var dataTable = $('#ikanTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    { data: "ID_Ikan", name: "ID_Ikan" },
                    { data: "Nama_Ikan", name: "Nama_Ikan" },
                    { data: "Deskripsi", name: "Deskripsi" },
                    { data: "ID_Kategori", name: "ID_Kategori" },
                ]
            });
        </script>
    </x-slot>
</x-app-layout>
