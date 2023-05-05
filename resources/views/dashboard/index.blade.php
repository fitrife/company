@extends('dashboard.layouts.main')

@section('container')

<!-- dashboard start -->
<div class="dashboard-section section-padding">
    <div class="row">
      <div class="col-lg-12">
        @if(session()->has('success'))
        <div class="alert alert-success" role="alert">
          {{ session('success') }}
        </div>
        @endif  
      </div>
      <div class="col-lg-8">
        <div class="row">
          <div class="col-md-6">
            <div class="card info-card programs-card">
              <div class="card-body shadow">
                <h6 class="card-title">Pesan Masuk</h6>
                <div class="d-flex align-items-center">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                  >
                    <i class="fa-solid fa-envelope"></i>
                  </div>
                  <div
                    class="ps-3 d-flex justify-content-center align-items-center"
                  >
                    {{-- <h6 class="mb-0 me-2">{{ $kemnaker }}</h6> --}}
                    <span class="text-muted small">Pendaftar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card info-card programs-card">
              <div class="card-body shadow">
                <h6 class="card-title">Pendaftar Softskill</h6>
                <div class="d-flex align-items-center">
                  <div
                    class="card-icon rounded-circle d-flex align-items-center justify-content-center"
                  >
                    <i class="fa-solid fa-s"></i>
                  </div>
                  <div
                    class="ps-3 d-flex justify-content-center align-items-center"
                  >
                    {{-- <h6 class="mb-0 me-2">{{ $kemnaker }}</h6> --}}
                    <span class="text-muted small">Pendaftar</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-2">
            <div class="card shadow recent-sales overflow-auto">
              <div class="filter">
                <a class="icon" href="#" data-bs-toggle="dropdown"
                  ><i class="bi bi-three-dots"></i>
                </a>
                <ul
                  class="dropdown-menu dropdown-menu-end dropdown-menu-arrow"
                >
                  <li class="dropdown-header text-start">
                    <h6>Filter</h6>
                  </li>
                  <li><a class="dropdown-item" href="#">Today</a></li>
                  <li>
                    <a class="dropdown-item" href="#">This Month</a>
                  </li>
                  <li><a class="dropdown-item" href="#">This Year</a></li>
                </ul>
              </div>
              <div class="card-body">
                <h6 class="card-title">Peserta <span>| Terbaru</span></h6>
                <table id="pesertaDashboard" class="table table-striped m-auto">
                  <thead>
                    <tr>
                      <th class="text-success">Nama Peserta</th>
                      <th class="text-success">Program Pembinaan</th>
                      <th class="text-success">Perusahaan</th>
                      <th class="text-success">Status Sertifikat</th>
                    </tr>
                  </thead>
                  <tbody>
                  {{-- @foreach ($students as $student) 
                    <tr>
                      <td>{{ $student->name }}</td>
                      <td>{{ $student->program->name }}</td>
                      <td>{{ $student->company }}</td>
                      <td>{{ $student->certificate }}</td>
                    </tr>
                  @endforeach --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4">
        <div class="row me-0">
          <div class="card shadow">
            <div class="card-body  pb-0">
              <h6 class="card-title">
                Artikel <span>| Terbaru</span>
              </h6>
              {{-- @if($posts->count())
              <div class="news">
                @foreach ($posts as $post)
                <div class="post-item clearfix">
                    @if ($post->image)
                    <img src="{{ asset('storage/' .$post->image) }}" alt="{{ $post->title }}">
                    @else
                    <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" alt="{{ $post->title }}">
                    @endif
                  <h4>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                  </h4>
                  <p>
                    {{ $post->excerpt }}
                  </p>
                </div>
                @endforeach
              </div>
              @else 
                <p class="text-center fs-4">
                    Artikel Tidak Ditemukan
                </p>
            @endif --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

@endsection