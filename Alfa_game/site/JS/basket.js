  console.log('formCheckd');

let nick_style = document.querySelector(".nickname"); /* стили */
let email_style = document.querySelector(".email");
let pass_style = document.querySelector(".password");
let confirm_pass_style = document.querySelector(".conf_pass");


let nickField = document.querySelector(".nickname"); /* поля ввода */
let emailField = document.querySelector(".email");
let passField = document.querySelector(".password");
let confirm_passField = document.querySelector(".conf_pass");



function CheckForm() { /*общая функция */
	
	let error; // переменная сообщающая об ошибке
	let isNickCorrectFilled = true; // Флаги по умолчанию истино
	let isEmailCorrectFilled = true;
	let isPassCorrectFilled = true;
	let isConfirm_passCorrectFilled = true;


	function CheckNick() { //функция проверки поля номера карты
		let nick = document.getElementById('nick').value; // получение значения никнейма
		console.log(nick);

		if (nick == "") { // если ник пустой
			isNickCorrectFilled = false; // флаг = false
		} else {
			nick_style.style.border = "2px solid green"; // окрашивание границы в зеленый цвет если все ок
		}

		

		return isNickCorrectFilled; //возврат значения флага

	}

	function CheckEmail() { //Функция проверки Email
		let email = document.getElementById('Email').value;
		console.log(email);

		if (email == "") {
			isEmailCorrectFilled = false;
		} else {
			email_style.style.border = "2px solid green";
		}

		return isEmailCorrectFilled;

	}

	function CheckPassword() { //Функция проверки пароля
		let password = document.getElementById('password').value;
		console.log(password);

		if (password == "") {
			isPassCorrectFilled = false;
		} else {
			pass_style.style.border = "2px solid green";
		}

		return isPassCorrectFilled;

	}

	function CheckConfirmPassword() { //Функция проверки подтверждения пароля
		let conf_password = document.getElementById('conf_password').value;
		console.log(conf_password);

		if (conf_password == "") {
			isConfirm_passCorrectFilled = false;
		}else {
			confirm_pass_style.style.border = "2px solid green";
		}

		return isConfirm_passCorrectFilled;

	}

	CheckNick(); //Вызов функций
	CheckEmail();
	CheckPassword();
	CheckConfirmPassword();

	console.log(isNickCorrectFilled); //Отслеживание значений флага
	console.log(isEmailCorrectFilled);
	console.log(isPassCorrectFilled);
	console.log(isConfirm_passCorrectFilled);


	if (isNickCorrectFilled == true) { //Проверка флагов
		nick_style.style.border = "2px solid green";
	} else {
		nick_style.style.border = "2px solid red";
	}

	if (isEmailCorrectFilled == true) {
		email_style.style.border = "2px solid green";
	} else {
		email_style.style.border = "2px solid red";
	}

	if (isPassCorrectFilled == true) {
		pass_style.style.border = "2px solid green";
	} else {
		pass_style.style.border = "2px solid red";
	}

	if (isConfirm_passCorrectFilled == true) {
		confirm_pass_style.style.border = "2px solid green";
	} else {
		confirm_pass_style.style.border = "2px solid red";
	}

	if (isNickCorrectFilled == false || isEmailCorrectFilled == false || isPassCorrectFilled == false || isConfirm_passCorrectFilled == false) { //Если какое то из полей заполнено некорректно

		if (isNickCorrectFilled == false) {
			error = "Введите свое имя!";
        	document.getElementById('error').innerHTML = error;
        	nickField.focus()
		} else if (isEmailCorrectFilled == false) {
			error = "Введите свой email!";
        	document.getElementById('error').innerHTML = error;
        	emailField.focus()
		} else if (isPassCorrectFilled == false) {
			error = "Введите свой номер телефона!";
        	document.getElementById('error').innerHTML = error;
        	passField.focus()
		} else if (isConfirm_passCorrectFilled == false) {
			error = "Введите свой адрес доставки!";
        	document.getElementById('error').innerHTML = error;
        	confirm_passField.focus()
		}

        return false;
	}
	



	if (isNickCorrectFilled == true && isEmailCorrectFilled == true && isPassCorrectFilled == true && isConfirm_passCorrectFilled == true) { //Если все поля введены корректно
		return true;
	}
}
	

	

	