            <!-- START CONTENT -->
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2">Create Centre</h4>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url();?>index.php/centre/<?php echo $url; ?>">
                                        <!-- Centre Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="centre_name" type="text" name="name" value="<?php echo $centre[0]->name;?>">
                                                <label for="centre_name">Commercial Centre Name</label>
                                            </div>
                                        </div>
                                        <!-- Contract Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="contract_number" type="text" name="contract_number" value="<?php echo $centre[0]->contract_number; ?>">
                                                <label for="contract_number">Contract Number</label>
                                            </div>
                                        </div>
                                        <!-- Commercial Registration Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="cr_number" type="text" name="registration_number" value="<?php echo $centre[0]->registration_number; ?>">
                                                <label for="cr_number">Commercial Registration Number</label>
                                            </div>
                                        </div>
                                        <!-- Owner Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="owner_name" type="text" name="owner_name" value="<?php echo $centre[0]->owner_name; ?>">
                                                <label for="owner_name">Owner Name</label>
                                            </div>
                                        </div>
                                        <!-- National Identification Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="nid_number" type="text" name="national_id" value="<?php echo $centre[0]->national_id; ?>">
                                                <label for="nid_number">National ID</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <!-- Contract Start Date -->
                                            <div class="input-field col s4">
                                                <input type="date" name="contract_start_date" value="<?php echo $centre[0]->contract_start_date; ?>" class="datepicker">
                                                <label for="contract_start_date" class="active">Contract Start Date</label>
                                            </div>
                                            <!-- Contract End Date -->
                                            <div class="input-field col s4">
                                                <input type="date" name="contract_end_date" value="<?php echo $centre[0]->contract_end_date; ?>" class="datepicker">
                                                <label for="contract_end_date" class="active">Contract End Date</label>
                                            </div>
                                        </div>
                                        <!-- District -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="district" type="text" name="district" value="<?php echo $centre[0]->district; ?>">
                                                <label for="district">District</label>
                                            </div>
                                        </div>
                                        <!-- Location -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="location" type="text" name="location" value="<?php echo $centre[0]->location; ?>">
                                                <label for="location">Location</label>
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="address" type="text" name="address" value="<?php echo $centre[0]->address; ?>">
                                                <label for="address">Address</label>
                                            </div>
                                        </div>
                                        <!-- Telephone Number 1 -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="telephone_number1" type="text" name="tel1" value="<?php echo $centre[0]->tel1; ?>">
                                                <label for="telephone_number1">Telephone Number 1</label>
                                            </div>
                                        </div>
                                        <!-- Telephone Number 2 -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="telephone_number2" type="text" name="tel2" value="<?php echo $centre[0]->tel2; ?>">
                                                <label for="telephone_number2">Telephone Number 2</label>
                                            </div>
                                        </div>
                                        <!-- Owner Mobile -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="owner_mobile" type="text" name="owner_mobile" value="<?php echo $centre[0]->owner_mobile; ?>">
                                                <label for="owner_mobile">Owner Mobile</label>
                                            </div>
                                        </div>
                                        <!-- Fax Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="fax_number" type="text" name="fax" value="<?php echo $centre[0]->fax; ?>">
                                                <label for="fax_number">FAX Number</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <button class="btn waves-effect waves-light " type="submit" name="action">Create</button>
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
