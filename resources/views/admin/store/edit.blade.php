@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">
    <div class="container">
    <div class="pagetitle">
            <h1>Edit Store</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('store.index')}}">Daftar Store</a></li>
                    <li class="breadcrumb-item active">Edit Store</li>

                </ol>
            </nav>
        </div><!-- End Page Title -->
        <form action="{{ route('store.update', $store->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">Nama Toko</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $store->name }}" required>
            </div>
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="{{ $store->longitude }}" required>
            </div>
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="{{ $store->latitude }}" required>
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Alamat</label>
                <textarea class="form-control" id="address" name="address" required>{{ $store->address }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
            <a href="{{ route('store.index') }}" class="btn btn-secondary">Kembali</a>
        </form>
    </div>

</main>
@endsection
