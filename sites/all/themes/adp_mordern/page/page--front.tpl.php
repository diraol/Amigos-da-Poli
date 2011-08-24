<?php
// $Id$
/**
 * @defgroup page Page templates
 * Contains all our page templates
 */
/**
 * @file page-front.tpl.php
 * Homepage template.
 * @see page.tpl.php for all available variables.
 * @ingroup page
 */
?>
<!-- Page HEADER -->
<div id="page-wrapper" class="clearfix">
 
  <div id="header"> 
    <div id="user-menu-wrap" >
      <?php print $menu_utility ?>
    </div>
    <div id="header-inner" class="clearfix center-on-page">
      <div class = 'title'>
        <?php if ($logo) {print $header_logo;} ?>
        <?php if ($site_name) : ?>
          <div class = 'site-name'><?php print l($site_name, $front_page) ?></div>
        <?php endif; ?>

        <?php if ($site_slogan = variable_get('site_slogan')) : ?>
          <div class = 'site-slogan'><?php print $site_slogan; ?></div>
        <?php endif; ?>
      </div>
        
      <div id="header-right-content" class="clearfix">
        <div id="header-search" class="clearfix">
          <?php print render($page['header']); ?>
        </div><!--/header search-->
        
               
      </div><!--/header right content-->

    </div><!--/#header-inner-->
  </div> <!-- /.section, /#header -->
    
   <div id="wrap" class="center-on-page clearfix">
   <div id="wrap-inner" class="center-on-page clearfix">

    <?php if ($main_menu || $secondary_menu): ?>
    <div id="navigation"><div id="front-menu-top" class="section">
      <?php print drupal_render($main_menu); ?>
      <?php //print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'navlist', 'class' => array('links')))); ?>
          </div></div> <!-- /.section, /#navigation -->
  <?php endif; ?>
<!-- /Page HEADER -->
<div class="center-on-page">
  <div id="control">
  <div id="front-content"></div>
    <?php if ($messages): ?>
      <div id="console" class="clearfix"><?php print $messages; ?></div>
    <?php endif; ?>
    
    <?php if ($page['help']): ?>
      <div id="help">
        <?php print render($page['help']); ?>
      </div>
    <?php endif; ?>
    
    <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  </div> <!--/#control-->
  <div class="body-text clearfix">
    <div id="content" class="clearfix">
    <?php print render($page['help']); ?>
    <?php print render($page['content_prefix']); ?>
    <?php print render($page['content_suffix']); ?>
      <div id="main" class="clear clearfix">
            <div class="section-col col-3 first-col">
              <?php print render($page['inner_first']); ?>
            </div>
            <div class="section-col col-3">
              <?php print render($page['inner_second']); ?>
            </div>
            <div class="section-col col-3 last-col">
              <?php print render($page['sidebar_first']); ?>
            </div>
      </div>
    </div>
  </div><!--/.body-text-->
</div><!--/.center-on-page -->
<!-- PAGE FOOTER -->

</div><!--/wrap-inner-->
</div><!--/wrap-->


  <div id="footer" class="clearfix clear">
  <div id="footer-inner" class="center-on-page clearfix">

  <div class="clearfix" id="footer-logo-subscribe">

        <?php print $footer_logo ?>
        <?php if ($site_name) : ?>
          <div class = 'site-name'><?php print l($site_name, $front_page) ?></div>
        <?php endif; ?>

              <div id="footer-social">
                  <?php print render($page['footer_social']); ?>
              </div>
    <div id="footer-subscribe">
    <?php print drupal_render($subscribe_form)  ?>
    </div><!--/footer-subscribe-->
  </div>

    <div id="footer-nav">
      <?php print drupal_render($footer_menu); ?>
    </div>
   
  </div><!--/footer inner-->
    
  </div><!--/#footer-->

</div><!--/page wrapper-->
<div id="closure"><div class="closure-wrapper">
  <?php print render($page['footer']); ?>
  <?php print $footer_utility ?>
</div></div><!--/closure and closure-wrapper-->
<!-- /PAGE FOOTER -->
