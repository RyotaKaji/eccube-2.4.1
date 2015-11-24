<?php /* Smarty version 2.6.13, created on 2015-11-14 00:02:59
         compiled from ./site_main.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', './site_main.tpl', 22, false),array('modifier', 'function_exists', './site_main.tpl', 24, false),array('modifier', 'count', './site_main.tpl', 45, false),array('modifier', 'sfPrintEbisTag', './site_main.tpl', 132, false),array('modifier', 'sfPrintAffTag', './site_main.tpl', 134, false),)), $this); ?>
<body onload="preLoadImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); <?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_onload'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
<?php if (((is_array($_tmp='sfPrintA8Tag')) ? $this->_run_mod_handler('function_exists', true, $_tmp) : function_exists($_tmp)) === TRUE):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => (@MODULE_PATH)."mdl_a8/print_a8_tag.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php echo ((is_array($_tmp=$this->_tpl_vars['GLOBAL_ERR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

<noscript>
  <p>JavaScript を有効にしてご利用下さい.</p>
</noscript>

<a name="top" id="top"></a>

<?php if (((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['header_chk'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 2):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['header_tpl'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<div id="container">

    <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['LeftNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
  <div id="leftcolumn">
          <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['LeftNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['LeftNaviKey'] => $this->_tpl_vars['LeftNaviItem']):
?>
        <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここから-->
          <?php if (((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
            <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

          <?php else: ?>
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
          <?php endif; ?>
        <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['LeftNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここまで-->
      <?php endforeach; endif; unset($_from); ?>
      </div>
  <?php endif; ?>
  
    <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 3): ?>
  <div id="three_maincolumn">
  <?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 2): ?>
  <div id="two_maincolumn">
  <?php elseif (((is_array($_tmp=$this->_tpl_vars['tpl_column_num'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
  <div id="one_maincolumn">
  <?php endif; ?>
        <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainHead'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
      <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainHead'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MainHeadKey'] => $this->_tpl_vars['MainHeadItem']):
?>
        <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここから-->
        <?php if (((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
          <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

        <?php else: ?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['MainHeadItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここまで-->
      <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
        
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_mainpage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        
        <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainFoot'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
      <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['MainFoot'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['MainFootKey'] => $this->_tpl_vars['MainFootItem']):
?>
        <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここから-->
        <?php if (((is_array($_tmp=$this->_tpl_vars['MainFootItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
          <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

        <?php else: ?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['MainFootItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここまで-->
      <?php endforeach; endif; unset($_from); ?>
    <?php endif; ?>
      </div>
  
    <?php if (count(((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['RightNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) > 0): ?>
  <div id="rightcolumn">
          <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['RightNavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['RightNaviKey'] => $this->_tpl_vars['RightNaviItem']):
?>
        <!-- ▼<?php echo ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここから-->
        <?php if (((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
          <?php require_once(SMARTY_CORE_DIR . 'core.smarty_include_php.php');
smarty_core_smarty_include_php(array('smarty_file' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['php_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_assign' => '', 'smarty_once' => false, 'smarty_include_vars' => array()), $this); ?>

        <?php else: ?>
          <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['tpl_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        <?php endif; ?>
        <!-- ▲<?php echo ((is_array($_tmp=$this->_tpl_vars['RightNaviItem']['bloc_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここまで-->
      <?php endforeach; endif; unset($_from); ?>
      </div>
  <?php endif; ?>
  
</div>

<?php if (((is_array($_tmp=$this->_tpl_vars['arrPageLayout']['footer_chk'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != 2):  $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['footer_tpl'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
  endif; ?>

<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_mainpage'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrintEbisTag', true, $_tmp) : sfPrintEbisTag($_tmp)); ?>

<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_conv_page'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPrintAffTag', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['tpl_aff_option'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : sfPrintAffTag($_tmp, ((is_array($_tmp=$this->_tpl_vars['tpl_aff_option'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))); ?>

</body>