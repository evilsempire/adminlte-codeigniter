<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title><?= SITE_NAME; ?> | <?php isset($title) ?  strtoupper($title) : ""; ?></title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/Ionicons/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Select2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/select2/dist/css/select2.min.css">
    <!--selectize-->
    <link href="<?= base_url(); ?>assets/admin/lib/selectize/css/selectize.css" rel="stylesheet" type="text/css" />
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/morris.js/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/jvectormap/jquery-jvectormap.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/bootstrap-daterangepicker/daterangepicker.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!--alertfiy-->
    <link href="<?= base_url() ?>assets/admin/lib/alertify/alertify.rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/lib/alertify/themes/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
             folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/skins/_all-skins.min.css">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="<?= base_url() ?>assets/admin/lib/https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="<?= base_url() ?>assets/admin/lib/https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

    <!--custom css-->
    <link href="<?= base_url() ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css" />
    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>assets/admin/lib/jquery/dist/jquery.min.js"></script>
    <script>
        baseUrl = '<?= base_url() ?>';
    </script>
</head>