<script type="text/javascript">
$(document).ready(function() {

    $('button#img').click(function() {
        $('button#img').removeClass('active');
        $('button#img').toggleClass('green grey');
        $(this).addClass('active');
        // $(this).toggleClass('green light-green');
    });

    $('button#vio').click(function() {
        $('button#vio').removeClass('active');
        $('button#vio').toggleClass('blue grey');
        $(this).addClass('active');
    });

    $('button#email').click(function() {
        $('button#email').removeClass('active');
        $('button#email').toggleClass('indigo grey');
        $(this).addClass('active');
    });



$('a#submit_report').click(function() {
        var img = $('button#img.active').attr('value');
        console.log("img: " + img);

        var vio = $('button#vio.active').attr('value');
        console.log("vio: " + vio);

        var email = $('button#email.active').attr('value');
        console.log("email: " + email);

        var audit_id = $(this).attr('data-audit-id');

        var data = {};

        data["img"] = img;
        data["vio"] = vio;
        data["email"] = email;

        console.log(data);

        var url = "<?php echo base_url(); ?>index.php/pdfdom/audit_report/" + audit_id + "?img=" + img +"&vio=" + vio + "&email=" + email;
        // var url = "<?php echo base_url(); ?>index.php/pdfdom/audit_report/" + audit_id;
        console.log("url: " + url);

        window.location = url;

        // $.post(url, data,
        //     function(url, status, data) {
        //         console.log("Data: " + jQuery.parseJSON(data) + "\nStatus: " + status);
        //     });
    });
});

</script>
