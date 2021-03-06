<?php
/**
 * @copyright  Copyright (C) 2005 - 2008 Open Source Matters. All rights reserved.
 * @license    GNU/GPL, see LICENSE.php
 * Joomla! is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 * See COPYRIGHT.php for copyright notices and details.
 */

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" >
<head>
   <jdoc:include type="head" />
   <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/cecu_madrid_joomla/css/template.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/cecu_madrid_joomla/css/<?php echo $this->params->get('colorVariation'); ?>.css" type="text/css" />
   <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/cecu_madrid_joomla/css/<?php echo $this->params->get('backgroundVariation'); ?>_bg.css" type="text/css" />
   <!--[if lte IE 6]>
   <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template ?>/css/ieonly.css" rel="stylesheet" type="text/css" />
   <![endif]-->
   <?php if($this->direction == 'rtl') : ?>
      <link href="<?php echo $this->baseurl ?>/templates/cecu_madrid_joomla/css/template_rtl.css" rel="stylesheet" type="text/css" />
   <?php endif; ?>

</head>
<body id="page_bg" class="color_<?php echo $this->params->get('colorVariation'); ?> bg_<?php echo $this->params->get('backgroundVariation'); ?> width_<?php echo $this->params->get('widthStyle'); ?>">
<a name="up" id="up"></a>
<div class="center" align="center">
   <div id="wrapper">
      <div id="wrapper_r">
         <div id="header">
            <div id="header_l">
               <div id="header_r">
                  <div id="logo"><a href="/web/" title="ir a la portada">&nbsp;</a></div>
                  <jdoc:include type="modules" name="top" />
                  <div id="mapa_madrid"><a href="/web/delegaciones.html" title="ir a las delegaciones">&nbsp;</a></div>
               </div>
            </div>
         </div>

         <div id="tabarea">
            <div id="tabarea_l">
               <div id="tabarea_r">
                  <div id="tabmenu">
                  <table cellpadding="0" cellspacing="0" class="pill">
                     <tr>
                        <td class="pill_l">&nbsp;</td>
                        <td class="pill_m">
                        <div id="pillmenu">
                           <jdoc:include type="modules" name="user3" />
                        </div>
                        </td>
                        <td class="pill_r">&nbsp;</td>
                     </tr>
                     </table>
                  </div>
               </div>
            </div>
         </div>

         <div id="search">
            <jdoc:include type="modules" name="user4" />
         </div>

         <div id="pathway">
            <jdoc:include type="modules" name="breadcrumb" />
         </div>

         <div class="clr"></div>

         <div id="whitebox">
            <div id="whitebox_t">
               <div id="whitebox_tl">
                  <div id="whitebox_tr"></div>
               </div>
            </div>

            <div id="whitebox_m">
               <div id="area">
                           <jdoc:include type="message" />

                  <div id="leftcolumn">
                  <?php if($this->countModules('left')) : ?>
                     <jdoc:include type="modules" name="left" style="rounded" />
                  <?php endif; ?>
                  </div>

                  <?php if($this->countModules('left')) : ?>
                  <div id="maincolumn">
                  <?php else: ?>
                  <div id="maincolumn_full">
                  <?php endif; ?>
                     <?php if($this->countModules('user1 or user2')) : ?>
                        <table class="nopad user1user2">
                           <tr valign="top">
                              <?php if($this->countModules('user1')) : ?>
                                 <td>
                                    <jdoc:include type="modules" name="user1" style="xhtml" />
                                 </td>
                              <?php endif; ?>
                              <?php if($this->countModules('user1 and user2')) : ?>
                                 <td class="greyline">&nbsp;</td>
                              <?php endif; ?>
                              <?php if($this->countModules('user2')) : ?>
                                 <td>
                                    <jdoc:include type="modules" name="user2" style="xhtml" />
                                 </td>
                              <?php endif; ?>
                           </tr>
                        </table>

                        <div id="maindivider"></div>
                     <?php endif; ?>

                     <table class="nopad">
                        <tr valign="top">
                           <td>
                              <jdoc:include type="component" />
                              <jdoc:include type="modules" name="footer" style="xhtml"/>
                           </td>
                           <?php if($this->countModules('right') and JRequest::getCmd('layout') != 'form') : ?>
                              <td class="greyline">&nbsp;</td>
                              <td width="170">
                                 <jdoc:include type="modules" name="right" style="xhtml"/>
                              </td>
                           <?php endif; ?>
                        </tr>
                     </table>

                  </div>
                  <div class="clr"></div>
               </div>
               <div class="clr"></div>
            </div>

            <div id="whitebox_b">
               <div id="whitebox_bl">
                  <div id="whitebox_br"></div>
               </div>
            </div>
         </div>

         <div id="footerspacer"></div>
      </div>

      <div id="footer">
         <div id="footer_l">
            <div id="footer_r">
               <p id="syndicate">
                  <jdoc:include type="modules" name="syndicate" />
               </p>
               <p id="power_by">
                   &copy; CECUMadrid. <a href="/web/aviso-legal.html">Aviso Legal</a> - 
                   <a href="/web/privacidad.html">Pol&iacute;tica de privacidad</a> - 
                  <?php echo JText::_('Powered by') ?> <a href="http://www.joomla.org">Joomla!</a>.
                  <?php echo JText::_('Valid') ?> <a href="http://validator.w3.org/check/referer">XHTML</a> <?php echo JText::_('and') ?> <a href="http://jigsaw.w3.org/css-validator/check/referer">CSS</a>.
               </p>
            </div>
         </div>
      </div>
   </div>
</div>
<script type="text/javascript">
   var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
   document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
   try {
      var pageTracker = _gat._getTracker("UA-396725-1");
      pageTracker._trackPageview();
   } catch(err) {}
</script>
<jdoc:include type="modules" name="debug" />
</body>
</html>
