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
    
    var form = $("#frm-dang-ky");
    var url = form.attr('action');
    $.ajax({
           type: "POST",
           url: url,
           data: form.serialize(),
           success: function(data)
           {
               if(data){
            	   alert("ĐĂNG KÝ THÀNH CÔNG");
            	   $(location).attr('href', SiteName+'/dang-ky/dang-ky-thanh-cong');
               }else{
            	   alert("ĐĂNG KÝ THẤT BẠI");
               }
           }
         });


});

$("#btn-login").click(function() {
	  var form = $("#frm-dang-nhap");
	  var url = form.attr('action');
	  $.ajax({
          type: "POST",
          url: url,
          data: form.serialize(),
          success: function(data)
          {
             if(data){
            	  $(location).attr('href', SiteName);
             }
          }
        });
		
});

$('#btn-exit').click(function(){
	 $.ajax({
         type: "POST",
         url: SiteName+"/api/ThanhVienLogout",
         success: function(data)
         {
            if(data){
           	  $(location).attr('href', SiteName);
            }
         }
       });
});
$image_crop = $('#image_demo').croppie({
    enableExif: true,
    viewport: {
      width:280,
      height:280,
      type:'square' //circle
    },
    boundary:{
      width:350,
      height:350
    }
  });

  $('#file-upload-1').on('change', function(){
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
        url:SiteName+"/thanh-vien-upload/crop-file",
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
  
  $('#txt-tag').tagEditor({placeholder: 'Tối thiểu 3 từ khóa', maxTags: 5, removeDuplicates: true, onChange: function (field, editor, tags) {
      ValidateTag();
  }});
  
//  $('#btn-upload').click(function(){
//	  ValidateUpLoad();
//  });
  
  $('#txt-title').blur(function(event){
	  ValidateTitle(); 
  });
  $('#ddl-category-lang').change(function(){
	  ValidateCate(); 
  });
  $('#ddl-category-lang').blur(function(){
	  ValidateCate(); 
  });
  $('#txt-subtitle').blur(function(event){
	  ValidateSub();
  });
  $('#txt-link').blur(function(event){
	  ValidateLink();
  });
  $('#txt-link-demo').blur(function(event){
	  ValidateDemo();
  });
  $('#editor-detail').mouseout(function (event) {
      ValidateDetail();
  });
  $('#chk-require').change(function (event) {
	  ValidateCheck();
  });
  $('#txt-price-other').keyup(function (event){
	  ChangePrice();
  });
  $('#txt-price-other').keypress(function (event){
	  CheckNumeric(event);
  });
  $('#txt-price-other').blur(function (event){
	  ValidatePrice();
  });
  $('#chk-cam-ket').change(function (event){
	  ValidatePrice();
  });
  //price
  $('#boxPrice').hide();
  $('#boxCheck').hide();
  $('input:radio[name="options"]').change(
      function () {
          if (this.checked) {
              if (this.value == 'Free') {
                  $('#boxPrice').hide();
                  $('#boxCheck').hide();
                  $('input:radio[name="options"][value="Free"]').prop('checked', true);
              }
              else if (this.value == 'Code') {
                  $('#boxPrice').show();
                  $('#boxCheck').hide();
                  $('input:radio[name="options"][value="Code"]').prop('checked', true);
              }
              else if (this.value == 'CodeOK') {
                  $('#boxPrice').show();
                  $('#boxCheck').show();
                  $('input:radio[name="options"][value="CodeOK"]').prop('checked', true);
              }
          }
      });
  $('#li5').click(function () {
      $("#txt-price-other").val(5);
      ChangePrice();
  });
  $('#li10').click(function () {
      $("#txt-price-other").val(10);
      ChangePrice();
  });
  $('#li15').click(function () {
      $("#txt-price-other").val(15);
      ChangePrice();
  });
  $('#li20').click(function () {
      $("#txt-price-other").val(20);
      ChangePrice();
  });
  $('#li40').click(function () {
      $("#txt-price-other").val(40);
      ChangePrice();
  });
  $('#li80').click(function () {
      $("#txt-price-other").val(80);
      ChangePrice();
  });
  $('#li100').click(function () {
      $("#txt-price-other").val(100);
      ChangePrice();
  });
  $('#li150').click(function () {
      $("#txt-price-other").val(150);
      ChangePrice();
  });
  $('#li240').click(function () {
      $("#txt-price-other").val(240);
      ChangePrice();
  });
  $('#li400').click(function () {
      $("#txt-price-other").val(400);
      ChangePrice();
  });
  //edit
  var price = parseInt($("#txt-price-other").val(), 10);
  if (price > 99)
      $('#chk-cam-ket').prop('checked', true);
  ChangePrice();
  
//count file selected
  $('#file-upload-2').change(function(){ 
	  $("#count-files").html("Đã chọn <b>" + this.files.length + "</b> File");
      var fileUpload = $("#file-upload-2");
      var maxFileSize = 2097152; // 2MB
      var countfile = 0;
      for (var i = 0; i < this.files.length; i++) {
          if (this.files[i].size > maxFileSize) {
              countfile = countfile + 1;
          }
      }

      if (countfile > 0) {
          document.getElementById("errFileMax2").innerHTML = "Chú ý: Có " + countfile + " ảnh vượt quá 2Mb sẽ không được tải nên";
      }
      else
          document.getElementById("errFileMax2").innerHTML = "";
  });
  
  // all code upload của tôi
  $('#liAll').click(function(){
	  $(location).attr('href',SiteName + '/code-upload-cua-toi/');
  });
  
  // code upload cua toi dang hien thi
  $('#liShow').click(function(){
	  $(location).attr('href',SiteName +'/code-upload-cua-toi/code-dang-hien-thi');
  });
  
  // code upload cua toi dang an
  $('#liHide').click(function(){
	  $(location).attr('href',SiteName +'/code-upload-cua-toi/code-dang-an');
  });
  
//code upload cua toi cho duyet
  $('#liWait').click(function(){
	  $(location).attr('href',SiteName +'/code-upload-cua-toi/code-cho-duyet');
  });
//code upload cua toi cho duyet phi 
  $('#liPrice').click(function(){
	  $(location).attr('href',SiteName +'/code-upload-cua-toi/code-cho-duyet-phi');
  });
  


/*function hiển thị code*/
function hienThiCode(a){
	var $currentUrl = window.location.href;
	$.ajax({
        type: "POST",
        url: SiteName+"/code-upload-cua-toi/hien-thi-code",
        data: {"id": a},
        //dataType: "json",
        success: function(data)
        {
            if(data){
            	$(location).attr('href', $currentUrl);
            }else{
         	   alert("THẤT BẠI");
            }
        }
      });
}
/*function hiển thị code*/
function anCode(a){
	var confirmHide = confirm("Bạn có chắc chắn muốn ẩn code này không!");
	if(confirmHide == true)
		{
	var $currentUrl = window.location.href;
	$.ajax({
        type: "POST",
        url: SiteName+"/code-upload-cua-toi/an-code",
        data: {"id": a},
        //dataType: "json",
        success: function(data)
        {
            if(data){
            	$(location).attr('href', $currentUrl);
            }else{
         	   alert("THẤT BẠI");
            }
        }
      });
		}
}
 
/*function like source code*/
function likeSourceCode(a){
	var allClass =  document.getElementById("btn-like");
	if(allClass.classList.contains("button-green"))
	{
		$.ajax({
	          type: "POST",
	          url: SiteName+"/source-code/like-code",
	          data: {"id": a},
	          //dataType: "json",
	          success: function(data)
	          {
	              if(data){
	            	  $( "#btn-like" ).removeClass( "button-green" );
	            	  $( "#btn-like" ).addClass( "button-orange" );
	            	  var likesCount = $("#likes-count").text();
	            	  $("#likes-count").html(parseInt(likesCount) + 1);
	              }else{
	           	   alert("THẤT BẠI");
	              }
	          }
	        });
	}
	
}
  
function isEmail(email) {
	var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	return regex.test(email);
}
function isPhone(phone) {
	var regex = /^(\+84|0)(([0-9]{9}))$/;
	return regex.test(phone);
}
//Function validate title upload
function ValidateTitle(){
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
                url:SiteName+"/api/CheckCodeTitle",
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

// Function validate category
function ValidateCate(){
	var kt = true;
	$('#lang_error').html('');
    $('#ddl-category-lang').removeClass('validation-failed');
    $('#ddl-category-lang').removeClass('validation-success');
    $('#successCate').hide();
    var lang = jQuery('#ddl-category-lang').val();
    if (lang == '0') {
        $('#lang_error').html('Chưa chọn danh mục.');
        kt = false;
    } 
    if (kt) {
        $('#ddl-category-lang').addClass('validation-success');
        $('#successCate').show();
        return true;
    } else {
        $('#ddl-category-lang').addClass('validation-failed');
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
// Function validate detail
function ValidateDetail(){
	var kt = true;
	$('#upload_error').html();
	$('#editor-detail div:first').removeClass('validation-failed');
	$('#editor-detail div:first').removeClass('validation-success');
	$('#successDetail').hide();
	if($("#editor-detail iframe").contents().find("body").text() == ''){
		$('#upload_error').html('vui lòng nhập mô tả chi tiết');
		kt = false;
	}
	if(kt){
		$('#upload_error').html('');
		$('#editor-detail div:first').addClass('validation-success');
		$('#successDetail').show();
		return true;
	}else{
		$('#editor-detail div:first').addClass('validation-failed');
		return false;
	}
	
}
// Function validate tag
function ValidateTag(){
	var kt = true;
	$('#tag_error').html('');
    $('.tag-editor').removeClass('validation-failed');
    $('.tag-editor').removeClass('validation-success');
    $('#successTag').hide();
    var tag = $('#txt-tag').val();
    var count = 0;
    for(var i=0; i<tag.split(",").length;i++){
    	if(tag.split(",")[i].trim().length != 0)
    		count++;
    }
    if(count < 3){
        $('#tag_error').html('Nhập tối thiểu 3 từ khóa.');
        kt = false;
    }
    if(kt){
        $('.tag-editor').addClass('validation-success');
        $('#successTag').show();
        return true;
    }else{
    	$('.tag-editor').addClass('validation-failed');
        return false;
    }
}

// Function validate check
function ValidateCheck(){
	var kt = true;
	$('#check_error').html('');
	$('#chk-require-box').removeClass('validation-failed');
	
	if(document.getElementById("chk-require").checked == false){
		$('#check_error').html('Vui lòng đọc và đồng ý các điều khoản.');
		kt=false;
	}
	
	if(kt){
		return true;
	}else{
		 $('#chk-require-box').addClass('validation-failed');
         return false;
	}
}

// Function changePrice
function ChangePrice(){
	//price change
	var price = parseInt($('#txt-price-other').val(), 10);
	if(price == 0){
		$('#boxPrice').hide();
        $('#boxCheck').hide();
        $('#lblCheckFree').addClass('active');
        $('#lblCheckCode').removeClass('active');
        $('#lblCheckCodeOK').removeClass('active');
        $('input:radio[name="options"][value="Free"]').prop('checked', true);
	} else if(price > 0 && price <100){
		 $('#boxPrice').show();
         $('#boxCheck').hide();
         $('#lblCheckFree').removeClass('active');
         $('#lblCheckCode').addClass('active');
         $('#lblCheckCodeOK').removeClass('active');
         $('input:radio[name="options"][value="Code"]').prop('checked', true);
	} else if(price > 99){
		 $('#boxPrice').show();
         $('#boxCheck').show();
         $('#lblCheckFree').removeClass('active');
         $('#lblCheckCode').removeClass('active');
         $('#lblCheckCodeOK').addClass('active');
         $('input:radio[name="options"][value="CodeOK"]').prop('checked', true);
	}
}
// Function validate price
function ValidatePrice(){
	var kt = true;
	$('#price_error').html('');
    $('#txt-price-other').removeClass('validation-failed');
    $('#txt-price-other').removeClass('validation-success');
    $('#successPrice').hide();
    if($('input:radio[name="options"]:checked').val() == 'Free'){
    	$('#boxPrice').hide();
    	 $('#boxCheck').hide();
    	return true;
    }
    else{
    	var price = $('#txt-price-other').val();
    	if(price == ''){
    		$('#price_error').html('Vui lòng nhập phí tải.');
    		kt = false;
    	}else if(parseInt(price, 10) < 2){
            $('#price_error').html('Phí tải tối thiểu là 2 Xu.');
            kt = false;
    	}else if(parseInt(price, 10) > 99 && document.getElementById("chk-cam-ket").checked == false){
    		$('#price_error').html('Chưa chọn cam kết hỗ trợ người mua.');
            kt = false;
    	}
    }
    if(kt){
    	  $('#txt-price-other').addClass('validation-success');
          $('#successPrice').show();
          return true;
    } else{
    	$('#txt-price-other').addClass('validation-failed');
        return false;
    }
}

//Function validate demo
function ValidateDemo(){
    $('#demo_error').html('');
    $('#txt-link-demo').removeClass('validation-failed');
    $('#txt-link-demo').removeClass('validation-success');
    $('#successDemo').hide();
    var link = $('#txt-link-demo').val().trim();
    if(link != ''){
    	if(!(link.indexOf("http://") == 0 || link.indexOf("https://") == 0)){
    		$('#demo_error').html('Link phải bắt đầu http://... (or) https://...');
    		$('#txt-link-demo').addClass('validation-failed');
    		return false;
    	}
    	else{
    		jQuery('#txt-link-demo').addClass('validation-success');
            jQuery('#successDemo').show();
            return true;
    	}
    }
    return true;
}
// Fucntion validate file upload 2
function ValidateFileUpload2(){
	$('#errFileMax2').html('');
	$('#upload_file').removeClass('validation-failed');
	$('#upload_file').removeClass('validation-success');
	var fileCount = document.getElementById("file-upload-2").files.length;
	if(fileCount > 10){
		$('#upload_file').addClass('validation-failed');
		$('#file_2_error').html('Chọn quá 10 file cho một lần upload');
		return false;
	}
	else{
		$('#upload_file').addClass('validation-success');
		$('#file_2_error').html('');
		return true;
	}
}

// Function check numeric input
function CheckNumeric(e){
	if(window.event)
	{
		if((e.keyCode < 48 || e.keyCode > 57) & e.keyCode != 8){
			event.returnValue = false;
			return false;
		}
	}
	else
	{
		if((e.which < 48 || e.which > 57) & e.which != 8){
			e.preventDefault();
			return false;
		}
	}
}

// Function Validate form
function ValidateUpload(){
	var ktt = true;
	if(!ValidateTag()){
		ktt = false;
	}
	if(!ValidateCheck()){
		ktt = false;
	}
	if(!ValidateDetail()){
		ktt = false;
	}
	//TH tự đặt giá
	if(!ValidatePrice()){
		$('#txt-price-other').focus();
        ktt = false;
	}
	if(!ValidateFileUpload2()){
		 ktt = false;
	}
	
	if (!ValidateDemo()) {
           ktt = false;
           $('#txt-link-demo').focus();
    }
	
	if(!ValidateLink()){
		 ktt = false;
         $('#txt-link').focus();
	}
	
	 if (!ValidateSub()) {
         $('#txt-subtitle').focus();
         ktt = false;
     }
	 
	 if (!ValidateCate()) {
         $('#ddl-category-lang').focus();
             ktt = false;
         }
     if (!ValidateTitle()) {
             ktt = false;
             $('#txt-title').focus();
     }

     if(ktt){
    	 $('#btn-upload').addClass('upload_btn UploadSuccess'); //Hiển thị thông báo thành công
    	 return true;
     }else{
    	 if($('#upload_error').html() == "")
             $('#upload_error').html('Vui lòng điền thông tin còn thiếu.');
    	 return false;
     }
     return true;
}

// Submit form
function SubmitForm(){
	if(ValidateUpload()){
		for ( instance in CKEDITOR.instances ) {
	            CKEDITOR.instances[instance].updateElement();
	    }
	    var form = $("#frm-upload")[0];
	    var indexForm = $("#frm-upload");
	    var formData = new FormData(form);
        event.preventDefault();
	    var url = indexForm.attr('action');
	    $.ajax({
	           type: "POST",
	           url: url,
	           processData: false,
	           contentType: false,
	           data: formData,
	           //dataType: "JSON",
	           success: function(data)
	           {
	               if(data){
            	   $('#ignismyModal').modal('show');
	               }else{
	            	   alert(data);
	               }
	           }
	         });
	}
}
//Submit form
function SubmitUpdateCode(){
	if(ValidateUpload()){
		for ( instance in CKEDITOR.instances ) {
	            CKEDITOR.instances[instance].updateElement();
	    }
	    var form = $("#frm-upload")[0];
	    var indexForm = $("#frm-upload");
	    var formData = new FormData(form);
        event.preventDefault();
	    var url = indexForm.attr('action');
	    $.ajax({
	           type: "POST",
	           url: url,
	           processData: false,
	           contentType: false,
	           data: formData,
	           dataType: "JSON",
	           success: function(data)
	           {
	               if(data){
	            	   $('#ignismyModal').modal('show'); 
	               }else{
	            	   alert(data);
	               }
	           }
	         });
	}
}

//Update success modal
function UpdateSucess(){
	$(location).attr('href', SiteName + "/code-upload-cua-toi/");
}

/*POPUP LIKE*/




