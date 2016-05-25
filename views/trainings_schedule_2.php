<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container" style="">
        <!-- start stats card -->
        <!--card stats start-->
        <div class="card-panel">
            <!--card stats start-->
            <div class="row">
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-content  cyan white-text">
                            <div class="card-stats-title center">
                                <p><i class="mdi-action-account-circle medium"></i></p>
                                <p>UNTRAINED WORKERS</p>
                            </div>
                        </div>
                        <div class="card-action  cyan darken-2 white-text">
                            <h4 class="card-stats-number center">3694</h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-content  blue lighten-1 white-text">
                            <div class="card-stats-title center">
                                <p><i class="mdi-action-account-circle medium"></i></p>
                                <p>THIS SCHEDULE</p>
                            </div>
                        </div>
                        <div class="card-action  blue white-text">
                            <h4 class="card-stats-number center">10</h4>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l4">
                    <div class="card">
                        <div class="card-content  amber white-text">
                            <div class="card-stats-title center">
                                <p><i class="mdi-action-account-circle medium"></i></p>
                                <p>REMAINING WORKERS</p>
                            </div>
                        </div>
                        <div class="card-action  amber darken-2 white-text">
                            <h4 class="card-stats-number center">3283</h4>
                        </div>
                    </div>
                </div>
            </div>
            <!--card stats end-->
        </div>
        <!--card stats end-->
        <!-- stat card end -->
        <!-- form -->
        <form method="post" action="<?php echo base_url()."index.php/training/schedule/" ?>">
            <?php
                    $kount = 0;
                    for ($i=0; $i < $weeks; $i++) {
                        for ($j=0; $j < $count; $j++)
                        {
                            echo "<div class='card-panel'><h4 class='header2'>". date('l, F d, Y ', strtotime($weekdays[$kount])) ."- English</h4>";
                            echo "<div class='divider'></div><div class='row container'><div class='row'>";
                            echo "<div class='input-field col s12'>";

                            echo "<input id='date' name ='trainings[$i][date]' type='date' value='$weekdays[$kount]' disabled>";
                            echo "<label for='date' class='active'>Date</label>";
                            echo "</div></div><div class='row'>";
                            echo "<div class='input-field col s6'>";

                            echo "        <select name = 'trainings[$i][timing]'>";
                            echo "            <option value='1' selected>AM</option>";
                            echo "            <option value='2'>PM</option>";
                            echo "        </select>";
                            echo "        <label>Timings</label>";
                            echo "    </div>";
                            echo "</div>";
                            echo "<div class='row'>";
                            echo "    <div class='input-field col s6'>";

                            echo "        <input id='course_number' name = 'trainings[$i][id_course]' type='number' value='$course_id'>";
                            echo "        <label class='active' for='course_number'>Course Number</label>";
                            echo "    </div>";
                            echo "    <div class='input-field col s6'>";
                            echo "        <input id='number_of_workers' type='number' disabled='disabled' value='$workers'>";
                            echo "        <label class='active' for='number_of_workers'>Number of Workers</label>";
                            echo "    </div>";
                            echo "</div>";
                            echo "<div class='row'>";
                            echo "    <div class='input-field col s6'>";

                              foreach ($trainers as $trainer) {
                                $options[$trainer->id] = $trainer->name;
                              }
                              echo "<select name='trainings[$i][id_trainer]'>";
                              print_options($id_trainer, $options, "");
                              echo "</select>";

                            echo "        <label>Trainer</label>";
                            echo "    </div>";
                            echo "</div>";
                            echo "  </div>";
                            echo "</div>";
                            $kount++;
                        }
                    }
                     ?>
                <div class='row'>
                    <div class='input-field col s9'>
                        <button class='waves-effect waves-light btn' type="submit">Schedule</div>
                    </div>
                </div>
        </form>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
