<?php

include_once('header.php');

$post_id = $_GET['post_id'];
$handle3 = curl_init();
$url = "https://app.gethellonews.com/site/post.php";
curl_setopt($handle3, CURLOPT_URL, $url);
curl_setopt($handle3, CURLOPT_RETURNTRANSFER, true);
curl_setopt($handle3, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($handle3, CURLOPT_SSL_VERIFYPEER, false );
curl_setopt($handle3, CURLOPT_POSTFIELDS, 'post_id='.$post_id.'');
$output3 = curl_exec($handle3);
curl_close($handle3);

$json3 = json_decode($output3, true);

$actual_link = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//echo $actual_link;
?>
<style>

.single-meta .social a
{
	width:auto;
	height:auto;
	background:white;
}
</style>
<style>
.blog-single img {
    width: 100% !important;
}
.blog-single iframe, embed {
    width: 100%;
    min-height: 450px;
}
</style>
	<div class="inner-content">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="blog-single">
						<img src="<?php echo $json3['post']['artimg'];?>" class="img-responsive" alt=""/>
						<h3 class="h1"><?php echo $json3['post']['arttitle'];?></h3>

						<div class="single-meta">
							<!-- <div class="meta pull-left">
								<span class="author"><img src="img/avatar/1.jpg" class="img-circle" alt=""/> by Babs C.</span>
								<span class="date">on Sep 22,2016</span>
								<span class="comment"><i class="fa fa-comment-o"></i> 5</span>
								<span class="views"><i class="fa fa-eye"></i> 682 views</span>
							</div> -->

							<div class="pull-right">
								<div class="social">
                                	<div class="a2a_kit a2a_kit_size_32 a2a_default_style "  data-a2a-url="<?php echo $actual_link; ?>" data-a2a-title="<?php echo $json3['post']['arttitle'];?>">
                                	<a class="a2a_button_facebook"></a>
                                	<a class="a2a_button_twitter"></a>
			    					<a class="a2a_button_pinterest"></a>
									<a class="a2a_button_email"></a>
									<a class="a2a_button_linkedin"></a>
									<a class="a2a_button_whatsapp"></a>
									<a class="a2a_button_google_gmail"></a>
									<a class="a2a_button_facebook_messenger"></a>
									<a class="a2a_button_skype"></a>
			    					<a class="a2a_dd" href="https://www.addtoany.com/share"></a>
									</div>

									<script async src="https://static.addtoany.com/menu/page.js"></script>
			    					
								</div>
							</div>	

							<div class="clearfix"></div>
						</div>

						<p><?php echo $json3['post']['artcontent'];?></p>

						<?php
					       	if($insidebobybanner != '') {                                                    
					    ?>
							<p>
								<?php echo $insidebobybanner;?>
							</p>
					    <?php } ?>
                    	<br> 	
                        <?php echo $json['frontend']['fb_comment_code'];?>
						<div class="clearfix"></div>


					</div>					

				</div>

				<aside class="col-md-4">
					<div class="side-widget">
						<h4>Follow Us</h4>
						<div class="side-social">
							<a href="<?php echo $json['frontend']['fbpro_url'];?>" style="height:auto;"><i class="fa fa-facebook"></i> </a>
							<a href="<?php echo $json['frontend']['twitter_url'];?>" style="height:auto;"><i class="fa fa-twitter"></i> </a>
							<a href="<?php echo $json['frontend']['instapro_url'];?>" style="height:auto;"><i class="fa fa-instagram"></i> </a>
						</div>
					</div>

					<div class="clearfix"></div>

					<?php
				        if($json['frontend']['optin_code'] != '') {                                                    
				    ?>
						<div class="side-widget">
						<h4>Subscribe</h4>
						<div class="side-newsletter text-center">
		            		<?php echo $json['frontend']['optin_code'];?>
				        </div>
				        </div>
				     <?php } ?>

					<div class="clearfix"></div>

					<div class="side-widget">
						<h4>What's Hot</h4>
						<?php
   

                    	for ($j=0 ; $j < count($json3['latest']); $j++ ) { 
                    	?>
						<article class="style4">
							<a href="post.php?post_id=<?php echo $json3['latest'][$j]['id'];?>">
								<div class="overlay overlay-02"></div>
								<div class="post-thumb">
									<div class="small-title cat"><?php echo $json3['latest'][$j]['artcatname'];?></div>
									<div class="post-excerpt">
										<div class="meta">
											<span class="date"><?php echo $json3['latest'][$j]['artdate'];?></span>
										</div>
										<h3 class="text-white"><?php echo $json3['latest'][$j]['arttitle'];?></h3>
									</div>
									<img src="<?php echo $json3['latest'][$j]['artimg'];?>" class="bg-img img-full" alt=""/>
								</div>
							</a>
						</article>
						<?php } ?>
						
					</div>
					
					<div class="clearfix"></div>
										
				</aside>

				</div>
		</div>
	</div>

<?php
include_once('footer.php');


?>