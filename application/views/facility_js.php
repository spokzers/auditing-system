<script type="text/javascript">
  $(document).ready(function() {


Morris.Donut({
  element: 'audit-status',
  data: [{
      label: "Not Given",
      value: <?php echo $pass_not;?>
  }, {
      label: "Passed With High Complaince",
      value: <?php echo $pass_high;?>
  }, {
      label: "Passed With Satisfactory Complaince",
      value: <?php echo $pass_satis;?>
  }, {
      label: "Passed With Needs Improvement",
      value: <?php echo $pass_imp;?>
  }, {
      label: "Fail",
      value: <?php echo $pass_fail;?>
  }]
});

});
</script>
