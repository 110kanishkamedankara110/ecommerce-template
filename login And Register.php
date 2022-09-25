









    <!DOCTYPE html>
    <html>

    <head>
        <title>NeW Teck | Login</title>
        <link rel="stylesheet" href="style.css" />
        <link rel="icon" href="images/logo.svg" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
       
    </head>

    <body id="bo">

        <div class="bg-div" style="background-image: url('images/background.png');">

        </div>
        <div class="log-main">

            <div class="login">
                <div class="signin" id="sd">
                    <div class="sign-div" id="sdn">
                        <h1 style="color:white;">Sign In</h1>
                        <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="text" placeholder="Email" id="email" /><br /><br />
                        <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Password" id="password1" /><br /><br />
                        <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Re Enter Password" id="password2" /><br /><br />
                        <p id="err" style="background-color: tomato;color:white"></p>
                        <button class="bu" onclick="signin();">Sign In</button><br />
                        <button class="bu" onclick="showlogin();">Log In</button>
                    </div>
                    <div id="welcome-login">
                    
                    </div>
                </div>



                <div class="log" id="ld">
                    <div class="login-div" id="ldn">
                        <h1 style="color:white;">Log In</h1>
                        <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="text" placeholder="Email" id="loemail" /><br /><br />
                        <input style="width: 80%;border-radius: 10px;border:none;text-align: center;height: 30px;" type="password" placeholder="Password" id="lopassword" /><br /><br />
                        <p id="err2" style="background-color: tomato;color:white"></p>
                        <button class="bu" onclick="login();">Log In</button><br />
                        <button class="bu" onclick="showsignin();">Sign In</button>
                    </div>
                    <div id="welcome-sign" style="display: none;">
                  
                    </div>
                </div>
            </div>

        </div>













       

        <script src="script.js"></script>
        
    </body>

    </html>
