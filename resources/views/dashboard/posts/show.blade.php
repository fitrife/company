@extends('dashboard.layouts.main')

@section('container')

    <!-- Article Start -->
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
                <i class="fa-solid fa-eye me-1"></i> Lihat Artikel
                </li>
            </ol>
            </nav>
        </div>
        </div>
        <div class="row">
        <div class="col-lg-8 mb-5 mb-lg-0">
            <div class="post border-0 mb-0 pb-0">
                <figure class="post-image position-relative">
                    @if ($post->image)
                        <img loading="lazy" src="{{ asset('storage/' .$post->image) }}" class="img-fluid"
                        alt="{{ $post->name }}">
                    @endif
                    @if (isset($post->source))
                    <footer class="position-absolute bottom-0 text-light w-100" style="background-color: rgba(0, 0, 0, 0.5);">
                        <small class="p-2 m-0">Image by <a href="{{ $post->source }}" class="text-light" target="_blank">{{ $post->copyright }}</a>
                        </small>
                    </footer>
                    @else
                    @endif
                </figure>

                <div class="post-body">
                    <div class="post-header">
                        <div class="post-meta">
                            <span class="post-author">
                            <i class="far fa-user"></i>{{ $post->author->name }}
                            </span>
                            <span class="post-category">
                            <i class="far fa-folder-open"></i> {{ $post->kategori->name }}
                            </span>
                            <span class="post-date"
                            ><i class="far fa-calendar"></i> {{ $post->created_at }}</span
                            >
                        </div>
                        <h2 class="post-title">
                            <a href="news-single.html"
                            >{{ $post->title }}</a
                            >
                        </h2>
                    </div>
                    <!-- header end -->

                    <!-- Post start -->
                    <div class="post-content">
                        <p>
                            {!! $post->body !!}
                        </p>
                    </div>
            </div>
            <!-- post-body end -->
            </div>
        </div>
        <!-- Post end -->
        </div>
    </div>
    <!-- Article End -->

@endsection