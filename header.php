<!DOCTYPE html>
<html lang="zh">
<head>
	<link rel="shortcut icon" href="/favicon.ico"/> 
	<link rel="bookmark" href="/favicon.ico"/>
	<meta charset="<?php $this->options->charset(); ?>"> 
	<title><?php $this->archiveTitle(array(
	            'category'  =>  _t('分类 %s 下的文章'),
	            'search'    =>  _t('包含关键字 %s 的文章'),
	            'tag'       =>  _t('标签 %s 下的文章'),
	            'author'    =>  _t('%s 发布的文章')
	        ), '', ' - '); ?><?php $this->options->title(); ?> | <?php $this->options->description(); ?></title>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/main.css'); ?>">
	<link rel="stylesheet" href="<?php $this->options->themeUrl('css/prettify.css'); ?>">
	<?php $this->header(); ?>   <!-- 通过自有函数输出HTML头部信息 -->
</head>
<body class="site nav-hide">
<svg display="none">
	<defs>
		<path id="icon-weibo" d="M36.539,12.806 C36.539,12.808 36.539,12.810 36.539,12.812 C36.297,13.556 35.498,13.964 34.754,13.723 C34.008,13.482 33.600,12.683 33.841,11.937 L33.840,11.937 C34.580,9.646 34.111,7.033 32.384,5.117 C30.656,3.201 28.108,2.470 25.753,2.970 C24.987,3.133 24.234,2.644 24.071,1.878 C23.907,1.114 24.395,0.360 25.161,0.195 L25.162,0.195 C28.472,-0.509 32.058,0.519 34.489,3.217 C36.921,5.911 37.577,9.584 36.539,12.806 ZM26.721,7.506 L26.721,7.505 C26.064,7.648 25.415,7.226 25.274,6.568 C25.133,5.908 25.553,5.259 26.212,5.119 C27.825,4.775 29.572,5.274 30.756,6.588 C31.941,7.901 32.259,9.690 31.752,11.260 C31.545,11.902 30.857,12.252 30.216,12.047 C29.574,11.839 29.224,11.150 29.431,10.509 L29.429,10.509 C29.678,9.741 29.522,8.866 28.943,8.224 C28.365,7.583 27.510,7.340 26.721,7.506 ZM27.210,9.790 C27.851,10.706 27.789,11.990 27.198,13.478 C26.925,14.163 27.283,14.269 27.804,14.426 C29.927,15.084 32.291,16.678 32.291,19.485 C32.291,24.132 25.594,29.985 15.526,29.985 C7.847,29.985 -0.003,26.261 -0.003,20.135 C-0.003,16.933 2.025,13.230 5.516,9.736 C10.179,5.072 15.616,2.947 17.661,4.994 C18.563,5.896 18.650,7.458 18.070,9.323 C17.768,10.262 18.951,9.742 18.951,9.744 C22.720,8.165 26.008,8.072 27.210,9.790 ZM25.923,19.401 C25.526,15.377 20.236,12.605 14.107,13.211 C7.980,13.818 3.333,17.572 3.731,21.597 C4.129,25.623 9.419,28.394 15.547,27.789 C21.676,27.183 26.320,23.428 25.923,19.401 ZM11.584,26.060 C8.638,25.108 7.391,22.198 8.681,19.576 C9.948,17.005 13.243,15.551 16.159,16.310 C19.177,17.090 20.717,19.939 19.484,22.705 C18.233,25.536 14.636,27.045 11.584,26.060 ZM13.248,20.549 C12.299,20.151 11.073,20.560 10.487,21.479 C9.894,22.402 10.173,23.501 11.115,23.930 C12.071,24.367 13.340,23.952 13.933,23.006 C14.515,22.050 14.208,20.958 13.248,20.549 ZM15.587,19.579 C15.223,19.434 14.768,19.609 14.554,19.968 C14.347,20.328 14.461,20.738 14.826,20.888 C15.197,21.041 15.671,20.865 15.885,20.498 C16.090,20.129 15.957,19.714 15.587,19.579 Z"></path>
		<path id="icon-rss" d="M16 0q6.6 0 11.3 4.7t4.7 11.3q0 6.6-4.7 11.3t-11.3 4.7-11.3-4.7-4.7-11.3 4.7-11.3 11.3-4.7zM10.7 24q1.1 0 1.9-0.8t0.8-1.9-0.8-1.9-1.9-0.8-1.9 0.8-0.8 1.9 0.8 1.9 1.9 0.8zM16.7 24h3.3q0-5-3.5-8.5t-8.5-3.5v3.3q3.6 0 6.1 2.5t2.5 6.1zM22.7 24h3.3q0-3.7-1.4-7t-3.8-5.7-5.7-3.8-7-1.4v3.3q6.1 0 10.4 4.3t4.3 10.4z"></path>
		<path id="icon-twitter" d="M16 0q6.6 0 11.3 4.7t4.7 11.3-4.7 11.3-11.3 4.7-11.3-4.7-4.7-11.3 4.7-11.3 11.3-4.7zM25.7 12.5q1.2-0.9 2.3-2.3-1.3 0.6-2.6 0.7 1.4-0.8 2-2.5-1.4 0.8-2.9 1.1-1.3-1.4-3.3-1.4-1.9 0-3.2 1.3t-1.3 3.2q0 0.6 0.1 1-5.7-0.3-9.4-4.8-0.6 1.1-0.6 2.3 0 2.4 2 3.8-1 0-2-0.6v0q0 1.6 1 2.9t2.6 1.6q-0.5 0.1-1.2 0.1-0.3 0-0.9-0.1 0.4 1.4 1.6 2.2t2.6 0.9q-2.6 2.1-5.6 2.1-0.4 0-1.1-0.1 3.1 2 7 2 3 0 5.5-1.2t4.1-3.1 2.4-4.1 0.9-4.6v-0.6z"></path>
		<path id="icon-github" d="M16 0q6.59 0 11.3 4.7t4.7 11.3q0 5.52-3.39 9.85t-8.61 5.67v-4.18q0-2.89-1.67-4.18 3.37-0.52 5.52-2.41t2.15-4.74q0-2.52-1.85-4.59 0.67-3.07-0.15-4.74-2.04 0.19-4.63 1.78-1.78-0.44-3.37-0.44t-3.37 0.44q-2.59-1.59-4.63-1.78-0.85 1.78-0.15 4.74-1.85 2.07-1.85 4.59 0 2.85 2.15 4.74t5.52 2.41q-0.85 0.63-1.3 1.82-0.67 0-1.37-0.13t-1.28-0.35-1.11-0.5-0.96-0.56-0.72-0.52-0.48-0.39l-0.15-0.15q-0.26-0.26-0.52-0.07-0.3 0.19-0.22 0.52 0.7 1.37 1.19 2 1.93 2.48 5.26 3.48v3.22q-5.22-1.33-8.61-5.67t-3.39-9.85q0-6.63 4.68-11.31t11.32-4.68z"></path>
	</defs>
</svg>
<button id="menu" type="button" class="drawer-hamburger drawer-toggle">
      <span class="sr-only">toggle navigation</span>
      <span class="drawer-hamburger-icon"></span>
</button>
<div class="site-header"> <!-- 头部开始 -->
	<div class="header">
		<a href="/" class="header-info" title="Home">
			<h1 class="header-title"><?php $this->options->title(); ?></h1>
			<p class="header-tagline"><?php $this->options->description() ?></p>
		</a>
		<a href="/" class="header-photo" title="Home"></a>
		<div class="header-social">
			<nav class="socialnav">
			<a href="#" target="_blank" class="social-icon social-icon-github" title="github">
				<svg  viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-github"></use></svg>
			</a>
			<a href="#" target="_blank" class="social-icon social-icon-weibo" title="weibo">
				<svg viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-weibo"></use></svg>
			</a>
			<a href="<?php $this->options->feedUrl(); ?>" target="_blank" class="social-icon social-icon-rss" title="rss">
				<svg  viewBox="0 0 32 32"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#icon-rss"></use></svg>
			</a>
			</nav>
		</div>
		<form class="navbar-form" role="search" method="post" action="">
        <div class="form-group">
          <input class="form-control js-search" name="s" placeholder="Search" autocomplete="off"/>
          <button class="button fa icon-search" type="submit"></button>
        </div>
      	</form>
		<div class="header-nav">
			<nav class="mainnav" id="nav_menu">
    		    <li><a href="<?php $this->options->siteUrl(); ?>" title="Home">Home</a></li>
   				 <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
				<!-- <ul><li><a href="<?php $this->options->siteUrl(); ?>" title="Home">Home</a></li>
				<li><a href="/" title="articles">Articles</a></li>
				<li><a href="#" title="about">About</a></li></ul> -->
			</nav>
		</div>
		<div class="copy">
			<p>&copy; 2015 Theme By <a href="http://ciyuanai.net" target="_blank">Axhello</a>.</p>
		</div>
	</div>
	<div class="header-menu">
		<nav class="main-nav">
			<li><a href="<?php $this->options->siteUrl(); ?>" title="Home">Home</a></li>
   				 <?php $this->widget('Widget_Contents_Page_List')
               ->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
			<!-- <ul><li><a href="<?php $this->options->siteUrl(); ?>" title="Home">Home</a></li>
			<li><a href="/" title="articles">Articles</a></li>
			<li><a href="#" title="about">About</a></li></ul>	 -->
		</nav>
	</div>
</div><!-- 头部结束 -->
