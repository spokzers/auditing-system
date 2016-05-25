<div id="modal3" class="modal modal-fixed-footer">
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

var get_facility_name = function(id){
    var result = null;
     var scriptUrl = "<?php echo base_url(); ?>index.php/training/get_facility/"+id;
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


var get_workers = function(id) {
    $.get("<?php echo base_url(); ?>index.php/training/get_workers/" + id, function(data) {
        var obj = jQuery.parseJSON(data);
        var c = [];
        for (var i = 0; i < obj.length; i++) {

            var facility = obj[i].id_facility;

            var f_name = jQuery.parseJSON(get_facility_name(facility));
            // console.log(typeof(f_name));

            c.push("<tr><td>" + obj[i].id + "</td>");
            c.push("<td>" + obj[i].id_no + "</td>");
            c.push("<td>" + obj[i].name + "</td>");
            c.push("<td>" + f_name[0].name + "</td>");
            c.push("<td>" + obj[i].nationality + "</td>");
            c.push("<td>" + obj[i].health_card + "</td>");
            c.push("<td>" + obj[i].language + "</td>");
            c.push("<td>" + "" + "</td></tr>");


        }
        // console.log(c);
        $('#worker_table').html(c.join(""));

        $('#worker_table').append("<tr><td colspan='8' class='center'><button class='btn waves-effect waves-light trn' data-trn-key='Add worker' onClick='worker_add();'>Add Worker</button></td></tr>");

    });
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
                console.log("Data :"+data);
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
                        insert(inputValue,id);
                        swal("New Worker has been added to this training");
                        get_workers(id);
                    }, 2000);
                });
        });
}


</script>
