<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container" style="">
        <!-- start stats card -->
        <div class="row">
            <!--card stats start-->
            <div class="col s12 m6 l4">
                <div class="card-panel">
                    <div class="card">
                        <div class="card-content  cyan white-text">
                            <div class="card-stats-title center">
                                <p><i class="mdi-action-account-circle medium"></i></p>
                                <p>UNTRAINED WORKERS</p>
                            </div>
                        </div>
                        <div class="card-action  cyan darken-2 white-text">
                            <h4 class="card-stats-number center">3507</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--card stats end-->
        </div>
        <!-- stat card end -->
        <!-- form -->
        <div class="card-panel">
            <h4 class="header2">Trainings</h4>
            <div class="divider"></div>
            <div class="row container">
                <form method="post" action="<?php echo base_url();?>index.php/training/<?php echo $url;?>">
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="start_date_training" type="date" name="date" value="">
                            <label for="start_date" class="active">Start Date</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <select name="level">
                                <option value="1" selected>Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                                <option value="4">Other</option>
                            </select>
                            <label>Training Level</label>
                        </div>
                        <div class="input-field col s6">
                            <select name="language">
                                <option value="all">All</option>
                                <option value="english">English</option>
                                <option value="arabic">Arabic</option>
                                <option value="hindi">Hindi</option>
                                <option value="urdu">Urdu</option>
                                <option value="bengali">Bengali</option>
                                <option value="tagalog">Tagalog</option>
                                <option value="bahasa">Bahasa</option>
                                <option value="indonesian">Indonesian</option>
                                <option value="other">Other</option>
                            </select>
                            <label>Language</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s6">
                            <input id="course_number" name="course_id" type="number" value="1">
                            <label for="course_number" class="active">Course Number</label>
                        </div>
                        <div class="input-field col s6">
                            <input id="training_number" name="weeks" type="number" value="1">
                            <label for="training_number" class="active">Training Weeks</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <input id="workers_per_class" name="workers" type="number" value="1">
                            <label for="workers_per_class" class="active">Workers Per Class</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                            <?php
                              foreach ($trainers as $trainer) {
                                $options[$trainer->id] = $trainer->name;
                              }
                              print_select('id_trainer', 1, $options, "");
                            ?>
                            <label for="workers_per_class">Trainer</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s3">
                            <label>Classes Per Week</label>
                        </div>
                        <div class="input-field col s9">
                            <p>
                                <input type="checkbox" name='sunday' id="sunday">
                                <label for="sunday">Sunday</label>
                            </p>
                            <p>
                                <input type="checkbox" id="monday" name='monday' checked="checked">
                                <label for="monday">Monday</label>
                            </p>
                            <p>
                                <input type="checkbox" id="tuesday" name='tuesday' checked="checked">
                                <label for="tuesday">Tuesday</label>
                            </p>
                            <p>
                                <input type="checkbox" name='wednesday' id="wednesday">
                                <label for="wednesday">Wednesday</label>
                            </p>
                            <p>
                                <input type="checkbox" id="thursday" name='thrusday' checked="checked">
                                <label for="thursday">Thursday</label>
                            </p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s9">
                            <button type="submit" class="waves-effect waves-light  btn" id="nextPage">Continue</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
