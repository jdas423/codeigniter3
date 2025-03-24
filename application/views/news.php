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
<div class="modal fade" id="formTerms" tabindex="-1" role="dialog" aria-labelledby="termsModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Terms of Use</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
            <div class="modal-body" id="terms_of_use"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div>
        </div>
    </div>
</div> <!-- End Modal Terms --> <!-- Start Modal Privacy Policy -->
<div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog" aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title" style="font-weight: bold" id="">Privacy Policy</span> <button type="button" class="close px-2 py-1 lh-1" data-bs-dismiss="modal" aria-label="Close"> <span aria-hidden="true">×</span> </button> </div>
            <div class="modal-body" id="privacy_policy"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1" data-bs-dismiss="modal">Close</button> <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div>
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
<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle doctor-details pt-3" data-gtm-vis-first-on-screen2242002_280="766" data-gtm-vis-total-visible-time2242002_280="100" data-gtm-vis-has-fired2242002_280="1">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="https://www.vaidam.com">Home</a></li>
                <li class="breadcrumb-item"><a href="https://www.vaidam.com/knowledge-center">Knowledge Center</a></li>
                <li class="breadcrumb-item"><a href="https://www.vaidam.com/knowledge-center/life-at-vaidam">Life at Vaidam</a></li>
                <li class="breadcrumb-item">
                    <span>
                    <?php echo $news["title"] ?></span></li>
            </ol>
        </nav>
    </div>
</section> <!-- <main> --> <!-- final section start -->
<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <article class="pt-4 pt-md-5 pb-4"> <!-- show first image on top -->
                    <h1> <?php echo $news["topic"] ?></h1> <!-- table content -->
                    <div class="blog-content"> <br> <!-- end sahil code  -->
                        <div class="article-img">
                            <p> <?php echo $news["content"] ?></p>
                            <p>&nbsp;</p>
                        </div> <!-- form 1 -->
                        <div class="row body-form-row mb-5">
                            <div class="col-12">
                                <div class="form-col-box py-4 px-4 bg-vh-secondary rounded-3">
                                    <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4"> <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more"> <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4" style="text-align:center;">Get in Touch with Medical Experts</strong> <small>Treatment plan and quote within 2 days</small> </span> </div>
                                    <div id="custom-form col-12">
                                        <form class="row" id="genericForm" autocomplete="off"> <input type="hidden" name="_token" id="_token" value="m1cbeSYqr3Q6zxvURnAvwZfqagN8EZKFOg3JJW58"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source" value="https://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical"> <input type="hidden" name="lang1" id="lang1" value="https://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical"> <input type="hidden" name="second_form" value="yes"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="Turkey"> <!-- <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> --> <input type="hidden" name="c_url" id="c_url" value="">
                                            <div class="col-12 mb-3"> <label for="inputName" class="form-label">Name</label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required=""> </div>
                                            <div class="col-12 mb-3"> <label for="inputEmail" class="form-label">Email</label>
                                                <div class="input-group"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required=""> </div>
                                            </div>
                                            <div class="col-12 mb-3"> <label for="inputState" class="form-label">Country</label> <select class="form-select" id="country" placeholder="Select Country" name="country" required="true">
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
                                                </select> </div>
                                            <div class="col-12 mb-3 autocomplete stategroup" style="display: block;"> <label for="inputCity" class="form-label">City</label> <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City"> <input type="hidden" id="state" name="state"> </div>
                                            <div class="col-12 mb-3"> <label for="inputPhone" class="form-label">Phone Number</label>
                                                <div class="input-group"> <input class="input-group-text" id="country_phone_code" name="country_phone_code" placeholder="Code" style="width: 80px;"> <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no."> </div>
                                            </div>
                                            <div class="col-12 mb-3" id="ageblock" style="display: block;"> <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth</label> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                            <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label">Medical Issue</label> <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea> </div>
                                            <div class="col-12 mb-3" id="emirates-id-block3" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div>
                                            <div class="col-12 mt-2">
                                                <div class="d-grid"> <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button in_page_form ">Contact Us Now</button> </div>
                                            </div>
                                        </form> <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health. </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="article-img"> </div>
                    </div> <!-- Doctor review block start --> <!-- Doctor review block end --> <!-- Author reviewer block start -->
                    <div class="reviewer row">
                        <div class="col-12 mb-4">
                            <div class="author-box p-3 rounded-3 row-gap-3 border d-flex align-items-center bg-light">
                                <figure class="me-3 mb-0"> 
                                    <img class="rounded-3" alt="Bipasha" src="<?php echo $news["author_image"]  ?>" width="80" height="80">
                                    <figcaption> Author Name <br>
                                    <strong>
                                        <?php 
                                        $author_name = $news["author_name"];
                                        $parts = explode(" ", $author_name);
                                        $first_name = $parts[0];
                                        
                                        echo $first_name;
                                        ?>
                                    </strong> </figcaption>
                                </figure>
                                <div class="author-details bg-white p-3 rounded-3">
                                    <p class="mb-0"></p>
                                    <p><strong><?php  echo $news["author_name"]; ?>&nbsp;</strong></p>
                                    <p><?php  echo $news["author_about"]; ?></p>
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
                                <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4"> <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more"> <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4" style="text-align:center;">Get in Touch with Medical Experts</strong> <small> Treatment plan and quote within 2 days </small> </span> </div>
                                <div id="custom-form-doctor-card col-12">
                                    <form class="row" id="secondFormInList" autocomplete="off"> <input type="hidden" name="_token" id="_token" value="m1cbeSYqr3Q6zxvURnAvwZfqagN8EZKFOg3JJW58"> <input type="hidden" name="pagetype" value=""> <input type="hidden" name="page_source" id="page_source-sfil" value="https://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical"> <input type="hidden" name="lang1" id="lang-sfil" value="https://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical"> <input type="hidden" name="second_form" value="yes"> <input type="hidden" name="preferredLocation" id="preferredLocation" value="Turkey"> <input type="hidden" name="Page_Type" id="Page_Type" value="knowledge center"> <input type="hidden" name="c_url" id="c_url" value="">
                                        <div class="col-12 mb-3"> <label for="inputName" class="form-label"> Name </label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required=""> </div>
                                        <div class="col-12 mb-3"> <label for="inputEmail" class="form-label"> Email </label>
                                            <div class="input-group"> <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required=""> </div>
                                        </div>
                                        <div class="col-12 mb-3"> <label for="inputState" class="form-label"> Country </label> <select class="form-select country" id="country-sfil" placeholder="Select Country" name="country" required="true">
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
                                            </select> </div>
                                        <div class="col-12 mb-3 autocomplete stategroup-sfil" style="display: block;"> <label for="inputCity" class="form-label"> City </label> <input type="text" class="form-control" name="city" id="city-sfil" placeholder="Enter city"> <input type="hidden" id="state-sfil" name="state"> </div>
                                        <div class="col-12 mb-3"> <label for="inputPhone" class="form-label"> Phone Number </label>
                                            <div class="input-group"> <input class="input-group-text country_phone_code" id="country_phone_code-sfil" name="country_phone_code" placeholder="Code" style="width: 80px;"> <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no."> </div>
                                        </div>
                                        <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;"> <label for="inputAddress2" class="form-label"> Patient's Age or Date Of Birth </label> <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                        <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label"> Medical Issue </label> <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea> </div>
                                        <div class="col-12 mb-3" id="emirates-id-block2" style="display: none;"> <label for="inputCity" class="form-label"> Emirates ID </label> <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)"> </div>
                                        <div class="col-12 mt-2">
                                            <div class="d-grid"> <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form "> Contact Us Now </button> </div>
                                        </div>
                                    </form> <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4"> By submitting the form I agree to the <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Terms of Use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms"> Terms of Use </a> and <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Privacy Policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy"> Privacy Policy </a> of Vaidam Health. </span>
                                </div>
                            </div>
                        </div>
                    </div> <!-- End Between form -->
                    <script type="text/javascript" src="https://www.vaidam.com/assets/js/searchpage.js"></script>
                </aside>
            </div>
        </div>
    </div> <!-- Reviewer block -->
</section> <!-- final section end --> <!-- block 1 start -->
<section class="related-post-section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2>Our Happy Patients</h2>
            </div>
            <div class="popular-post col-12 slider mb-4 slick-initialized slick-slider slick-dotted" id="popularPost">
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 1092px; transform: translate3d(0px, 0px, 0px);">
                        <?php
                          foreach($testimonials as $testimonial){
                            $date = new DateTime($testimonial["created_on"]);
                            $formattedDate = $date->format('F j, Y');
                            $desc=array_slice(explode(".",$testimonial["description"]),0,2);
                              echo '<div class="card shadow-sm slick-slide slick-current slick-active" tabindex="0" role="tabpanel" id="slick-slide00" aria-describedby="slick-slide-control00" style="width: 344px;" data-slick-index="0" aria-hidden="false"> <a class="d-block" href="https://www.vaidam.com/knowledge-center/life-at-vaidam/interactive-discussion-held-vaidam-office-renowned-urologist-addresses-team-queries" tabindex="0"> <img class="card-img-top border rounded-3" src="https://d1pkj1wi9lp6qx.cloudfront.net/25/files/urology_session1.webp" alt="urology session at Vaidam" title="An Interactive Discussion held at Vaidam Office, a Renowned Urologist Addresses team Queries"> </a>
                            <div class="card-body px-0">
                            <a class="d-block" href="https://www.vaidam.com/knowledge-center/life-at-vaidam/interactive-discussion-held-vaidam-office-renowned-urologist-addresses-team-queries" tabindex="0">
                                    <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                        <div class="auth-name d-flex gap-2 align-items-center"> 
                                        <img src="'.base_url('assets/img/').'author.webp" alt="Author" width="16" height="16"> <span class="text-uppercase">'.$testimonial["patient_name"].'</span> </div>
                                        <div class="pub-date d-flex gap-2 align-items-center"> 
                                        <img src="'.base_url('assets/img/').'calender.webp" alt="Published Date" width="16" height="16">
                                         <span class="text-uppercase"> Created  Date:'.$formattedDate.'</span> </div>
                                    </div>
                                </a>
                                <h4 class="card-title"><a class="d-block" href="https://www.vaidam.com/knowledge-center/life-at-vaidam/interactive-discussion-held-vaidam-office-renowned-urologist-addresses-team-queries" tabindex="0"></a>
                                <a href="https://www.vaidam.com/knowledge-center/life-at-vaidam/interactive-discussion-held-vaidam-office-renowned-urologist-addresses-team-queries" tabindex="0">
                                  '.$testimonial["topic"].'
                                </a></h4>
                                <p class="card-text"> 
                                 '.$desc[0].$desc[1].' 
                                <a href="https://www.vaidam.com/knowledge-center/life-at-vaidam/interactive-discussion-held-vaidam-office-renowned-urologist-addresses-team-queries" tabindex="0">
                                Read More</a> </p>
                            </div>
                        </div>';
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
                <div class="slick-list draggable">
                    <div class="slick-track" style="opacity: 1; width: 7280px; transform: translate3d(0px, 0px, 0px);">
                        <?php
                           $counter=1;
                           foreach($blogs as $blog){
                                $class_nm=$counter==1?'slick-current':'';
                                $date = new DateTime($testimonial["created_on"]);
                                $formattedDate = $date->format('F j, Y');
                                $cont=array_slice(explode(".",$blog["content"]),0,2);
                                echo  '<div class="card shadow-sm slick-slide '. $class_nm .' slick-active" tabindex="0" role="tabpanel" id="slick-slide10" aria-describedby="slick-slide-control10" style="width: 344px;" data-slick-index="0" aria-hidden="false"> <a class="d-block" href="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process" tabindex="0"> <img class="card-img-top border rounded-3" src="https://d1pkj1wi9lp6qx.cloudfront.net/25/files/navigating_post-surgical_recovery_abroad_practical_tips_for_a_smooth_healing_process.webp" alt="Navigating Post-Surgical Recovery Abroad: Practical Tips for a Smooth Healing Process
                                " title="Navigating Post-Surgical Recovery Abroad: Practical Tips for a Smooth Healing Process"> </a>
                                    <div class="card-body px-0">
                                    <a class="d-block" 
                                    href="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process" tabindex="0">
                                            <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                                <div class="auth-name d-flex gap-2 align-items-center">
                                                 <img src="'.base_url('assets/img/').'author.webp"  alt="Author" width="16" height="16"> <span class="text-uppercase">mariyum</span> </div>
                                                <div class="pub-date d-flex gap-2 align-items-center">
                                                 <img src="'.base_url('assets/img/').'calendar.webp" alt="Published Date" width="16" height="16"> <span class="text-uppercase"> Created Date: '.$formattedDate.'</span> </div>
                                            </div>
                                        </a>
                                        <h4 class="card-title">
                                        <a class="d-block" href="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical
                                         -tips-smooth-healing-process" tabindex="0"></a>
                                         <a href="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process" tabindex="0">'.$blog["topic"].'</a></h4>
                                        <p class="card-text"> '.$cont[0].$cont[1].'<a href="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process" tabindex="0">Read More</a> </p>
                                    </div>
                                </div>';
                                $counter++;
                           }
                        ?>
                    </div>
                </div>
                <ul class="slick-dots" style="display: flex;" role="tablist">
                    <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 5" tabindex="0" aria-selected="true">1</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control11" aria-controls="slick-slide11" aria-label="2 of 5" tabindex="-1">2</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control12" aria-controls="slick-slide12" aria-label="3 of 5" tabindex="-1">3</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control13" aria-controls="slick-slide13" aria-label="4 of 5" tabindex="-1">4</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control14" aria-controls="slick-slide14" aria-label="5 of 5" tabindex="-1">5</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control15" aria-controls="slick-slide15" aria-label="6 of 5" tabindex="-1">6</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control16" aria-controls="slick-slide16" aria-label="7 of 5" tabindex="-1">7</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control17" aria-controls="slick-slide17" aria-label="8 of 5" tabindex="-1">8</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control18" aria-controls="slick-slide18" aria-label="9 of 5" tabindex="-1">9</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control19" aria-controls="slick-slide19" aria-label="10 of 5" tabindex="-1">10</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control110" aria-controls="slick-slide110" aria-label="11 of 5" tabindex="-1">11</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control111" aria-controls="slick-slide111" aria-label="12 of 5" tabindex="-1">12</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control112" aria-controls="slick-slide112" aria-label="13 of 5" tabindex="-1">13</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control113" aria-controls="slick-slide113" aria-label="14 of 5" tabindex="-1">14</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control114" aria-controls="slick-slide114" aria-label="15 of 5" tabindex="-1">15</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control115" aria-controls="slick-slide115" aria-label="16 of 5" tabindex="-1">16</button></li>
                    <li role="presentation"><button type="button" role="tab" id="slick-slide-control116" aria-controls="slick-slide116" aria-label="17 of 5" tabindex="-1">17</button></li>
                </ul>
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
            <div class="col-lg-5 d-flex gap-4 flex-wrap"> <!-- <a class="readmore whatsapp-color px-5" title="Send Enquiry" href="https://www.vaidam.com/lp/consult-online">+91-9971616131</a> --> <a class="readmore whatsapp-color px-5" href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical?source=wpchat_KDSB%20,%20Thank%20you!" title="Whatsapp About">Whatsapp Us</a> <a class="readmore px-5" title="Send Enquiry" href="https://www.vaidam.com/lp/consult-online">hello@vaidam.com</a> </div>
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
<div id="menu-bottom" class="bottom-menu"> <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');" href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help">Need Help?</a> <a href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical?source=wpchat_KDSB,%20Thank%20you!" title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us" title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div> <!--popup-->
<div class="sky-form-modal">
    <div id="quoteModal" class="modal"> <!-- Modal content -->
        <div class="modal-content">
            <div class="body-w body-s"> <!-- <form action="" class="sky-form"> -->
                <form class="sky-form" action="https://www.vaidam.com/webform/contact.php" method="post" id="webform-client-form-3825" accept-charset="UTF-8" autocomplete="off"> <span onclick="if (!window.__cfRLUnblockHandlers) return false; cancelQuote();" class="close">×</span>
                    <header>Help Us With Your Details <i class="fa fa-pencil"></i></header>
                    <fieldset>
                        <section>
                            <p style="
    color: #0053a6;
    text-align: justify;
    font-weight: bold;
    margin-bottom: 10px;
">To overcome restrictions due to Corona Virus, we are offering Paid Tele/Video Consultation from top doctors. Let us know if you are interested &amp; we will contact you.</p> <input type="hidden" name="page_source" value="/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical"> <label class="input"> <i class="form-overlay-icon  fa fa-user-o"></i> <input required="required" class="form-control form-text required" id="edit-submitted-name--2" name="name" value="" size="60" maxlength="128" placeholder="Name" type="text"> </label> <span id="name_error" class="enquiry_error_msg"></span>
                        </section>
                        <section> <label class="input"> <i class="form-overlay-icon fa fa-envelope"></i> <input required="required" class="email form-control form-text form-email required" id="edit-submitted-email" name="email" size="60" placeholder="Email address" type="email"> <!-- <b class="tooltip tooltip-bottom-right">Needed to verify your account</b> --> </label> <span id="email_error" class="enquiry_error_msg"></span> </section>
                        <section> <label class="select flagstrap"> <span class="flag-icon-img flagstrap-icon" style="position: absolute;top: 14px;left: 7px;"></span> <i class="form-overlay-icon fa fa-sort overlay-sort"></i> <select required="required" onchange="if (!window.__cfRLUnblockHandlers) return false; countryChange(this);" class="override_select_box form-select required country-field icon-placement" id="edit-submitted-country" name="country" style="-webkit-appearance: none;">
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
                                </select> </label> <span id="country_error" class="enquiry_error_msg"></span> </section>
                        <section class="stateSelect" style="display: none;"> <label class="select"> <i class="form-overlay-icon fa fa-sort overlay-sort"></i> <select class="override_select_box form-select required state-field icon-placement" id="edit-submittedState" name="state">
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
                                </select> </label> <span id="state_error" class="enquiry_error_msg"></span> </section>
                        <section> <label class="input label_merge"> <i class="form-overlay-icon fa fa-phone"></i> <input type="text" name="country_code" class="phone_number merge_countryCode overlay-form-cc" readonly="readonly"> <input required="required" class="form-control form-text required merge_codeNumber overlay-form-number" id="edit-submitted-phone-number--2" name="phone_number" value="" size="60" maxlength="128" placeholder="Phone Number" type="text"> <!-- <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b> --> </label> <span id="phone_number_error" class="enquiry_error_msg"></span> </section>
                        <section> <label class="input"> <textarea required="required" class="sky-form-text-area required" id="edit-submitted-comment" name="comment" cols="60" rows="5" type="text" placeholder="Describe the problem"></textarea> <!-- <b class="tooltip tooltip-bottom-right">Only latin characters and numbers</b> --> </label> <span id="comment_error" class="enquiry_error_msg"></span> </section>
                        <section class="preferred_time" style="display: none;"> <label class="input"> <i class="form-overlay-icon  fa fa-calendar"></i> <input class="form-control form-text form_datetime" id="edit-submitted-preferred-time" name="preferred_time" value="" size="60" placeholder="Doctor Appointment Date" type="text" autocomplete="off" readonly="readonly"> </label> <span id="preferred_time_error" class="enquiry_error_msg"></span> </section>
                        <section class="visa_required"> <a href="#"><input type="checkbox" class="form-control form-text visa_webform" name="visa_required" value="yes"> I need visa invitation letter.</a> </section>
                        <section><input type="checkbox" id="online_consultation" name="online_consultation" value="1" style="transform: scale(1.5);"> <label for="online_consultation" style="
				    color: #0053a6;
				    font-weight: bold;
				    font-size: 15px;
				    margin-left: 5px;
				">I am OK with Paid Tele/Video Consultation</label><br> </section>
                        <section>
                            <div class="footer-button"> <button type="submit" class="button footer-button">Submit</button> </div>
                        </section>
                        <section>
                            <p style="text-align: center;"><span class="output_response"></span></p>
                        </section>
                        <section>
                            <div class="col-xs-2"><img alt="NABH" title="NABH" src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/vaidam.gif" data-src="https://www.vaidam.com/sites/all/themes/vaidam/v0/dist/img/an_tb/nabh.png" width="60" height="60"></div>
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
</style> <!-- <a id="whatsapp-chat" href="https://api.whatsapp.com/send?phone=919971616131&text=Hello, please contact me regarding http://www.vaidam.com/knowledge-center/news/vaidam-health-gets-covered-medical-travel-today-authoritative-newsletter-medical, Thank you!" class="whatsapp-chat"><i class="fa fa-whatsapp" aria-hidden="true"></i></a> -->
</body>