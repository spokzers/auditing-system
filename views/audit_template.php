<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Checklist Templates</h4>
             <div class="row">
            <br>
            <div class="col s4">
                <div class="btn orange page" id="details">Details</div>
            </div>
            <div class="col s4">
                <div class="btn orange page" id="checklists">Checklist</div>
            </div>
              <div class="col s4">
                <div class="btn orange page" id="complete">Complete</div>
            </div>
            </div>
                
            <div class="row details segment">
            <br><br>
                <table>
                    <thead>
                        <td>Details</td>
                        <td>Information</td>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Total Marks</td>
                            <td id="totalMarks"> </td>
                        </tr>

                          <tr>
                            <td>Obtained Marks</td>
                            <td id="marksObtained"> </td>
                          </tr>

                           <tr>
                            <td>Rank</td>
                            <td id="rank"> </td>
                          </tr>

                          <tr>
                            <td>Penalty Amount</td>
                            <td id="penalty_amount"></td>
                          </tr>
                        <?php
                        $name = $facility[0]->name;
                        $owner = $facility[0]->owner;
                        $nic = $facility[0]->nic;
                        $email = $facility[0]->email;
                        $cell_no = $facility[0]->cell_no;
                        $location = $facility[0]->location;
                         echo "<tr>
                          <td>Facility Name</td>
                          <td>$name</td>
                           </tr>";

                        echo "<tr>
                          <td>Facility Owner</td>
                          <td>$owner</td>
                           </tr>";

                        echo "<tr>
                          <td>Identification Number</td>
                          <td>$nic</td>
                           </tr>";

                        echo "<tr>
                          <td>Email</td>
                          <td>$email</td>
                           </tr>";

                        echo "<tr>
                          <td>Cell Number</td>
                          <td>$cell_no</td>
                           </tr>";

                        echo "<tr>
                          <td>Location</td>
                          <td>$location</td>
                           </tr>";





                        ?>
                          



                    </tbody>
                </table>
            </div>

            
           
            
            <div class="divider"></div>
            <div class="checklists segment">
            <?php
            $categories = array();
            foreach ($questions as $question) {
                    array_push($categories, $question->category);
            }
            $categories = array_unique($categories);

            foreach ($categories as $category) {
                echo "<h3>$category</h3>";
                foreach ($questions as $question) {
                  if($question->category == $category){
                    echo "<section>";
                    echo "<h5>Statement:</h5>";
                    echo "<p>$question->statement</p>";
                    
                    echo "<div class='row'>";
                    $severity = get_severity_text($question->severity);
                    echo "<button class='btn waves-effect waves-light amber accent-3 severity' data-severity='$question->severity'>$severity</button>";
                    echo "<br>";
                    echo "</div>";
                    echo "<br>";
                    foreach ($penalties as $penalty) {
                        if($penalty->id == $question->id_penalty){
                            echo "<div class='penalty'>";
                            echo "<p>Penalty Description: $penalty->description</p>";
                            echo "<input type='number' placeholder='Penalty Amount: Min: $penalty->min_amount - Max:$penalty->max_amount'  min='$penalty->min_amount' max='$penalty->max_amount'/>";
                            echo "</div>";
                        }
                    }
                    
                    echo "<div class='row answer'>";
                    echo 
                        "<button class='btn waves-effect waves-light yes'>Yes</button>
                                        <button class='btn waves-effect waves-light no' data-question='$question->id'>No</button>
                                        <button class='btn waves-effect waves-light na'>N/A</button>";
                    echo "</div>";
                    echo "</section>";
                    
                  }
                    }
            }
            

            ?>
            </div>

            <div class="row complete segment">
            <br>
            <div>
                <?php
                print_select_v2('pass',-1, get_site_status(), "class='pass'");
                ?>
                <p>Comments: </p>
                <textarea placeholder="Type any comments if any" class='materialize-textarea comments'></textarea>
                <p>Penalty Deadline</p>
                <input class='datepicker deadline'  placeholder="Penalty Deadline Date" type="date"></input>
            </div>
                <button class="btn blue right" id="submitScore">Submit Result</button>
            </div>
           
        </div>
    </div>
    <!--end container-->
</section>

<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->