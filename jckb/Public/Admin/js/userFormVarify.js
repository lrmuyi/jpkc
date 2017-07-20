var checkVC =0;//验证码验证 0->验证不通过 重输入时验证码不替换 1->验证通过 验证码替换

window.onload =	function(){
	var uname = $('username');
	uname.focus();
	var unameMsg = $('usernameErr');
	var pword = $('password');
	var pwordMsg = $('passwordErr');
	var ccode = $('checkcode');
	var ccodeMsg = $('checkcodeErr');

	ccode.value='';
	if(uname.value){
		checkIdentity();
	}
	//验证码一分钟换一次
	setInterval(change,60000);

	uname.onblur = function(){
		if(uname.value == ''){
			unameMsg.innerHTML='用户名必须填写！';
			return false;
		}
		var re = /[\`\~\!\@\#\$\%\^\&\*\(\)\_\+\=\-\\\|\[\]\{\}\:\;\"\'\,\.\/\<\>\?]/i;
		var r = uname.value.match(re);
		if(r!=null){
			unameMsg.innerHTML='用户名含有非法字符！';
		}
	}

	uname.onfocus = function(){
		unameMsg.innerHTML='';
	}

	pword.onblur = function(){
		if(pword.value == ''){
			pwordMsg.innerHTML = '密码必须填写！';
		}
		if(pword.value.length > 0 && pword.value.length < 5){
			pwordMsg.innerHTML = '密码位数不足！';
		}
	}
	pword.onfocus = function(){
		pwordMsg.innerHTML='';
	}

	ccode.onblur = function(){
		if(ccode.value == ''){
			ccodeMsg.innerHTML = '验证码必须填写！';
		}else{
			ccodeMsg.innerHTML = '';
			checkVarifyCode();
		}
	}
	ccode.onfocus = function(){
		ccode.value='';
		var varifyCode = $('varify');
		ccodeMsg.innerHTML='';
		if(checkVC){
			varifyCode.click();
		}
	}
}

function createRequest(){
	try{
		request = new XMLHttpRequest();
	}catch(tryMS){
		try{
			request = new ActiveXObject("Msxml2.XMLHTTP");
		}catch(otherMS){
			try{
				request = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(failed){
				request = null;
			}
		}
	}
	return request;
}

function checkVarifyCode(){
	request = createRequest();
	if(request == null){
		alert("无法验证表单!,请联系管理员");
	}else{
		var code = $('checkcode').value;
		var url = module_url + "/CheckCode/jsonVarify?checkcode=" + code;
		request.onreadystatechange = showVarifyStatus;
		request.open("GET",url,true);
		request.send(null);
	}
}

function showVarifyStatus(){
	if(request.readyState == 4){
		if(request.status == 200){
			//$('checkcodeErr').innerHTML = request.responseText;
			if(request.responseText == "true"){
				checkVC=1;
				var rst = document.createElement('img');
				rst.src = img_url+'right.png';
				var msg = $('checkcodeErr').appendChild(rst);
			}else if(request.responseText == "false"){
				checkVC=0;
				$('checkcodeErr').innerHTML = '验证码填写错误！';
			}else{
				checkVC=0;
				$('checkcodeErr').innerHTML = '请解锁后再试！';
				alert('用户名输错次数过多，验证失败！1小时后再试！');
			}
		}
	}
}

function checkIdentity(){
	request = createRequest();
	if(request == null){
		alert("Unable to create request!");
	}else{
		var username = $('username').value;
		var data = "username="+username;
		//传送多个post数据时可以用下面的格式
		// var data = 'info={"username":"'+username+'","password":"'+password+'"}';
		var url = module_url + "/Identify/jsonCheckLogin";
		request.onreadystatechange = showIndentityStatus;
		request.open("POST",url,true);
		//POST时必须添加以下两条头部信息
		request.setRequestHeader("Content-Length",data.length);  
       	request.setRequestHeader("Content-Type","application/x-www-form-urlencoded;");
		request.send(data);
	}
}

function trySubmit(){
	var uname = $('username');
	var unameMsg = $('usernameErr');
	var pword = $('password');
	var pwordMsg = $('passwordErr');
	var ccode = $('checkcode');
	var ccodeMsg = $('checkcodeErr');

	var err=0;
	if(uname.value == ''){
		unameMsg.innerHTML = '用户名必须填写！';
		err++;
	}

	var re = /[\`\~\!\@\#\$\%\^\&\*\(\)\_\+\=\-\\\|\[\]\{\}\:\;\"\'\,\.\/\<\>\?]/i;
	var r = uname.value.match(re);
	if(r!=null){
		unameMsg.innerHTML='用户名含有非法字符！';
		err++
	}

	if($('unwrong')){
		unameMsg.innerHTML = '用户名填写错误！';
		err++;
	}
	
	if(pword.value.length > 0 && pword.value.length < 5){
		pwordMsg.innerHTML = '密码位数不足！';
		err++;
	}

	if(ccode.value == ''){
		ccodeMsg.innerHTML = '验证码必须填写！';
		err++;
	}else if(checkVC==0){
		ccodeMsg.innerHTML = '验证码填写错误！';
		err++;
	}

	if(pword.value == ''){
		pwordMsg.innerHTML='密码必须填写！';
		err++;
	}

	if(err == 0){
		if(ccodeMsg.innerHTML != '验证码必须填写！' && ccodeMsg.innerHTML != '验证码填写错误！'){
			document.form1.submit(); 
		}
	}
}

function change(){
	$('checkcode').value='';
	var varifyCode = $('varify');
	varifyCode.click();
}

function $(id){
	return document.getElementById(id);
}