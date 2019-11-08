<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
$this->need('header.php');
?>
  <body>
        <div class="content index width mx-auto px3 my4">
            <header id="header">
                <a id="logo" href="<?php $this->options->siteUrl();?>">
                     <div style="background-image: url(<?php if($this->options->logoimg): ?><?php $this->options->logoimg();?><?php else : ?><?php $this->options->themeUrl('images/logo.png'); ?><?php endif; ?>);"></div>
                </a>
                <div id="title">
                    <h1><?php $this->title() ?></h1>
                </div>
                <div id="nav">
                    <ul>
                        <li class="icon">
                            <a href="#">
                                <i class="fa fa-bars fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php $this->options->siteUrl();?>">Home</a>
                        </li>
                        <?php $this->widget('Widget_Contents_Page_List')->parse('<li><a href="{permalink}">{title}</a></li>'); ?>
                        <?php if($this->options->github): ?>
						<li>
                         <a href="<?php $this->options->github();?>" target="_blank">Github</a>
                        </li><?php endif; ?>
                    </ul>
                </div>
            </header>
            <div class="content index width mx-auto px3 my3">
                <section id="wrapper" class="home">
                    <article class="post" itemscope itemtype="http://schema.org/BlogPosting">
                        <div class="content" itemprop="articleBody">
                            <?php $this->content(); ?>
                        </div>
                    </article>
                    <?php $this->need('comments.php'); ?>
                </section>
            </div>
		</div>
 <?php $this->need('footer.php'); ?>