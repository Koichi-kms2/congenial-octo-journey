// ユーザ作成カスタムJavaScript

// google map
$(function(){
  $('#p-map').bind('pageshow',function(){
    var latlng = new google.maps.LatLng(35.691923,139.780091);

    var options = {
      zoom: 15,
      center: latlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById('id-map'), options);

    var marker = new google.maps.Marker({
      position: latlng, 
      map: map,
      title: "株式会社ケーエムエス２"
    });

    var pageHeight = $(document).innerHeight() * 0.8;
    $('#id-map').css('height',pageHeight);
  });
});


// 左右スワイプで画面遷移
$(function(){

/* XXX --- スワイプ判定（移動値）の微調整が必要
  $("#p-home").bind("swipeleft", function(){ $.mobile.changePage( "#p-president-message" ); });
  $("#p-president-message").bind("swipeleft", function(){ $.mobile.changePage( "#p-concept" ); });
  $("#p-concept").bind("swipeleft", function(){ $.mobile.changePage( "#p-business-introduction" ); });
  $("#p-business-introduction").bind("swipeleft", function(){ $.mobile.changePage( "#p-corporate-guidance" ); });
  $("#p-corporate-guidance").bind("swipeleft", function(){ $.mobile.changePage( "#p-map" ); });
  $("#p-recruit-comment-all").bind("swipeleft", function(){ $.mobile.changePage( "#p-recruit-new" ); });
  $("#p-recruit-new").bind("swipeleft", function(){ $.mobile.changePage( "#p-recruit-new-applicant" ); });
  $("#p-recruit-new-applicant").bind("swipeleft", function(){ $.mobile.changePage( "#p-recruit-new-explanation" ); });
  $("#p-recruit-new-explanation").bind("swipeleft", function(){ $.mobile.changePage( "#p-recruit-new-faq" ); });
  $("#p-recruit-new-faq").bind("swipeleft", function(){ $.mobile.changePage( "#p-contact" ); });
  $("#p-recruit-career").bind("swipeleft", function(){ $.mobile.changePage( "#p-recruit-career-applicant" ); });
  $("#p-recruit-career-applicant").bind("swipeleft", function(){ $.mobile.changePage( "#p-contact" ); });
  $("#p-recruit-contract-worker").bind("swipeleft", function(){ $.mobile.changePage( "#p-contact" ); });
  $("#p-contact").bind("swipeleft", function(){ $.mobile.changePage( "#p-privacy-policy" ); });

  $("#p-home").bind("swiperight", function(){ $.mobile.changePage( "#p-menu" , { reverse: "true" } ); });
  $("#p-concept").bind("swiperight", function(){ $.mobile.changePage( "#p-president-message" , { reverse: "true" } ); });
  $("#p-business-introduction").bind("swiperight", function(){ $.mobile.changePage( "#p-concept" , { reverse: "true" } ); });
  $("#p-corporate-guidance").bind("swiperight", function(){ $.mobile.changePage( "#p-business-introduction" , { reverse: "true" } ); });
  $("#p-map").bind("swiperight", function(){ $.mobile.changePage( "#p-corporate-guidance" , { reverse: "true" } ); });
  $("#p-recruit-new").bind("swiperight", function(){ $.mobile.changePage( "#p-recruit-comment-all" , { reverse: "true" } ); });
  $("#p-recruit-new-applicant").bind("swiperight", function(){ $.mobile.changePage( "#p-recruit-new" , { reverse: "true" } ); });
  $("#p-recruit-new-explanation").bind("swiperight", function(){ $.mobile.changePage( "#p-recruit-new-applicant" , { reverse: "true" } ); });
  $("#p-recruit-new-faq").bind("swiperight", function(){ $.mobile.changePage( "#p-recruit-new-explanation" , { reverse: "true" } ); });
  $("#p-recruit-career-applicant").bind("swiperight", function(){ $.mobile.changePage( "#p-recruit-career" , { reverse: "true" } ); });
--- XXX */

});

