<!-- START CONTENT -->
<section id="content">
    <!--start container-->
    <div class="container">
        <!-- start search box -->
        <div class="card-panel">
            <!--liscense start-->
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>SEARCH</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <form>
                        <div class="row">
                            <div class="col s6">
                                <div class="col s3">
                                    <p>Date Range</p>
                                </div>
                                <div class="col s4">
                                    <input type="date" value="">
                                </div>
                                <div class="col s1">
                                    <p>TO</p>
                                </div>
                                <div class="col s4">
                                    <input type="date" value="<?php echo date(" Y-m-d ", strtotime('today')); ?>">
                                </div>
                            </div>
                            <div class="col s6">
                                <div class="col s4">
                                    <p>Inspector</p>
                                </div>
                                <div class="col s8">
                                    <?php
                                        foreach ($inspectors as $inspector) {
                                          $options[$inspector->id] = $inspector->name;
                                        }
                                        print_select('inspector',$inspectors[0]->id,$options, '');
                                    ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <button class="btn waves-effect waves-light " type="submit" name="action">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- search box end -->
        <!-- Inspector Violations start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>Inspector Violations</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <div id="inspector_violation_bar_chart"></div>
                </div>
            </div>
        </div>
        <!-- Inspector Violations end -->
        <!-- Inspector Penalties start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>Inspector Penalties</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <div id="inspector_penalties_bar_chart"></div>
                </div>
            </div>
        </div>
        <!-- Inspector Penalties end -->

        <!-- Disposals Summary start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6 class="trn" data-trn-key="Disposal Information">Disposals Summary</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <div id="disposals_summary_stacked_chart"></div>
                </div>
            </div>
        </div>
        <!-- Disposals Summary end -->
        <!-- Yearly Penalty Summary start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>Yearly Penalty Summary</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <div id="yearly_penalty_summary"></div>
                </div>
            </div>
        </div>
        <!-- Yearly Penalty Summary end -->
        <!-- Major Issues By Business Activity start -->
        <div class="card-panel">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h6>Major Issues By Business Activity</h6>
                    <div class="divider"></div>
                </div>
                <div class="container">
                    <div id="major_issues_by_ba"></div>
                </div>
            </div>
        </div>
        <!-- Major Issues By Business Activity end -->
    </div>

    <!--end container-->
</section>
<!-- END CONTENT -->
<!-- //////////////////////////////////////////////////////////////////////////// -->
