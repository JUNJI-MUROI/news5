<!-- 検索結果を表示 -->

<?php get_header();?>

<!-- パンくずリストを読み込み -->
<?php get_template_part('template-parts/breadcrumb');?>

<h1>サイト内検索</h1>

<br><br>

<!-- 検索したワードを表示するワードプレステンプレート -->
<h3>「<?php the_search_query();?>」の検索結果</h3>

<br><br>

<!-- 投稿が存在した場合、投稿を表示 -->

<?php if (have_posts()):?>
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

<!-- 検索結果が1件も存在しなかった場合の処理 -->
<?php else :?>
  <p>検索結果はありませんでした。</p>

<?php endif;?>

<?php if(function_exists('wp_pagenavi')){wp_pagenavi();}?>


<?php get_footer();?>
