<?php

    define("MYSQL_SERVER", "127.0.0.1:3306");
    define("MYSQL_USER", "root");
    define("MYSQL_PASSWORD", "");
    define("MYSQL_DB", "project");

    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB)
        or die("Error: ".mysqli_error($link));
    if(!mysqli_set_charset($link, "utf8"))
    {
        prinf("Error: ".mysqli_error($link));
    }

    $query = "SELECT * FROM teacher ORDER BY id ASC";
    $result = mysqli_query($link, $query);

    if(!$result)
        die(mysqli_error($link));

    $n = mysqli_num_rows($result);
    $teachers = array();

    for($i = 0; $i < $n; $i++)
    {
        $row = mysqli_fetch_assoc($result);
        $teachers[] = $row;
    }

?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>ulstu.ru</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Luckiest+Guy" rel="stylesheet">
</head>
<body>
    <div class="header-top">
        <div class="header-logo">
            <img src="img/logoheader.jpg" width="969" height="35">
            <div class="log-pass">
            <ul class="menu_two" style="width: 500px; float: right; padding: 0px">
                <li><a href=# style="background: none; padding-top: 1px;">Абитуриентам</a></li>
                <li><a href=# style="background: none; padding-top: 1px;">Направления</a></li>
                <li><a href=# style="background: none; padding-top: 1px;">Наука</a></li>
                <li><a href=# style="width: 160px; background: none; padding-top: 1px;">Преподаватели▼</a>
                    <ul class="submenu" style="background-color: #3A84C3; padding: 10px; padding-left: 28px" >
                        <? foreach ($teachers as $teacher) { ?>
                            <li><a href=#><?=$teacher["name"]?></a></li>
                        <? } ?>
                    </ul>
                </li>
            </ul>
            </div>
        </div>

    </div>
    <div class="header">
        <div class="navbar">
            <div class="img_logo">
                <img src="img/logo.jpg" width="60" height="60">
            </div>
            <div class="logo">
                <a href="#">ULSTU</a>
            </div>
            <ul class="menu">
                <li><a href=#>🔔Расписание звонков</a></li>
                <li><a href=#>⏰Расписание зачетов</a>
                    <ul class="submenu">
                        <li><a href=#>⌚Расписание зачетов (бакалавры)(xls)</a></li>
                        <li><a href=#>⌚Расписание зачетов (Магистры)(xls)</a></li>
                    </ul>
                </li>
                <li><a href=#>⏰Расписание экзаменов</a>
                    <ul class="submenu">
                        <li><a href=#>⌚Расписание экзаменов (бакалавры)(xls)</a></li>
                        <li><a href=#>⌚Расписание экзаменов (Магистры)(xls)</a></li>
                    </ul>
                </li>
                <li><a href=#>✍Расписание студентов</a>
                    <ul class="submenu">
                        <li><a href=#>✍Загрузить расписание занятий студентов (xls)</a></li>
                    </ul>
                </li>
                <li><a href=#>⌛Расписание преподавателей</a>
                    <ul class="submenu">
                        <li><a href=#>⏳Загрузить расписание занятий преподавателей (xls)</a></li>
                    </ul>
                </li>
                <li><a href=#>🔒Расписание аудиторий</a>
                    <ul class="submenu" style="width: 200px;">
                        <li><a href=#>🔓 Аудитория №411</a></li>
                        <li><a href=#>🔓 Аудитория №420</a></li>
                        <li><a href=#>🔓 Аудитория №429</a></li>
                        <li><a href=#>🔓 Аудитория №431</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="content_menu">
            <div class="content_menu_left">
                <br>
                <img src="img/glav.png"  style="padding-top: 10px; float: left">
                <br>
                <br>
                <br>
                <font size="2" style="color: black; float: left">Заведующий кафедрой - д.т.н., профессор<font size="2"> <b>Ярушкина Надежда Глебовна.</b></font></font>
                <img src="img/img.jpg" width="400" style="padding-top: 10px">
                <br>
                <br>
                <img src="img/inf.png"  style="padding-top: 10px; width: 250px">
                <br>
                <font size="2"><b>Кафедра осуществляет подготовку по следующим направлениям:</b></font>
                <ul style="text-indent: 20px">
                    <li>►направление 09.03.03 «Прикладная информатика»  (профиль «Прикладная информатика в экономике»).
                        Квалификация - бакалавр;
                    </li>
                    <li>►Квалификация - бакалавр;</li>
                    <li>►направление 09.03.04 «Программная инженерия».
                        Квалификация – бакалавр.
                    </li>
                    <li>►направление 09.04.04 «Программная инженерия».
                        Квалификация – магистр.
                    </li>
                    <li>►направление 09.04.03 «Прикладная информатика».
                        Квалификация – магистр.
                    </li>
                </ul>
                <br>
                <font size="2"><b>При кафедре работает аспирантура по специальностям:</b></font>
                <ul style="text-indent: 20px">
                    <li>►05.13.12 - Системы автоматизации проектирования,
                    </li>
                    <li>►05.13.18 - Математическое моделирование, численные методы и комплексы программ,</li>
                    <li>►08.00.05 - Экономика и управление народным хозяйством.</li>
                </ul>
                <br>
                <img src="img/prepod.png"  style="padding-top: 10px; width: 500px">
            </div>
            <div class="content_menu_right">
                <br>
                <img src="img/nov.png"  style="padding-top: 10px; width: 190px">
                <br>
                <br>
                <table class="bordered">
                    <thead>
                    <tr>
                        <th style="color: white">Аудитория</th>
                        <th style="color: white">Преподаватель</th>
                        <th style="color: white">Дисциплина</th>
                        <th style="color: white">Дата пересдачи</th>
                    </tr>
                    </thead>
                    <tr>
                        <td>420</td>
                        <td>Шамшев Анатолий Борисович</td>
                        <td>ТАиФЯ</td>
                        <td>10.01.18</td>
                    </tr>
                    <tr>
                        <td>431</td>
                        <td>Шамшев Анатолий Борисович</td>
                        <td>Дискретная математика</td>
                        <td>25.01.18</td>
                    </tr>
                    <tr>
                        <td>411</td>
                        <td>Романов Антон Алексеевич</td>
                        <td>КОП</td>
                        <td>01.02.18</td>
                    </tr>
                    <tr>
                        <td>420</td>
                        <td>Воронина Валерия Вадимовна</td>
                        <td>Нейронные сети</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>429</td>
                        <td>Корунова Надежда Владимировна</td>
                        <td>ПИаПС</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>411</td>
                        <td>Эгов Евгений Николаевич</td>
                        <td>Программирование</td>
                        <td>05.03.18</td>
                    </tr>
                    <thead>
                    <tr>
                        <th style="color: white">Аудитория</th>
                        <th style="color: white">Научная конференция</th>
                        <th style="color: white">Время</th>
                        <th style="color: white">Дата выступления</th>
                    </tr>
                    <tr>
                        <td>4а</td>
                        <td>Нечеткая логика и нейронные сети</td>
                        <td>15:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Корунова Надежда Владимировна</td>
                        <td>16:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>4А</td>
                        <td>Эгов Евгений Николаевич</td>
                        <td>Программирование</td>
                        <td>05.03.18</td>
                    </tr>
                    <tr>
                        <td>4а</td>
                        <td>Нечеткая логика и нейронные сети</td>
                        <td>15:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Корунова Надежда Владимировна</td>
                        <td>16:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>4А</td>
                        <td>Эгов Евгений Николаевич</td>
                        <td>Программирование</td>
                        <td>05.03.18</td>
                    </tr>
                    <tr>
                        <td>4а</td>
                        <td>Нечеткая логика и нейронные сети</td>
                        <td>15:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>Корунова Надежда Владимировна</td>
                        <td>16:00</td>
                        <td>03.02.18</td>
                    </tr>
                    <tr>
                        <td>4А</td>
                        <td>Эгов Евгений Николаевич</td>
                        <td>Программирование</td>
                        <td>05.03.18</td>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="footer_content">
            <div class="footer_left_info">
                <font size="2">Ульяновский Государственный Технический Университет</font>
                <br>
                <font size="2">Факультет информационных систем и технологий</font>
                <br>
                <font size="2">Кафедра "Ифнормационные системы"</font>
                <br>
                <font size="1">Лциензия №1719 от 15 августа 2011г. выдана Федеральной службой по надзору в сфере образования и науки"</font>
            </div>
            <div class="footer_right_info">
                <font size="2">432027, г. Ульяновск, ул. Северный Венец, 32, 3 учебный корпус, ауд.422</font>
                <br>
                <font size="2">телефон : (8422) 77-80-79,</font>
                <br>
                <font size="2">факс: (8422) 78-83-45</font>
                <br>
                <font size="2">e-mail: jng@ulstu.ru</font>
            </div>
        </div>
    </div>
    <div class="footer_two">
        <div class="footer_two_info">
            <ul class="menu" style="padding-top: 0px; padding: 0px;">
                <li><a href=#>Ленты Новостей</a></li>
                <p align="center" style="padding-top: 40px; font-size: 10px">Использование любых материалов сайта возможно только со ссылкой на источник информации</p>
            </ul>
        </div>
    </div>
</body>
</html>