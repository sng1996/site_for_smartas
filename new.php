<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=divice-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="slick/slick.css"/>
    <link rel="stylesheet" href="selectLib/style.css"/>
    <link href="my.css" rel="stylesheet">
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
        <li><a href="order.php">Создать заказ</a></li>
        <li><a>Сообщения</a></li>
        <li><a>Рейтинг студентов</a></li>
        <li><a>Личный кабинет</a></li>
    </ul>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-5 col-md-offset-2 my_order">
            <div class="col-md-9" style="padding: 0px;">
                <h1>Аналитическая геометрия</h1>
                <h2>Домашняя работа</h2>
                <h3>10.02</h3>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <h4>1500 ₽</h4>
                <h3 style="text-align: right; margin-top: 34px;">Завтра, 19:00</h3>
            </div>
        </div>
        <div class="my_panel_new">
            <h5>Категории</h5>
            <form class="my_sort">
                <p>
                    <select class="turnintodropdown">
                        <option>Все категории</option>
                        <option>Все категории</option>
                        <option>Математика</option>
                        <option>Физика</option>
                        <option>Информатика</option>
                    </select>
                </p>
            </form>
            <h5>Сортировать по</h5>
            <form class="my_sort">
                <p>
                    <select class="turnintodropdown">
                        <option>Дате добавления</option>
                        <option>Дате добавления</option>
                        <option>Истечению срока</option>
                        <option>Цене</option>
                    </select>
                </p>
            </form>
            <form class="my_sort">
                <p>
                    <select class="turnintodropdown">
                        <option>По возрастанию</option>
                        <option>По возрастанию</option>
                        <option>По убыванию</option>
                    </select>
                </p>
            </form>
        </div>
        <div class="col-md-5 col-md-offset-2 my_order">
            <div class="col-md-9" style="padding: 0px;">
                <h1>Аналитическая геометрия</h1>
                <h2>Домашняя работа</h2>
                <h3>10.02</h3>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <h4>1500 ₽</h4>
                <h3 style="text-align: right; margin-top: 34px;">Завтра, 19:00</h3>
            </div>
        </div><div class="col-md-5 col-md-offset-2 my_order">
            <div class="col-md-9" style="padding: 0px;">
                <h1>Аналитическая геометрия</h1>
                <h2>Домашняя работа</h2>
                <h3>10.02</h3>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <h4>1500 ₽</h4>
                <h3 style="text-align: right; margin-top: 34px;">Завтра, 19:00</h3>
            </div>
        </div><div class="col-md-5 col-md-offset-2 my_order">
            <div class="col-md-9" style="padding: 0px;">
                <h1>Аналитическая геометрия</h1>
                <h2>Домашняя работа</h2>
                <h3>10.02</h3>
            </div>
            <div class="col-md-3" style="padding: 0px;">
                <h4>1500 ₽</h4>
                <h3 style="text-align: right; margin-top: 34px;">Завтра, 19:00</h3>
            </div>
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
</body>
</html>