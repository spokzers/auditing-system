<script type="text/javascript">
$(document).ready(function() {
Morris.Donut({
  element: 'overall-violation',
  data: [{
      label: "Low",
      value: <?php echo $all_violations_low; ?>
  }, {
      label: "Medium",
      value: <?php echo $all_violations_med; ?>
  }, {
      label: "High",
      value: <?php echo $all_violations_high; ?>
  }]
});

Morris.Donut({
  element: 'donut-example1',
  data: [{
      label: "Low",
      value: <?php echo $en_violations_low;?>
  }, {
      label: "Medium",
      value: <?php echo $en_violations_med;?>
  }, {
      label: "High",
      value: <?php echo $en_violations_high;?>
  }]
});

Morris.Donut({
  element: 'donut-example2',
  data: [{
      label: "Low",
      value: <?php echo $mk_violations_low;?>
  }, {
      label: "Medium",
      value: <?php echo $mk_violations_med;?>
  }, {
      label: "High",
      value: <?php echo $mk_violations_high;?>
  }]
});

Morris.Donut({
  element: 'donut-example3',
  data: [{
      label: "Low",
      value: 12
  }, {
      label: "Medium",
      value: 30
  }, {
      label: "High",
      value: 20
  }]
});

Morris.Donut({
  element: 'donut-example4',
  data: [{
      label: "Low",
      value: 12
  }, {
      label: "Medium",
      value: 30
  }, {
      label: "High",
      value: 20
  }]
});

Morris.Donut({
  element: 'license-status',
  data: [{
      label: "Never Issued",
      value: 12
  }, {
      label: "Expired",
      value: 30
  }, {
      label: "Expiring This Month",
      value: 20
  }]
});

Morris.Donut({
  element: 'facility-result',

  data: [{
      label: "Pass",
      value: <?php echo $passed_audits; ?>
  }, {
      label: "Closure and office hearing",
      value: <?php echo $closure_office_audits; ?>
  }, {
      label: "Suspension",
      value: <?php echo $suspension_audits; ?>
  }, {
      label: "Warning",
      value: <?php echo $warning_audits; ?>
  }, {
      label: "Suspension and office hearing",
      value: <?php echo $sus_office_audits; ?>
  }, {
      label: "Office Hearing",
      value: <?php echo $office_audits; ?>
  }, {
      label: "Closure",
      value: <?php echo $closure_audits; ?>
  }, {
      label: "Warning and office hearing",
      value: <?php echo $warn_office_audits; ?>
  }]
});

Morris.Donut({
  element: 'audit-result',
  data: [{
      label: "Audit on time",
      value: <?php echo $time_audits; ?>
  }, {
      label: "Audits Pending",
      value: <?php echo $pending_audits; ?>
  }, {
      label: "Audit Delayed",
      value: <?php echo ($total_audits-$pending_audits); ?>
  }]
});

});
</script>
