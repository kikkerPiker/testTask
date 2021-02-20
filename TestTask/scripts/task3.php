<?php 
    //подключаем другие нужные файлы
    include('head.php');
    include('navbar.php');
    
    echo '
        <div class="container ">
            <h1 class="mt-5 text-center">1) SELECT * FROM a, b WHERE a.id=b.a_id;<h1>
            <code>ВЫБРАТЬ ВСЕ ЭЛЕМЕНТЫ(Столбцы) ИЗ ТАБЛИЦ a, b ГДЕ АТРИБУТ id ТАБЛИЦЫ a РАВЕН АТРИБУТ id ТАБЛИЦЫ b </code>

            <h1 class="mt-5 text-center">2) SELECT * FROM a JOIN b ON a.id=b.a_id;<h1>
            <code>ВЫБРАТЬ ВСЕ ЭЛЕМЕНТЫ(Столбцы) ИЗ ТАБЛИЦЫ a И ПРИСОЕДИНИТЬ b ГДЕ АТРИБУТ id ТАБЛИЦЫ a РАВЕН АТРИБУТ id ТАБЛИЦЫ b  </code>

            <h1 class="mt-5"> Вывод: </h1>
            <p style="padding-left: 100px; font-size:30px;">
               <b><mark>
                1) Первая команда просто выводить, где были найдены совпдание
                </mark></b>
            </p>
            <p style="padding-left: 100px; font-size:30px;">
                <b><mark>
                2) Вторая команда уже присоединяет к таблица a, где были найди совпадение из таблицы b
                </mark></b>
            </p>
        </div>
    ';
    
?>