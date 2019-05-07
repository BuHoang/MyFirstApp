<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ATN Company Online Toy Shop</title>
    <style>
        .wrapper{
            width: 100%;
            height: auto;
            border: 1px solid black;
            margin: auto;
        }
        .header{
            width: 100%;
            height: 120px;
            border: 1px solid black;
        }
        .menu{
            width: 100%;
            height: 40px;
            border: 1px solid black;
        }
        .menu ul{
            width: 100%;
            height: 50px;
            list-style: none;
        }
        .menu ul li{
            float: left;
            line-height: 10px;
            margin-left: 10px;
        }
        .menu ul li a{
            text-decoration: none;
        }
        .menu a:hover{
            text-decoration: underline;
        }
        .content{
            width: 100%;
            height: 550px;
            border: 1px solid black; 
        }
        .left{
            width: 200px;
            height: 550px;
            border: 1px solid black; 
            float: left;
        }
        .ListOfProduct ul{
            width: 100%;
            height: auto;
            list-style: none;
        }
        .ListOfProduct ul li{
            margin-right: 40px;
            margin: 5px;
        }
        .ListOfProduct a{
            text-decoration: none;
        }
        .right{
            width: 1350px;
            height: 550px;
            border: 1px solid black; 
            float: right;
        }
        .Product ul{
            width: 100%;
            list-style: none;
        }
        .Product ul li{
            width: 160px;
            height: auto;
            text-align: center;
            padding: 0px;
            float: left;
            margin-left: 20px;
        }
        .Product ul li a{
            text-decoration: none;
        }
        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <img src="logo.png" width="100%" height="120px" />
        </div>
        <div class="menu">
            <ul>
                <li><a href="">Home</a></li>
                <li><a href="">New Product</a></li>
                <li><a href="">Help</a></li>
            </ul>
        </div>
        <div class="content">
            <div class="left">
                <p style="text-align: center; color: red; background-color: blue; padding: 10px; margin-top: 0px;">Product Type</p>
                <div class="ListOfProduct">
                    <ul>
                       <li><a href="">Toy for kid 1-5 age</a></li>
                       <li><a href="">Toy for kid 6-9 age</a></li>
                       <li><a href="">Toy for kid 10-15 age</a></li> 
                       <li><a href="">Toy for kid 20-25 age</a></li>  
                    </ul>
                </div>
                <p style="text-align: center; color: red; background-color: blue; padding: 10px; margin-top: 0px;">Product Brand</p>
                <div class="ListOfProduct">
                    <ul>
                       <li><a href="">Lego</a></li>
                       <li><a href="">Intex</a></li>
                       <li><a href="">Fisher Price</a></li> 
                       <li><a href="">NERF</a></li>  
                    </ul>
                </div>
            </div>
            <div class="right">
                <p style="text-align: center; color: red; background-color: blue; padding: 10px; margin-top: 0px;">Product</p>
                <div class="Product">
                    <ul>
                        <li><a href=""><img src="gun1.jpg" width="100" height="100" />
                            <p>NERF Elite Infinus Blaster</p>
                            <p style="color: red;">100$</p>
                            <p style="color: red; text-align: center;">Detail</p>
                        </a></li>
                        <li><a href=""><img src="gun2.jpg" width="100" height="100" />
                            <p>NERF Elite Infinus Blaster</p>
                            <p style="color: red;">650$</p>
                            <p style="color: red; text-align: center;">Detail</p>
                        </a></li>
                        <li><a href=""><img src="gun3.jpg" width="100" height="100" />
                            <p>NERF N-Strike MEGA Mastodon Blaster</p>
                            <p style="color: red;">670$</p>
                            <p style="color: red; text-align: center;">Detail</p>
                        </a></li>
                        <li><a href=""><img src="gun4.jpg" width="100" height="100" />
                            <p>NERF N-Strike Elite Delta Trooper Blaster</p>
                            <p style="color: red;">500$</p>
                            <p style="color: red; text-align: center;">Detail</p>
                        </a></li>
                        <li><a href=""><img src="gun5.png" width="100" height="100" />
                            <p>NERF N-Strike Elite Centurion Mega Blaster</p>
                            <p style="color: red;">850$</p>
                            <p style="color: red; text-align: center;">Detail</p>
                        </a></li>
                    </ul>
                </div>
            </div>
        <div class="clear"></div> 
    </div>
</body>
</html>