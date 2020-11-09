<!-- 投稿ページ -->

<?php
/*
Template Name:ライター一覧
*/
?>




<!-- ヘッダーの読み込み -->
<?php get_header();?>

<!-- メインエリア -->
<!-- メインエリア1 -->


<!-- メイン部分 -->


<div>
  <!-- 投稿を表示 -->
<?php if (have_posts()):?>
<?php while(have_posts()):the_post();?>
<div>
 <article id = "post-<?php the_ID();?>" <?php post_class('任意のクラス名を指定');?>>
   
  
    <!-- タイトルを表示 -->
 <?php get_template_part('template-parts/breadcrumb');?>
  
   <h1 class="mt-2"><?php the_title();?></h1>
   
   
  

  <div class="max-width-100">
      <!-- 本文を表示 -->
      
      <?php the_content(); ?>


  <!--投稿者一覧を表示-->
<?php $users =get_users( array('orderby'=>ID,'order'=>ASC) );
echo '<div class="writers">';
foreach($users as $user):
    $uid = $user->ID;
    $userData = get_userdata($uid);
    echo '<div class="writer-profile">';
	    echo '<figure class="eyecatch">';
            echo get_avatar($uid);
        echo '</figure>';
        echo '<div class="profiletxt">';
            echo '<p class="name">'.$user->display_name.'</p>';
            echo '<div class="description">'.$userData->user_description.'</div>';
            echo '<div class="button"><a href="'.get_bloginfo(url).'/?author='.$uid.'">'.$user->display_name.'の記事一覧</a></div>';
	    echo '</div>';
    echo '</div>';
endforeach;
echo '</div>'; ?>


  </div>

  

 </article>
</div>
<?php endwhile;?>
<?php endif;?>
</div>



 








 <!-- サイドバー -->
 
 










<!-- フッターの読み込み -->
<?php get_footer();?>