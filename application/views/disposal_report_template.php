<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
    "http://www.w3.org/TR/html4/loose.dtd">
<html>

<head>
    <title>Audit Report</title>
    <style type="text/css">
    table {
        border: 1px solid black;
        border-collapse: collapse;
        table-layout: fixed;
        width: 100%;
    }
    
    th,
    tr {
        border: 1px solid black;
        border-collapse: collapse;
        table-layout: fixed;
    }
    
    td {
        border: 1px solid black;
        border-collapse: collapse;
        table-layout: fixed;
    }
    
    th,
    td {
        padding: 5px;
    }
    
    .bg-orange {
        background-color: orange;
    }
    
    .bg-grey {
        background-color: #bbb;
    }
    
    .color-brown {
        color: #762C00;
    }
    
    .cell1 {
        width: 5%;
    }
    
    .cell2 {
        width: 50%;
    }
    
    .cell3 {
        width: 10%;
    }
    
    .cell4 {
        width: 10%;
    }
    
    .cell5 {
        width: 25%;
    }
    /*@font-face {
                      font-family: 'dejavu sans', 'sans-serif';
                      font-style: normal;
                      font-weight: normal;
                }*/
    
    body {
        font-family: "DejaVu Sans";
        font-size: 10px;
    }
    
    @page {
        margin: 120px 50px;
    }
    
    #header {
        position: fixed;
        left: 0px;
        top: -110px;
        right: 0px;
        /*height: 50px;*/
        /*background-color: orange;*/
        /*text-align: center;*/
    }
    
    #footer {
        position: fixed;
        /*left: 0px;*/
        bottom: -110px;
        /*right: 0px;*/
        height: 50px;
        /*background-color: lightblue;*/
    }
    
    #footer .page:after {
        /*content: counter(page, upper-roman);*/
    }
    </style>
</head>

<body>
    <!-- <div id="header">
        <img width="120px" style="float: left;" src="<?php echo base_url(); ?>static/images/logo.png" alt="Logo">
        <img width="350px" style="float: right" src="<?php echo base_url(); ?>static/images/pdf_imgs/header.jpg" alt="Logo2">
    </div> -->
    <!-- <div id="footer">
        <table style="text-align: center">
            <tr>
                <td class="bg-orange">EPIC Address</td>
                <td colspan="3">Salah uddin Ayubi Road, Malaz, Riyadh, Kingdom of Saudi Arabia.</td>
            </tr>
        </table>
    </div> -->
    <table style="width:100%; padding: 5px;">
        <tr>
            <td style="border: 1px solid black;border-collapse: collapse;" class="bg-orange">
                <?php echo get_section_text($audit->section); ?>
            </td>
            <td style="border: 1px solid black;border-collapse: collapse;" class="bg-orange">Audit ID:
                <?php echo $audit->id; ?>
            </td>
            <td style="border: 1px solid black;border-collapse: collapse;" colspan="2">
                <?php echo date("d/m/Y H:i"); ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-collapse: collapse;">Inspection Date</td>
            <td style="border: 1px solid black;border-collapse: collapse;" colspan="3">
                <?php echo $audit->doa; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-collapse: collapse;">Inspection Start Time</td>
            <td style="border: 1px solid black;border-collapse: collapse;">
                <?php echo $audit->started_at; ?>
            </td>
            <td style="border: 1px solid black;border-collapse: collapse;">Inspection End Time</td>
            <td style="border: 1px solid black;border-collapse: collapse;">
                <?php echo $audit->ended_at; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black;border-collapse: collapse;">Inspection Duration</td>
            <?php $started_at = strtotime($audit->started_at); ?>
            <?php $ended_at = strtotime($audit->ended_at); ?>
            <td style="border: 1px solid black;border-collapse: collapse;">
                <?php echo getNiceDuration($ended_at - $started_at); ?>
            </td>
            <td style="border: 1px solid black;border-collapse: collapse;">Reason</td>
            <td style="border: 1px solid black;border-collapse: collapse;">
                <?php $reas = get_audit_reason($audit->reason); echo $reas; ?>
            </td>
        </tr>
    </table>
    <h1 style="text-align:center" class="color-brown">‫‪Disposal‬‬ ‫‪Approvals‬‬ ‫‪Summary‬‬ ‫‪Report‬‬</h1>
    <h4 class="color-brown">Business Details</h4>
    <table style="width:100%;padding: 5px;">
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Facility Name</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->name; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Liscence Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->license; ?>
            </td>
        </tr>
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Owner Name</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->owner; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Business Activity</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->activity; ?>
            </td>
        </tr>
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Date of Issue</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->issue_date; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Validity</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->validity; ?>
            </td>
        </tr>
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Contract Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->contract; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Location</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->location; ?>
            </td>
        </tr>
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Shop Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->shop_no; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Size</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo  ($facility->space == "" ?  "0.00" :  $facility->space); ?> sq. ft.</td>
        </tr>
        <tr>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Manager Cell</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->manager_cell; ?>
            </td>
            <td class="bg-grey" style="border: 1px solid black; border-collapse:collapse;">Telephone</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->telephone; ?>
            </td>
        </tr>
    </table>


<!-- Disposals start -->
        <h4 class="color-brown" style="font-size:14px">DISPOSAL DETAILS</h4>


            <table width="100%" style="table-layout: auto;border: 1px solid black;border-collapse: collapse;padding: 5px;">
                <thead>
                    <tr class="bg-grey" style="text-align:center;vertical-align:middle;">
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell1">S/N</td>
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;">Storage Type</td>
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;">Category</td>
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;width:27%">Description</td>
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;">Quantity</td>
                        <td style="border: 1px solid black;border-collapse: collapse;padding:5px;">Reason</td>
                    </tr>
                </thead>

                <?php
                    $count = 1;
                foreach ($disposals as $disposal){

                    $storage_type = storage_types();
                    $disp_reason = disposal_reason();
                    $disp_category = disposal_categories();

                    echo "<tr>";
                        echo '<td class="cell1" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $count . '</td>';
                        echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $storage_type[$disposal->storage] . '</td>';
                        echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;text-align:center;valign:middle;">'. $disp_category[$disposal->category] .'</td>';
                        echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;width:27%">' . $disposal->description . '</td>';
                        echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;text-align:center;valign:middle;">' . $disposal->qty . '</td>';
                        echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $disp_reason[$disposal->reason] . '</td>';
                    echo "</tr>";

                    $count++;
                }
                ?>
            </table>
<!-- Disposals end -->

<br>
<br>
<br>
<table width="65%" style="table-layout: auto;border:none;padding: 10px;">
    <tr>
        <td style="border: none;padding:10px;">Contact Person</td>
        <td style="border: none;padding:10px;">______________________________</td>
    </tr>
    <tr>
        <td style="border: none;padding:10px;">ID Number</td>
        <td style="border: none;padding:10px;">______________________________</td>
    </tr>
    <tr>
        <td style="border: none;padding:10px;">Signatures</td>
        <td style="border: none;padding:10px;">______________________________</td>
    </tr>
</table>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<table width="100%" style="table-layout: auto;border:none;padding: 15px;text-align:center;">
    <tr>
        <td style="border: none;margin-bottom:20px;">Director</td>
        <td style="border: none;margin-bottom:20px;"></td>
    </tr>
    <tr>
        <td style="border: none;padding:5px;">______________________________</td>
        <td style="border: none;padding:5px;">______________________________</td>
    </tr>
    <tr>
        <td style="border: none;padding:5px;">Signature</td>
        <td style="border: none;padding:5px;">Signature</td>
    </tr>
</table>

</body>

</html>
