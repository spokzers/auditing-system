            <!-- START CONTENT -->
            <section id="content">
                <!--breadcrumbs start-->
                <!--<div id="breadcrumbs-wrapper" class=" grey lighten-3">
                    <div class="container">
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h5 class="breadcrumbs-title">Forms</h5>
                                <ol class="breadcrumb">
                                    <li><a href="index.html">Dashboard</a>
                                    </li>
                                    <li><a href="#">Forms</a>
                                    </li>
                                    <li class="active">Forms Layouts</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!--breadcrumbs end-->
                <!--start container-->
                <div class="container">
                    <div class="section">
                        <!-- <p class="caption">Create New Inspector</p>
                            <div class="divider"></div> -->
                    </div>
                    <!--Form Advance-->
                    <div class="row">
                        <div class="col s12 m12 l12">
                            <div class="card-panel">
                                <h4 class="header2"><?php echo $heading; ?></h4>
                                <div class="row">
                                    <form class="col s12" method="post" action="<?php echo base_url();?>index.php/inspector/<?php echo $url; ?>" enctype="multipart/form-data">
                                        <!-- Inspector ID -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_id" name='employee_id' value='<?php echo $profile[0]->employee_id;?>' type="text">
                                                <label for="inspector_id">Inspector ID</label>
                                            </div>
                                        </div>
                                        <!-- National Identification No/Iqama Number -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="iqama_number" name='nic' value='<?php echo $profile[0]->nic;?>' type="text">
                                                <label for="iqama_number">National Identification No/Iqama Number</label>
                                            </div>
                                        </div>
                                        <!-- Inspector Name -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_name" name='name' value='<?php echo $profile[0]->name;?>' type="text">
                                                <label for="inspector_name">Inspector Name</label>
                                            </div>
                                        </div>
                                        <!-- Email -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="email" type="email" value='<?php echo $profile[0]->email;?>' name='email'>
                                                <label for="email">Email</label>
                                            </div>
                                        </div>
                                        <!-- Inspector Login ID -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_login_id" name='username' value='<?php echo $profile[0]->username;?>' type="text">
                                                <label for="inspector_login_id">Inspector Login ID</label>
                                            </div>
                                        </div>
                                        <!-- Login Password -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_password" name='password' value='<?php echo $profile[0]->password;?>' type="password">
                                                <label for="inspector_password">Password</label>
                                            </div>
                                        </div>
                                        <!-- DOB -->
                                        <div class="row">
                                            <div class="input-field col s4">
                                                <input type="date" name='dob' value='<?php echo $profile[0]->dob;?>' class="datepicker">
                                                <label for="dob" class="active">Date Of Birth</label>
                                            </div>
                                            <!-- Section -->
                                            <div class="input-field col s8">
                                              <?php
                                                print_select('section', $profile[0]->section, get_section(), "");
                                              ?>

                                                <label>Section</label>
                                            </div>
                                        </div>
                                        <!-- Designation -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                              <?php
                                                print_select('designation', $profile[0]->designation, get_designation(), "");
                                              ?>

                                                <label>Designation</label>
                                            </div>
                                        </div>
                                        <!-- Reports to -->
                                        <div class="row">
                                            <div class="input-field col s12">

                                              <?php
                                              $options = array();
                                              foreach ($reports as $report) {
                                                $options[$report->id] = $report->name;
                                              }
                                              print_select('reports_to', $profile[0]->reports_to, $options, "");
                                              ?>

                                                <label>Reports to</label>
                                            </div>
                                        </div>
                                        <!-- Contact Information -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_contact_info" value='<?php echo $profile[0]->contact;?>' name='contact' type="text">
                                                <label for="inspector_contact_info">Contact Information</label>
                                            </div>
                                        </div>
                                        <!-- Address -->
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input id="inspector_address" value='<?php echo $profile[0]->address;?>' name='address' type="text">
                                                <label for="inspector_address">Address</label>
                                            </div>
                                        </div>
                                        <!-- Status -->
                                        <div class="row">
                                            <div class="input-field col s12">

                                                  <?php
                                                  $option['1'] = "Active";
                                                  $option['2'] = "Blocked";
                                                  print_select('status', $profile[0]->status, $option, "");
                                                  ?>

                                                <label>Status</label>
                                            </div>
                                        </div>
                                        <!-- file selection -->
                                        <div class="row">
                                            <div class="file-field input-field" >
                                                <div class="btn">
                                                    <span>Browse</span>
                                                    <input type="file" name='dp'>
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" name='image' value='<?php echo $profile[0]->image;?>' type="text">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row"></div>
                                        <div class="row">
                                            <button class="btn" onclick="reset_signature()" type="button">Reset Signature</button>
                                            <div id="signature"></div>
                                            <input class="file-path validate" style="display: none;" name='sign' type="text">
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
