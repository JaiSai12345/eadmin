<!doctype html>
<html lang="en">

    

<head>

        <meta charset="utf-8" />
        <title>E-Comm Admin Portal</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="" name="author" />
        <!-- App favicon -->
        <link rel="shortcut icon" href="assets/images/favicon3.ico">

        <!-- choices css -->
        <link href="assets/libs/choices.js/public/assets/styles/choices.min.css" rel="stylesheet" type="text/css" />

        <!-- plugin css -->
        <link href="assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css" />
        
        <!-- color picker css -->
        <link rel="stylesheet" href="assets/libs/%40simonwep/pickr/themes/classic.min.css"/> <!-- 'classic' theme -->
        <link rel="stylesheet" href="assets/libs/%40simonwep/pickr/themes/monolith.min.css"/> <!-- 'monolith' theme -->
        <link rel="stylesheet" href="assets/libs/%40simonwep/pickr/themes/nano.min.css"/> <!-- 'nano' theme -->

        <!-- datepicker css -->
        <link rel="stylesheet" href="assets/libs/flatpickr/flatpickr.min.css">

        <!-- gridjs css -->
        <link rel="stylesheet" href="assets/libs/gridjs/theme/mermaid.min.css">

        <!-- Bootstrap Css -->
        <link href="assets/css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
        <!-- Icons Css -->
        <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
        <!-- App Css-->
        <link href="assets/css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

        <!-- swiper css -->
             <link rel="stylesheet" href="assets/libs/swiper/swiper-bundle.min.css">

        <!-- nouisliderribute css -->
        <link rel="stylesheet" href="assets/libs/nouislider/nouislider.min.css">
        
        <!-- Flatpickr Css-->
        <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css"> -->
    </head>

    
    <body>

    <!-- <body data-layout="horizontal"> -->

    <!-- Begin page -->
    <!-- layout-wrapper start -->
        <div id="layout-wrapper">
            <!-- ========== Vertical-topbar Start ========== -->
            <header id="page-topbar" class="isvertical-topbar">
                <div class="navbar-header">
                    <div class="d-flex">
                        <!-- LOGO -->
                        <div class="navbar-brand-box">
                            <a href="index.php" class="logo logo-dark">
                                <span class="logo-sm">
                                    <img src="assets/images/logo-dark-sm2.png" alt="" height="26">
                                </span>
                                <span class="logo-lg">
                                    <img src="assets/images/logo-dark-sm2.png" alt="" height="26">
                                </span>
                            </a>
                        </div>

                        <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                            <i class="bx bx-menu"></i>
                        </button>

                        <!-- start page title -->
                        <div class="page-title-box align-self-center d-none d-md-block">
                            <h4 class="page-title mb-0">Good to see you!</h4>
                        </div>
                        <!-- end page title -->

                    </div>

                    <div class="d-flex">
                        
                        <div class="dropdown d-inline-block  ms-2">
                            <button type="button" class="btn header-item">
                                 <a href="help.php" target="_blank"><span title="Help" class="mdi mdi-headset  text-black font-size-24 align-middle me-2"></span></a>
                            </button>
    
                        </div>

        
                        <div class="dropdown d-inline-block">
                            <button type="button" class="btn header-item noti-icon" id="page-header-notifications-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i title="Notifications" class="bx bx-bell icon-sm align-middle text-black"></i> 
                                 <!-- <i class=" mdi-bell-ring-outline  text-muted font-size-24 align-middle me-2"></i> -->
                               
                                <span class="noti-dot bg-danger rounded-pill">4</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-xl dropdown-menu-end p-0"
                                aria-labelledby="page-header-notifications-dropdown-v">
                                <div class="p-3">
                                    <div class="row align-items-center">
                                        
                                        <div class="col"  >
                                            <h5 class="m-0 font-size-15" > Notifications </h5>
                                        </div>
                                        <div class="col-auto">
                                            <a href="#!" class="small fw-semibold text-decoration-underline"> Mark all as read</a>
                                        </div>
                                    </div>
                                </div>
                                <div data-simplebar style="max-height: 250px;">
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-3.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">James Lemire</h6>
                                                <div>
                                                    <p class="mb-0">It will seem like simplified English.</p>
                                                </div>
                                            </div>
                                
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-primary rounded-circle font-size-18">
                                                    <i class="bx bx-cart"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">3 min ago</p>
                                                <h6 class="mb-1">Your order is placed</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 avatar-sm me-3">
                                                <span class="avatar-title bg-success rounded-circle font-size-18">
                                                    <i class="bx bx-badge-check"></i>
                                                </span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">8 min ago</p>
                                                <h6 class="mb-1">Your item is shipped</h6>
                                                <div>
                                                    <p class="mb-0">If several languages coalesce the grammar</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>

                                    <a href="#!" class="text-reset notification-item">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <img src="assets/images/users/avatar-6.jpg" class="rounded-circle avatar-sm" alt="user-pic">
                                            </div>
                                            <div class="flex-grow-1">
                                                <p class="text-muted font-size-13 mb-0 float-end">1 hour ago</p>
                                                <h6 class="mb-1">Salena Layfield</h6>
                                                <div>
                                                    <p class="mb-1">As a skeptical Cambridge friend of mine occidental.</p>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <div class="p-2 border-top d-grid">
                                    <a class="btn btn-sm btn-link font-size-14 btn-block text-center" href="javascript:void(0)">
                                        <i class="uil-arrow-circle-right me-1"></i> <span>View More..</span>
                                    </a>
                                </div>
                            </div>
                        </div>
            
                        <div class="dropdown d-inline-block">
                            <button title="Profile" type="button" class="btn header-item user text-start d-flex align-items-center" id="page-header-user-dropdown-v"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="bx bx-user-circle fs-2 align-middle text-black"></i> 
                             
                                <!-- <img class="rounded-circle header-profile-user" src="assets/images/users/avatar-3.1.jpg"alt="Header Avatar"> -->
                                 <span class="d-none d-xl-inline-block ms-2 "><span class="d-block fw-medium fs-6 lh-1">Martin Gurley</span>
                                 <span class="d-block lh-1" style="font-size:12px">Founder</span></span>
                                 
                            </button>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="p-3 border-bottom">
                                    <h6 class="mb-0">Martin Gurley</h6>
                                    <p class="mb-0 font-size-11 text-muted">martin.gurley@email.com</p>
                                </div>
                                <a class="dropdown-item" href="profile.php"target="_blank"><i class="mdi mdi-account-circle text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">View Profile</span></a>
            
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php"><i class="mdi mdi-logout text-muted font-size-16 align-middle me-2"></i> <span class="align-middle">Logout</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="progress progress-sm">
                    <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 100%;" ></div>
                </div>
          
                  
            </header><br>
            <!-- ========== Vertical-topbar End ========== -->

             <!-- ========== Left Sidebar Start ========== -->
              <div class="vertical-menu">

                <!-- LOGO -->
                <div class="navbar-brand-box">
                    <a href="index.html" class="logo logo-dark">
                        <span class="logo-sm">
                            <img src="assets/images/logo-dark-sm2.png" alt="" height="26">
                        </span>
                        <span class="logo-lg">
                            <img src="assets/images/logo-dark2.png" alt="" height="28">
                        </span>
                    </a>

                    <a href="index.html" class="logo logo-light">
                        <span class="logo-lg">
                            <img src="assets/images/logo-light2.png" alt="" height="30">
                        </span>
                        <span class="logo-sm">
                            <img src="assets/images/logo-light-sm2.png" alt="" height="26">
                        </span>
                    </a>
                </div>

                <button type="button" class="btn btn-sm px-3 font-size-24 header-item waves-effect vertical-menu-btn">
                    <i class="bx bx-menu align-middle"></i>
                </button>

                <div data-simplebar class="sidebar-menu-scroll">

                    <!--- Sidemenu -->
                    <div id="sidebar-menu">
                        <!-- Left Menu Start -->
                        <ul class="metismenu list-unstyled" id="side-menu">
                            <!-- <li class="menu-title" data-key="t-menu">Dashboard</li> -->
                             <li>
                                 <a href="home.php">
                                    <i class="bx bx-home-alt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-dashboard">Home</span>
                                    <!-- <span class="badge rounded-pill bg-primary">2</span> -->
                                </a>
                             </li>

                           <li>
                                <a href="dashboard.php">
                                    <i class="bx bxs-dashboard icon nav-icon text-muted"></i>
                                    <span class="menu-item" data-key="t-dashboard">Dashboard</span>
                                 
                                </a>
                              
                            </li>

                           

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-layer icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-email">Masters</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="state.php" data-key="t-inbox"> State</a></li>
                                    <li><a href="branch.php" data-key="t-inbox">Branch</a></li>
                                    <!-- <li><a href="users.php" data-key="t-inbox">Users</a></li> -->
                                    <li><a href="units.php" data-key="t-read-email">Unit</a></li>
                                    <li><a href="gst.php" data-key="t-read-email">GST</a></li>
                                    <li><a href="paymode.php" data-key="t-inbox"> Pay Mode</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-task icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-email">Inventory</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="newinward.php" data-key="t-inbox">New Inward</a></li>
                                    <li><a href="manage-inward.php" data-key="t-inbox">Manage Inward</a></li>
                                    <!--<li><a href="email-inbox.html" data-key="t-inbox">Branch</a></li>
                                    <li><a href="email-read.html" data-key="t-read-email">GST</a></li>
                                    <li><a href="email-inbox.html" data-key="t-inbox"> Pay Mode</a></li> -->
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-user icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-calendar">Users</span>
                                </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="users.php" data-key="t-inbox">  User Info</a></li>
                                    <li><a href="user_access.php" data-key="t-read-email">Access Control</a></li>

                                </ul>
                            </li>

                            <!-- <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-group nav-icon"></i>
                                    <span class="menu-item" data-key="t-todo">Customers</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="" data-key="t-inbox">Customers Info</a></li>
                                    

                                </ul>
                            </li> -->
                            
                            <li>
                                 <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-cart icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-filemanager">Purchases</span>
                                </a>
                                 <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="category.php" data-key="t-inbox">  Category</a></li>
                                    <li><a href="items.php" data-key="t-read-email"> Items</a></li>
                                    <!-- <li><a href="newinvoice.php" data-key="t-inbox">  New Invoice</a></li>
                                    <li><a href="manage-invoice.php" data-key="t-read-email">Manage Invoice</a></li> -->
                                    <li><a href="stock-update.php" data-key="t-inbox">  Stock Update</a></li>
                            

                                </ul>
                            </li>

 
                            <li>
                               <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-receipt icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-chat">Sales</span>
                                    
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="new-invoice.php" data-key="t-inbox">New Invoice</a></li>
                                    <li><a href="manage-invoice.php" data-key="t-read-email"> Manage Invoice</a></li>
                                   
                                </ul>
                            </li>

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-file icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-ecommerce">Accounts</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="supplier.php" data-key="t-inbox">  Supplier</a></li>
                                    <li><a href="customers.php" data-key="t-read-email"> Customers</a></li>
                                </ul>
                            </li>

               

                            <li>
                                <a href="javascript: void(0);" class="has-arrow">
                                    <i class="bx bx-bar-chart-alt-2 icon nav-icon"></i>
                                    <span class="menu-item" data-key="t-invoices">Reports</span>
                                </a>
                                <ul class="sub-menu" aria-expanded="false">
                                    <li><a href="stock-report.php" data-key="t-invoice-list"> Stock</a></li>
                                    <li><a href="sales-detail.php" data-key="t-invoice-detail">Sales</a></li>
                                     <li><a href="purchase-report.php" data-key="t-invoice-detail">Purchase</a></li>
                                     <!-- <li><a href="invoices-detail.html" data-key="t-invoice-detail">Customers</a></li> -->
                                </ul>
                            </li>
                        </ul>
                    </div>
                    <!-- Sidebar -->
                </div>
            </div>
             <!-- ========== Left Sidebar End ========== -->

            <!-- ========== Horizontal-topbar start ========== -->
            <header class="ishorizontal-topbar">
                

                <div class="topnav">
                    <div class="container-fluid">
                        <nav class="navbar navbar-light navbar-expand-lg topnav-menu">
    
                            <div class="collapse navbar-collapse" id="topnav-menu-content">
                                <ul class="navbar-nav">
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-dashboard" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-home-alt icon nav-icon"></i>
                                            <span data-key="t-dashboards">Dashboards</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-dashboard">
                                            <a href="index.html"  class="dropdown-item" data-key="t-ecommerce">Ecommerce</a>
                                            <a href="dashboard-sales.html"  class="dropdown-item" data-key="t-sales">Sales</a>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-uielement" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="bx bx-cube icon nav-icon"></i>
                                           <span data-key="t-elements">Elements</span> <div class="arrow-down"></div>
                                        </a>

                                        <div class="dropdown-menu mega-dropdown-menu px-2 dropdown-mega-menu-xl" aria-labelledby="topnav-uielement">
                                            <div class="ps-2 p-lg-0">
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div>
                                                            <div class="menu-title">Elements</div>
                                                            <div class="row g-0">
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-alerts.html" class="dropdown-item" data-key="t-alerts">Alerts</a>
                                                                        <a href="ui-buttons.html" class="dropdown-item" data-key="t-buttons">Buttons</a>
                                                                        <a href="ui-cards.html" class="dropdown-item" data-key="t-cards">Cards</a>
                                                                        <a href="ui-carousel.html" class="dropdown-item" data-key="t-carousel">Carousel</a>
                                                                        <a href="ui-dropdowns.html" class="dropdown-item" data-key="t-dropdowns">Dropdowns</a>
                                                                        <a href="ui-grid.html" class="dropdown-item" data-key="t-grid">Grid</a>
                                                                        <a href="ui-images.html" class="dropdown-item" data-key="t-images">Images</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-lightbox.html" class="dropdown-item" data-key="t-lightbox">Lightbox</a>
                                                                        <a href="ui-modals.html" class="dropdown-item" data-key="t-modals">Modals</a>
                                                                        <a href="ui-offcanvas.html" class="dropdown-item" data-key="t-offcanvas">Offcanvas</a>
                                                                        <a href="ui-rangeslider.html" class="dropdown-item" data-key="t-range-slider">Range Slider</a>
                                                                        <a href="ui-progressbars.html" class="dropdown-item" data-key="t-progress-bars">Progress Bars</a>
                                                                        <a href="ui-sweet-alert.html" class="dropdown-item" data-key="t-sweet-alert">Sweet-Alert</a>
                                                                        <a href="ui-tabs-accordions.html" class="dropdown-item" data-key="t-tabs-accordions">Tabs & Accordions</a>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-4">
                                                                    <div>
                                                                        <a href="ui-typography.html" class="dropdown-item" data-key="t-typography">Typography</a>
                                                                        <a href="ui-video.html" class="dropdown-item" data-key="t-video">Video</a>
                                                                        <a href="ui-general.html" class="dropdown-item" data-key="t-general">General</a>
                                                                        <a href="ui-colors.html" class="dropdown-item" data-key="t-colors">Colors</a>
                                                                        <a href="ui-rating.html" class="dropdown-item" data-key="t-rating">Rating</a>
                                                                        <a href="ui-notifications.html" class="dropdown-item" data-key="t-notifications">Notifications</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-pages" role="button">
                                            <i class="bx bx-store icon nav-icon"></i>
                                            <span data-key="t-apps">Apps</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-pages">

                                            <a href="apps-calendar.html" class="dropdown-item" data-key="t-calendar">Calendar</a>

                                            <a href="apps-todo.html" class="dropdown-item" data-key="t-todo">Todo</a>

                                            <a href="apps-file-manager.html" class="dropdown-item" data-key="t-filemanager">File Manager</a>

                                            <a href="apps-chat.html" class="dropdown-item" data-key="t-chat">Chat</a>


                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-ecommerce"
                                                    role="button">
                                                    <span data-key="t-ecommerce">Ecommerce</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-ecommerce">
                                                    <a href="ecommerce-products.html" class="dropdown-item" data-key="t-products">Products</a>
                                                    <a href="ecommerce-product-detail.html" class="dropdown-item" data-key="t-product-detail">Product Detail</a>
                                                    <a href="ecommerce-orders.html" class="dropdown-item" data-key="t-orders">Orders</a>
                                                    <a href="ecommerce-customers.html" class="dropdown-item" data-key="t-customers">Customers</a>
                                                    <a href="ecommerce-cart.html" class="dropdown-item" data-key="t-cart">Cart</a>
                                                    <a href="ecommerce-checkout.html" class="dropdown-item" data-key="t-checkout">Checkout</a>
                                                    <a href="ecommerce-shops.html" class="dropdown-item" data-key="t-shops">Shops</a>
                                                    <a href="ecommerce-add-product.html" class="dropdown-item" data-key="t-add-product">Add Product</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-email"
                                                    role="button">
                                                    <span data-key="t-email">Email</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-email">
                                                    <a href="email-inbox.html" class="dropdown-item" data-key="t-inbox">Inbox</a>
                                                    <a href="email-read.html" class="dropdown-item" data-key="t-read-email">Read Email</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-invoices"
                                                    role="button">
                                                   <span data-key="t-invoices">Invoices</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-invoices">
                                                    <a href="invoices-list.html" class="dropdown-item" data-key="t-invoice-list">Invoice List</a>
                                                    <a href="invoices-detail.html" class="dropdown-item" data-key="t-invoice-detail">Invoice Detail</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-contact"
                                                    role="button">
                                                   <span data-key="t-contacts">Contacts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-contact">
                                                    <a href="contacts-grid.html" class="dropdown-item" data-key="t-user-grid">User Grid</a>
                                                    <a href="contacts-list.html" class="dropdown-item" data-key="t-user-list">User List</a>
                                                    <a href="contacts-profile.html" class="dropdown-item" data-key="t-user-profile">Profile</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-components" role="button">
                                            <i class="bx bx-layer icon nav-icon"></i>
                                            <span data-key="t-components">Components</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-components">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-form"
                                                    role="button">
                                                    <span data-key="t-forms">Forms</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-form">
                                                    <a href="form-elements.html" class="dropdown-item" data-key="t-form-elements">Form Elements</a>
                                                    <a href="form-layouts.html" class="dropdown-item" data-key="t-form-layouts">Form Layouts</a>
                                                    <a href="form-validation.html" class="dropdown-item" data-key="t-form-validation">Form Validation</a>
                                                    <a href="form-advanced.html" class="dropdown-item" data-key="t-form-advanced">Form Advanced</a>
                                                    <a href="form-editors.html" class="dropdown-item" data-key="t-form-editors">Form Editors</a>
                                                    <a href="form-uploads.html" class="dropdown-item" data-key="t-form-upload">Form File Upload</a>
                                                    <a href="form-wizard.html" class="dropdown-item" data-key="t-form-wizard">Form Wizard</a>
                                                    <a href="form-mask.html" class="dropdown-item" data-key="t-form-mask">Form Mask</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-table"
                                                    role="button">
                                                    <span data-key="t-tables">Tables</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-table">
                                                    <a href="tables-basic.html" class="dropdown-item" data-key="t-basic-tables">Basic Tables</a>
                                                    <a href="tables-advanced.html" class="dropdown-item" data-key="t-advanced-tables">Advance Tables</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-charts"
                                                    role="button">
                                                    <span data-key="t-charts">Charts</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-charts">
                                                    <a href="charts-apex.html" class="dropdown-item" data-key="t-apex-charts">Apex Charts</a>
                                                    <a href="charts-chartjs.html" class="dropdown-item" data-key="t-chartjs-charts">Chartjs Charts</a>
                                                    <a href="charts-tui.html" class="dropdown-item" data-key="t-ui-charts">Toast UI Charts</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-icons"
                                                    role="button">
                                                    <span data-key="t-icons">Icons</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-icons">
                                                    <a href="icons-evaicons.html" class="dropdown-item" data-key="t-evaicons">Eva Icons</a>
                                                    <a href="icons-boxicons.html" class="dropdown-item" data-key="t-boxicons">Boxicons</a>
                                                    <a href="icons-materialdesign.html" class="dropdown-item" data-key="t-material-design">Material Design</a>
                                                    <a href="icons-fontawesome.html" class="dropdown-item" data-key="t-font-awesome">Font Awesome 5</a>
                                                </div>
                                            </div>
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-map"
                                                    role="button">
                                                    <span data-key="t-maps">Maps</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-map">
                                                    <a href="maps-google.html" class="dropdown-item" data-key="t-google">Google</a>
                                                    <a href="maps-vector.html" class="dropdown-item" data-key="t-vector">Vector</a>
                                                    <a href="maps-leaflet.html" class="dropdown-item" data-key="t-leaflet">Leaflet</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
    
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle arrow-none" href="#" id="topnav-more" role="button">
                                            <i class="bx bx-file icon nav-icon"></i>
                                            <span data-key="t-pages">Pages</span> <div class="arrow-down"></div>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="topnav-more">
                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-authentication"
                                                    role="button">
                                                    <span data-key="t-authentication">Authentication</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-authentication">
                                                    <a href="auth-login.html" class="dropdown-item" data-key="t-login">Login</a>
                                                    <a href="auth-register.html" class="dropdown-item" data-key="t-register">Register</a>
                                                    <a href="auth-recoverpw.html" class="dropdown-item" data-key="t-recover-password">Recover Password</a>
                                                    <a href="auth-lock-screen.html" class="dropdown-item" data-key="t-lock-screen">Lock Screen</a>
                                                    <a href="auth-logout.html" class="dropdown-item" data-key="t-logout">Logout</a>
                                                    <a href="auth-confirm-mail.html" class="dropdown-item" data-key="t-confirm-mail">Confirm Mail</a>
                                                    <a href="auth-email-verification.html" class="dropdown-item" data-key="t-email-verification">Email Verification</a>
                                                    <a href="auth-two-step-verification.html" class="dropdown-item" data-key="t-two-step-verification">Two Step Verification</a>
                                                </div>
                                            </div>

                                            <div class="dropdown">
                                                <a class="dropdown-item dropdown-toggle arrow-none" href="#" id="topnav-utility"
                                                    role="button">
                                                    <span data-key="t-utility">Utility</span> <div class="arrow-down"></div>
                                                </a>
                                                <div class="dropdown-menu" aria-labelledby="topnav-utility">
                                                    <a href="pages-starter.html" class="dropdown-item" data-key="t-starter-page">Starter Page</a>
                                                    <a href="pages-maintenance.html" class="dropdown-item" data-key="t-maintenance">Maintenance</a>
                                                    <a href="pages-comingsoon.html" class="dropdown-item" data-key="t-coming-soon">Coming Soon</a>
                                                    <a href="pages-timeline.html" class="dropdown-item" data-key="t-timeline">Timeline</a>
                                                    <a href="pages-faqs.html" class="dropdown-item" data-key="t-faqs">FAQs</a>
                                                    <a href="pages-pricing.html" class="dropdown-item" data-key="t-pricing">Pricing</a>
                                                    <a href="pages-404.html" class="dropdown-item" data-key="t-error-404">Error 404</a>
                                                    <a href="pages-500.html" class="dropdown-item" data-key="t-error-500">Error 500</a>
                                                </div>
                                            </div>

                                            <a href="layouts-horizontal.html" class="dropdown-item" data-key="t-horizontal">Horizontal</a>
                                        </div>
                                    </li>
    
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </header>
            <!-- ========== Horizontal-topbar End ========== -->
            
            


