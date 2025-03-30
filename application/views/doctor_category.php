
        <!-- Body Content Start -->
        <style>
            .qf_appt_available_show {
                display: block !important;
            }
            .qf_appt_available_hide {
                display: none !important;
            }

            .dr-card-main .readmorebox ul {
                list-style: none;
                margin: 0;
                padding: 0 0 5px;
            }
            .dr-card-main .readmorebox ul li {
                background: url(https://www.vaidam.com/assets/v2/doctor_detail/v1/img/check.svg) no-repeat left 5px;
                background-size: 15px;
                padding: 0 20px;
                margin: 10px 0 0;
            }

            .readmorebox {
                max-height: 140px;
                overflow: hidden;
                transition: max-height 0.3s ease-in-out;
            }

            .readmorebox.expanded {
                max-height: 10000px;
            }
        </style>
        <!-- Breadcrumb section -->
        <!-- Filter Options -->
        <section class="list-search bg-light pt-4">
            <div class="container">
                <div class="row">
                    <div class="col-12"><h1 class="text-center">Best Cardiac Surgeons in India</h1></div>
                </div>
            </div>
        </section>
        <section class="filter-section bg-light pb-4 sticy-filter-bar">
            <div class="container">
                <div class="row">
                    <div class="close-button-box bg-theam-2">
                        <button class="close-mob-filter align-content-center align-items-center gap-3 py-2" id="CloseMobFilter">
                            <img src="https://www.vaidam.com/assets/dr_list_v1/images/go-to-back-arrow.svg" width="28" height="28" alt="Close fillter" title="Close Filter" />
                            <p class="mb-0">Go to back</p>
                        </button>
                    </div>
                    <div class="col-12 mx-auto">
                        <form class="search-new-search-box row my-3 align-items-center position-relative" autocomplete="off">
                            <div class="search-fieald d-flex flex-wrap gap-2 gap-md-0 col-lg-11 col-md-11">
                                <select
                                    class="country_filter select2 select2-hidden-accessible"
                                    id="country_filter"
                                    onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('country')"
                                    data-select2-id="country_filter"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
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
                                    <option value="LT">Lithuania</option>
                                    <option value="SA">Saudi Arabia</option>
                                    <option value="FR">France</option>
                                    <option value="CY">Cyprus</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 244.225px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-country_filter-container">
                                            <span class="select2-selection__rendered" id="select2-country_filter-container" role="textbox" aria-readonly="true" title="India">India</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                                <select
                                    class="city_filter select2 select2-hidden-accessible"
                                    id="city_filter"
                                    onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('city')"
                                    data-select2-id="city_filter"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="" data-select2-id="4">All Cities</option>
                                    <optgroup label="Top Cities">
                                        <option value="New Delhi">New Delhi</option> <option value="Chennai">Chennai</option> <option value="Bangalore">Bangalore</option> <option value="Mumbai">Mumbai</option>
                                        <option value="Hyderabad">Hyderabad</option> <option value="Gurgaon">Gurgaon</option> <option value="Noida">Noida</option>
                                    </optgroup>
                                    <optgroup label="Other Cities">
                                        <option value="Kolkata">Kolkata</option> <option value="Jaipur">Jaipur</option> <option value="Pune">Pune</option> <option value="Faridabad">Faridabad</option>
                                        <option value="Ahmedabad">Ahmedabad</option> <option value="Mohali">Mohali</option> <option value="Nagpur">Nagpur</option> <option value="Bhubaneswar">Bhubaneswar</option>
                                        <option value="Lucknow">Lucknow</option> <option value="Calicut">Calicut</option> <option value="Secunderabad">Secunderabad</option> <option value="Trivandrum">Trivandrum</option>
                                        <option value="Amritsar">Amritsar</option> <option value="Aurangabad">Aurangabad</option> <option value="Ghaziabad">Ghaziabad</option> <option value="Visakhapatnam">Visakhapatnam</option>
                                        <option value="Kochi">Kochi</option> <option value="Gandhinagar">Gandhinagar</option> <option value="Surat">Surat</option> <option value="Indore">Indore</option>
                                        <option value="Angamaly">Angamaly</option> <option value="Ludhiana">Ludhiana</option> <option value="Dehradun">Dehradun</option> <option value="Nellore">Nellore</option>
                                        <option value="Patiala">Patiala</option> <option value="Kurnool">Kurnool</option> <option value="Chandigarh">Chandigarh</option> <option value="Karimnagar">Karimnagar</option>
                                        <option value="Pathankot">Pathankot</option> <option value="Bathinda">Bathinda</option> <option value="Ranchi">Ranchi</option> <option value="Mathura">Mathura</option>
                                        <option value="Sangareddy">Sangareddy</option> <option value="Srikakulam">Srikakulam</option> <option value="Mysore">Mysore</option> <option value="Haridwar">Haridwar</option>
                                        <option value="Nashik">Nashik</option> <option value="Udaipur">Udaipur</option> <option value="Ahmednagar">Ahmednagar</option> <option value="Varanasi">Varanasi</option>
                                        <option value="Nizamabad">Nizamabad</option> <option value="Kanpur">Kanpur</option> <option value="Bhopal">Bhopal</option> <option value="Patna">Patna</option>
                                        <option value="Pondicherry">Pondicherry</option>
                                    </optgroup>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 244.225px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-city_filter-container">
                                            <span class="select2-selection__rendered" id="select2-city_filter-container" role="textbox" aria-readonly="true" title="All Cities">All Cities</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                                <select
                                    class="department_filter select2 select2-hidden-accessible"
                                    id="department_filter"
                                    onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('department')"
                                    data-select2-id="department_filter"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="">All Department</option>
                                    <option data-dept_id="26" value="cardiology-and-cardiac-surgery" selected="" data-select2-id="6">CARDIOLOGY AND CARDIAC SURGERY</option>
                                    <option data-dept_id="4" value="cosmetic-and-plastic-surgery">COSMETIC AND PLASTIC SURGERY</option>
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
                                    <option data-dept_id="2" value="neurology-and-neurosurgery">NEUROLOGY AND NEUROSURGERY</option>
                                    <option data-dept_id="33" value="obesity-or-bariatric-surgery-0">OBESITY OR BARIATRIC SURGERY</option>
                                    <option data-dept_id="3" value="oncology-and-oncosurgery">ONCOLOGY AND ONCOSURGERY</option>
                                    <option data-dept_id="35" value="opthalmology">OPTHALMOLOGY</option>
                                    <option data-dept_id="1" value="orthopedics">ORTHOPEDICS</option>
                                    <option data-dept_id="1371" value="pediatric-cardiology">PEDIATRIC CARDIOLOGY</option>
                                    <option data-dept_id="36" value="pediatrics-and-pediatric-surgery">PEDIATRICS AND PEDIATRIC SURGERY</option>
                                    <option data-dept_id="312" value="pulmonology">PULMONOLOGY</option>
                                    <option data-dept_id="1818" value="rehabilitation">REHABILITATION</option>
                                    <option data-dept_id="723" value="rheumatology">RHEUMATOLOGY</option>
                                    <option data-dept_id="37" value="routine-health-check-ups">ROUTINE HEALTH CHECK-UPS</option>
                                    <option data-dept_id="38" value="spine-surgery">SPINE SURGERY</option>
                                    <option data-dept_id="39" value="transplant-surgery">TRANSPLANT SURGERY</option>
                                    <option data-dept_id="40" value="urology-treatment">UROLOGY TREATMENT</option>
                                    <option data-dept_id="41" value="vascular-surgery">VASCULAR SURGERY</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 244.225px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-department_filter-container">
                                            <span class="select2-selection__rendered" id="select2-department_filter-container" role="textbox" aria-readonly="true" title="CARDIOLOGY AND CARDIAC SURGERY">CARDIOLOGY AND CARDIAC SURGERY</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                                <!-- treatment dropdown -->
                                <select
                                    class="treatment_filter select2 select2-hidden-accessible"
                                    id="treatment_filter"
                                    onchange="if (!window.__cfRLUnblockHandlers) return false; refreshFilterDropdown('treatment')"
                                    data-select2-id="treatment_filter"
                                    tabindex="-1"
                                    aria-hidden="true"
                                >
                                    <option value="" data-select2-id="8">All Treatment</option>
                                    <option data-treatment_id="1873" value="angioplasty-and-stent-placement">Angioplasty</option>
                                    <option data-treatment_id="2241" value="asd-atrial-septal-defect-closure">ASD Closure</option>
                                    <option data-treatment_id="2267" value="radiofrequency-ablation">Radiofrequency Ablation</option>
                                    <option data-treatment_id="2271" value="aicd">Aicd Implantation</option>
                                    <option data-treatment_id="3531" value="heart-bypass-surgery-cabg">Heart Bypass Surgery</option>
                                    <option data-treatment_id="3533" value="angiography">Coronary Angiography</option>
                                    <option data-treatment_id="3556" value="ppi-permanent-pacemaker-implant-double-chamber">Pacemaker Surgery</option>
                                    <option data-treatment_id="3557" value="crt-d-implant-cardiac-resynchronization-therapy">CRT-D</option>
                                    <option data-treatment_id="3830" value="valve-replacement">Valve Replacement</option>
                                    <option data-treatment_id="11994" value="icd-implantation">ICD Implantation</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: 244.225px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-treatment_filter-container">
                                            <span class="select2-selection__rendered" id="select2-treatment_filter-container" role="textbox" aria-readonly="true" title="All Treatment">All Treatment</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                                <!-- treatment dropdown end -->
                                <select class="hospital_filter select2 select2-hidden-accessible" id="hospital_filter" data-select2-id="hospital_filter" tabindex="-1" aria-hidden="true">
                                    <option value="" data-select2-id="10">All Hospital</option>
                                    <option data-mhosp_id="2520" value="medanta-medicity-gurgaon">Medanta - The Medicity, Gurgaon</option>
                                    <option data-mhosp_id="2521" value="blk-hospital-new-delhi">BLK-Max Super Speciality Hospital Delhi</option>
                                    <option data-mhosp_id="2522" value="indraprastha-apollo-hospital-new-delhi">Indraprastha Apollo Hospital, New Delhi</option>
                                    <option data-mhosp_id="2526" value="fortis-escorts-heart-institute-new-delhi">Fortis Escorts Heart Institute, New Delhi</option>
                                    <option data-mhosp_id="2530" value="artemis-hospital-gurgaon">Artemis Hospital, Gurgaon</option>
                                    <option data-mhosp_id="2533" value="fortis-flt-lt-rajan-dhall-hospital-vasant-kunj-new-delhi">Fortis Flt. Lt. Rajan Dhall Hospital, Vasant Kunj, New Delhi</option>
                                    <option data-mhosp_id="2536" value="fortis-hospital-noida">Fortis Hospital, Noida</option>
                                    <option data-mhosp_id="2537" value="jaypee-hospital-noida">Jaypee Hospital, Noida</option>
                                    <option data-mhosp_id="2538" value="max-super-speciality-hospital-patparganj-new-delhi">Max Super Speciality Hospital, Patparganj, New Delhi</option>
                                    <option data-mhosp_id="2539" value="max-super-speciality-hospital-shalimar-bagh-new-delhi">Max Super Speciality hospital, Shalimar Bagh, New Delhi</option>
                                    <option data-mhosp_id="2540" value="max-hospital-gurgaon">Max Super Specialty Hospital, Gurgaon</option>
                                    <option data-mhosp_id="2551" value="max-super-speciality-hospital-saket-new-delhi">Max Super Speciality Hospital, Saket, New Delhi</option>
                                    <option data-mhosp_id="2618" value="fortis-memorial-research-institute-gurgaon">Fortis Memorial Research Institute, Gurgaon</option>
                                    <option data-mhosp_id="2847" value="manipal-hospital-bangalore">Manipal Hospital (Old Airport Road) Bangalore</option>
                                    <option data-mhosp_id="2934" value="apollo-hospitals-greams-road-chennai">Apollo Hospitals, Greams Road, Chennai</option>
                                    <option data-mhosp_id="3029" value="jaslok-hospital-mumbai">Jaslok Hospital, Mumbai</option>
                                    <option data-mhosp_id="3587" value="kokilaben-dhirubhai-ambani-hospital-mumbai">Kokilaben Dhirubhai Ambani Hospital, Mumbai</option>
                                    <option data-mhosp_id="3590" value="aster-medcity-kochi">Aster Medcity Kochi</option>
                                    <option data-mhosp_id="3641" value="fortis-hospital-shalimar-bagh-new-delhi">Fortis Hospital, Shalimar Bagh, New Delhi</option>
                                    <option data-mhosp_id="3792" value="apollo-hospital-bangalore">Apollo Hospital (Bannerghatta Road) Bangalore </option>
                                    <option data-mhosp_id="6007" value="fortis-hospital-bangalore">Fortis Hospital, Bangalore (Bannerghatta Road)</option>
                                    <option data-mhosp_id="6388" value="apollo-hospitals-hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</option>
                                    <option data-mhosp_id="7367" value="nanavati-super-specialty-hospital-mumbai">Nanavati Super Specialty Hospital, Mumbai</option>
                                    <option data-mhosp_id="10341" value="aster-mims-calicut">Aster MIMS, Calicut</option>
                                    <option data-mhosp_id="11024" value="miot-international-chennai">MIOT International, Chennai</option>
                                </select>
                                <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="9" style="width: 244.225px;">
                                    <span class="selection">
                                        <span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-hospital_filter-container">
                                            <span class="select2-selection__rendered" id="select2-hospital_filter-container" role="textbox" aria-readonly="true" title="All Hospital">All Hospital</span>
                                            <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                    </span>
                                    <span class="dropdown-wrapper" aria-hidden="true"></span>
                                </span>
                            </div>
                            <div class="col-lg-1 col-md-1 mt-3 mt-md-0 ps-md-0">
                                <div class="d-grid">
                                    <button type="button" class="btn btn-primary search-btn btn-danger border-0" onclick="if (!window.__cfRLUnblockHandlers) return false; applyFilterOnDrList();">
                                        <span class="dr_list_search"></span> Search
                                    </button>
                                </div>
                            </div>
                            <span class="col-12 close-mob-filter close-mob-filter-text fw-bolder fs-5 text-danger justify-content-center">Close</span>
                        </form>
                        <!-- <p class="text-center mb-0">You can trust us to help you find the caring and competent medical care you need.</p> -->
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            // let dept_selected = $('#department_filter option:selected').val() || '';

            // let treatment_filter_element1 = document.querySelector("#treatment_filter.select2");
            // let treatment_filter_element2 = document.querySelector("#treatment_filter.select2 + .select2-container");
            // if (treatment_filter_element1) treatment_filter_element1.style.display = "none";
            // if (treatment_filter_element2) treatment_filter_element2.style.display = "none";

            $(document).ready(function () {
                //let country_filter = $('#country_filter option:selected').val();
                //$('#country_filter').val(country_filter).trigger('change');
                //console.log('country selected');
                // setTimeout(function(){
                //     $('#treatment_filter').next('span').hide();
                //     let dept_selected = $('#department_filter option:selected').val();
                //     if(!dept_selected){
                //         $('#treatment_filter').next('span').hide();
                //         $(".department_filter, .hospital_filter").select2({
                //             width: '30%'
                //         });
                //     }else{
                //         $('#treatment_filter').next('span').show();
                //         $(".department_filter, .treatment_filter, .hospital_filter").select2({
                //             width: '20%'
                //         });
                //     }
                // }, 1000);
            });
            // function resetCityFilter(){
            //     $('#city_filter').empty();
            //     getCitiesByCountry();
            // }
            function refreshFilterDropdown_old(types) {
                let country = $("#country_filter option:selected").val() || "";
                if (types == "country") {
                    $("#department_filter").empty();
                    $("#city_filter").empty();
                    $("#hospital_filter").empty();
                }
                if (types == "city") {
                    $("#treatment_filter").empty();
                    $("#hospital_filter").empty();
                }
                if (types == "department") {
                    $("#treatment_filter").empty();
                }
                if (types == "treatment") {
                    $("#hospital_filter").empty();
                }
                let department = $("#department_filter option:selected").data("dept_id") || "";
                let city = $("#city_filter option:selected").val() || "";
                let treatment = $("#treatment_filter option:selected").data("treatment_id") || "";
                let hospitals = $("#hospital_filter option:selected").data("mhosp_id") || "";
                const form_data = { department: department, country: country, city: city, treatment: treatment, hospitals: hospitals, types: types };
                // console.log('form_data: ', form_data);
                $.ajax({
                    url: "https://www.vaidam.com/doctors/refreshDoctorListFilter",
                    type: "POST",
                    data: form_data,
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    success: function (response) {
                        let result = response.data;
                        if (types == "country") {
                            resetDepartment(result);
                            resetCity(result);
                            resetTreatment(result);
                            resetHospital(result);
                        }
                        if (types == "city") {
                            resetTreatment(result);
                            resetHospital(result);
                        }
                        if (types == "department") {
                            resetTreatment(result);
                        }
                        if (types == "treatment") {
                            resetHospital(result);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log("Error: ", error);
                    },
                });
            }

            function refreshFilterDropdown(types) {
                let selectedValues = {
                    country: $("#country_filter option:selected").val() || "",
                    department: $("#department_filter option:selected").data("dept_id") || "",
                    city: $("#city_filter option:selected").val() || "",
                    treatment: $("#treatment_filter option:selected").data("treatment_id") || "",
                    hospitals: $("#hospital_filter option:selected").data("mhosp_id") || "",
                };

                const select2Widths = {
                    default: "30%",
                    departmentSelected: "20%",
                };

                const filterDependencies = {
                    country: ["department_filter", "city_filter", "hospital_filter"],
                    city: ["department_filter", "treatment_filter", "hospital_filter"],
                    department: ["treatment_filter", "hospital_filter"],
                    treatment: ["hospital_filter"],
                };

                const resetFunctions = {
                    country: [resetDepartment, resetCity, resetHospital],
                    city: [resetDepartment, resetTreatment, resetHospital],
                    department: [resetTreatment, resetHospital],
                    treatment: [resetHospital],
                };

                // Dynamic Select2 width handling
                let departmentSelected = !!selectedValues.department;
                $(".department_filter, .treatment_filter, .hospital_filter").select2({
                    width: departmentSelected && types != "country" ? select2Widths.departmentSelected : select2Widths.default,
                });

                if (types === "country") {
                    $("#treatment_filter").next("span").hide();
                }

                // Clear dependent filters dynamically
                // (filterDependencies[types] || []).forEach(id => $('#' + id).empty());
                (filterDependencies[types] || []).forEach((id) => {
                    let key_name = id.split("_");
                    $("#" + id).empty();
                    $("#" + key_name[0]).empty();
                    // $('.'+key_name[0]+'_filter+.select2-container--default .select2-selection--single .select2-selection__rendered').after('<span class="'+key_name[0]+'filterloader" style="display:none;"></span>');

                    let spanClass = key_name[0] + "filterloader";
                    let $existingSpan = $("." + key_name[0] + "_filter+.select2-container--default .select2-selection--single .select2-selection__rendered").siblings("." + spanClass);

                    if ($existingSpan.length) {
                        $existingSpan.remove(); // Remove if already exists
                        $("." + key_name[0] + "_filter+.select2-container--default .select2-selection--single .select2-selection__rendered").after('<span class="' + spanClass + '"></span>');
                    } else {
                        $("." + key_name[0] + "_filter+.select2-container--default .select2-selection--single .select2-selection__rendered").after('<span class="' + spanClass + '"></span>'); // Add if not exists
                    }
                });

                toggleLoadingIndicators(true);

                $.ajax({
                    url: "https://www.vaidam.com/doctors/refreshDoctorListFilter",
                    type: "POST",
                    data: { ...selectedValues, types },
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    success: function (response) {
                        let result = response.data;
                        toggleLoadingIndicators(false);
                        (resetFunctions[types] || []).forEach((fn) => fn(result, types));
                    },
                    error: function (xhr, status, error) {
                        console.error("Error: ", error);
                    },
                });
            }

            function toggleLoadingIndicators(show) {
                const action = show ? "show" : "hide";
                ["city", "department", "treatment", "hospital"].forEach((type) => {
                    $(`.${type}_filter+.select2-container--default .select2-selection--single .select2-selection__rendered`).next(`.${type}filterloader`)[action]();
                });
            }

            function resetDepartment(result, types) {
                const department_list = result.departmentFilter.departmentFilter;
                $("#department_filter").empty();
                let department_option = '<option value="">All Department</option>';
                if (department_list.length > 0) {
                    department_list.forEach((item) => {
                        let dept_value = item.alias.replace("department/", "");
                        department_option += '<option data-dept_id="' + item.id + '" value="' + dept_value + '" ' + (department_list.length == 1 ? "selected" : "") + ">" + item.label + "</option>";
                    });
                }
                $("#department_filter").append(department_option);
                // $('#department_filter').val(selected_dept).trigger('change');
            }
            function resetCity(result, types) {
                const city_list = result.cityFilter.cityFilter;
                // Separate the cities based on their priority
                const topCities = city_list.filter((item) => item.priority === "High");
                const otherCities = city_list.filter((item) => item.priority !== "High");
                $("#city_filter").empty();
                let city_option = '<option value="">All Cities</option>';

                if (topCities.length > 0) {
                    city_option += '<optgroup label="Top Cities">'; // Start Top Cities group
                    topCities.forEach((item) => {
                        city_option += '<option value="' + item.label + '">' + item.label + "</option>";
                    });
                    city_option += "</optgroup>"; // End Top Cities group
                }

                // Create the second part of the options for 'Other Cities'
                if (otherCities.length > 0) {
                    city_option += '<optgroup label="Other Cities">'; // Start Other Cities group
                    otherCities.forEach((item) => {
                        city_option += '<option value="' + item.label + '">' + item.label + "</option>";
                    });
                    city_option += "</optgroup>"; // End Other Cities group
                }
                $("#city_filter").append(city_option);

                // if(city_list.length > 0){
                //     city_list.forEach(item => {
                //         city_option += '<option value="' + item.label + '" '+(city_list.length==1?'selected':'')+'>' + item.label + '</option>';
                //     });
                // }
                // $('#city_filter').append(city_option);
                // $('#city_filter').val(city).trigger('change');
            }
            function resetTreatment(result, types) {
                $("#treatment_filter").next("span").hide();
                $("#treatment_filter").empty();
                if (result.hasOwnProperty("treatmentFilter")) {
                    const treatment_list = result.treatmentFilter.treatmentFilter;
                    let treatment_option = '<option value="">All Treatments</option>';
                    if (treatment_list.length > 0) {
                        treatment_list.forEach((item) => {
                            let treatment_value = item.alias.replace("content/", "");
                            treatment_option += '<option data-treatment_id="' + item.id + '" value="' + treatment_value + '" ' + (treatment_list.length == 1 ? "selected" : "") + ">" + item.label + "</option>";
                        });
                    }
                    $("#treatment_filter").append(treatment_option);
                    $("#treatment_filter").next("span").show();
                }
            }
            function resetHospital(result, types) {
                const hospital_list = result.hospitalFilter.hospitalFilter;
                $("#hospital_filter").empty();
                let hospital_option = '<option value="">All Hospital</option>';
                if (hospital_list.length > 0) {
                    hospital_list.forEach((item) => {
                        let hospital_value = item.alias.replace("hospitals/", "");
                        hospital_option += '<option data-mhosp_id="' + item.id + '" value="' + hospital_value + '">' + item.label + "</option>";
                    });
                }
                $("#hospital_filter").append(hospital_option);
                let treatment_value = $("#treatment_filter option:selected").val() || "";
                if (treatment_value != "" || types == "treatment") {
                    console.log("treatment_value: ", treatment_value);

                    $("#treatment_filter").show(); // Shows the element
                    $("#treatment_filter.select2 + .select2-container").show();
                }
                // $('#hospital_filter').val(selected_hospital).trigger('change');
            }

            // function getCitiesByCountry(){
            //     let department = $('#department_filter option:selected').data('dept_id') || '';
            //     let country = $('#country_filter option:selected').val() || '';
            //     let hospital = $('#hospital_filter option:selected').val() || '';
            //     $.ajax({
            //         url: 'http://localhost/vaidamfe_old/index.php/doctors/getFilteredCity',
            //         type: 'POST',
            //         data: {department: department, country: country},
            //         headers: {
            //             'X-CSRF-TOKEN': '0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr'
            //         },
            //         success: function(response) {
            //             const result = response.data;
            //             const cities = result.cityFilter.cityFilter;
            //             let city_option = '<option value="">Select All City</option>';
            //             if(cities.length > 0){
            //                 cities.forEach(item => {
            //                     city_option += '<option value="' + item.label + '">' + item.label + '</option>';
            //                 });
            //             }
            //             $('#city_filter').html(city_option);
            //             filterHospitalList();
            //         },
            //         error: function(xhr, status, error) {
            //             console.log('Error: ', error);
            //         }
            //     });
            // }
            // function filterHospitalList(){
            //     let department = $('#department_filter option:selected').data('dept_id') || '';
            //     let country = $('#country_filter option:selected').val() || '';
            //     let city = $('#city_filter option:selected').val() || '';
            //     $.ajax({
            //         url: 'http://localhost/vaidamfe_old/index.php/doctors/getFilteredHospital',
            //         type: 'POST',
            //         data: {department: department, country: country, city: city},
            //         headers: {
            //             'X-CSRF-TOKEN': '0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr'
            //         },
            //         success: function(response) {
            //             const result = response.data;
            //             const hospitals = result.hospitalFilter.hospitalFilter;
            //             let hospital_option = '<option value="">Select All Hospital</option>';
            //             if(hospitals.length>0){
            //                 hospitals.forEach(item => {
            //                     let hospital_value = (item.alias).replace('hospitals/','');
            //                     hospital_option += '<option value="'+hospital_value+'">'+item.label+'</option>';
            //                 });
            //             }
            //             $('#hospital_filter').html(hospital_option);
            //         },
            //         error: function(xhr, status, error) {
            //             console.log('Error: ', error);
            //         }
            //     });
            // }
            function applyFilterOnDrList() {
                const end_point = "https://www.vaidam.com";
                let department = $("#department_filter option:selected").val() || "";
                let country = $("#country_filter option:selected").val() || "";
                let city = $("#city_filter option:selected").val() || "";
                let treatment = $("#treatment_filter option:selected").val() || "";
                let hospital = $("#hospital_filter option:selected").val() || "";
                let drListSearchFilter = {
                    department: department,
                    country: country,
                    city: city,
                    treatment: treatment,
                    hospital: hospital,
                    url: end_point + "/doctors",
                };
                $(".dr_list_search").show();
                $.ajax({
                    url: end_point + "/doctors/getAppliedFilterUrl",
                    type: "POST",
                    data: drListSearchFilter,
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    success: function (response) {
                        const mappingPageUrl = response.formatted_url || "";
                        console.log("mappingPageUrl: ", mappingPageUrl);
                        if (mappingPageUrl != "") {
                            $(".dr_list_search").hide();
                            location.replace(mappingPageUrl);
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log("Error: ", error);
                    },
                });
            }

            $(".fillter-on-mobile").click(function () {
                $(".filter-section").addClass("call-fillter-on-mob");
            });
            $(".close-mob-filter").click(function () {
                $(".filter-section").removeClass("call-fillter-on-mob");
            });
        </script>
        <!-- Filter Options Ends-->
        <section class="main py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-8">
                        <div class="row short-filt d-flex flex-md-row-reverse mb-4">
                            <div class="col-12 mb-0">
                                <p>
                                    Know about the best cardiac surgeons in India with over decades of experience. Our 1204+ cardiac experts ensure comprehensive care with minimally invasive cardiac surgery, robotic surgery along with
                                    treating other cardiac conditions.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-4 d-md-none">
                        <button class="bg-theam border-0 fillter-on-mobile p-2 text-white w-100 rounded-3 d-flex align-items-center justify-content-evenly">
                            <img src="https://www.vaidam.com/assets/dr_list_v1/images/filter-icon.webp" alt="Filter" width="26" height="26" title="Filter" /><span>Filter</span>
                        </button>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-lg-8 mb-0">
                        <div class="row short-filt d-flex flex-md-row-reverse">
                            <div class="col-md-7 text-md-end mb-sm-3 mb-md-0">
                                <!-- <span class="fw-semibold theam-color text-decoration-underline" role="button" tabindex="0" onclick="applyExperienceFilterOnDoctorList(this);" data-value="">Show over 15 years of experience</span> -->
                            </div>
                        </div>
                        <!-- Quick filter Start -->
                        <div class="short-filt d-flex flex-wrap gap-2 mb-2">
                            <p class="mb-0 fs-5 fw-bolder">Quick Filters</p>
                            <div class="box d-flex flex-wrap gap-2">
                                <!-- <p class="list-filter d-flex px-2 border border-secondary-subtle rounded-2 gap-2 align-items-center lh-lg" onclick="applyQuickFilter(this);" id="qf_gender_male" data-value=""> <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/noun-male.png" width="20" height="16" alt="Male Filter" title="Male Filter"> <span>Male</span> <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/spinner.gif" alt="Show Male Doctors" style="display:none;width:20px;height:20px;" id="qf_gender_male_loader" title="Show Male Doctors"> <span class="dselect-filter">X</span> </p> <p class="list-filter d-flex px-2 border border-secondary-subtle rounded-2 gap-2 align-items-center lh-lg" onclick="applyQuickFilter(this);" id="qf_gender_female" data-value=""> <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/noun-female.png" width="16" height="16" alt="Female Filter" title="Female Filter"> <span>Female</span> <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/spinner.gif" alt="Show Female Doctors" style="display:none;width:20px;height:20px;" id="qf_gender_female_loader" title="Show Female Doctors"> <span class="dselect-filter">X</span> </p> -->
                                <p
                                    class="list-filter d-flex px-2 border border-secondary-subtle rounded-2 gap-2 align-items-center lh-lg"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; applyQuickFilter(this);"
                                    id="qf_experience"
                                    data-value=""
                                >
                                    <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/noun-experience.png" width="21" height="16" alt="Experience Filter" title="Experience Filter" /> <span>Experience &gt; 20</span>
                                    <img
                                        src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/spinner.gif"
                                        alt="Show Experience > 20 Doctors"
                                        style="display: none; width: 20px; height: 20px;"
                                        id="qf_experience_loader"
                                        title="Show Experience > 20 Doctors"
                                    />
                                    <span class="dselect-filter">X</span>
                                </p>
                                <!-- appt available -->
                                <p
                                    class="list-filter d-flex px-2 border border-secondary-subtle rounded-2 gap-2 align-items-center lh-lg qf_appt_available_show"
                                    onclick="if (!window.__cfRLUnblockHandlers) return false; applyQuickFilter(this);"
                                    id="qf_appt_available"
                                    data-value=""
                                >
                                    <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/appointment-icon.webp" width="16" height="16" alt="Appointment Filter" title="Appointment Filter" /> <span>Appointment Available</span>
                                    <img
                                        src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/spinner.gif"
                                        alt="Appointment Available"
                                        style="display: none; width: 20px; height: 20px;"
                                        id="qf_appt_available_loader"
                                        title="Appointment Available"
                                    />
                                    <span class="dselect-filter">X</span>
                                </p>
                                <!-- appt available end -->
                            </div>
                        </div>
                        <!-- Quick filter End -->
                        <div class="drlist-row" id="main-doctor-div">
                            <div class="col-12">
                                <!-- Doctor Card -->
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Y K Mishra "
                                                        title="Dr. Y K Mishra "
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._y_k_mishra_1.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-y-k-mishra-cardiac-surgeon" title="Dr. Y K Mishra ">Dr. Y K Mishra </a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.9 (271 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>44+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong> <a href="https://www.vaidam.com/hospitals/manipal-hospitals-dwarka-delhi" title="Manipal Hospitals Dwarka, Delhi">Manipal Hospitals Dwarka, Delhi</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Y K Mishra "
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=3536"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Manipal Hospitals Dwarka  Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=3536"
                                                title="Book Appointment with Dr. Y K Mishra "
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Y K Mishra "
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=3536"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Manipal Hospitals Dwarka  Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=3536"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=3536"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-y-k-mishra-cardiac-surgeon?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Y K Mishra "
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_3536">
                                        <div class="mt-3 readmorebox" id="summary_content_3536">
                                            <p class="rtejustify">
                                                Dr. Y.K. Mishra is a distinguished Cardiac Surgeon, recognised as a pioneer in minimally invasive cardiac surgery in India, with over four decades of experience improving heart health. He has
                                                successfully performed over 19,000 open-heart and robotic surgeries and is a leading expert in minimally invasive techniques, complex cardiac repairs, and valve replacements.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Y.K. Mishra?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Expert in Minimally Invasive Cardiac Surgery:</strong>&nbsp;With over 44 years of experience, Dr. Y.K. Mishra is a pioneer in minimally invasive cardiac surgery in India. He
                                                    founded the Robotic Cardiac Surgery Program at Manipal Hospitals, helping patients recover faster with less pain.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Highly Skilled in Complex Heart Surgeries</strong>:&nbsp;Dr. Mishra is proficient in a wide range of cardiac procedures, including bypass surgery, valve replacements, aortic
                                                    surgery, and heart transplants. He also specialises in treating complex congenital heart defects like Tetralogy of Fallot (TOF), Transposition of the Great Arteries (TGA), and Tricuspid
                                                    Atresia.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Specialist in Aortic Conditions</strong>: He has extensive experience in performing surgeries for ascending aortic aneurysms and aortic dissections. Additionally, he is skilled in
                                                    ventricular assist device implantation, which helps support heart function in patients with severe heart failure.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Nationally Recognised &amp; Awarded</strong>: Dr. Mishra has received several prestigious honours, including the Lifetime Achievement Award from Dr. A.P.J. Abdul Kalam and an
                                                    honorary doctorate for his contributions to cardiac surgery.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Founder of the Payasuni Heart Valve Foundation</strong>: He established the Payasuni Heart Valve Foundation to promote awareness, research, and better access to treatment for
                                                    rheumatic heart diseases, improving care for patients across the country.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-y-k-mishra-cardiac-surgeon"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Y K Mishra "
                                                    id="knowMore_3536"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Y K Mishra "
                                                    id="toggleButton_3536"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(3536);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_3536', `<p class=\"rtejustify\">Dr. Y.K. Mishra is a distinguished Cardiac Surgeon, recognised as a pioneer in minimally invasive cardiac surgery in India, with over four decades of experience improving heart health. He has successfully performed over 19,000 open-heart and robotic surgeries and is a leading expert in minimally invasive techniques, complex cardiac repairs, and valve replacements.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Y.K. Mishra?</strong></p> <ul> <li class=\"rtejustify\"><strong>Expert in Minimally Invasive Cardiac Surgery:</strong>&nbsp;With over 44 years of experience, Dr. Y.K. Mishra is a pioneer in minimally invasive cardiac surgery in India. He founded the Robotic Cardiac Surgery Program at Manipal Hospitals, helping patients recover faster with less pain.</li> <li class=\"rtejustify\"><strong>Highly Skilled in Complex Heart Surgeries</strong>:&nbsp;Dr. Mishra is proficient in a wide range of cardiac procedures, including bypass surgery, valve replacements, aortic surgery, and heart transplants. He also specialises in treating complex congenital heart defects like Tetralogy of Fallot (TOF), Transposition of the Great Arteries (TGA), and Tricuspid Atresia.</li> <li class=\"rtejustify\"><strong>Specialist in Aortic Conditions</strong>: He has extensive experience in performing surgeries for ascending aortic aneurysms and aortic dissections. Additionally, he is skilled in ventricular assist device implantation, which helps support heart function in patients with severe heart failure.</li> <li class=\"rtejustify\"><strong>Nationally Recognised &amp; Awarded</strong>: Dr. Mishra has received several prestigious honours, including the Lifetime Achievement Award from Dr. A.P.J. Abdul Kalam and an honorary doctorate for his contributions to cardiac surgery.</li> <li class=\"rtejustify\"><strong>Founder of the Payasuni Heart Valve Foundation</strong>: He established the Payasuni Heart Valve Foundation to promote awareness, research, and better access to treatment for rheumatic heart diseases, improving care for patients across the country.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. T. S. Kler"
                                                        title="Dr. T. S. Kler"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._t._s._kler-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-t-s-kler" title="Dr. T. S. Kler">Dr. T. S. Kler</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Interventional Cardiologist</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/half-golden-star.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.7 (201 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>48+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/blk-hospital-new-delhi" title="BLK-Max Super Speciality Hospital Delhi">BLK-Max Super Speciality Hospital Delhi</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. T. S. Kler"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2760"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Electrophysiologist"
                                                doc-hosp="BLK-Max Super Speciality Hospital Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2760"
                                                title="Book Appointment with Dr. T. S. Kler"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. T. S. Kler"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2760"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Electrophysiologist"
                                                hospitalname="BLK-Max Super Speciality Hospital Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2760"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2760"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-t-s-kler?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. T. S. Kler"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2760">
                                        <div class="mt-3 readmorebox" id="summary_content_2760">
                                            <p class="rtejustify">
                                                Dr. T.S. Kler is a renowned cardiologist and a pioneer in electrophysiology, revolutionising cardiac rhythm management in India. With over 48 years of experience, he has performed more than
                                                35,000 coronary, renal, carotid, and peripheral angioplasties, offering cutting-edge treatment options to patients.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. T.S. Kler?</strong></p>
                                            <ul>
                                                <li class="rtejustify"><strong>Unmatched Experience</strong>: With 48+ years in cardiology, Dr. Kler is an expert in diagnosing and treating heart rhythm disorders.</li>
                                                <li class="rtejustify">
                                                    <strong>Pioneer in Electrophysiology</strong>: He established India's first electrophysiology department at a leading Delhi hospital and continues to drive advancements in this field.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>First in India</strong>: Dr. Kler was also the first in India to implant ICDs, CRT-Ps, and CRT-Ds and performed HIS Bundle Pacing in 2015, leading the way in innovative cardiac
                                                    treatments.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Global Impact</strong>: He has been instrumental in setting up RF Ablation and cardiac Device Implantation Programs in India, Bangladesh, Nepal, Sri Lanka, and Pakistan, enhancing
                                                    cardiac care in the region.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Nationally Recognised &amp; Awarded:</strong>&nbsp;A recipient of the Padma Bhushan, Dr. Kler's dedication to cardiology has earned him widespread recognition and numerous
                                                    prestigious awards, solidifying his position as a top heart specialist in India.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-t-s-kler" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. T. S. Kler" id="knowMore_2760" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. T. S. Kler"
                                                    id="toggleButton_2760"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2760);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2760', `<p class=\"rtejustify\">Dr. T.S. Kler is a renowned cardiologist and a pioneer in electrophysiology, revolutionising cardiac rhythm management in India. With over 48 years of experience, he has performed more than 35,000 coronary, renal, carotid, and peripheral angioplasties, offering cutting-edge treatment options to patients.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. T.S. Kler?</strong></p> <ul> <li class=\"rtejustify\"><strong>Unmatched Experience</strong>: With 48+ years in cardiology, Dr. Kler is an expert in diagnosing and treating heart rhythm disorders.</li> <li class=\"rtejustify\"><strong>Pioneer in Electrophysiology</strong>: He established India\'s first electrophysiology department at a leading Delhi hospital and continues to drive advancements in this field.</li> <li class=\"rtejustify\"><strong>First in India</strong>: Dr. Kler was also the first in India to implant ICDs, CRT-Ps, and CRT-Ds and performed HIS Bundle Pacing in 2015, leading the way in innovative cardiac treatments.</li> <li class=\"rtejustify\"><strong>Global Impact</strong>: He has been instrumental in setting up RF Ablation and cardiac Device Implantation Programs in India, Bangladesh, Nepal, Sri Lanka, and Pakistan, enhancing cardiac care in the region.</li> <li class=\"rtejustify\"><strong>Nationally Recognised &amp; Awarded:</strong>&nbsp;A recipient of the Padma Bhushan, Dr. Kler\'s dedication to cardiology has earned him widespread recognition and numerous prestigious awards, solidifying his position as a top heart specialist in India.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Ajay Kaul"
                                                        title="Dr. Ajay Kaul"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._ajay-min_2.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-ajay-kaul-cardiac-surgeon" title="Dr. Ajay Kaul">Dr. Ajay Kaul</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Noida, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.9 (647 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>38+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small> <strong>Works At:</strong> <a href="https://www.vaidam.com/hospitals/fortis-hospital-noida" title="Fortis Hospital, Noida">Fortis Hospital, Noida</a> </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Ajay Kaul"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2638"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Fortis Hospital  Noida"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2638"
                                                title="Book Appointment with Dr. Ajay Kaul"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Ajay Kaul"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2638"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Fortis Hospital  Noida"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2638"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2638"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-ajay-kaul-cardiac-surgeon?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Ajay Kaul"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2638">
                                        <div class="mt-3 readmorebox" id="summary_content_2638">
                                            <p class="rtejustify">
                                                Dr. Ajay Kaul is recognised among the top cardiac surgeons in India, renowned for his extensive surgical expertise and patient-centric approach. With over 38 years of experience and more than
                                                20,000 cardiac surgeries performed, he offers advanced surgical solutions for a wide range of heart conditions.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Ajay Kaul?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Vast Surgical Experience</strong>: Dr. Kaul has performed over 20,000 cardiac surgeries, including 15,000+ minimally invasive procedures, interventions for structural heart
                                                    disease, peripheral vascular &amp; endovascular stent placements, transcatheter aortic &amp; mitral valve replacements, transplants, and LVAD implantations.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Comprehensive Expertise</strong>: He specialises in Total Arterial Coronary Bypass Surgery, Paediatric Cardiac Surgery, Valve Repairs, Surgery for Aneurysm, Structural Heart
                                                    Disease, and Surgery for Cardiac Failure, ensuring a full spectrum of surgical care.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Coronary Bypass Pioneer</strong>: He is one of India's finest surgeons for Total Arterial Coronary Bypass Surgery, having performed 4,000+ procedures using two internal mammary
                                                    arteries, eliminating the need for leg or arm incisions.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Minimally Invasive Leader</strong>: Dr. Kaul performs mitral valve surgeries, aortic valve replacements, ASD repairs, and select VSD repairs through 1-2 inch chest incisions,
                                                    ensuring faster recovery and reduced surgical trauma.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-ajay-kaul-cardiac-surgeon"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Ajay Kaul"
                                                    id="knowMore_2638"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Ajay Kaul"
                                                    id="toggleButton_2638"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2638);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2638', `<p class=\"rtejustify\">Dr. Ajay Kaul is recognised among the top cardiac surgeons in India, renowned for his extensive surgical expertise and patient-centric approach. With over 38 years of experience and more than 20,000 cardiac surgeries performed, he offers advanced surgical solutions for a wide range of heart conditions.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Ajay Kaul?</strong></p> <ul> <li class=\"rtejustify\"><strong>Vast Surgical Experience</strong>: Dr. Kaul has performed over 20,000 cardiac surgeries, including 15,000+ minimally invasive procedures, interventions for structural heart disease, peripheral vascular &amp; endovascular stent placements, transcatheter aortic &amp; mitral valve replacements, transplants, and LVAD implantations.</li> <li class=\"rtejustify\"><strong>Comprehensive Expertise</strong>: He specialises in Total Arterial Coronary Bypass Surgery, Paediatric Cardiac Surgery, Valve Repairs, Surgery for Aneurysm, Structural Heart Disease, and Surgery for Cardiac Failure, ensuring a full spectrum of surgical care.</li> <li class=\"rtejustify\"><strong>Coronary Bypass Pioneer</strong>: He is one of India\'s finest surgeons for Total Arterial Coronary Bypass Surgery, having performed 4,000+ procedures using two internal mammary arteries, eliminating the need for leg or arm incisions.</li> <li class=\"rtejustify\"><strong>Minimally Invasive Leader</strong>: Dr. Kaul performs mitral valve surgeries, aortic valve replacements, ASD repairs, and select VSD repairs through 1-2 inch chest incisions, ensuring faster recovery and reduced surgical trauma.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="row body-form-row mb-5">
                                    <div class="col-12">
                                        <div class="form-col-box py-4 px-4 bg-vh-secondary rounded-3 sticy-form">
                                            <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                                <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more" />
                                                <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4">Get FREE Evaluation</strong> <small>Treatment plan and quote within 2 days</small> </span>
                                            </div>
                                            <div id="custom-form col-12">
                                                <form class="row" id="genericForm" autocomplete="off">
                                                    <input type="hidden" name="_token" id="_token" value="0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr" /> <input type="hidden" name="pagetype" value="" />
                                                    <input type="hidden" name="page_source" id="page_source" value="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india" />
                                                    <input type="hidden" name="lang1" id="lang1" value="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india" /> <input type="hidden" name="second_form" value="yes" />
                                                    <input type="hidden" name="preferredLocation" id="preferredLocation" value="India" />
                                                    <!-- <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> -->
                                                    <input type="hidden" name="urlDepartment" id="urlDepartment" value="CARDIOLOGY AND CARDIAC SURGERY" /> <input type="hidden" name="urlSpeciality" id="urlSpeciality" value="Cardiology" />
                                                    <input type="hidden" name="Form_Location" id="Form_Location" value="Form in Between List Elements" /> <input type="hidden" name="Page_Type" id="Page_Type" value="Dr List Page" />
                                                    <input type="hidden" name="c_url" id="c_url" value="" />
                                                    <div class="col-12 mb-3">
                                                        <label for="inputName" class="form-label">Name</label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required="" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputEmail" class="form-label">Email</label>
                                                        <div class="input-group"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="" /></div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputState" class="form-label">Country</label>
                                                        <select class="form-select" id="country" placeholder="Select Country" name="country" required="true">
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
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3 autocomplete stategroup" style="display: block;">
                                                        <label for="inputCity" class="form-label">City</label> <input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City" />
                                                        <input type="hidden" id="state" name="state" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputPhone" class="form-label">Phone Number</label>
                                                        <div class="input-group">
                                                            <input class="input-group-text" id="country_phone_code" name="country_phone_code" placeholder="Code" style="width: 80px;" />
                                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no." />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3" id="ageblock" style="display: block;">
                                                        <label for="inputAddress2" class="form-label">Patient's Age or Date Of Birth</label>
                                                        <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="medicalIssue" class="form-label">Medical Issue</label>
                                                        <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                                    </div>
                                                    <div class="col-12 mb-3" id="emirates-id-block3" style="display: none;">
                                                        <label for="inputCity" class="form-label"> Emirates ID </label>
                                                        <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)" />
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="d-grid"><button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button in_page_form doctor_list_ef1">Contact Us Now</button></div>
                                                    </div>
                                                </form>
                                                <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">
                                                    By submitting the form I agree to the <a title="Terms of Use" href="/terms-of-use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">Terms of Use</a> and
                                                    <a title="Privacy Policy" href="/privacy-policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">Privacy Policy</a> of Vaidam Health.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Z S Meharwal"
                                                        title="Dr. Z S Meharwal"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr-z-s-meharwal_cardio-thorasic-vascular-surgery982956-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-z-s-meharwal-cardiac-surgeon" title="Dr. Z S Meharwal">Dr. Z S Meharwal</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/half-golden-star.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.4 (163 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>42+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/fortis-escorts-heart-institute-new-delhi" title="Fortis Escorts Heart Institute, New Delhi">
                                                                    Fortis Escorts Heart Institute, New Delhi
                                                                </a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Z S Meharwal"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=4616"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Fortis Escorts Heart Institute  New Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=4616"
                                                title="Book Appointment with Dr. Z S Meharwal"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Z S Meharwal"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=4616"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Fortis Escorts Heart Institute  New Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=4616"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=4616"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-z-s-meharwal-cardiac-surgeon?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Z S Meharwal"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_4616">
                                        <div class="mt-3 readmorebox" id="summary_content_4616">
                                            <p class="rtejustify">
                                                Dr. Z.S. Meharwal is a highly esteemed cardiac surgeon, boasting over 42 years of experience as a Cardiothoracic and Vascular Surgeon. He is regarded as one of the best coronary artery bypass
                                                surgeons in the region, having performed over 30,000 cardiac surgeries to date.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Z.S. Meharwal?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Vast Experience:</strong>&nbsp;With over four decades dedicated to cardiac care, Dr. Meharwal brings unparalleled knowledge and surgical skills to every procedure.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Master of Coronary Artery Bypass Grafting (CABG):</strong>&nbsp;He is renowned as one of the best CABG surgeons, offering a complete range of cardiac interventions, from valve
                                                    repair and replacement to pacemaker implantation and stent placement.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Leadership in Transplantation and VAD Therapy:</strong>&nbsp;As head of the Heart Transplantation and VAD program, Dr. Meharwal is a leader in these advanced therapies for
                                                    end-stage heart failure.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Nationally Recognised and Honored:</strong>&nbsp;Dr. Meharwal's contributions to cardiac surgery have been recognised with prestigious awards, including a Citation Award from the
                                                    President of India, solidifying his position as a leading heart surgeon.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-z-s-meharwal-cardiac-surgeon"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Z S Meharwal"
                                                    id="knowMore_4616"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Z S Meharwal"
                                                    id="toggleButton_4616"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(4616);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_4616', `<p class=\"rtejustify\">Dr. Z.S. Meharwal is a highly esteemed cardiac surgeon, boasting over 42 years of experience as a Cardiothoracic and Vascular Surgeon. He is regarded as one of the best coronary artery bypass surgeons in the region, having performed over 30,000 cardiac surgeries to date.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Z.S. Meharwal?</strong></p> <ul> <li class=\"rtejustify\"><strong>Vast Experience:</strong>&nbsp;With over four decades dedicated to cardiac care, Dr. Meharwal brings unparalleled knowledge and surgical skills to every procedure.</li> <li class=\"rtejustify\"><strong>Master of Coronary Artery Bypass Grafting (CABG):</strong>&nbsp;He is renowned as one of the best CABG surgeons, offering a complete range of cardiac interventions, from valve repair and replacement to pacemaker implantation and stent placement.</li> <li class=\"rtejustify\"><strong>Leadership in Transplantation and VAD Therapy:</strong>&nbsp;As head of the Heart Transplantation and VAD program, Dr. Meharwal is a leader in these advanced therapies for end-stage heart failure.</li> <li class=\"rtejustify\"><strong>Nationally Recognised and Honored:</strong>&nbsp;Dr. Meharwal\'s contributions to cardiac surgery have been recognised with prestigious awards, including a Citation Award from the President of India, solidifying his position as a leading heart surgeon.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Naresh Trehan"
                                                        title="Dr. Naresh Trehan"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._naresh_trehan-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-naresh-trehan-cardiology" title="Dr. Naresh Trehan">Dr. Naresh Trehan</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Gurgaon, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.9 (655 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>56+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong> <a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity, Gurgaon">Medanta - The Medicity, Gurgaon</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Naresh Trehan"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2571"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Medanta - The Medicity  Gurgaon"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2571"
                                                title="Book Appointment with Dr. Naresh Trehan"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Naresh Trehan"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2571"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Medanta - The Medicity  Gurgaon"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2571"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2571"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-naresh-trehan-cardiology?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Naresh Trehan"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2571">
                                        <div class="mt-3 readmorebox" id="summary_content_2571">
                                            <p class="rtejustify">
                                                Dr. Naresh Trehan is one of India's most distinguished Cardiovascular and Cardiothoracic Surgeons, with over 56 years of unparalleled experience. He has successfully performed over 48,000
                                                cardiac surgeries and is the visionary founder of Medanta - The Medicity, a leading medical tourism hospital in Gurgaon, India.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Trehan?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Unmatched Experience &amp; Legacy:</strong>&nbsp;With over half a century dedicated to cardiac surgery, Dr. Trehan brings unparalleled expertise and a deep commitment to patient
                                                    well-being.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Comprehensive Expertise:</strong>&nbsp;From cardiomyoplasty to robot-assisted cardiac surgery, Dr. Trehan offers a comprehensive range of advanced procedures for complex heart
                                                    conditions, including atrial septal defect (ASD), chest wall defects, heart attacks, heart failure, arrhythmias, and valve malformations.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Global Leader &amp; Innovator:</strong>&nbsp;As the founder of Medanta, Dr. Trehan has established a world-class medical institution, setting new standards for cardiac care in
                                                    India. His leadership in organisations like the International Society for Minimally Invasive Cardiac Surgery (USA) demonstrates his global influence.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Nationally Honored &amp; Respected:</strong>&nbsp;Dr. Trehan's outstanding contributions to the medical field have been recognised with the highest accolades, including the Padma
                                                    Shri, Padma Bhushan, and Lal Bahadur Shastri National Award, solidifying his position as a top heart surgeon in India.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-naresh-trehan-cardiology"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Naresh Trehan"
                                                    id="knowMore_2571"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Naresh Trehan"
                                                    id="toggleButton_2571"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2571);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2571', `<p class=\"rtejustify\">Dr. Naresh Trehan is one of India\'s most distinguished Cardiovascular and Cardiothoracic Surgeons, with over 56 years of unparalleled experience. He has successfully performed over 48,000 cardiac surgeries and is the visionary founder of Medanta - The Medicity, a leading medical tourism hospital in Gurgaon, India.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Trehan?</strong></p> <ul> <li class=\"rtejustify\"><strong>Unmatched Experience &amp; Legacy:</strong>&nbsp;With over half a century dedicated to cardiac surgery, Dr. Trehan brings unparalleled expertise and a deep commitment to patient well-being.</li> <li class=\"rtejustify\"><strong>Comprehensive Expertise:</strong>&nbsp;From cardiomyoplasty to robot-assisted cardiac surgery, Dr. Trehan offers a comprehensive range of advanced procedures for complex heart conditions, including atrial septal defect (ASD), chest wall defects, heart attacks, heart failure, arrhythmias, and valve malformations.</li> <li class=\"rtejustify\"><strong>Global Leader &amp; Innovator:</strong>&nbsp;As the founder of Medanta, Dr. Trehan has established a world-class medical institution, setting new standards for cardiac care in India. His leadership in organisations like the International Society for Minimally Invasive Cardiac Surgery (USA) demonstrates his global influence.</li> <li class=\"rtejustify\"><strong>Nationally Honored &amp; Respected:</strong>&nbsp;Dr. Trehan\'s outstanding contributions to the medical field have been recognised with the highest accolades, including the Padma Shri, Padma Bhushan, and Lal Bahadur Shastri National Award, solidifying his position as a top heart surgeon in India.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Ashok Seth"
                                                        title="Dr. Ashok Seth"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._ashok_seth.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-ashok-seth" title="Dr. Ashok Seth">Dr. Ashok Seth</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Interventional Cardiologist</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">5.0 (271 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>40+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/fortis-escorts-heart-institute-new-delhi" title="Fortis Escorts Heart Institute, New Delhi">
                                                                    Fortis Escorts Heart Institute, New Delhi
                                                                </a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Ashok Seth"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2742"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Interventional Cardiologist"
                                                doc-hosp="Fortis Escorts Heart Institute  New Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2742"
                                                title="Book Appointment with Dr. Ashok Seth"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Ashok Seth"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2742"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Interventional Cardiologist"
                                                hospitalname="Fortis Escorts Heart Institute  New Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2742"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2742"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-ashok-seth?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Ashok Seth"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2742">
                                        <div class="mt-3 readmorebox" id="summary_content_2742">
                                            <p class="rtejustify">
                                                Dr. Ashok Seth is a distinguished Interventional Cardiologist, celebrated for his transformative contributions to the field over 40 years. With a focus on advanced cardiac procedures, Dr. Seth
                                                brings hope and advanced treatment options to patients facing complex heart conditions.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Ashok Seth?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Expertise:</strong>&nbsp;With 40 years of experience, Dr. Seth possesses unparalleled skill in performing complex angioplasties, TAVR (Transcatheter Aortic Valve
                                                    Replacement), and MitraClip (TMVR) procedures.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Pioneer in Advanced Techniques:</strong>&nbsp;Dr. Seth is at the forefront of innovative technologies such as Laser Angioplasty, bio-absorbable stents, and Impella Pump-supported
                                                    angioplasty, providing patients with the most advanced treatment options.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Record-Breaking Experience:</strong>&nbsp;Dr. Seth has completed over 60,000 angiographies and over 25,000 angioplasties, demonstrating his unmatched experience in the field.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Awarded for Excellence:</strong>&nbsp;Dr. Seth's contributions have been recognised with numerous prestigious awards, including the Padma Shri, Padma Bhushan, and the B.C. Roy
                                                    National Award. He also holds the National Honour of the Republic of Spain Crus Officer with Insignia Order of Isabella, the Master Interventionalist (MSCAI) designation from the Society
                                                    for Cardiovascular Angiography &amp; Interventions (USA), and the Life Time Achievement in Interventional Cardiology Award from Chien Foundation (Singapore), along with 85 other national
                                                    and international awards. He has been further honoured with Doctorates from six national universities and Adjunct Professorships.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-ashok-seth" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Ashok Seth" id="knowMore_2742" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Ashok Seth"
                                                    id="toggleButton_2742"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2742);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2742', `<p class=\"rtejustify\">Dr. Ashok Seth is a distinguished Interventional Cardiologist, celebrated for his transformative contributions to the field over 40 years. With a focus on advanced cardiac procedures, Dr. Seth brings hope and advanced treatment options to patients facing complex heart conditions.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Ashok Seth?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Expertise:</strong>&nbsp;With 40 years of experience, Dr. Seth possesses unparalleled skill in performing complex angioplasties, TAVR (Transcatheter Aortic Valve Replacement), and MitraClip (TMVR) procedures.</li> <li class=\"rtejustify\"><strong>Pioneer in Advanced Techniques:</strong>&nbsp;Dr. Seth is at the forefront of innovative technologies such as Laser Angioplasty, bio-absorbable stents, and Impella Pump-supported angioplasty, providing patients with the most advanced treatment options.</li> <li class=\"rtejustify\"><strong>Record-Breaking Experience:</strong>&nbsp;Dr. Seth has completed over 60,000 angiographies and over 25,000 angioplasties, demonstrating his unmatched experience in the field.</li> <li class=\"rtejustify\"><strong>Awarded for Excellence:</strong>&nbsp;Dr. Seth\'s contributions have been recognised with numerous prestigious awards, including the Padma Shri, Padma Bhushan, and the B.C. Roy National Award. He also holds the National Honour of the Republic of Spain Crus Officer with Insignia Order of Isabella, the Master Interventionalist (MSCAI) designation from the Society for Cardiovascular Angiography &amp; Interventions (USA), and the Life Time Achievement in Interventional Cardiology Award from Chien Foundation (Singapore), along with 85 other national and international awards. He has been further honoured with Doctorates from six national universities and Adjunct Professorships.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Anil Bhan"
                                                        title="Dr. Anil Bhan"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_anil_bhan-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-anil-bhan" title="Dr. Anil Bhan">Dr. Anil Bhan</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Gurgaon, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/half-golden-star.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.7 (191 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>49+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chairman</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong> <a href="https://www.vaidam.com/hospitals/medanta-medicity-gurgaon" title="Medanta - The Medicity, Gurgaon">Medanta - The Medicity, Gurgaon</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Anil Bhan"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=5007"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Medanta - The Medicity  Gurgaon"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=5007"
                                                title="Book Appointment with Dr. Anil Bhan"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Anil Bhan"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=5007"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Medanta - The Medicity  Gurgaon"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=5007"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=5007"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-anil-bhan?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Anil Bhan"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_5007">
                                        <div class="mt-3 readmorebox" id="summary_content_5007">
                                            <p class="rtejustify">
                                                Dr. Anil Bhan is a distinguished Cardiothoracic and Vascular Surgeon known for his transformative contributions to the field over 43 years. Dr. Bhan is renowned for his surgical skills and his
                                                innovative approach to advancing cardiac care.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Anil Bhan?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Surgical Expertise:</strong>&nbsp;With over 43 years of experience, Dr. Bhan brings unparalleled expertise to every procedure, having successfully performed more than
                                                    15,000 cardiac and vascular procedures with outcomes matching the best in the world.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Pioneer of Surgical Innovation:</strong>&nbsp;Dr. Bhan has designed and developed more than 50 surgical instruments specifically for cardiac surgery, demonstrating his commitment
                                                    to advancing the field.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Leading Expert in Aortic Surgery:</strong>&nbsp;Dr. Bhan possesses the largest experience in Aortic surgery in India, making him a sought-after specialist for complex cases.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Pioneer in Cardiac Transplantation:</strong>&nbsp;Dr. Bhan was a key member of the team that performed the first successful Heart Transplantation in India (1994), marking an
                                                    important moment in Indian medical history.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Esteemed Educator and Leader:</strong>&nbsp;A gold medalist graduate of Medical College Srinagar, he continues to advance the field through his dedication to surgical excellence.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-anil-bhan" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Anil Bhan" id="knowMore_5007" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Anil Bhan"
                                                    id="toggleButton_5007"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(5007);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_5007', `<p class=\"rtejustify\">Dr. Anil Bhan is a distinguished Cardiothoracic and Vascular Surgeon known for his transformative contributions to the field over 43 years. Dr. Bhan is renowned for his surgical skills and his innovative approach to advancing cardiac care.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Anil Bhan?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Surgical Expertise:</strong>&nbsp;With over 43 years of experience, Dr. Bhan brings unparalleled expertise to every procedure, having successfully performed more than 15,000 cardiac and vascular procedures with outcomes matching the best in the world.</li> <li class=\"rtejustify\"><strong>Pioneer of Surgical Innovation:</strong>&nbsp;Dr. Bhan has designed and developed more than 50 surgical instruments specifically for cardiac surgery, demonstrating his commitment to advancing the field.</li> <li class=\"rtejustify\"><strong>Leading Expert in Aortic Surgery:</strong>&nbsp;Dr. Bhan possesses the largest experience in Aortic surgery in India, making him a sought-after specialist for complex cases.</li> <li class=\"rtejustify\"><strong>Pioneer in Cardiac Transplantation:</strong>&nbsp;Dr. Bhan was a key member of the team that performed the first successful Heart Transplantation in India (1994), marking an important moment in Indian medical history.</li> <li class=\"rtejustify\"><strong>Esteemed Educator and Leader:</strong>&nbsp;A gold medalist graduate of Medical College Srinagar, he continues to advance the field through his dedication to surgical excellence.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Robert Mao"
                                                        title="Dr. Robert Mao"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr-robert-mao-cardiologist.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-robert-mao" title="Dr. Robert Mao">Dr. Robert Mao</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Interventional Cardiologist</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Chennai, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">5.0 (332 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>53+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Consultant</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/apollo-hospitals-greams-road-chennai" title="Apollo Hospitals, Greams Road, Chennai">Apollo Hospitals, Greams Road, Chennai</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Robert Mao"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=5647"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Interventional Cardiologist"
                                                doc-hosp="Apollo Hospitals  Greams Road  Chennai"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=5647"
                                                title="Book Appointment with Dr. Robert Mao"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Robert Mao"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=5647"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Interventional Cardiologist"
                                                hospitalname="Apollo Hospitals  Greams Road  Chennai"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=5647"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=5647"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-robert-mao?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Robert Mao"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_5647">
                                        <div class="mt-3 readmorebox" id="summary_content_5647">
                                            <p class="rtejustify">Dr. Robert Mao is a highly respected Interventional Cardiologist with over 47 years of experience, known for his strong commitment to providing exceptional cardiac care.</p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Robert Mao?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Clinical Experience:</strong>&nbsp;Dr. Mao brings over 47 years of dedicated experience in cardiology, providing comprehensive and expert care to his patients.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Comprehensive Expertise:</strong>&nbsp;Dr. Mao's expertise encompasses a wide range of advanced cardiac procedures, including Open Heart Surgery, Aortic Aneurysm
                                                    Surgery/Endovascular Repair, PCI (Percutaneous Coronary Interventions), Vascular Surgery, and Mitral/Heart Valve Replacement.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Strong Academic Foundation:</strong>&nbsp;Dr. Mao's rigorous training includes an MBBS (1977), MD in General Medicine (1980), and DM in Cardiology (1982) from Karnataka Medical
                                                    University, ensuring a solid foundation of medical knowledge.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Commitment to Patient Well-being:</strong>&nbsp;Dr. Mao aims to provide the best possible medical treatment to every patient, reflecting his deep commitment to their health and
                                                    well-being.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-robert-mao" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Robert Mao" id="knowMore_5647" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Robert Mao"
                                                    id="toggleButton_5647"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(5647);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_5647', `<p class=\"rtejustify\">Dr. Robert Mao is a highly respected Interventional Cardiologist with over 47 years of experience, known for his strong commitment to providing exceptional cardiac care.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Robert Mao?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Clinical Experience:</strong>&nbsp;Dr. Mao brings over 47 years of dedicated experience in cardiology, providing comprehensive and expert care to his patients.</li> <li class=\"rtejustify\"><strong>Comprehensive Expertise:</strong>&nbsp;Dr. Mao\'s expertise encompasses a wide range of advanced cardiac procedures, including Open Heart Surgery, Aortic Aneurysm Surgery/Endovascular Repair, PCI (Percutaneous Coronary Interventions), Vascular Surgery, and Mitral/Heart Valve Replacement.</li> <li class=\"rtejustify\"><strong>Strong Academic Foundation:</strong>&nbsp;Dr. Mao\'s rigorous training includes an MBBS (1977), MD in General Medicine (1980), and DM in Cardiology (1982) from Karnataka Medical University, ensuring a solid foundation of medical knowledge.</li> <li class=\"rtejustify\"><strong>Commitment to Patient Well-being:</strong>&nbsp;Dr. Mao aims to provide the best possible medical treatment to every patient, reflecting his deep commitment to their health and well-being.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <!-- Form Between List -->
                                <div class="row body-form-row pt-0 pb-4">
                                    <div class="col-12">
                                        <div class="form-col-box bg-theam-2 p-4 rounded-3 sticy-form">
                                            <div class="ms_v_cta_heading d-flex align-items-center justify-content-center column-gap-2 mb-4">
                                                <img class="mr-2" loading="lazy" src="https://www.vaidam.com/assets/landingpage/v2/images/icons/int/6.svg" width="50" height="50" alt="Know more" title="Know more" />
                                                <span class="d-flex justify-content-center flex-column lh-base"> <strong class="fs-4"> Get FREE Evaluation </strong> <small> Treatment plan and quote within 2 days </small> </span>
                                            </div>
                                            <div id="custom-form-doctor-card col-12">
                                                <form class="row" id="secondFormInList" autocomplete="off">
                                                    <input type="hidden" name="_token" id="_token" value="0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr" /> <input type="hidden" name="pagetype" value="" />
                                                    <input type="hidden" name="page_source" id="page_source-sfil" value="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india" />
                                                    <input type="hidden" name="lang1" id="lang-sfil" value="https://www.vaidam.com/doctors" /> <input type="hidden" name="second_form" value="yes" />
                                                    <input type="hidden" name="preferredLocation" id="preferredLocation" value="India" />
                                                    <input type="hidden" name="Form_Location" id="Form_Location" value="Second Form In Between List Element" />
                                                    <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page" /> <input type="hidden" name="c_url" id="c_url" value="" />
                                                    <div class="col-12 mb-3">
                                                        <label for="inputName" class="form-label"> Name </label>
                                                        <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required="" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputEmail" class="form-label"> Email </label>
                                                        <div class="input-group"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="" /></div>
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputState" class="form-label"> Country </label>
                                                        <select class="form-select country" id="country-sfil" placeholder="Select Country" name="country" required="true">
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
                                                        </select>
                                                    </div>
                                                    <div class="col-12 mb-3 autocomplete stategroup-sfil" style="display: block;">
                                                        <label for="inputCity" class="form-label"> City </label> <input type="text" class="form-control" name="city" id="city-sfil" placeholder="Enter city" />
                                                        <input type="hidden" id="state-sfil" name="state" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="inputPhone" class="form-label"> Phone Number </label>
                                                        <div class="input-group">
                                                            <input class="input-group-text country_phone_code" id="country_phone_code-sfil" name="country_phone_code" placeholder="Code" style="width: 80px;" />
                                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no." />
                                                        </div>
                                                    </div>
                                                    <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;">
                                                        <label for="inputAddress2" class="form-label"> Patient's Age or Date Of Birth </label>
                                                        <input type="text" class="form-control new-form-control" id="age" placeholder="Example: 30 Yrs or 29-05-1985" name="age" />
                                                    </div>
                                                    <div class="col-12 mb-3">
                                                        <label for="medicalIssue" class="form-label"> Medical Issue </label>
                                                        <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                                    </div>
                                                    <div class="col-12 mb-3" id="emirates-id-block2" style="display: none;">
                                                        <label for="inputCity" class="form-label"> Emirates ID </label>
                                                        <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)" />
                                                    </div>
                                                    <div class="col-12 mt-2">
                                                        <div class="d-grid">
                                                            <button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form doctor_list_ef2">Contact Us Now</button>
                                                        </div>
                                                    </div>
                                                </form>
                                                <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">
                                                    By submitting the form I agree to the
                                                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Terms of Use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">
                                                        Terms of Use
                                                    </a>
                                                    and
                                                    <a
                                                        href="#"
                                                        onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();"
                                                        title="Privacy Policy"
                                                        class="terms_of_use"
                                                        data-bs-toggle="modal"
                                                        data-bs-target="#formPrivacyPolicy"
                                                    >
                                                        Privacy Policy
                                                    </a>
                                                    of Vaidam Health.
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Between form -->
                                <script type="text/javascript" src="https://www.vaidam.com/assets/js/searchpage.js"></script>
                                <script type="text/javascript">
                                    var formSubmitting = false;
                                    $("#secondFormInList").submit(function (e) {
                                        e.preventDefault();
                                        if (formSubmitting) {
                                            return false;
                                        }
                                        formSubmitting = true;
                                        $(".online-consult-button-sfil").attr("disabled", true);
                                        $(".online-consult-button-sfil").text("Submitting...");

                                        var path = window.location.href;
                                        var segment = path.split("/");
                                        var langCountry = ["en", "fr", "ar", "ru", "bn", "hi", "ro", "es", "pt"];

                                        var base_url_lp_new = window.location.protocol + "//www.vaidam.com/lp";
                                        if (jQuery.inArray(segment[3], langCountry) !== -1) {
                                            base_url_lp_new = window.location.protocol + "//www.vaidam.com/" + segment[3] + "/lp";
                                        }

                                        var city = $("#city-sfil").val();
                                        city = city
                                            .toLowerCase()
                                            .replace(/\b[a-z]/g, function (city) {
                                                return city.toUpperCase();
                                            })
                                            .trim();

                                        var page_source = $("#page_source-sfil").val();
                                        var citydata = cities.filter(function (citydata) {
                                            return citydata.city == city;
                                        });

                                        if (citydata[0] != undefined) {
                                            $("#state-sfil").val(citydata[0].state);
                                        } else {
                                            $("#state-sfil").val("");
                                        }

                                        $.post(base_url_lp_new + "/genericform", $("#secondFormInList").serialize(), function (data) {
                                            window.location.replace(base_url_lp_new + "/consult-online?form_step_1=done");
                                        }).fail(function () {
                                            $(".online-consult-button-sfil").attr("disabled", false);
                                            $(".online-consult-button-sfil").text("Submit");
                                            formSubmitting = false;
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
                                    var page_source = localStorage.getItem("current_lp_url");
                                    $("#page_source-sfil").val(page_source);
                                    $("#lang-sfil").val(page_source);
                                    $("#page_source-sfil").val(window.location.href);

                                    if (countryCode != undefined || countryCode == "") {
                                        $("#country-sfil").val(countryCode);
                                        $("#country_phone_code-sfil").val(country_phone_code[countryCode]);
                                    }

                                    autocomplete(document.getElementById("city-sfil"), cities);

                                    var urlCountry = getCookie("SetPageCountry");
                                    var preferredLocation = getCookie("preferredLocation").replace(/\+/g, " ");
                                    var countryCode = getCookie("countryCode");

                                    if (urlCountry == "AE" && preferredLocation == "United Arab Emirates" && countryCode == "AE") {
                                        $("#emirates-id-block2").show();
                                        $(".stategroup-sfil").show();
                                        $("#city-sfil").attr("placeholder", "Enter Emirates");
                                        $("#city-sfil").replaceWith(
                                            '<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                                        );
                                    } else if (urlCountry == "IN" && preferredLocation == "India" && countryCode == "IN") {
                                        $("#emirates-id-block2").hide();
                                        $(".stategroup-sfil").show();
                                        $("#city-sfil").attr("placeholder", "Enter city");
                                        $("#city-sfil").replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                                        autocomplete(document.getElementById("city-sfil"), cities);
                                    }

                                    $("#country-sfil").on("change", function () {
                                        var selectedCountry = $(this).val();

                                        if (selectedCountry == "AE") {
                                            $("#emirates-id-block2").show();
                                            $(".stategroup-sfil").show();
                                            $("#city-sfil").attr("placeholder", "Enter Emirates");
                                            $("#city-sfil").replaceWith(
                                                '<select id="city-sfil" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                                            );
                                        } else if (selectedCountry == "IN") {
                                            $("#emirates-id-block2").hide();
                                            $(".stategroup-sfil").show();
                                            $("#city-sfil").attr("placeholder", "Enter city");
                                            $("#city-sfil").replaceWith('<input id="city-sfil" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                                            autocomplete(document.getElementById("city-sfil"), cities);
                                        } else {
                                            $("#emirates-id-block2").hide();
                                            $(".stategroup-sfil").hide();
                                        }
                                    });
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Sandeep Attawar"
                                                        title="Dr. Sandeep Attawar"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_sandeep_attawar-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-sandeep-attawar" title="Dr. Sandeep Attawar">Dr. Sandeep Attawar</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Hyderabad, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/half-golden-star.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.7 (141 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>33+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Director</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/kims-hospital-kondapur-hyderabad" title="KIMS Hospital Kondapur, Hyderabad">KIMS Hospital Kondapur, Hyderabad</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Sandeep Attawar"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2531"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="KIMS Hospital Kondapur  Hyderabad"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2531"
                                                title="Book Appointment with Dr. Sandeep Attawar"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Sandeep Attawar"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2531"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="KIMS Hospital Kondapur  Hyderabad"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2531"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2531"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-sandeep-attawar?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Sandeep Attawar"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2531">
                                        <div class="mt-3 readmorebox" id="summary_content_2531">
                                            <p class="rtejustify">
                                                With over 33 years of experience, Dr. Sandeep Attawar is a leading cardiothoracic surgeon in India. Having performed over 450 thoracic organ transplants, Dr. Attawar is renowned for his
                                                expertise in complex heart and lung procedures, bringing hope to patients of all ages.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Sandeep Attawar?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Pioneer in Heart &amp; Lung Transplantation:&nbsp;</strong>With an experience of over 33 years, Dr. Sandeep Attawar has performed nearly 450 thoracic organ transplants, including
                                                    290 double lung transplants, 110 heart transplants, and 51 combined heart-lung transplants, along with 28 left ventricular assist device (LVAD) implants.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Expert in Cardiac Failure &amp; Mechanical Circulatory Support:&nbsp;</strong>He has a deep interest in treating cardiac failure and specialises in Total Artificial Heart (TAH) and
                                                    ventricular assist device implantation, offering advanced solutions for critically ill patients.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Leader in Establishing Centers of Excellence:</strong>&nbsp;Dr. Attawar has played a key role in developing three major heart centres in India and abroad, significantly shaping the
                                                    future of cardiac and transplant care.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Specialist in Complex Cardiac Cases:</strong>&nbsp;His expertise spans all age groups, from newborns to elderly patients, performing intricate heart surgeries with exceptional
                                                    precision.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Innovator in Mechanical Circulatory Support:</strong>&nbsp;As a scientific advisor for Reliant Heart and a proctor for JARVIK HEART and HeartMate III, he is driving advancements in
                                                    ventricular assist devices (LVADs) and mechanical circulatory support systems.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-sandeep-attawar" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Sandeep Attawar" id="knowMore_2531" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Sandeep Attawar"
                                                    id="toggleButton_2531"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2531);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2531', `<p class=\"rtejustify\">With over 33 years of experience, Dr. Sandeep Attawar is a leading cardiothoracic surgeon in India. Having performed over 450 thoracic organ transplants, Dr. Attawar is renowned for his expertise in complex heart and lung procedures, bringing hope to patients of all ages.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Sandeep Attawar?</strong></p> <ul> <li class=\"rtejustify\"><strong>Pioneer in Heart &amp; Lung Transplantation:&nbsp;</strong>With an experience of over 33 years, Dr. Sandeep Attawar has performed nearly 450 thoracic organ transplants, including 290 double lung transplants, 110 heart transplants, and 51 combined heart-lung transplants, along with 28 left ventricular assist device (LVAD) implants.</li> <li class=\"rtejustify\"><strong>Expert in Cardiac Failure &amp; Mechanical Circulatory Support:&nbsp;</strong>He has a deep interest in treating cardiac failure and specialises in Total Artificial Heart (TAH) and ventricular assist device implantation, offering advanced solutions for critically ill patients.</li> <li class=\"rtejustify\"><strong>Leader in Establishing Centers of Excellence:</strong>&nbsp;Dr. Attawar has played a key role in developing three major heart centres in India and abroad, significantly shaping the future of cardiac and transplant care.</li> <li class=\"rtejustify\"><strong>Specialist in Complex Cardiac Cases:</strong>&nbsp;His expertise spans all age groups, from newborns to elderly patients, performing intricate heart surgeries with exceptional precision.</li> <li class=\"rtejustify\"><strong>Innovator in Mechanical Circulatory Support:</strong>&nbsp;As a scientific advisor for Reliant Heart and a proctor for JARVIK HEART and HeartMate III, he is driving advancements in ventricular assist devices (LVADs) and mechanical circulatory support systems.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Devi Prasad Shetty "
                                                        title="Dr. Devi Prasad Shetty "
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._devi_prasad_shetty.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-devi-prasad-shetty-cardiothoracic-surgeon-pediatric-surgeon" title="Dr. Devi Prasad Shetty ">
                                                                    Dr. Devi Prasad Shetty
                                                                </a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Bangalore, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.2 (54 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>45+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Senior Consultant</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/narayana-institute-cardiac-sciences-bangalore" title="Narayana Institute of Cardiac Sciences, Bangalore">
                                                                    Narayana Institute of Cardiac Sciences, Bangalore
                                                                </a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Devi Prasad Shetty "
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=3988"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Narayana Institute of Cardiac Sciences  Bangalore"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=3988"
                                                title="Book Appointment with Dr. Devi Prasad Shetty "
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Devi Prasad Shetty "
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=3988"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Narayana Institute of Cardiac Sciences  Bangalore"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=3988"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=3988"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-devi-prasad-shetty-cardiothoracic-surgeon-pediatric-surgeon?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Devi Prasad Shetty "
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_3988">
                                        <div class="mt-3 readmorebox" id="summary_content_3988">
                                            <p class="rtejustify">
                                                Dr. Devi Prasad Shetty is one of the most renowned cardiothoracic surgeons in India and the visionary founder of Narayana Hrudayalaya. With over 45&nbsp;years of experience, Dr. Shetty has
                                                performed over 1,20,000 heart surgeries, impacting countless lives through his dedication to accessible and innovative cardiac care. He is a recipient of the Padma Shri and Padma Bhushan,
                                                India's fourth and third highest civilian awards, respectively, for his contributions to healthcare.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Devi Prasad Shetty?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Unmatched Experience:</strong>&nbsp;With over 45&nbsp;years of experience and over 1,20,000 heart surgeries performed, Dr. Shetty brings unparalleled expertise and skill to every
                                                    procedure.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Pioneer in Innovative Techniques:</strong>&nbsp;Dr. Shetty has been at the forefront of cardiac surgery, performing Asia's first dynamic cardiomyoplasty, pioneering the use of
                                                    microchip cameras for keyhole surgery, and leading the way in neonatal open-heart surgery in India.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>World-Class Expertise in Beating Heart Surgery:</strong>&nbsp;Dr. Shetty is recognised as one of the most experienced surgeons globally in performing bypass-grafting operations on
                                                    a beating heart, minimizing risks and improving outcomes.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Commitment to Accessible Care:</strong>&nbsp;Dr. Shetty founded Narayana Hrudayalaya to provide affordable, high-quality cardiac care to all, regardless of their financial
                                                    background.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Expertise in Pediatric Cardiac Surgery:</strong>&nbsp;Dr. Shetty has a significant focus on pediatric cases, offering hope and healing to children with congenital heart defects.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-devi-prasad-shetty-cardiothoracic-surgeon-pediatric-surgeon"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Devi Prasad Shetty "
                                                    id="knowMore_3988"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Devi Prasad Shetty "
                                                    id="toggleButton_3988"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(3988);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_3988', `<p class=\"rtejustify\">Dr. Devi Prasad Shetty is one of the most renowned cardiothoracic surgeons in India and the visionary founder of Narayana Hrudayalaya. With over 45&nbsp;years of experience, Dr. Shetty has performed over 1,20,000 heart surgeries, impacting countless lives through his dedication to accessible and innovative cardiac care. He is a recipient of the Padma Shri and Padma Bhushan, India\'s fourth and third highest civilian awards, respectively, for his contributions to healthcare.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Devi Prasad Shetty?</strong></p> <ul> <li class=\"rtejustify\"><strong>Unmatched Experience:</strong>&nbsp;With over 45&nbsp;years of experience and over 1,20,000 heart surgeries performed, Dr. Shetty brings unparalleled expertise and skill to every procedure.</li> <li class=\"rtejustify\"><strong>Pioneer in Innovative Techniques:</strong>&nbsp;Dr. Shetty has been at the forefront of cardiac surgery, performing Asia\'s first dynamic cardiomyoplasty, pioneering the use of microchip cameras for keyhole surgery, and leading the way in neonatal open-heart surgery in India.</li> <li class=\"rtejustify\"><strong>World-Class Expertise in Beating Heart Surgery:</strong>&nbsp;Dr. Shetty is recognised as one of the most experienced surgeons globally in performing bypass-grafting operations on a beating heart, minimizing risks and improving outcomes.</li> <li class=\"rtejustify\"><strong>Commitment to Accessible Care:</strong>&nbsp;Dr. Shetty founded Narayana Hrudayalaya to provide affordable, high-quality cardiac care to all, regardless of their financial background.</li> <li class=\"rtejustify\"><strong>Expertise in Pediatric Cardiac Surgery:</strong>&nbsp;Dr. Shetty has a significant focus on pediatric cases, offering hope and healing to children with congenital heart defects.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. (Col.) Manjinder Singh Sandhu"
                                                        title="Dr. (Col.) Manjinder Singh Sandhu"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_col_sandhu.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-col-manjinder-singh-sandhu-cardiology" title="Dr. (Col.) Manjinder Singh Sandhu">
                                                                    Dr. (Col.) Manjinder Singh Sandhu
                                                                </a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Interventional Cardiologist</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Gurgaon, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.8 (181 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>2023+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Consultant</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/fortis-memorial-research-institute-gurgaon" title="Fortis Memorial Research Institute, Gurgaon">
                                                                    Fortis Memorial Research Institute, Gurgaon
                                                                </a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. (Col.) Manjinder Singh Sandhu"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2555"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Interventional Cardiologist"
                                                doc-hosp="Fortis Memorial Research Institute  Gurgaon"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2555"
                                                title="Book Appointment with Dr. (Col.) Manjinder Singh Sandhu"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. (Col.) Manjinder Singh Sandhu"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2555"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Interventional Cardiologist"
                                                hospitalname="Fortis Memorial Research Institute  Gurgaon"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2555"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2555"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-col-manjinder-singh-sandhu-cardiology?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. (Col.) Manjinder Singh Sandhu"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2555">
                                        <div class="mt-3 readmorebox" id="summary_content_2555">
                                            <p class="rtejustify">
                                                Dr. (Col.) Manjinder Singh Sandhu is a highly experienced and dedicated interventional cardiologist specialising in advanced heart treatments. With over 37 years of expertise, including a
                                                distinguished career in the Indian Army Medical Corps, Dr. Sandhu has touched the lives of countless patients through his skilled care and commitment to excellence.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. (Col.) Manjinder Singh Sandhu?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Experience in Interventional Cardiology</strong>: With over 20,000 cardiac procedures performed, Dr. Sandhu is a highly skilled expert in complex angioplasty and
                                                    structural heart interventions, ensuring exceptional patient outcomes.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Expert in Advanced Coronary Interventions</strong>: His expertise includes Primary Angioplasty (with Thrombosuction devices, IABP), Bifurcation Lesions, Chronic Total Occlusions,
                                                    and Left Main Lesions. He is proficient in using cutting balloons, angiosculpt, IVUS, OCT, Rotablation, and Laser with most procedures performed via the Radial Route for faster recovery.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Leader in Structural Heart Procedures</strong>: Dr. Sandhu is a pioneer in minimally invasive heart treatments like TAVR and MitraClip, providing safer alternatives to traditional
                                                    open-heart surgery.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Recognised for Excellence</strong>: He has received multiple honors, including the "Legend in Cardiology" award and recognition from the Ministry of Defence, highlighting his
                                                    dedication to cardiac care and medical leadership.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-col-manjinder-singh-sandhu-cardiology"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. (Col.) Manjinder Singh Sandhu"
                                                    id="knowMore_2555"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. (Col.) Manjinder Singh Sandhu"
                                                    id="toggleButton_2555"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2555);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2555', `<p class=\"rtejustify\">Dr. (Col.) Manjinder Singh Sandhu is a highly experienced and dedicated interventional cardiologist specialising in advanced heart treatments. With over 37 years of expertise, including a distinguished career in the Indian Army Medical Corps, Dr. Sandhu has touched the lives of countless patients through his skilled care and commitment to excellence.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. (Col.) Manjinder Singh Sandhu?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Experience in Interventional Cardiology</strong>: With over 20,000 cardiac procedures performed, Dr. Sandhu is a highly skilled expert in complex angioplasty and structural heart interventions, ensuring exceptional patient outcomes.</li> <li class=\"rtejustify\"><strong>Expert in Advanced Coronary Interventions</strong>: His expertise includes Primary Angioplasty (with Thrombosuction devices, IABP), Bifurcation Lesions, Chronic Total Occlusions, and Left Main Lesions. He is proficient in using cutting balloons, angiosculpt, IVUS, OCT, Rotablation, and Laser with most procedures performed via the Radial Route for faster recovery.</li> <li class=\"rtejustify\"><strong>Leader in Structural Heart Procedures</strong>: Dr. Sandhu is a pioneer in minimally invasive heart treatments like TAVR and MitraClip, providing safer alternatives to traditional open-heart surgery.</li> <li class=\"rtejustify\"><strong>Recognised for Excellence</strong>: He has received multiple honors, including the \"Legend in Cardiology\" award and recognition from the Ministry of Defence, highlighting his dedication to cardiac care and medical leadership.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Vijay Dikshit"
                                                        title="Dr. Vijay Dikshit"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/vijay_dikshit_1.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-vijay-dikshit" title="Dr. Vijay Dikshit">Dr. Vijay Dikshit</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">Hyderabad, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/blank-star.webp" width="12" height="12" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.9 (160 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>53+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Consultant</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/apollo-hospitals-hyderabad" title="Apollo Hospitals, Jubilee Hills Hyderabad">Apollo Hospitals, Jubilee Hills Hyderabad</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Vijay Dikshit"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=17720"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Apollo Hospitals  Jubilee Hills Hyderabad"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=17720"
                                                title="Book Appointment with Dr. Vijay Dikshit"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Vijay Dikshit"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=17720"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Apollo Hospitals  Jubilee Hills Hyderabad"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=17720"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=17720"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-vijay-dikshit?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Vijay Dikshit"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_17720">
                                        <div class="mt-3 readmorebox" id="summary_content_17720">
                                            <ul dir="ltr">
                                                <li class="rtejustify">
                                                    Dr. Vijay Dikshit is one of the most experienced&nbsp;<strong>Cardiothoracic Surgeons</strong>&nbsp;in Jubilee Hills, Hyderabad, practicing successfully for more than 50&nbsp;years.
                                                </li>
                                                <li class="rtejustify">
                                                    He holds expertise in Peripheral Angioplasty, Balloon Mitral Valvuloplasty, Intra - Arterial Thrombolysis, Pacemaker Implantation,&nbsp;Mitral/Heart Valve Replacement, Artificial chordal
                                                    Reconstruction, and organ transplantation.
                                                </li>
                                                <li class="rtejustify">
                                                    He has the experience of performing 6000 open heart surgeries&nbsp;in association with Dr. Girinath at <strong>Apollo Hospitals, Madras</strong>, making&nbsp;it one of the largest
                                                    experiences&nbsp;of open-heart&nbsp;surgery.
                                                </li>
                                                <li class="rtejustify">
                                                    He is one of the first users of Stentless&nbsp;Bioprosthetic Valve Replacement Surgery for aortic valve disease in India.&nbsp;It is the <strong>state-of-the-art&nbsp;tissue</strong> heart
                                                    valve not yet commonly used In India in other cardiac surgery.&nbsp;
                                                </li>
                                                <li class="rtejustify">He performs various <strong>heart surgeries&nbsp;</strong>at Apollo Hospitals, Hyderabad.&nbsp;</li>
                                                <li class="rtejustify">
                                                    Dr. Dikshit was felicitated by Apollo Hospitals Chairman <strong>Dr. Pratap C Reddy </strong>for performing 10000 <strong>open-heart surgeries</strong>&nbsp;at Apollo Group.
                                                </li>
                                                <li class="rtejustify">He was also felicitated by <strong>Medtronic Inc. USA for achieving 5000 open-heart&nbsp;surgeries.</strong></li>
                                                <li class="rtejustify">
                                                    He pursued MBBS in 1974 followed by an MS in General Surgery from the University of Lucknow in 1978. Later, he completed his M.Ch. in Cardiothoracic Surgery from the University of Lucknow
                                                    in 1980.
                                                </li>
                                                <li class="rtejustify">He is an active member of the Indian Medical Association and Cardiological Society of India.</li>
                                                <li class="rtejustify">He is a recipient of several awards and recognitions.</li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-vijay-dikshit" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Vijay Dikshit" id="knowMore_17720" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Vijay Dikshit"
                                                    id="toggleButton_17720"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(17720);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_17720', `<ul dir=\"ltr\"> <li class=\"rtejustify\">Dr. Vijay Dikshit is one of the most experienced&nbsp;<strong>Cardiothoracic Surgeons</strong>&nbsp;in Jubilee Hills, Hyderabad, practicing successfully for more than 50&nbsp;years.</li> <li class=\"rtejustify\">He holds expertise in Peripheral Angioplasty, Balloon Mitral Valvuloplasty, Intra - Arterial Thrombolysis, Pacemaker Implantation,&nbsp;Mitral/Heart Valve Replacement, Artificial chordal Reconstruction, and organ transplantation.</li> <li class=\"rtejustify\">He has the experience of performing 6000 open heart surgeries&nbsp;in association with Dr. Girinath at <strong>Apollo Hospitals, Madras</strong>, making&nbsp;it one of the largest experiences&nbsp;of open-heart&nbsp;surgery.</li> <li class=\"rtejustify\">He is one of the first users of Stentless&nbsp;Bioprosthetic Valve Replacement Surgery for aortic valve disease in India.&nbsp;It is the <strong>state-of-the-art&nbsp;tissue</strong> heart valve not yet commonly used In India in other cardiac surgery.&nbsp;</li> <li class=\"rtejustify\">He performs various <strong>heart surgeries&nbsp;</strong>at Apollo Hospitals, Hyderabad.&nbsp;</li> <li class=\"rtejustify\">Dr. Dikshit was felicitated by Apollo Hospitals Chairman <strong>Dr. Pratap C Reddy </strong>for performing 10000 <strong>open-heart surgeries</strong>&nbsp;at Apollo Group.</li> <li class=\"rtejustify\">He was also felicitated by <strong>Medtronic Inc. USA for achieving 5000 open-heart&nbsp;surgeries.</strong></li> <li class=\"rtejustify\">He pursued MBBS in 1974 followed by an MS in General Surgery from the University of Lucknow in 1978. Later, he completed his M.Ch. in Cardiothoracic Surgery from the University of Lucknow in 1980.</li> <li class=\"rtejustify\">He is an active member of the Indian Medical Association and Cardiological Society of India.</li> <li class=\"rtejustify\">He is a recipient of several awards and recognitions.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Anoop K. Ganjoo"
                                                        title="Dr. Anoop K. Ganjoo"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr._anoop_k.ganjoo-removebg-preview-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-anoop-kganjoo" title="Dr. Anoop K. Ganjoo">Dr. Anoop K. Ganjoo</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">5.0 (49 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>46+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Senior Consultant</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital, New Delhi">Indraprastha Apollo Hospital, New Delhi</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Anoop K. Ganjoo"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=2963"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Indraprastha Apollo Hospital  New Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=2963"
                                                title="Book Appointment with Dr. Anoop K. Ganjoo"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Anoop K. Ganjoo"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=2963"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Indraprastha Apollo Hospital  New Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=2963"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=2963"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-anoop-kganjoo?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Anoop K. Ganjoo"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_2963">
                                        <div class="mt-3 readmorebox" id="summary_content_2963">
                                            <ul>
                                                <li class="rtejustify">
                                                    Dr. Anoop K. Ganjoo is among the&nbsp;<a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india">top Cardiac Surgeons in India</a>, also acclaimed as a&nbsp;
                                                    <a href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/heart-bypass-surgery-cabg/india">heart surgeon for bypass surgery</a>&nbsp;with over 46 years of experience.
                                                </li>
                                                <li class="rtejustify">Dr. Anoop K. Ganjoo is among the top Cardiac Surgeons in India, also acclaimed as a heart surgeon for bypass surgery with over 46 years of experience.</li>
                                                <li class="rtejustify">He is among the leading heart surgeons for coronary artery disease treatment, mitral valve repair, and heart transplant surgery in New Delhi.</li>
                                                <li class="rtejustify">
                                                    His specialises in performing coronary artery bypass graft (CABG), cardiovascular surgery, radiofrequency ablation of arrhythmias, peripheral and coronary angiography &amp; angioplasty,
                                                    left ventricle aneurysm repair, and balloon valvuloplasty.
                                                </li>
                                                <li class="rtejustify">Dr. Ganjoo completed his MBBS in 1978, MS in 1983, and MCh in 1987 from All India Institute of Medical Sciences.</li>
                                                <li class="rtejustify">Later, he did an advanced fellowship in Cardiac Surgery in Milwaukee, USA, and became a Fellow of the Indian Association of Cardiovascular Surgeons.</li>
                                                <li class="rtejustify">
                                                    He is among the expert cardiac surgeons in New Delhi to hold memberships of many associations, including the Society of Thoracic Surgeons (USA), the Cardiological Society of India.
                                                </li>
                                                <li class="rtejustify">He has written numerous publications in national and international journals.</li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a href="https://www.vaidam.com/doctors/dr-anoop-kganjoo" class="readmore-btn1" style="display: none;" aria-label="Learn more about Dr. Anoop K. Ganjoo" id="knowMore_2963" title="Know More">
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Anoop K. Ganjoo"
                                                    id="toggleButton_2963"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(2963);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_2963', `<ul> <li class=\"rtejustify\">Dr. Anoop K. Ganjoo is among the&nbsp;<a href=\"https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india\">top Cardiac Surgeons in India</a>, also acclaimed as a&nbsp;<a href=\"https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/heart-bypass-surgery-cabg/india\">heart surgeon for bypass surgery</a>&nbsp;with over 46 years of experience.</li> <li class=\"rtejustify\">Dr. Anoop K. Ganjoo is among the top Cardiac Surgeons in India, also acclaimed as a heart surgeon for bypass surgery with over 46 years of experience.</li> <li class=\"rtejustify\">He is among the leading heart surgeons for coronary artery disease treatment, mitral valve repair, and heart transplant surgery in New Delhi.</li> <li class=\"rtejustify\">His specialises in performing coronary artery bypass graft (CABG), cardiovascular surgery, radiofrequency ablation of arrhythmias, peripheral and coronary angiography &amp; angioplasty, left ventricle aneurysm repair, and balloon valvuloplasty.</li> <li class=\"rtejustify\">Dr. Ganjoo completed his MBBS in 1978, MS in 1983, and MCh in 1987 from All India Institute of Medical Sciences.</li> <li class=\"rtejustify\">Later, he did an advanced fellowship in Cardiac Surgery in Milwaukee, USA, and became a Fellow of the Indian Association of Cardiovascular Surgeons.</li> <li class=\"rtejustify\">He is among the expert cardiac surgeons in New Delhi to hold memberships of many associations, including the Society of Thoracic Surgeons (USA), the Cardiological Society of India.</li> <li class=\"rtejustify\">He has written numerous publications in national and international journals.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr. Bhaba Nanda Das"
                                                        title="Dr. Bhaba Nanda Das"
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_bhaba_nanda_das-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-bhaba-nanda-das-cardio-thoracic-vascular-surgeon" title="Dr. Bhaba Nanda Das">Dr. Bhaba Nanda Das</a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <div class="dr-review d-flex flex-row column-gap-2">
                                                            <ul class="chkd-stars-list mb-0">
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/Star-fill.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                                <li><img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/half-golden-star.webp" width="13" height="13" alt="Rating" title="Rating" /></li>
                                                            </ul>
                                                            <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Ratings">4.5 (155 Ratings)</a>
                                                        </div>
                                                        <p class="card-text mb-0">
                                                            <small><strong>47+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Chief</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/indraprastha-apollo-hospital-new-delhi" title="Indraprastha Apollo Hospital, New Delhi">Indraprastha Apollo Hospital, New Delhi</a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr. Bhaba Nanda Das"
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=4615"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Indraprastha Apollo Hospital  New Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=4615"
                                                title="Book Appointment with Dr. Bhaba Nanda Das"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr. Bhaba Nanda Das"
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=4615"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Indraprastha Apollo Hospital  New Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=4615"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=4615"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-bhaba-nanda-das-cardio-thoracic-vascular-surgeon?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr. Bhaba Nanda Das"
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_4615">
                                        <div class="mt-3 readmorebox" id="summary_content_4615">
                                            <p class="rtejustify">
                                                Dr. Bhaba Nanda Das is a leading Cardiovascular Surgeon based in New Delhi, renowned for his extensive experience of over 47 years and commitment to providing comprehensive cardiac care. He
                                                has successfully performed over 20,000 heart surgeries, managing over 800 cases annually, offering hope and improved quality of life to his patients.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Bhaba Nanda Das?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Experience:</strong>&nbsp;With over 47 years dedicated to cardiovascular surgery, Dr. Das brings a wealth of knowledge and surgical expertise to every procedure.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Expertise in Complex Cases:</strong>&nbsp;He specialises in complex procedures, including CABG on a beating heart, aortic aneurysm surgery, single and multiple valve replacements,
                                                    and repair of congenital anomalies.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Comprehensive Treatment for Cardiac Conditions:</strong>&nbsp;From coronary artery disease and myocarditis to aortic valve disease, angina, atrial fibrillation, and cardiomyopathy,
                                                    Dr. Das provides comprehensive medical and surgical solutions.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Patient-Centric Approach:</strong>&nbsp;He is committed to providing personalised treatment plans tailored to meet the specific needs of each patient, ensuring the best possible
                                                    outcomes.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-bhaba-nanda-das-cardio-thoracic-vascular-surgeon"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr. Bhaba Nanda Das"
                                                    id="knowMore_4615"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr. Bhaba Nanda Das"
                                                    id="toggleButton_4615"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(4615);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_4615', `<p class=\"rtejustify\">Dr. Bhaba Nanda Das is a leading Cardiovascular Surgeon based in New Delhi, renowned for his extensive experience of over 47 years and commitment to providing comprehensive cardiac care. He has successfully performed over 20,000 heart surgeries, managing over 800 cases annually, offering hope and improved quality of life to his patients.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Bhaba Nanda Das?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Experience:</strong>&nbsp;With over 47 years dedicated to cardiovascular surgery, Dr. Das brings a wealth of knowledge and surgical expertise to every procedure.</li> <li class=\"rtejustify\"><strong>Expertise in Complex Cases:</strong>&nbsp;He specialises in complex procedures, including CABG on a beating heart, aortic aneurysm surgery, single and multiple valve replacements, and repair of congenital anomalies.</li> <li class=\"rtejustify\"><strong>Comprehensive Treatment for Cardiac Conditions:</strong>&nbsp;From coronary artery disease and myocarditis to aortic valve disease, angina, atrial fibrillation, and cardiomyopathy, Dr. Das provides comprehensive medical and surgical solutions.</li> <li class=\"rtejustify\"><strong>Patient-Centric Approach:</strong>&nbsp;He is committed to providing personalised treatment plans tailored to meet the specific needs of each patient, ensuring the best possible outcomes.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="dr-card-main mb-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm">
                                    <div class="dr-card-lt">
                                        <div class="card drcard mb-3 mb-md-0 border-0">
                                            <div class="row g-0 text-body-secondary">
                                                <div class="col-3">
                                                    <img
                                                        loading="lazy"
                                                        alt="Dr Raju Vyas "
                                                        title="Dr Raju Vyas "
                                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/dr_raju_vyas_cleanup-min.webp"
                                                        width="90"
                                                        height="100"
                                                        class="shadow-sm rounded-3 dr-p-img"
                                                    />
                                                </div>
                                                <div class="col-9">
                                                    <div class="card-body px-0 ps-3 px-md-3 mt-md-0 py-0 lh-md">
                                                        <div class="dr-name d-flex flex-wrap gap-2 align-items-center mb-2 mb-md-0">
                                                            <h2 class="card-title fs-4 fw-bolder mb-0">
                                                                <a class="text-dark" href="https://www.vaidam.com/doctors/dr-raju-vyas-cardio-thoracic-surgeon-cardiology" title="Dr Raju Vyas ">Dr Raju Vyas </a>
                                                                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/circle-green.webp" width="15" height="15" alt="Verified" title="Verified" />
                                                            </h2>
                                                            <small class="d-inline-flex px-3 theam-color bg-theam-2 lh-base border border-secondary-subtle rounded-4">Cardiac Surgeon</small>
                                                        </div>
                                                        <p class="card-text text-secondary mb-0">New Delhi, India</p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>36+</strong> years of experience</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small><strong>Designation:</strong> Director</small>
                                                        </p>
                                                        <p class="card-text mb-0">
                                                            <small>
                                                                <strong>Works At:</strong>
                                                                <a href="https://www.vaidam.com/hospitals/fortis-hospital-shalimar-bagh-new-delhi" title="Fortis Hospital, Shalimar Bagh, New Delhi">
                                                                    Fortis Hospital, Shalimar Bagh, New Delhi
                                                                </a>
                                                            </small>
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dr-card-rt d-flex flex-wrap gap-3">
                                        <!-- <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/thumb-up.webp" alt="Likes" width="15" height="15"><span>98%</span> </p> <p class="d-flex flex-row align-items-center lh-1 gap-1 mb-2"> <img loading="lazy" src="https://www.vaidam.com/assets/dr_list_v1/images/location-red.webp" alt="Location" width="14" height="16"><span>Dwarka, Delhi</span> </p> -->
                                        <div class="dr-card-btn d-grid gap-3 align-content-center">
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online"
                                                title="Contact Doctor"
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-other doctor_list_cd_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; setdata(this)"
                                                doc-name="Dr Raju Vyas "
                                                doc-url="https://www.vaidam.com//lp/consult-online?doctor=4654"
                                                btn-type="Submit Enquiry Button on List Element"
                                                page-type="Doctor List Page"
                                                doc-depart="CARDIOLOGY AND CARDIAC SURGERY,PEDIATRIC CARDIOLOGY"
                                                doc-speciality="Cardiac Surgeon"
                                                doc-hosp="Fortis Hospital  Shalimar Bagh  New Delhi"
                                                style="display: none;"
                                            >
                                                Contact Doctor
                                            </a>
                                            <a
                                                href="https://www.vaidam.com/lp/consult-online?doctor=4654"
                                                title="Book Appointment with Dr Raju Vyas "
                                                class="btn px-xm-1 px-sm-4 btn-danger geo-in doctor_list_ba_button"
                                                onclick="if (!window.__cfRLUnblockHandlers) return false; getDataOnClick(this)"
                                                style="display: block;"
                                                userintentname="Dr Raju Vyas "
                                                userintenturl="https://www.vaidam.com//lp/consult-online?doctor=4654"
                                                btntype="Book Appointment Button on List Element"
                                                pagetype="Doctor List Page"
                                                urldepartment="CARDIOLOGY AND CARDIAC SURGERY,PEDIATRIC CARDIOLOGY"
                                                urlspeciality="Cardiac Surgeon"
                                                hospitalname="Fortis Hospital  Shalimar Bagh  New Delhi"
                                                clickurl="https://www.vaidam.com//lp/consult-online?doctor=4654"
                                                data-link="https://www.vaidam.com//lp/consult-online?doctor=4654"
                                            >
                                                Book Appointment
                                            </a>
                                            <a
                                                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/dr-raju-vyas-cardio-thoracic-surgeon-cardiology?source=wpchat_DLLC%20,%20Thank%20you!"
                                                title="Whatsapp About Dr Raju Vyas "
                                                target="_blank"
                                                class="btn px-xm-1 px-sm-4 btn-wp doctor_list_wp_button wa_button_clicked"
                                            >
                                                Whatsapp Us
                                            </a>
                                        </div>
                                    </div>
                                    <div class="dr-card-main mb-4 mt-4 p-3 d-flex flex-wrap border border-info-subtle rounded-3 shadow-sm" id="doctor_4654">
                                        <div class="mt-3 readmorebox" id="summary_content_4654">
                                            <p class="rtejustify">
                                                Dr. Raju Vyas is a distinguished Cardiothoracic and Vascular Surgeon with over 36 years of experience who is widely regarded as one of India's finest Pediatric Cardiac Surgeons. His experience
                                                spans a wide variety of adult and neonatal cardiac procedures, with a particular emphasis on repairing congenital heart conditions in infants.
                                            </p>
                                            <p class="rtejustify"><strong>Why Choose Dr. Vyas?</strong></p>
                                            <ul>
                                                <li class="rtejustify">
                                                    <strong>Extensive Pediatric Cardiac Expertise:</strong>&nbsp;With more than 36+ years of experience, Dr. Vyas has a rich history of treating complicated congenital heart conditions in
                                                    children and infants. His expertise ranges from ASD, VSD, and TOF surgery to Canal treatments and other surgeries aimed to address a variety of heart abnormalities.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Comprehensive Surgical Skills:</strong>&nbsp;He is skilled at performing a variety of cardiac procedures, including CABG, redo-CABG, beating heart bypass, valve repair and
                                                    replacement, and aortic aneurysm treatment. This broad skill set provides comprehensive cardiac care to patients of all ages.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Specialised in Neonatal and Congenital Heart Surgery:</strong>&nbsp;Dr. Vyas' skill in performing delicate neonatal cardiac surgery and complex congenital heart condition
                                                    treatments. He is a popular pediatric heart surgeon in India.
                                                </li>
                                                <li class="rtejustify">
                                                    <strong>Award-Winning Excellence:</strong>&nbsp;He has received many awards, including the Best Cardiac Surgeon Award in Delhi NCR, a Gold Medal, and an Appreciation Award from Fortis
                                                    Escorts Hospital, for his outstanding contributions to the field.
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="d-flex justify-content-between w-100">
                                            <p class="mb-0 text-start">
                                                <a
                                                    href="https://www.vaidam.com/doctors/dr-raju-vyas-cardio-thoracic-surgeon-cardiology"
                                                    class="readmore-btn1"
                                                    style="display: none;"
                                                    aria-label="Learn more about Dr Raju Vyas "
                                                    id="knowMore_4654"
                                                    title="Know More"
                                                >
                                                    Know More
                                                </a>
                                            </p>
                                            <p class="mb-0 text-end">
                                                <a
                                                    href="#"
                                                    class="readmore-btn1"
                                                    style="cursor: pointer;"
                                                    aria-label="Learn more about Dr Raju Vyas "
                                                    id="toggleButton_4654"
                                                    onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault(),toggleButton(4654);"
                                                    title="Show More"
                                                >
                                                    Show More
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <script type="text/javascript">
                                    //localStorage.setItem('doctorFullContent_4654', `<p class=\"rtejustify\">Dr. Raju Vyas is a distinguished Cardiothoracic and Vascular Surgeon with over 36 years of experience who is widely regarded as one of India\'s finest Pediatric Cardiac Surgeons. His experience spans a wide variety of adult and neonatal cardiac procedures, with a particular emphasis on repairing congenital heart conditions in infants.</p> <p class=\"rtejustify\"><strong>Why Choose Dr. Vyas?</strong></p> <ul> <li class=\"rtejustify\"><strong>Extensive Pediatric Cardiac Expertise:</strong>&nbsp;With more than 36+ years of experience, Dr. Vyas has a rich history of treating complicated congenital heart conditions in children and infants. His expertise ranges from ASD, VSD, and TOF surgery to Canal treatments and other surgeries aimed to address a variety of heart abnormalities.</li> <li class=\"rtejustify\"><strong>Comprehensive Surgical Skills:</strong>&nbsp;He is skilled at performing a variety of cardiac procedures, including CABG, redo-CABG, beating heart bypass, valve repair and replacement, and aortic aneurysm treatment. This broad skill set provides comprehensive cardiac care to patients of all ages.</li> <li class=\"rtejustify\"><strong>Specialised in Neonatal and Congenital Heart Surgery:</strong>&nbsp;Dr. Vyas\' skill in performing delicate neonatal cardiac surgery and complex congenital heart condition treatments. He is a popular pediatric heart surgeon in India.</li> <li class=\"rtejustify\"><strong>Award-Winning Excellence:</strong>&nbsp;He has received many awards, including the Best Cardiac Surgeon Award in Delhi NCR, a Gold Medal, and an Appreciation Award from Fortis Escorts Hospital, for his outstanding contributions to the field.</li> </ul> `);
                                </script>
                                <script type="text/javascript">
                                    function toggleButton(doctorId) {
                                        let summaryContent = $("#summary_content_" + doctorId);
                                        let toggleBtn = $("#toggleButton_" + doctorId);
                                        let knowMoreBtn = $("#knowMore_" + doctorId);

                                        // Toggle class to expand/collapse content
                                        summaryContent.toggleClass("expanded");

                                        if (summaryContent.hasClass("expanded")) {
                                            toggleBtn.text("Show Less").attr("title", "Show Less");
                                            knowMoreBtn.show(); // Show "Know More" button when expanded
                                        } else {
                                            toggleBtn.text("Show More").attr("title", "Show More");
                                            knowMoreBtn.hide(); // Hide "Know More" button when collapsed
                                        }
                                    }

                                    // function toggleButton(id) {
                                    //     var summaryContent = document.getElementById('summary_content_' + id);
                                    //     var toggleButton = document.getElementById('toggleButton_' + id);
                                    //     var knowMore = document.getElementById('knowMore_' + id);
                                    //     var fullContent = localStorage.getItem('doctorFullContent_' + id);

                                    //     if (summaryContent.textContent.includes('...')) {
                                    //         summaryContent.innerHTML = fullContent;
                                    //         toggleButton.textContent = 'Show Less';
                                    //         knowMore.style.display = 'inline';
                                    //     } else {
                                    // 	var plainTextContent = stripTagsRemove(fullContent);
                                    //         summaryContent.innerHTML = plainTextContent.substring(0, 250) + '...';
                                    // 	toggleButton.textContent = 'Show More';
                                    //         knowMore.style.display = "none";
                                    //     }
                                    // }
                                    // function formatFullContent(content) {
                                    //     const lines = content.split('\n');  // Split by newlines
                                    //     const maxItems = 5; // Limit to 5 list items
                                    //     let listContent = "<ul>";

                                    //     for (let i = 0; i < Math.min(lines.length, maxItems); i++) {
                                    //         const line = lines[i].trim();
                                    //         if (line) {  // Only include non-empty lines
                                    //             listContent += `<li>${line}</li>`;
                                    //         }
                                    //     }

                                    //     listContent += "</ul>";
                                    //     return listContent;
                                    // }

                                    // function stripTagsRemove(html) {
                                    //     var tempDiv = document.createElement("div");
                                    //     tempDiv.innerHTML = html;
                                    //     return tempDiv.textContent || tempDiv.innerText || "";
                                    // }
                                </script>
                                <div class="d-grid gap-2 col-lg-4 col-md-6 col-sm-9 col-12 mx-auto my-4 show-more-doctor-div">
                                    <button class="btn px-xm-1 px-sm-4 py-2 btn-primary bg-theam rounded-pill" onclick="if (!window.__cfRLUnblockHandlers) return false; showMoreDoctorsIntoList();" id="show_more_doctor">
                                        Show More Doctors
                                        <img
                                            src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/spinner.gif"
                                            alt="More Data Loader"
                                            style="display: none; width: 20px; height: 20px;"
                                            id="show_more_doctor_loader"
                                            title="Show More Doctors"
                                        />
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 position-relative d-none d-md-block">
                        <!-- Right Side Form -->
                        <div class="form-col-box bg-theam-2 p-4 rounded-3 position-sticky sticy-form">
                            <div class="ms_v_cta_heading d-flex mb-4">
                                <span class="d-flex flex-column"> <strong class="fs-4"> Get FREE Evaluation </strong> <small> Treatment plan and quote within 2 days </small> </span>
                            </div>
                            <div id="custom-form">
                                <form class="row" id="drListGenericForm_2" autocomplete="off">
                                    <input type="hidden" name="_token" id="_token" value="0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr" /> <input type="hidden" name="pagetype" value="" />
                                    <input type="hidden" name="page_source" id="page_source_2" value="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india" />
                                    <input type="hidden" name="lang1_2" id="lang1_2" value="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india" />
                                    <input type="hidden" name="Form_Location" id="Form_Location" value="Main Right Form" /> <input type="hidden" name="second_form" value="yes" />
                                    <input type="hidden" name="preferredLocation" id="preferredLocation" value="India" /> <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page" />
                                    <input type="hidden" name="c_url" id="c_url" value="" />
                                    <div class="col-12 mb-3">
                                        <label for="inputName" class="form-label"> Name </label> <input type="text" class="form-control" id="name" placeholder="Patient Name" name="name" aria-label="Patient Name" required="" />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputEmail" class="form-label"> Email </label>
                                        <div class="input-group"><input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required="" /></div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputState" class="form-label"> Country </label>
                                        <select class="form-select" id="country2" placeholder="Select Country" name="country" required="true">
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
                                        </select>
                                    </div>
                                    <div class="col-12 mb-3 autocomplete stategroup2" style="display: block;">
                                        <label for="inputCity" class="form-label"> City </label> <input type="text" class="form-control" name="city" id="city2" placeholder="Enter city" /> <input type="hidden" id="state2" name="state" />
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="inputPhone" class="form-label"> Phone Number </label>
                                        <div class="input-group">
                                            <input class="input-group-text" id="country_phone_code2" name="country_phone_code" placeholder="Code" style="width: 80px;" />
                                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="Enter Phone no." />
                                        </div>
                                    </div>
                                    <div class="col-12 mb-3">
                                        <label for="medicalIssue" class="form-label"> Medical Issue </label>
                                        <textarea type="text" class="form-control" id="medical_problem" name="medical_problem" placeholder="Describe The Current Medical Problem."></textarea>
                                    </div>
                                    <div class="col-12 mb-3" id="ageblock2" style="display: block;">
                                        <label for="inputAddress2" class="form-label"> Patient's Age or Date Of Birth </label>
                                        <input type="text" class="form-control new-form-control" id="age_2" placeholder="Example: 30 Yrs or 29-05-1985" name="age" />
                                    </div>
                                    <div class="col-12 mb-3" id="emirates-id-block" style="display: none;">
                                        <label for="inputCity" class="form-label"> Emirates ID </label>
                                        <input type="text" class="form-control new-form-control" name="emirates-id" id="emirates-id" placeholder="Enter Emirates ID (To be shared with hospital)" />
                                    </div>
                                    <div class="col-12 mt-2">
                                        <div class="d-grid"><button type="submit" id="search-main-form-btn" class="btn btn-danger online-consult-button in_page_form doctor_list_main_form">Contact Us Now</button></div>
                                    </div>
                                </form>
                                <span class="formtns-triger d-block text-black-50 text-center fs-6 mt-4">
                                    By submitting the form I agree to the
                                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Terms of Use" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formTerms">
                                        Terms of Use
                                    </a>
                                    and
                                    <a href="#" onclick="if (!window.__cfRLUnblockHandlers) return false; event.preventDefault();" title="Privacy Policy" class="terms_of_use" data-bs-toggle="modal" data-bs-target="#formPrivacyPolicy">
                                        Privacy Policy
                                    </a>
                                    of Vaidam Health.
                                </span>
                            </div>
                        </div>
                        <!-- Right Side Form End -->
                    </div>
                </div>
            </div>
        </section>
        <section class="main-bottom mb-5">
            <div class="container">
                <!-- FAQs -->
                <div class="row">
                    <div class="col-12 faqs custom-accordion pt-5">
                        <h2 class="fs-2 mb-4 fw-semibold">Frequently Asked Questions (FAQ's)</h2>
                        <div class="row accordion faq" id="accordionFacilities">
                            <div class="col-lg-6 first">
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse0" aria-expanded="false" aria-controls="collapse0">
                                            What are the best hospitals for Heart Surgery in India?
                                        </button>
                                    </h3>
                                    <div id="collapse0" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            <p>Some of the best hospitals in India for Heart Surgery are:</p>
                                            <p></p>
                                            <li><a href="/hospitals/medanta-medicity-gurgaon">Medanta - The Medicity, Gurgaon</a></li>
                                            <li><a href="/hospitals/indraprastha-apollo-hospital-new-delhi">Indraprastha Apollo Hospital, New Delhi</a></li>
                                            <li><a href="/hospitals/fortis-escorts-heart-institute-new-delhi">Fortis Escorts Heart Institute, New Delhi</a></li>
                                            <li><a href="/hospitals/max-hospital-gurgaon">Max Super Specialty Hospital, Gurgaon</a></li>
                                            <li><a href="/hospitals/manipal-hospitals-dwarka-delhi">Manipal Hospitals Dwarka, Delhi</a></li>
                                            <p></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
                                            Who are the specialists in the Cardiology department?
                                        </button>
                                    </h3>
                                    <div id="collapse2" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            The different specialists in the Cardiology department may include the following: Interventional Cardiologists focus mainly on minimally invasive procedures to diagnose and treat various heart
                                            conditions. Cardiac Surgeons deal with coronary artery bypass grafting, heart valve repair or replacement, and surgeries to address structural abnormalities. Cardio Thoracic and Vascular Surgeons
                                            deal with the diseases or complications of ischemic heart disease, treat valvular heart disease, or correct congenital heart disease. Non-Invasive Cardiologists measure cardiac output to assess
                                            the overall performance of the heart, identify any abnormalities, and develop tailored treatment plans accordingly. Electrophysiologist deals with disorders that can range from harmless irregular
                                            heartbeats to life-threatening conditions. Many times, one doctor has more than one specialty. You can consult with that specialist, depending on your condition.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
                                            What is the typical waiting period to consult with a cardiac surgeon in India?
                                        </button>
                                    </h3>
                                    <div id="collapse4" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            The typical waiting period to consult with a cardiac surgeon in India depends on various factors, such as the location, the surgeon's availability, and the urgency of the patient's condition.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                                            How do we prepare the list of doctors?
                                        </button>
                                    </h3>
                                    <div id="collapse6" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            The doctors we list are highly sought after by patients. We consider experience, designation, patient feedback, hospital reputation and our own experience of working with them amongst many factors
                                            in creating the list.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                            Are the top cardiac surgeons in India able to serve patients from other countries?
                                        </button>
                                    </h3>
                                    <div id="collapse8" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Yes, the top cardiac surgeons in India treat patients from other countries. Patients travel from all over the world to India because it is one of the best places to get high-quality, reasonably
                                            priced cardiac care.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse10" aria-expanded="false" aria-controls="collapse10">
                                            What is the success rate of heart surgeries in India?
                                        </button>
                                    </h3>
                                    <div id="collapse10" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            In India, the success rate for routine cardiac surgery treatments frequently surpasses 90%. Excellent results are a result of both cutting-edge medical technology and the experience of India's top
                                            cardiac surgeons.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse12" aria-expanded="false" aria-controls="collapse12">
                                            Is it possible to have an online consultation with a cardiac surgeon prior to my trip to India?
                                        </button>
                                    </h3>
                                    <div id="collapse12" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Yes, you can discuss your problem, go over test results, and receive recommendations before your trip with top heart surgeons via Vaidam Health's online consultations.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 second">
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
                                            Can I consult with more than one cardiologist or cardiac surgeon before making a decision?
                                        </button>
                                    </h3>
                                    <div id="collapse1" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Yes, you can consult with more than one cardiologist or top cardiac surgeon before making your decision to get a second opinion. Getting a second opinion can help you feel more confident before
                                            moving forward with the treatment.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
                                            Do Indian cardiac surgeons specialise in advanced techniques like robotic heart surgery?
                                        </button>
                                    </h3>
                                    <div id="collapse3" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Yes, Indian cardiac surgeons specialise in advanced techniques such as robotic surgery, a minimally invasive procedure that leads to smaller incisions, better precision, less pain, and faster
                                            recovery time.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                                            What medical reports are required before meeting a Cardiologist?
                                        </button>
                                    </h3>
                                    <div id="collapse5" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Actual reports may vary from case to case, but carrying the above reports, if you have, would be helpful when meeting the heart doctor: Blood test reports Urinalysis Stress test (on the treadmill)
                                            and Non-stress test (sitting in a chair) reports Nuclear stress test or echo stress test reports Echocardiogram CT, PET, or MRI scan Coronary angiogram
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                                            How to contact the doctors?
                                        </button>
                                    </h3>
                                    <div id="collapse7" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Please submit your inquiry on the website. Upon review of the details, a case manager from our team is assigned. The case manager will assist you with opinion, cost, travel, stay, and appointment
                                            with the doctor.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
                                            Which are the best hospitals for cardiac surgery in India?
                                        </button>
                                    </h3>
                                    <div id="collapse9" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            The best hospitals for cardiac surgery in India are: Fortis Escorts Heart Institute, New Delhi Medanta - The Medicity, Gurugram Kokilaben Dhirubhai Ambani Hospital, Mumbai Manipal Hospital, Dwarka
                                            AIIMS, Delhi Asian Heart Institute Max Super Speciality Hospital, Saket
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse11" aria-expanded="false" aria-controls="collapse11">
                                            Are minimally invasive procedures available for cardiac surgery in India?
                                        </button>
                                    </h3>
                                    <div id="collapse11" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            Yes, many hospitals in India, like Fortis Escorts, Medanta, AIIMS, Kokilaben Hospital, and Max Super Speciality Hospital, offer minimally invasive methods for cardiac surgery.
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item rounded-2">
                                    <h3 class="accordion-header">
                                        <button class="accordion-button bg-theam-2 collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse13" aria-expanded="false" aria-controls="collapse13">
                                            How can we use Vaidam to get in touch with India's top cardiac surgeon?
                                        </button>
                                    </h3>
                                    <div id="collapse13" class="accordion-collapse collapse" data-bs-parent="#accordionFacilities" style="">
                                        <div class="accordion-body">
                                            You can submit your medical inquiry at Vaidam’s website. The team will evaluate your query and suggest leading cardiac surgeons, the approximate cost of treatment, and details regarding recovery
                                            and success rates.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <!-- Patient Reviews -->
                        <div class="p-review-row row">
                            <div class="col-12 pt-4 review-box">
                                <div class="patient-review p-3 rounded-4 border bg-theam-2">
                                    <h2 class="fs-2 fw-semibold mb-0">Patient's Review</h2>
                                    <div class="card mt-3 p-review-row-card">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Ms. Marie Jimmy</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <img alt="Rating Star" src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/blank_star.webp" width="13" height="13" title="Rating Star" />
                                            </ul>
                                            <p>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i> I came to India for my heart valve replacement. Thanks to the Vaidam team for taking care of me during my treatment. I'm grateful for the
                                                great facilities provided for my medical treatment here. <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <p class="text-secondary">Vanuatu</p>
                                        </div>
                                    </div>
                                    <div class="card mt-3 p-review-row-card">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Baby Fathima Jabbi</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i> My baby was diagnosed with a heart defect when she was just six months old. We came to India and consulted Dr. Rajesh Sharma. He performed a
                                                successful surgery. She is recovering well now. <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <p class="text-secondary">Gambia</p>
                                        </div>
                                    </div>
                                    <div class="card mt-3 p-review-row-card" style="display: none;">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Mr. Samir Mohammed Abdo</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                            </ul>
                                            <p>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i> Dr. Rohit Goel and Dr. Mukul Bhargava are very good doctors from Fortis hospital, Gurgaon. My heart surgery was done within three days. I am
                                                thankful to them. <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <p class="text-secondary">Kenya</p>
                                        </div>
                                    </div>
                                    <div class="card mt-3 p-review-row-card" style="display: none;">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Salesh Raman</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <img alt="Rating Star" src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/blank_star.webp" width="13" height="13" title="Rating Star" />
                                            </ul>
                                            <p>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i> I was able to walk a few steps on the 3rd day after my surgery. I count my blessings every day, and I am thankful Dr. Murtaza Ahmed Chishti
                                                did my heart surgery. <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <p class="text-secondary">Fiji</p>
                                        </div>
                                    </div>
                                    <div class="card mt-3 p-review-row-card" style="display: none;">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Mr. Sohaneshwar Lal Padarath</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <img alt="Rating Star" src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/blank_star.webp" width="13" height="13" title="Rating Star" />
                                            </ul>
                                            <p>
                                                <i class="fa fa-quote-left" aria-hidden="true"></i> I am glad that Dr. Ramji Mehrotra did the treatment for my friend, who was diagnosed with heart disease. His family and I thank him very
                                                much. <i class="fa fa-quote-right" aria-hidden="true"></i>
                                            </p>
                                            <p class="text-secondary">Fiji</p>
                                        </div>
                                    </div>
                                    <div class="card mt-3 p-review-row-card" style="display: none;">
                                        <div class="card-body">
                                            <p class="card-title fs-5 fw-semibold">Malik</p>
                                            <ul class="chkd-stars-list">
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <li><img src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/full_star.webp" loading="lazy" width="15" height="15" alt="Rating" title="Rating" /></li>
                                                <img alt="Rating Star" src="https://www.vaidam.com/assets/v2/doctor_detail/v1/img/half_star.webp" width="13" height="13" title="Rating Star" />
                                            </ul>
                                            <p><i class="fa fa-quote-left" aria-hidden="true"></i> <i class="fa fa-quote-right" aria-hidden="true"></i></p>
                                            <p class="text-secondary">Oman</p>
                                        </div>
                                    </div>
                                    <div class="d-grid gap-2 col-lg-3 col-md-4 col-sm-9 col-12 mx-auto my-4"><button class="btn px-xm-1 px-sm-4 py-2 btn-primary bg-theam" id="show-more-reviews">Show More</button></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Case Studies -->
                        <style>
                            .content-part {
                                background: #fff;
                                padding: 20px;
                                border-radius: 20px;
                                /*margin: 20px 0;*/
                                border: 1px solid #ccc;
                                -webkit-box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.17);
                                -moz-box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.17);
                                box-shadow: 0 0 6px 0 rgba(0, 0, 0, 0.17);
                            }

                            .qna {
                                display: block;
                                max-height: 380px;
                                overflow: auto;
                            }

                            .q-bx {
                                display: block;
                                float: left;
                                width: 100%;
                                border-bottom: 1px solid #ccc;
                            }

                            .qna .q-bx img {
                                float: left;
                                margin-right: 20px;
                                max-width: 150px;
                                height: auto;
                                border-radius: 5px;
                            }
                            /* view more */
                            .view-more-bx {
                                display: none;
                            }
                            .qna {
                                max-height: unset;
                            }
                        </style>
                        <div class="row">
                            <div class="col-12 pt-4">
                                <div class="content-part" id="reviews">
                                    <h2 class="fs-3 mb-5">Case Study of Our Patients</h2>
                                    <div class="qna patient-stories">
                                        <div class="view-more-bx" style="display: block;">
                                            <div class="q-bx mb-3">
                                                <img
                                                    alt="Patient from Vanuatu Undergoes Successful Pacemaker Implantation"
                                                    title="Patient from Vanuatu Undergoes Successful Pacemaker Implantation"
                                                    width="120"
                                                    height="78"
                                                    loading="lazy"
                                                    src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/thomasine_nat-min.webp"
                                                />
                                                <a href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-pacemaker-implantation" title="Patient from Vanuatu Undergoes Successful Pacemaker Implantation">
                                                    <p><strong>Patient from Vanuatu Undergoes Successful Pacemaker Implantation</strong></p>
                                                    <p class="italic"><span>Read More</span></p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="view-more-bx" style="display: block;">
                                            <div class="q-bx mb-3">
                                                <img
                                                    alt="Patient Returns from India to Vanuatu with a Healthy Heart"
                                                    title="Patient Returns from India to Vanuatu with a Healthy Heart"
                                                    width="120"
                                                    height="78"
                                                    loading="lazy"
                                                    src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/mr._eniel_-_vanuatu.webp"
                                                />
                                                <a href="https://www.vaidam.com/knowledge-center/patient-returns-india-vanuatu-healthy-heart" title="Patient Returns from India to Vanuatu with a Healthy Heart">
                                                    <p><strong>Patient Returns from India to Vanuatu with a Healthy Heart</strong></p>
                                                    <p class="italic"><span>Read More</span></p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="view-more-bx" style="display: block;">
                                            <div class="q-bx mb-3">
                                                <img
                                                    alt="Patient from Vanuatu Gets Succesful Treatment for Heart Disease in India"
                                                    title="Patient from Vanuatu Gets Succesful Treatment for Heart Disease in India"
                                                    width="120"
                                                    height="78"
                                                    loading="lazy"
                                                    src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/mr._samuel.webp"
                                                />
                                                <a href="https://www.vaidam.com/knowledge-center/patient-vanuatu-gets-succesful-treatment-heart-disease-india" title="Patient from Vanuatu Gets Succesful Treatment for Heart Disease in India">
                                                    <p><strong>Patient from Vanuatu Gets Succesful Treatment for Heart Disease in India</strong></p>
                                                    <p class="italic"><span>Read More</span></p>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="view-more-bx" style="display: block;">
                                            <div class="q-bx mb-3">
                                                <img
                                                    alt="Treatment of Severe Heart Conditions in India | Patient from Vanuatu"
                                                    title="Treatment of Severe Heart Conditions in India | Patient from Vanuatu"
                                                    width="120"
                                                    height="78"
                                                    loading="lazy"
                                                    src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/harry_1.webp"
                                                />
                                                <a href="https://www.vaidam.com/knowledge-center/treatment-severe-heart-conditions-india-patient-vanuatu" title="Treatment of Severe Heart Conditions in India | Patient from Vanuatu">
                                                    <p><strong>Treatment of Severe Heart Conditions in India | Patient from Vanuatu</strong></p>
                                                    <p class="italic"><span>Read More</span></p>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-center"><button class="more-doctors-btn btn btn-primary bg-vh-theam text-white" id="loadmorefaq" title="Show More" style="display: none;">Show More</button></div>
                                </div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            if ($(".view-more-bx:hidden").length <= 4) {
                                $("#loadmorefaq").hide();
                            }
                            $(".view-more-bx").slice(0, 4).show();
                            if ($(".view-more-bx:hidden").length != 0) {
                                $("#loadmorefaq").show();
                            }
                            $("#loadmorefaq").on("click", function (e) {
                                e.preventDefault();
                                if ($(".view-more-bx:hidden").length > 0) {
                                    $(".view-more-bx:hidden").slice(0, 2).slideDown();
                                    if ($(".view-more-bx:hidden").length === 0) {
                                        $("#loadmorefaq").text("No More to view");
                                    }
                                }
                            });
                        </script>
                    </div>
                </div>
                <!-- Footer text -->
                <div class="row">
                    <div class="col-12 faqs pt-5">
                        <h2>About Cardiology and&nbsp;Heart Surgeons in India</h2>
                        <p>
                            Cardiology is the branch of medicine that focuses on heart-related disorders. It plays a pivotal role in managing conditions such as arrhythmias, coronary artery disease, atherosclerosis, angina, cardiac arrest,
                            heart failure, heart valve problems, heart abnormalities, etc.
                        </p>
                        <p>
                            Cardiologists and cardiac surgeons work together to provide comprehensive cardiovascular care. While cardiologists specialize in non-invasive diagnostic procedures, cardiac surgeons perform surgical interventions
                            such as open-heart surgeries, coronary artery bypass surgery, heart valve repairs, etc.
                        </p>
                        <h3>Criteria to Choose the Best Cardiac Surgeon in India</h3>
                        <p>To choose the best cardiac surgeon in India, follow the given points:</p>
                        <p><strong>Check Credentials and Expertise:</strong></p>
                        <ul>
                            <li>Verify the credentials and assess the specific expertise of the specialist under consideration.&nbsp;</li>
                            <li>Make sure they hold board certification and possess the necessary training and qualifications.</li>
                        </ul>
                        <p><strong>Patient Reviews:</strong></p>
                        <ul>
                            <li>To assess a doctor's expertise, consider checking Google reviews from other patients who have received treatment from that doctor.</li>
                        </ul>
                        <p><strong>Waiting Time and Accessibility</strong></p>
                        <ul>
                            <li>Check the wait time for an initial doctor's appointment.&nbsp;</li>
                            <li>Also, confirm the doctor's convenient location for regular follow-up visits.</li>
                        </ul>
                        <p><strong>Evaluate the Hospital:&nbsp;</strong></p>
                        <ul>
                            <li>Consider the hospital where the doctor practices and ensure it provides the necessary resources and technology for diagnosis and treatment.</li>
                        </ul>
                        <p><strong>Schedule Consultation:</strong></p>
                        <ul>
                            <li>Once you have identified a potential cardiologist or cardiac surgeon, schedule consultations to discuss treatment approaches and the procedures they perform.</li>
                        </ul>
                        <p>In addition to these, make sure the doctor speaks a language you are comfortable with and check if your insurance will cover the doctor's charges.</p>
                        <h3>What Procedures Do Cardiac Surgeons Perform?</h3>
                        <p>Cardiologists focus on non-surgical approaches to manage cardiac issues. Common procedures performed by the best heart surgeons in India include the following:</p>
                        <ul>
                            <li><strong>Coronary angioplasty and stent implantation -</strong>&nbsp;To improve blood flow to the heart</li>
                            <li><strong>Thrombolytic therapy -&nbsp;</strong>To dissolve a blood clot that is narrowing or blocking a coronary artery</li>
                            <li><strong>Electrocardiogram (ECG):&nbsp;</strong>To measure the heart's electrical activity to identify heart attacks</li>
                            <li><strong>Cardiac catheterization -&nbsp;</strong>To diagnose and treat heart conditions such as irregular heartbeats (arrhythmia), chest pain (angina), heart valve problems, etc.</li>
                            <li><strong>Angioplasty -&nbsp;</strong>To open blocked coronary arteries caused by coronary artery disease</li>
                            <li><strong>Pacemaker implantation:</strong>&nbsp;Surgically places a device that regulates heart rhythm.</li>
                        </ul>
                        <p>Whether you require preventive measures or diagnostics, the best heart surgeon in india&nbsp;can help you with your treatment journey.</p>
                        <p>
                            If you are in need of heart surgery, your cardiologist will likely recommend that you consult with a cardiac surgeon. This is because a cardiac surgeon specializes in performing surgical procedures on the heart
                            and its blood vessels. Consulting with a cardiac surgeon will ensure that you receive the most appropriate and specialized care for your condition.
                        </p>
                        <p>Heart surgeons are involved in operative interventions and minimally invasive procedures. Common procedures performed by the topcardiac surgeonss in India include the following:</p>
                        <ul>
                            <li><strong>Coronary artery bypass graft surgery (CABG) -&nbsp;</strong>To improve blood flow to the heart muscle and reduce angina</li>
                            <li><strong>Valve replacement or repair -</strong>&nbsp;To repair or replace damaged heart valves</li>
                            <li><strong>Heart transplantation -&nbsp;</strong>&nbsp;To replace a failing heart with a healthier donor heart</li>
                            <li><strong>Atrial septal defect (ASD) or ventricular septal defect (VSD) repair -&nbsp;</strong>To close holes in the wall between the heart chambers&nbsp;</li>
                        </ul>
                        <p>If you require advanced treatments, the cardiac surgeons can help you towards a healthier heart.</p>
                        <h2>Why Choose Vaidam for Cardiac Treatment in India?</h2>
                        <p>
                            At Vaidam, we recognize the urgency of addressing heart problems. That's why we have partnered with the best heart specialists in India. Our experienced medical team is well-equipped to handle even the most
                            complex cases with the highest level of care and professionalism.
                        </p>
                        <p>
                            Vaidam is a leading global healthcare assistance company that receives 800+ cardiac inquiries daily. We have assisted patients not only from India but also from more than 125 countries across the world. So, if
                            you seek high-quality medical services abroad, we are here to assist you in scheduling an appointment with a specialist doctor.
                        </p>
                        <p>Don't let your health suffer any longer. Reach out to us, and let us help you get the medical care you deserve!</p>
                    </div>
                </div>
                <!-- Reviewer Card -->
                <div class="row">
                    <div class="col-12 faqs py-4">
                        <div class="reviewer bg-success-subtle d-flex flex-column flex-md-row align-items-center p-3 gap-3 rounded-4">
                            <img src="https://www.vaidam.com/sites/default/files/pictures/picture-4003-1697027815.jpg" loading="lazy" class="rounded-3" width="108" height="102" alt="Dr. Nishtha Kalra" title="Reviewer-Name" />
                            <div class="reviewer-descrip">
                                <p class="fw-semibold fs-5">
                                    This Content meets the Vaidam <a href="https://www.vaidam.com/editorial-policy" class="link-underline" title="Editorial Policy"><strong>Editorial Policy</strong></a> and is medically reviewed by
                                </p>
                                <p class="mb-0">
                                    <a href="https://www.vaidam.com/medical-content-reviewer/dr-nishtha-kalra" target="_blank" class="link-underline" title="Reviewer-Name"><strong>Dr. Nishtha Kalra</strong></a> - With over 13 years of
                                    experience, excels as a medical content reviewer. Holding a Bachelor's in Dentistry and a Master's in Healthcare Administration, she bridges intricate medical concepts and the broader audience. Her
                                    expertise includes simplifying complex data, ensuring precise content, and conveying medical concepts clearly.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Footer Links -->
                <div class="row pt-5 pb-3">
                    <div class="col-12 related-link-box mb-4">
                        <div class="p-4 rounded-4 border bg-light">
                            <p class="fs-3 fw-semibold mb-1">Top Doctors By Department in Cities</p>
                            <ul>
                                <li><a title="Best Cardiac Surgeons in Bangalore" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/bangalore"> Best Cardiac Surgeons in Bangalore </a></li>
                                <li><a title="Best Cardiac Surgeons in Chennai" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/chennai"> Best Cardiac Surgeons in Chennai </a></li>
                                <li><a title="Best Cardiac Surgeons in Gurgaon" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/gurgaon"> Best Cardiac Surgeons in Gurgaon </a></li>
                                <li><a title="Best Cardiac Surgeons in Hyderabad" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/hyderabad"> Best Cardiac Surgeons in Hyderabad </a></li>
                                <li><a title="Best Cardiac Surgeons in Mumbai" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/mumbai"> Best Cardiac Surgeons in Mumbai </a></li>
                                <li><a title="Best Cardiac Surgeons in New Delhi" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/new-delhi"> Best Cardiac Surgeons in New Delhi </a></li>
                                <li><a title="Best Cardiac Surgeons in Noida" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india/noida"> Best Cardiac Surgeons in Noida </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 related-link-box mb-4">
                        <div class="p-4 rounded-4 border bg-light">
                            <p class="fs-3 fw-semibold mb-1">Cost of Medical Procedure</p>
                            <ul>
                                <li><a title="Heart Surgery Cost in India" href="https://www.vaidam.com/heart-surgery-cost-india"> Heart Surgery Cost in India </a></li>
                                <li><a title="AICD Implantation Cost in india" href="https://www.vaidam.com/search/aicd/india"> AICD Implantation Cost in india </a></li>
                                <li><a title="CRT-D Implant Cost in india" href="https://www.vaidam.com/search/crt-d-implant-cardiac-resynchronization-therapy/india"> CRT-D Implant Cost in india </a></li>
                                <li><a title="Valve Replacement Cost in india" href="https://www.vaidam.com/valve-replacement-surgery-cost-india"> Valve Replacement Cost in india </a></li>
                                <li><a title="Heart Bypass Surgery Cost in india" href="https://www.vaidam.com/heart-bypass-surgery-cost-india"> Heart Bypass Surgery Cost in india </a></li>
                                <li><a title="Device closure for PDA Cost in india" href="https://www.vaidam.com/search/device-closure-for-pda/india"> Device closure for PDA Cost in india </a></li>
                                <li><a title="ASD (Atrial Septal Defect) Closure Cost in india" href="https://www.vaidam.com/asd-device-closure-cost-india"> ASD (Atrial Septal Defect) Closure Cost in india </a></li>
                                <li><a title="Angiography Cost in india" href="https://www.vaidam.com/search/angiography/india"> Angiography Cost in india </a></li>
                                <li><a title="Device closure for ASD Cost in india" href="https://www.vaidam.com/search/device-closure-for-asd/india"> Device closure for ASD Cost in india </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 related-link-box mb-4">
                        <div class="p-4 rounded-4 border bg-light">
                            <p class="fs-3 fw-semibold mb-1">Top Doctors By Procedure</p>
                            <ul>
                                <li><a title="Best AICD Implantation Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/aicd/india"> Best AICD Implantation Doctors in india </a></li>
                                <li>
                                    <a title="Best CRT-D Implant Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/crt-d-implant-cardiac-resynchronization-therapy/india">
                                        Best CRT-D Implant Doctors in india
                                    </a>
                                </li>
                                <li><a title="Best Valve Replacement Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/valve-replacement/india"> Best Valve Replacement Doctors in india </a></li>
                                <li>
                                    <a title="Best Heart Bypass Surgery Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/heart-bypass-surgery-cabg/india"> Best Heart Bypass Surgery Doctors in india </a>
                                </li>
                                <li>
                                    <a title="Best ASD (Atrial Septal Defect) Closure Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/asd-atrial-septal-defect-closure/india">
                                        Best ASD (Atrial Septal Defect) Closure Doctors in india
                                    </a>
                                </li>
                                <li><a title="Best Angiography Doctors in india" href="https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/angiography/india"> Best Angiography Doctors in india </a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 related-link-box mb-4">
                        <div class="p-4 rounded-4 border bg-light">
                            <p class="fs-3 fw-semibold mb-1">Top Cardiac Hospitals in Cities</p>
                            <ul>
                                <li><a title="Best Cardiac Hospitals in Bangalore" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/bangalore"> Best Cardiac Hospitals in Bangalore </a></li>
                                <li><a title="Best Cardiac Hospitals in Chennai" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/chennai"> Best Cardiac Hospitals in Chennai </a></li>
                                <li><a title="Best Cardiac Hospitals in Gurgaon" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/gurgaon"> Best Cardiac Hospitals in Gurgaon </a></li>
                                <li><a title="Best Cardiac Hospitals in Hyderabad" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/hyderabad"> Best Cardiac Hospitals in Hyderabad </a></li>
                                <li><a title="Best Cardiac Hospitals in Mumbai" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/mumbai"> Best Cardiac Hospitals in Mumbai </a></li>
                                <li><a title="Best Cardiac Hospitals in New Delhi" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/new-delhi"> Best Cardiac Hospitals in New Delhi </a></li>
                                <li><a title="Best Cardiac Hospitals in Noida" href="https://www.vaidam.com/hospitals/cardiology-and-cardiac-surgery/india/noida"> Best Cardiac Hospitals in Noida </a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <script type="text/javascript">
            var load_more_page = 3;
            var data_offset = 15;
            var data_limit = 15;
            function showMoreDoctorsIntoList() {
                $("#show_more_doctor").prop("disabled", true);
                $("#show_more_doctor_loader").show();

                let department = "26";
                let country = "IN";
                let city = "";
                let treatment = "";
                let hospitals = "";
                // const $genderMale = $('#qf_gender_male');
                // const $genderFemale = $('#qf_gender_female');
                const $experience = $("#qf_experience");
                const $appt_available = $("#qf_appt_available");

                // Get current data values
                // const gender_male_value = $genderMale.data('value');
                // const gender_female_value = $genderFemale.data('value');
                const experience_value = $experience.data("value");
                // const doctor_gender = $('#qf_gender_male').hasClass('active') ? gender_male_value : gender_female_value;
                const appt_available_value = $appt_available.data("value");

                const currentUrl = window.location.href;
                // doctor_gender: doctor_gender,
                const show_more_post = {
                    department: department,
                    country: country,
                    city: city,
                    treatment: treatment,
                    hospitals: hospitals,
                    years_of_experience_filter: experience_value,
                    appt_available_filter: appt_available_value,
                    page: load_more_page,
                    offset: data_offset,
                    limit: data_limit,
                };
                console.log("show_more_post: ", show_more_post);
                $.ajax({
                    // url: currentUrl,
                    url: "https://www.vaidam.com/doctors/showMoreDoctors",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    data: show_more_post,
                    success: function (response) {
                        // console.log('Show more doctor response: ', response);
                        $("#show_more_doctor_loader").hide();
                        $("#show_more_doctor").prop("disabled", false);
                        load_more_page = parseInt(load_more_page) + 1;
                        data_offset = parseInt(data_offset) + parseInt(data_limit);
                        let doctorsHtml = response.doctorsHtml;
                        if (doctorsHtml) {
                            $(doctorsHtml).insertBefore(".show-more-doctor-div");
                        } else {
                            console.log("No more doctors..!!");
                        }
                    },
                    error: function (xhr) {
                        console.log("Error:", xhr.responseText);
                    },
                });
            }

            function applyExperienceFilterOnDoctorList(e) {
                let years_of_experience = $(e).data("value");
                years_of_experience = years_of_experience == "" ? 20 : "";
                const currentUrl = window.location.href;
                $.ajax({
                    // url: 'http://localhost/vaidamfe_old/index.php/doctors/appliedExpFilter',
                    url: "https://www.vaidam.com/doctors/appliedExpFilter",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    data: { years_of_experience: years_of_experience, currentUrl: currentUrl },
                    success: function (response) {
                        if (response.experience_applied == "success") {
                            location.replace(currentUrl);
                        }
                    },
                    error: function (xhr) {
                        console.log("Error:", xhr.responseText);
                    },
                });
            }

            function applyGenderFilterOnDoctorList(e) {
                let doctor_gender = $(e).data("value");
                // doctor_gender = doctor_gender==''?type:'';
                const currentUrl = window.location.href;
                $.ajax({
                    // url: 'http://localhost/vaidamfe_old/index.php/doctors/appliedGenderFilter',
                    url: "https://www.vaidam.com/doctors/appliedExpFilter",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    data: { doctor_gender: doctor_gender, currentUrl: currentUrl },
                    success: function (response) {
                        if (response.gender_filter_applied == "success") {
                            location.replace(currentUrl);
                        }
                    },
                    error: function (xhr) {
                        console.log("Error:", xhr.responseText);
                    },
                });
            }

            function applyQuickFilter(e) {
                const $clickedElement = $(e);
                const html_tag_id = $clickedElement.attr("id");
                $("#" + html_tag_id + "_loader").show();
                // Cache commonly used selectors
                // const $genderMale = $('#qf_gender_male');
                // const $genderFemale = $('#qf_gender_female');
                const $experience = $("#qf_experience");
                const $appt_available = $("#qf_appt_available");

                // Get current data values
                // const gender_male_value = $genderMale.data('value');
                // const gender_female_value = $genderFemale.data('value');
                let experience_value = $experience.data("value");
                let appt_available_value = $appt_available.data("value");

                // Reset function to handle repetitive tasks
                const resetAttributes = ($element, value) => {
                    $element.removeClass("active").attr("data-value", value).data("value", value);
                };

                // global filter params
                let department = "26";
                let country = "IN";
                let city = "";
                let treatment = "";
                let hospitals = "";
                // Determine the selected value
                let value = "";
                /*if (html_tag_id === 'qf_gender_male') {
            value = gender_male_value === '' ? 'Male' : '';
            $genderFemale.removeClass('active');
            $genderMale.removeClass('active');
            if(value=='Male'){
                $('#'+html_tag_id).addClass('active');
            }
            $('#qf_gender_male')
                .attr('data-value', value)
                .data('value', value);
            $('#qf_gender_female')
                .attr('data-value', '')
                .data('value', '');
        } else if (html_tag_id === 'qf_gender_female') {
            value = gender_female_value === '' ? 'Female' : '';
            $genderMale.removeClass('active');
            $genderFemale.removeClass('active');
            if(value=='Female'){
                $('#'+html_tag_id).addClass('active');
            }
            $('#qf_gender_female')
                .attr('data-value', value)
                .data('value', value);
            $('#qf_gender_male')
                .attr('data-value', '')
                .data('value', '');
        } else if (html_tag_id === 'qf_experience') {
            value = $('#qf_gender_male').hasClass('active') ? gender_male_value : gender_female_value;
            experience_value = experience_value === '' ? '20' : '';
            $experience.removeClass('active');
            if(experience_value=='20'){
                $('#'+html_tag_id).addClass('active');
            }
            $('#qf_experience')
                .attr('data-value', experience_value)
                .data('value', experience_value);
        }*/

                // Determine the selected value dynamically
                /*if (html_tag_id === 'qf_gender_male' || html_tag_id === 'qf_gender_female') {
            const isMale = html_tag_id === 'qf_gender_male';
            const $current = isMale ? $genderMale : $genderFemale;
            const $opposite = isMale ? $genderFemale : $genderMale;

            value = $current.data('value') === '' ? (isMale ? 'Male' : 'Female') : '';
            resetAttributes($opposite, ''); // Reset the opposite gender filter
            resetAttributes($current, value); // Update the current gender filter
            // console.log('value: ', value);
            if (value !== '') $current.addClass('active');
        } else */
                if (html_tag_id === "qf_experience") {
                    // value = $('#qf_gender_male').hasClass('active') ? gender_male_value : gender_female_value;
                    experience_value = experience_value === "" ? "20" : "";
                    resetAttributes($experience, experience_value); // Update experience filter
                    // console.log('experience_value: ', experience_value);
                    if (experience_value !== "") $experience.addClass("active");
                } else if (html_tag_id === "qf_appt_available") {
                    // value = $('#qf_gender_male').hasClass('active') ? gender_male_value : gender_female_value;
                    appt_available_value = appt_available_value === "" ? "Yes" : "";
                    resetAttributes($appt_available, appt_available_value); // Update experience filter
                    if (appt_available_value !== "") $appt_available.addClass("active");
                }

                const currentUrl = window.location.href;

                const qf_post = {
                    // doctor_gender: value,
                    years_of_experience_filter: experience_value,
                    appt_available_filter: appt_available_value,
                    currentUrl: currentUrl,
                    department: department,
                    country: country,
                    city: city,
                    treatment: treatment,
                    hospitals: hospitals,
                };

                if (currentUrl.includes("?n=k")) {
                    qf_post["n"] = "k";
                }

                $.ajax({
                    url: "https://www.vaidam.com/applyDoctorsQuickFilter",
                    type: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "0VA9B1Arg1NRSZa2H7B9hVOMbZCWODkAT9I3hfvr",
                    },
                    data: qf_post,
                    success: function (response) {
                        const doctorsHtml = response.doctorsHtml;
                        if (doctorsHtml) {
                            $("#main-doctor-div").html(doctorsHtml);
                            // $('#'+html_tag_id).toggleClass('active');
                        } else {
                            console.log("No more doctors available.");
                        }
                        $("#" + html_tag_id + "_loader").hide();
                    },
                    error: function (xhr) {
                        console.error("Error occurred:", xhr.responseText);
                        $("#" + html_tag_id + "_loader").hide();
                    },
                });
            }
            if (countryCode == "IN") {
                $("#qf_appt_available").removeClass("qf_appt_available_hide").addClass("qf_appt_available_show");
            } else {
                $("#qf_appt_available").removeClass("qf_appt_available_show").addClass("qf_appt_available_hide");
            }
            $(document).ready(function () {
                var urlCountry = getCookie("SetPageCountry");
                var preferredLocation = getCookie("preferredLocation").replace(/\+/g, " ");
                var countryCode = getCookie("countryCode");
                if (urlCountry == "AE" && preferredLocation == "United Arab Emirates" && countryCode == "AE") {
                    $("#emirates-id-block3").show();
                    $(".stategroup").show();
                    $("#city").attr("placeholder", "Enter Emirates");
                    $("#city").replaceWith(
                        '<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                    );
                } else if (countryCode == "IN") {
                    $("#emirates-id-block3").hide();
                    $(".stategroup").show();
                    $("#city").attr("placeholder", "Enter city");
                    $("#city").replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                    autocomplete(document.getElementById("city"), cities);
                } else {
                    $("#emirates-id-block3").hide();
                    $(".stategroup").hide();
                }

                $("#country").on("change", function () {
                    var selectedCountry = $(this).val();
                    if (selectedCountry == "AE") {
                        $("#emirates-id-block3").show();
                        $(".stategroup").show();
                        $("#city").attr("placeholder", "Enter Emirates");
                        $("#city").replaceWith(
                            '<select id="city" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                        );
                    } else if (selectedCountry == "IN") {
                        $("#emirates-id-block3").hide();
                        $(".stategroup").show();
                        $("#city").attr("placeholder", "Enter city");
                        $("#city").replaceWith('<input id="city" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                        autocomplete(document.getElementById("city"), cities);
                    } else {
                        $("#emirates-id-block3").hide();
                        $(".stategroup").hide();
                    }
                });
            });
            let destination = "India";
            if (countryCode === "IN" && destination != "India") {
                $("#qf_appt_available").attr("style", "display: none !important;");
            }
        </script>
        <!-- End Body Content Start -->
        <!-- Term and Policy Modal Section Starts-->
        <!-- Terms Modal -->
        <div class="modal" id="formTerms">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header"><span class="modal-title fs-5 fw-bold" id="">Terms of Use</span> <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                    <div class="modal-body" id="terms_of_use"></div>
                    <div class="modal-footer"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
        <!-- Privacy Policy Modal -->
        <div class="modal" id="formPrivacyPolicy">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-lg">
                <div class="modal-content">
                    <div class="modal-header"><span class="modal-title fs-5 fw-bold" id="">Privacy Policy</span> <button type="button" class="btn-close" data-bs-dismiss="modal"></button></div>
                    <div class="modal-body" id="privacy_policy"></div>
                    <div class="modal-footer"><button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button></div>
                </div>
            </div>
        </div>
        <!-- Term and Policy Modal Section Ends-->
        <div id="menu-bottom" class="bottom-menu">
            <a onclick="if (!window.__cfRLUnblockHandlers) return false; setformtype('','','enquiry sticky button','','Footer','','');" href="https://www.vaidam.com/lp/consult-online" class="readmore-outline me-2" title="Need Help">
                Need Help?
            </a>
            <a
                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20http://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india?source=,%20Thank%20you!"
                title="Whatsapp Chat"
                class="readmore whatsapp-color"
            >
                <img loading="lazy" src="https://d3lclm53tbcdw6.cloudfront.net/v2/new-home/images/whatsaap-icon01.webp" alt="Chat with Us" title="Chat with Us" width="30" height="29" class="img-fluid me-1" /> Chat
            </a>
        </div>
        <!-- Sticky buttton for mobile view -->
        <div class="footer-stic-btns">
            <button class="bg-theam border-0 fillter-on-mobile py-2 sticky-send-enquiry-smallscreen text-white">
                <img src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/images/filter-icon.webp" alt="Filter" width="26" height="26" title="Filter" /> <span>Filter</span>
            </button>
            <a
                class="whatsapp-btn-mob doctor_list_wp_sticky wa_button_clicked"
                href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/doctors/cardiology-and-cardiac-surgery/india?source=wpchat_DLSB%20,%20Thank%20you!"
                title="WhatsApp"
            >
                <img src="https://d3lclm53tbcdw6.cloudfront.net/v2/hospital_details/images/whatsapp-icon-white.png" title="Whatsapp Us" alt="Whatsapp Us" /><span>Whatsapp Us</span>
            </a>
        </div>
        <style>
            .footer-stic-btns {
                display: none;
            }
            @media screen and (max-width: 768px) {
                #footerCta,
                #floating-whatsapp {
                    display: none;
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
                    font-size: 0.95em;
                    align-items: center;
                    justify-content: center;
                }
                .whatsapp-btn-mob {
                    background-color: #40c351;
                }
                a.whatsapp-btn-mob span {
                    color: #fff;
                }
                a.whatsapp-btn-mob img {
                    width: 26px;
                    height: 26px;
                }
                .whatsapp-btn-mob span {
                    color: #fff;
                }
            }
        </style>
        <!-- Sticky buttton for mobile view End -->
        <script type="text/javascript" src="https://d3lclm53tbcdw6.cloudfront.net/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/js/multi-nav.js"></script>
        <script type="text/javascript" defer="" src="https://d3lclm53tbcdw6.cloudfront.net/dr_list_v1/js/select2.js"></script>
        <script async="" src="https://d3lclm53tbcdw6.cloudfront.net/revised/js/search_suggest.js" type="text/javascript"></script>
        <script src="https://d3lclm53tbcdw6.cloudfront.net/revised/list_page/custom_js/doctor_list_page.js" type="text/javascript"></script>
        <script src="https://d3lclm53tbcdw6.cloudfront.net/v2/js/countryData.js" type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js" type="text/javascript"></script>
        <script type="text/javascript">
            var usercountryCode = Object.keys(countryNameList).find((key) => countryNameList[key].toLowerCase() === countryName.toLowerCase());
            $("#lead_magnet_country").val(usercountryCode);
            $("#lead_magnet_phone_code").val(country_phone_code[countryCode]);
            $(document).ready(function () {
                if (window.innerWidth <= 768) {
                    $(".ms-main-nav").navigation({
                        sideBarWidth: 300,
                        slideSpeed: 800,
                        subMenuSlideDirection: "right",
                        theme: "overlay", //overlay, bodycollapse, bodyfit
                        triggerButton: "topmenu-btn",
                        backButtonText: "",
                        environment: "development",
                    });
                }

                // Patient review show more
                $(".p-review-row-card").slice(2).hide();
                $("#show-more-reviews").on("click", function () {
                    $(".p-review-row-card:hidden").slice(0, 2).slideDown();
                    if ($(".p-review-row-card:hidden").length === 0) {
                        $(this).hide();
                    }
                });
                // select2 initialization
                $(".select2").select2();
            });
            document.getElementById("year").innerHTML = new Date().getFullYear();
            // filter sticky on desktop
            $(window).scroll(function () {
                if ($(this).scrollTop() > 258) {
                    $(".filter-section").addClass("sticy-filter-bar");
                } else {
                    $(".filter-section").removeClass("sticy-filter-bar");
                }
            });

            //Form Js Start Here
            /*console.log(countryPhnCodeList);
    $(".country").val(countryCode);
    $('.country_phone_code').val(countryPhnCodeList[countryCode]);*/
            //End Form JS Here
            function doGTranslate(lang_pair) {
                if (lang_pair.value) lang_pair = lang_pair.value;
                if (lang_pair == "") return;
                var lang = lang_pair.split("|")[1];
                var plang = location.pathname.split("/")[1];
                if (plang.length != 2 && plang.toLowerCase() != "zh-cn" && plang.toLowerCase() != "zh-tw") plang = "en";
                if (lang == "en") location.href = location.protocol + "//" + location.host + location.pathname.replace("/" + plang + "/", "/") + location.search;
                else location.href = location.protocol + "//" + location.host + "/" + lang + location.pathname.replace("/" + plang + "/", "/") + location.search;
            }

            $(document).ready(function () {
                $(".translateText li").click(function () {
                    doGTranslate($(this).attr("value"));
                });
                $(".lang_opt, .select-lang-mob select").on("change", function () {
                    doGTranslate($(this).val());
                });
            });

            $(document).ready(function () {
                if (window.innerWidth <= 768) {
                    $(".searchbar").click(function () {
                        $(".vh-search").addClass("search-100-on-mob");
                    });
                    $(".close-serach-100").click(function () {
                        $(".vh-search").removeClass("search-100-on-mob");
                    });
                }
            });

            $(document).ready(function () {
                if (window.innerWidth <= 768) {
                    $(window).scroll(function () {
                        if ($(this).scrollTop() > 100) {
                            $("#menu-bottom").addClass("show");
                        } else {
                            $("#menu-bottom").removeClass("show");
                        }
                    });
                }
            });

            function getDataOnClick(e) {
                var userIntentName = $(e).attr("userIntentName");
                var userIntentUrl = $(e).attr("userIntentUrl");
                var hospitalName = $(e).attr("hospitalName");
                var pageSource = window.location.href;
                var urlDepartment = $(e).attr("urlDepartment");
                var urlSpeciality = $(e).attr("urlSpeciality");
                var btnType = $(e).attr("btnType");
                var pageType = $(e).attr("pageType");
                var clickUrl = $(e).attr("clickUrl");
                setFormData(userIntentName, userIntentUrl, pageSource, btnType, pageType, clickUrl, hospitalName, urlDepartment, urlSpeciality);
            }

            function setFormData(userIntentName, userIntentUrl, pageSource, btnType, pageType, clickUrl, hospitalName = null, urlDepartment = null, urlSpeciality = null) {
                if (userIntentName != "") {
                    $.cookie("User_Intent_Name", userIntentName, { expires: 1, path: "/" });
                } else {
                    $.cookie("User_Intent_Name", null, { expires: 1, path: "/" });
                }

                if (userIntentUrl != "") {
                    $.cookie("User_Intent_Url", userIntentUrl, { expires: 1, path: "/" });
                } else {
                    $.cookie("User_Intent_Url", null, { expires: 1, path: "/" });
                }

                if (hospitalName != "") {
                    $.cookie("hospital_Intent_Name", hospitalName, { expires: 1, path: "/" });
                } else {
                    $.cookie("hospital_Intent_Name", null, { expires: 1, path: "/" });
                }

                if (pageSource != "") {
                    $.cookie("page_source", pageSource, { expires: 1, path: "/" });
                } else {
                    $.cookie("page_source", null, { expires: 1, path: "/" });
                }

                if (urlDepartment != "") {
                    $.cookie("urlDepartment", urlDepartment, { expires: 1, path: "/" });
                } else {
                    $.cookie("urlDepartment", null, { expires: 1, path: "/" });
                }

                if (urlSpeciality != "") {
                    $.cookie("urlSpeciality", urlSpeciality, { expires: 1, path: "/" });
                } else {
                    $.cookie("urlSpeciality", null, { expires: 1, path: "/" });
                }

                $.cookie("Form_Location", btnType, { expires: 1, path: "/" });
                $.cookie("Page_Type", pageType, { expires: 1, path: "/" });
                if (clickUrl != "") {
                    window.location.href = clickUrl;
                } else {
                    localStorage.setItem("current_lp_url", window.location.href);
                    var cus_url = base_url + "/lp/consult-online";
                    let new_url = cus_url.replace("/lp/lp/", "/lp/");
                    window.location.href = new_url;
                }
            }
            var urlCountry = getCookie("SetPageCountry");
            var preferredLocation = getCookie("preferredLocation");
            var preferredLocation = preferredLocation.replace(/\+/g, " ");
            var countryCode = getCookie("countryCode");
            if (urlCountry == "AE" && preferredLocation == "United Arab Emirates" && countryCode == "AE") {
                $("#emirates-id-block").show();
                $(".stategroup2").show();
                $("#city2").attr("placeholder", "Enter Emirates");
                $("#city2").replaceWith(
                    '<select id="city2" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                );
            } else if (urlCountry == "IN" && preferredLocation == "India" && countryCode == "IN") {
                $("#emirates-id-block").hide();
                $(".stategroup2").show();
                $("#city2").attr("placeholder", "Enter city");
                $("#city2").replaceWith('<input id="city2" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                autocomplete(document.getElementById("city2"), cities);
            }

            $("#country2").on("change", function () {
                var selectedCountry = $(this).val();

                if (selectedCountry == "AE") {
                    $("#emirates-id-block").show();
                    $(".stategroup2").show();
                    $("#city2").attr("placeholder", "Enter Emirates");
                    $("#city2").replaceWith(
                        '<select id="city2" class="form-control new-form-control" name="city"><option value="">Select Emirates</option><option value="Abu Dhabi">Abu Dhabi</option><option value="Ajman">Ajman</option><option value="Al Ain">Al Ain</option><option value="Al Qusais">Al Qusais</option><option value="Dubai">Dubai</option><option value="Ras Al Khaimah">Ras Al Khaimah</option><option value="Sharjah">Sharjah</option></select>'
                    );
                } else if (selectedCountry == "IN") {
                    $("#emirates-id-block").hide();
                    $(".stategroup2").show();
                    $("#city2").attr("placeholder", "Enter city");
                    $("#city2").replaceWith('<input id="city2" class="form-control new-form-control" type="text" name="city" placeholder="Select City">');
                    autocomplete(document.getElementById("city2"), cities);
                } else {
                    $("#emirates-id-block").hide();
                    $(".stategroup2").hide();
                }
            });
            $("#country").on("change", function () {
                var selectedCountry = $(this).val();
                if (selectedCountry == "AE") {
                    $(".stategroup").show();
                }
            });
        </script>
        <div class="cgw-ext" data-ext-id="pdnenlnelpdomajfejgapbdpmjkfpjkp"></div>
        <div
            class="cgw_main_container"
            style="
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, sans-serif, 'Apple Color Emoji', 'Segoe UI Emoji', 'Segoe UI Symbol';
                line-height: 18px;
                user-select: text;
                font-weight: normal;
                letter-spacing: normal;
                -webkit-font-smoothing: auto;
            "
        ></div>
        <iframe
            allow="join-ad-interest-group"
            data-tagging-id="AW-989645465"
            data-load-time="1742908472779"
            height="0"
            width="0"
            src="https://td.doubleclick.net/td/rul/989645465?random=1742908472758&amp;cv=11&amp;fst=1742908472758&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je53l1v879240773za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=102482433~102788824~102803279~102813109~102923816~102926327&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.vaidam.com%2Fdoctors%2Fcardiology-and-cardiac-surgery%2Findia&amp;ref=https%3A%2F%2Fwww.vaidam.com%2Fdoctors&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Best%20Cardiac%20Surgeons%20in%20India%20-%20Top%2010%20Heart%20Specialists&amp;npa=0&amp;pscdl=noapi&amp;auid=794519535.1741836252&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B134.0.6998.118%7CNot%253AA-Brand%3B24.0.0.0%7CGoogle%2520Chrome%3B134.0.6998.118&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
            style="display: none; visibility: hidden;"
        ></iframe>
        <button id="cgw_action_btn" tabindex="-1" style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;"></button>
