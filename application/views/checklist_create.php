<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Form Wizard</h4>
            <div class="divider"></div>
            
            <div class="row">
            <br>
            <div class="col s6">
                <div class="round type2 right" id="def">Definitions</div>
            </div>
            <div class="col s6">
                <div class="round type2" id="ques">Questions</div>
            </div>
            </div>
            
            <section class="hideable" id="first-page">

                <div class="row">
                     <div class="input-field col s12">
                        <?php
                        $options = get_section();
                        print_select_v2("section", -1, $options, "id='section'")
                        ?>
                        <label for="section">Category</label>
                     </div>
                </div>

                <div class="row">
                     <div class="input-field col s12">
                        <input id="template_title" type="text" name="contract_number">
                        <label for="template_title">Template Title</label>
                     </div>
                </div>

                <div class="row">
                     <div class="input-field col s12">
                        <input id="description" type="text" name="contract_number">
                        <label for="description">Description</label>
                     </div>
                </div>
            
         
                
            </section>

            <section class="hideable" id="second-page">
                
                <div class="ques-chunk-main">
                    
                </div>
                
        
                <br><br>
                <div class="divider" style="height: 25px; "></div>

                <section>
                 <div class="row">
                     <div class="input-field col s12">
                        <input id="ques_cat" type="text" name="contract_number">
                        <label for="ques_cat">Category</label>
                     </div>
                </div>
                 <div class="row">
                    <button class="btn waves-effect waves-light" id="add-category">Add</button>
                    <button class="btn waves-effect waves-light right" id="finish">Finish</button>       
                 </div>
                </section>

            </section>

                
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->


