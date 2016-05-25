<html>

<head>
    <title>Audit Report</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
    table,
    th,
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

    #cell1 {
        width: 5%;
    }

    #cell2 {
        width: 53%;
    }

    #cell3 {
        width: 5%;
    }

    #cell4 {
        width: 7%;
    }

    #cell5 {
        width: 30%;
    }
    /*@font-face {
                  font-family: 'dejavu sans', 'sans-serif';
                  font-style: normal;
                  font-weight: normal;
            }*/

    body {
        font-family: DejaVu Sans;
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
        height: 140px;
        /*background-color: lightblue;*/
    }

    #footer .page:after {
        /*content: counter(page, upper-roman);*/
    }
    </style>
</head>

<body>
    <div id="header">
        <img width="120px" style="float: left;" src="<?php echo base_url(); ?>static/images/logo.png">
        <img width="350px" style="float: right" src="<?php echo base_url(); ?>static/images/pdf_imgs/header.jpg">
    </div>
    <div id="footer">
        <table style="border:none" width="100%">
            <tr>
                <td style="border:none">‫الاحمدي‬ ‫منصور‬ ‫عبداالله‬</td>
                <td style="border:none;text-align: right" colspan="2"><img width="70px" src="<?php echo base_url(); ?>static/images/pdf_imgs/Signature.png"></td>
            </tr>
            <tr>
                <td style="border:none">Inspector's Signature</td>
                <td style="border:none;text-align: right" colspan="2">Signature</td>
            </tr>
        </table>
        <table style="width:100%;text-align: right">
            <tr>
                <td>‫رقم‪:‬‬ ‫وثيقة‬ RCJY/FRM/H/1829 </td>
                <td colspan="2">‫بينبع‬ ‫الملكية‬ ‫بالهيئة‬ ‫الاملاك‬ ‫ادارة‬ ‫–‬ ‫الميدانية‬ ‫للرقابة‬ ‫الالكتروني‬ ‫®‬ ‫راصد‬ ‫برنامج‬ ‫من‬ ‫اليا‬ ‫تصدر‬ ‫رسمية‬ ‫وثيقة‬ ‫التفتيش‬ ‫تقرير‬</td>
            </tr>
            <tr>
                <td>‫‪الطباعة‬ ‫اريخ‬ 2016-May-23 </td>
                <td>
                    <div style="text-align: left;display:inline;">ISO: Y04-01-03-03/01</div>
                    <div style="text-align: right;display:inline;">1.0 :‬ الاصدار</div>
                </td>
                <td>‫‪2‬‬ ‫من‬ ‫‪2‬‬ ‫‪:‬‬ ‫الصفحة‬ ‫رقم‬</td>
            </tr>
        </table>
    </div>
    <table style="width:100%">
        <tr>
            <td class="bg-orange"><?php echo get_section_text($audit->section); ?></td>
            <td class="bg-orange">Audit ID:    <?php echo $audit->id; ?></td>
            <td colspan="2"><?php echo date("d/m/Y H:i"); ?></td>
        </tr>
        <tr>
            <td>Inspection Date</td>
            <td colspan="3"><?php echo $audit->doa; ?></td>
        </tr>
        <tr>
            <td>Inspection Start Time</td>
            <td><?php echo $audit->started_at; ?></td>
            <td>Inspection End Time</td>
            <td><?php echo $audit->ended_at; ?></td>
        </tr>
        <tr>
            <td>Inspection Duration</td>
            <?php $started_at = strtotime($audit->started_at); ?>
            <?php $ended_at = strtotime($audit->ended_at); ?>
            <td><?php echo getNiceDuration($ended_at-$started_at); ?></td>
            <td>Reason</td>
            <td><?php $reas = get_audit_reason($audit->reason); echo $reas; ?></td>
        </tr>
    </table>
    <h3 class="color-brown">1. Business Details</h3>
    <table style="width:100%">
        <tr>
            <td>Facility Name</td>
            <td><?php echo $facility->name; ?></td>
            <td>Liscence Number</td>
            <td><?php echo $facility->license; ?></td>
        </tr>
        <tr>
            <td>Owner Name</td>
            <td><?php echo $facility->owner; ?></td>
            <td>Business Activity</td>
            <td><?php echo $facility->activity; ?></td>
        </tr>
        <tr>
            <td>Date of Issue</td>
            <td><?php echo $facility->issue_date; ?></td>
            <td>Validity</td>
            <td><?php echo $facility->validity; ?></td>
        </tr>
        <tr>
            <td>Contract Number</td>
            <td><?php echo $facility->contract; ?></td>
            <td>Location</td>
            <td><?php echo $facility->location; ?></td>
        </tr>
        <tr>
            <td>Shop Number</td>
            <td><?php echo $facility->shop_no; ?></td>
            <td>Size</td>
            <td><?php echo  ($facility->space == "" ?  "0.00" :  $facility->space); ?> sq. ft.</td>
        </tr>
        <tr>
            <td>Manager Cell</td>
            <td><?php echo $facility->manager_cell; ?></td>
            <td>Telephone</td>
            <td><?php echo $facility->telephone; ?></td>
        </tr>
    </table>
    <?php
        for ($i=0; $i < sizeof($categories) ; $i++) {
            $num = $i+1;
            echo "<h3 class='color-brown'>$num  $categories[$i]</h3>";


            echo "<table width='100%' style='table-layout: auto' style='mod-table'>";
                echo "<thead class='bg-grey'>";
                    echo "<td id='cell1'>S/N</td>";
                    echo "<td id='cell2'>Criteria Description</td>";
                    echo "<td id='cell3'>Auditor Choice</td>";
                    echo "<td id='cell4'>Fine Amount</td>";
                    echo "<td id='cell5'>Remarks</td>";
                echo "</thead>";
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
                        echo "<td>$count</td>";
                        echo "<td>$question->statement</td>";
                        echo "<td>$ans</td>";
                        echo "<td>$pnlty</td>";
                        echo "<td>$remark</td>";
                    echo "</tr>";
                    $count++;

                }
            }
            echo "</table>";

        }
    ?>


    <br>
    <table width="100%">
        <tr class="bg-orange">
            <td colspan="4">Inspection Summary</td>
        </tr>
        <tr>
            <td class="bg-grey">Total Number of Inspections</td>
            <td><?php echo $number_of_audits; ?></td>
            <td class="bg-grey">Total Penalty</td>
            <td><?php echo $audit->penalty ?></td>
        </tr>
        <tr>
            <td class="bg-grey">Site Score</td>
            <?php
                echo "<td>$audit->marks_obtained/$audit->total_marks</td>";
            ?>
            <td class="bg-grey">Penalty Payment Deadline</td>
            <td><?php echo $audit->penalty_deadline; ?></td>
        </tr>
        <tr>
            <td class="bg-grey">Site Status After Inspection</td>
            <td><?php echo $audit->status; ?></td>
            <td class="bg-grey">Site Ranking</td>
            <td><?php echo get_site_rank($audit->rank); ?></td>
        </tr>
        <tr>
            <td class="bg-grey">Final Remarks</td>
            <td colspan="3"></td>
        </tr>
    </table>
    <br>
    <br>
    <br>

        <?php
        $asd = "asd";
            foreach ($violations as $violation) {
                // <img src="..." style="display: none" onload="this.style.display=''">
                // echo "<img onerror=\"this.style.display='none'\" src='".base_url()."uploads/violations/".$violation->id.".jpg' alt=''>";
                $image_path = "" . base_url()."uploads/violations/".$violation->id.".jpg";
                // echo "<p>$image_path</p>";
                // $img = getimagesize($image_path);
                if (is_array(@getimagesize($image_path))) {

                    echo "<div style='border:1px solid black;width:400px;padding:5px;margin:5px;'>";
                        // echo "<p>$violation->comments</p>";
                        echo "<img width='400px' src='".base_url()."uploads/violations/".$violation->id.".jpg' alt=''>";
                        echo "<p>$violation->comments</p>";
                    echo "</div>";
                }
            }
        ?>


</body>

</html>
