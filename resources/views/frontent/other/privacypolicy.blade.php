@extends(config('constants.FRONTENT_FOLDER') . 'includes/header')
@section('content')

<main>
    <div class="breadcrumb__area theme-bg pt-120 pb-120" data-background="{{ asset ('public/images/breadcrumb/breadcrumb-bg.png')}}">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12">
                    <div class="breadcrumb__content p-relative z-index-1">
                        <div class="breadcrumb__list mb-10">
                            <span><a href="{{ config('constants.HOME_URL') }}">Home</a></span>
                            <span class="dvdr dvdr-line"></span>
                            <span class="tp-bc-active-menu">Company</span>
                        </div>
                        <h3 class="breadcrumb__title">Privacy and Policy</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page-area pt-20 pb-20">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h3 class="text-black text-3xl font-bold">Privacy Policy</h3>
            </div>
            <ol class="list-decimal list-inside text-gray-500">
                <li class="mb-4">
                    <h5 class="text-xl font-semibold text-black">1. WHAT IS PRIVACY POLICY</h5>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>1.1 &nbsp;</strong>Urlwebwala Private Limited (We/Us) are committed to
                                ensuring the security and protection of personal information that we process and to
                                provide.
                                Adhering to this privacy statement, we have set up guidelines that primarily define
                                practices that are intended to collect/share/process personal information. This privacy
                                statement hence is intended to inform you of the ways we use the personal information
                                that
                                you choose to provide us, through our website.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>1.2 &nbsp;</strong>Along with further information on 1.1, the ability to opt in
                                or out
                                of
                                certain uses may also be provided when we collect personal information from you.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>1.3 &nbsp;</strong>Third party website have their own privacy policies. Our
                                website may
                                contain links to other third party websites. We do not accept any liability or
                                responsibility for their methods or policies of processing your personal information,
                                should
                                you follow a link to any of these third party websites through our website. For the
                                security
                                of your personal information, please check their privacy policies before you submit your
                                personal information to any third party website.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>1.4 &nbsp;</strong>This Privacy Statement covers the following areas
                            </p>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; What personal
                                    information we collect from you.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; How we use your
                                    personal information.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; How we secure and
                                    protect your personal information.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Contacting us & your
                                    rights to prevent marketing and to access and
                                    update your personal information.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Our Cookies Policy.
                                </li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; How changes to this
                                    Privacy Policy and the Cookies Policy will be
                                    made.</li>
                            </ul>
                        </li>
                    </ul>
                    <br>
                    <h5 class="text-xl font-semibold text-black">2. INFORMATION WE COLLECT ABOUT YOU</h5>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>2.1 &nbsp;</strong>We will collect and process all or some of the following
                                personal
                                information about you via
                            </p>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i><b>&nbsp; Personal
                                        information
                                        that you provide to us,</b> such as when
                                    using the contact form, careers form or any subscription forms on our website,
                                    including your name, email address, location and other contact details.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i><b>&nbsp; Incoming Contact
                                        that
                                        you make with us,</b> through other
                                    sources such as Phone, Skype, Direct Email etc. we will typically keep a record of
                                    that correspondence.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i><b>&nbsp; Surveys that we
                                        may
                                        request you to complete for research
                                        purposes. </b>We shall collect the information provided in the completed survey.
                                </li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i> <b>&nbsp; Surveys that we
                                        may
                                        request you to complete for research
                                        purposes. </b>We shall collect the information provided in the completed survey.
                                </li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i><b>&nbsp; The Website
                                    </b>wherein
                                    details of your visits to the website
                                    and information collected through cookies and other tracking technologies including,
                                    but not limited to, your IP address and domain name, your browser version and
                                    operating system, location data, traffic data, web logs and other communication
                                    data, and the resources that you access.</li>
                            </ul>
                        </li>
                    </ul>
                    <h5 class="text-xl font-semibold text-black">3. HOW WE USE YOUR PERSONAL INFORMATION</h5>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>3.1 &nbsp;</strong>This section defined the purposes for which we use personal
                                information that we collect via our website and, in compliance with our obligations
                                under
                                the IT Act, 2000, identify the “legal grounds” on which we rely to process the
                                information.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>3.2 &nbsp;</strong>The Information Technology Act, 2000 (India) allows companies
                                to
                                process personal information only when the processing is permitted by the specific
                                “legal
                                grounds” set out in law.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>3.3 &nbsp;</strong>Please note that, in addition to the disclosures we have
                                identified below, in some circumstances we will also disclose personal information to
                                service providers, contractors, agents and affiliates of Urlwebwala Private
                                Limited that perform activities described in this notice on our behalf.
                            </p>
                        </li>
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>3.4 &nbsp;</strong>The Information Technology Act, 2000 (India) allows companies
                                to
                                process personal information only when the processing is permitted by the specific
                                “legal
                                grounds” set out in law.
                            </p>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>For
                                            transparent and effective communications and business
                                            operations: </b>This includes responding to your concerns, queries,
                                        feedback, requests etc or to carry out any obligations arising from any
                                        agreements agreed upon between you and us, wherein under some circumstances may
                                        include passing your data to third parties such as our advisors / consultants (
                                        legal, financial, business or others), contractors, or execution agents.</li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>To ensure the efficiency of the
                                            contract performance and compliance of legitimate interests that allow us to
                                            perform our responsibilities/obligations and provide our services to you.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Access to
                                            promotional materials: </b>To provide you access
                                        to updates, promotions, or other relevant information where you have chosen to
                                        receive these. We may also use your information for marketing our own services.
                                        Wherever required by law, we will ask for your consent when we collect your data
                                        to conduct any such promotional activities. An option to opt out of this will be
                                        provided to you, based on the type of platform. You may also opt out by
                                        contacting us as set out in paragraph 5 below.</li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>To keep you updated with the latest
                                            news and updates concerning our Brand, services and our industry based on
                                            consent and legitimate interest.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Research and
                                            Development: </b>We analyse your personal
                                        information so that we can understand your requirements better. This process
                                        helps you, our other clients and us to better understand our business and
                                        services.</li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>Genuine policy to improve our
                                            business and services for you.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Supervision
                                            and
                                            record keeping: </b>To monitor and keep a
                                        record of concerns, queries, and transactions to maintain service quality,
                                        comply with standard procedures and to effectively manage conflicts if any.</li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>To ensure that the quality and
                                            legality our services remain compliant to legal obligations, claims and
                                            legitimate interests.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Keeping you
                                            informed: </b>To notify you about changes to our
                                        services and business.
                                    </li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>Genuine policy to ensure that you
                                            are aware of changes made to our services and business.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Accuracy and
                                            relevance of our website content: </b>To ensure
                                        that the content from our website is presented in the most effective and
                                        transparent manner for you, and your device which may include passing your data
                                        to business partners, suppliers and/or service providers.
                                    </li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>Genuine policy defined to allow us
                                            to provide you with content/services on our website and for contract
                                            performance as well.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Business
                                            change
                                            or re-organization If we:</b> (i) are
                                        subject to negotiations for the sale of our business or part thereof to a third
                                        party; (ii) are sold to a third party; or (iii) undergo a re-organization, we
                                        may need to transfer some or all of your personal information to the relevant
                                        third party (or its advisors) as part of any due diligence process for the
                                        purpose of analysing any proposed sale or re-organization. We may also need to
                                        transfer your personal information to that re-organization entity or third party
                                        after the sale or reorganization for them to use for the same purposes as set
                                        out in this policy.
                                    </li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>Genuine Policy in order to allow us
                                            to change our business.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; <b>Legal or
                                            regulatory obligations: </b>We process your
                                        personal information to comply with our regulatory requirements or as part of
                                        dialogue with our regulators as applicable which may include disclosing your
                                        personal information to third parties, the court service, regulators and/or law
                                        enforcement agencies in connection with inquiries, proceedings or investigations
                                        by such parties anywhere in the world or where compelled to do so. Where
                                        permitted, we will direct any such request to you or notify you before
                                        responding unless to do so would prejudice the prevention or detection of a
                                        crime.
                                    </li>
                                    <ol>
                                        <li><i class="far fa-dot-circle" style="color: #28a745;"> </i>&nbsp; <b>Why we
                                                do
                                                this: </b>To establish transparent and health
                                            cooperation with law enforcement and regulatory authorities.
                                        </li>
                                    </ol>
                                </ul>
                            </ol>
                        </li>
                    </ul>
                    <br>
                    <h5 class="text-xl font-semibold text-black">4. TRANSMISSION, STORAGE AND SECURITY OF YOUR PERSONAL
                        INFORMATION</h5>
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>4.1 &nbsp;</strong>SECURITY OVER THE WORLD WIDE WEB
                            </p>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Data transmission
                                    one the internet or the website cannot be guaranteed to
                                    be safe from intrusion. We, however; commercially compliant electronic, physical
                                    and
                                    relevant safeguard methods to protect your personal information.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; All information
                                    you provide to us is stored on our secure servers and are
                                    accessed and used subject to our security standards.</li>
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i><b>&nbsp; (For
                                        international Customers) </b>Your personal information will be
                                    accessed by staff or suppliers in, transferred to, and/or stored at, a
                                    destination
                                    outside the country in which you are located, wherein data protection laws may
                                    be of
                                    a lower standard than those in your country. We will, however; in all
                                    circumstances,
                                    safeguard personal information as set out in this Privacy Policy.
                                </li>
                            </ul>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>4.2 &nbsp;</strong>DATA STORAGE LIMITS
                            </p>
                        <li class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;"><i
                                class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; We will retained your
                            stored
                            personal information
                            for as long as
                            necessary for purposes for which the data was originally collected or relevant
                            purpose linked to it. We may also retain your personal information for longer than
                            when we may have to comply with legal or regulatory requirements. Retention period
                            for your data would is considered based on the business need, or your tenure of
                            contract with us. When your personal information is no longer needed it is either
                            encrypted to prevent access or securely destroyed in accordance with our internal
                            standard policies.</li>
                </li>
                </ul>
                <br>
                <h5 class="text-xl font-semibold text-black">5. YOUR RIGHTS & CONTACTING US</h5>
                <ul class="list-disc list-inside ml-4 mt-2">
                    <li class="mb-2" data-wow-delay=".3s">
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <strong>5.1 &nbsp;</strong><b>MARKETING</b>
                        </p>
                        <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; You have every right to
                                ask us not to store, or process your personal
                                information for marketing purposes. You can exercise this right by either opting
                                out, unsubscribing, or contacting us at <a href="mailto:info@urlwebwala.com"
                                    class="list-text text-decoration-none"><b
                                        style="color: var(--tp-theme-redical)">info@urlwebwala.com</b></a>. (
                                whichever is applicable)</li>
                        </ul>
                        <br>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <strong>5.2 &nbsp;</strong><b>UPDATING INFORMATION</b>
                        </p>
                        <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; It is crucial that the
                                personal information we have about you is
                                accurate. For this purpose we will implement processes that reconfirm your data when
                                you contact us, however in event of any changes to your personal information from
                                your side, we’d request you to help us update them in our records as well by
                                contacting <a href="mailto:info@urlwebwala.com"
                                    class="list-text text-decoration-none"><b
                                        style="color: var(--tp-theme-redical)">info@urlwebwala.com</b></a>. This will
                                help us assist you better.</li>
                        </ul>
                        <br>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <strong>5.3 &nbsp;</strong><b>YOUR RIGHTS</b>
                        </p>
                        <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Should you have any
                                concerns, or questions in relation to the
                                storage or use of your personal information you should first contact us via <a
                                    href="mailto:info@urlwebwala.com" class="list-text text-decoration-none"><b
                                        style="color: var(--tp-theme-redical)">info@urlwebwala.com</b>. Under
                                    certain conditions, you have the right to require us to: </a></li>
                            <br>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; provide
                                        you with further details on how we use your
                                        personal information; </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; provide
                                        you with a copy of information that you have
                                        provided to us; </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; update
                                        any inaccuracies in the personal information we
                                        hold </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; delete
                                        any personal information the we no longer have a
                                        lawful ground to use; </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; object
                                        to any processing that Urlwebwala
                                        Private Limited justifies on the “Genuine Policy” ground unless our
                                        reasons
                                        for undertaking that processing outweigh any prejudice to your data
                                        protection rights; </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; object
                                        to direct marketing (including any profiling for
                                        such purposes); and </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; restrict
                                        how we use your information whilst we consider
                                        your inquiry </li>
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Where
                                        processing is
                                        based on consent, you have the right to
                                        withdraw your consent by contacting us at <a href="mailto:info@urlwebwala.com"
                                            class="list-text text-decoration-none"><b
                                                style="color: var(--tp-theme-redical)">info@urlwebwala.com</b></a>
                                    </li>
                                </ul>
                            </ol>
                            <br>
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; Your exercise of these
                                rights is subject to certain exemptions to
                                safe-guard the public interest (e.g. the prevention or detection of crime) and our
                                interests (e.g. the maintenance of legal privilege). If you exercise any of these
                                rights we will check your entitlement and respond in most cases within a month. </li>
                            <br>
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; If you are not satisfied
                                with our use of your personal information
                                or our response to any exercise of these rights you have the right to complain to
                                the data protection regulator in your country. </li>
                        </ul>
                        <br>
                        <p class="text-grey wow tpfadeUp"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <strong>5.4 &nbsp;</strong><b>CONTACTING US</b>
                        </p>
                        <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                            style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                            <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; If you have any
                                questions in relation to this Privacy Policy,
                                please contact email <a href="mailto:info@urlwebwala.com"
                                    class="list-text text-decoration-none"><b
                                        style="color: var(--tp-theme-redical)">info@urlwebwala.com</b></a></li>
                        </ul>
                        <br>
                        <h5 class="text-xl font-semibold text-black">6. COOKIES POLICY</h5>
                        <ul class="list-disc list-inside ml-4 mt-2">
                            <li class="mb-2" data-wow-delay=".3s">
                                <p class="text-grey wow tpfadeUp"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    We use cookies on the websites. To find out more about
                                    how we use cookies, please
                                    see our Cookies Policy here.
                                </p>
                            </li>
                        </ul>
                        <br>
                        <h5 class="text-xl font-semibold text-black">7. CHANGES TO OUR PRIVACY STATEMENT AND/OR COOKIES
                            POLICY</h5>
                        <ul class="list-disc list-inside ml-4 mt-2">
                            <li class="mb-2" data-wow-delay=".3s">
                                <p class="text-grey wow tpfadeUp"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    Based on required international or internal standards and compliance with
                                    regulatory authorities, we may update or change the content of our websites, our
                                    cookie policy and
                                    our privacy statement, from time to time. For the cookie and privacy statement
                                    specifically, we will
                                    update the date when the policy/statements were last changed. If these changes are
                                    material, we will
                                    take reasonable steps to notify you of the changes.
                                </p>
                            </li>
                        </ul>
                        <br>
                        <h5 class="text-xl font-semibold text-black">8. ANNEX</h5>
                        <ul class="list-disc list-inside ml-4 mt-2">
                            <li class="mb-2" data-wow-delay=".3s">
                                <p class="text-grey wow tpfadeUp"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    These are the principal legal grounds that justify our use of your information:
                                </p>
                            </li>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;<b> Consent:</b></li>
                            </ul>

                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; where you have
                                        consented to our use of your information you will have been
                                        presented with a con-sent form in relation to any such use and may with-draw
                                        your consent by
                                        each departments means through which we are interacting with you or by email
                                        to<a href="mailto:info@urlwebwala.com"
                                            class="list-text text-decoration-none"><b
                                                style="color: var(--tp-theme-redical)">info@urlwebwala.com</b></a></li>
                                </ul>
                            </ol>
                            <br>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;<b> Contract
                                        performance:</b></li>
                            </ul>

                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; where your
                                        information is necessary to enter into or perform our contract
                                        with you.</li>
                                </ul>
                            </ol>
                            <br>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;<b> Legal
                                        obligation:</b></li>
                            </ul>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; where we need to
                                        use your information to comply with our legal obligations.</li>
                                </ul>
                            </ol>
                            <br>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;<b> Legitimate
                                        interests:</b></li>
                            </ul>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp; where we use
                                        your information to achieve a legitimate interest and our
                                        reasons for using it outweigh any prejudice to your data protection rights.</li>
                                </ul>
                            </ol>
                            <br>
                            <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;<b> Legal claims:</b>
                                </li>
                            </ul>
                            <ol>
                                <ul class="text-grey wow tpfadeUp; padding-left: 0;"
                                    style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                    <li><i class="far fa-dot-circle" style="color: #28a745;"></i>&nbsp;where your
                                        information is necessary for us to defend, prosecute or make a
                                        claim against you, us or a third party.</li>
                                </ul>
                            </ol>
                        </ul>
                    </li>
                </ul>
            </ol>
        </div>
    </div>
</main>
@endsection