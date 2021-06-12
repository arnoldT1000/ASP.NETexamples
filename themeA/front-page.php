<?php get_header();?>

<section class="page-wrap">
<div class="container">
			
     <?php get_template_part('template-parts/content','main');?>		

</div>
	 <?php $args = array(
    'depth'        => 0,
    'exclude'      => '346',
	'title_li'     => '<p style="text-align:center;font-size:30px;">' . __('Pages') .'</p>',
    'sort_column'  => 'menu_order, post_title',
    'post_type'    => 'page',
    'post_status'  => 'publish' 
); ?>

<?php wp_list_pages($args); ?>

</section>

	

<?php get_footer();?>