<script type="text/javascript">
// Toast Notification
$(window).load(function() {
setTimeout(function() {
  Materialize.toast('<span><?php echo $notification; ?></span>', <?php echo $delay; ?>);
}, 3000);
});
</script>
