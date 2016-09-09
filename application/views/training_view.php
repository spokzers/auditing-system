<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <div id="row-grouping">
                <h4 class="header">Trainings</h4>
                <div class="divider"></div>
                <div class="row">
                    <div class="col s12 m12 l12">
                        <table class="responsive-table striped">
                            <thead>
                                <tr>
                                    <td class="trn" data-trn-key="Class id">Class id</td>
                                    <td class="trn" data-trn-key="Language">Language</td>
                                    <td>Date</td>
                                    <td class="trn" data-trn-key="Trainer">Trainer</td>
                                    <td>Workers</td>
                                    <td class="trn" data-trn-key="Course Number">Course Number</td>
                                    <td class="trn" data-trn-key="Training Level">Training Level</td>
                                    <td class="trn" data-trn-key="Timing">Timing</td>
                                    <td class="trn" data-trn-key="Training Details">Details</td>
                                </tr>
                            </thead>
                            <tbody>
                              <?php
                              foreach ($trainings as $training) {
                                # code...
                                echo "<tr>";
                                echo "<td id='class_id'>$training->id</td>";
                                echo "<td>$training->language</td>";
                                echo "<td>$training->date</td>";
                                echo "<td>$training->id_trainer</td>";
                                echo "<td>$training->workers</td>";
                                echo "<td>$training->course_id</td>";
                                echo "<td>Level $training->level</td>";
                                echo "<td>$training->timing</td>";
                                $url_delete = base_url() . "index.php/training/delete/$training->id";
                                echo "<td>
                                <a class='tooltipped waves-effect waves-light btn btn-floating modal-trigger yellow darken-2' href='#modal3' onclick='worker_details(this);' id='worker_details' data-position='bottom' data-delay='50' data-tooltip='Details' data-class-id='$training->id'><i class='mdi-action-assignment'></i></a>
                                <a href='$url_delete' class='btn red btn-floating tooltipped' onClick='return confirm_delete()' data-position='bottom' data-delay='50' data-tooltip='Delete'><i class='mdi-action-delete'></i></a>
                                <a href='#!' class='btn green btn-floating tooltipped' data-position='bottom' data-delay='50' data-tooltip='Report'><i class='mdi-action-assignment'></i></a>
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
