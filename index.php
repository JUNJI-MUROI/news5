<?php get_header();?>


<div class="row mb-5">
 <div class="col-lg-8 col-12">
 <?php get_template_part('template-parts/breadcrumb');?>
  
 <h1 class="mt-2"><?php wp_title('');?></h1>
 </div>
 
</div>

<?php if(have_posts()):the_post();?>
<?php while(have_posts()):the_post();?>


<article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>

<div class="row">
<div class="col-lg-8 col-12">
<h2>
     <a href="<?php the_permalink();?>">
        <?php the_title();?>
     </a>
</h2>

<div class="flex">
     <!-- カテゴリーを表示 -->
    
     <time datetime="<?php the_time('Y-m-d');?>" class="post-categories"><?php the_time('Y年m月d日');?></time>
     <?php the_category();?>

   </div>
</div>
</div>

<div class="row mb-5">
 
 <div class="col-lg-3 col-md-4 col-12 mb-3 mb-md-0">
 <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail')?>
    </a>
 </div>

 <div class="col-lg-5 col-md-8 col-12 ">
 <?php the_excerpt();?>
      <p><a href="<?php the_permalink();?>">[続きを読む]</a></p>
 </div>
</div>



</article>

<?php endwhile;?>
<?php endif;?>

<?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>

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

<?php get_footer();?>
