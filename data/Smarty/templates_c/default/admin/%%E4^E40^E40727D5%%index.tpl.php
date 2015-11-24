<?php /* Smarty version 2.6.13, created on 2015-11-19 18:45:57
         compiled from basis/index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'script_escape', 'basis/index.tpl', 27, false),array('modifier', 'escape', 'basis/index.tpl', 73, false),array('modifier', 'sfGetErrorColor', 'basis/index.tpl', 183, false),array('function', 'html_options', 'basis/index.tpl', 111, false),array('function', 'html_checkboxes', 'basis/index.tpl', 200, false),array('function', 'html_radios', 'basis/index.tpl', 216, false),)), $this); ?>
<!--★★メインコンテンツ★★-->
<table width="878" border="0" cellspacing="0" cellpadding="0" summary=" ">
<form name="form1" id="form1" method="post" action="./index.php">
<input type="hidden" name="mode" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['tpl_mode'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
">
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
                                <table width="678" border="0" cellspacing="0" cellpadding="0" summary=" ">
                                    <tr>
                                        <td colspan="3"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_top.gif" width="678" height="7" alt=""></td>
                                    </tr>
                                    <tr>
                                        <td background="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left_bg.gif"><img src="<?php echo ((is_array($_tmp=$this->_tpl_vars['TPL_DIR'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
img/contents/contents_title_left.gif" width="22" height="12" alt=""></td>
                                        <td bgcolor="#636469" width="638" class="fs14n"><span class="white"><!--コンテンツタイトル-->SHOPマスタ登録</span></td>
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

                                <table width="678" border="0" cellspacing="1" cellpadding="8" summary=" ">
                                    <tr>
                                        <td bgcolor="#f2f1ec" colspan="2" class="fs12n">▼基本情報</td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">会社名</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="company_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['company_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">会社名（カナ）</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="company_kana" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['company_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">店名<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="shop_name" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_name'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">店名（カナ）</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="shop_kana" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['shop_kana'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="160">郵便番号<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        〒 <input type="text" name="zip01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="3" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> - <input type="text" name="zip02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="4"  size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['zip02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" />
                                        <input type="button" name="address_input" value="住所入力" onclick="fnCallAddress('<?php echo ((is_array($_tmp=@URL_INPUT_ZIP)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
', 'zip01', 'zip02', 'pref', 'addr01');" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12">SHOP住所<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537">
                                        <table width="537" border="0" cellspacing="0" cellpadding="0" summary=" ">
                                            <tr>
                                                <td>
                                                    <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                                    <select name="pref" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" >
                                                    <option value="" selected="selected">都道府県を選択</option>
                                                    <?php echo smarty_function_html_options(array('options' => ((is_array($_tmp=$this->_tpl_vars['arrPref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['pref'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr><td height="5"></td></tr>
                                            <tr class="fs10n">
                                                <td>
                                                <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                                <input type="text" name="addr01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span><br />
                                                <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS1)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                                            </tr>
                                            <tr><td height="5"></td></tr>
                                            <tr class="fs10n">
                                                <td>
                                                <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                                <input type="text" name="addr02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
"  maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['addr02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span><br />
                                                <?php echo ((is_array($_tmp=@SAMPLE_ADDRESS2)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</td>
                                            </tr>
                                        </table>
                                        </td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="160">TEL</td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="tel01" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> -
                                        <input type="text" name="tel02" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> -
                                        <input type="text" name="tel03" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['tel03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tel01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /></td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="160">FAX</td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="fax01" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> -
                                        <input type="text" name="fax02" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> -
                                        <input type="text" name="fax03" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrForm']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="6" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['fax03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>"/></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">店舗営業時間</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="business_hour" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['business_hour'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">商品注文受付<br>メールアドレス<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="email01" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email01'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">問い合わせ受付<br>メールアドレス<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="email02" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email02'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>"/><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">メール送信元<br>メールアドレス<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="email03" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email03'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>"/><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">送信エラー受付<br>メールアドレス<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="email04" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="60" class="box60" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['email04'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>"/><span class="red"> （上限<?php echo ((is_array($_tmp=@STEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span></td>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">取扱商品</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <?php $this->assign('key', 'good_traded'); ?>
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea><span class="red"> （上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span>
                                    </tr>
                                    <tr>
                                        <td bgcolor="#f2f1ec" width="180" class="fs12n">メッセージ</td>
                                        <td bgcolor="#ffffff" width="537" class="fs10n">
                                        <?php $this->assign('key', 'message'); ?>
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <textarea name="<?php echo ((is_array($_tmp=$this->_tpl_vars['key'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" cols="60" rows="8" class="area60" style="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrErr'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('sfGetErrorColor', true, $_tmp) : SC_Utils_Ex::sfGetErrorColor($_tmp)); ?>
" ><?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm'][$this->_tpl_vars['key']])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
</textarea><span class="red"> （上限<?php echo ((is_array($_tmp=@LLTEXT_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
文字）</span>
                                    </tr>

                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" colspan="2">▼定休日設定</td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="180">定休日</td>
                                        <td bgcolor="#ffffff" width="537">
                                            <span class="attention"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                            <?php echo smarty_function_html_checkboxes(array('name' => 'regular_holiday_ids','options' => ((is_array($_tmp=$this->_tpl_vars['arrRegularHoliday'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['regular_holiday_ids'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                                        </td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" colspan="2">▼SHOP機能</td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="180">消費税率<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="tax" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@PERCENTAGE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['tax'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> ％</td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="180">課税規則<span class="red"> *</span></td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <?php echo smarty_function_html_radios(array('name' => 'tax_rule','options' => ((is_array($_tmp=$this->_tpl_vars['arrTAXRULE'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)),'selected' => ((is_array($_tmp=$this->_tpl_vars['arrForm']['tax_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp))), $this);?>

                                        </td>
                                    </tr>
                                    <tr class="fs12n">
                                        <td bgcolor="#f2f1ec" width="180">送料無料条件</td>
                                        <td bgcolor="#ffffff" width="537">
                                        <span class="red12"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrErr']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
</span>
                                        <input type="text" name="free_rule" value="<?php echo ((is_array($_tmp=((is_array($_tmp=$this->_tpl_vars['arrForm']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)))) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
" maxlength="<?php echo ((is_array($_tmp=@PRICE_LEN)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)); ?>
" size="6" class="box6" style="<?php if (((is_array($_tmp=$this->_tpl_vars['arrErr']['free_rule'])) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp)) != ""): ?>background-color: <?php echo ((is_array($_tmp=@ERR_COLOR)) ? $this->_run_mod_handler('script_escape', true, $_tmp) : smarty_modifier_script_escape($_tmp));  endif; ?>" /> 円以上購入時無料</td>
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
img/contents/btn_regist.jpg" width="123" height="24" alt="この内容で登録する" border="0" name="subm" ></td>
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