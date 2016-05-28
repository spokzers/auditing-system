<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Auto Schedule</h4>
            <div class="divider"></div>
            <div class="row">
                <div class="input-field col s3">
                    <p>Date Range</p>
                </div>
                <div class="input-field col s9">
                    <div class="row">
                        <input type="date" name="start_date" id="start_date" class="col s3 datepicker">
                        <div class="col s1" style="margin-top:15px;">
                            <i class="mdi-action-settings-ethernet"></i>
                        </div>
                        <input type="date" name="end_date" id="end_date" class="col s3 datepicker">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <p>Audit Type</p>
                </div>
                <div class="input-field col s9">
                    <select name="audit_type" id="audit_type">
                        <option value="1">Housing Inspection</option>
                        <option value="2">Environmental & Health Inspections</option>
                        <option value="3">Market Control Inspections</option>
                    </select>
                </div>
            </div>
            <div class="row">

            <div>
                <div class="input-field col s3">
                    <p>Select Checklist</p>
                </div>
                <div class="input-field col s9">
                    <!-- make this a modal trigger -->
                    <?php
                        // unset($options);
                        $options = "";
                        $temp = "";
                        foreach ($checklists as $checklist) {
                            $options[$checklist->id] = $checklist->title;
                            $temp = $checklist->id;
                        }
                        print_select_v2('pick_checklist', $temp, $options, "id='pick_checklist'");
                        ?>
                    <!-- <a href="#!" id='select_checklist' class="btn waves-effect grey">Select</a> -->
                </div>
            </div>


               
            <div>
                <div class="input-field col s3">
                    <p>Select Facilities</p>
                </div>
                <div class="input-field col s9">
                    <!-- make this a modal trigger -->
                    <?php
                        $options = "";
                        $temp = "";
                        foreach ($facilities as $facility) {
                            $options[$facility->id] = $facility->name;
                            $temp = $facility->id;
                        }
                        print_select_v2('pick_facility', $temp, $options, "id='pick_facility'");
                        ?>
                    <a href="#!" id='select_facility' class="btn waves-effect grey">Select</a>
            


                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Facility Name</th>
                                <th>Checklist Name</th>
                            </tr>
                        </thead>
                        <tbody class='facility_body'>
                            
                        </tbody>
                    </table>
                </div>
            </div>

             <div class="row">
                <div class="input-field col s3">
                    <p>Select Inspectors</p>
                </div>
                <div class="input-field col s9">
                    <!-- make this a modal trigger -->
                    <?php
                        unset($options);
                        $temp = "";
                        foreach ($inspectors as $inspector) {
                            $options[$inspector->id] = $inspector->name;
                            $temp = $inspector->id;
                        }
                        print_select_v2('pick_inspector', $temp , $options, "id='pick_inspector'");
                        ?>
                    <a href="#!" id='select_inspector' class="btn waves-effect grey">Select</a>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                            </tr>
                        </thead>
                        <tbody class='inspector_body'>
                            
                        </tbody>
                    </table>
                </div>
            </div>
           
            <div class="row">
            	<div class="input-field col s9 offset-s3">
                    <h4>Final Schedule</h4>
                    <table>
                        <thead>
                            <tr>
                                <th>Facility Name</th>
                                <th>Template Name</th>
                                <th>Inspector Name</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody class='schedule_body'>
                            
                        </tbody>
                    </table>
            		<a href="#!" class="waves-effect btn teal">Schedule</a>
                    <a href="#!" class="waves-effect btn teal" id="show">Show Schedule</a>
            	</div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
