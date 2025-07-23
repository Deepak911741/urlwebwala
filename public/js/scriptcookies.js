document.addEventListener("DOMContentLoaded", () => {
    const cookieContainer = document.querySelector(".cookie-container");
    const acceptBtn = document.querySelector("#acceptCookies");
    const denyBtn = document.querySelector("#denyCookies");

    // Check if cookie consent is already given
    const consent = localStorage.getItem("cookieConsent");

    if (consent === "accepted" || consent === "denied") {
        cookieContainer.classList.add("hide");
    } else {
        setTimeout(() => {
            cookieContainer.classList.remove("hide");
        }, 1000);
    }

    // Accept All Cookies
    acceptBtn.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "accepted");
        localStorage.setItem("analyticsCookies", "true");
        localStorage.setItem("marketingCookies", "true");
        cookieContainer.classList.add("hide");
    });

    // Deny All Cookies (Hide Banner Permanently)
    denyBtn.addEventListener("click", () => {
        localStorage.setItem("cookieConsent", "denied");
        localStorage.setItem("analyticsCookies", "false");
        localStorage.setItem("marketingCookies", "false");
        cookieContainer.classList.add("hide");
    });
});
