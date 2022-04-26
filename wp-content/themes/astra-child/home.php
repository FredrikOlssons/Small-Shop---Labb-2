<?php get_header() ?>
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() . '/home.css';?>">

<main>
	<section>
		<div class="container">
			<div class="row">
				
					<h1 class="titleBlogs"> <?php wp_title(' '); ?> </h1>
					<?php
					while (have_posts()) {
						the_post();
					?>
						<article>

						<?php the_post_thumbnail(null, ['class' => 'img-responsive responsive--full', 'title' => 'Feature image'] );?>
							<div class="infoDiv">
							<h2 class="title">
								<a href="<?php the_permalink(); ?>">
									<?php the_title(); ?></a>
							</h2>

							<ul class="meta">
								<li>
									<i class="calendar"></i>
									<?php echo get_the_date('l F j, Y'); ?>
								</li>
								<li>
									<i class="user"></i>

									<a href=""><?php the_author(', '); ?></a>
								</li>
								<li>
									<i class="category"></i>
									<?php the_category(', '); ?>
								</li>
							</ul>
                            <p><?php the_content(); ?></p>
                            </div>
						</article>
					<?php } ?>



					<nav class="navigation pagination">
						<?php the_posts_pagination(array('mid_size' => 2)); ?>
					</nav>
				</div>

				<aside id="secondary" class="col-xs-12 col-md-3">
					<div id="sidebar">
						<ul role="navigation">
							<li class="pagenav">

								<?php dynamic_sidebar('widget3'); ?>
							</li>
						</ul>
					</div>
				</aside>
				</div>
			</div>
	</section>
</main>

<?php
get_footer();
?>