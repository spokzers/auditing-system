<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="row">
            <div class="col s3">
                <div class="card">
                    <ul style="margin:0px;">
                        <li class="user-details cyan darken-2" style="height: 200px;background: url(http://localhost/faudit/static/images/user-bg.jpg) no-repeat center center;
    padding: 15px 0px 0px 15px;">
                            <div class="center-align">
                                <div class="row">
                                    <div class="col s7 offset-s2">
                                        <img src="<?php echo base_url(). "uploads/worker/" .$worker->picture ?>" alt="" class="circle responsive-img valign profile-image">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col s12">
                                        <p class="btn-flat waves-effect waves-light white-text profile-btn" style=""><?php echo $worker->name ?></p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="blue">
                            <div class="row">
                                <div class="col s12">
                                    <a style="width:100%" href="<?php echo base_url(); ?>index.php/facilityWorker/view/<?php echo $worker->id; ?>" class="btn-flat blue waves-light white-text btn-large"><i class="center mdi-action-visibility"></i> View</a>
                                </div>
                            </div>
                        </li>
                        <li class="amber">
                            <div class="row">
                                <div class="col s12">
                                    <a style="width:100%" href="<?php echo base_url(); ?>index.php/facilityWorker/edit/<?php echo $worker->id; ?>" class="btn-flat amber waves-light white-text btn-large"><i class="center mdi-content-create"></i> Edit Profile</a>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col s9">
                <!-- Bio Graph start -->
                <div class="card-panel">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h6>Bio Graph</h6>
                            <div class="divider"></div>
                        </div>
                        <div class="container">
                            <div class="row">
                                <div class="col s3">
                                    <p>Name</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->name; ?></p>
                                </div>
                                <div class="col s3">
                                    <p>ID Number</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->id_no; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Serial Number</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->id; ?></p>
                                </div>
                                <div class="col s3">
                                    <p>Liscence</p>
                                </div>
                                <div class="col s3">
                                    <p>: <?php echo $worker->license; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Nationality</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->nationality; ?></p>
                                </div>
                                <div class="col s3">
                                    <p>Health Card Expiry</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->health_card; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Status</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo get_worker_status($worker->status); ?></p>
                                </div>
                                <div class="col s3">
                                    <p>ID Number</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->id_no; ?></p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s3">
                                    <p>Language</p>
                                </div>
                                <div class="col s3">
                                    <p>:  <?php echo $worker->language; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Bio Graph end -->
                <!-- Training Details start -->
                <div class="card-panel">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <h6>Training Details</h6>
                            <div class="divider"></div>
                        </div>
                        <div class="container">
                            <table class="responsive-table striped">
                            <thead>
                                <tr>
                                    <td>Date</td>
                                    <td class="trn" data-trn-key="Trainer">Trainer</td>
                                    <td class="trn" data-trn-key="Course Number">Course Number</td>
                                    <td class="trn" data-trn-key="Training Level">Training Level</td>
                                    <td class="trn" data-trn-key="Timing">Timing</td>
                                    <td class="trn" data-trn-key="Status">Status</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($trainings as $training) {
                                // echo $training;
                                # code...
                                echo "<tr>";
                                // echo "<td id='class_id'>$training->id</td>";
                                // echo "<td>$training->language</td>";
                                echo "<td>".$training[0]->date."</td>";
                                echo "<td>". $training[0]->id_trainer ."</td>";
                                // echo "<td>". $training[0]->workers ."</td>";
                                echo "<td>". $training[0]->course_id ."</td>";
                                echo "<td>Level ". $training[0]->level ."</td>";
                                echo "<td>". $training[0]->timing ."</td>";
                                echo "<td></td>";
                                // $url_delete = base_url() . "index.php/training[0]/delete/$training[0]->id";
                                // echo "<td>
                                // <a class='tooltipped waves-effect waves-light btn btn-floating modal-trigger yellow darken-2' href='#modal3' onclick='worker_details(this);' id='worker_details' data-position='bottom' data-delay='50' data-tooltip='Details' data-class-id='$training[0]->id'><i class='mdi-action-assignment'></i></a>
                                // <a href='$url_delete' class='btn red btn-floating tooltipped' onClick='return confirm_delete()' data-position='bottom' data-delay='50' data-tooltip='Delete'><i class='mdi-action-delete'></i></a>
                                // <a href='#!' class='btn green btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Report'><i class='mdi-action-assignment'></i></a>
                                // </td>";
                                echo "</tr>";
                              }
                              ?>

                            </tbody>
                        </table>
                        </div>
                    </div>
                </div>
                <!-- Training Details end -->
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
