<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style type="text/css">
    body {
        background: url(img/bg.jpg);
        background-size: cover;
    }

    #block {
        padding-top: 20px;
        display: flex;
        justify-content: center;

    }

    #img_container img {
        padding-top: 100px;
        height: 250px;
        margin: auto auto;
        display: block;
        vertical-align: middle;
        margin-bottom: 25px;
    }
    </style>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
        crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp"
        crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous"></script>

    <!-- <title>Work</title> -->
</head>

<body>
    <h3 id="block">Welcome To ToolsLearnning</h3>

    <div id="img_container">

        <img src="pics/icon-tools.png" />
    </div>

    <div class="container-fluid">


        <?php session_start(); // ถ้า login ไปแล้วจะ ย้อนกลับมาใหม่ err (ตัวแปรที่สามารถเรียกใช้งานได้ตลอดเวลา)
   
        //login name = admin password = 1234;
        
   if ( isset($_POST['loginButton'] ) && ($_POST['uname'] == "admin") && ($_POST['pw'] == "1234") ) { //isset ตรวจตัวแปรว่ามีไหม post[แอตทริบิวต์ชื่ออิลิเมนต์]
         $_SESSION['sid'] = session_id();  // session_id() จะทำการเก็บตัวแปรทั้งหมดที่ถูกประกาศ Session ในหน้าปัจจุบันที่กำลังทำงานอยู่
         header( 'Location: header.php' );
   }
   
        
   if ( isset($_POST['logout'] ) ){        // logout
      session_destroy( );             
      header('Location: '.$_SERVER['REQUEST_URI']);
   }
   
        
   // include "header.php";

    
   if ( isset($_POST['loginButton'] ) && ($_POST['uname'] != "admin" || $_POST['pw'] != "1234") ) { ?>
        <div class='alert alert-danger'>
            Username and/or Password ไม่ถูกต้อง
        </div>
        <?php } ?>



        <?php 

      if ( isset($_SESSION['sid']) ) { ?>
        <div>
            <form class="form-horizontal" method="post">
                <div class="form-group">
                    <center>
                        ออกจากระบบ<br>
                        <button type="submit" name="logout" class="btn btn-default">Logout</button>
                    </center>

                </div>
            </form>
        </div>
        <?php } else { ?>

        <div id="block">


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
                        <button type="submit" name="loginButton" class="btn btn-default"><span class="glyphicon glyphicon-log-in"></span>
                            Login</button>
                    </div>
                </div>
            </form>

        </div>

        <?php } ?>

    </div>
    </div>

</body>

</html>