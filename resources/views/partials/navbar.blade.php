   <!-- header start -->
   <header class="header fixed-top">
    <div class="container-xl">
      <div
        class="header-main d-flex justify-content-between align-items-center"
      >
        {{-- <div class="header-logo"> --}}
          <a href="/" class="header-logo">
            <img src="{{ asset('img/logo-light.png') }}" alt="New Project" />
          </a>
        {{-- </div> --}}
        {{-- <a class="header-brand">New Project</a> --}}
        <div class="open-header-menu">
          <span></span>
        </div>
        <div class="menu-overlay"></div>
        <nav class="header-menu">
          <div class="close-header-menu">
            <i class="fas fa-times"></i>
          </div>
          <ul class="menu">
            <li class="menu-item menu-item-has-children">
              <a href="#" data-bs-toggle="sub-menu"
                >Tentang Kami <i class="fas fa-chevron-down"></i
              ></a>
              <ul class="sub-menu">
                <li class="sub-menu-item">
                  <a class="nav-link" href="/profil-perusahaan"
                    >Profil Perusahaan</a
                  >
                </li>
                <li class="sub-menu-item">
                  <a lass="nav-link" href="/alumni">Daftar Alumni</a>
                </li>
                <li class="sub-menu-item">
                  <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a class="nav-link" href="/program-training">Program Training</a>
            </li>
            <li class="menu-item menu-item-has-children">
              <a href="#" data-bs-toggle="sub-menu">Informasi <i class="fas fa-chevron-down"></i
                >
              </a>
              <ul class="sub-menu">
                <li class="sub-menu-item">
                  <a class="nav-link {{ ($active === "blog") ? 'active' : '' }}" href="/blog">Artikel</a>
                </li>
                <li class="sub-menu-item">
                  <a class="nav-link {{ ($active === "galeri") ? 'active' : '' }}" href="/galeri">Galeri</a>
                </li>
              </ul>
            </li>
            <li class="menu-item">
              <a class="nav-link" href="/registrasi">Pendaftaran</a>
            </li>
            <li class="menu-item">
              <a class="nav-link" href="/jadwal">jadwal</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <!-- header end -->
   <!-- header start -->
    {{-- <header class="header">
        <div class="container">
          <div
            class="header-main d-flex justify-content-between align-items-center"
          >
            <div class="header-logo">
              <a href="/" class="{{ ($active === "home") ? 'active' : '' }}">
                <img src="/img/logo.png" alt="brand-logo" />
              </a>
            </div>
            <div class="open-header-menu">
              <span></span>
            </div>
            <div class="menu-overlay"></div>
            <nav class="header-menu">
              <div class="close-header-menu">
                <i class="fas fa-times"></i>
              </div>
              <ul class="menu">
                <li class="menu-item menu-item-has-children">
                  <a href="#" data-bs-toggle="sub-menu">Tentang Kami <i class="fas fa-chevron-down"></i
                    ></a>
                  <ul class="sub-menu">
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/profil-perusahaan">Profil Perusahaan</a>
                    </li>
                    <li class="sub-menu-item">
                      <a lass="nav-link" href="/alumni">Daftar Alumni</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/hubungi-kami">Hubungi Kami</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#" data-bs-toggle="sub-menu">Layanan Kami <i class="fas fa-chevron-down"></i
                    ></a>
                  <ul class="sub-menu">
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/sertifikasi/sertifikasi-kemnaker-ri">Sertifikasi Kemnaker RI</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/sertifikasi/sertifikasi-bnsp">Sertifikasi BNSP</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/program-pembinaan/juru-las-welder">Sertifikasi Juru Las</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/pengurusan-sio">Pengurusan SIO</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#" data-bs-toggle="sub-menu">Informasi <i class="fas fa-chevron-down"></i
                    ></a>
                  <ul class="sub-menu">
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/unduh-peraturan-k3">Unduh Peraturan K3 RI</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/blog">Artikel</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/info-loker-k3">Info Loker</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/galeri">Galeri</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item menu-item-has-children">
                  <a href="#" data-bs-toggle="sub-menu">Pendaftaran <i class="fas fa-chevron-down"></i
                    ></a>
                  <ul class="sub-menu">
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/pendaftaran-kemnaker-ri">Training Kemnaker RI</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/pendaftaran-bnsp">Training BNSP</a>
                    </li>
                    <li class="sub-menu-item">
                      <a class="nav-link" href="/permohonan-inhouse-training">Permohonan InHouse Training</a>
                    </li>
                  </ul>
                </li>
                <li class="menu-item">
                  <a class="nav-link" href="/jadwal">jadwal</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </header> --}}
      <!-- header end -->