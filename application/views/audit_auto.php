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
                <div class="input-field col s3">
                    <p>Select Facilities</p>
                </div>
                <div class="input-field col s9">
                    <!-- make this a modal trigger -->
                    <?php
                        foreach ($facilities as $facility) {
                            $options[$facility->id] = $facility->name;

                        }
                        print_select_v2('pick_facility', 1, $options, "id='pick_facility'");
                        ?>
                    <a href="#!" id='select_facility' class="btn waves-effect grey">Select</a>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Facility Name</th>
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
                        foreach ($inspectors as $inspector) {
                            $options[$inspector->id] = $inspector->name;

                        }
                        print_select_v2('pick_inspector', 0 , $options, "id='pick_inspector'");
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
