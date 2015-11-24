<?php /* Smarty version 2.6.13, created on 2015-11-14 00:03:00
         compiled from /vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 24, false),array('modifier', 'escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 30, false),array('modifier', 'number_format', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 36, false),array('modifier', 'default', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 36, false),array('modifier', 'sfTrimURL', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 52, false),array('modifier', 'sfGetChecked', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/login.tpl', 55, false),)), $this); ?>
<!--▼ログインここから-->
<h2>
  <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/title_login.jpg" width="166" height="35" alt="ログイン" />
</h2>
  <div id="loginarea">
    <form name="login_form" id="login_form" method="post" action="<?php echo ((is_array($_tmp=@SSL_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
frontparts/login_check.php" onsubmit="return fnCheckLogin('login_form')">
      <input type="hidden" name="mode" value="login" />
      <input type="hidden" name="<?php echo ((is_array($_tmp=@TRANSACTION_ID_NAME)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['transactionid'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" />
      <input type="hidden" name="url" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
      <div id="login">
        <?php if (((is_array($_tmp=$this->_tpl_vars['tpl_login'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <p>ようこそ<br />
          <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_name2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
 様 <br />
          <?php if (((is_array($_tmp=@USE_POINT)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) === true): ?>
            所持ポイント：<span class="price"> <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_user_point'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, 0) : smarty_modifier_default($_tmp, 0)); ?>
 pt</span>
          <?php endif; ?>
        </p>
          <?php if (! ((is_array($_tmp=$this->_tpl_vars['tpl_disable_logout'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
        <p class="btn">
          <a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" onclick="fnFormModeSubmit('login_form', 'logout', '', ''); return false;">
            <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/header/logout.gif" width="44" height="21" alt="ログアウト" />
          </a>
        </p>
       </div>
          <?php endif; ?>
        <?php else: ?>
        <p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/icon_mail.gif" width="40" height="21" alt="メールアドレス" /><input type="text" name="login_email" class="box96" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_email'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" style="ime-mode: disabled;"/></p>
        <p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/icon_pw.gif" width="40" height="22" alt="パスワード" /><input type="password" name="login_pass" class="box96" /></p>
      </div>
        <p class="mini">
          <a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@SSL_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/index.php" onclick="win01('<?php echo ((is_array($_tmp=((is_array($_tmp=@SSL_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/forgot/index.php','forget','600','400'); return false;" target="_blank">パスワードを忘れた方はこちら</a>
        </p>
        <p>
          <input type="checkbox" name="login_memory" value="1" <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['tpl_login_memory'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetChecked', true, $_tmp, 1) : SC_Utils_Ex::sfGetChecked($_tmp, 1)); ?>
 />
          <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/header/memory.gif" width="18" height="9" alt="記憶" />
        </p>
        <p class="btn">
          <input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_login_on.gif',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_login.gif',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_login.gif" class="box51" alt="ログイン" name="subm" />
        </p>
        <?php endif; ?>
        <!--ログインフォーム-->
    </form>
  </div>
<!--▲ログインここまで-->