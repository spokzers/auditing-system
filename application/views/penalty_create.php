            <!-- START CONTENT -->
            <section id="content">
                <div class="container">
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2"><?php echo $heading; ?></h4>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url();?>index.php/penalty/<?php echo $url; ?>">
                                        <!-- Centre Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <?php

                                                print_select('section', 1,get_section(), "");
                                              ?>
                                                <label for="centre_name">Type</label>
                                            </div>
                                        </div>
                                        <!-- Contract Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <select id="category" name="id_categories">

                                              </select>
                                            
                                                <label for="contract_number">Category</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                          <div class="btn waves-effect waves-light" id="add">Add New Category</div>
                                        </div>
                                        <!-- Commercial Registration Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="cr_number" type="text" name="reference" value="<?php echo $penalty[0]->reference;?>">
                                                <label for="cr_number">Penalty Reference</label>
                                            </div>
                                        </div>
                                        <!-- Owner Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="owner_name" type="text" name="description" value="<?php echo $penalty[0]->description; ?>">
                                                <label for="owner_name">Penalty Description</label>
                                            </div>
                                        </div>
                                        <!-- National Identification Number -->
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="nid_number" type="number" step="any" name="min_amount" value="<?php echo $penalty[0]->min_amount; ?>">
                                                <label for="nid_number">Minimum Amount</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="nid_number" type="number" step="any" name="max_amount" value="<?php echo $penalty[0]->max_amount; ?>">
                                                <label for="nid_number">Maximum Amount</label>
                                            </div>
                                        </div>

                                        <!-- District -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="district" type="text" name="remarks" value="<?php echo $penalty[0]->remarks; ?>">
                                                <label for="district">Remarks</label>
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
