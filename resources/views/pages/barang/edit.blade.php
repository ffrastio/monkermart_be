<x-app-layout>
<x-slot name="header_content">
        <h1>Tambah Barang</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="/">Dashboard</a></div>
            <div class="breadcrumb-item"><a href="/barang">Barang</a></div>
            <div class="breadcrumb-item"><a href="/barang/create">Tambah Barang</a></div>
        </div>
    </x-slot>

    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-3 px-3">
    <div class="card-body card-block">
            <form action="{{ route('barang.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama" class="form-control-label">Nama Barang</label>
                    <input type="text" name="nama" value="{{ old('nama') ? old('nama') : $item->nama }}"
                        class="form-control @error('nama') is-invalid @enderror">
                    @error('nama')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="kategori" class="form-control-label">Kategori Barang</label>
                    <input type="text" name="kategori" value="{{ old('kategori') ? old('kategori') : $item->kategori }}"
                        class="form-control @error('kategori') is-invalid @enderror">
                        @error('kategori')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hargabeli" class="form-control-label">Harga Beli</label>
                    <input type="number" name="hargabeli" value="{{ old('hargabeli') ? old('hargabeli') : $item->hargabeli }}"
                        class="form-control @error('hargabeli') is-invalid @enderror">
                    @error('hargabeli')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="hargajual" class="form-control-label">Harga Jual</label>
                    <input type="number" name="hargajual" value="{{ old('hargajual') ? old('hargajual') : $item->hargajual }}"
                        class="form-control @error('hargajual') is-invalid @enderror">
                        @error('hargajual')
                        <div class="text-muted">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <button class="btn btn-primary btn-block" type="submit">
                        Edit Barang
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>