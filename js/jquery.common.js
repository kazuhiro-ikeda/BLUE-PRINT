/*
Author : Kazuhiro Ikeda
*/

$(function(){
	
	//pagetop
	$(function() {
	    var topBtn = $('hoge');    
	    topBtn.hide();
	    //スクロールが100に達したらボタン表示
	    $(window).scroll(function () {
	        if ($(this).scrollTop() > 300) {
	            topBtn.fadeIn();
	        } else {
	            topBtn.fadeOut();
	        }
	    });
	    //スクロールしてトップ
	    topBtn.click(function () {
	        $('body,html').animate({
	            scrollTop: 0
	        }, 500);
	        return false;
	    });
	});
	
	//スティッキーヘッダー
	$(window).scroll(function(){
		if ($(window).scrollTop() > 100) {
			$('hoge').addClass('fixed');
		} else {
			$('hoge').removeClass('fixed');
		}
	});
	
	//画像切り替え
	$(window).on('load resize', function(){
		var windowWidth=window.innerWidth;
		$('.branch img').each(function(){
			var $obj=$(this);
			var imgSrc=$obj.attr('src');
			var ext=imgSrc.split(".").pop();
			if(windowWidth<=640){
				if(!$obj.hasClass('figure_s')){
					var replaceSrc=imgSrc.replace('.'+ext,'_s.'+ext);
					$obj.addClass('figure_s').attr('src',replaceSrc);
				}
			} else {
				if($obj.hasClass('figure_s')){
					var replaceSrc=imgSrc.replace('_s.'+ext,'.'+ext);
					$obj.removeClass('figure_s').attr('src',replaceSrc);
				}
			}
		});
	});			
			    
	//スムーススクロール
	$('a').click(function(e){
	    var anchor = $(this),
	        href = anchor.attr('href'),
	        pagename = window.location.href;
	 
	    // 現在のurlのハッシュ以降を削除
	    pagename = pagename.replace(/#.*/,'');
	 
	    // リンク先のurlから現在の表示中のurlを削除
	    href = href.replace( pagename , '' );
	 
	    if( href.search(/^#/) >= 0 ){
	      // 整形したリンクがページ内リンクの場合はページ無いスクロールの対象とする
	      // 通常の遷移処理をキャンセル
	      e.preventDefault();
	      var speed = 500;
	      // 前段階で整形したhrefを使用する
	      // var href= $(this).attr("href");
	      var target = $(href == "#" || href == "" ? 'html' : href);
	      var position = target.offset().top;
	      $("html, body").animate({scrollTop:position}, speed, "swing");
	 
	      // ロケーションバーの内容を書き換え
	      location.hash = href ;
	      return false;
	    }
	});

	//トグルパネル
	$( ".toggle" ).css( "cursor", "pointer" );
	$( ".toggle" ).on( "click", function() {
		var panelId = $(this).attr( "data-title" );
		var panel = "#" + panelId;
		$(this).toggleClass( "active" );//開いた時、ボタンにクラスを追加
		$(panel).fadeToggle( "fast" );//”slow”、”normal”、”fast”
	});
	
	$('#global_s a').on('click', function(){
        if (window.innerWidth <= 640) {
            $('.toggle').click();
        }
    });
    
    $( ".toggle_nav_s" ).css( "cursor", "pointer" );
	$( ".toggle_nav_s" ).on( "click", function() {
		var panelId = $(this).attr( "data-title" );
		var panel = "#" + panelId;
		$(this).toggleClass( "active" );//開いた時、ボタンにクラスを追加
		$(panel).fadeToggle( "fast" );//”slow”、”normal”、”fast”
	});
	
	$("footer .drawer .parent.n1").attr("data-title","link_a");
	$("footer .drawer #link_1").attr("id","link_a");
	$("footer .drawer .parent.n2").attr("data-title","link_b");
	$("footer .drawer #link_2").attr("id","link_b");	
	
	
	//投稿コンテンツの段落にクリアフィックス
	$( '.single-content p' ).addClass( 'cl' );
				
	//IE ACTIVE FOCUS remove outline
	if (document.documentElement.attachEvent)
	    document.documentElement.attachEvent('onmousedown',function(){
	    	event.srcElement.hideFocus=true
	});	
	
	//MW WP Form 必須
	$( '#mw_wp_form_mw-wp-form-識別ナンバー select option[value=""]' ).html( 'お問合せ内容を選択' );
	
	$('#day_field').attr({
	  'readonly': 'readonly',
	  'onfocus': 'this.blur()'
	});
	
	//br 除去
	$( '.hoge' ).find( 'br' ).replaceWith( '' );
			
			
});// END TAG