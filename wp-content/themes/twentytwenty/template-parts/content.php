<?php
/**
 * The default template for displaying content
 *
 * Used for both singular and index.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

<?php if ( is_singular() ) : ?>

	<!-- ========================================== -->
	<!-- GIAO DIỆN CHI TIẾT BÀI VIẾT (GIỮ MẶC ĐỊNH) -->
	<!-- ========================================== -->
	<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

		<?php
		get_template_part( 'template-parts/entry-header' );

		if ( ! is_search() ) {
			get_template_part( 'template-parts/featured-image' );
		}
		?>

		<div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
			<div class="entry-content">
				<?php
				if ( is_search() || ! is_singular() && 'summary' === get_theme_mod( 'blog_content', 'full' ) ) {
					the_excerpt();
				} else {
					the_content( __( 'Continue reading', 'twentytwenty' ) );
				}
				?>
			</div><!-- .entry-content -->
		</div><!-- .post-inner -->

		<div class="section-inner">
			<?php
			wp_link_pages(
				array(
					'before'      => '<nav class="post-nav-links bg-light-background" aria-label="' . esc_attr__( 'Page', 'twentytwenty' ) . '"><span class="label">' . __( 'Pages:', 'twentytwenty' ) . '</span>',
					'after'       => '</nav>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			);
			edit_post_link();
			twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );
			if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {
				get_template_part( 'template-parts/entry-author-bio' );
			}
			?>
		</div><!-- .section-inner -->

		<?php
		if ( is_single() ) {
			get_template_part( 'template-parts/navigation' );
		}
		if ( ( is_single() || is_page() ) && ( comments_open() || get_comments_number() ) && ! post_password_required() ) {
			?>
			<div class="comments-wrapper section-inner">
				<?php comments_template(); ?>
			</div><!-- .comments-wrapper -->
			<?php
		}
		?>

	</article><!-- .post -->

<?php else : ?>

	<!-- ========================================== -->
	<!-- GIAO DIỆN MODULE 2: DANH SÁCH DẠNG THẺ     -->
	<!-- ========================================== -->
	<article <?php post_class( 'module2-list-card' ); ?> id="post-<?php the_ID(); ?>">
		
		<!-- Cột trái: Ngày tháng -->
		<div class="m2-date-box">
			<span class="m2-day"><?php echo get_the_date('d'); ?></span>
			<span class="m2-month">THÁNG <?php echo get_the_date('m'); ?></span>
		</div>

		<!-- Cột phải: Tiêu đề và tóm tắt -->
		<div class="m2-content-box">
			<header class="entry-header">
				<?php the_title( sprintf( '<h2 class="m2-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
			</header>
			
			<div class="m2-summary">
				<?php 
				// Lấy nội dung sạch và cắt 30 từ
				$noidung_sach = wp_strip_all_tags( get_the_content() );
				echo wp_trim_words( $noidung_sach, 30, ' [...]' ); 
				?>
			</div>
		</div>

	</article>

<?php endif; ?>