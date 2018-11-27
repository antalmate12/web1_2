function ellenoriz()
{
	var rendben = true;
	var fokusz = null;

	var nev = document.getElementById("nev");
	if (nev) {
		if (nev.value.length <=8) {
			rendben = false;
			nev.style.background = '#f99';
			fokusz = nev;
		} else {
			nev.style.background = '#9f9';
		}
	}

	var email = document.getElementById("email");
	if (email) {
		var checkPattern = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/; //online segítség: https://regex101.com/
		if (!checkPattern.test(email.value)) {
			rendben = false;
			email.style.background = '#f99';
			fokusz = email;
		} else {
			email.style.background = '#9f9';
		}
	}

	var jelszo = document.getElementById("jelszo");
	if (jelszo) {
		if (jelszo.value.length>12 || jelszo.value.length <6) {
			rendben = false;
			jelszo.style.background = '#f99';
			fokusz = jelszo;
		} else {
			jelszo.style.background = '#9f9';
		}
	}

	var kor = document.getElementById("kor");
	if(kor) {
		if(kor.value>120 || kor.value<18) {
			rendben = false;
			kor.style.background = '#f99';
			fokusz = kor;
		} else {
			kor.style.background = '#9f9';
		}
	}

	if (fokusz) {
		fokusz.focus();
	}

	return rendben;
}