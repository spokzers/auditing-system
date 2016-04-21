            <!-- START CONTENT -->
            <section id="content">
                <!--start container-->
                <div class="container">
                    <div class="section">
                        <!--DataTables example Row grouping-->
                        <div id="row-grouping" class="section">
                            <h4 class="header">Employees</h4>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <table class="responsive-table display hoverable striped" cellspacing="0" width="100%">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Employee Level</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>

                                        <tbody>
                                          <?php
                                          foreach ($profiles as $profile) {

                                            echo "<tr>";
                                            echo "<td>$profile->id</td>";
                                            echo "<td>$profile->name</td>";
                                            echo "<td>$profile->username</td>";
                                            echo "<td>M$profile->email&nbsp;</td>";
                                            $position = $designation[$profile->designation];
                                            echo "<td>$position</td>";
                                            echo "<td>";
                                            echo "<a class='btn green' href='#!'>View</a>
                                            <a class='btn blue' href='#!'>Edit</a>
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
