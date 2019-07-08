var Login = function () {
    $('.login-form').validate({
        errorElement: 'span', //default input error message container
        errorClass: 'help-block', // default input error message class
        focusInvalid: false, // do not focus the last invalid input
        rules: {
            username: {
                required: true
            },
            password: {
                required: true
            }
        },

        messages: {
            username: {
                required: "Username is required."
            },
            password: {
                required: "Password is required."
            }
        },
        highlight: function (element) { // hightlight error inputs
            $(element).closest('.form-group').addClass('has-error'); // set error class to the control group
        },
        submitHandler: submitForm
    });

    function submitForm() {
        var data = $("#login-form").serialize();
        $.ajax({
            type: "POST",
            url: baseurl + "admin/ajax_admin_login",
            data: data,
            beforeSend: function () {
                $("#error").fadeOut();
                $("#login_button").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Logging ...');
            },
            success: function (response) {
                if ($.trim(response) === "success") {
                    console.log("Login Success..!");
                    $("#login-submit").html("Signing In ...");
                    setTimeout(' window.location.href = "admin/dashboard"; ', 1000);
                } else {
                    showNotifications('Invalid Credentials', '', 'error');
                }
            }
        });

        return false;
    }

}();