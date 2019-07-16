<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package yogaflex
 */

get_header();
?>

	<!-- start banner Area -->
	<section class="banner-area relative about-banner" id="home">
		<img class="cta-img img-fluid" src=" <?php bloginfo('template_url'); ?> /img/cta-img.png" alt="">
		<div class="overlay overlay-bg"></div>
		<div class="container">
			<div class="row d-flex align-items-center justify-content-center">
				<div class="about-content col-lg-12">
					<!-- Header title -->
					<h1 class="page-title">
						<?php
						/* translators: %s: search query. */
						printf( esc_html__( 'Search Results for: %s', 'yogaflex' ), '<span>' . get_search_query() . '</span>' );
						?>
					</h1>	
					<!-- Header title end -->
				</div>
			</div>
		</div>
	</section>
	<!-- End banner Area -->

	<!-- Top-category-widget Area -->
	<section class="top-category-widget-area pt-90 pb-90 ">
	</section>
	<!-- End top-category-widget Area -->

	<!-- Start post-content Area -->
	<section class="post-content-area">
		<div class="container">
			<div class="row">
					
						<?php if ( have_posts() ) : ?>

				<div class="col-lg-8 posts-list">

						<?php
							/* Start the Loop */
							while ( have_posts() ) :
								the_post();
						?>
					<div class="single-post row">	
						<div class="col-lg-3  col-md-3 meta-details">
							<?php
								if(get_the_tag_list()) {
									echo get_the_tag_list('<ul class="tags"><li>','</li>'.', '.'<li>','</li></ul>');
								}
							?>
								<div class="user-details row">
									<?php if ( 'post' === get_post_type() ) : ?>	
										<p class="user-name col-lg-12 col-md-12 col-6"><a href="#"><?php yogaflex_posted_by(); ?></a><span class="lnr lnr-user"></span></p>
										<p class="date col-lg-12 col-md-12 col-6"><a href="#"><?php yogaflex_posted_on(); ?></a> <span class="lnr lnr-calendar-full"></span></p>
										<p class="view col-lg-12 col-md-12 col-6"><a href="#"><?php echo getPostViews(get_the_ID()); ?></a> <span class="lnr lnr-eye"></span></p>
										<p class="comments col-lg-12 col-md-12 col-6"><a href="#"><?php comments_number(); ?></a> <span class="lnr lnr-bubble"></span></p>
						<?php   endif;	 ?>
								</div><!-- .user-details -->

								<footer class="entry-footer">
									<?php yogaflex_entry_footer(); ?>
								</footer><!-- .entry-footer -->
					
						</div>

					<?php
								get_template_part( 'template-parts/content', 'search' );

							endwhile;

							/** Add numeric pagination */
							yogaflex_numeric_posts_nav();

						else :

							get_template_part( 'template-parts/content', 'none' );

						endif;
						?>

				</div><!-- .posts-list -->


<?php  get_sidebar();  ?>
			</div><!-- .row -->
		</div><!-- .container -->
	</section><!-- .post-content-area -->

<?php get_footer();		?>
