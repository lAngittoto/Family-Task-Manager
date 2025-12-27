const input = document.querySelector("#phone");

const iti = window.intlTelInput(input, {
    initialCountry: "ph",
    separateDialCode: true,
    utilsScript: "node_modules/intl-tel-input/build/js/utils.js",
    onlyCountries: ["ph","us","gb","ca"]
});

// On submit, convert input to full international format
input.form.addEventListener("submit", function() {
    input.value = iti.getNumber(); // e.g., +639123456789
});
