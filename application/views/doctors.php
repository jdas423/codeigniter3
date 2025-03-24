<!-- Breadcrumb section -->
<section class="breadcrumb-section bg-light border-bottom border-2 border-light-subtle">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
                    <ol class="breadcrumb mt-3">
                        <li class="breadcrumb-item"><a class="text-secondary" href="https://www.vaidam.com"
                                title="Home">Home</a></li>
                        <li class="breadcrumb-item"><span class="text-secondary" title="Doctors">Doctors</span></li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="list-search hero-bg pt-5 pt-md-0">
    <div class="container-fluid patern-row justify-content-between d-none d-md-flex px-0"> <img class="hero-patern-l"
            src="<?php echo base_url("assets/img/").'hero-bg-patern.webp'?>" width="240" height="125"
            alt="bg-patern" title="Bg-Pattern"> <img class="hero-patern-r flip-img"
            src="<?php echo base_url("assets/img/").'hero-bg-patern.webp'?>" width="240" height="125"
            alt="bg-patern" title="Bg-Pattern"> </div>
    <div class="container">
        <div class="row">
            <div class="col-12 mx-auto">
                <h1 class="text-center">Choose the Right Doctor For You</h1>
            </div>
        </div>
    </div>
</section>
<section class="filter-section hero-bg pb-5 pb-md-0">
    <div class="container">
        <div class="row">
            <div class="close-button-box bg-theam-2"> <button
                    class="close-mob-filter align-content-center align-items-center gap-3 py-2" id="CloseMobFilter"><img
                        src="<?php echo base_url("assets/img/").'go-to-back-arrow.svg'?>" width="28"
                        height="28" alt="Close fillter" title="Go to back">
                    <p class="mb-0">Go to back</p>
                </button> </div>
            <div class="col-11 mx-auto">
                <form class="search-new-search-box row mt-3 align-items-center position-relative" autocomplete="off">
                    <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-10 col-md-9"> <select
                            class="country_filter select2 select2-hidden-accessible" id="country_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('country')"
                            data-select2-id="country_filter" tabindex="-1" aria-hidden="true">
                            <option value="IN" selected="" data-select2-id="2">India</option>
                            <option value="AE">United Arab Emirates</option>
                            <option value="TH">Thailand</option>
                            <option value="TR">Turkey</option>
                            <option value="KR">South Korea</option>
                            <option value="MY">Malaysia</option>
                            <option value="DE">Germany</option>
                            <option value="SG">Singapore</option>
                            <option value="ZA">South Africa</option>
                            <option value="OM">Oman</option>
                            <option value="IL">Israel</option>
                            <option value="EG">Egypt</option>
                            <option value="ES">Spain</option>
                            <option value="AT">Austria</option>
                            <option value="CZ">Czech Republic</option>
                            <option value="PL">Poland</option>
                            <option value="CH">Switzerland</option>
                            <option value="TN">Tunisia</option>
                            <option value="SA">Saudi Arabia</option>
                            <option value="LT">Lithuania</option>
                            <option value="FR">France</option>
                            <option value="CY">Cyprus</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="1" style="width: 202.675px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-country_filter-container"><span
                                        class="select2-selection__rendered" id="select2-country_filter-container"
                                        role="textbox" aria-readonly="true" title="India">India</span><span
                                        class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <select
                            class="city_filter select2 select2-hidden-accessible" id="city_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('city')"
                            data-select2-id="city_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="4">All Cities</option>
                            <optgroup label="Top Cities">
                                <option value="New Delhi">New Delhi</option>
                                <option value="Bangalore">Bangalore</option>
                                <option value="Chennai">Chennai</option>
                                <option value="Mumbai">Mumbai</option>
                                <option value="Gurgaon">Gurgaon</option>
                                <option value="Hyderabad">Hyderabad</option>
                                <option value="Noida">Noida</option>
                            </optgroup>
                            <optgroup label="Other Cities">
                                <option value="Kolkata">Kolkata</option>
                                <option value="Pune">Pune</option>
                                <option value="Jaipur">Jaipur</option>
                                <option value="Faridabad">Faridabad</option>
                                <option value="Ahmedabad">Ahmedabad</option>
                                <option value="Mohali">Mohali</option>
                                <option value="Lucknow">Lucknow</option>
                                <option value="Nagpur">Nagpur</option>
                                <option value="Bhubaneswar">Bhubaneswar</option>
                                <option value="Amritsar">Amritsar</option>
                                <option value="Calicut">Calicut</option>
                                <option value="Kochi">Kochi</option>
                                <option value="Secunderabad">Secunderabad</option>
                                <option value="Trivandrum">Trivandrum</option>
                                <option value="Aurangabad">Aurangabad</option>
                                <option value="Ghaziabad">Ghaziabad</option>
                                <option value="Surat">Surat</option>
                                <option value="Visakhapatnam">Visakhapatnam</option>
                                <option value="Patiala">Patiala</option>
                                <option value="Chandigarh">Chandigarh</option>
                                <option value="Ludhiana">Ludhiana</option>
                                <option value="Ranchi">Ranchi</option>
                                <option value="Angamaly">Angamaly</option>
                                <option value="Indore">Indore</option>
                                <option value="Nashik">Nashik</option>
                                <option value="Gandhinagar">Gandhinagar</option>
                                <option value="Bathinda">Bathinda</option>
                                <option value="Kurnool">Kurnool</option>
                                <option value="Dehradun">Dehradun</option>
                                <option value="Nellore">Nellore</option>
                                <option value="Mathura">Mathura</option>
                                <option value="Udaipur">Udaipur</option>
                                <option value="Kanpur">Kanpur</option>
                                <option value="Vijayawada">Vijayawada</option>
                                <option value="Mysore">Mysore</option>
                                <option value="Bhopal">Bhopal</option>
                                <option value="Haridwar">Haridwar</option>
                                <option value="Pathankot">Pathankot</option>
                                <option value="Siliguri">Siliguri</option>
                                <option value="Srikakulam">Srikakulam</option>
                                <option value="Varanasi">Varanasi</option>
                                <option value="Karimnagar">Karimnagar</option>
                                <option value="Darjeeling">Darjeeling</option>
                                <option value="Sangareddy">Sangareddy</option>
                                <option value="Ajmer">Ajmer</option>
                                <option value="Nizamabad">Nizamabad</option>
                                <option value="Jodhpur">Jodhpur</option>
                                <option value="Vadodara">Vadodara</option>
                                <option value="Pondicherry">Pondicherry</option>
                                <option value="Rewari">Rewari</option>
                                <option value="Hoshiarpur">Hoshiarpur</option>
                                <option value="Patna">Patna</option>
                                <option value="Rajkot">Rajkot</option>
                                <option value="Ahmednagar">Ahmednagar</option>
                            </optgroup>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="3" style="width: 202.675px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-city_filter-container"><span
                                        class="select2-selection__rendered" id="select2-city_filter-container"
                                        role="textbox" aria-readonly="true" title="All Cities">All
                                        Cities</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> <select
                            class="department_filter select2 select2-hidden-accessible" id="department_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('department')"
                            data-select2-id="department_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="6">All Departments</option>
                            <option data-dept_id="26" value="cardiology-and-cardiac-surgery">CARDIOLOGY AND CARDIAC
                                SURGERY</option>
                            <option data-dept_id="4" value="cosmetic-and-plastic-surgery">COSMETIC AND PLASTIC
                                SURGERY</option>
                            <option data-dept_id="27" value="dental-treatment">DENTAL TREATMENT</option>
                            <option data-dept_id="722" value="dermatology">DERMATOLOGY</option>
                            <option data-dept_id="255" value="endocrinology">ENDOCRINOLOGY</option>
                            <option data-dept_id="28" value="ent-surgery">ENT SURGERY</option>
                            <option data-dept_id="254" value="gastroenterology">GASTROENTEROLOGY</option>
                            <option data-dept_id="31" value="general-surgery">GENERAL SURGERY</option>
                            <option data-dept_id="29" value="gynecology">GYNECOLOGY</option>
                            <option data-dept_id="256" value="hematology">HEMATOLOGY</option>
                            <option data-dept_id="724" value="hepatology">HEPATOLOGY</option>
                            <option data-dept_id="30" value="ivf-and-infertility">IVF and INFERTILITY</option>
                            <option data-dept_id="253" value="nephrology">NEPHROLOGY</option>
                            <option data-dept_id="2" value="neurology-and-neurosurgery">NEUROLOGY AND NEUROSURGERY
                            </option>
                            <option data-dept_id="33" value="obesity-or-bariatric-surgery-0">OBESITY OR BARIATRIC
                                SURGERY</option>
                            <option data-dept_id="3" value="oncology-and-oncosurgery">ONCOLOGY AND ONCOSURGERY
                            </option>
                            <option data-dept_id="35" value="opthalmology">OPTHALMOLOGY</option>
                            <option data-dept_id="1" value="orthopedics">ORTHOPEDICS</option>
                            <option data-dept_id="1371" value="pediatric-cardiology">PEDIATRIC CARDIOLOGY</option>
                            <option data-dept_id="36" value="pediatrics-and-pediatric-surgery">PEDIATRICS AND
                                PEDIATRIC SURGERY</option>
                            <option data-dept_id="312" value="pulmonology">PULMONOLOGY</option>
                            <option data-dept_id="1818" value="rehabilitation">REHABILITATION</option>
                            <option data-dept_id="723" value="rheumatology">RHEUMATOLOGY</option>
                            <option data-dept_id="37" value="routine-health-check-ups">ROUTINE HEALTH CHECK-UPS
                            </option>
                            <option data-dept_id="38" value="spine-surgery">SPINE SURGERY</option>
                            <option data-dept_id="39" value="transplant-surgery">TRANSPLANT SURGERY</option>
                            <option data-dept_id="40" value="urology-treatment">UROLOGY TREATMENT</option>
                            <option data-dept_id="41" value="vascular-surgery">VASCULAR SURGERY</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="5" style="width: 304.013px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-department_filter-container"><span
                                        class="select2-selection__rendered" id="select2-department_filter-container"
                                        role="textbox" aria-readonly="true" title="All Departments">All
                                        Departments</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                        <!-- treatment dropdown --> <select class="treatment_filter select2 select2-hidden-accessible"
                            id="treatment_filter"
                            onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('treatment')"
                            data-select2-id="treatment_filter" tabindex="-1" aria-hidden="true" style="">
                            <option value="" data-select2-id="8">All Treatment</option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="7" style="width: 105.6px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-treatment_filter-container"><span
                                        class="select2-selection__rendered" id="select2-treatment_filter-container"
                                        role="textbox" aria-readonly="true" title="All Treatment">All
                                        Treatment</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span>
                        <!-- treatment dropdown end --> <select
                            class="hospital_filter select2 select2-hidden-accessible" id="hospital_filter"
                            data-select2-id="hospital_filter" tabindex="-1" aria-hidden="true">
                            <option value="" data-select2-id="10">All Hospitals</option>
                            <option data-mhosp_id="2520" value="medanta-medicity-gurgaon">Medanta - The Medicity,
                                Gurgaon</option>
                            <option data-mhosp_id="2521" value="blk-hospital-new-delhi">BLK-Max Super Speciality
                                Hospital Delhi</option>
                            <option data-mhosp_id="2522" value="indraprastha-apollo-hospital-new-delhi">Indraprastha
                                Apollo Hospital, New Delhi</option>
                            <option data-mhosp_id="2526" value="fortis-escorts-heart-institute-new-delhi">Fortis
                                Escorts Heart Institute, New Delhi</option>
                            <option data-mhosp_id="2530" value="artemis-hospital-gurgaon">Artemis Hospital, Gurgaon
                            </option>
                            <option data-mhosp_id="2533"
                                value="fortis-flt-lt-rajan-dhall-hospital-vasant-kunj-new-delhi">Fortis Flt. Lt.
                                Rajan Dhall Hospital, Vasant Kunj, New Delhi</option>
                            <option data-mhosp_id="2536" value="fortis-hospital-noida">Fortis Hospital, Noida
                            </option>
                            <option data-mhosp_id="2537" value="jaypee-hospital-noida">Jaypee Hospital, Noida
                            </option>
                            <option data-mhosp_id="2538" value="max-super-speciality-hospital-patparganj-new-delhi">
                                Max Super Speciality Hospital, Patparganj, New Delhi</option>
                            <option data-mhosp_id="2539" value="max-super-speciality-hospital-shalimar-bagh-new-delhi">
                                Max Super Speciality
                                hospital, Shalimar Bagh, New Delhi</option>
                            <option data-mhosp_id="2540" value="max-hospital-gurgaon">Max Super Specialty Hospital,
                                Gurgaon</option>
                            <option data-mhosp_id="2549" value="nova-ivi-fertility-new-delhi">NOVA IVI Fertility,
                                New Delhi</option>
                            <option data-mhosp_id="2551" value="max-super-speciality-hospital-saket-new-delhi">Max
                                Super Speciality Hospital, Saket, New Delhi</option>
                            <option data-mhosp_id="2618" value="fortis-memorial-research-institute-gurgaon">Fortis
                                Memorial Research Institute, Gurgaon</option>
                            <option data-mhosp_id="2847" value="manipal-hospital-bangalore">Manipal Hospital (Old
                                Airport Road) Bangalore</option>
                            <option data-mhosp_id="2934" value="apollo-hospitals-greams-road-chennai">Apollo
                                Hospitals, Greams Road, Chennai</option>
                            <option data-mhosp_id="3029" value="jaslok-hospital-mumbai">Jaslok Hospital, Mumbai
                            </option>
                            <option data-mhosp_id="3587" value="kokilaben-dhirubhai-ambani-hospital-mumbai">
                                Kokilaben Dhirubhai Ambani Hospital, Mumbai</option>
                            <option data-mhosp_id="3590" value="aster-medcity-kochi">Aster Medcity Kochi</option>
                            <option data-mhosp_id="3641" value="fortis-hospital-shalimar-bagh-new-delhi">Fortis
                                Hospital, Shalimar Bagh, New Delhi</option>
                            <option data-mhosp_id="3792" value="apollo-hospital-bangalore">Apollo Hospital
                                (Bannerghatta Road) Bangalore </option>
                            <option data-mhosp_id="6007" value="fortis-hospital-bangalore">Fortis Hospital,
                                Bangalore (Bannerghatta Road)</option>
                            <option data-mhosp_id="6388" value="apollo-hospitals-hyderabad">Apollo Hospitals,
                                Jubilee Hills Hyderabad</option>
                            <option data-mhosp_id="7367" value="nanavati-super-specialty-hospital-mumbai">Nanavati
                                Super Specialty Hospital, Mumbai</option>
                            <option data-mhosp_id="9054" value="hcg-cancer-centre-bangalore">HCG Cancer Centre,
                                Bangalore</option>
                            <option data-mhosp_id="10341" value="aster-mims-calicut">Aster MIMS, Calicut</option>
                            <option data-mhosp_id="11024" value="miot-international-chennai">MIOT International,
                                Chennai</option>
                            <option data-mhosp_id="11592" value="hcg-cancer-centre-mumbai">HCG Cancer Centre, Mumbai
                            </option>
                        </select><span class="select2 select2-container select2-container--default" dir="ltr"
                            data-select2-id="9" style="width: 304.013px;"><span class="selection"><span
                                    class="select2-selection select2-selection--single" role="combobox"
                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                    aria-labelledby="select2-hospital_filter-container"><span
                                        class="select2-selection__rendered" id="select2-hospital_filter-container"
                                        role="textbox" aria-readonly="true" title="All Hospitals">All
                                        Hospitals</span><span class="select2-selection__arrow" role="presentation"><b
                                            role="presentation"></b></span></span></span><span class="dropdown-wrapper"
                                aria-hidden="true"></span></span> </div>
                    <div class="col-lg-2 col-md-3 mt-3 mt-md-0">
                        <div class="d-grid"> <button type="button"
                                class="btn btn-primary search-btn btn-danger border-0" id="search_btn"
                                onclick="if (!window.__cfRLUnblockHandlers) return false; applyFilterOnDrList()">
                                <div id="loader" class="loader" style="display: none;"></div> <span
                                    id="search_text">Search</span>
                            </button> </div>
                    </div> <span
                        class="col-12 close-mob-filter close-mob-filter-text fw-bolder fs-5 text-danger justify-content-center">Close</span>
                </form>
            </div>
            <div class="col-12 text-center d-none d-md-block mt-4"> <img
                    src="<?php echo base_url("assets/img/").'hero-bg-2.webp'?>" width="276" height="123"
                    alt="hero bg-2" title="Hero Bg-2"> </div>
        </div>
    </div>
</section>
<section class="related-link-section">
    <div class="container">
        <div class="row py-5">
            <div class="col-12 related-link-box">
                <h2 class="fs-3 fw-semibold mb-4">The Best Doctors in India, Turkey, and Thailand for Your Health
                    Needs</h2>
                <div class="p-4 rounded-4 border bg-light">
                    <h3>Top Doctors in India</h3>
                    <ul>
                        <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india"
                                title="Best Cardiac Surgeons in India">Best Cardiac Surgeons in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/pediatric-cardiology/india"
                                title="Best Pediatric Cardiac Surgeons in India">Best Pediatric Cardiac Surgeons in
                                India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/india"
                                title="Best Oncologist in India">Best Oncologist in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/hematology/india"
                                title="Best Hematologist in India">Best Hematologist in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/neurology-and-neurosurgery/india"
                                title="Best Neurosurgeons in India">Best Neurosurgeons in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/spine-surgery/india"
                                title="Best Spine Surgeons in India">Best Spine Surgeons in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/orthopedics/india"
                                title="Best Orthopedic Doctors in India">Best Orthopedic Doctors in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/india"
                                title="Best IVF Doctors in India">Best IVF Doctors in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/gynecology/india"
                                title="Best Gynecologists in India">Best Gynecologists in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/transplant-surgery/india"
                                title="Best Transplant Surgeons in India">Best Transplant Surgeons in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/gastroenterology/india"
                                title="Best Gastroenterologist in India">Best Gastroenterologist in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/india"
                                title="Best Bariatric Surgeons in India">Best Bariatric Surgeons in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/india"
                                title="Best Cosmetic &amp; Plastic Surgeon in India">Best Cosmetic &amp; Plastic
                                Surgeon in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/dental-treatment/india"
                                title="Best Dentists in India">Best Dentists in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/urology-treatment/india"
                                title="Best Urologist in India">Best Urologist in India</a></li>
                        <li><a href="https://www.vaidam.com/doctors/nephrology/india"
                                title="Best Kidney Specialists In India">Best Kidney Specialists In India</a></li>
                    </ul>
                    <h3>Top Doctors in Turkey</h3>
                    <ul>
                        <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/turkey"
                                title="Best Cardiac Surgeons in Turkey">Best Cardiac Surgeons in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/pediatric-cardiology/turkey"
                                title="Best Pediatric Cardiac Surgeons in Turkey">Best Pediatric Cardiac Surgeons in
                                Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/turkey"
                                title="Best Oncologist in Turkey">Best Oncologist in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/hematology/turkey"
                                title="Best Hematologist in Turkey">Best Hematologist in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/neurology-and-neurosurgery/turkey"
                                title="Best Neurosurgeons in Turkey">Best Neurosurgeons in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/spine-surgery/turkey"
                                title="Best Spine Surgeons in Turkey">Best Spine Surgeons in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/orthopedics/turkey"
                                title="Best Orthopedic Doctors in Turkey">Best Orthopedic Doctors in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/turkey"
                                title="Best IVF Doctors in Turkey">Best IVF Doctors in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/gynecology/turkey"
                                title="Best Gynecologists in Turkey">Best Gynecologists in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/transplant-surgery/turkey"
                                title="Best Transplant Surgeons in Turkey">Best Transplant Surgeons in Turkey</a>
                        </li>
                        <li><a href="https://www.vaidam.com/doctors/gastroenterology/turkey"
                                title="Best Gastroenterologist in Turkey">Best Gastroenterologist in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/turkey"
                                title="Best Bariatric Surgeons in Turkey">Best Bariatric Surgeons in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/turkey"
                                title="Best Cosmetic &amp; Plastic Surgeon in Turkey">Best Cosmetic &amp; Plastic
                                Surgeon in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/dental-treatment/turkey"
                                title="Best Dentists in Turkey">Best Dentists in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/urology-treatment/turkey"
                                title="Best Urologist in Turkey">Best Urologist in Turkey</a></li>
                        <li><a href="https://www.vaidam.com/doctors/nephrology/turkey"
                                title="Best Kidney Specialists In Turkey">Best Kidney Specialists In Turkey</a></li>
                    </ul>
                    <h3>Top Doctors in Thailand</h3>
                    <ul>
                        <li><a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/thailand"
                                title="Best Cardiac Surgeons in Thailand">Best Cardiac Surgeons in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/pediatric-cardiology/thailand"
                                title="Best Pediatric Cardiac Surgeons in Thailand">Best Pediatric Cardiac Surgeons
                                in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/oncology-and-oncosurgery/thailand"
                                title="Best Oncologist in Thailand">Best Oncologist in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/hematology/thailand"
                                title="Best Hematologist in Thailand">Best Hematologist in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/neurology-and-neurosurgery/thailand"
                                title="Best Neurosurgeons in Thailand">Best Neurosurgeons in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/spine-surgery/thailand"
                                title="Best Spine Surgeons in Thailand">Best Spine Surgeons in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/orthopedics/thailand"
                                title="Best Orthopedic Doctors in Thailand">Best Orthopedic Doctors in Thailand</a>
                        </li>
                        <li><a href="https://www.vaidam.com/doctors/ivf-and-infertility/thailand"
                                title="Best IVF Doctors in Thailand">Best IVF Doctors in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/gynecology/thailand"
                                title="Best Gynecologists in Thailand">Best Gynecologists in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/transplant-surgery/thailand"
                                title="Best Transplant Surgeons in Thailand">Best Transplant Surgeons in
                                Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/gastroenterology/thailand"
                                title="Best Gastroenterologist in Thailand">Best Gastroenterologist in Thailand</a>
                        </li>
                        <li><a href="https://www.vaidam.com/doctors/obesity-or-bariatric-surgery-0/thailand"
                                title="Best Bariatric Surgeons in Thailand">Best Bariatric Surgeons in Thailand</a>
                        </li>
                        <li><a href="https://www.vaidam.com/doctors/cosmetic-and-plastic-surgery/thailand"
                                title="Best Cosmetic &amp; Plastic Surgeon in Thailand">Best Cosmetic &amp; Plastic
                                Surgeon in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/dental-treatment/thailand"
                                title="Best Dentists in Thailand">Best Dentists in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/urology-treatment/thailand"
                                title="Best Urologist in Thailand">Best Urologist in Thailand</a></li>
                        <li><a href="https://www.vaidam.com/doctors/nephrology/thailand"
                                title="Best Kidney Specialists In Thailand">Best Kidney Specialists In Thailand</a>
                        </li>
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
                <h2>See How Vaidam Simplifies Your Search for Trusted Doctors</h2>
                <div class="list-row">
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'Top-Medical-Opinions.webp'?>" width="33"
                                height="33" alt="Top Medical Opinions" title="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Access World-Class Specialists</h3>
                            <p>Connect with top-rated doctors from leading hospitals</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'Accredited.webp'?>" width="33" height="33"
                                alt="Top Medical Opinions" title="Top Medical Opinions"> </div>
                        <div class="list-content">
                            <h3>Personalized Medical Options</h3>
                            <p>Receive recommendations based on your specific health needs and preferences</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'Comprehensive-Support.webp'?>" width="33"
                                height="33" alt="Top Medical Opinions" title="Top Medical Opinions">
                        </div>
                        <div class="list-content">
                            <h3>Fast and Hassle-Free Process</h3>
                            <p>Quickly find the right specialist without the stress of endless research</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'icon-umbrella.webp'?>" width="33"
                                height="33" alt="Top Medical Opinions" title="Top Medical Opinions"> </div>
                        <div class="list-content">
                            <h3>Comprehensive Care</h3>
                            <p>Dedicated medical coordinator to assist you at every step</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex my-4 my-md-5">
                        <div class="heding-icon bg-theam-2 rounded-circle"> <img class="hicon-img"
                                src="<?php echo base_url("assets/img/").'icon-care.webp'?>" width="33" height="33"
                                alt="Top Medical Opinions" title="Top Medical Opinions"> </div>
                        <div class="list-content">
                            <h3>Global Reach, Local Care</h3>
                            <p>Benefit from our extensive network, offering you the best care options in the city
                                you choose</p>
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
                                                class="fs-4"> Find the Best Doctor for You </strong>
                                            <!-- <small> Treatment plan and quote within 2 days </small> --> </span>
                                    </div>
                                    <div id="custom-form-doctor-card col-12">
                                        <form class="row" id="secondFormInList" autocomplete="off"> <input type="hidden"
                                                name="_token" id="_token"
                                                value="3DJqIWQ3ESw7nlQKf6EQJJJacPgWIZoQrCCmfT9C"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source-sfil" value="https://www.vaidam.com/doctors"> <input
                                                type="hidden" name="lang1" id="lang-sfil"
                                                value="https://www.vaidam.com/doctors">
                                            <input type="hidden" name="second_form" value="yes"> <input type="hidden"
                                                name="preferredLocation" id="preferredLocation" value="India"> <input
                                                type="hidden" name="Form_Location" id="Form_Location" value="Main Form">
                                            <input type="hidden" name="Page_Type" id="Page_Type"
                                                value="Doctor Anchor Page"> <input type="hidden" name="c_url" id="c_url"
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
                            aria-controls="collapseOne"> What criteria are used to include
                            doctors on your list? </button> </h3>
                    <div id="collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body">
                            <p>We created Vaidam.com as a platform to assist patients find answers to their
                                questions regarding serious medical issues.</p>
                            <p>When the medical issues are serious in nature it also puts an onus on us to make sure
                                we curate a list of doctors that truly can help our patients.</p>
                            <p>Some (not all) of the criteria to include a doctor on platform are - </p>
                            <ul>
                                <li>Experience (both years and quality of experience by understanding the prior
                                    hospitals worked ),</li>
                                <li>Qualifications (ranking of the college/university doctor studied from),</li>
                                <li>Specialties (some doctors chose a subset of studied speciality and it is a great
                                    indicator for patients to opt super specialization whenever available),</li>
                                <li>Patient reviews (both online and offline mechanism),</li>
                                <li>Accreditations from reputable medical boards</li>
                                <li>papers published in medical journals</li>
                            </ul>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                            aria-controls="collapseThree"> Do the doctors on your list have
                            international experience? </button> </h3>
                    <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> International experiences, fellowships completed, training
                            undertaken by a doctor is listed on the doctor detailed page. </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapsefive" aria-expanded="false"
                            aria-controls="collapsefive"> What should I consider when choosing
                            a doctor in another country? </button> </h3>
                    <div id="collapsefive" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Wherever possible, you should ask for happy patient stories
                            from your chosen doctor in your home country. While not many treatments are individual
                            dependent, there are a few such scenarios where because of your height, weight, race,
                            age - the outcome may differ from another patient. It would be wise to understand the
                            experience of a doctor in handling similar patients like yourself. </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false"
                            aria-controls="collapseSeven"> Do the doctors on your list accept
                            international insurance? </button> </h3>
                    <div id="collapseSeven" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Generally the acceptance of international insurance depends
                            upon the agreement between the hospital and your insurance company. However, from our
                            experience, most leading insurances are accepted at leading hospitals around the world.
                            To know specifically about your insurance for the treatment chosen, we request you to
                            leave enquiry and let our support team check the details for you. </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false"
                            aria-controls="collapseNine"> What support do you offer if I need
                            assistance in selecting a doctor? </button> </h3>
                    <div id="collapseNine" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Having handled thousands of similar patients like yourself, our
                            case managers are well trained to make your selection process hasslefree. From sharing
                            the opinion from doctors, cost estimates, arranging online consultations, our team is
                            equipped with getting answers to all your questions. </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 faqs">
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                            aria-controls="collapseTwo"> How can I find the best doctor for my
                            specific medical condition? </button> </h3>
                    <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Finding a doctor is never an easy task. We have provided a lot
                            of details on Vaidam.com for our patients to consume specific information relevant to
                            their case, however, you are also welcome to speak in person with our case managers on
                            call and they can also share their previous experience of handling thousands of similar
                            patients. </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false"
                            aria-controls="collapseFour"> Are there patient reviews available
                            for the doctors listed? </button> </h3>
                    <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Yes, our platform allows users to leave their review on
                            Vaidam.com. We always encourage our previous patients to share their journey on
                            Vaidam.com for the benefit of future patients. That's why we have a detailed patient
                            testimonial section on Vaidam.com and 1000s of patient stories on our youtube channel.
                        </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false"
                            aria-controls="collapseSix"> How can I book an appointment with a
                            doctor listed on your website? </button> </h3>
                    <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> You can fill up our enquiry form OR initiate the conversation
                            via Whatsapp button on our website and get connected by our support team. </div>
                    </div>
                </div>
                <div class="accordion-item rounded-2">
                    <h3 class="accordion-header"> <button class="accordion-button bg-theam-2 collapsed" type="button"
                            data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false"
                            aria-controls="collapseEight"> Can I get a second opinion from a
                            doctor on your list? </button> </h3>
                    <div id="collapseEight" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities">
                        <div class="accordion-body"> Yes, we can help you with getting connected over virtual calls
                            with doctors listed on our platform. In many cases, we can even help you get
                            complimentary consultation online OR if your case does not qualify for complimentary
                            consultation, we will share the online consultation fee. You can pay via our paypal and
                            other electronic media and complete the consultation. </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<style>
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
</style> <!-- End Body Content Start --> <!-- Term and Policy Modal Section Starts--> <!-- Terms Modal -->
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
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/doctors?source=wpchat_DASB,%20Thank%20you!"
        title="Whatsapp Chat" class="readmore whatsapp-color"><img loading="lazy"
            src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us"
            title="Chat with Us" width="30" height="29" class="img-fluid me-1"> Chat</a> </div>
<!-- Sticky buttton for mobile view -->
<div class="footer-stic-btns"> <button
        class="bg-theam border-0 fillter-on-mobile py-2 sticky-send-enquiry-smallscreen text-white"><img
            src="https://www.vaidam.com/assets/dr_list_v1/images/filter-icon.webp" alt="Filter" title="Filter"
            width="26" height="26"> <span>Filter</span></button> <a class="whatsapp-btn-mob wa_button_clicked"
        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/doctors?source=wpchat_DASB,%20Thank%20you!"><img
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

