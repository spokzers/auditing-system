<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!-- Search start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>Search</h6>
                    <div class="divider"></div>
                </div>
                <div class="container" style="padding: 10px">
                    <div class="row" style="margin-top: 30px;">
                        <div class="col s2">
                            <p>Start Date</p>
                        </div>
                        <div class="col s2">
                            <input type="date" value="<?php echo date('Y-m-d', strtotime(" last month ")); ?>">
                        </div>
                        <div class="col s2">
                            <p>End Date</p>
                        </div>
                        <div class="col s2">
                            <input type="date" value="<?php echo date('Y-m-d', strtotime(" today ")); ?>">
                        </div>
                        <div class="col s2">
                            <button class="btn waves-effect">Search</button>
                        </div>
                        <div class="col s2"></div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search end -->
        <!-- start stats card -->
        <!--card stats start-->
        <div class="row">
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content red white-text">
                        <p class="card-stats-title center"><i class="mdi-social-group large"></i></p>
                        <h5 class="center">Workers Waiting</h5>
                    </div>
                    <div class="card-action red darken-2 white-text">
                        <h4 class="card-stats-number center"><?php echo $worker_waiting; ?></h4>
                    </div>
                </div>
            </div>
            <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content amber white-text">
                        <p class="card-stats-title center"><i class="mdi-social-group large"></i></p>
                        <h5 class="center">Workers Trained</h5>
                    </div>
                    <div class="card-action amber darken-2 white-text">
                        <h4 class="card-stats-number center"><?php echo $worker_trained ?></h4>
                    </div>
                </div>
            </div>
             <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content green white-text">
                        <p class="card-stats-title center"><i class="mdi-action-stars large"></i></p>
                        <h5 class="center">Star Rating</h5>
                    </div>
                    <div class="card-action green darken-2 white-text">
                        <h4 class="card-stats-number center"><?php 
                        $rate = [];
                        if(count($star) >= 3){
                            $fa = count($star);
                            // echo "<h2>$fa</h2>";

                        foreach ($star as $s) {
                              $rate[$s->rank]=0;
                        }
                        foreach ($star as $s) {
                              $rate[$s->rank]=$rate[$s->rank] + 1;
                        }

                        
                            if($rate[1] >= 3){
                            echo "5 Star";
                        }elseif ($rate[1] == 2) {
                            echo "4 Star";
                        }elseif ($rate[1] == 1) {
                            echo "3 Star";
                        }elseif ($rate[2] >= 3) {
                            echo "2 Star";
                        }else{
                            echo "1 Star";
                        }    
                        
                        }else{
                            echo "N/A";

                        }
                        
                        ?></h4>
                    </div>
                </div>
            </div>

           
        </div>

        <div class="row">
            
             <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content light-blue white-text">
                        <p class="card-stats-title center"><i class="mdi-action-assessment large"></i></p>
                        <h5 class="center">Site Ranking</h5>
                    </div>
                    <div class="card-action light-blue darken-2 white-text">
                        <h4 class="card-stats-number center"><?php 
                        echo strtoupper(get_site_rank($rank[0]->rank)) . "</h4>";
                        ?>
                    </div>
                </div>
            </div>

             <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content cyan white-text">
                        <p class="card-stats-title center"><i class="mdi-action-receipt large"></i></p>
                        <h5 class="center">Site Result</h5>
                    </div>
                    <div class="card-action cyan darken-2 white-text">
                        <h5 class="card-stats-number center"><?php 
                        $temp_result = '';
                        if(strtoupper(get_site_rank($rank[0]->rank)) == 'A'){
                            $temp_result = "Passed With High Compliance";
                        }if(strtoupper(get_site_rank($rank[0]->rank)) == 'B'){
                            $temp_result = "Passed With Satisfactory Compliance";
                        }if(strtoupper(get_site_rank($rank[0]->rank)) == 'C'){
                            $temp_result = "Passed With Needs Improvement";
                        }if(strtoupper(get_site_rank($rank[0]->rank)) == 'D'){
                            $temp_result = "Failed";
                        }

                        echo $temp_result . "</h5>";
                        ?>
                    </div>
                </div>
            </div>

             <div class="col s12 m4 l4">
                <div class="card">
                    <div class="card-content teal white-text">
                        <p class="card-stats-title center"><i class="mdi-action-home large"></i></p>
                        <h5 class="center">Facility Size</h5>
                    </div>
                    <div class="card-action teal darken-2 white-text">
                        <h4 class="card-stats-number center"><?php 
                     

                        echo $facility->space . "</h4>";
                        ?>
                    </div>
                </div>
            </div>
        </div>

        <!--card stats end-->
        <!-- Compliance VS Non Compliance start -->
        <!-- <div class="card-panel">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h6>Compliance VS Non Compliance</h6>
                        <div class="divider"></div>
                    </div>
                    <div class="container">
                        
                    </div>
                </div>
            </div> -->
        <!-- Compliance VS Non Compliance end -->
        <!-- Major Issues Graph start -->
        <!-- <div class="card-panel">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h6>Major Issues Graph</h6>
                        <div class="divider"></div>
                    </div>
                    <div class="container">
                        
                    </div>
                </div>
            </div> -->
        <!-- Major Issues Graph end -->
        <!-- Disposals Summary start -->
        <!-- <div class="card-panel">
                <div class="row">
                    <div class="col s12 m12 l12">
                        <h6 class="trn" data-trn-key="Disposal Information">Disposals Summary</h6>
                        <div class="divider"></div>
                    </div>
                    <div class="container">
                        <div id="disposals_summary_stacked_chart"></div>
                    </div>
                </div>
            </div> -->
        <!-- Disposals Summary end -->
        <!-- Status History start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6 class="left">Status History</h6>
                    <!-- <button class="btn waves-effect right">Update Status</button> -->
                </div>
                <div class="row">
                    <div class="col s12">
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="container" class="table-responsive">
                    <div class="row">
                        <table class="striped">
                            <tr>
                                <th>ID</th>
                                <th>Inspector</th>
                                <th>Status</th>
                                <th>Inspection Type</th>
                                <!-- <th>Template</th> -->
                                <th>Audit Date</th>
                            <!--     <th>Started At</th>
                                <th>Ended At</th> -->
                                <th>Site Ranking</th>
                                <th>Audit Details</th>
                            </tr>
                            <?php
                                    foreach ($audits as $audit) {
                                        echo "<tr>";
                                            echo "<td>$audit->id</td>";
                                            $insp = "";
                                            foreach ($inspectors as $inspector) {
                                                if ($inspector->id == $audit->id_inspector) {
                                                    $insp = $inspector->name;
                                                }
                                            }
                                            echo "<td>". $insp ."</td>";
                                            if ($audit->status == 1) {
                                                $status = "Scheduled";
                                            }
                                            elseif ($audit->status == 2) {
                                                $status = "Completed";
                                            }
                                            else {
                                                $status = "Undefined";
                                            }
                                            echo "<td>". $status ."</td>";
                                            echo "<td>". get_section_text($audit->section) ."</td>";
                                            $temp = "";
                                            foreach ($templates as $template) {
                                                if ($template->id == $audit->id_templates) {
                                                    $temp = $template->title;
                                                }
                                            }
                                            // echo "<td>". $temp ."</td>";
                                            echo "<td>$audit->doa</td>";
                                            // echo "<td>$audit->started_at</td>";
                                            // echo "<td>$audit->ended_at</td>";
                                            echo "<td>". get_site_rank($audit->rank) ."</td>";
                                            $report_url = base_url()."index.php/pdfdom/audit_report/".$audit->id;
                                            $disposal_url = base_url()."index.php/pdfdom/disposal_report/".$audit->id;
                                            $temp_url = base_url()."index.php/audit/audit_launch/".$audit->id;
                                            // echo "<td><button class='btn btn-floating'></button></td>";
                                            echo "<td>";
                                            echo "<a href='$disposal_url' class='modal-trigger btn indigo btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Disposals Report'><i class='mdi-action-assignment'></i></a>";
                                            if($audit->status == 2){
                                                echo "<a href='#$audit->id' class='modal-trigger btn green btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Audit Report'><i class='mdi-action-assignment'></i></a>";
                                                // echo"<a href='#$audit->id' class='modal-trigger'><button class='btn btn-floating small green'><i class='mdi-action-assignment'></i>View Report</button></a>";
                                    // <!-- Modal Structure -->
                                     echo '<div id='.$audit->id.' class="modal modal-fixed-footer" style="width:33%;height:50%">
                                        <div class="white-text teal center" style="top:0;border-bottom: 1px solid rgba(0, 0, 0, 0.1);padding:10px;">
                                            <p style="font-weight: 300;">Audit Report Options</p>
                                        </div>
                                        <div class="modal-content">
                                            <div class="row" style="margin-bottom:5px">
                                                <div class="col s12">
                                                    <button id="img" value="0" style="width:50%" class="active btn green left">Without Images</button>
                                                    <button id="img" value="1" style="width:50%" class="btn grey">With Images</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s12" style="margin-bottom:15px">
                                                    <button id="vio" value="0" style="width:50%" class="active btn blue left">Violations Only</button>
                                                    <button id="vio" value="1" style="width:50%" class="btn grey">Complete</button>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col s6">
                                                    <p>Send Email to Client</p>
                                                </div>
                                                <div class="col s6">
                                                    <button id="email" value="1" style="width:50%" class="active btn indigo left">Yes</button>
                                                    <button id="email" value="0" style="width:50%" class="btn grey">No</button>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="modal-footer">
                                             <a href="#!" id="submit_report" data-audit-id="'.$audit->id.'" class="waves-effect white-text blue btn-flat modal-action">Submit</a>
                                             <a href="#!" style="margin-left:5px;" class="waves-effect white-text amber btn-flat modal-action modal-close">Close</a>
                                         </div>
                                       </div></td>';
                                            }else{
                                                echo"<a href='$temp_url' class='btn btn-floating small amber tooltipped' data-position='bottom' data-delay='50' data-tooltip='Launch'><i class='mdi-action-assignment'></i></a>";
                                            }
                                        echo "</tr>";
                                    }
                                ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Status History end -->
        <!-- Facility Details start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <a class="btn waves-effect green" href="<?php echo base_url(); ?>index.php/facility">View All</a>
                    <a class="btn waves-effect blue" href="<?php echo base_url(); ?>index.php/facility/edit/<?php echo $facility->id; ?>">Edit</a>
                    <!-- <button class="btn waves-effect right">Update Status</button> -->
                </div>
                <div class="row">
                    <div class="col s12"  style="margin-top:10px;">
                        <div class="divider"></div>
                    </div>
                </div>
                <div class="container">
                    <table class="striped">
                        <tr>
                            <td>Facility ID</td>
                            <td><?php echo $facility->id; ?></td>
                        </tr>
                        <tr>
                            <td>Centre ID</td>
                            <td><?php echo $facility->id_centre; ?></td>
                        </tr>
                        <tr>
                            <td>Commercial Registration Number</td>
                            <td><?php echo $facility->crn; ?></td>
                        </tr>
                        <tr>
                            <td>Liscence Number</td>
                            <td><?php echo $facility->license; ?></td>
                        </tr>
                        <tr>
                            <td>Owner Name</td>
                            <td><?php echo $facility->owner; ?></td>
                        </tr>
                        <tr>
                            <td>National ID no.</td>
                            <td><?php echo $facility->nic; ?></td>
                        </tr>
                        <tr>
                            <td>Business Activity</td>
                            <td><?php echo $facility->activity; ?></td>
                        </tr>
                        <tr>
                            <td>Date of Issue</td>
                            <td><?php echo $facility->issue_date; ?></td>
                        </tr>
                        <tr>
                            <td>Validity</td>
                            <td><?php echo $facility->validity; ?></td>
                        </tr>
                        <tr>
                            <td>Location</td>
                            <td><?php echo $facility->location; ?></td>
                        </tr>
                        <tr>
                            <td>GPS Location</td>
                            <td><?php echo $facility->gps; ?></td>
                        </tr>
                        <tr>
                            <td>Contract Number</td>
                            <td><?php echo $facility->contract; ?></td>
                        </tr>
                        <tr>
                            <td>Telephone</td>
                            <td><?php echo $facility->telephone; ?></td>
                        </tr>
                        <tr>
                            <td>Fax</td>
                            <td><?php echo $facility->fax; ?></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><?php echo $facility->email; ?></td>
                        </tr>
                        <tr>
                            <td>Cell</td>
                            <td><?php echo $facility->cell_no; ?></td>
                        </tr>
                        <tr>
                            <td>Street</td>
                            <td><?php echo $facility->street; ?></td>
                        </tr>
                        <tr>
                            <td>Space</td>
                            <td><?php echo $facility->space; ?></td>
                        </tr>
                        <tr>
                            <td>Shop Number</td>
                            <td><?php echo $facility->shop_no; ?></td>
                        </tr>
                        <tr>
                            <td>Num of Employees</td>
                            <td><?php echo $facility->workers; ?></td>
                        </tr>
                        <tr>
                            <td>Manager Name</td>
                            <td><?php echo $facility->manager_name; ?></td>
                        </tr>
                        <tr>
                            <td>Manager ID</td>
                            <td><?php echo $facility->manager_id; ?></td>
                        </tr>
                        <tr>
                            <td>Manager Cell</td>
                            <td><?php echo $facility->manager_cell; ?></td>
                        </tr>
                        <tr>
                            <td>Audit Frequency</td>
                            <td><?php echo $facility->audits_per_month; ?></td>
                        </tr>
                        <tr>
                            <td>Created At</td>
                            <td><?php echo date('Y-m-d H:i:s', strtotime('-1 now')); ?></td>
                        </tr>
                        <tr>
                            <td>Updated At</td>
                            <td><?php echo date('Y-m-d H:i:s', strtotime('now')); ?></td>
                        </tr>
                    </table>
                    <div class="col s12">
                        <a class="btn waves-effect green" href="<?php echo base_url(); ?>index.php/facility">View All</a>
                    <a class="btn waves-effect blue" href="<?php echo base_url(); ?>index.php/facility/edit/<?php echo $facility->id; ?>">Edit</a>
                    
                    </div>
                </div>
            </div>
        </div>
        <!-- Facility Details end -->
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
