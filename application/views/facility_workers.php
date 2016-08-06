<!-- START CONTENT -->
            <section id='content'>
                <!--start container-->
                <div class='container'>
                    <!-- start search box -->
                    <div class='card-panel'>
                        <!--liscense start-->
                        <div class='row'>
                            <div class='col s12 m12 l12'>
                                <h6>SEARCH</h6>
                                <div class='divider'></div>
                            </div>
                            <div class='container'>
                                <form method="post" action="<?php echo base_url();?>index.php/facilityWorker/search">
                                    <div class='row'>
                                        <div class='input-field col s6'>
                                            <input type='text' class='validate' name="name">
                                            <label>Name</label>
                                        </div>
                                        <div class='input-field col s6'>
                                            <select name='status'>
                                                <option value='0'>All</option>
                                                <option value='1'>Trained</option>
                                                <option value='2'>Untrained</option>
                                                <option value='3'>Waiting</option>
                                            </select>

                                            <label>Status</label>
                                        </div>
                                    </div>
                                    <div class='row'>
                                    
                                        <div class='input-field col s6'>
                                            <input type='text' class='validate' name="license">
                                            <label>License Number</label>
                                        </div>
                                        <div class='input-field col s6'>
                                        <input type='text' class='validate' name="iqama">
                                            <label>Iqama Number</label>
                                        </div>
                                        <div class='row'>
                                            <div class='col s12'>
                                                <button class='btn cyan left-align waves-effect waves-light right' type="submit" name='action'>Search</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- search box end -->
                    <!-- start table -->
                    <div class='card-panel'>
                        <div id='row-grouping' class='section'>
                            <div class='row'>
                                <div class='col s6 left'>
                                    <h4 class='header'>Workers</h4>
                                </div>
                                <div class='col s6 right'>
                                    <?php
                                    if($facility == 1){
                                      $temp = $f_id;
                                      $add = base_url() . "index.php/facilityWorker/create/$temp";
                                      echo "<a href='$add' class='btn cyan left-align waves-effect waves-light right'>Add Worker</a>";
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class='row'>
                                <div class='col s12 m12 l12'>
                                    <table class='responsive-table display hoverable striped'>
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th class="trn" data-trn-key="Worker Name">Name</th>
                                                <th>Nationality</th>
                                                <th>Health Card Expiry</th>
                                                <th>Facility </th>
                                                <th>Iqama Number</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                          <?php
                                          foreach ($workers as $worker) {
                                            echo "<tr>";
                                            echo "<td>$worker->id</td>";
                                            echo "<td>$worker->name</td>";
                                            echo "<td>$worker->nationality</td>";
                                            echo "<td>$worker->health_card</td>";
                                            foreach ($facilities as $fac) {
                                                $bool = true;
                                                if($worker->id_facility == $fac->id){
                                                  $bool = false;
                                                  echo "<td>";
                                                  echo $fac->name;
                                                  echo "</td>";
                                                }
                                            }
                                            echo "<td>$worker->id_no</td>";
                                            $status = "";
                                            $status = get_worker_status($worker->status);

                                            echo  "<td><label style='color:#39b2a9'>$status</label></td>";
                                             $edit = base_url(). "index.php/FacilityWorker/edit/$worker->id";
                                             $card = base_url(). "index.php/pdfdom/worker_pdf_gen/$worker->id";
                                             $cert = base_url(). "index.php/pdfdom/worker_certificate_pdf_gen/$worker->id";
                                             $view = base_url(). "index.php/FacilityWorker/view/$worker->id";
                                           echo "<td>

                                                <a href='$card' class='btn blue btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Card'><i class='mdi-action-assignment-ind'></i></a>
                                                <a href='$view' class='btn green btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='View'><i class='mdi-action-visibility'></i></a>
                                                <a href='$edit' class='btn amber btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Edit'><i class='mdi-content-create'></i></a>
                                                <a href='#!' class='btn red btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Disable'><i class='mdi-content-clear'></i></a>
                                                <a href='$cert' class='btn green btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Certificate'><i class='mdi-action-assignment'></i></a>

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
