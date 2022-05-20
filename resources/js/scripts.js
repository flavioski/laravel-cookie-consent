// PARAMETERS
const SCRIPT = document.getElementById('__laravel-cookie-consent-script');
const COOKIE_CONSENT_NAME = SCRIPT.getAttribute('data-cookie-name');
const COOKIE_LIFETIME = SCRIPT.getAttribute('data-cookie-lifetime');
const COOKIE_TYPES = JSON.parse(SCRIPT.getAttribute('data-cookie-types'));
let COOKIE_SELECTED = JSON.parse(SCRIPT.getAttribute('data-cookie-selected'));
const COOKIE_VALUE_YES = "YES";
const SESSION_SECURE = SCRIPT.getAttribute('data-session-secure');
const COOKIE_BTN_LABEL_ACCEPT_ALL = SCRIPT.getAttribute('data-button-label-accept-all');
const COOKIE_BTN_LABEL_ACCEPT_SELECTED = SCRIPT.getAttribute('data-button-label-accept-selected');

// ELEMENTS
let cookieBanner = document.getElementById("__cookie-consent");
let cookieBannerOpenLinks = document.getElementsByClassName("__cookie-consent-open-link");
let acceptButton = document.getElementById("__cookie-consent-accept");
let rejectButton = document.getElementById("__cookie-consent-reject");
let saveChangesButton = document.getElementById("__cookie-consent-save-changes");
let closeButton = document.getElementById("__cookie-consent-close-button");
let closeRejectButton = document.getElementById("__cookie-consent-reject-button");
let manageCookieButton = document.getElementById("manage-cookies-btn");
let cookieDescriptionModal = document.getElementById("__cookie-descriptions");
let accordions = document.getElementsByClassName("__cookie-modal-accordion");
let closeModalButton = document.getElementById("__cookie-info-close-button");

// SCRIPT EXECUTION
window.laravelCookieConsent = (function () {
    function rejectAllCookies() {
        setCookieConsentClose();
        closeCookieDialog();
        refreshPage();
    }
    function consentSelectedCookies() {
        if(this.textContent === COOKIE_BTN_LABEL_ACCEPT_SELECTED) {
            COOKIE_SELECTED.forEach(cookie_name => setCookie(cookie_name, COOKIE_VALUE_YES, COOKIE_LIFETIME));
        }
        else {
            let allCookieSelected = Object.values(COOKIE_TYPES);
            allCookieSelected.forEach(cookie_name => {
                if(cookie_name !== 'laravel_cookie_consent_necessary')
                    setCookie(cookie_name, COOKIE_VALUE_YES, COOKIE_LIFETIME);
            });
        }
        setCookieConsentClose();
        closeCookieDialog();
        refreshPage();
    }
    function saveChangesCookies() {
        let allCookies = Object.values(COOKIE_TYPES);
        allCookies.forEach(cookie_name => {
            if(cookie_name !== 'laravel_cookie_consent_necessary') {
                if(COOKIE_SELECTED.includes(cookie_name)) {
                    setCookie(cookie_name, COOKIE_VALUE_YES, COOKIE_LIFETIME);
                }
                else removeCookie(cookie_name);
            }
        });
        setCookieConsentClose();
        closeCookieDialog();
        refreshPage();
    }
    function setCookieConsentClose() {
        setCookie(COOKIE_CONSENT_NAME, COOKIE_VALUE_YES, COOKIE_LIFETIME);
    }
    function cookieExists(name) {
        return (document.cookie.split('; ').indexOf(name + '=' + COOKIE_VALUE_YES) !== -1);
    }
    function closeCookieDialog() {
        cookieBanner.classList.add("__cookie-consent-closed");
    }
    function openCookieDialog() {
        if(cookieBanner.classList.contains('__cookie-consent-closed')) cookieBanner.classList.remove("__cookie-consent-closed");
    }
    function openCookieDescription() {
        cookieDescriptionModal.classList.add('open');
    }
    function closeCookieDescription() {
        cookieDescriptionModal.classList.remove('open');
    }
    function toggleAccordion() {
        let type = this.dataset.type;
        for (let i = 0; i < accordions.length; i++) {
            let isOpen = accordions[i].classList.contains('open');
            accordions[i].classList.remove('open');
            if(!isOpen && accordions[i].dataset.type === type) accordions[i].classList.add('open');
        }
    }
    function refreshPage() {
        location.reload();
    }
    function setCookie(name, value, expirationInDays) {
        const date = new Date();
        date.setTime(date.getTime() + (expirationInDays * 24 * 60 * 60 * 1000));
        document.cookie = name + '=' + value + ';' + 'expires=' + date.toUTCString() + ';path=/' + (SESSION_SECURE === '1' ? ';secure' : '');
    }
    function removeCookie(name) {
        document.cookie = name +'=; Path=/; Expires=Thu, 01 Jan 1970 00:00:01 GMT;';
    }
    if(cookieExists(COOKIE_CONSENT_NAME)) {
        closeCookieDialog();
    }
    if(acceptButton) acceptButton.addEventListener('click', consentSelectedCookies);
    if(rejectButton) rejectButton.addEventListener('click', rejectAllCookies);
    if(saveChangesButton) saveChangesButton.addEventListener('click', saveChangesCookies);
    for (let i = 0; i < cookieBannerOpenLinks.length; i++) {
        cookieBannerOpenLinks[i].addEventListener("click", openCookieDialog);
    }
    if(closeButton) closeButton.addEventListener('click', closeCookieDialog);
    if(closeRejectButton) closeRejectButton.addEventListener('click', rejectAllCookies);
    if(closeModalButton) closeModalButton.addEventListener('click', closeCookieDescription);
    if(manageCookieButton) manageCookieButton.addEventListener('click', openCookieDescription);
    for (let i = 0; i < accordions.length; i++) {
        accordions[i].addEventListener("click", toggleAccordion);
    }
    return {
        consentSelectedCookies: consentSelectedCookies,
        rejectAllCookies: rejectAllCookies,
        closeCookieDialog: closeCookieDialog,
        openCookieDialog: openCookieDialog
    };
})();

// CLICK IN THE SINGLE CHECKBOX ACCEPT
const single_checkboxes = document.getElementsByClassName("single_checkbox_accept");
for (let k = 0; k < single_checkboxes.length; k++) {
    single_checkboxes[k].addEventListener("change", function() {
        checkSingleCheckbox(this, this.checked);
    });
}

// CHECK A SINGLE CHECKBOX ACCEPT
function checkSingleCheckbox(element, checked) {
    element.checked = checked;
    if(checked) COOKIE_SELECTED.push(element.value);
    else COOKIE_SELECTED.splice(COOKIE_SELECTED.indexOf(element.value), 1);
    if(acceptButton) {
        if(COOKIE_SELECTED.length > 0) acceptButton.textContent = COOKIE_BTN_LABEL_ACCEPT_SELECTED;
        else acceptButton.textContent = COOKIE_BTN_LABEL_ACCEPT_ALL;
    }
}
