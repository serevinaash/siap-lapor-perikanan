<x-app-layout>

    <div class="py-4 items-center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="shadow overflow-hidden sm-rounded-md">
                <div class="px-4 bg-white sm:p-6">
                    <a href="{{ route('petugas.ikan.create') }}" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded shadow-lg">
                        Create New Ikan
                    </a>
                </div>
                <div class="shadow overflow-hidden sm-rounded-md">
                    <div class="px-4 bg-white sm:p-6">
                        <table id="crudTable" class="text-center">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Ikan</th>
                                    <th>Deskripsi</th>
                                    <th>Kategori Ikan</th>
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
    </div>

    <x-slot name="script">
        <script>
            $(document).ready(function() {
                var dataTable = $('#crudTable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: {
                        url: '{!! url()->current() !!}',  // Ensure the URL is correct
                    },
                    columns: [
                        {
                            data: null,
                            name: 'No.',
                            searchable: false,
                            orderable: false,
                            render: function (data, type, row, meta) {
                                // This will calculate the row number
                                return meta.row + meta.settings._iDisplayStart + 1;
                            }
                        },
                        {data: 'Nama_Ikan', name: 'Nama_Ikan'},
                        {data: 'Deskripsi', name: 'Deskripsi'},
                        {data: 'Kategori_Ikan', name: 'Kategori_Ikan'},
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false,
                            width: '25%'
                        },
                    ],
                    order: [[1, 'asc']]  // Default sort order
                });
            });
        </script>
    </x-slot>
</x-app-layout>
