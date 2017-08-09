$().ready(function() {
				$("#form").validate({
					rules : {
						fname : {
						  required : true
						},
						lname : {
						  required : true
						},
						email : {
							required : true,
							email : true
						},
						password : {
							required : true,
							minlength : 5,
							maxlength : 8
						},
						cpassword : {
							required : true,
						
						},
						division: {
							required : true
						},
						sem: {
							required : true
						},
						rollno: {
							required : true
						},
					},
					messages: {
						fname: "Enter your First Name",
						lname: "Enter your Last Name",
						password: {
							required: "Enter your password",
							minlength: "Minimum password length is 5",
							maxlength: "Maximum password length is 8"
						},
						cpassword: {
							required: "Re-enter your password",
							minlength: "Minimum password length is 5",
							maxlength: "Maximum password length is 8"
						},
						email: "Enter you email",
						division: "Enter your Class",
						sem: "Enter a Semester",
						rollno: "Enter your Roll Number"
						
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});