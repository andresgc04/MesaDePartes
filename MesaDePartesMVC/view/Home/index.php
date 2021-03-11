<!doctype html>
<html lang="en" class="no-focus">

<head>
    <?php require_once("../MainHead/MainHead.php"); ?>
    <title>Home | Mesa de Partes</title>
</head>

<body>
    <div id="page-container" class="sidebar-o side-scroll page-header-modern main-content-boxed">
        <!-- Side Overlay-->
        <aside id="side-overlay">
            <!-- Side Overlay Scroll Container -->
            <div id="side-overlay-scroll">
                <!-- Side Header -->
                <div class="content-header content-header-fullrow">
                    <div class="content-header-section align-parent">
                        <!-- Close Side Overlay -->
                        <!-- Layout API, functionality initialized in Codebase() -> uiApiLayout() -->
                        <button type="button" class="btn btn-circle btn-dual-secondary align-v-r" data-toggle="layout" data-action="side_overlay_close">
                            <i class="fa fa-times text-danger"></i>
                        </button>
                        <!-- END Close Side Overlay -->

                        <!-- User Info -->
                        <div class="content-header-item">
                            <a class="img-link mr-5" href="be_pages_generic_profile.html">
                                <img class="img-avatar img-avatar32" src="../../public/assets/img/avatars/avatar15.jpg" alt="">
                            </a>
                            <a class="align-middle link-effect text-primary-dark font-w600" href="be_pages_generic_profile.html">John Smith</a>
                        </div>
                        <!-- END User Info -->
                    </div>
                </div>
                <!-- END Side Header -->

            </div>
            <!-- END Side Overlay Scroll Container -->
        </aside>
        <!-- END Side Overlay -->

        <!-- Sidebar -->
        <nav id="sidebar">
            <!-- Sidebar Scroll Container -->
            <div id="sidebar-scroll">
                <!-- Sidebar Content -->
                <div class="sidebar-content">
                    <?php require_once("../MainSidebar/MainSidebar.php"); ?>
                    <!-- Side Navigation -->
                    <?php require_once("../MainMenu/MainMenu.php"); ?>
                    <!-- END Side Navigation -->
                </div>
                <!-- Sidebar Content -->
            </div>
            <!-- END Sidebar Scroll Container -->
        </nav>
        <!-- END Sidebar -->

        <!-- Header -->
        <?php require_once("../MainHeader/MainHeader.php"); ?>
        <!-- END Header -->

        <!-- Main Container -->
        <main id="main-container">
            <!-- Page Content -->
            <div class="content">
                <h2 class="content-heading">Blank <small>Get Started</small></h2>
                <p>Create your own awesome project!</p>
            </div>
            <!-- END Page Content -->
        </main>
        <!-- END Main Container -->

        <?php require_once("../MainFooter/MainFooter.php"); ?>
    </div>
    <!-- END Page Container -->
    <?php require_once("../MainJS/MainJS.php"); ?>
</body>

</html>