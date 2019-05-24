// その他のJavaScriptライブラリ and 一括指定定義など

// 画面遷移アニメーション設定
$(document).bind('mobileinit', function(){
  $.mobile.defaultPageTransition = 'slide';
});

// テーマ設定

$(document).on("mobileinit", function(e) {

  var default_kms2_theme = "d";

  // ページ -------------------------------------------------------------------
  // 全体のテーマ
  $.mobile.page.prototype.options.theme              = default_kms2_theme;
  // ヘッダーのテーマ
  $.mobile.page.prototype.options.headerTheme        = default_kms2_theme;
  // コンテンツのテーマ
  $.mobile.page.prototype.options.contentTheme       = default_kms2_theme;
  // フッターのテーマ
  $.mobile.page.prototype.options.footerTheme        = default_kms2_theme;
  // 戻るボタンのテーマ
  $.mobile.page.prototype.options.backBtnTheme       = default_kms2_theme;

  // ボタン -------------------------------------------------------------------
  // ボタンのテーマ
  $.mobile.button.prototype.options.theme            = default_kms2_theme;

  // スライダー ---------------------------------------------------------------
  // 取っ手部分のテーマ
  $.mobile.slider.prototype.options.theme            = default_kms2_theme;
  // トラック部分のテーマ
  $.mobile.slider.prototype.options.trackTheme       = default_kms2_theme;

  // セレクトメニュー ---------------------------------------------------------
  // メニューを呼び出すボタンのテーマ
  $.mobile.selectmenu.prototype.options.theme        = default_kms2_theme;
  // リストの周辺枠のテーマ
  $.mobile.selectmenu.prototype.options.overlayTheme = default_kms2_theme;

  // リストビュー -------------------------------------------------------------
  // テーマ
  $.mobile.listview.prototype.options.theme          = default_kms2_theme;
  // 項目数をカウントする表示のテーマ
  $.mobile.listview.prototype.options.countTheme     = default_kms2_theme;
  // 区切り項目のテーマ
  $.mobile.listview.prototype.options.dividerTheme   = default_kms2_theme;
  // 分割領域のアイコンのテーマ
  $.mobile.listview.prototype.options.splitTheme     = default_kms2_theme;
  // フィルターのテーマ
  $.mobile.listview.prototype.options.filterTheme    = default_kms2_theme;
  // ヘッダーのテーマ
  $.mobile.listview.prototype.options.headerTheme    = default_kms2_theme;

});

