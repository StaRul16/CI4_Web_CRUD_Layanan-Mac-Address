<!DOCTYPE html>
<html>
  <head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Admin Dashboard - Inti</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/img/inti.png" />
    <link rel="icon" type="image/png" sizes="32x32" href="/img/inti.png" />
    <link rel="icon" type="image/png" sizes="16x16" href="/img/inti.png" />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="/deskapp-3.0.1/vendors/styles/core.css" />
    <link rel="stylesheet" type="text/css" href="/deskapp-3.0.1/vendors/styles/icon-font.min.css" />
    <link rel="stylesheet" type="text/css" href="/deskapp-3.0.1/src/plugins/datatables/css/dataTables.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/deskapp-3.0.1/src/plugins/datatables/css/responsive.bootstrap4.min.css" />
    <link rel="stylesheet" type="text/css" href="/deskapp-3.0.1/vendors/styles/style.css" />

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-GBZ3SGGX85"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());

      gtag("config", "G-GBZ3SGGX85");
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-NXZMQSS");
    </script>
    <!-- End Google Tag Manager -->
  </head>
  <body>
    

    <div class="header">
      <div class="header-left">
        <div class="menu-icon bi bi-list"></div>
        
      </div>
      <div class="header-right">
        <div class="dashboard-setting user-notification">
          <div class="dropdown">
            <a class="dropdown-toggle no-arrow" href="javascript:;" data-toggle="right-sidebar">
              <i class="dw dw-settings2"></i>
            </a>
          </div>
        </div>
        
        <div class="user-info-dropdown">
          <div class="dropdown">
            <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
              <span class="user-icon">
              <i class="bi bi-person"></i>
              </span>
              <span class="user-name">ADMIN</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
              <a class="dropdown-item" href="#"><i class="dw dw-user1"></i> Profile</a>
              <a class="dropdown-item" href="/logout"><i class="dw dw-logout"></i> Log Out</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="right-sidebar">
      <div class="sidebar-title">
        <h3 class="weight-600 font-16 text-blue">
          Layout Settings
          <span class="btn-block font-weight-400 font-12">User Interface Settings</span>
        </h3>
        <div class="close-sidebar" data-toggle="right-sidebar-close">
          <i class="icon-copy ion-close-round"></i>
        </div>
      </div>
      <div class="right-sidebar-body customscroll">
        <div class="right-sidebar-body-content">
          <h4 class="weight-600 font-18 pb-10">Header Background</h4>
          <div class="sidebar-btn-group pb-30 mb-10">
            <a href="javascript:void(0);" class="btn btn-outline-primary header-white active">White</a>
            <a href="javascript:void(0);" class="btn btn-outline-primary header-dark">Dark</a>
          </div>

          <h4 class="weight-600 font-18 pb-10">Sidebar Background</h4>
          <div class="sidebar-btn-group pb-30 mb-10">
            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-light">White</a>
            <a href="javascript:void(0);" class="btn btn-outline-primary sidebar-dark active">Dark</a>
          </div>

          <div class="reset-options pt-30 text-center">
            <button class="btn btn-danger" id="reset-settings">Reset Settings</button>
          </div>
        </div>
      </div>
    </div>

    <div class="left-side-bar">
      <div class="brand-logo">
        <a href="#">
          <img src="/img/inti.png" alt=""style="height:100%; width:50%;margin: 30px;" class="dark-logo" />
          <img src="/img/inti.png" alt=""style="height:100%; width:50%;margin: 30px;" class="light-logo" />
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
          <i class="ion-close-round"></i>
        </div>
      </div>
      <div class="menu-block customscroll">
        <div class="sidebar-menu">
          <ul id="accordion-menu">
          <li>
              <a href="/dashboard" class="dropdown-toggle no-arrow"> <span class="micon bi bi-house"></span><span class="mtext">Home</span> </a>
            </li>

            <li>
              <a href="/divisi" class="dropdown-toggle no-arrow"> <span class="micon bi bi-diagram-3"></span><span class="mtext">Divisi</span> </a>
            </li>
            <li>
              <a href="/perangkat" class="dropdown-toggle no-arrow"> <span class="micon bi bi-laptop"></span><span class="mtext">Perangkat</span> </a>
            </li>
            <li>
              <a href="/userinfo" class="dropdown-toggle no-arrow"> <span class="micon bi bi-receipt-cutoff"></span><span class="mtext">MAC Address</span> </a>
            </li>
            <li>
              <div class="dropdown-divider"></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="mobile-menu-overlay"></div>

    <div class="content-wrapper">
        <!-- Konten ini bisa diganti sesuai dengan halaman yang dipilih -->
        <section class="content">
            <div class="container-fluid">
                <?= $this->renderSection('content') ?>
            </div>
        </section>
    </div>
    <!-- welcome modal start -->
    
    <!-- welcome modal end -->
    <!-- js -->
    <script src="/deskapp-3.0.1/vendors/scripts/core.js"></script>
    <script src="/deskapp-3.0.1/vendors/scripts/script.min.js"></script>
    <script src="/deskapp-3.0.1/vendors/scripts/process.js"></script>
    <script src="/deskapp-3.0.1/vendors/scripts/layout-settings.js"></script>
    <script src="/deskapp-3.0.1/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/deskapp-3.0.1/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
    <script src="/deskapp-3.0.1/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
    <script src="/deskapp-3.0.1/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
    <script src="/deskapp-3.0.1/vendors/scripts/dashboard3.js"></script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXZMQSS" height="0" width="0" style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <script src="/deskapp-3.0.1/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/buttons.print.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/buttons.html5.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/buttons.flash.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/pdfmake.min.js"></script>
		<script src="/deskapp-3.0.1/src/plugins/datatables/js/vfs_fonts.js"></script>
		<!-- Datatable Setting js -->
		<script src="/deskapp-3.0.1/vendors/scripts/datatable-setting.js"></script>
    
  </body>
</html>
