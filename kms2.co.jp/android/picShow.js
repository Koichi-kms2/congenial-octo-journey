var actChk = new Array(5) ; // 画像表示を実行済みかのチェック用 0=未実行、1=実行済
//--------------------------------------
// info.htmlから更新データを取得
//--------------------------------------
function infoGet(){
	var innerId // 挿入場所
	
	// actChkを初期化
	for(iii=0; iii < actChk.length; iii++){
		actChk[iii] = 0;
	}
	
	// お知らせの内容を取得
	var obj = info.document.getElementsByTagName('div');
	
	// New画像、Update画像表示処理
	for(var i = 0; i < obj.length; i++){
		// 全てのアプリで画像表示処理が行われている場合は終了
		var num = 0;
		for(iii=0; iii < actChk.length; iii++){
			num += actChk[iii];
		}
		if(num == actChk.length){
			return;
		}
		
		// クラス名が"smlfont"は対象外なので除外、それ以外は処理をする
		if(obj[i].className != "smlfont"){
			newPic(obj[i].innerHTML);
		}
	}
	
	// Soon画像表示処理
	for(iii=0; iii < actChk.length; iii++){
		// 画像表示処理をしていないならSoon画像を表示
		if(actChk[iii] == 0){
			innerId = "app" + iii;
			document.getElementById(innerId).innerHTML = '<img src="soon.png" alt="作成中">';
		}
	}
}
//--------------------------------------
// 各アプリの欄に画像を表示する処理
//--------------------------------------
function newPic(str){
	var str1;
	var str2;
	var tod; // 現在日
	var upd; // アップデート日
	var innerId // 挿入場所
	var appNum // アプリ番号
	
	tod = new Date();
	
	// 取得した文字列を更新日、アプリ名、更新内容に分ける
	str1 = str.split(" ");
	
	// 分けた結果が3より少ないなら対象外なので処理を終了する
	if(str1.length < 3){
		return;
	}
	
	// 更新日を分ける
	str2 = str1[0].split("/");
	
	// 更新日をDate型として取得する
	upd = new Date(str2[0] ,str2[1]-1 ,str2[2]);
	
	// アプリ名の存在チェック
	appNum = appName(str1[1]);
	
	// appNumが"-1"の場合はアプリが存在していないので処理を終了する
	if(appNum == -1){
		return;
	}
	
	// 更新したのが90日未満ならnew画像を出す処理をする
	if((tod-upd)/86400000 < 90){
		// 画像表示処理済なら処理を終了
		if(actChk[appNum] == 1){
			return;
		}
		
		// 画像の挿入場所を示すIDを作成
		innerId = "app" + appNum;
		
		// 新規登録ならNew画像、更新ならUpdate画像を表示する
		for(iii=2; iii < str1.length; iii++){
			if(str1[iii].indexOf("新規") >= 0){
				document.getElementById(innerId).innerHTML = '<img src="new.png" alt="新規">';
				
				// 処理済フラグを立てる
				actChk[appNum] = 1
			}else if(str1[iii].indexOf("更新") >= 0){
				document.getElementById(innerId).innerHTML = '<img src="update.png" alt="更新">';
				
				// 処理済フラグを立てる
				actChk[appNum] = 1
			}
		}
	}else{
		// 処理済フラグを立てる
		actChk[appNum] = 1;
	}
}
//--------------------------------------
// アプリ名が存在するかチェックし、あるなら番号を返す
//--------------------------------------
function appName(name){
	switch(name){
		case "ArClock":
			return 0;
			break;
		case "Eagle":
			return 1;
			break;
		case "Loto6Sense":
			return 2;
			break;
		case "RReversi":
			return 3;
			break;
		case "MManners":
			return 4;
			break;
		default:
			return -1;
	}
}
