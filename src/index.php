<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Book Store</title>

    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="navbar-fixed-top.css" rel="stylesheet">

    <script src="../assets/js/ie-emulation-modes-warning.js"></script>

    <style>
    body {
  min-height: 2000px;
  padding-top: 70px;
}

.catalog_carousel_container {
    background: #ffffff;
    position: relative;
    margin: 5px 0;
}

.catalog_carousel {
    width: 715px;
    height: 340px;
    overflow: hidden;
    position: relative;
}

.cat_img {
    display: block;
    width: 150px;
    height: 180px;
    text-align: center;
}

.cat_name {
    margin: 0 0 5px;
    color: #2a2a2a;
    height: 40px;
    font-size: 13px;
    font-weight: bold;
    overflow-y: hidden;
}
.cat_price {
    color: #e20613;
    white-space: nowrap;
    font-size: 13px;
}

element.style {
    left: 0px;
    top: 0px;
}

ul.category li {
		float:left;
		list-style-type:none;
]

button.button {
    overflow: visible;
    width: auto;
    border: 0;
    padding: 0;
    margin: 0;
    background: transparent;
    cursor: pointer;
}

.ma-featured-sldier-title {
    border-left: 5px solid #DC0708;
    background: url(../picture/bg-title-block.png) repeat 0 0;
}
</style>

  </head>

  <body>

    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">Book Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Categories <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="#">Browse All</a></li>
                <li class="divider"></li>
                <li><a href="#">Action</a></li>
                <li><a href="#">Romantic</a></li>
                <li><a href="#">Fiction</a></li>
              </ul>
            </li>
          </ul>
          <form class="navbar-form navbar-left" role="search">
                      <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                      </div>
                      <button type="submit" class="btn btn-default">Search</button>
                    </form>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signin/signin.php">Sign in</a></li>
            <li><a href="register/register.php">Register</a></li>
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div>
      </div>
    </nav>

    <div class="container">

      <div class="jumbotron">
        <h1>Online Book Store</h1>
        <p>Find any book and every book you want here.</p>

<br>
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon1">
          <span class="input-group-addon" id="sizing-addon1">Q</span>
        </div>
      </div>
	  
	  <div class="jumbotron">
	  <div class="ma-featured-sldier-title"> 
	        	<h3>Yeni Azərbaycan nəşrləri</h3>
	       	</div>
		<div class="catalog_carousel_container" id="catalog_carousel_container_255">
			<div class="catalog_carousel" data-jcarousel="true">
				<ul class="category">
				<li>
						<a href="ikiShereinHekayeti.php" class="cat_img">
							<img src="../picture/1.jpg" width="120" height="165" alt="">
						</a>
						<div class="cat_name">
							<a href="ikiShereinHekayeti.php" title="İki şəhərin hekayəti ">
								İki şəhərin hekayəti							
							</a>
						</div>
						<div class="cat_price">
								<div>
									8,49 AZN							
								</div>
						</div>
						<div>
							<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668129'"><span><span>Səbətə əlavə et!</span></span></button>
													&nbsp;
							<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668129','8');"><span><span>Tıkla-al</span></span></button>
						</div>	
				</li>
					

				<li>
						<a href="karlinHakimiyyeti.php" class="cat_img">
							<img src="../picture/2.png" width="120" height="179" alt="">
						</a>
						<div class="cat_name">
							<a href="karlinHakimiyyeti.php" title="IX Karlın hakimiyyət tarixçəsi">
								IX Karlın hakimiyyət tarixçəsi</a>
						</div>
						<div class="cat_price">
							<div>
								6,37 AZN							
							</div>
						</div>
							<div>
								<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668128'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668128','8');"><span><span>Tıkla-al</span></span></button>
							</div>
				</li>
				
				<li>
						<a href="itmisDunya.php" class="cat_img">
							<img src="../picture/3.jpg" width="120" height="176" alt="">
						</a>
							<div class="cat_name">
								<a href="itmisDunya.php" title="İtmiş dünya">
									İtmiş dünya	
								</a>
							</div>
						<div class="cat_price">
							<div>
								4,24 AZN
							</div>
						</div>
							<div>
								<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668127'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
								<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668127','8');"><span><span>Tıkla-al</span></span></button>
							</div>
				</li>
			
				
				</ul>
			</div>
		</div>
	  </div>
	  
	  <div class="jumbotron">
	  <div class="ma-featured-sldier-title"> 
	        	<h3>Yeni Rus nəşrləri</h3>
	       	</div>
			<div class="catalog_carousel_container" id="catalog_carousel_container_255">
				<div class="catalog_carousel" data-jcarousel="true">
					<ul class="category">
					<li>
						<a href="Среди тысячи лиц.php" class="cat_img">
							<img src="../picture/4.jpg" width="115" height="180" alt="">
						</a>
						<div class="cat_name">
							<a href="Среди тысячи лиц.php" title="Среди тысячи лиц">
								   Среди тысячи лиц							</a>
						</div>
						<div class="cat_price">
		
							<div>
								10,80 AZN							
							</div>
						</div>
							<div>
								<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=667978'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
								<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('667978','8');"><span><span>Tıkla-al</span></span></button>
							</div>
					</li>
					
					<li>
						<a href="rus2.php" class="cat_img">
							<img src="../picture/5.jpg" width="111" height="180" alt="">
						</a> 
						<div class="cat_name">
							<a href="rus2.php" title="Ловец огней на звездном поле">
								Ловец огней на звездном							</a>
								
						</div>
						<div class="cat_price">
						
							<div>
								10,20 AZN							
							</div>
						</div>
								<div>
									<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668000'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668000','8');"><span><span>Tıkla-al</span></span></button>
								</div>
					</li>
					
					<li>
						<a href="rus3.php" class="cat_img">
							<img src="../picture/6.jpg" width="114" height="180" alt="">
						</a>
						<div class="cat_name">
							<a href="rus3.php" title="Большое свинство">
								Большое свинство							</a>
						</div>
						<div class="cat_price">
														<div>
								8,33 AZN							</div>
						</div>
								<div>
									<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668004'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668004','8');"><span><span>Tıkla-al</span></span></button>
								</div>
					</li>
					
					</ul>
				</div>
			</div>
		</div>		
		
		
		 <div class="jumbotron">
	  <div class="ma-featured-sldier-title"> 
	        	<h3>Yeni Türk nəşrləri</h3>
	       	</div>
			<div class="catalog_carousel_container" id="catalog_carousel_container_255">
				<div class="catalog_carousel" data-jcarousel="true">
					<ul class="category">
					
					<li>
						<a href="turk1.php" class="cat_img">
							<img src="../picture/7.jpg" width="120" height="159" alt="">
						</a>
						<div class="cat_name">
							<a href="turk1.php" title="Asi Kızlara Uykudan Önce Hikayeler">
								Asi Kızlar							</a>
						</div>
						<div class="cat_price">
														<div>
								28,90 AZN							</div>
						</div>
													<div>
								<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=663539'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('663539','8');"><span><span>Tıkla-al</span></span></button>
															</div>
					</li>
					
					<li>
						<a href="turk2.php" class="cat_img">
							<img src="../picture/8.jpg" width="115" height="180" alt="">
						</a>
						<div class="cat_name">
							<a href="turk2.php" title="Yasak Meyve">
								Yasak Meyve							</a>
						</div>
						<div class="cat_price">
														<div>
								17,34 AZN							</div>
						</div>
							<div>
									<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=667841'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('667841','8');"><span><span>Tıkla-al</span></span></button>
							</div>
					</li>
						
					<li>
						<a href="turk3.php" class="cat_img">
								<img src="../picture/9.jpg" width="117" height="180" alt="">
						</a>
						<div class="cat_name">
							<a href="turk3.php" title="Sıradaki Sensin">
								Sıradaki Sensin							</a>
						</div>
						<div class="cat_price">
														<div>
								11,48 AZN							</div>
						</div>
								<div>
									<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=660555'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
									<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('660555','8');"><span><span>Tıkla-al</span></span></button>
								</div>
					</li>
						
					</ul>
				</div>
			</div>
		</div>		
					
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
    <script src="../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
