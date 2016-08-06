<script type="text/javascript" src="<?php echo base_url();?>static/js/qrcode.min.js"></script>
<script type="text/javascript">
var obj = new QRCode(document.getElementById("qrcode"), "<?php echo $qr_text;?>");
console.log(obj._oDrawing._elImage.currentSrc);
// alert($('#qrcode').find('img').attr('src'));
</script>