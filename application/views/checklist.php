<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <div class="card-panel">
            <h4 class="header2">Checklist Templates</h4>
            <div class="divider"></div>
            <table class="striped hoverable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <!-- <td colspan="3" class="center"><strong>Housing Inspection</strong></td> -->
                    </tr>
                    <?php
                    foreach ($checklists as $checklist) {
                        # code...
                    echo "<tr>";
                    echo  "<td>$checklist->id</td>";
                    echo  "<td>$checklist->title</td>";
                    $url =  base_url(). "index.php/checklist/view/".$checklist->id;
                    echo    "<td><a href='$url' class='btn small btn-floating waves-effect green'><i class='mdi-action-visibility'></i></a></td>";
                    echo "</tr>";
                    }
                    

                    ?>
                </tbody>
            </table>
        </div>
    </div>
    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->