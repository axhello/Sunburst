<?php $this->need('header.php'); ?>

	<div class="site-contentContainer">
		<main class="site-content">
			<section role="section">
				<header class="content-header">
					<h1 class="header-h1"><?php $this->title() ?></h1>
					<time class="header-date" datetime="<?php $this->date('c') ?>"><?php $this->date('F j, Y') ?></time>
				</header>
				<article class="content-main typo">
				<?php $this->content(); ?>
				</article>
			</section>
			<?php $this->need('comments.php'); ?>
		</main>
	</div>
<?php $this->need('footer.php'); ?>