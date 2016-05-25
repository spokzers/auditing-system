<!DOCTYPE html>
<html lang="en">

<head>
    <title>Starter Template - Materialize</title>
    <!-- Compiled and minified CSS -->
    <link href="<?php echo base_url(); ?>static/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">
    <style type="text/css">
    .row {
        margin: 0px;
        padding: 0px;
    }
    
    body {
        font-weight: bold;
        color: #FF0000;
        overflow: hidden;
    }

    td{
        text-align: right;
    }
    </style>
</head>

<body>
    <div style="width:450px;height:220px;margin:10px;border:1px solid black;padding:10px;">
        <div style="width:270px;height:225px;float:left;">
            <div class="row" style="margin:0px;padding:0px;float:left;">
                <img style="margin: 0px;padding: 0px" src="<?php echo base_url(); ?>static/images/pdf_imgs/123logo.jpg" width="50px" height="50px" style="float: left;">
            </div>
            <div class="right" style="padding:0px;margin:0px:float:right;text-align:right">
                <h4 style="color:black">asdxce</h4></div>
            <div class="row">
                <table style="text-align:right;margin-top: 55px;">
                    <tr>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black;text-align: right">asdasd</td>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">
                            <?php echo $name; ?>
                        </td>
                    </tr>
                    <tr>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                    </tr>
                    <tr>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                        <td style="border:1px solid black;padding:0px;margin:0px;color:black">asdasd</td>
                    </tr>
                </table>
            </div>
            <div class="right" style="text-align: right">
                <div class="row">
                    <p style="padding: 0px;margin:0px;font-size: 10px;color:black">‫‪Y04-01-3-04/01‬‬</p>
                </div>
                <div class="row">
                    <img style="margin: 0px;padding: 0px" src="<?php echo base_url(); ?>static/images/pdf_imgs/logo1.png" width="50px">
                </div>
            </div>
            <div class="left">
                <img style="margin-top: 15px;padding: 0px" src="<?php echo base_url(); ?>static/images/pdf_imgs/Signature.png" width="75px">
                <p style="padding: 0px;margin:0px;color:black">Signature</p>
            </div>
        </div>
        <div style="width:150px;text-align:center;height:225px;float:right;">
            <center>
                <div style="border:1px solid black;width:140px;height:100;padding:5px">
                    <img src="<?php echo base_url(); ?>static/images/pdf_imgs/photo.png" width="100">
                </div>
                <h6><b style="color:black">acas</b></h6>
                <h6><b style="color:black">fac </b></h6>
                <h6><b style="color:black">somte</b></h6>
            </center>
        </div>
    </div>
</body>
<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/materialize.min.js"></script>

</html>
