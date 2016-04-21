<!-- jSignature js -->
<script type="text/javascript" src="<?php echo base_url();?>static/js/jSignature.min.js"></script>
<script>
$(document).ready(function() {
$("#signature").jSignature()
});


function reset_signature() {
$("#signature").jSignature('reset');
}

function check_signature() {
return true;
}
</script>
</script>
