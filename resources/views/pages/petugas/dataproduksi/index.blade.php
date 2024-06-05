<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Data Produksi') }}
        </h2>
    </x-slot>

    <div class="py-12 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <table id="crudTable" class="text-center w-full">
                        <thead>
                            <tr>
                                <th>ID Produksi</th>
                                <th>Nama Ikan</th>
                                <th>Jumlah Produksi</th>
                                <th>Tanggal Produksi</th>
                                <th>Lokasi Produksi</th>
                                <th>Harga Ikan</th>
                                <th>Status Produksi</th>     
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
                    url: '{!! route('petugas.produksi.index') !!}'
                },
                columns: [
                    {data: 'ID_Produksi', name: 'ID_Produksi'},
                    {data: 'Nama_Ikan', name: 'Nama_Ikan'},
                    {data: 'Jumlah_Produksi', name: 'Jumlah_Produksi'},
                    {data: 'Tanggal_Produksi', name: 'Tanggal_Produksi'},
                    {data: 'Lokasi_Produksi', name: 'Lokasi_Produksi'},
                    {data: 'Harga_Ikan', name: 'Harga_Ikan'},
                    {data: 'Status_Produksi', name: 'Status_Produksi'},
                ]
            });
        </script>
    </x-slot>
</x-app-layout>
             