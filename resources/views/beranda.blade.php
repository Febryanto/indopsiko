
<!DOCTYPE html>

{{--  Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.  --}}
<html lang="en">

	{{--  <!-- begin::Head -->  --}}
	<head>

		{{--  <!--begin::Base Path (base relative path for assets of this page) -->  --}}
		<base href="./">

		{{--  <!--end::Base Path -->  --}}
		<meta charset="utf-8" />
		<title>	INDOPSIKO</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		{{--  <!--begin::Fonts -->  --}}
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		{{--  <!--end::Fonts -->  --}}

		{{--  <!--begin::Page Vendors Styles(used by this page) -->  --}}
		<link href="assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		{{--  <!--end::Page Vendors Styles -->  --}}

		{{--  <!--begin:: Global Mandatory Vendors -->  --}}
		<link href="assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		{{--  <!--end:: Global Mandatory Vendors -->  --}}

		{{--  <!--begin:: Global Optional Vendors -->  --}}
		<link href="assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="assets/css/demo5/pages/pricing/pricing-1.css">
		{{--  <!-- UIkit CSS -->  --}}
<link rel="stylesheet" href="assets/css/uikit/css/uikit.min.css" />

{{--  <!-- UIkit JS -->  --}}
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/uikit@3.2.6/dist/js/uikit-icons.min.js"></script>

		{{--  <!--end:: Global Optional Vendors -->  --}}

		{{--  <!--begin::Global Theme Styles(used by all pages) -->  --}}
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />

		{{--  <!--end::Global Theme Styles -->  --}}

		{{--  <!--begin::Layout Skins(used by all pages) -->  --}}

		{{--  <!--end::Layout Skins -->  --}}
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />


	</head>

	{{--  <!-- end::Head -->  --}}

	{{--  <!-- begin::Body -->  --}}
	<body class="kt-page--loading-enabled kt-page--loading kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		{{--  <!-- begin:: Page -->  --}}

		{{--  <!-- begin:: Header Mobile -->  --}}
		<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed ">
			<div class="kt-header-mobile__brand">
				<a class="kt-header-mobile__logo" href="demo5/index.html">
					<img alt="Logo" src="assets/images/logooo.png" width="202px" height="40px" />
				</a>

			</div>
			<div class="kt-header-mobile__toolbar">
				<div class="kt-header-mobile__nav">
					<div class="dropdown">
						<button type="button" class="btn btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--md kt-svg-icon--success">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect id="bound" x="0" y="0" width="24" height="24" />
									<path d="M15.9956071,6 L9,6 C7.34314575,6 6,7.34314575 6,9 L6,15.9956071 C4.70185442,15.9316381 4,15.1706419 4,13.8181818 L4,6.18181818 C4,4.76751186 4.76751186,4 6.18181818,4 L13.8181818,4 C15.1706419,4 15.9316381,4.70185442 15.9956071,6 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3" />
									<path d="M10.1818182,8 L17.8181818,8 C19.2324881,8 20,8.76751186 20,10.1818182 L20,17.8181818 C20,19.2324881 19.2324881,20 17.8181818,20 L10.1818182,20 C8.76751186,20 8,19.2324881 8,17.8181818 L8,10.1818182 C8,8.76751186 8.76751186,8 10.1818182,8 Z" id="Rectangle-19-Copy-3" fill="#000000" />
								</g>
							</svg> </button>
						<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md">
							<ul class="kt-nav kt-nav--bold kt-nav--md-space kt-margin-t-20 kt-margin-b-20">
								<li class="kt-nav__item">
									<a class="kt-nav__link active" href="index.html">
										<span class="kt-nav__link-icon"><i class="fa fa-home"></i></span>
										<span class="kt-nav__link-text">HOME</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" href="#profil">
										<span class="kt-nav__link-icon"><i class="fa fa-id-card"></i></span>
										<span class="kt-nav__link-text">PROFIL</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" href="#karir">
										<span class="kt-nav__link-icon"><i class="fa fa-briefcase"></i></span>
										<span class="kt-nav__link-text">KARIR</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" href="#">
										<span class="kt-nav__link-icon"><i class="fa fa-info"></i></span>
										<span class="kt-nav__link-text">PENGUMUMAN</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" href="#klien">
										<span class="kt-nav__link-icon"><i class="fa fa-users"></i></span>
										<span class="kt-nav__link-text">KLIEN</span>
									</a>
								</li>
								<li class="kt-nav__item">
									<a class="kt-nav__link" href="#kontak">
										<span class="kt-nav__link-icon"><i class="fa fa-phone"></i></span>
										<span class="kt-nav__link-text">KONTAK</span>
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<button class="kt-header-mobile__toolbar-topbar-toggler" id="kt_header_mobile_topbar_toggler"><i class="flaticon2-down"></i></button>
			</div>
</div>
		{{--  <!-- end:: Header Mobile -->  --}}
		<div class="kt-grid kt-grid--hor kt-grid--root">
			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-wrapper " id="kt_wrapper">

					{{--  <!-- begin:: Header -->  --}}
					<div id="kt_header" class="kt-header kt-grid__item  kt-header--fixed " data-ktheader-minimize="on">
	<div class="kt-header__top">
		<div class="kt-container">

			{{--  <!-- begin:: Brand -->  --}}
			<div class="kt-header__brand   kt-grid__item" id="kt_header_brand">
				<div class="kt-header__brand-logo">
					<a href="/">
						<img alt="Logo" src="assets/images/logos/logo-5.png" height="140px"/>
					</a>
				</div>

				<div class="kt-header__brand-nav">
					<div class="dropdown"  style="padding:0 5px ;">
						<a  href="index.html"><button type="button" class="btn btn-pill btn-default">
							<i class="fa fa-home"></i>
							HOME
						</button></a>
					</div>
					<div class="dropdown" style="padding:0 5px ;">
						<a href="#profil"><button type="button" class="btn btn-pill btn-default">
								<i class="fa fa-id-card"></i>
								PROFIL
							</button></a>
					</div>
					<div class="dropdown" style="padding:0 5px ;">
						<a href="#klien"><button type="button" class="btn btn-pill btn-default">
								<i class="fa fa-users"></i>
								KLIEN
							</button></a>
					</div>
					<div class="dropdown" style="padding:0 5px ;">
						<a href="#"><button type="button" class="btn btn-pill btn-default">
								<i class="fa fa-info"></i>
								PENGUMUMAN
							</button></a>
					</div>
					<div class="dropdown" style="padding:0 5px ;">
						<a href="#karir"><button type="button" class="btn btn-pill btn-default">
							<i class="fa fa-briefcase"></i>
							KARIR
						</button></a>
					</div>
					<div class="dropdown" style="padding:0 5px ;">
						<a href="#kontak"><button type="button" class="btn btn-pill btn-default">
							<i class="fa fa-phone"></i>
							KONTAK
						</button></a>
					</div>
				</div>

			</div>
			{{--  <!-- end:: Brand -->  --}}


			{{--  <!-- begin:: Header Topbar -->  --}}
		<div class="kt-header__topbar">
				{{--  <!--begin: User bar -->  --}}
				<div class="kt-header__topbar-item kt-header__topbar-item--user">
				{{--  <!--<div class="kt-notification__custom kt-space-between" style="padding: 0 10px;">
								<a href="/masuk" class="btn btn-label btn-label-success btn-sm btn-bold" >Masuk</a>
					</div>-->  --}}
					{{--  <!-- <div class="kt-notification__custom kt-space-between">
								<a href="/daftar" class="btn btn-label btn-label-brand btn-sm btn-bold">Daftar</a>
					</div> -->  --}}
				</div>

				{{--  <!--end: User bar -->  --}}
		</div>
			{{--  <!-- end:: Header Topbar -->  --}}
		</div>
	</div>

</div>
					{{--  <!-- end:: Header -->  --}}
					<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
						<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">

							{{--  <!-- begin:: Subheader -->  --}}
							<div class="kt-subheader   kt-grid__item" id="kt_subheader">
								<div class="kt-container">

								</div>
							</div>

							{{--  <!-- end:: Subheader -->  --}}

							{{--  <!-- begin:: Content -->  --}}
							<div class="kt-portlet">
	<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
		<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
			<!-- begin:: Subheader -->
			<div class="kt-subheader   kt-grid__item" id="kt_subheader">
				<div class="kt-container ">
				</div>
			</div>
			<div class="kt-container  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="kt-portlet kt-portlet--height-fluid kt-widget19">
							<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
								<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
								  	<div class="carousel-inner">
									    <div class="carousel-item active">
									      	<img class="d-block w-100"  height="400px" src="assets/images/bg1.jpeg" alt="First slide">
									    </div>
									    <div class="carousel-item">
									      	<img class="d-block w-100"  height="400px" src="assets/images/bg2.jpeg" alt="Second slide">
									    </div>
									    <div class="carousel-item">
									      	<img class="d-block w-100"  height="400px" src="assets/images/bg3.jpeg" alt="Third slide">
									    </div>
									    <!--Search -->
										<div class="row align-self-center">

											<div class="col-lg-3"></div>
											<div class="col-lg-6">
												<form autocomplete="off" class="kt-form ng-untouched ng-pristine ng-invalid" novalidate="">
													<div class="kt-section__content kt-margin-t-100  kt-section__content--solid--">
														<div class="kt-searchbar">
															<div class="input-group input-group-lg">
																<div class="input-group-prepend">
																	<span class="input-group-text" id="basic-addon1">
																	<!--	<svg xmlns:xlink="http://www.w3.org/1999/xlink" class="kt-svg-icon" height="24px" version="1.1" viewBox="0 0 24 24" width="24px" xmlns="http://www.w3.org/2000/svg"><g fill="none" fill-rule="evenodd" stroke="none" stroke-width="1"><rect height="24" width="24" x="0" y="0"></rect><path d="M14.2928932,16.7071068 C13.9023689,16.3165825 13.9023689,15.6834175 14.2928932,15.2928932 C14.6834175,14.9023689 15.3165825,14.9023689 15.7071068,15.2928932 L19.7071068,19.2928932 C20.0976311,19.6834175 20.0976311,20.3165825 19.7071068,20.7071068 C19.3165825,21.0976311 18.6834175,21.0976311 18.2928932,20.7071068 L14.2928932,16.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path><path d="M11,16 C13.7614237,16 16,13.7614237 16,11 C16,8.23857625 13.7614237,6 11,6 C8.23857625,6 6,8.23857625 6,11 C6,13.7614237 8.23857625,16 11,16 Z M11,18 C7.13400675,18 4,14.8659932 4,11 C4,7.13400675 7.13400675,4 11,4 C14.8659932,4 18,7.13400675 18,11 C18,14.8659932 14.8659932,18 11,18 Z" fill="#000000" fill-rule="nonzero"></path></g>
																		</svg>-->
																	</span>
																</div>
												<!--			<input autocomplete="off" class="form-control mat-input-element mat-form-field-autofill-control cdk-text-field-autofill-monitored ng-untouched ng-pristine ng-invalid" placeholder="Masukkan NIK UEP Atau Nama KUBE" type="text" id="input_data" aria-invalid="false" aria-required="false">
																	<button class="btn btn-warning btn-font-lg kt-margin-l-4" id="button" type="button">Cari</button>-->
															</div>
														</div><!----><!----><!---->
													</div>
												</form>
											</div>
											<div class="col-lg-3"></div>
										</div>
										<!-- end search-->
								  	</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			<div class="kt-container  kt-grid__item kt-grid__item--fluid">
				<div class="row">
					<div class="col-lg-6">
						<!--begin:: Foto UEP-KUBE-->
						<div class="kt-portlet kt-portlet--height-fluid">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										GALERI
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<a href="/detail_terbaik"><img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri1.jpg" alt="First slide">
											<div class="carousel-caption d-none d-md-block">
												<h5>INDOPSIKO</h5>
												<p>Training Pengantar</p>
											</div></a>
										</div>
										<div class="carousel-item">
											<a href="/detail_terbaik"><img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri2.jpg" alt="Second slide">
											<div class="carousel-caption d-none d-md-block">
												<h5>INDOPSIKO</h5>
												<p>Training Pengantar</p>
											</div></a>
										</div>
										<div class="carousel-item">
											<a href="/detail_terbaik"><img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri3.jpg" alt="Third slide">
											<div class="carousel-caption d-none d-md-block">
												<h5>INDOPSIKO</h5>
												<p>Training Pengantar</p>
											</div></a>
										</div>
										<div class="carousel-item">
											<a href="/detail_terbaik"><img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri4.jpg" alt="fourth slide">
											<div class="carousel-caption d-none d-md-block">
												<h5>INDOPSIKO</h5>
												<p>Training Pengantar</p>
											</div></a>
										</div>
									</div>
									<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
										<span class="carousel-control-prev-icon" aria-hidden="true"></span>
										<span class="sr-only">Previous</span>
									</a>
									<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
										<span class="carousel-control-next-icon" aria-hidden="true"></span>
										<span class="sr-only">Next</span>
									</a>
								</div>
							</div>
						</div>
					</div>
					<!-- Pendamping Terbaik -->

					<div class="col-lg-6">
					<section id="profil">
						<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										PROFIL
									</h3>
								</div>
								<div class="kt-portlet__head-toolbar">
									<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
										<li class="nav-item">
											<a class="nav-link active" data-toggle="tab" role="tab">

											</a>
										</li>

									</ul>
								</div>
						<!---->	</div>
                         <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(assets/images/profile.jpeg)">
            <h3 class="kt-widget19__title kt-font-light">

				</h3>
			<div class="kt-widget19__shadow"></div>
			<div class="kt-widget19__labels">
			<!--	<a href="#" class="btn btn-label-light-o2 btn-bold ">Recent</a> -->
			</div>
        </div>
    </div>
							 <div class="kt-portlet__body">
        <div class="kt-widget19__wrapper">
            <div class="kt-widget19__content">
                <div class="kt-widget19__userpic">
                    <img src="assets/images/logooo.png " alt="" >
                </div>
                <div class="kt-widget19__info">
                   <!-- <a href="#" class="kt-widget19__username">
						Anna Krox
					</a>
                    <span class="kt-widget19__time">
						UX/UI Designer, Google
					</span> -->
                </div>
              <!--  <div class="kt-widget19__stats">
                    <span class="kt-widget19__number kt-font-brand">
						18
					</span>
                    <a href="#" class="kt-widget19__comment">
						Comments
					</a>
                </div>-->
            </div>
            <div class="kt-widget19__text">
               Pembangunan manusia seutuhnya. Demikian kalimat sakral yang telah menjadi komitmen dasar bagi Bangsa dan Negara. Aplikasinya menjadi kewajiban bersama, baik pemerintah maupun rakyatnya. <!--Arahnya adalah tercapainya kehidupan yang sejahtera, adil dan makmur, lahir maupun batin. Dalam kerangka itu orang beraktifitas menurut bidang dan keahlian masing-masing, dan satu aktifitas yang menghasilkan produk unggul pasti dikerjakan oleh tangan-tangan yang ahli dan profesional.
Dengan semakin menyempitnya spesifikasi pengetahuan dan keilmuan, maka semakin terfokus pula orang terhadap bidang yang digelutinya. Sebuah perusahaan yang memproduksi satu barang memerlukan sekian banyak bidang keahlian, sehingga pengaturan sumber daya manusia menjadi satu hal tersendiri yang harus ditangani secara baik dan benar, matang dan profesional.
PT.INDOPSIKO INDONESIA dengan mantap mengambil peran sebagai profesi di bidang Sumber Daya Manusia ini dengan maksud mampu mencakup multi manfaat. Satu sisi membantu dan mempersiapkan calon tenaga kerja dalam memasuki dunia kerja, pada sisi lain mempermudah dan membantu para pengusaha dalam mendapatkan tenaga-tenaga kerja yang dibutuhkannya, dan sisi yang lainnya lagi adalah merupakan bidang kerja/usaha yang menawarkan profit tersendiri.
Dengan dukungan dan keyakinan dari berbagai pihak, maka PT. INDOPSIKO INDONESIA telah menancapkan komitmennya dan terus berupaya untuk memberikan layanan yang terbaik serta menjadi rekanan yang terpercaya.-->
            </div>
        </div>
        <div class="kt-widget19__action">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
    Selengkapnya
  </button>

  <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">

        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Profil</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

        <!-- Modal body -->
        <div class="modal-body">
         Pembangunan manusia seutuhnya. Demikian kalimat sakral yang telah menjadi komitmen dasar bagi Bangsa dan Negara. Aplikasinya menjadi kewajiban bersama, baik pemerintah maupun rakyatnya. Arahnya adalah tercapainya kehidupan yang sejahtera, adil dan makmur, lahir maupun batin. Dalam kerangka itu orang beraktifitas menurut bidang dan keahlian masing-masing, dan satu aktifitas yang menghasilkan produk unggul pasti dikerjakan oleh tangan-tangan yang ahli dan profesional.
Dengan semakin menyempitnya spesifikasi pengetahuan dan keilmuan, maka semakin terfokus pula orang terhadap bidang yang digelutinya. Sebuah perusahaan yang memproduksi satu barang memerlukan sekian banyak bidang keahlian, sehingga pengaturan sumber daya manusia menjadi satu hal tersendiri yang harus ditangani secara baik dan benar, matang dan profesional.
PT.INDOPSIKO INDONESIA dengan mantap mengambil peran sebagai profesi di bidang Sumber Daya Manusia ini dengan maksud mampu mencakup multi manfaat. Satu sisi membantu dan mempersiapkan calon tenaga kerja dalam memasuki dunia kerja, pada sisi lain mempermudah dan membantu para pengusaha dalam mendapatkan tenaga-tenaga kerja yang dibutuhkannya, dan sisi yang lainnya lagi adalah merupakan bidang kerja/usaha yang menawarkan profit tersendiri.
Dengan dukungan dan keyakinan dari berbagai pihak, maka PT. INDOPSIKO INDONESIA telah menancapkan komitmennya dan terus berupaya untuk memberikan layanan yang terbaik serta menjadi rekanan yang terpercaya.
        </div>

        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>

      </div>
    </div>
  </div>
        </div>
    </div>
						</div>
					</div>
					</section>
				    </div>

			</div>

			<!--Widget -->
			<div class="kt-container">
			    <div class="row">
			        <div class="col-lg-4">
			            <a href="/informasi" class="kt-portlet kt-iconbox kt-iconbox--danger kt-iconbox--animate-fast">
			                <div class="kt-portlet__body">
			                    <div class="kt-iconbox__body">
			                        <div class="kt-iconbox__icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
    </g>
</svg>
			                        </div>
			                        <div class="kt-iconbox__desc">
			                            <h3 class="kt-iconbox__title">
											Kontraktor Tenaga Kerja

										</h3>
			                            <div class="kt-iconbox__content">

			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </a>
			        </div>
			        <div class="col-lg-4">
			            <a href="/produk" class="kt-portlet kt-iconbox kt-iconbox--warning kt-iconbox--animate">
			                <div class="kt-portlet__body">
			                    <div class="kt-iconbox__body">
			                        <div class="kt-iconbox__icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <polygon points="0 0 24 0 24 24 0 24"/>
        <path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
        <rect fill="#000000" x="6" y="11" width="9" height="2" rx="1"/>
        <rect fill="#000000" x="6" y="15" width="5" height="2" rx="1"/>
    </g>
</svg>
									</div>
			                        <div class="kt-iconbox__desc">
			                            <h3 class="kt-iconbox__title">
											Training Pengantar
										</h3>
			                            <div class="kt-iconbox__content">

			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </a>
			        </div>
			        <div class="col-lg-4">
			            <a href="/faq" class="kt-portlet kt-iconbox kt-iconbox--info kt-iconbox--animate-slow">
			                <div class="kt-portlet__body">
			                    <div class="kt-iconbox__body">
			                        <div class="kt-iconbox__icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon">
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
        <rect x="0" y="0" width="24" height="24"/>
        <path d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z" fill="#000000"/>
        <path d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z" fill="#000000" opacity="0.3"/>
    </g>
</svg>
			                        </div>
			                        <div class="kt-iconbox__desc">
			                            <h3 class="kt-iconbox__title">
								            Psikotest
										</h3>
			                            <div class="kt-iconbox__content">

			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </a>
			        </div>
			    </div>
			</div>

		</div>
	</div>
</div>
<script src="assets/vendors/general/jquery/dist/jquery.min.js"></script>
</script>
							<!-- end:: Content -->


<!--begin career-->
<section id="karir">
<div class="kt-portlet ">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
			<!--<i class="la la-leaf"></i>-->
			</span>
			<h1 class="kt-portlet__head-title">
				KARIR
			</h1>
		</div>
	</div>

	<div class="kt-portlet__body">
		<div class="kt-pricing-1 kt-pricing-1--fixed">

			<div class="kt-pricing-1__items row">
			<div uk-slider="center: true">

    <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

        <ul class="uk-slider-items uk-child-width-1-2@s uk-grid">
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="assets/images/bg1.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h1 class="uk-card-title">PT YAMAHA</h1>
                        <p>ADMIN<p>
   <button class="uk-button uk-button-danger" uk-toggle="target: #my-id" type="button">Lamar</button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Lamar Sekarang</h2>
        <br>
        <!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
				<div class="form-group">
						<label for="exampleInputName1">Nama Lengkap</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="exampleSelect1">Lowongan</label>
						<select class="form-control" id="exampleSelect1" name="id_lowongan">
							<option>Admin</option>
							<option>Supervisor</option>
							<option>Driver</option>
							<option>Security</option>
							<option>Customer Service</option>
						</select>
					</div>
					<div class="form-group">
						<label for="example-number-input">NPWP</label>
							<input class="form-control" type="number" placeholder="NPWP" id="example-number-input" name="npwp">
					</div>
					<div class="form-group">
						<label for="example-number-input">NIK</label>
							<input class="form-control" type="number" placeholder="NIK" id="example-number-input" name="nik">
					</div>
					<div class="form-group">
						<label for="example-number-input">No. KK</label>
							<input class="form-control" type="number" placeholder="No. KK" id="example-number-input" name="no_kk">
					</div>
					<div class="form-group">
						<label for="example-tel-input">No. Handphone</label>
							<input class="form-control" type="tel" placeholder="No. Handphone" id="example-tel-input" name="no_hp">
					</div>
					<div class="form-group">
						<label for="example-text-input">Sosmed</label>
							<input class="form-control" type="text" placeholder="akun sosial media" id="example-text-input" name="medsos">
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Pendidikan</label>
						<select multiple="" class="form-control" id="exampleSelect2" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D3</option>
							<option>S1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Alamat</label>
						<textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Upload CV</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" id="customFile" name="cv">
						  	<label class="custom-file-label" for="customFile">Pilih File</label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->
    </div>
</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="assets/images/bg2.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h1 class="uk-card-title">BANK DANAMON</h1>
                        <p>SUPERVISOR</p>
                        <button class="uk-button uk-button-danger" uk-toggle="target: #my-id" type="button">Lamar</button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Lamar Sekarang</h2>
        <br>
        <!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
				<div class="form-group">
						<label for="exampleInputName1">Nama Lengkap</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="exampleSelect1">Lowongan</label>
						<select class="form-control" id="exampleSelect1" name="id_lowongan">
							<option>Admin</option>
							<option>Supervisor</option>
							<option>Driver</option>
							<option>Security</option>
							<option>Customer Service</option>
						</select>
					</div>
					<div class="form-group">
						<label for="example-number-input">NPWP</label>
							<input class="form-control" type="number" placeholder="NPWP" id="example-number-input" name="npwp">
					</div>
					<div class="form-group">
						<label for="example-number-input">NIK</label>
							<input class="form-control" type="number" placeholder="NIK" id="example-number-input" name="nik">
					</div>
					<div class="form-group">
						<label for="example-number-input">No. KK</label>
							<input class="form-control" type="number" placeholder="No. KK" id="example-number-input" name="no_kk">
					</div>
					<div class="form-group">
						<label for="example-tel-input">No. Handphone</label>
							<input class="form-control" type="tel" placeholder="No. Handphone" id="example-tel-input" name="no_hp">
					</div>
					<div class="form-group">
						<label for="example-text-input">Sosmed</label>
							<input class="form-control" type="text" placeholder="akun sosial media" id="example-text-input" name="medsos">
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Pendidikan</label>
						<select multiple="" class="form-control" id="exampleSelect2" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D3</option>
							<option>S1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Alamat</label>
						<textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Upload CV</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" id="customFile" name="cv">
						  	<label class="custom-file-label" for="customFile">Pilih File</label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->
    </div>
</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="assets/images/bg2.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">OSEDA</h3>
                        <p>CUSTOMER SERVICE.</p>
                         <button class="uk-button uk-button-danger" uk-toggle="target: #my-id" type="button">Lamar</button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Lamar Sekarang</h2>
        <br>
        <!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
				<div class="form-group">
						<label for="exampleInputName1">Nama Lengkap</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="exampleSelect1">Lowongan</label>
						<select class="form-control" id="exampleSelect1" name="id_lowongan">
							<option>Admin</option>
							<option>Supervisor</option>
							<option>Driver</option>
							<option>Security</option>
							<option>Customer Service</option>
						</select>
					</div>
					<div class="form-group">
						<label for="example-number-input">NPWP</label>
							<input class="form-control" type="number" placeholder="NPWP" id="example-number-input" name="npwp">
					</div>
					<div class="form-group">
						<label for="example-number-input">NIK</label>
							<input class="form-control" type="number" placeholder="NIK" id="example-number-input" name="nik">
					</div>
					<div class="form-group">
						<label for="example-number-input">No. KK</label>
							<input class="form-control" type="number" placeholder="No. KK" id="example-number-input" name="no_kk">
					</div>
					<div class="form-group">
						<label for="example-tel-input">No. Handphone</label>
							<input class="form-control" type="tel" placeholder="No. Handphone" id="example-tel-input" name="no_hp">
					</div>
					<div class="form-group">
						<label for="example-text-input">Sosmed</label>
							<input class="form-control" type="text" placeholder="akun sosial media" id="example-text-input" name="medsos">
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Pendidikan</label>
						<select multiple="" class="form-control" id="exampleSelect2" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D3</option>
							<option>S1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Alamat</label>
						<textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Upload CV</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" id="customFile" name="cv">
						  	<label class="custom-file-label" for="customFile">Pilih File</label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->
    </div>
</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="assets/images/bg1.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Honda</h3>
                        <p>Driver</p>
                         <button class="uk-button uk-button-danger" uk-toggle="target: #my-id" type="button">Lamar</button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Lamar Sekarang</h2>
        <br>
        <!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
				<div class="form-group">
						<label for="exampleInputName1">Nama Lengkap</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="exampleSelect1">Lowongan</label>
						<select class="form-control" id="exampleSelect1" name="id_lowongan">
							<option>Admin</option>
							<option>Supervisor</option>
							<option>Driver</option>
							<option>Security</option>
							<option>Customer Service</option>
						</select>
					</div>
					<div class="form-group">
						<label for="example-number-input">NPWP</label>
							<input class="form-control" type="number" placeholder="NPWP" id="example-number-input" name="npwp">
					</div>
					<div class="form-group">
						<label for="example-number-input">NIK</label>
							<input class="form-control" type="number" placeholder="NIK" id="example-number-input" name="nik">
					</div>
					<div class="form-group">
						<label for="example-number-input">No. KK</label>
							<input class="form-control" type="number" placeholder="No. KK" id="example-number-input" name="no_kk">
					</div>
					<div class="form-group">
						<label for="example-tel-input">No. Handphone</label>
							<input class="form-control" type="tel" placeholder="No. Handphone" id="example-tel-input" name="no_hp">
					</div>
					<div class="form-group">
						<label for="example-text-input">Sosmed</label>
							<input class="form-control" type="text" placeholder="akun sosial media" id="example-text-input" name="medsos">
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Pendidikan</label>
						<select multiple="" class="form-control" id="exampleSelect2" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D3</option>
							<option>S1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Alamat</label>
						<textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Upload CV</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" id="customFile" name="cv">
						  	<label class="custom-file-label" for="customFile">Pilih File</label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->
    </div>
</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="uk-card uk-card-default">
                    <div class="uk-card-media-top">
                        <img src="assets/images/bg3.jpeg" alt="">
                    </div>
                    <div class="uk-card-body">
                        <h3 class="uk-card-title">Astra</h3>
                        <p>Security</p>
                         <button class="uk-button uk-button-danger" uk-toggle="target: #my-id" type="button">Lamar</button>

<!-- This is the modal -->
<div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
        <h2 class="uk-modal-title">Lamar Sekarang</h2>
        <br>
        <!--begin::Form-->
			<form class="kt-form">
				<div class="kt-portlet__body">
				<div class="form-group">
						<label for="exampleInputName1">Nama Lengkap</label>
						<input type="name" class="form-control" id="exampleInputName1" placeholder="Nama Lengkap" name="nama_lengkap">
					</div>
					<div class="form-group">
						<label>Email</label>
						<input type="email" class="form-control" aria-describedby="emailHelp" placeholder="Email" name="email">
					</div>

					<div class="form-group">
						<label for="exampleSelect1">Lowongan</label>
						<select class="form-control" id="exampleSelect1" name="id_lowongan">
							<option>Admin</option>
							<option>Supervisor</option>
							<option>Driver</option>
							<option>Security</option>
							<option>Customer Service</option>
						</select>
					</div>
					<div class="form-group">
						<label for="example-number-input">NPWP</label>
							<input class="form-control" type="number" placeholder="NPWP" id="example-number-input" name="npwp">
					</div>
					<div class="form-group">
						<label for="example-number-input">NIK</label>
							<input class="form-control" type="number" placeholder="NIK" id="example-number-input" name="nik">
					</div>
					<div class="form-group">
						<label for="example-number-input">No. KK</label>
							<input class="form-control" type="number" placeholder="No. KK" id="example-number-input" name="no_kk">
					</div>
					<div class="form-group">
						<label for="example-tel-input">No. Handphone</label>
							<input class="form-control" type="tel" placeholder="No. Handphone" id="example-tel-input" name="no_hp">
					</div>
					<div class="form-group">
						<label for="example-text-input">Sosmed</label>
							<input class="form-control" type="text" placeholder="akun sosial media" id="example-text-input" name="medsos">
					</div>
					<div class="form-group">
						<label for="exampleSelect2">Pendidikan</label>
						<select multiple="" class="form-control" id="exampleSelect2" name="pendidikan">
							<option>SD</option>
							<option>SMP</option>
							<option>SMA</option>
							<option>D3</option>
							<option>S1</option>
						</select>
					</div>
					<div class="form-group">
						<label for="exampleTextarea">Alamat</label>
						<textarea class="form-control" id="exampleTextarea" name="alamat" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Upload CV</label>
						<div></div>
						<div class="custom-file">
						  	<input type="file" class="custom-file-input" id="customFile" name="cv">
						  	<label class="custom-file-label" for="customFile">Pilih File</label>
						</div>
					</div>
				</div>
				<div class="kt-portlet__foot">
					<div class="kt-form__actions">
						<button type="reset" class="btn btn-primary">Submit</button>
						<button type="reset" class="btn btn-secondary">Cancel</button>
					</div>
				</div>
			</form>
			<!--end::Form-->
    </div>
</div>
                    </div>
                </div>
            </li>
        </ul>

        <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slider-item="previous"></a>
        <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slider-item="next"></a>

    </div>

    <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

</div>

</div>

</div>

</div>
</div>
</section>
	</div>
</div>
<!--end career-->

<!--begin client-->
<section id="klien">
 <div class="kt-portlet">
		<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<span class="kt-portlet__head-icon">
			<!--<i class="la la-leaf"></i>-->
			</span>
			<h1 class="kt-portlet__head-title">
				KLIEN
			</h1>
		</div>
	</div>
	</div>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
 <div class="uk-child-width-1-4@m" uk-grid>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="assets/images/klien1.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">PT JOHNSON</h3>
                <p><a href="#">www.johnson.com</a></p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="assets/images/laz.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">LAZADA</h3>
                <p><a href="#">www.lazada.co.id</a></p>
            </div>
        </div>
    </div>
     <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="assets/images/klien3.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">INBISCO</h3>
                <p><a href="#">www.inbisco.com</a></p>
            </div>
        </div>
    </div>
    <div>
        <div class="uk-card uk-card-default">
            <div class="uk-card-media-top">
                <img src="assets/images/TORABIKA.jpg" alt="">
            </div>
            <div class="uk-card-body">
                <h3 class="uk-card-title">PT TORA BIKA</h3>
                <p><a href="#">www.torabika.com</a>.</p>
            </div>
        </div>
    </div>
</div>


<!--end client-->
						</div>
						</section>
					</div>
					<!-- begin:: Footer -->
					<div class="kt-footer  kt-footer--extended  kt-grid__item">
						<div class="kt-footer__top">
							<div class="kt-container ">
								<div class="row">
									<div class="col-lg-4">
										<div class="kt-footer__section">
											<h3 class="kt-footer__title">PT INDOPSIKO INDONESIA</h3>
											<div class="kt-footer__content">
												Kantor Pusat : <br>
												Jl. Raya Pahlawan Revolusi No. 59 Jakarta Timur <br>
												Pondok Bambu Kec. Duren Sawit <br>
												Kota Jakarta Timur - DKI Jakarta (13430)
											</div>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="kt-footer__section" style="text-align: center">
											<a class="kt-header-mobile__logo" href="demo5/index.html">

											</a>
										</div>
									</div>

									<div class="col-md-3">
									<section id="kontak">
										<div class="kt-footer__section" style="text-align: center;">
											<h3 class="kt-footer__title">KONTAK</h3>
											<div class="kt-footer__content">
												<div class="kt-footer__nav">
													<div class="kt-footer__nav-section">
														<i class="fa fa-phone p-2" style="font-size: 17px;"> (021) 861-5604 </i>
														<i class="fa fa-fax p-2" style="font-size: 17px;"> (021) 861-1507</i>
														<i class="fa fa-envelope p-2" style="font-size: 17px;"> hrd@indopsiko.com</i>
													</div>
												</div>
											</div>
										</div>
										</section>
									</div>

								</div>
							</div>
						</div>



        <!--end::Portlet-->

						<div class="kt-footer__bottom">
							<div class="kt-container-fluid mx-auto">
								<div class="kt-footer__wrapper">
									<div class="kt-footer__copyright">
										&copy; 2019 <a href="http://dinsos.jakarta.go.id/" target="_blank">PT INDOPSIKO INDONESIA</a>
									</div>
								<!--	<div class="kt-footer__menu">
										<a href="/tentang_kami">Tentang Kami</a>
										<a href="/kebijakan_privasi">Kebijakan Privasi</a>
										<a href="/kontak">Kontak</a>
									</div>-->
								</div>
							</div>
						</div>
					</div>
					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		<!-- <div id="kt_quick_panel" class="kt-quick-panel">
			<a href="#" class="kt-quick-panel__close" id="kt_quick_panel_close_btn"><i class="flaticon2-delete"></i></a>
			<div class="kt-quick-panel__nav">
				<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand  kt-notification-item-padding-x" role="tablist">
					<li class="nav-item active">
						<a class="nav-link active" data-toggle="tab" href="#kt_quick_panel_tab_notifications" role="tab">Notifications</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_logs" role="tab">Audit Logs</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#kt_quick_panel_tab_settings" role="tab">Settings</a>
					</li>
				</ul>
			</div>

		</div> -->

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->


		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->


		<!-- end::Demo Panel -->

		<!--Begin:: Chat-->


		<!--ENd:: Chat-->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#3d94fb",
						"light": "#ffffff",
						"dark": "#282a3c",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#3d94fb",
						"warning": "#ffb822",
						"danger": "#fd27eb"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

		<!--begin:: Global Mandatory Vendors -->
		<script src="assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="assets/js/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtizBEi9K7hfwI3uUi0AOrYFAx_hh0gkA&callback=initMap"></script>
		<script src="assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="assets/js/pages/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--MAPS-->
		<script>

		var map;
		var places = [
		    ['UEP',"<h4>UEP Ibu Sri</h4><h5>Bentuk Usaha : Kuliner</h5><p>Jenis Usaha : Warung Nasi</p>", -6.2027227,106.7984563,"red"],
		    	//Jakarta Selatan
		    ['KUBE',"<h4>KUBE Melati Anggun</h4><h5>Ketua : Siti Jubaedah</h5><p>Warung Kelontong</p>", -6.2596507,106.8063112, "blue"],
			['KUBE',"<h4>KUBE Koba VI</h4><h5>Ketua : Ani</h5><p>Kue dan Minuman</p>", -6.2617817,106.8077988, "blue"],
			['KUBE',"<h4>KUBE Nangka 0207</h4><h5>Ketua : Siti Suhaeni</h5><p>Kerajinan Tangan & Minuman</p>", -6.2634937,106.7996963, "blue"],
			['KUBE',"<h4>KUBE Wijaya PKH</h4><h5>Ketua : Sri Novitasari</h5><p>Makanan dan Minuman</p>", -6.244699,106.809315, "blue"],
			['KUBE',"<h4>KUBE Squad Gandut</h4><h5>Ketua : Umiyati</h5><p>Kue dan Makanan</p>", -6.2573781,106.7915037, "blue"],
			['KUBE',"<h4>KUBE Karya Utama Mahali</h4><h5>Ketua : Siti Zaenab</h5><p>Makanan dan Minuman</p>", -6.2533081,106.7939966, "blue"],
			['KUBE',"<h4>KUBE Hanan Dasa</h4><h5>Ketua : Asih Budi Astuti</h5><p>Makanan</p>", -6.2582179,106.7855277, "blue"],
			['KUBE',"<h4>KUBE Ratu Pandan</h4><h5>Ketua : Jumenah</h5><p>Makanan</p>", -6.2428816,106.7839262, "blue"],
			['KUBE',"<h4>KUBE Prabu Antena</h4><h5>Ketua : Mindasari</h5><p>Kripik Tempe</p>", -6.2569277,106.8042798, "blue"],
			['KUBE',"<h4>KUBE Bamus Jaya</h4><h5>Ketua : Supartinah</h5><p>Makanan Ringan</p>", -6.2512525,106.78798, "blue"],
			['KUBE',"<h4>KUBE Anggrek Indah</h4><h5>Ketua : Andriyanti</h5><p>Katering dan Makanan Siap Saji</p>", -6.2589276,106.780352, "blue"],
			['KUBE',"<h4>KUBE Melati Indah</h4><h5>Ketua : Suliha</h5><p>Katering dan Makanan Siap Saji</p>", -6.2425286,106.7813014, "blue"],
			['KUBE',"<h4>KUBE Teratai Sejahtera</h4><h5>Ketua : Fitria Pramandari</h5><p>Warung Kopi & Gorengan</p>", -6.22781,106.7899634, "blue"],
			['KUBE',"<h4>KUBE Melati Sejahtera</h4><h5>Ketua : Yani</h5><p>Katering dan Makanan Siap Saji</p>", -6.2335916,106.7798469, "blue"],
			['KUBE',"<h4>KUBE Berkah Sejahtera</h4><h5>Ketua : Irmaniah</h5><p>Warung Kelontong</p>", -6.2309542,106.7727319, "blue"],
			['KUBE',"<h4>KUBE Jaya Baru</h4><h5>Ketua : Mastinah</h5><p>Aneka Kue</p>", -6.2740136,106.770839, "blue"],
			['KUBE',"<h4>KUBE Putera Harapan</h4><h5>Ketua : Ahadah</h5><p>Warung Kelontong</p>", -6.2309542,106.7727319, "blue"],
			['KUBE',"<h4>KUBE Sahabat Ibu</h4><h5>Ketua : Asmanah</h5><p>Warung Kelontong</p>", -6.2126253,106.7842675, "blue"],
			['KUBE',"<h4>KUBE Manunggal Berkarya</h4><h5>Ketua : Nena Sukmawati</h5><p>Warung Kelontong</p>", -6.2372726,106.7757646, "blue"],
			['KUBE',"<h4>KUBE Kurnia Bersama</h4><h5>Ketua : Yumaeni</h5><p>Warung Kelontong</p>", -6.2342258,106.7717552, "blue"],

			//Jakarta Barat
			['KUBE','<h4>KUBE Kemuning</h4><h5>Ketua : Nenih Nidyani</h5><p>Warung Kelontong</p>', -6.1367767,106.7125833,"blue"],
		    ['KUBE','<h4>KUBE Seroja</h4><h5>Ketua : Fitri Sari</h5><p>Warung Kelontong</p>', -6.1350116,106.7055243,"blue"],
			['KUBE','<h4>KUBE Kenanga</h4><h5>Ketua : Mulyani BT.M</h5><p>Warung Kelontong</p>', -6.1292618,106.7217428,"blue"],
			['KUBE','<h4>KUBE Kamboja</h4><h5>Ketua : Saodah</h5><p>Warung Kelontong</p>', -6.1283433,106.7249078,"blue"],
			['KUBE','<h4>KUBE Kecapi</h4><h5>Ketua : Suaeri</h5><p>Warung Kelontong</p>', -6.1568583,106.7463396,"blue"],
			['KUBE','<h4>KUBE Salak</h4><h5>Ketua : Muhimah</h5><p>Warung Kelontong</p>', -6.1560136,106.7476948,"blue"],
			['KUBE','<h4>KUBE Jati</h4><h5>Ketua : Semi</h5><p>Warung Kelontong</p>', -6.1476648,106.7316234,"blue"],
			['KUBE','<h4>KUBE Mahoni</h4><h5>Ketua : Nurhimah</h5><p>Warung Kelontong</p>', -6.1233972,106.7300744,"blue"],
			['KUBE','<h4>KUBE Albasia</h4><h5>Ketua : Uun Ulimana</h5><p>Warung Kelontong</p>', -6.1511367,106.7268071,"blue"],
			['KUBE','<h4>KUBE Pinus</h4><h5>Ketua : Setya Rahayu</h5><p>Warung Kelontong</p>', -6.1476193,106.7298177,"blue"],
			['KUBE','<h4>KUBE Lavender</h4><h5>Ketua : Eni Wiharti, BT.S</h5><p>Warung Kelontong</p>', -6.1587936,106.7133265,"blue"],
			['KUBE','<h4>KUBE Tulip</h4><h5>Ketua : Tri Utami</h5><p>Warung Kelontong</p>', -6.1587317,106.7150038,"blue"],
			['KUBE','<h4>KUBE Asoka</h4><h5>Ketua : Siti Jamilah</h5><p>Warung Kelontong</p>', -6.1588577,106.7149468,"blue"],
			['KUBE','<h4>KUBE Anggrek</h4><h5>Ketua : Unayah</h5><p>Warung Kelontong</p>', -6.1588127,106.7149588,"blue"],
			['KUBE','<h4>KUBE Dahlia</h4><h5>Ketua : Sumiati</h5><p>Catering</p>', -6.1599077,106.7457028,"blue"],
			['KUBE','<h4>KUBE Mawar</h4><h5>Ketua : Eva Yunita</h5><p>Warung Kelontong</p>', -6.1607427,106.7307848,"blue"],
			['KUBE','<h4>KUBE Manggis II</h4><h5>Ketua : Tri Nurohmah</h5><p>Warung Kelontong</p>', -6.1568147,106.7406248,"blue"],
			['KUBE','<h4>KUBE Manggis</h4><h5>Ketua : Siti Khodijah</h5><p>Warung Kelontong</p>', -6.1340647,106.7429892,"blue"],
			['KUBE','<h4>KUBE Nanas</h4><h5>Ketua : Saliyah</h5><p>Warung Kelontong</p>', -6.1382667,106.7469538,"blue"],
			['KUBE','<h4>KUBE Semangka</h4><h5>Ketua : Nitisah M.</h5><p>Warung Kelontong</p>', -6.1347557,106.7435448,"blue"],
			['KUBE','<h4>KUBE Mawar I</h4><h5>Ketua : Irah Rapiko</h5><p>Warung Kelontong</p>', -6.1681837,106.7044618,"blue"],
			['KUBE','<h4>KUBE Mawar II</h4><h5>Ketua : Masito</h5><p>Warung Kelontong</p>', -6.1660457,106.7014358,"blue"],
			['KUBE','<h4>KUBE Melati I</h4><h5>Ketua : Hadijah A. Abdad</h5><p>Warung Kelontong</p>', -6.1487632,106.697662,"blue"],
			['KUBE','<h4>KUBE Melati II</h4><h5>Ketua : Asmara</h5><p>Warung Kelontong</p>', -6.1481522,106.697678,"blue"],
			['KUBE','<h4>KUBE Sumber Harapan</h4><h5>Ketua : Suryanah</h5><p>Warung Kelontong</p>', -6.1349727,106.7002723,"blue"],
			['KUBE','<h4>KUBE Tunas Harapan</h4><h5>Ketua : Siti Amah</h5><p>Warung Kelontong</p>', -6.1253986,106.6933224,"blue"],
			['KUBE','<h4>KUBE Tunas Harapan</h4><h5>Ketua : Anisah</h5><p>Warung Kelontong</p>', -6.1103457,106.7150358,"blue"],
			['KUBE','<h4>KUBE Tunas Mekar</h4><h5>Ketua : Kokom Komala Sari</h5><p>Warung Kelontong</p>', -6.1197737,106.7116538,"blue"],
			['KUBE','<h4>KUBE Barokah Mas</h4><h5>Ketua : Epon</h5><p>Warung Kelontong</p>', -6.1144607,106.6908798,"blue"],
			['KUBE','<h4>KUBE Rukun Tetangga</h4><h5>Ketua : Halimah</h5><p>Warung Kelontong</p>', -6.1146633,106.704574,"blue"]

		];

		/*
		 * use google maps api built-in mechanism to attach dom events
		 */
		google.maps.event.addDomListener(window, "load", function () {

		    /*
		     * create map
		     */
		    var map = new google.maps.Map(document.getElementById("map_div"), {
				center: new google.maps.LatLng(-6.2101951, 106.8587996),
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				zoom:15
		    });

		    /*
		     * create infowindow (which will be used by markers)
		     */
		    var infoWindow = new google.maps.InfoWindow();
		    /*
		     * create bounds (which will be used auto zoom map)
		     */
		    var bounds = new google.maps.LatLngBounds();

		    /*
		     * marker creater function (acts as a closure for html parameter)
		     */
		    function createMarker(options, html) {
		        var marker = new google.maps.Marker(options);
				bounds.extend(options.position);
		        if (html) {
		            google.maps.event.addListener(marker, "click", function () {
		                infoWindow.setContent(html);
		                infoWindow.open(options.map, this);
		                map.setZoom(14);
		                map.setCenter(marker.getPosition());
		            });
		        }
		        return marker;
		    }

		    /*
		     * add markers to map
		     */
		    for (var i = 0; i < places.length; i++) {
		        var point = places[i];
		        createMarker({
		            position: new google.maps.LatLng(point[2], point[3]),
		            map: map,
		            icon: {
		                path: "M27.648 -41.399q0 -3.816 -2.7 -6.516t-6.516 -2.7 -6.516 2.7 -2.7 6.516 2.7 6.516 6.516 2.7 6.516 -2.7 2.7 -6.516zm9.216 0q0 3.924 -1.188 6.444l-13.104 27.864q-0.576 1.188 -1.71 1.872t-2.43 0.684 -2.43 -0.684 -1.674 -1.872l-13.14 -27.864q-1.188 -2.52 -1.188 -6.444 0 -7.632 5.4 -13.032t13.032 -5.4 13.032 5.4 5.4 13.032z",
		                scale: 0.6,
		                strokeWeight: 0.2,
		                strokeColor: 'black',
		                strokeOpacity: 1,
		                fillColor: point[4],
		                fillOpacity: 0.85,
		            },
		        }, point[1]);
		    };
		    map.fitBounds(bounds);
		});
		</script>
		<!--END:MAPS-->	</body>

	<!-- end::Body -->
</html>
