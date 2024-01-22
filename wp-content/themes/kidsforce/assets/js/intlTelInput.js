let masks = {};

const inputElements = $('input[type="tel"]');

inputElements.each(function () {
    const input = $(this);
    const maskPlaceholder = input.attr('data-mask-placeholder');

    input.intlTelInput({
        geoIpLookup: function (callback) {
            $.get("http://ipinfo.io", function () { }, "jsonp").always(function (resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },
        initialCountry: "UA",
        preferredCountries: ['UA', "PL", "SK", "HU", "MD", "RO"],
        excludeCountries: ['RU', "BY"],
        separateDialCode: true
    });

    // Отримання країни за допомогою intlTelInput
    const selectedCountry = input.intlTelInput('getSelectedCountryData');
    const dialCode = selectedCountry.dialCode;
    let maskNumber = intlTelInputUtils.getExampleNumber(selectedCountry.iso2, 0, 0);

    if (maskNumber) {
        maskNumber = intlTelInputUtils.formatNumber(maskNumber, selectedCountry.iso2, 2);
        maskNumber = maskNumber.replace('+' + dialCode + ' ', '');
        const mask = maskNumber.replace(/[0-9+]/ig, '0');

        input.mask(mask, { placeholder: maskNumber });
        masks[input.attr('id')] = mask;
    }

    // Обробник події countrychange
    input.on('countrychange', function (e) {
        const selectedCountry = input.intlTelInput('getSelectedCountryData');
        const dialCode = selectedCountry.dialCode;
        let maskNumber = intlTelInputUtils.getExampleNumber(selectedCountry.iso2, 0, 0);

        input.val('');

        if (maskNumber) {
            maskNumber = intlTelInputUtils.formatNumber(maskNumber, selectedCountry.iso2, 2);
            maskNumber = maskNumber.replace('+' + dialCode + ' ', '');
            const mask = maskNumber.replace(/[0-9+]/ig, '0');

            input.mask(mask, { placeholder: maskNumber });
            masks[input.attr('id')] = mask;
        }
    });
});

$('button[type="submit"]').on('click', function (e) {
    e.preventDefault();

    const button = $(e.target);

    const form = $(this).closest('form');
    const telInput = form.find('input[type="tel"]');
    const nameInput = form.find('input[name="name"]');
    const titleInput = form.find('input[name="title"]')

    const telNumber = telInput.intlTelInput('getNumber');
    const telIso = telInput.intlTelInput('getSelectedCountryData').iso2;
    const isValidTelNumber = intlTelInputUtils.isValidNumber(telNumber, telIso);

    isValidTelNumber ? telInput.addClass('valid') : telInput.addClass('invalid');

    const nameValue = nameInput.val().trim();
    const isValidName = (nameValue !== '' && /^[a-zA-Zа-яА-Я\s]+$/.test(nameValue));

    isValidName ? nameInput.addClass('valid') : nameInput.addClass('invalid');

    if (isValidTelNumber && isValidName) {
        const formData = {
            action: 'send_mail',
            name: nameValue,
            phone: telNumber,
            title: titleInput.val()
        };

        form[0].reset();
        button.prop('disabled', true);

        const ctaFormWrapper = $('.cta-form__wrapper');
        const contactsFormWrapper = $('.contacts-form__wrapper');

        ctaFormWrapper.addClass('loading');
        contactsFormWrapper.addClass('loading')

        $.ajax({
            type: 'POST',
            url: settings.ajax_url,
            data: formData,
            success: function(response) {
                $('.cta-wrapper').addClass('mail-send');
                ctaFormWrapper.removeClass('loading');

                contactsFormWrapper.addClass('mail-send');
                contactsFormWrapper.removeClass('loading');

                button.prop('disabled', false);
            },
            error: function(error) {
                console.error('Error submitting form', error);
            }
        });
    }
});

$('input').on("input", function () {
    const $this = $(this);
    if ($this.hasClass("invalid")) {
        $this.removeClass("invalid");
    }

    if ($this.hasClass("valid")) {
        $this.removeClass("valid");
    }
});

const titleInput = $('#cta-form input[name="title"]');
$('.feedback-js').on("click", function () {
    const $this = $(this);
    const title = $this.data('title')

    titleInput.val(title);
})
