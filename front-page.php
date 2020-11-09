
<!-- ヘッダーの読み込み -->
<?php get_header();?>






<!-- メインエリア -->
<!-- メインエリア1 -->
 <div class="row">

 <!-- メイン部分 -->
 <div class=" col-md-8 col-12">
 
 <?php
echo do_shortcode('[smartslider3 slider="2"]');
?>

 </div>

  








  <!-- サイドバー -->
  
  <div class="col-4 d-none d-md-block">
    <div class="mx-3">
    <h3 class="category-title">
    demo
   </h3>
   <p>demodemodemodemo</p>
    </div>
  </div>

</div>





<!-- main area 2 -->
<div class="row mt-5">
  

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    <a href="http://news.happy-phenix.com/category/inorin/">
     demo
    </a>
   </h3>
    <?php
$cat_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'category_name' => 'inorin', // カテゴリをスラッグで指定する場合
    'posts_per_page' => 5, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
$i = 0;
global $post;
if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
 
<!-- ループはじめ -->


<h4 class="article-title">
<a href="<?php the_permalink() ?>" >
<?php if($i == 0): ?>

<?php the_post_thumbnail('medium');?>
<?php $i++;?>
<br><br>
<?php endif; ?>

<?php the_title(); ?>
</a>
</h4>

<!-- ループおわり -->
 
<?php endforeach; endif; wp_reset_postdata(); ?>

    </div>
    <br>
</div>

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    demo
   </h3>
   <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
    </div>
</div>

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    yahoo
   </h3>
   <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
    </div>
</div>

</div>

<!-- main area 3 -->


<div class="row mt-3">

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    google
   </h3>
    <?php
$cat_posts = get_posts(array(
    'post_type' => 'post', // 投稿タイプ
    'category_name' => 'inorin', // カテゴリをスラッグで指定する場合
    'posts_per_page' => 5, // 表示件数
    'orderby' => 'date', // 表示順の基準
    'order' => 'DESC' // 昇順・降順
));
global $post;
if($cat_posts): foreach($cat_posts as $post): setup_postdata($post); ?>
 
<!-- ループはじめ -->
<h4 class="article-title"><a href="<?php the_permalink() ?>" ><?php the_title(); ?></a></h4>

<!-- ループおわり -->
 
<?php endforeach; endif; wp_reset_postdata(); ?>

    </div>
    <br>
</div>

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    bing
   </h3>
   <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
    </div>
</div>

<div class="col-md-4 col-12">
    <div class="mx-3">
    <h3 class="category-title">
    greatest 
   </h3>
   <p>弊紙紙面およびWEBで掲載している記事について、読者の皆様にアンケートを行っています。<br>
アンケートは<a href="https://docs.google.com/forms/d/1iGA2J3X5f6RkoMeLrH0YxfBCYaqdqG84jroQJhZBJHU/viewform?edit_requested=true"><b>こちら</b></a>からご回答ください。<br>
ご協力のほどよろしくお願いいたします。</p>
    </div>
</div>

</div>


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