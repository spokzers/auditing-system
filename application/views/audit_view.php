<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <div class="row">
                <div class="col s12">
                    <h4 class="header2">Search</h4>
                    <div class="divider"></div>
                    <div class="col s12">
                        <form method="get">
                            <div class="row">
                                <div class="input-field col s6">
                                    <select name="audit_by">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Administrator</option>
                                        <option value="11">عبدالعزيز وهاس</option>
                                        <option value="33">عادل شحاته بخيت</option>
                                        <option value="34">زكي سليم المحمادي</option>
                                    </select>
                                    <label for="audit_by">Inspectors</label>
                                </div>
                                <div class="col s6 input-field">
                                    <select name="audit_status">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Over Due</option>
                                        <option value="2">Completed</option>
                                    </select>
                                    <label>Audit Status</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select id="inspection_id" name="inspection_id">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Housing Inspection</option>
                                        <option value="2">Environmental &amp; Health Inspections</option>
                                        <option value="3">Market Control Inspections</option>
                                    </select>
                                    <label for="inspection_id">Inspection</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="text" name="audit_id" id="audit_id">
                                    <label for="audit_id">Audit ID</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <input type="date" name="start_date" id="start_date">
                                    <label for="start_date" class="active">Start Date</label>
                                </div>
                                <div class="input-field col s6">
                                    <input type="date" name="end_date" id="end_date">
                                    <label for="end_date" class="active">End Date</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s6">
                                    <select class="form-control" id="audit_reason" name="audit_reason">
                                        <option value="" selected="selected">All</option>
                                        <option value="1">Complain</option>
                                        <option value="2">Routine</option>
                                        <option value="3">License Checking</option>
                                    </select>
                                    <label for="audit_reason">Reason</label>
                                </div>
                                <div class="input-field col s6">
                                    <button type="submit" class="btn teal">Search</button>
                                </div>
                            </div>
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="card-panel">
            <h4 class="header2">Search</h4>
            <div class="divider"></div>
            <table class="table responsive-table striped">
                <thead>
                    <tr>
                        <th>Audit Count</th>
                        <th>Penalty Count</th>
                        <th>Disposal Count</th>
                        <th>Delayed Audit Count</th>
                        <th style="width: 150px;">Passed Audits</th>
                        <th>Failed Audits</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td data-title="Audit Count">1786</td>
                        <td data-title="Penalty Count">123000.00</td>
                        <td data-title="Disposal Count">411 Litre
                            <br>74311 KG</td>
                        <td data-title="Delayed Audit Count">22</td>
                        <td data-title="Passed Audits">1671</td>
                        <td data-title="Failed Audits">115</td>
                    </tr>
                </tbody>
            </table>
        </div>
      
        <div class="card-panel">
            <h4 class="header4">Other Audits</h4>
            <div class="divider"></div>
            <table class="table striped">
                <thead>
                    <tr>
                        <td>Location</td>
                        <td>Inspector</td>
                        <td>Scheduled Date</td>
                        <td>Action</td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><a href="javascript:void(0)" onclick="get_more_audits()">Load more</a></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="card-panel">
            <div class="container row">
                <h4 class="header2 left">Audits Scheduled</h4>
                <h4 class="header2 right">Total Records : 1786 </h2>
                </div>
                <div class="divider"></div>

                    <table class="table responsive-table bordered striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Inspectors</th>
                                <th>Template</th>
                                <th>Facility Name</th>
                                <th>Date of Audit</th>
                                <th>Started At</th>
                                <th>Ended At</th>
                                <th>Disposals</th>
                                <th>Penalty</th>
                                <th>Reason</th>
                                <th>Action</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                              <!-- <td colspan="11" class="center"><strong>Housing Inspection</strong></td> -->
                            <?php
                            foreach ($audits as $audit) {
                 
                                echo "<tr>";
                                echo "<td data-title='ID'> $audit->id </td>";
                                echo "<td data-title='Inspectors'>";
                                foreach ($inspectors as $inspector) {
                                     if($audit->id_inspector == $inspector->id){
                                        echo  $inspector->name;
                                     }
                                 }

                                "</td>";
                                echo "<td data-title='Template'>";
                                 foreach ($templates as $template) {
                                     if($audit->id_templates == $template->id){
                                        echo  $template->title;
                                     }
                                 }
                                 
                                 echo "</td>";
                                 $bool = false;
                                 foreach ($facilities as $facility) {

                                    if($facility->id == $audit->id_facility){
                                    echo "<td data-title='Audit Date'>$facility->name</td>";
                                    $bool = true;
                                    }
                                 }
                                 if(!$bool){
                                    echo "<td data-title='Audit Date'>No Facility Found</td>";
                                 }
                                 

                                echo "<td data-title='Audit Date'>$audit->doa</td>";
                                echo "<td data-title='Started At'>$audit->started_at</td>";
                                echo "<td data-title='Ended At'>$audit->ended_at</td>";
                                echo "<td data-title='Disposals'>$audit->disposals</td>";
                                echo "<td data-title='Penalties'>$audit->penalty</td>";
                                $temp = get_audit_reason($audit->reason);
                                echo "<td>$temp</td>";

                                $today = new DateTime('');
                                $expireDate = new DateTime( $audit->doa);
                                $color = 'amber';
                                if($today->format("Y-m-d") > $expireDate->format("Y-m-d")){
                                    $color = 'red';
                                }
                                $temp_url = base_url()."index.php/audit/audit_launch/".$audit->id;
                                $report_url = base_url()."index.php/pdfdom/audit_report/".$audit->id;
                                echo "<td>";
                                if($audit->status == 2){
                                    //$report_url
                                    //#$audit->id
                                    echo"<a href='#$audit->id' class='modal-trigger'><button class='btn btn-floating small green'><i class='mdi-action-assignment'></i>View Report</button></a>";
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
                                                    <button id="email" value="1" style="width:50%" class="btn indigo left">Yes</button>
                                                    <button id="email" value="0" style="width:50%" class="active btn grey">No</button>
                                                </div>
                                            </div>
                                        </div>
                                         <div class="modal-footer">
                                             <a href="#!" id="submit_report" data-audit-id="'.$audit->id.'" class="waves-effect white-text blue btn-flat modal-action">Submit</a>
                                             <a href="#!" style="margin-left:5px;" class="waves-effect white-text amber btn-flat modal-action modal-close">Close</a>
                                         </div>
                                       </div>';
                                }else{
                                echo"<a href='$temp_url'><button class='btn btn-floating small $color'><i class='mdi-action-assignment'></i>Launch</button></a>";
                                }
                                $temp_url = base_url()."index.php/audit/delete/".$audit->id;
                                echo "<a href='$temp_url'><button class='btn btn-floating small red'><i class='mdi-action-delete'></i>Delete</button></a></td>";
                            echo "</tr>";
                            }
                            ?>
                           
                        </tbody>
                    </table>

        </div>
        <!-- Modal -->
            <div id="lateModal" class="modal">
                <div class="modal-content">
                      <h4>Why was the Audit Late?</h4>
                <div class="input-field">
                    <textarea style="height:250px" length="120" placeholder="Enter your remarks here" name="comment" class="materialize-textarea" id="" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="modal-footer">
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Save</a>
                <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
            </div>
        </div>
        <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->

