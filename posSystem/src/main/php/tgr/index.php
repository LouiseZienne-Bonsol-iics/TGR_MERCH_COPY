<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <link rel="stylesheet" href="css/style.css" type="text/css" />

        <title>Teletigers #tgrwin</title>
    </head>
    <body>
        <!-- <?php
        /*
            try
            {
                $cn = pg_connect("host=localhost port=5432 dbname=UserDB user=postgres password=root");

                $sql = "SELECT * FROM USER_INFO"

                if($cn)
                {
                    
                    //code here
                }

            }catch(Exception $e){
                echo $e->getMessage();
            }*/

        ?> -->


        <div class="box">      <!-- class="container"> -->
            <h2>LOGIN</h2>
                <form class="form" action="backup/databasehandler.php" method="post" autocomplete="off">
                    <input type="text" name="username" class="form-field" placeholder="Username" />
                    <input type="password" name="password" class="form-field" placeholder="Password"/>

                    <!--
                    <div class="captcha-container">
                        <img src="CaptchaGenerator.jpg" />
                    </div>

                    <input class="textbox" name="captchaAnswer" placeholder="Enter Captcha"/> -->
                    <input class="neo" type="submit" name="submit" value="Log-in" />
                </form>
        </div>
        
    </body>
</html>
