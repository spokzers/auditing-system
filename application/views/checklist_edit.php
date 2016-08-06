<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Edit Checklist Question</h4>
            <div class="divider"></div>
            <form method="post" action="<?php echo base_url()?>index.php/checklist/update_question">
            <label>Statement</label>
            <input type="text" name="statement" value="<?php echo $question->statement;?>">
            <input type="text" style="display:none;" name="id" value="<?php echo $question->id;?>">
            <label>Category</label>
            <input type="text" name="category" value="<?php echo $question->category;?>">
            <button class="btn " type='submit'>Update</button>
            </form>
        </div>
    </div>
    <!--end container-->
</section>

<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->