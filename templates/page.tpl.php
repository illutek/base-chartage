<div id="site_name" class="fourteen columns">
	<?php if ($logo): ?>
        	<a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
            	<img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
            </a>
    <?php endif; ?>
</div><!-- /site_name-->
    
	<div id="container" class="container">
		
        <div id="main_menu" class="fourteen columns">
    		<?php if ($page['main_menu']): ?>
			<?php print render($page['main_menu']); ?>
        	<?php endif; ?>
    	</div>
      
        <div id="wrapper_content" class="fourteen columns">
        <?php if ($page['slider']): ?>
        <div id="slider">
			<?php print render($page['slider']); ?>
        </div>
        <?php endif; ?>
        <div id="content">
        <?php //print $breadcrumb; ?>           
            <a id="main-content"></a>          
            <?php if ($tabs): ?><div id="tabs-wrapper" class="clearfix"><?php endif; ?>
			<?php print render($title_prefix); ?>           
            <?php if ($title): ?>            
            	<h1<?php print $tabs ? ' class="with-tabs"' : '' ?>><?php print $title ?></h1>
			<?php endif; ?>           
            <?php print render($title_suffix); ?>          
            <?php if ($tabs): ?><?php print render($tabs); ?></div><?php endif; ?>
			<?php print render($tabs2); ?>           
            <?php print $messages; ?>           
            <?php print render($page['help']); ?>           
            <?php if ($action_links): ?><ul class="action-links">
            <?php print render($action_links); ?></ul>
            <?php endif; ?>           
            
            <div class="clearfix"> 
                      
            	<?php print render($page['content']); ?>
            </div>	<!-- /clearfix-->		
			<?php if ($page['content_bottom']): ?>
        	<div id="content_bottom">        	
				<?php print render($page['content_bottom']); ?>			
        	</div><!-- /content_bottom-->
		<?php endif; ?>
        </div><!-- /content-->
        
       	<div id="left" class="four columns">
        	<?php if ($page['left']): ?>
			<?php print render($page['left']); ?>
			<?php endif; ?>
        </div><!-- /left-->
		
        </div><!-- /wrapper_content-->
        
        <div id="wrapper_bottom" class="fourteen columns">
		<?php if ($page['footer_left']): ?>
		<div id="footer_left">			
			<?php print render($page['footer_left']); ?>
		</div>
		<?php endif; ?>
		
	</div> <!-- /wrapper_bottom-->
    <footer class="twelve columns">
    	<div id="footer_inner">
        	<div id="footer_left" class="five columns">&copy; Chartage | <?php print date(Y); ?></div>
            <div id="footer_right" class="five columns"></div>
        </div>
    
    </footer>
	</div><!-- container -->