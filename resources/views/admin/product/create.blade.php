@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">

    <div class="container">
        <h2>Create Produk</h2>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{Route('products.index')}}">Daftar Product</a></li>
            <li class="breadcrumb-item active">Create Product</li>

        </ol>
        <h2>Tambah Produk</h2>
        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label>Nama Produk</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Gambar Produk</label>
                <input type="file" name="image" class="form-control" multiple>
            </div>
            <div class="mb-3">
                <label>Ukuran</label>
                <input type="text" name="size" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Material</label>
                <input type="text" name="material" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Kategori</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Varian</label>
                <input type="text" name="variant" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control"></textarea>

            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</main>
@endsection
