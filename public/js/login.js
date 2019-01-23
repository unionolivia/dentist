$(function () {
    $('.login').on('click', function (e) {
        e.preventDefault();

        // Let get the Email and Password
        var email = $('#email').val();
        var password = $('#password').val();

        if (email === '') {
            $('#email').focus();
            return false;
        }
        if (password === '') {
            $('#password').focus();
            return false;
        }

        var logMeIn = $.ajax({
            type: 'POST',
            url: 'register/logMeIn',
            data: {email: email, password: password},
            dataType: 'json'
        });

        $('.loading').html('<div class="preloader-wrapper small active">\n\
<div class="spinner-layer spinner-green-only"><div class="circle-clipper left">\n\
<div class="circle"></div></div><div class="gap-patch"><div class="circle">\n\
</div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>');

        logMeIn.done(function (data, textStatus, jqXHR) {
            if (data.message === 'a') {
                swal({title: "Authentication!",
                    text: "You are a recognised Administrator!",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#bbdefb",
                    confirmButtonText: "proceed",
                    closeOnConfirm: false},
                        function () {
//              swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                            window.location.replace('dashboard');
                        });
                return false;
            }
            if (data.message === 'p') {
                swal({title: "Authentication!",
                    text: "You are a recognised patient!",
                    type: "success",
                    showCancelButton: false,
                    confirmButtonColor: "#bbdefb",
                    confirmButtonText: "proceed",
                    closeOnConfirm: false},
                        function () {
//              swal("Deleted!", "Your imaginary file has been deleted.", "success"); 
                            window.location.replace('patient');
                        });
                return false;
            }
            if (data.message === 'd') {
                window.location.replace('user');
                return false;
            }
            
             if (data.message === false) {
                swal("It seems you don't have an account with us!", "", "warning")
                return false;
            }
            

            return false;
        });

        logMeIn.fail(function (jqXHR, textStatus, errorThrown) {
             swal("It seems you don't have an account with us!", "", "warning")
        });

        logMeIn.always(function (data, textStatus, jqXHR) {
            $('.loading').css('display', 'none');
            return false;
        });

    });
});
