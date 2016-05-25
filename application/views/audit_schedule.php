<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container" ng-app="myApp" ng-controller="myCtrl">
        <div class="card-panel">
            <h4 class="header2">Schedule An Audit</h4>
            <div class="divider"></div>
            <!-- Inspection start-->
            <form method="post" action="<?php echo base_url();?>index.php/audit/<?php echo $url; ?>">
                <div class="row">
                    <div class="input-field col s4">
                        <p>Inspection</p>
                    </div>
                    <div class="input-field col s8">
                         <?php
                         print_select_v2("section", -1, get_section(), "ng-model='audit.section'");
                         ?>
                    </div>
                </div>  
                <!-- Inspection end -->
                <!-- Facility start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Facility</p>
                    </div>
                    <div class="input-field col s8">
                      <?php
                         $options = [];
                         foreach ($facilities as $facility) {
                             $options[$facility->id] = $facility->name;
                         }
                         print_select_v2("id_facility", -1, $options, "ng-model='audit.id_facility'");
                         ?>
                        
                    </div>
                    
                </div>
                <!-- Facility end -->
                <!-- inspector start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Inspector</p>
                    </div>
                    <div class="input-field col s8">
                     <?php
                         $options = [];
                         foreach ($inspectors as $inspector) {
                             $options[$inspector->id] = $inspector->name;
                         }
                         print_select_v2("id_inspector", -1, $options, "ng-model='audit.id_inspector'");
                         ?>
                    
                    </div>
                </div>
                <!-- inspector end -->
                <!-- Audit template start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Audit Template</p>
                    </div>
                    <div class="input-field col s8">

                      <?php
                         $options = [];
                         foreach ($checklists as $checklist) {
                             $options[$checklist->id] = $checklist->title;
                         }
                         print_select_v2("id_checklist", -1, $options, "ng-model='audit.id_templates'");
                         ?>
                    </div>
                  
                </div>
                <!-- Audit template end -->
                <!-- audit date start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Audit Date</p>
                    </div>
                    <div class="input-field col s8">
                        <input type="date" name='doa' class='datepicker' ng-model="audit.doa">
                    </div>
                </div>
                <!-- audit date end -->
                <!-- reason start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Reason</p>
                    </div>
                    <div class="input-field col s8">
                        <?php
                  print_select_v2("reason", -1, get_reason(), "ng-model='audit.reason'");
                  ?>
                    </div>
                </div>
                <!-- reason end -->
                <!-- remarks start -->
                <div class="row">
                    <div class="input-field col s4">
                        <p>Remarks</p>
                    </div>
                    <div class="input-field col s8">
                        <input type="text" ng-model="audit.remarks">
                    </div>
                </div>
            
                <!-- reason end -->
                <!-- buttons start -->
                <div class="row">
                    <div class="input-field col s8 offset-s4">
                        <!-- <a ng-click="schedule2()"  class="btn waves-effect red">Launch Now</a> -->
                        <div ng-click="schedule()" class="btn waves-effect red">Schedule</div>  
                    </div>
                </div>
                <!-- buttons end -->
            </form>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
