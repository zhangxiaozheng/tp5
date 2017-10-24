function names() {
	var u = $("#name").val();
	if(u == "") {
		$("#user-ms").text("昵称为空！");
	} else {
		if(u.length > 2 && u.length <8) {
			$("#user-ms").text("ok!");
			return u = $("#name").val();

		} else {
			$("#user-ms").text("在3到7之间！");
		}

	}
}

function checkPhone() {
	var phone = document.getElementById('tel').value;
	if(!(/^1[34578]\d{9}$/.test(phone))) {
		 layer.alert('请输入正确手机号')
		return false;
	}
}

function pass() {
	var p = $("#pas").val();
	if(p == "") {
		$("#pass-ms").text("用户名为空！");
	} else {
		if(p.length > 5 && p.length < 19) {
			$("#pass-ms").text("ok!");
		} else {
			$("#pass-ms").text("在6到18之间！");
		}
	}
}
/*发送验证码*/
function SetCode(n) {
	if($('#txtMobileCode').length = 11) {
		if(n)
			$.ajax({
				type: "get",
				dataType: "json",
				url: "ajax.aspx?oper=telpcode&clienttime=" + (new Date().getTime()),
				data: "txtMobileCode=" + $("#txtMobileCode").val(),
				success: function(d) {
					if(d.result == "1") {
						alert("验证码发送成功");
						GetNumber();
						return true;
					} else {
						alert("验证码发送失败");
						return false;
					}
				}
			});
		else {}
	} else {}
}
var count = 5;

function GetNumber() {
	$("#texl_right").attr("disabled", "disabled");
	$("#texl_right").val(count + "秒之后点击获取")
	count--;
	if(count > 0) {
		setTimeout(GetNumber, 1000);
	} else {
		$("#texl_right").val("获取验证码");
		$("#texl_right").attr("disabled", "");
		count = 5;
	}
}