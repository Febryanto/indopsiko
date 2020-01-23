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

	{{-- begin::Head --}}
	<head>

		{{--begin::Base Path (base relative path for assets of this page) --}}
		<base href="./">

		{{--end::Base Path --}}
		<meta charset="utf-8" />
		<title>	INDOPSIKO</title>
		<meta name="description" content="Latest updates and statistic charts">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		{{--begin::Fonts --}}
		@include('inc.js_scripttop')

	</head>

	{{-- end::Head --}}

	{{-- begin::Body --}}
	<body class="kt-page--loading-enabled kt-page--loading kt-header--fixed kt-header--minimize-topbar kt-header-mobile--fixed kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-subheader--enabled kt-subheader--transparent kt-page--loading">

		{{-- begin:: Page --}}

		{{-- begin:: Header Mobile --}}
		@include('inc.menu_navbar')
        {{-- end navbar menu --}}
		{{-- end:: Header --}}
    @yield('homecontent')


    {{-- begin:: Footer --}}
@include('inc.footer')
  {{-- end footer --}}

		{{-- end:: Page --}}

		{{-- begin::Scrolltop --}}
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>
        {{-- end::Scrolltop --}}
        {{-- begin sticky panel --}}
        <ul class="kt-sticky-toolbar" style="margin-top: 30px;">
             <li class="kt-sticky-toolbar__item kt-sticky-toolbar__item--danger" id="kt_sticky_toolbar_chat_toggler" data-toggle="kt-tooltip" title="" data-placement="left" data-original-title="Chat Example">
                 <a  data-toggle="modal" data-target="#kt_chat_modal"><i class="flaticon2-chat-1" height:"50px"></i></a>
             </li>
         </ul>
         {{-- end sticky panel --}}

		{{-- begin::Global Config(global config for global JS sciprts) --}}
@include('inc.js_scriptbot')

		{{--end::Page Vendors --}}

        {{--END:MAPS--}}
    </body>

	{{-- end::Body --}}
</html>
