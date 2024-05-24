<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Perikanan') }}
        </h2>
    </x-slot>

    <div class="py-12 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
           <div class="mb-10">
                <a href="{{ route('petugas.perikanan.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                    + Tambah Produksi
                </a>
           </div>
           <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <table id="crudTable" class="text-center">
                        <thead>
                            <tr>
                                <th>Id Produksi</th>
                                <th>Id Ikan</th>
                                <th>Jumlah Produksi</th>
                                <th>Tanggal Produksi</th>
                                <th>Lokasi Produksi</th>
                                <th>Harga Ikan</th>
                                <th>Pengola Produksi</th>
                                <th>Status Produksi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
           </div>
        </div>
    </div>

    <x-slot name="script">
        <script>
            var dataTable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    { data: "ID_Produksi", name: "ID_Produksi" },
                    { data: "ID_Ikan", name: "ID_Ikan" },
                    { data: "Jumlah_Produksi", name: "Jumlah_Produksi" },
                    { data: "Tanggal_Produksi", name: "Tanggal_Produksi" },
                    { data: "Lokasi_Produksi", name: "Lokasi_Produksi" },
                    { data: "Harga_Ikan", name: "Harga_Ikan" },
                    { data: "Pengola_Produksi", name: "Pengola_Produksi" },
                    { data: "Status_Produksi", name: "Status_Produksi" },
                    { data: "action", name: "action", orderable: false, searchable: false, width: '25%' },
                ]
            });
        </script>
    </x-slot>
</x-app-layout>
