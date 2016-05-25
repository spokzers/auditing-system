            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <a href="<?php echo base_url(); ?>index.php/inspector" class="btn waves-effect waves-light left">View All</a>
                            <?php $url_edit = base_url() . "index.php/inspector/edit/".$profile[0]->id; ?>
                            <a class='btn waves-effect waves-light right' href="<?php echo $url_edit; ?>">Edit</a>                            
                            <div class="row">
                                <div class="col s12 m12 l12">
                                <div class="card-panel">
                                        <table class="responsive-table hoverable striped">
                                            <thead></thead>
                                            <tbody>
                                                <tr>
                                                    <td>Employee Id</td>
                                                    <td><?php echo $profile[0]->id?></td>
                                                </tr>
                                                <tr>
                                                    <td>Employee Num</td>
                                                    <td><?php echo $profile[0]->employee_id?></td>
                                                </tr>
                                                <tr>
                                                    <td>Employee Name</td>
                                                    <td><?php echo $profile[0]->name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td class="trn" data-trn-key="Username">Employee Login</td>
                                                    <td><?php echo $profile[0]->username; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Date of Birth</td>
                                                    <td><?php echo $profile[0]->dob; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Employee Designation</td>
                                                    <td><?php echo get_designation_text($profile[0]->designation); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Section</td>
                                                    <td><?php echo get_section_text($profile[0]->section); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contact</td>
                                                    <td><?php echo $profile[0]->contact; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $profile[0]->address; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Iqama Number</td>
                                                    <td><?php echo $profile[0]->nic; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Reports to</td>
                                                    <td><?php echo $report[0]->name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td><?php echo $profile[0]->email; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Picture</td>
                                                    <td><?php echo $profile[0]->image; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Training Language</td>
                                                    <td><?php echo "ar"; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <?php
                                                        if($profile[0]->status == 1)
                                                        { echo "<td class='trn' data-trn-key='Active'>'Active'"; }
                                                        else
                                                        { echo "<td class='trn' data-trn-key='Blocked'>'Blocked'"; }
                                                    ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Created At</td>
                                                    <td><?php echo $profile[0]->created_at; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Updated At</td>
                                                    <td><?php echo $profile[0]->updated_at; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        <!--end container-->
        </section>
        <!-- END CONTENT -->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
