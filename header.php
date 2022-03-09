<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Content-type");

ini_set('display_errors', 'off');
ini_set('display_startup_errors', 'off');
error_reporting(E_ALL);

$protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
$mainurl = $protocol.$_SERVER['HTTP_HOST'];


$base_url = $_SERVER['HTTP_HOST'];
$domain = $base_url;
// $subdomain = explode(".",$base_url);

// $domain = $subdomain[0];
$domain = 'app.gethellonews.com/template1';


$cat__id="";
if($_GET['cat_id']) {
$cat__id = $_GET['cat_id'];
}

$handle = curl_init();
$url = "https://app.gethellonews.com/site/homepage1.php";
curl_setopt($handle, CURLOPT_URL, $url);
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($handle, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($handle, CURLOPT_POSTFIELDS, 'domain_name='.$domain.'&cat_id='.$cat__id.'');
$output = curl_exec($handle);
curl_close($handle);

$json = json_decode($output, true);

$quiz_id = $_GET['quiz_id'];
$handle1 = curl_init();
$url = "https://app.gethellonews.com/site/cat_prod_list.php";
curl_setopt($handle1, CURLOPT_URL, $url);
curl_setopt($handle1, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle1, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($handle1, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($handle1, CURLOPT_POSTFIELDS, 'quiz_id='.$quiz_id.'');
$output2 = curl_exec($handle1);
curl_close($handle1);

$json2 = json_decode($output2, true);

$base_url = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']=='on' ? 'https' : 'http' ) . '://' .  $_SERVER['HTTP_HOST'];
 $url = $base_url . $_SERVER["REQUEST_URI"];

//print_r($json['ads']);
for ($i=0 ; $i < count($json['ads']); $i++ ) 
{
	if($json['ads'][$i]['ads_position'] == 'Next_to_Logo_Inside_Header')
    {
    	if($json['ads'][$i]['adtype'] == 'ads1')
    	{
    		$headerbanner = $json['ads'][$i]['ads_code'];
    	}
    	if($json['ads'][$i]['adtype'] == 'ads2')
    	{
    		$headerbanner = '<a href="'.$json['ads'][$i]['bannerlink'].'" target="_blank"><img src="'.$json['ads'][$i]['bannerimg'].'"></a>';
    	}
    	
    	
    }

	if($json['ads'][$i]['ads_position'] == 'Home_Page_Banner')
    {
    	//$homepagebanner = $json['ads'][$i]['ads_code'];
    	if($json['ads'][$i]['adtype'] == 'ads1')
    	{
    		$homepagebanner = $json['ads'][$i]['ads_code'];
    	}
    	if($json['ads'][$i]['adtype'] == 'ads2')
    	{
    		$homepagebanner = '<a href="'.$json['ads'][$i]['bannerlink'].'" target="_blank"><img src="'.$json['ads'][$i]['bannerimg'].'"></a>';
    	}

    }

	if($json['ads'][$i]['ads_position'] == 'Sidebar')
    {
    	//$sidebanner = $json['ads'][$i]['ads_code'];
    	if($json['ads'][$i]['adtype'] == 'ads1')
    	{
    		$sidebanner = $json['ads'][$i]['ads_code'];
    	}
    	if($json['ads'][$i]['adtype'] == 'ads2')
    	{
    		$sidebanner = '<a href="'.$json['ads'][$i]['bannerlink'].'" target="_blank"><img src="'.$json['ads'][$i]['bannerimg'].'"></a>';
    	}
    }

	if($json['ads'][$i]['ads_position'] == 'Inside_Content_Body')
    {
    	//$insidebobybanner = $json['ads'][$i]['ads_code'];
    	if($json['ads'][$i]['adtype'] == 'ads1')
    	{
    		$insidebobybanner = $json['ads'][$i]['ads_code'];
    	}
    	if($json['ads'][$i]['adtype'] == 'ads2')
    	{
    		$insidebobybanner = '<a href="'.$json['ads'][$i]['bannerlink'].'" target="_blank"><img src="'.$json['ads'][$i]['bannerimg'].'"></a>';
    	}
    }

	if($json['ads'][$i]['ads_position'] == 'Facebook_Pixel_Code')
    {
    	$fbpixelcode = $json['ads'][$i]['ads_code'];
    }

	if($json['ads'][$i]['ads_position'] == 'Google_Analytics_Code')
    {
    	$googlecode = $json['ads'][$i]['ads_code'];
    }

	if($json['ads'][$i]['ads_position'] == 'Custom_Code')
    {
    	$customcode = $json['ads'][$i]['ads_code'];
    }
}

//echo $url ;
?>

<!DOCTYPE html>
<html lang="zxx">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="<?php echo $json['frontend']['sitetitle'];?>">
	<meta property="og:description" content="<?php echo $json['frontend']['sitedescription'];?>">
	<meta name="author" content="">
	<meta property="og:image" content="<?php echo  $json['frontend']['sitefavicon']; ?>">
    <meta property="og:url" content="<?php echo url; ?>">

	<title><?php echo $json['frontend']['sitetitle'];?></title>

	<!-- Favicon -->
	<link rel="shortcut icon" href="<?php echo  $json['frontend']['sitefavicon']; ?>">

	<!-- ICON CSS -->
	<link rel="stylesheet" href="js/font-awesome/css/font-awesome.min.css">

	<!-- CSS -->
	<link rel="stylesheet" href="js/bootstrap/bootstrap.min.css">
	<link rel="stylesheet" href="js/slick/slick.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">

	<!-- MODERNIZR -->
     <script src="js/modernizr-2.8.3-respond-1.4.2.min.js"></script>
	 <?php
          if($fbpixelcode != '') 
          {  
          	echo $fbpixelcode;
          }
		  
		  if($googlecode != '') 
          {  
          	echo $googlecode;
          }

		  if($customcode != '') 
          {  
          	echo $customcode;
          }
			
		  if($json['frontend']['live_chat_code'] != '') 
          {  
          	echo $json['frontend']['live_chat_code'];
          }
     ?>
	
	<style type="text/css">
		.type-post .entry-cover > a img {
		    width: 100%;
		    height: 250px;
		    object-fit: cover;
		}

		.big-post .type-post .entry-cover > a img {
		    width: 100%;
		    height: 505px;
		    object-fit: cover;
		}
	</style>
         
</head>

<body>


<div class="wrapper">
	<?php if($headerbanner == '') { ?>
	<header class="header header-megamenu">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">
				<div class="search-bar">
					<input type="search" placeholder="Type search text here...">
					<div class="search-close"><i class="fa fa-times"></i></div>
				</div>
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="https://<?php echo $json['frontend']['domainname'];?>/index.php"><img src="<?php if($json['frontend']['webimg'] != ''){echo $json['frontend']['webimg'];}else{ echo 'https://app.gethellonews.com/blogo.png';}?>" class="img-responsive" alt="" style="margin-top:18px;"/></a>
				</div>
				
				<div class="search-trigger pull-right"></div>

				<div class="login pull-right"></div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav">
						<li class="dropdown dropdown-v1">
							<a href="https://<?php echo $json['frontend']['domainname'];?>/index.php" >Home</a>
						</li>
						<li class="dropdown dropdown-v1">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu">
								<?php
		                         for ($i=0 ; $i < count($json['categories']); $i++ ) {                                                    
		                        ?>
								<li><a href="categories.php?cat_id=<?php echo $json['categories'][$i]['id'];?>"><?php echo ucfirst($json['categories'][$i]['categoryname']);?></a></li>
								<?php } ?>
							</ul>
						</li>
						<li class="dropdown dropdown-v1">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="fa fa-angle-down"></span></a>
							<ul class="dropdown-menu">
								<?php
		                         for ($i=0 ; $i < count($json['pageslist']); $i++ ) {                                                    
		                        ?>
								<li><a href="pages.php?page_id=<?php echo $json['pageslist'][$i]['id'];?>"><?php echo ucfirst($json['pageslist'][$i]['pagename']);?></a></li>
								<?php } ?>
							</ul>
						</li>
					</ul>
				</div>
				<!-- /.navbar-collapse -->
			</div>
		</nav>
	</header>	
	<?php }else{ ?>
	<header class="header header4 header5 ">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container">

				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					</button>
					<a href="https://<?php echo $json['frontend']['domainname'];?>/index.php"><img src="<?php if($json['frontend']['webimg'] != ''){echo $json['frontend']['webimg'];}else{ echo 'https://app.blogify.org.in/blogo.png';}?>" class="img-responsive" alt=""/></a>
				</div>
				<?php
		         	if($headerbanner != '') {                                                    
		        ?>
				<div class="pull-right hidden-xs" style="margin-top:10px;">
					<div style="margin-bottom:2px;">
					<?php echo $headerbanner;?>
					</div>
				</div>
				<?php } ?>
			</div>
		</nav>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="nav-dark hidden-xs">
		<div class="container">
		<div class="collapse navbar-collapse navbar-ex1-collapse pull-left">
			<ul class="nav navbar-nav">
				<li class="dropdown dropdown-v1">
					<a href="https://<?php echo $json['frontend']['domainname'];?>/index.php" >Home</a>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<?php
                         for ($i=0 ; $i < count($json['categories']); $i++ ) {                                                    
                        ?>
						<li><a href="categories.php?cat_id=<?php echo $json['categories'][$i]['id'];?>"><?php echo ucfirst($json['categories'][$i]['categoryname']);?></a></li>
						<?php } ?>
					</ul>
				</li>
				<li class="dropdown dropdown-v1">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="fa fa-angle-down"></span></a>
					<ul class="dropdown-menu">
						<?php
                         for ($i=0 ; $i < count($json['pageslist']); $i++ ) {                                                    
                        ?>
						<li><a href="pages.php?page_id=<?php echo $json['pageslist'][$i]['id'];?>"><?php echo ucfirst($json['pageslist'][$i]['pagename']);?></a></li>
						<?php } ?>
					</ul>
				</li>
			</ul>
		</div>
		
		<div class="navbar-social pull-right">
			<a href="<?php echo $json['frontend']['fbpro_url'];?>"><img src="img/icon/6.png" class="img-responsive" alt=""/></a>
			<a href="<?php echo $json['frontend']['twitter_url'];?>"><img src="img/icon/7.png" class="img-responsive" alt=""/></a>
			<a href="<?php echo $json['frontend']['instapro_url'];?>"><img src="img/icon/8.png" class="img-responsive" alt=""/></a>
		</div>		
		</div>
		</div>
		
		<!-- /.navbar-collapse -->		
	</header>
	<?php } ?>
