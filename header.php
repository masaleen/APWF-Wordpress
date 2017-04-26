  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="All Pets Wellness Foundation is a dedicated group of animal advocates providing funds to care for sick and injured pets. Learn how you can help!" />
    <title>All Pets Wellness Foundation | Providing Funding for Sick and Injured Pets</title>
    <!-- Bootstrap -->
    <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Libre+Baskerville" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_enqueue_script("jquery"); ?>
    <?php wp_head(); ?>
    
  </head>
  <body>
    
<!-- MAIN MENU NAVIGATION --> 

    <div class = "navbar navbar-default navbar-fixed-top">
        <div class = "container">
            <a href="index.html" class="navbar-brand"><img class = "navlogo" src="http://v2.allpetswellnessfoundation.org/wp-content/uploads/2017/04/APWF_logo.jpg" alt="All Pets Wellness Foundation Logo"></a>

            <button class = "navbar-toggle" data-toggle = "collapse" data-target = ".navHeaderCollapse">
                <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>

            <div class="collapse navbar-collapse navHeaderCollapse" id="main-nav">
                <ul class = "nav navbar-nav navbar-right">
                    <?php wp_list_pages(array('title_li' => ''));?>
                </ul>
</div>
            </div>
        </div>
        
<!-- END MAIN MENU NAVIGATION --> 
    
    
 <div class="container">
    <div class="col-xs-12">