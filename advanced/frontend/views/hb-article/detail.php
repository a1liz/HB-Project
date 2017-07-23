<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\helpers\HtmlPurifier;
/* @var $this yii\web\View */
/* @var $searchModel common\models\HbArticleSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

?>

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">



<title>HB技术小组 &#8211; 文章展示</title>
 
<?=Html::cssFile('@web/css/dashicons.min.css?ver=4.7.5')?>
<?=Html::cssFile('@web/css/admin-bar.min.css?ver=4.7.5')?>
<?=Html::cssFile('https://fonts.googleapis.com/css?family=Libre+Franklin%3A300%2C300i%2C400%2C400i%2C600%2C600i%2C800%2C800i&#038;subset=latin%2Clatin-ext')?>
<?=Html::cssFile('@web/css/style.css?ver=4.7.5')?>
<?=Html::jsFile('@web/js/jquery/jquery.js?ver=1.12.4')?>
<?=Html::jsFile('@web/js/jquery/jquery-migrate.min.js?ver=1.4.1')?>
<?=Html::jsFile('@web/js/dmin-bar.min.js?ver=4.7.5')?>
<?=Html::jsFile('@web/js/skip-link-focus-fix.js?ver=1.0')?>
<?=Html::jsFile('@web/js/global.js?ver=1.0')?>
<?=Html::jsFile('@web/js/jquery.scrollTo.js?ver=2.1.2')?>
<?=Html::jsFile('@web/js/wp-embed.min.js?ver=4.7.5')?>

<meta name="generator" content="WordPress 4.7.5" />
        <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>
        <style type="text/css" media="print">#wpadminbar { display:none; }</style>
<style type="text/css" media="screen">
    html { margin-top: 42px !important; }
    * html body { margin-top: 42px !important; }
    @media screen and ( max-width: 782px ) {
        html { margin-top: 56px !important; }
        * html body { margin-top: 56px !important; }
    }
</style>
</head>


<body class="home blog logged-in admin-bar no-customize-support hfeed has-header-image has-sidebar colors-light">
<div id="page" class="site">

    <header id="masthead" class="site-header" role="banner">

        <div class="custom-header">

    <div class="custom-header-media">
        <div id="wp-custom-header" class="wp-custom-header"><?=Html::img('@web/images/header1.jpg',["width"=>400,"heigth"=>400])?></div>   </div>

    <div class="site-branding">
    <div class="wrap">
        
        <div class="site-branding-text">
                            <h1 class="site-title"><a href="" rel="home">HB技术小组</a></h1>
            
                                <p class="site-description">HB技术小组</p>
                        </div><!-- .site-branding-text -->

                <a href="#content" class="menu-scroll-down"><svg class="icon icon-arrow-right" aria-hidden="true" role="img"> <use href="#icon-arrow-right" xlink:href="#icon-arrow-right"></use> </svg><span class="screen-reader-text">���¹���������</span></a>
    
    </div><!-- .wrap -->


</div><!-- .site-branding -->


</div><!-- .custom-header -->

        
    </header><!-- #masthead -->

    
    <div class="site-content-contain">
    <div class="container">
    
    <div class="row">
        
        
        
        
        
        
        <div class="col-xs-8">
        
        <ol class="breadcrumb">
        	<li><a href="<?= Yii::$app->homeUrl; ?>">首页</a></li> 
        	<li><a href="<?= Yii::$app->homeUrl; ?>?r=hb-article/inedx"></a>文章</li>
    		<li class="active"><?= $model->title?></li>
    		</ol>
		<div class="hb-article">
			<div class="title">
				<h2><a href="<?= $model->url;?>"><?= Html::encode($model->title);?></a></h2>
				<div class="author">
        			<span class="glyphicon glyphicon-time" aria-hidden="true"></span><em><?= date($model->pubdate)."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";?></em>
        			<span class="glyphicon glyphicon-author" aria-hidden="true"></span><em><?= Html::encode($model->authori->username);?></em>
        		</div>
			</div>
			<br>
			<div>
				<?= HTMLPurifier::process($model->content) ?>
			</div>
        </div>
        </div>
        
        
        
        <div class="col-xs-3">
        	<div class="searchbox">
        		<ul class="list-group">
        			<li class="list-group-item">
        				<span class="glyphicon glyphicon-search" aria-hidden="true"></span>查找文章
        			</li>
        			<li class="list-group-item">
        				<form class="form-inline" action="index.php?=HbAticle/index" id="w0" method="get">
                     		 <div class="form-group">
                       			 <input type="text" class="form-control" name="HbArticleSearch[title]" id="w0input" placeholder="按标题">
                      		</div>
                      		<button type="submit" class="btn btn-default">查找</button>
                       		
                    	</form>
        			</li>
        		</ul>
        	</div>
        </div>
    </div>

</div>
        <div id="content" class="site-content">


    
<aside id="secondary" class="widget-area" role="complementary">
    <section id="search-2" class="widget widget_search">


</section>      
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">




            

        </main><!-- #main -->
    </div><!-- #primary -->
    

</div><!-- .wrap -->


        </div><!-- #content -->

        <footer id="colophon" class="site-footer" role="contentinfo">
            <div class="wrap">
   
   
   
   
                
<div class="site-info">
    <a href="https://cn.wordpress.org/">HB</a>
</div><!-- .site-info -->
            </div><!-- .wrap -->
        </footer><!-- #colophon -->
    </div><!-- .site-content-contain -->
</div><!-- #page -->




<script type='text/javascript'>
/* <![CDATA[ */
var twentyseventeenScreenReaderText = {"quote":"<svg class=\"icon icon-quote-right\" aria-hidden=\"true\" role=\"img\"> <use href=\"#icon-quote-right\" xlink:href=\"#icon-quote-right\"><\/use> <\/svg>"};
/* ]]> */
</script>

    <!--[if lte IE 8]>
        <script type="text/javascript">
            document.body.className = document.body.className.replace( /(^|\s)(no-)?customize-support(?=\s|$)/, '' ) + ' no-customize-support';
        </script>
    <![endif]-->
    <!--[if gte IE 9]><!-->
        <script type="text/javascript">
            (function() {
                var request, b = document.body, c = 'className', cs = 'customize-support', rcs = new RegExp('(^|\\s+)(no-)?'+cs+'(\\s+|$)');

                        request = true;
        
                b[c] = b[c].replace( rcs, ' ' );
                // The customizer requires postMessage and CORS (if the site is cross domain)
                b[c] += ( window.postMessage && request ? ' ' : ' no-' ) + cs;
            }());
        </script>
    <!--<![endif]-->

                        
        

      </aside>
      
      
      
      </div>
      
      </div>8
      
      
      </div>
      
      
      
      </div>
        
        

</body>




