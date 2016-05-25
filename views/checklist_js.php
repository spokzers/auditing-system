<script type="text/javascript">
$(document).ready(function(){
	
	var category_id = 0;
	var question_id = 0;
	
	
	$('#second-page').hide();
	
	var get_heading_template = function(id, text_cat){
	var str = 	`<div class="row ques-chunk-heading">
		         <div class="input-field col s12">
		            <h5>Category</h5>
		            <input  type="text" class="post_category" value="` +  text_cat + `" counter="`+ id +`" >
		         </div>
		         <div>
		            <button class="btn waves-effect waves-light add-question-btn" counter="`+ id +`" name="action">Add Question</button>     
		         </div>
		    	</div>`;
	 return str;
	}

	var get_question_template = function(id, category){
	var str = 	`<div class="ques-chunk">
                        <div class="input-field col s12">
                        <input type="text" class="statement" category="` + category + `" counter="` +  id +`" name="contract_number">
                        <label>Statement</label>
                        </div>
                        <div class="row">
                        <div class="input-field col s12">
                        <select class="severity" category="` + category + `" counter="`+ id +`">
                            <option value='1'>Highly Severe (5 marks)</option>
                            <option value='2'>Medium Severity (3 marks)</option>
                            <option value='3'>Low Severity (1 marks) </option>
                        </select>
                        <label>Severity</label>
                        </div>
                        </div>
						<div class="row">
                        <div class="input-field col s12">
                        <select class="penalty" category="` + category + `" counter="`+ id +`">
                            <?php
							foreach ($penalties as $penalty) {
								echo "<option value='$penalty->id'>$penalty->description</option>";
							}
                            ?>
                        </select>
                        <label>Penalty</label>
                        </div>
						</div>
                     </div>`;
	 return str;
	};


	$('#def').click(function(){
		$('.round').css('background', '#ccc');
		$(this).css('background', '#FF4081');
		$('.hideable').hide();
		$('#first-page').show();
	});
	$('#ques').click(function(){
		$('.round').css('background', '#ccc');
		$(this).css('background', '#FF4081');
		$('.hideable').hide();
		$('#second-page').show();
	});

	$('#add-category').click(function(){
		category_id = category_id + 1;
		var cat_text = $('#ques_cat').val();
		$('.ques-chunk-main').append(get_heading_template(category_id, cat_text));
	});


	$('.ques-chunk-main').on('click', '.add-question-btn', function() {
  		question_id = question_id + 1;
		cat_id = $(this).attr('counter');
		$('.ques-chunk-main').append(get_question_template(question_id, cat_id));
	    $('select').material_select();
	});

	var get_categories = function(){
		var temp_cat_id = 1;
		var categories = [];
		for (var i = 1; i <= category_id; i++) {
			var cat_name = $(".post_category[counter='"+ i +"']").val();
			categories.push({
				     "id" : i,
				     "category" : cat_name, 
				 }); 
		}
		console.log(categories);
		return categories;
	};

	var get_questions = function(){
		var title = $('#template_title').val();
		var description = $('#description').val();
		var section = $('#section').val();
		var questions = {
			"title": title,
			"description": description,
			"section": section,
		};
		var categories = get_categories();
		for (var i = 1; i <= question_id; i++) {
			var statement = $(".statement[counter='"+ i +"']").val();
			var severity = $(".severity[counter='"+ i +"']").val();
			var penalty = $(".penalty[counter='"+ i +"']").val();
			var id_cat = $(".statement[counter='"+ i +"']").attr('category');
			questions[i] = {
				     // "id" : i,
				     "statement" : statement,
				     "severity"  : severity,
				     "id_penalty"	 : penalty,
				    //Temporary work need to implement the feature later
				     "category" : categories[id_cat - 1].category, 
				     // "id_category": 1
				 };
		}
		return questions;
	};

	$("#finish").click(function(){
		sendInfo = get_questions();
		console.log(sendInfo);
		 $.ajax({
           type: "POST",
           url: "<?php echo base_url();?>index.php/checklist/get_data",
           dataType: "json",
           data: sendInfo,	
           success: function (msg) {
               if (msg) {
               	  console.log(msg);	 
                   alert("Somebody was added in list !");
               } else {
                   alert("Cannot add to list !");
               }
           },
           error: function(errMsg) {
           console.error("error:",errMsg.responseText);
           // window.location = 
   			},

           
       });
	});

	// console.log($("div.test[counter='4']").text());
});
	
</script>