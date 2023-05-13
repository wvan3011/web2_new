<?php
	include 'inc/header.php';
?>

<?php
    if (!isset($_GET['cat']) || !$_GET['cat']) {
        echo '<script>window.location = "404.html"</script>';
    }
    $catname = $_GET['cat'];
    $getcatbyname = $category->getcatbyName($catname);
    if (mysqli_num_rows($getcatbyname) == 0) {
        echo '<script>window.location = "404.html"</script>';
    }
    $result_cat = $getcatbyname->fetch_assoc();
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
					<li><?php echo $result_cat['name'] ?></li>
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
					<h1>SẢN PHẨM <?php echo $result_cat['name'] ?></h1>
				</div>
			</div>
			<?php
				$pd_per_page = 9;
				$page_active = 1;

				if (isset($_GET['page']) && $_GET['page']) {
					$page_active = $_GET['page'];
				}

				$index = ($page_active - 1) * $pd_per_page;

				$product_cat = $product->get_product_by_cat($result_cat['id'], $pd_per_page, $index);
				if ($product_cat) {
					while ($result_pd = $product_cat->fetch_assoc()) {
			?>
						<div class="col-lg-4 col-md-6 col-12 item">
							<article class="news-item item-style">
								<a href="details.php?phoneid=<?php echo $result_pd['id'] ?>" class="news-item-img el">
									<img data-src="../phone_image/<?php echo $result_pd['image'] ?>" class="lazy"
										src="../phone_image/<?php echo $result_pd['image'] ?>" alt="">
								</a>
								<div class="news-item-info">
									<div class="news-item-date">
										<?php echo $fm->price($result_pd['price']) ?>
									</div>
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
			<?php
				$product_count = mysqli_num_rows($product->get_product_by_cat($result_cat['id']));
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