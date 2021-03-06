<?php
/*
 * This file is part of EC-CUBE
 *
 * Copyright(c) 2000-2007 LOCKON CO.,LTD. All Rights Reserved.
 *
 * http://www.lockon.co.jp/
 *
 * This program is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License
 * as published by the Free Software Foundation; either version 2
 * of the License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program; if not, write to the Free Software
 * Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA  02111-1307, USA.
 */

// {{{ requires
require_once(CLASS_PATH . "pages/LC_Page.php");

/**
 * EC-CUBEアプリケーション管理 のページクラス.
 *
 * @package Page
 * @author LOCKON CO.,LTD.
 * @version $Id: LC_Page_Admin_OwnersStore.php 16582 2007-10-29 03:06:29Z nanasess $
 */
class LC_Page_Admin_OwnersStore extends LC_Page {

    var $tpl_subno = 'index';
    // }}}
    // {{{ functions

    /**
     * Page を初期化する.
     *
     * @return void
     */
    function init() {
        parent::init();

        $this->tpl_mainpage = 'ownersstore/index.tpl';
        $this->tpl_subnavi  = 'ownersstore/subnavi.tpl';
        $this->tpl_mainno   = 'ownersstore';
        $this->tpl_subno    = 'index';
        $this->tpl_subtitle = '購入商品一覧';
    }

    /**
     * Page のプロセス.
     *
     * @return void
     */
    function process() {

        // ログインチェック
        SC_Utils::sfIsSuccess(new SC_Session());

        $objView = new SC_AdminView();
        $objView->assignObj($this);
        $objView->display(MAIN_FRAME);
    }

    /**
     * デストラクタ.
     *
     * @return void
     */
    function destroy() {
        parent::destroy();
    }
}
?>
