<!DOCTYPE html>
<html lang="en">

<head>
    <title>Toolslearning</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    nav li {
        display: inline-block;
        margin-left: 10px;
        /* padding-top: 20px; */
        position: relative;
    }

    .logout {
        margin-right: 50px;
    }

    img {
        height: 40px;
        width: 40px;
        margin: 5px;
        margin-right: 0px !important;
        display: inline;
        /*  margin: auto auto;
 display: block; */
        /* vertical-align: middle; */
        /* margin-bottom: 0px; */
    }
    </style>
</head>

<body>

    <nav class="navbar navbar-inverse">
        <div>

            <ul class="nav navbar-nav">
                <li><img src="pics/icon-tools.png" /></li>
                <li><a class="navbar-brand" href="#">ToolsLearning</a></li>
                <li class="active"><a href="#">หน้าหลัก</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">จัดการข้อมูล<span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">บทที่ 1</a></li>
                        <li><a href="#">บทที่ 2</a></li>
                        <li><a href="#">บทที่ 3</a></li>
                        <li><a href="#">บทที่ 4</a></li>
                        <li><a href="#">บทที่ 5</a></li>
                        <li><a href="#">บทที่ 6</a></li>
                        <li><a href="#">บทที่ 7</a></li>
                        <li><a href="#">บทที่ 8</a></li>
                        <li><a href="#">บทที่ 9</a></li>
                        <li><a href="#">บทที่ 10</a></li>
                    </ul>
                </li>

                <li><a href="#">จัดการข้อสอบ</a></li>
                <li><a href="#">ถาม-ตอบ</a></li>
            </ul>
            <div class="logout">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        <h3>ToolsLearning</h3>
        <p>This example adds a dropdown menu for the "Page 1" button in the navigation bar.</p>
    </div>

</body>

</html>