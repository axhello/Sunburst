<?php $this->need('header.php'); ?>

<div class="site-contentContainer"><!-- 文章开始 -->
		<main class="site-content">
			<section role="section" class="hentry">
				<header class="content-header">
					<h1 class="header-h1"><?php $this->title() ?></h1>
					<time class="header-date" datetime="<?php $this->date('c') ?>"><?php $this->date('F j, Y') ?></time>
				</header>
				<article class="content-main typo">
				<?php $this->content(); ?>
				</article>
				<footer class="content-footer">
				<nav id="post-nav" class="post-nav">
     				<div class="post-link-next next"><?php $this->thePrev('%s<i></i>','<a>已经没有更多文章了</a>'); ?></div>
     				<div class="post-link-prev prev"><?php $this->theNext('<i></i>%s','<a>已经没有更多文章了</a>'); ?></div>
    			</nav>
				</footer>
			</section>	
			<?php $this->need('comments.php'); ?>
		</main>
</div><!-- 文章结束 -->
<?php $this->need('footer.php'); ?>