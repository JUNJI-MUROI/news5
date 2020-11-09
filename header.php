<!DOCTYPE html>
<html lang="en">
<head>
 
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/mystyle.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/hamburger.css">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/nextstyle.css">

  <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  <?php wp_enqueue_script('jquery')?>
  <?php wp_head();?>
  <?php
$today = date("Y年m月d日");



?>
</head>


<body <?php body_class()?>>
<?php wp_body_open();?>
  <div class="container-fluid ">


     <!-- トップメニュー -->
    <div class="row none mb-0">
      <div class="col-12 mt-4">
       
        <ul id="menu-top-menu" class="menu py-2 pl-0">
          <li class="ml-0"><a href="https://news.happy-phenix.com/" class=" top-menu-li py-2 pr-2 pl-3">
        ホーム
        </a></li>       
          <li><a href="https://news.happy-phenix.com/about/" class="text-white px-2 top-menu-li py-2">
          このサイトのコンセプト
        </a></li>
          <li><a href="https://news.happy-phenix.com/contact/" class="text-white px-2 top-menu-li py-2">
          お問い合わせ
        </a></li>
        <li><a href="https://news.happy-phenix.com/user-list/" class="text-white px-2 top-menu-li py-2">
          編集者一覧
        </a></li>
          
          

          

          <li class="right text-white" ><?php print_r($today);?></li>
        </ul>
      </div>
    </div>


    <!-- hamburger -->
    
    <div class="hamburger">
      <span></span>
      <span></span>
      <span></span>
    </div>
    
    <nav class="globalMenuSp">
        <ul>
            <li><a href="https://news.happy-phenix.com/">ホーム</a></li>
            <li><a href="https://news.happy-phenix.com/about/">このサイトのコンセプト</a></li>
            <li><a href="https://news.happy-phenix.com/contact/">お問い合わせ</a></li>
            <li><a href="https://news.happy-phenix.com/user-list/">編集者一覧</a></li>
            

        </ul>
    </nav>








    <!-- 1 -->
    <div class="row top-header-color my-0">
      <div class="
      col-lg-4 col-md-6 col-sm-8 col-10
      ">
        <a href="http://news.happy-phenix.com/">
        <img class="img-fluid" src="<?php echo get_template_directory_uri();?>/img/newsz2.jpg"/>
        </a>
      </div>
      <!-- <div class="col-4 offset-lg-4 offset-md-2 offset-2">
        <div class="right none">
          <img src="https://www.jukushin.com/wp-content/uploads/2019/06/738c319d6ab386ec726bd7087db835df.png" class="alignright size-full wp-image-30847 img-fluid " />
        </div>
        
      </div> -->
    </div>



    <!-- 2 -->
    <div class="row none mt-0">
      <div class="col-12">
        <ul id="center-menu" class="menu py-2 pl-0">
          <li class="border-right"><a href="https://news.happy-phenix.com/category/inorin/" class="text-white px-4 py-2 center-menu-li">デモ</a></li>       
          <li class="border-right"><a href="https://news.happy-phenix.com/category/inorin/" class="text-white px-4 py-2 center-menu-li">デモ</a></li>
          <li class="border-right"><a href="https://news.happy-phenix.com/category/news/" class="text-white px-4 py-2 center-menu-li">全記事一覧</a></li>
          
        </ul>
      </div>
    </div>



    <!-- 3 -->
    <div class="row none2 mt-2 mb-4">
      <div class="col-3 mx-0 ">
        <div class="pickupbutton py-1 px-3 ">
          pick up <i class="fas fa-angle-right"></i>
        </div>
        
        
      </div>
      <div class="col-8 right">
        <!-- searchform.php(検索フォーム)の読み込み -->

        <?php get_search_form();?>
      </div>
     
    </div>
      
    