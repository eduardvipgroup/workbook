<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>PHP</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="../library/css/style.css">
    <script src="../library/js/bootstrap.min.js"></script>
    <style>.sidebar-nav li:nth-child(1):before {
            background-color: #0b0c86;
        }

        .col-lg-8 {
            background: #b0b0b0;
        }

        h4 {
            background: #dbdbdb;
        }
    </style>
</head>
<body>

<div class="wrapper-item">
    <div class="name name-lesson"></div>

    <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper-item" role="navigation">
        <ul class="nav sidebar-nav sidebar-nav-item">
            <li>
                <a class="index" href="../index.html">главная</a>
            </li>
            <li>
                <a href="#">работа с файлами</a>
            </li>
            <li>
                <a href="#">работа с БД Mysql</a>
            </li>
            <li>
                <a href="#">get, post, file - методы передачи данных на сервер</a>
            </li>
            <li>
                <a href="#">Cookie & Session</a>
            </li>
            <li>
                <a href="#">Services</a>
            </li>
            <li>
                <a href="#">шаблоны</a>
            </li>
        </ul>
    </nav>

    <div id="page-content-wrapper">

        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <h2>Вопросы тестирования по JS - сложный уровень</h2>
                    <h4 style="color: #2d2366">1. Свойствами какого объекта являются все глобальные переменные и
                        функции?</h4>
                    <span>В зависимости от контекста выполнения, если скрипт выполняется в браузере - <b
                                style="color: green">"window"</b></span><br>
                    <h4 style="color: #2d2366">2. Метод, с помощью которого можно добавить элемент в документ?</h4>
                    <span><b style="color: green">appendChild и insertBefore</b></span><br><br>
                    <span> Например, если "parentElem.appendChild(elem)", то метод <b
                                style="color: green">appendChild()</b>
                        добавляет elem в <b>конец</b> дочерних элементов parentElem.</span><br><br>
                    <span> Например, если "parentElem.insertBefore(elem, nextSibling)", то метод <b
                                style="color: green">insertBefore()</b>
                        вставляет elem в коллекцию детей parentElem, <b>перед</b> элементом nextSibling</span><br><br>
                    <h4 style="color: #2d2366">3. К какому типу данных относятся массивы?</h4>
                    <b> - "object" (проверка -> typeof)</b><br><br>
                    <h4 style="color: #2d2366">4. Какой дате соответствует инструкция new Date(2015, 0, -1)?</h4>
                    <b> 30 декабря 2014 00:00</b><br><br>
                    <h4 style="color: #2d2366">5. В каком случае переменная или функция является глобальной?</h4>
                    <s> Если она не находится внутри другой функции или объявлена с ключевым словом global.</s><br><br>
                    <b> Если она она объявлена как свойство window (вне функции) - 'window.a', </b><br><br>
                    <h4 style="color: #2d2366">6. Выберите из перечисленных свойства элементов, доступные только для
                        чтения:</h4>
                    <b style="color: green"> clientTop</b> - толщина верхней границы элемента в пикселя. Не включает в
                    себя margin и padding. <br><br>
                    <b style="color: green"> clientWidth</b> - содержит ширину элемента внутри границ вместе с padding,
                    но без border и прокрутки. <br><br>
                    <b style="color: red"> <s>scrollTop</s> </b> - считывает или устанавлиет количество пикселей,
                    прокрученных от верха элемента. <br><br>
                    <b style="color: green"> scrollHeight</b> - измерение высоты контента в элементе, включая
                    содержимое, невидимое из-за прокрутки. <br><br>
                    <h4 style="color: #2d2366">7. В чем отличие вызова setInterval и рекурсивного вызова setTimeout с
                        одним и тем же интервалом?
                    </h4>
                    <b> При вызове <b style="color: #087a32">setInterval</b> пауза между вызовами будет меньше и может
                        быть
                        разной. </b><br><br>
                    <h4 style="color: #2d2366">8. Для какой временной зоны возвращают результат стандартные методы
                        получения года, месяца, числа месяца</h4>
                    <p>getDay() - получение дня недели (от 0 до 6, начиная с воскресенья) <br>
                        getFullYear() - получение года (4 цифры) <br>
                        getMonth() - получение месяца (от 0 до 11) <br>
                        getHours() — получение часов. <br>
                        getMinutes() — получение минут. <br>
                        getSeconds() — получение секунд. <br>
                        getMilliseconds() — получение миллисекунд.<br>
                        getTime() — возвращает число миллисекунд, прошедших с 01.01.1970 00:00:00 UTC. <br>
                        Это то же число, которое используется в конструкторе new Date(milliseconds).<br>
                        getTimezoneOffset() — возвращает разницу между местным и UTC-временем, в минутах.</p><br>
                    Все методы, указанные выше, возвращают результат для <b style="color: green">местной</b> временной
                    зоны.
                    <h4 style="color: #2d2366">9. Инструкция создания пустого массива длинной 10 элементов:</h4>
                    <pre>
                         var a = new Array(10);
                         console.log(a.length); // 10
                    </pre>
                    <h4 style="color: #2d2366">10. Выберите верные равенства из списка:</h4>
                    <pre>
                    [] == false;
                    true
                    [1][0] == 1;
                    true
                    [] == [];
                    <b style="color: red">false</b>
                    ![ ] == [ ]
                    true
                </pre>
                    <h4 style="color: #2d2366">11. Список существующих событий мыши/клавиатуры:</h4>
                    <ul>
                        <li>click – происходит, когда кликнули на элемент левой кнопкой мыши</li>
                        <li>contextmenu – происходит, когда кликнули на элемент правой кнопкой мыши</li>
                        <li>mouseover – возникает, когда на элемент наводится мышь</li>
                        <li>mousedown и mouseup – когда кнопку мыши нажали или отжали</li>
                        <li>mousemove – при движении мыши</li>
                    </ul>
                    <h4 style="color: #2d2366">12. Выберите корректные способы установки функции calc() в качестве
                        обработчика события click для элемента</h4>
                    <p>(при условии input = document.getElementById("elem"):</p>
                    <b style="color: #0aa446">input.addEventListener("click", calc);</b> <br>
                    document.getElementById("elem").onclick = calc(); // нельзя !!! - elem.onclick = calc();<br>
                    <s style="color: red">elem.onclick = calc();</s>
                    <h4 style="color: #2d2366">13. Как определить длину строки?</h4>
                    <s style="color: red">С помощью метода length()</s>
                    <h4 style="color: #2d2366">14. Чем отличается функция-конструктор от обычной функции?</h4>
                    <s style="color: red">В нее можно передавать контекст.</s><br>
                    <s style="color: red"><a href="http://jsraccoon.ru/oop-constructors">Только функция-конструктор
                            может создать и
                            возвратить объект</a></s>
                    <h4 style="color: #2d2366">15. В каких случаях из перечисленных контекст obj в метод test()
                        <b>не</b> передастся?</h4>
                    <span style="color: #0aa446">(newTest = obj.test)()</span><br>
                    <span style="color: #ff2102">(obj["test"])()</span><br>
                    <span style="color: #087a32">setTimeout (obj.test, 1000);</span><br>
                    <s style="color: red">obj.test();</s><br>
                    <h4 style="color: #2d2366">16. Выберите корректные варианты синтаксиса немедленно вызываемого
                        функционального выражения:
                    </h4>
                    (function() { alert(123) })()<br>
                    (function() { alert(123) }())<br>
                    ! function() { alert(123) }() <br>
                    <s style="color: red">function() { alert(123) }()</s><br>
                    <h4 style="color: #2d2366">17. Какие есть ограничения по количеству элементов массива и их
                        типу?</h4>
                    <s>Количество элементов не более 2<sup>32</sup>-1, тип элементов – любой.</s><br>
                    <s>Количество элементов не более 2<sup>32</sup>-1, тип элементов – кроме объектов.</s><br>
                    Ограничений НЕТ !<br>
                    <h4 style="color: #2d2366">18. stopImmediatePropagation() и stopPropagation()</h4>
                    <span>stopImmediatePropagation() - останавливает цепочку вызова событий для последующих слушателей DOM элемента.</span><br>
                    <span>stopPropagation() - прекращает дальнейшую передачу текущего события.</span><br>
                    <h4 style="color: #2d2366">19. В чем особенность событий focus / blur ?</h4>
                    <s style="color: red">Для этих событий можно назначить только один обработчик событий</s>
                    <h4 style="color: #2d2366">20. Выберите методы для получения подстроки в JavaScript</h4>
                    <b style="color: green">substring()</b> - Возвращает подстроку, расположенную в указанном месте
                    объекта String. <br>
                    Метод substring возвращает строку, содержащую подстроку, которая начинается с позиции start и
                    завершается позицией end (но не включает эту позицию). <br><br>

                    <b style="color: green">substr()</b> - Получает подстроку указанной длины, которая начинается с
                    указанной позиции.<br>
                    stringvar.substr(start [, length ]) <br><br>
                    match() - возвращает получившиеся совпадения при сопоставлении строки с регулярным выражением<br>
                    indexOf ()- поиск подстроки внутри строки и ее извлечение<br>
                    <h4 style="color: #2d2366">21. Выберите выражения, результат вычисления которых равен Infinity:</h4>
                    <b style="color: green"> console.log (5e1000)</b> // Infinity <br><br>
                    <b style="color: green"> console.log (9/0)</b> // Infinity <br><br>
                    <b style="color: red"> <s>console.log (0/0)</s> </b> // NaN<br><br>
                    <b style="color: green">console.log (Infinity + 1)</b> // Infinity <br><br>
                    <h4 style="color: #2d2366">22. В каком порядке выполнятся обработчики одного и того же события,
                        установленные с помощью метода addEventListener?</h4>
                    В порядке регистрации (в том порядке, в котором были назначены обработчики <br>
                    <pre style="color: #0b0c86">
                        <?php
                        echo htmlspecialchars('
<script>
  var div = document.getElementById(\'one\');
  div.addEventListener(\'click\', foo1, false);
  div.addEventListener(\'click\', foo2, false);
  div.addEventListener(\'click\', foo3, false);

  function foo1() { alert(\'1\'); }
  function foo2() { alert(\'2\'); }
  function foo3() { alert(\'3\'); }
</script>                        ');
                        ?>
                    </pre>
                    <h4 style="color: #2d2366">23. Как удалить обработчик, назначенный с помощью addEventListener, где в
                        качестве функции-обработчика была задана анонимная функция?</h4>
                    <b> Это не возможно!</b><br><br>
                    <h4 style="color: #2d2366">24. Чему по умолчанию равно строковое представление (например -
                        объекта)?</h4>
                    <s style="color: red"> "[Object]" </s><br><br>
                    <b style="color: #087a32"> "[object Object]" </b><br><br>

                    <b>Объекты функции:</b><br>
                    JSON.stringify(function (){}) → [object Function]<br><br>
                    <b>Объекты массива:</b><br><br>
                    <b> <b style="color: #0b0c86">"object"</b> - строковое представление массива (используй
                        typeof)</b><br>
                    JSON.stringify([]) → [object Array]<br><br>
                    <b>Объекты RegExp</b><br>
                    JSON.stringify(/x/) → [object RegExp]<br><br>
                    <b>Объекты даты</b><br>
                    JSON.stringify(new Date) → [object Date]<br>
                    <h4 style="color: #2d2366">25. В каком порядке обрабатываются одновременно возникающие события?</h4>
                    <s> Обработчики в рамках одного класса (напр., события клавиатуры, мыши и т.д.) ставятся в очередь,
                        иначе – текущий код прерывается и выполняется обработчик. </s><br><br>
                    <b>Код не прерывается!</b><br> <br>
                    Обычно события становятся в очередь и <b style="color: green">обрабатываются в порядке
                        поступления</b>, асинхронно, независимо друг от друга.
                    <h4 style="color: #2d2366">26. Как поменяется свойство DOM-объекта при изменении соответствующего
                        ему HTML-атрибута?</h4>
                    <s> При изменении атрибута значение всегда копируется в соответствующее свойство. </s><br><br>
                    <s>Свойства и аттрибуты независимы, поэтому свойство не поменяется</s><br><br>
                    <h4 id="h4" style="color: #2d2366">27. Какое значение возвращается, если DOM-элемент не найден при
                        поиске по ID?</h4>
                    <s style="color: red">undefined</s><br>
                    <pre style="color: #0b0c86;">
                        <?php
                        echo htmlspecialchars('
                    <script>
                        var elem = document.getElementById(\'h3\'); // h3 не существует
                        console.log(elem); // null
                    </script>                       ');
                        ?>
                    </pre>
                    <b style="color: #087a32">null</b><br>
                    <h4 style="color: #2d2366">27. Необходимо выбрать выражение, результат вычисления которого равен
                        NaN:</h4>
                    0/0<br><br>
                    <h4 style="color: #2d2366">28. Какими способами можно создать новый пустой объект?</h4>
                    Есть два метода двух разных создания пустого объекта в JavaScript:<br>
                    <br>
                    var objectA = {}<br>
                    var objectB = new Object()<br>
                    <h4 style="color: #2d2366">29. Что произойдет если вручную присвоить свойству length меньшее
                        значение?</h4>
                    <s style="color: red">Ошибки не произойдет, но свойство length не изменится, т.к. оно только для
                        чтения.</s><br>
                    <b style="color: #087a32">Значение свойства уменьшится и изменится размер массива.</b><br><br>
                    var user = ['Василий', '1'];<br>
                    user.length = 1;<br>
                    console.info(user);<br>
                    ["Василий"]<br>
                    <h4 style="color: #2d2366">30. Каким образом метод sort сравнивает элементы, если для него не задана
                        специальная функция?</h4>
                    <s style="color: red">Если функция сортировки не задана, метод вернет исходный массив.</s><br>
                    По умолчанию <b style="color: #0aa446">SORT</b> сортирует, преобразуя элементы к строке.
                    <h4 style="color: #2d2366">31. Возможно ли создавать для DOM-объекта произвольные свойства или
                        методы?</h4>
                    <s style="color: red">Можно создать только свойства.</s><br>
                    ДА!
                    <h4 style="color: #2d2366">32. Выберите какие из перечисленных дополнительных параметров для
                        свойства могут быть заданы с помощью метода Object.defineProperty?</h4>
                    Функции для чтения/записи свойства (геттер/сеттер).<br>
                    Флаг видимости свойства в цикле и методе Object.keys.<br>
                    Флаг возможности редактирования значения.<br>
                    <s style="color: red">Флаг возможности переименования свойства.</s><br>
                    <h4 style="color: #2d2366">33. Какими функциями можно проверить число на равенство NaN?</h4>
                    isNaN(n) <br>
                    <h4 style="color: #2d2366">34. Для чего нужны функции parseInt() и parseFloat()?</h4>
                    Для преобразования строки в число, при этом число должно быть в <b>начале</b> строки.<br>
                    <h4 style="color: #2d2366">35. Что такое объект события (EVENT)?</h4>
                    <b style="color: #0aa446">Специальный объект, передаваемый в обработчик и содержащий информацию о
                        событии</b> <br><br>

                    Общие свойства объекта event:<br><br>

                    type - строка, содержащее имя события.<br>
                    target - DOM-элемент, который сгенерировал событие.<br>
                    currentTarget - DOM-элемент, который вызвал обработчик события.<br>
                    eventPhase - число, показывающее на каком этапе произошло событие (1 - этапе погружения (перехвата),<br>
                    2 - на цели, 3 - на этапе всплытия).<br>
                    timestamp - число (дата), когда произошло событие<br>
                    bubbles - возвращает логическое значение, указывающее может ли данное событие всплывать<br>
                    defaultPrevented - проверяет можно ли вызвать метод preventDefault() для данного события.<br>
                    view - возвращает ссылку на объект window, в котором произошло событие.<br>
                    Методы объекта event:<br><br>

                    preventDefault() - отменить стандартное действие браузера, если это конечно возможно.<br>
                    stopPropagation() - предотвратить всплытие события (пузырька)<br>
                    <h4 style="color: #2d2366">36. В какой момент времени создается объект лексического окружения
                        функции?</h4>
                    <b>При каждом вызове функции</b>, перед выполнением.
                    <h4 style="color: #2d2366">37. Почему функции, созданные с помощью конструкции new Function не могут
                        использовать замыкания?</h4>
                    <s style="color: red"> Эти функции могут использовать замыкания, так же, как и любые другие функции.
                    </s><br>
                    <b style="color: #0aa446">Поскольку не имеет доступа к своему <u>внешнему</u> лексическому окружению</b>
                    <br>
                    <h4 style="color: #2d2366">38. Выберите среди перечисленных корректные условия проверки наличия
                        символа "+" в строке str:</h4>
                    str.lastIndexOf("+") != -1<br>
                    str.charAt("+") == true<br>
                    <h4 style="color: #2d2366">39. Как можно создать полную копию объекта cо всеми свойствами (включая
                        вложенные)?</h4>
                    <s style="color: red"> Достаточно просто присвоить объект в новую переменную. </s><br>
                    Нужно скопировать каждое свойство в новый объект <br>
                    <h4 style="color: #2d2366">40. Выберите из списка стандартные DOM-объекты, которые есть в
                        современных браузерах:</h4>
                    document.documentElement - выведет весь DOM (html)
                    document.head
                    document.body
                    <h4 style="color: #2d2366">41.Выберите метод, с помощью которого в функцию можно передать
                        произвольный контекст с аргументами в виде массива:</h4>
                    <s style="color: red"> bind </s> - появился в стандарте ES5 и позволяет выполнить отложенный вызов
                    функции.<br>
                    <b style="color: green"> apply</b> - работает как call, но принимает аргументы в виде <b>массива</b><br>
                    Mетод call принимает аргументы в виде списка <br><br>
                    APPLY и CALL - старые методы (из ES3)
                    <h4 style="color: #2d2366">42. В чем особенность переменных, объявленных внутри отдельных блоков
                        кода в фигурных скобках, а также внутри циклов и условных операторов при помощи let?</h4>
                    Переменные, объявленные объявленные внутри циклов/условных операторов, не доступны за их пределами.
                    <h4 style="color: #2d2366">43. Что произойдет если в одной области видимости под одним и тем же
                        именем объявить переменную (без присваивания) и функцию?</h4>
                    Под этим именем будет доступна переменная
                    <h4 style="color: #2d2366">44. Как можно получить определенный символ в строке?</h4>
                    По номеру символа, с помощью метода <b style="color: #0aa446">CharAt()</b> или квадратных скобок.
                    <h4 style="color: #2d2366">45. Какой алгоритм поиска элемента в массиве используется в методах
                        indexOf и lastIndexOf?</h4>
                    Последовательный перебор.
                    <h4 style="color: #2d2366">47. Как проверить наличие определенного свойства у объекта, если оно
                        может быть равно undefined?</h4>
                    <s style="color: red">С помощью оператора in и дополнительной проверки на равенство undefined.</s>
                    <h4 style="color: #2d2366">48. Для чего нужны функции setTimeout и setInterval?</h4>
                    Для выполнения функции или кода, заданного параметром, через определенный интервал времени
                    <h4 style="color: #2d2366">49. В чем основная особенность событий focus/blur?</h4>
                   <s style="color: red"> Для этих событий можно назначить только один обработчик.</s>
                    <h4 style="color: #2d2366">50. С помощью каких свойств из перечисленных можно получить значения текстовых узлов или комментариев?</h4>
                    innerHTML
                    nodeValue
                    data
                </div>
            </div>
        </div>
    </div>

</div>
</body>
</html>

