<?php /* Smarty version 2.6.13, created on 2015-11-19 01:41:28
         compiled from contents/inquiry.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'contents/inquiry.tpl', 76, false),array('modifier', 'escape', 'contents/inquiry.tpl', 116, false),array('function', 'sfSetErrorStyle', 'contents/inquiry.tpl', 129, false),array('function', 'html_radios', 'contents/inquiry.tpl', 130, false),array('function', 'html_radios_ex', 'contents/inquiry.tpl', 157, false),)), $this); ?>
<script type="text/javascript">
<!--
	function func_check() {
		res = confirm('登録します。宜しいですか？');
		if( res == true ) {
			return true;
		}
		return false;
	}
		
		
	function func_disp( no ){

		ml = document.form1.elements['question[' + no + '][kind]'];
		len = ml.length;

   		var flag = 0;
		
		for( i = 0; i < len ; i++) {
			
    		td = document.getElementById("TD" + no);
    				
	    	if ( ml[i].checked ){
	    		if ( (ml[i].value == 3) || (ml[i].value == 4) ) {
	    			td.style.display = 'block';
	    		} else {
		    		td.style.display = 'none';
	    		}
				flag = 1;
	    	} 
		
		}

		if ( flag == 0 ){
			td.style.display = 'none';
		}
		
	}
	
	function delete_check() {
		res = confirm('アンケートを削除しても宜しいですか？');
		if(res == true) {
			return true;
		}
		return false;
	}
// -->
</script>

<!--★★メインコンテンツ★★-->
<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
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
		<td class="mainbg" >
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
						
						<!--登録テーブルここから-->
						<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
							<tr>
								<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_top.gif" width="678" height="7" alt=""></td>
							</tr>
							<tr>
								<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left.gif" width="22" height="12" alt=""></td>
								<td bgcolor="#636469" width="638" class="fs14n"><span class="white"><!--コンテンツタイトル--><?php if (((is_array($_tmp=$this->_tpl_vars['QUESTION_ID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>修正<?php else: ?>新規<?php endif; ?>登録</span></td>
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
						
						<!--▼FORM-->
						<table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
						<form name="form1" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?mode=regist" onSubmit="return func_check(); false;">
						<input type="hidden" name="question_id" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['QUESTION_ID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
							
							<?php if (((is_array($_tmp=$this->_tpl_vars['MESSAGE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>
							<tr>
								<td height="20" class="fs14n">
									<span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['MESSAGE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
								</td>
							</tr>
							<?php endif; ?>
							<tr class="fs12n">
								<td width="140" bgcolor="#f2f1ec">稼働・非稼働<span class="red">*</span></td>
								<td width="637" bgcolor="#ffffff">
								<span <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['active'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>>
								<?php echo smarty_function_html_radios(array('name' => 'active','options' => ((is_array($_tmp=$this->_tpl_vars['arrActive'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$_POST['active'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

								</span>
								<?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['active'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR']['active'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
								</td>
							</tr>
							<tr class="fs12n">
								<td width="140" bgcolor="#f2f1ec">アンケートタイトル<span class="red">*</span></td>
								<td width="637" bgcolor="#ffffff"><input type="text" name="title" size="70" class="box70"  maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>>
									<?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR']['title'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
								</td>
							</tr>
								<tr class="fs12n">
								<td width="140" bgcolor="#f2f1ec">アンケート内容<span class="red">*</span></td>
								<td width="637" bgcolor="#ffffff"><textarea name="contents" cols="60" rows="4" class="area60" wrap="physical" <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['contents'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>><?php echo ((is_array($_tmp=$_POST['contents'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</textarea>
								<?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['contents'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR']['contents'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?></td>
							</tr>		
							<?php unset($this->_sections['question']);
$this->_sections['question']['name'] = 'question';
$this->_sections['question']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['cnt_question'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['question']['show'] = true;
$this->_sections['question']['max'] = $this->_sections['question']['loop'];
$this->_sections['question']['step'] = 1;
$this->_sections['question']['start'] = $this->_sections['question']['step'] > 0 ? 0 : $this->_sections['question']['loop']-1;
if ($this->_sections['question']['show']) {
    $this->_sections['question']['total'] = $this->_sections['question']['loop'];
    if ($this->_sections['question']['total'] == 0)
        $this->_sections['question']['show'] = false;
} else
    $this->_sections['question']['total'] = 0;
if ($this->_sections['question']['show']):

            for ($this->_sections['question']['index'] = $this->_sections['question']['start'], $this->_sections['question']['iteration'] = 1;
                 $this->_sections['question']['iteration'] <= $this->_sections['question']['total'];
                 $this->_sections['question']['index'] += $this->_sections['question']['step'], $this->_sections['question']['iteration']++):
$this->_sections['question']['rownum'] = $this->_sections['question']['iteration'];
$this->_sections['question']['index_prev'] = $this->_sections['question']['index'] - $this->_sections['question']['step'];
$this->_sections['question']['index_next'] = $this->_sections['question']['index'] + $this->_sections['question']['step'];
$this->_sections['question']['first']      = ($this->_sections['question']['iteration'] == 1);
$this->_sections['question']['last']       = ($this->_sections['question']['iteration'] == $this->_sections['question']['total']);
?>
							<tr class="fs12n">
								<td width="140" bgcolor="#f2f1ec">質問<?php echo ((is_array($_tmp=$this->_sections['question']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  if (((is_array($_tmp=$this->_sections['question']['iteration'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == 1): ?><span class="red">*</span><?php endif; ?></td>
								<td width="637" bgcolor="#ffffff">
								<input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][name]" size="70" class="box70" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>>
								<?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
								</td>
							</tr>
							<tr class="fs12n" bgcolor="#ffffff">
								<td colspan="2">
								<span style=background-color:"<?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR_COLOR']['question'][$this->_sections['question']['index']]['kind'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
								<?php echo smarty_function_html_radios_ex(array('onClick' => "func_disp(".($this->_sections['question']['index']).")",'name' => "question[".($this->_sections['question']['index'])."][kind]",'options' => ($this->_tpl_vars['arrQuestion']),'selected' => ($_POST['question'][$this->_sections['question']['index']]['kind'])), $this);?>

								</span>
								<?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['kind'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?><br><span class="red"><?php echo ((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['kind'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span><?php endif; ?>
								</td>
							</tr>
							<tr class="fs12n" bgcolor="#ffffff"><td colspan="2">
								<table id="TD<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
								<tr class="fs12n" bgcolor="#ffffff">
									<td colspan="2">1 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][0]" size="40" class="box40" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['0'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['kind'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>>　2 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][1]" size="40" class="box40" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['1'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" <?php if (((is_array($_tmp=$this->_tpl_vars['ERROR']['question'][$this->_sections['question']['index']]['kind'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>></td>
								</tr>
								<tr class="fs12n" bgcolor="#ffffff">
									<td colspan="2">3 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][2]" size="40" class="box40" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['2'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">　4 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][3]" size="40" class="box40" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['3'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></td>
								</tr>
								<tr class="fs12n" bgcolor="#ffffff">
									<td colspan="2">5 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][4]" size="40" class="box40" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['4'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">　6 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][5]" size="40" class="box40" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['5'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></td>
								</tr>
								<tr class="fs12n" bgcolor="#ffffff">
									<td colspan="2">7 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][6]" size="40" class="box40" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['6'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">　8 <input type="text" name="question[<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
][option][7]" size="40" class="box40" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$_POST['question'][$this->_sections['question']['index']]['option']['7'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"></td>
								</tr>
								</table>
							</td></tr>
							<?php endfor; endif; ?>
						</table>
						<!--▲FORM-->
						
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
										<td>
											<input type="submit" name="subm1" value="アンケートを<?php if (((is_array($_tmp=$this->_tpl_vars['QUESTION_ID'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))): ?>修正<?php else: ?>作成<?php endif; ?>" />&nbsp;&nbsp;<input type="reset" value="内容をクリア" />
										</td>
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
						
						<table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
							<tr>
								<td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_top.gif" width="678" height="7" alt=""></td>
							</tr>
							<tr>
								<td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left.gif" width="22" height="12" alt=""></td>
								<td bgcolor="#636469" width="638" class="fs14n"><span class="white"><!--コンテンツタイトル-->登録済みアンケート</span></td>
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

						<!--▼FORM-->
						<table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
						<form name="form2" method="post" action="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['smaryt']['server']['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
							<tr class="fs12n" bgcolor="#f2f1ec" align="center">
								<td width="42">編集</td>
								<td width="80">登録日</td>
								<td width="280">アンケートタイトル</td>
								<td width="80">ページ参照</td>
								<td width="80">結果取得</td>
								<td width="42">削除</td>
							</tr>
							<?php unset($this->_sections['data']);
$this->_sections['data']['name'] = 'data';
$this->_sections['data']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['list_data'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
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
							<tr bgcolor="#FFFFFF" class="fs12" <?php if (((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) == ((is_array($_tmp=$_REQUEST['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))):  echo SC_Utils_Ex::sfSetErrorStyle(array(), $this); endif; ?>>
								<td align="center" class="main"><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?question_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">編集</a></td>
								<td align="center"><?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['disp_date'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
								<td><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</td>
								<td align="center"><a href="<?php echo ((is_array($_tmp=@SITE_URL)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
inquiry/index.php?question_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" target="_blank">参照</a></td>
								<td align="center"><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?mode=csv&question_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">download</a></td>
								<td align="center"><a href="<?php echo ((is_array($_tmp=((is_array($_tmp=$_SERVER['PHP_SELF'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
?mode=delete&question_id=<?php echo ((is_array($_tmp=$this->_tpl_vars['list_data'][$this->_sections['data']['index']]['question_id'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" onClick="return delete_check()">削除</a></td>
							</tr>
							<?php endfor; endif; ?>
						</form>
						</table>
						<!--▲FORM-->
						
						<!--登録テーブルここまで-->
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
				
<script type="text/javascript">
<!--
	<?php unset($this->_sections['question']);
$this->_sections['question']['name'] = 'question';
$this->_sections['question']['loop'] = is_array($_loop=((is_array($_tmp=$this->_tpl_vars['cnt_question'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['question']['show'] = true;
$this->_sections['question']['max'] = $this->_sections['question']['loop'];
$this->_sections['question']['step'] = 1;
$this->_sections['question']['start'] = $this->_sections['question']['step'] > 0 ? 0 : $this->_sections['question']['loop']-1;
if ($this->_sections['question']['show']) {
    $this->_sections['question']['total'] = $this->_sections['question']['loop'];
    if ($this->_sections['question']['total'] == 0)
        $this->_sections['question']['show'] = false;
} else
    $this->_sections['question']['total'] = 0;
if ($this->_sections['question']['show']):

            for ($this->_sections['question']['index'] = $this->_sections['question']['start'], $this->_sections['question']['iteration'] = 1;
                 $this->_sections['question']['iteration'] <= $this->_sections['question']['total'];
                 $this->_sections['question']['index'] += $this->_sections['question']['step'], $this->_sections['question']['iteration']++):
$this->_sections['question']['rownum'] = $this->_sections['question']['iteration'];
$this->_sections['question']['index_prev'] = $this->_sections['question']['index'] - $this->_sections['question']['step'];
$this->_sections['question']['index_next'] = $this->_sections['question']['index'] + $this->_sections['question']['step'];
$this->_sections['question']['first']      = ($this->_sections['question']['iteration'] == 1);
$this->_sections['question']['last']       = ($this->_sections['question']['iteration'] == $this->_sections['question']['total']);
?>
		func_disp(<?php echo ((is_array($_tmp=$this->_sections['question']['index'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
);
	<?php endfor; endif; ?>	
//-->
</script>
