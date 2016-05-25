<script type="text/javascript">

var get_categories = function(){
  $('select').material_select();
  $('#category').find('option').remove();
  $('select').material_select();
  $.get( "<?php echo base_url();?>index.php/penalty/get_categories/", function( data ) {
   var obj = jQuery.parseJSON( data );
   for (var i = 0; i < obj.length; i++) {
     console.log(obj[i].id);
     console.log(obj[i].category);

     $('#category').append($("<option></option>")
                    .attr("value",obj[i].id)
                    .text(obj[i].category));
       $('select').material_select();
   }
 });
}


get_categories();


var create_category = function (){

  var insert = function (category){
    $.ajax({
                type: "POST",
                url: "<?php echo base_url(); ?>index.php/penalty/insert_category",
                data: {"category": category},
                dataType: "json",
                cache: "false",
                success: function () {
                  console.log("Data succesfully sent");

                }
            });
  };


  swal({   title: "Add Category",
                      text: "Please enter a category name:",
                      type: "input",   showCancelButton: true,
                      closeOnConfirm: false,
                      animation: "slide-from-top",
                      inputPlaceholder: "Write something" },
                      function(inputValue){
                          if (inputValue === false) return false;
                          if (inputValue === "") {
                          swal.showInputError("You need to write something!");
                          return false
                          }
                          swal({   title: "Are you sure",
                     text: "A new category will be added",
                     type: "info",   showCancelButton: true,
                     closeOnConfirm: false,
                     showLoaderOnConfirm: true, },
                     function(){
                       setTimeout(function(){
                         insert(inputValue);
                         get_categories();
                         swal("New Category named ''" + inputValue +"' has been added");
                       } ,2000);

                });

                 });

};

$('#add').click(function(){
  create_category();
});
</script>
