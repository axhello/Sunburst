<?php 
/**
* 友情链接模板
* 
* @package custom
*/
?>
<?php $this->need('header.php'); ?>
<div class="site-contentContainer">
    <main class="site-content">
        <section role="section" class="hentry">
            <header class="content-header">
                <h1 class="header-h1">友情链接</h1>
            </header>
            <ul>
            	<?php Links_Plugin::output(); ?>
            </ul>
        </section>
    </main>
</div>
<?php $this->need('footer.php'); ?>