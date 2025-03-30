
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
                            aria-hidden="true">×</span> </button> </div>
                <div class="modal-body" id="terms_of_use"> </div>
                <div class="modal-footer"> <button type="button" class="btn btn-secondary px-4 py-1"
                        data-bs-dismiss="modal">Close</button>
                    <!-- <button type="button" class="btn btn-primary">Save changes</button> --> </div>
            </div>
        </div>
    </div> <!-- End Modal Terms --> <!-- Start Modal Privacy Policy -->
    <div class="modal fade" id="formPrivacyPolicy" tabindex="-1" role="dialog"
        aria-labelledby="PrivacyPolicyCenterTitle" aria-hidden="true">
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
                    <li class="breadcrumb-item"><a href="https://www.vaidam.com">Home</a></li>
                    <li class="breadcrumb-item"><a href="https://www.vaidam.com/knowledge-center">Knowledge Center</a>
                    </li>
                    <li class="breadcrumb-item"><a href="https://www.vaidam.com/knowledge-center/medical-travel">Medical
                            Travel</a></li>
                    <li class="breadcrumb-item"><span
                            title="Navigating Post-Surgical Recovery Abroad: Practical Tips for a Smooth Healing Process">Navigating
                            Post-Surgical Recovery Abroad: Practical Tips for a Smooth Healing Process</span></li>
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
                                <figure class="figure w-100 article-image"> <img alt=""
                                        src="https://www.vaidam.com/core/storage/images/2025-03-17WhatsApp Image 2025-03-16 at 3.04.00 PM.jpeg">
                                </figure>
                            </div>
                            <div class="col-12 article-heading">
                                <h1>Navigating Post-Surgical Recovery Abroad: Practical Tips for a Smooth Healing
                                    Process</h1>
                                <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4">
                                    <div class="auth-name d-flex gap-2 align-items-center"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                            class="d-md-none" alt="Author" width="16" height="16"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/admin-white-icon.webp"
                                            class="d-none d-md-block" alt="Author" width="16" height="16"> <span
                                            class="text-uppercase"> <a
                                                href="https://www.vaidam.com/knowledge-center?author_name=mariyum&amp;author_uid=10344">mariyum</a>
                                        </span> </div>
                                    <div class="pub-date d-flex gap-2 align-items-center"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                            class="d-md-none" alt="Published Date" width="16" height="16"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/calender-white-icon.webp"
                                            class="d-none d-md-block" alt="Published Date" width="16" height="16"> <span
                                            class="text-uppercase"> Last Updated Date: MARCH 17, 2025 </span> </div>
                                    <div class="pub-date d-flex gap-2 align-items-center"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                            class="d-md-none" alt="Published Date" width="16" height="16"> <img
                                            src="https://www.vaidam.com/assets/knowledge_center/calender-white-icon.webp"
                                            class="d-none d-md-block" alt="Published Date" width="16" height="16"> <span
                                            class="text-uppercase"> Created Date: MARCH 16, 2025 </span> </div>
                                </div>
                            </div>
                        </div> <!-- table content -->
                        <div class="row">
                            <div class="col-12">
                                <div class="table-of-content p-4 rounded-4 mb-4">
                                    <h3 class="h2">Table of Content</h3> <a class="d-block h5 theam-color py-1"
                                        href="#challenges-and-hurdles-of-recovering-after-surgery-abroad">Challenges and
                                        Hurdles of Recovering After Surgery Abroad</a> <a
                                        class="d-block h5 theam-color py-1"
                                        href="#effective-strategies-for-pain-management-and-healing-abroad">Effective
                                        Strategies for Pain Management and Healing Abroad</a> <a
                                        class="d-block h5 theam-color py-1"
                                        href="#easing-the-transition-to-a-new-environment-during-recovery">Easing the
                                        Transition to a New Environment During Recovery</a> <a
                                        class="d-block h5 theam-color py-1"
                                        href="#why-follow-up-care-is-essential-for-lasting-recovery-">Why Follow-Up Care
                                        is Essential for Lasting Recovery?</a> <a class="d-block h5 theam-color py-1"
                                        href="#finding-strength-in-your-recovery-journey">Finding Strength in Your
                                        Recovery Journey</a>
                                </div>
                            </div>
                        </div>
                        <div class="blog-content"> <br> <!-- end sahil code  -->
                            <div class="article-img">
                                <p class="rtecenter"></p>
                                <p class="rtejustify">One of the most exciting trends of the last decade has been
                                    medical tourism. This trend continues to grow with the immense popularity of people
                                    travelling across borders to seek affordable, high-end medical care.&nbsp;</p>
                                <p class="rtejustify">According to the International Journal of Health Services, the
                                    global medical tourism market is projected to be worth around&nbsp;<strong>$179.6
                                        billion by 2026</strong>, with an exceptional growth rate of&nbsp;<strong>21.1%
                                        from 2021 to 2026</strong>. Due to their advanced healthcare systems and
                                    affordable costs, Thailand, India, Mexico, Singapore, and Turkey are some of the
                                    most popular destinations for surgeries and other medical procedures.&nbsp;</p>
                                <p class="rtejustify">Though the idea of saving costs to avail of expert care is
                                    fascinating, recovering from surgery in a foreign nation is a complex procedure.
                                    Different healthcare systems, post-surgical care, and language barriers all work
                                    against an easy recovery. This is why creating an easy-to-follow aftercare plan is
                                    really important to ensure smooth and comfortable healing during the recovery phase.
                                </p>
                                <p class="rtejustify">This blog is dedicated to practical tips for navigating surgical
                                    recovery or post-surgery care in a foreign country, from managing pain and nutrition
                                    to follow-up care arrangements. Whether you are recovering from a planned surgery
                                    abroad or encounter unexpected surgery when travelling, these tips will help you
                                    heal well and avoid setbacks.&nbsp;</p>
                                <div class="blog-bg-light">
                                    <p class="rtejustify"><strong>Do You Know?</strong></p>
                                    <ul>
                                        <li class="rtejustify">Patients who seek medical treatment abroad often save
                                            between&nbsp;<strong>50% and 80%</strong>&nbsp;on healthcare costs.</li>
                                        <li class="rtejustify">India has a medical procedure success rate of
                                            over&nbsp;<strong>95%</strong>&nbsp;for cardiac surgeries
                                            and&nbsp;<strong>90%</strong>&nbsp;for organ transplants, making it a
                                            trusted destination for complex treatments.</li>
                                        <li class="rtejustify">&nbsp;Medical visas in India are processed quickly,
                                            making it easier for international patients to access timely care.</li>
                                    </ul>
                                </div>
                                <h2 id="challenges-and-hurdles-of-recovering-after-surgery-abroad">Challenges and
                                    Hurdles of Recovering After Surgery Abroad</h2>
                                <p class="rtejustify">Healing from surgery is already physically and emotionally
                                    demanding. When you add the stress of being in a foreign country, the process can
                                    become even more complicated. Here's why post-surgical recovery abroad can be
                                    particularly challenging:</p>
                                <h3 class="rtejustify">1. Differences in Healthcare Standards</h3>
                                <p class="rtejustify">Not all healthcare systems are created equal. While some offer
                                    cutting-edge facilities and top-tier care, others may have limited resources for
                                    post-operative support. Researching the healthcare standards of the country where
                                    you're having surgery is essential. Knowing what to expect can help you prepare
                                    better and avoid unpleasant surprises.</p>
                                <h3 class="rtejustify">2. Language Barriers and Miscommunication</h3>
                                <p class="rtejustify">If you don't speak the local language, explaining your symptoms,
                                    understanding medication instructions, and discussing recovery plans can be
                                    difficult. Misunderstandings about medication dosages or follow-up care can lead to
                                    complications. Using a translation app or hiring a medical translator can make
                                    communication smoother and more accurate.</p>
                                <h3 class="rtejustify">3. Emotional and Psychological Stress</h3>
                                <p class="rtejustify">Recovering from surgery isn't just about physical healing—it also
                                    takes a toll on your mental well-being. Being far from home, adjusting to a
                                    different culture, and feeling isolated can add to your stress. Staying in touch
                                    with family and friends through phone or video calls can help you feel more
                                    connected and emotionally supported.</p>
                                <p class="rtecenter"><img alt=""
                                        src="https://www.vaidam.com/core/storage/images/2025-03-17WhatsApp Image 2025-03-16 at 3.04.36 PM.jpeg">
                                </p>
                                <h2 id="effective-strategies-for-pain-management-and-healing-abroad">Effective
                                    Strategies for Pain Management and Healing Abroad</h2>
                                <p class="rtejustify">How you manage pain and discomfort during recovery directly
                                    impacts how quickly and smoothly you heal. Here's how to handle pain and promote
                                    faster recovery:</p>
                                <h3 class="rtejustify">1. Stick to Your Doctor's Pain Management Plan</h3>
                                <p class="rtejustify">Pain is normal after surgery, but unmanaged pain can delay healing
                                    and increase stress. Your doctor will likely prescribe medication to control pain
                                    and inflammation—follow the instructions carefully. Avoid taking extra painkillers
                                    without consulting your doctor, as some medications can cause side effects or
                                    interact negatively with others.</p>
                                <h3 class="rtejustify">2. Focus on Nutrition and Hydration</h3>
                                <p class="rtejustify">A balanced diet plays a huge role in recovery. Many essential
                                    nutrients are involved in surgical recovery: protein aids in tissue repair, vitamin
                                    C boosts immune function, zinc supports wound healing, and iron helps replenish lost
                                    blood. Including lean meats, leafy greens, fruits, nuts, and whole grains in your
                                    diet can significantly enhance the healing process.</p>
                                <h3 class="rtejustify">3. Incorporate Gentle Movement</h3>
                                <p class="rtejustify">While rest is essential after surgery, light physical activity can
                                    prevent stiffness and improve circulation. Short walks around your room or recovery
                                    space can help reduce swelling and lower the risk of blood clots. Your doctor will
                                    advise you on how much activity is safe based on the type of surgery you've had.</p>
                                <h2 id="easing-the-transition-to-a-new-environment-during-recovery">Easing the
                                    Transition to a New Environment During Recovery</h2>
                                <p class="rtejustify">Recovering in a foreign country can feel overwhelming, but proper
                                    planning can make the experience smoother:</p>
                                <h3 class="rtejustify">1. Arrange for Professional Aftercare</h3>
                                <p class="rtejustify">Agencies offer medical tourism aftercare services, such as
                                    post-surgical care packages that include nursing care, physical therapy, and
                                    follow-up visits. These services provide consistent care and ensure access to
                                    trained professionals throughout recovery.</p>
                                <h3 class="rtejustify">2. Choose Comfortable and Convenient Accommodation</h3>
                                <p class="rtejustify">Where you recover matters, a quiet, clean, and comfortable place
                                    with easy access to healthcare facilities can make a big difference. Look for
                                    accommodation with a comfy bed, proper air conditioning, and a reliable internet
                                    connection so you can stay in touch with family and doctors.</p>
                                <h3 class="rtejustify">3. Stay Connected with Your Home Doctor</h3>
                                <p class="rtejustify">Even if you're recovering abroad, keeping your home doctor updated
                                    on your progress is essential. Sharing medical reports and test results allows your
                                    doctor to monitor your recovery and address potential issues early.</p>
                                <div class="blog-bg-light">
                                    <p class="rtejustify"><strong>How can Vaidam help ensure a smooth post-surgical
                                            recovery abroad?</strong></p>
                                    <p class="rtejustify">Vaidam can assist by connecting patients with top
                                        international hospitals and experienced surgeons, ensuring comprehensive care
                                        and smooth post-surgical recovery. We also provide support with travel
                                        arrangements, language assistance, and follow-up care.</p>
                                </div>
                                <h2 id="why-follow-up-care-is-essential-for-lasting-recovery-">Why Follow-Up Care is
                                    Essential for Lasting Recovery?</h2>
                                <p class="rtejustify">Following up with your surgeon after surgery is essential to avoid
                                    complications and ensure proper healing. Many international hospitals offer remote
                                    follow-up options to help you stay on track even after returning home. Recovering
                                    from surgery while travelling can be challenging, but consistent follow-up care
                                    ensures a smoother and safer healing process.</p>
                                <h3 class="rtejustify">1. Watch for Signs of Complications</h3>
                                <p class="rtejustify">Pay attention to symptoms like swelling, redness, fever, or
                                    unusual discharge from the surgical site. These could be signs of infection or other
                                    complications. If you notice anything concerning, seek medical attention
                                    immediately.</p>
                                <h3 class="rtejustify">2. Stick to Your Medication and Recovery Plan</h3>
                                <p class="rtejustify">Follow your doctor's instructions about medications and physical
                                    activity. Missing doses or overexerting yourself can delay healing. Keeping a list
                                    of prescribed medications and their schedules can help you stay organised.</p>
                                <h3 class="rtejustify">3. Keep Track of Your Recovery Progress</h3>
                                <p class="rtejustify">Maintaining a recovery journal can help you monitor your healing
                                    process. Write down any changes in pain levels, symptoms, and overall well-being.
                                    This information will be helpful during follow-up appointments with your doctor.</p>
                                <h2 id="finding-strength-in-your-recovery-journey">Finding Strength in Your Recovery
                                    Journey</h2>
                                <p class="rtejustify">Recovering from surgery in a foreign nation presents peculiar
                                    challenges. However, if you're adequately prepared and have the right mindset, your
                                    recovery can be much easier. Another crucial part of recovery is following your
                                    doctor's recovery plan, focusing on nutritional needs and rest, and keeping open
                                    lines of communication with other healthcare providers. Following international
                                    patient recovery tips can further simplify the process and help you avoid potential
                                    setbacks.</p>
                                <p class="rtejustify">Don't forget, though, that your emotional health is essential,
                                    too. Healing is not just a physical activity; it's also a mental one. With this
                                    thoughtful approach, you can navigate the many complexities of recovery from surgery
                                    while securely returning home, hopefully, more vigorous and healthier.&nbsp;</p>
                            </div> <!-- form 1 -->
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
                                                    Experts</strong> <small>Treatment plan and quote within 2
                                                    days</small> </span> </div>
                                        <div id="custom-form col-12">
                                            <form class="row" id="genericForm" autocomplete="off"> <input type="hidden"
                                                    name="_token" id="_token"
                                                    value="MY895NHIu9YyG2A91JME8Llh9VNDc7vGWZz6kTyH"> <input
                                                    type="hidden" name="pagetype" value=""> <input type="hidden"
                                                    name="page_source" id="page_source"
                                                    value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                                <input type="hidden" name="lang1" id="lang1"
                                                    value="https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process">
                                                <input type="hidden" name="second_form" value="yes"> <input
                                                    type="hidden" name="preferredLocation" id="preferredLocation"
                                                    value="Turkey">
                                                <!-- <input type="hidden" name="Page_Type" id="Page_Type" value="Doctor List Page"> -->
                                                <input type="hidden" name="Page_Type" id="Page_Type"
                                                    value="knowledge center"> <input type="hidden" name="c_url"
                                                    id="c_url" value="">
                                                <div class="col-12 mb-3"> <label for="inputName"
                                                        class="form-label">Name</label> <input type="text"
                                                        class="form-control" id="name" placeholder="Patient Name"
                                                        name="name" aria-label="Patient Name" required=""> </div>
                                                <div class="col-12 mb-3"> <label for="inputEmail"
                                                        class="form-label">Email</label>
                                                    <div class="input-group"> <input type="email" class="form-control"
                                                            id="email" placeholder="Enter email" name="email"
                                                            required=""> </div>
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
                                                <div class="col-12 mb-3 autocomplete stategroup"
                                                    style="display: block;"> <label for="inputCity"
                                                        class="form-label">City</label> <input id="city"
                                                        class="form-control new-form-control" type="text" name="city"
                                                        placeholder="Select City"> <input type="hidden" id="state"
                                                        name="state"> </div>
                                                <div class="col-12 mb-3"> <label for="inputPhone"
                                                        class="form-label">Phone Number</label>
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
                                                    <label for="inputCity" class="form-label"> Emirates ID </label>
                                                    <input type="text" class="form-control new-form-control"
                                                        name="emirates-id" id="emirates-id"
                                                        placeholder="Enter Emirates ID (To be shared with hospital)">
                                                </div>
                                                <div class="col-12 mt-2">
                                                    <div class="d-grid"> <button type="submit" id="search-main-form-btn"
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
                            <div class="article-img"> </div>
                        </div> <!-- Doctor review block start --> <!-- Doctor review block end -->
                        <!-- Author reviewer block start -->
                        <div class="reviewer row">
                            <div class="col-12 mb-4">
                                <div
                                    class="author-box p-3 rounded-3 row-gap-3 border d-flex align-items-center bg-light">
                                    <figure class="me-3 mb-0"> <img class="rounded-3" alt="mariyum"
                                            src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/pictures/picture-10344-1733828050.webp"
                                            width="80" height="80">
                                        <figcaption> Author Name <br><strong>mariyum</strong> </figcaption>
                                    </figure>
                                    <div class="author-details bg-white p-3 rounded-3">
                                        <p class="mb-0"></p>
                                        <p><strong>Mariyum</strong>&nbsp;is an experienced medical writer with a
                                            Master’s degree in Biotechnology, specialising in transforming intricate
                                            scientific concepts into clear, engaging, and accessible content. With a
                                            strong passion for demystifying health and science topics, she excels at
                                            crafting content that resonates with diverse audiences, from industry
                                            professionals to general readers.&nbsp;Mariyum ensures that her writing is
                                            not only informative but also strategically designed to maximise&nbsp;reach
                                            and visibility in digital spaces.</p>
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
                                            class="d-flex justify-content-center flex-column lh-base"> <strong
                                                class="fs-4" style="text-align:center;">Get in Touch with Medical
                                                Experts</strong> <small> Treatment plan and quote within 2 days </small>
                                        </span> </div>
                                    <div id="custom-form-doctor-card col-12">
                                        <form class="row" id="secondFormInList" autocomplete="off"> <input type="hidden"
                                                name="_token" id="_token"
                                                value="MY895NHIu9YyG2A91JME8Llh9VNDc7vGWZz6kTyH"> <input type="hidden"
                                                name="pagetype" value=""> <input type="hidden" name="page_source"
                                                id="page_source-sfil"
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
                                                style="display: block;"> <label for="inputCity" class="form-label"> City
                                                </label> <input type="text" class="form-control" name="city"
                                                    id="city-sfil" placeholder="Enter city"> <input type="hidden"
                                                    id="state-sfil" name="state"> </div>
                                            <div class="col-12 mb-3"> <label for="inputPhone" class="form-label"> Phone
                                                    Number </label>
                                                <div class="input-group"> <input
                                                        class="input-group-text country_phone_code"
                                                        id="country_phone_code-sfil" name="country_phone_code"
                                                        placeholder="Code" style="width: 80px;"> <input type="text"
                                                        class="form-control" id="phone_number" name="phone_number"
                                                        placeholder="Enter Phone no."> </div>
                                            </div>
                                            <div class="col-12 mb-3" id="ageblock-sfil" style="display: block;"> <label
                                                    for="inputAddress2" class="form-label"> Patient's Age or Date Of
                                                    Birth </label> <input type="text"
                                                    class="form-control new-form-control" id="age"
                                                    placeholder="Example: 30 Yrs or 29-05-1985" name="age"> </div>
                                            <div class="col-12 mb-3"> <label for="medicalIssue" class="form-label">
                                                    Medical Issue </label> <textarea type="text" class="form-control"
                                                    id="medical_problem" name="medical_problem"
                                                    placeholder="Describe The Current Medical Problem."></textarea>
                                            </div>
                                            <div class="col-12 mb-3" id="emirates-id-block2" style="display: none;">
                                                <label for="inputCity" class="form-label"> Emirates ID </label> <input
                                                    type="text" class="form-control new-form-control" name="emirates-id"
                                                    id="emirates-id"
                                                    placeholder="Enter Emirates ID (To be shared with hospital)"> </div>
                                            <div class="col-12 mt-2">
                                                <div class="d-grid"> <button type="submit" id="search-main-form-btn"
                                                        class="btn btn-danger online-consult-button-sfil submit-form-btn in_page_form ">
                                                        Contact Us Now </button> </div>
                                            </div>
                                        </form> <span
                                            class="formtns-triger d-block text-black-50 text-center fs-6 mt-4"> By
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
                            <p class="h5">Content meets the <a href="https://www.vaidam.com/editorial-policy">Vaidam
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
                <div class="popular-post col-12 slider mb-4 slick-initialized slick-slider slick-dotted"
                    id="popularPost">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 728px; transform: translate3d(0px, 0px, 0px);">
                            <div class="card shadow-sm slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide00"
                                aria-describedby="slick-slide-control00" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/bangladeshi-patient-suffering-bone-cancer-successfully-treated-india"
                                    tabindex="0"> <img
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/mohammed_zakir_hossain-min.webp"
                                        class="card-img-top border rounded-3"
                                        alt="Mr. Mohammed Zakir Hossain received bone cancer treatment in India"
                                        title="Bangladeshi Patient Suffering from Bone Cancer Successfully Treated in India">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/bangladeshi-patient-suffering-bone-cancer-successfully-treated-india"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">nishu</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/bangladeshi-patient-suffering-bone-cancer-successfully-treated-india"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/bangladeshi-patient-suffering-bone-cancer-successfully-treated-india"
                                            tabindex="0">Bangladeshi Patient Suffering from Bone Cancer Successfully
                                            Treated in India</a></h4>
                                    <p class="card-text"> Bangladeshi patient received successful bone cancer treatment
                                        in India. <a
                                            href="https://www.vaidam.com/knowledge-center/bangladeshi-patient-suffering-bone-cancer-successfully-treated-india"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide slick-active" data-slick-index="1"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide01"
                                aria-describedby="slick-slide-control01" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/patient-testimonials/william-singh-fiji-happily-undergoes-successful-cabg-apollo-hospital-new-delhi"
                                    tabindex="0"> <img
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/outer_william.webp"
                                        class="card-img-top border rounded-3" alt="William Singh "
                                        title="William Singh from Fiji happily Undergoes a Successful CABG in Apollo Hospital, New Delhi">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/patient-testimonials/william-singh-fiji-happily-undergoes-successful-cabg-apollo-hospital-new-delhi"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">divya</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: DECEMBER 04, 2024 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/patient-testimonials/william-singh-fiji-happily-undergoes-successful-cabg-apollo-hospital-new-delhi"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/patient-testimonials/william-singh-fiji-happily-undergoes-successful-cabg-apollo-hospital-new-delhi"
                                            tabindex="0">William Singh from Fiji happily Undergoes a Successful CABG in
                                            Apollo Hospital, New Delhi</a></h4>
                                    <p class="card-text"> Initially nervous and anxious about everything, William went
                                        back with a huge gratification. <a
                                            href="https://www.vaidam.com/knowledge-center/patient-testimonials/william-singh-fiji-happily-undergoes-successful-cabg-apollo-hospital-new-delhi"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
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
                <div class="popular-post col-12 slider mb-4 slick-initialized slick-slider slick-dotted"
                    id="popularPost">
                    <div class="slick-list draggable">
                        <div class="slick-track"
                            style="opacity: 1; width: 7280px; transform: translate3d(0px, 0px, 0px);">
                            <div class="card shadow-sm slick-slide slick-current slick-active" data-slick-index="0"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide10"
                                aria-describedby="slick-slide-control10" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/choosing-right-ivf-clinic-what-look-and-questions-ask"
                                    tabindex="0"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/choosing_the_right_ivf_clinic_what_to_look_for_and_questions_to_ask.webp"
                                        alt="Choosing the Right IVF Clinic: What to Look for and Questions to Ask"
                                        title="Choosing the Right IVF Clinic: What to Look for and Questions to Ask">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/choosing-right-ivf-clinic-what-look-and-questions-ask"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 15, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/choosing-right-ivf-clinic-what-look-and-questions-ask"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/choosing-right-ivf-clinic-what-look-and-questions-ask"
                                            tabindex="0">Choosing the Right IVF Clinic: What to Look for and Questions
                                            to Ask</a></h4>
                                    <p class="card-text"> Learn how to choose the best IVF clinic with insights on
                                        success rates, technology, costs, and support. Make i... <a
                                            href="https://www.vaidam.com/knowledge-center/choosing-right-ivf-clinic-what-look-and-questions-ask"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide slick-active" data-slick-index="1"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide11"
                                aria-describedby="slick-slide-control11" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                    tabindex="0"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/affordable_heart_transplants_and_valve_replacements_abroad_top_medical_tourism_destinations.webp"
                                        alt="Affordable Heart Transplants and Valve Replacements Abroad Top Medical Tourism Destinations"
                                        title="Affordable Heart Transplants and Valve Replacements Abroad: Top Medical Tourism Destinations">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">suryani</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 12, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="0">Affordable Heart Transplants and Valve Replacements Abroad: Top
                                            Medical Tourism Destinations</a></h4>
                                    <p class="card-text"> Looking for affordable heart procedures abroad? Discover top
                                        medical tourism destinations offering quality car... <a
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide slick-active" data-slick-index="2"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide12"
                                aria-describedby="slick-slide-control12" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                    tabindex="0"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/whatsapp_image_2025-03-10_at_5.53.35_pm.webp"
                                        alt="Medical Travel Insurance: What to Look For and What to Avoid"
                                        title="Medical Travel Insurance: What to Look For and What to Avoid"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 15, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="0">Medical Travel Insurance: What to Look For and What to
                                            Avoid</a></h4>
                                    <p class="card-text"> Protect your health while traveling. Learn what to look for,
                                        what to avoid, and how to choose the right medica... <a
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide slick-active" data-slick-index="3"
                                aria-hidden="false" tabindex="0" role="tabpanel" id="slick-slide13"
                                aria-describedby="slick-slide-control13" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/living-cancer-psychological-support-and-resources-patients-and-families"
                                    tabindex="0"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/living_with_cancer_psychological_support_and_resources_for_patients_and_families.webp"
                                        alt="Living with Cancer: Psychological Support and Resources for Patients and Families"
                                        title="Living with Cancer: Psychological Support and Resources for Patients and Families">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/living-cancer-psychological-support-and-resources-patients-and-families"
                                        tabindex="0">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">mariyum</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 11, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/living-cancer-psychological-support-and-resources-patients-and-families"
                                            tabindex="0"></a><a
                                            href="https://www.vaidam.com/knowledge-center/living-cancer-psychological-support-and-resources-patients-and-families"
                                            tabindex="0">Living with Cancer: Psychological Support and Resources for
                                            Patients and Families</a></h4>
                                    <p class="card-text"> Discover the importance of cancer counselling &amp; mental
                                        health support. Learn how therapy, support groups &amp;... <a
                                            href="https://www.vaidam.com/knowledge-center/living-cancer-psychological-support-and-resources-patients-and-families"
                                            tabindex="0">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="4" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide14"
                                aria-describedby="slick-slide-control14" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/blood-cancer-treatments-how-stem-cell-transplants-and-immunotherapy-are-changing"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/blood_cancer_treatments_how_stem_cell_transplants_and_immunotherapy_are_changing_the_game.webp"
                                        alt="Blood Cancer Treatments: How Stem Cell Transplants and Immunotherapy Are Changing the Game"
                                        title="Blood Cancer Treatments: How Stem Cell Transplants and Immunotherapy Are Changing the Game">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/blood-cancer-treatments-how-stem-cell-transplants-and-immunotherapy-are-changing"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 03, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/blood-cancer-treatments-how-stem-cell-transplants-and-immunotherapy-are-changing"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/blood-cancer-treatments-how-stem-cell-transplants-and-immunotherapy-are-changing"
                                            tabindex="-1">Blood Cancer Treatments: How Stem Cell Transplants and
                                            Immunotherapy Are Changing the Game</a></h4>
                                    <p class="card-text"> Discover how stem cell therapy and&nbsp;immunotherapy are
                                        revolutionising blood cancer treatment, improving su... <a
                                            href="https://www.vaidam.com/knowledge-center/blood-cancer-treatments-how-stem-cell-transplants-and-immunotherapy-are-changing"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="5" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide15"
                                aria-describedby="slick-slide-control15" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/evolution-ivf-how-technological-advances-are-improving-success-rates"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/the_evolution_of_ivf_how_technological_advances_are_improving_success_rates.webp"
                                        alt="The Evolution of IVF: How Technological Advances Are Improving Success Rates"
                                        title="The Evolution of IVF: How Technological Advances Are Improving Success Rates">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/evolution-ivf-how-technological-advances-are-improving-success-rates"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">suryani</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: FEBRUARY 19, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/evolution-ivf-how-technological-advances-are-improving-success-rates"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/evolution-ivf-how-technological-advances-are-improving-success-rates"
                                            tabindex="-1">The Evolution of IVF: How Technological Advances Are Improving
                                            Success Rates</a></h4>
                                    <p class="card-text"> Discover the latest IVF advancements, from AI embryo selection
                                        to genetic screening, improving success rates a... <a
                                            href="https://www.vaidam.com/knowledge-center/evolution-ivf-how-technological-advances-are-improving-success-rates"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="6" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide16"
                                aria-describedby="slick-slide-control16" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/mr-elias-kwande-zimbabwe-gets-successful-prostate-cancer-hepatitis-b-care-india"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/mr._elias_kwande_1.webp"
                                        alt="Mr. Elias Kwande from Zimbabwe Gets Successful Prostate Cancer &amp; Hepatitis B Care in India"
                                        title="Mr. Elias Kwande from Zimbabwe Gets Successful Prostate Cancer &amp; Hepatitis B Care in India">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/mr-elias-kwande-zimbabwe-gets-successful-prostate-cancer-hepatitis-b-care-india"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">Aastha Upadhyay</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: FEBRUARY 19, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/mr-elias-kwande-zimbabwe-gets-successful-prostate-cancer-hepatitis-b-care-india"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/mr-elias-kwande-zimbabwe-gets-successful-prostate-cancer-hepatitis-b-care-india"
                                            tabindex="-1">Mr. Elias Kwande from Zimbabwe Gets Successful Prostate Cancer
                                            &amp; Hepatitis B Care in India</a></h4>
                                    <p class="card-text"> Explore the determined health journey of a Zimbabwe patient
                                        who overcame prostate cancer and hepatitis B with... <a
                                            href="https://www.vaidam.com/knowledge-center/mr-elias-kwande-zimbabwe-gets-successful-prostate-cancer-hepatitis-b-care-india"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="7" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide17"
                                aria-describedby="slick-slide-control17" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/algerian-child-overcomes-congenital-malformation-laparoscopic-surgery-india"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/master._seradjeddine_lakhdari_-_algeria_0.webp"
                                        alt="Algerian Child Overcomes Congenital Malformation with Laparoscopic Surgery in India"
                                        title="Algerian Child Overcomes Congenital Malformation with Laparoscopic Surgery in India">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/algerian-child-overcomes-congenital-malformation-laparoscopic-surgery-india"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">ayushman</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: FEBRUARY 19, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/algerian-child-overcomes-congenital-malformation-laparoscopic-surgery-india"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/algerian-child-overcomes-congenital-malformation-laparoscopic-surgery-india"
                                            tabindex="-1">Algerian Child Overcomes Congenital Malformation with
                                            Laparoscopic Surgery in India</a></h4>
                                    <p class="card-text"> Witness the journey of Seradjeddine's parents as their worry
                                        transforms into relief, thanks to the exceptional... <a
                                            href="https://www.vaidam.com/knowledge-center/algerian-child-overcomes-congenital-malformation-laparoscopic-surgery-india"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="8" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide18"
                                aria-describedby="slick-slide-control18" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-chemotherapy-lymphoma-india"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/ms._octavia_pipette_-_vanuatu_1.webp"
                                        alt="Patient from Vanuatu Undergoes Successful Chemotherapy for Lymphoma in India"
                                        title="Patient from Vanuatu Undergoes Successful Chemotherapy for Lymphoma in India">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-chemotherapy-lymphoma-india"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: FEBRUARY 21, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-chemotherapy-lymphoma-india"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-chemotherapy-lymphoma-india"
                                            tabindex="-1">Patient from Vanuatu Undergoes Successful Chemotherapy for
                                            Lymphoma in India</a></h4>
                                    <p class="card-text"> Ms. Octavia Pipette’s journey from pain to recovery with
                                        expert lymphoma treatment in India is supported by Va... <a
                                            href="https://www.vaidam.com/knowledge-center/patient-vanuatu-undergoes-successful-chemotherapy-lymphoma-india"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="9" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide19"
                                aria-describedby="slick-slide-control19" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/understanding-cardiovascular-health-simple-lifestyle-changes-healthier-heart"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/what_are_the_subspecialities_of_spine_surgery.webp"
                                        alt="Understanding Cardiovascular Health: Simple Lifestyle Changes for a Healthier Heart"
                                        title="Understanding Cardiovascular Health: Simple Lifestyle Changes for a Healthier Heart">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/understanding-cardiovascular-health-simple-lifestyle-changes-healthier-heart"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: FEBRUARY 13, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/understanding-cardiovascular-health-simple-lifestyle-changes-healthier-heart"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/understanding-cardiovascular-health-simple-lifestyle-changes-healthier-heart"
                                            tabindex="-1">Understanding Cardiovascular Health: Simple Lifestyle Changes
                                            for a Healthier Heart</a></h4>
                                    <p class="card-text"> Improve your heart health with simple lifestyle changes! Eat
                                        well, stay active, manage stress, and get regular... <a
                                            href="https://www.vaidam.com/knowledge-center/understanding-cardiovascular-health-simple-lifestyle-changes-healthier-heart"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="10" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide110"
                                aria-describedby="slick-slide-control110" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/affordable_heart_transplants_and_valve_replacements_abroad_top_medical_tourism_destinations.webp"
                                        alt="Affordable Heart Transplants and Valve Replacements Abroad Top Medical Tourism Destinations"
                                        title="Affordable Heart Transplants and Valve Replacements Abroad: Top Medical Tourism Destinations">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">suryani</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 12, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="-1">Affordable Heart Transplants and Valve Replacements Abroad:
                                            Top Medical Tourism Destinations</a></h4>
                                    <p class="card-text"> Looking for affordable heart procedures abroad? Discover top
                                        medical tourism destinations offering quality car... <a
                                            href="https://www.vaidam.com/knowledge-center/affordable-heart-transplants-and-valve-replacements-abroad-top-medical-tourism"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="11" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide111"
                                aria-describedby="slick-slide-control111" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/whatsapp_image_2025-03-10_at_5.53.35_pm.webp"
                                        alt="Medical Travel Insurance: What to Look For and What to Avoid"
                                        title="Medical Travel Insurance: What to Look For and What to Avoid"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">shraddha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: MARCH 15, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="-1">Medical Travel Insurance: What to Look For and What to
                                            Avoid</a></h4>
                                    <p class="card-text"> Protect your health while traveling. Learn what to look for,
                                        what to avoid, and how to choose the right medica... <a
                                            href="https://www.vaidam.com/knowledge-center/medical-travel-insurance-what-look-and-what-avoid"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="12" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide112"
                                aria-describedby="slick-slide-control112" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/medical-tourism-to-india"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/medical_tourism_to_india_1.webp"
                                        alt="Medical trip to India"
                                        title="How to Plan Your Medical Trip to India: A Step-by-Step Guide"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/medical-tourism-to-india"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">varsha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: JANUARY 21, 2025 </span>
                                            </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/medical-tourism-to-india"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/medical-tourism-to-india"
                                            tabindex="-1">How to Plan Your Medical Trip to India: A Step-by-Step
                                            Guide</a></h4>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="13" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide113"
                                aria-describedby="slick-slide-control113" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/navigating-medical-tourism-cancer-treatment-essential-tips-and-best-practices"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/medical-tourism-cancer-treatment-list-image-min.webp"
                                        alt="Navigating Medical Tourism for Cancer Treatment: Essential Tips and Best Practices"
                                        title="Navigating Medical Tourism for Cancer Treatment: Essential Tips and Best Practices">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/navigating-medical-tourism-cancer-treatment-essential-tips-and-best-practices"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">nishu</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/navigating-medical-tourism-cancer-treatment-essential-tips-and-best-practices"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/navigating-medical-tourism-cancer-treatment-essential-tips-and-best-practices"
                                            tabindex="-1">Navigating Medical Tourism for Cancer Treatment: Essential
                                            Tips and Best Practices</a></h4>
                                    <p class="card-text"> Many patients might consider alternatives through medical
                                        tourism in countries where health systems continuous... <a
                                            href="https://www.vaidam.com/knowledge-center/navigating-medical-tourism-cancer-treatment-essential-tips-and-best-practices"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="14" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide114"
                                aria-describedby="slick-slide-control114" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/exploring-dubai-local-how-can-you-make-your-medical-tourism-journey-easy"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/experience-life-as-a-local-in-dubai-min.webp"
                                        alt="medical travel apps in dubai"
                                        title="Exploring Dubai as a Local: How Can You Make Your Medical Tourism Journey Easy?">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/exploring-dubai-local-how-can-you-make-your-medical-tourism-journey-easy"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">deepanshu</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/exploring-dubai-local-how-can-you-make-your-medical-tourism-journey-easy"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/exploring-dubai-local-how-can-you-make-your-medical-tourism-journey-easy"
                                            tabindex="-1">Exploring Dubai as a Local: How Can You Make Your Medical
                                            Tourism Journey Easy?</a></h4>
                                    <p class="card-text"> Dubai has established itself as a global leading destination
                                        in medical tourism. You can navigate your medical... <a
                                            href="https://www.vaidam.com/knowledge-center/exploring-dubai-local-how-can-you-make-your-medical-tourism-journey-easy"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="15" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide115"
                                aria-describedby="slick-slide-control115" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/living-local-how-make-your-thai-journey-easier-during-your-treatment"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/experience-life-as-a-local-in-thailand.webp"
                                        alt="Living like a local in Thailand"
                                        title="Living Like a Local: How to Make Your Thai Journey Easier During Your Treatment">
                                </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/living-local-how-make-your-thai-journey-easier-during-your-treatment"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">nishu</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/living-local-how-make-your-thai-journey-easier-during-your-treatment"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/living-local-how-make-your-thai-journey-easier-during-your-treatment"
                                            tabindex="-1">Living Like a Local: How to Make Your Thai Journey Easier
                                            During Your Treatment</a></h4>
                                    <p class="card-text"> Since the beginning of the 21st century, medical tourism in
                                        Thailand gained traction and has become one of Asi... <a
                                            href="https://www.vaidam.com/knowledge-center/living-local-how-make-your-thai-journey-easier-during-your-treatment"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="16" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide116"
                                aria-describedby="slick-slide-control116" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/health-checkup-uae" tabindex="-1">
                                    <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/health_checkup_345_225.webp"
                                        alt="Health Checkup in UAE" title="Health Checkup in UAE"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/health-checkup-uae" tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">prathyusha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/health-checkup-uae"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/health-checkup-uae"
                                            tabindex="-1">Health Checkup in UAE</a></h4>
                                    <p class="card-text"> A Health check-up aims to accessing the general health status
                                        of an individual. This is done through various s... <a
                                            href="https://www.vaidam.com/knowledge-center/health-checkup-uae"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="17" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide117"
                                aria-describedby="slick-slide-control117" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/medical-tourism-singapore"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/medical_treatment_in_singapore_345_1.webp"
                                        alt="Medical Treatment in Singapore " title="Medical Tourism in Singapore"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/medical-tourism-singapore"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">puneetha.o</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/medical-tourism-singapore"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/medical-tourism-singapore"
                                            tabindex="-1">Medical Tourism in Singapore</a></h4>
                                    <p class="card-text"> Medical tourists from all over come to Singapore to get
                                        treatment for a wide range of conditions, including th... <a
                                            href="https://www.vaidam.com/knowledge-center/medical-tourism-singapore"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="18" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide118"
                                aria-describedby="slick-slide-control118" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/health-check-thailand" tabindex="-1">
                                    <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/health_check_up_in_thailand.webp"
                                        alt="Health Checkup in Thailand" title="Health Check up in Thailand"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/health-check-thailand"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">muskan</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/health-check-thailand"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/health-check-thailand"
                                            tabindex="-1">Health Check up in Thailand</a></h4>
                                    <p class="card-text"> Hospitals in Thailand offer a variety of packages for medical
                                        tourists including tests for specific issues suc... <a
                                            href="https://www.vaidam.com/knowledge-center/health-check-thailand"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                            <div class="card shadow-sm slick-slide" data-slick-index="19" aria-hidden="true"
                                tabindex="-1" role="tabpanel" id="slick-slide119"
                                aria-describedby="slick-slide-control119" style="width: 344px;"> <a class="d-block"
                                    href="https://www.vaidam.com/knowledge-center/medical-treatment-uae-medical-tourism-uae"
                                    tabindex="-1"> <img class="card-img-top border rounded-3"
                                        src="https://d1pkj1wi9lp6qx.cloudfront.net/50/files/medical_treatment_in_uae.webp"
                                        alt="Medical Treatment in UAE"
                                        title="Medical Treatment in UAE | Medical Tourism in UAE"> </a>
                                <div class="card-body px-0"><a class="d-block"
                                        href="https://www.vaidam.com/knowledge-center/medical-treatment-uae-medical-tourism-uae"
                                        tabindex="-1">
                                        <div class="blog-info d-flex flex-wrap gap-2 gap-lg-4 mb-2">
                                            <div class="auth-name d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/author.webp"
                                                    alt="Author" width="16" height="16"> <span
                                                    class="text-uppercase">namisha</span> </div>
                                            <div class="pub-date d-flex gap-2 align-items-center"> <img
                                                    src="https://www.vaidam.com/assets/knowledge_center/calender.webp"
                                                    alt="Published Date" width="16" height="16"> <span
                                                    class="text-uppercase"> Last Updated Date: SEPTEMBER 19, 2024
                                                </span> </div>
                                        </div>
                                    </a>
                                    <h4 class="card-title"><a class="d-block"
                                            href="https://www.vaidam.com/knowledge-center/medical-treatment-uae-medical-tourism-uae"
                                            tabindex="-1"></a><a
                                            href="https://www.vaidam.com/knowledge-center/medical-treatment-uae-medical-tourism-uae"
                                            tabindex="-1">Medical Treatment in UAE | Medical Tourism in UAE</a></h4>
                                    <p class="card-text"> Medical tourism in the UAE has developed rapidly and achieved
                                        milestones in recent years, making it one of the... <a
                                            href="https://www.vaidam.com/knowledge-center/medical-treatment-uae-medical-tourism-uae"
                                            tabindex="-1">Read More</a> </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="slick-dots" style="display: flex;" role="tablist">
                        <li class="slick-active" role="presentation"><button type="button" role="tab"
                                id="slick-slide-control10" aria-controls="slick-slide10" aria-label="1 of 5"
                                tabindex="0" aria-selected="true">1</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control11"
                                aria-controls="slick-slide11" aria-label="2 of 5" tabindex="-1">2</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control12"
                                aria-controls="slick-slide12" aria-label="3 of 5" tabindex="-1">3</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control13"
                                aria-controls="slick-slide13" aria-label="4 of 5" tabindex="-1">4</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control14"
                                aria-controls="slick-slide14" aria-label="5 of 5" tabindex="-1">5</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control15"
                                aria-controls="slick-slide15" aria-label="6 of 5" tabindex="-1">6</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control16"
                                aria-controls="slick-slide16" aria-label="7 of 5" tabindex="-1">7</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control17"
                                aria-controls="slick-slide17" aria-label="8 of 5" tabindex="-1">8</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control18"
                                aria-controls="slick-slide18" aria-label="9 of 5" tabindex="-1">9</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control19"
                                aria-controls="slick-slide19" aria-label="10 of 5" tabindex="-1">10</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control110"
                                aria-controls="slick-slide110" aria-label="11 of 5" tabindex="-1">11</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control111"
                                aria-controls="slick-slide111" aria-label="12 of 5" tabindex="-1">12</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control112"
                                aria-controls="slick-slide112" aria-label="13 of 5" tabindex="-1">13</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control113"
                                aria-controls="slick-slide113" aria-label="14 of 5" tabindex="-1">14</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control114"
                                aria-controls="slick-slide114" aria-label="15 of 5" tabindex="-1">15</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control115"
                                aria-controls="slick-slide115" aria-label="16 of 5" tabindex="-1">16</button></li>
                        <li role="presentation"><button type="button" role="tab" id="slick-slide-control116"
                                aria-controls="slick-slide116" aria-label="17 of 5" tabindex="-1">17</button></li>
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
                <div class="col-lg-5 d-flex gap-4 flex-wrap">
                    <!-- <a class="readmore whatsapp-color px-5" title="Send Enquiry" href="https://www.vaidam.com/lp/consult-online">+91-9971616131</a> -->
                    <a class="readmore whatsapp-color px-5"
                        href="https://api.whatsapp.com/send?phone=919971616131&amp;text=Hello,%20please%20contact%20me%20regarding%20https://www.vaidam.com/knowledge-center/navigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process?source=wpchat_KDSB%20,%20Thank%20you!"
                        title="Whatsapp About">Whatsapp Us</a> <a class="readmore px-5" title="Send Enquiry"
                        href="https://www.vaidam.com/lp/consult-online">hello@vaidam.com</a> </div>
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
                            onclick="if (!window.__cfRLUnblockHandlers) return false; cancelQuote();"
                            class="close">×</span>
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
                                        class="form-overlay-icon fa fa-sort overlay-sort"></i> <select
                                        required="required"
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
                            <section><input type="checkbox" id="online_consultation" name="online_consultation"
                                    value="1" style="transform: scale(1.5);"> <label for="online_consultation" style="
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
    </div><iframe allow="join-ad-interest-group" data-tagging-id="AW-989645465" data-load-time="1742867255639"
        height="0" width="0"
        src="https://td.doubleclick.net/td/rul/989645465?random=1742867255617&amp;cv=11&amp;fst=1742867255617&amp;fmt=3&amp;bg=ffffff&amp;guid=ON&amp;async=1&amp;gtm=45je53l1v879240773za200&amp;gcd=13l3l3l3l1l1&amp;dma=0&amp;tag_exp=102482433~102788824~102803279~102813109~102887800&amp;u_w=1536&amp;u_h=864&amp;url=https%3A%2F%2Fwww.vaidam.com%2Fknowledge-center%2Fnavigating-post-surgical-recovery-abroad-practical-tips-smooth-healing-process&amp;ref=https%3A%2F%2Fwww.vaidam.com%2Fknowledge-center&amp;hn=www.googleadservices.com&amp;frm=0&amp;tiba=Navigating%20Post-Surgical%20Recovery%20Abroad%3A%20Practical%20Tips%20for%20a%20Smooth%20Healing%20Process%20%7C%20Vaidam%20Health&amp;npa=0&amp;pscdl=noapi&amp;auid=794519535.1741836252&amp;uaa=x86&amp;uab=64&amp;uafvl=Chromium%3B134.0.6998.118%7CNot%253AA-Brand%3B24.0.0.0%7CGoogle%2520Chrome%3B134.0.6998.118&amp;uamb=0&amp;uam=&amp;uap=Windows&amp;uapv=10.0.0&amp;uaw=0&amp;fledge=1&amp;data=event%3Dgtag.config"
        style="display: none; visibility: hidden;" data-gtm-yt-inspected-8="true"></iframe><button id="cgw_action_btn"
        tabindex="-1"
        style="position: absolute; top: -9999px; left: -9999px; width: 1px; height: 1px; opacity: 0; pointer-events: none;"></button>
