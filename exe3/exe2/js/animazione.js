function myMove() {
	let id = null;
	var perc=100;
	const cont = document.getElementById("container");
	const elem = document.getElementById("animate");
	const btt1 = document.getElementById("btt");

	// calcolo le dimensioni effettive per il movimento
	var H=cont.getBoundingClientRect().height;
	var W=cont.getBoundingClientRect().width;

	var h=cont.getBoundingClientRect().height-elem.getBoundingClientRect().height;
	var w=cont.getBoundingClientRect().width-elem.getBoundingClientRect().width;

	if (btt1.innerHTML =="Get back")  {
		let pos = perc;
		clearInterval(id);
		id = setInterval(frame, 15);
		function frame() {
			if (pos == 0) {
				clearInterval(id);
			} else {
				pos--;
				elem.style.top = pos*h/H + "%";
				elem.style.left = pos*w/W + "%";
			}
		}
		btt1.innerHTML="Move On";
	}
	else {
		let pos = 0;
		clearInterval(id);
		id = setInterval(frame, 15);
		function frame() {
			if (pos == perc) {
				clearInterval(id);
			} else {
				pos++;
				elem.style.top = pos*h/H + "%";
				elem.style.left = pos*w/W + "%";
			}
		}
		btt1.innerHTML="Get back";
	}
}