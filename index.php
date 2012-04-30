<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.2.js"></script>
        <script type="text/javascript" src="https://raw.github.com/cowboy/javascript-linkify/master/ba-linkify.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/jquery-ui.min.js"></script>
        <script type="text/javascript" src="JQuery/jquery.center.min.js"></script>
        <script type="text/javascript" src="JQuery/jquery.msg.min.js"></script>
        <link media="screen" href="JQuery/jquery.msg.css" rel="stylesheet" type="text/css">
        <link type="text/css" rel="stylesheet" href="style/style.css" />
<script>
$(document).ready(function(){
   $("#register").slideToggle('slow');
   $("#logintext").click(function(){
      $("#login").slideToggle('slow'); 
   });
   $("#registertext").click(function(){
      $("#login").slideToggle('slow'); 
      $("#register").slideToggle('slow');
   });
});
</script>
        <title>AdvancedTalk - ALPHA</title>
    </head>
    <body>
        <div id="wrapper">
            <div id="chat">
                <div id="greetings">
                <div id="logintext">
                    Login
                </div>
                <div id="login">
                    <form action="" method="post">
                        <label for="username">Username:</label>
                        <br />
                        <input type="text" id="username" name="username" class="submit">
                        <br />
                        <label for="password">Password:</label>
                        <br />
                        <input type="password" id="password" name="password" class="submit">
                        <br />
                        <input type="submit" id="submit" name="submit" class="submit" value="Login">
                    </form>
                </div>
                <div id="registertext">
                    Register
                </div>
                    <div id="register">
                        <form action="" method="post">
                        <label for="username">Username:</label>
                        <br />
                        <input type="text" id="username" name="username" class="submit">
                        <br />
                        <label for="password">Password:</label>
                        <br />
                        <input type="password" id="password" name="password" class="submit">
                        <br />
                        <label for="password">E-mail:</label>
                        <br />
                        <input type="password" id="mail" name="mail" class="submit">
                        <br />
                        <input type="submit" id="submit" name="submit" class="submit" value="Register">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
