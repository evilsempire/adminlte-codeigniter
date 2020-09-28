
<html>
    <!--include head-->
    <?php $this->load->view('admin/includes/head') ?>

    <body class="hold-transition skin-blue sidebar-mini">
        <div class="wrapper">

            <!--include topbar-->
            <?php
            $this->load->view("admin/includes/topbar")
            ?>

            <!--include sidebar-->
            <?php
            $this->load->view('admin/includes/sidebar')
            ?>
            <!--include view-->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <h1>
                        <?php echo isset($title) ? ucfirst($title): "" ?>
                        <!--<small>Control panel</small>-->
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                        <li class="active"><?php echo isset($title) ? ucfirst($title): "" ?></li>
                    </ol>
                </section>
            <?php
            if (isset($content_view) && $content_view != "") {
                $this->load->view($content_view);
            }
            ?>
            </div>

            <!--include copyright-->
            <?php
            $this->load->view("admin/includes/copyright");
            ?>

            <!--include footer-->
            <?php
            $this->load->view('admin/includes/footer')
            ?>
        </div>
    </body>
</html>