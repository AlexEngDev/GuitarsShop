
function validaForm() {
	let nome = document.forms['regis']['nome'];
	let cognome = document.forms['regis']['cognome'];
	let email = document.forms['regis']['email'];
	let password = document.forms['regis']['password'];
	let rip_password = document.forms['regis']['rip_password'];

	if (nome === "" || cognome === "" || email === "" || password === "" || rip_password === "") {
		alert("Compilare tutti i campi");
		return false;
	}
}

function showPass() {
	let x = document.getElementById("pwd");
	if (x.type === "password") {
		x.type = "text";
	} else {
		x.type = "password";
	}
}

