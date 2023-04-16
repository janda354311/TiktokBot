<?php $this->extend('layout/template') ?>

<?php $this->section('stylesheet') ?>
	<link href="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />
<?php $this->endSection() ?>

<?php $this->section('script') ?>
	<script src="/assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<script src="/assets/js/pages/widgets.js"></script>
<?php $this->endSection() ?>

<?php $this->section('content') ?>
  <!--begin::Dashboard-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-xl-8">
      <!--begin::Nav Panel Widget 1-->
      <div class="card card-custom gutter-b card-stretch card-shadowless">
        <!--begin::Body-->
        <div class="card-body p-0">
          <!--begin::Nav Tabs-->
          <ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
              <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_1">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Home/Library.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M5,3 L6,3 C6.55228475,3 7,3.44771525 7,4 L7,20 C7,20.5522847 6.55228475,21 6,21 L5,21 C4.44771525,21 4,20.5522847 4,20 L4,4 C4,3.44771525 4.44771525,3 5,3 Z M10,3 L11,3 C11.5522847,3 12,3.44771525 12,4 L12,20 C12,20.5522847 11.5522847,21 11,21 L10,21 C9.44771525,21 9,20.5522847 9,20 L9,4 C9,3.44771525 9.44771525,3 10,3 Z" fill="#000000" />
                        <rect fill="#000000" opacity="0.3" transform="translate(17.825568, 11.945519) rotate(-19.000000) translate(-17.825568, -11.945519)" x="16.3255682" y="2.94551858" width="3" height="18" rx="1" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bold text-center">SAAS Application</span>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
              <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_2">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
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
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Main Categories</span>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
              <a class="nav-link active border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_3">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Movie-Lane2.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M6,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,19 C20,20.1045695 19.1045695,21 18,21 L6,21 C4.8954305,21 4,20.1045695 4,19 L4,5 C4,3.8954305 4.8954305,3 6,3 Z M5.5,5 C5.22385763,5 5,5.22385763 5,5.5 L5,6.5 C5,6.77614237 5.22385763,7 5.5,7 L6.5,7 C6.77614237,7 7,6.77614237 7,6.5 L7,5.5 C7,5.22385763 6.77614237,5 6.5,5 L5.5,5 Z M17.5,5 C17.2238576,5 17,5.22385763 17,5.5 L17,6.5 C17,6.77614237 17.2238576,7 17.5,7 L18.5,7 C18.7761424,7 19,6.77614237 19,6.5 L19,5.5 C19,5.22385763 18.7761424,5 18.5,5 L17.5,5 Z M5.5,9 C5.22385763,9 5,9.22385763 5,9.5 L5,10.5 C5,10.7761424 5.22385763,11 5.5,11 L6.5,11 C6.77614237,11 7,10.7761424 7,10.5 L7,9.5 C7,9.22385763 6.77614237,9 6.5,9 L5.5,9 Z M17.5,9 C17.2238576,9 17,9.22385763 17,9.5 L17,10.5 C17,10.7761424 17.2238576,11 17.5,11 L18.5,11 C18.7761424,11 19,10.7761424 19,10.5 L19,9.5 C19,9.22385763 18.7761424,9 18.5,9 L17.5,9 Z M5.5,13 C5.22385763,13 5,13.2238576 5,13.5 L5,14.5 C5,14.7761424 5.22385763,15 5.5,15 L6.5,15 C6.77614237,15 7,14.7761424 7,14.5 L7,13.5 C7,13.2238576 6.77614237,13 6.5,13 L5.5,13 Z M17.5,13 C17.2238576,13 17,13.2238576 17,13.5 L17,14.5 C17,14.7761424 17.2238576,15 17.5,15 L18.5,15 C18.7761424,15 19,14.7761424 19,14.5 L19,13.5 C19,13.2238576 18.7761424,13 18.5,13 L17.5,13 Z M17.5,17 C17.2238576,17 17,17.2238576 17,17.5 L17,18.5 C17,18.7761424 17.2238576,19 17.5,19 L18.5,19 C18.7761424,19 19,18.7761424 19,18.5 L19,17.5 C19,17.2238576 18.7761424,17 18.5,17 L17.5,17 Z M5.5,17 C5.22385763,17 5,17.2238576 5,17.5 L5,18.5 C5,18.7761424 5.22385763,19 5.5,19 L6.5,19 C6.77614237,19 7,18.7761424 7,18.5 L7,17.5 C7,17.2238576 6.77614237,17 6.5,17 L5.5,17 Z" fill="#000000" opacity="0.3" />
                        <path d="M11.3521577,14.5722612 L13.9568442,12.7918113 C14.1848159,12.6359797 14.2432972,12.3248456 14.0874656,12.0968739 C14.0526941,12.0460053 14.0088196,12.002002 13.9580532,11.9670814 L11.3533667,10.1754041 C11.1258528,10.0189048 10.8145486,10.0764735 10.6580493,10.3039875 C10.6007019,10.3873574 10.5699997,10.4861652 10.5699997,10.5873545 L10.5699997,14.1594818 C10.5699997,14.4356241 10.7938573,14.6594818 11.0699997,14.6594818 C11.1706891,14.6594818 11.2690327,14.6290818 11.3521577,14.5722612 Z" fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Video Tutorials</span>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
              <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_4">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Media/Equalizer.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <rect fill="#000000" opacity="0.3" x="13" y="4" width="3" height="16" rx="1.5" />
                        <rect fill="#000000" x="8" y="9" width="3" height="11" rx="1.5" />
                        <rect fill="#000000" x="18" y="11" width="3" height="9" rx="1.5" />
                        <rect fill="#000000" x="3" y="13" width="3" height="7" rx="1.5" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Sales Statistics</span>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
              <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_5">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/General/Shield-check.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <rect x="0" y="0" width="24" height="24" />
                        <path d="M4,4 L11.6314229,2.5691082 C11.8750185,2.52343403 12.1249815,2.52343403 12.3685771,2.5691082 L20,4 L20,13.2830094 C20,16.2173861 18.4883464,18.9447835 16,20.5 L12.5299989,22.6687507 C12.2057287,22.8714196 11.7942713,22.8714196 11.4700011,22.6687507 L8,20.5 C5.51165358,18.9447835 4,16.2173861 4,13.2830094 L4,4 Z" fill="#000000" opacity="0.3" />
                        <path d="M11.1750002,14.75 C10.9354169,14.75 10.6958335,14.6541667 10.5041669,14.4625 L8.58750019,12.5458333 C8.20416686,12.1625 8.20416686,11.5875 8.58750019,11.2041667 C8.97083352,10.8208333 9.59375019,10.8208333 9.92916686,11.2041667 L11.1750002,12.45 L14.3375002,9.2875 C14.7208335,8.90416667 15.2958335,8.90416667 15.6791669,9.2875 C16.0625002,9.67083333 16.0625002,10.2458333 15.6791669,10.6291667 L11.8458335,14.4625 C11.6541669,14.6541667 11.4145835,14.75 11.1750002,14.75 Z" fill="#000000" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">System Security</span>
              </a>
            </li>
            <!--end::Item-->
            <!--begin::Item-->
            <li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-0 mb-3 mb-lg-0">
              <a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_5">
                <span class="nav-icon py-2 w-auto">
                  <span class="svg-icon svg-icon-3x">
                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Group.svg-->
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                      <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                        <path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                      </g>
                    </svg>
                    <!--end::Svg Icon-->
                  </span>
                </span>
                <span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Customer Support</span>
              </a>
            </li>
            <!--end::Item-->
          </ul>
          <!--end::Nav Tabs-->
          <!--begin::Nav Content-->
          <div class="tab-content m-0 p-0">
            <div class="tab-pane active" id="forms_widget_tab_1" role="tabpanel"></div>
            <div class="tab-pane" id="forms_widget_tab_2" role="tabpanel"></div>
            <div class="tab-pane" id="forms_widget_tab_3" role="tabpanel"></div>
            <div class="tab-pane" id="forms_widget_tab_4" role="tabpanel"></div>
            <div class="tab-pane" id="forms_widget_tab_6" role="tabpanel"></div>
          </div>
          <!--end::Nav Content-->
        </div>
        <!--end::Body-->
      </div>
      <!--begin::Nav Panel Widget 1-->
    </div>
    <div class="col-xl-4">
      <!--begin::Engage Widget 8-->
      <div class="card card-custom gutter-b card-stretch card-shadowless">
        <div class="card-body p-0 d-flex">
          <div class="d-flex align-items-start justify-content-start flex-grow-1 bg-light-warning p-8 card-rounded flex-grow-1 position-relative">
            <div class="d-flex flex-column align-items-start flex-grow-1 h-100">
              <div class="p-1 flex-grow-1">
                <h4 class="text-warning font-weight-bolder">30 Days Free Trial</h4>
                <p class="text-dark-50 font-weight-bold mt-3">Pay 0$ for the First Month</p>
              </div>
              <a href='#' class="btn btn-link btn-link-warning font-weight-bold">Create Report
              <span class="svg-icon svg-icon-lg svg-icon-warning">
                <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                  <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <polygon points="0 0 24 0 24 24 0 24" />
                    <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                    <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                  </g>
                </svg>
                <!--end::Svg Icon-->
              </span></a>
            </div>
            <div class="position-absolute right-0 bottom-0 mr-5 overflow-hidden">
              <img src="assets/media/svg/humans/custom-13.svg" class="max-h-200px max-h-xl-275px mb-n20" alt="" />
            </div>
          </div>
        </div>
      </div>
      <!--end::Engage Widget 8-->
    </div>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-xl-8">
      <!--begin::Charts Widget 2-->
      <div class="card card-custom bg-gray-100 gutter-b card-stretch card-shadowless">
        <!--begin::Header-->
        <div class="card-header h-auto border-0">
          <!--begin::Title-->
          <div class="card-title py-5">
            <h3 class="card-label">
              <span class="d-block text-dark font-weight-bolder">Recent Orders</span>
              <span class="d-block text-dark-50 mt-2 font-size-sm">More than 500+ new orders</span>
            </h3>
          </div>
          <!--end::Title-->
          <!--begin::Toolbar-->
          <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75" role="tablist">
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_1">
                  <span class="nav-text font-size-sm">Month</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_2">
                  <span class="nav-text font-size-sm">Week</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_charts_widget_2_chart_tab_3">
                  <span class="nav-text font-size-sm">Day</span>
                </a>
              </li>
            </ul>
          </div>
          <!--end::Toolbar-->
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body">
          <!--begin::Chart-->
          <div id="kt_charts_widget_2_chart"></div>
          <!--end::Chart-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Charts Widget 2-->
    </div>
    <div class="col-xl-4">
      <!--begin::List Widget 2-->
      <div class="card card-custom bg-light-success gutter-b card-stretch card-shadowless">
        <!--begin::Header-->
        <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder text-success">People</h3>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline">
              <a href="#" class="btn btn-clean btn-hover-success btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-ver text-success"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <!--begin::Naviigation-->
                <ul class="navi">
                  <li class="navi-header font-weight-bold py-5">
                    <span class="font-size-lg">Add New:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-shopping-cart-1"></i>
                      </span>
                      <span class="navi-text">Order</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-calendar-8"></i>
                      </span>
                      <span class="navi-text">Members</span>
                      <span class="navi-label">
                        <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-telegram-logo"></i>
                      </span>
                      <span class="navi-text">Project</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-new-email"></i>
                      </span>
                      <span class="navi-text">Record</span>
                      <span class="navi-label">
                        <span class="label label-light-success label-rounded font-weight-bold">5</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer pt-5 pb-4">
                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                  </li>
                </ul>
                <!--end::Naviigation-->
              </div>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-white mr-5">
              <div class="symbol-label">
                <img src="assets/media/svg/avatars/004-boy-1.svg" class="h-75 align-self-end" alt="" />
              </div>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
              <span class="text-muted">Business Analyst</span>
            </div>
            <!--end::Text-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-white mr-5">
              <div class="symbol-label">
                <img src="assets/media/svg/avatars/002-girl.svg" class="h-75 align-self-end" alt="" />
              </div>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>
              <span class="text-muted">Creative Director</span>
            </div>
            <!--end::Text-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-white mr-5">
              <div class="symbol-label">
                <img src="assets/media/svg/avatars/007-boy-2.svg" class="h-75 align-self-end" alt="" />
              </div>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps Zumman</a>
              <span class="text-muted">Lead Developer</span>
            </div>
            <!--end::Text-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-white mr-5">
              <div class="symbol-label">
                <img src="assets/media/svg/avatars/008-boy-3.svg" class="h-75 align-self-end" alt="" />
              </div>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Randy Trent</a>
              <span class="text-muted">Backend Developer</span>
            </div>
            <!--end::Text-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-2">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-white mr-5">
              <div class="symbol-label">
                <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
              </div>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>
              <span class="text-muted">Project Manager</span>
            </div>
            <!--end::Text-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::List Widget 2-->
    </div>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-xl-8">
      <!--begin::Advance Table Widget 2-->
      <div class="card card-custom gutter-b card-stretch card-shadowless bg-light">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
          </h3>
          <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_1">Month</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_11_2">Week</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_11_3">Day</a>
              </li>
            </ul>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2 pb-0 mt-n3">
          <div class="tab-content mt-5" id="myTabTables11">
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_tab_pane_11_1" role="tabpanel" aria-labelledby="kt_tab_pane_11_1">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0 w-40px"></th>
                      <th class="p-0 min-w-200px"></th>
                      <th class="p-0 min-w-100px"></th>
                      <th class="p-0 min-w-125px"></th>
                      <th class="p-0 min-w-110px"></th>
                      <th class="p-0 min-w-150px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-success label-inline">Success</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light mr-1">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_tab_pane_11_2" role="tabpanel" aria-labelledby="kt_tab_pane_11_2">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0 w-40px"></th>
                      <th class="p-0 min-w-200px"></th>
                      <th class="p-0 min-w-100px"></th>
                      <th class="p-0 min-w-125px"></th>
                      <th class="p-0 min-w-110px"></th>
                      <th class="p-0 min-w-150px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
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

                        </div>                      
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-success label-inline">Success</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light mr-1">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade show active" id="kt_tab_pane_11_3" role="tabpanel" aria-labelledby="kt_tab_pane_11_3">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0 w-40px"></th>
                      <th class="p-0 min-w-200px"></th>
                      <th class="p-0 min-w-100px"></th>
                      <th class="p-0 min-w-125px"></th>
                      <th class="p-0 min-w-110px"></th>
                      <th class="p-0 min-w-150px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light mr-1">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Sant Outstanding</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">bprow@bnc.cc</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$2,000,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-primary label-inline">Approved</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Application Development</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">app@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$4,600,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Payrol Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">company@dev.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$560,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-success label-inline">Success</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">HR Management System</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">hr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$57,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-danger label-inline">Rejected</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-4">
                        <div class="symbol symbol-50 symbol-light">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">KTR Mobile Application</a>
                        <div>
                          <span class="font-weight-bolder">Email:</span>
                          <a class="text-muted font-weight-bold text-hover-primary" href="#">ktr@demo.com</a>
                        </div>
                      </td>
                      <td class="text-right">
                        <span class="text-dark-75 font-weight-bolder d-block font-size-lg">$45,200,000</span>
                        <span class="text-muted font-weight-bold">Paid</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-500">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="label label-lg label-light-warning label-inline">In Progress</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                                <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                                <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                        <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-primary">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <rect x="0" y="0" width="24" height="24" />
                                <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
          </div>
        </div>
        <!--end::Body-->
      </div>
      <!--end::Advance Table Widget 2-->
    </div>
    <div class="col-xl-4">
      <!--begin::List Widget 5-->
      <div class="card card-custom gutter-b card-stretch">
        <!--begin::header-->
        <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder">Todo</h3>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline" data-toggle="tooltip" title="" data-placement="left" data-original-title="Quick actions">
              <a href="#" class="btn btn-warning btn-sm font-weight-bolder font-size-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Create</a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
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
          </div>
        </div>
        <!--end::header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-6">
            <!--begin::Checkbox-->
            <label class="checkbox checkbox-lg checkbox-warning flex-shrink-0 m-0 mr-4">
              <input type="checkbox" value="1" />
              <span></span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 py-2">
              <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Create FireStone Logo</a>
              <a href="#" class="text-muted font-weight-bold text-hover-primary">Due in 2 Days</a>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-clean btn-hover-warning btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-6">
            <!--begin::Checkbox-->
            <label class="checkbox checkbox-lg checkbox-warning flex-shrink-0 m-0 mr-4">
              <input type="checkbox" value="1" />
              <span></span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 py-2">
              <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Stakeholder Meeting</a>
              <a href="#" class="text-muted font-weight-bold text-hover-primary">Due in 3 Weeks</a>
            </div>
            <!--end::Text-->
            <!--begin: Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-clean btn-hover-warning btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-6">
            <!--begin::Checkbox-->
            <label class="checkbox checkbox-lg checkbox-warning flex-shrink-0 m-0 mr-4">
              <input type="checkbox" value="1" />
              <span></span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 py-2">
              <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Scoping &amp; Estimations</a>
              <a href="#" class="text-muted font-weight-bold text-hover-primary">Due in 8 Hours</a>
            </div>
            <!--end::Text-->
            <!--begin: Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-clean btn-hover-warning btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-6">
            <!--begin::Checkbox-->
            <label class="checkbox checkbox-lg checkbox-warning flex-shrink-0 m-0 mr-4">
              <input type="checkbox" value="1" />
              <span></span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 py-2">
              <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Sprint Showcase</a>
              <a href="#" class="text-muted font-weight-bold text-hover-primary">Due in 4 Months</a>
            </div>
            <!--end::Text-->
            <!--begin: Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-clean btn-hover-warning btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center">
            <!--begin::Checkbox-->
            <label class="checkbox checkbox-lg checkbox-warning flex-shrink-0 m-0 mr-4">
              <input type="checkbox" value="1" />
              <span></span>
            </label>
            <!--end::Checkbox-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 py-2">
              <a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Project Retro</a>
              <a href="#" class="text-muted font-weight-bold text-hover-primary">Due in 1 Year</a>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-clean btn-hover-warning btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::List Widget 5-->
    </div>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-lg-4">
      <!--begin::List Widget 3-->
      <div class="card card-custom card-stretch gutter-b bg-light-info">
        <!--begin::Header-->
        <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder text-dark">Authors</h3>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline">
              <a href="#" class="btn btn-light-primary btn-sm font-weight-bolder dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">August</a>
              <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header pb-1">
                    <span class="text-primary text-uppercase font-weight-bold font-size-sm">Add new:</span>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-shopping-cart-1"></i>
                      </span>
                      <span class="navi-text">Order</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-calendar-8"></i>
                      </span>
                      <span class="navi-text">Event</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-graph-1"></i>
                      </span>
                      <span class="navi-text">Report</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-rocket-1"></i>
                      </span>
                      <span class="navi-text">Post</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-writing"></i>
                      </span>
                      <span class="navi-text">File</span>
                    </a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2">
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/009-boy-4.svg" class="h-75 align-self-end" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
              <span class="text-muted">PHP, SQLite, Artisan CLI</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/006-girl-3.svg" class="h-75 align-self-end" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Anne Clarc</a>
              <span class="text-muted">PHP, SQLite, Artisan CLI</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/011-boy-5.svg" class="h-75 align-self-end" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Kristaps Zumman</a>
              <span class="text-muted">PHP, SQLite, Artisan CLI</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end:Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/015-boy-6.svg" class="h-75 align-self-end" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Ricky Hunt</a>
              <span class="text-muted">PHP, SQLite, Artisan CLI</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center mb-2">
            <!--begin::Symbol-->
            <div class="symbol symbol-40 symbol-light-success mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/avatars/016-boy-7.svg" class="h-75 align-self-end" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 font-weight-bold">
              <a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Carles Puyol</a>
              <span class="text-muted">PHP, SQLite, Artisan CLI</span>
            </div>
            <!--end::Text-->
            <!--begin::Dropdown-->
            <div class="dropdown dropdown-inline ml-2" data-toggle="tooltip" title="Quick actions" data-placement="left">
              <a href="#" class="btn btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-hor"></i>
              </a>
              <div class="dropdown-menu p-0 m-0 dropdown-menu-md dropdown-menu-right">
                <!--begin::Navigation-->
                <ul class="navi navi-hover">
                  <li class="navi-header font-weight-bold py-4">
                    <span class="font-size-lg">Choose Label:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-success">Customer</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-danger">Partner</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-warning">Suplier</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-primary">Member</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-text">
                        <span class="label label-xl label-inline label-light-dark">Staff</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer py-4">
                    <a class="btn btn-clean font-weight-bold btn-sm" href="#">
                    <i class="ki ki-plus icon-sm"></i>Add new</a>
                  </li>
                </ul>
                <!--end::Navigation-->
              </div>
            </div>
            <!--end::Dropdown-->
          </div>
          <!--end::Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::List Widget 3-->
    </div>
    <div class="col-lg-8">
      <!--begin::Base Table Widget 2-->
      <div class="card card-custom card-stretch gutter-b bg-light">
        <!--begin::Header-->
        <div class="card-header border-0 pt-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">New Arrivals</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
          </h3>
          <div class="card-toolbar">
            <ul class="nav nav-pills nav-pills-sm nav-dark-75">
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_1">Month</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4" data-toggle="tab" href="#kt_tab_pane_2_2">Week</a>
              </li>
              <li class="nav-item">
                <a class="nav-link py-2 px-4 active" data-toggle="tab" href="#kt_tab_pane_2_3">Day</a>
              </li>
            </ul>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-2 pb-0 mt-n3">
          <div class="tab-content mt-5" id="myTabTables2">
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_tab_pane_2_1" role="tabpanel" aria-labelledby="kt_tab_pane_2_1">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0 w-50px"></th>
                      <th class="p-0 min-w-150px"></th>
                      <th class="p-0 min-w-140px"></th>
                      <th class="p-0 min-w-120px"></th>
                      <th class="p-0 min-w-40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                        <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">4600 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">354 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                        <span class="text-muted font-weight-bold d-block">Most Successful</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">7200 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                        <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">890 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                        <span class="text-muted font-weight-bold d-block">Best Customers</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">6370 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade" id="kt_tab_pane_2_2" role="tabpanel" aria-labelledby="kt_tab_pane_2_2">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0" style="width: 50px"></th>
                      <th class="p-0" style="min-width: 150px"></th>
                      <th class="p-0" style="min-width: 140px"></th>
                      <th class="p-0" style="min-width: 120px"></th>
                      <th class="p-0" style="min-width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                        <span class="text-muted font-weight-bold d-block">Most Successful</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">7200 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                        <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">890 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                        <span class="text-muted font-weight-bold d-block">Best Customers</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">6370 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                        <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">4600 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">354 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
            <!--begin::Tap pane-->
            <div class="tab-pane fade show active" id="kt_tab_pane_2_3" role="tabpanel" aria-labelledby="kt_tab_pane_2_3">
              <!--begin::Table-->
              <div class="table-responsive">
                <table class="table table-borderless table-vertical-center">
                  <thead>
                    <tr>
                      <th class="p-0" style="width: 50px"></th>
                      <th class="p-0" style="min-width: 150px"></th>
                      <th class="p-0" style="min-width: 140px"></th>
                      <th class="p-0" style="min-width: 120px"></th>
                      <th class="p-0" style="min-width: 40px"></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Top Authors</a>
                        <span class="text-muted font-weight-bold d-block">Successful Fellas</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJs, HTML</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">4600 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Popular Authors</a>
                        <span class="text-muted font-weight-bold d-block">Most Successful</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Python, MySQL</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">7200 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">New Users</a>
                        <span class="text-muted font-weight-bold d-block">Awesome Users</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">Laravel, Metronic</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">890 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Active Customers</a>
                        <span class="text-muted font-weight-bold d-block">Best Customers</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">AngularJS, C#</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">6370 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                    <tr>
                      <td class="pl-0 py-5">
                        <div class="symbol symbol-50 symbol-light mr-2">
                          <span class="symbol-label">
                            <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
                          </span>
                        </div>
                      </td>
                      <td class="pl-0">
                        <a href="#" class="text-dark font-weight-bolder text-hover-primary mb-1 font-size-lg">Bestseller Theme</a>
                        <span class="text-muted font-weight-bold d-block">Amazing Templates</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">ReactJS, Ruby</span>
                      </td>
                      <td class="text-right">
                        <span class="text-muted font-weight-bold">354 Users</span>
                      </td>
                      <td class="text-right pr-0">
                        <a href="#" class="btn btn-icon btn-light btn-sm">
                          <span class="svg-icon svg-icon-md svg-icon-success">
                            <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                              <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1" />
                                <path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)" />
                              </g>
                            </svg>
                            <!--end::Svg Icon-->
                          </span>
                        </a>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </div>
              <!--end::Table-->
            </div>
            <!--end::Tap pane-->
          </div>
        </div>
        <!--end::Body-->
      </div>
      <!--end::Base Table Widget 2-->
    </div>
  </div>
  <!--end::Row-->
  <!--begin::Row-->
  <div class="row">
    <div class="col-xl-8">
      <!--begin::Advance Table Widget 1-->
      <div class="card card-custom card-stretch gutter-b card-shadowless bg-light">
        <!--begin::Header-->
        <div class="card-header border-0 py-5">
          <h3 class="card-title align-items-start flex-column">
            <span class="card-label font-weight-bolder text-dark">Agents Stats</span>
            <span class="text-muted mt-3 font-weight-bold font-size-sm">More than 400+ new members</span>
          </h3>
          <div class="card-toolbar">
            <a href="#" class="btn btn-success font-weight-bolder font-size-sm">
            <span class="svg-icon svg-icon-md svg-icon-white">
              <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Add-user.svg-->
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                  <polygon points="0 0 24 0 24 24 0 24" />
                  <path d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                  <path d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
                </g>
              </svg>
              <!--end::Svg Icon-->
            </span>Add New Member</a>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body py-0">
          <!--begin::Table-->
          <div class="table-responsive">
            <table class="table table-head-custom table-vertical-center" id="kt_advance_table_widget_1">
              <thead>
                <tr class="text-left">
                  <th class="pl-0" style="width: 20px">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </th>
                  <th class="pr-0" style="width: 50px">authors</th>
                  <th style="min-width: 200px"></th>
                  <th style="min-width: 150px">company</th>
                  <th style="min-width: 150px">progress</th>
                  <th class="pr-0 text-right" style="min-width: 150px">action</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="pl-0">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </td>
                  <td class="pr-0">
                    <div class="symbol symbol-50 symbol-light mt-1">
                      <span class="symbol-label">
                        <img src="assets/media/svg/avatars/001-boy.svg" class="h-75 align-self-end" alt="" />
                      </span>
                    </div>
                  </td>
                  <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Brad Simmons</a>
                    <span class="text-muted font-weight-bold text-muted d-block">HTML, JS, ReactJS</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Intertico</span>
                    <span class="text-muted font-weight-bold">Web, UI/UX Design</span>
                  </td>
                  <td>
                    <div class="d-flex flex-column w-100 mr-2">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted mr-2 font-size-sm font-weight-bold">65%</span>
                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                      </div>
                      <div class="progress progress-xs w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td class="pr-0 text-right">
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="pl-0">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </td>
                  <td class="pr-0">
                    <div class="symbol symbol-50 symbol-light mt-1">
                      <span class="symbol-label">
                        <img src="assets/media/svg/avatars/018-girl-9.svg" class="h-75 align-self-end" alt="" />
                      </span>
                    </div>
                  </td>
                  <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Jessie Clarcson</a>
                    <span class="text-muted font-weight-bold text-muted d-block">C#, ASP.NET, MS SQL</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">Agoda</span>
                    <span class="text-muted font-weight-bold">Houses &amp; Hotels</span>
                  </td>
                  <td>
                    <div class="d-flex flex-column w-100 mr-2">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted mr-2 font-size-sm font-weight-bold">83%</span>
                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                      </div>
                      <div class="progress progress-xs w-100">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td class="pr-0 text-right">
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="pl-0">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </td>
                  <td class="pr-0">
                    <div class="symbol symbol-50 symbol-lightv mt-1">
                      <span class="symbol-label">
                        <img src="assets/media/svg/avatars/047-girl-25.svg" class="h-75 align-self-end" alt="" />
                      </span>
                    </div>
                  </td>
                  <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Lebron Wayde</a>
                    <span class="text-muted font-weight-bold text-muted d-block">PHP, Laravel, VueJS</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">RoadGee</span>
                    <span class="text-muted font-weight-bold">Transportation</span>
                  </td>
                  <td>
                    <div class="d-flex flex-column w-100 mr-2">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted mr-2 font-size-sm font-weight-bold">47%</span>
                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                      </div>
                      <div class="progress progress-xs w-100">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 83%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td class="pr-0 text-right">
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                  </td>
                </tr>
                <tr>
                  <td class="pl-0">
                    <label class="checkbox checkbox-lg checkbox-inline">
                      <input type="checkbox" value="1" />
                      <span></span>
                    </label>
                  </td>
                  <td class="pr-0">
                    <div class="symbol symbol-50 symbol-light mt-1">
                      <span class="symbol-label">
                        <img src="assets/media/svg/avatars/014-girl-7.svg" class="h-75 align-self-end" alt="" />
                      </span>
                    </div>
                  </td>
                  <td class="pl-0">
                    <a href="#" class="text-dark-75 font-weight-bolder text-hover-primary mb-1 font-size-lg">Natali Trump</a>
                    <span class="text-muted font-weight-bold text-muted d-block">Python, PostgreSQL, ReactJS</span>
                  </td>
                  <td>
                    <span class="text-dark-75 font-weight-bolder d-block font-size-lg">The Hill</span>
                    <span class="text-muted font-weight-bold">Insurance</span>
                  </td>
                  <td>
                    <div class="d-flex flex-column w-100 mr-2">
                      <div class="d-flex align-items-center justify-content-between mb-2">
                        <span class="text-muted mr-2 font-size-sm font-weight-bold">71%</span>
                        <span class="text-muted font-size-sm font-weight-bold">Progress</span>
                      </div>
                      <div class="progress progress-xs w-100">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 71%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                      </div>
                    </div>
                  </td>
                  <td class="pr-0 text-right">
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M7,3 L17,3 C19.209139,3 21,4.790861 21,7 C21,9.209139 19.209139,11 17,11 L7,11 C4.790861,11 3,9.209139 3,7 C3,4.790861 4.790861,3 7,3 Z M7,9 C8.1045695,9 9,8.1045695 9,7 C9,5.8954305 8.1045695,5 7,5 C5.8954305,5 5,5.8954305 5,7 C5,8.1045695 5.8954305,9 7,9 Z" fill="#000000" />
                            <path d="M7,13 L17,13 C19.209139,13 21,14.790861 21,17 C21,19.209139 19.209139,21 17,21 L7,21 C4.790861,21 3,19.209139 3,17 C3,14.790861 4.790861,13 7,13 Z M17,19 C18.1045695,19 19,18.1045695 19,17 C19,15.8954305 18.1045695,15 17,15 C15.8954305,15 15,15.8954305 15,17 C15,18.1045695 15.8954305,19 17,19 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm mx-3">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Write.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M12.2674799,18.2323597 L12.0084872,5.45852451 C12.0004303,5.06114792 12.1504154,4.6768183 12.4255037,4.38993949 L15.0030167,1.70195304 L17.5910752,4.40093695 C17.8599071,4.6812911 18.0095067,5.05499603 18.0083938,5.44341307 L17.9718262,18.2062508 C17.9694575,19.0329966 17.2985816,19.701953 16.4718324,19.701953 L13.7671717,19.701953 C12.9505952,19.701953 12.2840328,19.0487684 12.2674799,18.2323597 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.701953, 10.701953) rotate(-135.000000) translate(-14.701953, -10.701953)" />
                            <path d="M12.9,2 C13.4522847,2 13.9,2.44771525 13.9,3 C13.9,3.55228475 13.4522847,4 12.9,4 L6,4 C4.8954305,4 4,4.8954305 4,6 L4,18 C4,19.1045695 4.8954305,20 6,20 L18,20 C19.1045695,20 20,19.1045695 20,18 L20,13 C20,12.4477153 20.4477153,12 21,12 C21.5522847,12 22,12.4477153 22,13 L22,18 C22,20.209139 20.209139,22 18,22 L6,22 C3.790861,22 2,20.209139 2,18 L2,6 C2,3.790861 3.790861,2 6,2 L12.9,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                    <a href="#" class="btn btn-icon btn-light btn-hover-primary btn-sm">
                      <span class="svg-icon svg-icon-md svg-icon-primary">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Trash.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                            <rect x="0" y="0" width="24" height="24" />
                            <path d="M6,8 L6,20.5 C6,21.3284271 6.67157288,22 7.5,22 L16.5,22 C17.3284271,22 18,21.3284271 18,20.5 L18,8 L6,8 Z" fill="#000000" fill-rule="nonzero" />
                            <path d="M14,4.5 L14,4 C14,3.44771525 13.5522847,3 13,3 L11,3 C10.4477153,3 10,3.44771525 10,4 L10,4.5 L5.5,4.5 C5.22385763,4.5 5,4.72385763 5,5 L5,5.5 C5,5.77614237 5.22385763,6 5.5,6 L18.5,6 C18.7761424,6 19,5.77614237 19,5.5 L19,5 C19,4.72385763 18.7761424,4.5 18.5,4.5 L14,4.5 Z" fill="#000000" opacity="0.3" />
                          </g>
                        </svg>
                        <!--end::Svg Icon-->
                      </span>
                    </a>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
          <!--end::Table-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::Advance Table Widget 1-->
    </div>
    <div class="col-xl-4">
      <!--begin::List Widget 7-->
      <div class="card card-custom card-stretch gutter-b card-shadowless bg-light-danger">
        <!--begin::Header-->
        <div class="card-header border-0">
          <h3 class="card-title font-weight-bolder text-dark">Trends</h3>
          <div class="card-toolbar">
            <div class="dropdown dropdown-inline">
              <a href="#" class="btn btn-clean btn-hover-light-primary btn-sm btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="ki ki-bold-more-ver"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-md dropdown-menu-right">
                <!--begin::Naviigation-->
                <ul class="navi">
                  <li class="navi-header font-weight-bold py-5">
                    <span class="font-size-lg">Add New:</span>
                    <i class="flaticon2-information icon-md text-muted" data-toggle="tooltip" data-placement="right" title="Click to learn more..."></i>
                  </li>
                  <li class="navi-separator mb-3 opacity-70"></li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="flaticon2-shopping-cart-1"></i>
                      </span>
                      <span class="navi-text">Order</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-calendar-8"></i>
                      </span>
                      <span class="navi-text">Members</span>
                      <span class="navi-label">
                        <span class="label label-light-danger label-rounded font-weight-bold">3</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-telegram-logo"></i>
                      </span>
                      <span class="navi-text">Project</span>
                    </a>
                  </li>
                  <li class="navi-item">
                    <a href="#" class="navi-link">
                      <span class="navi-icon">
                        <i class="navi-icon flaticon2-new-email"></i>
                      </span>
                      <span class="navi-text">Record</span>
                      <span class="navi-label">
                        <span class="label label-light-success label-rounded font-weight-bold">5</span>
                      </span>
                    </a>
                  </li>
                  <li class="navi-separator mt-3 opacity-70"></li>
                  <li class="navi-footer pt-5 pb-4">
                    <a class="btn btn-light-primary font-weight-bolder btn-sm" href="#">More options</a>
                    <a class="btn btn-clean font-weight-bold btn-sm d-none" href="#" data-toggle="tooltip" data-placement="right" title="Click to learn more...">Learn more</a>
                  </li>
                </ul>
                <!--end::Naviigation-->
              </div>
            </div>
          </div>
        </div>
        <!--end::Header-->
        <!--begin::Body-->
        <div class="card-body pt-0">
          <!--begin::Item-->
          <div class="d-flex align-items-center flex-wrap mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-50 symbol-light mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/misc/006-plurk.svg" class="h-50 align-self-center" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 mr-2">
              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Top Authors</a>
              <span class="text-muted font-weight-bold">Mark, Rowling, Esther</span>
            </div>
            <!--end::Text-->
            <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+82$</span>
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center flex-wrap mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-50 symbol-light mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/misc/015-telegram.svg" class="h-50 align-self-center" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 mr-2">
              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Popular Authors</a>
              <span class="text-muted font-weight-bold">Randy, Steve, Mike</span>
            </div>
            <!--end::Text-->
            <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+280$</span>
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center flex-wrap mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-50 symbol-light mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/misc/003-puzzle.svg" class="h-50 align-self-center" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 mr-2">
              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">New Users</a>
              <span class="text-muted font-weight-bold">John, Pat, Jimmy</span>
            </div>
            <!--end::Text-->
            <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center flex-wrap mb-10">
            <!--begin::Symbol-->
            <div class="symbol symbol-50 symbol-light mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/misc/005-bebo.svg" class="h-50 align-self-center" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 mr-2">
              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Active Customers</a>
              <span class="text-muted font-weight-bold">Sandra, Tim, Louis</span>
            </div>
            <!--end::Text-->
            <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
          </div>
          <!--end::Item-->
          <!--begin::Item-->
          <div class="d-flex align-items-center flex-wrap">
            <!--begin::Symbol-->
            <div class="symbol symbol-50 symbol-light mr-5">
              <span class="symbol-label">
                <img src="assets/media/svg/misc/014-kickstarter.svg" class="h-50 align-self-center" alt="" />
              </span>
            </div>
            <!--end::Symbol-->
            <!--begin::Text-->
            <div class="d-flex flex-column flex-grow-1 mr-2">
              <a href="#" class="font-weight-bold text-dark-75 text-hover-primary font-size-lg mb-1">Bestseller Theme</a>
              <span class="text-muted font-weight-bold">Disco, Retro, Sports</span>
            </div>
            <!--end::Text-->
            <span class="label label-xl label-light label-inline my-lg-0 my-2 text-dark-50 font-weight-bolder">+4500$</span>
          </div>
          <!--end::Item-->
        </div>
        <!--end::Body-->
      </div>
      <!--end::List Widget 7-->
    </div>
  </div>
  <!--end::Row-->
  <!--end::Dashboard-->
<?php $this->endSection() ?>
