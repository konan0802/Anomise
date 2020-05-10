var map;
var infoWindow = [];
var markerDatas = [];

function initMap() {
    //地図の作成
    var  currentLocation = new google.maps.LatLng({lat: 35.702139, lng: 139.543658}); //現在地に変更
    var opts = {
      center: currentLocation, // 地図の中心を指定
      zoom: 17, // 地図のズームを指定
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    var map = new google.maps.Map(document.getElementById("map"), opts);
    //各マーカーの作成
    for (var i = 0; i < reqestDatas.length; i++) {
      reqestdata = new google.maps.LatLng({lat: reqestDatas[i]['lat'], lng: reqestDatas[i]['lng']}); // 緯度経度のデータ作成
      markerDatas[i] = new google.maps.Marker({
        position: reqestdata, // マーカーを立てる位置を指定
        map: map, // マーカーを立てる地図を指定
        title: reqestDatas[i]['name']
      });
      infoWindow[i] = new google.maps.InfoWindow({ // 吹き出しの追加
        content: '<div class="map"><b>' + reqestDatas[i]['name'] + '</b></div>' // 吹き出しに表示する内容
      });
      markerEvent(i);
    }
    google.maps.event.addDomListener(window, 'resize', function(){
      map.panTo(currentLocation);//地図のインスタンス([map])
    });
}
function markerEvent(i) {
  google.maps.event.addListener(markerDatas[i], 'click', function() { // マーカーをクリックしたとき
    infoWindow[i].open(map, markerDatas[i]); // 吹き出しの表示
    var name_tr = document.getElementById('info_name');
    var name_th = document.getElementById('info_name_child');
    var description_tr = document.getElementById('info_description');
    var description_th = document.getElementById('info_description_child');

    //詳細画面の表示
    //子要素の削除
    name_tr.removeChild(name_th);
    description_tr.removeChild(description_th);

    //文の作成
    var name = document.createTextNode(reqestDatas[i]['name']);
    var description = document.createTextNode(reqestDatas[i]['description']);

    //タグの作成
    var name_th = document.createElement('td');
    var description_th = document.createElement('td');

    //タグに追加
    name_th.appendChild(name);
    description_th.appendChild(description);

    name_th.setAttribute("id", 'info_name_child');
    description_th.setAttribute("id", 'info_description_child');

    //タグを親要素に追加
    name_tr.appendChild(name_th);
    description_tr.appendChild(description_th);
  });
  //google.maps.event.trigger(markerDatas[i], "click");
}
