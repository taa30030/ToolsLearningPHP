<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>
    <style type="text/css">
    #alert {
        width: 100%;
        height: 40px;
    }

    body {
        /* font-family: 'mitr-regular-webfont' !important; */
        background: url(img/bg.png);
        background-size: cover;
    }

    #block {

        margin: auto auto;
        display: block;
        padding-top: 20px;
        display: flex;
        justify-content: center;

    }

    button {
        background-color: #ffffff;
        border-radius: 5px;
        cursor: pointer;
        width: 200%;
        height: 40px;
    }

    .card {

        background: #f1f1f1;
        height: 70%;
        width: 50%;
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        border-radius: 10px;
        margin: auto auto;
        margin-bottom: 25px;
        /* display: flex;
        justify-content: center; */
        vertical-align: middle;
        /* 5px rounded corners */
    }

    #form {
        margin: top;
    }

    .pic {

        height: 200px;
        margin: auto auto;
        display: block;
    }

    /* 
    #img_container img {
        padding-top: 100px;
        height: 250px;
        margin: auto auto;
        display: block;
        vertical-align: middle;
        margin-bottom: 25px;
    } */
    </style>

</head>

<body>





    <div>


        <?php session_start(); 
        
                //login name = admin password = 1234;
                
        if ( isset($_POST['loginButton'] ) && ($_POST['uname'] == "admin") && ($_POST['pw'] == "1234") ) { 
                $_SESSION['sid'] = session_id();  
                header( 'Location: header.php' );
        }
        

            if ( isset($_POST['loginButton'] ) && ($_POST['uname'] != "admin" || $_POST['pw'] != "1234") ) { ?>
        <div id="alert">
            <div class='alert alert-danger'>
                Username and Or Password ไม่ถูกต้อง
            </div>
        </div>
        <?php } ?>



        <div class="card">
            <div id="block">
                <img class="pic" src="pics/icon-tools.png" />
            </div>
            <div id="form">
                <form class="form-horizontal" method="post">
                    <div class="form-group">

                        <label class="control-label col-sm-3">Username</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="uname" placeholder="Username">

                        </div>
                    </div>

                    <div class="form-group">
                        <label class="control-label col-sm-3">Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="pw" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-4 col-sm-3">
                            <button type="submit" name="loginButton">
                                Login</button>
                        </div>
                    </div>
                </form>

            </div>


        </div>
    </div>
    </div>


</body>

</html>