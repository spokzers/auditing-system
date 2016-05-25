<script type="text/javascript">
    $(document).ready(function(){
    	$('.penalty').hide();
    	$('.segment').hide();
    	var totalMarks = 0;
    	var marksObtained = 0;
    	var penalty_amount = 0;

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
      	};

      	var calculate_penalty = function(){
      		penalty_amount = 0;
      		$('div.penalty > input').each(function(index){
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
                console.log("Data: " + data + "\nStatus: " + status);
            });
           
        	window.location = "<?php echo base_url();?>index.php/audit";
        });
         
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
          data['started_at'] = get_current_date();
          data['ended_at'] = get_current_date();
        	return data;
        };

        var dateParser = function(str){
        	var compnents = str.split(" ");
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


    });
</script>
