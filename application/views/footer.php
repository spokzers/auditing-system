
</div>
<!-- END WRAPPER -->
</div>
<!-- END MAIN -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
<!-- START FOOTER -->
<footer class="page-footer">
<div class="container">
</div>
<div class="footer-copyright">
  <div class="container">
      EPIC - Copyright © 2015 - All rights reserved.
      <!-- <span class="right"> Design and Developed by <a class="grey-text text-lighten-4">Dayem Siddiqui & Shamikh Shabbir</a></span> -->
  </div>
</div>
</footer>
<!-- END FOOTER -->
<!-- ================================================
Scripts
================================================ -->

<!-- jQuery Translate Library -->
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/materialize.min.js"></script>
<!--scrollbar-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/chartist-js/chartist.min.js"></script>

<!--  
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/chartjs/chart.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/chartjs/chart-script.js"></script> 
-->
<!-- sparkline -->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/sparkline/jquery.sparkline.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/sparkline/sparkline-script.js"></script>
<!--jvectormap-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins/jvectormap/vectormap-script.js"></script>
<script src="http://cdn.oesmith.co.uk/morris-0.4.1.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>



<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery.translate.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/translate_main.js"></script>

<!-- Toast Notification -->
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script type="text/javascript">
  var input = $('.datepicker').pickadate({
		formatSubmit: 'yyyy/mm/dd',
		hiddenName: true,
		selectMonths: true, // Creates a dropdown to control month
		selectYears: 15 // Creates a dropdown of 15 years to control year
    });

  
//getting the current date
/*
var currentDate = new Date();
var twoDigitMonth = ((currentDate.getMonth() + 1) >= 10) ? (currentDate.getMonth() + 1) : '0' + (currentDate.getMonth() + 1);
var twoDigitDate = ((currentDate.getDate()) >= 10) ? (currentDate.getDate()) : '0' + (currentDate.getDate());
var createdDateTo = currentDate.getFullYear() + "-" + twoDigitMonth + "-" + twoDigitDate;
*/
// alert(createdDateTo);
// $("#start_date").val(createdDateTo);

$("#start_date_training").val('<?php echo date("Y-m-d", strtotime('next monday')); ?>');

</script>


<script type="text/javascript" src="<?php echo base_url(); ?>static/js/plugins.js"></script>



<!--plugins.js - Some Specific JS codes for Plugin Settings-->


</body>

</html>
