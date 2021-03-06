<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../favicon.ico">

    <title>Book Store</title>

    <!-- Bootstrap core CSS -->
    <link href="../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="navbar-fixed-top.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
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
    width: 890px;
    height: 740px;
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
	
	.jumbotron {
    padding: 30px 15px;
    margin-bottom: 30px;
    color: inherit;
    background-color: #eee;
}
.product-view {
    border: 1px solid #DEDEDE;
    padding: 10px;
    background: #fff;
}

.product-name {
    margin: 0px 0 6px 0px;
    background: url(../img/bg-title-block.png) 0 0 repeat;
    border-left: 5px solid #dc0708;
    padding: 7px 10px;
}

.product-img-box {
    float: left;
    width: 267px;
}

.product-shop {
    float: right;
    width: 435px;
}
}
</style>
 
  </head>

  <body>

    <!-- Fixed navbar -->
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
                <!-- <li class="divider"></li> -->
<!--                 <li class="dropdown-header">Nav header</li>
                <li><a href="#">Separated link</a></li>
                <li><a href="#">One more separated link</a></li> -->
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
            <li><a href="register/register.php">Register</a></li> <!-- ../navbar-static-top/ change it with admin.php-->
            <li class="active"><a href="./">Fixed top <span class="sr-only">(current)</span></a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <div class="container">

      <!-- Main component for a primary marketing message or call to action -->
      <div class="jumbotron">
        <h1>Online Book Store</h1>
        <p>Find any book and every book you want here.</p>
<!--         <p>
          <a class="btn btn-lg btn-primary" href="browse.php" role="button">Browse all categories &raquo;</a>
        </p> -->
<br>
        <div class="input-group input-group-lg">
          <input type="text" class="form-control" placeholder="Search" aria-describedby="sizing-addon1">
          <span class="input-group-addon" id="sizing-addon1">Q</span>
        </div>
      </div>
	  
	  <div class="jumbotron">
	  <div class="ma-featured-sldier-title"> 
	        	<h3>Среди тысячи лиц</h3>
	       	</div>
		<div class="catalog_carousel_container" id="catalog_carousel_container_255">
			<div class="catalog_carousel" data-jcarousel="true">
				<div class="product-view">
<div class="product-name">
</div>
					<div class="product-img-box">
																																						<div class="product-img-big-box">
																								<a href="/upload/iblock/08a/08ab86e6acbe6d9a9eadd6f30e2cdcbd.jpg" class="fancybox" id="product-img-big-38676" rel="group_668129">
								<img src="../picture/4.jpg" height="220" width="159" border="0" alt="Среди тысячи лиц " style="padding-top:0px">
							</a>
															</div>
								
							</div>
					<div class="product-shop">

				<div class="ds_field">
					Kod				<span>
					667978				
				</span>
				</div>
			   
			   					   	<div class="ds_field">
				   		Janr:
				   		<span>
				   			Роман/Roman						</span>
					</div>
													 						 <div class="ds_field">
							ISBN:<span>&nbsp;9785040040773</span>
						</div>
														 						 <div class="ds_field">
							Müəllif:<span>&nbsp;Сара Джио</span>
						</div>
														 						 <div class="ds_field">
							Nəşriyyat:<span>&nbsp;Эксмо</span>
						</div>
														 						 <div class="ds_field">
							Cild:<span>&nbsp;qalın</span>
						</div>
									
<div class="ds_field">Çəki, g:<span>&nbsp;
450</span></div>

<div class="ds_field">məhsul mövcudluğu:<span>&nbsp;
				bəli</span></div>



			</div>
	
							
												<div class="product-shop">
				<div class="price-box"><s>12,70 AZN</s>&nbsp;&nbsp;<span class="discount_b">%15</span>&nbsp;&nbsp;  <span class="regular-price" id="product-price-1">10,80 AZN</span></div>
				 <div class="b_vote">
<span>
<div class="iblock-vote" id="vote_668129">


</div></span>
						</div>
					<div class="add-to-box">
				<!--<noindex>
				<a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ki_şəhərin_hekayəti_/?action=BUY&amp;id=668129" rel="nofollow"><button type="button" title="Add to Cart" class="button btn-cart"><span><span>almaq</span></span></button></a>
				&nbsp;&nbsp;--><a href="/catalog/knigi-na-azerbaydzhanskom-yazyke/ki_şəhərin_hekayəti_/?action=ADD2BASKET&amp;id=668129" rel="nofollow"><button type="button" title="Add to Cart" class="button btn-cart"><span><span>Səbətə əlavə et</span></span></button></a>
				
				
				&nbsp; &nbsp; &nbsp;<button class="button" onclick="jQuery('#fast_order_container').fadeIn(100)"><span><span>Tıkla-al</span></span></button>
				
				
			</div>
				</div>
				

							<div class="clear">
		</div>
						<br>Кайли и Райан любят друг друга той чистой и спокойной любовью, которой многие могут только позавидовать. Но однажды на выходе из ресторана Кайли замечает бездомного мужчину. С ужасом она узнает в нем Кэйда, некогда успешного продюсера, которого очень любила, покуда он не оставил ее, так и не соизволив объясниться. Неужели это действительно он? Друг Кэйда, Джеймс, отрицает подобную возможность, а жених Кайли с каждым днем тревожится все больше – слишком уж сильно она увлеклась своими странными фантазиями...<br>
				
			

			</div>
		</div>
	  </div>

    </div> <!-- /container -->
  </body>
</html>
