<?php if(!isset($fromTemplate)) { $fromTemplate="0"; }?>
<?php if ($style_text->headline_shadow == 1 || $style_text->cta_shadow == 1 || $style_text->text_shadow == 1) { $textShadowSetting = $style_text->text_h_Shadow . " " . $style_text->text_v_Shadow . " " . $style_text->text_blur_shadow . " " . $style_text->text_shadow_color; } ?>
<?php if($fromTemplate=="1" && !empty($style_image->image_url) ) { $sideImageURL = HYBRIDCONNECT_IAMGES_PATH . "/" . $style_image->image_url;  } else { $sideImageURL = $style_image->image_url; } ?>
<?php if($fromTemplate=="1") { $arrowImageURL = HYBRIDCONNECT_IAMGES_PATH . "/" . $style_image->arrow_style; } else { $arrowImageURL = $style_image->arrow_style; } ?>
<?php if($fromTemplate=="1" && !empty($style_connector->template_picturebgurl)) { $bgImageURL = HYBRIDCONNECT_IAMGES_PATH . "/" . $style_connector->template_picturebgurl; } else { $bgImageURL = $style_connector->template_picturebgurl; } ?>

<style type="text/css">.fb_hidden{position:absolute;top:-10000px;z-index:10001}
    .fb_invisible{display:none}
    .fb_reset{background:none;border-spacing:0;border:0;color:#000;cursor:auto;direction:ltr;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}
    .fb_link img{border:none}
    .fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}
    .fb_dialog_advanced{padding:10px;-moz-border-radius:8px;-webkit-border-radius:8px}
    .fb_dialog_content{background:#fff;color:#333}
    .fb_dialog_close_icon{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif);cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px;top:8px\9;right:7px\9}
    .fb_dialog_mobile .fb_dialog_close_icon{top:5px;left:5px;right:auto}
    .fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}
    .fb_dialog_close_icon:hover{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
    .fb_dialog_close_icon:active{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent;_background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/s816eWC-2sl.gif)}
    .fb_dialog_loader{background-color:#f2f2f2;border:1px solid #606060;font-size:24px;padding:20px}
    .fb_dialog_top_left,
    .fb_dialog_top_right,
    .fb_dialog_bottom_left,
    .fb_dialog_bottom_right{height:10px;width:10px;overflow:hidden;position:absolute}
    .fb_dialog_top_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 0;left:-10px;top:-10px}
    .fb_dialog_top_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -10px;right:-10px;top:-10px}
    .fb_dialog_bottom_left{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -20px;bottom:-10px;left:-10px}
    .fb_dialog_bottom_right{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/ye/r/8YeTNIlTZjm.png) no-repeat 0 -30px;right:-10px;bottom:-10px}
    .fb_dialog_vert_left,
    .fb_dialog_vert_right,
    .fb_dialog_horiz_top,
    .fb_dialog_horiz_bottom{position:absolute;background:#525252;filter:alpha(opacity=70);opacity:.7}
    .fb_dialog_vert_left,
    .fb_dialog_vert_right{width:10px;height:100%}
    .fb_dialog_vert_left{margin-left:-10px}
    .fb_dialog_vert_right{right:0;margin-right:-10px}
    .fb_dialog_horiz_top,
    .fb_dialog_horiz_bottom{width:100%;height:10px}
    .fb_dialog_horiz_top{margin-top:-10px}
    .fb_dialog_horiz_bottom{bottom:0;margin-bottom:-10px}
    .fb_dialog_iframe{line-height:0}
    .fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #3b5998;color:#fff;font-size:14px;font-weight:bold;margin:0}
    .fb_dialog_content .dialog_title > span{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yd/r/Cou7n-nqK52.gif)
                                                no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}
    body.fb_hidden{-webkit-transform:none;height:100%;margin:0;left:-10000px;overflow:visible;position:absolute;top:-10000px;width:100%
    }
    .fb_dialog.fb_dialog_mobile.loading{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/yO/r/_j03izEX40U.gif)
                                            white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}
    .fb_dialog.fb_dialog_mobile.loading.centered{max-height:590px;min-height:590px;max-width:500px;min-width:500px}
    #fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .45);position:absolute;left:0;top:0;width:100%;min-height:100%;z-index:10000}
    #fb-root #fb_dialog_ipad_overlay.hidden{display:none}
    .fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}
    .fb_dialog_content .dialog_header{-webkit-box-shadow:white 0 1px 1px -1px inset;background:-webkit-gradient(linear, 0 0, 0 100%, from(#738ABA), to(#2C4987));border-bottom:1px solid;border-color:#1d4088;color:#fff;font:14px Helvetica, sans-serif;font-weight:bold;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}
    .fb_dialog_content .dialog_header table{-webkit-font-smoothing:subpixel-antialiased;height:43px;width:100%
    }
    .fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px
    }
    .fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px
    }
    .fb_dialog_content .touchable_button{background:-webkit-gradient(linear, 0 0, 0 100%, from(#4966A6),
                                             color-stop(0.5, #355492), to(#2A4887));border:1px solid #29447e;-webkit-background-clip:padding-box;-webkit-border-radius:3px;-webkit-box-shadow:rgba(0, 0, 0, .117188) 0 1px 1px inset,
                                             rgba(255, 255, 255, .167969) 0 1px 0;display:inline-block;margin-top:3px;max-width:85px;line-height:18px;padding:4px 12px;position:relative}
    .fb_dialog_content .dialog_header .touchable_button input{border:none;background:none;color:#fff;font:12px Helvetica, sans-serif;font-weight:bold;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
    .fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}
    .fb_dialog_content .dialog_content{background:url(http://static.ak.fbcdn.net/rsrc.php/v2/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #555;border-bottom:0;border-top:0;height:150px}
    .fb_dialog_content .dialog_footer{background:#f2f2f2;border:1px solid #555;border-top-color:#ccc;height:40px}
    #fb_dialog_loader_close{float:left}
    .fb_dialog.fb_dialog_mobile .fb_dialog_close_button{text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}
    .fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}
    .fb_iframe_widget{position:relative;display:-moz-inline-block;display:inline-block}
    .fb_iframe_widget iframe{position:absolute}
    .fb_iframe_widget_lift{z-index:1}
    .fb_iframe_widget span{position:relative;display:inline-block;vertical-align:text-bottom;text-align:justify}
    .fb_hide_iframes iframe{position:relative;left:-10000px}
    .fb_iframe_widget_loader{position:relative;display:inline-block}
    .fb_iframe_widget_fluid{display:inline}
    .fb_iframe_widget_loader iframe{min-height:32px;z-index:2;zoom:1}
    .fb_iframe_widget_loader .FB_Loader{background:url(http://static.ak.fbcdn.net/rsrc.php/v1/y9/r/jKEcVPZFk-2.gif) no-repeat;height:32px;width:32px;margin-left:-16px;position:absolute;left:50%;z-index:4}
    .fb_button_simple,
    .fb_button_simple_rtl{background-image:url(http://static.ak.fbcdn.net/rsrc.php/v2/yH/r/eIpbnVKI9lR.png);background-repeat:no-repeat;cursor:pointer;outline:none;text-decoration:none}
    .fb_button_simple_rtl{background-position:right 0}
    .fb_button_simple .fb_button_text{margin:0 0 0 20px;padding-bottom:1px}
    .fb_button_simple_rtl .fb_button_text{margin:0 10px 0 0}
    a.fb_button_simple:hover .fb_button_text,
    a.fb_button_simple_rtl:hover .fb_button_text,
    .fb_button_simple:hover .fb_button_text,
    .fb_button_simple_rtl:hover .fb_button_text{text-decoration:underline}
    .fb_button,
    .fb_button_rtl{background:#29447e url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/FGFbc80dUKj.png);background-repeat:no-repeat;cursor:pointer;display:inline-block;padding:0 0 0 1px;text-decoration:none;outline:none}
    .fb_button .fb_button_text,
    .fb_button_rtl .fb_button_text{background:#5f78ab url(http://static.ak.fbcdn.net/rsrc.php/v2/yL/r/FGFbc80dUKj.png);border-top:solid 1px #879ac0;border-bottom:solid 1px #1a356e;color:#fff;display:block;font-family:"lucida grande",tahoma,verdana,arial,sans-serif;font-weight:bold;padding:2px 6px 3px 6px;margin:1px 1px 0 21px;text-shadow:none}
    a.fb_button,
    a.fb_button_rtl,
    .fb_button,
    .fb_button_rtl{text-decoration:none}
    a.fb_button:active .fb_button_text,
    a.fb_button_rtl:active .fb_button_text,
    .fb_button:active .fb_button_text,
    .fb_button_rtl:active .fb_button_text{border-bottom:solid 1px #29447e;border-top:solid 1px #45619d;background:#4f6aa3;text-shadow:none}
    .fb_button_xlarge,
    .fb_button_xlarge_rtl{background-position:left -60px;font-size:24px;line-height:30px}
    .fb_button_xlarge .fb_button_text{padding:3px 8px 3px 12px;margin-left:38px}
    a.fb_button_xlarge:active{background-position:left -99px}
    .fb_button_xlarge_rtl{background-position:right -268px}
    .fb_button_xlarge_rtl .fb_button_text{padding:3px 8px 3px 12px;margin-right:39px}
    a.fb_button_xlarge_rtl:active{background-position:right -307px}
    .fb_button_large,
    .fb_button_large_rtl{background-position:left -138px;font-size:13px;line-height:16px}
    .fb_button_large .fb_button_text{margin-left:24px;padding:2px 6px 4px 6px}
    a.fb_button_large:active{background-position:left -163px}
    .fb_button_large_rtl{background-position:right -346px}
    .fb_button_large_rtl .fb_button_text{margin-right:25px}
    a.fb_button_large_rtl:active{background-position:right -371px}
    .fb_button_medium,
    .fb_button_medium_rtl{background-position:left -188px;font-size:11px;line-height:14px}
    a.fb_button_medium:active{background-position:left -210px}
    .fb_button_medium_rtl{background-position:right -396px}
    .fb_button_text_rtl,
    .fb_button_medium_rtl .fb_button_text{padding:2px 6px 3px 6px;margin-right:22px}
    a.fb_button_medium_rtl:active{background-position:right -418px}
    .fb_button_small,
    .fb_button_small_rtl{background-position:left -232px;font-size:10px;line-height:10px}
    .fb_button_small .fb_button_text{padding:2px 6px 3px;margin-left:17px}
    a.fb_button_small:active,
    .fb_button_small:active{background-position:left -250px}
    .fb_button_small_rtl{background-position:right -440px}
    .fb_button_small_rtl .fb_button_text{padding:2px 6px;margin-right:18px}
    a.fb_button_small_rtl:active{background-position:right -458px}
    .fb_share_count_wrapper{position:relative;float:left}
    .fb_share_count{background:#b0b9ec none repeat scroll 0 0;color:#333;font-family:"lucida grande", tahoma, verdana, arial, sans-serif;text-align:center}
    .fb_share_count_inner{background:#e8ebf2;display:block}
    .fb_share_count_right{margin-left:-1px;display:inline-block}
    .fb_share_count_right .fb_share_count_inner{border-top:solid 1px #e8ebf2;border-bottom:solid 1px #b0b9ec;margin:1px 1px 0 1px;font-size:10px;line-height:10px;padding:2px 6px 3px;font-weight:bold}
    .fb_share_count_top{display:block;letter-spacing:-1px;line-height:34px;margin-bottom:7px;font-size:22px;border:solid 1px #b0b9ec}
    .fb_share_count_nub_top{border:none;display:block;position:absolute;left:7px;top:35px;margin:0;padding:0;width:6px;height:7px;background-repeat:no-repeat;background-image:url(http://static.ak.fbcdn.net/rsrc.php/v1/yU/r/bSOHtKbCGYI.png)}
    .fb_share_count_nub_right{border:none;display:inline-block;padding:0;width:5px;height:10px;background-repeat:no-repeat;background-image:url(http://static.ak.fbcdn.net/rsrc.php/v1/yX/r/i_oIVTKMYsL.png);vertical-align:top;background-position:right 5px;z-index:10;left:2px;margin:0 2px 0 0;position:relative}
    .fb_share_no_count{display:none}
    .fb_share_size_Small .fb_share_count_right .fb_share_count_inner{font-size:10px}
    .fb_share_size_Medium .fb_share_count_right .fb_share_count_inner{font-size:11px;padding:2px 6px 3px;letter-spacing:-1px;line-height:14px}
    .fb_share_size_Large .fb_share_count_right .fb_share_count_inner{font-size:13px;line-height:16px;padding:2px 6px 4px;font-weight:normal;letter-spacing:-1px}
    .fb_share_count_hidden .fb_share_count_nub_top,
    .fb_share_count_hidden .fb_share_count_top,
    .fb_share_count_hidden .fb_share_count_nub_right,
    .fb_share_count_hidden .fb_share_count_right{visibility:hidden}
    .fb_connect_bar_container div,
    .fb_connect_bar_container span,
    .fb_connect_bar_container a,
    .fb_connect_bar_container img,
    .fb_connect_bar_container strong{background:none;border-spacing:0;border:0;direction:ltr;font-style:normal;font-variant:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal;vertical-align:baseline}
    .fb_connect_bar_container{position:fixed;left:0 !important;right:0 !important;height:42px !important;padding:0 25px !important;margin:0 !important;vertical-align:middle !important;border-bottom:1px solid #333 !important;background:#3b5998 !important;z-index:99999999 !important;overflow:hidden !important}
    .fb_connect_bar_container_ie6{position:absolute;top:expression(document.compatMode=="CSS1Compat"? document.documentElement.scrollTop+"px":body.scrollTop+"px")}
    .fb_connect_bar{position:relative;margin:auto;height:100%;width:100%;padding:6px 0 0 0 !important;background:none;color:#fff !important;font-family:"lucida grande", tahoma, verdana, arial, sans-serif !important;font-size:13px !important;font-style:normal !important;font-variant:normal !important;font-weight:normal !important;letter-spacing:normal !important;line-height:1 !important;text-decoration:none !important;text-indent:0 !important;text-shadow:none !important;text-transform:none !important;white-space:normal !important;word-spacing:normal !important}
    .fb_connect_bar a:hover{color:#fff}
    .fb_connect_bar .fb_profile img{height:30px;width:30px;vertical-align:middle;margin:0 6px 5px 0}
    .fb_connect_bar div a,
    .fb_connect_bar span,
    .fb_connect_bar span a{color:#bac6da;font-size:11px;text-decoration:none}
    .fb_connect_bar .fb_buttons{float:right;margin-top:7px}
    .fb_edge_widget_with_comment{position:relative;*z-index:1000}
    .fb_edge_widget_with_comment span.fb_edge_comment_widget{position:absolute}
    .fb_edge_widget_with_comment span.fb_send_button_form_widget{z-index:1}
    .fb_edge_widget_with_comment span.fb_send_button_form_widget .FB_Loader{left:0;top:1px;margin-top:6px;margin-left:0;background-position:50% 50%;background-color:#fff;height:150px;width:394px;border:1px #666 solid;border-bottom:2px solid #283e6c;z-index:1}
    .fb_edge_widget_with_comment span.fb_send_button_form_widget.dark .FB_Loader{background-color:#000;border-bottom:2px solid #ccc}
    .fb_edge_widget_with_comment span.fb_send_button_form_widget.siderender
    .FB_Loader{margin-top:0}
    .fbpluginrecommendationsbarleft,
    .fbpluginrecommendationsbarright{position:fixed !important;bottom:0;z-index:999}
    /* @noflip */
    .fbpluginrecommendationsbarleft{left:10px}
    /* @noflip */
    .fbpluginrecommendationsbarright{right:10px}
</style><style type="text/css" charset="utf-8">/* See license.txt for terms of usage */
    /** reset styling **/
    .firebugResetStyles {
        z-index: 2147483646 !important;
        top: 0 !important;
        left: 0 !important;
        display: block !important;
        border: 0 none !important;
        margin: 0 !important;
        padding: 0 !important;
        outline: 0 !important;
        min-width: 0 !important;
        max-width: none !important;
        min-height: 0 !important;
        max-height: none !important;
        position: fixed !important;
        -moz-transform: rotate(0deg) !important;
        -moz-transform-origin: 50% 50% !important;
        -moz-border-radius: 0 !important;
        -moz-box-shadow: none !important;
        background: transparent none !important;
        pointer-events: none !important;
    }
    .firebugBlockBackgroundColor {
        background-color: transparent !important;
    }
    .firebugResetStyles:before, .firebugResetStyles:after {
        content: "" !important;
    }
    /**actual styling to be modified by firebug theme**/
    .firebugCanvas {
        display: none !important;
    }
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    .firebugLayoutBox {
        width: auto !important;
        position: static !important;
    }
    .firebugLayoutBoxOffset {
        opacity: 0.8 !important;
        position: fixed !important;
    }
    .firebugLayoutLine {
        opacity: 0.4 !important;
        background-color: #000000 !important;
    }
    .firebugLayoutLineLeft, .firebugLayoutLineRight {
        width: 1px !important;
        height: 100% !important;
    }
    .firebugLayoutLineTop, .firebugLayoutLineBottom {
        width: 100% !important;
        height: 1px !important;
    }
    .firebugLayoutLineTop {
        margin-top: -1px !important;
        border-top: 1px solid #999999 !important;
    }
    .firebugLayoutLineRight {
        border-right: 1px solid #999999 !important;
    }
    .firebugLayoutLineBottom {
        border-bottom: 1px solid #999999 !important;
    }
    .firebugLayoutLineLeft {
        margin-left: -1px !important;
        border-left: 1px solid #999999 !important;
    }
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    .firebugLayoutBoxParent {
        border-top: 0 none !important;
        border-right: 1px dashed #E00 !important;
        border-bottom: 1px dashed #E00 !important;
        border-left: 0 none !important;
        position: fixed !important;
        width: auto !important;
    }
    .firebugRuler{
        position: absolute !important;
    }
    .firebugRulerH {
        top: -15px !important;
        left: 0 !important;
        width: 100% !important;
        height: 14px !important;
        background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%13%88%00%00%00%0E%08%02%00%00%00L%25a%0A%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%04%F8IDATx%DA%EC%DD%D1n%E2%3A%00E%D1%80%F8%FF%EF%E2%AF2%95%D0D4%0E%C1%14%B0%8Fa-%E9%3E%CC%9C%87n%B9%81%A6W0%1C%A6i%9A%E7y%0As8%1CT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AATE9%FE%FCw%3E%9F%AF%2B%2F%BA%97%FDT%1D~K(%5C%9D%D5%EA%1B%5C%86%B5%A9%BDU%B5y%80%ED%AB*%03%FAV9%AB%E1%CEj%E7%82%EF%FB%18%BC%AEJ8%AB%FA'%D2%BEU9%D7U%ECc0%E1%A2r%5DynwVi%CFW%7F%BB%17%7Dy%EACU%CD%0E%F0%FA%3BX%FEbV%FEM%9B%2B%AD%BE%AA%E5%95v%AB%AA%E3E5%DCu%15rV9%07%B5%7F%B5w%FCm%BA%BE%AA%FBY%3D%14%F0%EE%C7%60%0EU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5JU%88%D3%F5%1F%AE%DF%3B%1B%F2%3E%DAUCNa%F92%D02%AC%7Dm%F9%3A%D4%F2%8B6%AE*%BF%5C%C2Ym~9g5%D0Y%95%17%7C%C8c%B0%7C%18%26%9CU%CD%13i%F7%AA%90%B3Z%7D%95%B4%C7%60%E6E%B5%BC%05%B4%FBY%95U%9E%DB%FD%1C%FC%E0%9F%83%7F%BE%17%7DkjMU%E3%03%AC%7CWj%DF%83%9An%BCG%AE%F1%95%96yQ%0Dq%5Dy%00%3Et%B5'%FC6%5DS%95pV%95%01%81%FF'%07%00%00%00%00%00%00%00%00%00%F8x%C7%F0%BE%9COp%5D%C9%7C%AD%E7%E6%EBV%FB%1E%E0(%07%E5%AC%C6%3A%ABi%9C%8F%C6%0E9%AB%C0'%D2%8E%9F%F99%D0E%B5%99%14%F5%0D%CD%7F%24%C6%DEH%B8%E9rV%DFs%DB%D0%F7%00k%FE%1D%84%84%83J%B8%E3%BA%FB%EF%20%84%1C%D7%AD%B0%8E%D7U%C8Y%05%1E%D4t%EF%AD%95Q%BF8w%BF%E9%0A%BF%EB%03%00%00%00%00%00%00%00%00%00%B8vJ%8E%BB%F5%B1u%8Cx%80%E1o%5E%CA9%AB%CB%CB%8E%03%DF%1D%B7T%25%9C%D5(%EFJM8%AB%CC'%D2%B2*%A4s%E7c6%FB%3E%FA%A2%1E%80~%0E%3E%DA%10x%5D%95Uig%15u%15%ED%7C%14%B6%87%A1%3B%FCo8%A8%D8o%D3%ADO%01%EDx%83%1A~%1B%9FpP%A3%DC%C6'%9C%95gK%00%00%00%00%00%00%00%00%00%20%D9%C9%11%D0%C0%40%AF%3F%EE%EE%92%94%D6%16X%B5%BCMH%15%2F%BF%D4%A7%C87%F1%8E%F2%81%AE%AAvzr%DA2%ABV%17%7C%E63%83%E7I%DC%C6%0Bs%1B%EF6%1E%00%00%00%00%00%00%00%00%00%80cr%9CW%FF%7F%C6%01%0E%F1%CE%A5%84%B3%CA%BC%E0%CB%AA%84%CE%F9%BF)%EC%13%08WU%AE%AB%B1%AE%2BO%EC%8E%CBYe%FE%8CN%ABr%5Dy%60~%CFA%0D%F4%AE%D4%BE%C75%CA%EDVB%EA(%B7%F1%09g%E5%D9%12%00%00%00%00%00%00%00%00%00H%F6%EB%13S%E7y%5E%5E%FB%98%F0%22%D1%B2'%A7%F0%92%B1%BC%24z3%AC%7Dm%60%D5%92%B4%7CEUO%5E%F0%AA*%3BU%B9%AE%3E%A0j%94%07%A0%C7%A0%AB%FD%B5%3F%A0%F7%03T%3Dy%D7%F7%D6%D4%C0%AAU%D2%E6%DFt%3F%A8%CC%AA%F2%86%B9%D7%F5%1F%18%E6%01%F8%CC%D5%9E%F0%F3z%88%AA%90%EF%20%00%00%00%00%00%00%00%00%00%C0%A6%D3%EA%CFi%AFb%2C%7BB%0A%2B%C3%1A%D7%06V%D5%07%A8r%5D%3D%D9%A6%CAu%F5%25%CF%A2%99%97zNX%60%95%AB%5DUZ%D5%FBR%03%AB%1C%D4k%9F%3F%BB%5C%FF%81a%AE%AB'%7F%F3%EA%FE%F3z%94%AA%D8%DF%5B%01%00%00%00%00%00%00%00%00%00%8E%FB%F3%F2%B1%1B%8DWU%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*UiU%C7%BBe%E7%F3%B9%CB%AAJ%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5J%95*U%AAT%A9R%A5*%AAj%FD%C6%D4%5Eo%90%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5%86%AF%1B%9F%98%DA%EBm%BBV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%ADV%AB%D5j%B5Z%AD%D6%E4%F58%01%00%00%00%00%00%00%00%00%00%00%00%00%00%40%85%7F%02%0C%008%C2%D0H%16j%8FX%00%00%00%00IEND%AEB%60%82") repeat-x !important;
        border-top: 1px solid #BBBBBB !important;
        border-right: 1px dashed #BBBBBB !important;
        border-bottom: 1px solid #000000 !important;
    }
    .firebugRulerV {
        top: 0 !important;
        left: -15px !important;
        width: 14px !important;
        height: 100% !important;
        background: url("data:image/png,%89PNG%0D%0A%1A%0A%00%00%00%0DIHDR%00%00%00%0E%00%00%13%88%08%02%00%00%00%0E%F5%CB%10%00%00%00%04gAMA%00%00%D6%D8%D4OX2%00%00%00%19tEXtSoftware%00Adobe%20ImageReadyq%C9e%3C%00%00%06~IDATx%DA%EC%DD%D1v%A20%14%40Qt%F1%FF%FF%E4%97%D9%07%3BT%19%92%DC%40(%90%EEy%9A5%CB%B6%E8%F6%9Ac%A4%CC0%84%FF%DC%9E%CF%E7%E3%F1%88%DE4%F8%5D%C7%9F%2F%BA%DD%5E%7FI%7D%F18%DDn%BA%C5%FB%DF%97%BFk%F2%10%FF%FD%B4%F2M%A7%FB%FD%FD%B3%22%07p%8F%3F%AE%E3%F4S%8A%8F%40%EEq%9D%BE8D%F0%0EY%A1Uq%B7%EA%1F%81%88V%E8X%3F%B4%CEy%B7h%D1%A2E%EBohU%FC%D9%AF2fO%8BBeD%BE%F7X%0C%97%A4%D6b7%2Ck%A5%12%E3%9B%60v%B7r%C7%1AI%8C%BD%2B%23r%00c0%B2v%9B%AD%CA%26%0C%1Ek%05A%FD%93%D0%2B%A1u%8B%16-%95q%5Ce%DCSO%8E%E4M%23%8B%F7%C2%FE%40%BB%BD%8C%FC%8A%B5V%EBu%40%F9%3B%A72%FA%AE%8C%D4%01%CC%B5%DA%13%9CB%AB%E2I%18%24%B0n%A9%0CZ*Ce%9C%A22%8E%D8NJ%1E%EB%FF%8F%AE%CAP%19*%C3%BAEKe%AC%D1%AAX%8C*%DEH%8F%C5W%A1e%AD%D4%B7%5C%5B%19%C5%DB%0D%EF%9F%19%1D%7B%5E%86%BD%0C%95%A12%AC%5B*%83%96%CAP%19%F62T%86%CAP%19*%83%96%CA%B8Xe%BC%FE)T%19%A1%17xg%7F%DA%CBP%19*%C3%BA%A52T%86%CAP%19%F62T%86%CA%B0n%A9%0CZ%1DV%C6%3D%F3%FCH%DE%B4%B8~%7F%5CZc%F1%D6%1F%AF%84%F9%0F6%E6%EBVt9%0E~%BEr%AF%23%B0%97%A12T%86%CAP%19%B4T%86%CA%B8Re%D8%CBP%19*%C3%BA%A52huX%19%AE%CA%E5%BC%0C%7B%19*CeX%B7h%A9%0C%95%E1%BC%0C%7B%19*CeX%B7T%06%AD%CB%5E%95%2B%BF.%8F%C5%97%D5%E4%7B%EE%82%D6%FB%CF-%9C%FD%B9%CF%3By%7B%19%F62T%86%CA%B0n%D1R%19*%A3%D3%CA%B0%97%A12T%86uKe%D0%EA%B02*%3F1%99%5DB%2B%A4%B5%F8%3A%7C%BA%2B%8Co%7D%5C%EDe%A8%0C%95a%DDR%19%B4T%C66%82fA%B2%ED%DA%9FC%FC%17GZ%06%C9%E1%B3%E5%2C%1A%9FoiB%EB%96%CA%A0%D5qe4%7B%7D%FD%85%F7%5B%ED_%E0s%07%F0k%951%ECr%0D%B5C%D7-g%D1%A8%0C%EB%96%CA%A0%A52T%C6)*%C3%5E%86%CAP%19%D6-%95A%EB*%95q%F8%BB%E3%F9%AB%F6%E21%ACZ%B7%22%B7%9B%3F%02%85%CB%A2%5B%B7%BA%5E%B7%9C%97%E1%BC%0C%EB%16-%95%A12z%AC%0C%BFc%A22T%86uKe%D0%EA%B02V%DD%AD%8A%2B%8CWhe%5E%AF%CF%F5%3B%26%CE%CBh%5C%19%CE%CB%B0%F3%A4%095%A1%CAP%19*Ce%A8%0C%3BO*Ce%A8%0C%95%A12%3A%AD%8C%0A%82%7B%F0v%1F%2FD%A9%5B%9F%EE%EA%26%AF%03%CA%DF9%7B%19*Ce%A8%0C%95%A12T%86%CA%B8Ze%D8%CBP%19*Ce%A8%0C%95%D1ae%EC%F7%89I%E1%B4%D7M%D7P%8BjU%5C%BB%3E%F2%20%D8%CBP%19*Ce%A8%0C%95%A12T%C6%D5*%C3%5E%86%CAP%19*Ce%B4O%07%7B%F0W%7Bw%1C%7C%1A%8C%B3%3B%D1%EE%AA%5C%D6-%EBV%83%80%5E%D0%CA%10%5CU%2BD%E07YU%86%CAP%19*%E3%9A%95%91%D9%A0%C8%AD%5B%EDv%9E%82%FFKOee%E4%8FUe%A8%0C%95%A12T%C6%1F%A9%8C%C8%3D%5B%A5%15%FD%14%22r%E7B%9F%17l%F8%BF%ED%EAf%2B%7F%CF%ECe%D8%CBP%19*Ce%A8%0C%95%E1%93~%7B%19%F62T%86%CAP%19*Ce%A8%0C%E7%13%DA%CBP%19*Ce%A8%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4h%A9%0C%B3E%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%A9%0CZf%8B%16-Z%B4h%D1R%19f%8B%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1R%19%B4%CC%16-Z%B4h%D1%A2%A52%CC%16-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2%A52h%99-Z%B4h%D1%A2EKe%98-Z%B4h%D1%A2EKe%D02%5B%B4h%D1%A2EKe%D02%5B%B4h%D1%A2E%8B%96%CA0%5B%B4h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%96%CA%A0e%B6h%D1%A2E%8B%16-%95a%B6h%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-%95A%CBl%D1%A2E%8B%16-Z*%C3l%D1%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z*%83%96%D9%A2E%8B%16-Z%B4T%86%D9%A2E%8B%16-Z%B4T%06-%B3E%8B%16-Z%B4%AE%A4%F5%25%C0%00%DE%BF%5C'%0F%DA%B8q%00%00%00%00IEND%AEB%60%82") repeat-y !important;
        border-left: 1px solid #BBBBBB !important;
        border-right: 1px solid #000000 !important;
        border-bottom: 1px dashed #BBBBBB !important;
    }
    .overflowRulerX > .firebugRulerV {
        left: 0 !important;
    }
    .overflowRulerY > .firebugRulerH {
        top: 0 !important;
    }
    /* * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * */
    .fbProxyElement {
        position: fixed !important;
        pointer-events: auto !important;
    }
    #templateCode {
        min-height: 1450px;
    }
    .connectorDescriptionText p {
        font-size: <?php echo $style_text->border_font_size ?>;
        color : <?php echo $style_text->border_font_color ?>;
        font-family: <?php echo $style_text->border_font_family ?>;
        line-height: 140%;
        <?php if ($style_text->text_shadow == 1): ?>text-shadow:<?php echo $textShadowSetting; ?>;<?php endif?>
    }
    p.connectorCallToAction {
      <?php if ($style_text->cta_shadow == 1): ?>text-shadow:<?php echo $textShadowSetting; ?>;<?php endif?>
    }
    .connectorDescriptionText ul {
        margin-left: <?php echo $style_text->bullet_left_margin; ?>;
        padding: 0;
	      margin-top:20px;
       	margin-bottom:20px;
	      text-align:left;
    }
    .connectorDescriptionText ul li {
        margin: 0;
        padding: 2px 0 2px 35px;
        list-style: none;
        background: url('<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/ticks/<?php echo $style_text->tick_style?>.png') no-repeat top left;
        font-size: <?php echo $style_text->border_font_size ?>;
        color : <?php echo $style_text->border_font_color ?>;
        font-family: <?php echo $style_text->border_font_family ?>;
        line-height: 140%;
        <?php if ($style_text->text_shadow == 1): ?>text-shadow:<?php echo $textShadowSetting;?>;<?php else:?>text-shadow:none;<?php endif?>
        background-size: <?php echo $style_connector->bulletpointsize; ?>;
        background-position-y: <?php echo $style_connector->bulletpointoffset; ?>;
        background-position-x: <?php echo $style_connector->bulletpointoffsetx; ?>;
        
    }
    #templateCode .connectorHeadline {
        line-height: 1.2em;
        margin-bottom: 10px !important;
        <?php if ($style_text->headline_bold == 1): ?>font-weight: bold;<?php endif ?>
        padding-top: <?php echo $style_text->text_vertical_position; ?>;
        <?php if ($style_text->headline_center == 1): ?>text-align: center;<?php endif ?>
        <?php if ($style_text->headline_shadow == 1): ?>text-shadow:<?php echo $textShadowSetting; ?>;<?php endif?>
    }
    
    p.connectorHeadline {
      margin-left:<?php echo $style_text->headline_left_margin; ?>;
      margin-right: <?php echo $style_text->headline_right_margin; ?>;
      margin-top:5px;
      margin-bottom:5px;
    }
    
div.graphicWrapper {
	float:right;
	position:relative;
	<?php if ($style_image->show_side_image != 1):?>display:none;<?php endif?>
	margin-left:<?php echo $style_image->image_left_margin ?>;
	margin-right:<?php echo $style_image->image_right_margin ?>;
	margin-top: <?php echo $style_image->vertical_position ?>;
	display:block;
}
img.optinGraphic {
	border:0px !important;
	margin:0px !important;
	padding:0px !important;
	width:<?php echo $style_image->image_size; ?>;
}

/*hide wp_editor HTML button - doesn't play ball at all. */
.switch-html {
  display:none;
}

/*mce image/video placeholder*/
.mceItemMedia  {
  border:1px solid #444444;
  background:#f5f5f5;
}

div.connectorWrapper {

border:<?php echo $style_connector->border_width ?> <?php echo $style_connector->border_style; ?> <?php echo $style_connector->border_color ?>;
border-collapse:separate;
<?php if ($style_connector->drop_shadow == 1): ?>
box-shadow: <?php echo $style_connector->h_shadow." ".$style_connector->v_shadow." ". $style_connector->blur_shadow." ". $style_connector->shadow_color; ?>;
-moz-box-shadow: <?php echo $style_connector->h_shadow." ".$style_connector->v_shadow." ". $style_connector->blur_shadow." ". $style_connector->shadow_color; ?>;
-webkit-box-shadow: <?php echo $style_connector->h_shadow." ".$style_connector->v_shadow." ". $style_connector->blur_shadow." ". $style_connector->shadow_color; ?>;
<?php endif ?>

<?php if ($style_connector->border_radius != ""): ?>border-radius:<?php echo $style_connector->border_radius; ?>;<?php endif ?>
/* if not gradient then use background colour selector */
<?php if ($style_connector->template_gradient != "1"): ?>background:<?php echo $style_connector->tpl_bg_color ?>;<?php endif ?>
/* if gradient selected then apply gradient CSS */
<?php if ($style_connector->template_gradient != "0"): ?>
background: -moz-linear-gradient(top,  <?php echo $style_connector->template_bgcolor_1 ?> 0%, <?php echo $style_connector->template_bgcolor_2 ?> 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $style_connector->template_bgcolor_2 ?>), color-stop(100%,<?php echo $style_connector->template_bgcolor_1 ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  <?php echo $style_connector->template_bgcolor_1 ?> 0%,<?php echo $style_connector->template_bgcolor_2 ?> 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  <?php echo $style_connector->template_bgcolor_1 ?> 0%,<?php echo $style_connector->template_bgcolor_2 ?> 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  <?php echo $style_connector->template_bgcolor_1 ?> 0%,<?php echo $style_connector->template_bgcolor_2 ?> 100%); /* IE10+ */
background: linear-gradient(to bottom,  <?php echo $style_connector->template_bgcolor_1 ?> 0%,<?php echo $style_connector->template_bgcolor_2 ?> 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $style_connector->template_bgcolor_1 ?>', endColorstr='<?php echo $style_connector->template_bgcolor_2 ?>',GradientType=0 ); /* IE6-8 */
<?php endif ?>

<?php if ($style_connector->template_picturebg != 0): ?>background-image:url('<?php echo $bgImageURL; ?>'); background-repeat:no-repeat;<?php endif ?>

<?php if ($style_connector->template_transparent_bg == 1): ?>background-color:transparent;<?php endif ?>
<?php if ($style_connector->template_transparent_bg != 1): ?> background-color:<?php echo $style_connector->tpl_bg_color; ?>;<?php endif ?>


}
div.optinWrapper {
<?php if ($style_connector->border_radius != ""): ?>border-bottom-left-radius:<?php echo $style_connector->border_radius; ?>;<?php endif ?>
<?php if ($style_connector->border_radius != ""): ?>border-bottom-right-radius:<?php echo $style_connector->border_radius; ?>;<?php endif ?>
background-color: <?php if ($style_connector->template_transparent_optin_bg == 1) : ?>transparent;<?php else: echo $style_connector->opt_in_bg_color; ?>;<?php endif ?>

}

tr.gradientBackgroundSettings {
<?php if ($style_connector->template_gradient != 1):?>display:none;<?php endif?>
}
tr.pictureBackgroundSettings {
<?php if ($style_connector->template_picturebg != 1):?>display:none;<?php endif?>
}
td.disabledOption {
color: #cccccc;
}

div.connectorDescriptionText {
  <?php if ($style_text->body_center == 1): ?>text-align: center;<?php endif ?>
}

/* if lightbox template builder then remove responsive settings */
tr.responsiveSettings {
<?php if ($style_connector->type == 2):?>display:none;<?php endif?>
}
div.optinPosition {
<?php if ($style_optin->email_centered ==1):?>margin-left:auto; margin-right:auto;<?php endif?>
}
div.facebookPosition {
<?php if ($style_optin->fb_centered ==1):?>margin-left:auto; margin-right:auto; <?php else: ?>margin-left:5px; margin-right:5px; <?php endif?>
}
div.oneClickPosition {
<?php if ($style_optin->oneclick_centered ==1):?>margin-left:auto; margin-right:auto;<?php else: ?>margin-left:5px; margin-right:5px; <?php endif?>
}

div.optinPositionInput {
  <?php if ($style_optin->email_centered !=1):?>text-align:left;<?php endif?>
}

div.emailInputField {
  <?php if ($style_button->emailNewLine ==1):?>display:block;<?php else: ?>display:inline;<?php endif?>
}

div.emailButtonContainer {
  <?php if ($style_button->buttonNewLine ==1):?>display:block;<?php else: ?>display:inline;<?php endif?>
}

tr.emailInputFieldSettingsContent {
  display:none;
}

tr.textSettingsContent {
  display:none;
}

tr.buttonSettingsContent {
  display:none;
}

tr.optInBoxSettingsContent {
  display:none;
}

tr.dropShadowSettingsContent {
  display:none;
}

tr.facebookSettingsContent {
  display:none;
}

tr.textShadowSettingsContent {
  display:none;
}

tr.bulletSettingsContent {
  display:none;
}

tr.ctatextSettingsContent {
  display:none;
}

tr.buttontextSettingsContent {
  display:none;
}

tr.textPositioningSettingsContent {
  display:none;
}

tr.privacyPolicySettingsContent {
  display:none;
}

tr.privacyTextSettingsContent {
  display:none;
}
tr.activationSettingsContent {
  display:none;
}
tr.triggerSettingsContent {
  display:none;
}
tr.frequencySettingsContent {
  display:none;
}
tr.animationSettingsContent {
  display:none;
}
tr.optinboxSettingsContent {
  display:none;
}

tr.myTemplatesSettingsContent {
  display:none;
}

tr.externalMarginSettingsContent {
  display:none;
}

tr.optinBoxPositionContent {
  display:none;
}

tr.slideInSettingsContent {
  display:none;
}

td.lightboxdisplay {
  float:left;
  vertical-align:middle;
}

th.expandable {
  height:28px;
  vertical-align:middle;
}

<?php if($lightbox_options->activated!="1") {   ?>
table.lightboxOptionsTable {
  display:none;
}
<?php } ?>

<?php if($lightbox_options->optin_activated!="1") {   ?>
table.optinbarOptions {
  display:none;
}
<?php } ?>

/* tr.connectorSettingsContent {
  display:none;
}  */

#templateCode th.expandable {
  background-image:url('<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/hcRowBackground.png');
  background-repeat:no-repeat;
}

.ppWrapper {
  <?php if ($style_connector->show_privacy_policy ==1):?>display:block;<?php else: ?>display:none;<?php endif?>
}

.privacyPolicy {
padding-left:10px;
padding-right:10px;
<?php if ($style_connector->center_privacy_policy ==1):?>margin:0px auto;<?php else: ?>margin-left:5px;<?php endif?>
}

td.lightboxTriggers{
  font-weight:bold;
  text-align:left !important;
  padding:10px !important;
}


.privacyPolicy span {
<?php if ($style_connector->bold_privacy_policy ==1):?>font-weight:bold;<?php else: ?>font-weight:normal;<?php endif?>
font-family: <?php echo $style_connector->privacy_policy_font; ?>;
font-size: <?php echo $style_connector->privacy_policy_size; ?>;
color: <?php echo $style_connector->privacy_policy_color; ?>;
margin-top:10px;
margin-bottom:0px;
margin-left:0px;
margin-right:0px;
line-height:25px;
}

#templateCode .connectorInputFields {

font-size:<?php echo $style_optin->field_font_size; ?>;
height: <?php echo $style_optin->field_height; ?>;
padding-top:<?php echo $style_optin->field_padding_top_bottom; ?>;
padding-bottom:<?php echo $style_optin->field_padding_top_bottom; ?>;
padding-left:<?php echo $style_optin->field_padding_left_right; ?>;
padding-right:<?php echo $style_optin->field_padding_left_right; ?>;
border-width: <?php echo $style_optin->field_border_width; ?>;
border-style: <?php echo $style_optin->field_border_style; ?>;
border-radius:<?php echo $style_optin->field_border_radius; ?>;
margin-top:2px;
margin-bottom:5px;
margin-left:5px;
margin-right:5px;
}

.privacyPolicyEmail {
  margin-top:<?php echo $style_connector->email_privacy_top_margin; ?>;
}

.privacyPolicyFacebook {
  margin-top:<?php echo $style_connector->facebook_privacy_top_margin; ?>;
}

.privacyPolicyOneClick {
  margin-top:<?php echo $style_connector->oneclick_privacy_top_margin; ?>;
}

div#monitorScreen {
/* if squeeze page then apply styles */
<?php if($style_connector->type=="3") {
echo "background-color:" . $squeeze_options->squeeze_bg_color . ";";

if($squeeze_options->squeeze_gradient_checkbox=="1") {    ?>

background: -moz-linear-gradient(top,  <?php echo $squeeze_options->squeeze_gradient_color1 ?> 0%, <?php echo $squeeze_options->squeeze_gradient_color2 ?> 100%); /* FF3.6+ */
background: -webkit-gradient(linear, left top, left bottom, color-stop(0%,<?php echo $squeeze_options->squeeze_gradient_color2 ?>), color-stop(100%,<?php echo $squeeze_options->squeeze_gradient_color1 ?>)); /* Chrome,Safari4+ */
background: -webkit-linear-gradient(top,  <?php echo $squeeze_options->squeeze_gradient_color1 ?> 0%,<?php echo $squeeze_options->squeeze_gradient_color2 ?> 100%); /* Chrome10+,Safari5.1+ */
background: -o-linear-gradient(top,  <?php echo $squeeze_options->squeeze_gradient_color1 ?> 0%,<?php echo $squeeze_options->squeeze_gradient_color2 ?> 100%); /* Opera 11.10+ */
background: -ms-linear-gradient(top,  <?php echo $squeeze_options->squeeze_gradient_color1 ?> 0%,<?php echo $squeeze_options->squeeze_gradient_color2 ?> 100%); /* IE10+ */
background: linear-gradient(to bottom,  <?php echo $squeeze_options->squeeze_gradient_color1 ?> 0%,<?php echo $squeeze_options->squeeze_gradient_color2 ?> 100%); /* W3C */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='<?php echo $squeeze_options->squeeze_gradient_color1 ?>', endColorstr='<?php echo $squeeze_options->squeeze_gradient_color2 ?>',GradientType=0 ); /* IE6-8 */

<?php } ?>
<?php

if($squeeze_options->squeeze_picture_checkbox) {
if(!$squeeze_options->repeat_y_axis && !$squeeze_options->repeat_x_axis && !$squeeze_options->squeeze_tile) { ?>
background-image:url('<?php echo $squeeze_options->squeeze_bgimage_url ?>');
background-image:no-repeat;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
<?php }  else { ?>

background-image:url('<?php echo $squeeze_options->squeeze_bgimage_url ?>');
<?php
if($squeeze_options->squeeze_tile){ $bgRepeat="tile"; }
if($squeeze_options->repeat_x_axis){ $bgRepeat="repeat-x"; }
if($squeeze_options->repeat_y_axis){ $bgRepeat="repeat-y"; }
?>
background-repeat:<?php echo $bgRepeat; ?>;

<?php
      }
     }
    }
?>

}

<?php if($squeeze_options->centre_aligned) {   ?>
/* if squeeze page is set to centre aligned then show centre */
#squeezeOptinDisplay {
background-image:url('<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/centralBackground.png');
}
#marginDisplay {
  display:none;
}
<?php } ?>

<?php if($squeeze_options->vertically_aligned) {   ?>
/* if squeeze page is set to centre aligned then show centre */
#squeezeOptinDisplay {
background-image:url('<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/topMarginBackground.png');
}
<?php } ?>

/*lightbox preview css */
    .lightbox_preview_overlay {

        background: #000000;
        opacity:0.8;
        height: 100%;
        left: 0;
        min-height: 350px;
        position: fixed;
        top: 0;
        width: 100%;
        z-index:3000 !important;
    }

 /*   .connectorWrapper {
      position:absolute;
      z-index:500000;
    }        */

   .connectorWrapper .lightbox-close {
        background-image: url("<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/lightbox-close.png");
        background-position: left top;
        background-repeat: no-repeat;
        float: right;
        height: 25px;
        margin-top: -25px;
        margin-right: -25px;
        width: 25px;
        z-index:300;
        position:relative;
    }
    .connectorWrapper .lightbox-close:hover {
        background-position: left bottom;
    }
    .lightbox_preview_overlay .lightbox-close:hover {
        background-position: left bottom;
    }

    /* END LIGHTBOX CONTENT */


</style>
<!--[if  ie 9]>
<style type="text/css" media="screen">
   #templateCode .navButton
    {
        border-radius: 0px !important;
    }
#templateCode .navButton:hover
    {
       border-radius: 0px !important;
    }
</style>
<![endif]-->
<style type="text/css">
    #templateCode body {
        font-family:verdana;
        font-size:12px;
    }
    #templateCode table {
        border-collapse:collapse;
    }
    #templateCode table td, table th {
        padding:5px;
        font-size:12px;
    }
    #templateCode table th {
        color:#ff0000;
        font-weight:bold;
        border-top:1px solid #666666;
        border-bottom:1px solid #666666;
        background:#ddddaa;
        background-image:url('<?php echo HYBRIDCONNECT_IAMGES_PATH ?>/hcRowBackgroundNonExpandable.png');
        background-repeat:no-repeat;
    }
    #templateCode .navButton {
        -moz-box-shadow:inset 0px 1px 0px 0px <?php echo $style_button->btn_box_shadow ?>;
        -webkit-box-shadow:inset 0px 1px 0px 0px <?php echo $style_button->btn_box_shadow ?>;
        box-shadow:inset 0px 1px 0px 0px <?php echo $style_button->btn_box_shadow ?>;
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, <?php echo $style_button->btn_bg_light ?> ), color-stop(1, <?php echo $style_button->btn_bg_color ?> ) );
        background:-moz-linear-gradient( center top, <?php echo $style_button->btn_bg_light ?> 5%, <?php echo $style_button->btn_bg_color ?>  100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $style_button->btn_bg_light ?>', endColorstr='<?php echo $style_button->btn_bg_color ?> ');
        background-color:<?php echo $style_button->btn_bg_color ?>;
        -moz-border-radius:6px;
        -webkit-border-radius:6px;
        border-radius:6px;
        border:1px solid <?php echo $style_button->btn_border_color ?>;
        display:inline-block;
        color:<?php echo $style_button->btn_font_color ?>;
        font-family:<?php echo $style_button->btn_font_family ?>;
        font-weight:bold;
        text-decoration:none;
        text-shadow:1px 1px 0px <?php echo $style_button->txt_shadow_color ?>;
        margin-bottom:5px;
        /* button font size and padding settings from slider */
        padding-left: <?php echo $style_button->button_lr_padding; ?>;
        padding-right: <?php echo $style_button->button_lr_padding; ?>;
        padding-top: <?php echo $style_button->button_tb_padding; ?>;
        padding-bottom: <?php echo $style_button->button_tb_padding; ?>;
        font-size: <?php echo $style_button->button_font_size; ?>;
        line-height: 140%;
    }
    #templateCode .navButton:hover {
        background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, <?php echo $style_button->btn_bg_light ?>), color-stop(1, <?php echo $style_button->btn_bg_light ?>) );
        background:-moz-linear-gradient( center top, <?php echo $style_button->btn_bg_light ?>5%, <?php echo $style_button->btn_bg_light ?> 100% );
        filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='<?php echo $style_button->btn_bg_light ?>', endColorstr='<?php echo $style_button->btn_bg_light ?>');
        background-color:#dfdfdf;
        color:<?php echo $style_button->btn_font_color ?>;
    }
  /*  #templateCode #stylized {
        font-size:15px;
        padding-left:3px;
        padding-right:3px;
        border:solid 1px #920000;
        margin:2px 5px 5px 5px;
        height:30px;
        line-height: 30px;
    }  */
    #templateCode #demo-frame > div.demo { padding: 10px !important; }
    #templateCode div.tabOptions {
        width:500px;
    }
    #templateCode input.color-picker{
        width:66px;
    }
    /* scrolling template jquery */
    #demo-frame > div.demo { padding: 10px !important; }
    .scroll-pane { overflow: auto; width: 545px; float:left; }
    .scroll-content { width: 2700px; float: left; }
    .scroll-content-item { width: 100px; height: 317px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center; float:left;  }
    .scroll-content-item-5 { width: 300px; height: 100px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center; float:left; }
    .scroll-content-item-7 { width: 100px; height: 101px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left;}
    .scroll-content-item-8 { width: 300px; height: 157px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left; }
    .scroll-content-item-10 { width: 300px; height: 196px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left; }
    .scroll-content-item-9 { width: 300px; height: 109px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left; }
    .scroll-content-item-wide { width: 300px; height: 151px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left; }
    .scroll-content-item-wide-slim { width: 300px; height: 51px; float: left; margin: 10px; font-size: 3em; line-height: 96px; text-align: center;  float:left; }
    * html .scroll-content-item { display: inline; } /* IE6 float double margin bug */
    .scroll-bar-wrap { clear: left; padding: 0 4px 0 2px; margin: 0 -1px -1px -1px; }
    .scroll-bar-wrap .ui-slider { background: none; border:0; height: 2em; margin: 0 auto;  }
    .scroll-bar-wrap .ui-handle-helper-parent { position: relative; width: 100%; height: 100%; margin: 0 auto; }
    .scroll-bar-wrap .ui-slider-handle { top:.2em; height: 1.5em; }
    .scroll-bar-wrap .ui-slider-handle .ui-icon { margin: -8px auto 0; position: relative; top: 50%; }
    .templateGraphic { border:0px !important; }
    #templateCode .connectorDescriptionText p {
        font-size: <?php echo $style_text->border_font_size ?>;
        font-family: <?php echo $style_text->border_font_family ?>;
        color:  <?php echo $style_text->border_font_color ?>;
        line-height: 140%;
        margin-bottom: 5px;
        margin-top:5px;
        margin-left:<?php echo $style_text->text_left_margin; ?>;
        margin-right:<?php echo $style_text->text_right_margin; ?>;
        
    }
    #templateCode .connectorDescriptionText{
        line-height: 140%;
    }
    /* updates for email only additions version 1.53*/
    <?php if($my_connector->emailOnly=="1") { ?>
      input.nameConnectorInputField {
         display:none;
       }
    <?php } ?>

</style>
<div class=" fb_reset" id="fb-root"><div></div></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '127118057392683',
            status     : true,
            cookie     : true,
            xfbml      : true,
            oauth      : true
        });
    };
    (function(d){
        var js, id = 'facebook-jssdk'; if (d.getElementById(id)) {return;}
        js = d.createElement('script'); js.id = id; js.async = true;
        js.src = "http://connect.facebook.net/en_US/all.js";
        d.getElementsByTagName('head')[0].appendChild(js);
    }(document));
</script>