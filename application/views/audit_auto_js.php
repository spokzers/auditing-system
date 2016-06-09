<script type="text/javascript">
$(document).ready(function(){
	var facility = {};
	var inspector = {};
    var done = {};
    var template = {
        <?php foreach ($checklists as $checklist) {
            echo "'". $checklist->id . "'" . " : " . "'" . $checklist->title . "'" . ","; 
        } ?>
    };
	var currentDate = '';
	var oneDay = 24*60*60*1000;
	thedays = "";

	var get_text = function(data){
		var text = ``;
		temp = data;
		Object.keys(data).map(function(currentValue,index,arr){
			text = text + `<tr>`;
			text = text + `<td>` + currentValue +`</td>`;
			text = text + `<td>` + temp[currentValue].facility +`</td>`;
            text = text + `<td>` + temp[currentValue].template +`</td>`;
			text = text + `</tr>`;
		});

		return text;
	}

    var get_inspector_text = function(data){
        var text = ``;
        temp = data;
        Object.keys(data).map(function(currentValue,index,arr){
            text = text + `<tr>`;
            text = text + `<td>` + currentValue +`</td>`;
            text = text + `<td>` + temp[currentValue] +`</td>`;
            text = text + `</tr>`;
        });

        return text;
    }

	var get_schedule = function(data){
		var text = ``;
		temp = data;
		
		data_keys = Object.keys(data);
		for (var i = 0; i < data_keys.length; i++) {
			text = text + `<tr>`;
			text = text + `<td>` + data[i].facility.facility +`</td>`;
            text = text + `<td>` + data[i].facility.template +`</td>`;
			text = text + `<td>` + data[i].inspector +`</td>`;
			text = text + `<td>` + data[i].doa +`</td>`;
			text = text + `</tr>`;
		}
		
		

		return text;
	}

	dateParser = function(str){
          var compnents = str.split(" ");
          var day = compnents[0].trim();
          if(parseInt(day) < 10){
            day = "0"+day;
          }
          var month = compnents[1].split(",")[0].trim();
          var year = compnents[2].trim();
          months = {};
          months['January'] = "1";
          months['February'] = "2";
          months['March'] = "3";
          months['April'] = "4";
          months['May'] = "5";
          months['June'] = "6";
          months['July'] = "7";
          months['August'] = "8";
          months['September'] = "9";
          months['October'] = "10";
          months['November'] = "11";
          months['December'] = "12";

          date =   months[month] + "/" + day + "/" + year;

          return date;
        } 

        var get_dates = function(){
        	date1 = new Date(dateParser($('#start_date').val()));
			date2 = new Date(dateParser($('#end_date').val()));
			
        }

        var calculate_days  = function(){
		var diffDays = Math.round(Math.abs((date2.getTime() - date1.getTime())/(oneDay)));
		return diffDays;
        }

        var next_date = function(){
        	
        	if(currentDate == ""){
        		get_dates();
        		currentDate = date1;
        		thedays = calculate_days();
        	}else{
        		currentDate.setDate(currentDate.getDate() + 1);	
        		thedays = thedays - 1;
        	}
        	if(thedays < 0){
        		return thedays;
        	}
        	var day = currentDate.getDate();
        	var mm = currentDate.getMonth()+1;
        	var yyyy = currentDate.getFullYear();
        	
        	if(day < 10){
        		day = "0" + day;
        	}
        	if(mm<10){
        		mm='0'+mm;
		    } 
        	return yyyy + "-" + mm + "-" + day;
        }

        var map_data_table = function(){
        	data = [];
        	inspector_keys = Object.keys(inspector);
        	facility_keys = Object.keys(facility);
        	var counter_inspector = 0;
        	for (var i = 0; i < facility_keys.length; i++) {
        		data.push({id_facility: facility[facility_keys[i]],  id_inspector: inspector[inspector_keys[counter_inspector]]});
        		counter_inspector = counter_inspector + 1;
        		if(counter_inspector >= inspector_keys.length){
        			counter_inspector = 0;
        		} 
        	}
        	return data;
        }

        var get_table_data = function(){
        	data = map_data_table();
        	final_data = [];
        	temp = [];
        	final = {};
        	inspector_keys = Object.keys(inspector);
        	facility_keys = Object.keys(facility);
        	for (var j = 0; j < inspector_keys.length; j++) {
        		
        		for (var i = 0; i < data.length; i++) {
        			if(data[i].id_inspector == inspector[inspector_keys[j]]){
        				temp.push(data[i].id_facility);
        			}
        		}
        		// console.log(data[i].id_inspector);
        		final[data[j].id_inspector] = temp;
        		temp = [];

        	}

        	// return final;
        	final_keys = Object.keys(final);
        	data = {};
        	counter = 0;
        	currentDate = "";
        	for (var i = 0; i < final_keys.length; i++) {
        		// console.log(final[final_keys[i]].length);
        		// console.log(final[final_keys[i]]);
        		for (var j = 0; j < final[final_keys[i]].length; j++) {
        			var check = next_date();
        			if(check == -1){
        				continue;
        			}
        			data[counter] = {inspector:final_keys[i], facility: final[final_keys[i]][j], doa: check };
        			counter = counter + 1;
        		}
        		currentDate = "";
        		
        	}
        	return data;
        }


	
	var get_id = function(data , val){
		keys = Object.keys(data);
		for (var i = 0; i < keys.length; i++) {
			if(data[keys[i]] == val){
				return keys[i];
			}
		}
	}



	$('#select_facility').click(function(){
		facility[$('#pick_facility').val()] = {
                                                facility: $('select#pick_facility').find(":selected").text(), 
                                                template: $('select#pick_checklist').find(":selected").text(),
                                              } 
         
		$('tbody.facility_body').empty();
		$('tbody.facility_body').append(get_text(facility)); 
	});

	$('#select_inspector').click(function(){
		inspector[$('#pick_inspector').val()] = $('select#pick_inspector').find(":selected").text();
		$('tbody.inspector_body').empty();
		$('tbody.inspector_body').append(get_inspector_text(inspector)); 
	});



	$('#show').click(function(){
		$('tbody.schedule_body').empty();
		// console.log(get_table_data());
		$('tbody.schedule_body').append(get_schedule(get_table_data())); 
		var data = get_table_data();
		data_keys = Object.keys(data);
		final = {};
		for (var i = 0; i < data_keys.length; i++) {

            temp_id = get_id(facility, data[data_keys[i]].facility);

			final[i] = {	id_facility: get_id(facility, data[data_keys[i]].facility), 
							id_inspector: get_id(inspector, data[data_keys[i]].inspector), 
							doa:data[data_keys[i]].doa,
							section: $('#audit_type').val(),
							id_templates: get_id(template, facility[temp_id].template),
						};
			
		}
        done = final;
		console.log(final);
	});


    $('#send').click(function(){
        $('tbody.schedule_body').empty();
        // console.log(get_table_data());
        $('tbody.schedule_body').append(get_schedule(get_table_data())); 
        var data = get_table_data();
        data_keys = Object.keys(data);
        final = {};
        for (var i = 0; i < data_keys.length; i++) {

            temp_id = get_id(facility, data[data_keys[i]].facility);

            final[i] = {    id_facility: get_id(facility, data[data_keys[i]].facility), 
                            id_inspector: get_id(inspector, data[data_keys[i]].inspector), 
                            doa:data[data_keys[i]].doa,
                            section: $('#audit_type').val(),
                            id_templates: get_id(template, facility[temp_id].template),
                        };
            
        }
        done = final;
        console.log(final);

         $.post("<?php echo base_url();?>index.php/audit/insert_audits" ,final, function(url, data, status){
                console.log("Data: " + data + "\nStatus: " + status);
                // console.log($.parseJSON(status.responseText));
            });

         window.location = "<?php echo base_url();?>index.php/audit";
    });

});
	
</script>