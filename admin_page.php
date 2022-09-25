
    <!DOCTYPE html>
    <html>

    <head>
    <title>NeW Teck | Admin Pannel</title>
    <link rel="stylesheet" href="style_admin.css" />
    <link rel="icon" href="images/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>

    <body style="box-sizing: border-box; background-repeat: no-repeat; background-size: cover;background-attachment: fixed;background-image: url('images/colorful_macos_big_sur_apple-wallpaper-1366x768.jpg');">

        

        <div class="more-but" id="menu-but" onclick="showMenu();">

        </div>
        <div class="more" id="menu">
            <div style="margin-left: 100px;text-align: center;" id="men">
                <h1>Menu</h1>
                <p style="text-align:start;">Admin</p>

                <button class="b" style="background-color: rgba(5, 147, 255, 0.759);color: white;" onclick="document.getElementById('popup').style.display='grid'">Edit Profile</button>

                <button class="b" style="background-color: tomato;color:white" onclick="window.location='admin_logout.php'">Logout</button>

            </div>
        </div>





        <div class="admin-page">
            <div class="menu">
                <h1>Admin Pannel</h1>

                <div class="manage-card">

                </div>
                <div class="manage-card">

                </div>
                <div class="manage-card">

                </div>
                <div class="pichart" style="display: inline-block;">
                    <div class="u-pi" style="background-image: conic-gradient( teal 0 20% ,tomato 20%  30% ,rgba(5, 147, 255, 0.759) 30%  100% );">

                    </div>
                    <div class="key">
                        <div style="width: 20px;height: 20px;background-color: teal;display: inline-block;"></div>
                        <h3 style="display: inline-block;margin-left:10px;">Accessories : 20%</h3><br />
                        <div style="width: 20px;height: 20px;background-color: tomato;display: inline-block;"></div>
                        <h3 style="display: inline-block;margin-left:10px;">Laptops : 10%</h3><br />
                        <div style="width: 20px;height: 20px;background-color: rgba(5, 147, 255, 0.759);display: inline-block;"></div>
                        <h3 style="display: inline-block;margin-left:10px;">Games : 70%</h3><br />
                    </div>
                </div>
                <button class="b" >List Items</button>
                <button class="b" >Manage Items</button>
                <button class="b" >Manage Sellings</button>




            </div>
            <div class="content">
                <div class="manage">
                    <div class="mn-i" style="background-image: url('images/users.svg');margin-top: 10px;">

                    </div>
                    <div class="mn-d">
                        <h1>Users</h1>
                        <hr />
                        <h4>Veryfied Users : 300 </h4>
                        <h4>All Users : 500</h4>
                        <hr />
                        <h4>Not Veryfied : 20%</h4>
                        <div class="pi" style=" background-image: conic-gradient( teal 0 20%,rgba(0,0,0,0) 20%);">
                       
                        </div>
                        <button class="b" style="margin-top: 20px" >Manage</button>
                    </div>
                </div>
                <div class="manage">
                    <div class="mn-i" style="background-image: url('images/profit.svg');margin-top: 10px;">

                    </div>
                    <div class="mn-d">
                        <h1>Profit</h1>
                        <hr />
                        <h4>Total Sellings : Rs. 12000 </h4>
                        <h4>Total Costs : Rs. 60000</h4>
                        <hr />
                        <h4>Profit : 80%</h4>
                        <div class="pi" style=" background-image: conic-gradient( tomato 0 80%,rgba(0,0,0,0) 80%);">
                           
                        </div>
                        <button class="b" style="margin-top: 20px" >Manage</button>
                    </div>

                </div>
               
            </div>
        </div>























        <script src="script.js"></script>
    </body>

    </html>
