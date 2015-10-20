<?php 
/**
* 文章归档模板
*
* @package custom
*/
?>
<?php $this->need('header.php'); ?>
<div class="site-contentContainer">
    <main class="site-content">
        <section role="section" class="hentry">
            <header class="content-header">
                <h1 class="header-h1">Articles</h1>
            </header>
<?php
$this->widget('Widget_Contents_Post_Recent', 'pageSize=10000')->to($archives);   
    $year=0; $mon=0; $i=0; $j=0;   
    $output = '<div id="archives">';   
    while($archives->next()):   
        $year_tmp = date('Y',$archives->created);   
        $mon_tmp = date('n',$archives->created);
        $day_tmp = date('d',$archives->created);  
        $y=$year; $m=$mon;   
        // if ($mon != $mon_tmp && $mon > 0) $output .= '</ul></li>';   
        if ($year != $year_tmp && $year > 0) $output .= '</ul>';   
        if ($year != $year_tmp) {   
            $year = $year_tmp;   
            $output .= '<h3 class="al_year">'. $year .' 年</h3><ul class="articles-ul">'; //输出年份   
        }   
        // if ($mon != $mon_tmp) {   
            $mon = $mon_tmp;   
            // $output .= '<li><span class="al_mon">'. $mon .' 月</span><ul class="al_post_list">'; //输出月份   
        // } 
            $day = $day_tmp;  
        $output .= '<li><a href="'.$archives->permalink .'">'. $archives->title .'</a>&nbsp;&nbsp;[<time>'.$mon.'月'.$day.'日'.'</time>]</li>'; //输出文章日期和标题   
    endwhile;   
    $output .= '</ul></li></div>';   
    echo $output;   
?>
        </section>
    </main>
</div>
<?php $this->need('footer.php'); ?>