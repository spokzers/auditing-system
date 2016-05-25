            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <a href="<?php echo base_url(); ?>index.php/penalty" class="btn waves-effect waves-light left">View All</a>
                            <?php $url_edit = base_url() . "index.php/penalty/edit/".$penalty[0]->id; ?>
                            <a class='btn waves-effect waves-light right' href="<?php echo $url_edit; ?>">Edit</a>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                <div class="card-panel">
                                        <table class="responsive-table hoverable striped">
                                            <thead></thead>
                                            <tbody>
                                                <tr>
                                                    <td>Id</td>
                                                    <td><?php echo $penalty[0]->id?></td>
                                                </tr>
                                                <tr>
                                                    <td>Category</td>
                                                    <td><?php
                                                    $cat = join_model($categories,$penalty[0]->id_categories);

                                                    echo $cat->category; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Description</td>
                                                    <td><?php echo $penalty[0]->description; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Reference</td>
                                                    <td><?php echo $penalty[0]->reference; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Minimum Amount</td>
                                                    <td><?php echo $penalty[0]->min_amount; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Max Amount</td>
                                                    <td><?php echo $penalty[0]->max_amount; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Section</td>
                                                    <td><?php echo get_section_text($penalty[0]->section); ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Assigned Penalty</td>
                                                    <td><?php echo $penalty[0]->assigned; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Remarks</td>
                                                    <td><?php echo $penalty[0]->remarks; ?></td>
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
