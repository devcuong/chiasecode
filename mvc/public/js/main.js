$(document).ready(function() {
	$("#username").keyup(function() {
		var user = $(this).val();
		$.post("./api/CheckUsername", {
			un : user
		}, function(data) {
			var kq = JSON.parse(data);
			if (kq) {
				$("#messageCheckUser").html("Tên này đã có");
				$("#messageCheckUser").addClass("message-red");
				$("#messageCheckUser").removeClass("message-green");
			}

			else {
				$("#messageCheckUser").html("Tên này có thể dùng được");
				$("#messageCheckUser").addClass("message-green");
				$("#messageCheckUser").removeClass("message-red");
			}

		});
	})
	$("#email-dang-ky").keyup(function() {
		var email = $(this).val();
		if(isEmail(email)){
			$.post("./api/CheckEmail", {
				email: 
			});
			$("#messageCheckEmail").html("Email này có thể dùng được");
			$("#messageCheckEmail").addClass("message-green");
			$("#messageCheckEmail").removeClass("message-red");
		}
	})
});
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}