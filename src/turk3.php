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
	     <h1>Sıradaki Sensin</h1>
</div>
					<div class="product-img-box">
																																						<div class="product-img-big-box">
																								<a href="/upload/iblock/f65/f650532d204d30349432ab9ed0fb69dd.jpg" class="fancybox" id="product-img-big-37866" rel="group_660555">
								<img src="/upload/resize_cache/iblock/f65/183_220_1/f650532d204d30349432ab9ed0fb69dd.jpg" height="220" width="143" border="0" alt="Sıradaki Sensin" style="padding-top:0px">
							</a>
															</div>
								
							</div>
					<div class="product-shop">

				<div class="ds_field">
					Kod				<span>
					660555				
				</span>
				</div>
			   
			   					   	<div class="ds_field">
				   		Janr:
				   		<span>
				   			Фантастика/Fantastika						</span>
					</div>
													 						 <div class="ds_field">
							ISBN:<span>&nbsp;9786059702416</span>
						</div>
														 						 <div class="ds_field">
							Müəllif:<span>&nbsp; John Katzenbach</span>
						</div>
														 						 <div class="ds_field">
							Nəşriyyat:<span>&nbsp;Koridor</span>
						</div>
														 						 <div class="ds_field">
							Cild:<span>&nbsp;yumşaq</span>
						</div>
									
<div class="ds_field">Çəki, g:<span>&nbsp;
550</span></div>

<div class="ds_field">məhsul mövcudluğu:<span>&nbsp;
				bəli</span></div>



			</div>
	
							
												<div class="product-shop">
				<div class="price-box"><s>13,50 AZN</s>&nbsp;&nbsp;<span class="discount_b">%15</span>&nbsp;&nbsp;  <span class="regular-price" id="product-price-1">11,48 AZN</span></div>
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
<br>O telefonu açtığın için, artık sen de kabusun bir parçasısın.<br>
<br>
Bir gazetede muhabir olan Malcolm Anderson şehirdeki cinayetlerin haberlerini yaparken bir gün hiç beklenmedik bir telefon alır. Telefondaki ses ona kısa süre sonra işleyeceği cinayeti tüm detaylarıyla anlatmaya başlar ve tam da söylediği yerde ve saatte cebinde ‘Bir Numara’ yazan bir notla bir gencin cesedi bulunduğunda, bunun muazzam bir zekayla tasarlanmış cinayetlerin ilki olduğu anlaşılır. İzini bir gölge gibi kaybettiren bu psikopat bir anda Malcolm’ın ve tüm şehrin üzerine bir kabus gibi çöker.<br>
<br>
Neden yalnızca onunla iletişime geçtiği sorusuyla boğuşan Malcolm, insanların korkularıyla beslenen bu sıra dışı seri katilin zihnini okuyabilmek ve ondan önce adım atabilmek için bir psikologla işbirliği yapar. Ve çok geçmeden hikayeyi tüm akıl almazlığı ve dehşetiyle medyayla paylaşan kişi olmakla kalmaz, aynı zamanda hikayenin kendisi olur.<br>
<br>
“Malcolm’ın yerinde siz olsaydınız o dehşet verici oyunu gözlemleyen mi olurdunuz oynayan mı? Sıradaki Sensin sizi hayatınızda karşılaşabileceğiniz en büyük ikilemlerinden biriyle baş başa bırakıyor.”<br>
				

			</div>
		</div>
	  </div>

    </div> <!-- /container -->
  </body>
</html>
