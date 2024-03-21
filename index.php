<!DOCTYPE html>

<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact" dir="ltr"
  data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">

<head>
  <meta charset="utf-8" />
  <meta name="viewport"
    content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

  <title>Selects and tags - Forms | Vuexy - Bootstrap Admin Template</title>

  <meta name="description" content="Start your development with a Dashboard for Bootstrap 5" />
  <meta name="keywords" content="dashboard, bootstrap 5 dashboard, bootstrap 5 design, bootstrap 5" />
  <!-- Canonical SEO -->
  <link rel="canonical" href="https://1.envato.market/vuexy_admin" />


  <!-- End Google Tag Manager -->
  <!-- Favicon -->
  <link rel="icon" type="image/x-icon"
    href="https://demos.pixinvent.com/vuexy-html-admin-template/assets/img/favicon/favicon.ico" />
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com/" />
  <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
  <link
    href="https://fonts.googleapis.com/css2?family=Public+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;ampdisplay=swap"
    rel="stylesheet" />
  <!-- Icons -->
  <link href="https://fonts.cdnfonts.com/css/arabic" rel="stylesheet">
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

  <link rel="stylesheet" href="assets/vendor/fonts/fontawesome.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/tabler-icons.css" />
  <link rel="stylesheet" href="assets/vendor/fonts/flag-icons.css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/jquery-timepicker/jquery-timepicker.css" />
  <link rel="stylesheet" href="assets/vendor/libs/pickr/pickr-themes.css" />
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <!-- Page CSS -->
  <link rel="stylesheet" href="assets/vendor/css/pages/app-invoice.css" />
  <!-- Core CSS -->
  <link rel="stylesheet" href="assets/vendor/css/rtl/core.css" class="template-customizer-core-css" />
  <link rel="stylesheet" href="assets/vendor/css/rtl/theme-default.css" class="template-customizer-theme-css" />
  <link rel="stylesheet" href="assets/css/demo.css" />
  <!-- Vendors CSS -->
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/flatpickr/flatpickr.css" />
  <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />
  <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />
  <link rel="stylesheet" href="assets/vendor/libs/select2/select2.css" />
  <link rel="stylesheet" href="assets/vendor/libs/tagify/tagify.css" />
  <link rel="stylesheet" href="assets/vendor/libs/bootstrap-select/bootstrap-select.css" />
  <link rel="stylesheet" href="assets/vendor/libs/typeahead-js/typeahead.css" />


  <!-- Page CSS -->
  <!-- Helpers -->
  <script src="assets/vendor/js/helpers.js"></script>
  <!--! Template customizer & Theme config files MUST be included after core stylesheets and helpers.js in the <head> section -->
  <!--? Template customizer: To hide customizer set displayCustomizer value false in config.js.  -->
  <!--? Config:  Mandatory theme config file contain global vars & default theme options, Set your preferred theme option in this file.  -->
  <script src="assets/js/config.js"></script>
  <style>
    body {
      height: 100vh;
      margin: 0;
      background-image: url('BT.jpg');
      background-repeat: no-repeat;
      background-position: center center;
      background-size: cover;
      background-attachment: fixed;
    }

    .text-muted {
      --bs-text-opacity: 1;
      color: #000000 !important;
      font-size: x-large;
    }

    .fw-light {
      font-weight: 700 !important;
    }

    .disabled {
      pointer-events: none;
      opacity: 0.5;
      /* You can adjust the opacity as needed */
    }
    .switch-primary.switch .switch-input:checked ~ .switch-toggle-slider {
    background: #c20345;
    border-color: #c20345 !important;

    }
    .btn-primary {
    color: #fff;
    background-color: #856357;
    border-color: #856357;
}
.btn-primary:hover {
    color: #c20345; /* Change to the desired hover color */
}

  </style>

</head>

<body>

  <div class="content-wrapper">
    <!-- Content -->
    <div class="container-xxl flex-grow-1 container-p-y text-center">
      <h4 class="py-3 mb-4">
        <a href="">
          <img src="logo.png" alt="Proxirest Logo"
            height="200" width="200">
        </a>
      </h4>
      <div class="row">
        <div class="col-12">
          <div class="card mb-4">
            <h5 class="card-header"> AZ WEB </h5>
            <div class="card-body">
                <!-- Basic -->
               <form action="pdf.php" method="post">
               <input
                          type="text"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder="من فضبلك املئ الفراغ"
                          name="shop"
                          aria-describedby="defaultFormControlHelp"
                        />
                        <br>
                        <input
                          type="text"
                          name="phone"
                          class="form-control"
                          id="defaultFormControlInput"
                          placeholder="رقم الهاتف"
                          aria-describedby="defaultFormControlHelp"
                        />
                     

                <div class="row mt-4">
                      <div class="col-12 d-flex justify-content-center">
                      <button type="submit" class="btn btn-primary" style="background-color:#a9a727;border-color:#a9a727">Générer pdf</button>
                  </div>
              </div>
            </form>
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <br>
  
  <script src="assets/vendor/libs/jquery/jquery.js"></script>
  <script src="assets/vendor/libs/popper/popper.js"></script>
  <script src="assets/vendor/js/bootstrap.js"></script>
  <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
  <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
  <script src="assets/vendor/libs/hammer/hammer.js"></script>
  <script src="assets/vendor/libs/i18n/i18n.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/js/menu.js"></script>
  <!-- endbuild -->
  <!-- Vendors JS -->
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/libs/bloodhound/bloodhound.js"></script>
  <script src="assets/vendor/libs/moment/moment.js"></script>
  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="assets/vendor/libs/bootstrap-datepicker/bootstrap-datepicker.js"></script>
  <script src="assets/vendor/libs/bootstrap-daterangepicker/bootstrap-daterangepicker.js"></script>
  <script src="assets/vendor/libs/jquery-timepicker/jquery-timepicker.js"></script>
  <script src="assets/vendor/libs/pickr/pickr.js"></script>
  <script src="assets/vendor/libs/jquery-repeater/jquery-repeater.js"></script>
  <script src="assets/vendor/libs/flatpickr/flatpickr.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave.js"></script>
  <script src="assets/vendor/libs/cleavejs/cleave-phone.js"></script>
  <!-- Page JS -->
  <script src="assets/js/forms-selects.js"></script>
  <script src="assets/js/forms-typeahead.js"></script>
  <script src="assets/js/forms-pickers.js"></script>
  <!-- <script src="assets/js/offcanvas-send-invoice.js"></script> -->
  <!-- <script src="assets/js/app-invoice-add.js"></script> -->
  <script src="assets/vendor/libs/select2/select2.js"></script>
  <script src="assets/vendor/libs/bootstrap-select/bootstrap-select.js"></script>
  <script src="assets/vendor/libs/typeahead-js/typeahead.js"></script>
  <script src="assets/vendor/libs/bloodhound/bloodhound.js"></script>
  <!-- Main JS -->
  <script src="https://unpkg.com/@yaireo/tagify@4.21.1/dist/jQuery.tagify.min.js"></script>
  <script src="assets/js/main.js"></script>
 
</body>

</html>