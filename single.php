<!-- 投稿ページ -->

<!-- ヘッダーの読み込み -->
<?php get_header();?>

<!-- メインエリア -->
<!-- メインエリア1 -->
<div class="row">

<!-- メイン部分 -->
<div class=" col-md-8 col-12">

<div>
  <!-- 投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div>
 <article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>
   
  
    <!-- タイトルを表示 -->
 <?php get_template_part('template-parts/breadcrumb');?>
  
   <h1 class="mt-2"><?php the_title();?></h1>
   
   <div class="flex">
     <!-- カテゴリーを表示 -->
    
     <time datetime="<?php the_time('Y-m-d');?>" class="post-categories"><?php the_time('Y年m月d日');?></time>
     <?php the_category();?>

     <p class="post-categories">投稿者 : <?php the_author_posts_link(); ?></p>
     
   </div>
  

  <div>
    <div>
      <!-- 本文を表示 -->
      <?php the_content();?>
    </div>
  </div>

  <div class="flex">
    <div class="mr-3">
      <!-- ひとつ前の投稿を表示 -->
      <?php previous_post_link('<i class = "fas fa-chevron-left"></i>%link');?>
    </div>
    <div>
      <!-- ひとつ後ろの投稿を表示 -->
      <?php next_post_link('%link<i class = "fas fa-chevron-right"></i>');?>
    </div>
  </div>

 </article>
</div>
<?php endwhile;?>
<?php endif;?>
</div>

</div>

 








 <!-- サイドバー -->
 
 <div class="col-4 d-none d-md-block">
   <div class="mx-3">
   <h2 class="category-title">
   お知らせ
  </h2>
  <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
   </div>
 </div>

</div>








<!-- フッターの読み込み -->
<?php get_footer();?>