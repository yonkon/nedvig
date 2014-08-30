<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2011 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

/**
 * This array define the default value to use for the sugarpdf settings.
 * The order is DB (user or system) -> custom sugarpdf_default -> OOB sugarpdf_default
 */
$sugarpdf_default = array(
    "K_PATH_MAIN"=>"include/tcpdf/",
    "K_PATH_URL"=>"include/tcpdf/",
    "K_PATH_FONTS"=>"include/tcpdf/fonts/",
    "K_PATH_CUSTOM_FONTS"=>"custom/include/tcpdf/fonts/",
    "K_PATH_CACHE"=>"cache/tcpdf/",
    "K_PATH_URL_CACHE"=>"cache/tcpdf/",
    "K_PATH_CUSTOM_IMAGES"=>"custom/themes/default/images/",
    "K_PATH_IMAGES"=>"themes/default/images/",
    "K_BLANK_IMAGE"=>"themes/default/images/_blank.png",
    "PDF_PAGE_FORMAT"=>"LETTER",
    "PDF_PAGE_FORMAT_LIST"=>implode(",",array("4A0", "2A0", "A0", "A1", "A2", "A3", "A4", "A5", "A6", "A7", "A8", "A9", "A10",
                                        "B0", "B1", "B2", "B3", "B4", "B5", "B6", "B7", "B8", "B9", "B10",
                                        "C0", "C1", "C2", "C3", "C4", "C5", "C6", "C7", "C8", "C9", "C10",
                                        "RA0", "RA1", "RA2", "RA3", "RA4", "SRA0", "SRA1", "SRA2", "SRA3", "SRA4",
                                        "LETTER", "LEGAL", "EXECUTIVE", "FOLIO")),
    "PDF_PAGE_ORIENTATION"=>"P",
    "PDF_PAGE_ORIENTATION_LIST"=>implode(",",array("P"=>"P", "L"=>"L")),
    "PDF_CREATOR"=>"SugarCRM",
    "PDF_AUTHOR"=>"SugarCRM",
    "PDF_HEADER_TITLE"=> "" /* "   Москва     Санкт-Петербург      Тюмень      Испания   "*/,
    "PDF_HEADER_STRING"=> "" /*implode("\r\n",array(
								0=>"           Москва                            Санкт-Петербург                            Тюмень                                    Испания   ",
								1=>"  +7 (495) 664-46-48                  +7 (812) 579-41-53                  +7 (3452) 45-31-10                  +34 (96) 571-86-96",
								2=>" moscow@costaiberia.ru            info@costaiberia.ru                 tumen@costaiberia.ru          recepcion@nbagroup.es",
								3=>" Строченовский пер., 7            Ул. Фурштатская, 10                 ул. Ленина, д. 47         г.Торревьеха ул. Ориуэла, 102"
								))*/,
							/*0=>implode("\r\n",array(0=>"+7 (495) 664-46-48",1=>"moscow@costaiberia.ru",2=>"Строченовский пер., 7")),
							1=>implode("\r\n",array(0=>"+7 (812) 579-41-53",1=>"info@costaiberia.ru",2=>"Ул. Фурштатская, 10")),
							2=>implode("\r\n",array(0=>"+7 (3452) 45-31-10",1=>"tumen@costaiberia.ru",2=>"ул. Ленина, д. 47")),
							3=>implode("\r\n",array(0=>"+34 (96) 571-86-96",1=>"recepcion@nbagroup.es",2=>"г. Торревьеха ул. Ориуэла, 102"))*/
    "PDF_HEADER_LOGO"=>"header.png",/*"PDF_HEADER_LOGO"=>"pdf_logo.jpg",*/
    "PDF_FOOTER_LOGO"=>"footer.png",
    "PDF_HEADER_LOGO_WIDTH"=>164,/*120*/
    "PDF_FOOTER_LOGO_WIDTH"=>164,/*120*/
    "PDF_SMALL_HEADER_LOGO"=>"pdf_logo_small.jpg",
    "PDF_SMALL_HEADER_LOGO_WIDTH"=>15,/*60*/
    'PDF_UNIT'=>'mm',
    'PDF_MARGIN_HEADER'=>5,/*5*/
    'PDF_MARGIN_FOOTER'=>20,/*10*/
    'PDF_MARGIN_TOP'=>55,/*30;27*/
    'PDF_MARGIN_BOTTOM'=>20,/*20;27;25*/
    'PDF_MARGIN_LEFT'=>25,
    'PDF_MARGIN_RIGHT'=>20,
    'PDF_FONT_NAME_MAIN'=>'times',/*be me 'helvetica'*/
    "PDF_FONT_SIZE_MAIN"=>8,
    'PDF_FONT_NAME_DATA'=>'times',/*be me 'helvetica'*/
    'PDF_FONT_SIZE_DATA'=>8,
    'PDF_IMAGE_SCALE_RATIO'=>1.4,/*1.6,3*/
    'HEAD_MAGNIFICATION'=>1.5,/*1.1*/
    'K_CELL_HEIGHT_RATIO'=>1.25,
    'K_TITLE_MAGNIFICATION'=>1.3,
    'K_SMALL_RATIO'=>2/3,
    "PDF_CLASS"=>"TCPDF",
    "PDF_ENABLE_EZPDF"=>"0",
    "PDF_FILENAME"=>"output.pdf",
    "PDF_TITLE"=>"SugarCRM",
    "PDF_KEYWORDS"=>"SugarCRM",
    "PDF_SUBJECT"=>"SugarCRM",
    "PDF_COMPRESSION"=>"true",
    "PDF_JPEG_QUALITY"=>"75",
    "PDF_PDF_VERSION"=>"1.7",
    "PDF_PROTECTION"=>implode(",",array("print","copy")),
    "PDF_USER_PASSWORD"=>"",
    "PDF_OWNER_PASSWORD"=>"",
    "PDF_ACL_ACCESS"=>"detail",
    "PDF_ENCODING_TABLE_LIST"=>implode(",",array("cp1250","cp1251","cp1252","cp1253","cp1254","cp1255","cp1257",
                                                "cp1258","cp874","iso-8859-1","iso-8859-2","iso-8859-4","iso-8859-5",
                                                "iso-8859-7","iso-8859-9","iso-8859-11","iso-8859-15","iso-8859-16",
                                                "koi8-r","koi8-u","utf-8")),
    "PDF_ENCODING_TABLE_LABEL_LIST"=>implode(",",array("cp1250 (Central Europe)","cp1251 (Cyrillic)","cp1252 (Western Europe)",
                                                "cp1253 (Greek)","cp1254 (Turkish)","cp1255 (Hebrew)","cp1257 (Baltic)",
                                                "cp1258 (Vietnamese)","cp874 (Thai)","iso-8859-1 (Western Europe)",
                                                "iso-8859-2 (Central Europe)","iso-8859-4 (Baltic)","iso-8859-5 (Cyrillic)",
                                                "iso-8859-7 (Greek)","iso-8859-9 (Turkish)","iso-8859-11 (Thai)","iso-8859-15 (Western Europe)",
                                                "iso-8859-16 (Central Europe)","koi8-r (Russian)","koi8-u (Ukrainian)")),
);


?>