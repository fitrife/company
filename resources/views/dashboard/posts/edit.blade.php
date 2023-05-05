@extends('dashboard.layouts.main')

@section('container')

    <!-- article start -->
    <div class="article-section section-padding px-3 py-2 bg-white rounded">
        <div class="row">
        <div class="col-12">
            <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                <a href="/dashboard" class="text-primary"
                    ><i class="fa-solid fa-house-user"></i
                ></a>
                </li>
                <li class="breadcrumb-item">
                <a href="/dashboard/posts" class="text-primary">
                    <i class="fa-regular fa-newspaper"></i
                ></a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                <i class="fa-solid fa-edit me-1"></i> Edit Artikel
                </li>
            </ol>
            </nav>
        </div>
        </div>
        <div class="row">
        <div class="col-md-10">
            <form
            method="post"
            action="/dashboard/posts/{{ $post->slug }}"
            class="mb-5"
            enctype="multipart/form-data"
            >
            @method('put')
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Judul</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" required autofocus value="{{ old('title', $post->title) }}">
                @error('title')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="slug" class="form-label">Slug</label>
                <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" required value="{{ old('slug', $post->slug) }}">
                @error('slug')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                 @enderror
            </div>
            <div class="mb-3">
                <label for="category" class="form-label"
                >Kategori <span class="text-danger">*</span></label
                >
                <select class="form-select" name="category_id">
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id', $post->category_id) == $category->id ? 'selected' : null }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="thumbnail" class="form-label"
                >Thumbnail <span class="text-danger">*</span></label
                >
                <input type="hidden" name="oldImage" value="{{ $post->image }}">
                @if ($post->image)
                    <img src="{{ asset('storage/' .$post->image) }}" class="img-preview img-fluid mb-3 col-sm-5 d-block">
                @else
                    <img class="img-preview img-fluid mb-3 col-sm-5">
                @endif
                <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
                    @error('image')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
            </div>
            
            <div class="mb-3">
                <label for="source" class="form-label">Link Sumber Gambar</label>
                <input type="text" class="form-control @error('source') is-invalid @enderror" id="source" name="source" autofocus value="{{ old('source', $post->source) }}">
                @error('source')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="copyright" class="form-label">Copyright</label>
                <input type="text" class="form-control @error('copyright') is-invalid @enderror" id="copyright" name="copyright" autofocus value="{{ old('copyright', $post->copyright) }}">
                @error('copyright')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="body" class="form-label"
                >Body</label
                >
                <textarea id="body" type="hidden" name="body" class="body">{{ old('body', $post->body) }}</textarea>
                @error('body')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="d-flex">
                <button type="submit" class="btn btn-success me-1">
                <i class="fa-regular fa-floppy-disk me-1"></i>Simpan
                </button>
                <button type="reset" class="btn btn-danger">
                <i class="fa-solid fa-rotate-right me-1"></i>Reset
                </button>
            </div>
            </form>
        </div>
        </div>
    </div>
    <!-- article end -->

@endsection

@section('myjsfile')
<script>
    const title = document.querySelector('#title');
    const slug = document.querySelector('#slug');

    title.addEventListener('change', function() {
        fetch('/dashboard/posts/checkSlug?title=' + title.value)
            .then(response => response.json())
            .then(data => slug.value = data.slug)
    });

    function previewImage() {
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            imgPreview.src = oFREvent.target.result;
        }
    }
</script>
<@endsection