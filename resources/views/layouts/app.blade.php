<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from codebucks.in/herozi/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2026 13:16:38 GMT -->
<head>
    <meta charset="utf-8">
    <title>E-Commerce Dashboard | Herozi - Bootstrap Admin & Dashboard Template by SRBThemes</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Herozi is Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta name="keywords" content="Herozi bootstrap dashboard, bootstrap, bootstrap 5, html dashboard, web dashboard, admin themes, web design, figma, web development, fullcalendar, datatables, free templates, free admin themes, bootstrap theme, bootstrap template, bootstrap dashboard, bootstrap dark mode, bootstrap button, frontend dashboard, responsive bootstrap theme">
    <meta content="SRBThemes" name="author">
    <link rel="shortcut icon" href=" {{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Herozi - The World's Best Selling Bootstrap Admin Template by SRBThemes">
    <meta property="og:description" content="Herozi is Bootstrap 5 admin dashboard template. With Dark Mode, multi-demo options, RTL support, and lifetime updates, it's perfect for web developers.">
    <meta property="og:url" content="https://themeforest.net/user/srbthemes/portfolio">
    <meta property="og:site_name" content="Herozi by SRBThemes">
    <!-- DataTables Select CSS -->
    <link rel="stylesheet" href="../../../cdn.datatables.net/1.11.5/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="../../../cdn.datatables.net/select/1.6.0/css/select.dataTables.min.css">
    <link href="../../../cdn.jsdelivr.net/npm/jquery-datatables-checkboxes%401.3.0/css/dataTables.checkboxes.min.css" rel="stylesheet">
    <!-- Layout JS -->
    <script src="{{asset('assets')}}/js/layout/layout-default.js"></script>

    <script src="{{asset('assets')}}/js/layout/layout.js"></script>

    <!-- Choice Css -->
    <link rel="stylesheet" href="{{asset('assets')}}/libs/choices.js/public/{{asset('assets')}}/styles/choices.min.css">
    <!-- Simplebar Css -->
    <link href="{{asset('assets')}}/libs/simplebar/simplebar.min.css" rel="stylesheet">
    <!--icons css-->
    <link href="{{asset('assets')}}/css/icons.min.css" rel="stylesheet" type="text/css">
    <!-- Sweet Alert -->
    <link href="{{asset('assets')}}/libs/sweetalert2/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <!-- Bootstrap Css -->
    <link href="{{asset('assets')}}/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css">
    <!-- App Css-->
    <link href="{{asset('assets')}}/css/app.min.css" id="app-style" rel="stylesheet" type="text/css">

    <link href="{{asset('assets')}}/css/custom.min.css" id="custom-style" rel="stylesheet" type="text/css">
</head>

<body>

    <!-- Begin page -->
    <!-- START HEADER -->
    <header class="app-header">
      <div class="container-fluid">
        <div class="nav-header">

          <div class="header-left hstack gap-3">
            <!-- HORIZONTAL BRAND LOGO -->
            <div class="app-sidebar-logo app-horizontal-logo justify-content-center align-items-center">
              <a href="index.html">
                <img height="35" class="app-sidebar-logo-default" alt="Logo" loading="lazy"  src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}"">
                <img height="40" class="app-sidebar-logo-minimize" alt="Logo" loading="lazy"  src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">
              </a>
            </div>

            <!-- Sidebar Toggle Btn -->
            <button type="button" class="btn btn-light-light icon-btn sidebar-toggle d-none d-md-block" aria-expanded="false" aria-controls="main-menu">
              <span class="visually-hidden">Toggle sidebar</span>
              <i class="ri-menu-2-fill"></i>
            </button>

            <!-- Sidebar Toggle for Mobile -->
            <button class="btn btn-light-light icon-btn d-md-none small-screen-toggle" id="smallScreenSidebarLabel" type="button" data-bs-toggle="offcanvas" data-bs-target="#smallScreenSidebar" aria-controls="smallScreenSidebar">
              <span class="visually-hidden">Sidebar toggle for mobile</span>
              <i class="ri-arrow-right-fill"></i>
            </button>

            <!-- Sidebar Toggle for Horizontal Menu -->
            <button class="btn btn-light-light icon-btn d-lg-none small-screen-horizontal-toggle" type="button" ria-expanded="false" aria-controls="main-menu">
              <span class="visually-hidden">Sidebar toggle for horizontal</span>
              <i class="ri-arrow-right-fill"></i>
            </button>

            <!-- Search Dropdown -->
            <div class="dropdown features-dropdown">

              <!-- Search Input for Desktop -->
              <form class="d-none d-sm-block header-search" data-bs-toggle="dropdown" aria-expanded="false">
                <div class="form-icon">
                  <input type="search" class="form-control form-control-icon" id="firstNameLayout4" placeholder="Search in Herozi" required>
                  <i class="ri-search-2-line text-muted"></i>
                </div>
              </form>

              <!-- Search Button for Mobile -->
              <button type="button" class="btn btn-light-light icon-btn d-sm-none" data-bs-toggle="dropdown" aria-expanded="false">
                <span class="visually-hidden">Search</span>
                <i class="ri-search-2-line text-muted"></i>
              </button>

              <div class="dropdown-menu">
                <span class="dropdown-header fs-12">Recent searches</span>
                <div class="dropdown-item text-wrap bg-transparent">
                  <span class="badge bg-light text-muted me-2">Gulp</span>
                  <span class="badge bg-light text-muted me-2">Notification panel</span>
                </div>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header fs-12">Tutorials</span>
                <div class="dropdown-item">
                  <div class="hstack gap-2 overflow-hidden">
                    <button type="button" class="btn btn-light-light rounded-pill icon-btn-sm flex-shrink-0">
                      <span class="visually-hidden">Equalizer settings</span>
                      <i class="ri-equalizer-3-line m-0"></i>
                    </button>
                    <div class="flex-grow-1 text-truncate">
                      <span>How to set up Gulp?</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="hstack gap-2 overflow-hidden">
                    <button type="button" class="btn btn-light-light rounded-pill icon-btn-sm flex-shrink-0">
                      <span class="visually-hidden">How to change theme color?</span>
                      <i class="ri-palette-line m-0"></i>
                    </button>
                    <div class="flex-grow-1 text-truncate">
                      <span>How to change theme color?</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <span class="dropdown-header fs-12">Members</span>
                <div class="dropdown-item">
                  <div class="hstack gap-2 overflow-hidden">
                    <div class="flex-shrink-0">
                      <img class="img-fluid avatar-sm avatar-item" src="{{asset('assets')}}/images/avatar/avatar-10.jpg" alt="avatar image">
                    </div>
                    <div class="flex-grow-1 text-truncate">
                      <span>Amanda Harvey <i class="bi-patch-check-fill text-primary"></i></span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="hstack gap-2 overflow-hidden">
                    <div class="flex-shrink-0">
                      <img class="img-fluid avatar-sm avatar-item" src="{{asset('assets')}}/images/avatar/avatar-1.jpg" alt="avatar image">
                    </div>
                    <div class="flex-grow-1 text-truncate">
                      <span>David Harrison</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-item">
                  <div class="hstack gap-2 overflow-hidden">
                    <div class="flex-shrink-0">
                      <div class="avatar-item avatar-sm avatar-title border-0 text-bg-info">A</div>
                    </div>
                    <div class="flex-grow-1 text-truncate ms-2">
                      <span>Anne Richard</span>
                    </div>
                  </div>
                </div>
                <div class="dropdown-divider"></div>
                <a class="px-5 py-2 d-block text-center link-primary">
                  See all results
                  <i class="ri-arrow-right-s-line"></i>
                </a>
              </div>
            </div>
          </div>

          <div class="header-right hstack gap-3">
            <div class="hstack gap-0 gap-sm-1">
              <!-- Cart -->
              <div class="dropdown features-dropdown">
                <button type="button" class="btn icon-btn btn-text-primary rounded-circle position-relative" id="page-header-cart-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  <i class="bi bi-bag fs-2xl"></i>
                  <span class="position-absolute translate-middle badge rounded-pill p-1 min-w-20px badge text-bg-primary">5</span>
                </button>
                <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0" aria-labelledby="page-header-cart-dropdown">
                  <div class="card mb-0">

                    <!-- Cart Header -->
                    <div class="card-header">
                      <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0 fs-5 fw-semibold">My Cart <span class="badge bg-secondary ms-1">7</span></h6>
                        <a href="#!" class="text-muted fs-6">View All</a>
                      </div>
                    </div>

                    <!-- Cart Items List (Scrollable) -->
                    <div class="header-cart-scrollable card-body px-0 py-2" data-simplebar>

                      <!-- Cart Item 1 -->
                      <div class="dropdown-item d-flex align-items-center gap-3 py-2">
                        <img src="{{asset('assets')}}/images/product/product-3.jpg" class="img-fluid rounded-3 avatar-lg" loading="lazy" alt="SoundMaster Wireless Headphones">
                        <div class="flex-grow-1 text-truncate">
                          <a href="apps-product-details.html" class="text-body fw-semibold">SoundMaster Wireless Headphones</a>
                          <div class="text-muted fs-7 text-truncate">Both fashion and functionality</div>
                        </div>
                        <span class="text-muted fs-12">3 x $219.99</span>
                      </div>

                      <!-- Cart Item 2 -->
                      <div class="dropdown-item d-flex align-items-center gap-3 py-2">
                        <img src="{{asset('assets')}}/images/product/product-4.jpg" class="img-fluid rounded-3 avatar-lg" loading="lazy" alt="Cocooil Body Oil">
                        <div class="flex-grow-1 text-truncate">
                          <a href="apps-product-details.html" class="text-body fw-semibold">Cocooil Body Oil</a>
                          <div class="text-muted fs- text-truncate">Natural and nourishing body oil</div>
                        </div>
                        <span class="text-muted fs-12">2 x $45.00</span>
                      </div>

                      <!-- Cart Item 3 -->
                      <div class="dropdown-item d-flex align-items-center gap-3 py-2">
                        <img src="{{asset('assets')}}/images/product/product-6.jpg" class="img-fluid rounded-3 avatar-lg" loading="lazy" alt="Luxury Sunglasses">
                        <div class="flex-grow-1 text-truncate">
                          <a href="apps-product-details.html" class="text-body fw-semibold">Luxury Sunglasses</a>
                          <div class="text-muted fs- text-truncate">Stylish and durable sunglasses</div>
                        </div>
                        <span class="text-muted fs-12">6 x $149.99</span>
                      </div>

                      <!-- Cart Item 3 -->
                      <div class="dropdown-item d-flex align-items-center gap-3 py-2">
                        <img src="{{asset('assets')}}/images/product/product-6.jpg" class="img-fluid rounded-3 avatar-lg" loading="lazy" alt="Luxury Sunglasses">
                        <div class="flex-grow-1 text-truncate">
                          <a href="apps-product-details.html" class="text-body fw-semibold">Luxury Sunglasses</a>
                          <div class="text-muted fs- text-truncate">Stylish and durable sunglasses</div>
                        </div>
                        <span class="text-muted fs-12">6 x $149.99</span>
                      </div>

                      <!-- Cart Item 3 -->
                      <div class="dropdown-item d-flex align-items-center gap-3 py-2">
                        <img src="{{asset('assets')}}/images/product/product-6.jpg" class="img-fluid rounded-3 avatar-lg" loading="lazy" alt="Luxury Sunglasses">
                        <div class="flex-grow-1 text-truncate">
                          <a href="apps-product-details.html" class="text-body fw-semibold">Luxury Sunglasses</a>
                          <div class="text-muted fs- text-truncate">Stylish and durable sunglasses</div>
                        </div>
                        <span class="text-muted fs-12">6 x $149.99</span>
                      </div>
                    </div>

                    <!-- Cart Summary -->
                    <div class="card-footer border-top">
                      <div class="d-flex justify-content-between align-items-center">
                        <h6 class="m-0 text-muted">Total</h6>
                        <div class="px-2">
                          <h5 class="m-0">$205.86</h5>
                        </div>
                      </div>
                      <a href="apps-product-checkout.html" class="btn btn-primary text-center w-100 mt-3">Proceed to Checkout</a>
                    </div>

                  </div>
                </div>
              </div>

              <!-- Apps -->
              <div class="dropdown features-dropdown">
                <button type="button" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="visually-hidden">Browse by Apps</span>
                  <i class="bi bi-grid"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg p-0 dropdown-menu-end">
                  <div class="card shadow-none mb-0 border-0">
                    <div class="card-header hstack gap-2">
                      <h5 class="card-title mb-0 flex-grow-1">Browse by Apps</h5>
                      <a href="#!" class="btn btn-sm btn-subtle-info flex-shrink-0">View All Apps
                        <i class="ri-arrow-right-s-line align-middle"></i>
                      </a>
                    </div>
                    <div class="card-body px-3">
                      <div class="row g-0">
                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/apps-calendar.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="bi bi-calendar-event align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">Calendar</p>
                            <p class="mb-0 text-muted fs-11">Events</p>
                          </a>
                        </div>

                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/apps-tasks-kanban.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="bi bi-view-stacked align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">Kanban</p>
                            <p class="mb-0 text-muted fs-11">Projects</p>
                          </a>
                        </div>

                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/apps-todo.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="ri-check-double-line align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">To-Do</p>
                            <p class="mb-0 text-muted fs-11">Tasks</p>
                          </a>
                        </div>
                      </div>

                      <div class="row g-0">
                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/apps-chat.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="ri-chat-1-line align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">Chat</p>
                            <p class="mb-0 text-muted fs-11">Messages</p>
                          </a>
                        </div>

                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/apps-email-list.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="ri-mail-line align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">Email</p>
                            <p class="mb-0 text-muted fs-11">Mail</p>
                          </a>
                        </div>

                        <div class="col">
                          <a class="dropdown-icon-item" href="https://codebucks.in/herozi/index.html">
                            <div class="avatar border-0 avatar-item bg-light mx-auto mb-2">
                              <i class="ri-shopping-cart-line align-middle text-muted"></i>
                            </div>
                            <p class="mb-1 h6 fw-medium">E-Commerce</p>
                            <p class="mb-0 text-muted fs-11">Store</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Language -->
              <div class="dropdown features-dropdown" id="language-dropdown">
                <a href="#!" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                  <div class="avatar-item avatar-xs">
                    <img class="img-fluid avatar-xs" src="{{asset('assets')}}/images/flags/us.svg" loading="lazy" alt="avatar image">
                  </div>
                </a>

                <div class="dropdown-menu header-language-scrollable dropdown-menu-end" data-simplebar>

                  <a href="#!" class="dropdown-item py-2">
                    <img src="{{asset('assets')}}/images/flags/us.svg" alt="en" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">English</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/es.svg" alt="es" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">Spanish</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/fr.svg" alt="fr" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">French</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/ru.svg" alt="ru" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">Russian</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/de.svg" alt="de" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">German</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/it.svg" alt="it" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">Italian</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/zh.svg" alt="zh" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">Chinese</span>
                  </a>

                  <a href="#!" class="dropdown-item">
                    <img src="{{asset('assets')}}/images/flags/ar.svg" alt="ar" loading="lazy" class="me-2 rounded h-20px w-20px img-fluid object-fit-cover">
                    <span class="align-middle">Arabic</span>
                  </a>

                </div>
              </div>

              <!-- Theme -->
              <div class="dropdown features-dropdown d-none d-sm-block">
                <button type="button" class="btn icon-btn btn-text-primary rounded-circle" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Light or Dark Mode Switch</span>
                  <i class="ri-sun-line fs-20"></i>
                </button>

                <div class="dropdown-menu dropdown-menu-end header-language-scrollable" data-simplebar>

                  <div class="dropdown-item cursor-pointer" id="light-theme">
                    <span class="hstack gap-2 align-middle"><i class="ri-sun-line"></i>Light</span>
                  </div>
                  <div class="dropdown-item cursor-pointer" id="dark-theme">
                    <span class="hstack gap-2 align-middle"><i class="ri-moon-clear-line"></i>Dark</span>
                  </div>
                  <div class="dropdown-item cursor-pointer" id="system-theme">
                    <span class="hstack gap-2 align-middle"><i class="ri-computer-line"></i>System</span>
                  </div>

                </div>
              </div>

              <!-- Notification -->
              <div class="dropdown features-dropdown">
                <button type="button" class="btn icon-btn btn-text-primary rounded-circle position-relative" id="page-header-notifications-dropdown" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-haspopup="true" aria-expanded="false">
                  <i class="ri-notification-2-line fs-20"></i>
                  <span class="position-absolute translate-middle badge rounded-pill p-1 min-w-20px badge text-bg-danger">3</span>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0" aria-labelledby="page-header-notifications-dropdown">
                  <div class="dropdown-header d-flex align-items-center py-3">
                    <h6 class="mb-0 me-auto">Notification</h6>
                    <div class="d-flex align-items-center h6 mb-0">
                      <span class="badge bg-primary me-2">8 New</span>

                      <div class="dropdown">
                        <a href="#!" class="btn btn-text-primary rounded-pill icon-btn-sm" id="remix-cion-notifications-dropdown-settings" data-bs-toggle="dropdown" aria-expanded="false">
                          <span class="visually-hidden">Notification Settings</span>
                          <i class="ri-more-2-fill"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="remix-cion-notifications-dropdown-settings">
                          <span class="dropdown-header fw-medium text-body">Settings</span>
                          <a class="dropdown-item" href="#!">
                            <i class="ri-archive-line"></i> Archive all
                          </a>
                          <a class="dropdown-item" href="#!">
                            <i class="ri-checkbox-circle-line"></i> Mark all as read
                          </a>
                          <a class="dropdown-item" href="#!">
                            <i class="ri-notification-off-line"></i> Disable notifications
                          </a>
                          <a class="dropdown-item" href="#!">
                            <i class="ri-gift-line"></i> What's new?
                          </a>
                          <div class="dropdown-divider"></div>
                          <span class="dropdown-header fw-medium text-body">Feedback</span>
                          <a class="dropdown-item" href="#!">
                            <i class="ri-chat-1-line"></i> Report
                          </a>
                        </div>
                      </div>

                    </div>
                  </div>
                  <ul class="list-group list-group-flush header-notification-scrollable" data-simplebar>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar-item avatar avatar-title bg-danger-subtle text-danger">
                            CF
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">Charles Franklin</h6>
                          <small class="mb-1 d-block text-body">Accepted your connection</small>
                          <small class="text-muted">12hr ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar-item avatar">
                            <img class="img-fluid avatar" src="{{asset('assets')}}/images/avatar/avatar-9.jpg" alt="avatar image">
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">Jenny Wilson</h6>
                          <small class="mb-0 d-block text-body">Create New Apps</small>
                          <small class="text-muted">14hr ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3 position-relative">
                          <div class="avatar-item avatar">
                            <img class="img-fluid avatar" src="{{asset('assets')}}/images/avatar/avatar-6.jpg" alt="avatar image">
                          </div>
                          <span class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 top-0"></span>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">Ralph Edwards</h6>
                          <div class="d-block">
                            <small>Wants to edit</small>
                            <small class="mb-1 text-body fw-semibold">Herozi Design system</small>
                          </div>
                          <small class="text-muted">12hr ago</small>
                          <div class="d-flex align-items-center gap-2 mt-3">
                            <button class="btn btn-primary btn-sm">Accept</button>
                            <button class="btn btn-light-secondary btn-sm">Deny</button>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar-item avatar avatar-title bg-danger-subtle text-danger">
                            JJ
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">Jacob Jones</h6>
                          <div class="d-block">
                            <small>Mentioned you in</small>
                            <small class="mb-1 text-body fw-semibold">Rewrite Button components</small>
                          </div>
                          <small class="text-muted">15hr ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar-item avatar avatar-title bg-success-subtle text-success">
                            <i class="ri-pie-chart-2-line"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">Monthly report is generated</h6>
                          <small class="mb-1 d-block text-body">July monthly financial report is generated </small>
                          <small class="text-muted">3 days ago</small>
                        </div>
                      </div>
                    </li>
                    <li class="list-group-item list-group-item-action border-start-0 border-end-0">
                      <div class="d-flex">
                        <div class="flex-shrink-0 me-3">
                          <div class="avatar-item avatar avatar-title bg-warning-subtle text-warning">
                            <i class="ri-error-warning-line"></i>
                          </div>
                        </div>
                        <div class="flex-grow-1">
                          <h6 class="mb-1 small">CPU is running high</h6>
                          <small class="mb-1 d-block text-body">CPU Utilization Percent is currently at 88.63%,</small>
                          <small class="text-muted">5 days ago</small>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>

              <!-- Fullscreen -->
              <button type="button" id="fullscreen-button" class="btn icon-btn btn-text-primary rounded-circle custom-toggle d-none d-sm-block" aria-pressed="false">
                <span class="visually-hidden">Toggle Fullscreen</span>
                <span class="icon-on">
                  <i class="ri-fullscreen-exit-line fs-16"></i>
                </span>
                <span class="icon-off">
                  <i class="ri-fullscreen-line fs-16"></i>
                </span>
              </button>
            </div>

            <!-- Profile Section -->
            <div class="dropdown profile-dropdown features-dropdown">
              <button type="button" id="accountNavbarDropdown" class="btn profile-btn shadow-none px-0 hstack gap-0 gap-sm-3" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside" data-bs-dropdown-animation>
                <span class="position-relative">
                  <span class="avatar-item avatar overflow-hidden">
                    <img class="img-fluid" src="{{asset('assets')}}/images/avatar/avatar-1.jpg" alt="avatar image">
                  </span>
                  <span class="position-absolute border-2 border border-white h-12px w-12px rounded-circle bg-success end-0 bottom-0"></span>
                </span>
                <span>
                  <span class="h6 d-none d-xl-inline-block text-start fw-semibold mb-0">{{ Auth::user()->name }}</span>
                  <span class="d-none d-xl-block fs-12 text-start text-muted">{{ Auth::user()->role }}</span>
                </span>
              </button>

              <div class="dropdown-menu dropdown-menu-end header-language-scrollable" aria-labelledby="accountNavbarDropdown">
                <div class="dropdown dropstart d-block">
                  <a class="dropdown-item d-block w-100 text-start" href="#!" data-bs-toggle="dropdown" aria-expanded="false">
                    Set status
                  </a>
                  <ul class="dropdown-menu">
                    <li class="dropdown-item">
                      <span class="h-8px w-8px rounded-pill bg-success me-2"></span>
                      Available
                    </li>
                    <li class="dropdown-item">
                      <span class="h-8px w-8px rounded-pill bg-danger me-2"></span>
                      Busy
                    </li>
                    <li class="dropdown-item">
                      <span class="h-8px w-8px rounded-pill bg-warning me-2"></span>
                      Away
                    </li>
                    <li class="dropdown-divider"></li>
                    <li class="dropdown-item">
                      Reset status
                    </li>
                  </ul>
                </div>

                <a class="dropdown-item" href="https://codebucks.in/herozi/pages-profile-overview.html">Profile</a>
                <a class="dropdown-item" href="https://codebucks.in/herozi/apps-chat.html">Messages</a>
                <a class="dropdown-item" href="https://codebucks.in/herozi/apps-todo.html">My Task</a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="#!">
                  <div class="d-flex align-items-center">
                    <div class="flex-shrink-0">
                      <div class="avatar-item avatar avatar-title text-white bg-primary border-0 fs-12">
                        SRB
                      </div>
                    </div>
                    <div class="flex-grow-1 ms-2">
                      <h6 class="mb-0 lh-1">SRBThemes <span class="badge bg-primary-subtle text-primary rounded-pill text-uppercase ms-1 mb-0 py-1 fs-10">PRO</span></h6>
                      <span class="card-text text-muted">google.com</span>
                    </div>
                  </div>
                </a>

                <div class="dropdown-divider"></div>

                <a class="dropdown-item" href="https://codebucks.in/herozi/pages-profile-edit-overview.html">Settings</a>

                <div class="dropdown-divider"></div>
                <form method="POST" action="{{ route('logout') }}" > @csrf

                <a class="dropdown-item" href="{{ route('logout') }}"
                  onclick="event.preventDefault();this.closest('form').submit();"">
                    Sign out
                </a>

                </form>
              </div>
            </div>
          </div>
        </div>
      </div>

    </header>
    <!-- END HEADER -->

    <!-- START SIDEBAR -->
    <aside class="app-sidebar">
        <!-- START BRAND LOGO -->
        <div class="app-sidebar-logo px-6 justify-content-center align-items-center">
            @if (Auth::user()->role == 'admin'|| Auth::user()->role == 'superadmin')


            <a href="{{ route('admin.dashboard') }}">

                @elseif (Auth::user()->role == 'user')
                  <a href="{{ route('user.dashboard') }}">
                @elseif (Auth::user()->role == 'editor')
                  <a href="{{ route('editor.dashboard') }}">
                @elseif (Auth::user()->role == 'moderator')
                  <a href="{{ route('moderator.dashboard') }}">
                @endif
                <img height="35" class="app-sidebar-logo-default" alt="Logo"  src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">
                <img height="40" class="app-sidebar-logo-minimize" alt="Logo"  src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">
            </a>
        </div>
        <!-- END BRAND LOGO -->
        <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" id="sidebarMenu" aria-label="Main navigation">
            <ul class="main-menu" id="all-menu-items" role="menu">
                <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-dashboards">Dashboards</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="index.html" class="side-menu__item" role="menuitem" data-lang="hr-dashboards-ecommerce">E-Commerce</a>
                        </li>
                        <li class="slide">
                            <a href="dashboard-project-management.html" data-lang="hr-dashboards-project-management" class="side-menu__item" role="menuitem">Project Management</a>
                        </li>
                        <li class="slide">
                            <a href="dashboard-online-course.html" data-lang="hr-dashboards-online-course" class="side-menu__item" role="menuitem">Online course</a>
                        </li>
                        <li class="slide">
                            <a href="dashboard-social-media.html" data-lang="hr-dashboards-social-media" class="side-menu__item" role="menuitem">Social Media</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-layout-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-layout">Layout</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="demo-layout-horizontal.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-horizontal">Horizontal</a>
                        </li>
                        <li class="slide">
                            <a href="demo-layout-two-column.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-two-column">Two Column</a>
                        </li>
                        <li class="slide">
                            <a href="demo-layout-semibox.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-semibox">Semibox</a>
                        </li>
                        <li class="slide">
                            <a href="demo-layout-compact.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-compact">Compact</a>
                        </li>
                        <li class="slide">
                            <a href="demo-layout-small-icon.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-small-icon">Small Icon</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title" role="presentation" data-lang="hr-title-applications">Applications</li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-gallery-view-2"></i></span>
                        <span class="side-menu__label" data-lang="hr-apps">Apps</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="apps-calendar.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-calendar">Calendar</a>
                        </li>
                        <li class="slide">
                            <a href="apps-tasks-kanban.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-kanban">Kanban</a>
                        </li>
                        <li class="slide">
                            <a href="apps-file-manager.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-file-manager">File Manager</a>
                        </li>
                        <li class="slide">
                            <a href="apps-todo.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-to-do">To Do</a>
                        </li>
                        <li class="slide">
                            <a href="apps-chat.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-chat">Chat</a>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-apps-email">Email</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-email-list.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-inbox">Inbox</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-email-view.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-view-reply">View & Reply</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-ecommerce">E-Commerce</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-products.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-products">Products</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-products-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-list">Product List</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-details">Product Details</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-create.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-add-product">Add Product</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-cart.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-cart">Cart</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-checkout.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-checkout">Checkout</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-category-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-categories">Categories</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-order-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-orders">Orders</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-product-order-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-order-details">Order Details</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-projects">Projects</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-projects-list.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-list">List</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-projects-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-overview">Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-projects-create.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-create-project">Create Project</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-online-courses">Online Courses</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-course-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-overview">Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-course-details.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-details">Course Details</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-teacher">Teacher</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-course-teacher-list.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-list">List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-course-teacher-details.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-details">Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-course-teacher-add.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-add">Add</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-student">Student</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-course-student-list.html" class="side-menu__item" role="menuitem" data-lang="hr-student-list">List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-course-student-details.html" class="side-menu__item" role="menuitem" data-lang="hr-student-details">Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-course-student-add.html" class="side-menu__item" role="menuitem" data-lang="hr-student-add">Add</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-social">Social Media</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-social-feeds.html" class="side-menu__item" role="menuitem" data-lang="hr-social-feeds">Feeds</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-social-friends.html" class="side-menu__item" role="menuitem" data-lang="hr-social-friends">Friends</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-social-events.html" class="side-menu__item" role="menuitem" data-lang="hr-social-events">Events</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-social-activity.html" class="side-menu__item" role="menuitem" data-lang="hr-social-activity">Activity</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-social-watch-video.html" class="side-menu__item" role="menuitem" data-lang="hr-social-watch-video">Watch Videos</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-invoices">Invoices</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-invoices-list.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-list">List</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-invoices-details.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-details">Details</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-create-invoices.html" class="side-menu__item" role="menuitem" data-lang="hr-create-invoices">Create invoice</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-title" role="presentation" data-lang="hr-title-pages">Pages</li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-file-text-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-pages">Pages</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="pages-starter.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-start">Start</a>
                        </li>
                        <li class="slide">
                            <a href="pages-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-timeline">Timeline</a>
                        </li>
                        <li class="slide">
                            <a href="pages-faqs.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-faqs">FAQs</a>
                        </li>
                        <li class="slide">
                            <a href="pages-pricing.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-pricing">Pricing</a>
                        </li>
                        <li class="slide">
                            <a href="pages-gallery.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-gallery">Gallery</a>
                        </li>
                        <li class="slide">
                            <a href="pages-search-result.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-search-result">Search Results</a>
                        </li>
                        <li class="slide">
                            <a href="pages-privacy-policy.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-privacy-policy">Privacy Policy</a>
                        </li>
                        <li class="slide">
                            <a href="pages-terms-conditions.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-terms-conditions">Terms & Conditions</a>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-blog">Blog</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="pages-blog-list.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-list">Blog List</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-blog-details.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-details">Blog Details</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-blog-create.html" class="side-menu__item" role="menuitem" data-lang="hr-create-blog">Create Blog</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-user-profile">User Profile</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="pages-profile-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-overview">Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-project.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-project">Project</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-documents.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-documents">Documents</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-connections">Connections</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-account-settings">Account Settings</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="pages-profile-edit-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-overview">Overview</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-edit-security.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-security">Security</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-edit-billing-plans.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-billing">Billing & Plans</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-edit-notifications.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-notifications">Notifications</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-profile-edit-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-connections">Connections</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-authentication">Authentication</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="auth-lockscreen.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-lock-screen">Lock Screen</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-coming-soon.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-coming-soon">Coming Soon</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-create-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-create-password">Create Password</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-reset-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-reset-password">Reset Password</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-signup.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-up">Sign Up</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-signin.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-in">Sign in</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-two-step-verify.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-two-step-verification">Two Step Verification</a>
                                </li>
                                <li class="slide">
                                    <a href="under-maintenance.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-maintenance">Under Maintenance</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-error-pages">Error Pages</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="auth-401.html" class="side-menu__item" role="menuitem" data-lang="hr-error-401">401</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-404.html" class="side-menu__item" role="menuitem" data-lang="hr-error-404">404</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-500.html" class="side-menu__item" role="menuitem" data-lang="hr-error-500">500</a>
                                </li>
                                <li class="slide">
                                    <a href="auth-offine.html" class="side-menu__item" role="menuitem" data-lang="hr-error-offline">offline page</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-pantone-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-base-ui">Base UI</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="ui-alert.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-alert">Alert</a>
                        </li>
                        <li class="slide">
                            <a href="ui-badges.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-badge">Badge</a>
                        </li>
                        <li class="slide">
                            <a href="ui-breadcrumbs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-breadcrumb">Breadcrumb</a>
                        </li>
                        <li class="slide">
                            <a href="ui-buttons.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button">Buttons</a>
                        </li>
                        <li class="slide">
                            <a href="ui-button-group.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button-group">Button Group</a>
                        </li>
                        <li class="slide">
                            <a href="ui-card.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-card">Cards</a>
                        </li>
                        <li class="slide">
                            <a href="ui-carousel.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-carousel">Carousel</a>
                        </li>
                        <li class="slide">
                            <a href="ui-cookie.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-cookie">Cookie</a>
                        </li>
                        <li class="slide">
                            <a href="ui-dropdowns.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-dropdown">Dropdown</a>
                        </li>
                        <li class="slide">
                            <a href="ui-images-figures.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-image-figure">Images & Figures</a>
                        </li>
                        <li class="slide">
                            <a href="ui-links.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-link">Links</a>
                        </li>
                        <li class="slide">
                            <a href="ui-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-list">List Group</a>
                        </li>
                        <li class="slide">
                            <a href="ui-modal.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-modal">Modal</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tabs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tab">Nav & Tabs</a>
                        </li>
                        <li class="slide">
                            <a href="ui-offcanvas.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-offcanvas">Off Canvas</a>
                        </li>
                        <li class="slide">
                            <a href="ui-pagination.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-pagination">Pagination</a>
                        </li>
                        <li class="slide">
                            <a href="ui-placeholders.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-placeholder">Placeholders</a>
                        </li>
                        <li class="slide">
                            <a href="ui-popover.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-popover">Popovers</a>
                        </li>
                        <li class="slide">
                            <a href="ui-progress.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-progress">Progress</a>
                        </li>
                        <li class="slide">
                            <a href="ui-spinner.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-spinner">Spinners</a>
                        </li>
                        <li class="slide">
                            <a href="ui-scrollspy.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-scrollspy">Scroll Spy</a>
                        </li>
                        <li class="slide">
                            <a href="ui-separator.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-separator">Separator</a>
                        </li>
                        <li class="slide">
                            <a href="ui-toast.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-toast">Toasts</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tooltips.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tooltip">Tooltips</a>
                        </li>
                        <li class="slide">
                            <a href="ui-typography.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-typography">Typography</a>
                        </li>
                        <li class="slide">
                            <a href="ui-utilities.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-utility">Utilities</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-inbox-unarchive-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-advanced-ui">Advanced UI</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="ui-accordions.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-accordion">Accordians</a>
                        </li>
                        <li class="slide">
                            <a href="ui-avatars.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-avatar">Avatar</a>
                        </li>
                        <li class="slide">
                            <a href="ui-block.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-block">Block</a>
                        </li>
                        <li class="slide">
                            <a href="ui-countup.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-countup">Count Up</a>
                        </li>
                        <li class="slide">
                            <a href="ui-draggable-cards.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-draggable-card">Draggable Cards</a>
                        </li>
                        <li class="slide">
                            <a href="ui-media-player.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-media-player">Media Player</a>
                        </li>
                        <li class="slide">
                            <a href="ui-ratings.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-rating">Rating</a>
                        </li>
                        <li class="slide">
                            <a href="ui-sortable-js.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sortablejs">Sortable JS</a>
                        </li>
                        <li class="slide">
                            <a href="ui-sweetalert2.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sweetalert2">Sweet Alert</a>
                        </li>
                        <li class="slide">
                            <a href="ui-advance-swiper.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-swiper">Swiper JS</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tour.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tour">Tour</a>
                        </li>
                        <li class="slide">
                            <a href="ui-treeview.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-treeview">Tree View</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-input-field"></i></span>
                        <span class="side-menu__label" data-lang="hr-forms">Forms</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-form-elements">Form Elements</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="ui-form-elements.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input">Input</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-checkboxs-radios.html" class="side-menu__item" role="menuitem" data-lang="hr-form-checkbox-radio">Checkbox & Radios</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-input-group.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-group">Inout Group</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-select.html" class="side-menu__item" role="menuitem" data-lang="hr-form-select">Form Select</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-range.html" class="side-menu__item" role="menuitem" data-lang="hr-form-range">Range Slider</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-input-masks.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-masks">Input Masks</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-file-uploads.html" class="side-menu__item" role="menuitem" data-lang="hr-form-file-upload">File Uploads</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-date-picker.html" class="side-menu__item" role="menuitem" data-lang="hr-form-date-time-picker">Date,Time Picker</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="ui-floating-labels.html" class="side-menu__item" role="menuitem" data-lang="hr-form-floating-label">Floating Label</a>
                        </li>
                        <li class="slide">
                            <a href="ui-form-layout.html" class="side-menu__item" role="menuitem" data-lang="hr-form-layout">Form Layout</a>
                        </li>
                        <li class="slide">
                            <a href="ui-form-editor.html" class="side-menu__item" role="menuitem" data-lang="hr-form-editor">Editor</a>
                        </li>
                        <li class="slide">
                            <a href="ui-form-validation.html" class="side-menu__item" role="menuitem" data-lang="hr-form-validation">Form Validation</a>
                        </li>
                        <li class="slide">
                            <a href="ui-form-wizards.html" class="side-menu__item" role="menuitem" data-lang="hr-form-wizard">Form Wizards</a>
                        </li>
                        <li class="slide">
                            <a href="ui-form-advanced.html" class="side-menu__item" role="menuitem" data-lang="hr-form-advanced">Form Advanced</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-title" role="presentation" data-lang="hr-title-tables">Other</li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-table-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-tables">Tables</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="ui-tables-basic.html" class="side-menu__item" role="menuitem" data-lang="hr-basic-table">Basic Tables</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tables-listjs.html" class="side-menu__item" role="menuitem" data-lang="hr-listjs-table">List JS Table</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tables-gridjs.html" class="side-menu__item" role="menuitem" data-lang="hr-gridjs-table">Grid JS Table</a>
                        </li>
                        <li class="slide">
                            <a href="ui-tables-datatables.html" class="side-menu__item" role="menuitem" data-lang="hr-datatables">Datatables</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-pie-chart-2-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-charts">Charts</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-apexcharts">Apexcharts</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="chart-apex-line.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-line">Line</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-area">Area</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-column.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-column">Column</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-bar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bar">Bar</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-mixed.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-mixed">Mixed</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-range-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-range-area">Range Charts</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-timeline">Timeline</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-funnel.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-funnel">Funnel</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-candlestick.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-candlestick">Candlestick</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-boxplot.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-boxplot">Boxplot</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-pie.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-pie">Pie</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-radar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radar">Radar</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-polar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-polar">Polar</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-radialbar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radialbar">Radialbar</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-bubble.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bubble">Bubble</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-scatter.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-scatter">Scatter</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-heatmap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-heatmap">Heatmap</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-treemap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-treemap">Treemap</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-apex-slope.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-slope">Slope</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="chart-js-chart.html" class="side-menu__item" role="menuitem" data-lang="hr-chartjs">Chartjs</a>
                        </li>
                        <li class="slide">
                            <a href="charts-echarts.html" class="side-menu__item" role="menuitem" data-lang="hr-echarts">Echarts</a>
                        </li>
                    </ul>
                </li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-map-2-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-maps">Maps</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="google-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-google-maps">Google Maps</a>
                        </li>
                        <li class="slide">
                            <a href="leaflet-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-leaflet-maps">Leaflet Maps</a>
                        </li>
                        <li class="slide">
                            <a href="vector-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-vector-maps">Vector Maps</a>
                        </li>
                    </ul>
                </li>

@if(Auth::user()->role=='admin'|| Auth::user()->role == 'superadmin'|| Auth::user()->role == 'editor')
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-terminal-box-line"></i></span>
                        <span class="side-menu__label" data-lang="hr-icons">Logo</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                       <!-- পরিবর্তন করার আগের কোড -->
<li class="slide">
    <a href="{{ route('admin.logo.index') }}" class="side-menu__item" role="menuitem" data-lang="hr-bootstrap-icons">Bootstrap Icons</a>
</li>

<!-- পরিবর্তন করার পরের সঠিক কোড -->
<li class="slide">
    <a href="{{ route('admin.logo.index') }}" class="side-menu__item" role="menuitem">Admin Logo</a>
</li>
                    </ul>
                </li>
                @endif



                <li class="menu-title" role="presentation" data-lang="hr-title-other">Other</li>
                <li class="slide">
                    <a href="#!" class="side-menu__item" role="menuitem">
                        <span class="side_menu_icon"><i class="ri-organization-chart"></i></span>
                        <span class="side-menu__label" data-lang="hr-menu-levels">Menu levels</span>
                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                    </a>
                    <ul class="slide-menu" role="menu">
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-2-1">Level 2.1</a>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-level-2-2">Level 2.2</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-1">Level 3.1</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-2">Level 3.2</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side-menu__label" data-lang="hr-level-2-3">Level 2.3</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-3">Level 3.3</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-4">Level 3.4</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </aside>
    <!-- END SIDEBAR -->
    <div class="horizontal-overlay"></div>

    <!-- START SMALL SCREEN SIDEBAR -->
    <div class="offcanvas offcanvas-md offcanvas-start small-screen-sidebar" data-bs-scroll="true" tabindex="-1" id="smallScreenSidebar" aria-labelledby="smallScreenSidebarLabel">
        <div class="offcanvas-header hstack border-bottom">
            <!-- START BRAND LOGO -->
            <div class="app-sidebar-logo">
                <a href="index.html">
                    <img height="35" class="app-sidebar-logo-default h-25px" alt="Logo" src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">
                    <img height="40" class="app-sidebar-logo-minimize" alt="Logo" src="{{ asset('uploads/admin_logos/' . ($admin_logo ? $admin_logo->header_logo : 'default-header-logo.png')) }}">
                </a>
            </div>
            <button type="button" class="btn-close bg-transparent" data-bs-dismiss="offcanvas" aria-label="Close">
                <i class="ri-close-line"></i>
            </button>
        </div>
        <div class="offcanvas-body p-0">
            <!-- START SIDEBAR -->
            <aside class="app-sidebar">
                <!-- END BRAND LOGO -->
                <nav class="app-sidebar-menu nav nav-pills flex-column fs-6" aria-label="Main navigation">
                    <ul class="main-menu" id="all-menu-items" role="menu">
                        <li class="menu-title" role="presentation" data-lang="hr-title-main">Main</li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-home-2-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-dashboards">Dashboards</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="index.html" class="side-menu__item" role="menuitem" data-lang="hr-dashboards-ecommerce">E-Commerce</a>
                                </li>
                                <li class="slide">
                                    <a href="dashboard-project-management.html" data-lang="hr-dashboards-project-management" class="side-menu__item" role="menuitem">Project Management</a>
                                </li>
                                <li class="slide">
                                    <a href="dashboard-online-course.html" data-lang="hr-dashboards-online-course" class="side-menu__item" role="menuitem">Online course</a>
                                </li>
                                <li class="slide">
                                    <a href="dashboard-social-media.html" data-lang="hr-dashboards-social-media" class="side-menu__item" role="menuitem">Social Media</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-layout-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-layout">Layout</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="demo-layout-horizontal.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-horizontal">Horizontal</a>
                                </li>
                                <li class="slide">
                                    <a href="demo-layout-two-column.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-two-column">Two Column</a>
                                </li>
                                <li class="slide">
                                    <a href="demo-layout-semibox.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-semibox">Semibox</a>
                                </li>
                                <li class="slide">
                                    <a href="demo-layout-compact.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-compact">Compact</a>
                                </li>
                                <li class="slide">
                                    <a href="demo-layout-small-icon.html" target="_blank" class="side-menu__item" role="menuitem" data-lang="hr-layout-small-icon">Small Icon</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title" role="presentation" data-lang="hr-title-applications">Applications</li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-gallery-view-2"></i></span>
                                <span class="side-menu__label" data-lang="hr-apps">Apps</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="apps-calendar.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-calendar">Calendar</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-tasks-kanban.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-kanban">Kanban</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-file-manager.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-file-manager">File Manager</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-todo.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-to-do">To Do</a>
                                </li>
                                <li class="slide">
                                    <a href="apps-chat.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-chat">Chat</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-apps-email">Email</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-email-list.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-inbox">Inbox</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-email-view.html" class="side-menu__item" role="menuitem" data-lang="hr-apps-email-view-reply">View & Reply</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-ecommerce">E-Commerce</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-products.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-products">Products</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-products-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-list">Product List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-product-details">Product Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-create.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-add-product">Add Product</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-cart.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-cart">Cart</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-checkout.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-checkout">Checkout</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-category-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-categories">Categories</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-order-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-orders">Orders</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-product-order-details.html" class="side-menu__item" role="menuitem" data-lang="hr-ecom-order-details">Order Details</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-projects">Projects</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-projects-list.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-list">List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-projects-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-overview">Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-projects-create.html" class="side-menu__item" role="menuitem" data-lang="hr-projects-create-project">Create Project</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-online-courses">Online Courses</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-course-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-overview">Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-course-details.html" class="side-menu__item" role="menuitem" data-lang="hr-courses-details">Course Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem">
                                                <span class="side-menu__label" data-lang="hr-teacher">Teacher</span>
                                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                            </a>
                                            <ul class="slide-menu" role="menu">
                                                <li class="slide">
                                                    <a href="apps-course-teacher-list.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-list">List</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="apps-course-teacher-details.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-details">Details</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="apps-course-teacher-add.html" class="side-menu__item" role="menuitem" data-lang="hr-teacher-add">Add</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem">
                                                <span class="side-menu__label" data-lang="hr-student">Student</span>
                                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                            </a>
                                            <ul class="slide-menu" role="menu">
                                                <li class="slide">
                                                    <a href="apps-course-student-list.html" class="side-menu__item" role="menuitem" data-lang="hr-student-list">List</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="apps-course-student-details.html" class="side-menu__item" role="menuitem" data-lang="hr-student-details">Details</a>
                                                </li>
                                                <li class="slide">
                                                    <a href="apps-course-student-add.html" class="side-menu__item" role="menuitem" data-lang="hr-student-add">Add</a>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-social">Social Media</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-social-feeds.html" class="side-menu__item" role="menuitem" data-lang="hr-social-feeds">Feeds</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-social-friends.html" class="side-menu__item" role="menuitem" data-lang="hr-social-friends">Friends</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-social-events.html" class="side-menu__item" role="menuitem" data-lang="hr-social-events">Events</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-social-activity.html" class="side-menu__item" role="menuitem" data-lang="hr-social-activity">Activity</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-social-watch-video.html" class="side-menu__item" role="menuitem" data-lang="hr-social-watch-video">Watch Videos</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-invoices">Invoices</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="apps-invoices-list.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-list">List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-invoices-details.html" class="side-menu__item" role="menuitem" data-lang="hr-invoices-details">Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="apps-create-invoices.html" class="side-menu__item" role="menuitem" data-lang="hr-create-invoices">Create invoice</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title" role="presentation" data-lang="hr-title-pages">Pages</li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-file-text-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-pages">Pages</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="pages-starter.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-start">Start</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-timeline">Timeline</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-faqs.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-faqs">FAQs</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-pricing.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-pricing">Pricing</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-gallery.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-gallery">Gallery</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-search-result.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-search-result">Search Results</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-privacy-policy.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-privacy-policy">Privacy Policy</a>
                                </li>
                                <li class="slide">
                                    <a href="pages-terms-conditions.html" class="side-menu__item" role="menuitem" data-lang="hr-pages-terms-conditions">Terms & Conditions</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-blog">Blog</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="pages-blog-list.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-list">Blog List</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-blog-details.html" class="side-menu__item" role="menuitem" data-lang="hr-blog-details">Blog Details</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-blog-create.html" class="side-menu__item" role="menuitem" data-lang="hr-create-blog">Create Blog</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-user-profile">User Profile</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="pages-profile-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-overview">Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-project.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-project">Project</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-documents.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-documents">Documents</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-connections">Connections</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-account-settings">Account Settings</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="pages-profile-edit-overview.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-overview">Overview</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-edit-security.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-security">Security</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-edit-billing-plans.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-billing">Billing & Plans</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-edit-notifications.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-notifications">Notifications</a>
                                        </li>
                                        <li class="slide">
                                            <a href="pages-profile-edit-connections.html" class="side-menu__item" role="menuitem" data-lang="hr-profile-setting-connections">Connections</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-authentication">Authentication</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="auth-lockscreen.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-lock-screen">Lock Screen</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-coming-soon.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-coming-soon">Coming Soon</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-create-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-create-password">Create Password</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-reset-password.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-reset-password">Reset Password</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-signup.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-up">Sign Up</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-signin.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-sign-in">Sign in</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-two-step-verify.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-two-step-verification">Two Step Verification</a>
                                        </li>
                                        <li class="slide">
                                            <a href="under-maintenance.html" class="side-menu__item" role="menuitem" data-lang="hr-auth-maintenance">Under Maintenance</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-error-pages">Error Pages</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="auth-401.html" class="side-menu__item" role="menuitem" data-lang="hr-error-401">401</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-404.html" class="side-menu__item" role="menuitem" data-lang="hr-error-404">404</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-500.html" class="side-menu__item" role="menuitem" data-lang="hr-error-500">500</a>
                                        </li>
                                        <li class="slide">
                                            <a href="auth-offine.html" class="side-menu__item" role="menuitem" data-lang="hr-error-offline">offline page</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-pantone-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-base-ui">Base UI</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="ui-alert.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-alert">Alert</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-badges.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-badge">Badge</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-breadcrumbs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-breadcrumb">Breadcrumb</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-buttons.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button">Buttons</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-button-group.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-button-group">Button Group</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-card.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-card">Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-carousel.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-carousel">Carousel</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-cookie.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-cookie">Cookie</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-dropdowns.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-dropdown">Dropdown</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-images-figures.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-image-figure">Images & Figures</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-links.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-link">Links</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-list.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-list">List Group</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-modal.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-modal">Modal</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tabs.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tab">Nav & Tabs</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-offcanvas.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-offcanvas">Off Canvas</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-pagination.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-pagination">Pagination</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-placeholders.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-placeholder">Placeholders</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-popover.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-popover">Popovers</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-progress.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-progress">Progress</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-spinner.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-spinner">Spinners</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-scrollspy.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-scrollspy">Scroll Spy</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-separator.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-separator">Separator</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-toast.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-toast">Toasts</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tooltips.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tooltip">Tooltips</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-typography.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-typography">Typography</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-utilities.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-utility">Utilities</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-inbox-unarchive-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-advanced-ui">Advanced UI</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="ui-accordions.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-accordion">Accordians</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-avatars.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-avatar">Avatar</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-block.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-block">Block</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-countup.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-countup">Count Up</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-draggable-cards.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-draggable-card">Draggable Cards</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-media-player.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-media-player">Media Player</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-ratings.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-rating">Rating</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-sortable-js.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sortablejs">Sortable JS</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-sweetalert2.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-sweetalert2">Sweet Alert</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-advance-swiper.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-swiper">Swiper JS</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tour.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-tour">Tour</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-treeview.html" class="side-menu__item" role="menuitem" data-lang="hr-ui-treeview">Tree View</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-input-field"></i></span>
                                <span class="side-menu__label" data-lang="hr-forms">Forms</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-form-elements">Form Elements</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="ui-form-elements.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input">Input</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-checkboxs-radios.html" class="side-menu__item" role="menuitem" data-lang="hr-form-checkbox-radio">Checkbox & Radios</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-input-group.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-group">Inout Group</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-select.html" class="side-menu__item" role="menuitem" data-lang="hr-form-select">Form Select</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-range.html" class="side-menu__item" role="menuitem" data-lang="hr-form-range">Range Slider</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-input-masks.html" class="side-menu__item" role="menuitem" data-lang="hr-form-input-masks">Input Masks</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-form-file-uploads.html" class="side-menu__item" role="menuitem" data-lang="hr-form-file-upload">File Uploads</a>
                                        </li>
                                        <li class="slide">
                                            <a href="ui-date-picker.html" class="side-menu__item" role="menuitem" data-lang="hr-form-date-time-picker">Date,Time Picker</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="ui-floating-labels.html" class="side-menu__item" role="menuitem" data-lang="hr-form-floating-label">Floating Label</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-layout.html" class="side-menu__item" role="menuitem" data-lang="hr-form-layout">Form Layout</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-editor.html" class="side-menu__item" role="menuitem" data-lang="hr-form-editor">Editor</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-validation.html" class="side-menu__item" role="menuitem" data-lang="hr-form-validation">Form Validation</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-wizards.html" class="side-menu__item" role="menuitem" data-lang="hr-form-wizard">Form Wizards</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-form-advanced.html" class="side-menu__item" role="menuitem" data-lang="hr-form-advanced">Form Advanced</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title" role="presentation" data-lang="hr-title-tables">Other</li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-table-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-tables">Tables</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="ui-tables-basic.html" class="side-menu__item" role="menuitem" data-lang="hr-basic-table">Basic Tables</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tables-listjs.html" class="side-menu__item" role="menuitem" data-lang="hr-listjs-table">List JS Table</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tables-gridjs.html" class="side-menu__item" role="menuitem" data-lang="hr-gridjs-table">Grid JS Table</a>
                                </li>
                                <li class="slide">
                                    <a href="ui-tables-datatables.html" class="side-menu__item" role="menuitem" data-lang="hr-datatables">Datatables</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-pie-chart-2-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-charts">Charts</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-apexcharts">Apexcharts</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="chart-apex-line.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-line">Line</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-area">Area</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-column.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-column">Column</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-bar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bar">Bar</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-mixed.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-mixed">Mixed</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-range-area.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-range-area">Range Charts</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-timeline.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-timeline">Timeline</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-funnel.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-funnel">Funnel</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-candlestick.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-candlestick">Candlestick</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-boxplot.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-boxplot">Boxplot</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-pie.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-pie">Pie</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-radar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radar">Radar</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-polar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-polar">Polar</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-radialbar.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-radialbar">Radialbar</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-bubble.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-bubble">Bubble</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-scatter.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-scatter">Scatter</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-heatmap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-heatmap">Heatmap</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-treemap.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-treemap">Treemap</a>
                                        </li>
                                        <li class="slide">
                                            <a href="charts-apex-slope.html" class="side-menu__item" role="menuitem" data-lang="hr-apex-slope">Slope</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="chart-js-chart.html" class="side-menu__item" role="menuitem" data-lang="hr-chartjs">Chartjs</a>
                                </li>
                                <li class="slide">
                                    <a href="charts-echarts.html" class="side-menu__item" role="menuitem" data-lang="hr-echarts">Echarts</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-map-2-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-maps">Maps</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="google-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-google-maps">Google Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="leaflet-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-leaflet-maps">Leaflet Maps</a>
                                </li>
                                <li class="slide">
                                    <a href="vector-maps.html" class="side-menu__item" role="menuitem" data-lang="hr-vector-maps">Vector Maps</a>
                                </li>
                            </ul>
                        </li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-terminal-box-line"></i></span>
                                <span class="side-menu__label" data-lang="hr-icons">Icons</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="icons-remix.html" class="side-menu__item" role="menuitem" data-lang="hr-remix">Remix Icons</a>
                                </li>
                                <li class="slide">
                                    <a href="icons-bootstrap-icons.html" class="side-menu__item" role="menuitem" data-lang="hr-bootstrap-icons">Bootstrap Icons</a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-title" role="presentation" data-lang="hr-title-other">Other</li>
                        <li class="slide">
                            <a href="#!" class="side-menu__item" role="menuitem">
                                <span class="side_menu_icon"><i class="ri-organization-chart"></i></span>
                                <span class="side-menu__label" data-lang="hr-menu-levels">Menu levels</span>
                                <i class="ri-arrow-down-s-line side-menu__angle"></i>
                            </a>
                            <ul class="slide-menu" role="menu">
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-2-1">Level 2.1</a>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-level-2-2">Level 2.2</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-1">Level 3.1</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-2">Level 3.2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="slide">
                                    <a href="#!" class="side-menu__item" role="menuitem">
                                        <span class="side-menu__label" data-lang="hr-level-2-3">Level 2.3</span>
                                        <i class="ri-arrow-down-s-line side-menu__angle"></i>
                                    </a>
                                    <ul class="slide-menu" role="menu">
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-3">Level 3.3</a>
                                        </li>
                                        <li class="slide">
                                            <a href="#!" class="side-menu__item" role="menuitem" data-lang="hr-level-3-4">Level 3.4</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </aside>
        </div>
    </div>
    <!-- START PRELOADER -->
    <div class="align-items-center justify-content-center" id="preloader">
      <div class="spinner-border text-primary avatar-sm" role="status">
        <span class="visually-hidden">Loading...</span>
      </div>
    </div>
    <!-- END PRELOADER -->



    <main class="app-wrapper">
        <div class="app-container">



    @yield('content')
        </div>
    </main>
    <!-- Begin Footer -->
    <footer class="footer d-flex align-items-center text-center">
        <div class="container-fluid">
            <p class="mb-0">
                © <script>document.write(new Date().getFullYear())</script> Herozi Design & Develop by <a href="https://1.envato.market/srbthemes" target="_blank">SRBThemes</a>.
            </p>
        </div>
    </footer>
    <!-- END Footer -->

    <!-- JAVASCRIPT -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{asset('assets')}}/js/sidebar.js"></script>
    <script src="{{asset('assets')}}/libs/choices.js/public/{{asset('assets')}}/scripts/choices.min.js"></script>
    <script src="{{asset('assets')}}/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="{{asset('assets')}}/libs/simplebar/simplebar.min.js"></script>
    <script src="{{asset('assets')}}/js/pages/scroll-top.init.js"></script>
    <script src="{{asset('assets')}}/libs/sweetalert2/sweetalert2.min.js"></script>
    <!-- jquery cdn -->
    <script src="../../../code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <!-- Datatable js -->
    <script src="../../../cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
    <script src="../../../cdn.datatables.net/1.11.5/js/dataTables.bootstrap5.min.js"></script>
    <script src="../../../cdn.datatables.net/responsive/2.4.0/js/dataTables.responsive.min.js"></script>
    <script src="../../../cdn.jsdelivr.net/npm/jquery-datatables-checkboxes%401.3.0/js/dataTables.checkboxes.min.js"></script>
    <script src="../../../cdn.datatables.net/select/1.6.0/js/dataTables.select.min.js"></script>

    <!-- Countup init -->
    <script type="module" src="{{asset('assets')}}/js/pages/countup.init.js"></script>

    <!-- ApexChat js -->
    <script src="{{asset('assets')}}/libs/apexcharts/apexcharts.min.js"></script>

    <!-- Ecommerce dashboard init -->
    <script src="{{asset('assets')}}/js/charts/apexcharts-config.init.js"></script>
    <script src="{{asset('assets')}}/js/dashboards/dashboard-ecommerce.init.js"></script>

    <!-- App js -->
    <script type="module" src="{{asset('assets')}}/js/app.js"></script>
@yield('footer')
</body>


<!-- Mirrored from codebucks.in/herozi/html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 05 May 2026 13:17:27 GMT -->
</html>
