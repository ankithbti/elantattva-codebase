<html>
<head>
<link href="calCss.css" rel="stylesheet" type="text/css" media="all" />
<script language="JavaScript" type="text/javascript">
function initialCalendar(){
	var hr = new XMLHttpRequest() ;
	var url = "calendar_start.php" ;
	var currentTime = new Date() ;
	var month = currentTime.getMonth() + 1 ;
	var year = currentTime.getFullYear() ;
	showmonth = month ;
	showyear = year ;
	var vars = "showmonth="+showmonth+"&showyear="+showyear ;
	hr.open("POST", url, true);
	//Send the proper header information along with the request
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.setRequestHeader("Content-length", vars.length);
	hr.setRequestHeader("Connection", "close");
	hr.onreadystatechange = function() {//Call a function when the state changes.
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText ;
			document.getElementById("showCalendar").innerHTML = return_data ;
		}
	}
	hr.send(vars);
	document.getElementById("showCalendar").innerHTML = "Processing...." ;
}


function next_month(){
	var nextmonth = showmonth + 1 ;
	if(nextmonth > 12){
		nextmonth = 1 ;
		showyear = showyear + 1 ;
	}
	showmonth = nextmonth ;
	var hr = new XMLHttpRequest() ;
	var url = "calendar_start.php" ;
	var vars = "showmonth="+showmonth+"&showyear="+showyear ;
	hr.open("POST", url, true);
	//Send the proper header information along with the request
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.setRequestHeader("Content-length", vars.length);
	hr.setRequestHeader("Connection", "close");
	hr.onreadystatechange = function() {//Call a function when the state changes.
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText ;
			document.getElementById("showCalendar").innerHTML = return_data ;
		}
	}
	hr.send(vars);
	document.getElementById("showCalendar").innerHTML = "Processing...." ;
}

function last_month(){
	var prevmonth = showmonth - 1 ;
	if(prevmonth == 0){
		prevmonth = 12 ;
		showyear = showyear - 1 ;
	}
	showmonth = prevmonth ;
	var hr = new XMLHttpRequest() ;
	var url = "calendar_start.php" ;
	var vars = "showmonth="+showmonth+"&showyear="+showyear ;
	hr.open("POST", url, true);
	//Send the proper header information along with the request
	hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	hr.setRequestHeader("Content-length", vars.length);
	hr.setRequestHeader("Connection", "close");
	hr.onreadystatechange = function() {//Call a function when the state changes.
		if(hr.readyState == 4 && hr.status == 200){
			var return_data = hr.responseText ;
			document.getElementById("showCalendar").innerHTML = return_data ;
		}
	}
	hr.send(vars);
	document.getElementById("showCalendar").innerHTML = "Processing...." ;
}


</script>
</head>
<body onLoad="initialCalendar();">
	<div id="showCalendar"></div>
</body>
</html>
