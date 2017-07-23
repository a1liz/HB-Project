<?php
    use yii\helpers\Html;
    use yii\grid\GridView;
    use yii\widgets\DetailView;
$this->title = $model->aid;
$this->params['breadcrumbs'][] = ['label' => 'Hb Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<!DOCTYPE html>
<html>

<head>
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <title>HB-后台管理</title>
  <meta name="keywords" content="Bootstrap 3 Admin Dashboard Template Theme" />
  <meta name="description" content="AdminDesigns - Bootstrap 3 Admin Dashboard Theme">
  <meta name="author" content="AdminDesigns">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">


<?=Html::cssFile('@web/assets/skin/default_skin/css/theme.css')?>
<?=Html::cssFile('@web/assets/admin-tools/admin-forms/css/admin-forms.css')?>
<?=Html::cssFile('http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700')?>
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
  <link rel="shortcut icon" href="assets/img/favicon.ico">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
    <html dir="ltr" lang="en-US" class="no-js ie8">
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->
</head>

<body class="admin-elements-page" data-spy="scroll" data-target="#nav-spy" data-offset="300">

  <!-- Start: Main -->
  <div id="main">

    <!-- Start: Header -->
    <header class="navbar navbar-fixed-top navbar-shadow">
      <div class="navbar-branding">
        <a class="navbar-brand" href="dashboard.html">
          <b>H-B</b>管理界面
        </a>
        <span id="toggle_sidemenu_l" class="ad ad-lines"></span>
      </div>
      <ul class="nav navbar-nav navbar-left">
        <li class="hidden-xs">
          <a class="request-fullscreen toggle-active" href="#">
            <span class="ad ad-screen-full fs18"></span>
          </a>
        </li>
      </ul>
      <form class="navbar-form navbar-left navbar-search alt" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search..." value="Search...">
        </div>
      </form>
      <ul class="nav navbar-nav navbar-right">


        <li class="menu-divider hidden-xs">
          <i class="fa fa-circle"></i>
        </li>
        <li class="dropdown menu-merge">
          <a href="#" class="dropdown-toggle fw600 p15" data-toggle="dropdown">
            <img src="assets/img/avatars/1.jpg" alt="avatar" class="mw30 br64">
            <span class="hidden-xs pl15"> HB技术小组-I </span>
            <span class="caret caret-tp hidden-xs"></span>
          </a>
          <ul class="dropdown-menu list-group dropdown-persist w250" role="menu">
            <li class="dropdown-header clearfix">
              <div class="pull-left ml10">
                <select id="user-status">
                  <optgroup label="Current Status:">
                    <option value="1-1">Away</option>
                    <option value="1-2">Offline</option>
                    <option value="1-3" selected="selected">Online</option>
                  </optgroup>
                </select>
              </div>

              <div class="pull-right mr10">
                <select id="user-role">
                  <optgroup label="Logged in As:">
                    <option value="1-1">Client</option>
                    <option value="1-2">Editor</option>
                    <option value="1-3" selected="selected">Admin</option>
                  </optgroup>
                </select>
              </div>
            </li>
            <li class="list-group-item">
              <a href="#" class="animated animated-short fadeInUp">
                <span class="fa fa-envelope"></span> Messages
                <span class="label label-warning">2</span>
              </a>
            </li>
            <li class="list-group-item">
              <?= Html::a('Friends', ['hb-friendlink/index'], ['class' => 'fa fa-user']) ?>
            </li>
            <li class="dropdown-footer">
              <?= Html::a('Logout', ['logout'], ['class' => 'fa fa-power-off pr5']) ?>
            </li>
          </ul>
        </li>
      </ul>
    </header>
    <!-- End: Header -->

    <!-- Start: Sidebar -->
    <aside id="sidebar_left" class="nano nano-light affix">

      <!-- Start: Sidebar Left Content -->
      <div class="sidebar-left-content nano-content">

        <!-- Start: Sidebar Header -->
        <header class="sidebar-header">

          <!-- Sidebar Widget - Author -->
          <div class="sidebar-widget author-widget">
            <div class="media">
              <a class="media-left" href="#">
                <img src="assets/img/avatars/3.jpg" class="img-responsive">
              </a>
              <div class="media-body">
                <div class="media-links">
                   <a href="#" class="sidebar-menu-toggle">User Menu -</a> <a href="pages_login(alt).html">Logout</a>
                </div>
                <div class="media-author">HB技术小组-I</div>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Menu (slidedown) -->
          <div class="sidebar-widget menu-widget">
            <div class="row text-center mbn">
              <div class="col-xs-4">
                <a href="dashboard.html" class="text-primary" data-toggle="tooltip" data-placement="top" title="Dashboard">
                  <span class="glyphicon glyphicon-home"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_messages.html" class="text-info" data-toggle="tooltip" data-placement="top" title="Messages">
                  <span class="glyphicon glyphicon-inbox"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-alert" data-toggle="tooltip" data-placement="top" title="Tasks">
                  <span class="glyphicon glyphicon-bell"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_timeline.html" class="text-system" data-toggle="tooltip" data-placement="top" title="Activity">
                  <span class="fa fa-desktop"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_profile.html" class="text-danger" data-toggle="tooltip" data-placement="top" title="Settings">
                  <span class="fa fa-gears"></span>
                </a>
              </div>
              <div class="col-xs-4">
                <a href="pages_gallery.html" class="text-warning" data-toggle="tooltip" data-placement="top" title="Cron Jobs">
                  <span class="fa fa-flask"></span>
                </a>
              </div>
            </div>
          </div>

          <!-- Sidebar Widget - Search (hidden) -->
          <div class="sidebar-widget search-widget hidden">
            <div class="input-group">
              <span class="input-group-addon">
                <i class="fa fa-search"></i>
              </span>
              <input type="text" id="sidebar-search" class="form-control" placeholder="Search...">
            </div>
          </div>

        </header>
        <!-- End: Sidebar Header -->

        <!-- Start: Sidebar Menu -->
        <ul class="nav sidebar-menu">
          <li class="sidebar-label pt20">Menu</li>
          <li>

          
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-shopping-cart"></span>
              <span class="sidebar-title">用户管理</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                  <?= Html::a('HB的朋友们', ['hb-friendlink/index'], ['class' => 'fa fa-child']) ?>
              </li>
              <li>
                 <?= Html::a('黑名单列表', ['hb-banned/index'], ['class' => 'fa fa-money']) ?>
              </li>
            </ul>
          </li>

          
          <li>
            <a class="accordion-toggle menu-open" href="#">
              <span class="glyphicon glyphicon-fire"></span>
              <span class="sidebar-title">HB四人组介绍</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                  <?= Html::a('段欣伯', ['site/duan'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
              <li>
                 <?= Html::a('王理治', ['site/wang'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
              <li class="active">
                 <?= Html::a('姚宗海', ['site/yao'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
               <li>
                 <?= Html::a('张鹏程', ['site/zhang'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
            </ul>
          </li>
          <li>
            <a class="accordion-toggle" href="#">
              <span class="glyphicon glyphicon-check"></span>
              <span class="sidebar-title"> 文章管理 </span>
              <span class="sidebar-title-tray">
                <span class="label label-xs bg-danger">Hot</span>
              <span class="caret"></span>
            </a>
            <ul class="nav sub-nav">
              <li>
                 <?= Html::a('查看文章', ['index'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
              <li>
                 <?= Html::a('增加文章', ['acreate'], ['class' => 'glyphicon glyphicon-equalizer']) ?>
              </li>
            </ul>
            </li>
    




          <li>                    </a>
                  </li>
                  

                </ul>
              </li>
             
             
            </ul>
          </li>
          
        </ul>
        <!-- End: Sidebar Menu -->

        <!-- Start: Sidebar Collapse Button -->
       
        <!-- End: Sidebar Collapse Button -->

      </div>
      <!-- End: Sidebar Left Content -->

    </aside>

    <!-- Start: Content-Wrapper -->
    <section id="content_wrapper">


      <!-- Start: Topbar -->
        <div class="topbar-left">
          <ol class="breadcrumb">
            
            <li class="crumb-icon">
              
            </li>
          </ol>
        </div>

      <!-- Begin: Content -->
 





<div class="wrap">

    <div class="hb-article-model-view">

<br>
<br>
    <?php echo "<font size=5>段欣伯</font>";?>
<br>

<br>
    <p>
        <?= Html::a('返回', ['index', 'id' => $model->aid], ['class' => 'btn btn-success']) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            // 'aid',
            'content:ntext',
            // 'author',
            // 'pubdate',
        ],
    ]) ?>


</div>

    </div>
    
    
<aside id="secondary" class="widget-area" role="complementary">
   
    
    

</div>






 



  <!-- BEGIN: PAGE SCRIPTS -->

  <!-- jQuery -->
  <?=Html::jsFile('@web/vendor/jquery/jquery-1.11.1.min.js')?>
  <?=Html::jsFile('@web/vendor/jquery/jquery_ui/jquery-ui.min.js')?>


  <!-- Theme Javascript -->
  <?=Html::jsFile('@web/assets/js/utility/utility.js')?>
  <?=Html::jsFile('@web/assets/js/demo/demo.js')?>
  <?=Html::jsFile('@web/assets/js/main.js')?>
  <script type="text/javascript">
  jQuery(document).ready(function() {

    "use strict";

    // Init Theme Core
    Core.init();

    // Init Demo JS
    Demo.init();


    // Form Switcher
    $('#form-switcher > button').on('click', function() {
      var btnData = $(this).data('form-layout');
      var btnActive = $('#form-elements-pane .admin-form.active');

      // Remove any existing animations and then fade current form out
      btnActive.removeClass('slideInUp').addClass('animated fadeOutRight animated-shorter');
      // When above exit animation ends remove leftover classes and animate the new form in
      btnActive.one('webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend', function() {
        btnActive.removeClass('active fadeOutRight animated-shorter');
        $('#' + btnData).addClass('active animated slideInUp animated-shorter')
      });
    });

    // Cache several DOM elements
    var pageHeader = $('.content-header').find('b');
    var adminForm = $('.admin-form');
    var options = adminForm.find('.option');
    var switches = adminForm.find('.switch');
    var buttons = adminForm.find('.button');
    var Panel = adminForm.find('.panel');

    // Form Skin Switcher
    $('#skin-switcher a').on('click', function() {
      var btnData = $(this).data('form-skin');

      $('#skin-switcher a').removeClass('item-active');
      $(this).addClass('item-active')

      adminForm.each(function(i, e) {
        var skins = 'theme-primary theme-info theme-success theme-warning theme-danger theme-alert theme-system theme-dark';
        var panelSkins = 'panel-primary panel-info panel-success panel-warning panel-danger panel-alert panel-system panel-dark';
        $(e).removeClass(skins).addClass('theme-' + btnData);
        Panel.removeClass(panelSkins).addClass('panel-' + btnData);
        pageHeader.removeClass().addClass('text-' + btnData);
      });

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-' + btnData);
        } else {
          $(e).removeClass().addClass('option option-' + btnData);
        }
      });
      $(switches).each(function(i, ele) {
        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-' + btnData);
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-' + btnData);
          } else {
            $(ele).removeClass().addClass('switch switch-' + btnData);
          }
        }

      });
      buttons.removeClass().addClass('button btn-' + btnData);
    });

    setTimeout(function() {
      adminForm.addClass('theme-primary');
      Panel.addClass('panel-primary');
      pageHeader.addClass('text-primary');

      $(options).each(function(i, e) {
        if ($(e).hasClass('block')) {
          $(e).removeClass().addClass('block mt15 option option-primary');
        } else {
          $(e).removeClass().addClass('option option-primary');
        }
      });
      $(switches).each(function(i, ele) {

        if ($(ele).hasClass('switch-round')) {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-round switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-round switch-primary');
          }
        } else {
          if ($(ele).hasClass('block')) {
            $(ele).removeClass().addClass('block mt15 switch switch-primary');
          } else {
            $(ele).removeClass().addClass('switch switch-primary');
          }
        }
      });
      buttons.removeClass().addClass('button btn-primary');
    }, 800);

  });
  </script>
  <!-- END: PAGE SCRIPTS -->

</body>

</html>

