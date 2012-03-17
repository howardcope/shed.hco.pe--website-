<html>
<head>
	<title>bintime</title>

<script type="text/javascript" language="javascript">
<!--
document.bindec = 1;
var switchText = ["switch to binary","switch to normal"];

function bindectog() {
	document.bindec = document.bindec ? 0 : 1 ;
	document.getElementById("switchText").innerHTML = switchText[document.bindec];
}

var dst = 0; // summer time?

function dtob(dec) {
	var bin = ""
	for (var n = 32; n >= 1; n /= 2) {
		var r = Math.floor(dec / n);
		bin += r;
		if (r) {
			dec -= n;
		}
	}
	return bin;
}

function tellTime() {
	var d = new Date();
	var dy = d.getDate();
	var mnth = d.getMonth();
	
	var hr = d.getHours();
	var mnt = d.getMinutes();
	var sx = d.getSeconds();
	
	hr += dst;
	++mnth;
	
	var monthnames = ["jan","feb","mar","apr","may","jun","jul","aug","sep","oct","nov","dec",];
	if (document.bindec) {
		document.getElementById("day").innerHTML = dtob(dy);
		document.getElementById("month").innerHTML = dtob(mnth);
		document.getElementById("hour").innerHTML = dtob(hr);
		document.getElementById("minute").innerHTML = dtob(mnt);
		document.getElementById("second").innerHTML = dtob(sx);
	} else {
		document.getElementById("day").innerHTML = dy;
		document.getElementById("month").innerHTML = monthnames[mnth-1];
		document.getElementById("hour").innerHTML = hr;
		document.getElementById("minute").innerHTML = mnt;
		document.getElementById("second").innerHTML = sx;	
	}
	
	setTimeout("tellTime()",1000);
}
//-->
</script>
<style type="text/css">
	a {
		font-family:courier;
		text-decoration:none;
		font-weight:bold;
		color:#33cc33
	}
	#clockHolder {
		text-align:center;
		width:100%;
		background-color:#ffffff;
		font-family:verdana;
	}
	#timeTable {
		margin-left:auto;
		margin-right:auto;
		width:160px;
		background-color:#ffffff;
	
	}
	#switch {
		text-align:center;
		font-size:11px;
		border:1px solid #33cc33
	}
	a.switcher {
		font-family:courier;
	}
	#caption {
		width:15%;
		text-align:right;
		font-size:9px;
		color:#33cc33;
		background-color:#003300;
	}
	#readout {
		width:85%;
		text-align:left;
		font-size:11px;
		color:#00ff00;
		background-color:#009900;
	}
	#datereadout {
		width:50%;
		text-align:left;
		font-size:11px;
		color:#00ff00;
		background-color:#006600;
	}
	#day {
		color:#339933;
	}
	#month {
		color:#339933;
	}
</style>
</head>
<body onLoad="tellTime()">
<div id="clockHolder">
	<table id="timeTable" summary="this table is a binary clock, or a normal one, it's your choice">
	<tr><td id="caption">d</td><td id="datereadout"><span id="day"></span></td></tr>
	<tr><td id="caption">m</td><td id="datereadout"><span id="month"></span></td></tr>
	<tr><td id="caption">h</td><td id="readout"><span id="hour"></span></td></tr>
	<tr><td id="caption">m</td><td id="readout"><span id="minute"></span></td></tr>
	<tr><td id="caption">s</td><td id="readout"><span id="second"></span></td></tr>
	<tr><td id="switch" colspan="2"><a class="switcher" href="javascript:bindectog();"><span id="switchText">switch to normal</span></a></td></tr>
	</table>
</div>
</body>
</html>