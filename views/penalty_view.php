  <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">

                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <div class="row">
                                <div class="col s6 left">
                                    <h4 class="header">Penalties</h4>
                                </div>
                                <div class="right">
                                    <a class="btn waves-effect waves-light " href="<?php echo base_url(); ?>index.php/penalty/create">Create New</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table class="responsive-table display hoverable striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Category</th>
                                                <th>Reference</th>
                                                <th>Assigned Penality</th>
                                                <th>Description</th>
                                                <th>Range</th>

                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php

                                          foreach ($penalties as $penalty) {

                                            echo "<tr>";
                                            echo "<td>$penalty->id</td>";
                                            $cat = join_model($categories,$penalty->id_categories);
                                            echo "<td>$cat->category</td>";
                                            echo "<td>$penalty->reference</td>";
                                            echo "<td>$penalty->assigned</td>";
                                            echo "<td>$penalty->description</td>";
                                            echo "<td>$penalty->min_amount <br> $penalty->max_amount</td>";
                                            echo "<td>";
                                            $url_view = base_url() . "index.php/penalty/edit/$penalty->id";
                                            $url_edit = base_url() . "index.php/penalty/view/$penalty->id";
                                            echo "<a class='btn-floating green' href='$url_view'><i class='mdi-content-create'></i></a>
                                            <a class='btn-floating blue' href='$url_edit'><i class='mdi-action-search'></i></a>
                                            </td>";
                                            echo "</tr>";
                                          }
                                          ?>

                                        </tbody>
                                    </table>
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
