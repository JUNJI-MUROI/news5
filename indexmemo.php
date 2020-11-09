<!-- 投稿ページ -->

<!-- ヘッダーの読み込み -->
<?php get_header();?>

<!-- メインエリア -->
<!-- メインエリア1 -->
<div class="row">

<!-- メイン部分 -->
<div class=" col-md-8 col-12">

<h1 class="mb-5"><?php wp_title('');?></h1>

<div>
  <!-- 投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div class="mb-4">
 <article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>
  <div class="flex">
   <div class="width-33 mr-3">
  <!-- thumbnail -->
    <a href="<?php the_permalink();?>">
      <?php the_post_thumbnail('thumbnail')?>
    </a>
    </div>


    <div class="width-66 block">


  <!-- タイトルを表示 -->
  
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
  

  <div>
    <div>
      <!-- 本文を表示 -->
      <?php the_excerpt();?>
      <p><a href="<?php the_permalink();?>">[続きを読む]</a></p>
    </div>
  </div>

  </div>
  </div>
 </article>
</div>
<?php endwhile;?>
<?php endif;?>
</div>

</div>

 








 <!-- サイドバー -->
 
 <!-- <div class="col-4 d-none d-md-block">
   <div class="mx-3">
   <h2 class="category-title">
   お知らせ
  </h2>
  <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
   </div>
 </div> -->

</div>








<!-- フッターの読み込み -->
<?php get_footer();?>