<div id="colart">
<h2>Articles Récents</h2>
<?php
// Define our WP Query Parameters
$the_query = new WP_Query( 'posts_per_page=5' ); ?>

<?php
// Start our WP Query
while ($the_query -> have_posts()) : $the_query -> the_post();
// Display the Post Title with Hyperlink
?>

<article>


<?php the_post_thumbnail('recentpost-thumb'); ?>
<div class="sideinfos">
<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
<div class="sideinfosbis">
<span class="aut"><?php the_author();?></span>
<span class="cat"><?php the_category(); ?></span>
</div>
</div>

</article>



<?php
endwhile;
wp_reset_postdata();
?>
</div>