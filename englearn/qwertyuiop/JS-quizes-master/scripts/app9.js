const headElem = document.getElementById("head");
const buttonsElem = document.getElementById("buttons");
const pagesElem = document.getElementById("pages");
const nextElem = document.getElementById("next");
const backElem = document.getElementById("back");

let isTrue = false;

//Класс, который представляет сам тест
class Quiz
{
	constructor(type, questions2, results)
	{
		//Тип теста: 1 - классический тест с правильными ответами, 2 - тест без правильных ответов
		this.type = type;

		//Массив с вопросами
		this.questions2 = questions2;

		//Массив с возможными результатами
		this.results = results;

		//Количество набранных очков
		this.score = 0;

		//Номер результата из массива
		this.result = 0;

		//Номер текущего вопроса
		this.current = 0;
	}

	Click(index)
	{
		//Добавляем очки
		let value = this.questions2[this.current].Click(index);
		this.score += value;

		let correct = -1;

		//Если было добавлено хотя одно очко, то считаем, что ответ верный
		if(value >= 1)
		{
			correct = index;
		}
		else
		{
			//Иначе ищем, какой ответ может быть правильным
			for(let i = 0; i < this.questions2[this.current].answers.length; i++)
			{
				if(this.questions2[this.current].answers[i].value >= 1)
				{
					correct = i;
					break;
				}
			}
		}

		this.Next();

		return correct;
	}

	//Переход к следующему вопросу
	Next()
	{
		this.current++;
		
		if(this.current >= this.questions2.length) 
		{
			this.End();
		}
	}

	//Если вопросы кончились, этот метод проверит, какой результат получил пользователь
	End()
	{
		for(let i = 0; i < this.results.length; i++)
		{
			if(this.results[i].Check(this.score))
			{
				this.result = i;
			}
		}
	}
} 

//Класс, представляющий вопрос
class Question 
{
	constructor(text, answers)
	{
		this.text = text; 
		this.answers = answers; 
	}

	Click(index) 
	{
		return this.answers[index].value; 
	}
}

//Класс, представляющий ответ
class Answer 
{
	constructor(text, value) 
	{
		this.text = text; 
		this.value = value; 
	}
}

//Класс, представляющий результат
class Result 
{
	constructor(text, value)
	{
		this.text = text;
		this.value = value;
	}

	//Этот метод проверяет, достаточно ли очков набрал пользователь
	Check(value)
	{
		if(this.value <= value)
		{
			return true;
		}
		else 
		{
			return false;
		}
	}
}

//Массив с результатами
const results = 
[
	new Result("Вам многому нужно научиться", 0),
	new Result("Вы уже неплохо разбираетесь", 2),
	new Result("Ваш уровень выше среднего", 4),
	new Result("Вы в совершенстве знаете тему", 6)
];

//Массив с вопросами
const questions2 = 
[
	new Question("Выберите слово \"улитка\"", 
	[
		new Answer("snail", 1),
		new Answer("frog", 0),
		new Answer("octopus", 0),
		new Answer("whale", 0)
	]),

	new Question("Выберите слово \"Голандия\"", 
	[
		new Answer("Italy", 0),
		new Answer("Japan", 0),
		new Answer("Holland", 1),
		new Answer("Czech", 0)
	]),

	new Question("Выберите слово \"вязание\"", 
	[
		new Answer("gardening", 0),
		new Answer("knitting", 1),
		new Answer("dances", 0),
		new Answer("collector", 0)
	]),

	new Question("Выберите слово \"жена\"", 
	[
		new Answer("family", 0),
		new Answer("wife", 1),
		new Answer("pet", 0),
		new Answer("son", 0)
	]),

	new Question("Выберите слово \"кокос\"", 
	[
		new Answer("coconut", 1),
		new Answer("apple", 0),
		new Answer("pizza", 0),
		new Answer("banana", 0)
	]),

	new Question("Выберите слово \"шарф\"", 
	[
		new Answer("shirt", 0),
		new Answer("cap", 0),
		new Answer("scraf", 1),
		new Answer("shorts", 0)
	])
];

//Сам тест
const quiz = new Quiz(1, questions2, results);

Update();

//Обновление теста
function Update()
{
	//Проверяем, есть ли ещё вопросы
	if(quiz.current < quiz.questions2.length) 
	{
		//Если есть, меняем вопрос в заголовке
		headElem.innerHTML = quiz.questions2[quiz.current].text;

		//Удаляем старые варианты ответов
		buttonsElem.innerHTML = "";

		//Создаём кнопки для новых вариантов ответов
		for(let i = 0; i < quiz.questions2[quiz.current].answers.length; i++)
		{
			let btn = document.createElement("button");
			btn.className = "button";

			btn.innerHTML = quiz.questions2[quiz.current].answers[i].text;

			btn.setAttribute("index", i);

			buttonsElem.appendChild(btn);
		}
		
		//Выводим номер текущего вопроса
		pagesElem.innerHTML = (quiz.current + 1) + " / " + quiz.questions2.length;

		//Вызываем функцию, которая прикрепит события к новым кнопкам
		Init();
	}
	else
	{
		//Если это конец, то выводим результат
		buttonsElem.innerHTML = "";
		if (quiz.score >= 4)
		{
			headElem.innerHTML = quiz.results[quiz.result].text + "<br><br> <b style=\"color: green;\">Раздел был пройден!</b>";
			isTrue = true
		}
		else
			headElem.innerHTML = quiz.results[quiz.result].text + "<br><br> <b style=\"color: red;\">Раздел не пройден!</b>" +
			"<br><i style=\"font-size: 11pt; color: red;\">(чтобы пройти раздел, нужно набрать не менее 4 очков)</i>";
		pagesElem.innerHTML = "Очки: " + quiz.score;
				
	}
}

function Init()
{
	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	for(let i = 0; i < btns.length; i++)
	{
		//Прикрепляем событие для каждой отдельной кнопки
		//При нажатии на кнопку будет вызываться функция Click()
		btns[i].addEventListener("click", function (e) { Click(e.target.getAttribute("index")); });
	}
}

function mBOver() {
	backElem.style.color = 'green'
}
function mBOut() {
	backElem.style.color = 'black'
}
function mNOver() {
	if(isTrue)
		nextElem.style.color = 'green'
	else
		nextElem.style.color = 'red'
}
function mNOut() {
	nextElem.style.color = 'black'
}

function Click(index) 
{
	//Получаем номер правильного ответа
	let correct = quiz.Click(index);

	//Находим все кнопки
	let btns = document.getElementsByClassName("button");

	//Делаем кнопки серыми
	for(let i = 0; i < btns.length; i++)
	{
		btns[i].className = "button button_passive";
	}

	//Если это тест с правильными ответами, то мы подсвечиваем правильный ответ зелёным, а неправильный - красным
	if(quiz.type == 1)
	{
		if(correct >= 0)
		{
			btns[correct].className = "button button_correct";
		}

		if(index != correct) 
		{
			btns[index].className = "button button_wrong";
		} 
	}
	else
	{
		//Иначе просто подсвечиваем зелёным ответ пользователя
		btns[index].className = "button button_correct";
	}
	
	setTimeout(Update, 500);
}