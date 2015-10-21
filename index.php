<?php
/**
 * 简洁大气-手机端响应式主题
 * 
 * @package Sunburst Theme 
 * @author Axhello
 * @version 1.0.1
 * @link http://www.ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<div class="site-contentContainer">
		<main class="site-content">
			<h1 class="page-title">最近的文章</h1>
			<article class="articlelist">
			<?php while($this->next()): ?>
				<section class="articlelist-item clearfix">
					<a href="<?php $this->permalink() ?>" class="article-view">
					<h2 class="article-view-title"><?php $this->title() ?></h2>
					</a>
					<time class="article-view-date" datetime="<?php $this->date('c') ?>"><?php $this->date('F j, Y') ?></time>
					 
					<div class="article-view-excerpt"><?php $this->excerpt('350', '...') ?></div>
					<div class="post-tag">
					<ul>
        				<li><img style="width: 20px;" src="<?php $this->options->themeUrl('img/tags.svg'); ?>"><?php $this->tags('</li><li>', true, '<a>None</a>') ?></li>
       				</ul>
					</div>
					<a href="<?php $this->permalink() ?>" class="post-foot-link fr">阅读更多</a>
				</section> 
			<?php endwhile; ?>
			</article>
			<nav class="page-nav"><?php $this->pageNav('«', '»'); ?></nav>
		</main>
	</div>
<?php $this->need('footer.php'); ?>