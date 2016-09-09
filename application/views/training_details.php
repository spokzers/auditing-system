<div id="modal3" class="modal modal-fixed-footer" style="width:90%">
    <div class="modal-content">
        <h4>Worker Details</h4>
        <div class="divider"></div>
        <br>
        <table class="table striped">
            <thead>
                <tr>
                    <th>Worker Id</th>
                    <th>Iqama Number</th>
                    <th class="trn" data-trn-key="Worker Name">Name</th>
                    <th>Facility</th>
                    <th>Nationality</th>
                    <th>Health Card Expiry</th>
                    <th class="trn" data-trn-key="Language">Language</th>
                    <th class="trn" data-trn-key="Attendance">Attendance</th>
                    <th>Options</th>
                </tr>
            </thead>
            <tbody id="worker_table"></tbody>
        </table>
        <br>
        <div class="row" id="ajax-spinner">
            <div class="col s12 center">
                <div class="preloader-wrapper big center active">
                    <div class="spinner-layer spinner-blue">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-yellow">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                    <div class="spinner-layer spinner-green">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="gap-patch">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal-footer">
        <a href="#" class="waves-effect waves-green btn-flat modal-action modal-close">Close</a>
    </div>
</div>
<script type="text/javascript">
$(document).ready(function() {
    $('.tooltipped').tooltip({
        delay: 50
    });
});


function confirm_delete() {
    return confirm('THIS ACTION WILL DELETE ALL THE DATA FOR THIS TRAINING CLASS.\nARE YOU SURE YOU WANT TO CONTINUE?');
}


var id = "";


var worker_details = function(elem) {
    id = $(elem).attr("data-class-id");
    // console.log(id);
    get_workers(id);
    $("#ajax-spinner").css("display", "none");
}

var get_facility_name = function(id) {
    var result = null;
    var scriptUrl = "<?php echo base_url(); ?>index.php/training/get_facility/" + id;
    $.ajax({
        url: scriptUrl,
        type: 'get',
        dataType: 'html',
        async: false,
        success: function(data) {
            result = data;
        }
    });

    return result;
}

var delete_worker = function(id_training, id_worker) {
    var result = null;
    var remove_url = "<?php echo base_url(); ?>index.php/training/remove_worker/" + id_training + "/" + id_worker;
    $.ajax({
        url: remove_url,
        type: 'get',
        dataType: 'html',
        async: false,
        success: function(data) {
            result = data;
        }
    });
    get_workers(id_training);
    console.log("inside delete worker:" + result);
    return result;
}


var get_status = function(id_training) {
    var result = null;
    var url = "<?php echo base_url(); ?>index.php/training/get_status/" + id_training;
    $.ajax({
        url: url,
        type: 'get',
        dataType: 'html',
        async: false,
        success: function(data) {
            result = data;
        }
    });
    // get_workers(id_training);
    // console.log("inside delete worker:"+result);
    var data = jQuery.parseJSON(result);
    var status = [];
    for (var i = data.length - 1; i >= 0; i--) {
        // console.log(data[i].status);
        status.push(data[i].status);
    };
    // console.log(status);
    return status.reverse();
}



var get_workers = function(id) {
    var status = get_status(id);
    // console.log(status);
    $.get("<?php echo base_url(); ?>index.php/training/get_workers/" + id, function(data) {
        var obj = jQuery.parseJSON(data);
        var c = [];
        // console.log(status);
        for (var i = 0; i < obj.length; i++) {

            var facility = obj[i].id_facility;
            console.log(facility);

            var f_name = jQuery.parseJSON(get_facility_name(facility));
            console.log(typeof(f_name));
            console.log(f_name);
            // var remove_url = "<?php echo base_url(); ?>index.php/training/remove_worker/"+ id +"/"+ obj[i].id;

            var options = "<button class='tooltipped btn btn-floating waves-effect blue' data-position='bottom' data-delay='50' data-tooltip='Present & Trained' data-id-training='"+ id +"' data-id-worker='"+ obj[i].id +"' data-s='1'  onclick='update_details(this);'><i class='mdi-action-done'></i></button>";
            options += "<button onclick='update_details(this);' class='btn btn-floating waves-effect amber' data-id-training='"+ id +"' data-id-worker='"+ obj[i].id +"' data-s='2'><i class='mdi-content-remove-circle-outline'></i> Absent</button>";
            options += "<button onclick='delete_worker(" + id + "," + obj[i].id + ");' class='btn btn-floating waves-effect red'><i class='mdi-content-clear'></i> Remove</button>";

            c.push("<tr><td>" + obj[i].id + "</td>");
            c.push("<td>" + obj[i].id_no + "</td>");
            c.push("<td>" + obj[i].name + "</td>");
            c.push("<td>" + f_name[0].name + "</td>");
            c.push("<td>" + obj[i].nationality + "</td>");
            c.push("<td>" + obj[i].health_card + "</td>");
            c.push("<td>" + obj[i].language + "</td>");
            var stat = "";
            if (status[i] == 1) {
                stat = "Trained and Present";
            } else if (status[i] == 2) {
                stat = "Absent";
            }
            c.push("<td>" + stat + "</td>");
            c.push("<td>" + options + "</td></tr>");


        }
        // console.log(c);
        $('#worker_table').html(c.join(""));

        $('#worker_table').append("<tr><td colspan='9' class='center'><button class='btn waves-effect waves-light trn' data-trn-key='Add worker' onClick='worker_add();'>Add Worker</button></td></tr>");
        $('#worker_table').append(`<tr><td colspan='9' class='center'><button class='btn waves-effect waves-light trn' data-trn-key='Add worker' onClick='worker_auto_add(`+ id +`);'>Worker Auto Add</button></td></tr>`);

    });
}



var worker_auto_add = function (training_id) { 
    console.log("In function");
    $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/training/auto_add_workers",
            data: {
                "training_id": training_id
            },
            cache: "false",
            success: function(data) {
                console.log("Data :" + data);
                get_workers(training_id);
            },
            error: function(xhr, textStatus, errorThrown){
            console.log('request failed' + xhr + "  " + textStatus + "  " + errorThrown);
              }
        });
    console.log("Ending function");
}

var worker_add = function() {

    var insert = function(id_no, id) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>index.php/training/add_worker",
            data: {
                "id_no": id_no,
                "training_id": id
            },
            dataType: "json",
            cache: "false",
            success: function(data) {
                console.log("Data :" + data);
            }
        });
    };


    swal({
            title: "Add Worker",
            text: "Please enter a Iqama Number of the Worker:",
            type: "input",
            showCancelButton: true,
            closeOnConfirm: false,
            animation: "slide-from-top",
            inputPlaceholder: "Iqama Number"
        },
        function(inputValue) {
            if (inputValue === false) return false;
            if (inputValue === "") {
                swal.showInputError("Input can not be empty");
                return false
            }
            swal({
                    title: "Are you sure",
                    text: "A new worker will be added to this training",
                    type: "info",
                    showCancelButton: true,
                    closeOnConfirm: false,
                    showLoaderOnConfirm: true,
                },
                function() {
                    setTimeout(function() {
                        console.log(inputValue);
                        insert(inputValue, id);
                        swal("Done");
                        get_workers(id);
                    }, 2000);
                });
        });
}

var update_details = function(elem) {
    var tid = $(elem).attr("data-id-training");
    var wid = $(elem).attr("data-id-worker");
    var s = $(elem).attr("data-s");

    update_status(tid, wid, s);
};

var update_status = function(id_t, id_w, s) {

    var update = function(id_training, id_worker, status) {
          var  url = "<?php echo base_url(); ?>index.php/training/update_status/"+id_training+"/"+id_worker+"/"+status;
          console.log("url: "+url);
        $.ajax({
            // type: "POST",
            url: "<?php echo base_url(); ?>index.php/training/update_status/"+id_training+"/"+id_worker+"/"+status,
            // data: {
            //     "id_worker": id_worker,
            //     "id_training": id_training,
            //     "status": status
            // },
            dataType: "json",
            cache: "false",
            success: function(data) {
                // console.log("Data :" + data);
                swal("done");
            }
        });
    };


    swal({
            title: "Are you sure?",
            text: "Do you want to update the worker status?",
            type: "warning",
            showCancelButton: true,
            confirmButtonColor: "#DD6B55",
            confirmButtonText: "Yes, update it!",
            closeOnConfirm: false,
            showLoaderOnConfirm: true,
        },
        function() {
            setTimeout(function() {
                console.log("tid:"+id_t+" wid:" +id_w+"s:"+ s);
                update(id_t, id_w, s);
                swal("Done");
                get_workers(id);
            }, 2000);
            // swal("Deleted!", "Your imaginary file has been deleted.", "success");
        });
}
</script>
