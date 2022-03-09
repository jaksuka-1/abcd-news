<?php

include_once('header.php');
$str_jsonAry_decoded = $json['cate_products'];
?>
<style type="text/css">
	.topStories article img{
		object-fit: cover;
	    height: 200px;
	    width: 100%;
	}
	.topStories article{
		min-height: 450px;
	}
</style>
	<div class="inner-content">	
		<div class="container topStories">
			<div class="section-head">
				<h2>Latest articles</h2>
			</div>

			<div class="row">
				<?php
   

                    for ($j=0 ; $j < count($str_jsonAry_decoded); $j++ ) {       
                     

                    $handle1 = curl_init();
                    $url = "https://app.gethellonews.com/site/cat_prod_list.php";
                    curl_setopt($handle1, CURLOPT_URL, $url);
                    curl_setopt($handle1, CURLOPT_RETURNTRANSFER, true);
                    curl_setopt($handle1, CURLOPT_CUSTOMREQUEST, 'POST');
                    curl_setopt($handle1, CURLOPT_SSL_VERIFYPEER, false );
                    curl_setopt($handle1, CURLOPT_POSTFIELDS, 'quiz_id='.$str_jsonAry_decoded[$j]['id'].'');
                    $output2 = curl_exec($handle1);
                    curl_close($handle1);

                    $json2 = json_decode($output2, true);
                ?>
				<div class="col-md-4 col-sm-4">
					<article>
						<a href="post.php?post_id=<?php echo $json2['quizes']['id'];?>">
							<div class="article-thumb">
								<img src="<?php echo $json2['quizes']['artimg'];?>" class="img-responsive" alt=""/>
							</div>
						</a>
						<div class="post-excerpt">
							<div class="small-title cat"><?php echo $json2['quizes']['artcatname'];?></div>
							<h4><a href="post.php?post_id=<?php echo $json2['quizes']['id'];?>"><?php echo $json2['quizes']['arttitle'];?></a></h4>
							<div class="meta">
								<!-- <span>by <a href="#" class="link">Kevin K.</a></span> -->
								<span>on <?php echo $json2['quizes']['artdate'];?></span>
								<!-- <span class="comment"><i class="fa fa-comment-o"></i> 1</span> -->
							</div>

							<p><?php echo $json2['quizes']['artshortcontent'];?></p>
							<a href="post.php?post_id=<?php echo $json2['quizes']['id'];?>" class="small-title rmore">Read More</a>
						</div>
					</article>
				</div>

				<?php } ?>

			</div>


			<hr class="cat-hr">			

<!-- 			<ul class="pagi-nation">
				<li class="active"><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">...</a></li>
				<li><a href="#">42</a></li>
			</ul>								 -->

		</div>
	</div>

<?php
include_once('footer.php');


?>