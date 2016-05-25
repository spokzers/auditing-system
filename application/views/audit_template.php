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
                        <tr class='green'>
                            <td>Total Marks</td>
                            <td id="totalMarks"> </td>
                        </tr>

                          <tr class='green'>
                            <td>Obtained Marks</td>
                            <td id="marksObtained"> </td>
                          </tr>

                          <tr class='green'>
                            <td>Percentage</td>
                            <td id="percent"> </td>
                          </tr>

                           <tr class='green'>
                            <td>Site Rank</td>
                            <td id="rank"> </td>
                          </tr>

                          <tr class='green'>
                            <td>Penalty Amount</td>
                            <td id="penalty_amount"></td>
                          </tr>
                          <tr class='green'>
                            <td>Final Result</td>
                            <td id="result"></td>
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
                           <tr class='purple text-center'>
                           <td><p>Site Ranking Policy</p></td>
                            
                          </tr>
  
                            <tr class='yellow'>
                            <td>Grade</td>
                            <td>Point Earned</td>
                            <td>Category</td>
                          </tr>

                          <tr>
                            <td>A</td>
                            <td>90-100%</td>
                            <td>High Compliance</td>
                          </tr>
                          <tr>
                            <td>B</td>
                            <td>80-89%</td>
                            <td>Satisfactory Compliance</td>
                          </tr>
                          <tr>
                            <td>C</td>
                            <td>70-79%</td>
                            <td>Needs Improvement</td>
                          </tr>
                          <tr>
                            <td>D</td>
                            <td>Less than 70%</td>
                            <td>Fail</td>
                          </tr> 

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
            echo "<ul class='collapsible' data-collapsible='accordion'>";
            foreach ($categories as $category) {
                echo "<li>";
                echo "<div class='collapsible-header'>$category</div>";
                foreach ($questions as $question) {
                  if($question->category == $category){
                    echo "<section class='collapsible-body' style='padding-left: 2%;'>";
                    echo "<h5>Statement:</h5>";
                    echo "<p>$question->statement</p>";
                    
                    echo "<div>";
                    $severity = get_severity_text($question->severity);
                    echo "<button class='btn waves-effect waves-light amber accent-3 severity' data-severity='$question->severity'>$severity</button>";
                    echo "<br>";
                    echo "</div>";
                    echo "<br>";
                    foreach ($penalties as $penalty) {
                        if($penalty->id == $question->id_penalty){
                            echo "<div class='penalty'>";
                            $url = base_url() . 'index.php/audit/insert_violations';
                            echo "<form class='penalty_form col s12' method='post' action='$url' enctype='multipart/form-data'>";
                            echo "<p>Penalty Description: $penalty->description</p>";
                            echo "<input name='penalty' type='number' class='amount' placeholder='Penalty Amount: Min: $penalty->min_amount - Max:$penalty->max_amount'  min='$penalty->min_amount' max='$penalty->max_amount'/>";
                            echo "<textarea name='comments' class='materialize-textarea penalty_comments' placeholder='Comments if any'></textarea>";
                            echo "<input type='file' name='attachment'>";
                            $id_audit = $audit[0]->id;
                            echo "<input type='text' name='id_audit' style='display: none;' value='$id_audit'>";
                            echo "<input type='text' name='id_question' style='display: none;' value='$question->id'>";
                            $id_inspector = $audit[0]->id_inspector;
                            echo "<input type='text' name='id_inspector' style='display: none;' value='$id_inspector'>";
                            echo "<input type='text' class='wids' style='display: none;' name='id_workers'>";
                            echo "<br>";
                            echo"<ul class='collection'>";
                            echo "<p>Select workers: </p>";
                            foreach ($workers as $worker) {
                              # code...
                            // $work_image = base_url()."uploads/worker/".$worker->picture;
                              $work_image = '';
                            echo"<li class='collection-item avatar'>
                                     <img src='$work_image' alt='' class='circle'>
                                     <span class='title' data-id='$worker->id'>$worker->name</span>
                                   </li>";
                            }
                            echo  "</ul>";
                            echo "</form>";
                            echo "</div>";
                        }
                    }
                    
                    echo "<div class=' answer'>";
                    echo 
                        "<button class='btn waves-effect waves-light yes' data-question='$question->id'>Yes</button>
                                        <button class='btn waves-effect waves-light no' data-question='$question->id'>No</button>
                                        <button class='btn waves-effect waves-light na' data-question='$question->id'>N/A</button>";
                    echo "</div>";
                    echo "</section>";
                    
                  }
                    }
                    echo "</li>";
            }
            echo "</ul>";

            ?>
            </div>

            <div class="row complete segment">
            <br>
            <div>

              <table class='disposal'>
               <h3>Disposal</h3>
                <div class="btn addmore" id="yolok">Add more</div>
                <thead class='disposal'>
                  <td>Storage Type</td>
                  <td>Category</td>
                  <td>Item Description</td>
                  <td>Units</td>
                  <td>Quantity</td>
                  <td>Reason</td>
                  <td>Remarks</td>
                </thead>
                <tbody class='disposal'>
                  <tr>
                    <td><?php print_select_v2('storage', -1, storage_types(), "class='storage'")?></td>
                    <td><?php print_select_v2('category', -1, disposal_categories(), "class='category'")?></td>
                    <td><input type="text" name='description' class="item_description"></input></td>
                    <td><?php print_select_v2('units', -1, disposal_units(), "class='units'")?></td>
                    <td><input type="number" name='qty' class="qty"></input></td>
                    <td><?php print_select_v2('disposal_reason', -1, disposal_reason(), "class='disposal_reason'")?></td> 
                    <td><input type="text" name='disposal_remarks' class="disposal_remarks"></input></td>  
                  </tr>                 
                </tbody>
              </table>
            </div>
            <br>

             <div>

              <table class='sample'>
               <h3>Sample Collection</h3>
                <div class="btn addmore" id="sampleadd">Add more</div>
                <thead class='sample'>
                  <td>Sample Name</td>
                  <td>Sample Code</td>
                  <td>Test Type</td>
                </thead>
                <tbody class='sample'>
                  <tr>
                    <td><input type="text" name='name' class="name"></input></td>
                    <td><input type="text" name='code' class="code"></input></td>
                    <td><?php print_select_v2('test_type', -1, sample_types(), "class='test_type'")?></td>
                  </tr>                 
                </tbody>
              </table>
            </div>
            <br>
            <div>
                <p>Site Status After Inspection:</p>
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