            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <div class="card-panel">
                        <!--liscense start-->
                        <div class="row">
                            <div class="col s12 m12 l12">
                                <h6>LICENSE STATUS</h6>
                            </div>
                        </div>
                    </div>
                    <!--liscense end-->
                    <!-- start stats card -->
                    <div class="card-panel">
                        <!--card stats start-->
                        <div class="row">
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content  cyan white-text">
                                        <p class="card-stats-title center"><i class="mdi-editor-insert-drive-file"></i> NOT ISSUED</p>
                                    </div>
                                    <div class="card-action  cyan darken-2 white-text">
                                        <h4 class="card-stats-number center">9</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content red white-text">
                                        <p class="card-stats-title center"><i class="mdi-editor-insert-drive-file"></i> EXPIRED</p>
                                    </div>
                                    <div class="card-action red darken-2 white-text">
                                        <h4 class="card-stats-number center">391</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l4">
                                <div class="card">
                                    <div class="card-content amber white-text">
                                        <p class="card-stats-title center"><i class="mdi-editor-insert-drive-file"></i> EXPIRING THIS MONTH</p>
                                    </div>
                                    <div class="card-action amber darken-2 white-text">
                                        <h4 class="card-stats-number center">13</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--card stats end-->
                    </div>
                    <!-- stat card end -->
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
                                            <label>Facility Name</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>License Name</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <input type="text" class="validate">
                                            <label>Owner Name</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <select>
                                                <option value="" disabled selected>Select an Activity</option>
                                                <option value="1">Manager</option>
                                                <option value="2">Developer</option>
                                                <option value="3">Business</option>
                                            </select>
                                            <label>Business Activity</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <select>
                                                <option value="1" selected>All</option>
                                                <option value="2">Expired</option>
                                                <option value="3">Not Issued</option>
                                                <option value="4">Validity Ending 30-04-2016</option>
                                            </select>
                                            <label>License Status</label>
                                        </div>
                                        <div class="input-field col s4">
                                            <select>
                                                <option value="1" selected>All</option>
                                                <option value="2">Manager</option>
                                                <option value="3">Developer</option>
                                                <option value="4">Business</option>
                                            </select>
                                            <label>Department</label>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="input-field col s4">
                                            <select>
                                                <option value="1" selected>A</option>
                                                <option value="2">B</option>
                                                <option value="3">C</option>
                                                <option value="4">D</option>
                                            </select>
                                            <label>Site Rank</label>
                                        </div>
                                        <div class="input-field col s8">
                                            <button class="btn cyan waves-effect waves-light right" type="submit" name="action">Search</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- search box end -->
                    <!-- audit conclusions start -->
                    <div class="row">
                        <div class="container">
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-action green">
                                        <div class="card-title">
                                            <h5>Audit Conclusions</h5>
                                        </div>
                                    </div>
                                    <div id="audit-status"></div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6">
                                <div class="card">
                                    <div class="card-action green">
                                        <div class="card-title">
                                            <h5>Status</h5>
                                        </div>
                                    </div>
                                    <div class="container">
                                        <table class="bordered hoverable">
                                            <thead>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Not Given</td>
                                                    <td>508</td>
                                                </tr>
                                                <tr>
                                                    <td>Passed</td>
                                                    <td>645</td>
                                                </tr>
                                                <tr>
                                                    <td>Warning</td>
                                                    <td>392</td>
                                                </tr>
                                                <tr>
                                                    <td>Suspension</td>
                                                    <td>2</td>
                                                </tr>
                                                <tr>
                                                    <td>Closure</td>
                                                    <td>5</td>
                                                </tr>
                                                <tr>
                                                    <td>Office Hearing</td>
                                                    <td>38</td>
                                                </tr>
                                                <tr>
                                                    <td>Warning and Office Hearing</td>
                                                    <td>93</td>
                                                </tr>
                                                <tr>
                                                    <td>Suspension and Office Hearing</td>
                                                    <td>3</td>
                                                </tr>
                                                <tr>
                                                    <td>Closure and Office Hearing</td>
                                                    <td>10</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- audit conclusions end -->
                    <!-- start table -->
                    <div class="card-panel">
                        <div id="row-grouping" class="section">
                            <h4 class="header">Facilities</h4>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table class="responsive-table display hoverable striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>License</th>
                                                <th>Owner</th>
                                                <th>Activity</th>
                                                <th>Workers</th>
                                                <th class="trn" data-trn-key="License Expiry">License Expiry</th>
                                                <th class="trn" data-trn-key="Site Ranking">Rank</th>
                                                <th class="trn" data-trn-key="Size">Size</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          <?php
                                          foreach ($facilities as $facility) {
                                            echo "<tr>";
                                            echo  "<td>$facility->id</td>";
                                            echo  "<td>$facility->name</td>";
                                            echo  "<td>$facility->license</td>";
                                            echo  "<td>$facility->owner</td>";
                                            echo  "<td>$facility->activity</td>";
                                            echo  "<td>$facility->workers</td>";
                                            echo  "<td>$facility->validity</td>";
                                            $bool = true;
                                            $other = false; 
                                            foreach ($audits as $audit) {
                                                
                                              if($audit->id_facility == $facility->id){
                                                $bool = false;
                                                $ranker = get_site_rank($audit->rank);
                                                if($ranker){
                                                    echo  "<td>$ranker</td>";
                                                }else{
                                                    // echo  "<td>N/A in else loop</td>";
                                                    $bool = true;
                                                }
                                               
                                              }
                                              
                                            }if($bool==true){
                                                echo  "<td>N/A/td>";
                                            }


                                            echo  "<td>$facility->space</td>";

                                            $url = base_url() . "index.php/facility/edit/$facility->id";
                                            $view_url = base_url() . "index.php/facility/view/$facility->id";
                                            $delete_url = base_url() . "index.php/facility/delete/$facility->id";
                                            $worker = base_url() . "index.php/facilityWorker/facility_view/$facility->id";
                                            echo
                                            "<td>
                                            <a class='btn-floating green' href='$url'><i class='mdi-content-create'></i></a>
                                            <a class='btn-floating yellow darken-1' href='$worker'><i class='mdi-social-person'></i></a>
                                            <a class='btn-floating blue' href='$view_url'><i class='mdi-action-search'></i></a>
                                            <a class='btn-floating red' href='$delete_url'><i class='mdi-action-delete'></i></a>
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
