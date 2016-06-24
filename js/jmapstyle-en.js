/* Javascript */

//======================================================================================================
// googleMap表示用Javascript
//======================================================================================================

/*map表示*/
$(function () {

	/*アイコンの設置座標を設定*/
	var latlng = new google.maps.LatLng(35.7057636, 139.760496);

	var myOptions = {
		zoom: 18,
		center: latlng,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		panControl: false,
		zoomControl: false,
		mapTypeControl: false,
		scaleControl: false,
		streetViewControl: false,
		overviewMapControl: false,
		scrollwheel: false
	};

	var map = new google.maps.Map(document.getElementById('mapCanvas'), myOptions);

	/*アイコン設定*/
	var icon = {
		url : '/image/common/icon_pin.png',
		scaledSize : new google.maps.Size(92,53)
	}

	/*アイコンの設置*/
	var markerOptions = {
		position: latlng,
		map: map,
		icon: icon,
		title: 'IIMヒューマン・ソリューション'
	};

	var marker = new google.maps.Marker(markerOptions);

	/*スタイルの変更*/
	var styleOptions = [{
		"featureType": "all",
		"stylers": [{ "hue": '#0c74ec' }]
	}];

	var changeStyleType = new google.maps.StyledMapType(styleOptions);
	map.mapTypes.set('style', changeStyleType);
	map.setMapTypeId('style');

	//ウィンドウをリサイズしたら再度読み込み
	google.maps.event.addDomListener(window, 'resize', function(){
		map.panTo(latlng);//地図のインスタンス([map]) 
	});

    //クリックしたら指定したurlに遷移するイベント
	google.maps.event.addListener(marker, 'click', function() {
		window.open("https://goo.gl/Ma3Zs7" );
	});

});