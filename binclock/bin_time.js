<script type="text/javascript" language="javascript">
<!--

var dst = 1; // summer time?

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
	var tstr = '<span class="time">'+"d=<b>"+dtob(dy)+"<\/b>;m=<b>"+dtob(mnth)+"<\/b>:h=<b>"+dtob(hr)+"<\/b>;m=<b>"+dtob(mnt)+"<\/b>;s=<b>"+dtob(sx)+'<\/b>;<\/span>';
	
	if (IE || NN6) {
		var place = document.getElementById("timereadout");	
		place.innerHTML = tstr;
	} else if (NN4) {
	
		with (document.layers.timereadout.document) {
			open();
			write(tstr);
			close();
		}
	
	}
	
	setTimeout("tellTime()",1);
}
//-->
</script>
