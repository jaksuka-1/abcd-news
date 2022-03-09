<?php

include_once('header.php');

?>
<style>

.single-meta .social a
{
	width:auto;
	height:auto;
	background:white;
}
.slick-slide img{
	object-fit: cover;
    height: 375px;
    width: 100%;
}
article .article-thumb img {
    transform: scale(1);
    -webkit-transform: scale(1);
    -moz-transform: scale(1);
    transition: all .25s ease-in-out;
    -webkit-transition: all .25s ease-in-out;
    -moz-transition: all .25s ease-in-out;
    object-fit: cover;
    height: 67px;
    width: 100%;
    -o-transition: all .25s ease-in-out;
}
.trendingArt .style2 .article-thumb img{
	object-fit: cover;
    height: 135px;
    width: 100%;
}
.latestart .article-home img{
	object-fit: cover;
    height: 205px;
    width: 100%;
}
.topStories .style3 img{
	object-fit: cover;
    height: 355px;
    width: 100%;
}
.topStories .style2 img{
	object-fit: cover;
    height: 155px;
    width: 100%;
}
.latestart .article-home img {
    object-fit: cover;
    height: 205px;
    width: 100%;
}

</style>
<!-- SLIDER -->
<div class="container-fluid no-padding">
	<div class="home-slider-wrap">
		<div class="home-slider">
    	<?php for ($i=0 ; $i < count($json['sliderData']); $i++ ) { ?>
		<div>
			<article class="style3 single text-center no-margin">
				<div class="overlay overlay-02"></div>
				<div class="post-thumb">
					<div class="container">
					<div class="post-excerpt">
<!-- 						<div class="small-title cat">Travel</div> -->
						<a href="<?php echo $json['sliderData'][$i]['surl'];?>" target="_blank"><h3 class="h1 text-white"><?php echo $json['sliderData'][$i]['stitle'];?></h3></a>
						<div class="meta">
							<span class="views"><?php echo $json['sliderData'][$i]['scontent'];?></span>
						</div>
					</div>
					</div>
					<img src="<?php echo $json['sliderData'][$i]['simg'];?>" class="bg-img" alt="">
				</div>
			</article>
		</div>
		<?php } ?>
	</div>

	<div class="hs-prev"><i class="fa fa-angle-left"></i></div>
	<div class="hs-next"><i class="fa fa-angle-right"></i></div>

	</div>

</div>
<!-- SLIDER END -->
	
<div class="container">

	<div class="row">
	
		<div class="col-md-8">

			<!-- HOME SECTION 1 -->
			<div class="padding-top-60">
				<h3 class="margin-bottom-15"><b>Top News</b></h3>

				<div class="row">
					<div class="col-md-6">
						<article class="article-home style-alt">
							<a href="post.php?post_id=<?php echo $json['category1'][0]['id'];?>">
								<div class="article-thumb">
									<img src="<?php echo $json['category1'][0]['artimg'];?>" class="img-responsive" alt="" style="object-fit: cover;height: 255px;width: 100%;">
								</div>
							</a>
							<div class="post-excerpt">
								<div class="small-title cat"><?php echo $json['category1'][0]['artcatname'];?></div>
								<h4><a href="post.php?post_id=<?php echo $json['category1'][0]['id'];?>"><?php echo $json['category1'][0]['arttitle'];?></a></h4>
								<div class="meta">
									<span><?php echo $json['category1'][0]['artdate'];?></span>	
								</div>
								<p><?php echo $json['category1'][0]['artshortcontent'];?></p>
							</div>
						</article>
					</div>
					
					<div class="col-md-6">
						<div class="mini-posts">
							<?php for ($i=1 ; $i < 5; $i++ ) {    ?>
							<article class="style2 style-alt">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<a href="post.php?post_id=<?php echo $json['category1'][$i]['id'];?>">
											<div class="article-thumb">
												<img src="<?php echo $json['category1'][$i]['artimg'];?>" class="img-responsive" alt="">
											</div>
										</a>
									</div>
									<div class="col-md-8 col-sm-8">
										<div class="post-excerpt no-padding">
											<div class="meta">
												<span><?php echo $json['category1'][$i]['artdate'];?></span>
											</div>
											<h5><a href="post.php?post_id=<?php echo $json['category1'][$i]['id'];?>"><?php echo $json['category1'][$i]['arttitle'];?></a></h5>
										</div>
									</div>
								</div>
							</article>
							<?php }  ?>
							
						</div>
					</div>
				</div>
			</div>
			<!-- // HOME SECTION 1 -->

			<!-- HOME SECTION 2 -->
			<h4 class="margin-bottom-15"><b>Trending Now</b></h4>

			<div class="row padding-bottom-30 trendingArt">
				<div>
					<?php for ($i=0 ; $i < 3; $i++ ) {    ?>
					<div class="col-md-4 col-sm-4">
						<article class="style2 style-alt">
							<div class="margin-bottom-15">
								<a href="post.php?post_id=<?php echo $json['trending'][$i]['id'];?>">
									<div class="article-thumb">
										<img src="<?php echo $json['trending'][$i]['artimg'];?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>
							<div>
								<div class="post-excerpt no-padding">
									<div class="meta">
										<span><?php echo $json['trending'][$i]['artdate'];?></span>
									</div>
									<h5><a href="post.php?post_id=<?php echo $json['trending'][$i]['id'];?>"><?php echo $json['trending'][$i]['arttitle'];?></a></h5>
								</div>
							</div>
						</article>
					</div>
					<?php }  ?>
					
				</div>
			</div>
			<!-- // HOME SECTION 2 -->
						
			<!-- HOME SECTION 3 -->
			<div class="row">
				<div class="col-md-6 col-sm-6 latestart">
					<h4 class="margin-bottom-15"><b>Latest News</b></h4>

					<article class="article-home style-alt margin-bottom-10">
						<a href="post.php?post_id=<?php echo $json['category2'][0]['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json['category2'][0]['artimg'];?>" class="img-responsive" alt="">
							</div>
						</a>
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json['category2'][0]['artcatname'];?></div>
							<h4><a href="post.php?post_id=<?php echo $json['category2'][0]['id'];?>"><?php echo $json['category2'][0]['arttitle'];?></a></h4>
							<div class="meta">
								<span><?php echo $json['category2'][0]['artdate'];?></span>
							</div>
							<p><?php echo $json['category2'][0]['artshortcontent'];?></p>
						</div>
					</article>
					
					<div class="mini-posts">
						<?php for ($i=1 ; $i < 3; $i++ ) {    ?>
						<article class="style2 style-alt">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="post.php?post_id=<?php echo $json['category2'][$i]['id'];?>">
										<div class="article-thumb">
											<img src="<?php echo $json['category2'][$i]['artimg'];?>" class="img-responsive" alt="">
										</div>
									</a>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="post-excerpt no-padding">
										<div class="meta">
											<span><?php echo $json['category2'][$i]['artdate'];?></span>
										</div>
										<h5><a href="post.php?post_id=<?php echo $json['category2'][$i]['id'];?>"><?php echo $json['category2'][$i]['arttitle'];?></a></h5>
									</div>
								</div>
							</div>
						</article>
						<?php }  ?>
						
					</div>					
				</div>
				
				<div class="col-md-6 col-sm-6 latestart">
					<h4 class="margin-bottom-15"><b>Most Views</b></h4>

					<article class="article-home style-alt margin-bottom-10">
						<a href="post.php?post_id=<?php echo $json['category3'][0]['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json['category3'][0]['artimg'];?>" class="img-responsive" alt="">
							</div>
						</a>
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json['category3'][0]['artcatname'];?></div>
							<h4><a href="post.php?post_id=<?php echo $json['category3'][0]['id'];?>"><?php echo $json['category3'][0]['arttitle'];?></a></h4>
							<div class="meta">
								<span><?php echo $json['category3'][0]['artdate'];?></span>
							</div>
							<p><?php echo $json['category3'][0]['artshortcontent'];?></p>
						</div>
					</article>
					
					<div class="mini-posts">
						<?php for ($i=1 ; $i < 3; $i++ ) {    ?>
						<article class="style2 style-alt">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="post.php?post_id=<?php echo $json['category3'][$i]['id'];?>">
										<div class="article-thumb">
											<img src="<?php echo $json['category3'][$i]['artimg'];?>" class="img-responsive" alt="">
										</div>
									</a>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="post-excerpt no-padding">
										<div class="meta">
											<span><?php echo $json['category3'][$i]['artdate'];?></span>
										</div>
										<h5><a href="post.php?post_id=<?php echo $json['category3'][$i]['id'];?>"><?php echo $json['category3'][$i]['arttitle'];?></a></h5>
									</div>
								</div>
							</div>
						</article>
						<?php }  ?>
						
					</div>					
				</div>
			</div>		
			<!-- // HOME SECTION 3 -->

		</div>

		<!-- ASIDE 1  -->
		<aside class="col-md-4 padding-top-60">

			<div class="side-widget">
				<h4>Follow Us</h4>
				<div class="side-social">
					<a href="<?php echo $json['frontend']['fbpro_url'];?>" style="height:auto;"><i class="fa fa-facebook"></i> </a>
					<a href="<?php echo $json['frontend']['twitter_url'];?>" style="height:auto;"><i class="fa fa-twitter"></i> </a>
					<a href="<?php echo $json['frontend']['instapro_url'];?>" style="height:auto;"><i class="fa fa-instagram"></i> </a>
				</div>
			</div>

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

			<div class="side-widget">
				<h4>Most Popular</h4>
				<div class="mini-posts">
					<?php
	          		for ($i=0 ; $i < count($json['popular']); $i++ ) {                                                    
	    			?>
					<article class="style2">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<a href="post.php?post_id=<?php echo $json['popular'][$i]['id'];?>">
									<div class="article-thumb">
										<img src="<?php echo $json['popular'][$i]['artimg'];?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="post-excerpt no-padding">
									<div class="meta">
										<span><?php echo $json['popular'][$i]['artdate'];?></span>
									</div>
									<h5><a href="post.php?post_id=<?php echo $json['popular'][$i]['id'];?>"><?php echo $json['popular'][$i]['arttitle'];?></a></h5>
								</div>
							</div>
						</div>
					</article>
					<?php }?>
					
				</div>					
			</div>
		</aside>
		<!-- // ASIDE 1  -->

	</div>
		
	<div class="row padding-top-40 topStories">
		<div class="col-md-8">
		
			<h3 class="margin-bottom-15"><b>Top Stories</b></h3>

			<article class="style3 style-alt">
				<a href="post.php?post_id=<?php echo $json['topstories'][0]['id'];?>">
					<div class="overlay overlay-02"></div>
					<div class="post-thumb">
						<div class="small-title cat"><?php echo $json['topstories'][0]['artcatname'];?></div>
						<div class="post-excerpt">
							<div class="meta">
								<span class="date"><?php echo $json['topstories'][0]['artdate'];?></span>
							</div>
							<h3 class="h1 text-white"><?php echo $json['topstories'][0]['arttitle'];?></h3>
						</div>
						<img src="<?php echo $json['topstories'][0]['artimg'];?>" class="img-responsive" alt="">
					</div>
				</a>
			</article>			
			<?php for ($i=1 ; $i < 6; $i++ ) {    ?>
			<article class="style2">
				<div class="row">
					<div class="col-md-4 col-sm-4">
						<a href="post.php?post_id=<?php echo $json['topstories'][$i]['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json['topstories'][$i]['artimg'];?>" class="img-responsive" alt="">
							</div>
						</a>
					</div>
					<div class="col-md-8 col-sm-8">
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json['topstories'][$i]['artcatname'];?></div>
							<h3><a href="post.php?post_id=<?php echo $json['topstories'][$i]['id'];?>"><?php echo $json['topstories'][$i]['arttitle'];?></a></h3>
							<div class="meta">
								<span><?php echo $json['topstories'][$i]['artdate'];?></span>
							</div>
							<p><?php echo $json['topstories'][$i]['artshortcontent'];?></p>
						</div>
					</div>
				</div>
			</article>
			<?php }  ?>
			
			
		</div>
		
		<aside class="col-md-4 padding-top-10">
			<?php 
				if(count($json['featuredvideo']) != '0')
				{ 
				?>
			<div class="side-widget">
				<h4>Featured Videos</h4>
				<?php for ($i=0 ; $i < 3; $i++ ) {    ?>
				<article class="article-home margin-bottom-20">
					<a href="post.php?post_id=<?php echo $json['featuredvideo'][$i]['id'];?>">
						<iframe width="370" height="180" src="https://www.youtube.com/embed/<?php echo $json['featuredvideo'][$i]['artvideoid'];?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
					</a>
					<div class="post-excerpt">
						<h3><a href="post.php?post_id=<?php echo $json['featuredvideo'][$i]['id'];?>"><?php echo $json['featuredvideo'][$i]['arttitle'];?></a></h3>
						<div class="meta">
							<span><?php echo $json['featuredvideo'][$i]['artdate'];?></span>
						</div>
					</div>
				</article>
				<?php }  ?>
						
			</div>
			<?php 
				}
			?>
			<div class="side-widget">
				<h4>Categories</h4>

				<ul id="toggle-view">
					<?php
         		for ($i=0 ; $i < count($json['categories']); $i++ ) {                                                    
        	?>
							<li><a href="categories.php?cat_id=<?php echo $json['categories'][$i]['id'];?>"><h3><?php echo ucfirst($json['categories'][$i]['categoryname']);?></h3></a></li>
					<?php } ?>				
				</ul>

			</div>
			<?php
         	if($sidebanner != '') {                                                    
        	?>
					<div class="side-widget">
            		<?php echo $sidebanner;?>
        	</div>
      <?php } ?>
		</aside>
	</div>
	
	<div class="info-content padding-top-30">		
			<?php
       	if($homepagebanner != '') {                                                    
      ?>
				<div class="row">
					<?php echo $homepagebanner;?>
				</div>
    	<?php } ?>
	</div>

	<div class="row">
		<div class="col-md-8 padding-bottom-40">
	
			<div class="row padding-top-30">
				<div class="col-md-6 col-sm-6 latestart">
					<h4 class="margin-bottom-15"><b>Big Stories</b></h4>

					<article class="article-home style-alt margin-bottom-5">
						<a href="post.php?post_id=<?php echo $json['category1'][0]['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json['category1'][0]['artimg'];?>" class="img-responsive" alt="">
							</div>
						</a>
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json['category1'][0]['artcatname'];?></div>
							<h4><a href="post.php?post_id=<?php echo $json['category1'][0]['id'];?>"><?php echo $json['category1'][0]['arttitle'];?></a></h4>
							<div class="meta">
								<span><?php echo $json['category1'][0]['artdate'];?></span>
								<p><?php echo $json['category1'][0]['artshortcontent'];?></p>
							</div>
						</div>
					</article>
					
					<div class="mini-posts">
						<?php for ($i=1 ; $i < 5; $i++ ) {    ?>
						<article class="style2 style-alt">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="post.php?post_id=<?php echo $json['category1'][$i]['id'];?>">
										<div class="article-thumb">
											<img src="<?php echo $json['category1'][$i]['artimg'];?>" class="img-responsive" alt="">
										</div>
									</a>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="post-excerpt no-padding">
										<div class="meta">
											<span><?php echo $json['category1'][$i]['artdate'];?></span>
										</div>
										<h5><a href="post.php?post_id=<?php echo $json['category1'][$i]['id'];?>"><?php echo $json['category1'][$i]['arttitle'];?></a></h5>
									</div>
								</div>
							</div>
						</article>
						<?php }  ?>
						
					</div>

				</div>
				
				<div class="col-md-6 col-sm-6 latestart">
					<h4 class="margin-bottom-15"><b>Most Trending</b></h4>

					<article class="article-home style-alt margin-bottom-10">
						<a href="post.php?post_id=<?php echo $json['category2'][0]['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json['category2'][0]['artimg'];?>" class="img-responsive" alt="">
							</div>
						</a>
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json['category2'][0]['artcatname'];?></div>
							<h4><a href="post.php?post_id=<?php echo $json['category2'][0]['id'];?>"><?php echo $json['category2'][0]['arttitle'];?></a></h4>
							<div class="meta">
								<span><?php echo $json['category2'][0]['artdate'];?></span>
							</div>
							<p><?php echo $json['category2'][0]['artshortcontent'];?></p>
						</div>
					</article>
					
					<div class="mini-posts">
						<?php for ($i=1 ; $i < 5; $i++ ) {    ?>
						<article class="style2 style-alt">
							<div class="row">
								<div class="col-md-4 col-sm-4">
									<a href="post.php?post_id=<?php echo $json['category2'][$i]['id'];?>">
										<div class="article-thumb">
											<img src="<?php echo $json['category2'][$i]['artimg'];?>" class="img-responsive" alt="">
										</div>
									</a>
								</div>
								<div class="col-md-8 col-sm-8">
									<div class="post-excerpt no-padding">
										<div class="meta">
											<span><?php echo $json['category2'][$i]['artdate'];?></span>
										</div>
										<h5><a href="post.php?post_id=<?php echo $json['category2'][$i]['id'];?>"><?php echo $json['category2'][$i]['arttitle'];?></a></h5>
									</div>
								</div>
							</div>
						</article>
						<?php }  ?>
						
					</div>	

				</div>
			</div>			

		</div>
		
		<aside class="col-md-4 padding-top-40">

			<div class="side-widget">
				<h4>Most Shared</h4>

				<div class="mini-posts">
					<?php
	          		for ($i=0 ; $i < 5; $i++ ) {                                                    
	    			?>
					<article class="style2">
						<div class="row">
							<div class="col-md-4 col-sm-4">
								<a href="post.php?post_id=<?php echo $json['popular'][$i]['id'];?>">
									<div class="article-thumb">
										<img src="<?php echo $json['popular'][$i]['artimg'];?>" class="img-responsive" alt="">
									</div>
								</a>
							</div>
							<div class="col-md-8 col-sm-8">
								<div class="post-excerpt no-padding">
									<div class="meta">
										<span><?php echo $json['popular'][$i]['artdate'];?></span>
									</div>
									<h5><a href="post.php?post_id=<?php echo $json['popular'][$i]['id'];?>"><?php echo $json['popular'][$i]['arttitle'];?></a></h5>
								</div>
							</div>
						</div>
					</article>
					<?php }?>
											
				</div>					
			</div>

			<div class="side-widget">
				<h4>Trending</h4>			

				<ul class="trending-rating margin-top-20 margin-bottom-20">
					<?php
			          for ($i=0 ; $i < 5; $i++ ) {                                                    
			    	?>
					<li>
						<p><a href="post.php?post_id=<?php echo $json['trending'][$i]['id'];?>"><?php echo $json['trending'][$i]['arttitle'];?></a></p>
					</li>
					<?php }?>
					
					
				</ul>

			</div>
			
			<!-- <div class="side-widget">
				<h4>Tags</h4>			
				<div class="tags">
					<a href="#">Fashion</a>
					<a href="#">Shoes</a>
					<a href="#">Entertainment</a>
					<a href="#">Finance</a>
					<a href="#">Mobile</a>

					<a href="#">Relationship</a>
					<a href="#">Football</a>
					<a href="#">Health</a>
					<a href="#">Inspiration</a>

					<a href="#">Fitness</a>
					<a href="#">Parenting</a>
					<a href="#">Food</a>
					<a href="#">Restaurants</a>
					<a href="#">Beauty</a>

					<a href="#">Interiors</a>
					<a href="#">People</a>
				</div>
			</div> -->
		</aside>

		</div>
			
	
	
</div>
<?php
include_once('footer.php');


?>