<header class="main-header">
    <!-- Logo -->
    <a href="<?= base_url() ?>admin" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><?= get_site_acronym(); ?></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><?= SITE_NAME; ?></span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
        <!-- Sidebar toggle button-->
        <a href="<?= base_url() ?>assets/lib/#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">

                <li class="dropdown user user-menu">
                    <a href="<?= base_url() ?>assets/lib/#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/admin/img/user.jpg" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?= $user_details->username ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header">
                            <img src="<?= base_url() ?>assets/admin/img/user.jpg" class="img-circle" alt="User Image">

                            <p>
                                <?= $user_details->username ?> - Admin
                            </p>
                        </li>

                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <div class="pull-left">
                                <a href="<?= base_url() ?>assets/lib/#" class="btn btn-default btn-flat">Profile</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?= base_url('signin/logout') ?>" class="btn btn-default btn-flat">Sign out</a>
                            </div>
                        </li>
                    </ul>
                </li>

            </ul>
        </div>
    </nav>
</header>