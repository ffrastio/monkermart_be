<x-app-layout>
    <x-slot name="header_content">
        <h1>Daftar Barang Terhapus</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/barang">Barang</a></div>
            <div class="breadcrumb-item"><strong>Barang Terhapus</strong></div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-3">
        <div class="flex">
            <a href="{{route('barang.deleteAll')}}" class="text-white">
                <div class="btn btn-danger items-center rounded mb-4 mr-4">
                    <i class="fas fa-trash mr-3"></i>Hapus Semua
                </div>
            </a>
            <a href="{{route('barang.restoreAll')}}" class="text-white">
                <div class="btn btn-success items-center rounded mb-4">
                    <i class="fas fa-recycle mr-3"></i>Kembalikan Semua
                </div>
            </a>
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
                    @foreach ($item as $barang)
                    <tr>
                        <td>{{ $barang -> id }}</td>
                        <td>{{ $barang -> nama }}</td>
                        <td>{{ $barang -> kategori }}</td>
                        <td>Rp. {{ $barang -> hargabeli }}</td>
                        <td>Rp. {{ $barang -> hargajual }}</td>
                        <td>
                            <a href="{{route ('barang.restore', $barang->id ) }}" class="btn btn-success btn-sm"><i class="fas fa-recycle mr-3"></i>Kembalikan</a>
                            <a href="{{route ('barang.delete', $barang->id ) }}" class="btn btn-danger btn-sm"><i class="fas fa-trash mr-3"></i>Hapus Permanen</a>
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