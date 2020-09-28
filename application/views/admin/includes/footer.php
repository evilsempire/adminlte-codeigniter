
<!-- jQuery UI 1.11.4 -->
<script src="<?= base_url() ?>assets/admin/lib/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
    $.widget.bridge('uibutton', $.ui.button);</script>
<!-- Bootstrap 3.3.7 -->
<script src="<?= base_url() ?>assets/admin/lib/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?= base_url() ?>assets/admin/lib/select2/dist/js/select2.full.min.js"></script>
<!--seletize-->
<script src="<?= base_url() ?>assets/admin/lib/selectize/js/selectize.min.js" type="text/javascript"></script>
<!-- DataTables -->
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/jquery.dataTables.html.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/dataTables.buttons.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/buttons.flash.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/jszip.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/pdfmake.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/vfs_fonts.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/buttons.html5.min.js" type="text/javascript"></script>
<script src="<?= base_url() ?>assets/admin/lib/datatables.net/js/buttons.print.min.js" type="text/javascript"></script>
<!-- Morris.js charts -->
<script src="<?= base_url() ?>assets/admin/lib/raphael/raphael.min.js"></script>
<script src="<?= base_url() ?>assets/admin/lib/morris.js/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?= base_url() ?>assets/admin/lib/jquery-sparkline/dist/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<!--<script src="<?= base_url() ?>assets/admin/lib/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?= base_url() ?>assets/admin/lib/jvectormap/jquery-jvectormap-world-mill-en.js"></script>-->
<!-- jQuery Knob Chart -->
<script src="<?= base_url() ?>assets/admin/lib/jquery-knob/dist/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?= base_url() ?>assets/admin/lib/moment/min/moment.min.js"></script>
<script src="<?= base_url() ?>assets/admin/lib/bootstrap-daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?= base_url() ?>assets/admin/lib/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?= base_url() ?>assets/admin/lib/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?= base_url() ?>assets/admin/lib/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?= base_url() ?>assets/admin/lib/fastclick/lib/fastclick.js"></script>
<!--alertify-->
<script src="<?= base_url() ?>assets/admin/lib/alertify/alertify.js" type="text/javascript"></script>
<!--chart js-->
<script src="<?= base_url() ?>assets/admin/lib/chart.js/Chart.min.js" type="text/javascript"></script>
<!-- AdminLTE App -->
<script src="<?= base_url() ?>assets/admin/js/adminlte.min.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?= base_url() ?>assets/admin/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url() ?>assets/admin/js/demo.js"></script>

<?php
if (isset($script)) {
    ?>
    <script src="<?= base_url() ?>assets/admin/custom_js/<?= $script ?>.js"></script>

    <?php
}
?>

<?php
if (isset($script) && $script == "dashboard" || $script == "reports") {
    ?>

    <script>
    // Get context with jQuery - using jQuery's .get() method.
        var pieChartCanvas = $('#pieChart').get(0).getContext('2d')
                var pieChart = new Chart(pieChartCanvas)
                var PieData = [
    <?php
    if (count($job_listing_stats)) {
        foreach ($job_listing_stats as $stat) {
            ?>
                        {
                        value: '<?= $stat->count ?>',
                                color: getRandomColor(),
                                highlight:getRandomColor(),
                                label:'<?= $stat->job_title ?>',
                        },
            <?php
        }
    }
    ?>

                ]
                var pieOptions = {
                //Boolean - Whether we should show a stroke on each segment
                segmentShowStroke: true,
                        //String - The colour of each segment stroke
                        segmentStrokeColor: '#fff',
                        //Number - The width of each segment stroke
                        segmentStrokeWidth: 2,
                        //Number - The percentage of the chart that we cut out of the middle
                        percentageInnerCutout: 50, // This is 0 for Pie charts
                        //Number - Amount of animation steps
                        animationSteps: 100,
                        //String - Animation easing effect
                        animationEasing: 'easeOutBounce',
                        //Boolean - Whether we animate the rotation of the Doughnut
                        animateRotate: true,
                        //Boolean - Whether we animate scaling the Doughnut from the centre
                        animateScale: false,
                        //Boolean - whether to make the chart responsive to window resizing
                        responsive: true,
                        // Boolean - whether to maintain the starting aspect ratio or not when responsive, if set to false, will take up entire container
                        maintainAspectRatio: true,
                        //String - A legend template
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                }
    //Create pie or douhnut chart
    // You can switch between pie and douhnut using the method below.
        pieChart.Doughnut(PieData, pieOptions);
        function getRandomColor() {
        var letters = '0123456789ABCDEF';
        var color = '#';
        for (var i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
        }
        return color;
        }
    </script>
<?php } ?>


//reports script
<?php
if (isset($script) && $script == "reports") {
    ?>
    <script>
        // Get context with jQuery - using jQuery's .get() method.

        var PieData = [
    <?php
    if (count($industry_applications)) {
        foreach ($industry_applications as $stat) {
            ?>

                {
                value: '<?= $stat->count ?>',
                        color: getRandomColor(),
                        highlight:getRandomColor(),
                        label:'<?= $stat->industry_name ?>',
                },
            <?php
        }
    }
    ?>

        ]
                var pieOptions = {
                segmentShowStroke: true,
                        segmentStrokeColor: "#fff",
                        segmentStrokeWidth: 1,
                        percentageInnerCutout: 50,
                        animationSteps: 100,
                        animationEasing: "easeOutBounce",
                        animateRotate: true,
                        animateScale: true,
                        responsive: true,
                        maintainAspectRatio: false,
                        //String - A legend template
                        legendTemplate: '<ul class="<%=name.toLowerCase()%>-legend"><% for (var i=0; i<segments.length; i++){%><li><span style="background-color:<%=segments[i].fillColor%>"></span><%if(segments[i].label){%><%=segments[i].label%><%}%></li><%}%></ul>'
                        ,
                        legendCallback: function(chart) {
                        var text = [];
                        text.push('<ul>');
                        for (var i = 0; i < chart.data.datasets.length; i++) {
                        console.log(chart.data.datasets[i]); // see what's inside the obj.
                        text.push('<li>');
                        text.push('<span style="background-color:' + chart.data.datasets[i].borderColor + '">' + chart.data.datasets[i].label + '</span>');
                        text.push('</li>');
                        }
                        text.push('</ul>');
                        return text.join("");
                        },
                }
        var pieChartCanvas = $("#industryChart").get(0).getContext("2d");
        var pieChart = new Chart(pieChartCanvas).Doughnut(PieData, pieOptions);
        document.getElementById('js-legend').innerHTML = pieChart.generateLegend();
        function getRandomColor() {

        var letters = 'ABCDE'.split('');
        var color = '#';
        for (var i = 0; i < 3; i++) {
        color += letters[Math.floor(Math.random() * letters.length)];
        }
        return color;
        }



        //php
        var colors = [
    <?php
    if (count($region_wise_applications)) {
        foreach ($region_wise_applications as $app) {
            ?>
                getRandomColor(),
            <?php
        }
    }
    ?>
        ];
        var data = [
    <?php
    if (count($region_wise_applications)) {
        foreach ($region_wise_applications as $app) {
            ?>
                {
                label: '<?= $app->country_name ?>`',
                        value: '<?= $app->count ?>'
                },
            <?php
        }
    }
    ?>
        ]


                //DONUT CHART
                var donut = new Morris.Donut({
                element: 'sales-chart',
                        resize: true,
                        colors: colors,
                        data: data,
                        hideHover: 'auto'
                });

    </script>
    <?php
}
?>

