<?php /* Smarty version 2.6.13, created on 2015-11-17 17:08:36
         compiled from /vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/news.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/news.tpl', 24, false),array('modifier', 'date_format', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/news.tpl', 31, false),array('modifier', 'escape', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/news.tpl', 39, false),array('modifier', 'nl2br', '/vagrant/workspace/eccube-2.4.1/data/Smarty/templates/default/bloc/news.tpl', 39, false),)), $this); ?>
<div id="newsarea">
  <h2>
    <img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/top/news.jpg" width="400" height="29" alt="新着情報" />
  </h2>

  <p>☆★☆ 新着情報は<a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
rss/index.php" target="_blank">RSS</a>で配信しています。★☆★</p>

<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrNews'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['data']['show'] = true;
$this->_sections['data']['max'] = $this->_sections['data']['loop'];
$this->_sections['data']['step'] = 1;
$this->_sections['data']['start'] = $this->_sections['data']['step'] > 0 ? 0 : $this->_sections['data']['loop']-1;
if ($this->_sections['data']['show']) {
    $this->_sections['data']['total'] = $this->_sections['data']['loop'];
    if ($this->_sections['data']['total'] == 0)
        $this->_sections['data']['show'] = false;
} else
    $this->_sections['data']['total'] = 0;
if ($this->_sections['data']['show']):

            for ($this->_sections['data']['index'] = $this->_sections['data']['start'], $this->_sections['data']['iteration'] = 1;
                 $this->_sections['data']['iteration'] <= $this->_sections['data']['total'];
                 $this->_sections['data']['index'] += $this->_sections['data']['step'], $this->_sections['data']['iteration']++):
$this->_sections['data']['rownum'] = $this->_sections['data']['iteration'];
$this->_sections['data']['index_prev'] = $this->_sections['data']['index'] - $this->_sections['data']['step'];
$this->_sections['data']['index_next'] = $this->_sections['data']['index'] + $this->_sections['data']['step'];
$this->_sections['data']['first']      = ($this->_sections['data']['iteration'] == 1);
$this->_sections['data']['last']       = ($this->_sections['data']['iteration'] == $this->_sections['data']['total']);
?>
  <dl>
    <dt><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_start_date_disp'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('date_format', true, $_tmp, "%Y&#24180;%m&#26376;%d&#26085;") : smarty_modifier_date_format($_tmp, "%Y&#24180;%m&#26376;%d&#26085;")); ?>
</dt>
    <dd>
      <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
      <a href="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
"
        <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['link_method'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '2'): ?>
        target="_blank"
        <?php endif; ?>>
      <?php endif; ?>
      <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

        <?php if (((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>
      </a>
        <?php endif; ?><br />
        <?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrNews'][$this->_sections['data']['index']]['news_comment'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('nl2br', true, $_tmp) : smarty_modifier_nl2br($_tmp)); ?>

     </dd>
  </dl>
<?php endfor; endif; ?>
</div>