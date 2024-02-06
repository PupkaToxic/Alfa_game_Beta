console.log('check');

let nick_style = document.querySelector(".nickname"); /* Стили */
let pass_style = document.querySelector(".password");

function CheckForm() { /* функция проверки формы */
	let nickname = document.querySelector(".nickname").value; /* вытягивание значения полей */
	let password = document.querySelector(".password").value;
	let error; /* переменная сообщающая об ошибке */

	if (nickname == '' && password == ''){ /* если ник и пароль пусты */
		console.log(1);
		nick_style.style.border = "2px solid red"; /* стилизация границ в красный цвет */
		pass_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error; /* вывод ошибки на экран */
		return false; /* запрет на обновление страницы */
	} else if (nickname == ''){
		console.log(2);
		nick_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error;
		return false;

	} else if (password == ''){
		console.log(3);
		pass_style.style.border = "2px solid red";
		error = "Заполните все поля!";
		document.getElementById('error').innerHTML = error;
		return false;
	} else {
		return true;
	}


}