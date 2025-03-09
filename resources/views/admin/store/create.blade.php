@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">

    <div class="container">
        <h1>Create Store</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{Route('users.index')}}">Daftar Store</a></li>
                <li class="breadcrumb-item active">Create Store</li>
    
            </ol>
        </nav>
        
        <form action="{{ route('store.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Toko</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" required></textarea>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <button type="submit" class="btn btn-success">Simpan</button>
            <a href="{{ route('store.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>
</main>
@endsection
