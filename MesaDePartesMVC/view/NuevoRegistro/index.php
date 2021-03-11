<!doctype html>
<html lang="en" class="no-focus">

<head>
    <?php require_once("../MainHead/MainHead.php"); ?>
    <title>Nuevo Registro | Mesa de Partes</title>
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
                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Nuevo Registro <small>Mesa de Partes</small></h3>
                    </div>

                    <div class="block-content block-content-full">
                        <div class="form-group row">
                            <label class="col-12" for="example-text-input">Asunto</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" id="example-text-input" name="example-text-input" placeholder="Asunto..">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-12" for="example-textarea-input">Descripción</label>
                            <div class="col-12">
                                <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Descripción.."></textarea>
                            </div>
                        </div>

                        <div class="block-content block-content-sm block-content-full bg-body-light">
                            <div class="row">
                                <div class="col-6">
                                    <button type="button" class="btn btn-alt-info">
                                        <i class="fa fa-share-alt mr-5"></i> Adjuntar Documentos
                                    </button>
                                </div>
                                <div class="col-6 text-right">
                                    <button type="button" class="btn btn-alt-primary">
                                        Guardar <i class="fa fa-save ml-5"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="block">
                    <div class="block-header block-header-default">
                        <h3 class="block-title">Listado de Documentos <small>Mesa de Partes</small></h3>
                    </div>

                    <div class="block-content block-content-full">
                        <!-- DataTables init on table by adding .js-dataTable-full class, functionality initialized in js/pages/be_tables_datatables.js -->
                        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                            <thead>
                                <tr>
                                    <th class="text-center"></th>
                                    <th>Name</th>
                                    <th class="d-none d-sm-table-cell">Email</th>
                                    <th class="d-none d-sm-table-cell" style="width: 15%;">Access</th>
                                    <th class="text-center" style="width: 15%;">Profile</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center">1</td>
                                    <td class="font-w600">Barbara Scott</td>
                                    <td class="d-none d-sm-table-cell">customer1@example.com</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-danger">Disabled</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                            <i class="fa fa-user"></i>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="text-center">2</td>
                                    <td class="font-w600">Laura Carr</td>
                                    <td class="d-none d-sm-table-cell">customer2@example.com</td>
                                    <td class="d-none d-sm-table-cell">
                                        <span class="badge badge-success">VIP</span>
                                    </td>
                                    <td class="text-center">
                                        <button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View Customer">
                                            <i class="fa fa-user"></i>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
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