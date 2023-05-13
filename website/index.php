<?php
    include 'inc/header.php';
    include 'inc/slider.php';
?>

	<section class="section section-bgc">
		<div class="container">
			<div class="row items">
				<header class="col-12">
					<div class="section-heading heading-center">
						<!-- <div class="section-subheading">More info about</div> -->
						<h2>Sản phẩm mới</h2>
					</div>
				</header>
				<?php
					$product_new = $product->getproduct_new(3);
					if ($product_new) {
						while ($result_new = $product_new->fetch_assoc()) {
				?>
							<div class="col-lg-4 col-md-6 col-12 item">
								<article class="news-item item-style">
									<a href="details.php?phoneid=<?php echo $result_new['id'] ?>" class="news-item-img el">
										<img data-src="../phone_image/<?php echo $result_new['image'] ?>" class="lazy"
											src="../phone_image/<?php echo $result_new['image'] ?>"
											alt="">
									</a>
									<div class="news-item-info">
										<div class="news-item-date"><?php echo $fm->price($result_new['price']) ?></div>
										<h3 class="news-item-heading item-heading">
											<a href="details.php?phoneid=<?php echo $result_new['id'] ?>"><?php echo $result_new['name'] ?></a>
										</h3>
										<div class="news-item-desc">
											<p>Thu cũ lên đời - Giá thu tốt nhất - Tặng thêm 2 triệu khi lên đời</p>
										</div>
									</div>
								</article>
							</div>
				<?php
						}
					}
				?>
				<footer class="section-footer col-12 item section-footer-animate">
					<div class="btn-group align-items-center justify-content-center">
						<a href="news.php" class="btn btn-with-icon btn-w240 ripple">
							<span>Xem tất cả sản phẩm mới</span>
							<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
								<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
							</svg>
						</a>
					</div>
				</footer>
			</div>
		</div>
	</section>
	<?php
		$get_cat = $category->get_category_have_product();
		if ($get_cat) {
			$i = 0;
			while ($result_cat = $get_cat->fetch_assoc()) {
				$i ++;
	?>
				<section class="section <?php echo $i % 2 ? '' : 'section-bgc' ?>">
					<div class="container">
						<div class="row items">
							<header class="col-12">
								<div class="section-heading heading-center">
									<!-- <div class="section-subheading">More info about</div> -->
									<h2><?php echo $result_cat['name'] ?></h2>
								</div>
							</header>
							<?php
								$product_cat = $product->get_product_by_cat($result_cat['id'], 3);
								if ($product_cat) {
									while ($result_pd = $product_cat->fetch_assoc()) {
							?>
										<div class="col-lg-4 col-md-6 col-12 item">
											<article class="news-item item-style">
												<a href="details.php?phoneid=<?php echo $result_pd['id'] ?>" class="news-item-img el">
													<img data-src="../phone_image/<?php echo $result_pd['image'] ?>" class="lazy"
														src="../phone_image/<?php echo $result_pd['image'] ?>"
														alt="">
												</a>
												<div class="news-item-info">
													<div class="news-item-date"><?php echo $fm->price($result_pd['price']) ?></div>
													<h3 class="news-item-heading item-heading">
														<a href="details.php?phoneid=<?php echo $result_pd['id'] ?>"><?php echo $result_pd['name'] ?></a>
													</h3>
													<div class="news-item-desc">
														<p>Thu cũ lên đời - Giá thu tốt nhất - Tặng thêm 2 triệu khi lên đời</p>
													</div>
												</div>
											</article>
										</div>
							<?php
									}
								}
							?>
							<footer class="section-footer col-12 item section-footer-animate">
								<div class="btn-group align-items-center justify-content-center">
									<a href="show.php?cat=<?php echo $result_cat['name'] ?>" class="btn btn-with-icon btn-w240 ripple">
										<span>Xem tất cả sản phẩm <?php echo $result_cat['name'] ?></span>
										<svg class="btn-icon-right" viewBox="0 0 13 9" width="13" height="9">
											<use xlink:href="assets/img/sprite.svg#arrow-right"></use>
										</svg>
									</a>
								</div>
							</footer>
						</div>
					</div>
				</section>
	<?php
			}
		}
	?>
</div>
<?php
    include 'inc/footer.php';
?>