<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); 
if($_SESSION['accounts']!=null) $text='Merci de contacter x';
else $text="Vous n'avez pas trouvez ce que vous voulez? Merci de ...";
?>

	<div id="primary" class="site-content">
		<div id="content" role="main">

			<article id="post-0" class="post error404 no-results not-found">
				<header class="entry-header">
					<h1 class="entry-title">Ooops! Une erreur est survenu !</h1>
                    <h2><?php echo $text;?></h2>
				</header>

				<div class="entry-content">
				</div><!-- .entry-content -->
			</article><!-- #post-0 -->

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>