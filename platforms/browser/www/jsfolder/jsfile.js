


function subReg(){

	var fname = document.getElementById('firstname');
	var sname = document.getElementById('surname');



	if (fname.value === '') {

		document.getElementById('empty_firstname').innerHTML = "First name required!";
		empty_firstname.style.color = 'red';
		fname.focus();
		return false;
	}

	if (sname.value === '') {

		document.getElementById('empty_surname').innerHTML = "Surname required!";
		empty_surname.style.color = 'red';
		sname.focus();
		return false;
	}



}