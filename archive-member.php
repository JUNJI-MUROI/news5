
<!-- ヘッダーの読み込み -->
<?php get_header();?>






<!-- メインエリア -->
<!-- メインエリア1 -->
<div class="row mb-5">
 <div class="col-lg-8 col-12">
 <?php get_template_part('template-parts/breadcrumb');?>
  
 <h1 class="mt-2"><?php wp_title('');?></h1>
 </div>
 
</div>





<!-- main area 2 -->
<div class="row mt-5">
  
<?php if(have_posts()):?>
<?php while(have_posts()):the_post();?>

<div class="col-md-4 col-12">
 <div class="mx-3">
    <a href="<?php the_permalink()?>">
    <h3 class="category-title">
      <?php the_title();?>
    </h3>
    <?php the_post_thumbnail('medium');?>
    </a>
    <?php the_excerpt();?>
      <p><a href="<?php the_permalink();?>">[続きを読む]</a></p>
 </div>
</div>


<?php endwhile;?>
<?php endif;?>


 



    
    






</div>

<!-- main area 3 -->





<div class="row">

<div class="col-10 mt-5 offset-1">
<h3 class="category-title mx-3">
    おすすめ記事一覧
</h3>
</div>

</div>

<div class="row">
  <div class="col-10 offset-1">
    <!-- page bottom part -->
<?php dynamic_sidebar('smartslider_area_1'); ?>
  </div>
</div>





<!-- フッターの読み込み -->
<?php get_footer();?>