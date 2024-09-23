<div class="aside">
  <div class="aside-header">
    <h3 class="aside-title">Kafa-Ka Admin</h3>
    <div class="aside-addon">
      <button class="btn btn-label-primary btn-icon btn-lg" data-toggle="aside">
        <i class="fa fa-times aside-icon-minimize"></i>
        <i class="fa fa-thumbtack aside-icon-maximize"></i>
      </button>
    </div>
  </div>
  <div class="aside-body" data-simplebar data-simplebar-direction="ltr">
    <!-- BEGIN Menu -->
    <div class="menu">
      <div class="menu-item">
        <a href="{{ route('admin.dashboard') }}" class="menu-item-link {{ Helper::active_class(['admin']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-desktop"></i>
          </div>
          <span class="menu-item-text">Dashboard</span>
        </a>
      </div>
      <!-- BEGIN Menu Section -->
      <div class="menu-section">
        <div class="menu-section-icon">
          <i class="fa fa-ellipsis-h"></i>
        </div>
        <h2 class="menu-section-text">Menu Utama</h2>
      </div>
      <!-- END Menu Section -->
      <div class="menu-item">
        <a href="{{ route('admin.user.list') }}" class="menu-item-link {{ Helper::active_class(['admin/user*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-user"></i>
          </div>
          <span class="menu-item-text">User</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="{{ route('admin.penggalangan-dana') }}" class="menu-item-link {{ Helper::active_class(['admin/penggalangan-dana*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-box-archive"></i>
          </div>
          <span class="menu-item-text">Penggalangan Dana</span>
          <div class="menu-item-addon">
            <span class="badge badge-success">45</span>
          </div>
        </a>
      </div>

      <div class="menu-item">
        <a href="{{ route('admin.donasi') }}" class="menu-item-link {{ Helper::active_class(['admin/donasi*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-hand-holding-heart"></i>
          </div>
          <span class="menu-item-text">Donasi</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="{{ route('admin.agent') }}" class="menu-item-link {{ Helper::active_class(['admin/agent*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-handshake-angle"></i>
          </div>
          <span class="menu-item-text">Agen</span>
          <div class="menu-item-addon">
            <span class="badge badge-danger">6</span>
          </div>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-item-link {{ Helper::active_class(['admin/highlight*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-lightbulb"></i>
          </div>
          <span class="menu-item-text">Disoroti</span>
        </a>
      </div>

      <!-- BEGIN Menu Section -->
      <div class="menu-section">
        <div class="menu-section-icon">
          <i class="fa fa-ellipsis-h"></i>
        </div>
        <h2 class="menu-section-text">Master Data</h2>
      </div>
      <!-- END Menu Section -->
      <div class="menu-item">
        <a href="#" class="menu-item-link {{ Helper::active_class(['admin/kategori*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-shapes"></i>
          </div>
          <span class="menu-item-text">Kategori</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="#" class="menu-item-link {{ Helper::active_class(['admin/banner*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-images"></i>
          </div>
          <span class="menu-item-text">Banner</span>
        </a>
      </div>
      
      <!-- BEGIN Menu Section -->
      <div class="menu-section">
        <div class="menu-section-icon">
          <i class="fa fa-ellipsis-h"></i>
        </div>
        <h2 class="menu-section-text">Lainnya</h2>
      </div>
      <!-- END Menu Section -->
      <div class="menu-item">
        <a href="#" class="menu-item-link {{ Helper::active_class(['admin/setting*']) }}">
          <div class="menu-item-icon">
            <i class="fa fa-gear"></i>
          </div>
          <span class="menu-item-text">Pengaturan</span>
        </a>
      </div>

      <div class="menu-item">
        <a href="{{ route('home') }}" class="menu-item-link">
          <div class="menu-item-icon">
            <i class="fa fa-right-from-bracket"></i>
          </div>
          <span class="menu-item-text">Keluar</span>
        </a>
      </div>
    </div>
    <!-- END Menu -->
  </div>
</div>