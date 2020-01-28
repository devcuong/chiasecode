$(document)
		.ready(
				function() {
					$("#username").keyup(
							function() {
								var user = $(this).val();
								$.post("./api/CheckUsername", {
									un : user
								}, function(data) {
									var kq = JSON.parse(data);
									if (kq) {
										$("#messageCheckUser").html(
												"Tên này đã có");
										$("#messageCheckUser").addClass(
												"message-red");
										$("#messageCheckUser").removeClass(
												"message-green");
									} else {
										$("#messageCheckUser").html(
												"Tên này có thể dùng được");
										$("#messageCheckUser").addClass(
												"message-green");
										$("#messageCheckUser").removeClass(
												"message-red");
									}
								});
							})
					$("#email-dang-ky")
							.keyup(
									function() {
										var email = $(this).val();
										if (isEmail(email)) {
											$
													.post(
															"./api/CheckEmail",
															{
																email : email
															},
															function(data) {
																var kq = JSON
																		.parse(data);
																if (!kq) {
																	$(
																			"#messageCheckEmail")
																			.html(
																					"Email này có thể dùng được");
																	$(
																			"#messageCheckEmail")
																			.addClass(
																					"message-green");
																	$(
																			"#messageCheckEmail")
																			.removeClass(
																					"message-red");
																}
															});

										} else {
											$("#messageCheckEmail")
													.html(
															"Email không hợp lệ, xin kiểm tra lại");
											$("#messageCheckEmail").addClass(
													"message-red");
											$("#messageCheckEmail")
													.removeClass(
															"message-green");
										}
									})
					$("#sdt-dang-ky")
							.keyup(
									function() {
										var sdt = $(this).val();
										if (isPhone(sdt)) {
											$
													.post(
															"./api/CheckSdt",
															{
																sdt : sdt
															},
															function(data) {
																var kq = JSON
																		.parse(data);
																if (!kq) {
																	$(
																			"#messageCheckSdt")
																			.html(
																					"Số điện thoại này có thể dùng được");
																	$(
																			"#messageCheckSdt")
																			.addClass(
																					"message-green");
																	$(
																			"#messageCheckSdt")
																			.removeClass(
																					"message-red");
																} else {
																	$(
																			"#messageCheckSdt")
																			.html(
																					"Số điện thoại này đã được dùng");
																	$(
																			"#messageCheckSdt")
																			.addClass(
																					"message-red");
																	$(
																			"#messageCheckSdt")
																			.removeClass(
																					"message-green");
																}

															});
										} else {
											$("#messageCheckSdt")
													.html(
															"Số điện thoại không hợp lệ, xin kiểm tra lại");
											$("#messageCheckSdt").addClass(
													"message-red");
											$("#messageCheckSdt").removeClass(
													"message-green");
										}
									})
				});



$("#btn-dang-ky-ngay").click(function() {
	var email = $('#email-dang-ky').val();
	if (email == '') {
		alert(email);
		$('#registerError').html('Vui lòng nhập địa chỉ email.');
		$('#email-dang-ky').addClass('validation-failed');
		$('#email-dang-ky').focus();
		return false;
	}
	if(!isEmail(email)){
		$('#registerError').html('Địa chỉ email không hợp lệ.');
		$('#email-dang-ky').addClass('validation-failed');
		$('#email-dang-ky').focus();
		return false;
	}
	var password = $('#password-dang-ky').val();
	if(password.length < 6 || password.length > 32){
		$('#registerError').html('Vui lòng nhập mật khẩu có độ dài từ 6-32 ký tự.');
		$('#password-dang-ky').addClass('validation-failed');
		$('#password-dang-ky').focus();
		return false;
	}
	var fullname = $('#ho-ten-dang-ky').val();
	if(fullname == ''){
		$('#registerError').html('Vui lòng nhập họ tên');
		$('#ho-ten-dang-ky').addClass('validation-failed');
		$('#ho-ten-dang-ky').focus();
		return false;
	}
	var username = $('#ten-hien-thi').val();
	if(username == ''){
		$('#registerError').html('Vui lòng nhập username');
		$('#ten-hien-thi').addClass('validation-failed');
		$('#ten-hien-thi').focus();
		return false;
	}
	var phone = $('#sdt-dang-ky').val();
	phone_pattern = /^(\+84|0)(([0-9]{9}))$/;
    if(phone == ''){
    	$('#registerError').html('Vui lòng nhập số điện thoại');
		$('#sdt-dang-ky').addClass('validation-failed');
		$('#sdt-dang-ky').focus();
		return false;
    }
    if(!phone.match(phone_pattern)){
    	$('#registerError').html('Số điện thoại không hợp lệ');
		$('#sdt-dang-ky').addClass('validation-failed');
		$('#sdt-dang-ky').focus();
		return false;
    }
    if ($('#chkRequirement').is(":checked") == false) {
        $('#registerError').html('Bạn phải đồng ý với điều khoản sử dụng.');
        return false;
    }
    
    var form = $("#frmDangKy");
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           success: function(data)
           {
               if(data){
            	   alert("ĐĂNG KÝ THÀNH CÔNG");
            	   $(location).attr('href', 'http://localhost/chiasecode/dang-ky/dang-ky-thanh-cong');
               }else{
            	   alert("ĐĂNG KÝ THẤT BẠI");
               }
           }
         });


});

$("#btn-login").click(function() {
	  var form = $("#frmDangNhap");
	  var url = form.attr('action');
	  $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data)
          {
             if(data){
            	  $(location).attr('href', 'http://localhost/chiasecode/');
             }
          }
        });
		
});

$('#btn-exit').click(function(){
	 $.ajax({
         type: "POST",
         url: "http://localhost/chiasecode/api/ThanhVienLogout",
         success: function(data)
         {
            if(data){
           	  $(location).attr('href', 'http://localhost/chiasecode/');
            }
         }
       });
});
$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:200,
      height:200,
      type:'square' //circle
    },
    boundary:{
      width:300,
      height:300
    }
  });

  $('#FileUpload1').on('change', function(){
    var reader = new FileReader();
    reader.onload = function (event) {
      $image_crop.croppie('bind', {
        url: event.target.result
      }).then(function(){
        console.log('jQuery bind complete');
      });
    }
    reader.readAsDataURL(this.files[0]);
    $('#uploadimageModal').modal('show');
  });

  $('.crop_image').click(function(event){
    $image_crop.croppie('result', {
      type: 'canvas',
      size: 'viewport'
    }).then(function(response){
      $.ajax({
        url:"http://localhost/chiasecode/api/ThanhVienUpload",
        type: "POST",
        data:{"image": response},
        success:function(data)
        {
          $('#uploadimageModal').modal('hide');
          $('#uploaded_image').html(data);
        }
      });
    })
  });
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function isPhone(phone) {
	var regex = /^(\+84|0)(([0-9]{9}))$/;
	return regex.test(phone);
}
