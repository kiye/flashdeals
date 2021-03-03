<?php
// (A) PROCESS ORDER FORM
if (isset($_POST['name'])) { 
  require "process.php"; 
  echo $result == "" 
    ? "<div class='notify'>Thank You! We have received your order</div>" 
    : "<div class='notify'>$result</div>" ;
}
?>

<!doctype html>
<html class="no-js" lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Online Shopping for Clothes, Watches, Shoes | Flashdeals4U</title>
	<meta property="keywords" content="Online Shopping for Clothes, Watches, Shoes | Flashdeals4U " />
	<meta property="description" content="Uganda's No.1 Online Shopping ➜ Buy Ladies Clothes, Shoes, Jeans, Fashion & more from top brands ✓ Best prices in Uganda ✓ Online shop you can trust ✓ Order now and enjoy pay on delivery! ✓Delivery in Kampala, Entebbe, Nansana..." />
	
	<meta property="og:title" content="Online Shopping for Clothes, Watches, Shoes | Flashdeals4U" />
	<meta property="og:description" content="Uganda's No.1 Online Shopping ➜ Buy Ladies Clothes, Shoes, Jeans, Fashion & more from top brands ✓ Best prices in Uganda ✓ Online shop you can trust ✓ Order now and enjoy pay on delivery! ✓Delivery in Kampala, Entebbe, Nansana..." />
	<meta property="og:url" content="index.html" />
	<!--META TAGES STARTS-->		
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-15" />
	<META content="text/html; charset=iso-8859-1" http-equiv="Content-Type">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--META TAGES ENDS-->

	<!--Favicon-->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="manifest" href="/site.webmanifest">
   
    <!-- Bootstrap Fremwork Main Css -->
    <link rel="stylesheet" href="uniqlo/css/bootstrap.min.css">
    <!-- All Plugins css -->
    <link rel="stylesheet" href="uniqlo/css/plugins.css">
    <!-- Theme shortcodes/elements style -->
    <link rel="stylesheet" href="uniqlo/css/shortcode/shortcodes.css">
    <!-- Theme main style -->
    <link rel="stylesheet" href="uniqlo/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="uniqlo/css/responsive.css">
    <!-- User style -->
    <link rel="stylesheet" href="uniqlo/css/custom.css">

    <!-- Modernizr JS -->
    <script src="uniqlo/js/vendor/modernizr-2.8.3.min.js"></script>
	
<!-- jquery latest version -->
    <script src="uniqlo/js/vendor/jquery-1.12.4.min.js"></script>
	
	<!-- Facebook Pixel Code -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window,document,'script',
	'../connect.facebook.net/en_US/fbevents.js');

	 fbq('init', '2631537210457694'); 
	fbq('track', 'PageView');
	</script>
	<noscript>
	 <img height="1" width="1" 
	src="https://www.facebook.com/tr?id=101045982029223&amp;ev=PageView&amp;noscript=1"/>
	</noscript>
	<!-- End Facebook Pixel Code -->
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id="></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-168731628-1');
	</script>
    
    
	<script>
      (function() {
        var ta = document.createElement('script'); ta.type = 'text/javascript'; ta.async = true;
        ta.src = '../analytics.tiktok.com/i18n/pixel/sdk0d10.js?sdkid=';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(ta, s);
      })();
    </script>
</head>

<body>

<!-- Body main wrapper start -->
    <div class="wrapper">
        <!-- Start Header Style -->
        <header id="header" class="htc-header header--3 bg__white">
            <!-- Start Mainmenu Area -->
            <div id="sticky-header-with-topbar" class="mainmenu__area sticky__header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-lg-2 col-6">
                            <div class="logo">
                                <a href="index.html">
								<img src="lib/img/logo.png" border="0">
								</a>
                            </div>
                        </div>
                        <!-- Start MAinmenu Ares -->
                        <div class="col-md-8 col-lg-8 d-none d-md-block">
                            <nav class="mainmenu__nav  d-none d-lg-block">
                                <ul class="main__menu">
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="About-Us.html">About</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                </ul>
                            </nav>
                            
                            <div class="mobile-menu clearfix d-block d-lg-none">
                                <nav id="mobile_dropdown">
                                    <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li><a href="About-Us.html">About</a></li>
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="contact-us.html">Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>  
                        </div>
                        <!-- End MAinmenu Ares -->
                        <div class="col-md-2 col-lg-2 col-6">  
                            <ul class="menu-extra">
                                <li class="search search__open d-none d-sm-block"><span class="ti-search"></span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="mobile-menu-area"></div>
                </div>
            </div>
            <!-- End Mainmenu Area -->
        </header>
        <!-- End Header Style -->
        
        <div class="body__overlay"></div>
        <!-- Start Offset Wrapper -->
        <div class="offset__wrapper">
            <!-- Start Search Popap -->
            <div class="search__area">
                <div class="container" >
                    <div class="row" >
                        <div class="col-md-12" >
                            <div class="search__inner">
                                <form action="#" method="get">
                                    <input placeholder="Search here... " type="text">
                                    <button type="submit"></button>
                                </form>
                                <div class="search__close__btn">
                                    <span class="search__close__btn_icon"><i class="zmdi zmdi-close"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Search Popap -->
        </div>
        <!-- End Offset Wrapper -->
        
<!-- Start Bradcaump area -->
        <div class="ht__bradcaump__area" style="background: rgba(0, 0, 0, 0) url(uniqlo/images/bg/2.jpg) no-repeat scroll center center / cover ;">
            <div class="ht__bradcaump__wrap">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="bradcaump__inner">
                                <h2 class="bradcaump-title">Kids Second Hand Clothes</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- End Bradcaump area --> 
<!-- Start Product Details -->
	<section class="htc__product__details pt--10 pb--10 bg__white pro-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-lg-6 col-sm-12">
					<div class="product__details__container">
												<div class="product__big__images" style="position: relative;">
												
							<div class="portfolio-full-image tab-content">
															<div role="tabpanel" class="tab-pane active" id="img-tab-1">
									<img src="uploads/cashes/21-05-30-11-34-IMAGE14-100x100.jpg" alt="full-image">
								</div>
							</div>
						</div>
						<ul class="pro__dtl__prize">
							
							<li>UGX 50000</li>
							
						</ul>
					</div>
				</div>
				<div class="col-md-12 col-lg-6 col-sm-12 smt-30 xmt-30">
					<div class="htc__product__details__inner">
												<div class="prodetails" style="margin-top: 0px;">
						<h3><big><strong>The Latest Second Hand kids Clothes Available For Limited Time Period.</strong></big></h3>
						</div>
						<hr>
						    <div class="pro__detl__title">
							<h2>Order Now</h2>
							
							<p>Kindly fill the form & we will deliver in 2 days</p>
						</div>
						<div class="pro__details">
														<form method="POST" action="https://www.kwikydeals.com/index.php/product" id="orderfrm">
								<div class="form-group">
									<input type="text" class="form-control" name="names" required="required" placeholder="Name*" id="names" required="required" value="">
								</div>
								<div class="form-group fake-input">
									<input type="tel" class="form-control" name="mobile" required="required" id="mobile" placeholder="Mobile*" required="required" value="">
									<img src="lib/img/UG.png" width="20">
									<span class="code">+256</span>
								</div>
								<div class="form-group">
									<textarea style="min-height:120px !important" class="form-control materialize-textarea" name="address" required="required" placeholder="Full Delivery Address*" required="required"></textarea>
								</div>
							
																								
								
								
								<div class="form-group">
									<select name="pieces" class="form-control" required="required">
										<option value="">Quantity</option>
																				<option value="1">1 Piece</option>
																				<option value="2">2 Pieces</option>
																				<option value="3">3 Pieces</option>
																				<option value="4">4 Pieces</option>
																				<option value="5">5 Pieces</option>
																				<option value="6">6 Pieces</option>
																				<option value="7">7 Pieces</option>
																				<option value="8">8 Pieces</option>
																				<option value="9">9 Pieces</option>
																				<option value="10">10 Pieces</option>
																			</select>
								</div>
								
								<div class="form-group">
									<input type="email" class="form-control" id="email" name="email" placeholder="Email address" value="">
									<input type="hidden" class="form-control" id="" name="pid" value="32">
								</div>
								
								<button type="submit" id="btnfrmsubmit" class="btn btn-default btn-submit">SUBMIT ORDER</button>
							</form>
						</div>
                        					</div>
				</div>
			</div>
		</div>
	</section>
<!-- End Product Details -->

<div class="container">
	<div class="row">
		<div class="col-12">
			<hr>
			<h2>Other Products</h2>
		</div>
	</div>
</div>
<!-- Start Our Product Area -->
	<section class="htc__product__area pb--50 bg__white">
		<div class="container">
			<div class="htc__product__container">
				<div class="row product__list">
										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-9 col-sm-12">
	<a href="p-268.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE1-540x401.jpg" alt="product images">
				</div>
		</div>
		<div class="product__details text-center">
			<h2>Gold Dress</h2>
			<p> 
				<span class="price">UGX 150000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-10 col-sm-12">
	<a href="p-258.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE14-100x100.jpg" alt="product images">
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Jump Suit</h2>
			<p> 
				<span class="price">UGX 100000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-9 col-sm-12">
	<a href="p-263">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-37-IMAGE14-100x100.jpg" alt="product images">
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Dress</h2>
			<p> 
				<span class="price">UGX 80000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-11 col-sm-12">
	<a href="p-272.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE1-100x100.jpg" alt="product images">
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Hand Bag</h2>
			<p>
				 
				<span class="price">UGX 120000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-10 col-sm-12">
	<a href="p-273.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE1-540x401.jpg" alt="product images">
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Gold Dress</h2>
			<p>
				 
				<span class="price">UGX 150000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-9 col-sm-12">
	<a href="p-276.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE1-100x100.jpg" alt="product images">
					
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Hand Bag</h2>
			<p> 
				<span class="price">UGX 120000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-10 col-sm-12">
	<a href="p-277.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE14-100x100.jpg" alt="product images">
					
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Jump Suit</h2>
			<p> 
				<span class="price">UGX 100000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										<!-- Start Single Product -->
<div class="col-md-3 single__pro col-lg-3 col-md-4 cat-9 col-sm-12">
	<a href="p-278.html">
	<div class="product foo">
		<div class="product__inner">
					<div class="pro__thumb">
				<img src="uploads/cashes/20-05-30-11-34-IMAGE1-540x401.jpg" alt="product images">
				
							</div>
		</div>
		<div class="product__details text-center">
			<h2>Gold Dress</h2>
			<p>
				
				<span class="price">UGX 150000</span>
			</p>
		</div>
	</div>
	</a>
</div>
<!-- End Single Product -->										
<!-- End Single Product -->									</div>
			</div>
		</div>
	</section>
<!-- End Our Product Area -->


<script type="text/javascript" src="lib/js/jquery.validate.js"></script>
<script language="JavaScript" type="text/javascript">

$("#orderfrm").validate({rules:{
		mobile: {
		  required: true,
		  rangelength: [9, 9],
		  digits: true
		}
  },
  messages: {
	mobile: "Please give your valid mobile number '512345678' without the '0' in front",
  },
  submitHandler: function(form)
  {
	  $("#btnfrmsubmit").prop("disabled",true);
	  form.submit();
  },
  invalidHandler: function(event, validator)
  {
	 if( $("#names").val() && $("#mobile").val() )
	 {
	 	$.ajax({
			type: "POST",
			dataType: "json",
			data: $("#orderfrm").serializeArray(),
			url: "https://www.kwikydeals.com/index.php/product/osubmit",
			success: function(data)
			{
				console.log(data);
			}
		});
	 }
  }
});
  
</script>

<script>
function GetCount(ddate,iid)
{
	dateNow = new Date();
	amount = ddate.getTime() - dateNow.getTime();
	delete dateNow;
	if(amount < 0)
	{
		document.getElementById(iid).innerHTML="Still On";
	}
	else
	{
		hours=0;mins=0;secs=0;out="";
		amount = Math.floor(amount/1000);
	
		days=Math.floor(amount/86400);
		amount=amount%86400;
		
		hours=Math.floor(amount/3600);
		amount=amount%3600;

		mins=Math.floor(amount/60);
		amount=amount%60;

		secs=Math.floor(amount);
		var chs = '';
		if(days != 0)
		{
			var days = (days<=9?'0':'')+days +""+((days==1)?"":"");
			chs = "DAY";
			out += "<span class='dtx'><span class='dgt'>" + days + "</span><span class='txt'>"+ chs +"</span></span>";
		}	
		if(hours != 0)
		{
			var hours= (hours<=9?'0':'')+hours +""+((hours==1)?"":"");
			chs = "HRS";
			out += "<span class='dtx'><span class='dgt'>" + hours + "</span><span class='txt'>"+ chs +"</span></span>";
		}
		
		var mints = (mins<=9?'0':'')+mins +""+((mins==1)?"":"");
		chs = "MIN";
		out += "<span class='dtx'><span class='dgt'>" + mints + "</span><span class='txt'>"+ chs +"</span></span>";
		//
		var secs= (secs<=9?'0':'')+secs +""+((secs==1)?"":"");
		chs = "SEC";
		out += "<span class='dtx'><span class='dgt'>" + secs + "</span><span class='txt'>"+ chs +"</span></span>";
		out = out.substr(0,out.length-2);
		
		if(document.getElementById(iid))
		{
			document.getElementById(iid).innerHTML=out;
		}
		setTimeout(function(){GetCount(ddate,iid)}, 1000);
	}
}

	dateFuture1 = new Date('Sat Feb 13 2021 02:34:12 +0400');
	//dateFuture1 = new Date(2018,10,05,09,00,00);
	GetCount(dateFuture1, 'countbox');

</script>
	

        <!-- Start Footer Area -->
        <footer class="htc__foooter__area" style="background: rgba(0, 0, 0, 0) url(uniqlo/images/bg/1.jpg) no-repeat scroll center center / cover ;">
            <div class="container">
                <div class="row footer__container clearfix">
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-4 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">USEFUL LINKS</h2>
                            <ul class="footer__inner">
                                <li><a href="pg-13.html">UNclaimable Products</a></li>
                                <li><a href="pg-12.html">Why Us?</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-4 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget contact__us">
                            <h2 class="ft__title">CONTACT INFO</h2>
                            <div class="footer__inner">
                                                            <p>Flash Deals</p>



<p>Facebook: <a href="https://www.facebook.com/flashdeals">@Flashdeals4U</a></p>

<p>Instagram: <a href="https://www.instagram.com/flashdeals/">@Flashdeals4U&nbsp;</a></p>

<p>Email: flashdeals4u@gmail.com</p>

<p>&nbsp;</p>

                            <ul class="social__icon">
                                <li><a href="https://www.instagram.com/flashdeals/" target="_blank"><i class="zmdi zmdi-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/Flash-Deals-101045982029223" target="_blank"><i class="zmdi zmdi-facebook"></i></a></li>
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                    <!-- Start Single Footer Widget -->
                    <div class="col-md-6 col-lg-3 lg-offset-1 col-sm-6 smt-30 xmt-30">
                        <div class="ft__widget">
                            <h2 class="ft__title">ACCEPT PAYMENT</h2>
                            <div class="footer__inner">
                                <p>CASH ON DELIVERY</p>
                            </div>
                        </div>
                    </div>
                    <!-- End Single Footer Widget -->
                </div>
                <!-- Start Copyright Area -->
                <div class="htc__copyright__area">
                    <div class="row">
                        <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                            <div class="copyright__inner">
                                <div class="copyright">
                                    <p>@ 2021 Flashdeals4U. All rights reserved.</p>
                                </div>
                                <ul class="footer__menu">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">Product</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Copyright Area -->
            </div>
        </footer>
        <!-- End Footer Area -->
    <a target="_blank" href="https://api.whatsapp.com/send?phone=+256776192866&amp;text=" style="bottom:10px; left:10px; position: fixed; z-index: 99999999;"> 
    <img style="height: 60px;" src="uniqlo/images/wlogo4.png" alt="WhatsApp chat">
    </a>
    <!-- Bootstrap Framework js -->
    <script src="uniqlo/js/popper.min.js"></script>
    <script src="uniqlo/js/bootstrap.min.js"></script>
    <!-- All js plugins included in this file. -->
    <script src="uniqlo/js/plugins.js"></script>
    <!-- Main js file that contents all jQuery plugins activation. -->
    <script src="uniqlo/js/main.js"></script>

</body>
</html>