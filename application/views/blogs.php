</div> <!-- header -->
<link href="https://d3lclm53tbcdw6.cloudfront.net/v2/knowledge-center/css/blog_index.css" rel="stylesheet">
<!-- Model open  --> <!-- Start Modal Privacy Policy -->
<div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span>
                <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span
                        aria-hidden="true">×</span> </button>
            </div>
            <div class="modal-body" id="terms_of_use"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1"
                    data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div>
        </div>
    </div>
</div> <!-- End Modal Terms --> <!-- Start Modal Privacy Policy -->
<div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Privacy
                    Policy</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal"
                    aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
            <div class="modal-body" id="privacy_policy"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1"
                    data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div>
        </div>
    </div>
</div> <!-- End Modal Privacy Policy -->



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

<section class="breadcrumb-section">
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("index") ?>">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Knowladge</a></li> -->
                <li class="breadcrumb-item"><span>Blogs</span></li>
            </ol>
        </nav>
    </div>
</section> <!-- <main> -->
<div class="text-center"> </div>

<section class="article-section">
    <div class="container border-bottom">
        <div class="row latest-multi">
            <div class="col-md-7 group-2"> <!--  -->
                <?php
                  $index=1;
                   foreach($blogs as $blog){
                    if($index>2) break;
                     echo '<div class="group-2-artic"> 
                        <a href="#">
                            <img class="article-image"
                                alt="'.$blog["topic"].'"
                                src="'.$blog["image"].'" style="width:100%;">
                        </a>
                        <div class="top-article-info-mob">
                            <h2 class="h4"><a
                                    href="'.base_url("blogs/blog/").$blog["id"].'"
                                   >'.$blog["topic"].'</a></h2>
                            <p class="category"><strong>Category:</strong> <a href="#"
                                   >'.$blog["category"].'</a></p>
                            <p class="last-update"><strong>Last Updated Date:</strong> '.(new DateTime($blog["updated_on"]))->format('d F,Y').'</p>
                            <p class="last-update"><strong>Created Date:</strong> '.(new DateTime($blog["created_on"]))->format('d F,Y').'</p>
                        </div>
                  </div>';
                  $index++;
                   }
                ?>
            </div>
            <div class="col-md-5 group-3"> <!--  -->
                 <?php
                   $rand_arr=[];
                   for($i=0;$i<3;$i++){
                       $rand_arr[]=rand(1,5);
                   }
                   foreach($rand_arr as $r){
                     echo ' <div class="group-3-artic"> <a
                        href="#"> <img
                            class="img-group3"
                            alt="'.$blogs[$r]["topic"].'"
                            width="120"
                            src="'.$blogs[$r]["image"].'">
                    </a>
                    <div class="">
                        <h2 class=""><a href="'.base_url("blogs/blog/").$blogs[$r]["id"].'"
                               >'.$blogs[$r]["topic"].'</a></h2>
                        <p class="category"><a href="#" title="Fertility">'.$blogs[$r]["category"].'</a>
                        </p>
                        <p class="last-update"><strong>Last Updated Date:</strong> '.(new DateTime($blogs[$r]["updated_on"]))->format('d F,Y').'</p>
                        <p class="last-update"><strong>Created Date:</strong> '.(new DateTime($blogs[$r]["created_on"]))->format('d F,Y').'</p>
                    </div>
                   </div>';
                   }


                  ?>
                </div> <!--  -->
            </div>
        </div>
    </div>
    <div class="container mt-40">
        <div class="row reverse-on-tab">
            <div class="col-md-8 all-article">
                <div class="category-serch border-bottom bg-primary mb-20">
                    <h4 class="h3 text-white">Select category</h4> <select name="speciality"
                        class="form-control select-article-category" id="category-search">
                        <option value="">Select Category</option>
                        <?php
                            foreach($categories as $category){
                               echo '<option value="'.$category["category"].'">'.ucwords($category["category"]).'</option>';
                            }

                        ?>
                    </select>
                </div>
                <script>
                    $(document).ready(function() {
                        $('#category-search').change(function() {
                           let value=$(this).val();
                           window.location= `blogs/index/${value}`;
                        })});
                </script>
                <?php
                   $blgs=[];
                   if($c) {
                        $blgs = $specific_blogs;
                    } else {
                        $blgs = $blogs;
                    }
                    print_r($c);
                    $index=1;
                   foreach($blgs as $b){
                    if($index>3) break;
                    echo '<div class="article-card-p">
                    <div class="article-card reverse-on-mobile">
                        <div class="article-list-details">
                            <h2 class="h4"><a
                                    href="'.base_url("blogs/blog/").$b["id"].'"
                                    >'.$b["topic"].'</a></h2> <!-- <p class="intro"><strong>By:</strong> shraddha</p> --> <span
                                class="article-card-sub-text">
                                <p class="category"><strong>Category:</strong> <a href="#"
                                        title="Cancer">'.$b["category"].'</a></p>
                                <p class="last-update"><strong>Last Updated Date:</strong> '.(new DateTime($b["updated_on"]))->format('d F,Y').'</p>
                                <p class="last-update"><strong>Created Date:</strong> '.(new DateTime($b["created_on"]))->format('d F,Y').'</p>
                            </span>
                        </div>
                        <div class="article-list-img">
                                <img alt="'.$b["topic"].'"
                                    src="'.$b["image"].'" style="width:100%;height:100%;">
                        </div>
                    </div>
                </div>';
                $index++;
                   }

                ?>
            </div>
            <div class="col-md-4 sticky-on-desktop">
                <aside>
                    <div id="custom-form" class="secondary-bg">
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
                                                <h2 class="modeofconsultation" style="text-align:center;">Get in
                                                    Touch with Medical Experts</h2>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <div class="container block-container">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <form class="form-horizontal form-customize" id="genericFormSearchPage"
                                                autocomplete="off"> <input type="hidden" name="_token" id="_token"
                                                    value="3DJqIWQ3ESw7nlQKf6EQJJJacPgWIZoQrCCmfT9C"> <input
                                                    type="hidden" name="pagetype" value=""> <input type="hidden"
                                                    name="page_source" id="page_source1"
                                                    value="#"> <input
                                                    type="hidden" name="Page_Type" id="Page_Type"
                                                    value="Knowledge Center List Page"> <input type="hidden"
                                                    name="Form_Location" id="Form_Location" value="Right Side Form">
                                                <input type="hidden" name="c_url" id="c_url1"
                                                    value="#">
                                                <div class="form-group label-controls"> <label
                                                        class="control-label col-sm-12" for="name">Name<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12"> <input type="text"
                                                            class="form-control new-form-control" id="name"
                                                            placeholder="Patient Name" name="name" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls"> <label
                                                        class="control-label col-sm-12" for="email">Email<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12"> <input type="email"
                                                            class="form-control new-form-control" id="email"
                                                            placeholder="Enter email" name="email" required="">
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls"> <label
                                                        class="control-label col-sm-12" for="country">Country<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12"> <select
                                                            class="form-control new-form-control" id="country1"
                                                            placeholder="Select Country" name="country" required="true">
                                                            <option value="" selected="selected">Country</option>
                                                            <option value="IN">India</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="SL">Sri Lanka</option>
                                                            <option value="US">USA</option>
                                                        </select> </div>
                                                </div>
                                                <div class="form-group label-controls stategroup" style=""> <label
                                                        class="control-label col-sm-12" for="state">City<span
                                                            class="red">*</span></label>
                                                    <div class="col-sm-12">
                                                        <div class="autocomplete"> <input id="city"
                                                                class="form-control new-form-control" type="text"
                                                                name="city" placeholder="Enter City"> <input
                                                                type="hidden" id="state" name="state"> </div>
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls"> <label
                                                        class="control-label col-sm-12" for="phone">Phone
                                                        Number<span class="red">*</span></label>
                                                    <div class="col-sm-12"> <input type="text" id="country_phone_code1"
                                                            name="country_phone_code"
                                                            class="form-control new-form-control col-md-2" value=""
                                                            readonly="" style="width: 15%; float: left;"> <input
                                                            type="tel" class="form-control new-form-control col-md-10"
                                                            id="phone_number" placeholder="Your Phone number"
                                                            name="phone_number" required="" style="width: 84%">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group"> <label for="medicalissue">Medical Issue
                                                            <span class="red">*</span></label> <!-- <br> -->
                                                        <textarea cols="5" rows="5" id="medical_problem"
                                                            name="medical_problem"
                                                            placeholder="Describe The Current Medical Problem .."
                                                            style="height:100%; width:100%; resize: vertical;"
                                                            required=""></textarea>
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls" id="ageblock" style="">
                                                    <label class="control-label col-sm-12" for="email">Patient's Age
                                                        or Date Of Birth<span class="red">*</span></label>
                                                    <div class="col-sm-12"> <input type="text"
                                                            class="form-control new-form-control" id="age"
                                                            placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls" id="emirates-id-block"
                                                    style="display: none;"> <label class="control-label col-sm-12"
                                                        for="inputCity"> Emirates ID </label>
                                                    <div class="col-sm-12"> <input type="text"
                                                            class="form-control new-form-control" name="emirates-id"
                                                            id="emirates-id"
                                                            placeholder="Enter Emirates ID (To be shared with hospital)">
                                                    </div>
                                                </div>
                                                <div class="form-group label-controls">
                                                    <div class="col-sm-12 text-center"> <button type="submit"
                                                            class="btn online-consult-button in_page_form">SUBMIT</button>
                                                    </div>
                                                </div>
                                            </form>
                                            <div class="form-group label-controls" style="width: 100%;">
                                                <div class="col-sm-12 text-center"> <span
                                                        class="formtns-triger text-muted">By submitting the form I
                                                        agree to the <a href="#" title="Terms of Use"
                                                            class="terms_of_use" data-bs-toggle="modal"
                                                            data-bs-target="#formTerms">Terms of Ue</a> and <a
                                                            href="#" title="Privacy Policy"
                                                            class="terms_of_use" data-bs-toggle="modal"
                                                            data-bs-target="#formPrivacyPolicy">Privacy Policy</a>
                                                        of Vaidam Health.</span> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </div>
                </aside>
            </div>
        </div>
    </div>
</section> <!-- </main> -->

<div class="container"> </div>

<div class="container">
    <div class="row"> </div>
</div> 
<style type="text/css">
    .extraClassNav {
        width: 70%;
        margin: auto;
    }
</style>
<div id="menu-bottom" class="bottom-menu"> <a
        onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');"
        href="#" class="readmore-outline me-2" title="Need Help">Need
        Help?</a> <a
        href="#"
        title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy"
            src="<?php echo base_url('assets/img/') . 'whatsaap-icon01.webp' ?>" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div> <a
    href="#"
    onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','Contact Us Now Sticky Button','','Knowledge Center List Page','','');"
    class="bg-danger py-2 text-center sticky-send-enquiry-bigscreen fs-5 fw-bold text-white">Contact Us Now</a>
<div id="thank">
    <h2><span style="color:#000080;">Thank you. We will contact you soon.</span></h2> <span
        class="closepopupoverlay">x</span>
</div>
<div id="mask"></div> <!--popup-->

<div class="sky-form-modal">
    <div id="quoteModal" class="modal"> <!-- Modal content -->
        <div class="modal-content">
            <div class="body-w body-s"> <!-- <form action="" class="sky-form"> -->
                <form class="sky-form" action="https://www.vaidam.com/webform/contact.php" method="post"
                    id="webform-client-form-3825" accept-charset="UTF-8" autocomplete="off"> <span
                        onclick="if (!window.__cfRLUnblockHandlers) return false; cancelQuote();" class="close">×</span>
                    <header>Help Us With Your Details <i class="fa fa-pencil"></i></header>
                    <fieldset>
                        <section>
                            <p style="color: #0053a6; text-align: justify; font-weight: bold; margin-bottom: 10px;">
                                To overcome restrictions due to Corona Virus, we are offering Paid Tele/Video Consultation from top doctors. Let us
                                know if you are interested &amp; we will contact you.
                            </p>
                            <input type="hidden" name="page_source" value="/knowledge-center"> 
                            <label class="input"> <i class="form-overlay-icon fa fa-user-o"></i> 
                                <input required="required" class="form-control form-text required" id="edit-submitted-name--2" name="name" value="" size="60" maxlength="128" placeholder="Name" type="text"> 
                            </label>
                            <span id="name_error" class="enquiry_error_msg"></span>
                        </section>
                        <section> 
                            <label class="input"> <i class="form-overlay-icon fa fa-envelope"></i> 
                                <input required="required" class="email form-control form-text form-email required" id="edit-submitted-email" name="email" size="60" placeholder="Email address" type="email"> 
                            </label> 
                            <span id="email_error" class="enquiry_error_msg"></span> 
                        </section>
                        <section> 
                            <label class="select flagstrap"> 
                                <span class="flag-icon-img flagstrap-icon" style="position: absolute;top: 14px;left: 7px;"></span> 
                                <i class="form-overlay-icon fa fa-sort overlay-sort"></i> 
                                <select required="required" onchange="if (!window.__cfRLUnblockHandlers) return false; countryChange(this);" class="override_select_box form-select required country-field icon-placement" id="edit-submitted-country" name="country" style="-webkit-appearance: none;">
                                    <option value="" selected="selected">Country</option>
                                    <option value="AF">Afghanistan</option>
                                    <option value="AX">Aland Islands</option>
                                    <option value="AL">Albania</option>
                                    <option value="DZ">Algeria</option>                                   
                                </select> 
                            </label> 
                            <span id="country_error" class="enquiry_error_msg"></span>
                        </section>
                        <section class="stateSelect" style="display: none;"> 
                            <label class="select"> <i class="form-overlay-icon fa fa-sort overlay-sort"></i> 
                                <select class="override_select_box form-select required state-field icon-placement" id="edit-submittedState" name="state">
                                    <option value="" selected="selected">Residence State</option>
                                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                    <option value="Assam">Assam</option>
                                    <option value="Bihar">Bihar</option>
                                    <option value="Chhattisgarh">Chhattisgarh</option>
                                    <option value="Delhi">Delhi</option>
                                    <option value="Goa">Goa</option>
                                    <option value="Gujarat">Gujarat</option>
                                    <option value="Haryana">Haryana</option>
                                </select> 
                            </label> 
                            <span id="state_error" class="enquiry_error_msg"></span>
                        </section>
                        <section> 
                            <label class="input label_merge"> <i class="form-overlay-icon fa fa-phone"></i>
                                <input type="text" name="country_code" class="phone_number merge_countryCode overlay-form-cc" readonly="readonly">
                                <input required="required" class="form-control form-text required merge_codeNumber overlay-form-number" id="edit-submitted-phone-number--2" name="phone_number" value="" size="60" maxlength="128" placeholder="Phone Number" type="text">
                            </label> 
                            <span id="phone_number_error" class="enquiry_error_msg"></span> 
                        </section>
                        <section> 
                            <label class="input"> 
                                <textarea required="required" class="sky-form-text-area required" id="edit-submitted-comment" name="comment" cols="60" rows="5" type="text" placeholder="Describe the problem"></textarea>
                            </label> 
                            <span id="comment_error" class="enquiry_error_msg"></span> 
                        </section>
                        <section class="visa_required"> 
                            <a href="#"><input type="checkbox" class="form-control form-text visa_webform" name="visa_required" value="yes"> I need visa invitation letter.</a> 
                        </section>
                        <section>
                            <input type="checkbox" id="online_consultation" name="online_consultation" value="1" style="transform: scale(1.5);"> 
                            <label for="online_consultation" style="color: #0053a6; font-weight: bold; font-size: 15px; margin-left: 5px;">I am OK with Paid Tele/Video Consultation</label><br> 
                        </section>
                        <section>
                            <div class="footer-button"> <button type="submit" class="button footer-button">Submit</button> </div>
                        </section>
                        <section>
                            <p style="text-align: center;"><span class="output_response"></span></p>
                        </section>
                        <section>
                            <div class="col-xs-2"><img alt="NABH" title="NABH" src="<?php echo base_url('assets/img/') . '/full_star.webp' ?>" width="60" height="60"></div>
                            <div class="col-xs-9">
                                <p style="margin-left: 15px;font-size: 12px;margin-top: 10px;">Vaidam is accredited by NABH, India's highest accreditation for healthcare service providers</p>
                            </div> <br>
                        </section>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>


<div id="rk_chat_plugin">
    <div class="icon-for-whatsapp wa_button_clicked" style="position: fixed;bottom: 3%;right: 2%;z-index: 99999;">
        <a href="#" title="whatsapp">
            <img src="<?php echo base_url('assets/img/') . '/full_star.webp' ?>" style="width: 50px;height: 50px;margin-top: -22px;" title="WhatsApp" alt="WhatsApp">
        </a>
    </div>
</div>


<style>
    a.whatsapp-chat {
        width: 45px;
        height: 45px;
        position: fixed;
        padding: 5px 7px;
        background: #fff;
        border-radius: 50%;
        bottom: 2%;
        right: 2%;
        line-height: 0;
        font-size: 36px;
        z-index: 9999;
        color: #40c351;
    }

    a.whatsapp-chat .fa-whatsapp:before {
        content: "\f232";
        font-weight: 900;
    }
</style>
<!-- <a id="whatsapp-chat" href="https://api.whatsapp.com/send?phone=919971616131&text=Hello, please contact me regarding http://www.vaidam.com/knowledge-center, Thank you!" class="whatsapp-chat"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModal" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header"> <button type="button" class="close" data-dismiss="modal"
                    aria-hidden="true">×</button> </div>
            <div class="modal-body">
                <div id="custom-form" class="secondary-bg">
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
                                            <h2 class="modeofconsultation" style="text-align:center;">Get in Touch
                                                with Medical Experts</h2>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <div class="container block-container">
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <form class="form-horizontal form-customize" id="kcModalForm"
                                            autocomplete="off"> <input type="hidden" name="_token" id="_token"
                                                value="3DJqIWQ3ESw7nlQKf6EQJJJacPgWIZoQrCCmfT9C"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source2" value="#">
                                            <input type="hidden" name="preferredLocation" id="preferredLocation"
                                                value="India"> <input type="hidden" name="Page_Type" id="Page_Type"
                                                value="Knowledge Center List Page"> <input type="hidden"
                                                name="Form_Location" id="Form_Location" value="Right Side Form">
                                            <input type="hidden" name="c_url" id="c_url2"
                                                value="#">
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="name">Name<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="text"
                                                        class="form-control new-form-control" id="name"
                                                        placeholder="Patient Name" name="name" required=""> </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="email">Email<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="email"
                                                        class="form-control new-form-control" id="email"
                                                        placeholder="Enter email" name="email" required=""> </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="country">Country<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <select class="form-control new-form-control"
                                                        id="country2" placeholder="Select Country" name="country"
                                                        required="true">
                                                        <option value="" selected="selected">Country</option>
                                                        <option value="AF">Afghanistan</option>
                                                        <option value="AX">Aland Islands</option>
                                                        <option value="AL">Albania</option>
                                                        <option value="DZ">Algeria</option>
                                                    </select> </div>
                                            </div>
                                            <div class="form-group label-controls stategroup2" style="display: none;">
                                                <label class="control-label col-sm-12" for="state">City<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12">
                                                    <div class="autocomplete"> <input id="city2"
                                                            class="form-control new-form-control" type="text"
                                                            name="city" placeholder="Select City"> <input type="hidden"
                                                            id="state2" name="state"> </div>
                                                </div>
                                            </div>
                                            <div class="form-group label-controls"> <label
                                                    class="control-label col-sm-12" for="phone">Phone Number<span
                                                        class="red">*</span></label>
                                                <div class="col-sm-12"> <input type="text" id="country_phone_code2"
                                                        name="country_phone_code"
                                                        class="form-control new-form-control col-md-2" value=""
                                                        readonly="" style="width: 15%; float: left;"> <input type="tel"
                                                        class="form-control new-form-control col-md-10"
                                                        id="phone_number2" placeholder="Your Phone number"
                                                        name="phone_number" required="" style="width: 84%"> </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group"> <label for="medicalissue">Medical Issue
                                                        <span class="red">*</span></label> <textarea
                                                        cols="5" rows="5" id="medical_problem" name="medical_problem"
                                                        placeholder="Describe The Current Medical Problem .."
                                                        style="height:100%; width:100%; resize: vertical;"
                                                        required=""></textarea> </div>
                                            </div>
                                            <div class="form-group label-controls">
                                                <div class="col-sm-12 text-center"> <button type="submit"
                                                        class="btn online-consult-button2">SUBMIT</button> </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



<div class="cgw-ext" data-ext-id="pdnenlnelpdomajfejgapbdpmjkfpjkp"></div>
<div class="cgw_main_container"
    style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 18px; user-select: text; font-weight: normal; letter-spacing: normal; -webkit-font-smoothing: auto;">
</div><iframe allow="join-ad-interest-group" data-tagging-id="AW-989645465" data-load-time="1742822474146" height="0"
    width="0"
    src="https://td.doubleclick.net/td/rul/989645465?random=1742822474100&amp;cv=11&amp;fst=1742822474100&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je53j1v879240773za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=102482433~102788824~102803279~102813109&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.vaidam.com%2Fknowledge-center&amp;ref=https%3A%2F%2Fwww.vaidam.com%2Fsearch&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Medical%20and%20Healthcare%20Blogs%20%7C%20Vaidam%20Health&amp;npa=0&amp;pscdl=noapi&amp;auid=794519535.1741836252&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B134.0.6998.118%7CNot%253AA-Brand%3B24.0.0.0%7CGoogle%2520Chrome%3B134.0.6998.118&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
    style="display: none; visibility: hidden;"></iframe><iframe height="0" width="0"
    style="display: none; visibility: hidden;"></iframe><button id="cgw_action_btn" tabindex="-1"
    style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;"></button>

    <script>
    $(document).ready(function () {
        $('#custom-form').on('submit', function (e) {
            e.preventDefault();

            var formData = {
                name: $('#name').val(),
                email: $('#email').val(),
                country: $('#country').val(),
                city: $('#city').val(),
                state: $('#state').val(),
                country_phone_code: $('#country_phone_code').val(),
                phone_number: $('#phone_number').val(),
                medical_problem: $('#medical_problem').val(),
                age: $('#age').val(),
            };

            $('.btn.online-consult-button.in_page_form').prop('disabled', true).html('Sending...');

            $.ajax({
                url: '/sample/patients/post_details',
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alert('Thank you! Your information has been submitted successfully.');
                        $('#name').val('');
                        $('#email').val('');
                        $('#country').val('');
                        $('#city').val('');
                        $('#state').val('');
                        $('#country_phone_code').val('');
                        $('#phone_number').val('');
                        $('#medical_problem').val('');
                        $('#age').val('');
                    } else {
                        alert(response.message || 'Error submitting form. Please try again.');
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred: ' + error);
                },
                complete: function () {
                    $('.btn.online-consult-button.in_page_form').prop('disabled', false).html('Submit');
                }
            });
        });

        // Update phone code when country changes
        $('#country1').on('change', function () {
            var countryCode = $(this).val();
            var phoneCode = getPhoneCode(countryCode);
            $('#country_phone_code1').val(phoneCode);
        });

        // Function to get phone code (you need to implement this)
        function getPhoneCode(countryCode) {
            var phoneCodes = {
                'US': '+1',
                'JP': '+44',
                'IN': '+91',
                'SL': '+971'
            };
            return phoneCodes[countryCode] || '';
        }

    });
</script>
<script>
    $(document).ready(function() {
    var loading = false;
    var hasMore = true;
    var category= $('#category-search').val;
    var limit=5;

    function isElement50PercentVisible($element) {
            const windowHeight = $(window).height();
            const scrollTop = $(window).scrollTop();
            const elementOffset = $element.offset().top;
            const elementHeight = $element.outerHeight();
            const elementTopVisible = scrollTop + windowHeight - elementOffset;
            const elementPercentVisible = elementTopVisible / elementHeight;
            console.log("===>")
            return elementPercentVisible >= 0.5;
        }

    function throttle(func, delay) {
        let lastCall = 0;
        return function() {
            const now = new Date().getTime();
            if (now - lastCall < delay) return;
            lastCall = now;
            return func.apply(this, arguments);
        };
    }

    $(window).on('scroll', throttle(function() {
        const $element = $('.bg-vh-theam');
        if ($element.length && isElement50PercentVisible($element)  && 
        !loading && hasMore) {
            loadMoreContent();
        }
    }, 200)); 

    function loadMoreContent() {
        loading = true;
        var offset=$(".article-card-p").length;
        $.ajax({
            url: `/sample/blogs/load_more/${limit}/${offset}`,
            type: 'GET',
            dataType: 'json', 
            success: function(response) {
                let htmlString = response["str"]; 
            
                htmlString = htmlString.replace(/\\"/g, '"')
                                    .replace(/\\r\\n/g, '')
                                    .replace(/\\t/g, '');
                console.log($(".col-md-8.all-article").html());
                $(".col-md-8.all-article").html( $(".col-md-8.all-article").html()+htmlString);
                 hasMore=response["hasMore"];
            },
            error: function(xhr, status, error) {
                console.error('Error loading content:', error);
            },
            complete: function() {
                loading = false;
                $('#loading-indicator').hide();
            }
        });
    }
});
</script>

