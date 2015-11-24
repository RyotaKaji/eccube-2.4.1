<?php /* Smarty version 2.6.13, created on 2015-11-19 18:45:54
         compiled from products/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'products/index.tpl', 60, false),array('modifier', 'escape', 'products/index.tpl', 60, false),array('modifier', 'sfGetErrorColor', 'products/index.tpl', 105, false),array('modifier', 'sfRmDupSlash', 'products/index.tpl', 317, false),array('modifier', 'default', 'products/index.tpl', 319, false),array('modifier', 'sfTrimURL', 'products/index.tpl', 330, false),array('modifier', 'number_format', 'products/index.tpl', 340, false),array('modifier', 'sfTrim', 'products/index.tpl', 349, false),array('modifier', 'count', 'products/index.tpl', 366, false),array('function', 'html_options', 'products/index.tpl', 120, false),array('function', 'html_checkboxes', 'products/index.tpl', 125, false),)), $this); ?>

<script type="text/javascript">
// URLの表示非表示切り替え
function lfnDispChange(){
	inner_id = 'switch';

	cnt = form1.item_cnt.value;
	
	if(document.getElementById('disp_url1').style.display == 'none'){
		for (i = 1; i <= cnt; i++) {
			disp_id = 'disp_url'+i;
			document.getElementById(disp_id).style.display="";
	
			disp_id = 'disp_cat'+i;
			document.getElementById(disp_id).style.display="none";
			
			document.getElementById(inner_id).innerHTML = '	URL <a href="#" onClick="lfnDispChange();"> <FONT Color="#FFFF99"> >> カテゴリ表示</FONT></a>';
		}
	}else{
		for (i = 1; i <= cnt; i++) {
			disp_id = 'disp_url'+i;
			document.getElementById(disp_id).style.display="none";
	
			disp_id = 'disp_cat'+i;
			document.getElementById(disp_id).style.display="";
			
			document.getElementById(inner_id).innerHTML = '	カテゴリ <a href="#" onClick="lfnDispChange();"> <FONT Color="#FFFF99"> >> URL表示</FONT></a>';
		}
	}

}

</script>

<!--★★メインコンテンツ★★-->
<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
<form name="search_form" id="search_form" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<input type="hidden" name="mode" value="search">
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
 if (((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'campaign_id' || ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search_mode'): ?>
<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php endif;  endforeach; endif; unset($_from); ?>
	<tr valign="top">
		<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/navi_bg.gif" height="402">
			<!-- サブナビ -->
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_subnavi'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>
		<td class="mainbg">
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
						<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
							<tr>
								<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_top.gif" width="678" height="7" alt=""></td>
							</tr>
							<tr>
								<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left.gif" width="22" height="12" alt=""></td>
								<td bgcolor="#636469" width="638" class="fs14n"><span class="white"><!--コンテンツタイトル-->検索条件設定</span></td>
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
						<!--検索条件設定テーブルここから-->
						<table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
							<tr class="fs12">
								<td bgcolor="#f2f1ec" width="110">商品ID</td>
								<td bgcolor="#ffffff" width="194"><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><input type="text" name="search_product_id" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" class="box30" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
"/></td>
								<td bgcolor="#f2f1ec" width="110">規格名称</td>
								<td bgcolor="#ffffff" width="195"><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_product_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><input type="text" name="search_product_class_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_product_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" class="box30"style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_product_class_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" /></td>
							</tr>
							<tr class="fs12">
								<td bgcolor="#f2f1ec" width="110">商品コード</td>
								<td bgcolor="#ffffff" width="194"><input type="text" name="search_product_code" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" class="box30" /></td>
								<td bgcolor="#f2f1ec" width="110">商品名</td>
								<td bgcolor="#ffffff" width="195"><input type="text" name="search_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['search_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" size="30" class="box30" /></td>
							</tr>
							<tr class="fs12">
								<td bgcolor="#f2f1ec" width="110">カテゴリ</td>
								<td bgcolor="#ffffff" width="194">
									<select name="search_category_id" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['search_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>">
									<option value="">選択してください</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrCatList'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>
								</td>
								<td bgcolor="#f2f1ec" width="110">種別</td>
								<td bgcolor="#ffffff" width="195">
									<?php echo smarty_function_html_checkboxes(array('name' => 'search_status','options' => ((is_array($_tmp=$this->_tpl_vars['arrDISP'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

								</td>
							</tr class="fs12">
							<tr class="fs12n">
								<td bgcolor="#f2f1ec" width="110">登録・更新日</td>
								<td bgcolor="#ffffff" width="499" colspan=3>
									<span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
									<span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>		
									<select name="search_startyear" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">----</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartYear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>年
									<select name="search_startmonth" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">--</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>月
									<select name="search_startday" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_startyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">--</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrStartDay'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_startday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>日〜
									<select name="search_endyear" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">----</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndYear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>年
									<select name="search_endmonth" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">--</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndMonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endmonth'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>月
									<select name="search_endday" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr']['search_endyear'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
									<option value="">--</option>
									<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrEndDay'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_endday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

									</select>日
								</td>
							</tr>
							<tr class="fs12n">
								<td bgcolor="#f2f1ec" width="110">ステータス</td>
								<td bgcolor="#ffffff" width="499" colspan="3">
								<?php echo smarty_function_html_checkboxes(array('name' => 'search_product_flag','options' => ((is_array($_tmp=$this->_tpl_vars['arrSTATUS'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_product_flag'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

								</td>
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
										<td class="fs12n">検索結果表示件数
											<?php $this->assign('key', 'search_page_max'); ?>
											<span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
											<select name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
">
											<?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPageMax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['search_page_max'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

											</select> 件
										</td>
										<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="10" height="1" alt=""></td>
										<td><input type="image" name="subm" onMouseover="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_search_on.jpg',this)" onMouseout="chgImgImageSubmit('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_search.jpg',this)" src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_search.jpg" width="123" height="24" alt="この条件で検索する" border="0"></td>
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
						<!--検索条件設定テーブルここまで-->
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
		</td>
	</tr>
</form>	
</table>
<!--★★メインコンテンツ★★-->

<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrErr'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) == 0 && ( ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'search' || ((is_array($_tmp=$_POST['mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 'delete' )): ?>

<!--★★検索結果一覧★★-->
<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
<form name="form1" id="form1" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<input type="hidden" name="mode" value="search">
<input type="hidden" name="product_id" value="">
<input type="hidden" name="category_id" value="">
<?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrHidden'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['key'] => $this->_tpl_vars['item']):
?>
<input type="hidden" name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['item'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php endforeach; endif; unset($_from); ?>	
	<tr><td colspan="2"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/search_line.jpg" width="878" height="12" alt=""></td></tr>
	<tr bgcolor="cbcbcb">
		<td>
		<table border="0" cellspacing="0" cellpadding="0" summary=" ">
			<tr>
				<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/search_left.gif" width="19" height="22" alt=""></td>
				<td>
				<!--検索結果-->
				<table border="0" cellspacing="0" cellpadding="0" summary=" ">
					<tr>
						<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_left_top.gif" width="22" height="5" alt=""></td>
						<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_top_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="5" alt=""></td>
						<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_right_top.gif" width="22" height="5" alt=""></td>
					</tr>
					<tr>
						<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_left_middle.gif" width="22" height="12" alt=""></td>
						<td bgcolor="#393a48" class="white10">検索結果一覧　<span class="reselt"><!--検索結果数--><?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_linemax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
件</span>&nbsp;が該当しました。</td>
						<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_right_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="22" height="8" alt=""></td>
					</tr>
					<tr>
						<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_left_bottom.gif" width="22" height="5" alt=""></td>
						<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_bottom_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="5" alt=""></td>
						<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/reselt_right_bottom.gif" width="22" height="5" alt=""></td>
					</tr>
				</table>
				<!--検索結果-->
				<?php if (((is_array($_tmp=@ADMIN_MODE)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>
				<input type="button" name="subm" value="検索結果をすべて削除" onclick="fnModeSubmit('delete_all','','');" />
				<?php endif; ?>
				</td>
				<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="8" height="1" alt=""></td>
				<td><a href="#" onmouseover="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_csv_on.jpg','btn_csv');" onmouseout="chgImg('<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_csv.jpg','btn_csv');"  onclick="fnModeSubmit('csv','','');" ><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/btn_csv.jpg" width="99" height="22" alt="CSV DOWNLOAD" border="0" name="btn_csv" id="btn_csv"></a></td>
				<td><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="8" height="1" alt=""></td>
				<td><a href="../contents/csv.php?tpl_subno_csv=product"><span class="fs12n"> >> CSV出力項目設定 </span></a></td>
			</tr>
		</table>
		</td>
		<td align="right">
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => ((is_array($_tmp=$this->_tpl_vars['tpl_pager'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)), 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		</td>									
	</tr>
	<tr><td bgcolor="cbcbcb" colspan="2"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/common/_.gif" width="1" height="5" alt=""></td></tr>
</table>

<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
	<tr>
		<td bgcolor="#f0f0f0" align="center">

		<?php if (count ( ((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) ) > 0): ?>		
			<table width="840" border="0" cellspacing="0" cellpadding="0" summary=" ">
				<tr><td height="12"></td></tr>
				<tr>
					<td bgcolor="#cccccc">
					
					<!--検索結果表示テーブル-->
					<table width="840" border="0" cellspacing="1" cellpadding="5" summary=" ">
						<tr bgcolor="#636469" align="center" class="fs12n">
							<td width="50" rowspan="2"><span class="white">商品ID</span></td>
							<td width="90" rowspan="2"><span class="white">商品画像</span></td>
							<td width="90"><span class="white">商品コード</span></td>
							<td width="350"><span class="white">商品名</span></td>
							<td width="60"><span class="white">在庫</span></td>
							<td width="50" rowspan="2"><span class="white">編集</span></td>
							<td width="50" rowspan="2"><span class="white">確認</span></td>
							<?php if (((is_array($_tmp=@OPTION_CLASS_REGIST)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
							<td width="50" rowspan="2"><span class="white">規格</span></td>
							<?php endif; ?>
							<td width="50"><span class="white">削除</span></td>
						</tr>
						<tr bgcolor="#636469" align="center" class="fs12n">
							<td width="90"><span class="white">価格(円)</span></td>
							<td width="430">
								<span class="white"  id="switch">
									カテゴリ <a href="#" onClick="lfnDispChange();"> <FONT Color="#FFFF99"> >> URL表示</FONT></a>
								</span>
							</td>
							<td width="60"><span class="white">種別</span></td>
							<td width="50"><span class="white">複製</span></td>
						</tr>

						<?php unset($this->_sections['cnt']);
$this->_sections['cnt']['name'] = 'cnt';
$this->_sections['cnt']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['cnt']['show'] = true;
$this->_sections['cnt']['max'] = $this->_sections['cnt']['loop'];
$this->_sections['cnt']['step'] = 1;
$this->_sections['cnt']['start'] = $this->_sections['cnt']['step'] > 0 ? 0 : $this->_sections['cnt']['loop']-1;
if ($this->_sections['cnt']['show']) {
    $this->_sections['cnt']['total'] = $this->_sections['cnt']['loop'];
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
						<!--▼商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
						<?php $this->assign('status', ($this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['status'])); ?>
						<tr bgcolor="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPRODUCTSTATUS_COLOR'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="fs12n">
							<td rowspan="2" align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
							<td rowspan="2" align="center">
							<?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['main_list_image'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
								<?php $this->assign('image_path', ($this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['main_list_image'])); ?>
							<?php else: ?>
								<?php $this->assign('image_path', (@NO_IMAGE_DIR)); ?>
							<?php endif; ?>
							<img src="<?php echo ((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
resize_image.php?image=<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['image_path'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfRmDupSlash', true, $_tmp) : SC_Utils_Ex::sfRmDupSlash($_tmp)); ?>
&width=65&height=65">
							</td>
							<td><?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_code'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "-") : smarty_modifier_default($_tmp, "-")); ?>
</td>
							<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
							<td align="center">
														<?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock_unlimited'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == '1'): ?>
							無制限
							<?php else: ?>
							<?php echo ((is_array($_tmp=((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['stock'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)))) ? $this->_run_mod_handler('default', true, $_tmp, "-") : smarty_modifier_default($_tmp, "-")); ?>

							<?php endif; ?>
							</td>
							<td align="center" rowspan="2"><span class="icon_edit"><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product.php'); fnModeSubmit('pre_edit', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >編集</a></span></td>
							<td align="center" rowspan="2"><span class="icon_confirm"><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
&admin=on" target="_blank">確認</a></td>
							<?php if (((is_array($_tmp=@OPTION_CLASS_REGIST)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?>
							<td align="center" rowspan="2"><span class="icon_class"><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product_class.php'); fnModeSubmit('pre_edit', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >規格</a></td>
							<?php endif; ?>
							<td align="center"><span class="icon_delete"><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnSetFormValue('category_id', '<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['category_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
'); fnModeSubmit('delete', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;">削除</a></span></td>
						</tr>
						<tr bgcolor="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrPRODUCTSTATUS_COLOR'][$this->_tpl_vars['status']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" class="fs12n">
							<td align="right">
														<?php if (((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
							<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['price02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('number_format', true, $_tmp) : number_format($_tmp)); ?>

							<?php else: ?>
							-
							<?php endif; ?>
							</td>
							<td>
														<div id="disp_cat<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="display:<?php echo ((is_array($_tmp=$this->_tpl_vars['cat_flg'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
                            <?php $_from = ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['categories'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['categories'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['categories']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['category_id']):
        $this->_foreach['categories']['iteration']++;
?>
                              <?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrCatList'][$this->_tpl_vars['category_id']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrim', true, $_tmp) : SC_Utils_Ex::sfTrim($_tmp)); ?>

                              <?php if (! ((is_array($_tmp=($this->_foreach['categories']['iteration'] == $this->_foreach['categories']['total']))) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br /><?php endif; ?>
                            <?php endforeach; endif; unset($_from); ?>
							</div>

														<div id="disp_url<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" style="display:none">
							<?php echo ((is_array($_tmp=((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfTrimURL', true, $_tmp) : SC_Utils_Ex::sfTrimURL($_tmp)); ?>
/products/detail.php?product_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>

							</div>
							</td>
														<?php $this->assign('key', ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['status'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
							<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrDISP'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
							<td align="center"><span class="icon_copy"><a href="<?php echo ((is_array($_tmp=@URL_DIR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onclick="fnChangeAction('./product.php'); fnModeSubmit('copy', 'product_id', <?php echo ((is_array($_tmp=$this->_tpl_vars['arrProducts'][$this->_sections['cnt']['index']]['product_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
); return false;" >複製</a></span></td>
						</tr>
						<!--▲商品<?php echo ((is_array($_tmp=$this->_sections['cnt']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
-->
						<?php endfor; endif; ?>
						<input type="hidden" name="item_cnt" value="<?php echo count(((is_array($_tmp=$this->_tpl_vars['arrProducts'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))); ?>
">
					</table>
					<!--検索結果表示テーブル-->
					</td>
				</tr>
			</table>
		<?php endif; ?>

		</td>
	</tr>
</form>
</table>		

<!--★★検索結果一覧★★-->		
<?php endif; ?>