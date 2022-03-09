
	<footer class="margin-top-30 footer3">
		<div class="container">

			<div class="footer-content">
				<div class="row">
				
					<div class="col-md-4 col-sm-4">
						<div class="space10"></div>
						<a href="https://<?php echo $json['frontend']['domainname'];?>/index.php">
							<img src="<?php echo $json['frontend']['webimg'];?>" class="img-responsive" alt=""/>
						</a>
<!-- 						<div class="space30"></div>
						<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse</p>
						<div class="space20"></div>
						<div class="footer-social2 footer-social3">
							<a href="#"><img src="img/social/1.png" alt=""/></a>
							<a href="#"><img src="img/social/2.png" alt=""/></a>
							<a href="#"><img src="img/social/3.png" alt=""/></a>
							<a href="#"><img src="img/social/4.png" alt=""/></a>
							<a href="#"><img src="img/social/5.png" alt=""/></a>
						</div>							 -->
					</div>
										
					<div class="col-md-4 col-sm-4">
						<h5 class="text-white">Categories</h5>
						<ul class="footer-links">
                        	<?php for ($i=0 ; $i < count($json['categories']); $i++ ) { ?>
							<li><a href="categories.php?cat_id=<?php echo $json['categories'][$i]['id'];?>"><?php echo ucfirst($json['categories'][$i]['categoryname']);?></a></li>
							<?php } ?>
						</ul>
					</div>
					
					<div class="col-md-4 col-sm-4" >
						<h5 class="text-white">Follow Us</h5>
						<ul class="footer-social">
							<li><a href="<?php echo $json['frontend']['fbpro_url'];?>"><img src="img/social/1.png" alt=""/> &nbsp;Facebook</a></li>
							<li><a href="<?php echo $json['frontend']['twitter_url'];?>"><img src="img/social/2.png" alt=""/> &nbsp;Twitter</a></li>
<!-- 							<li><a href="#"><img src="img/social/3.png" alt=""/> &nbsp;Google +</a></li> -->
							<li><a href="<?php echo $json['frontend']['instapro_url'];?>"><img src="img/social/4.png" alt=""/> &nbsp;Instagram</a></li>
<!-- 							<li><a href="#"><img src="img/social/5.png" alt=""/> &nbsp;Youtube</a></li> -->
						</ul>
					</div>

<!-- 					<div class="col-md-2 col-sm-2">
						<h5 class="text-white">Search</h5>
						<form class="footer-search">
							<input placeholder="Search" type="search">
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
					</div> -->

				</div>
			</div>

			<div class="footer-bottom">
				<div class="row">
					<div class="col-md-6 col-sm-6">
						<p>&copy; 2022 Gethellonews.com. All rights reserved.</p>
					</div>
					<div class="col-md-6 col-sm-6 text-right">
						<ul class="list-inline">
							<?php
                         		for ($i=0 ; $i < count($json['pageslist']); $i++ ) {                                                    
                        	?>
								<li><a href="pages.php?page_id=<?php echo $json['pageslist'][$i]['id'];?>"><?php echo ucfirst($json['pageslist'][$i]['pagename']);?></a></li>
							<?php } ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap/bootstrap.min.js"></script>
<script src="js/slick/slick.min.js"></script>
<script src="js/theme.js"></script>

</body>
</html>