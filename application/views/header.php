
<header>
    <div class="container register-section"> </div>
    <section class="bg-theam py-2">
        <div class="container logo-section">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-4 col-sm-7 col-6 text-start">
                     <a href="<?php echo base_url('index')?>"" class="vh-logo text-white lh-1"> 
                        <span class="logo fw-semibold">V.com</span> 
                        <span class="tagline text-uppercase border-top border-white">For Medical Procedures</span> </a> </div>
                <div class="col-lg-3 col-md-2 col-sm-3 col-3 headerimgaes"> <img class="desktop-nabh" 
                src="<?php echo base_url('assets/img').'/nabh-small-logo.webp'?>" width="56" height="56" alt="NABH" title="NABH">
                    <div class="mobile-search align-items-center" id="google_translate_element mobile-lang">
                        <select class="lang_opt gray-600 border border-secondary-subtle">
                            <option value="">Select Language</option>
                            <?php
                            foreach ($languages as $language => $val) {
                                echo "<option value='en|" . $val . "'>" . $language . "</option>";
                            }
                            ?>
                        </select>
                    </div>
                </div> <!-- Nav Bar Start -->
                <div class="col-sm-2 col-3 d-md-none menuhamburger-icon topmenu-btn">
                    <a href="#"  class="icon" id="menu-bar" title="Menu-Bar">
                        <img src="<?php echo base_url('assets/img').'/white-hamburger-icon.png'?>" width="52" height="44" class="menuhamburger" alt="menu items" title="Menu Items">
                    </a>
                </div> <!-- Nav Bar End --> <!-- Search Bar Start -->
                <div class="col-md-4 sm-12 col-12 vh-search d-flex align-items-center">
                    <div class="banner-search hide-for-mobile">
                        <div class="searchbar-home col-12">
                            <div class="searchbar">
                                <input type="text" class="searchTerm border border-secondary-subtle" id="search_find_new" placeholder="Search by disease, procedure, doctor or hospital">
                                <button class="search-button">
                                    <img src="<?php echo base_url('assets/img').'/search.png'?>" width="21" height="21" alt="Search" title="Search">
                                </button>
                            </div>
                            <div id="search-suggestionsblock" style="display: none;">
                            </div>
                            <img class="mobile-nabh" src="<?php echo base_url('assets/img').'/nabh-small-logo.webp'?>" width="56" height="56" alt="NABH" title="NABH">
                            <span class="bg-danger close-serach-100 text-white fw-bolder fs-5 rounded-circle">X</span>
                        </div>
                    </div>
                </div> <!-- Search Bar End -->
                <div class="col-lg-2 col-md-2 contactMenu d-none d-md-block">
                    <div id="topContact" class="text-white hidden-xs hidden-xs"> 
                        <a href="#" class="btn btn-danger" title="Get a FREE quote"> Get a FREE quote </a> </div>
                </div>
            </div>
        </div>
    </section>
    <section class="nav-section bg-theam-2">
        <div class="container">
            <div class="row nav-bar">
                <div class="col-md-8 col-sm-12 col-12">
                    <nav class="ms-main-nav">
                        <div class="ms-menu-inner">
                            <ul class="main-menu">
                                <li class="active-trail active nav-list-item"> <a href="<?php echo base_url("index") ?>" title="Home" class="active-trail active nav-link">Home</a> </li>
                                <li class="nav-list-item drop">
                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a href="#" title="Hospitals">Hospitals</a> </div>
                                    <ul class="drop-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <?php
                                        foreach ($countries as $country => $departments) {
                                            echo "<li class='drop-submenu'>";
                                            echo "<div class='has-arrow'> <span class='ms-nav-arrow'>&nbsp;</span> <a class='drop-link' href='#' title='" . $country . "'>" . ucwords($country) . "</a> </div>";
                                            echo "<ul class='drop-menu nav-bar'>";
                                            foreach ($departments as $department) {
                                                echo "<li> <a href='".base_url("hospitals/hospitals_country_dept/")."$country/"."$department"."' title='" . $department . "'>" . strtoupper($department) . "</a> </li>";
                                            }
                                            echo "</ul>";
                                            echo "</li>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="nav-list-item drop">
                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a href="#" title="Doctors" class="nav-link">Doctors</a> </div>
                                    <ul class="drop-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <?php
                                        foreach ($countries as $country => $departments) {
                                            echo "<li class='drop-submenu'>";
                                            echo "<div class='has-arrow'> <span class='ms-nav-arrow'>&nbsp;</span> <a class='drop-link' href='#' title='" . $country . "'>" . ucwords($country) . "</a> </div>";
                                            echo "<ul class='drop-menu nav-bar'>";
                                            foreach ($departments as $department) {
                                                echo "<li> <a href='".base_url("hospitals/hospitals_country_dept/")."$country/"."$department"."' title='" . $department . "'>" . strtoupper($department) . "</a> </li>";
                                            }
                                            echo "</ul>";
                                            echo "</li>";
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="nav-list-item drop">
                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a href="<?php echo base_url('cost')?>" title="Cost" class="nav-link">Cost</a> </div>
                                    <!-- <ul class="drop-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="India">India</a> </div>
                                            <ul class="drop-menu">
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="CARDIOLOGY">CARDIOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Heart Surgery">Heart Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ONCOLOGY">ONCOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cancer Treatment">Cancer Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="NEUROSURGERY">NEUROSURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Neurosurgery">Neurosurgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ORTHOPEDICS">ORTHOPEDICS</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Orthopedic Surgery">Orthopedic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="IVF">IVF</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="IVF Treatment">IVF Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="GYNECOLOGY">GYNECOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Gynaecological Surgery">Gynaecological Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="HEMATOLOGY">HEMATOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Bone Marrow Transplant">Bone Marrow Transplant</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="COSMETIC">COSMETIC</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cosmetic Surgery">Cosmetic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="SPINE SURGERY">SPINE SURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Spine Surgery">Spine Surgery</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="Turkey">Turkey</a> </div>
                                            <ul class="drop-menu">
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="CARDIOLOGY">CARDIOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Heart Surgery">Heart Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ONCOLOGY">ONCOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cancer Treatment">Cancer Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="NEUROSURGERY">NEUROSURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Neurosurgery">Neurosurgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ORTHOPEDICS">ORTHOPEDICS</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Orthopedic Surgery">Orthopedic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="IVF">IVF</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="IVF Treatment">IVF Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="GYNECOLOGY">GYNECOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Gynaecological Surgery">Gynaecological Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="COSMETIC">COSMETIC</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cosmetic Surgery">Cosmetic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="SPINE SURGERY">SPINE SURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Spine Surgery">Spine Surgery</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="Thailand">Thailand</a> </div>
                                            <ul class="drop-menu">
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="CARDIOLOGY">CARDIOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Heart Surgery">Heart Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ONCOLOGY">ONCOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cancer Treatment">Cancer Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="NEUROSURGERY">NEUROSURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Neurosurgery">Neurosurgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ORTHOPEDICS">ORTHOPEDICS</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Orthopedic Surgery">Orthopedic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="IVF">IVF</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="IVF Treatment">IVF Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="GYNECOLOGY">GYNECOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Gynaecological Surgery">Gynaecological Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="COSMETIC">COSMETIC</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cosmetic Surgery">Cosmetic Surgery</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="SPINE SURGERY">SPINE SURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Spine Surgery">Spine Surgery</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="Germany">Germany</a> </div>
                                            <ul class="drop-menu">
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="ONCOLOGY">ONCOLOGY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Cancer Treatment">Cancer Treatment</a> </li>
                                                    </ul>
                                                </li>
                                                <li class="drop-submenu">
                                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a class="drop-link" href="javascript:void" title="NEUROSURGERY">NEUROSURGERY</a> </div>
                                                    <ul class="drop-menu nav-bar">
                                                        <li> <a href="#" title="Neurosurgery">Neurosurgery</a> </li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> -->
                                </li>
                                <li class="nav-list-item drop">
                                    <div class="has-arrow"> <span class="ms-nav-arrow">&nbsp;</span> <a href="javascript:void(0)" title="Knowledge" class="nav-link">Knowledge</a> </div>
                                    <ul class="drop-menu" role="menu" aria-labelledby="dropdownMenu">
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <a class="drop-link" href="<?php echo base_url('blogs')?>">Blogs</a> </div>
                                        </li>
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <a class="drop-link" href="<?php echo base_url('videos')?>">Videos</a> </div>
                                        </li>
                                        <li class="drop-submenu">
                                            <div class="has-arrow"> <a class="drop-link" href="<?php echo base_url('travelvisa')?>">Medical Visa</a> </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-list-item"> <a href="<?php echo base_url('testimonials')?>" title="Patient Stories" class="nav-link">Patient Stories</a> </li>
                                <li class="nav-list-item"> <a href="<?php echo base_url('consultonline')?>" title="FREE Consult" class="nav-link">FREE Consult</a> </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="desktop-lang col-md-4 sm-12 col-12 d-flex align-items-center justify-content-end" id="google_translate_element"> 
                    <select class="lang_opt gray-600 border border-secondary-subtle">
                        <option value="">Select Language</option>
                        <?php
                        foreach ($languages as $language => $val) {
                            echo "<option value='en|" . $val . "'>" . $language . "</option>";
                        }
                        ?>
                    </select> 
                </div>
            </div>
        </div>
    </section>
</header> 