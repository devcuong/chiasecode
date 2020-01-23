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
		if (isEmail(email)) {
			$.post("./api/CheckEmail", {
				email : email
			}, function(data) {
				var kq = JSON.parse(data);
				if (!kq) {
					$("#messageCheckEmail").html("Email này có thể dùng được");
					$("#messageCheckEmail").addClass("message-green");
					$("#messageCheckEmail").removeClass("message-red");
				}
			});

		}
		else{
			$("#messageCheckEmail").html("Email không hợp lệ, xin kiểm tra lại");
			$("#messageCheckEmail").addClass("message-red");
			$("#messageCheckEmail").removeClass("message-green");
		}
	})
	$("#sdt-dang-ky").keyup(function() {
		var sdt = $(this).val();
		if(isPhone(sdt)){
			$.post("./api/CheckSdt", {
				sdt : sdt
			}, function(data) {
				var kq = JSON.parse(data);
				if (!kq) {
					$("#messageCheckSdt").html("Số điện thoại này có thể dùng được");
					$("#messageCheckSdt").addClass("message-green");
					$("#messageCheckSdt").removeClass("message-red");
				}
				else
				{
					$("#messageCheckSdt").html("Số điện thoại này đã được dùng");
					$("#messageCheckSdt").addClass("message-red");
					$("#messageCheckSdt").removeClass("message-green");
				}
				
			});
		}
		else {
			$("#messageCheckSdt").html("Số điện thoại không hợp lệ, xin kiểm tra lại");
			$("#messageCheckSdt").addClass("message-red");
			$("#messageCheckSdt").removeClass("message-green");
		}
	})
});
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function isPhone(phone){
	var regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
	return regex.test(phone);
}

$( "#btn-dang-ky-ngay" ).click(function() {
	  alert( "Handler for .click() called." );
	});