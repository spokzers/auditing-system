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
    <h3 class="color-brown">1. Business Details</h3>
    <table style="width:100%;padding: 5px;">
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Facility Name</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->name; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Liscence Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->license; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Owner Name</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->owner; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Business Activity</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->activity; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Date of Issue</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->issue_date; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Validity</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->validity; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Contract Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->contract; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Location</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->location; ?>
            </td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Shop Number</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->shop_no; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Size</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo  ($facility->space == "" ?  "0.00" :  $facility->space); ?> sq. ft.</td>
        </tr>
        <tr>
            <td style="border: 1px solid black; border-collapse:collapse;">Manager Cell</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->manager_cell; ?>
            </td>
            <td style="border: 1px solid black; border-collapse:collapse;">Telephone</td>
            <td style="border: 1px solid black; border-collapse:collapse;">
                <?php echo $facility->telephone; ?>
            </td>
        </tr>
    </table>
    <?php
        for ($i=0; $i < sizeof($categories) ; $i++) {
            $num = $i+1;
            echo '<h4 class="color-brown">'.$num.' '.  $categories[$i].'</h4>';


            echo '<table style="table-layout: auto;border: 1px solid black;border-collapse: collapse;padding: 5px;">';
                echo '<thead><tr class="bg-grey">';
                    echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell1">S/N</td>';
                    echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell2">Criteria Description</td>';
                    echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell3">Auditor Choice</td>';
                    echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell4">Fine Amount</td>';
                    echo '<td style="border: 1px solid black;border-collapse: collapse;padding:5px;" class="cell5">Remarks</td>';
                echo "</tr></thead>";
            $count = 1;
            foreach ($questions as $question) {
                $ans = "Yes";
                $pnlty = "-";
                $remark = "";
                if ($question->category == $categories[$i]){
                    foreach ($answers as $answer) {
                        if($answer->id_question==$question->id){
                            $ans = get_audit_answer($answer->answer);
                            break;
                        }
                    }

                    foreach ($violations as $violation) {
                        if ($violation->id_question==$question->id) {
                            $pnlty = $violation->penalty;
                            $remark = $violation->comments;
                        }
                    }
                    echo "<tr>";
                        echo '<td class="cell1" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $count . '</td>';
                        echo '<td class="cell2" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $question->statement . '</td>';
                        echo '<td class="cell3" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $ans . '</td>';
                        echo '<td class="cell4" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $pnlty . '</td>';
                        echo '<td class="cell5" style="border: 1px solid black;border-collapse: collapse;padding:5px;">' . $remark . '</td>';
                    echo "</tr>";
                    $count++;

                }
            }
            echo "</table>";

        }
    ?>
        <!-- <br> -->

        <h1></h1>
        <table style="width:100%;padding: 5px;">
            <tr class="bg-orange">
                <td style="border:1px solid black; border-collapse:collapse;" colspan="4">Inspection Summary</td>
            </tr>
            <tr>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Total Number of Inspections</td>
                <td style="border:1px solid black; border-collapse:collapse;">
                    <?php echo $number_of_audits; ?>
                </td>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Total Penalty</td>
                <td style="border:1px solid black; border-collapse:collapse;">
                    <?php echo $audit->penalty ?>
                </td>
            </tr>
            <tr>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Site Score</td>
                <?php
                echo "<td>$audit->marks_obtained/$audit->total_marks</td>";
            ?>
                    <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Penalty Payment Deadline</td>
                    <td style="border:1px solid black; border-collapse:collapse;">
                        <?php echo $audit->penalty_deadline; ?>
                    </td>
            </tr>
            <tr>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Site Status After Inspection</td>
                <td style="border:1px solid black; border-collapse:collapse;">
                    <?php

                switch (get_site_rank($audit->rank)) {
                    case 'A':
                        $s_status="Passed";
                        break;
                    case 'B':
                        $s_status="Needs Improvement";
                        break;
                    case 'C':
                        $s_status="Needs Improvement";
                        break;
                    case 'D':
                        $s_status="Fail";
                        break;
                    default:
                        $s_status = "";
                        break;
                }

                echo $s_status;

                 ?>
                </td>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Site Ranking</td>
                <td style="border:1px solid black; border-collapse:collapse;">
                    <?php echo get_site_rank($audit->rank); ?>
                </td>
            </tr>
            <tr>
                <td style="border:1px solid black; border-collapse:collapse;" class="bg-grey">Final Remarks</td>
                <td style="border:1px solid black; border-collapse:collapse;" colspan="3">
                    <?php echo $audit->remarks; ?>
                </td>
            </tr>
        </table>
        <br>
        <br>
        <br>
        <?php
            echo '<table width="100%"><tbody><tr>';
            $check = 1;
            $row_chk = 0;
            foreach ($violations as $violation) {
                $image_path = "" . base_url()."uploads/violations/".$violation->id.".jpg";
                if (is_array(@getimagesize($image_path))) {
                    if ( $row_chk>1 ) {
                        echo '<tr>';
                        $row_chk = 0;
                    }
                    echo '<td>';
                        echo '<img width="200px" src="'.$image_path.'" alt="">';
                        echo "<p>$violation->comments</p>";
                    echo "</td>";
                    $row_chk++;
                    if ( $row_chk>1 ) {
                        echo "</tr>";
                    }
                }
            }
            echo "</tbody></table>";
        ?>
</body>

</html>
