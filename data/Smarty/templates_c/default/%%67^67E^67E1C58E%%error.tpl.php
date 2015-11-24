<?php /* Smarty version 2.6.13, created on 2015-11-17 02:57:31
         compiled from error.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'error.tpl', 27, false),)), $this); ?>
 <!--▼CONTENTS-->
<div id="under02column">
  <div id="under02column_error">
    <div class="messagearea">
      <!--★エラーメッセージ-->
      <p class="error"><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_error'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</p>
    </div>

    <div class="tblareabtn">
    <?php if (((is_array($_tmp=$this->_tpl_vars['return_top'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
      <a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
index.php" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_toppage_on.gif','b_toppage');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_toppage.gif','b_toppage');"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_toppage.gif" width="150" height="30" alt="トップページへ" border="0" name="b_toppage" /></a>
    <?php else: ?>
      <a href="javascript:history.back()" onmouseOver="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_back_on.gif','b_back');" onmouseOut="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_back.gif','b_back');"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/b_back.gif" width="150" height="30" alt="戻る" name="b_back" id="b_back" /></a>
    <?php endif; ?>
    </div>
  </div>
</div>
<!--▲CONTENTS-->