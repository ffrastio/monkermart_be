<x-app-layout>
    <x-slot name="header_content">
        <h1>Daftar Barang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="#">Barang</a></div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-3">
        <div class="flex">
            <div class="btn btn-primary items-center rounded mb-4 mr-4">
                <i class="fas fa-plus mr-3"></i><a href="{{route('barang.create')}}" class="text-white">Tambah Barang</a>
            </div>
            <div class="btn btn-success items-center rounded mb-4">
                <i class="fas fa-file-pdf mr-3"></i><a href="#" class="text-white">Cetak PDF</a>
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-bordered text-center">
                <thead class="bg-light">
                    <th>ID Barang</th>
                    <th>Nama Barang</th>
                    <th>Kategori</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Aksi</th>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <td>{{ $item -> id }}</td>
                        <td>{{ $item -> nama }}</td>
                        <td>{{ $item -> kategori }}</td>
                        <td>{{ $item -> hargabeli }}</td>
                        <td>{{ $item -> hargajual }}</td>
                        <td><a href="{{ route('barang.edit', $item->id) }}" class="mr-3"><i class="fas fa-16px fa-pencil-alt text-blue-500"></i></a>
                            <form action="{{ route('barang.destroy', $item->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="flex font-bold text-lg">
            <p class="mr-3">Jumlah Barang :</p>
            <p>{{$item -> count()}}</p>
        </div>
    </div>
</x-app-layout>