<?php $this->need('header.php'); ?>
		
	<?php if ($this->have()): ?>
      <div class="site-contentContainer">
		<main class="site-content">
			<h1 class="page-title"><?php $this->archiveTitle(array(
              'category'  =>  _t('分类 %s 下的文章'),
              'search'    =>  _t('包含关键字 %s 的文章'),
              'tag'       =>  _t('标签 %s 下的文章'),
              'author'    =>  _t('%s 发布的文章')
          ), '', ''); ?></h1>
     		<ul class="articlelist">
			<?php while($this->next()): ?>
				<li class="articlelist-item">
					<a href="<?php $this->permalink() ?>" class="article-view">
					<h2 class="article-view-title"><?php $this->title() ?></h2>
					<time class="article-view-date" datetime="<?php $this->date('c') ?>"><?php $this->date('F j, Y') ?></time>
					<p class="article-view-excerpt"><?php $this->excerpt('200', '...') ?></p>
					</a>
				</li>
			<?php endwhile; ?>
			</ul>
			 <?php else: ?>
			 <div class="site-contentContainer">
				<main class="site-content">
					<h1 class="page-title">404-Error</h1>
           			<ul class="articlelist">
           			<li class="articlelist-item">
	           			<a href="<?php $this->options->siteUrl(); ?>" class="article-view">
							<h2 class="article-view-title"><?php _e('没有找到你要的内容'); ?></h2>
						</a>
					</li>
					</ul>
				</main>
			</div>

        <?php endif; ?>

		</main>
		<nav class="page-nav"><?php $this->pageNav('&laquo; Prev', 'Next &raquo;'); ?></nav>
	</div>

<?php $this->need('footer.php'); ?>