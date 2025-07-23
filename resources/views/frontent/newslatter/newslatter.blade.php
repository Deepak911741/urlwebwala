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
</style>

<div class="newsletter-overlay" id="popup">
    <div class="newsletter-popup-container">
        <div class="newsletter-popup-image">
            <img src="{{asset ('public/images/newslatter/vr-guy.png')}}" alt="VR Guy" />
        </div>
        <div class="newsletter-popup-content">
            <button class="newsletter-close-btn" onclick="closePopup()">×</button>
            <h2>Subscribe to Our Newsletter</h2>
            <p>Subscribe to our newsletter & get notifications about discounts.</p>

            <form id="newsletterForm">
                <div class="newsletter-input-wrapper">
                    <img src="{{asset ('public/images/newslatter/email-svgrepo-com.svg')}}"
                        class="newsletter-input-icon" alt="Email Icon">
                    <input type="email" id="email" placeholder="Enter Email address" required />
                </div>

                <div class="newsletter-input-wrapper">
                    <img src="{{asset ('public/images/newslatter/phone-plus-alt-svgrepo-com.svg')}}"
                        class="newsletter-input-icon" alt="Phone Icon">
                    <input type="tel" id="phone" placeholder="Enter Phone Number" required />
                </div>

                <div class="newsletter-dropdown-wrapper">
                    <div class="newsletter-select-icon-wrapper">
                        <select id="requirements" name="requirements" required>
                            <option value="#" disabled selected>Select an option</option>
                            <option value="Web Development">Web Development</option>
                            <option value="Android Development">Android Development</option>
                            <option value="iOS App Development">iOS App Development</option>
                            <option value="HRMS & CRM Development">HRMS & CRM Development</option>
                            <option value="Vendor Portal Development">Vendor Portal Development</option>
                            <option value="Digital Marketing">Digital Marketing</option>
                            <option value="UI/UX Design">UI/UX Design</option>
                            <option value="SEO Services">SEO Services</option>
                            <option value="Support & Maintenance">Support & Maintenance</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                </div>

                <button type="submit" class="newsletter-subscribe-btn">Subscribe</button>
            </form>

            <button class="newsletter-no-thanks" onclick="closePopup()">No, Thanks</button>
            <p class="newsletter-privacy-text">
                By subscribing to our newsletter you agree to our
                <a href="privacypolicy.php">Privacy Policy</a>.
            </p>
        </div>
    </div>
</div>

<script>
    function closePopup() {
        document.getElementById("popup").style.display = "none";
    }
</script>