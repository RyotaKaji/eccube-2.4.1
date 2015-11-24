<?php /* Smarty version 2.6.13, created on 2015-11-19 18:45:35
         compiled from mail/subnavi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'mail/subnavi.tpl', 26, false),)), $this); ?>
<table width="141" border="0" cellspacing="0" cellpadding="0" summary=" " id="menu_navi">
	<!--ナビ-->
	<tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'index'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./index.php" onMouseOver="naviStyleChange('index', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'index'): ?>onMouseOut="naviStyleChange('index', '#636469')"<?php endif; ?> id="index"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">配信内容設定</span></a></td></tr>
	<tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
	<tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'template'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./template.php" onMouseOver="naviStyleChange('template', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'template'): ?>onMouseOut="naviStyleChange('template', '#636469')"<?php endif; ?> id="template"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">テンプレート設定</span></a></td></tr>
	<tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
	<tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'history'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./history.php" onMouseOver="naviStyleChange('history', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'history'): ?>onMouseOut="naviStyleChange('history', '#636469')"<?php endif; ?> id="history"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">配信履歴</span></a></td></tr>
	<tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
	<!--ナビ-->
</table>