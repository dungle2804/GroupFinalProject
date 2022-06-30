<?php
require('connection.inc.php');
require('functions.inc.php');
$cat_res=mysqli_query($con,"select * from categories where status=1 order by categories asc");
$cat_arr=array();
while($row=mysqli_fetch_assoc($cat_res)){
	$cat_arr[]=$row;	
}
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cabin&family=Comfortaa&display=swap" rel="stylesheet">
    <title>Home</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <header>
        <div class="container-lg">
            <div class="row">
                <div class="header-inner col-12">
                    <button id="n3v" class="d-md-none">
        <svg>
          <rect class="rect-top" width="25" height="4" y="4.5" />
          <rect class="rect-mid" width="25" height="4" y="13" />
          <rect class="rect-bot" width="25" height="4" y="21.5" />
        </svg>
        </button>
                    <a href="index.php"><img src="Logo.svg" alt="" class="hinh-logo"></a>
                    <button id="btn-search" class="d-md-none">
        <svg class="icon-search">
          <use xlink:href="symbol-defs.svg#icon-search"/>
        </svg>
        <svg class="icon-close">
          <rect class="rect-top" width="25" height="4" y="4.5" />
          <rect class="rect-bot" width="25" height="4" y="21.5" />
        </svg>
        
        </button>

                    <form action="" class="frm-sch">
                        <input type="search" placeholder="Tìm kiếm">
                        <button type="submit">
                 <svg>
                 <use xlink:href="symbol-defs.svg#icon-search"/>
                 </svg>
        </button>
<a href="register.php">
    <button type="button">Register
</button>
</a>
<a href="login.php">
   <button type="button">Login
</button>
</a>
<a href="MyAccount.php">
   <button type="button">My Account
</button>
</a>



                </div>
            </div>
        </div>
    </header>