<!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <!-- start search box -->
                    <div class="card-panel">
                        <!--liscense start-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h6>SEARCH</h6>
                                <div class="divider"></div>
                            </div>
                            <div class="container">
                                <form>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>Commercial Centre Name</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>Commercial Registration Number</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>Owner Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>National ID</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>Contact Number</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <button class="btn cyan left-align waves-effect waves-light right" type="submit" name="action">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- search box end -->
                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <div class="row">
                                <div class="col s6 left">
                                    <h4 class="header">Commercial Centres</h4>
                                </div>
                                <div class="right">
                                    <a class="btn waves-effect waves-light " href="<?php echo base_url(); ?>index.php/centre/create">Create New</a>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table class="responsive-table display hoverable striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Commercial Registration Number</th>
                                                <th>Owner Name</th>
                                                <th>National ID</th>
                                                <th>Contract Start Date</th>
                                                <th>Contract End date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Commercial Registration Number</th>
                                                <th>Owner Name</th>
                                                <th>National ID</th>
                                                <th>Contract Start Date</th>
                                                <th>Contract End date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php

                                          foreach ($centres as $centre) {

                                            echo "<tr>";
                                            echo "<td>$centre->ID</td>";
                                            echo "<td>$centre->name</td>";
                                            echo "<td>$centre->registration_number</td>";
                                            echo "<td>$centre->owner_name</td>";
                                            echo "<td>$centre->national_id</td>";
                                            echo "<td>$centre->contract_start_date</td>";
                                            echo "<td>$centre->contract_end_date</td>";                                            
                                            echo "<td>";
                                            $url_view = base_url() . "index.php/centre/edit/$centre->ID";
                                            $url_edit = base_url() . "index.php/centre/view/$centre->ID";
                                            echo "<a class='btn-floating green' href='$url_view'><i class='mdi-content-create'></i></a>
                                            <a class='btn-floating blue' href='$url_edit'><i class='mdi-action-search'></i></a>
                                            </td>";
                                            echo "</tr>";
                                          }
                                          ?>
                                            <tr>
                                                <td>2</td>
                                                <td>نجوم الرياضه</td>
                                                <td>0</td>
                                                <td>صالح بن محمد بن ناهض الظاهري</td>
                                                <td>-</td>
                                                <td>01-01-1970</td>
                                                <td>01-01-1970</td>
                                                <td>
                                                    <ul>
                                                        <div class="row">
                                                            <div class="col s4">
                                                                <li><a class="btn-floating green"><i class="mdi-content-create"></i></a></li>
                                                            </div>
                                                            <div class="col s4">
                                                                <li><a class="btn-floating blue"><i class="mdi-action-search"></i></a></li>
                                                            </div>
                                                        </div>
                                                    </ul>
                                                </td>
                                            </tr>
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
