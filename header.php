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
			<a href="#" target="_blank" class="social-icon" title="Weibo">
				<span class="icon-weibo"></span>
			</a>
			<a href="#" target="_blank" class="social-icon" title="Email">
				<span class="icon-email"></span>
			</a>
			<a href="<?php $this->options->feedUrl(); ?>" target="_blank" class="social-icon" title="Rss">
				<span class="icon-rss"></span>
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
