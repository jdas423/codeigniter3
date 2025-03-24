<style>
    .hospital_filter+.select2-container--default .select2-selection--single,
    .department_filter1+.select2-container--default .select2-selection--single {
        border-radius: 0 8px 8px 0 !important
    }

    .country_filter,
    .city_filter {
        width: 30%;
    }

    .department_filter1 {
        border: 1px solid #c9c9c9 !important;
        height: 44px;
    }

    @media screen and (min-width: 768px) {
        .department_filter1 {
            width: 40% !important;
        }
    }
</style> <!-- Breadcrumb section -->
<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com"
                                title="Home">Home</a></li>
                        <li class="breadcrumb-item"><span class="text-secondary" title="Hospitals">Hospitals</span>
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="list-search hero-bg pt-5 pt-md-0">
    <div class="container-fluid patern-row justify-content-between d-none d-md-flex px-0">
        <!-- <img class="hero-patern-l" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" alt="bg-patern"> -->
        <img class="hero-patern-l" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240"
            height="125" title="bg-patern" alt="bg-patern">
        <!-- <img class="hero-patern-r flip-img" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp" width="240" height="125" alt="bg-patern"> -->
        <img class="hero-patern-r flip-img" src="https://www.vaidam.com/assets/anchor/images/hero-bg-patern.webp"
            width="240" height="125" title="bg-patern" alt="bg-patern">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-11 mx-auto">
                <h1 class="text-center">Find Your Ideal Hospital</h1>
            </div>
        </div>
    </div>
</section>
<section class="filter-section hero-bg pb-5 pb-md-0">
    <div class="container">
        <div class="row">
            <div class="close-button-box bg-theam-2"> <button
                    class="close-mob-filter align-content-center align-items-center gap-3 py-2" id="CloseMobFilter">
                    <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/go-to-back-arrow.svg" width="28"
                        height="28" title="Close fillter" alt="Close fillter">
                    <p class="mb-0">Go to back</p>
                </button> </div>
            <div class="col-10 mx-auto">
                <form class="search-new-search-box row mt-3 align-items-center position-relative" autocomplete="off">
                    <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-10 col-md-9"> <select
                            class="country_filter select2 select2-hidden-accessible" id="country_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; getCitiesFilter(this.options[this.selectedIndex].value);"
                            data-select2-id="country_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">Select Country</option>
                            <option value="IN">India</option>
                            <option value="TR">Turkey</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="DE">Germany</option>
                            <option value="TN">Tunisia</option>
                            <option value="KR">South Korea</option>
                            <option value="EG">Egypt</option>
                            <option value="ES">Spain</option>
                            <option value="FR">France</option>
                            <option value="MY">Malaysia</option>
                            <option value="TH">Thailand</option>
                            <option value="CY">Cyprus</option>
                            <option value="ZA">South Africa</option>
                            <option value="SG">Singapore</option>
                            <option value="IL">Israel</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="AT">Austria</option>
                            <option value="PL">Poland</option>
                            <option value="CH">Switzerland</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="1" style="width: 275.675px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-country_filter-container"><span
                                        class="select2-selection__rendered" id="select2-country_filter-container"
                                        role="textbox" aria-readonly="true" title="Select Country">Select
                                        Country</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <select
                            class="city_filter select2 select2-hidden-accessible" id="city_filter"
                            data-select2-id="city_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="4">All Cities</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="3" style="width: 275.675px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-city_filter-container"><span
                                        class="select2-selection__rendered" id="select2-city_filter-container"
                                        role="textbox" aria-readonly="true" title="All Cities">All
                                        Cities</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <select
                            class="department_filter1 select2 select2-hidden-accessible" id="department_filter1"
                            data-select2-id="department_filter1" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="6">All Departments</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="5" style="width: 367.575px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-department_filter1-container"><span
                                        class="select2-selection__rendered" id="select2-department_filter1-container"
                                        role="textbox" aria-readonly="true" title="All Departments">All
                                        Departments</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> </div>
                    <div class="col-lg-2 col-md-3 mt-3 mt-md-0">
                        <div class="d-grid"> <button type="button"
                                class="btn btn-primary search-btn btn-danger border-0" id="search_btn"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; applyFilterOnHospList();">
                                <div id="loader" class="loader" style="display: none;"></div> <span
                                    id="search_text">Search</span>
                            </button> </div>
                    </div>
                    <div class="col-12"> <span
                            class="close-mob-filter close-mob-filter-text fw-bolder fs-5 text-danger justify-content-center">Close</span>
                    </div>
                    <div class="mt-2" style="display: none; color: white " id="country_error"> <span>Please select a
                            country</span> </div>
                </form>
            </div>
            <div class="col-12 text-center d-none d-md-block mt-4"> <img
                    src="<?php echo base_url("assets/img/")?>hospital-basepage-bg.webp" width="198" height="124"
                    title="Hero bg-2" alt="hero bg-2"> </div>
        </div>
    </div>
</section>
<section class="related-link-section">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 related-link-box">
                <h2 class="mb-4">Top Hospitals Across India, Turkey, and Thailand</h2>
                <div class="p-4 rounded-4 border bg-light">
                    <h3>Top Hospitals in India</h3>
                    <ul>
                        <?php
                          foreach($hospitals["India"] as $hospital){
                              echo '<li><a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon"
                                    title="'.$hospital["name"].'">'.$hospital["name"].'</a></li>';
                          }
                        ?>
                    </ul>
                    <h3>Top Hospitals in Turkey</h3>
                    <ul>
                    <?php
                          foreach($hospitals["Turkey"] as $hospital){
                              echo '<li><a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon"
                                    title="'.$hospital["name"].'">'.$hospital["name"].'</a></li>';
                          }
                        ?>
                    </ul>
                    <h3>Top Hospitals in Thailand</h3>
                    <ul>
                    <?php
                          foreach($hospitals["Thailand"] as $hospital){
                              echo '<li><a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon"
                                    title="'.$hospital["name"].'">'.$hospital["name"].'</a></li>';
                          }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main pb-4">
    <div class="container">
        <div class="row mt-4">
            <div class="col-lg-8 mb-0">
                <h2 class="mb-4">See How Vaidam Helps You Choose the Best Hospitals Effortlessly</h2>
                <div class="list-row">
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/") . 'Comprehensive-List-of-Hospitals.webp'; ?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Comprehensive List of Hospitals</h3>
                            <p>Wide range of hospitals from multiple countries for you to choose as per your need
                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/") . 'Expert-Guidance-and-Support.webp'; ?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Expert Guidance and Support</h3>
                            <p>Access to a team of medical coordinators who assist you throughout the process, from
                                initial consultation to post-treatment follow-up</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'Language-Support.webp'; ?>" width="33"
                                height="33" title="Top Medical Opinions" alt="Top Medical Opinions"> </div>
                        <div class="list-content">
                            <h3>Language Support</h3>
                            <p>Multilingual support to help bridge communication gaps</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'Patient-Reviews-and-Ratings.webp'; ?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Patient Reviews and Ratings</h3>
                            <p>Real feedback from past patients, enabling you to make decisions based on the
                                experiences of others</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php base_url("assets/img/").'Transparency-in-Pricing.webp'; ?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Transparency in Pricing</h3>
                            <p>Detailed information on treatment costs, helping you make informed decisions without
                                hidden fees or surprises</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 position-relative"> <!-- Right Side Form -->
                <div class="form-col-box bg-theam-2 rounded-3 position-sticky">
                    <!-- <div class="ms_v_cta_heading d-flex mb-4"> <span class="d-flex flex-column"><strong class="fs-4">Get FREE Evaluation</strong><small>Treatment plan and quote within 2 days</small></span> </div> -->
                    <div id="custom-form"> <!-- Form Between List -->
                        <div class="row body-form-row pt-0 pb-4">
                            <div class="col-12">
                                <div class="form-col-box bg-theam-2 p-4 rounded-3">
                                    <div
                                        class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                        <img class="mr-2" loading="lazy"
                                            src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg"
                                            width="50" height="50" alt="Know more" title="Know more"> <span
                                            class="d-flex justify-content-center flex-column lh-base"> <strong
                                                class="fs-4"> Need Help </strong>
                                            <!-- <small> Treatment plan and quote within 2 days </small> --> </span>
                                    </div>
                                    <div id="custom-form-doctor-card col-12">
                                        <form class="row" id="secondFormInList" autocomplete="off"> <input type="hidden"
                                                name="_token" id="_token"
                                                value="Pr7tVZv55ticm6SFGMUg6rZCoxZDEFprIXdCSSXG"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source-sfil" value="https://www.vaidam.com/hospitals"> <input
                                                type="hidden" name="lang1" id="lang-sfil"
                                                value="https://www.vaidam.com/hospitals"> <input type="hidden"
                                                name="second_form" value="yes"> <input type="hidden"
                                                name="preferredLocation" id="preferredLocation" value=""> <input
                                                type="hidden" name="Form_Location" id="Form_Location" value="Main Form">
                                            <input type="hidden" name="Page_Type" id="Page_Type"
                                                value="Hospital Anchor Page"> <input type="hidden" name="c_url"
                                                id="c_url" value="">
                                            <div class="col-12 mb-3"> <label for="inputName" class="form-label">
                                                    Name </label> <input type="text" class="form-control" id="name"
                                                    placeholder="Patient Name" name="name" aria-label="Patient Name"
                                                    required=""> </div>
                                            <div class="col-12 mb-3"> <label for="inputEmail" class="form-label">
                                                    Email </label>
                                                <div class="input-group"> <input type="email" class="form-control"
                                                        id="email" placeholder="Enter email" name="email" required="">
                                                </div>
                                            </div>
                                            <div class="col-12 mb-3"> <label for="inputState" class="form-label">
                                                    Country </label> <select class="form-select country"
                                                    id="country-sfil" placeholder="Select Country" name="country"
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
                                            <div class="col-12 mb-3 autocomplete stategroup-sfil"
                                                style="display: block;"> <label for="inputCity" class="form-label">
                                                    City </label> <input id="city-sfil"
                                                    class="form-control new-form-control" type="text" name="city"
                                                    placeholder="Enter City"> <input type="hidden" id="state-sfil"
                                                    name="state"> </div>
                                            <div class="col-12 mb-3"> <label for="inputPhone" class="form-label">
                                                    Phone Number </label>
                                                <div class="input-group"> <input
                                                        class="input-group-text country_phone_code"
                                                        id="country_phone_code-sfil" name="country_phone_code"
                                                        placeholder="Code" style="width: 80px;"> <input type="text"
                                                        class="form-control" id="phone_number" name="phone_number"
                                                        placeholder="Enter Phone no."> </div>
                                            </div>
                                            <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;">
                                                <label for="inputAddress2" class="form-label"> Patient's Age or Date
                                                    Of Birth </label> <input type="text"
                                                    class="form-control new-form-control" id="age"
                                                    placeholder="Example: 30 Yrs or 29-05-1985" name="age">
                                            </div>
                                            <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label">
                                                    Medical Issue </label> <textarea type="text" class="form-control"
                                                    id="medical_problem" name="medical_problem"
                                                    placeholder="Describe The Current Medical Problem."></textarea>
                                            </div>
                                            <div class="col-12 mb-3" id="emirates-id-block" style="display: none;">
                                                <label for="inputCity" class="form-label"> Emirates ID </label>
                                                <input type="text" class="form-control new-form-control"
                                                    name="emirates-id" id="emirates-id"
                                                    placeholder="Enter Emirates ID (To be shared with hospital)">
                                            </div>
                                            <div class="col-12 mt-2">
                                                <div class="d-grid"> <button type="submit" id="search-main-form-btn"
                                                        class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form">
                                                        Contact Us Now </button> </div>
                                            </div>
                                        </form> <span
                                            class="formtns-triger d-block text-black-50 text-center fs-6 mt-4"> By
                                            submitting the form I agree to the <a title="Terms of Use"
                                                href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal"
                                                data-bs-target="#formTerms"> Terms of Use </a> and <a
                                                title="Privacy Policy" href="/privacy-policy" class="terms_of_use"
                                                data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy"> Privacy
                                                Policy </a> of Vaidam Health. </span>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- End Between form -->
                        <script type="text/javascript" src="https://www.vaidam.com/assets/js/searchpage.js"></script>
                        <script type="text/javascript"> $("#secondFormInList").submit(function (e) {
                                e.preventDefault();
                                var path = window.location.href;
                                var segment = path.split("/");
                                var langCountry = ['en', 'fr', 'ar', 'ru', 'bn', 'hi', 'ro', 'es', 'pt'];
                                if (jQuery.inArray(segment[3], langCountry) !== -1) {
                                    var base_url_lp_new = "https://www.vaidam.com/" + segment[3] + "/lp";
                                } else {
                                    var base_url_lp_new = "https://www.vaidam.com/lp";
                                }
                                if (typeof segment[3] !== 'undefined') {
                                    var base_url_lp_new = base_url_lp_new.replace(segment[3] + '/' + segment[3], segment[3]);
                                }
                                var city = $("#city-sfil").val();
                                city = city.toLowerCase().replace(/\b[a-z]/g, function (city) {
                                    return city.toUpperCase();
                                });
                                city = city.trim();
                                var page_source = $("#page_source-sfil").val();
                                var url = page_source.split("/");
                                var citydata = cities.filter(function (citydata) {
                                    return citydata.city == city;
                                });

                                if (citydata[0] != undefined) {
                                    $("#state-sfil").val(citydata[0].state);
                                } else {
                                    $("#state-sfil").val("");
                                }

                                $(".online-consult-button-sfil").attr("disabled", true);
                                $(".online-consult-button-sfil").text("Submitting...");

                                $.post(base_url_lp_new + "/genericform", $("#secondFormInList").serialize(), function (data) {
                                    window.location.replace(base_url_lp_new + "/consult-online?form_step_1=done");
                                });
                                return false;
                            });

                            $("#country-sfil").change(function () {
                                var curval = $(this).val();
                                $("#country_phone_code-sfil").val(country_phone_code[curval]);
                                if (curval != "IN") {
                                    $(".stategroup-sfil").hide();
                                    $("#state-sfil").attr("disabled", "true");
                                    $("#ageblock-sfil").hide();
                                } else {
                                    $(".stategroup-sfil").show();
                                    $("#state-sfil").removeAttr("disabled");
                                    $("#ageblock-sfil").show();
                                }
                            });

                            //generic ip tracker
                            var page_source = window.location.href;
                            $("#page_source-sfil").val(page_source);
                            $("#lang-sfil").val(page_source);

                            if (countryCode != undefined || countryCode == "") {
                                $("#country-sfil").val(countryCode);
                                $("#country_phone_code-sfil").val(country_phone_code[countryCode]);
                            }

                            autocomplete(document.getElementById("city-sfil"), cities);
                            $(document).ready(function () {
                                // When page is ready, check if there is a pre-selected country
                                // var urlCountry = getCookie("SetPageCountry");
                                var preferredLocation = getCookie("preferredLocation").replace(/\+/g, ' ');
                                var countryCode = getCookie("countryCode");

                                // Check for UAE and show emirates ID and city dropdown
                                if (preferredLocation == 'United Arab Emirates' && countryCode == 'AE') {
                                    $('#emirates-id-block').show();
                                    $('.stategroup-sfil').show();
                                    $('#city-sfil').attr('placeholder', 'Enter Emirates');
                                    $('#city-sfil').replaceWith('<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                                } else if (countryCode == 'IN') {
                                    $('#emirates-id-block').hide();
                                    $('.stategroup-sfil').show();
                                    $('#city-sfil').attr('placeholder', 'Enter city');
                                    $('#city-sfil').replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                                    autocomplete(document.getElementById("city-sfil"), cities);

                                } else {
                                    $('#emirates-id-block').hide();
                                    $('.stategroup-sfil').hide();
                                }

                                // Handle country selection change event
                                $('#country-sfil').on('change', function () {
                                    var selectedCountry = $(this).val();
                                    $("#country_phone_code-sfil").val(country_phone_code[selectedCountry]);
                                    if (selectedCountry == 'AE') {
                                        $('#emirates-id-block').show();
                                        $('.stategroup-sfil').show();
                                        $("#state-sfil").attr("disabled", "true");
                                        $("#ageblock-sfil").hide();
                                        $('#city-sfil').attr('placeholder', 'Enter Emirates');
                                        $('#city-sfil').replaceWith('<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>');
                                    } else if (selectedCountry == "IN") {
                                        $('#emirates-id-block').hide();
                                        $('.stategroup-sfil').show();
                                        $('#city-sfil').attr('placeholder', 'Enter city');
                                        $('#city-sfil').replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Enter City">');
                                        autocomplete(document.getElementById("city-sfil"), cities);
                                    }
                                    else {
                                        $('#emirates-id-block').hide();
                                        $('.stategroup-sfil').hide();
                                        $("#ageblock-sfil").hide();
                                        $("#state-sfil").attr("disabled", "true");
                                    }
                                });
                            }); </script>
                    </div>
                    <style>
                        @media screen and (min-width: 768px) {
                            .body-form-row .col-12.mb-3 {
                                width: 100%;
                            }
                        }
                    </style>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="main-bottom bg-light py-5">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="mb-4">Frequently Asked Questions (FAQ’s)</h2>
            </div>
        </div>
        <div class="row accordion faq custom-accordion" id="accordionFacilities">
            <div class="col-lg-6 faqs">
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                            aria-controls="collapseOne"> How do you select the hospitals
                            included on your list? </button> </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>We have a stringent criteria to include hospitals in our list and here are some of
                                the factors we take into consideration: </p>
                            <ul>
                                <li>Size of the hospital - Number of beds/ ICU Bed/ Operation theaters</li>
                                <li>Availability of diagnostic services - PET CT, MRI, CT, Nuclear medicine, In
                                    House Lab etc</li>
                                <li>Availability of blood bank</li>
                                <li>Total number of departments - sub specialization and super specializations
                                    offered</li>
                                <li>Accreditation received in last 5-10 years - JCI, ISQua, GHA etc</li>
                                <li>Published information on re-admissions, Hospital Acquired Infections, Long Term
                                    success rates on the surgeries offered</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree"> What accreditations do the
                            hospitals on your list hold? </button> </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>There are some global accreditation bodies and some which are specific to a country.
                                We consider both when evaluating listing of hospitals on Vaidam.com. </p>
                            <ul>
                                <li>International Accreditations - JCI, ISQua, GHA, ACHSI, CCHSA</li>
                                <li>Country Specific - NABH for India; Healthcare Accreditation Institute in
                                    Thailand; SAS in Turkey etc</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                            aria-controls="collapsefive"> Can I view detailed information
                            about the hospitals on your list? </button> </h3>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Yes, we cover following information about hospitals on their detail pages: </p>
                            <ul>
                                <li>Brief about the hospital</li>
                                <li>Departments available</li>
                                <li>List of top doctors working there</li>
                                <li>Facilities offered - Food, Currency exchange, In-Room services, Transportation
                                </li>
                                <li>Infrastructure</li>
                                <li>Location - Distance from airport</li>
                                <li>Happy patient stories of that hospital</li>
                                <li>Photo Gallery</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven"> How can I choose the right hospital
                            for my treatment? </button> </h3>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Finding a hospital is never an easy task. We have provided a lot of details on
                                Vaidam.com for our patients to consume specific information relevant to their case,
                                however, you are also welcome to speak in person with our case managers on call and
                                they can also share their previous experience of handling thousands of similar
                                patients.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                            aria-controls="collapseNine"> Do the hospitals on your list cater
                            to international patients? </button> </h3>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Yes, almost all hospitals listed on Vaidam.com have services specific to
                                International patients. Many of them have dedicated departments and teams for the
                                comfort and needs of international patients. For language assistance, Vaidam also
                                offers complimentary interpreter services in many countries of our operations.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 faqs">
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo"> Can I contact the hospital directly
                            for more information? </button> </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Yes, if you are not comfortable talking to our team or need validation on the
                                information shared by our team from the hospital side, we will be happy to put you
                                in touch with the hospital department to allay your concerns. Although not every
                                hospital has the language interpreter you may need for yourself, our team can assist
                                you bridge the gap.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour"> How do I know the hospital is safe
                            and up to international standards? </button> </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>International accreditation achieved by the hospital is an indicator for high focus
                                on patient safety and outcomes. Don't forget to check if the accreditation of the
                                hospital is still valid or expired/ revoked.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix"> What services are offered to
                            international patients at these hospitals? </button> </h3>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Most hospitals offer following special considerations for international patients:
                            </p>
                            <ul>
                                <li>Airport transfers</li>
                                <li>International lounge in hospital for comfort</li>
                                <li>Priority for doctor appointments and investigations</li>
                                <li>Money Exchange</li>
                                <li>SIM card availability</li>
                                <li>Listing of nearby hotels/ guest houses</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                            aria-controls="collapseEight"> Are there patient testimonials
                            available for the hospitals? </button> </h3>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Yes, Vaidam has handled more than 100,000 patients. We have a lot of patient stories
                                available on our platform
                                (https://www.vaidam.com/knowledge-center/patient-testimonials) and our youtube
                                channel (https://www.youtube.com/vaidam) to ensure high patient satisfaction.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false"
                            aria-controls="collapseTen"> Can I arrange a tour of the hospital
                            before deciding? </button> </h3>
                    <div id="collapseTen" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>We can arrange for virtual tours or share the videos of the hospital infrastructure.
                                Our team can help coordinate these details.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script type="text/javascript"> function getCitiesFilter(country) {
        var country = country;
        //console.log(dept);
        if (typeof country == 'undefined' || country == '') {
            var dd = document.getElementById("country_filter");
            dd.style.borderColor = "#FF0000";
            $('#country_filter').focus();
            return false;
        } else {
            document.getElementById('country_filter').style.removeProperty('border');
        }
        const form_data = { country: country };

        $.ajax({
            url: 'https://www.vaidam.com/hospitals/get_city_filter',
            type: 'GET',
            data: form_data,
            headers: {
                'X-CSRF-TOKEN': 'Pr7tVZv55ticm6SFGMUg6rZCoxZDEFprIXdCSSXG'
            },
            success: function (response) {
                let result = response.data;
                //console.log(result);exit;
                resetCities(result);
                resetDepartment1(result);
            },
            error: function (xhr, status, error) {
                console.log('Error: ', error);
            }
        });
    }

    function resetCities(result) {
        if (typeof result !== 'undefined' && result !== null && typeof result.cities !== 'undefined') {
            const cities = result.cities;
            $('#city_filter').empty();
            let department_option = '<option value="">All Cities</option>';
            if (cities.length > 0) {
                cities.forEach(item => {
                    //let dept_value = (item.alias).replace('department/','');
                    department_option += '<option value="' + item.city_name + '">' + item.city_name + '</option>';
                });
            }
            $('#city_filter').append(department_option);
        }
    }

    function resetDepartment1(result) {
        if (typeof result !== 'undefined' && result !== null && typeof result.department !== 'undefined') {
            const department = result.department;
            $('#department_filter1').empty();
            let department_option = '<option value="">All Departments</option>';
            if (department.length > 0) {
                department.forEach(item => {
                    //let dept_value = (item.alias).replace('department/','');
                    department_option += '<option value="' + item.department + '">' + item.department + '</option>';
                });
            }
            $('#department_filter1').append(department_option);
        }
    }

    function applyFilterOnHospList() {
        const end_point = 'https://www.vaidam.com';
        let department = $('#department_filter1 option:selected').val() || '';
        let country = $('#country_filter option:selected').val() || '';
        let city = $('#city_filter option:selected').val() || '';

        var errorMessage = document.getElementById("country_error");
        let search = document.getElementById('search_btn');
        let loader = document.getElementById('loader');

        if (typeof country == 'undefined' || country == '') {
            const spanElement = document.querySelector('span[data-select2-id="1"]');
            if (spanElement) {
                spanElement.style.border = "5px solid red";
                spanElement.style.borderRadius = "4px";
            }
            errorMessage.style.display = "inline";
            $('#country_filter').focus();
            return false;
        }
        search.querySelector("#search_text").textContent = "Searching...";
        loader.style.display = "inline";
        let drListSearchFilter = {
            department: department,
            country: country,
            city: city,
            url: end_point + '/hospitals'
        };
        $.ajax({
            url: end_point + '/hospitals/getAppliedFilterUrl',
            type: 'GET',
            data: drListSearchFilter,
            headers: {
                'X-CSRF-TOKEN': 'Pr7tVZv55ticm6SFGMUg6rZCoxZDEFprIXdCSSXG'
            },
            success: function (response) {
                const mappingPageUrl = response.formatted_url || '';
                console.log('mappingPageUrl: ', mappingPageUrl);
                if (mappingPageUrl != '') {
                    window.location.assign(mappingPageUrl);
                    setTimeout(function () {
                        loader.style.display = "none";
                        search.querySelector("#search_text").textContent = "Search";
                    }, 1000);
                }

            },
            error: function (xhr, status, error) {
                console.log('Error: ', error);
            }
        });
    }
    $('#country_filter').on('change', function () {
        const country = $(this).val();
        if (country) {

            const spanElement = document.querySelector('span[data-select2-id="1"]');
            if (spanElement) {
                spanElement.style.removeProperty('border');
                spanElement.style.removeProperty('border-radius');
            }
            var errorMessage = document.getElementById("country_error");
            if (errorMessage) {
                errorMessage.style.display = "none";
            }
        }
    }); </script>
<style>
    /* Styling for the search button */
    #search_btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s linear infinite;
        margin-right: 10px;
        display: none;
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style>
 <!-- End Body Content Start --> <!-- Term and Policy Modal Section Starts--> <!-- Terms Modal -->
<div class="modal" id="formTerms">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title fs-5 fw-bold" id="">Terms of Use</span> <button
                    type="button" class="btn-close" data-bs-dismiss="modal"></button> </div>
            <div class="modal-body" id="terms_of_use"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-danger"
                    data-bs-dismiss="modal">Close</button> </div>
        </div>
    </div>
</div> <!-- Privacy Policy Modal -->
<div class="modal" id="formPrivacyPolicy">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
        <div class="modal-content">
            <div class="modal-header"> <span class="modal-title fs-5 fw-bold" id="">Privacy Policy</span> <button
                    type="button" class="btn-close" data-bs-dismiss="modal"></button> </div>
            <div class="modal-body" id="privacy_policy"> </div>
            <div class="modal-footer"> <button type="button" class="btn btn-danger"
                    data-bs-dismiss="modal">Close</button> </div>
        </div>
    </div>
</div> <!-- Term and Policy Modal Section Ends-->
<div id="menu-bottom" class="bottom-menu"> <a
        onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');"
        href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help">Need
        Help?</a> <a
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/hospitals?source=wpchat_HASB,%20Thank%20you!"
        title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy"
            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div>
<!-- Sticky buttton for mobile view -->
<div class="footer-stic-btns"> <button
        class="bg-theam border-0 fillter-on-mobile py-2 sticky-send-enquiry-smallscreen text-white"><img
            src="https://www.vaidam.com/assets/dr_list_v1/images/filter-icon.webp" alt="Filter" title="Filter"
            width="26" height="26"> <span>Filter</span></button> <a class="whatsapp-btn-mob wa_button_clicked"
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/hospitals?source=wpchat_HASB,%20Thank%20you!"><img
            src="https://www.vaidam.com/assets/v2/hospital_details/images/whatsapp-icon-white.png" title="Whatsapp Us"
            alt="Whatsapp Us"><span>Whatsapp Us</span></a> </div>
<style>
    .footer-stic-btns {
        display: none
    }

    @media screen and (max-width: 768px) {

        #footerCta,
        #floating-whatsapp {
            display: none
        }

        .footer-stic-btns {
            display: block;
            position: fixed;
            bottom: 0;
            width: 100%;
            z-index: 1000;
            border-top: 1px solid #fefefe;
        }

        .sticky-send-enquiry-smallscreen,
        .whatsapp-btn-mob {
            height: 44px;
            width: 50%;
            display: flex;
            float: left;
            gap: 5px;
            font-size: .95em;
            align-items: center;
            justify-content: center
        }

        .whatsapp-btn-mob {
            background-color: #40c351
        }

        a.whatsapp-btn-mob span {
            color: #fff
        }

        a.whatsapp-btn-mob img {
            width: 26px;
            height: 26px
        }

        .whatsapp-btn-mob span {
            color: #fff
        }
    }

    #search_btn {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .loader {
        border: 4px solid #f3f3f3;
        border-top: 4px solid #3498db;
        border-radius: 50%;
        width: 20px;
        height: 20px;
        animation: spin 1s linear infinite;
        margin-right: 10px;
        display: none;
    }


    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }
</style> <!-- Sticky buttton for mobile view End -->
<script type="text/javascript" src="https://www.vaidam.com/assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="https://www.vaidam.com/assets/dr_list_v1/js/multi-nav.js"></script>
<script type="text/javascript" defer="" src="https://www.vaidam.com/assets/dr_list_v1/js/select2.js"></script>
<script async="" src="https://www.vaidam.com/assets/revised/js/search_suggest.js" type="text/javascript"></script>
<script src="https://www.vaidam.com/assets/revised/list_page/custom_js/doctor_list_page.js"
    type="text/javascript"></script>
<script src="https://www.vaidam.com/assets/v2/js/countryData.js" type="text/javascript"></script>
<div class="cgw-ext" data-ext-id="pdnenlnelpdomajfejgapbdpmjkfpjkp"></div>
<div class="cgw_main_container"
    style="font-family: -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;; line-height: 18px; user-select: text; font-weight: normal; letter-spacing: normal; -webkit-font-smoothing: auto;">
</div><iframe allow="join-ad-interest-group" data-tagging-id="AW-989645465" data-load-time="1742801663323" height="0"
    width="0"
    src="https://td.doubleclick.net/td/rul/989645465?random=1742801663311&amp;cv=11&amp;fst=1742801663311&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je53j1v879240773za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=102482433~102788824~102803279~102813109&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.vaidam.com%2Fhospitals&amp;ref=https%3A%2F%2Fwww.vaidam.com%2F&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Top-Rated%20Hospitals%20Worldwide%20-%20Find%20Top%20Hospitals%20by%20Country%20and%20Cities&amp;npa=0&amp;pscdl=noapi&amp;auid=794519535.1741836252&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B134.0.6998.118%7CNot%253AA-Brand%3B24.0.0.0%7CGoogle%2520Chrome%3B134.0.6998.118&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
    style="display: none; visibility: hidden;"></iframe><iframe height="0" width="0"
    style="display: none; visibility: hidden;"></iframe><button id="cgw_action_btn" tabindex="-1"
    style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;"></button>