<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | WishList</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="bo" onload="carSet();" style="background-color:rgb(18, 18, 18);">



    <div class="head">
        <div class="s-d"> <input type="text" placeholder="Search" style="display: in;" id="search" class="search" /><button class="s" onclick="search();" id="search">Search</button><button class="s" style="background-color:rgba(255,255,255,0);border:solid white 2px;" onclick="search();" id="search">Advanced</button></div>
        <div class="l-d">
            <div class="logo" onclick="window.location='index.php'"></div>
        </div>
    </div>
    <div class="refresh" onclick="window.location.reload();">

    </div>
    <div class="menu-but" id="menu-but" onclick="showMenu();">

    </div>
    <div class="menu" id="menu">
        <div style="margin-left: 100px;text-align: center;" id="men">

            <div style="text-align:start;">
                <h4 style="margin-left: 10px;margin-top: 10px;cursor: pointer;margin-bottom: 10px;">Kanishka</h4>
            </div>
            <div style="text-align:start;">
                <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='userPage.php'">Account</span>
            </div>



            <h1>Me</h1>

            <div class="box">
                <img src="images/cart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 3px;display: inline-block;">Cart</h3>
            </div>

            <div class="box">
                <img src="images/suit-heart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" />
                <h3 style="margin-top: 3px;margin-bottom: 5px;display: inline-block;">WishList</h3>
            </div>

            <div style="text-align: end;">

                <button class="s">Log Out</button>


            </div>



        </div>
    </div>


    <div class="cartdiv">
        <div class="cardiv1" style="background-color: rgb(53,50,50);border-radius: 10px;">
            <hr />
            <h1 style="color:rgb(106,117,117);text-align:center">My WishList</h1>
            <hr />
            <div style="width:100%;">
                <table style="width:80%;color: rgb(106,117,117);text-align:end;">
                    <tr>
                        <td>
                            <h3>No Of Items : </h3>
                        </td>
                        <td>
                            <h3>5</h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Sub-Total : </h3>
                        </td>
                        <td>
                            <h3>4000 Rs </h3>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h3>Delivery Fee : </h3>
                        </td>
                        <td>
                            <h3>500 Rs</h3>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <hr />

                        </td>

                    </tr>

                    <tr>
                        <td>

                            <b>
                                <h1>Total : </h1>
                            </b>
                        </td>
                        <td>
                            <b>
                                <h1>4500 Rs</h1>
                            </b>
                        </td>
                    </tr>

                </table>
                <hr />
                <hr />
                <button style="width:80%;margin-left:10%;margin-top:10px;" class="b">Checkout</button>
            </div>
        </div>
        <div class="cardiv2">
            <div class="main-div" id="main">
                <div class="card" style="background-image: url('Games/9AcM3vy5t77zPiJyKHwRfnNT.webp')">
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span><br/><br/>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button><br/><br/>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button><br/><br/>
                    <input type="number" value="1" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />

                </div>


                <div class="card" style="background-image: url('Games/Apotheon_logo.png')">
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span><br/><br/>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button><br/><br/>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button><br/><br/>
            <input type="number" value="1" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
               
                </div>

               

            </div>
        </div>


    </div>


















    <script src="script.js"></script>


</body>

</html>