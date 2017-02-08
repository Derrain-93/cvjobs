<!-- Page Content -->
<div class="container-fluid">
    <div class="content">
        <div class="row-fluid">
            <div class="col-lg-12">
                <div class="contact-search-bg">
                    <div class="contact-search-wrapper">
                        <?php echo form_open_multipart('JobsController/PostJob', 'class="form-inline"'); ?>
                        <div class="row">
                            <div class="col-lg-2">
                                <label class="control controlCheckbox">
                                    <input type="checkbox" />Graduate/Trainee
                                    <div class="controlIndicator"></div>
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="control controlCheckbox">
                                    <input type="checkbox" />Local Jobs
                                    <div class="controlIndicator"></div>
                                </label>
                            </div>
                            <div class="col-lg-2">
                                <label class="control controlCheckbox">
                                    <input type="checkbox" />Government
                                    <div class="controlIndicator"></div>
                                </label>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="sr-only" for="homeSearchJobs">Search Jobs</label>
                                    <input type="text" class="form-control" id="homeSearchJobs" placeholder="Search Jobs">
                                </div>
                                <div class="form-group">
                                    <button type="button" class="btn btn-default search-btn">Search Jobs</button>
                                </div>
                            </div>
                        </div>

                        <?php form_close() ?>

                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="post-job-wrapper">
                <div class="col-lg-6">
                    <h4 class="contact-message-title">Post a Job</h4>
                    <div class="contact-message-bg">
                        <div class="contact-message-wrapper">
                            <div class="row-fluid">
                                <span>This will send a high priority email to our sales team. We will call you back as soon as we can during normal working hours.</span>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label for="contactCompany" class="col-sm-3 control-label">Company Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" id="CompanyName" name="CompanyName"  class="form-control" id="contactCompany" placeholder="Company Name" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="contactCompanyEmail" class="col-sm-3 control-label">Company Email</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="CompanyEmail" class="form-control" id="contactCompanyEmail" placeholder="Company Email" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobCategory" class="col-sm-3 control-label">Job Category</label>
                                        <div class="col-sm-9">
                                            <?php
                                            if (!isset($JobTypesForPosting)) {
                                                
                                            } else {
                                                ?>
                                                <select class="form-control" id="jobCategory">
                                                <?php
                                                foreach ($JobTypesForPosting as $row) {
                                                    ?>
                                                        <option><?php echo $row['Type']; ?></option>
                                                        <?php
                                                    }
                                                    ?>
                                                </select>
                                                    <?php
                                                }
                                                ?>

<!--                                            <select class="form-control" id="jobCategory">
    <option>IT</option>
    <option>Hospitality</option>
</select>-->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobTitle" class="col-sm-3 control-label">Job Title</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="JobTitle" class="form-control" id="jobTitle" placeholder="Job Title" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobDescription" class="col-sm-3 control-label">Job Description</label>
                                        <div class="col-sm-9">
                                            <textarea class="form-control" name="JobDescription" id="jobDescription" placeholder="Job Description" rows="5" maxlength="200" onkeyup="countChar(this)"></textarea>
                                            <div><label id="charNum">0</label>/200</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobLocation" class="col-sm-3 control-label">Location</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="JobLocation" class="form-control" id="jobLocation" placeholder="Location" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="jobSalary" class="col-sm-3 control-label">Salary</label>
                                        <div class="col-sm-9">
                                            <input type="number" class="form-control" id="jobSalary"  name="JobSalary" placeholder="Salary" />
                                            <label class="control controlCheckbox negotiable">
                                                <input type="checkbox" />Negotiable
                                                <div class="controlIndicator"></div>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="openDate" class="col-sm-3 control-label">Opening Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="openDate"  name="OpenDate" placeholder="Opening Date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="closeDate" class="col-sm-3 control-label">Closing Date</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="closeDate" name="CloseDate" placeholder="Closing Date" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="image" class="col-sm-3 control-label">Image</label>
                                        <div class="col-sm-9">
                                            <input type="file" name="userfile" class="form-control" id="image" accept="image/*" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-default send-btn pull-right">Post</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="post-job-image-preview-bg">
                        <div class="post-job-image-preview-wrapper">
                            <div class="row-fluid post-job-image-preview-block">
                                <img id="preview" src="<?php echo base_url('Assets/img/Defaults/defaultPreview.png') ?>" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.container -->

<script>
    document.getElementById("image").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("preview").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };

    function countChar(val) {
        var len = val.value.length;
        if (len >= 201) {
            val.value = val.value.substring(0, 201);
        } else {
            $('#charNum').text(0 + len);
        }
    }
    ;
</script>
