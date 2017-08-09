$().ready(function() {
				$("#form").validate({
					rules : {
						name : {
						  required : true
						},
						email : {
							required : true,
							email : true
						},
						pass : {
							required : true,
							minlength : 5,
							maxlength : 8
						},
						cpassword : {
							required : true,
							equalTo: "#pass"
						
						},
						dep: {
							required : true
						},
						sem: {
							required : true
						}
						
					},
					messages: {
						name: "Enter your Name",
						pass: {
							required: "Enter your password",
							minlength: "Minimum password length is 5",
							maxlength: "Maximum password length is 8"
						},
						cpassword: {
							required: "Re-enter your password",
							minlength: "Minimum password length is 5",
							maxlength: "Maximum password length is 8"
						},
						email: "Enter your email",
						dep: "Enter your Department",
						sem: "Enter a Semester",
						
						
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});