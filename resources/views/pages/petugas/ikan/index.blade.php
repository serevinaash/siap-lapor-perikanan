<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Ikan') }}
        </h2>
    </x-slot>

    <div class="py-12 items-center">
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
                                    <th>ID Ikan</th>
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
            var dataTable = $('#crudTable').DataTable({
                ajax: {
                    url: '{!! url()->current() !!}'
                },
                columns: [
                    {data: 'ID_Ikan', name: 'ID_Ikan'},
                    {data: 'Nama_Ikan', name: 'Nama_Ikan'},
                    {data: 'Deskripsi', name: 'Deskripsi'},
                    {data: 'Kategori_Ikan', name: 'Kategori_Ikan'},
                    {data: 'action', name: 'action', orderable: false, searchable: false, width: '25%'},
                ]
            });
        </script>
    </x-slot>
</x-app-layout>