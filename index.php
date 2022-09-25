
<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | Home</title>
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
            <img src="images/cart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" /><h3 style="margin-top: 3px;margin-bottom: 3px;display: inline-block;">Cart</h3>
            </div>

            <div class="box">
            <img src="images/suit-heart.svg" style="width:20px;aspect-ratio: 1;display: inline-block;margin-right: 10px;" /> <h3 style="margin-top: 3px;margin-bottom: 5px;display: inline-block;">WishList</h3>
            </div>
            
                <div style="text-align: end;">

                    <button class="s" >Log Out</button>


                </div>

           

        </div>
    </div>
    <div class="carosel" id="car">

       
        <div class="car-div1" id="imm">

            <div class="c-b">
              
                    <div class="b-d" onclick="change('0');" id="c0"></div>
                    <div class="b-d" onclick="change('1');" id="c1"></div>
                    <div class="b-d" onclick="change('2');" id="c2"></div>
                    <div class="b-d" onclick="change('3');" id="c3"></div>
                    <div class="b-d" onclick="change('4');" id="c4"></div>
            



            </div>
        </div>
        <div class="car-div2">

        <div class="new-itm" onclick="change('0');">
                    <div class="new-im" style="background-image: url('Products/20211018_1102470.webp');">
                        <span class="gf">New</span>
                        
                    </div>
                    <div class="new-des">
                      
                        <h5 style="margin: 0;">Laptops</h5>
                        <div style="text-align: end;">
                         
                        </div>
                    </div>
                </div>
   

                <div class="new-itm" onclick="change('1');" >
                    <div class="new-im" style="background-image: url('Products/gamecontrolers-2048px-00023.webp');">
                        <span class="gf">New</span>
                    </div>
                    <div class="new-des">
                     
                        <h5 style="margin: 0;">Controllers</h5>
                        <div style="text-align: end;">
                            <span></span>
                        </div>
                    </div>
                </div>

               
                <div class="new-itm"  onclick="change('2');">
                    <div class="new-im" style="background-image: url('Products/IMG_20190615_214330-2.webp');">
                        <span class="gf">New</span>
                    </div>
                    <div class="new-des">
                       
                        <h5 style="margin: 0;">Desktop Computers</h5>
                        <div style="text-align: end;">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="new-itm" onclick="change('3');">
                    <div class="new-im" style="background-image: url('Products/photo-1629429408209-1f912961dbd8.jpg');">
                        <span class="gf">New</span>
                    </div>
                    <div class="new-des">
                      
                        <h5 style="margin: 0;">Accessories</h5>
                        <div style="text-align: end;">
                            <span></span>
                        </div>
                    </div>
                </div>

                <div class="new-itm" onclick="change('4');">
                    <div class="new-im" style="background-image: url('Products/switcholed2-1641412602120.jpg');">
                        <span class="gf">New</span>
                    </div>
                    <div class="new-des">
                       
                        <h5 style="margin: 0;">Gaming</h5>
                        <div style="text-align: end;">
                            <span></span>
                        </div>
                    </div>
                </div>
           






        </div>

    </div>
    <div style="margin-top: 20px"></div>
    <label id="sp" for="sp" onclick="onli();" style="margin-left:10px ;color: white;padding:10px;border:solid white 2px;width: fit-content;margin-top: 20px;">Select : Games </label>
    <div id="spa" class="spa2">
        <div id="h" class="h2">
            <p class="ho" style="margin: 5px" onclick="setcat2('All')">All</p>
            <p class="ho"  style="margin: 5px" onclick="setcat2('Games')">Games</p>
            <p class="ho" style="margin: 5px" onclick="setcat2('Pc')">Pc</p>

            <p class="ho" style="margin: 5px" onclick="setcat2('Accessories')">Accessories</p>

            <p class="ho" style="margin: 5px" onclick="setcat2('Laptops')">Laptops</p>
        </div>

    </div>
    <div class="main-div" id="main" style="margin-top: 20px;">
       
                <div class="card" style="background-image: url('Games/9AcM3vy5t77zPiJyKHwRfnNT.webp')" >
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>
                
                
                <div class="card" style="background-image: url('Games/Apotheon_logo.png')" >
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>
          
                <div class="card" style="background-image: url('Games/immortals-fenyx-rising-button-fin-1603917826191.jpg')" >
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>
                
                <div class="card" style="background-image: url('Games/life-is-strange-true-colors_tyhg.jpg')" >
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1500.00</span>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/MV5BYzcxMmE2NjItNDc0ZS00NmY3LTk0ZDAtZGJmMDBmMzYyZDczXkEyXkFqcGdeQXVyMzM2MzI5MzU@._V1_FMjpg_UX1000_.jpg')" >
                    <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                    <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/5b3630baae653a57df0c36e6.webp')" >
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/a3888780581_10.jpg')" >
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/MV5BYTljYjM2OGYtNzU5NC00ODBiLTk4Y2ItMmE0ZDUxMzJmYWU4XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg')" >
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/61FEIn3sftL._SL1200_.jpg')" >
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>

                <div class="card" style="background-image: url('Games/Weird-West-Free-Download-By-Steam-repacks.webp')" >
                <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
                <button class="b" id="d"><img src="images/cart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /></button>
                    <button class="b" id="d"><img src="images/suit-heart.svg" style="width:15px;aspect-ratio: 1;display: inline-block;margin-right: 5px;" /> </button>
                </div>


    </div>
















   

    <script src="script.js"></script>
    

</body>

</html>