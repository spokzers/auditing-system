<script type="text/javascript">
    $(document).ready(function(){
    	$('.penalty').hide();
    	$('.segment').hide();
      // alert('Violenve');
      
    	var totalMarks = 0;
    	var marksObtained = 0;
    	var penalty_amount = 0;
       $('.collapsible').collapsible({
      accordion : true // A setting that changes the collapsible behavior to expandable instead of the default accordion style
    });

      $('.yes').each(function(){
        $(this).addClass('teal');
      });

      

      var get_datetime = function(){
        var currentdate = new Date(); 
        month = (currentdate.getMonth()+1);
        if(month < 10){
          month = "0" + month;
        }
        var datetime = currentdate.getFullYear() + "-"
                        + month  + "-" 
                        + currentdate.getDate()  + " "  
                        + currentdate.getHours() + ":"  
                        + currentdate.getMinutes() + ":" 
                        + currentdate.getSeconds();
          return datetime;
      }

      var sendDateTime = function(url){
        var currentdate = new Date(); 
        month = (currentdate.getMonth()+1);
        if(month < 10){
          month = "0" + month;
        }
        var datetime = currentdate.getFullYear() + "-"
                        + month  + "-" 
                        + currentdate.getDate()  + " "  
                        + currentdate.getHours() + ":"  
                        + currentdate.getMinutes() + ":" 
                        + currentdate.getSeconds();
          data = {};
          data['started_at'] = datetime;

         $.post(url ,data,
            function(url, data, status){
                console.log("Data: " + data + "\nStatus: " + status);
            }); 

      }

      sendDateTime("<?php echo base_url();?>index.php/audit/setdate/<?php echo $audit[0]->id;?>");

      var disposal_template = `<tr>
                    <td><?php print_select_v2('storage', -1, storage_types(), "class='storage'")?></td>
                    <td><?php print_select_v2('category', -1, disposal_categories(), "class='category'")?></td>
                    <td><input type="text" name='description' class="item_description"></input></td>
                    <td><?php print_select_v2('units', -1, disposal_units(), "class='units'")?></td>
                    <td><input type="number" name='qty' class="qty"></input></td>
                    <td><?php print_select_v2('disposal_reason', -1, disposal_reason(), "class='disposal_reason'")?></td> 
                    <td><input type="text" name='disposal_remarks' class="disposal_remarks"></input></td>  
                  </tr>`;

      var sample_template = `<tr>
                    <td><input type="text" name='name' class="name"></input></td>
                    <td><input type="text" name='code' class="code"></input></td>
                    <td><?php print_select_v2('test_type', -1, sample_types(), "class='test_type'")?></td>
                  </tr>`;

      var get_disposal_data = function(){
        data = {}
        $('tbody.disposal').find('tr').each(function(index){
          subdata = {
            storage: $(this).find('select.storage').val(),
            category:   $(this).find('select.category').val(),
            description:   $(this).find('input.item_description').val(),
            category:   $(this).find('select.units').val(),
            qty:   $(this).find('input.qty').val(),
            reason:   $(this).find('select.disposal_reason').val(),
            remarks:   $(this).find('input.disposal_remarks').val(),
            id_audit: <?php echo $audit[0]->id?>
          }
          data[index] = subdata;
            
        });

       $.post("<?php echo base_url();?>index.php/audit/insert_disposal",data,
            function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
            }); 
      }

      var get_sample_data = function(){
        data = {}
        $('tbody.sample').find('tr').each(function(index){
          subdata = {
            name: $(this).find('input.name').val(),
            code: $(this).find('input.code').val(),
            type:   $(this).find('select.test_type').val(),
            id_audit: <?php echo $audit[0]->id?>
          }
          data[index] = subdata;
            
        });

       $.post("<?php echo base_url();?>index.php/audit/insert_sample",data,
            function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
            }); 
      }

      var get_forms = function() {
        $('.noice > form.penalty_form').each(function(index){
          // console.log($(this)[0]);
          uploadImage($(this));
        });
      }

      $('#yolok').click(function(){
        $('tbody.disposal').append(disposal_template);
        $('select').material_select();
      });

      $('#sampleadd').click(function(){
        $('tbody.sample').append(sample_template);
        $('select').material_select();
      });

      $('li.avatar').click(function(){
        
        if($(this).hasClass('teal')){

          $(this).removeClass('teal');
          $(this).removeClass('lighten-2');
          var wids = "";
          $(this).siblings('li.teal').each(function(index){

            wids =  wids + $(this).find('span.title').data('id') + ",";
          });
          $(this).parent().siblings('input.wids').val(wids);
        }else{
          $(this).addClass('teal lighten-2');
          var wids = "";
          wids =  wids + $(this).find('span.title').data('id') + ",";
          $(this).siblings('li.teal').each(function(index){
            wids =  wids + $(this).find('span.title').data('id') + ",";
          });
          $(this).parent().siblings('input.wids').val(wids);
        }
        
        });

      var answer_data = function(){
        data = {}
        $('div.answer > .teal').each(function(index){
          d = {}
          if($(this).hasClass('yes')){
            d['answer'] = 1;
          }
          if($(this).hasClass('no')){
            d['answer'] = 2;
          }
          if($(this).hasClass('na')){
            d['answer'] = 3;
          }
          d['id_checklist'] = <?php echo $audit[0]->id_templates;?>; 
          d['id_question'] = $(this).data('question');
          d['id_audit'] = <?php echo $audit[0]->id;?>;
          data[index] = d;

        });

           $.post("<?php echo base_url();?>index.php/audit/insert_answer",data,
            function(data, status){
                console.log("Data: " + data + "\nStatus: " + status);
            }); 
        
      }

      var get_data = function(){
          var data = {};
          
          data['rank'] = calculate_rank(marksObtained, totalMarks);
          data['id'] = <?php echo $audit[0]->id; ?>;
          data['total_marks'] = totalMarks;
          data['marks_obtained'] = marksObtained;
          data['penalty'] = penalty_amount;
          data['comments'] = $('textarea.comments').val();
          data['pass'] = $('select.pass').val();
          data['penalty_deadline'] = dateParser($('input.deadline').val());
          data['status'] = 2;
          // data['started_at'] = get_current_date();
          data['ended_at'] = get_datetime();
          return data;
        };

        var dateParser = function(str){
          var compnents = "";
          if(str == ""){
            return "";
          }
          compnents = str.split(" ");
          var day = compnents[0].trim();
          if(parseInt(day) < 10){
            day = "0"+day;
          }
          var month = compnents[1].split(",")[0].trim();
          var year = compnents[2].trim();
          months = {};
          months['January'] = "01";
          months['February'] = "02";
          months['March'] = "03";
          months['April'] = "04";
          months['May'] = "05";
          months['June'] = "06";
          months['July'] = "07";
          months['August'] = "08";
          months['September'] = "09";
          months['October'] = "10";
          months['November'] = "11";
          months['December'] = "12";

          date = year + "-" + months[month] + "-" + day;

          return date;
        }

        var get_current_date = function(){
          var d = new Date();
          str = "";
          var month = d.getMonth();
          month = month + 1;
          if(month < 10){
            month = "0" + month;
          }
          var day = d.getDate();
          if(day < 10){
            day = "0" + day;
          }

          str = str + d.getFullYear() + "-" + month + "-" + day; 
          return str; 
        }

        var violations = function(){
          var counter = 1;
          var data = {};
          $('.no').each(function(index){
            if($(this).hasClass('teal')){
              data[counter] = $(this).data('question');
              counter = counter + 1;
            }
          });

          return data;
        }

        function uploadImage(penalty_form) {

              if (typeof FormData !== 'undefined') {

                  // send the formData
                  var formData = new FormData( penalty_form[0] );

                  $.ajax({
                      url : "<?php echo base_url();?>index.php/audit/insert_violation",  // Controller URL
                      type : 'POST',
                      data : formData,
                      async : false,
                      cache : false,
                      contentType : false,
                      processData : false,
                      success : function(data) {
                          console.log("Yea success"  + data);
                      }
                  });

              } else {
                 message("Your Browser Don't support FormData API! Use IE 10 or Above!");
              }   
          }  
    function site_rank(id){
      var rank = {};
      rank[1] = 'A';
      rank[2] = 'B';
      rank[3] = 'C';
      rank[4] = 'D';

      return rank[id];
    }

    function get_site_rank(){
      var rank = {};
      rank[1] = 'A';
      rank[2] = 'B';
      rank[3] = 'C';
      rank[4] = 'D';

      return rank;
    }

    function calculate_rank(marks_obtained, total_marks){
      percent = marks_obtained/total_marks * 100;
      if(percent > 90){
        return 1;
      }else if(percent > 80){
        return 2;
      }else if(percent > 70){
        return 3;
      }else{
        return 4;
      }
    }

      	var get_score = function(val){
      		var score = {};
      		score[1] = 5;
      		score[2] = 3;
      		score[3] = 1;
      		return score[val];
      	};

      	var calculate_score = function(){
      	    totalMarks =  0;
      		marksObtained = 0;
      		$(".severity").each(function(index){
      			var input = $(this).parent().siblings('div.answer').children('button.teal');
      			if(!input.hasClass('na')){
      				totalMarks = totalMarks + get_score($(this).data('severity'));
      			}
      			if(input.hasClass('yes')){
      				marksObtained = marksObtained + get_score($(this).data('severity'));
      			}
      			
      		});

      		$('#totalMarks').text(totalMarks);
      		$('#marksObtained').text(marksObtained);
      		$('#rank').text(site_rank(calculate_rank(marksObtained, totalMarks)));
          if(site_rank(calculate_rank(marksObtained, totalMarks)) == 'A'){
            $('#result').text('Pass');
            $('#pass').val('Pass With High Complaince');
          }
            if(site_rank(calculate_rank(marksObtained, totalMarks)) == 'B'){
            $('#result').text('Pass With Satisfactory Complaince');
            $('#pass').val('Pass With Satisfactory Complaince');
          }
          if(site_rank(calculate_rank(marksObtained, totalMarks)) == 'C'){
            $('#result').text(' Needs Improvement');
            $('#pass').val('Pass With Needs Improvement');
          }
           if(site_rank(calculate_rank(marksObtained, totalMarks)) == 'D'){
            $('#result').text('Fail');
            $('#pass').val('Fail');
          }
          $('#percent').text(marksObtained/totalMarks * 100);
      	};

      	var calculate_penalty = function(){
      		penalty_amount = 0;
      		$('div.penalty > form > input.amount').each(function(index){
      			if(!$(this).val() == ""){
      			penalty_amount = penalty_amount + parseInt($(this).val());
      			}
      		});
      		$('#penalty_amount').text(penalty_amount);
      	}


      	calculate_score();
        
        $("div.answer > button").click(function(){
            $(this).addClass('teal lighten-2');
            $(this).siblings().removeClass('teal lighten-2');
            calculate_score();

            if($(this).hasClass('no')){
            $(this).parent().siblings('div.penalty').show();
            $(this).parent().siblings('div.penalty').addClass('noice');
            }else{
            	$(this).parent().siblings('div.penalty').hide();
            }
        });

        $('.page').click(function(){
        	$('.segment').hide();
        	$("."+$(this).attr('id')).show();
        	calculate_penalty();
        });

        $('#submitScore').click(function(){
        	calculate_penalty();
        	data =  get_data();
        	
        	    $.post("<?php echo base_url();?>index.php/audit/finish_audit",data,
				    function(data, status){
				        // console.log("Data: " + data + "\nStatus: " + status);
				    });
        	 
           data = violations();

               $.post("<?php echo base_url();?>index.php/audit/increment_violations",data,
            function(data, status){
                // console.log("Data: " + data + "\nStatus: " + status);
            });
           get_forms();
           get_disposal_data();
           get_sample_data();
           answer_data();

            $('#<?php echo  $audit[0]->id; ?>').openModal();

        	// window.location = "<?php echo base_url();?>index.php/audit";
        });
         



    });
</script>
