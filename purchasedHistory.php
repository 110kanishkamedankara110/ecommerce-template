<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | Purchase History</title>
    <link rel="stylesheet" href="style.css" />

    <link rel="icon" href="images/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="bo" style="background-color:rgb(18, 18, 18);">

    <div class="head">
        <div class="s-d"> <input type="text" placeholder="Search" style="display: in;" id="search" class="search" /><button class="s" onclick="search();" id="search">Search</button></div>
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
                <span style="margin-left: 10px;margin-top: 10px;cursor: pointer;" class="user" onclick="window.location='userPage.php'">Admin Pannel</span>
            </div>






            <div style="text-align: end;">

                <button class="s">Log Out</button>


            </div>



        </div>
    </div>
    <div class="carosel" style="width: 100%;" id="car">


        <div id="imm">

            <h2 style="color: white;">Most Sold</h2>
            <div class="main-div" id="main" style="margin-top: 20px;height: 400px;">


                <div class="card" style="background-image: url('Games/9AcM3vy5t77zPiJyKHwRfnNT.webp');box-sizing: border-box;">
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Hades</span>
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Gaming</span>
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Action</span>
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Sold : 500</span>
                    <table style="width:100%;text-align: center;margin-top: 20px;">
                        <tr>
                            <td>
                            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Profit : 80%</span>
                            </td>
                            <td>
                            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Sold : 60%</span>
                            </td>
                            <td>
                            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Available: 40%</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="pi" style=" background-image: conic-gradient( rgb(255, 0, 47) 0 80%,rgba(0,0,0,0) 80%);">

                                </div>

                            </td>
                            <td>
                                <div class="pi" style=" background-image: conic-gradient( aqua 0 60%,rgba(0,0,0,0) 60%);">

                                </div>

                            </td>
                            <td>
                                <div class="pi" style=" background-image: conic-gradient( greenyellow 0 40%,rgba(0,0,0,0) 40%);">

                                </div>

                            </td>
                        </tr>
                    </table>



                </div>
            </div>












        </div>








        <div class="car-div2">
            <h2 style="color: white;">Category</h2>
            <div class="new-itm" style="border: solid rgb(106 117 117) 3px;box-sizing:border-box ;">

                <div class="new-im" style="background-image: url('Products/switcholed2-1641412602120.jpg');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">

                        Gaming
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>


            <div class="new-itm">
                <div class="new-im" style="background-image: url('Products/IMG_20190615_214330-2.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">Desktop
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>


            <div class="new-itm">
                <div class="new-im" style="background-image: url('Products/photo-1629429408209-1f912961dbd8.jpg');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">Acessories


                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="new-itm">
                <div class="new-im" style="background-image: url('Products/gamecontrolers-2048px-00023.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">

                        Controllers
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>

            <div class="new-itm">
                <div class="new-im" style="background-image: url('Products/20211018_1102470.webp');">

                </div>
                <div class="new-des">

                    <h5 style="margin: 0;">
                        Laptops
                    </h5>
                    <div style="text-align: end;">
                        <span></span>
                    </div>
                </div>
            </div>







        </div>

    </div>
    <div style="margin-top: 60px"></div>
    <!-- <label id="sp" for="sp" onclick="onli();" style="margin-left:10px ;color: white;padding:10px;border:solid white 2px;width: fit-content;margin-top: 60px;">Catagory : Games </label>
    <div id="spa" class="spa2">
        <div id="h" class="h2">
            <p class="ho" style="margin: 5px" onclick="setcat('Price : Heigh To Low')">All</p>
            <p class="ho" style="margin: 5px" onclick="setcat('New Releases')">Laptop</p>
            <p class="ho" style="margin: 5px" onclick="setcat('Comming Soon')">Desktop</p>
            <p class="ho" style="margin: 5px" onclick="setcat('Price : Low To Heigh')">Games</p>
            <p class="ho" style="margin: 5px" onclick="setcat('Price : Low To Heigh')">Accessories</p>


        </div> -->

    </div>
    <div class="main-div" id="main" style="margin-top: 20px;">


        <div class="card" style="background-color: rgb(53,50,50);box-sizing: border-box;">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:001</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>


        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:002</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:003</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1500.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:003</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:004</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:005</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:006</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>

        <div class="card" style="background-color: rgb(53,50,50)">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Inv:007</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">User</span>
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Items:2</span><br /><br />
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">2022/05/23</span>

            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 120px;">View</span>

        </div>




    </div>


















    <script src="script.js"></script>


</body>

</html>