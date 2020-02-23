function check() {
	var l1 = document.getElementById('name').value.length;
	var l2 = document.getElementById('tel').value.length;

	if (l1 < 1) {
		document.getElementById('err1').innerHTML='введите пожалуйста имя';
	} else {
		document.getElementById('err1').innerHTML='';
	}
	if (l2 < 1) {
		document.getElementById('err2').innerHTML='введите пожалуйста номер телефона';
	} else {
		document.getElementById('err2').innerHTML='';
	}
	if ((l1 > 0)&&(l2>0)) {
		document.getElementById('modal-zakaz').style.display='none';
		document.getElementById('modal-thank-you').style.display='block';
	}
}

function check2() {
	var l1 = document.getElementById('name2').value.length;
	var l2 = document.getElementById('tel2').value.length;

	if (l1 < 1) {
		document.getElementById('err3').innerHTML='введите пожалуйста имя';
	} else {
		document.getElementById('err3').innerHTML='';
	}
	if (l2 < 1) {
		document.getElementById('err4').innerHTML='введите пожалуйста номер телефона';
	} else {
		document.getElementById('err4').innerHTML='';
	}
	if ((l1 > 0)&&(l2>0)) {
		document.getElementById('input2').setAttribute("data-toggle","modal");
		document.getElementById('input2').setAttribute("data-target","#exampleModal2");
	}
}

function check3() {
	var l1 = document.getElementById('name3').value.length;
	var l2 = document.getElementById('tel3').value.length;

	if (l1 < 1) {
		document.getElementById('err5').innerHTML='введите пожалуйста имя';
	} else {
		document.getElementById('err5').innerHTML='';
	}
	if (l2 < 1) {
		document.getElementById('err6').innerHTML='введите пожалуйста номер телефона';
	} else {
		document.getElementById('err6').innerHTML='';
	}
	if ((l1 > 0)&&(l2>0)) {
		document.getElementById('input3').setAttribute("data-toggle","modal");
		document.getElementById('input3').setAttribute("data-target","#exampleModal2");
	}
}

function getTimeRemaining(endtime) {
	var t = Date.parse(endtime) - Date.parse(new Date());
	var seconds = Math.floor((t / 1000) % 60);
	var minutes = Math.floor((t / 1000 / 60) % 60);
	var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
	var days = Math.floor(t / (1000 * 60 * 60 * 24));
	return {
		'total': t,
		'days': days,
		'hours': hours,
		'minutes': minutes,
		'seconds': seconds
	};
}

function initializeClock(id, endtime) {
	var clock = document.getElementById(id);
	var daysSpan = clock.querySelector('.days');
	var hoursSpan = clock.querySelector('.hours');
	var minutesSpan = clock.querySelector('.minutes');
	var secondsSpan = clock.querySelector('.seconds');

	function updateClock() {
		var t = getTimeRemaining(endtime);

		daysSpan.innerHTML = t.days;
		hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
		minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
		secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

		if (t.total <= 0) {
			clearInterval(timeinterval);
		}
	}

	updateClock();
	var timeinterval = setInterval(updateClock, 1000);
}

