<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body style="background-color:#efefef;font-family: 'Poppins', sans-serif; padding: 15px 0; font-family:'Jost', sans-serif !important; box-sizing: border-box;">
        <div style="color: #000; width: 600px !important; margin: 0 auto; background-color:#fff;  border-radius:5px; padding:0 20px;">
            <table width="100%" cellpadding="10" cellspacing="0" style="border-collapse:collapse;border:0;padding:0 50px;">
                <tr>
                    <td style="padding:0;">
                        <div style="text-align:center;padding:20px 0;border-bottom:1px solid #D3DBEB; width:100%;">
	                        @php
	                        	$websiteLogoSrc =  asset('public/images/logo/urlwebwala.png');
	                        	$siteTitle = config('constants.SITE_TITLE');
	                        @endphp
                            <a href="{{ config('constants.SITE_URL') }}"><img src="{{ $websiteLogoSrc }}" style="width:80px; object-fit:contain;margin:0 auto;" alt="{{ $siteTitle }}"></a>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td style="padding:0;">
                        <div style="color: #000; background-color:#fff; margin: 0 auto; padding-top:20px;">
                            <div style="color: #000; background-color:#fff; margin: 0 auto;">
                                <div style="padding:0px 0px">
                                    <div><strong style="font-size: 16px;text-align: justify;color: #202020;"> Dear {{ $name }}, </strong> </div> <br>
                                    <p style="padding-top: 3px; color: #383838;font-size: 16px; margin:0; margin-bottom:15px;"> You have received a New {{ (isset($recordType) && !empty($recordType) ? $recordType : 'contact us') }} mail on <a target="_blank" href="{{ config('constants.SITE_URL') }}">{{ (isset($settingsInfo->v_mail_title) && checkNotEmptyString($settingsInfo->v_mail_title) ? $settingsInfo->v_mail_title : '') }}</a>. You can find details below.</p>
                                    @if(isset($name) && checkNotEmptyString($name))
                                    <p style="padding-top: 3px; color: #383838;font-size: 16px; margin:0; margin-bottom:5px;"><span style="font-weight: 600;">Name:</span> {{ $name }}</p>
                                    @endif
                                    @if(isset($mobile) && checkNotEmptyString($mobile))
                                    <p style="padding-top: 3px; color: #383838;font-size: 16px; margin:0; margin-bottom:5px;"><span style="font-weight: 600;">Mobile:</span> {{ $mobile }}</p>
                                    @endif
                                    @if(isset($email) && checkNotEmptyString($email))
                                    <p style="padding-top: 3px; color: #383838;font-size: 16px; margin:0; margin-bottom:5px;"><span style="font-weight: 600;">Email:</span> {{ $email }}</p>
                                    @endif
                                    @if(isset($commentMessage) && checkNotEmptyString($commentMessage))
                                    <p style="padding-top: 3px; color: #383838;font-size: 16px; margin:0; margin-bottom:5px;"><span style="font-weight: 600;">Comments:</span> <br> {{ $commentMessage }}</p>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </td> 
                </tr>  
                <tr>
                    <td style="padding:0;"> 
                        <div style="text-align:center;padding:5px 0 35px;">
                            @if (isset($settingsInfo) && (checkNotEmptyString($settingsInfo->v_facebook_link) || checkNotEmptyString($settingsInfo->v_twitter_link) || checkNotEmptyString($settingsInfo->v_instagram_link) || checkNotEmptyString($settingsInfo->v_linkedin_link) || checkNotEmptyString($settingsInfo->v_youtube_link)))
                                <div class="email-social" style="text-align:center;padding:22px 0 18px; width:100%;">
                                    <ul style="display:flex;list-style:none;justify-content: center; width:fit-content;margin:0 auto; padding:0;">
                                        @if (checkNotEmptyString($settingsInfo->v_facebook_link))
                                            <li style="margin:0 5px;"><a href="{{ $settingsInfo->v_facebook_link }}"><img src="{{ asset('images/facebook.png') }}" alt="Facebook" style="width: 25px; height:25px; object-fit:content;"></a></li>
                                        @endif
                                        @if (checkNotEmptyString($settingsInfo->v_instagram_link))
                                            <li style="margin:0 5px;"><a href="{{ $settingsInfo->v_instagram_link }}"><img src="{{ asset('images/instagram.png') }}" alt="Instagram" style="width: 25px; height:25px; object-fit:content;"></a></li>
                                        @endif
                                        @if (checkNotEmptyString($settingsInfo->v_twitter_link))
                                            <li style="margin:0 5px;"><a href="{{ $settingsInfo->v_twitter_link }}"><img src="{{ asset('images/twitter.png') }}" alt="Twitter" style="width: 25px; height:25px; object-fit:content;"></a></li>
                                        @endif
                                        @if (checkNotEmptyString($settingsInfo->v_linkedin_link))
                                            <li style="margin:0 5px;"><a href="{{ $settingsInfo->v_linkedin_link }}"><img src="{{ asset('images/linkedin.png') }}" alt="Linkedin" style="width: 25px; height:25px; object-fit:content;"></a></li>
                                        @endif
                                        @if (checkNotEmptyString($settingsInfo->v_youtube_link))
                                            <li style="margin:0 5px;"><a href="{{ $settingsInfo->v_youtube_link }}"><img src="{{ asset('images/youtube.png') }}" alt="YouTube" style="width: 25px; height:25px; object-fit:content;"></a></li>
                                        @endif
                                    </ul>
                                </div>
                            @endif
                            <div style="max-width:350px;margin:0 auto; color:#606162;font-weight: 400;font-size: 14px;line-height: 24px;" class="copy-text">© <?php echo date('Y'); ?> {{ $siteTitle }}. All Rights Reserved.</div>
                        </div>
                    </td>
                </tr>
        </table>
    </div>
</body>
</html>