<!DOCTYPE html>
<html lang="en">
  <!--begin::Head-->
  <head><base href="">
    <meta charset="utf-8" />
    <title>SAGATA ITB</title>
    <meta name="description" content="Updates and statistics" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- <link rel="canonical" href="https://keenthemes.com/metronic" /> -->
    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <?php $this->renderSection('stylesheet') ?>
    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="/assets/media/itb/logo-itb.png" />
  </head>
  <!--end::Head-->
  <!--begin::Body-->
  <body id="kt_body" class="quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed aside-enabled aside-static page-loading">
    <!--begin::Main-->
    <!--begin::Header Mobile-->
    <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
      <!--begin::Logo-->
      <a href="#">
        <img alt="Logo" src="/assets/media/itb/logo-itb.png" class="logo-default max-h-30px" />
      </a>
      <!--end::Logo-->
      <!--begin::Toolbar-->
      <div class="d-flex align-items-center">
        <button class="btn p-0 burger-icon rounded-0 burger-icon-left" id="kt_aside_tablet_and_mobile_toggle">
          <span></span>
        </button>
        <button class="btn btn-hover-text-primary p-0 ml-3" id="kt_header_mobile_topbar_toggle">
          <span class="svg-icon svg-icon-xl">
            <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
              </g>
            </svg>
            <!--end::Svg Icon-->
          </span>
        </button>
      </div>
      <!--end::Toolbar-->
    </div>
    <!--end::Header Mobile-->
    <div class="d-flex flex-column flex-root">
      <!--begin::Page-->
      <div class="d-flex flex-row flex-column-fluid page">
        <!--begin::Aside-->
        <div class="aside aside-left d-flex flex-column flex-row-auto" id="kt_aside">
          <!--begin::Aside Menu-->
          <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
            <!--begin::Menu Container-->
            <div id="kt_aside_menu" class="aside-menu min-h-lg-800px" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
              <!--begin::Menu Nav-->


              <ul class="menu-nav">
                
                <?php if (in_groups('pelamar')) : ?>
                  <li class="menu-item menu-item-active" aria-haspopup="true">
                    <a href="/dashboard" class="menu-link">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Dashboard</span>
                    </a>
                  </li>
                  <!--begin::Menu Nav Form-->
                  <li class="menu-section">
                    <h4 class="menu-text">Applicant</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="/apply" class="menu-link menu-toggle">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Layout/Layout-4-blocks.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <rect fill="#000000" x="4" y="4" width="7" height="7" rx="1.5" />
                            <path d="M5.5,13 L9.5,13 C10.3284271,13 11,13.6715729 11,14.5 L11,18.5 C11,19.3284271 10.3284271,20 9.5,20 L5.5,20 C4.67157288,20 4,19.3284271 4,18.5 L4,14.5 C4,13.6715729 4.67157288,13 5.5,13 Z M14.5,4 L18.5,4 C19.3284271,4 20,4.67157288 20,5.5 L20,9.5 C20,10.3284271 19.3284271,11 18.5,11 L14.5,11 C13.6715729,11 13,10.3284271 13,9.5 L13,5.5 C13,4.67157288 13.6715729,4 14.5,4 Z M14.5,13 L18.5,13 C19.3284271,13 20,13.6715729 20,14.5 L20,18.5 C20,19.3284271 19.3284271,20 18.5,20 L14.5,20 C13.6715729,20 13,19.3284271 13,18.5 L13,14.5 C13,13.6715729 13.6715729,13 14.5,13 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Apply</span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="/form" class="menu-link menu-toggle">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/PenAndRuller.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M3,16 L5,16 C5.55228475,16 6,15.5522847 6,15 C6,14.4477153 5.55228475,14 5,14 L3,14 L3,12 L5,12 C5.55228475,12 6,11.5522847 6,11 C6,10.4477153 5.55228475,10 5,10 L3,10 L3,8 L5,8 C5.55228475,8 6,7.55228475 6,7 C6,6.44771525 5.55228475,6 5,6 L3,6 L3,4 C3,3.44771525 3.44771525,3 4,3 L10,3 C10.5522847,3 11,3.44771525 11,4 L11,19 C11,19.5522847 10.5522847,20 10,20 L4,20 C3.44771525,20 3,19.5522847 3,19 L3,16 Z" fill="#000000" opacity="0.3" />
                            <path d="M16,3 L19,3 C20.1045695,3 21,3.8954305 21,5 L21,15.2485298 C21,15.7329761 20.8241635,16.200956 20.5051534,16.565539 L17.8762883,19.5699562 C17.6944473,19.7777745 17.378566,19.7988332 17.1707477,19.6169922 C17.1540423,19.602375 17.1383289,19.5866616 17.1237117,19.5699562 L14.4948466,16.565539 C14.1758365,16.200956 14,15.7329761 14,15.2485298 L14,5 C14,3.8954305 14.8954305,3 16,3 Z" fill="#000000" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Form</span>
                    </a>
                  </li>
                  <!--end::Menu Nav Form-->
                <?php endif ?>

                <?php if (has_permission('manage-unit')) : ?>
                  <!--begin::Menu Nav Unit-->
                  <li class="menu-section">
                    <h4 class="menu-text">Admin Unit</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="/unit/dashboard" class="menu-link menu-toggle">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Dashboard</span>
                    </a>
                  </li>
                  <!--end::Menu Nav Admin Unit-->
                <?php endif ?>

                <?php if (has_permission('manage-admin')) : ?>
                  <!--begin::Menu Nav Admin-->
                  <li class="menu-section">
                    <h4 class="menu-text">Admin</h4>
                    <i class="menu-icon ki ki-bold-more-hor icon-md"></i>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="/admin/dashboard" class="menu-link menu-toggle">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <polygon points="0 0 24 0 24 24 0 24" />
                            <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Dashboard</span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                    <a href="/admin/settings" class="menu-link menu-toggle">
                      <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo5/dist/../src/media/svg/icons/Shopping/Box2.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                              <rect x="0" y="0" width="24" height="24"/>
                              <path d="M4,9.67471899 L10.880262,13.6470401 C10.9543486,13.689814 11.0320333,13.7207107 11.1111111,13.740321 L11.1111111,21.4444444 L4.49070127,17.526473 C4.18655139,17.3464765 4,17.0193034 4,16.6658832 L4,9.67471899 Z M20,9.56911707 L20,16.6658832 C20,17.0193034 19.8134486,17.3464765 19.5092987,17.526473 L12.8888889,21.4444444 L12.8888889,13.6728275 C12.9050191,13.6647696 12.9210067,13.6561758 12.9368301,13.6470401 L20,9.56911707 Z" fill="#000000"/>
                              <path d="M4.21611835,7.74669402 C4.30015839,7.64056877 4.40623188,7.55087574 4.5299008,7.48500698 L11.5299008,3.75665466 C11.8237589,3.60013944 12.1762411,3.60013944 12.4700992,3.75665466 L19.4700992,7.48500698 C19.5654307,7.53578262 19.6503066,7.60071528 19.7226939,7.67641889 L12.0479413,12.1074394 C11.9974761,12.1365754 11.9509488,12.1699127 11.9085461,12.2067543 C11.8661433,12.1699127 11.819616,12.1365754 11.7691509,12.1074394 L4.21611835,7.74669402 Z" fill="#000000" opacity="0.3"/>
                          </g>
                        </svg><!--end::Svg Icon-->
                      </span>
                      <span class="menu-text">Report</span>
                    </a>
                  </li>
                  <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                  <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                      
                      <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2021-05-14-112058/theme/html/demo5/dist/../src/media/svg/icons/General/Settings-2.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24"/>
                          <path d="M5,8.6862915 L5,5 L8.6862915,5 L11.5857864,2.10050506 L14.4852814,5 L19,5 L19,9.51471863 L21.4852814,12 L19,14.4852814 L19,19 L14.4852814,19 L11.5857864,21.8994949 L8.6862915,19 L5,19 L5,15.3137085 L1.6862915,12 L5,8.6862915 Z M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"/>
                      </g>
                      </svg><!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Setting</span>
                    <i class="menu-arrow"></i>
                  </a>
                  <div class="menu-submenu">
                    <i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                      <li class="menu-item menu-item-parent" aria-haspopup="true">
                        <span class="menu-link">
                          <span class="menu-text">Bootstrap</span>
                        </span>
                      </li>
                      <li class="menu-item" aria-haspopup="true">
                        <a href="/admin/beasiswa" class="menu-link">
                          <i class="menu-bullet menu-bullet-dot">
                            <span></span>
                          </i>
                          <span class="menu-text">Beasiswa</span>
                        </a>
                      </li>
                      <li class="menu-item" aria-haspopup="true">
                        <a href="/admin/hasilseleksi" class="menu-link">
                          <i class="menu-bullet menu-bullet-dot">
                            <span></span>
                          </i>
                          <span class="menu-text">File Hasil Seleksi</span>
                        </a>
                      </li>
                      <li class="menu-item" aria-haspopup="true">
                        <a href="/admin/tahunakademik" class="menu-link">
                          <i class="menu-bullet menu-bullet-dot">
                            <span></span>
                          </i>
                          <span class="menu-text">Tahun Akademik</span>
                        </a>
                      </li>
                      <li class="menu-item" aria-haspopup="true">
                        <a href="/admin/waktupendaftaran" class="menu-link">
                          <i class="menu-bullet menu-bullet-dot">
                            <span></span>
                          </i>
                          <span class="menu-text">Waktu Pendaftaran</span>
                        </a>
                      </li>        
                    </ul>
                  </div>
                </li>

                  <!--end::Menu Nav Admin-->
                <?php endif ?>

              </ul>
              <!--end::Menu Nav-->
            </div>
            <!--end::Menu Container-->
          </div>
          <!--end::Aside Menu-->
        </div>
        <!--end::Aside-->
        <!--begin::Wrapper-->
        <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
          <!--begin::Header-->
          <div id="kt_header" class="header header-fixed">
            <!--begin::Container-->
            <div class="container d-flex align-items-stretch justify-content-between">
              <!--begin::Left-->
              <div class="d-none d-lg-flex align-items-center mr-3">
                <!--begin::Aside Toggle-->
                <button class="btn btn-icon aside-toggle ml-n3 mr-10" id="kt_aside_desktop_toggle">
                  <span class="svg-icon svg-icon-xxl svg-icon-dark-75">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Text/Align-left.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" opacity="0.3" x="4" y="5" width="16" height="2" rx="1" />
                        <rect fill="#000000" opacity="0.3" x="4" y="13" width="16" height="2" rx="1" />
                        <path d="M5,9 L13,9 C13.5522847,9 14,9.44771525 14,10 C14,10.5522847 13.5522847,11 13,11 L5,11 C4.44771525,11 4,10.5522847 4,10 C4,9.44771525 4.44771525,9 5,9 Z M5,17 L13,17 C13.5522847,17 14,17.4477153 14,18 C14,18.5522847 13.5522847,19 13,19 L5,19 C4.44771525,19 4,18.5522847 4,18 C4,17.4477153 4.44771525,17 5,17 Z" fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </button>
                <!--end::Aside Toggle-->
                <!--begin::Logo-->
                <a href="/home">
                  <img alt="Logo" src="/assets/media/itb/logo-itb.png" class="logo-sticky max-h-55px" />
                </a>
                <div class="quick-search quick-search-inline ml-20 w-300px" id="kt_quick_search_inline">
                  <h1>SAGATA ITB</h1>
                </div>
                <!--end::Logo-->
                <!--begin::Desktop Search-->
                <!--none-->
                <!--end::Desktop Search-->
              </div>
              <!--end::Left-->
              <!--begin::Topbar-->
              <div class="topbar">
                <!--begin::User-->
                <div class="topbar-item mr-4">
                  <!--
                  <div class="btn btn-icon btn-sm btn-clean btn-text-dark-75" id="kt_quick_user_toggle">
                  -->
                  <div class="btn btn-icon btn-sm btn-primary btn-text-dark-75" id="kt_quick_user_toggle">
                  
                    <span class="svg-icon svg-icon-lg">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </div>
                </div>
                <!--end::User-->
                <!--begin::Notifications-->
                <!--
                <div class="topbar-item">
                  <div class="btn btn-icon btn-sm btn-primary font-weight-bolder p-0" id="kt_quick_notifications_toggle">0</div>
                </div>
                -->
                <!--end::Notifications-->
              </div>
              <!--end::Topbar-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Header-->
          <!--begin::Content-->
          <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
            <!--begin::Subheader-->
            <?php $this->renderSection('subheader') ?>
            <!--end::Subheader-->
            <!--begin::Entry-->
            <div class="d-flex flex-column-fluid">
              <!--begin::Container-->
              <div class="container">
                <?php $this->renderSection('content') ?>
              </div>
              <!--end::Container-->
            </div>
            <!--end::Entry-->
          </div>
          <!--end::Content-->
          <!--begin::Footer-->
          <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
            <!--begin::Container-->
            <div class="container d-flex flex-column flex-md-row align-items-center justify-content-between">
              <!--begin::Copyright-->
              <div class="text-dark order-2 order-md-1">
                <span class="text-muted font-weight-bold mr-2">2021©</span>
                <a href="#" target="_blank" class="text-dark-75 text-hover-primary">SPS ITB</a>
              </div>
              <!--end::Copyright-->
              <!--begin::Nav-->
              <div class="nav nav-dark order-1 order-md-2">
                <a href="#" target="_blank" class="nav-link pr-3 pl-0">About</a>
                <a href="#" target="_blank" class="nav-link px-3">Team</a>
                <a href="#" target="_blank" class="nav-link pl-3 pr-0">Contact</a>
              </div>
              <!--end::Nav-->
            </div>
            <!--end::Container-->
          </div>
          <!--end::Footer-->
        </div>
        <!--end::Wrapper-->
      </div>
      <!--end::Page-->
    </div>
    <!--end::Main-->
    <!-- begin::Notifications Panel-->
    <div id="kt_quick_notifications" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between mb-10">
        <h3 class="font-weight-bold m-0">Notifications
        <!--<small class="text-muted font-size-sm ml-2">24 New</small></h3>-->
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_notifications_close">
          <i class="ki ki-close icon-xs text-muted"></i>
        </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Nav-->
        <div class="navi navi-icon-circle navi-spacer-x-0">
           <!-- notification content-->
        </div>
        <!--end::Nav-->
      </div>
      <!--end::Content-->
    </div>
    <!-- end::Notifications Panel-->
    <!-- begin::User Panel-->
    <div id="kt_quick_user" class="offcanvas offcanvas-right p-10">
      <!--begin::Header-->
      <div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
        <h3 class="font-weight-bold m-0">User Profile
        <!--<small class="text-muted font-size-sm ml-2">12 messages</small></h3>-->
        <a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
          <i class="ki ki-close icon-xs text-muted"></i>
        </a>
      </div>
      <!--end::Header-->
      <!--begin::Content-->
      <div class="offcanvas-content pr-5 mr-n5">
        <!--begin::Header-->
        <div class="d-flex align-items-center mt-5">
          <div class="symbol symbol-100 mr-5">
            <div class="symbol-label" style="background-image:url('/assets/media/users/blank.png')"></div>
            <i class="symbol-badge bg-success"></i>
          </div>
          <div class="d-flex flex-column">
            <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary"><?= user()->username ?></a>
            <div class="text-muted mt-1">Applicant</div>
            <div class="navi mt-2">
              <a href="#" class="navi-item">
                <span class="navi-link p-0 pb-2">
                  <span class="navi-icon mr-1">
                    <span class="svg-icon svg-icon-lg svg-icon-primary">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-notification.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <rect x="0" y="0" width="24" height="24" />
                          <path d="M21,12.0829584 C20.6747915,12.0283988 20.3407122,12 20,12 C16.6862915,12 14,14.6862915 14,18 C14,18.3407122 14.0283988,18.6747915 14.0829584,19 L5,19 C3.8954305,19 3,18.1045695 3,17 L3,8 C3,6.8954305 3.8954305,6 5,6 L19,6 C20.1045695,6 21,6.8954305 21,8 L21,12.0829584 Z M18.1444251,7.83964668 L12,11.1481833 L5.85557487,7.83964668 C5.4908718,7.6432681 5.03602525,7.77972206 4.83964668,8.14442513 C4.6432681,8.5091282 4.77972206,8.96397475 5.14442513,9.16035332 L11.6444251,12.6603533 C11.8664074,12.7798822 12.1335926,12.7798822 12.3555749,12.6603533 L18.8555749,9.16035332 C19.2202779,8.96397475 19.3567319,8.5091282 19.1603533,8.14442513 C18.9639747,7.77972206 18.5091282,7.6432681 18.1444251,7.83964668 Z" fill="#000000" />
                          <circle fill="#000000" opacity="0.3" cx="19.5" cy="17.5" r="2.5" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </span>
                  <span class="navi-text text-muted text-hover-primary"><?= user()->email ?></span>
                </span>
              </a>
              <a href="<?= base_url('logout') ?>" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">Sign Out</a>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Separator-->
        <div class="separator separator-dashed mt-8 mb-5"></div>
        <!--end::Separator-->
        <!--begin::Nav-->
        <div class="navi navi-spacer-x-0 p-0">
       
        </div>
        <!--end::Nav-->
        <!--begin::Separator-->
        <!--
        <div class="separator separator-dashed my-7"></div>
        -->
        <!--end::Separator-->
       
      </div>
      <!--end::Content-->
    </div>
    <!-- end::User Panel-->
    <!--begin::Chat Panel-->
    <div class="modal modal-sticky modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <!--begin::Card-->
          <div class="card card-custom">
            <!--begin::Header-->
            <div class="card-header align-items-center px-4 py-3">
              <div class="text-left flex-grow-1">
                <!--begin::Dropdown Menu-->
                <div class="dropdown dropdown-inline">
                  <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <span class="svg-icon svg-icon-lg">
                      <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                        <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                          <polygon points="0 0 24 0 24 24 0 24" />
                          <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                        </g>
                      </svg>
                      <!--end::Svg Icon-->
                    </span>
                  </button>
                  <div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-md">
                    <!--begin::Navigation-->
                    <ul class="navi navi-hover py-5">
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-drop"></i>
                          </span>
                          <span class="navi-text">New Group</span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-list-3"></i>
                          </span>
                          <span class="navi-text">Contacts</span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-rocket-1"></i>
                          </span>
                          <span class="navi-text">Groups</span>
                          <span class="navi-link-badge">
                            <span class="label label-light-primary label-inline font-weight-bold">new</span>
                          </span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-bell-2"></i>
                          </span>
                          <span class="navi-text">Calls</span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-gear"></i>
                          </span>
                          <span class="navi-text">Settings</span>
                        </a>
                      </li>
                      <li class="navi-separator my-3"></li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-magnifier-tool"></i>
                          </span>
                          <span class="navi-text">Help</span>
                        </a>
                      </li>
                      <li class="navi-item">
                        <a href="#" class="navi-link">
                          <span class="navi-icon">
                            <i class="flaticon2-bell-2"></i>
                          </span>
                          <span class="navi-text">Privacy</span>
                          <span class="navi-link-badge">
                            <span class="label label-light-danger label-rounded font-weight-bold">5</span>
                          </span>
                        </a>
                      </li>
                    </ul>
                    <!--end::Navigation-->
                  </div>
                </div>
                <!--end::Dropdown Menu-->
              </div>
              <div class="text-center flex-grow-1">
                <div class="text-dark-75 font-weight-bold font-size-h5">Matt Pears</div>
                <div>
                  <span class="label label-dot label-success"></span>
                  <span class="font-weight-bold text-muted font-size-sm">Active</span>
                </div>
              </div>
              <div class="text-right flex-grow-1">
                <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-dismiss="modal">
                  <i class="ki ki-close icon-1x"></i>
                </button>
              </div>
            </div>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="card-body">
              <!--begin::Scroll-->
              <div class="scroll scroll-pull" data-height="375" data-mobile-height="300">
                <!--begin::Messages-->
                <div class="messages">
                  <!--begin::Message In-->
                  <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                      <div class="symbol symbol-circle symbol-40 mr-3">
                        <img alt="Pic" src="/assets/media/users/300_12.jpg" />
                      </div>
                      <div>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                        <span class="text-muted font-size-sm">2 Hours</span>
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">How likely are you to recommend our company to your friends and family?</div>
                  </div>
                  <!--end::Message In-->
                  <!--begin::Message Out-->
                  <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                      <div>
                        <span class="text-muted font-size-sm">3 minutes</span>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                      </div>
                      <div class="symbol symbol-circle symbol-40 ml-3">
                        <img alt="Pic" src="/assets/media/users/300_21.jpg" />
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Hey there, we’re just writing to let you know that you’ve been subscribed to a repository on GitHub.</div>
                  </div>
                  <!--end::Message Out-->
                  <!--begin::Message In-->
                  <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                      <div class="symbol symbol-circle symbol-40 mr-3">
                        <img alt="Pic" src="/assets/media/users/300_21.jpg" />
                      </div>
                      <div>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                        <span class="text-muted font-size-sm">40 seconds</span>
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Ok, Understood!</div>
                  </div>
                  <!--end::Message In-->
                  <!--begin::Message Out-->
                  <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                      <div>
                        <span class="text-muted font-size-sm">Just now</span>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                      </div>
                      <div class="symbol symbol-circle symbol-40 ml-3">
                        <img alt="Pic" src="/assets/media/users/300_21.jpg" />
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">You’ll receive notifications for all issues, pull requests!</div>
                  </div>
                  <!--end::Message Out-->
                  <!--begin::Message In-->
                  <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                      <div class="symbol symbol-circle symbol-40 mr-3">
                        <img alt="Pic" src="/assets/media/users/300_12.jpg" />
                      </div>
                      <div>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                        <span class="text-muted font-size-sm">40 seconds</span>
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">You can unwatch this repository immediately by clicking here:
                    <a href="#">https://github.com</a></div>
                  </div>
                  <!--end::Message In-->
                  <!--begin::Message Out-->
                  <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                      <div>
                        <span class="text-muted font-size-sm">Just now</span>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                      </div>
                      <div class="symbol symbol-circle symbol-40 ml-3">
                        <img alt="Pic" src="/assets/media/users/300_21.jpg" />
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Discover what students who viewed Learn Figma - UI/UX Design. Essential Training also viewed</div>
                  </div>
                  <!--end::Message Out-->
                  <!--begin::Message In-->
                  <div class="d-flex flex-column mb-5 align-items-start">
                    <div class="d-flex align-items-center">
                      <div class="symbol symbol-circle symbol-40 mr-3">
                        <img alt="Pic" src="/assets/media/users/300_12.jpg" />
                      </div>
                      <div>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">Matt Pears</a>
                        <span class="text-muted font-size-sm">40 seconds</span>
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-success text-dark-50 font-weight-bold font-size-lg text-left max-w-400px">Most purchased Business courses during this sale!</div>
                  </div>
                  <!--end::Message In-->
                  <!--begin::Message Out-->
                  <div class="d-flex flex-column mb-5 align-items-end">
                    <div class="d-flex align-items-center">
                      <div>
                        <span class="text-muted font-size-sm">Just now</span>
                        <a href="#" class="text-dark-75 text-hover-primary font-weight-bold font-size-h6">You</a>
                      </div>
                      <div class="symbol symbol-circle symbol-40 ml-3">
                        <img alt="Pic" src="/assets/media/users/300_21.jpg" />
                      </div>
                    </div>
                    <div class="mt-2 rounded p-5 bg-light-primary text-dark-50 font-weight-bold font-size-lg text-right max-w-400px">Company BBQ to celebrate the last quater achievements and goals. Food and drinks provided</div>
                  </div>
                  <!--end::Message Out-->
                </div>
                <!--end::Messages-->
              </div>
              <!--end::Scroll-->
            </div>
            <!--end::Body-->
            <!--begin::Footer-->
            <div class="card-footer align-items-center">
              <!--begin::Compose-->
              <textarea class="form-control border-0 p-0" rows="2" placeholder="Type a message"></textarea>
              <div class="d-flex align-items-center justify-content-between mt-5">
                <div class="mr-3">
                  <a href="#" class="btn btn-clean btn-icon btn-md mr-1">
                    <i class="flaticon2-photograph icon-lg"></i>
                  </a>
                  <a href="#" class="btn btn-clean btn-icon btn-md">
                    <i class="flaticon2-photo-camera icon-lg"></i>
                  </a>
                </div>
                <div>
                  <button type="button" class="btn btn-primary btn-md text-uppercase font-weight-bold chat-send py-2 px-6">Send</button>
                </div>
              </div>
              <!--begin::Compose-->
            </div>
            <!--end::Footer-->
          </div>
          <!--end::Card-->
        </div>
      </div>
    </div>
    <!--end::Chat Panel-->
    <!--begin::Scrolltop-->
    <div id="kt_scrolltop" class="scrolltop">
      <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <polygon points="0 0 24 0 24 24 0 24" />
            <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
            <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
          </g>
        </svg>
        <!--end::Svg Icon-->
      </span>
    </div>
    <!--end::Scrolltop-->
    <script>var HOST_URL = "";</script>
    <!--begin::Global Config(global config for global JS scripts)-->
    <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#6993FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1E9FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
    <!--end::Global Config-->
    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="/assets/plugins/global/plugins.bundle.js"></script>
    <script src="/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="/assets/js/scripts.bundle.js"></script>
    <!--end::Global Theme Bundle-->
    <!--begin::Page Scripts(used by this page)-->
    <?php $this->renderSection('script') ?>
    <!--end::Page Scripts-->
  </body>
<div style="display:none;">

<a href="https://info.halal.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://bogor.perpusnas.go.id/xampp/rtp-slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://proklimkotacirebon.com/tampilan/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://sisfo.univpgri-palembang.ac.id/full/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://cbt.univpgri-palembang.ac.id/login/slot-gacor-online/" rel="dofollow">Slot Gacor</a>
<a href="https://bpsdm.sultengprov.go.id/assets/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://www.simpati.bpsdm.sultengprov.go.id/img/slot-gacor-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://siperbangkom.bpsdm.sultengprov.go.id/css/slot-online/" rel="dofollow">Slot Gacor</a>
<a href="https://e-letter.bpsdm.sultengprov.go.id/asset/slot-gacor-terpercaya/" rel="dofollow">Slot Gacor</a>
<a href="https://sagata.itb.ac.id/uploads/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://rupda.itb.ac.id/storage/-/slot-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://ptsp.halal.go.id/css/" rel="dofollow">Slot Gacor</a>
<a href="https://ptsp.halal.go.id/js/demo/" rel="dofollow">Slot Gacor</a>
<a href="https://ptsp.halal.go.id/KH/slot2023/" rel="dofollow">Slot Gacor</a>
<a href="https://test.halal.go.id/daftar-slot/" rel="dofollow">Slot Gacor</a>
<a href="https://test.halal.go.id/resmi/" rel="dofollow">Slot Gacor</a>
<a href="https://simadu.poltekkes-smg.ac.id/files/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://stih-painan.ac.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://lms.uptdbtikdisdik.sumselprov.go.id/assets/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://pkk.merauke.go.id/.well-known/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://dama.poltekbangsby.ac.id/dashboard/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://dama.poltekbangsby.ac.id/aset/slot-gacor-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://dinsos.merauke.go.id/.sass-cache/-/slot-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://dinsos.merauke.go.id/berita/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://elapor.merauke.go.id/assets/css/tag/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://elapor.merauke.go.id/-/slot-terbaru/" rel="dofollow">Slot Gacor</a>
<a href="https://pkk.merauke.go.id/.well-known/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://pkk.merauke.go.id/backend/admin/situs-rtp-slot/" rel="dofollow">Slot Gacor</a>
<a href="https://pkk.merauke.go.id/images/-/slot88-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://e-rekrutmen.mojokertokab.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://mbkm.ft.unsri.ac.id/public/frontend/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://mbkm.ft.unsri.ac.id/public/public/-/slot-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://www.simpeg.kolakakab.go.id/pages/" rel="dofollow">Slot Gacor</a>
<a href="https://e-rekrutmen.mojokertokab.go.id/rtp-slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://sidonor.pmi.okuselatankab.go.id/main/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://sidonor.pmi.okuselatankab.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://pmi.okuselatankab.go.id/wp-content/uploads/slot-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="https://pmi.okuselatankab.go.id/wp-content/slot-gacor " rel="dofollow">Slot Gacor</a>
<a href="https://disapaidaman.kukarkab.go.id/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://perizinankotacirebon.com/bagian/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://pemulihandlhkotacirebon.com/css/slot-gacor-maxwin/" rel="dofollow">Slot Gacor</a>
<a href="https://ecp.tnbilsas.com.my/storage/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://dkkp.pip-semarang.ac.id/files/slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="https://sp.sidomuncul.co.id/sp_mon/mod_user/Slot-Gacor-Hari-Ini/" rel="dofollow">Slot Gacor</a>
<a href="https://sehati.halal.go.id/login/" rel="dofollow">Slot Gacor</a>
<a href="http://pintar.jatengprov.go.id/packages/slot-hari-ini/" rel="dofollow">Slot Gacor</a>
<a href="http://pintar.jatengprov.go.id/public/uploads/icon/login-slot-gacor/" rel="dofollow">Slot Gacor</a>
<a href="http://pintar.jatengprov.go.id/public/uploads/users/slot-gacor-resmi/" rel="dofollow">Slot Gacor</a>
<a href="https://sehati.halal.go.id/login/" rel="dofollow">Slot Gacor</a>
<a href="https://www.simpeg.kolakakab.go.id/siaga/" rel="dofollow">Rtp slot</a>
<a href="https://disapaidaman.kukarkab.go.id/rtp-slot-gacor/" rel="dofollow">Rtp slot</a>
<a href="https://sp.sidomuncul.co.id/sp_mon/rtp-slot/" rel="dofollow">Rtp Slot</a>

</html>
