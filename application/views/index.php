<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--card stats start-->
        <div id="card-stats">
            <div class="row">
                <div class="col s6 m6 l3"  <?php if($this->crud->session_designation() == 6){
                echo "style='display:none;'";
                }?>>
                    <div class="card">
                        <div class="card-content  green white-text">
                            <p class="card-stats-title"><i class="mdi-social-person" style="font-size: 75px;"></i>
                                <br><span class='trn' data-trn-key="Inspectors" >Inspectors</span></p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $total_inspectors; ?></h4>
                        </div>
                        <div class="card-action green darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  teal accent-2 white-text">
                            <p class="card-stats-title"><i class="mdi-toggle-check-box" style="font-size: 75px;"></i>
                                <br>Total Audits</p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $total_audits; ?></h4>
                        </div>
                        <div class="card-action teal  darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  amber lighten-2 white-text">
                            <p class="card-stats-title"><i class="mdi-toggle-check-box" style="font-size: 75px;"></i>
                                <br>Completed Audits</p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $completed_audits; ?></h4>
                        </div>
                        <div class="card-action amber darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  teal accent-2 white-text">
                            <p class="card-stats-title"><i class="mdi-toggle-check-box" style="font-size: 75px;"></i>
                                <br>Pending Audits</p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $pending_audits; ?></h4>
                        </div>
                        <div class="card-action teal darken-1">
                        </div>
                    </div>
                </div>
            </div>
             
            <!-- Card Stats Second Row -->
            <div class="row" <?php if($this->crud->session_designation() == 2){
                echo "style='display:none;'";
                }?><?php if($this->crud->session_designation() == 6){
                echo "style='display:none;'";
                }?>>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  red white-text">
                            <p class="card-stats-title"><i class="mdi-social-group-add" style="font-size: 75px;"></i>
                                <br><span class='trn' data-trn-key='Workers Waiting'>Workers Trained</span> </p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $untrained_workers; ?></h4>
                        </div>
                        <div class="card-action red darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  lime white-text">
                            <p class="card-stats-title"><i class="mdi-social-group-add" style="font-size: 75px;"></i>
                                <br><span class='trn' data-trn-key='Workers Trained'>Workers Trained</span></p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $trained_workers; ?></h4>
                        </div>
                        <div class="card-action lime darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  blue white-text">
                            <p class="card-stats-title"><i class="mdi-social-group-add" style="font-size: 75px;"></i>
                                <br><span class='trn' data-trn-key='Total Workers'>Total Workers</span></p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $total_workers; ?></h4>
                        </div>
                        <div class="card-action blue darken-2">
                        </div>
                    </div>
                </div>
                <div class="col s6 m6 l3">
                    <div class="card">
                        <div class="card-content  pink   white-text">
                            <p class="card-stats-title"><i class="mdi-action-assignment" style="font-size: 75px;"></i>
                                <br><span class='trn' data-trn-key='Facilities'>Facilities</span></p>
                            <h5></h5>
                            <h4 class="card-stats-number"><?php echo $total_facilities; ?></h4>
                        </div>
                        <div class="card-action pink darken-2">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card stats end-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!--card widgets start-->
        <div id="card-widgets">
            <div class="row" <?php if($this->crud->session_designation() == 2){
                echo "style='display:none;'";
                }?><?php if($this->crud->session_designation() == 6){
                echo "style='display:none;'";
                }?>>
                <h4 class="header trn"  data-trn-key="Violations Summary (Based on Inspection Results by Severity)"  style="padding-left:20px;">Violations Summary (Based on Inspection Results by Severity)</h4>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action blue">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="Overall" >Overall</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="overall-violation"></div>
                            <div class="center">
                                <ul>
                                    <liclass='trn' data-trn-key="High">High: <?php echo $all_violations_high; ?></li>
                                    <li><span class='trn' data-trn-key="Medium" >Medium</span>: <?php echo $all_violations_med; ?></li>
                                    <li><span class='trn' data-trn-key="Low" >Low</span>: <?php echo $all_violations_low; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action amber">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="Environmental & Health Inspections" >Environmental & Health Inspections</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="donut-example1"></div>
                            <div class="center">
                                <ul>
                                    <li><span class='trn' data-trn-key="High" >High</span>: <?php echo $en_violations_high;?></li>
                                    <li><span class='trn' data-trn-key="Low" >Low</span>: <?php echo $en_violations_low;?></li>
                                    <li><span class='trn' data-trn-key="Medium" >Medium</span>: <?php echo $en_violations_med;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action red">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="Market Control Inspections" >Market Control Inspections</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="donut-example2"></div>
                            <div class="center">
                                <ul>
                                    <li><span class='trn' data-trn-key="High" >High</span>: <?php echo $mk_violations_high;?></li>
                                    <li><span class='trn' data-trn-key="Low" >Low</span>: <?php echo $mk_violations_low;?></li>
                                    <li><span class='trn' data-trn-key="Medium" >Medium</span>: <?php echo $mk_violations_med;?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="row" <?php if($this->crud->session_designation() == 2){
                echo "style='display:none;'";
                }?><?php if($this->crud->session_designation() == 6){
                echo "style='display:none;'";
                }?>>
                <h4 class="header" style="padding-left:20px;"> Violations Summary (Based on Penalty Amounts)</h4>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action blue">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="Overall" >Overall</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="donut-example3"></div>
                            <div class="center">
                                <ul>
                                    <li><span class='trn' data-trn-key="High" >High</span>: 60</li>
                                    <li><span class='trn' data-trn-key="Low" >Low</span>: 60</li>
                                    <li><span class='trn' data-trn-key="Medium" >Medium</span>: 60</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action amber">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="Environmental & Health Inspections" >Environmental & Health Inspections</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="donut-example4"></div>
                            <div class="center">
                                <ul>
                                    <li><span class='trn' data-trn-key="High" >High</span>: 60</li>
                                    <li><span class='trn' data-trn-key="Low" >Low</span>: 60</li>
                                    <li><span class='trn' data-trn-key="Medium" >Medium</span>: 60</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l4">
                    <div class="card">
                        <div class="card-action amber">
                            <div class="card-title">
                                <h5><span class='trn' data-trn-key="License Status graph" >License Status graph</span></h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="license-status"></div>
                            <div class="center">
                                <ul>
                                    <li>Never Issued: 60</li>
                                    <li>Expired: 60</li>
                                    <li>Expiring this month: 60</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row">
                <h4 class="header" style="padding-left:20px;"> Audit And Facilities Result</h4>
                <div class="col s12 m12 l6" <?php if($this->crud->session_designation() == 6){
                echo "style='display:none;'";
                }?><?php if($this->crud->session_designation() == 2){
                echo "style='display:none;'";
                }?>>
                    <div class="card">
                        <div class="card-action blue">
                            <div class="card-title">
                                <h5>Facilities Result</h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="facility-result"></div>
                            <div class="center">
                                <ul>
                                    <li>Pass: <?php echo $passed_audits; ?></li>
                                    <li>Closure and office hearing: <?php echo $closure_office_audits; ?></li>
                                    <li>Suspension: <?php echo $suspension_audits; ?></li>
                                    <li>Warning: <?php echo $warning_audits; ?></li>
                                    <li>Suspension and office hearing: <?php echo $sus_office_audits; ?></li>
                                    <li>Office Hearing: <?php echo $office_audits; ?></li>
                                    <li>Closure: <?php echo $closure_audits; ?></li>
                                    <li>Warning and office hearing: <?php echo $warn_office_audits; ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m12 l6">
                    <div class="card">
                        <div class="card-action amber">
                            <div class="card-title">
                                <h5>Audit Result</h5>
                            </div>
                        </div>
                        <div class="card-content-bg">
                            <div id="audit-result"></div>
                            <div class="center">
                                <ul>
                                    <li>Audit on time: <?php echo $time_audits; ?></li>
                                    <li>Audit Pending: <?php echo $pending_audits; ?></li>
                                    <li>Audit Delayed: <?php echo ($total_audits-$pending_audits); ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--card widgets end-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <div>
            <!-- <table class="striped">
                <thead>
                    <tr>
                        <th data-field="id">Name</th>
                        <th data-field="name">Item Name</th>
                        <th data-field="price">Item Price</th>
                        <th data-field="actions">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td><a href="#" class="btn-floating btn-large green waves-effect waves-light">View</a></td>
                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                        <td><a href="#" class="btn-floating btn-large green waves-effect waves-light">View</a></td>
                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                        <td><a href="#" class="btn-floating btn-large green waves-effect waves-light">View</a></td>
                    </tr>
                    <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                        <td><a href="#" class="btn-floating btn-large green waves-effect waves-light">View</a></td>
                    </tr>
                </tbody>
            </table> -->
        </div>
        <div class="your-audits">
            <!-- <h4 class="header"> Your Audits</h4>
            <table class="striped">
                <thead>
                    <tr>
                        <th data-field="id">Audit ID</th>
                        <th data-field="name">Audit Location</th>
                        <th data-field="price">Date</th>
                        <th data-field="actions">Inspectors</th>
                        <th data-field="actions">Status</th>

                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Alvin</td>
                        <td>Eclair</td>
                        <td>$0.87</td>
                        <td>John Doe</td>
                        <td><span class="green white-text" style="padding:5px;">Verified</span></td>

                    </tr>
                    <tr>
                        <td>Alan</td>
                        <td>Jellybean</td>
                        <td>$3.76</td>
                        <td>John Doe</td>
                        <td><span class="green white-text" style="padding:5px;">Verified</span></td>

                    </tr>
                    <tr>
                        <td>Jonathan</td>
                        <td>Lollipop</td>
                        <td>$7.00</td>
                        <td>John Doe</td>
                        <td><span class="green white-text" style="padding:5px;">Verified</span></td>

                    </tr>
                    <tr>
                        <td>Shannon</td>
                        <td>KitKat</td>
                        <td>$9.99</td>
                        <td>John Doe</td>
                        <td><span class="green white-text" style="padding:5px;">Verified</span></td>

                    </tr>
                </tbody>
            </table> -->
        </div>
        <div class="all-audits">
            <h4 class="header"> All Audits</h4>
            <table class="striped">
                <thead>
                    <tr>
                        <th data-field="id">Type</th>
                        <th data-field="name">Location</th>
                        <th data-field="price">Date</th>
                        <th data-field="actions">Inspectors</th>
                        <th data-field="actions">Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                foreach ($audits as $audit) {
                    echo "<tr>";
                        echo "<td>". get_section_text($audit->section)."</td>";

                        echo "<td>";
                        foreach ($facilities as $facility) {
                             if($audit->id_facility == $facility->id){
                                echo  $facility->name;
                             }
                         }
                        echo "</td>";
                        echo "<td>$audit->doa</td>";
                        echo "<td>";
                        foreach ($inspectors as $inspector) {
                             if($audit->id_inspector == $inspector->id){
                                echo  $inspector->name;
                             }
                         }
                        echo "</td>";
                        $report_url = base_url()."index.php/pdfdom/audit_report/".$audit->id;
                        $audit_launch_url = base_url()."index.php/audit/audit_launch/".$audit->id;
                        if ($audit->status == 1) {
                            echo "<td><a href='$audit_launch_url' class='amber white-text' style='padding:10px;'>Launch</a></td>";
                        }
                        elseif ($audit->status == 2) {
                        echo "<td>";
                            // $report_url
                            //#$audit->id
                            echo"<a href='#$audit->id' class='modal-trigger green white-text' style='padding:10px'>Report</a>";
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
                                                    <button id="email" value="0" style="width:50%" class="active btn indigo left">Yes</button>
                                                    <button id="email" value="1" style="width:50%" class="btn grey">No</button>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="modal-footer">
                                             <a href="#!" id="submit_report" data-audit-id="'.$audit->id.'" class="waves-effect white-text blue btn-flat modal-action modal-close">Submit</a>
                                             <a href="#!" style="margin-left:5px;" class="waves-effect white-text amber btn-flat modal-action modal-close">Close</a>
                                         </div>
                                       </div></td>';
                        } else {
                            echo "<td><a href='#!' class='red white-text' style='padding:10px;'>Undefined</a></td>";
                        }
                    echo "</tr>";
                }
                     ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
