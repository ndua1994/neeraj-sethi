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
		email_id:'Enter a valid Email ID'
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
			$('button[name="login"]').html('WAIT...');
			$('button[name="login"]').prop('disabled',true);

		},
		success:function(r)
		{
			if(r.status=='success')
			{
				
				window.location=base_url+'dashboard.php';

			}
			else
			{
				$('#login-frm')[0].reset();
				$('button[name="login"]').html('Log In');
				$('button[name="login"]').prop('disabled',false);
				Swal.fire({
				icon: 'warning',
				title: r.msg,
				showDenyButton: false,
				confirmButtonText: 'OK',
				denyButtonText: `No`,
				})
			}

		}



	});
}



})


$('#category-frm').validate({


rules:
{
	cat_name:
	{
		required:true
	},
	cat_img_alt:
	{
		required:true
	},
	cat_descp:
	{
		required:true
	}

},
messages:
{
	cat_name:
	{
		required:'Name is required'
	},
	cat_img_alt:
	{
		required:'Image Alt Text is required'
	},
	cat_descp:
	{
		required:'Description is required'
	}
},
submitHandler:function(form)
{
	document.getElementById("category-frm").submit();

}


});


$('#pic-frm').validate({


rules:
{
	cat_id:
	{
		required:true
	},
	pic_img_alt:
	{
		required:true
	}

},
messages:
{
	cat_id:
	{
		required:'Category is required'
	},
	pic_img_alt:
	{
		required:'Pia Alt Text is required'
	}
},
submitHandler:function(form)
{
	document.getElementById("pic-frm").submit();

}


});


$('#otherinfo-frm').validate({



rules:
{
	mobile_no:
	{
		required:true,
		number:true
	},
	email_id:
	{
		required:true,
		email:true
	},
	twitter_link:
	{
		required:true,
		url:true
	},
	facebook_link:
	{
		required:true,
		url:true
	},
	insta_link:
	{
		required:true,
		url:true
	}

},
messages:
{
	mobile_no:
	{
		required:'Mobile Number is required',
		number:'Mobile Number must be a numeric value'
	},
	email_id:
	{
		required:'Email ID is required',
		email:'Enter a valid Email ID'
	},
	twitter_link:
	{
		required:'Twitter URL is required',
		url:'Enter a valid Twitter URL'
	},
	facebook_link:
	{
		required:'Facebook URL is required',
		url:'Enter a valid Facebook URL'
	},
	insta_link:
	{
		required:'Instagram URL is required',
		url:'Enter a valid Instagram URL'
	}
},
submitHandler:function(form)
{
	document.getElementById("otherinfo-frm").submit();

}


});


$('#memories-frm').validate({


rules:
{
	memo_img_alt:
	{
		required:true
	},
	memo_order:
	{
		required:true,
		number:true
	}

},
messages:
{
	memo_img_alt:
	{
		required:'Image Alt Text is required'
	},
	memo_order:
	{
		required:'Ordering is required',
		number:'Ordering must be a numeric value'
	}
},
submitHandler:function(form)
{
	document.getElementById("memories-frm").submit();

}


});




$('.del_rec').on('click',function(e){

e.preventDefault();
var $t=$(this);
var redirect_url=$t.attr('data-url');


Swal.fire({
  icon: 'question',
  title: 'Are you sure you want to delete ?',
  showDenyButton: true,
  confirmButtonText: 'Yes',
  denyButtonText: `No`,
}).then((result) => {
  if (result.isConfirmed) {
    window.location=redirect_url;
  } else if (result.isDenied) {
    return false;
  }
});

});


/*text editor js starts*/


// Class definition

var KTTinymce = function () {
    // Private functions
    var demos = function () {
        tinymce.init({
            selector: '#kt-tinymce-4',
            menubar: false,
            toolbar: ['styleselect fontselect fontsizeselect',
                'undo redo | cut copy paste | bold italic | link image | alignleft aligncenter alignright alignjustify',
                'bullist numlist | outdent indent | blockquote subscript superscript | advlist | autolink | lists charmap | print preview |  code'],
            plugins : 'advlist autolink link image lists charmap print preview code'
        });
    }

    return {
        // public functions
        init: function() {
            demos();
        }
    };
}();

// Initialization
jQuery(document).ready(function() {
    KTTinymce.init();
});


/*text editor js ends*/