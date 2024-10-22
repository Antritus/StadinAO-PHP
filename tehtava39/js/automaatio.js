function openWebsite(website, delay) {
	if (delay >= 251) {
		let value = document.getElementById("time");
		if (value != null) {
			value.innerHTML = delay / 1000;
		}
		setTimeout(function () {
			nextTick(website, delay - 250);
		}, 250);
	} else {
		setTimeout(function () {
			window.location = website;
		}, 250); /* 1000 = 1 second*/
	}
}

function nextTick(website, delay) {
	openWebsite(website, delay);
	console.log(delay);
}