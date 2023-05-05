<!-- Sidebar Start -->
<div class="sidebar position-fixed top-0 bottom-0 bg-white border-end">
    <div class="d-flex align-items-center p-3">
      <a href="/dashboard" class="sidebar-logo {{ Request::is('dashboard*') ? 'active' : '' }}">
        <img src="{{ asset('img/logo-dark.png') }}" alt="Company Web" />
      </a>
      <i
        class="sidebar-toggle fa-regular fa-circle-left ms-auto fs-5 d-none d-md-block"
      ></i>
    </div>
    <ul class="sidebar-menu p-3 m-0 mb-0">
      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Home</li>
      <li class="sidebar-menu-item {{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard">
          <i class="fa-solid fa-home sidebar-menu-item-icon"></i>
          Dashboard</a
        >
      </li>
      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Form</li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/messages*') ? 'active' : '' }}">
        <a href="/dashboard/messages">
          <i class="fa-solid fa-envelope sidebar-menu-item-icon"></i>
          Pesan</a
        >
      </li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/softskill*') ? 'active' : '' }}">
        <a href="/dashboard/softskill">
          <i class="fa-solid fa-s sidebar-menu-item-icon"></i> Softskill
        </a>
      </li>
      @can('admin')
      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Pelatihan</li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/trainings*') ? 'active' : '' }}">
        <a href="/dashboard/trainings">
          <i class="fa-regular fa-file-lines sidebar-menu-item-icon"></i>
          Program
        </a>
      </li>
      <li class="sidebar-menu-item d-none">
        <a href="#">
          <i class="fa-solid fa-rupiah-sign sidebar-menu-item-icon"></i>
          Biaya
        </a>
      </li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/schedules*') ? 'active' : '' }}">
        <a href="/dashboard/schedules">
          <i class="fa-solid fa-calendar-days sidebar-menu-item-icon"></i>
          Jadwal
        </a>
      </li>

      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Blog</li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/categories*') ? 'active' : '' }}">
        <a href="/dashboard/categories">
          <i class="fa-solid fa-rectangle-list sidebar-menu-item-icon"></i>
          Kategori
        </a>
      </li>
      <li class="sidebar-menu-item {{  Request::is('dashboard/posts*') ? 'active' : ''  }}">
        <a href="/dashboard/posts">
          <i class="fa-regular fa-newspaper sidebar-menu-item-icon"></i>
          Artikel
        </a>
      </li>
      @endcan

      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Iklan</li>
      @can('admin')
      <li class="sidebar-menu-item {{ Request::is('dashboard/advertisement*') ? 'active' : '' }}">
        <a href="/dashboard/advertisement">
          <i class="fa-solid fa-bullhorn sidebar-menu-item-icon"></i>
          Program
        </a>
      </li>
      @endcan
      <li class="sidebar-menu-item {{ Request::is('dashboard/adssoftskill*') ? 'active' : '' }}">
        <a href="/dashboard/adssoftskill">
          <i class="fa-solid fa-s sidebar-menu-item-icon"></i> Softskill
        </a>
      </li>
      @can('admin')
      <li class="sidebar-menu-divider mt-3 mb-1 text-uppercase">Staff</li>
      <li class="sidebar-menu-item {{ Request::is('dashboard/staff*') ? 'active' : '' }}">
        <a href="/dashboard/staff">
          <i class="fa-solid fa-users-rectangle sidebar-menu-item-icon"></i>
          Customer Service
        </a>
      </li>
      @endcan
    </ul>
  </div>
  <div class="sidebar-overlay"></div>
  <!-- Sidebar End -->