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
          <a class="navbar-brand" href="content.php">Book Store</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="content.php">Home</a></li>
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
						<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ki_%C5%9F%C9%99h%C9%99rin_hekay%C9%99ti_/" class="cat_img">
							<img src="../picture/1.jpg" width="120" height="165" alt="">
						</a>
						<div class="cat_name">
							<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ki_%C5%9F%C9%99h%C9%99rin_hekay%C9%99ti_/" title="İki şəhərin hekayəti ">
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
						<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ix_karl%C4%B1n_hakimiyy%C9%99t_tarix%C3%A7%C9%99si/" class="cat_img">
							<img src="../picture/2.png" width="120" height="179" alt="">
						</a>
						<div class="cat_name">
							<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ix_karl%C4%B1n_hakimiyy%C9%99t_tarix%C3%A7%C9%99si/" title="IX Karlın hakimiyyət tarixçəsi">
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
						<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/tmi%C5%9F_d%C3%BCnya/" class="cat_img">
							<img src="../picture/3.jpg" width="120" height="176" alt="">
						</a>
							<div class="cat_name">
								<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/tmi%C5%9F_d%C3%BCnya/" title="İtmiş dünya">
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
				
				<li>
						<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/getm%C9%99/" class="cat_img">
							<img src="../picture/4.jpg" width="117" height="180" alt="">
						</a>
						
						<div class="cat_name">
							<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/getm%C9%99/" title="Getmə">
								Getmə
							</a>
						</div>
						<div class="cat_price">
							<div>
								5,94 AZN
							</div>
						</div>
													<div>
							<button type="button" class="button btn-cart" onclick="window.location.href='/?action=ADD2BASKET&amp;id=668130'"><span><span>Səbətə əlavə et!</span></span></button>
																	&nbsp;
							<button style="margin-top: 3px;" class="button btn-cart-fast" onclick="fastOrderCatIt('668130','8');"><span><span>Tıkla-al</span></span></button>
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
