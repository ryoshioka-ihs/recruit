/* Javascript */
/* 切り替え幅 */
var replaceWidth = 768;

$(document).ready(function(){


 	// セミナー締切日の翌日になったら受付状況「受付終了」に変更（セミナー一覧ページ、セミナー詳細ページ共通）
  	hideFinishedDateSeminarStop(); 

	// セミナー受付終了日の翌日になったらプルダウンを非表示（セミナーお申込みフォーム）
  	//hideFinishedDateSeminarForm();

	// セミナー開催日の当日になったらプルダウンを非表示（セミナーキャンセルお申込みフォーム）
  	//hideFinishedDateSeminarCancelForm();

 	// セミナー受付終了日の翌日になったら日程削除（セミナー一覧ページ、セミナー詳細ページ共通）
  	hideFinishedDateSeminar(); 


});

//======================================================================================================
// hideFinishedDateSeminar()
// 機能  ：セミナー受付終了日の翌日になったら日程非表示（セミナー一覧ページ、セミナー詳細ページ共通）

// 引数  ：
// 戻り値：
//======================================================================================================
function hideFinishedDateSeminar() {
	$sessions = jQuery('.session .date');
	if ( $sessions.length <= 0 ) {
		return;
	}

	var today = new Date();

	$sessions.each( function() {
		var date  = $(this).text();
		var match = date.match(/([0-9]{4})年([0-9]{1,2})?月([0-9]{1,2})?日/);
		var year  = match[1];
		var month = Number(match[2]) - 1; /* JSのDateは月を0-11で扱うため調整 */
		var day   = Number(match[3]) + 1; /* 当日の日付まで表示するため調整 */
		var session_date = new Date(year, month, day);

		if (today.getTime() > session_date.getTime()) {
			$(this).closest('tr').hide();
		}
	});
}

//======================================================================================================
// hideFinishedDateSeminarStop()
// 機能  ：セミナー締切日の翌日になったら受付締切日に「受付終了」を表示する（セミナー一覧ページ、セミナー詳細ページ共通）
// 引数  ：
// 戻り値：
//======================================================================================================
function hideFinishedDateSeminarStop() {
	$sessions = jQuery('.session .apply');
	if ( $sessions.length <= 0 ) {
		return;
	}

	var today = new Date();

	$sessions.each( function() {
		var apply  = $(this).text();
		var match = apply.match(/([0-9]{4})年([0-9]{1,2})?月([0-9]{1,2})?日/);
		var year  = match[1];
		var month = Number(match[2]) - 1; /* JSのDateは月を0-11で扱うため調整 */
		var day   = Number(match[3]) + 1; /* 当日の日付まで表示するため調整 */
		var session_apply = new Date(year, month, day);

		if (today.getTime() > session_apply.getTime()) {
			$(this).closest('td').text('受付終了');
		}
	});
}



