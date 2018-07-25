<?php $this->load->view('admin/components/page_head'); ?>
    <body>
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
        <div id="loader"></div>
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
        <!-- start header nav-->
        <div class="navbar-fixed">
            <nav class="navbar-color gradient-45deg-purple-deep-orange gradient-shadow">
                <div class="nav-wrapper">
                    <div class="header-search-wrapper hide-on-med-and-down sideNav-lock">
                        <i class="material-icons">search</i>
                        <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
                    </div>
                    <ul class="right hide-on-med-and-down">
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                                <span class="flag-icon flag-icon-gb"></span>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                                <i class="material-icons">settings_overscan</i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                                <i class="material-icons">notifications_none
                                    <small class="notification-badge">5</small>
                                </i>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="<?php echo site_url('images/avatar/avatar-7.png'); ?>" alt="avatar">
                    <i></i>
                  </span>
                            </a>
                        </li>
                        <li>
                            <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                                <i class="material-icons">format_indent_increase</i>
                            </a>
                        </li>
                    </ul>
                    <!-- translation-button -->
                    <ul id="translation-dropdown" class="dropdown-content">
                        <li>
                            <a href="#!" class="grey-text text-darken-1">
                                <i class="flag-icon flag-icon-gb"></i> English</a>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-1">
                                <i class="flag-icon flag-icon-fr"></i> French</a>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-1">
                                <i class="flag-icon flag-icon-cn"></i> Chinese</a>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-1">
                                <i class="flag-icon flag-icon-de"></i> German</a>
                        </li>
                    </ul>
                    <!-- notifications-dropdown -->
                    <ul id="notifications-dropdown" class="dropdown-content">
                        <li>
                            <h6>NOTIFICATIONS
                                <span class="new badge">5</span>
                            </h6>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
                        </li>
                        <li>
                            <a href="#!" class="grey-text text-darken-2">
                                <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                            <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
                        </li>
                    </ul>
                    <!-- profile-dropdown -->
                    <ul id="profile-dropdown" class="dropdown-content">
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">face</i> Profile</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">settings</i> Settings</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">live_help</i> Help</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">lock_outline</i> Lock</a>
                        </li>
                        <li>
                            <a href="#" class="grey-text text-darken-1">
                                <i class="material-icons">keyboard_tab</i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
        <!-- START WRAPPER -->
        <div class="wrapper">
            <!-- START LEFT SIDEBAR NAV-->
            <aside id="left-sidebar-nav" class="nav-expanded nav-lock nav-collapsible">
                <div class="brand-sidebar">
                    <h1 class="logo-wrapper">
                        <a href="index.html" class="brand-logo darken-1">
                            <img src="<?php echo site_url('images/logo/materialize-logo.png'); ?>" alt="materialize logo">
                            <span class="logo-text hide-on-med-and-down">Materialize</span>
                        </a>
                        <a href="#" class="navbar-toggler">
                            <i class="material-icons">radio_button_checked</i>
                        </a>
                    </h1>
                </div>
                <ul id="slide-out" class="side-nav fixed leftside-navigation">
                    <li class="no-padding">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li class="bold">
                                <a class="waves-effect waves-cyan active" href="<?php echo site_url('admin/dashboard'); ?>">
                                    <i class="material-icons">dashboard</i>
                                    <span class="nav-text">Dashboard</span>
                                </a>
                            </li>
                            <li class="bold">
                                <a href="app-email.html" class="waves-effect waves-cyan">
                                    <i class="material-icons">mail_outline</i>
                                    <span class="nav-text">Mailbox</span>
                                </a>
                            </li>
                            <li class="bold">
                                <a href="app-calendar.html" class="waves-effect waves-cyan">
                                    <i class="material-icons">today</i>
                                    <span class="nav-text">Calender</span>
                                </a>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header waves-effect waves-cyan">
                                    <i class="material-icons">invert_colors</i>
                                    <span class="nav-text">CSS</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="css-typography.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Typography</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-color.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span class="nav-text">Color</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-grid.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span class="nav-text">Grid</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-helpers.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span class="nav-text">Helpers</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-media.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Media</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-pulse.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Pulse</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-sass.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Sass</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-shadow.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Shadow</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-animations.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Animations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="css-transitions.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Transition</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">photo_filter</i>
                                    <span class="nav-text">Basic UI</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li class="bold">
                                            <a class="collapsible-header  waves-effect waves-cyan">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span class="nav-text">Buttons</span>
                                            </a>
                                            <div class="collapsible-body">
                                                <ul class="collapsible" data-collapsible="accordion">
                                                    <li>
                                                        <a href="ui-basic-buttons.html">
                                                            <i class="material-icons">keyboard_arrow_right</i>
                                                            <span>Basic</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="ui-extended-buttons.html">
                                                            <i class="material-icons">keyboard_arrow_right</i>
                                                            <span>Extended</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                        <li>
                                            <a href="ui-icons.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Icons</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-alerts.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Alerts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-badges.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Badges</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-breadcrumbs.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Breadcrumbs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-chips.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Chips</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-collections.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Collections</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-navbar.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Navbar</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-pagination.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Pagination</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="ui-preloader.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Preloader</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header waves-effect waves-cyan">
                                    <i class="material-icons">library_add</i>
                                    <span class="nav-text">Advanced UI</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="advance-ui-carousel.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Carousel</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-collapsibles.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Collapsible</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-toasts.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Toasts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-tooltip.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Tooltip</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-dropdown.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Dropdown</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-feature-discovery.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Feature Discovery</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advanced-ui-media.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Media</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advanced-ui-modals.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Modals</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-scrollfire.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>ScrollFire</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-scrollspy.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Scrollspy</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-tabs.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Tabs</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-transitions.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Transitions</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="advance-ui-waves.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Waves</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header waves-effect waves-cyan">
                                    <i class="material-icons">add_to_queue</i>
                                    <span class="nav-text">Extra Components</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="extra-components-range-slider.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Range Slider</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-components-sweetalert.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>SweetAlert</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-components-nestable.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Shortable & Nestable</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-components-translation.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Language Translation</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="extra-components-highlight.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Highlight</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">border_all</i>
                                    <span class="nav-text">Tables</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="table-basic.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Basic Tables</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table-data.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Data Tables</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table-jsgrid.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>jsGrid</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table-editable.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Editable Table</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="table-floatThead.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>FloatThead</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">chrome_reader_mode</i>
                                    <span class="nav-text">Forms</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="form-elements.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Form Elements</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-layouts.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Form Layouts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-validation.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Form Validations</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-masks.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Form Masks</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="form-file-uploads.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>File Uploads</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">pages</i>
                                    <span class="nav-text">Pages</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="page-contact.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Contact Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-todo.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>ToDos</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-blog-1.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Blog Type 1</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-blog-2.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Blog Type 2</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-404.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>404</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-500.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>500</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="page-blank.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Blank</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">add_shopping_cart</i>
                                    <span class="nav-text">eCommers</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="eCommerce-products-page.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Products Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="eCommerce-pricing.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Pricing Table</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="eCommerce-invoice.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Invoice</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">perm_media</i>
                                    <span class="nav-text">Medias</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="media-gallary-page.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Gallery Page</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="media-hover-effects.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Image Hover Effects</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">account_circle</i>
                                    <span class="nav-text">User</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="user-profile-page.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>User Profile</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-login.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Login</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-register.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Register</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-forgot-password.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Forgot Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="user-lock-screen.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Lock Screen</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="bold">
                                <a class="collapsible-header waves-effect waves-cyan">
                                    <i class="material-icons">pie_chart_outlined</i>
                                    <span class="nav-text">Charts</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul>
                                        <li>
                                            <a href="charts-chartjs.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Chart JS</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-chartist.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Chartist</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-morris.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Morris Charts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-xcharts.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>xCharts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-flotcharts.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Flot Charts</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="charts-sparklines.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Sparkline Charts</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="li-hover">
                        <p class="ultra-small margin more-text">MORE</p>
                    </li>
                    <li>
                        <a href="angular-ui.html">
                            <i class="material-icons">verified_user</i>
                            <span class="nav-text">Angular UI</span>
                        </a>
                    </li>
                    <li class="no-padding">
                        <ul class="collapsible" data-collapsible="accordion">
                            <li class="bold">
                                <a class="collapsible-header  waves-effect waves-cyan">
                                    <i class="material-icons">photo_filter</i>
                                    <span class="nav-text">Menu Levels</span>
                                </a>
                                <div class="collapsible-body">
                                    <ul class="collapsible" data-collapsible="accordion">
                                        <li>
                                            <a href="ui-basic-buttons.html">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span>Second level</span>
                                            </a>
                                        </li>
                                        <li class="bold">
                                            <a class="collapsible-header  waves-effect waves-cyan">
                                                <i class="material-icons">keyboard_arrow_right</i>
                                                <span class="nav-text">Second level child</span>
                                            </a>
                                            <div class="collapsible-body">
                                                <ul class="collapsible" data-collapsible="accordion">
                                                    <li>
                                                        <a href="ui-basic-buttons.html">
                                                            <i class="material-icons">keyboard_arrow_right</i>
                                                            <span>Third level</span>
                                                        </a>
                                                    </li>
                                                    <li class="bold">
                                                        <a class="collapsible-header  waves-effect waves-cyan">
                                                            <i class="material-icons">keyboard_arrow_right</i>
                                                            <span class="nav-text">Third level child</span>
                                                        </a>
                                                        <div class="collapsible-body">
                                                            <ul class="collapsible" data-collapsible="accordion">
                                                                <li>
                                                                    <a href="ui-basic-buttons.html">
                                                                        <i class="material-icons">keyboard_arrow_right</i>
                                                                        <span>Forth level</span>
                                                                    </a>
                                                                </li>
                                                                <li>
                                                                    <a href="ui-extended-buttons.html">
                                                                        <i class="material-icons">keyboard_arrow_right</i>
                                                                        <span>Forth level</span>
                                                                    </a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="changelogs.html">
                            <i class="material-icons">track_changes</i>
                            <span class="nav-text">Changelogs</span>
                        </a>
                    </li>
                    <li>
                        <a href="../documentation" target="_blank">
                            <i class="material-icons">import_contacts</i>
                            <span class="nav-text">Documentation</span>
                        </a>
                    </li>
                    <li>
                        <a href="https://pixinvent.ticksy.com" target="_blank">
                            <i class="material-icons">help_outline</i>
                            <span class="nav-text">Support</span>
                        </a>
                    </li>
                </ul>
                <a href="#" data-activates="slide-out" class="sidebar-collapse btn-floating btn-medium waves-effect waves-light hide-on-large-only gradient-45deg-light-blue-cyan gradient-shadow">
                    <i class="material-icons">menu</i>
                </a>
            </aside>
            <!-- END LEFT SIDEBAR NAV-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!--card stats start-->
                    <div id="card-stats">
                        <div class="row">
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">add_shopping_cart</i>
                                            <p>Orders</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">690</h5>
                                            <p class="no-margin">New</p>
                                            <p>6,00,00</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">perm_identity</i>
                                            <p>Clients</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">1885</h5>
                                            <p class="no-margin">New</p>
                                            <p>1,12,900</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">timeline</i>
                                            <p>Sales</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">80%</h5>
                                            <p class="no-margin">Growth</p>
                                            <p>3,42,230</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l3">
                                <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text">
                                    <div class="padding-4">
                                        <div class="col s7 m7">
                                            <i class="material-icons background-round mt-5">attach_money</i>
                                            <p>Profit</p>
                                        </div>
                                        <div class="col s5 m5 right-align">
                                            <h5 class="mb-0">$890</h5>
                                            <p class="no-margin">Today</p>
                                            <p>$25,000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--card stats end-->
                    <!--yearly & weekly revenue chart start-->
                    <div id="sales-chart">
                        <div class="row">
                            <div class="col s12 m8 l8">
                                <div id="revenue-chart" class="card">
                                    <div class="card-content">
                                        <h4 class="header mt-0">REVENUE FOR 2017
                                            <span class="purple-text small text-darken-1 ml-1">
                          <i class="material-icons">keyboard_arrow_up</i> 15.58 %</span> <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow right">Details</a>
                                        </h4>
                                        <div class="row">
                                            <div class="col s12">
                                                <div class="yearly-revenue-chart">
                                                    <canvas id="thisYearRevenue" class="firstShadow" height="350"></canvas>
                                                    <canvas id="lastYearRevenue" height="350"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div id="weekly-earning" class="card">
                                    <div class="card-content">
                                        <h4 class="header m-0">Earning
                                            <i class="material-icons right grey-text lighten-3">more_vert</i>
                                        </h4>
                                        <p class="no-margin grey-text lighten-3 medium-small">Mon 15 - Sun 21</p>
                                        <h3 class="header">$899.39
                                            <i class="material-icons deep-orange-text text-accent-2">arrow_upward</i>
                                        </h3>
                                        <canvas id="monthlyEarning" class="" height="150"></canvas>
                                        <div class="center-align">
                                            <p class="lighten-3">Total Weekly Earning</p>
                                            <a class="waves-effect waves-light btn gradient-45deg-purple-deep-orange gradient-shadow">View Full</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--yearly & weekly revenue chart end-->
                    <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
                    <div id="daily-data-chart">
                        <div class="row">
                            <div class="col s12 m4 l4">
                                <div class="card pt-0 pb-0">
                                    <div class="padding-2 ml-2">
                                        <span class="new badge gradient-45deg-light-blue-cyan gradient-shadow mt-2 mr-2">+ 42.6%</span>
                                        <p class="mt-2 mb-0">Members online</p>
                                        <p class="no-margin grey-text lighten-3">360 avg</p>
                                        <h5>3,450</h5>
                                    </div>
                                    <div class="row">
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                                            <canvas id="custom-line-chart-sample-one" class="center"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div class="card pt-0 pb-0">
                                    <div class="padding-2 ml-2">
                                        <span class="new badge gradient-45deg-purple-deep-orange gradient-shadow mt-2 mr-2">+ 12%</span>
                                        <p class="mt-2 mb-0">Current server load</p>
                                        <p class="no-margin grey-text lighten-3">23.1% avg</p>
                                        <h5>+2500</h5>
                                    </div>
                                    <div class="row">
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                                            <canvas id="custom-line-chart-sample-two" class="center"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4 l4">
                                <div class="card pt-0 pb-0">
                                    <div class="padding-2 ml-2">
                                        <span class="new badge gradient-45deg-amber-amber gradient-shadow mt-2 mr-2">+ $900</span>
                                        <p class="mt-2 mb-0">Today's revenue</p>
                                        <p class="no-margin grey-text lighten-3">$40,512 avg</p>
                                        <h5>$ 22,300</h5>
                                    </div>
                                    <div class="row">
                                        <div class="sample-chart-wrapper" style="margin-bottom: -14px; margin-top: -75px;">
                                            <canvas id="custom-line-chart-sample-three" class="center"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Member online, Currunt Server load & Today's Revenue Chart start -->
                    <!-- ecommerce product start-->
                    <div id="ecommerce-product">
                        <div class="row">
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-content  center">
                                        <h6 class="card-title font-weight-400 mb-0">Apple Watch</h6>
                                        <img src="<?php echo site_url('images/cards/watch.png'); ?>">
                                        <p>
                                            <b>The Apple Watch</b>
                                        </p>
                                        <p>One day only exclusive sale on our marketplace</p>
                                    </div>
                                    <div class="card-action border-non center">
                                        <a class="waves-effect waves-light btn gradient-45deg-light-blue-cyan box-shadow">$ 999/-</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-content">
                                        <span class="card-title center-align">Music</span>
                                        <img src="<?php echo site_url('images/cards/headphones-2.png'); ?>">
                                    </div>
                                    <div class="card-action pt-0">
                                        <p class="">Default Quality</p>
                                        <div class="chip">
                                            192kb
                                            <i class="close material-icons">close</i>
                                        </div>
                                        <div class="chip">
                                            320kb
                                            <i class="close material-icons">close</i>
                                        </div>
                                    </div>
                                    <div class="card-action pt-0">
                                        <p class="">Save Video Quality</p>
                                        <div class="switch">
                                            <label>
                                                Off
                                                <input type="checkbox">
                                                <span class="lever"></span>
                                                On
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m4">
                                <div class="card">
                                    <div class="card-content center">
                                        <h6 class="card-title font-weight-400 mb-0">iPhone</h6>
                                        <img src="<?php echo site_url('images/cards/iphonec.png'); ?>">
                                        <p>
                                            <b>The Apple iPhone X</b>
                                        </p>
                                        <p>One day only exclusive sale on our marketplace</p>
                                    </div>
                                    <div class="card-action border-non center">
                                        <a class="waves-effect waves-light btn gradient-45deg-red-pink box-shadow">$ 299/-</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ecommerce product end-->
                        <!-- ecommerce offers start-->
                        <div id="ecommerce-offer">
                            <div class="row">
                                <div class="col s12 m3">
                                    <div class="card gradient-shadow gradient-45deg-light-blue-cyan border-radius-3">
                                        <div class="card-content center">
                                            <img src="<?php echo site_url('images/icon/apple-watch.png'); ?>" class="width-40 border-round z-depth-5">
                                            <h5 class="white-text lighten-4">50% Off</h5>
                                            <p class="white-text lighten-4">On apple watch</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m3">
                                    <div class="card gradient-shadow gradient-45deg-red-pink border-radius-3">
                                        <div class="card-content center">
                                            <img src="<?php echo site_url('images/icon/printer.png'); ?>" class="width-40 border-round z-depth-5">
                                            <h5 class="white-text lighten-4">20% Off</h5>
                                            <p class="white-text lighten-4">On Canon Printer</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m3">
                                    <div class="card gradient-shadow gradient-45deg-amber-amber border-radius-3">
                                        <div class="card-content center">
                                            <img src="<?php echo site_url('images/icon/laptop.png'); ?>" class="width-40 border-round z-depth-5">
                                            <h5 class="white-text lighten-4">40% Off</h5>
                                            <p class="white-text lighten-4">On apple macbook</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m3">
                                    <div class="card gradient-shadow gradient-45deg-green-teal border-radius-3">
                                        <div class="card-content center">
                                            <img src="<?php echo site_url('images/icon/bowling.png'); ?>" class="width-40 border-round z-depth-5">
                                            <h5 class="white-text lighten-4">60% Off</h5>
                                            <p class="white-text lighten-4">On any game</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ecommerce offers end-->
                        <!-- //////////////////////////////////////////////////////////////////////////// -->
                    </div>
                    <!--end container-->
            </section>
            <!-- END CONTENT -->
            <!-- Floating Action Button -->
            <div class="fixed-action-btn " style="bottom: 50px; right: 19px;">
                <a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow">
                    <i class="material-icons">add</i>
                </a>
                <ul>
                    <li>
                        <a href="css-helpers.html" class="btn-floating blue">
                            <i class="material-icons">help_outline</i>
                        </a>
                    </li>
                    <li>
                        <a href="cards-extended.html" class="btn-floating green">
                            <i class="material-icons">widgets</i>
                        </a>
                    </li>
                    <li>
                        <a href="app-calendar.html" class="btn-floating amber">
                            <i class="material-icons">today</i>
                        </a>
                    </li>
                    <li>
                        <a href="app-email.html" class="btn-floating red">
                            <i class="material-icons">mail_outline</i>
                        </a>
                    </li>
                </ul>
            </div>
            <!-- Floating Action Button -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
            <!-- START RIGHT SIDEBAR NAV-->
            <aside id="right-sidebar-nav">
                <ul id="chat-out" class="side-nav rightside-navigation">
                    <li class="li-hover">
                        <div class="row">
                            <div class="col s12 border-bottom-1 mt-5">
                                <ul class="tabs">
                                    <li class="tab col s4">
                                        <a href="#activity" class="active">
                                            <span class="material-icons">graphic_eq</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#chatapp">
                                            <span class="material-icons">face</span>
                                        </a>
                                    </li>
                                    <li class="tab col s4">
                                        <a href="#settings">
                                            <span class="material-icons">settings</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div id="settings" class="col s12">
                                <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                                <ul class="collection border-none">
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input checked type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Notifications</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show recent activity</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show your emails</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>Use checkboxes when looking for yes or no answers.</p>
                                    </li>
                                    <li class="collection-item border-none">
                                        <div class="m-0">
                                            <span class="font-weight-600">Show Task statistics</span>
                                            <div class="switch right">
                                                <label>
                                                    <input type="checkbox">
                                                    <span class="lever"></span>
                                                </label>
                                            </div>
                                        </div>
                                        <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                                    </li>
                                </ul>
                            </div>
                            <div id="chatapp" class="col s12">
                                <div class="collection border-none">
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-1.png'); ?>" alt="" class="circle cyan">
                                        <span class="line-height-0">Elizabeth Elliott </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <img src="<?php echo site_url('images/avatar/avatar-2.png'); ?>" alt="" class="circle deep-orange accent-2">
                                    <a href="#!" class="collection-item avatar border-none">
                                        <span class="line-height-0">Mary Adams </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-3.png'); ?>" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Caleb Richards </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-4.png'); ?>" alt="" class="circle cyan">
                                        <span class="line-height-0">June Lane </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-5.png'); ?>" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Edward Fletcher </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-6.png'); ?>" alt="" class="circle deep-orange accent-2">
                                        <span class="line-height-0">Crystal Bates </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-7.png'); ?>" alt="" class="circle cyan">
                                        <span class="line-height-0">Nathan Watts </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-8.png'); ?>" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Willard Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-9.png'); ?>" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Ronnie Ellis </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-1.png'); ?>" alt="" class="circle cyan">
                                        <span class="line-height-0">Gwendolyn Wood </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-2.png'); ?>" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Daniel Russell </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-3.png'); ?>" alt="" class="circle teal accent-4">
                                        <span class="line-height-0">Sarah Graves </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-4.png'); ?>" alt="" class="circle red accent-2">
                                        <span class="line-height-0">Andrew Hoffman </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                                    </a>
                                    <a href="#!" class="collection-item avatar border-none">
                                        <img src="<?php echo site_url('images/avatar/avatar-5.png'); ?>" alt="" class="circle cyan">
                                        <span class="line-height-0">Camila Lynch </span>
                                        <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                                        <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                                    </a>
                                </div>
                            </div>
                            <div id="activity" class="col s12">
                                <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                                <div class="activity">
                                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                                    </div>
                                    <div class="col s9 recent-activity-list-text">
                                        <a href="#" class="deep-purple-text medium-small">just now</a>
                                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="cyan-text medium-small">Yesterday</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="green-text medium-small">5 Days Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="amber-text medium-small">1 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                                            <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="brown-text medium-small">1 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list chat-out-list row mb-0">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                                        </div>
                                    </div>
                                    <div class="recent-activity-list row">
                                        <div class="col s3 mt-2 center-align recent-activity-list-icon">
                                            <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                                        </div>
                                        <div class="col s9 recent-activity-list-text">
                                            <a href="#" class="grey-text medium-small">1 Year Ago</a>
                                            <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </aside>
            <!-- END RIGHT SIDEBAR NAV-->
        </div>
        <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->



<?php $this->load->view('admin/components/page_tail'); ?>