// Event Handlers

const Doc = document;
const Win = window;

function log() {
	for (let e of arguments) {
		console.log(e);
	}
}
function dir() {
	for (let e of arguments) {
		console.dir(e);
	}
}
function tab() {
	for (let e of arguments) {
		console.table(e);
	}
}
/* ========================================================================= */
function node(selector) {
	return Doc.querySelector(selector);
}
function nodes(selector) {
	return Doc.querySelectorAll(selector);
}
function set(selector, e, value = false) {
	const doc = node(selector);
  return value == false? doc.innerHTML = e: doc.value = e;
}
function get(selector, value = false) {
	const doc = node(selector);
  return value == false? doc.innerHTML: doc.value;
}
function before(selector, e) {
	node(selector).innerHTML = e + node(selector).innerHTML;
}
function after(selector, e) {
	node(selector).innerHTML += e;
}
function render(selector, innerHTML) {
  if (node(selector)) {
    set(selector, innerHTML);
		return true;
  }
}
function href(url) {
  Win.location.href = url;
}
function file() {
	return location.pathname.substr(location.pathname.lastIndexOf('/') + 1);
}
function printer() {
	Win.print();
}
function refresh() {
	Win.location.reload();
}
function form(name) {
	return Doc.forms[name];
}
/* ========================================================================= */
function isOnline() {
	return navigator.onLine;
}
function isLocalhost() {
	let host = Win.location.hostname;
  return host === 'localhost' || host === '127.0.0.1';
}
function isEmpty (value) {
	return value.trim().length < 1;
}
function isEmail(email) {
	let pattern = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/i;
  return email.match(pattern);
}
function isScroll(px = 50) {
		return Doc.body.scrollTop >= px || Doc.DocElement.scrollTop >= px;
}
/* ========================================================================= */
function allSession() {
	return Win.sessionStorage;
}
function setSession(key, value) {
	Win.sessionStorage.setItem(key,value);
}
function getSession(key) {
	return Win.sessionStorage.getItem(key);
}
function delSession(key) {
	return Win.sessionStorage.removeItem(key);
}
function endSession() {
	Win.sessionStorage.clear();
}
/* ========================================================================= */
function toggle(selector, inline = false) {
	let doc = node(selector); 
	let show = inline == false? 'block': 'inline-block';
	var value = ! doc.style.display || doc.style.display == 'none'? show: 'none';
	doc.style.display = value;
}
function toggleDrawer(self, selector = '#drawer') {
	let doc = node(selector), icon, value;
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
	let input = node(selector);
	var value = input.type == 'password'? 'text': 'password';
	input.setAttribute('type',value);
}
/* ========================================================================= */
function handleEnter (self, ev, callback) {
	if (ev.key == 'Enter') {
		callback(self);
	} else {
		return false;
	}
}
function handleSubscribe(selector) {
	let input = node(selector);
	var email = input.value.trim();
	if (email.length > 0 && isEmail(email)) {
		alert(`Thank you, ${email}!`);
	}
	input.value = '';
}
function handlePrint(id, page = '') {
	Win.open(`${page}?p=true&q=${id}`, '_blank');
}
function handleView(id, page = '') {
	Win.location.assign(`${page}?v=true&q=${id}`);
}
function handleEdit(id, page = '') {
	Win.location.assign(`${page}?e=true&q=${id}`);
}
function handleDelete(id, page = '') {
	if (confirm('Delete Record?') == true) {
		Win.location.assign(`${page}?d=true&q=${id}`);
	}
}
function handleDeleteFile(id, file, page = '') {
	if (confirm('Delete Record?') == true) {
		Win.location.assign(`${page}?d=true&q=${id}&f=${file}`);
	}
}
function handleFileBrowse(selector) {
	node(selector).click();
}
function handleLogout(next = 'index.html') {
	if (confirm('Exit Application?') == true) {
		Win.sessionStorage.clear();
		Win.location.assign(next);
	}
}
function handleLogoutAlt() {
	if (confirm('Exit Application?') == true) {
		Win.sessionStorage.clear();
		Win.location.assign('?logout=true');
	}
}
function handleLogin(post, data) {
	// Ex. handleLogin(['2gbeh','4444'],['admin','1234']);
	const res = {error: '', errno: 400, data: {}};
	if (post[0] == data[0]) {
		if (post[1] == data[1]) {
 			res.error = 'Login successful';
			res.errno = 200;
			res.data = {username: post[0], password: post[1]};
		} else {
			res.error = 'Incorrect password';
		}
	} else {
		res.error = 'Incorrect username';
	}
	return res;
}
function handleUpdatePassword(post, psw_old) {	
  // Ex. handleUpdatePassword([1234, 4444, 4444], 1234);
	const res = {error: '', errno: 400, data: {}};
	let psw_cur = post[0], psw_new = post[1],	psw_cfm = post[2];

	if (psw_cur == psw_old) {
		if (psw_cur == psw_new) {
				res.error = 'Current password and new password cannot be the same';
		} else if (psw_new != psw_cfm) {
				res.error = 'New password and confirm password does not match';
		} else {
				res.error = 'Password update successful, log in to continue.';
				res.errno = 200;		
				res.data = {password: psw_new};
		}
	}	else {
		res.error = 'Current password is incorrect';
	}
	return res;
}
function handleNotice(error, errno = 400, selector = '#notice-wrapper') {
	// Ex. <aside id="notice-wrapper"></aside>
	// Ex. handleNotice('Enter a valid flight ticket number');
	if (node(selector)) {
		const color = {
			100: 'background-color: #cce5ff; border-color: #0d6efd;',
			200: 'background-color: #d4edda; border-color: #198754;',
			300: 'background-color: #fff3cd; border-color: #ffc107;',
			400: 'background-color: #f8d7da; border-color: #dc3545;',
		},
		i = `<i onclick="document.querySelector('#notice').style.display = 'none'" title="Close">&times</i>`,
		e = `${i} ${error}`,
		p = `<p class="notice" style="${color[errno]}" id="notice">${e}</p>`;
		if (node('#notice')) {
			node('#notice').style.display = 'none';
		} else {
			node(selector).style.visibility = 'visible';
		}
			node(selector).innerHTML = p;
	} else {
		log(`${selector} undefined`);
	}
}
/* ========================================================================= */
function ajaxRequest(endpoint, params, callback) {
	let query = endpoint+ '?' +params; // p1=x&p2=y
	let xhttp = Win.XMLHttpRequest? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
	xhttp.onreadystatechange = function() {
		if (this.readyState == 4 && this.status == 200)
			callback(this.responseText);
	};
	xhttp.open('GET', query, true);
	xhttp.send();
}
function cloneSelector(selector = 'main ul') {
	var card = nodes(selector)[0];
	var cardContent = card.innerHTML;    
	var cardContents = '';
	for (var i = 0; i < 24; i++) {
		cardContents += cardContent;
	}
	card.innerHTML = cardContents;
}
/* ========================================================================= */
function autoFocus()
{
	var a = nodes('a[href]'),
	path = location.pathname,
	file = path.substr(path.lastIndexOf('/') + 1);
	a.forEach((e, i) => {
		if (e.getAttribute('href') == file)
			e.setAttribute('class','focus');
	});
	//	dir(file, a);
}
function autoFill(bool)
{
	this.map = {
		'text': 		'John Doe',
		'search': 	'admin',		
		'number': 	1234,
		'email': 		'example@domain.com',
		'tel': 			'01234567891',						
		'password': 1234 || '_Strongp@ssw0rd',		
		'url': 			'https://www.domain.com/',
		'hidden': 	1,
		'range': 		1,
		'color':		'#0093DD',
		'week': 		'1970-W01',
		'month': 		'1970-01',		
		'date': 		'1970-01-01',
		'time': 		'00:00:00',
		'datetime': '1970-01-01T00:00',
		'datetime-local': '1970-01-01T00:00',		
	};
	
	if (bool == true) {
		var selectors = [], e = '';
		// Assign all mapped input types to respective value
		for (let i in this.map) {
			e = this.map[i];
			selectors = nodes(`input[type="${i}"]`);
			for (let j of selectors)
				j.value = e;
		}
		// Toggle input type password on dblclick
		nodes('input[type="password"]').forEach(e => {
			e.addEventListener('dblclick', function() {
				this.type = this.type == 'password'? 'text': 'password'}
			);
		});
		// Make input type file not required
		nodes('input[type="file"]').forEach(e => {
			e.required = false;
		});		
		// Check all radio buttons
		nodes('input[type="radio"]').forEach(e => {
			e.checked = true;
		});
		// Check all checkboxes
		nodes('input[type="checkbox"]').forEach(e => {
			e.checked = true;
		});		
		// Select first option in all select tags
		nodes('select').forEach(e => {
			if (e.querySelectorAll('option')[1]) {
				e.querySelectorAll('option')[1].selected = true;
			}
		});			
		// Enter address in textarea
		nodes('textarea').forEach(e => {
			e.innerHTML = '1, Liberty Way, Edo NG 300283.';
		});		
	}
	// <input type="text" required /> <input type="search" required /> <input type="number" required />
	// <input type="email" required /> <input type="tel" required /> <input type="password" required />      
	// <input type="file" required /> <input type="url" required /> <input type="hidden" required />
	// <input type="range" required /> <input type="color" required />
	// <input type="week" required /> <input type="month" required />
	// <input type="date" required /> <input type="time" required /> 
	// <input type="datetime" required /> <input type="datetime-local" required />      
	// <input type="radio" required /> <input type="checkbox" required />              
	// <select><option></option><option>M</option><option>F</option></select>
	// <textarea></textarea>	
}
/* ========================================================================= */
function names_f (str) {
	return str.split(' ').map(e => `${e[0].toUpperCase()}${e.slice(1)}`).join(' ');
}
function money_f (n) {
  return Number(n).toLocaleString();
}
function toUpper (str) {
	return str.toUpperCase();
}
function toLower (str) {
	return str.toLowerCase();
}