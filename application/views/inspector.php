            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <div class="section">
                        <!--DataTables example Row grouping-->
                        <div id="row-grouping" class="section">
                            <h4 class="header trn" data-trn-key='EMPLOYEES'>Employees</h4>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table class="responsive-table display hoverable striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th class="trn" data-trn-key="Id">Id</th>
                                                <th class="trn" data-trn-key="Name">Name</th>
                                                <th class="trn" data-trn-key="Username">Username</th>
                                                <th class="trn" data-trn-key="Email">Email</th>
                                                <th class="trn" data-trn-key="Employee Level">Employee Level</th>
                                                <th class="trn" data-trn-key="Actions">Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          $designation = get_designation();
                                          foreach ($profiles as $profile) {
                                            echo "<tr>";
                                            echo "<td>$profile->id</td>";
                                            echo "<td>$profile->name</td>";
                                            echo "<td>$profile->username</td>";
                                            echo "<td>$profile->email&nbsp;</td>";
                                            $position = $designation[$profile->designation];
                                            echo "<td>$position</td>";
                                            echo "<td>";
                                            $url_view = base_url() . "index.php/inspector/view/$profile->id";
                                            $url_edit = base_url() . "index.php/inspector/edit/$profile->id";
                                            echo "<a class='btn green trn'  data-trn-key='View' href='$url_view'>View</a>
                                            <a class='btn blue trn'  data-trn-key='Edit' href='$url_edit'>Edit</a>
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
                <!--end container-->
            </section>
            <!-- END CONTENT -->
