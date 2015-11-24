<?php /* Smarty version 2.6.13, created on 2015-11-19 18:48:55
         compiled from ownersstore/subnavi.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'ownersstore/subnavi.tpl', 26, false),)), $this); ?>
<table width="141" border="0" cellspacing="0" cellpadding="0" summary=" " id="menu_navi">
    <!--ナビ-->
    <tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'index'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./index.php" onMouseOver="naviStyleChange('index', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'index'): ?>onMouseOut="naviStyleChange('index', '#636469')"<?php endif; ?> id="index"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">購入商品一覧</span></a></td></tr>
    <tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
    <tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'settings'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./settings.php" onMouseOver="naviStyleChange('settings', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'settings'): ?>onMouseOut="naviStyleChange('settings', '#636469')"<?php endif; ?> id="settings"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">認証キー設定</span></a></td></tr>
    <tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
    <tr><td class=<?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'log'): ?>"navi"<?php else: ?>"navi-on"<?php endif; ?>><a href="./log.php" onMouseOver="naviStyleChange('log', '#a5a5a5')" <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_subno'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 'log'): ?>onMouseOut="naviStyleChange('log', '#636469')"<?php endif; ?> id="log"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/icon.jpg" width="15" height="9" alt="" border="0"><span class="navi_text">ログ管理</span></a></td></tr>
    <tr><td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_line.gif" width="140" height="2" alt=""></td></tr>
    <!--ナビ-->
</table>