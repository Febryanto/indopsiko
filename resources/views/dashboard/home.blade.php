@extends('beranda')
@section('homecontent')
<div class="kt-body kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor kt-grid--stretch" id="kt_body">
	<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
	{{-- begin:: Content --}}
        {{-- begin banner --}}
        @foreach ($data as $i)

        <<div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('assets/images/logos/{{$i->logo}}');">
            <div class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">
                <h1 uk-parallax="opacity: 0,1; y: -100,0; scale: 2,1; viewport: 0.5;"><span style="font-weight:bold;color:blue;font-size:50px;">INDOPSIKO INDONESIA</span></h1>
                <h2 uk-parallax="opacity: 0,1; y: 100,0; scale: 0.5,1; viewport: 0.5;"><span style="font-weight:bold;">HUMAN RESOURCE DEVELOPMENT.</span></h2>
            </div>
        </div>
    </div>
</div>

@endforeach
        {{-- end banner --}}
                {{-- begin galeri & profil --}}
				<div class="row">
					<div class="col-lg-6">
						<div class="kt-portlet kt-portlet--height-fluid">
							<div class="kt-portlet__head">
								<div class="kt-portlet__head-label">
									<h3 class="kt-portlet__head-title">
										GALERI
									</h3>
								</div>
							</div>
							<div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
								<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1" uk-slideshow>

                                    <ul class="uk-slideshow-items">
                                        @foreach ($galeri as $g)

                                        <li>
                                            <img src="{{url('assets/images/galeri/'.$g->foto)}}" alt="" uk-cover>
                                        </li>
                                        @endforeach
                                    </ul>

                                    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
                                    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

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
                                    <div class="kt-portlet__head-toolbar">
                                        <ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" role="tab">

                                                </a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="kt-portlet kt-portlet--height-fluid kt-widget19">
                                    <div class="kt-portlet__body kt-portlet__body--fit kt-portlet__body--unfill">
                                        <div class="kt-widget19__pic kt-portlet-fit--top kt-portlet-fit--sides" style="min-height: 300px; background-image: url(/assets/images/bg/bg-3.png)">
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
