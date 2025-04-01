<?php
print_r($blog);
?>
<style>
    article img {
        max-width: 100% !important
    }

    .v-in-num-box p {
        font-size: 1.5em
    }

    .v-in-num-box .number {
        font-size: 72px;
        font-weight: 700;
        color: #000;
        line-height: 1;
        margin-bottom: 0
    }

    .v-in-num-box .number span {
        color: #005897;
        margin-left: 10px
    }

    .blog-info {
        font-size: 14px;
        color: #6f6f6f
    }

    @media screen and (min-width: 768px) {
        .article-heading {
            position: absolute;
            bottom: 0
        }

        .article-heading h1 {
            padding: 10px 20px 0;
            margin-bottom: 0;
            color: #fff
        }

        .article-heading .blog-info {
            padding: 5px 20px 10px;
            border-radius: 0 0 15px 15px;
            color: #d7d7d7
        }

        .article-heading h1,
        .article-heading .blog-info {
            background-color: #005897
        }

        span.text-uppercase a {
            color: white;
        }
    }

    .blog-bg-light {
        padding: 1.6em;
        background: #c1e4f9;
        border-radius: .75em;
        margin-bottom: 26px;
    }

    article ul li {
        font-size: 16px;
        color: #494949;
        margin-bottom: 5px;
        padding-left: 25px;
        list-style: none;
        background-image: url(https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/circle-green.webp);
        background-repeat: no-repeat;
        background-position: left top 3px;
        background-size: 15px
    }

    blockquote {
        position: relative;
        padding: 60px 30px 20px;
        background: #005897;
        border-radius: .75em;
        color: #fff;
        font-size: 18px;
        text-align: center
    }

    blockquote:after {
        content: "";
        width: 35px;
        height: 30px;
        position: absolute;
        top: 15px;
        left: 50%;
        margin-left: -17px;
        background: url(https://www.vaidam.com/assets/knowledge_center/dubbole-comma.webp) no-repeat;
        background-size: contain
    }

    aside.position-sticky {
        top: 30px;
        margin-bottom: 30px
    }

    .form-label {
        display: none
    }

    .author-box figure {
        width: 148px;
        text-align: center
    }

    .author-box .author-details {
        width: calc(100% - 158px)
    }

    .reviwer-details {
        width: calc(100% - 100px)
    }

    .reviwer-box {
        background: #d5ffe5
    }

    .reviwer-box figure {
        width: 80px;
        text-align: center;
    }

    .related-tag .btn {
        line-height: 28px !important;
        border: 1px solid #005897 !important;
        margin: 8px
    }

    .table-of-content {
        background-color: var(--bg-secondary)
    }

    .responsive-table {
        overflow-x: auto;
        margin: 26px 0;
        border-radius: 10px;
        border: 1px solid #eee
    }

    .responsive-table table tr:nth-child(even) td {
        background: #fff9e8
    }

    .responsive-table table tr td,
    .cnt_bx table tr th {
        border-bottom: 1px solid #ccc
    }

    .responsive-table table {
        border-radius: 20px;
        border: 1px solid #ddd;
        width: 100%
    }

    .responsive-table table tr th {
        background: #eff3f4;
        text-transform: capitalize;
        font-weight: 600
    }

    .responsive-table table tr td,
    .cnt_bx table tr th {
        padding: 15px;
        vertical-align: middle
    }

    .responsive-table table tr:last-child td {
        border-bottom: none
    }

    .responsive-table table .nowrap {
        white-space: nowrap
    }

    .responsive-table table p {
        margin-bottom: 0
    }

    .slick-track {
        left: -10px
    }

    .slick-slider {
        margin: 0;
        padding-bottom: 48px
    }

    .slick-slide {
        padding: 10px;
        margin-right: 10px;
        margin-left: 10px
    }

    .slick-dots {
        display: flex;
        justify-content: center;
        bottom: -10px;
        margin: 0 auto;
        max-width: 96%;
        padding: 1rem 0;
        list-style-type: none;

        li {
            margin: 0 0.25rem;
            border: 1px solid #ec4124;
            border-radius: 100%;
            overflow: hidden;
        }

        button {
            display: block;
            width: 1em;
            height: 1em;
            padding: 0;
            background-color: #fff;
            text-indent: -9999px;
        }

        li.slick-active button {
            background-color: #ec4124;
        }
    }

    .card-title,
    .card-text {
        color: #333
    }

    #btn-back-to-top {
        position: fixed;
        bottom: 80px;
        right: 32px;
        display: none
    }

    @media screen and (max-width: 768px) {
        .v-in-num-box .number {
            font-size: 42px
        }

        .v-in-num-box p {
            font-size: 1.25em
        }

        .author-box,
        .reviwer-box {
            flex-direction: column
        }

        .author-box figure,
        .reviwer-box figure {
            width: 100%
        }

        .author-box .author-details,
        .reviwer-box .reviwer-details {
            width: 100%
        }

        h1 {
            margin-top: 15px;
        }
    }

    article figure {
        margin-bottom: 0;
    }

    .article-image img,
    .article-img img {
        width: 100%;
        border-radius: 12px;
    }

    .blog-info img {
        filter: grayscale(100%);
    }

    .author-details p:last-child {
        margin-bottom: 0;
    }

    .slick-prev,
    .slick-next {
        background: #c1e4f9;
        border-radius: 50%;
        opacity: .98;
    }

    .slick-next {
        right: 5px;
    }

    .slick-prev {
        left: 5px;
    }

    iframe {
        border: 0;
        max-width: 100%;
        margin: 0 auto;
        display: block;
    }
</style> <!-- form model --> <!-- Model open  --> <!-- Start Modal Privacy Policy -->
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
<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle doctor-details pt-3"
    data-gtm-vis-recent-on-screen2242002_280="3588" data-gtm-vis-first-on-screen2242002_280="3588"
    data-gtm-vis-total-visible-time2242002_280="100" data-gtm-vis-has-fired2242002_280="1">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url("index") ?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("blogs") ?>">Knowledge Center</a>
                </li>
                <li class="breadcrumb-item"><a href="<?php echo base_url("travelvisa") ?>">Medical
                        Travel</a></li>
                <li class="breadcrumb-item"><span><?php echo $blog["topic"] ?></span></li>
            </ol>
        </nav>
    </div>
</section> <!-- <main> --> <!-- final section start -->
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="pt-4 pt-md-5 pb-4"> <!-- show first image on top -->
                    <div class="row position-relative mb-4">
                        <div class="col-12">
                            <figure class="figure w-100 article-image"> <img alt="" src="<?php echo $blog["image"] ?>">
                            </figure>
                        </div>
                        <div class="col-12 article-heading">
                            <h1><?php echo $blog["topic"] ?></h1>
                            <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4">
                                <div class="auth-name d-flex gap-2 align-items-center"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                        class="d-md-none" alt="Author" width="16" height="16"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/admin-white-icon.webp"
                                        class="d-none d-md-block" alt="Author" width="16" height="16"> <span
                                        class="text-uppercase"> <a
                                            href="<?php echo base_url("authors/author/") . $blog['id'] ?>"><?php echo $blog["author_name"] ?></a>
                                    </span> </div>
                                <div class="pub-date d-flex gap-2 align-items-center"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                        class="d-md-none" alt="Published Date" width="16" height="16"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/calender-white-icon.webp"
                                        class="d-none d-md-block" alt="Published Date" width="16" height="16"> <span
                                        class="text-uppercase"> Last Updated Date:
                                        <?php echo (new DateTime($blog["updated_on"]))->format('d F,Y') ?> </span>
                                </div>
                                <div class="pub-date d-flex gap-2 align-items-center"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                        class="d-md-none" alt="Published Date" width="16" height="16"> <img
                                        src="https://www.vaidam.com/assets/knowledge_center/calender-white-icon.webp"
                                        class="d-none d-md-block" alt="Published Date" width="16" height="16"> <span
                                        class="text-uppercase"> Created Date:
                                        <?php echo (new DateTime($blog["created_on"]))->format('d F,Y') ?> </span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- table content -->
                    <div class="row">
                        <div class="col-12">
                            <div class="table-of-content p-4 rounded-4 mb-4">
                                <h3 class="h2">Table of Content</h3>
                                <?php
                                $blog["table_of_content"] = json_decode($blog["table_of_content"]);
                                foreach ($blog["table_of_content"] as $id => $content) {
                                    echo '
                                        <a class="d-block h5 theam-color py-1"
                                          href="#' . $id . '">' . $content . '</a>
                                        ';
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="blog-content"> <br> <!-- end sahil code  -->
                        <div class="article-img" style="margin-bottom:30px;">
                            <?php echo $blog["content"]; ?>
                        </div>
                        <div class="row body-form-row mb-5">
                            <div class="col-12">
                                <div class="form-col-box py-4 px-4 bg-vh-secondary rounded-3">
                                    <div
                                        class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                        <img class="mr-2" loading="lazy"
                                            src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg"
                                            width="50" height="50" alt="Know more" title="Know more"> <span
                                            class="d-flex justify-content-center flex-column lh-base"> <strong
                                                class="fs-4" style="text-align:center;">Get in Touch with Medical
                                                Experts</strong> <small>Treatment plan and quote within 2 days</small>
                                        </span>
                                    </div>
                                    <div id="custom-form col-12">
                                        <form class="row" id="genericForm" autocomplete="off"> <input type="hidden"
                                                name="_token" id="_token"
                                                value="U6CJOBbDMffOW3YdizRDaaDrmzHargnM59mbLdKm"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source"
                                                value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                            <input type="hidden" name="lang1" id="lang1"
                                                value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                            <input type="hidden" name="second_form" value="yes"> <input type="hidden"
                                                name="preferredLocation" id="preferredLocation" value="">
                                            <!-- <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> -->
                                            <input type="hidden" name="c_url" id="c_url" value="">
                                            <div class="col-12 mb-3"> <label for="inputName"
                                                    class="form-label">Name</label> <input type="text"
                                                    class="form-control" id="name" placeholder="Patient Name"
                                                    name="name" aria-label="Patient Name" required=""> </div>
                                            <div class="col-12 mb-3"> <label for="inputEmail"
                                                    class="form-label">Email</label>
                                                <div class="input-group"> <input type="email" class="form-control"
                                                        id="email" placeholder="Enter email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3"> <label for="inputState"
                                                    class="form-label">Country</label> <select class="form-select"
                                                    id="country" placeholder="Select Country" name="country"
                                                    required="true">
                                                    <option selected="">Select Country</option>
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
                                                    <option value="HM">Heard Island and McDonald Islands</option>
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
                                                    <option value="GS">South Georgia and the South Sandwich Islands
                                                    </option>
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
                                                    <option value="UM">United States Minor Outlying Islands</option>
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
                                                    <option value="XK">Kosovo</option>
                                                </select> </div>
                                            <div class="col-12 mb-3 autocomplete stategroup" style="display: block;">
                                                <label for="inputCity" class="form-label">City</label> <input id="city"
                                                    class="form-control new-form-control" type="text" name="city"
                                                    placeholder="Select City"> <input type="hidden" id="state"
                                                    name="state">
                                            </div>
                                            <div class="col-12 mb-3"> <label for="inputPhone" class="form-label">Phone
                                                    Number</label>
                                                <div class="input-group"> <input class="input-group-text"
                                                        id="country_phone_code" name="country_phone_code"
                                                        placeholder="Code" style="width: 80px;"> <input type="text"
                                                        class="form-control" id="phone_number" name="phone_number"
                                                        placeholder="Enter Phone no."> </div>
                                            </div>
                                            <div class="col-12 mb-3" id="ageblock" style="display: block;"> <label
                                                    for="inputAddress2" class="form-label">Patient's Age or Date Of
                                                    Birth</label> <input type="text"
                                                    class="form-control new-form-control" id="age"
                                                    placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                            <div class="col-12 mb-3"> <label for="medicalIssue"
                                                    class="form-label">Medical Issue</label> <textarea type="text"
                                                    class="form-control" id="medical_problem" name="medical_problem"
                                                    placeholder="Describe The Current Medical Problem."></textarea>
                                            </div>
                                            <div class="col-12 mb-3" id="emirates-id-block3" style="display: none;">
                                                <label for="inputCity" class="form-label"> Emirates ID </label> <input
                                                    type="text" class="form-control new-form-control" name="emirates-id"
                                                    id="emirates-id"
                                                    placeholder="Enter Emirates ID (To be shared with hospital)">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="d-grid"> <button type="submit" id="search-main-form-btn-l"
                                                        class="btn btn-danger online-consult-button in_page_form ">Contact
                                                        Us Now</button> </div>
                                            </div>
                                        </form> <span
                                            class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">By
                                            submitting the form I agree to the <a title="Terms of Use"
                                                href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal"
                                                data-bs-target="#formTerms">Terms of Use</a> and <a
                                                title="Privacy Policy" href="/privacy-policy" class="terms_of_use"
                                                data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy
                                                Policy</a> of Vaidam Health. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Doctor review block start --> <!-- Doctor review block end -->
                    <!-- Author reviewer block start -->
                    <div class="reviewer row">
                        <div class="col-12 mb-4">
                            <div class="author-box p-3 rounded-3 row-gap-3 border d-flex align-items-center bg-light">
                                <figure class="me-3 mb-0"> <img class="rounded-3" alt="mariyum"
                                        src="<?php echo $blog["author_image"]; ?>" width="80" height="80">
                                    <figcaption> Author Name <br><strong><?php echo $blog["author_name"]; ?></strong>
                                    </figcaption>
                                </figure>
                                <div class="author-details bg-white p-3 rounded-3">
                                    <p class="mb-0"></p>
                                    <p><strong><?php echo $blog["author_name"]; ?></strong>&nbsp;
                                        <?php echo $blog["author_about"]; ?>
                                    </p>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div> <!-- Author reviewer block end -->
                </article>
            </div>
            <div class="col-lg-4 position-relative d-none d-md-block">
                <aside class="position-sticky my-5"> <!-- form 2 --> <!-- Form Between List -->
                    <div class="row body-form-row pt-0 pb-4">
                        <div class="col-12">
                            <div class="form-col-box bg-theam-2 p-4 rounded-3">
                                <div
                                    class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                    <img class="mr-2" loading="lazy"
                                        src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg"
                                        width="50" height="50" alt="Know more" title="Know more"> <span
                                        class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4"
                                            style="text-align:center;">Get in Touch with Medical
                                            Experts</strong> <small> Treatment plan and quote within 2 days </small>
                                    </span>
                                </div>
                                <div id="custom-form-doctor-card col-12">
                                    <form class="row" id="secondFormInList" autocomplete="off"> <input type="hidden"
                                            name="_token" id="_token" value="MY895NHIu9YyG2A91JME8Llh9VNDc7vGWZz6kTyH">
                                        <input type="hidden" name="pagetype" value=""> <input type="hidden"
                                            name="page_source" id="page_source-sfil"
                                            value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                        <input type="hidden" name="lang1" id="lang-sfil"
                                            value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                        <input type="hidden" name="second_form" value="yes"> <input type="hidden"
                                            name="preferredLocation" id="preferredLocation" value="Turkey"> <input
                                            type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page">
                                        <input type="hidden" name="c_url" id="c_url" value="">
                                        <div class="col-12 mb-3"> <label for="inputName" class="form-label"> Name
                                            </label> <input type="text" class="form-control" id="name"
                                                placeholder="Patient Name" name="name" aria-label="Patient Name"
                                                required=""> </div>
                                        <div class="col-12 mb-3"> <label for="inputEmail" class="form-label"> Email
                                            </label>
                                            <div class="input-group"> <input type="email" class="form-control"
                                                    id="email" placeholder="Enter email" name="email" required="">
                                            </div>
                                        </div>
                                        <div class="col-12 mb-3"> <label for="inputState" class="form-label">
                                                Country </label> <select class="form-select country" id="country-sfil"
                                                placeholder="Select Country" name="country" required="true">
                                                <option selected="">Select Country</option>
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
                                                <option value="HM">Heard Island and McDonald Islands</option>
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
                                                <option value="GS">South Georgia and the South Sandwich Islands
                                                </option>
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
                                                <option value="UM">United States Minor Outlying Islands</option>
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
                                                <option value="XK">Kosovo</option>
                                            </select> </div>
                                        <div class="col-12 mb-3 autocomplete stategroup-sfil" style="display: block;">
                                            <label for="inputCity" class="form-label"> City
                                            </label> <input type="text" class="form-control" name="city" id="city-sfil"
                                                placeholder="Enter city"> <input type="hidden" id="state-sfil"
                                                name="state">
                                        </div>
                                        <div class="col-12 mb-3"> <label for="inputPhone" class="form-label"> Phone
                                                Number </label>
                                            <div class="input-group"> <input class="input-group-text country_phone_code"
                                                    id="country_phone_code-sfil" name="country_phone_code"
                                                    placeholder="Code" style="width: 80px;"> <input type="text"
                                                    class="form-control" id="phone_number" name="phone_number"
                                                    placeholder="Enter Phone no."> </div>
                                        </div>
                                        <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;"> <label
                                                for="inputAddress2" class="form-label"> Patient's Age or Date Of
                                                Birth </label> <input type="text" class="form-control new-form-control"
                                                id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                        <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label">
                                                Medical Issue </label> <textarea type="text" class="form-control"
                                                id="medical_problem" name="medical_problem"
                                                placeholder="Describe The Current Medical Problem."></textarea>
                                        </div>
                                        <div class="col-12 mb-3" id="emirates-id-block2" style="display: none;">
                                            <label for="inputCity" class="form-label"> Emirates ID </label> <input
                                                type="text" class="form-control new-form-control" name="emirates-id"
                                                id="emirates-id"
                                                placeholder="Enter Emirates ID (To be shared with hospital)">
                                        </div>
                                        <div class="col-12 mt-2">
                                            <div class="d-grid"> <button type="submit" id="search-main-form-btn"
                                                    class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form ">
                                                    Contact Us Now </button> </div>
                                        </div>
                                    </form> <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4"> By
                                        submitting the form I agree to the <a href="#"
                                            onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();"
                                            title="Terms of Use" class="terms_of_use" data-bs-toggle="modal"
                                            data-bs-target="#formTerms"> Terms of Use </a> and <a href="#"
                                            onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();"
                                            title="Privacy Policy" class="terms_of_use" data-bs-toggle="modal"
                                            data-bs-target="#formPrivacyPolicy"> Privacy Policy </a> of Vaidam
                                        Health. </span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Between form -->
                </aside>
            </div>
        </div>
    </div> <!-- Reviewer block -->
    <div class="container">
        <div class="reviewer row">
            <div class="col-12 mb-4">
                <div class="reviwer-box p-3 row-gap-3 rounded-3 d-flex align-items-center">
                    <figure class="me-3 mb-0"> <img class="rounded-3" alt="Dr. Ankita Wadhwa"
                            src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/pictures/picture-9058-1697027705.webp"
                            width="80" height="80"> </figure>
                    <div class="reviwer-details">
                        <p class="h5">Content meets the <a href="https://www.vaidam.com/editorial-policy">V
                                Policy</a> and is medically reviewed by:</p>
                        <p class="mb-0"><a class="h5 theam-color"
                                href="https://www.vaidam.com/medical-content-reviewer/dr-ankita-wadhwa">Dr. Ankita
                                Wadhwa</a> Medical Content Editor and Manager International Patient Relations</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- final section end --> <!-- block 1 start -->
<section class="related-post-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Happy Patients</h2>
            </div>
            <div class="popular-post col-12 slider mb-4 slick-initialized slick-slider slick-dotted" id="popularPost">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 728px; transform: translate3d(0px, 0px, 0px);">
                        <?php
                        foreach ($blogs as $b) {
                            echo '
                                <div class="card shadow-sm slick-slide slick-current slick-active" data-slick-index="0"
                             aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00"
                             aria-describedby="slick-slide-control00" style="width: 344px;"> <a class="d-block"
                                 href="' . base_url("blogs/blog/") . $b[0]["id"] . '"
                                 tabindex="0"> <img
                                     src="' . $b[0]["image"] . '"
                                     class="card-img-top border rounded-3"
                                     alt="' . $b[0]["title"] . '">
                             </a>
                             <div class="card-body px-0"><a class="d-block"
                                     href="' . base_url("blogs/blog/") . $b[0]["id"] . '"
                                     tabindex="0">
                                     <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                         <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                 src="' . $b[0]["author_image"] . '"
                                                 alt="Author" width="16" height="16"> <span
                                                 class="text-uppercase">' . $b[0]["author_name"] . '</span> </div>
                                         <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                 src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                 alt="Published Date" width="16" height="16"> <span
                                                 class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                             </span> </div>
                                     </div>
                                 </a>
                                 <h4 class="card-title"><a class="d-block"
                                         href="' . base_url("blogs/blog/") . $b[0]["id"] . '"
                                         tabindex="0"></a><a
                                         href="' . base_url("blogs/blog/") . $b[0]["id"] . '"
                                         tabindex="0">' . $b[0]["topic"] . '</a></h4>
                                 <p class="card-text"> Bangladeshi patient received successful bone cancer treatment
                                     in India. <a
                                         href="' . base_url("blogs/blog/") . $b[0]["id"] . '"
                                         tabindex="0">Read More</a> </p>
                             </div>
                         </div>
                              ';
                        }
                        ?>
                    </div>
                </div>
                <ul class="slick-dots" role="tablist"></ul>
            </div>
        </div>
    </div>
</section> <!-- block 2 end --> <!-- block 2 start -->
<section class="related-post-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Recent Blogs</h2>
            </div>
            <div class="popular-post col-12 slider mb-4 slick-initialized slick-slider slick-dotted" id="popularPost">
            <?php
              $index=0;
            ?>
            <div class="carousel">
                        <?php
                              while($index<count($recent_blogs)){
                                  echo '  <div class="carousel-item_l" id="item-'.($index+1).'">';
                                  $i=1;
                                  for(;$i<5 && $index<count($recent_blogs);$i++){
                                    echo '<div class="card shadow-sm slick-slide slick-active" data-slick-index="1" aria-hidden="false"
                                    tabindex="0" role="tabpanel" id="slick-slide11" aria-describedby="slick-slide-control11"
                                    style="width: 314px;"> <a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/understanding-relapsed-and-refractory-blood-cancers-treatment-options-and"
                                        tabindex="0"> <img class="card-img-top border rounded-3"
                                            src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/understanding_relapsed_and_refractory_blood_cancers_treatment_options_and_strategies.webp"
                                            alt="Understanding Relapsed and Refractory Blood Cancers: Treatment Options and Strategies"
                                            title="Understanding Relapsed and Refractory Blood Cancers: Treatment Options and Strategies">
                                    </a>
                                    <div class="card-body px-0"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/understanding-relapsed-and-refractory-blood-cancers-treatment-options-and"
                                            tabindex="0">
                                            <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                                <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                        src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                        alt="Author" width="16" height="16"> <span
                                                        class="text-uppercase">shraddha</span> </div>
                                                <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                        src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                        alt="Published Date" width="16" height="16"> <span
                                                        class="text-uppercase"> Last Updated Date: MARCH 25, 2025 </span> </div>
                                            </div>
                                        </a>
                                        <h4 class="card-title"><a class="d-block"
                                                href="https://www.vaidam.com/knowledge-center/understanding-relapsed-and-refractory-blood-cancers-treatment-options-and"
                                                tabindex="0"></a><a
                                                href="https://www.vaidam.com/knowledge-center/understanding-relapsed-and-refractory-blood-cancers-treatment-options-and"
                                                tabindex="0">Understanding Relapsed and Refractory Blood Cancers: Treatment
                                                Options and Strategies</a></h4>
                                        <p class="card-text"> Discover advanced treatments for relapsed and refractory blood
                                            cancers, including CAR-T therapy, immunotherapy... <a
                                                href="https://www.vaidam.com/knowledge-center/understanding-relapsed-and-refractory-blood-cancers-treatment-options-and"
                                                tabindex="0">Read More</a> </p>
                                    </div>
                                </div>';
                                $index++;
                                   };
                                 echo '</div>';
                               }
                        ?>
                    
                    <!-- <div id="dots">
                       
                    </div> -->
                </div>
                <style>
                    .carousel {
                        position: relative;
                        width: 80%;
                        height: 200px;
                        overflow: hidden;
                        margin: 0 auto;
                        font-size: 15px;
                    }

                    .carousel-item_l {
                        display: flex;
                        justify-content: center;
                        align-items: center;
                        width: 100%;
                        height: 100%;
                        position: absolute;
                        padding: 50px;
                        text-align: center;
                        padding: 50px 100px 50px 100px;
                        transition: transform 0.5s ease-in-out;
                    }

                    #item-1 {
                        transform: translate(0, 0);
                    }

                    #item-2 {
                        transform: translate(100%, 0);
                    }

                    #item-3 {
                        transform: translate(200%, 0);
                    }

                    #dots {
                        display: flex;
                        justify-content: center;
                        margin-top: 20px;
                        position: absolute;
                        bottom: 0;
                        left: 46%;
                    }

                    .dot {
                        width: 12px;
                        height: 12px;
                        border-radius: 50%;
                        background-color: #bbb;
                        margin: 0 8px;
                        cursor: pointer;
                        transition: background-color 0.3s ease;
                    }

                    .dot.active {
                        background-color: #333;
                    }

                    .dot:hover {
                        background-color: #888;
                    }
                </style>

                <script>
                    $(document).ready(function () {
                        let len = $('.carousel-item_l').length;
                        console.log(len);
                        let arr = [];
                        for (let i = 0; i < len; i++) {
                            arr.push(i * 100);
                        }
                        let active_dot_ind = 1;
                        setInterval(function () {
                            arr = arr.map(item => item - 100)
                            $('.carousel-item_l').each(function (index) {
                                $(this).css('transform', 'translate(' + arr[index] + '%,0)');
                            });
                            $(`#dot-${active_dot_ind}`).removeClass('active');
                            active_dot_ind++;
                            if (active_dot_ind > len) {
                                active_dot_ind = 1;
                            }
                            $(`#dot-${active_dot_ind}`).addClass('active');
                            if (arr[0] == -200) {
                                arr.shift();
                                arr.push(arr[arr.length - 1] + 100);
                                $('.carousel>.carousel-item_l:first').clone(true).appendTo('.carousel');
                                $('.carousel>.carousel-item_l:first').remove();
                                $('.carousel>.carousel-item_l:last').css('transform', 'translate(' + arr[arr.length - 1] + '%,0)');
                            }
                        }, 4000);
                    })
                </script>
            </div>
        </div>
    </div>
</section> <!-- block 2 end -->
<section class="in-numbers-section bg-theam py-4">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <p class="fs-5 text-white">Have questions about billing, travels, or something else? Call</p>
            </div>
            <div class="col-lg-5 d-flex gap-4 flex-wrap">
                <!-- <a class="readmore whatsapp-color px-5" title="Send Enquiry" href="https://www.vaidam.com/lp/consult-online">+91-9971616131</a> -->
                <a class="readmore whatsapp-color px-5"
                    href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process?source=wpchat_KDSB%20,%20Thank%20you!"
                    title="Whatsapp About">Whatsapp Us</a> <a class="readmore px-5" title="Send Enquiry"
                    href="https://www.vaidam.com/lp/consult-online">hello@vaidam.com</a>
            </div>
        </div>
    </div>
</section>
<section class="in-numbers-section bg-vh-secondary py-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-4">
                <h2>Vaidam in Numbers</h2>
            </div>
            <div class="col-12">
                <div class="v-in-number d-flex flex-wrap gap-3 justify-content-between">
                    <div class="v-in-num-box">
                        <p class="number">500<span>+</span></p>
                        <p>Top Class Hospitals</p>
                    </div>
                    <div class="v-in-num-box">
                        <p class="number">100,000<span>+</span></p>
                        <p>International Patients Assisted</p>
                    </div>
                    <div class="v-in-num-box">
                        <p class="number">10,000<span>+</span></p>
                        <p>Experienced Doctors</p>
                    </div>
                    <div class="v-in-num-box">
                        <p class="number">10<span>+</span></p>
                        <p>Countries</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> <!-- </main> -->
<div class="container"> </div>
<div class="container">
    <div class="row"> </div>
</div>
<div id="menu-bottom" class="bottom-menu"> <a
        onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');"
        href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help">Need
        Help?</a> <a
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process?source=wpchat_KDSB,%20Thank%20you!"
        title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy"
            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div> <!--popup-->
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
                            <p style="
    color: #0053a6;
    text-align: justify;
    font-weight: bold;
    margin-bottom: 10px;
">To overcome restrictions due to Corona Virus, we are offering Paid Tele/Video Consultation from top doctors. Let us
                                know if you are interested &amp; we will contact you.</p> <input type="hidden"
                                name="page_source"
                                value="/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                            <label class="input"> <i class="form-overlay-icon  fa fa-user-o"></i> <input
                                    required="required" class="form-control form-text required"
                                    id="edit-submitted-name--2" name="name" value="" size="60" maxlength="128"
                                    placeholder="Name" type="text"> </label> <span id="name_error"
                                class="enquiry_error_msg"></span>
                        </section>
                        <section> <label class="input"> <i class="form-overlay-icon fa fa-envelope"></i> <input
                                    required="required" class="email form-control form-text form-email required"
                                    id="edit-submitted-email" name="email" size="60" placeholder="Email address"
                                    type="email">
                                <!-- <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> -->
                            </label> <span id="email_error" class="enquiry_error_msg"></span> </section>
                        <section> <label class="select flagstrap"> <span class="flag-icon-img flagstrap-icon"
                                    style="position: absolute;top: 14px;left: 7px;"></span> <i
                                    class="form-overlay-icon fa fa-sort overlay-sort"></i> <select required="required"
                                    onchange="if (!window.__cfRLUnblockHandlers) return false; countryChange(this);"
                                    class="override_select_box form-select required country-field icon-placement"
                                    id="edit-submitted-country" name="country" style="-webkit-appearance: none;">
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
                                    <option value="HM">Heard Island and McDonald Islands</option>
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
                                    <option value="GS">South Georgia and the South Sandwich Islands</option>
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
                                    <option value="UM">United States Minor Outlying Islands</option>
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
                                    <option value="XK">Kosovo</option>
                                </select> </label> <span id="country_error" class="enquiry_error_msg"></span>
                        </section>
                        <section class="stateSelect" style="display: none;"> <label class="select"> <i
                                    class="form-overlay-icon fa fa-sort overlay-sort"></i> <select
                                    class="override_select_box form-select required state-field icon-placement"
                                    id="edit-submittedState" name="state">
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
                                    <option value="Himachal Pradesh">Himachal Pradesh</option>
                                    <option value="Jammu &amp; Kashmir">Jammu &amp; Kashmir</option>
                                    <option value="Jharkhand">Jharkhand</option>
                                    <option value="Karnataka">Karnataka</option>
                                    <option value="Kerala">Kerala</option>
                                    <option value="Madhya Pradesh">Madhya Pradesh</option>
                                    <option value="Maharashtra">Maharashtra</option>
                                    <option value="Manipur">Manipur</option>
                                    <option value="Meghalaya">Meghalaya</option>
                                    <option value="Mizoram">Mizoram</option>
                                    <option value="Nagaland">Nagaland</option>
                                    <option value="Odisha">Odisha</option>
                                    <option value="Punjab">Punjab</option>
                                    <option value="Rajasthan">Rajasthan</option>
                                    <option value="Sikkim">Sikkim</option>
                                    <option value="Tamil Nadu">Tamil Nadu</option>
                                    <option value="Telangana">Telangana</option>
                                    <option value="Tripura">Tripura</option>
                                    <option value="Uttarakhand">Uttarakhand</option>
                                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                                    <option value="West Bengal">West Bengal</option>
                                </select> </label> <span id="state_error" class="enquiry_error_msg"></span>
                        </section>
                        <section> <label class="input label_merge"> <i class="form-overlay-icon fa fa-phone"></i>
                                <input type="text" name="country_code"
                                    class="phone_number merge_countryCode overlay-form-cc" readonly="readonly">
                                <input required="required"
                                    class="form-control form-text required merge_codeNumber overlay-form-number"
                                    id="edit-submitted-phone-number--2" name="phone_number" value="" size="60"
                                    maxlength="128" placeholder="Phone Number" type="text">
                                <!-- <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b> -->
                            </label> <span id="phone_number_error" class="enquiry_error_msg"></span> </section>
                        <section> <label class="input"> <textarea required="required"
                                    class="sky-form-text-area required" id="edit-submitted-comment" name="comment"
                                    cols="60" rows="5" type="text" placeholder="Describe the problem"></textarea>
                                <!-- <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b> -->
                            </label> <span id="comment_error" class="enquiry_error_msg"></span> </section>
                        <section class="preferred_time" style="display: none;"> <label class="input"> <i
                                    class="form-overlay-icon  fa fa-calendar"></i> <input
                                    class="form-control form-text form_datetime" id="edit-submitted-preferred-time"
                                    name="preferred_time" value="" size="60" placeholder="Doctor Appointment Date"
                                    type="text" autocomplete="off" readonly="readonly"> </label> <span
                                id="preferred_time_error" class="enquiry_error_msg"></span> </section>
                        <section class="visa_required"> <a href="#"><input type="checkbox"
                                    class="form-control form-text visa_webform" name="visa_required" value="yes"> I
                                need visa invitation letter.</a> </section>
                        <section><input type="checkbox" id="online_consultation" name="online_consultation" value="1"
                                style="transform: scale(1.5);"> <label for="online_consultation" style="
                    color: #0053a6;
                    font-weight: bold;
                    font-size: 15px;
                    margin-left: 5px;
                ">I am OK with Paid Tele/Video Consultation</label><br> </section>
                        <section>
                            <div class="footer-button"> <button type="submit"
                                    class="button footer-button">Submit</button> </div>
                        </section>
                        <section>
                            <p style="text-align: center;"><span class="output_response"></span></p>
                        </section>
                        <section>
                            <div class="col-xs-2"><img alt="NABH" title="NABH"
                                    src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/vaidam.gif"
                                    data-src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/an_tb/nabh.png"
                                    width="60" height="60"></div>
                            <div class="col-xs-9">
                                <p style="margin-left: 15px;font-size: 12px;margin-top: 10px;">Vaidam is accredited
                                    by NABH, India's highest accreditation for healthcare service providers</p>
                            </div> <br>
                        </section>
                    </fieldset>
                </form>
            </div>
        </div>
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
<!-- <a id="whatsapp-chat" href="https://api.whatsapp.com/send?phone=919971616131&text=Hello, please contact me regarding http://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process, Thank you!" class="whatsapp-chat"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
<div class="cgw-ext" data-ext-id="pdnenlnelpdomajfejgapbdpmjkfpjkp"></div>
<div class="cgw_main_container"
    style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 18px; user-select: text; font-weight: normal; letter-spacing: normal; -webkit-font-smoothing: auto;">
</div><iframe allow="join-ad-interest-group" data-tagging-id="AW-989645465" data-load-time="1742867255639" height="0"
    width="0"
    src="https://td.doubleclick.net/td/rul/989645465?random=1742867255617&amp;cv=11&amp;fst=1742867255617&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je53l1v879240773za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=102482433~102788824~102803279~102813109~102887800&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.vaidam.com%2Fknowledge-center%2Fnavigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process&amp;ref=https%3A%2F%2Fwww.vaidam.com%2Fknowledge-center&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Navigating%20Post-Surgical%20Recovery%20Abroad%3A%20Practical%20Tips%20for%20a%20Smooth%20Healing%20Process%20%7C%20Vaidam%20Health&amp;npa=0&amp;pscdl=noapi&amp;auid=794519535.1741836252&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B134.0.6998.118%7CNot%253AA-Brand%3B24.0.0.0%7CGoogle%2520Chrome%3B134.0.6998.118&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
    style="display: none; visibility: hidden;" data-gtm-yt-inspected-8="true"></iframe><button id="cgw_action_btn"
    tabindex="-1"
    style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;"></button>

<script>
    $(document).ready(function () {
        $('#secondFormInList').on('submit', function (e) {
            e.preventDefault();

            var formData = {
                name: $('#secondFormInList #name').val(),
                email: $('#secondFormInList #email').val(),
                country: $('#secondFormInList #country-sfil').val(),
                city: $('#secondFormInList #city-sfil').val(),
                state: $('#secondFormInList #state').val(),
                country_phone_code: $('#secondFormInList #country_phone_code').val(),
                phone_number: $('#secondFormInList #phone_number').val(),
                medical_problem: $('#secondFormInList #medical_problem').val(),
                age: $('#secondFormInList #age').val(),
            };

            $('#search-main-form-btn').prop('disabled', true).html('Sending...');

            $.ajax({
                url: '/sample/patients/post_details',
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alert('Thank you! Your information has been submitted successfully.');
                        $('#secondFormInList #name').val('');
                        $('#secondFormInList #email').val('');
                        $('#secondFormInList #country-sfil').val('');
                        $('#secondFormInList #city-sfil').val('');
                        $('#secondFormInList #state').val('');
                        $('#secondFormInList #country_phone_code').val('');
                        $('#secondFormInList #phone_number').val('');
                        $('#secondFormInList #medical_problem').val('');
                        $('#secondFormInList #age').val('');
                    } else {
                        alert(response.message || 'Error submitting form. Please try again.');
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred: ' + error);
                },
                complete: function () {
                    $('#search-main-form-btn').prop('disabled', false).html('Contact Us Now');
                }
            });
        });


        $('#genericForm').on('submit', function (e) {
            e.preventDefault();

            var formData = {
                name: $('#genericForm #name').val(),
                email: $('#genericForm #email').val(),
                country: $('#genericForm #country').val(),
                city: $('#genericForm #city').val(),
                state: $('#genericForm #state').val(),
                country_phone_code: $('#genericForm #country_phone_code').val(),
                phone_number: $('#genericForm #phone_number').val(),
                medical_problem: $('#genericForm #medical_problem').val(),
                age: $('#genericForm #age').val(),
            };

            $('#search-main-form-btn-l').prop('disabled', true).html('Sending...');

            $.ajax({
                url: '/sample/patients/post_details',
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success) {
                        alert('Thank you! Your information has been submitted successfully.');
                        $('#genericForm #name').val('');
                        $('#genericForm #email').val('');
                        $('#genericForm #country').val('');
                        $('#genericForm #city').val('');
                        $('#genericForm #state').val('');
                        $('#genericForm #country_phone_code').val('');
                        $('#genericForm #phone_number').val('');
                        $('#genericForm #medical_problem').val('');
                        $('#genericForm #age').val('');
                    } else {
                        alert(response.message || 'Error submitting form. Please try again.');
                    }
                },
                error: function (xhr, status, error) {
                    alert('An error occurred: ' + error);
                },
                complete: function () {
                    $('#search-main-form-btn-l').prop('disabled', false).html('Submit');
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