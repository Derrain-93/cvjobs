<!-- Page Content -->
<div class="container-fluid">
    <div class="content">
        <div class="row-fluid">
            <div class="col-lg-4">
                <div class="home-search-bg">
                    <div class="home-search-wrapper">
                        <form class="form-inline">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label class="sr-only" for="homeSearchJobs">Search Jobs</label>
                                        <input type="text" class="form-control" id="homeSearchJobs" placeholder="Search Jobs">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-default search-btn">Search Jobs</button>
                                    </div>
                                </div>
                            </div>
                            <br />
                            <div class="row">
                                <div class="col-lg-4">
                                    <label class="control controlCheckbox">
                                        <input type="checkbox" />Graduate/Trainee
                                        <div class="controlIndicator"></div>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="control controlCheckbox">
                                        <input type="checkbox" />Local Jobs
                                        <div class="controlIndicator"></div>
                                    </label>
                                </div>
                                <div class="col-lg-4">
                                    <label class="control controlCheckbox">
                                        <input type="checkbox" />Government
                                        <div class="controlIndicator"></div>
                                    </label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="home-urgent-opening-bg">
                    <div class="home-urgent-opening-wrapper">
                        <div class="row">
                            <h4>Urgent Opening</h4>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-8">
                <div class="home-job-categories-bg">
                    <div class="home-job-categories-wrapper">
                        <?php
                        if (!isset($JobTypes)) {
                            echo "No Job Types";
                            //$message = "No Job Types";
                            //echo "<script type='text/javascript'>alert('$message');</script>";
                        } else {
                            ?>
                            <?php
                            foreach ($JobTypes as $row) {
                                ?>
                                <div class="col-lg-3">
                                    <li><a href="#"><?php echo $row['Type']; ?> (122)</a></li>
                                </div>


                                <?php }
                            ?>
                            <?php
                        }
                        ?>


                        <!--<div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network (122)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network (12)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network (12)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network (12)</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Hospital (32)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital (20)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital (5)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance (32)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance (23)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance (10)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Security (4)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Human Resource (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Management (1)</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Administration (4)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Logistics (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Finance (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (1)</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Administration (4)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Logistics (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Finance (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (1)</a></li>
                            </div>
                        </div>-->
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="home-carousel-bg">
                    <div class="home-carousel-wrapper">
                        <div class="owl-carousel">
                            <div><a href="https://www.abansgroup.com/careers" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/Abans.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.brandixi3.com/careers/" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/Brandix.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.hemas.com/careers" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/Hemas.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.ifsworld.com/lk/company/careers/job-opportunities/" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/IFS.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://careers.masholdings.com/" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/MAS.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.millenniumit.com/join-us" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/MIT.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.softlogic.lk/careers-8.html" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/Softlogic.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://www.virtusa.com/careers/" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/virtusa.png') ?>" alt="" style="margin-left:5px"></a></div>
                            <div><a href="http://wso2.com/careers/apply/" target="_blank"><img src="<?php echo base_url('Assets/img/Company Logos/WSO2.png') ?>" alt="" style="margin-left:5px"></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="home-recommended-jobs-bg">
                    <div class="home-recommended-jobs-wrapper">
                        <div class="row-fluid">
                            <div class="home-recommended-jobs-title">
                                <h4>All Jobs (<?php echo count($Jobs); ?>)</h4>
                            </div>

                            <div class="searched-job-bg">
                                <div class="row-fluid">
                                    <div class="col-lg-12">
                                        <?php
                                        if (!isset($Jobs)) {
                                            echo "There are no Jobs.";
                                            //$message = "wrong answer";
                                            // echo "<script type='text/javascript'>alert('$message');</script>";
                                        } else {
                                            ?>
                                            <table class="table table-bordered">
<<<<<<< HEAD
                                                <tbody class="body-bordered">
                                            <?php
                                            foreach ($Jobs as $row) {
                                                ?>
                                                    <tr class="row-bordered">
                                                        <td class="searched-job-number-list cell-bordered">
=======
                                                <?php
                                                foreach ($Jobs as $row) {
                                                    ?>
                                                    <tr>
                                                        <td class="searched-job-number-list">
>>>>>>> 24d9f05b8c23521e0a2c51833b7c25cbf1f80553
                                                            <span><?php echo $row['id']; ?></span>
                                                        </td>
                                                        <td class="img-cell cell-bordered">
                                                            <div class="img-holder">
                                                                <img src="<?php echo base_url('Assets/img/Defaults/defaultUser.png') ?>" />
                                                            </div>
                                                        </td>
                                                        <td class="cell-bordered">        
                                                            <span class="searched-job-post"><?php echo $row['title']; ?></span> - <span class="searched-job-company"><?php echo $row['companyName']; ?></span>
                                                            <br />
                                                            Location - <span class="searched-job-location"><?php echo $row['location']; ?></span>&emsp;Salary - <span class="searched-job-salary"><?php echo $row['salary']; ?> Negotiable</span>&emsp;Posted - <span class="searched-job-posted-date"><?php echo $row['openDate']; ?></span>
                                                            <br />
                                                            <span class="searched-job-description"><?php echo $row['description']; ?></span>
                                                            <br />
                                                            <a class="searched-job-view-details" onclick="newWindow(<?php echo $row['id']; ?>)">View Details</a><span class="pull-right"><a class="searched-job-save">Save <i class="glyphicon glyphicon-star"></i></a></span>
                                                        </td>
                                                    </tr>
<<<<<<< HEAD
    <?php }
    ?>
                                                </tbody>
=======
                                                <?php }
                                                ?>
>>>>>>> 24d9f05b8c23521e0a2c51833b7c25cbf1f80553
                                            </table>
                                            <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">IT & Network</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Hospital</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Hospital</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Banking/Insurance</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Security</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Human Resource (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Management (1)</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Administration (4)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Logistics (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Finance (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (1)</a></li>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <li><a href="#">Administration (4)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Logistics (8)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Finance (2)</a></li>
                            </div>
                            <div class="col-lg-3">
                                <li><a href="#">Business (1)</a></li>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
      function newWindow(id) {
          alert(id);
          
          $.ajax ({
                        url:"<?php echo site_url('JobsController/AjaxSinglePost'); ?>",
                        //type:'POST',
                        //data:email,
                        type:"GET",
                        data:{id:""+id},
                        //dataType:"json",
                       
                        success:function(msg)
                        {
                           
                           window.open("viewJobDetails.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=600,height=600");
                           //$('body').html(msg);
                           // alert(msg);
                        }


                    }

                    );
          
          
          
          
          
          
            //window.open("viewJobDetails.html", "_blank", "toolbar=yes,scrollbars=yes,resizable=yes,top=100,left=300,width=600,height=600");
        }
 </script>
<!--		 /.container -->