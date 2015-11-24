<?php /* Smarty version 2.6.13, created on 2015-11-14 00:03:00
         compiled from /vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/guide.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/guide.tpl', 25, false),)), $this); ?>
<!--▼リンクここから-->
<div id="guidearea">
  <ul>
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_category'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'abouts'): ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
abouts/index.php" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/about_on.jpg','about');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/about.jpg','about');"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/about.jpg" width="166" height="30" alt="当サイトについて" style="border: none" name="about" id="about" /></a></li>
    <?php else: ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
abouts/index.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/about_on.jpg" width="166" height="30" alt="当サイトについて"  style="border: none" name="about" id="about" /></a></li>
    <?php endif; ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_category'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'contact'): ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
contact/index.php" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/contact_on.jpg','contact');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/contact.jpg','contact');"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/contact.jpg" width="166" height="30" alt="お問い合わせ"  style="border: none" name="contact" id="contact" /></a></li>
    <?php else: ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
contact/index.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/contact_on.jpg" width="166" height="30" alt="お問い合わせ" style="border: none" name="contact" id="contact" /></a></li>
    <?php endif; ?>

    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_page_category'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'order'): ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
order/index.php" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/low_on.jpg','low');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/low.jpg','low');"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/low.jpg" width="166" height="30" alt="特定商取引に関する法律" style="border: none" name="low" id="low" /></a></li>
    <?php else: ?>
    <li><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
order/index.php"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/low_on.jpg" width="166" height="30" alt="特定商取引に関する法律" style="border: none" name="low" id="low" /></a></li>
    <?php endif; ?>
  </ul>
</div>
<!--▲リンクここまで-->