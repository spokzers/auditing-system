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
                        <input type="date" name="start_date" class="col s3">
                        <div class="col s1" style="margin-top:15px;">
                            <i class="mdi-action-settings-ethernet"></i>
                        </div>
                        <input type="date" name="end_date" class="col s3">
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
                    <a href="#!" class="btn waves-effect grey">Select</a>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Property Number</th>
                                <th>Building Number</th>
                                <th>Area</th>
                                <th>District</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row">
                <div class="input-field col s3">
                    <p>Select Inpectors</p>
                </div>
                <div class="input-field col s9">
                	<a href="#!">Add More</a>
                    <select id="audit_by" name="audit_by">
                        <option value="" selected="selected">Not Selected</option>
                        <option value="59">احمد الجهيني</option>
                        <option value="62">محمد ناجي الإدريسي</option>
                        <option value="65">عبدالعزيز زارع </option>
                        <option value="66">عبد الرحمن القرشي</option>
                    </select>
                </div>
            </div>
            <div class="row">
            	<div class="input-field col s9 offset-s3">
            		<a href="#!" class="waves-effect btn teal">Show Schedule</a>
            	</div>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
