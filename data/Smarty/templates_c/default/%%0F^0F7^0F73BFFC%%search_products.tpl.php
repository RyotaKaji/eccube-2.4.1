<?php /* Smarty version 2.6.13, created on 2015-11-14 00:03:00
         compiled from /vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/search_products.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/search_products.tpl', 24, false),array('modifier', 'escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/search_products.tpl', 38, false),array('function', 'html_options', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/search_products.tpl', 34, false),)), $this); ?>
<!--▼検索条件ここから-->
<h2>
  <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/title_search.jpg" width="166" height="35" alt="検索条件" />
</h2>
<div id="searcharea">
  <!--検索フォーム-->
    <form name="search_form" id="search_form" method="get" action="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/list.php">

      <p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/search_cat.gif" width="104" height="10" alt="商品カテゴリから選ぶ" />
        <input type="hidden" name="mode" value="search" />
        <select name="category_id" class="box142">
          <option label="すべての商品" value="">全ての商品</option>
          <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrCatList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

        </select>
      </p>
      <p><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/search_name.gif" width="66" height="10" alt="商品名を入力" /></p>
      <p><input type="text" name="name" class="box142" maxlength="50" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_GET['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" /></p>
      <p class="btn"><input type="image" onmouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_search_on.gif',this)" onmouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_search.gif',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/side/button_search.gif" class="box51" alt="検索" name="search" /></p>
    </form>
</div>
<!--▲検索条件ここまで-->