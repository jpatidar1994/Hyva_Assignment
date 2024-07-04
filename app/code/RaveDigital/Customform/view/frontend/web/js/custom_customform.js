require([
    'jquery',
    'mage/validation',
    'mage/mage'
], function($){
    $('#ravedigital-customform-form').mage('validation', {
        submitHandler: function (form) {
            var formData = new FormData(form);

            $.ajax({
                url: $(form).attr('action'),
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    console.log("Done...");
                    $('#ajax-message').html('<div class="message success">' + response.message + '</div>');
                    $(form).trigger('reset'); 
                },
                error: function (response) {
                    $('#ajax-message').html('<div class="message error">' + response.message + '</div>');
                }
            });
            return false; // Prevent the form from submitting normally
        }
    });
});
