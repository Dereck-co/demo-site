<!DOCTYPE html>
<html lang="zh-Hant-TW">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>uiCookies:Stack &mdash; Free Bootstrap Theme, Free Website Template</title>
    <meta name="description" content="Free Bootstrap Theme by uicookies.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500,700">
    <link rel="stylesheet" href="/css/styles-merged.css">
    <link rel="stylesheet" href="/css/style.min.css">

    <style>
      .carouselfixed {
        width: 480px;
        height:320px; 
        /* border:2px #f00
        solid; */
      }

      #shopin > a >img:hover{
        opacity: 0.9;
        box-shadow: 0 4px 6px 0 rgba(0, 140, 186, 0.5), 0 6px 10px 10px rgba(0, 140, 186, 0.5);
        border:3px #cccccc solid;
      }

      .auryang{
        width:100px;
        height:100px;
        border-radius:15px;
      }

      .aurde{
        width:100px;
        height:100px;
        border-radius:15px;
      }
      #author1:hover{
        box-shadow: 0 4px 6px 0 rgba(0, 140, 186, 0.5), 0 6px 10px 10px rgba(0, 140, 186, 0.5);
        border:3px #cccccc solid;
      }
      #author2:hover{
        box-shadow: 0 4px 6px 0 rgba(0, 140, 186, 0.5), 0 6px 10px 10px rgba(0, 140, 186, 0.5);
        border:3px #cccccc solid;
      }

      .galaxy{
        font-size:20px;
      }
      .galaxy:hover{
        font-size:30px;
      }

    </style>

    <!--[if lt IE 9]>
      <script src="js/vendor/html5shiv.min.js"></script>
      <script src="js/vendor/respond.min.js"></script>
    <![endif]-->

    <?php $this->renderSection('head'); ?>
  </head>
  <body>
    
    <!-- Fixed navbar -->
    <?php echo $this->include('component/header'); ?>

    <?php $this->renderSection('content'); ?>

    <?php echo $this->include('component/footer'); ?>

    <!-- Modal login -->
    <?php echo $this->include('component/login'); ?>
    <!-- END modal login -->
    
    <!-- Modal signup -->
    <?php echo $this->include('component/signup'); ?>
    <!-- END modal signup -->

    <script src="/js/scripts.min.js"></script>
    <script src="/js/custom.js"></script>

  </body>
</html>