<?php /* Smarty version 2.6.13, created on 2015-11-19 18:46:18
         compiled from basis/seo.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/seo.tpl', 26, false),array('modifier', 'escape', 'basis/seo.tpl', 26, false),)), $this); ?>
<!--★★メインコンテンツ★★-->
<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
<form name="form1" id="form1" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" onSubmit="return window.confirm('登録しても宜しいですか');">
<input type="hidden" name="mode" value="confirm">
<input type="hidden" name="page_id" value="">
	<tr valign="top">
		<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_bg.gif" height="402">
			<!--▼SUB NAVI-->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_subnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<!--▲SUB NAVI-->
		</td>
		<td class="mainbg">
			<!--▼登録テーブルここから-->
			<table width="737" border="0" cellspacing="0" cellpadding="0" summary=" ">
				<!--メインエリア-->
				<tr>
					<td align="center">
						<table width="706" border="0" cellspacing="0" cellpadding="0" summary=" ">
							<tr><td height="14"></td></tr>
							<tr>
								<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_top.jpg" width="706" height="14" alt=""></td>
							</tr>
							<tr>
								<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_left.jpg"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="14" height="1" alt=""></td>
								<td bgcolor="#cccccc">
								
								<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrPageData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>
									<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrPageData'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['page'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['page']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
        $this->_foreach['page']['iteration']++;
?>
									<input type="hidden" name="disp_flg<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['disp_flg'][$this->_tpl_vars['item']['page_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
									<!-- <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここから -->
									<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
										<tr>
											<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_top.gif" width="678" height="7" alt=""></td>
										</tr>
										<tr>
											<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left.gif" width="22" height="12" alt=""></td>
											<td bgcolor="#636469" width="638" class="fs14n"><span class="white" style="float:left"><!--コンテンツタイトル--><?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['url'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><a href="#" id="switch<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="float:right " onClick="fnDispChange('disp<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'switch<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'disp_flg<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
');"><?php if (((is_array($_tmp=$this->_tpl_vars['disp_flg'][$this->_tpl_vars['item']['page_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ""): ?><FONT Color="#FFFF99"> >> 非表示</FONT><?php else: ?><FONT Color="#FFFF99"> << 表示</FONT><?php endif; ?></a></td>
											<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_right_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="18" height="1" alt=""></td>
										</tr>
										<tr>
											<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_bottom.gif" width="678" height="7" alt=""></td>
										</tr>
										<tr>
											<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_bar.jpg" width="678" height="10" alt=""></td>
										</tr>
									</table>
									
									<div id="disp<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="display:<?php echo ((is_array($_tmp=$this->_tpl_vars['disp_flg'][$this->_tpl_vars['item']['page_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
										<table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
											<tr>
												<td bgcolor="#f2f1ec" width="160" class="fs12n">メタタグ:Author</td>
												<td bgcolor="#ffffff" width="557" class="fs10n">
												<span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['author'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
												<input type="text" name="meta[<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][author]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['author'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style='<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['author'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>' /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
											</tr>
											<tr>
												<td bgcolor="#f2f1ec" width="160" class="fs12n">メタタグ:Description</td>
												<td bgcolor="#ffffff" width="557" class="fs10n">
												<span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
												<input type="text" name="meta[<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][description]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style='<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['description'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>' /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
											</tr>
											<tr>
												<td bgcolor="#f2f1ec" width="160" class="fs12n">メタタグ:Keywords</td>
												<td bgcolor="#ffffff" width="557" class="fs10n">
												<span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['keyword'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
												<input type="text" name="meta[<?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][keyword]" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item']['keyword'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style='<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['item']['page_id']]['keyword'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>' /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
											</tr>
										</table>
		
										<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
											<tr>
												<td bgcolor="#cccccc"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="5" alt=""></td>
												<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/tbl_top.gif" width="676" height="7" alt=""></td>
												<td bgcolor="#cccccc"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="5" alt=""></td>
											</tr>
											<tr>
												<td bgcolor="#cccccc"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="10" alt=""></td>
												<td bgcolor="#e9e7de" align="center">
												<table border="0" cellspacing="0" cellpadding="0" summary=" ">
													<tr>
														<td><input type="image" onMouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_regist_on.jpg',this)" onMouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_regist.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_regist.jpg" width="123" height="24" alt="この内容で登録する" border="0" name="subm" onclick="document.form1.page_id.value = <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
;"></td>
													</tr>
												</table>
												</td>
												<td bgcolor="#cccccc"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="10" alt=""></td>
											</tr>
											<tr>
												<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/tbl_bottom.gif" width="678" height="8" alt=""></td>
											</tr>
										</table>
		
										<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
											<tr><td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_bar.jpg" width="678" height="10" alt=""></td></tr>
										</table>
									</div>
									<!-- <?php echo ((is_array($_tmp=$this->_tpl_vars['item']['page_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
 ここまで -->
									<?php endforeach; endif; unset($_from); ?>
								<?php else: ?>
									<table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
										<tr>
											<td bgcolor="#ffffff" width="" height="300" class="fs12n" align="center">
												表示するデータがありません
											</td>
										</tr>
									</table>
								<?php endif; ?>

								</td>
								<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_right.jpg"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="14" height="1" alt=""></td>
							</tr>
							<tr>
								<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/main_bottom.jpg" width="706" height="14" alt=""></td>
							</tr>
							<tr><td height="30"></td></tr>
						</table>
					</td>
				</tr>
				<!--メインエリア-->
			</table>
			<!--▲登録テーブルここまで-->
		</td>
	</tr>
</form>
</table>
<!--★★メインコンテンツ★★-->