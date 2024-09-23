@push('metas')
  <title>Admin User Detail | Kafa-ka.com</title>
@endpush

@extends('layouts.admin.app')

@section('content')
  <!-- BEGIN Header Holder -->
  <div class="header-holder header-holder-desktop">
    <div class="header-container container-fluid g-4">
      <h4 class="header-title">Detail User</h4>
      <i class="header-divider"></i>
      <div class="header-wrap header-wrap-block justify-content-start">
        <!-- BEGIN Breadcrumb -->
        <div class="breadcrumb breadcrumb-transparent mb-0">
          <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">
            <div class="breadcrumb-icon">
              <i data-feather="home"></i>
            </div>
            <span class="breadcrumb-text">Dashboard</span>
          </a>
          <a href="{{ route('admin.user.list') }}" class="breadcrumb-item">
            <span class="breadcrumb-text">User</span>
          </a>
          <div class="breadcrumb-item">
            <span class="breadcrumb-text">Detail</span>
          </div>
        </div>
        <!-- END Breadcrumb -->
      </div>
      <div class="header-wrap">
        <button class="btn btn-label-info btn-icon" id="fullscreen-trigger" data-bs-toggle="tooltip"
          title="Toggle fullscreen" data-bs-placement="left">
          <i class="fa fa-expand fullscreen-icon-expand"></i>
          <i class="fa fa-compress fullscreen-icon-compress"></i>
        </button>
      </div>
    </div>
  </div>
  <!-- END Header Holder -->

  <!-- BEGIN Header Holder -->
  <div class="header-holder header-holder-mobile">
    <div class="header-container container-fluid g-4">
      <div class="header-wrap header-wrap-block justify-content-start w-100">
        <!-- BEGIN Breadcrumb -->
        <div class="breadcrumb breadcrumb-transparent mb-0">
          <a href="{{ route('admin.dashboard') }}" class="breadcrumb-item">
            <div class="breadcrumb-icon">
              <i data-feather="home"></i>
            </div>
            <span class="breadcrumb-text">Dashboard</span>
          </a>
          <a href="{{ route('admin.user.list') }}" class="breadcrumb-item">
            <span class="breadcrumb-text">User</span>
          </a>
          <div class="breadcrumb-item">
            <span class="breadcrumb-text">Detail</span>
          </div>
        </div>
        <!-- END Breadcrumb -->
      </div>
    </div>
  </div>
  <!-- END Header Holder -->

  <div class="content">
    <div class="container-fluid g-4">
      <div class="row">
        <div class="col-md-4">
          <div class="portlet">
            <div class="relative portlet-header portlet-header-bordered justify-content-center">
              <div class="widget14 p-3">
                <div class="avatar avatar-label-success avatar-circle widget14-avatar">
                  <div class="avatar-display" id="thumbnail-shortname">CS</div>
                </div>
                <h3 class="widget14-title" id="thumbnail-fullname">Charlie Stone</h3>
                <span class="widget14-subtitle">Member</span>
              </div>
              <div class="absolute top-[12px] right-[12px]">
                <button class="btn btn-label-secondary btn-icon btn-circle"  data-bs-toggle="tooltip" title="Ubah" data-bs-original-title="Ubah">
                  <i class="fa fa-edit"></i>
                </button>
              </div>
            </div>
            <div class="portlet-body">
              <div class="rich-list rich-list-flush">
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Email</h4>
                    <span class="rich-list-subtitle">user@dummy.com</span>
                  </div>
                </div>
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Nomor HP</h4>
                    <span class="rich-list-subtitle">0812675377861</span>
                  </div>
                </div>
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Alamat</h4>
                    <span class="rich-list-subtitle">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic, quas?</span>
                  </div>
                </div>
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Kota, Provinsi</h4>
                    <span class="rich-list-subtitle">Sukoharjo, Jawa Tengah</span>
                  </div>
                </div>
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Dibuat pada</h4>
                    <span class="rich-list-subtitle">25 Agustus 2022 13:20</span>
                  </div>
                </div>
                <div class="rich-list-item">
                  <div class="rich-list-content">
                    <h4 class="rich-list-title">Verifikasi Pada</h4>
                    <span class="rich-list-subtitle">25 Agustus 2022 14:03</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8">
          <div class="portlet mb-0">
            <div class="portlet-header portlet-header-bordered">
              {{-- <h3 class="portlet-title">Portlet</h3> --}}
              <div class="portlet-addon">
                <!-- BEGIN Nav -->
                <div class="nav nav-pills" id="portlet2-tab">
                  <a class="nav-item nav-link active" id="portlet2-donasi-tab" data-bs-toggle="tab"
                    href="#portlet2-donasi">Donasi</a>
                  <a class="nav-item nav-link" id="portlet2-fundraising-tab" data-bs-toggle="tab"
                    href="#portlet2-fundraising">Galang Dana</a>
                  <a class="nav-item nav-link" id="portlet2-balance-tab" data-bs-toggle="tab"
                    href="#portlet2-balance">Log Balance</a>
                </div>
                <!-- END Nav -->
              </div>
            </div>
            <div class="portlet-body">
              <!-- BEGIN Tab -->
              <div class="tab-content">
                <div class="tab-pane fade show active" id="portlet2-donasi">
                  <p class="mb-0">It has survived not only five centuries, but also the leap into electronic
                    typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of
                    Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software
                    like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
                <div class="tab-pane fade" id="portlet2-fundraising">
                  <p class="mb-0">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                    has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                    galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,
                    but also the leap into electronic typesetting, remaining essentially unchanged</p>
                </div>
                <div class="tab-pane fade" id="portlet2-balance">
                  <button class="btn btn-warning mb-0">19-Agu-2022</button>
                  <!-- BEGIN Timeline -->
									<div class="timeline rich-list-bordered rich-list-action">
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-primary"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-star"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Consectetur</h4>
														<span class="rich-list-subtitle">Dapibus ac facilisis in</span>
													</div>
													<div class="rich-list-append">
														<span class="badge badge-success">9+</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-success"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-rocket"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Porta</h4>
														<p class="rich-list-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<span class="rich-list-subtitle">Cras justo odio</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-danger"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-cog"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Vestibulum</h4>
														<span class="rich-list-subtitle">Morbi leo risus</span>
													</div>
													<div class="rich-list-append">
														<span class="badge badge-info">new</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
									</div>
									<!-- END Timeline -->
                  <button class="btn btn-warning mb-0">18-Agu-2022</button>
                  <!-- BEGIN Timeline -->
									<div class="timeline rich-list-bordered rich-list-action">
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-primary"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-star"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Consectetur</h4>
														<span class="rich-list-subtitle">Dapibus ac facilisis in</span>
													</div>
													<div class="rich-list-append">
														<span class="badge badge-success">9+</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-success"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-rocket"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Porta</h4>
														<p class="rich-list-paragraph">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
														<span class="rich-list-subtitle">Cras justo odio</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
										<div class="timeline-item">
											<div class="timeline-pin">
												<i class="marker marker-circle text-danger"></i>
											</div>
											<div class="timeline-content">
												<!-- BEGIN Rich List -->
												<div class="rich-list-item">
													<div class="rich-list-prepend">
														<!-- BEGIN Avatar -->
														<div class="avatar">
															<div class="avatar-display">
																<i class="fa fa-cog"></i>
															</div>
														</div>
														<!-- END Avatar -->
													</div>
													<div class="rich-list-content">
														<h4 class="rich-list-title">Vestibulum</h4>
														<span class="rich-list-subtitle">Morbi leo risus</span>
													</div>
													<div class="rich-list-append">
														<span class="badge badge-info">new</span>
													</div>
												</div>
												<!-- END Rich List -->
											</div>
										</div>
									</div>
									<!-- END Timeline -->
                </div>
              </div>
              <!-- END Tab -->
            </div>
          </div>

        </div>

      </div>
    </div>
  </div>
@endsection

@push('script')
  <script>
    "use strict";
    $(function() {
      $("#datatable").DataTable({
        responsive: true,
        pageLength: 10,
        lengthMenu: [
          [5, 10, 25, 50, -1],
          [5, 10, 25, 50, "All"]
        ],
      })
    });
  </script>
@endpush
