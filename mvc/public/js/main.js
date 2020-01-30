
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
  
  $('#txt-tag').tagEditor({
	  autocomplete: { source: ['ActionScript', 'AppleScript', 'Asp', 'BASIC', 'C', 'C++', 'CSS', 'Clojure', 'COBOL', 'ColdFusion', 'Erlang', 'Fortran', 'Groovy', 'Haskell', 'HTML', 'Java', 'JavaScript', 'Lisp', 'Perl', 'PHP', 'Python', 'Ruby', 'Scala', 'Scheme'], minLength: 2, delay: 250, html: true, position: { collision: 'flip' } },
      forceLowercase: false,
      placeholder: 'Tối thiểu 3 từ khóa',
      maxTags: 6,
      removeDuplicates: true,
      onChange: function (field, editor, tags) {
          ValidateTag();
      }
  });
  
  $('#btn-upload').click(function(event){
	 alert("ok"); 
  });
  
  $('#txt-title').blur(function(event){
	  validateTitle(); 
  });
  $('#txt-subtitle').blur(function(event){
	  ValidateSub();
  });
  $('#txt-link').blur(function(event){
	  ValidateLink();
  });
    
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function isPhone(phone) {
	var regex = /^(\+84|0)(([0-9]{9}))$/;
	return regex.test(phone);
}
//Function validate title upload
function validateTitle(){
	var kt = true;
	$('#title_error').html('');
	$('#txt-title').addClass('validation-failed');
    $('#txt-title').removeClass('validation-success');
    $('#successTitle').hide();
    var title = $('#txt-title').val();
    if (title == '') {
        $('#title_error').html('Vui lòng nhập tiêu đề.');
        kt = false;
    }
    else{
    	title = title.trim();
        title = title.replace(/\s+/g, ' ');
        $('#txt-title').val(title);
        if(title.length < 20){
        	$('#title_error').html('Tiêu đề phải dài hơn 20 kí tự.');
        	kt = false;
        }
        else{
        	$.ajax({
                url:"http://localhost/chiasecode/api/CheckCodeTitle",
                type: "POST",
                data:{"title": title},
                success:function(data)
                {
                  if(data == true){
                      $('#title_error').html('Tiêu đề đã tồn tại.');
                      kt = false;
                  }
                }
              });
        }
    }
    if(kt){
    	$("#txt-title").addClass('validation-success');
    	$("#successTitle").show();
    	return true;
    }else{
        $('#txt-title').addClass('validation-failed');
        return false;
    }
}

// Function validate SubTitle
function ValidateSub(){
	var kt = true;
	$('#subdetail_error').html('');
    $('#txt-subtitle').removeClass('validation-failed');
    $('#txt-subtitle').removeClass('validation-success');
    $('#successSub').hide();
    var subtitle = $('#txt-subtitle').val();
    if(subtitle == ''){
        $('#subdetail_error').html('Vui lòng nhập mô tả ngắn.');
        kt = false;
    }
    else{
    	subtitle = subtitle.trim();
    	subtitle = subtitle.replace(/\s+/g, ' '); // replace space anywhere in string
    	$('#txt-subtitle').val(subtitle);
    	if(subtitle.length < 70){
    		 $('#subdetail_error').html('Mô tả ngắn phải dài hơn 70 kí tự.');
             kt = false;
    	}
    }
    if(kt){
    	$('#txt-subtitle').addClass('validation-success');
    	$('#successSub').show();
        return true;
    }else{
    	$('#txt-subtitle').addClass('validation-failed');
        return false;
    }
}

// Function validate link
function ValidateLink(){
	var kt = true;
     $('#link_error').html('');
     $('#txt-link').removeClass('validation-failed');
     $('#txt-link').removeClass('validation-success');
     $('#successLink').hide();
     var link = $('#txt-link').val().trim();
     if (link == '') {
         $('#link_error').html('Vui lòng nhập link download.');
         kt = false;
     }else if(!(link.indexOf("http://")==0 || link.indexOf("https://") == 0)){
    	 $('#link_error').html('Link phải bắt đầu http://... (or) https://...');
    	 kt = false;
     }
     if (kt) {
         $('#txt-link').addClass('validation-success');
         $('#successLink').show();
         return true;
     } else {
         $('#txt-link').addClass('validation-failed');
         return false;
     }
}
