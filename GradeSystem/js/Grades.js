<script type="text/javascript">
			$().ready(function() {
				$("#form").validate({
					rules : {
						div : {
							required : true,
						},
						sub : {
							required : true,
						},
						roll_no : {
							required : true,
						}
			
					},
					messages: {
						div: "Enter your Class"
						sub: "Select a Subject"
						roll_no: "Enter you Roll Number",
					},
					submitHandler: function(form) {
						form.submit();
					}
				});
			});
		</script>