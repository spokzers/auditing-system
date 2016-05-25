            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <h4 class="left header">Commercial Centres</h4>
                            <a href="<?php echo base_url(); ?>index.php/centre" class="btn waves-effect waves-light right">View All</a>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                <div class="card-panel">
                                        <table class="responsive-table hoverable striped" width="100%">
                                            <thead></thead>
                                            <tbody>
                                                <tr>
                                                    <td>Commercial Centre Name</td>
                                                    <td><?php echo $centre[0]->name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Commercial Registration Number</td>
                                                    <td><?php echo $centre[0]->registration_number; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Owner Name</td>
                                                    <td><?php echo $centre[0]->owner_name; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>National ID</td>
                                                    <td><?php echo $centre[0]->national_id; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contract Number</td>
                                                    <td><?php echo $centre[0]->contract_number; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contract Start Date</td>
                                                    <td><?php echo $centre[0]->contract_start_date; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Contract End Date</td>
                                                    <td><?php echo $centre[0]->contract_end_date; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>District</td>
                                                    <td><?php echo $centre[0]->district; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Location</td>
                                                    <td><?php echo $centre[0]->location; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Address</td>
                                                    <td><?php echo $centre[0]->address; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Telephone 1</td>
                                                    <td><?php echo $centre[0]->tel1; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Telephone 2</td>
                                                    <td><?php echo $centre[0]->tel2; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Owner Mobile</td>
                                                    <td><?php echo $centre[0]->owner_mobile; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Fax</td>
                                                    <td><?php echo $centre[0]->fax; ?></td>
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
