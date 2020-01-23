$(document).ready(function(){
	$("#username").keyup(function(){
		var user = $(this).val();
		$.post("./api/CheckUsername", {un:user}, function(data){
			var kq = JSON.parse(data);
			if(kq)
				$("#messageCheckUser").html("Tên này đã có");
			else
				$("#messageCheckUser").html("Tên này chưa có");
			
		});
	})
});