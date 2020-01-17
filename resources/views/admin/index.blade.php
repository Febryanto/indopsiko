<!DOCTYPE html>
{{--
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 8
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.  --}}

<html lang="en" >
    {{--  <!-- begin::Head -->  --}}
    <head>
        <meta charset="utf-8"/>

        <title>@yield('title')</title>
        <meta name="description" content="Latest updates and statistic charts">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		{{--  <!--begin::Base Path (base relative path for assets of this page) -->  --}}
		<base href="./">

		{{--  <!--end::Base Path -->  --}}
		<meta charset="utf-8" />
		<title>	@yield('title')</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		@include('admin.inc.js_script_top')
        </head>
    {{--  <!-- end::Head -->  --}}

    {{--  <!-- begin::Body -->  --}}
    <body  class="kt-page--loading-enabled kt-page--loading kt-page--fluid kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-subheader--enabled kt-subheader--transparent kt-aside--enabled kt-aside--skin-light kt-aside__brand--skin-light kt-aside--fixed kt-page--loading"  >

    	{{--  <!-- begin:: Page -->  --}}
	{{--  <!-- begin:: Header Mobile -->  --}}
<div id="kt_header_mobile" class="kt-header-mobile  kt-header-mobile--fixed " >
	<div class="kt-header-mobile__brand">
		<a class="kt-header-mobile__logo" href="/home">
            <img alt="Logo" src="/assets/images/logos/logo-5.png">
		</a>
        <div class="kt-header-mobile__nav">
			<div class="dropdown">

	{{--  <!--begin: User bar -->  --}}
	<div class="kt-header__topbar-item kt-header__topbar-item--user">
		<div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
			<img class="kt-hidden-" alt="Pic" src="/assets/images/users/user1.jpg" style="width: 60%;"/>
			<span class="kt-header__topbar-icon kt-header__topbar-icon--brand kt-hidden"><b>S</b></span>
		</div>
		<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			{{--  <!--begin: Head -->  --}}
    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
        <div class="kt-user-card__avatar">
            <img class="kt-hidden-" alt="Pic" src="/assets/images/users/user1.jpg" />
            {{--  <!--use below badge element instead the user avatar to display username's first letter(remove kt-hidden class to display it) -->  --}}
            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
        </div>
        <div class="kt-user-card__name">
            Sean Stone
        </div>
    </div>
{{--  <!--end: Head -->  --}}

{{--  <!--begin: Navigation -->  --}}
<div class="kt-notification">
    <a href="#" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-calendar-3 kt-font-success"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Profile
            </div>
        </div>
    </a>

    <div class="kt-notification__custom kt-space-between">
        <a class="btn btn-warning btn-sm btn-bold btn-font-md" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
    </div>
</div>
{{--  <!--end: Navigation -->  --}}
		</div>
	</div>
	{{--  <!--end: User bar -->  --}}

</div>
             </div>
        </div>

	<div class="kt-header-mobile__toolbar">
                    <button class="kt-header-mobile__toolbar-toggler kt-header-mobile__toolbar-toggler--left" id="kt_aside_mobile_toggler"><span></span>
                    </button>
	</div>
</div>
{{--  <!-- end:: Header Mobile -->  --}}
<div class="kt-grid kt-grid--hor kt-grid--root">
	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver kt-page">
{{--  <!-- begin:: Aside -->  --}}
<button class="kt-aside-close " id="kt_aside_close_btn"><i class="la la-close"></i></button>

<div class="kt-aside  kt-aside--fixed  kt-grid__item kt-grid kt-grid--desktop kt-grid--hor-desktop" id="kt_aside" style="background-color:whitesmoke;">
	{{--  <!-- begin:: Aside -->  --}}

	{{--  <!-- begin:: Aside Menu -->  --}}
	<div class="kt-aside-menu-wrapper kt-grid__item kt-grid__item--fluid" id="kt_aside_menu_wrapper">
		<div id="kt_aside_menu"
			class="kt-aside-menu  kt-aside-menu--skin-light "
			data-ktmenu-vertical="1"
			 data-ktmenu-scroll="1"
			>

			<ul class="kt-menu__nav ">
                <li class="kt-menu__item " aria-haspopup="true" >
                    <a  href="/home" class="kt-menu__link ">
                        <img alt="Logo" src="/assets/images/logos/logo-4.png"/>&nbsp;
                        <span class="kt-menu__link-text">INDOPSIKO</span>
                    </a>
                </li>
                <li class="kt-menu__section " aria-haspopup="true">
                    <h4 class="kt-menu__section-text">Kelola Dashboard</h4>
                    <i class="kt-menu__section-icon flaticon-more-v2"></i>
                </li>
                <li class="kt-menu__item @yield('aktif_dashboard')" aria-haspopup="true" >
                    <a href="/proper" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-house-damage"></i>
                        <span class="kt-menu__link-text">Dashboard</span></a>
                </li>
            <li class="kt-menu__item @yield('aktif_profil')" aria-haspopup="true" >
                <a href="/proper" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-database"></i>
                    <span class="kt-menu__link-text">Profil</span></a>
            </li>
            <li class="kt-menu__item @yield('aktif_klien')" aria-haspopup="true" >
                <a  href="/klien" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-cube"></i>
                    <span class="kt-menu__link-text">Klient</span>
                </a>
            </li>
            {{--  <li class="kt-menu__item @yield('aktif_berita')" aria-haspopup="true" >
                <a  href="/berita" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-newspaper"></i>
                    <span class="kt-menu__link-text">Berita</span>
                </a>
            </li>  --}}
            <li class="kt-menu__item @yield('aktif_pengumuman')" aria-haspopup="true" >
                <a  href="/pengumuman" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-bullhorn"></i>
                    <span class="kt-menu__link-text">Pengumuman</span>
                </a>
            </li>
            <li class="kt-menu__item @yield('aktif_lowongan')" aria-haspopup="true" >
                <a  href="/lowongan" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-briefcase"></i>
                    <span class="kt-menu__link-text">Lowongan</span>
                </a>
            </li>
            <li class="kt-menu__item @yield('aktif_lamaran')" aria-haspopup="true" >
                <a  href="/pelamar" class="kt-menu__link "><i class="kt-menu__link-icon fa fa-users"></i>
                    <span class="kt-menu__link-text">Lamaran</span>
                </a>
            </li>
            </ul>

		</div>
    </div>

	{{--  <!-- end:: Aside Menu -->  --}}
</div>
{{--  <!-- end:: Aside -->  --}}

<div class="kt-content  kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" id="kt_content">
    <div class="kt-header-menu-wrapper" id="kt_header_menu_wrapper" style="background-color: white;">
        <div id="kt_header_menu" class="kt-header-menu kt-header-menu-mobile ">
            <ul class="kt-menu__nav ">
                <li class="kt-menu__item  kt-menu__item--submenu kt-menu__item--rel" data-ktmenu-submenu-toggle="click" aria-haspopup="true">
                    <a href="javascript:;" class="kt-menu__link kt-menu__toggle">
                        <span class="kt-menu__link-text">@yield('subheader')</span>
                        <i class="kt-menu__ver-arrow la la-angle-right"></i>
                    </a>
                </li>
            </ul>
        </div>
        <div class="kt-header-toolbar">
           	{{--  <!--begin: User bar -->  --}}
	        <div class="kt-header__topbar-item kt-header__topbar-item--user">
		        <div class="kt-header__topbar-wrapper" data-toggle="dropdown" data-offset="10px,10px">
                    <span class="kt-header__topbar-icon kt-header__topbar-icon--brand" style="font-size:10px;"><b>Hi, {{Auth::user()->name}}</b></span>
			        <img class="kt-hidden-" alt="Pic" src="/assets/images/users/user1.jpg" style="width: 50%;padding: 10px;"/>

		        </div>
		        <div class="dropdown-menu dropdown-menu-fit dropdown-menu-right dropdown-menu-anim dropdown-menu-xl">
			{{--  <!--begin: Head -->  --}}
                    <div class="kt-user-card kt-user-card--skin-light kt-notification-item-padding-x">
                        <div class="kt-user-card__avatar">
                            <img class="kt-hidden-" alt="Pic" src="/assets/images/users/user1.jpg" />
                            <span class="kt-badge kt-badge--username kt-badge--unified-success kt-badge--lg kt-badge--rounded kt-badge--bold kt-hidden">S</span>
                        </div>
                        <div class="kt-user-card__name">
                            {{Auth::user()->name}}
                        </div>
                    </div>
            {{--  <!--end: Head -->  --}}

{{--  <!--begin: Navigation -->  --}}
<div class="kt-notification">
    <a href="#" class="kt-notification__item">
        <div class="kt-notification__item-icon">
            <i class="flaticon2-calendar-3 kt-font-success"></i>
        </div>
        <div class="kt-notification__item-details">
            <div class="kt-notification__item-title kt-font-bold">
                My Profile
            </div>
        </div>
    </a>

    <div class="kt-notification__custom kt-space-between">
        <a class="btn btn-warning btn-sm btn-bold btn-font-md" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
         {{ __('Logout') }}
     </a>

     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
         @csrf
     </form>


    </div>
</div>
{{--  <!--end: Navigation -->  --}}
		</div>
	</div>
	{{--  <!--end: User bar -->  --}}


        </div>
    </div>
        {{--  begin:: Content  --}}
            <div class="kt-container  kt-grid__item kt-grid__item--fluid" style="margin-top:70px;">
                    {{--  begin homecontent  --}}
                   @yield('content')

                    {{--  end homecontent  --}}
                    </div>
        {{--  end:: Content  --}}
</div>

</div>

				{{--  <!-- begin:: Footer -->  --}}
<div class="kt-footer  kt-footer--extended  kt-grid__item" id="kt_footer">

		<div class="kt-footer__bottom">
		<div class="kt-container ">
			<div class="kt-footer__wrapper">
				<div class="kt-footer__copyright">
					&copy; 2019 <a href="#" target="_blank">indopsiko</a>
				</div>
				<div class="kt-footer__menu">
					<a href="#" target="_blank">Purchase Lisence</a>
					<a href="#" target="_blank">Team</a>
					<a href="#" target="_blank">Contact</a>
				</div>
			</div>
		</div>
	</div>
</div>
{{--  <!-- end:: Footer -->  --}}

{{--  <!-- end:: Page -->  --}}


{{--  <!-- begin::Scrolltop -->  --}}
<div id="kt_scrolltop" class="kt-scrolltop">
		<i class="fa fa-arrow-up"></i>
</div>
{{--  <!-- end::Scrolltop -->  --}}




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

{{--  <!-- end::Global Config -->  --}}

{{--  <!--begin:: Global Mandatory Vendors -->  --}}
@include('admin.inc.js_script_bot')

{{--  <!--end::Page Scripts -->  --}}

            </body>
    {{--  <!-- end::Body -->  --}}
</html>
