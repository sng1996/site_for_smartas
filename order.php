<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css"/>
    <link rel="stylesheet" href="selectLib/style.css"/>
    <link href="my.css" rel="stylesheet">
    <link rel="stylesheet" href="calendarLib/calendar.css" media="screen">
    <script type='text/javascript' src='selectLib/select.js'></script>
    <title>Main</title>
</head>
<body>
<div class="container" style="padding-left: 0px;">
    <nav class="navbar navbar-default navbar-fixed-top my_new_nav" style="background: linear-gradient(to right, #606C88, #3F4C6B)">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="index.php" class="header">Smart as</a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <form class="navbar-form navbar-left">
                    <div class="input-group">
                        <input type="text" class="form-control my_textfield" placeholder="Search">
                        <span class="input-group-btn">
                            <button class="btn btn-default my_btn_nav" type="button">Go!</button>
                        </span>
                    </div>
                </form>
                <ul class="nav navbar-nav">
                    <li><img class="ios" height="25px" style="margin-top: 8px; margin-left: 100px;" src="static/ios.svg"></li>
                    <li><img class="android" height="23px" style="margin-top: 11px; margin-right: 150px;" src="static/android.svg"></li>
                    <li><img height="23px" style="margin-top: 11px;" src="static/man.svg"></li>
                </ul>
            </div>
        </div>
    </nav>
</div>
<div class="new_second_nav">
    <hr>
    <ul>
        <li style="margin-left:2vw"><a>Новые задания</a></li>
        <li><a>Создать заказ</a></li>
        <li><a>Сообщения</a></li>
        <li><a>Рейтинг студентов</a></li>
        <li><a>Личный кабинет</a></li>
    </ul>
</div>
<div class="container">
        <div class="my_panel_create">
            <div class="first">
                <div id="calendar"></div>
                <div style="width:232px; margin: 0 auto">
                    <div class="icon_block">
                        <img src="static/deadline.svg">
                    </div>
                    <div style="display: inline-block; margin-right: 1px; vertical-align: top">
                        <form class="my_sort my_time" style="height: 42px;">
                            <p>
                                <select class="turnintodropdown">
                                    <option>hh</option>
                                    <option>00</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </p>
                        </form>
                    </div>
                    <div style="display: inline-block; vertical-align: top">
                        <form class="my_sort my_time" style="height: 42px;">
                            <p>
                                <select class="turnintodropdown">
                                    <option>mm</option>
                                    <option>00</option>
                                    <option>01</option>
                                    <option>02</option>
                                    <option>03</option>
                                    <option>04</option>
                                </select>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
            <div class="second">
                <div style="margin-bottom: 10px;">
                    <div class="icon_block">
                        <img src="static/science.svg">
                    </div>
                    <form class="my_sort" style="height: 42px;">
                        <p>
                            <select class="turnintodropdown">
                                <option>Область науки</option>
                                <option>Математика</option>
                                <option>История</option>
                                <option>Физика</option>
                                <option>Информатика</option>
                            </select>
                        </p>
                    </form>
                </div>
                <div>
                    <div class="icon_block">
                        <img src="static/worktype.svg">
                    </div>
                    <form class="my_sort" style="height: 42px;">
                        <p>
                            <select class="turnintodropdown">
                                <option>Тип работы</option>
                                <option>Домашняя работа</option>
                                <option>Конрольная работа</option>
                                <option>Курсовой проект</option>
                                <option>Дипломный проект</option>
                            </select>
                        </p>
                    </form>
                </div>
                <div>
                    <div class="icon_block" style="padding-top: 8px">
                        <img src="static/subject.svg">
                    </div>
                    <p><input class="my_textfield_order" type="text" placeholder="Название"></p>
                </div>
                <div>
                    <div class="icon_block">
                        <img src="static/cost.svg">
                    </div>
                    <p><input class="my_textfield_order" type="text" placeholder="Цена"></p>
                </div>
                <div>
                    <div class="icon_block" style="padding-top: 4px">
                        <img src="static/descript.svg">
                    </div>
                    <textarea class="my_description" type="text" placeholder="Описание"></textarea>
                </div>

            </div>
            <div class="third">
                <button><img src="static/pdf.svg" height="50px"></button>
                <button><img src="static/addnew.svg" height="50px"></button>
            </div>
            <div style="width: 1045px; text-align: center">
                <input type="button" class="create_button" value="Создать заказ">
            </div>
        </div>
</div>
<script src="js/jquery-3.2.1.js"></script>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-1.2.1.min.js"></script>
<script src="js/jquery.scroolly.js"></script>
<script src="js/my.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="particles/particles.js"></script>
<script src="particles/app.js"></script>
<script src="particles/lib/stats.js"></script>
<script src="slick/slick.min.js"></script>
<script src="calendarLib/jquery-ui-datepicker.min.js"></script>
<script src="calendarLib/calendar.js"></script>
</body>
</html>