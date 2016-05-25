            <!-- START CONTENT -->
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2"><?php echo $heading; ?></h4>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url(); ?>index.php/facility/<?php echo $url.'/'.$facility[0]->id; ?>/">
                                        <!-- Facility Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="facility_name" name="name" type="text" value="<?php echo $facility[0]->name; ?>">
                                                <label for="facility_name">Facility Name</label>
                                            </div>
                                        </div>
                                        <!-- License Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="license" name="license" type="text" value="<?php echo $facility[0]->license; ?>">
                                                <label for="license">License Number</label>
                                            </div>
                                        </div>
                                        <!-- Owner Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="owner" name="owner" type="text" value="<?php echo $facility[0]->owner; ?>">
                                                <label for="owner">Owner Name</label>
                                            </div>
                                        </div>
                                        <!-- National Identification Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="nic" name="nic" type="text" value="<?php echo $facility[0]->nic; ?>">
                                                <label for="nic">National Identification Number</label>
                                            </div>
                                        </div>
                                        <!-- Commercial Registration Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="cnr" name="crn" type="text" value="<?php echo $facility[0]->crn; ?>">
                                                <label for="cnr">Commercial Registration Number</label>
                                            </div>
                                        </div>
                                        <!-- Business Activity -->
                                        <div class="input-field">
                                            <select name="activity">
                                                <option value="" selected disabled>Select an Activity</option>
                                                <option value="0">Not Given</option>
                                                <option value="1">Agriculture</option>
                                                <option value="2">Cleaning Services</option>
                                                <option value="3">Community Services</option>
                                                <option value="4">Construction</option>
                                                <option value="5">Contracting</option>
                                                <option value="6">Government Entities</option>
                                                <option value="7">Armed Forces</option>
                                                <option value="8">Emergency Services</option>
                                                <option value="9">Financial Services</option>
                                                <option value="10">Food &amp; Hospitality</option>
                                            </select>
                                            <label>Business Activity</label>
                                        </div>
                                        <div class="row">
                                            <!-- Date Of Issue -->
                                            <div class="input-field col s3">
                                                <input type="date" class="datepicker" name="issue_date" value="<?php echo $facility[0]->issue_date; ?>">
                                                <label for="issue_date" class="active">Date Of Issue</label>
                                            </div>
                                            <!-- Validity -->
                                            <div class="input-field col s3">
                                                <input type="date" class="datepicker" name="validity" value="<?php echo $facility[0]->validity; ?>">
                                                <label for="validity" class="active">Validity</label>
                                            </div>
                                            <!-- Location -->
                                            <div class="input-field col s6">
                                                <input id="location" type="text" name="location" value="<?php echo $facility[0]->location; ?>">
                                                <label for="location">Location</label>
                                            </div>
                                        </div>
                                        <!-- GPS Coordinates -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="gps" name="gps" type="text" value="<?php echo $facility[0]->gps; ?>">
                                                <label for="gps">GPS Coordinates</label>
                                            </div>
                                        </div>
                                        <!-- Contract Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="contract" name="contract" type="text" value="<?php echo $facility[0]->contract; ?>">
                                                <label for="contract">Contract Number</label>
                                            </div>
                                        </div>
                                        <!-- Commercial Centers -->
                                        <div class="input-field">
                                            <?php
                                            foreach ($centres as $centre) {
                                              $options[$centre->id] = $centre->name;
                                            }
                                            print_select('id_centre',$facility[0]->id_centre,$options, '');
                                            ?>
                                            <label>Commercial Centers</label>
                                        </div>
                                        <!-- Telephone Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="telephone_number" name="telephone" type="text" value="<?php echo $facility[0]->telephone; ?>">
                                                <label for="telephone_number">Telephone Number</label>
                                            </div>
                                        </div>
                                        <!-- Fax Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="fax" name="fax" type="text" value="<?php echo $facility[0]->fax; ?>">
                                                <label for="fax">FAX Number</label>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" name="email" type="email" value="<?php echo $facility[0]->email; ?>">
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <!-- Cell Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="cell_no" name="cell_no" type="text" value="<?php echo $facility[0]->cell_no; ?>">
                                                <label for="cell_no">Cell Number</label>
                                            </div>
                                        </div>
                                        <!-- Manager Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="manager_name" name="manager_name" type="text" value="<?php echo $facility[0]->manager_name; ?>">
                                                <label for="manager_name">Manager Name</label>
                                            </div>
                                        </div>
                                        <!-- Manager ID -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="manager_id" name="manager_id" type="text" value="<?php echo $facility[0]->manager_id; ?>">
                                                <label for="manager_id">Manager ID</label>
                                            </div>
                                        </div>
                                        <!-- Manager Cell -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="manager_cell" name="manager_cell" type="text" value="<?php echo $facility[0]->manager_cell; ?>">
                                                <label for="manager_cell">Manager Cell Number</label>
                                            </div>
                                        </div>
                                        <!-- Number of Audits per Month -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="audits_per_month" name="audits_per_month" type="number" value="<?php echo $facility[0]->audits_per_month; ?>">
                                                <label for="audits_per_month">Number of Audits per Month</label>
                                            </div>
                                        </div>
                                        <!-- Street -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="street" name="street" type="text" value="<?php echo $facility[0]->street; ?>">
                                                <label for="street">Street</label>
                                            </div>
                                        </div>
                                        <!-- Space -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="space" name="space" type="text" value="<?php echo $facility[0]->space; ?>">
                                                <label for="space">Space</label>
                                            </div>
                                        </div>
                                        <!-- Shop Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="shop_no" name="shop_no" type="text" value="<?php echo $facility[0]->shop_no; ?>">
                                                <label for="shop_no">Shop Number</label>
                                            </div>
                                        </div>
                                        <!-- Department -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <select name="section">
                                                    <option value="0" selected>General</option>
                                                    <?php
                                                    $sections = get_section();
                                                    foreach ($sections as $key => $value) {
                                                      echo "<option value='$key' selected>$value</option>";
                                                    }
                                                    ?>
                                                </select>
                                                <label>Section</label>
                                            </div>
                                        </div>
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
