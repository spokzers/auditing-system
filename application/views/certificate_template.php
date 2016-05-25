<!DOCTYPE html>
<html lang="en">

<head>
    <title>Certificate</title>
    <link href="<?php echo base_url(); ?>static/css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection">

<style>
	p{
	color:black;
}
</style>
</head>

<body>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col s3">
                    <div class="row">
                        <img width="150px" src="<?php echo base_url(); ?>static/images/certificate/logo.png">
                    </div>
                    <div class="row"></div>
                    <div class="row">
                        <img width="150px" src="<?php echo base_url(); ?>static/images/certificate/highfield.jpg">
                    </div>
                    <div class="row">
                        <img width="150px" src="<?php echo base_url(); ?>static/images/certificate/institute.jpg">
                    </div>
                    <div class="row">
                        <img width="150px" src="<?php echo base_url(); ?>static/images/certificate/bottom_logo.png">
                    </div>
                    <div class="row">
                        <h6 style="color:black;">Iqama Number: <?php echo $worker->id_no; ?></h6>
                    </div>
                </div>
                <div class="col s9">
                    <h3 style="color:#67C5FF;">Certificate</h3>
                    <p>It is certified that</p>
                    <h3 style="color:#67C5FF;"><?php echo $name; ?></h3>
                    <p>Has attended and qualified the following training</p>
                    <h3 style="color:#67C5FF;">Training Level <?php echo $training->level; ?> food safety ward</h3>
                    <p>Held at MENA Company for Education and Development, Jizan, Kingdom of Saudi Arabia </p>
                    <p>Course Date: <?php echo $training->date; ?>
                        <br>Number of Weeks: <?php echo $training->weeks; ?>
                        <br>Course Language: <?php echo $training->language; ?></p>
                    <p>Course Number: TR000N10</p>
                    <p>This course ensures that formal training requirements are met for individuals seeking to understand the concepts of Food Safety</p>
                    <p style="font-size: small">Certificate issued by Effective Performance Integral Consultancy Limited Registered in England and Wales, Reg. No. 9316066 Registered Office: 50 Northbrook road, Ilford, Essex United Kingdom</p>

                    <h4 style="color:#67C5FF;">Course Manager: <?php echo $trainer[0]->name; ?></h4>
                </div>
            </div>
        </div>
    </div>
</body>
<!-- jQuery Library -->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/jquery-1.11.2.min.js"></script>
<!--materialize js-->
<script type="text/javascript" src="<?php echo base_url(); ?>static/js/materialize.min.js"></script>

</html>
