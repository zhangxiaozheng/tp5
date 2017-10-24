function check(){
	/*空不能提交表单*/
	var t=document.getElementById("tel").value;
	var u=document.getElementById("name").value;
	var p=document.getElementById("pas").value;
	
	//alert(u)
	if(t==""){
		document.getElementById("tel").focus()
		return false;
	}
	if(u==""){
		document.getElementById("name").focus()
		return false;
	}
	
	if(p==""){
		document.getElementById("pas").focus()
		return false;
	}
}
$(function(){
/*加减*/
			var end = document.getElementById('end') //中间数
			var jia = document.getElementById('jia')
			var jian = document.getElementById('jian')
			var num_s = Number(end.innerHTML);
			var jianshu = document.getElementById("infoProductNum");
			jian.onclick = function() {
				num_s--;
				if(num_s < 1) {
					num_s = 1;
				}
				end.innerHTML = num_s;
				jianshu.innerHTML = end.innerHTML;
		
			}
			jia.onclick = function() {
				num_s++;
				end.innerHTML = num_s;
				jianshu.innerHTML = end.innerHTML;
			}			
})