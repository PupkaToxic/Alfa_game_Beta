console.log('ts'); //Проверка подключения файла

let card_style = document.querySelector('#CardNumber'); //Записываем в переменные поля ввода
let valid_style = document.querySelector('#dateOfCard');
let cvv_style = document.querySelector('#CVV');
let mail_style = document.querySelector('#Email');

let cardField = document.querySelector('#CardNumber');//Автоматический фокус первого поля
let validField = document.querySelector('#dateOfCard');
let cvvField = document.querySelector('#CVV');
let emailField = document.querySelector('#Email');
cardField.focus()



function CheckForm() { //Проверка формы

	let error; //объявление переменной ошибки
	let isCardCorrectFilled = true; //объявление переменных-флагов по умолчанию true
	let isValidCorrectFilled = true;
	let isCvvCorrectFilled = true;
	let isEmailCorrectFilled = true;

	function CheckCard() { //функция проверки поля номера карты
		let card = document.getElementById('CardNumber').value;
		console.log(card);

		if (card == "") {
			isCardCorrectFilled = false;
		} 

		if (card.length < 19) {
			isCardCorrectFilled = false;
		} else {
			valid_style.style.border = "2px solid green";
		}

		

		return isCardCorrectFilled; //возврат значения флага

	}

	function CheckValid() { //Функция проверки срока действия карты
		let valid = document.getElementById('dateOfCard').value;
		console.log(valid);

		if (valid == "") {
			isValidCorrectFilled = false;
		} else {
			valid_style.style.border = "2px solid green";
		}

		return isValidCorrectFilled;

	}

	function CheckCvv() { //функция проверки CVV кода
		let cvv = document.getElementById('CVV').value;
		console.log(cvv);

		if (cvv.length < 3) {
			isCvvCorrectFilled = false;
		} else {
			cvv_style.style.border = "2px solid green";
		}

		return isCvvCorrectFilled;

	}

	function CheckEmail() { //Функция проверки Email
		let email = document.getElementById('Email').value;
		console.log(email);

		if (email == "") {
			isEmailCorrectFilled = false;
		} else {
			mail_style.style.border = "2px solid green";
		}

		return isEmailCorrectFilled;

	}

	CheckCard(); //Вызов функций
	CheckValid();
	CheckCvv();
	CheckEmail();

	console.log(isCardCorrectFilled); //Отслеживание значений флага
	console.log(isValidCorrectFilled);
	console.log(isCvvCorrectFilled);
	console.log(isEmailCorrectFilled);

	if (isCardCorrectFilled == true) { //Проверка флагов
		card_style.style.border = "2px solid green";
	} else {
		card_style.style.border = "2px solid red";
	}

	if (isValidCorrectFilled == true) {
		valid_style.style.border = "2px solid green";
	} else {
		valid_style.style.border = "2px solid red";
	}

	if (isCvvCorrectFilled == true) {
		cvv_style.style.border = "2px solid green";
	} else {
		cvv_style.style.border = "2px solid red";
	}

	if (isEmailCorrectFilled == true) {
		mail_style.style.border = "2px solid green";
	} else {
		mail_style.style.border = "2px solid red";
	}

	if (isCardCorrectFilled == false || isValidCorrectFilled == false || isCvvCorrectFilled == false || isEmailCorrectFilled == false) { //Если какое то из полей заполнено некорректно

		if (isCardCorrectFilled == false) {
			error = "Введите корректные данные карты!";
        	document.getElementById('error').innerHTML = error;
        	cardField.focus()
		} else if (isValidCorrectFilled == false) {
			error = "Введите корректный срок действия карты!";
        	document.getElementById('error').innerHTML = error;
        	validField.focus()
		} else if (isCvvCorrectFilled == false) {
			error = "CVV не должен быть меньше 3-х символов!";
        	document.getElementById('error').innerHTML = error;
        	cvvField.focus()
		} else if (isEmailCorrectFilled == false) {
			error = "Email не должен быть пустым!";
        	document.getElementById('error').innerHTML = error;
        	emailField.focus()
		}

        return false;
	}

	
	if (isCardCorrectFilled == true && isValidCorrectFilled == true && isCvvCorrectFilled == true && isEmailCorrectFilled == true) { //Если все поля введены корректно
		return true;
	}
}








let input = document.querySelector("#CardNumber"),
            numbers = /[0-9]/,
            regExp = /[0-9]{4}/

            // добавляем слушатель события на инпут
        input.addEventListener("input",(ev)=>{
            // не позволяем ввести ничего, кроме цифр 0-9, ограничиваем размер поля 19-ю символами
            if( ev.inputType === "insertText" && !numbers.test(ev.data) || input.value.length > 19){
                input.value = input.value.slice(0, input.value.length - 1)
                return
            }

            // обеспечиваем работу клавиш "backspace","delete"
            let value = input.value
            if( ev.inputType === "deleteContentBackward" && regExp.test(value.slice(-4)) ){
                input.value = input.value.slice(0, input.value.length - 1)
                return
            }

            // добавяем пробел после 4 цифр подряд
            if( regExp.test(value.slice(-4)) && value.length < 19){
                input.value += " "
            }
        })