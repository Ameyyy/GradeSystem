$().ready(function() {
				$("#form").validate({
					rules : {
						
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 5,
							maxlength : 8
						}
		
						
					},
					messages: {
						
						password: {
							required: "Enter your password",
							
						},
						
						email: "Enter you email",
						
						
						
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});