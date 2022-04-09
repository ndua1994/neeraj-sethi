(function($) {
    "use strict";

    /*-------------------------------------
	Background image
	-------------------------------------*/
    $("[data-bg-image]").each(function() {
        var img = $(this).data("bg-image");
        $(this).css({
            backgroundImage: "url(" + img + ")"
        });
    });

    /*-------------------------------------
    After Load All Content Add a Class
    -------------------------------------*/
    window.onload = addNewClass();

    function addNewClass() {
        $('.fxt-template-animation').imagesLoaded().done(function(instance) {
            $('.fxt-template-animation').addClass('loaded');
        });
    }

    /*-------------------------------------
    Toggle Class
    -------------------------------------*/
    $(".toggle-password").on('click', function() {
        $(this).toggleClass("fa-eye fa-eye-slash");
        var input = $($(this).attr("toggle"));
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    /*-------------------------------------
    Youtube Video
    -------------------------------------*/
    if ($.fn.YTPlayer !== undefined && $("#fxtVideo").length) {
        $("#fxtVideo").YTPlayer({ useOnMobile: true });
    }

    /*-------------------------------------
    Vegas Slider
    -------------------------------------*/
    if ($.fn.vegas !== undefined && $("#vegas-slide").length) {
        var target_slider = $("#vegas-slide"),
            vegas_options = target_slider.data('vegas-options');
        if (typeof vegas_options === "object") {
            target_slider.vegas(vegas_options);
        }
    }

    /*-------------------------------------
    OTP Form (Focusing on next input)
    -------------------------------------*/
    $("#otp-form .otp-input").keyup(function() {
        if (this.value.length == this.maxLength) {
            $(this).next('.otp-input').focus();
        }
    });

    /*-------------------------------------
	Social Animation
	-------------------------------------*/
    $('#fxt-login-option >ul >li').hover(function() {
        $('#fxt-login-option >ul >li').removeClass('active');
        $(this).addClass('active');
    });

    /*-------------------------------------
    Preloader
    -------------------------------------*/
    $('#preloader').fadeOut('slow', function() {
        $(this).remove();
    });

})(jQuery);



$('#login-frm').validate({

rules:
{
    email_id:
    {
        required:true,
        email:true
    },
    password:
    {
        required:true
    }
},
messages:
{
    email_id:
    {
        required:'Email ID is required',
        email:'Enter a valid Email ID'
    },
    password:
    {
        required:'Password is required'
    }
},
submitHandler:function(form)
{
    $.ajax({

        url:base_url+'ajax/login.php',
        data:$('#login-frm').serializeArray(),
        type:'POST',
        dataType:'json',
        beforeSend:function()
        {
            $('button[name="login_submit"]').html('WAIT...');
            $('button[name="login_submit"]').prop('disabled',true);
        },
        success:function(r)
        {
            if(r.status=='success')
            {
                window.location=base_url_main;
            }
            else
            {
                $('#login-frm')[0].reset();
                $('button[name="login_submit"]').html('Log In');
                $('button[name="login_submit"]').prop('disabled',false);
                swal({
                icon: 'warning',
                title: r.msg,
                showDenyButton: false,
                confirmButtonText: 'OK',
                denyButtonText: `No`,
                });
            }

        }


    });
}

});