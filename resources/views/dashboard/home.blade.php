@extends('beranda')
@section('homecontent')

<div class="row">
    <div class="col-lg-12">
        <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
            <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                <div id="carouselExampleSlidesOnly" class="carousel slide pointer-event" data-ride="carousel">
                      <div class="carousel-inner">
                        @foreach ($data as $i)
                        <div class="carousel-item active">
                              <img class="d-block w-100" height="200px" src="assets/images/banner/banner.jpeg" alt="First slide">
                        </div>
                        @endforeach
                      </div>
                </div>
            </div>
        </div>
    </div>
</div>
        {{-- end banner --}}
                {{-- begin galeri & profil --}}
				<div class="row">
                    <div class="col-lg-6">
						<div class="kt-portlet kt-portlet--height-fluid">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										Galeri
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div id="carouselExampleIndicators" class="carousel slide pointer-event" data-ride="carousel">
									<ol class="carousel-indicators">
										<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
										<li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="3" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="4" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="5" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="6" class=""></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="7" class=""></li>
									</ol>
									<div class="carousel-inner">
										<div class="carousel-item active">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri1.jpg" alt="First slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri2.jpg" alt="Second slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri3.jpeg" alt="Third slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
                                        </div>
                                        <div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri4.jpeg" alt="fourth slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri5.jpeg" alt="Fifth slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
                                        </div>
                                        <div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri6.jpg" alt="Third slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
                                        </div>
                                        <div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri7.jpeg" alt="fourth slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
										</div>
										<div class="carousel-item">
											<img class="d-block w-100" width="450px" height="450px" src="assets/images/galeri/galeri8.jpg" alt="Fifth slide">
											<div class="carousel-caption d-none d-md-block">
											</div>
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

					<div class="col-lg-6">
				    	<section id="profil">
                            <div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
                                <div class="kt-portlet__head">
                                    <div class="kt-portlet__head-label">
                                        <h3 class="kt-portlet__head-title">
                                            PROFIL
                                        </h3>
                                    </div>
                                </div>
                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(/assets/images/galeri/galeri1.jpg)">
                                            <h3 class="kt-widget19__title kt-font-light">
                                            </h3>
                                        </div>
                                        <div class="kt-widget19__wrapper">
                                            <div class="kt-widget19__content">
                                                {{-- <div class="kt-widget19__userpic">
                                                    <img src="/assets/images/logooo.png " alt="" >
                                                </div> --}}
                                            </div>
                                            <div class="kt-widget19__text"style="padding:5px 5px 5px 5px">
                                            Pembangunan manusia seutuhnya. Demikian kalimat sakral yang telah menjadi komitmen dasar bagi Bangsa dan Negara. Aplikasinya menjadi kewajiban bersama, baik pemerintah maupun rakyatnya. {{--Arahnya adalah tercapainya kehidupan yang sejahtera, adil dan makmur, lahir maupun batin. Dalam kerangka itu orang beraktifitas menurut bidang dan keahlian masing-masing, dan satu aktifitas yang menghasilkan produk unggul pasti dikerjakan oleh tangan-tangan yang ahli dan profesional.
                                            Dengan semakin menyempitnya spesifikasi pengetahuan dan keilmuan, maka semakin terfokus pula orang terhadap bidang yang digelutinya. Sebuah perusahaan yang memproduksi satu barang memerlukan sekian banyak bidang keahlian, sehingga pengaturan sumber daya manusia menjadi satu hal tersendiri yang harus ditangani secara baik dan benar, matang dan profesional.
                                                PT.INDOPSIKO INDONESIA dengan mantap mengambil peran sebagai profesi di bidang Sumber Daya Manusia ini dengan maksud mampu mencakup multi manfaat. Satu sisi membantu dan mempersiapkan calon tenaga kerja dalam memasuki dunia kerja, pada sisi lain mempermudah dan membantu para pengusaha dalam mendapatkan tenaga-tenaga kerja yang dibutuhkannya, dan sisi yang lainnya lagi adalah merupakan bidang kerja/usaha yang menawarkan profit tersendiri.
                                                Dengan dukungan dan keyakinan dari berbagai pihak, maka PT. INDOPSIKO INDONESIA telah menancapkan komitmennya dan terus berupaya untuk memberikan layanan yang terbaik serta menjadi rekanan yang terpercaya.--}}
                                            </div>
                                        </div>
                                        <div class="kt-widget19__action">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                                Selengkapnya
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                {{-- end galeri & profil --}}

  {{-- The Modal --}}
    <div class="modal fade" id="myModal">
        <div class="modal-dialog">
        <div class="modal-content">

                {{-- Modal Header --}}
                <div class="modal-header">
                <h4 class="modal-title">Profil</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                {{-- Modal body --}}
                <div class="modal-body" style="text-align:justify;">
                Pembangunan manusia seutuhnya. Demikian kalimat sakral yang telah menjadi komitmen dasar bagi Bangsa dan Negara. Aplikasinya menjadi kewajiban bersama, baik pemerintah maupun rakyatnya. Arahnya adalah tercapainya kehidupan yang sejahtera, adil dan makmur, lahir maupun batin. Dalam kerangka itu orang beraktifitas menurut bidang dan keahlian masing-masing, dan satu aktifitas yang menghasilkan produk unggul pasti dikerjakan oleh tangan-tangan yang ahli dan profesional.
                    Dengan semakin menyempitnya spesifikasi pengetahuan dan keilmuan, maka semakin terfokus pula orang terhadap bidang yang digelutinya. Sebuah perusahaan yang memproduksi satu barang memerlukan sekian banyak bidang keahlian, sehingga pengaturan sumber daya manusia menjadi satu hal tersendiri yang harus ditangani secara baik dan benar, matang dan profesional.
                    PT.INDOPSIKO INDONESIA dengan mantap mengambil peran sebagai profesi di bidang Sumber Daya Manusia ini dengan maksud mampu mencakup multi manfaat. Satu sisi membantu dan mempersiapkan calon tenaga kerja dalam memasuki dunia kerja, pada sisi lain mempermudah dan membantu para pengusaha dalam mendapatkan tenaga-tenaga kerja yang dibutuhkannya, dan sisi yang lainnya lagi adalah merupakan bidang kerja/usaha yang menawarkan profit tersendiri.
                    Dengan dukungan dan keyakinan dari berbagai pihak, maka PT. INDOPSIKO INDONESIA telah menancapkan komitmennya dan terus berupaya untuk memberikan layanan yang terbaik serta menjadi rekanan yang terpercaya.
                </div>

                {{-- Modal footer --}}
                <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

        </div>
        </div>
    </div>
  {{-- end modal --}}
{{-- begin klien --}}
<section id="klien">
    <div class="kt-container  kt-grid__item kt-grid__item">
            <div class="kt-portlet">
                <div class="kt-portlet__body">
                    <div class="kt-pricing-1 kt-pricing-1--fixed">
                        <div class="kt-pricing-1__items row">
                            <div class="kt-pricing-1__item col-lg-4">
                                <div class="kt-pricing-1__visual">
                                    <span class="kt-pricing-1__icon kt-font-brand"> <img src="assets/images/klien/logo_yamaha.png" alt="JNE"> </span>
                                </div>
                                <span class="kt-pricing-1__price"> </span>
                                <h2 class="kt-pricing-1__subtitle">www.yamaha.com</h2>
                                <span class="kt-pricing-1__description">
                                </span>
                                <div class="kt-pricing-1__btn">
                                </div>
                            </div>
                            <div class="kt-pricing-1__item col-lg-4">
                                <div class="kt-pricing-1__visual">
                                    <span class="kt-pricing-1__icon kt-font-brand"> <img src="assets/images/klien/logo_mayora.png" alt="JNE"> </span>
                                </div>
                                <span class="kt-pricing-1__price"> </span>
                                <h2 class="kt-pricing-1__subtitle">www.mayora.com</h2>
                                <span class="kt-pricing-1__description">
                                </span>
                                <div class="kt-pricing-1__btn">
                                </div>
                            </div>
                            <div class="kt-pricing-1__item col-lg-4">
                                <div class="kt-pricing-1__visual">
                                    <span class="kt-pricing-1__icon kt-font-brand"> <img src="assets/images/klien/logo_kimia_farma.png" alt="JNE"> </span>
                                </div>
                                <span class="kt-pricing-1__price"> </span>
                                <h2 class="kt-pricing-1__subtitle">www.kimia_farma.com</h2>
                                <span class="kt-pricing-1__description">
                                </span>
                                <div class="kt-pricing-1__btn">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
       <div class="kt-section">
           <div class="kt-divider">
                <a href="client" class="btn btn-pill btn-default">
                    Selengkapnya
                </a>
            </div>
        </div>
    </div>
</section>
{{-- end klien --}}
@endsection
