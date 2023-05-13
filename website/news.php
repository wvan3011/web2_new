<?php
	include 'inc/header.php';
?>

<!-- Begin bread crumbs -->
<nav class="bread-crumbs">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<ul class="bread-crumbs-list">
					<li>
						<a href="index.php">Home</a>
						<i class="material-icons md-18">chevron_right</i>
					</li>
					<li>News</li>
				</ul>
			</div>
		</div>
	</div>
</nav><!-- End bread crumbs -->

<div class="section">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="section-heading heading-center section-heading-animate">
					<!-- <div class="section-subheading">most interesting articles</div> -->
					<h1>SẢN PHẨM MỚI</h1>
				</div>
			</div>
			<?php
				$pd_per_page = 9;
				$page_active = 1;

				if (isset($_GET['page']) && $_GET['page']) {
					$page_active = $_GET['page'];
				}

				$index = ($page_active - 1) * $pd_per_page;

				$product_new = $product->getproduct_new($pd_per_page, $index);
				if ($product_new) {
					while ($result_new = $product_new->fetch_assoc()) {
			?>
						<div class="col-lg-4 col-md-6 col-12 item">
							<article class="news-item item-style">
								<a href="details.php?phoneid=<?php echo $result_new['id'] ?>" class="news-item-img el">
									<img data-src="../phone_image/<?php echo $result_new['image'] ?>" class="lazy"
										src="../phone_image/<?php echo $result_new['image'] ?>" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">
										<?php echo $fm->price($result_new['price']) ?>
									</div>
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
			<?php
				$product_count = mysqli_num_rows($product->getproduct_new());
				$max_page = ceil($product_count / $pd_per_page);
			?>
			<div class="col-12">
				<!-- Begin pagination -->
				<nav class="pagination">
					<ul class="pagination-list">
						<li class="pagination-item-arrow pagination-item-arrow-prev <?php echo $page_active == 1 ? 'pagination-item-disabled' : '' ?>"><a
								href="?page=<?php echo $page_active - 1?>"><i class="material-icons md-24">chevron_left</i></a></li>
						<?php
							for ($i = 1; $i <= $max_page; $i++) {
								if ($i == $page_active) {
									echo '<li class="active"><a href="?page='.$i.'">'.$i.'</a></li>';
								} else {
									echo '<li><a href="?page='.$i.'">'.$i.'</a></li>';
								}
							}
						?>
						<li class="pagination-item-arrow pagination-item-arrow-next <?php echo $page_active == $max_page ? 'pagination-item-disabled' : '' ?>"><a href="?page=<?php echo $page_active + 1?>"><i
									class="material-icons md-24">chevron_right</i></a></li>
					</ul>
				</nav><!-- End pagination -->
				<?php
				include 'inc/footer.php';
				?>