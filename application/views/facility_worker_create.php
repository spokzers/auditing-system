            <!-- START CONTENT -->
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2"><?php echo $heading; ?></h4>
                                <div class="row">
                                    <form class="col s12" method="post" enctype="multipart/form-data" action="<?php echo base_url(); ?>index.php/FacilityWorker/<?php echo $url; ?>">
                                        <!-- Facility Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="license" name="license" type="text" value="<?php echo $worker[0]->license; ?>">
                                                <label for="license">License Number</label>
                                            </div>
                                        </div>
                                        <!-- License Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="name" name="name" type="text" value="<?php echo $worker[0]->name; ?>">
                                                <label for="name">Name</label>
                                            </div>
                                        </div>
                                        <!-- Owner Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="nationality" name="nationality" type="text" value="<?php echo $worker[0]->nationality;?>">
                                                <label for="nationality">Nationality</label>
                                            </div>
                                        </div>
                                        <!-- National Identification Number -->
                                        <div class="input-field">
                                            <?php
                                                $levels = get_training_level();
                                                print_select('training_level', $worker[0]->training_level, $levels, "");

                                            ?>



                                            <label>Training Level</label>
                                        </div>

                                        <!-- Commercial Registration Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="id_no" name="id_no" type="text" value="<?php echo $worker[0]->id_no; ?>">
                                                <label for="id_no">Identification Number</label>
                                            </div>
                                        </div>
                                        <!-- Business Activity -->
                                        <div class="input-field">
                                            <select name="status">
                                                <option value="" selected disabled>Select Status</option>
                                                <?php
                                                $statuses = get_training_status();

                                                   foreach ($statuses as $key => $value ) {
                                                     echo "<option value='$key'>$value</option>";
                                                   }
                                                  ?>


                                            </select>
                                            <label>Status</label>
                                        </div>
                                        <div class="row">
                                            <!-- Date Of Issue -->
                                            <div class="input-field col s12">
                                                <input type="date" class="datepicker" name="health_card" value="<?php echo $worker[0]->health_card; ?>">
                                                <label for="health_card" class="active">Health Card</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Date Of Issue -->
                                            <div class="input-field col s12">
                                                <input type="text" style="display:none;" name="id_facility" value="<?php echo $worker[0]->id_facility; ?>">

                                            </div>
                                        </div>
                                        <!-- GPS Coordinates -->
                                        <div class="row">
                                            <div class="file-field input-field" >
                                                <div class="btn">
                                                    <span>Browse</span>
                                                    <input type="file" name='dp'>
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" name='picture' value='<?php echo $worker[0]->picture;?>' type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Department -->

                                        <div class="row">
                                            <button class="btn waves-effect waves-light " type="submit" name="action"><?php echo $submit; ?></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END CONTENT -->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
