<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Checklist Templates</h4>
            <div class="divider"></div>
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
                    $url_edit = base_url()."index.php/checklist/edit_question/".$question->id; 
                    echo "<section>";
                    echo "<a class='btn waves-effect waves-light blue accent-3 right' href='$url_edit' >Edit</a>";
                    echo "<h5>Statement:</h5>";
                    echo "<p>$question->statement</p>";
                    echo "<div class='row'>";
                    $severity = get_severity_text($question->severity);
                    echo "<button class='btn waves-effect waves-light amber accent-3' name='action'>$severity</button>";
                    echo "<br>";
                    echo "</div>";
                    echo "<br>";
                    echo "<div class='row answer'>";
                    echo 
                        "<button class='btn waves-effect waves-light ' name='action'>Yes</button>
                                        <button class='btn waves-effect waves-light ' name='action'>No</button>
                                        <button class='btn waves-effect waves-light ' name='action'>N/A</button>";
                    echo "</div>";
                    echo "</section>";
                    
                  }
                    }
            }
            

            ?>

           
        </div>
    </div>
    <!--end container-->
</section>

<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->