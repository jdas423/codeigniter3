<style>
    iframe {
        max-width: 100%;
    }

    #video-tab {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
    }

    .rating {
        align-items: center;
    }

    @media screen and (max-width: 520px) {
        .view-mor-dr-box .rating {
            justify-content: center;
        }

        #Pricing li strong {
            display: block;
            width: 100% !important;
        }
    }

    .accordion-button:focus {
        box-shadow: none;
    }

    .readmorebox.collapse:not(.show) {
        height: 128px !important;
        overflow: hidden;
        display: -webkit-box;
        /* -webkit-line-clamp: 4; */
        -webkit-box-orient: vertical
    }

    .readmore-btn {
        display: block;
        text-align: right;
        color: #005897;
        cursor: pointer;
    }

    .readmore-btn.collapsed:after {
        content: '+ Read More'
    }

    .readmore-btn:not(.collapsed):after {
        content: '- Read Less'
    }

    .view-more-bx {
        display: none
    }

    .view-more-csop-bx {
        display: none
    }

    .view-more-nrb-bx {
        display: none
    }

    .qna {
        max-height: unset
    }
</style>
<section class="serach-main">
    <div class="container">
        <!-- Modal Start for Doctor Availablity -->
        <!-- Model View End -->
        <!-- Doctor Main Info -->
        <div class="doctor-main">
            <div class="row">
                <div class="col-lg-3 col-md-2 col-sm-12 col-12">
                    <div class="doc_img">
                        <img src="<?php echo $doctor["image"] ?>" alt="<?php echo $doctor["name"] ?>" width="164"
                            height="183" title="<?php echo $doctor["name"] ?>">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-12">
                    <div class="doc_info">
                        <h1 class="h2">
                            <?php echo $doctor["name"] ?>
                            <img src="<?php echo base_url("assets/img/tick.svg") ?>" width="15" height="15"
                                alt="Doctor Tick" title="Doctor Tick">
                        </h1>
                        <div class="tag"><?php echo $doctor["profile"] ?></div>
                        <!-- Multi-Speciality If lots of Speciality Attached on the Doctors than Show all Speciality -->
                        <!-- Multi-Speciality End Here -->
                        <p>
                            <!-- Doctor Designation -->
                            <b><?php echo $doctor["designation"] ?></b><br>
                            <!-- Doctor Education -->
                            <?php
                            $qualifications = json_decode($doctor["qualifications"]);
                            for ($i = 0; $i < count($qualifications); $i++) {
                                if ($i == count($qualifications) - 1) {
                                    echo '<span class="span-edu">' . $qualifications[$i] . '</span>';
                                } else {
                                    echo '<span class="span-edu">' . $qualifications[$i] . ',</span>';
                                }
                            }
                            ?>
                        </p>
                        <!-- Rating Display of doctors -->
                        <div class="rating">
                            <!-- Show Rating Stars -->
                            <img alt="Rating Star" src="<?php echo base_url("assets/img/full_star.webp") ?>" width="13"
                                height="13" title="Rating Star">
                            <img alt="Rating Star" src="<?php echo base_url("assets/img/full_star.webp") ?>" width="13"
                                height="13" title="Rating Star">
                            <img alt="Rating Star" src="<?php echo base_url("assets/img/full_star.webp") ?>" width="13"
                                height="13" title="Rating Star">
                            <img alt="Rating Star" src="<?php echo base_url("assets/img/full_star.webp") ?>" width="13"
                                height="13" title="Rating Star">
                            <img alt="Rating Star" src="<?php echo base_url("assets/img/blank_star.webp") ?>" width="13"
                                height="13" title="Rating Star">
                            <?php echo $doctor["ratings"] . ' (' . $doctor["no_of_ratings"] . ' Ratings)'; ?>
                        </div>
                        <div>
                            <p><?php echo $doctor["year_of_experience"] ?> years of overall experience</p>
                            <p class="p-hospitalname">
                                Works at <strong><?php echo $doctor["hospital_address"] ?>,
                                    <?php echo ucfirst($doctor["hospital_city"]) ?></strong>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-12 col-12">
                    <div class="btn1-group">
                        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal"
                            style="width: 100%; text-align: center; display: block; margin: 20px 0 0;" title="Schedule">
                            <img style="margin-top: -6px;" src="<?php echo base_url('assets/img/Calendar.svg') ?>"
                                title="Schedule" alt="Schedule"> Schedule
                        </a>
                        <a class="btn btn-danger book-apt-btn doctor-apt-btn" href="#" title="Book Appointment"
                            style="display: inline-block;">Book Appointment</a>
                        <a class="btn btn-danger book-apt-btn send-enq-btn" style="display:none;" href="#"
                            title="Contact Doctor">Contact Doctor</a>
                        <a href="#" class="btn btn-success" title="Thank you">
                            <img style="width: 20px;margin-top:-8px;margin-right:5px;"
                                src="<?php echo base_url("assets/img/WhatsApp-Icon.svg"); ?>" alt="WhatsApp Us"
                                title="WhatsApp Us">WhatsApp Us
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Section -->
    </div>
</section>
<section class="doctor-allD">
    <div class="container">
        <div class="row content-row">
            <div class="col-lg-9 col-md-9 col-sm-12 col-12">
                <div class="left-content">

                    <!-- About Doctor Section -->
                    <div class="content-part" id="about-doctor">
                        <h2>About <?php echo $doctor["name"] ?></h2>
                        <div class="content">
                            <div class="readmorebox collapse" id="doctor-detail-body">
                                <ul>
                                    <?php
                                    $about = explode(".", $doctor["about"]);
                                    for ($i = 0; $i < count($about); $i++) {
                                        echo '<li>' . $about[$i] . '</li>';
                                    }
                                    ?>
                                </ul>
                            </div>
                            <p class="mb-0 text-end w-100">
                                <a class="readmore-btn collapsed" data-bs-toggle="collapse" href="#doctor-detail-body"
                                    aria-expanded="false" aria-controls=""></a>
                            </p>
                        </div>
                    </div>
                    <style>
                        .schedulebox ul,
                        .schedulebox ul li {
                            list-style: none;
                            padding: 0;
                            margin: 0
                        }

                        .time-sidual {
                            margin-top: 15px
                        }

                        #scheduleFee .btn {
                            width: 100%;
                            max-width: 360px
                        }

                        .sched-time {
                            background: #dbfedc;
                            padding: 0 20px;
                            border-radius: 4px;
                            display: flex;
                            line-height: 30px;
                            border: 1px solid #02b723;
                            color: #02b723;
                            align-items: center;
                            font-size: .95em
                        }

                        .time-bg {
                            background: #c1e4f9 url(https://www.vaidam.com/assets/v2/doctor_detail/images/opd-schedule-img-desktop.webp) no-repeat top -32px right 40px;
                        }

                        li.opd-li .w-100 {
                            width: 160px !important
                        }

                        @media screen and (max-width: 530px) {
                            .sched-time {
                                padding: 0 5px
                            }

                            .time-bg {
                                background: #c1e4f9
                            }
                        }
                    </style>
                    <div class="row py-3">
                        <div class="col-12">
                            <div class="schedulebox pt-3">
                                <div class="row mb-3 mb-lg-0">
                                    <div class="col-lg-9 d-flex mb-4 align-items-center gap-3 flex-wrap">
                                        <h3 class="ffs-4 mb-0">OPD Schedule Of <?php echo $doctor['name'] ?></h3>
                                        <h4 class="text-white mb-0 px-2 py-1 bg-theam rounded-2">Consultation Fees Rs.
                                            <?php echo $doctor['fees'] ?> /-
                                        </h4>
                                    </div>
                                    <div class="col-lg-3 mb-4"> <a
                                            class="btn btn-danger book-apt-btn doctor-apt-btn w-100" href="#"
                                            title="Book Appointment" style="display: inline-block;">Book Appointment</a>
                                        <a class="btn btn-danger book-apt-btn send-enq-btn w-100" style="display:none;"
                                            href="#" title="Contact Doctor">Contact Doctor</a>
                                    </div>
                                </div>
                                <div class="p-3 pt-0">
                                    <div class="row time-bg bg-vh-secondary rounded-4 py-3 px-1 px-md-3">
                                        <div class="col-lg-6">
                                            <ul class="time-sidual text-dark">
                                                <?php
                                                $schedule=json_decode($doctor["schedule"]);
                                                foreach($schedule as $k=>$v){
                                                    echo  '<li
                                                    class="opd-li day d-flex flex-wrap align-items-center row-gap-1 mb-3 column-gap-4">
                                                    <span class="weekday fw-bolder w-100">'.$k.'</span> <span
                                                        class="sched-time">'.$v.'</span>
                                                   </li>';
                                                }
 
                                                ?>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medical Problems Section -->
                    <div class="content-part" id="doctor_medical_problems_treated">
                        <div class="row">
                            <div class="col-12">
                                <h2>Medical Problems</h2>
                                <p>For which <?php echo $doctor["name"]; ?> can be consulted</p>
                                <div class="accordion" id="accordionExample">
                                    <?php
                                    $problems = json_decode($doctor["medical_problems"]);
                                    $index = 0;
                                    foreach ($problems as $key => $value) {
                                        $uniqueID = "collapseOne" . $index;
                                        echo '<div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $uniqueID . '" 
                                                    aria-expanded="false" aria-controls="' . $uniqueID . '">' . $key . '</button>
                                            </h3>
                                            <div id="' . $uniqueID . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <ul>';
                                        foreach ($value as $val) {
                                            echo '<li>' . $val . '</li>';
                                        }
                                        echo '</ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        $index++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Medical Procedures Section -->
                    <div class="content-part" id="doctor_medical_procedures_performed">
                        <div class="row">
                            <div class="col-12">
                                <h2>Medical Procedures</h2>
                                <p>Performed by <?php echo $doctor["name"]; ?></p>
                                <div class="accordion" id="accordionProcedures">
                                    <?php
                                    $procedures = json_decode($doctor["medical_procedures"]);
                                    $index = 0;
                                    foreach ($procedures as $key => $value) {
                                        $uniqueID = "collapseProcedure" . $index;
                                        echo '<div class="accordion-item">
                                            <h3 class="accordion-header mb-0">
                                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#' . $uniqueID . '" 
                                                    aria-expanded="false" aria-controls="' . $uniqueID . '">' . $key . '</button>
                                            </h3>
                                            <div id="' . $uniqueID . '" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                                <div class="accordion-body row">
                                                    <div class="col-md-6">
                                                        <ul>';
                                        foreach ($value as $val) {
                                            echo '<li>' . $val . '</li>';
                                        }
                                        echo '</ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>';
                                        $index++;
                                    }
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Location Section -->
                    <div class="content-part" id="location">
                        <h3>Location</h3>
                        <div class="row">
                            <div class="col-md-5">
                                <div class="hp-img">
                                    <img title="img" src="<?php
                                    $hospital_image_arr = json_decode($doctor["hospital_image_arr"]);
                                    echo $hospital_image_arr[0]; ?>" loading="lazy" width="288" height="177"
                                        alt="Hospital Images" class="img-fluid">
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="hospital-info flex-column gap-3">
                                    <div class="w-100 d-flex gap-2">
                                        <a class="locatio-icon" href="#" target="_blank" title="Location">
                                            <img src="<?php echo base_url("assets/img/location.svg") ?>" loading="lazy"
                                                width="21" height="30" alt="Location Image" title="Location Image">
                                        </a>
                                        <p>
                                            <a class="locatio-icon"
                                                href="<?php echo base_url("hospitals/hospital/") . $doctor["hospital_id"] ?>">
                                                <?php echo $doctor["hospital_name"] ?>,
                                                <?php echo $doctor["hospital_city"] ?>
                                            </a>
                                            <span>
                                                <?php echo $doctor["hospital_city"] ?>,
                                                <?php echo $doctor["hospital_country"] ?>
                                            </span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Education Section -->
                    <div class="content-part" id="education">
                        <div class="layout--tabs">
                            <div class="nav-tabs-wrapper">
                                <ul class="nav nav-tabs" id="tabEduTrain" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <h3><a class="nav-link" data-bs-toggle="tab" role="tab"
                                                href="#block-simple-text-1" aria-selected="false"
                                                aria-controls="block-simple-text-1" id="block-simple-text-1-tab"
                                                title="Education &amp; Training" tabindex="-1">Education &amp;
                                                Training</a></h3>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <h3><a class="nav-link" data-bs-toggle="tab" role="tab"
                                                href="#block-simple-text-2" aria-selected="false"
                                                aria-controls="block-simple-text-2" id="block-simple-text-2-tab"
                                                title="Honours &amp; Awards" tabindex="-1">Honours &amp; Awards</a></h3>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <h3><a class="nav-link active" data-bs-toggle="tab" role="tab"
                                                href="#block-simple-text-3" aria-selected="true"
                                                aria-controls="block-simple-text-3" id="block-simple-text-3-tab"
                                                title="Work Experience">Work Experience</a></h3>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content" id="tabEduTrainContent">
                                <!-- Education Block -->
                                <div id="block-simple-text-1"
                                    class="tab-pane block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                                    role="tabpanel" aria-labelledby="block-simple-text-1-tab">
                                    <?php
                                    $education_and_training = json_decode($doctor["education_and_training"]);
                                    for ($i = 0; $i < count($education_and_training); $i++) {
                                        echo '<ul><li>' . $education_and_training[$i] . '</li></ul>';
                                    }
                                    ?>
                                </div>

                                <!-- Awards Block -->
                                <div id="block-simple-text-2"
                                    class="tab-pane block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                                    role="tabpanel" aria-labelledby="block-simple-text-2-tab">
                                    <?php
                                    $honours_and_awards = json_decode($doctor["honours_and_awards"]);
                                    for ($i = 0; $i < count($honours_and_awards); $i++) {
                                        echo '<ul><li>' . $honours_and_awards[$i] . '</li></ul>';
                                    }
                                    ?>
                                </div>

                                <!-- Work Experience Block -->
                                <div id="block-simple-text-3"
                                    class="tab-pane active block block-layout-builder block-inline-blockqfcc-blocktype-simple-text"
                                    role="tabpanel" aria-labelledby="block-simple-text-3-tab">
                                    <ul>
                                        <?php
                                        $work_experience = json_decode($doctor["work_experience"]);
                                        for ($i = 0; $i < count($work_experience); $i++) {
                                            echo '<li>' . $work_experience[$i] . '</li>';
                                        }
                                        ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Banner Section -->
                    <div class="banner-part banner-theam-1">
                        <div class="content">
                            <h2 class="text-white">Want to consult the doctor?</h2>
                            <span>Don't Ignore Your Health!</span>
                            <a class="btn btn-danger" href="#" title="Send Enquiry">Send Enquiry</a>
                        </div>
                        <div class="image">
                            <img src="<?php echo base_url("assets/img/dr.png") ?>" loading="lazy"
                                alt="Want to consult the doctor?" width="356" height="180"
                                title="Want to consult the doctor?">
                        </div>
                    </div>

                    <!-- Form Section -->
                    <div class="blue-bx need-help-form" id="submitFrom">
                        <div class="dynamic_content">
                            <div class="main_container">
                                <style type="text/css">
                                    .primary-form {
                                        background-color: #f7f7f7;
                                    }

                                    .primary-form-field {
                                        width: 75%;
                                        margin: 0 auto;
                                    }
                                </style>
                                <section class="selected-doctor ms_v_cta_hide">
                                    <div class="container block-container">
                                        <div class="panel panel-default">
                                            <div class="panel-body panel-doctor-pif">
                                                <div class="modeofconsultation h2 bold" style="text-align:center;">Send
                                                    Your Enquiry</div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="container block-container">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form class="form-horizontal form-customize" id="genericForm"
                                                autocomplete="off">
                                                <input type="hidden" name="_token" id="_token"
                                                    value="AtNqlIlyLMPOwYD6p97BBuNgYZSUqSbWRsp6sfrd">
                                                <input type="hidden" name="pagetype" value="">
                                                <input type="hidden" name="page_source" id="page_source"
                                                    value="https://www.vaidam.com/doctors/dr-aruna-kalra">
                                                <input type="hidden" name="lang1" id="lang1"
                                                    value="https://www.vaidam.com/doctors/dr-aruna-kalra">
                                                <input type="hidden" name="preferredLocation" id="preferredLocation"
                                                    value="India">
                                                <input type="hidden" name="urlDepartment" id="urlDepartment"
                                                    value="GYNECOLOGY">
                                                <input type="hidden" name="urlSpeciality" id="urlSpeciality"
                                                    value="Gynaecologist and Obstetrician">
                                                <input type="hidden" name="hospital_Intent_Name"
                                                    id="hospital_Intent_Name" value="CK Birla Hospital, Gurgaon">
                                                <input type="hidden" name="Form_Location" id="Form_Location"
                                                    value="Form at footer">
                                                <input type="hidden" name="Page_Type" id="Page_Type"
                                                    value="Dr Detail Page">
                                                <input type="hidden" name="doctorName" id="doctorName"
                                                    value="Dr. Aruna Kalra">
                                                <input type="hidden" name="hospitalName" id="hospitalName"
                                                    value="CK Birla Hospital, Gurgaon">
                                                <input type="hidden" name="c_url" id="c_url" value="">

                                                <div class="form-group label-controls">
                                                    <label class="control-label col-sm-12" for="name">Name<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control new-form-control"
                                                            id="name" placeholder="Patient Name" name="name"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls">
                                                    <label class="control-label col-sm-12" for="email">Email<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input type="email" class="form-control new-form-control"
                                                            id="email" placeholder="Enter email" name="email"
                                                            required="">
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls">
                                                    <label class="control-label col-sm-12" for="country">Country<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <select class="form-control new-form-control form-select"
                                                            id="country" placeholder="Select Country" name="country"
                                                            required="true">
                                                            <option value="" selected="selected">Country</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AX">Aland Islands</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="BQ">Caribbean Netherlands</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo (Brazzaville)</option>
                                                            <option value="CD">Congo (Kinshasa)</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands
                                                            </option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong S.A.R., China</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="CI">Ivory Coast</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="XK">Kosovo</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao S.A.R., China</option>
                                                            <option value="MK">Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="AN">Netherlands Antilles</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PW">Palau</option>
                                                            <option value="PS">Palestinian Territory</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="ST">Sao Tome and Principe</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SX">Sint Maarten</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia and the South Sandwich
                                                                Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="VI">U.S. Virgin Islands</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom</option>
                                                            <option value="US">United States</option>
                                                            <option value="UM">United States Minor Outlying Islands
                                                            </option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls stategroup" style="">
                                                    <label class="control-label col-sm-12" for="state">City<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <div class="autocomplete">
                                                            <input id="city" class="form-control new-form-control"
                                                                type="text" name="city" placeholder="Select City">
                                                            <input type="hidden" id="state" name="state">
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls phn-block">
                                                    <label class="control-label col-sm-12" for="phone">Phone Number<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" id="country_phone_code"
                                                            name="country_phone_code"
                                                            class="form-control new-form-control col-md-2" value=""
                                                            readonly="" style="width: 15%; float: left;">
                                                        <input type="tel"
                                                            class="form-control new-form-control col-md-10"
                                                            id="phone_number" placeholder="Your Phone number"
                                                            name="phone_number" required="" style="width: 84%">
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="medicalissue">Medical Issue <span
                                                                class="red">*</span></label><br>
                                                        <textarea cols="5" rows="5" id="medical_problem"
                                                            name="medical_problem"
                                                            placeholder="Describe The Current Medical Problem .."
                                                            style="height:5%; width:100%; resize: vertical;"
                                                            required=""></textarea>
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls" id="ageblock" style="">
                                                    <label class="control-label col-sm-12" for="email">Patient's Age or
                                                        Date Of Birth<span class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <input type="text" class="form-control new-form-control"
                                                            id="age" placeholder="Example: 30 Yrs or 29-05-1985"
                                                            name="age">
                                                    </div>
                                                </div>

                                                <div class="form-group label-controls" id="emirates-id-block"
                                                    style="display: none;">
                                                    <label for="inputCity" class="form-label">Emirates ID</label>
                                                    <input type="text" class="form-control new-form-control"
                                                        name="emirates-id" id="emirates-id"
                                                        placeholder="Enter Emirates ID (To be shared with hospital)">
                                                </div>

                                                <div class="form-group label-controls">
                                                    <div class="col-sm-12 text-center">
                                                        <button type="submit" id="search-main-form-btn"
                                                            class="btn online-consult-button in_page_form">SUBMIT
                                                            DETAILS</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <div style="width: 100%;" class="form-group label-controls">
                                                <div class="col-sm-12 text-center">
                                                    <span class="formtns-triger text-muted">By submitting the form I
                                                        agree to the
                                                        <a title="Terms of Use" href="/terms-of-use"
                                                            class="terms_of_use" data-bs-toggle="modal"
                                                            data-bs-target="#formTerms">Terms of Use</a> and
                                                        <a title="Privacy Policy" href="/privacy-policy"
                                                            class="terms_of_use" data-bs-toggle="modal"
                                                            data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of
                                                        Vaidam Health.
                                                    </span>
                                                </div>
                                            </div>

                                            <!-- Start Modal Privacy Policy -->
                                            <div class="modal fade" id="formTerms" tabindex="-1" role="dialog"
                                                aria-labelledby="termsModalCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <span class="modal-title" style="font-weight: bold"
                                                                id="">Terms of Use</span>
                                                            <button type="button" class="close px-2 py-1 lh-1"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="terms_of_use"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary px-4 py-1"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Start Modal Privacy Policy -->
                                            <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog"
                                                aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true">
                                                <div class="modal-dialog modal-dialog-centered" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <span class="modal-title" style="font-weight: bold"
                                                                id="">Privacy Policy</span>
                                                            <button type="button" class="close px-2 py-1 lh-1"
                                                                data-bs-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body" id="privacy_policy"></div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary px-4 py-1"
                                                                data-bs-dismiss="modal">Close</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <style type="text/css">
                                                #formTerms,
                                                #formPrivacyPolicy {
                                                    font-size: 14px;
                                                    color: #666;
                                                    top: 30px
                                                }

                                                #formTerms .modal-dialog,
                                                #formPrivacyPolicy .modal-dialog {
                                                    margin: 0px auto;
                                                }

                                                #formTerms .modal-title,
                                                #formPrivacyPolicy .modal-title {
                                                    color: #666;
                                                    font-size: 16px;
                                                    margin: 10px
                                                }

                                                .formtns-triger {
                                                    opacity: .6;
                                                    font-size: 14px;
                                                    cursor: pointer;
                                                }

                                                #formTerms .modal-header,
                                                #formPrivacyPolicy .modal-header {
                                                    background: unset;
                                                    padding: 0 5px;
                                                    border: 0
                                                }

                                                #formTerms .close,
                                                #formPrivacyPolicy .close {
                                                    font-size: 30px;
                                                    color: #e43939;
                                                    position: absolute;
                                                    opacity: 1;
                                                    top: 1px;
                                                    right: 5px;
                                                    z-index: 999
                                                }

                                                #formTerms .modal-body,
                                                #formPrivacyPolicy .modal-body {
                                                    padding: 5px 15px;
                                                    max-height: 420px;
                                                    overflow: auto;
                                                    border-top: 1px solid #ddd;
                                                    border-bottom: 1px solid #ddd
                                                }

                                                #formTerms .modal-footer,
                                                #formPrivacyPolicy .modal-footer {
                                                    padding: 5px;
                                                    border-top: 0
                                                }

                                                #formTerms .modal-footer .btn,
                                                #formPrivacyPolicy .modal-footer .btn {
                                                    background: #e43939;
                                                    color: #fff;
                                                    font-size: 14px;
                                                    line-height: 1;
                                                    border-radius: 5px;
                                                    padding: 5px 8px
                                                }

                                                .modal-open .modal {
                                                    overflow-x: hidden;
                                                    overflow-y: hidden;
                                                }

                                                #formTerms h2,
                                                #formPrivacyPolicy h2 {
                                                    font-size: 16px;
                                                    color: #666
                                                }

                                                #formTerms ul,
                                                #formPrivacyPolicy ul,
                                                #formTerms ol,
                                                #formPrivacyPolicy ol {
                                                    padding-left: 15px
                                                }

                                                #formTerms .modal-content,
                                                #formPrivacyPolicy .modal-content {
                                                    background: #ffffff
                                                }

                                                .modal-backdrop.fade.in {
                                                    opacity: 0.5
                                                }

                                                .modal-backdrop {
                                                    --bs-backdrop-zindex: 0;
                                                }

                                                @media only screen and (max-width: 520px) {
                                                    div#formPrivacyPolicy {
                                                        top: 36px
                                                    }

                                                    #formTerms .modal-body,
                                                    #formPrivacyPolicy .modal-body {
                                                        max-height: 480px
                                                    }
                                                }

                                                .formtns-triger a {
                                                    color: #164399;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Similar Doctors Section -->
                    <div class="content-part" id="similar-doctor">
                        <h2 class="mb-4 mt-2">Other Top <?php echo $popular_doctors[0]["profile"] ?> In
                            <?php echo $popular_doctors[0]["city"] ?>
                        </h2>
                        <div class="doc_cnt">
                            <div class="row row-cols-2">
                                <?php
                                foreach ($popular_doctors as $pop) {
                                    echo '<div class="view-mor-dr-box col-md-6 mb-3" style="display: block;">
                                        <div class="doc_bx mb-0">
                                            <div>
                                                <figure>
                                                    <img class="img-responsive sm-doc-img" width="120" height="120"
                                                        loading="lazy"
                                                        src="' . $pop["image"] . '"
                                                        alt="' . $pop["name"] . '"
                                                        title="' . $pop["name"] . '">
                                                </figure>
                                                <div class="info">
                                                    <h3><a href="' . base_url("doctors/doctor/" . $pop['id']) . '">' . $pop["name"] . '</a></h3>
                                                    <div class="rating">
                                                        <img alt="Rating Star" src="' . base_url("assets/img/full_star.webp") . '" width="13" height="13" title="Rating Star">
                                                        <img alt="Rating Star" src="' . base_url("assets/img/full_star.webp") . '" width="13" height="13" title="Rating Star">
                                                        <img alt="Rating Star" src="' . base_url("assets/img/full_star.webp") . '" width="13" height="13" title="Rating Star">
                                                        <img alt="Rating Star" src="' . base_url("assets/img/full_star.webp") . '" width="13" height="13" title="Rating Star">
                                                        <img alt="Rating Star" src="' . base_url("assets/img/blank_star.webp") . '" width="13" height="13" title="Rating Star">
                                                        ' . $pop['ratings'] . ' (' . $pop['no_of_ratings'] . ' Ratings)
                                                    </div>
                                                    <span>' . $pop["profile"] . '</span>
                                                    <p class="exp mb-2">' . $pop['year_of_experience'] . ' years of experience</p>
                                                    <div class="location">' . $pop['hospital_name'] . ',' . $pop['city'] . '</div>
                                                </div>
                                            </div>
                                            <div class="btns geo-other">
                                                <a class="btn btn-danger book-apt-btn doctor-apt-btn"
                                                    href=""
                                                    title="Book Appointment" style="display: inline-block;">Book Appointment</a>
                                                <a class="btn btn-danger book-apt-btn send-enq-btn"
                                                    href="#" title="Contact Doctor"
                                                    style="display: none;">Contact Doctor</a>
                                                <a target="_blank"
                                                    href="#"
                                                    title="Whatsapp Chat" class="readmore chat small wa_button_clicked">
                                                    <img src="' . base_url('assets/img/whatsapp.svg') . '"
                                                        width="24" height="24" loading="lazy" alt="Whatsapp Chat"
                                                        title="Whatsapp Chat"> Chat
                                                </a>
                                            </div>
                                        </div>
                                    </div>';
                                }
                                ?>
                            </div>
                            <div class="col-12 see-more-doctor-btn d-flex">
                                <a href="#" class="more-doctors-btn btn btn-primary bg-vh-theam text-white"
                                    current_page="1" startlimit="3" id="loadmoredoc" title="View More Doctors">View More
                                    Doctors</a>
                            </div>
                        </div>
                    </div>

                    <!-- FAQ Section -->
                    <div class="content-part" id="qna">
                        <h2 class="mb-4 mt-2">FAQs About <?php echo $doctor["name"] ?></h2>
                        <div class="qna">
                            <?php
                            $faqs = json_decode($doctor["faq"], true);
                            foreach ($faqs as $key => $val) {
                                echo '<div class="view-more-bx" style="display: block;">
                                    <div class="q-bx mb-3">
                                        <img alt="Question" src="' . base_url("assets/img/q.svg") . '" loading="lazy" width="20" height="24" title="Question">
                                        <h3>' . $key . '</h3>
                                        <div class="a-bx">
                                            <img alt="Answer" src="' . base_url("assets/img/a.svg") . '" loading="lazy" width="20" height="24" title="Answer">
                                            <p><strong>Answer</strong></p>
                                            <p>' . $val . '</p>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                        </div>
                        <div class="d-flex justify-content-center">
                            <button class="more-doctors-btn btn btn-primary bg-vh-theam text-white" id="loadmorefaq"
                                title="Show More" style="display: none;">Show More</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Side Navigation -->
            <div class="col-lg-3 col-md-3 col-sm-12 col-12 mb-5 right-side-link">
                <ul>
                    <li><a href="#about-doctor" title="About Doctor" class="">About Doctor</a></li>
                    <li><a href="#work" title="Work Experience">Work Experience</a></li>
                    <li><a href="#education" title="Education &amp; Training" class="">Education &amp; Training</a></li>
                    <li><a href="#location" title="Location" class="">Location</a></li>
                    <li><a href="#submitFrom" title="Submit Form">Submit Form</a></li>
                    <li><a href="#similar-doctor" title="More Doctors" class="">More Doctors</a></li>
                    <li><a href="#qna" title="FAQs" class="">FAQs</a></li>
                </ul>
            </div>
        </div>
    </div>
</section>
<section class="vaidam-number mt-5">
    <div class="container text-center">
        <div class="blue-bx">
            <p style="font-size: 2em;"><strong>Our Network</strong></p>
            <div class="row row-cols-4">
                <div class="col-md-3">
                    <p>500<span>+</span></p>
                    <span>Top Hospitals</span>
                </div>
                <div class="col-md-3">
                    <p>10,000<span>+</span></p>
                    <span>Doctors</span>
                </div>
                <div class="col-md-3">
                    <p>50<span>+</span></p>
                    <span>Cities</span>
                </div>
                <div class="col-md-3">
                    <p>10<span>+</span></p>
                    <span>Countries</span>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-link-section">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 related-link-box">
                <div class="p-4 rounded-4 border bg-light mb-4">
                    <p class="fs-3 fw-semibold mb-1">You May Be Interested In</p>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($popular_doctors as $pop) {
                            echo '
                                 <li><a href="#">
                                ' . $pop["profile"] . ' in ' . $pop["hospital_name"] . ', ' . $pop['city'] . '</a>
                              </li>
                                ';
                        }
                        ?>
                    </ul>
                </div>
                <div class="p-4 rounded-4 border bg-light mb-4">
                    <p class="fs-3 fw-semibold mb-1">Top Hospitals In <?php echo $doctor["hospital_city"] ?></p>
                    <ul class="list-unstyled">
                        <?php
                        foreach ($popular_hospitals as $pop) {
                            echo ' <li><a href="' . base_url("hospitals/hospital/" . $pop["id"]) . '"
                               ">' . $pop["name"] . '</a></li>';
                        }

                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="sticky_enquiry_btn-mob">
    <a class="send-enquiry sticky-doctor-apt-btn" href="#" title="Book Appointment">
        Book Appointment
    </a>
    <a title="Contact Doctor" class="send-enquiry sticky-send-enq-btn" href="#" style="display:none;">
        Contact Doctor
    </a>
</div>

<div id="rk_chat_plugin">
    <div class="icon-for-whatsapp wa_button_clicked" style="position: fixed; bottom: 3%; right: 2%; z-index: 99999;">
        <a href="#" title="Whatsapp">
            <img loading="lazy" src="<?php echo base_url("assets/img/chat-icon-whatsapp.png") ?>" width="50" height="50"
                alt="Whatsapp" style="width: 50px; height: 50px; margin-top: -22px;" title="Whatsapp">
        </a>
    </div>
</div>

<script src="https://d3lclm53tbcdw6.cloudfront.net/js/bootstrap.min.js" type="text/javascript"></script>

<div id="menu-bottom" class="bottom-menu">
    <a href="#" class="readmore-outline me-2" title="Need Help">
        Need Help?
    </a>
    <a href="#" title="Whatsapp Chat" class="readmore whatsapp-color">
        <img loading="lazy" src="<?php echo base_url("assets/img/whatsaap-icon01.webp") ?>" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat
    </a>
</div>

<div class="sticky_enquiry_btn">
    <a href="#">
        Contact Us Now
    </a>
</div>

<div class="cgw-ext" data-ext-id="pdnenlnelpdomajfejgapbdpmjkfpjkp"></div>
<div class="cgw_main_container" style="font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol'; 
    line-height: 18px; user-select: text; font-weight: normal; letter-spacing: normal; -webkit-font-smoothing: auto;">
</div>

<button id="cgw_action_btn" tabindex="-1"
    style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;">
</button>