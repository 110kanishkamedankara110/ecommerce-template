<!DOCTYPE html>
<html>

<head>
    <title>NeW Teck | List Product</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" href="images/logo.svg" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body id="bo" style="background-color:rgb(18, 18, 18);">



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
    <div class="carosel" style="display:grid" id="car">

        <div id="imm">

            <div class="carosel" style="display:grid">
                <div id="imm" class="iii"   style=" background-size: cover;background-position: center;background-repeat:no-repeat ; border: solid rgb(106 117 117) 2px;box-sizing:border-box ;border-radius: 20px;background-image: url('images/plus gray.svg');">


                </div>
             
                <div class="car-div2">
                    
                    <div class="new-itm iii" style="background-size: cover; background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">

                       
                    </div>


                    <div class="new-itm iii" style=" background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">
                       
                    </div>


                    <div class="new-itm iii" style=" background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">
                        
                    </div>

                    <div class="new-itm iii" style=" background-size: cover;background-position: center;background-repeat:no-repeat ;border: solid rgb(106 117 117) 2px;box-sizing:border-box ;width: 50%;background-image: url('images/plus gray.svg');">
                        
                    </div>

                    






                </div>
            </div>
        </div>

        <div class="car-div2">
            <h1 style="color:white">List a Item</h1>
            <hr />
            <p style="text-align:center;color:white;">Main</p>
            <hr /><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="Title" /> <span style="color:white"> : Title </span><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="Deliver Fee" /> <span style="color:white"> : Deliver </span><br />
            
            <select style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width:82%;margin-bottom: 10px;color:rgb(106 117 117)">
                <option>Select</option>
                <option>Gaming</option>
                <option>Desktop Computer</option>
                <option>Laptop Computer</option>
                <option>Accessories</option>


            </select><span style="color:white"> : Category </span><br />

            <input type="number" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="" /> <span style="color:white"> : Quantity </span><br />

            <!-- if You choose catagory gaming -->
            <hr />
            <p style="text-align:center;color:white;">System</p>
            <hr /><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="Ram" /> <span style="color:white"> : Ram </span><br />
            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 80%;margin-bottom: 10px;" placeholder="Vga" /> <span style="color:white"> : Vga </span><br />

            <input type="text" style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width: 75%;margin-bottom: 10px;" placeholder="Processor" /> <span style="color:white"> : Processor </span><br />
            <select style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width:82%;margin-bottom: 10px;color:rgb(106 117 117)">

                <option>Select</option>
                <option>Action</option>
                <option>Indi</option>
                <option>Open World</option>
                <option>Survival</option>
                <option>Adventure</option>


            </select><span style="color:white"> : Genre </span><br />
            <!-- if You choose catagory game -->
            <hr />
            <p style="text-align:center;color:white;">Brand Information</p>
            <hr /><br />
            <select style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width:82%;margin-bottom: 10px;color:rgb(106 117 117)">

                <option>Select</option>
                <option>Hp</option>
                <option>Dell</option>
                <option>Lenovo</option>
                <option>Apple</option>



            </select><span style="color:white"> : Brand</span><br />
            <select style="padding:5px;border: none;border-radius: 5px;background-color:  rgb(48, 44, 44);width:82%;margin-bottom: 10px;color:rgb(106 117 117)">

                <option>Select</option>
                <option>Hp-H1234</option>
                <option>Mac Book</option>
                <option>ideapad</option>


            </select><span style="color:white"> : Model</span><br />



            <hr />
            <p style="text-align:center;color:white;">Description</p>
            <hr /><br />
            <div style="box-sizing: border-box ;border:solid 1px rgb(106 117 117);border-radius: 5px;background-color:  rgb(48, 44, 44);width:100%;height: 200px;">
                <textarea style="color:rgb(106 117 117);border: none;border-radius: 5px;width: 100%;height:100%;padding: 10px;background-color:  rgb(48, 44, 44);box-sizing: border-box;"></textarea>
            </div>
            <hr />
           
            <button class="s" style="border-radius: 5px;"  id="addimg">List</button>

        </div>
















    </div>
    <div style="margin-top: 60px"></div>
    <label id="sp" for="sp" onclick="onli();" style="margin-left:10px ;color: white;padding:10px;border:solid white 2px;width: fit-content;margin-top: 60px;">Select : All </label>
    <div id="spa" class="spa2">
        <div id="h" class="h2">
            <p class="ho" style="margin: 5px" onclick="setcat2('New Releases')"></p>
            <p class="ho" style="margin: 5px" onclick="setcat2('Comming Soon')"></p>

            <p class="ho" style="margin: 5px" onclick="setcat2('Price : Low To Heigh')"></p>

            <p class="ho" style="margin: 5px" onclick="setcat2('Price : Heigh To Low')"></p>
        </div>

    </div>
    <div class="main-div" id="main" style="margin-top: 20px;">


        <div class="card" style="background-image: url('Games/9AcM3vy5t77zPiJyKHwRfnNT.webp');box-sizing: border-box;">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid white 3px;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('1')">
                <div class="gf" id="ac1" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>
        </div>


        <div class="card" style="background-image: url('Games/Apotheon_logo.png')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('2')">
                <div class="gf" id="ac2" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>
        </div>

        <div class="card notvf" style="background-image: url('Games/immortals-fenyx-rising-button-fin-1603917826191.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('3')">
                <div class="gf" id="ac3" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>
        </div>

        <div class="card" style="background-image: url('Games/life-is-strange-true-colors_tyhg.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.1500.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('4')">
                <div class="gf" id="ac4" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>

        </div>

        <div class="card" style="background-image: url('Games/MV5BYzcxMmE2NjItNDc0ZS00NmY3LTk0ZDAtZGJmMDBmMzYyZDczXkEyXkFqcGdeQXVyMzM2MzI5MzU@._V1_FMjpg_UX1000_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('5')">
                <div class="gf" id="ac5" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>
        </div>

        <div class="card" style="background-image: url('Games/5b3630baae653a57df0c36e6.webp')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('6')">
                <div class="gf" id="ac6" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>

        </div>

        <div class="card" style="background-image: url('Games/a3888780581_10.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('7')">
                <div class="gf" id="ac7" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>
        </div>

        <div class="card" style="background-image: url('Games/MV5BYTljYjM2OGYtNzU5NC00ODBiLTk4Y2ItMmE0ZDUxMzJmYWU4XkEyXkFqcGdeQXVyNTAyODkwOQ@@._V1_FMjpg_UX1000_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('8')">
                <div class="gf" id="ac8" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>

        </div>

        <div class="card" style="background-image: url('Games/61FEIn3sftL._SL1200_.jpg')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('9')">
                <div class="gf" id="ac9" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>

        </div>

        <div class="card" style="background-image: url('Games/Weird-West-Free-Download-By-Steam-repacks.webp')">
            <span class="gf" style="background-color: rgba(255, 255, 255, 0.875);">Rs.2000.00</span>
            <div class="gf" style="margin-bottom:10px;border: solid 3px white;background-color:rgba(255, 255, 255, 0);width: 40px;height: 20px;display:blok;margin-left:60%;" onclick="active_deactive('10')">
                <div class="gf" id="ac10" style="background-color:rgba(255, 255, 255, 0.875);width: 20px;height: 20px;box-sizing: border-box;margin:0;position: relative;background-color: greenyellow;">

                </div>
            </div>
            <input type="text" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="Price" /> <span style="color:white"> : Price </span><br />
            <input type="number" style="padding:5px;border:solid 1px white;box-sizing: border-box;border-radius: 5px;background-color:rgba(255, 255, 255, 0.5);width: 60%;margin-bottom: 10px;" placeholder="qty" /> <span style="color:white"> : Qty</span><br />
            <span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 50px;">Update</span>

<span class="b" style="display:grid;width: 80%;height: 20px;text-align: center;margin-top: 5px;">Edit</span>

        </div>


    </div>


















    <script src="script.js"></script>


</body>

</html>