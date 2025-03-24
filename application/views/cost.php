<style>
    @media screen and (min-width: 768px) {

        .country_filter,
        .city_filter {
            width: 30%
        }

        .department_filter,
        .tag_filter {
            width: 35%
        }

        .department_filter+.select2-container--default .select2-selection--single {
            border-radius: 8px 0 0 8px !important
        }

        .country_filter+.select2-container--default .select2-selection--single {
            border-radius: 0 8px 8px 0 !important
        }

        .error-message {
            width: 30%;
            display: inline-block;
            color: #FFFFFF;
        }
    }

    @media screen and (max-width: 768px) {
        .error-message {
            color: #FFFFFF;
            display: inline-block;
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
</style> <!-- Breadcrumb section -->
<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com"
                                title="Home">Home</a></li>
                        <li class="breadcrumb-item"><span class="text-secondary" title="Cost">Cost</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="list-search hero-bg pt-5 pt-md-0">
    <div class="container-fluid patern-row justify-content-between d-none d-md-flex px-0"> <img class="hero-patern-l"
            src="<?php echo base_url('assets/img/').'hero-bg-patern.webp'?>" width="240" height="125"
            alt="bg-patern" title="Patern"> <img class="hero-patern-r flip-img"
            src="<?php echo base_url('assets/img/').'hero-bg-patern.webp'?>" width="240" height="125"
            alt="bg-patern" title="Patern"> </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <h1 class="text-center">Know the Cost of Your Treatments</h1>
            </div>
        </div>
    </div>
</section>
<section class="filter-section hero-bg pb-5 pb-md-0">
    <div class="container">
        <div class="row">
            <div class="close-button-box bg-theam-2"> <button
                    class="close-mob-filter align-content-center align-items-center gap-3 py-2" id="CloseMobFilter">
                    <img src="<?php echo base_url('assets/img/').'go-to-back-arrow.svg'?>" width="28"
                        height="28" title="Close fillter" alt="Close fillter">
                    <p class="mb-0">Go to back</p>
                </button> </div>
            <div class="col-10 mx-auto">
                <form class="search-new-search-box row mt-3 align-items-center position-relative" autocomplete="off">
                    <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-10 col-md-9">
                        <!-- Department --> <select class="department_filter select2 select2-hidden-accessible"
                            id="department_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; getTags(this.options[this.selectedIndex].value);"
                            data-select2-id="department_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="2">Select Department</option>
                            <option value="26">CARDIOLOGY AND CARDIAC SURGERY</option>
                            <option value="3">ONCOLOGY AND ONCOSURGERY</option>
                            <option value="256">HEMATOLOGY</option>
                            <option value="2">NEUROLOGY AND NEUROSURGERY</option>
                            <option value="38">SPINE SURGERY</option>
                            <option value="1">ORTHOPEDICS</option>
                            <option value="30">IVF and INFERTILITY</option>
                            <option value="37">ROUTINE HEALTH CHECK-UPS</option>
                            <option value="29">GYNECOLOGY</option>
                            <option value="39">TRANSPLANT SURGERY</option>
                            <option value="254">GASTROENTEROLOGY</option>
                            <option value="33">OBESITY OR BARIATRIC SURGERY</option>
                            <option value="4">COSMETIC AND PLASTIC SURGERY</option>
                            <option value="27">DENTAL TREATMENT</option>
                            <option value="40">UROLOGY TREATMENT</option>
                            <option value="253">NEPHROLOGY</option>
                            <option value="31">GENERAL SURGERY</option>
                            <option value="35">OPTHALMOLOGY</option>
                            <option value="28">ENT SURGERY</option>
                            <option value="724">HEPATOLOGY</option>
                            <option value="41">VASCULAR SURGERY</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="1" style="width: 321.625px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-department_filter-container"><span
                                        class="select2-selection__rendered" id="select2-department_filter-container"
                                        role="textbox" aria-readonly="true" title="Select Department">Select
                                        Department</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <!-- Tags --> <select
                            class="tag_filter select2 select2-hidden-accessible" id="tag_filter"
                            data-select2-id="tag_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="4">Select Procedure</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="3" style="width: 321.625px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-tag_filter-container"><span
                                        class="select2-selection__rendered" id="select2-tag_filter-container"
                                        role="textbox" aria-readonly="true" title="Select Procedure">Select
                                        Procedure</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <!-- Country --> <select
                            class="country_filter select2 select2-hidden-accessible" id="country_filter"
                            data-select2-id="country_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="6">Select Country</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="5" style="width: 275.675px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-country_filter-container"><span
                                        class="select2-selection__rendered" id="select2-country_filter-container"
                                        role="textbox" aria-readonly="true" title="Select Country">Select
                                        Country</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                    </div>
                    <div class="col-lg-2 col-md-3 mt-3 mt-md-0">
                        <div class="d-grid"> <button type="button"
                                class="btn btn-primary search-btn btn-danger border-0" id="search_btn"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; applyFilterOnCost();">
                                <div id="loader" class="loader"> </div> <span id="search_text">Search</span>
                            </button> </div>
                    </div>
                    <div class="col-12"> <span
                            class="close-mob-filter close-mob-filter-text fw-bolder fs-5 text-danger justify-content-center">Close</span>
                    </div>
                    <div id="error-message-container" class="col-12  mt-3"></div>
                </form>
            </div>
            <div class="col-12 text-center d-none d-md-block mt-4"> <img
                    src="<?php echo base_url('assets/img/').'filter-below-img.png'?>" width="140" height="124"
                    title="Find the cost of medical procedures" alt="hero bg-2"> </div>
        </div>
    </div>
</section>
<section class="related-link-section">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 related-link-box">
                <h2 class="mb-4">Find Out Prices for Treatments in India, Turkey, and Thailand</h2>
                <div class="p-4 rounded-4 border bg-light">
                    <h3>Treatment Cost in India</h3>
                    <ul>
                        <li><a title="Neurosurgery Cost In India"
                                href="https://www.vaidam.com/search/neurosurgery/india">Neurosurgery Cost In
                                India</a></li>
                        <li><a title="Heart Surgery Cost in India"
                                href="https://www.vaidam.com/search/heart-surgery/india">Heart Surgery Cost in
                                India</a></li>
                        <li><a title="Urology Treatment Cost in India"
                                href="https://www.vaidam.com/search/urology-problem/india">Urology Treatment Cost in
                                India</a></li>
                        <li><a title="Cancer Treatment Cost in India"
                                href="https://www.vaidam.com/search/cancer/india">Cancer Treatment Cost in India</a>
                        </li>
                        <li><a title="IVF Treatment Cost in India" href="https://www.vaidam.com/search/ivf/india">IVF
                                Treatment Cost in India</a></li>
                        <li><a title="Gynaecological Surgery Cost in India"
                                href="https://www.vaidam.com/search/gynecological-surgery/india">Gynaecological
                                Surgery Cost in India</a></li>
                        <li><a title="Heart Surgery Cost in India"
                                href="https://www.vaidam.com/search/heart-surgery/india">Heart Surgery Cost in
                                India</a></li>
                        <li><a title="Kidney Transplant Cost In India"
                                href="https://www.vaidam.com/search/kidney-transplant/india">Kidney Transplant Cost
                                In India</a></li>
                        <li><a title="Gamma Knife Surgery Cost In India"
                                href="https://www.vaidam.com/search/gamma-knife/india">Gamma Knife Surgery Cost In
                                India</a></li>
                    </ul>
                    <h3>Treatment Cost in Turkey</h3>
                    <ul>
                        <li><a title="Neurosurgery Cost In Turkey"
                                href="https://www.vaidam.com/search/neurosurgery/turkey">Neurosurgery Cost In
                                Turkey</a></li>
                        <li><a title="Heart Surgery Cost in Turkey"
                                href="https://www.vaidam.com/search/heart-surgery/turkey">Heart Surgery Cost in
                                Turkey</a></li>
                        <li><a title="Urology Treatment Cost in Turkey"
                                href="https://www.vaidam.com/search/urology-problem/turkey">Urology Treatment Cost
                                in Turkey</a></li>
                        <li><a title="Cancer Treatment Cost in Turkey"
                                href="https://www.vaidam.com/search/cancer/turkey">Cancer Treatment Cost in
                                Turkey</a></li>
                        <li><a title="IVF Treatment Cost in Turkey" href="https://www.vaidam.com/search/ivf/turkey">IVF
                                Treatment Cost in Turkey</a>
                        </li>
                        <li><a title="Gynaecological Surgery Cost in Turkey"
                                href="https://www.vaidam.com/search/gynecological-surgery/turkey">Gynaecological
                                Surgery Cost in Turkey</a></li>
                        <li><a title="Heart Surgery Cost in Turkey"
                                href="https://www.vaidam.com/search/heart-surgery/turkey">Heart Surgery Cost in
                                Turkey</a></li>
                        <li><a title="Cosmetic and Plastic Surgery Cost In Turkey"
                                href="https://www.vaidam.com/search/cosmetic/turkey">Cosmetic and Plastic Surgery
                                Cost In Turkey</a></li>
                    </ul>
                    <h3>Treatment Cost in Thailand</h3>
                    <ul>
                        <li><a title="Neurosurgery Cost In Thailand"
                                href="https://www.vaidam.com/search/neurosurgery/thailand">Neurosurgery Cost In
                                Thailand</a></li>
                        <li><a title="Heart Surgery Cost in Thailand"
                                href="https://www.vaidam.com/search/heart-surgery/thailand">Heart Surgery Cost in
                                Thailand</a></li>
                        <li><a title="Urology Treatment Cost in Thailand"
                                href="https://www.vaidam.com/search/urology-problem/thailand">Urology Treatment Cost
                                in Thailand</a></li>
                        <li><a title="Cancer Treatment Cost in Thailand"
                                href="https://www.vaidam.com/search/cancer/thailand">Cancer Treatment Cost in
                                Thailand</a></li>
                        <li><a title="IVF Treatment Cost in Thailand"
                                href="https://www.vaidam.com/search/ivf/thailand">IVF Treatment Cost in Thailand</a>
                        </li>
                        <li><a title="Gynaecological Surgery Cost in Thailand"
                                href="https://www.vaidam.com/search/gynecological-surgery/thailand">Gynaecological
                                Surgery Cost in Thailand</a></li>
                        <li><a title="Heart Surgery Cost in Thailand"
                                href="https://www.vaidam.com/search/heart-surgery/thailand">Heart Surgery Cost in
                                Thailand</a></li>
                        <li><a title="Cosmetic and Plastic Surgery Cost In Thailand"
                                href="https://www.vaidam.com/search/cosmetic/thailand">Cosmetic and Plastic Surgery
                                Cost In Thailand</a></li>
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
                <h2 class="mb-4">See How Vaidam Makes Treatment Cost Search Easy</h2>
                <div class="list-row">
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url('assets/img/').'Global-Cost-Transparency.webp'?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Global Cost Transparency</h3>
                            <p>Access pricing information from top medical centers worldwide</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url('assets/img/').'Informed-Decision-Making.webp'?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Informed Decision-Making</h3>
                            <p>Make well-informed choices about where to receive treatment and all associated costs
                            </p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url('assets/img/').'Tailored-Cost-Estimates.webp'?>"
                                width="33" height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Tailored Cost Estimates</h3>
                            <p>Receive personalized cost estimates based on your specific treatment needs and
                                preferred destinations</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url('assets/img/').'Planned-Medical-Travel.webp'?>" width="33"
                                height="33" title="Top Medical Opinions" alt="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Planned Medical Travel</h3>
                            <p>Plan your treatment with confidence, knowing you’ve found the best partner to take
                                care of your needs</p>
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
                                                value="3DJqIWQ3ESw7nlQKf6EQJJJacPgWIZoQrCCmfT9C"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source-sfil" value="https://www.vaidam.com/search"> <input
                                                type="hidden" name="lang1" id="lang-sfil"
                                                value="https://www.vaidam.com/search">
                                            <input type="hidden" name="second_form" value="yes"> <input type="hidden"
                                                name="preferredLocation" id="preferredLocation" value="India"> <input
                                                type="hidden" name="Form_Location" id="Form_Location" value="Main Form">
                                            <input type="hidden" name="Page_Type" id="Page_Type"
                                                value="Search Anchor Page"> <input type="hidden" name="c_url" id="c_url"
                                                value="">
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
                            aria-controls="collapseOne"> How is the cost of a medical
                            procedure determined? </button> </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>The cost of medical procedure depends on a variety of factors. Here are some most
                                common ones:</p>
                            <p> </p>
                            <ul>
                                <li>Need of diagnostics - other than cancer cases, most diagnostic packages are part
                                    of the package.</li>
                                <li>Number of days stay in the hospital</li>
                                <li>ICU days in hospital</li>
                                <li>Use of blood products</li>
                                <li>High end implants used during the surgery</li>
                                <li>Use of special medical equipments and modalities such as Robots, Cyberknife/
                                    Gammaknife</li>
                                <li>Hours in Operations theater</li>
                                <li>Doctor experience</li>
                                <li>Hospital chosen</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree"> Why do medical procedure costs vary
                            between countries? </button> </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Cost of medical procedure varies across countries for multiple factors and here are
                                some of the common ones:</p>
                            <p> </p>
                            <ul>
                                <li>Labor cost - Doctors, Nursing, Healthcare professionals</li>
                                <li>Land cost where hospital is built</li>
                                <li>Government regulations especially taxation on healthcare</li>
                                <li>Imports of medical products, medications vs local manufacturing</li>
                                <li>Currency exchange rate fluctuations</li>
                                <li>Legal protection costs for healthcare professionals</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                            aria-controls="collapsefive"> What is included in the quoted price
                            for a medical procedure? </button> </h3>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>We try to be as transparent as possible with our patients. Most common inclusions and
                                exclusions are clearly listed when giving cost estimates for medical procedures.
                                Here are some examples of inclusions:</p>
                            <p> </p>
                            <ul>
                                <li>Cost of hospital room, Operation theater, Surgeon fee, Assistant Surgeon Fee,
                                    Anesthetist, Consumables and medicines</li>
                            </ul>
                            <p></p>
                            <p>Here are some examples of exclusions:</p>
                            <p> </p>
                            <ul>
                                <li>Consultation with another department/ speciality which is unrelated to the
                                    medical procedure</li>
                                <li>Use of special equipments to tackle certain viral infections such as HIV,
                                    Hepatitis C etc</li>
                                <li>Unplanned increase in ICU days/ extra days in room than mentioned in the cost
                                    estimate</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven"> Are there any hidden costs I should
                            be aware of? </button> </h3>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>However much we try to be informative and transparent, not all costs can be covered -
                                post surgery medication, need for physiotherapy/ rehabilitation after surgery can
                                sometimes come across as unplanned expenses. Based on our prior experience, the cost
                                estimates given are accurate in 95% cases but be prepared for 10-20% price
                                difference in the remaining 5% unforeseen circumstance. More than hidden costs, the
                                bigger concerns are unreliable medical diagnosis presented by patients before
                                travelling. Doctors can give the estimate based on the information and medical
                                diagnosis shared by patients from home countries. When the information changes upon
                                fresh investigations in India, the cost of treatment may vary.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                            aria-controls="collapseNine"> How can I get an accurate estimate
                            for my medical procedure? </button> </h3>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Here are some best practices to receive accurate estimates from doctors:</p>
                            <p> </p>
                            <ul>
                                <li>Vaidam gets a detailed history of the patient to capture the treatments taken,
                                    investigations done, length of disease etc. Please share all those details
                                    accurately to the best of your knowledge.</li>
                                <li>Your medical reports should be recent - preferably less than 3 months old.
                                    Anything more than 6 months old medical reports are very unreliable.</li>
                                <li>Ask for a video consultation with your preferred doctor and exchange information
                                    before your trip.</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 faqs">
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo"> Does the cost of the procedure
                            include travel and accommodation? </button> </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Most hospitals do NOT include travel and accommodation costs in their estimates.
                                However, we at Vaidam can help you plan a complete travel itinerary with near
                                accurate cost estimates.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour"> Can I get financing options or
                            payment plans for my medical procedure? </button> </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>Unfortunately these options are not offered by service providers in India. It is
                                recommended you check for financing or payment plans with your local banks and
                                financial institutions in your home country.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix"> How do I know if my insurance will
                            cover the cost of the procedure abroad? </button> </h3>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>You should consult with your insurance provider to confirm coverage for international
                                medical procedures. If you share your insurance details with the Vaidam assigned
                                case manager, we will be happy to find out the coverage for your insurance in the
                                country you plan to travel.</p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                            aria-controls="collapseEight"> What should I do if I receive a
                            lower cost estimate from another provider? </button> </h3>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>When comparing costs across different service providers, you should try and make as
                                much apple to apple comparison as possible. If you compare the cost offered by a
                                high end tertiary care hospital vs a small nursing home, you have to acknowledge the
                                risk of care delivery and sub-standard clinical outcomes. Good news is, we at Vaidam
                                work with more than 200 hospitals in India and can find a matching price you may
                                have received from another service provider. Since our job is to assess the
                                requirement of infrastructure needed to manage your case, we can recommend an
                                alternative center without compromising too much on the clinical outcomes.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
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
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/search?source=wpchat_CASB,%20Thank%20you!"
        title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy"
            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div>
<!-- Sticky buttton for mobile view -->
<div class="footer-stic-btns"> <button
        class="bg-theam border-0 fillter-on-mobile py-2 sticky-send-enquiry-smallscreen text-white"><img
            src="https://www.vaidam.com/assets/dr_list_v1/images/filter-icon.webp" alt="Filter" title="Filter"
            width="26" height="26"> <span>Filter</span></button> <a class="whatsapp-btn-mob wa_button_clicked"
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/search?source=wpchat_CASB,%20Thank%20you!"><img
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



