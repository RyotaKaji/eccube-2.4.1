<?php /* Smarty version 2.6.13, created on 2015-11-14 00:03:00
         compiled from /vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 23, false),array('modifier', 'sfRmDupSlash', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 38, false),array('modifier', 'escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 38, false),array('modifier', 'sfPreTax', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 50, false),array('modifier', 'number_format', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 50, false),array('modifier', 'nl2br', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 56, false),array('modifier', 'count', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/best5.tpl', 61, false),)), $this); ?>
<!--▼おすすめ情報ここから-->
<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
<div id="recomendarea">
  <h2>
    <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/top/osusume.jpg" width="400" height="29" alt="おすすめ情報" />
  </h2>
  <?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['step'] = ((int)2) == 0 ? 1 : (int)2;
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = min(ceil(($this->_sections['cnt']['step'] > 0 ? $this->_sections['cnt']['loop'] - $this->_sections['cnt']['start'] : $this->_sections['cnt']['start']+1)/abs($this->_sections['cnt']['step'])), $this->_sections['cnt']['max']);
    if ($this->_sections['cnt']['total'] == 0)
        $this->_sections['cnt']['show'] = false;
} else
    $this->_sections['cnt']['total'] = 0;
if ($this->_sections['cnt']['show']):

            for ($this->_sections['cnt']['index'] = $this->_sections['cnt']['start'], $this->_sections['cnt']['iteration'] = 1;
                 $this->_sections['cnt']['iteration'] <= $this->_sections['cnt']['total'];
                 $this->_sections['cnt']['index'] += $this->_sections['cnt']['step'], $this->_sections['cnt']['iteration']++):
$this->_sections['cnt']['rownum'] = $this->_sections['cnt']['iteration'];
$this->_sections['cnt']['index_prev'] = $this->_sections['cnt']['index'] - $this->_sections['cnt']['step'];
$this->_sections['cnt']['index_next'] = $this->_sections['cnt']['index'] + $this->_sections['cnt']['step'];
$this->_sections['cnt']['first']      = ($this->_sections['cnt']['iteration'] == 1);
$this->_sections['cnt']['last']       = ($this->_sections['cnt']['iteration'] == $this->_sections['cnt']['total']);
?>
  <div class="recomendblock">
    <div class="recomendleft">
    <?php if (((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
      <?php $this->assign('image_path', ($this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['main_list_image'])); ?>
    <?php else: ?>
      <?php $this->assign('image_path', (@NO_IMAGE_DIR)); ?>
    <?php endif; ?>

      <a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
        <img src="<?php echo ((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfRmDupSlash', true, $_tmp) : SC_Utils_Ex::sfRmDupSlash($_tmp)); ?>
&amp;width=48&amp;height=48" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
      </a>

      <h3>
        <a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
      </h3>

<?php $this->assign('price01', ($this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['price01_min']));  $this->assign('price02', ($this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['price02_min'])); ?>

      <p>価格<span class="mini">(税込)</span>：<span class="price">
<?php if (((is_array($_tmp=$this->_tpl_vars['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?>
  <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPreTax', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPreTax($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

<?php else: ?>
  <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPreTax', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPreTax($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

<?php endif; ?>円
        </span>
      </p>
      <p class="mini"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_sections['cnt']['index']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
    </div>

    <div class="recomendright">
      <?php $this->assign('cnt2', ($this->_sections['cnt']['iteration']*$this->_sections['cnt']['step']-1)); ?>
      <?php if (((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('count', true, $_tmp) : count($_tmp)) > 0): ?>
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
          <?php $this->assign('image_path', ($this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['main_list_image'])); ?>
        <?php else: ?>
          <?php $this->assign('image_path', (@NO_IMAGE_DIR)); ?>
        <?php endif; ?>

      <a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
        <img src="<?php echo ((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfRmDupSlash', true, $_tmp) : SC_Utils_Ex::sfRmDupSlash($_tmp)); ?>
&amp;width=48&amp;height=48" alt="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" />
      </a>

      <h3>
      <a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</a>
      </h3>

<?php $this->assign('price01', ($this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['price01_min']));  $this->assign('price02', ($this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['price02_min'])); ?>

      <p>価格<span class="mini">(税込)</span>：<span class="price">
<?php if (((is_array($_tmp=$this->_tpl_vars['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?>
  <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPreTax', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPreTax($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

<?php else: ?>
  <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfPreTax', true, $_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) : SC_Utils_Ex::sfPreTax($_tmp, ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), ((is_array($_tmp=$this->_tpl_vars['arrInfo']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

<?php endif; ?>円</span>
      </p>

      <p class="mini"><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrBestProducts'][$this->_tpl_vars['cnt2']]['comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>
</p>
      <?php endif; ?>
    </div>
  </div>
  <?php endfor; endif; ?>
</div>
<?php endif; ?>
<!--▲おすすめ情報ここまで-->