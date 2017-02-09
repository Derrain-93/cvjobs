<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

<div class="wrapper">
    <div class="sidebar" data-color="blue">
    	<div class="sidebar-wrapper">
            <div class="logo">
                <span class="simple-text">
                    CV Jobs
                </span>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="jobs.html">
                        <i class="pe-7s-hammer"></i>
                        <p>Jobs List</p>
                    </a>
                </li>
            </ul>
    	</div>
    </div>

    <div class="main-panel">
		<nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Jobs List</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="<?php echo base_url('index.php/Login/destroyUser') ?>">
                                <p>Logout</p>
                            </a>
                        </li>
						<li class="separator hidden-lg hidden-md"></li>
                    </ul>
                </div>
            </div>
        </nav>

        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <ul class="nav nav-pills nav-justified">
                                    <li role="presentation" class="active pending"><a href="#pendingJobs" aria-controls="pendingJobs" role="tab" data-toggle="tab">Pending Jobs</a></li>
                                    <li role="presentation"><a href="#verifiedJobs" aria-controls="verifiedJobs" role="tab" data-toggle="tab">Verified Jobs</a></li>
                                    <li role="presentation"><a href="#declinedJobs" aria-controls="declinedJobs" role="tab" data-toggle="tab">Declined Jobs</a></li>
                                </ul>
                            </div>
                            
                            <div class="content table-responsive">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active" id="pendingJobs">
                                        <?php
                                        if (!isset($Jobs)) {
                                            echo "There are no Pending Jobs.";
                                            //$message = "wrong answer";
                                            // echo "<script type='text/javascript'>alert('$message');</script>";
                                        } else {
                                        ?>
                                            <table class="table table-bordered">
                                                <tbody class="body-bordered">
                                                <?php
                                                foreach ($Jobs as $row) {
                                                ?>
                                                    <tr class="row-bordered">
                                                        <td class="job-number-list cell-bordered">
                                                            <span><?php echo $row['id']; ?></span>
                                                        </td>
                                                        <td class="img-cell cell-bordered">
                                                            <div class="img-holder">
                                                                <img src="<?php echo base_url('Assets/img/Defaults/defaultUser.png') ?>" />
                                                            </div>
                                                        </td>
                                                        <td class="cell-bordered">        
                                                            <span class="job-post"><?php echo $row['title']; ?></span> - <span class="job-company"><?php echo $row['companyName']; ?></span>
                                                            <br />
                                                            Location - <span class="job-location"><?php echo $row['location']; ?></span>&emsp;Salary - <span class="job-salary"><?php echo $row['salary']; ?> Negotiable</span>&emsp;Posted - <span class="job-posted-date"><?php echo $row['openDate']; ?></span>
                                                            <br />
                                                            <span class="job-description"><?php echo $row['description']; ?></span>
                                                        </td>
                                                        <td class="cell-bordered">
                                                            <span class="actions-inline">
                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-check"></i>
                                                                    </a>
                                                                </span>

                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-close-circle"></i>
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        <?php }
                                        ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="verifiedJobs">
                                        <?php
                                        if (!isset($Jobs)) {
                                            echo "There are no Verified Jobs.";
                                            //$message = "wrong answer";
                                            // echo "<script type='text/javascript'>alert('$message');</script>";
                                        } else {
                                        ?>
                                            <table class="table table-bordered">
                                                <tbody class="body-bordered">
                                                <?php
                                                foreach ($Jobs as $row) {
                                                ?>
                                                    <tr class="row-bordered">
                                                        <td class="searched-job-number-list cell-bordered">
                                                            <span><?php echo $row['id']; ?></span>
                                                        </td>
                                                        <td class="img-cell cell-bordered">
                                                            <div class="img-holder">
                                                                <img src="<?php echo base_url('Assets/img/Defaults/defaultUser.png') ?>" />
                                                            </div>
                                                        </td>
                                                        <td class="cell-bordered">        
                                                            <span class="job-post"><?php echo $row['title']; ?></span> - <span class="job-company"><?php echo $row['companyName']; ?></span>
                                                            <br />
                                                            Location - <span class="job-location"><?php echo $row['location']; ?></span>&emsp;Salary - <span class="job-salary"><?php echo $row['salary']; ?> Negotiable</span>&emsp;Posted - <span class="job-posted-date"><?php echo $row['openDate']; ?></span>
                                                            <br />
                                                            <span class="job-description"><?php echo $row['description']; ?></span>
                                                        </td>
                                                        <td class="cell-bordered">
                                                            <span class="actions-inline">
                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-check"></i>
                                                                    </a>
                                                                </span>

                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-close-circle"></i>
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        <?php }
                                        ?>
                                    </div>

                                    <div role="tabpanel" class="tab-pane" id="declinedJobs">
                                        <?php
                                        if (!isset($Jobs)) {
                                            echo "There are no Declined Jobs.";
                                            //$message = "wrong answer";
                                            // echo "<script type='text/javascript'>alert('$message');</script>";
                                        } else {
                                        ?>
                                            <table class="table table-bordered">
                                                <tbody class="body-bordered">
                                                <?php
                                                foreach ($Jobs as $row) {
                                                ?>
                                                    <tr class="row-bordered">
                                                        <td class="searched-job-number-list cell-bordered">
                                                            <span><?php echo $row['id']; ?></span>
                                                        </td>
                                                        <td class="img-cell cell-bordered">
                                                            <div class="img-holder">
                                                                <img src="<?php echo base_url('Assets/img/Defaults/defaultUser.png') ?>" />
                                                            </div>
                                                        </td>
                                                        <td class="cell-bordered">        
                                                            <span class="job-post"><?php echo $row['title']; ?></span> - <span class="job-company"><?php echo $row['companyName']; ?></span>
                                                            <br />
                                                            Location - <span class="job-location"><?php echo $row['location']; ?></span>&emsp;Salary - <span class="job-salary"><?php echo $row['salary']; ?> Negotiable</span>&emsp;Posted - <span class="job-posted-date"><?php echo $row['openDate']; ?></span>
                                                            <br />
                                                            <span class="job-description"><?php echo $row['description']; ?></span>
                                                        </td>
                                                        <td class="cell-bordered">
                                                            <span class="actions-inline">
                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-check"></i>
                                                                    </a>
                                                                </span>

                                                                <span class="padding-actions">
                                                                    <a href="#">
                                                                        <i class="pe-7s-close-circle"></i>
                                                                    </a>
                                                                </span>
                                                            </span>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                ?>
                                                </tbody>
                                            </table>
                                        <?php }
                                        ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script> <strong>CVjobs</strong>. All Rights Reserved.
                </p>
            </div>
        </footer>


    </div>
</div>
