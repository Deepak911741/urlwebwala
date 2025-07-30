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
                        <h3 class="breadcrumb__title">Terms & Conditions</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="contact-page-area pt-20 pb-20">
        <div class="container mx-auto px-4">
            <div class="mb-10">
                <h3 class="text-black text-3xl font-bold">Terms and Conditions</h3>
            </div>
            <ol class="list-decimal list-inside text-gray-500">
                <li class="mb-4">
                    <ul class="list-disc list-inside ml-4 mt-2">
                        <li class="mb-2" data-wow-delay=".3s">
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>1 &nbsp;</strong>Please read these Terms and Conditions carefully before using
                                <a href="https://www.urlwebwala.com" target="_blank"
                                    class="list-text text-decoration-none"> <b
                                        style="color: var(--tp-theme-redical)">&nbsp;www.urlwebwala.com</b></a>
                            </p>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>2 &nbsp;</strong>The user must agree and accept all the "Terms and Conditions"
                                before using
                                <a href="https://www.urlwebwala.com" target="_blank"
                                    class="list-text text-decoration-none"> <b
                                        style="color: var(--tp-theme-redical)">&nbsp;www.urlwebwala.com</b>
                                    &nbsp;website</a>.
                            </p>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>3 &nbsp;</strong> <a href="https://www.urlwebwala.com" target="_blank"
                                    class="list-text text-decoration-none"> This website<b
                                        style="color: var(--tp-theme-redical)">&nbsp; www.urlwebwala.com</b>
                                    &nbsp;</a>is owned and operated by Urlwebwala
                                Technologies Private Limited only. All content present on this site is the property of
                                Urlwebwala
                                Technologies Private Limited including all the graphics, images, logos, software,
                                trademarks, video,
                                text, audio and animation used on this Site.
                            </p>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>4 &nbsp;</strong>Urlwebwala Technologies Private Limited name and logo is the
                                trademark of Urlwebwala
                                Technologies Private Limited only. These trademarks &amp; logo may not be used in any
                                manner. You may
                                not copy, reproduce, republished, use, adapt, modify and alter these contents of this
                                website without
                                the permission of Urlwebwala Technologies Private Limited. You must not use any contact
                                information and
                                e-mail addresses which may be found on this website to send any unsolicited commercial
                                information.
                            </p>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>5 &nbsp;</strong>The link of the third party website address may found on this
                                websites, so we are not
                                responsible for the contents of such sites or whole website (third party) at all. The
                                Third party
                                website is not under control of Urlwebwala Technologies Private Limited at all. You at
                                your own risk may
                                access to such other sites via the links contained on this website.
                            </p>
                            <p class="text-grey wow tpfadeUp"
                                style="visibility: visible;animation-name: tpfadeUp;font-size: 18px;">
                                <strong>6 &nbsp;</strong>Urlwebwala Technologies Private Limited shall have no
                                responsibility for any damage to
                                your computer system or loss of data that results from the download of any information
                                from this Site.
                            </p>
                        </li>
                    </ul>
            </ol>
        </div>
    </div>
</main>

@endsection