@extends('admin.layout.admin')

@section('content')
<main class="main" id="main">

    <div class="container">
            <h1>Edit Product</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{Route('products.index')}}">Daftar Product</a></li>
                    <li class="breadcrumb-item active">Edit Product</li>

                </ol>
            </nav>
        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
    
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" required>
            </div>
    
            <div class="mb-3">
                <label for="image" class="form-label">Gambar Produk</label>
                <div class="d-flex flex-wrap">
                        @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" class="img-thumbnail" width="100">
                        @endif
                </div>
                <input type="file" name="image" class="form-control" multiple>
            </div>
    
            <div class="mb-3">
                <label for="size" class="form-label">Ukuran</label>
                <input type="text" name="size" class="form-control" value="{{ $product->size }}" required>
            </div>
    
            <div class="mb-3">
                <label for="material" class="form-label">Material</label>
                <input type="text" name="material" class="form-control" value="{{ $product->material }}" required>
            </div>
    
            <div class="mb-3">
                <label for="category" class="form-label">Kategori</label>
                <input type="text" name="category" class="form-control" value="{{ $product->category }}" required>
            </div>
    
            <div class="mb-3">
                <label for="variant" class="form-label">Varian</label>
                <input type="text" name="variant" class="form-control" value="{{ $product->variant }}" required>
            </div>
            <div class="mb-3">
                <label for="deskripsi">Deskripsi</label>
                <textarea id="deskripsi" name="deskripsi" class="form-control">{{ old('deskripsi', $product->deskripsi) }}</textarea>

            </div>
    
            <button type="submit" class="btn btn-primary">Update Produk</button>
        </form>
    </div>
</main>
@endsection
