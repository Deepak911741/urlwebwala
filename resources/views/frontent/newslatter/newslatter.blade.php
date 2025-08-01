<style>
.newsletter-overlay {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.4);
    display: flex;
    justify-content: center;
    align-items: center;
    z-index: 999;
    padding: 16px;
}

.newsletter-popup-container {
    display: flex;
    background: white;
    border-radius: 16px;
    overflow: hidden;
    width: 100%;
    max-width: 800px;
    max-height: 90vh;
    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
    position: relative;
    flex-direction: row;
}

.newsletter-popup-image {
    flex: 1;
    min-width: 250px;
}

.newsletter-popup-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.newsletter-popup-content {
    flex: 1;
    padding: 40px 30px;
}

.newsletter-popup-content h2 {
    font-size: 1.5rem;
    font-weight: 700;
    color: #1a1a1a;
    margin-bottom: 12px;
}

.newsletter-popup-content p {
    color: #555;
    font-size: 1rem;
    margin-bottom: 20px;
}

.newsletter-input-wrapper {
    position: relative;
    width: 100%;
    margin-bottom: 16px;
}

.newsletter-input-wrapper input {
    width: 100%;
    padding: 12px 46px 12px 14px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    outline: none;
    background: #fff;
    height: 44px;
    box-sizing: border-box;
}

.newsletter-input-icon {
    position: absolute;
    top: 50%;
    right: 14px;
    transform: translateY(-50%);
    width: 20px;
    height: 20px;
    pointer-events: none;
    opacity: 0.6;
}

.newsletter-dropdown-wrapper {
    width: 100%;
    margin-bottom: 16px;
}
.nice-select {
    width: 100% !important;
    display: block;
}

.nice-select .list {
    width: 100% !important;
    max-height: 200px;
    /* Adjust as needed */
    overflow-y: auto;
    /* Enable scrolling */
    overflow-x: hidden;
}

.nice-select .option {
    white-space: normal;
    /* Allow long text to wrap */
}

.nice-select .list::-webkit-scrollbar {
    width: 6px;
}

.nice-select .list::-webkit-scrollbar-thumb {
    background-color: #ccc;
    border-radius: 6px;
}

l .newsletter-dropdown-wrapper select {
    width: 100%;
    padding: 12px 14px;
    font-size: 1rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    background: #fff;
    outline: none;
    height: 44px;
    display: block;
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
}


.newsletter-subscribe-btn {
    background-color: #032b5f;
    color: white;
    border: none;
    width: 100%;
    padding: 12px;
    font-size: 1rem;
    border-radius: 8px;
    font-weight: 600;
    cursor: pointer;
}

.newsletter-subscribe-btn:hover {
    background-color: #ff321f;
}

.newsletter-no-thanks {
    background: none;
    border: none;
    color: #555;
    margin-top: 15px;
    cursor: pointer;
    font-size: 0.9rem;
}

.newsletter-privacy-text {
    margin-top: 25px;
    font-size: 0.8rem;
    color: #777;
}

.newsletter-privacy-text a {
    color: #0056ff;
    text-decoration: none;
}

.newsletter-close-btn {
    position: absolute;
    top: 20px;
    right: 25px;
    font-size: 24px;
    background: none;
    border: none;
    cursor: pointer;
    color: #888;
}

/* ✅ Green Success Box */
.newsletter-confirmation-box {
    display: none;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: #28a745;
    color: #fff;
    padding: 20px 30px;
    border-radius: 12px;
    font-size: 1.1rem;
    font-weight: 500;
    text-align: center;
    z-index: 10000;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
    animation: fadeIn 0.4s ease-in-out;
}

@keyframes fadeIn {
    from {
        opacity: 0;
        transform: translate(-50%, -60%);
    }

    to {
        opacity: 1;
        transform: translate(-50%, -50%);
    }
}

@media screen and (max-width: 768px) {
    .newsletter-popup-container {
        flex-direction: column;
        height: auto;
        max-height: 95vh;
    }

    .newsletter-popup-image {
        display: none;
    }

    .newsletter-popup-content {
        padding: 10px 15px;
    }

    .newsletter-close-btn {
        top: 15px;
        right: 20px;
    }
}
.input-error{
    color: red;
    font-size: 0.9rem;
    margin-top: 5px;
}
</style>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
<div class="newsletter-overlay" id="popup">
    <div class="newsletter-popup-container">
        <div class="newsletter-popup-image">
            <img src="{{asset ('public/images/newslatter/vr-guy.png')}}" alt="VR Guy" />
        </div>
        <div class="newsletter-popup-content">
            <button class="newsletter-close-btn" onclick="closePopup()">×</button>
            <h2>Subscribe to Our Newsletter</h2>
            <p>Subscribe to our newsletter & get notifications about discounts.</p>
            {{ Webwala::readMessage() }}
            <form id="newsletterForm" action="{{ config('constants.NEWSLATTER_URL') . '/add' }}" method="POST">
                @csrf
                <div class="newsletter-input-wrapper">
                    <img src="{{asset ('public/images/newslatter/email-svgrepo-com.svg')}}"
                        class="newsletter-input-icon" alt="Email Icon">
                    <input type="email" name="email" id="email" placeholder="Enter Email address"/>
                </div>

                <div class="newsletter-input-wrapper">
                    <img src="{{asset ('public/images/newslatter/phone-plus-alt-svgrepo-com.svg')}}"
                        class="newsletter-input-icon" alt="Phone Icon">
                    <input type="tel" id="mobile" name="mobile" placeholder="Enter Phone Number"/>
                </div>

                <div class="newsletter-dropdown-wrapper">
                    <div class="newsletter-select-icon-wrapper">
                        <select id="requirements" name="service_id" required>
                            <option value="" disabled selected>Select an option</option>
                            @if (isset($services) && !empty($services))
                                @foreach ($services as $service)
                                    <option value="{{ (isset($service) && !empty($service->i_id) ? Webwala::encode($service->i_id) : 0) }}">{{ (isset($service) && !empty($service->v_service_name) ? ($service->v_service_name) : 0) }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
                <button type="submit" class="newsletter-subscribe-btn">Subscribe</button>
            </form>
            <button class="newsletter-no-thanks" onclick="closePopup()">No, Thanks</button>
            <p class="newsletter-privacy-text">
                By subscribing to our newsletter you agree to our
                <a href="{{ config('constants.PRIVICYPOLICY_URL') }}">Privacy Policy</a>.
            </p>
        </div>
    </div>
</div>

<script>
    $(document).ready(function () {
    $.validator.addMethod("notDefault", function (value) {
        return value !== "#";
    }, "Please select a valid option.");

    $("#newsletterForm").validate({
        errorClass: "input-error",
        rules: {
            email: {
                required: true,
                email: true
            },
            mobile: {
                required: true,
                // digits: true,
            },
            service_id: {
                required: true,
            }
        },
        messages: {
            email: {
                 required: '{{ trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.email") ]) }}',
            },
            mobile: {
                required: '{{ trans("messages.required-enter-field-validation" , [ "fieldName" => trans("messages.mobile-no") ]) }}',
            },
            service_id: {
                required: '{{ trans("messages.required-select-field-validation" , [ "fieldName" => trans("messages.service") ]) }}',
            }
        },
        submitHandler: function (form) {
            form.submit();
        }
    });
});

    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>