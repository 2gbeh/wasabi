// Event Handlers

function cli(args) {
  console.log(args);
}
function set (selector, e) {
  document.querySelector(selector).innerHTML = e;
}
function get (selector) {
  return document.querySelector(selector).innerHTML;
}

function isLocalhost () {
	let host = window.location.hostname;
  return host === 'localhost' || host === '127.0.0.1';
}
function isEmail (email) {
	let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
  return email.match(pattern);
}

function hideNotice(selector = '#notice') {
  document.querySelector(selector).style.display = 'none';
}
function toggleNavbar(self, selector = '#nav') {
	let doc = document.querySelector(selector), icon, value;
  if (! doc.style.display || doc.style.display == 'none') {
    icon = '&times;';
    value = 'block';	  
  }
  else {
    icon = '&equiv;';
    value = 'none';
  }
  self.innerHTML = icon;
	doc.style.display = value;
}
function togglePassword(selector = 'input[name="password"]') {
	let input = document.querySelector(selector);
	var value = input.type == 'password'? 'text': 'password';
	input.setAttribute('type',value);
}

function handleSubscribe(selector) {
	let input = document.querySelector(selector);
	var email = input.value.trim();
	if (email.length > 0 && isEmail(email)) 
		alert(`Thank you, ${email}!`);
	input.value = '';
}
function handleDelete(id) {
	if (confirm('Delete Record?') == true)
		window.location.assign(`?d=true&q=${id}`);
}
function handleLogout(page = 'index.html') {
	if (confirm('Exit Application?') == true) {
		window.sessionStorage.clear();
		window.location.assign(page);
	}
}

function Request() {
		this.dir = window.window.location.pathname;
		this.url = window.window.location.href;
		this.ftp = window.window.location.protocol;
		this.host = window.window.location.hostname;
		this.file = () => {
			//file:///C:/wamp64/www/atari/blog.html
			//file:///C:/wamp64/www/atari/blog.html#end
			//file:///C:/wamp64/www/atari/blog.html?req=/#end
			var href = window.window.location.href,
			noreq = href.split('?')[0],
			nohash = noreq.split('#')[0],
			dir = nohash.split('/').pop();		
			return dir;
		};
		this.esc = (str) => {
			return str.
			replace(/\+/g,' ').
			replace(/%2C/g,',').
			replace(/%3A/g,':').  
			replace(/%20/g,' ').
			replace(/%40/g,'@');
		};
		this.set = (params) => {
				var url = window.location.href;
				if (url.split('?').length > 1)
					window.location.href += '&'+params;
				else
					window.location.href += '?'+params;
		};
		this.isset = (key) => { 
			var url = window.location.href;
			if (url.indexOf('?') > 1 && url.indexOf(`${key}=`) > 1) {
				return true;
			}
		};		
		this.get = (key) => {
			var url = window.location.href;
			if (url.indexOf('?') > 1) {
				var arr = url.split('?');
				if (typeof key !== 'undefined') {
					arr = arr[1].split('&');
					for (let i in arr) {
						arrr = arr[i].split('=');
						k = arrr[0];
						v = arrr[1];
						if (k == key)
							return v;
					}
				}
				return arr[1];
			}
		};
		this.goto = (url) => window.window.location.assign(url);			
}

function ajaxRequest(endpoint, params, callback) {
	let query = endpoint+ '?' +params; // p1=x&p2=y
	let xhttp = window.XMLHttpRequest? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
			callback(this.responseText);
	};
	xhttp.open('GET', query, true);
	xhttp.send();
}

function cloneSelector (selector = 'main ul') {
	var card = document.querySelectorAll(selector)[0];
	var cardContent = card.innerHTML;    
	var cardContents = '';
	for (var i = 0; i < 24; i++) {
		cardContents += cardContent;
	}
	card.innerHTML = cardContents;
}