<?php
/**
 * 简洁大气-手机端响应式主题
 * 
 * @package Sunburst Theme 
 * @author Axhello
 * @version 1.0
 * @link http://www.ciyuanai.net
 */

if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>

	<div class="site-contentContainer">
		<main class="site-content">
			<h1 class="page-title">最近的文章</h1>
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
			<nav class="page-nav"><?php $this->pageNav('«', '»'); ?></nav>
		</main>
	</div>
<?php $this->need('footer.php'); ?>