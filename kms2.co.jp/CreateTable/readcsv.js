function loadTextFile(){
	httpObj = createXMLHttpRequest(displayData);
		if (httpObj) {
			httpObj.open("GET","ContractContent.csv",true);
			httpObj.send(null);
		}
}

var ajax_filter = function(t){return t};

if(navigator.appVersion.indexOf( "KHTML" ) > -1){
	ajax_filter = function(t){
		var esc = escape(t);
		return(esc.indexOf("%u") < 0 && esc.indexOf("%") > -1) ? decodeURIComponent(esc) : t
	}
}

function displayData(){
	if ((httpObj.readyState == 4) && (httpObj.status == 200)){
		var text = ajax_filter(httpObj.responseText);
		document.getElementById("result").innerHTML = parseText(text);
	}
}

function parseText(str){
	var resultText = "<table border=1 summary=\"募集要項\">";
	var returnText = resultText;
	var CR = String.fromCharCode(13);
	var LF = String.fromCharCode(10);
	lineData = str.split(CR);
	
	for (var i = 0; i < lineData.length - 1; i++){
		
		var k = 0;
		var l = 0;
		
		strText = lineData[i].split(",");
		
		if (i == 0) {
			resultText = "<tr bgcolor = \"#FFFF00\">";
		} else {
			resultText = "<tr>";
		}
		
		for (var j = 0; j < strText.length; j++){
			
			var m = 0;
			var n = 0;
			
			// 特殊項目(","・"\""・改行の使用)の処理
			// 特殊状態(項目の先頭が"\"")であることの判別
			if (strText[j].charAt(0) == "\"" || strText[j].charAt(1) == "\"") {
				
				if (strText[j].charAt(0) == "\"") {
					strText[j] = strText[j].slice(1);
				} else {
					strText[j] = strText[j].slice(2);
				}
				
				// TypeA：","使用時
				for (k = j + 1; strText[j].slice(-1) != "\"" || strText[j].slice(-2) == "\"\"" && strText[j].slice(-3) != "\"\"\""; k++) {
					strText[j] += "," + strText[k];
					m = 1;
				}
				
				// TypeB："""使用時
				if (strText[j].search("\"\"")) {
					strText[j] = strText[j].replace(/\"\"/g,"\"");
				}
				
				// "\""(項目終)の削除
				strText[j] = strText[j].slice(0,-1);
				
				// TypeC：改行使用時
				for(;;) {
					if (strText[j].match("\n")) {
						strText[j] = strText[j].substring(0,strText[j].indexOf("\n")) + "<br>" + strText[j].slice(strText[j].indexOf("\n")+1);
					} else {
						break;
					}
				}
			}
			
			if(l == 0){
				resultText += "<td width = \"150\">" + strText[j] + "</td>";
			}
			if(l == 1){
				resultText += "<td width = \"70\">" + strText[j] + "</td>";
			}
			if(l == 2){
				resultText += "<td width = \"215\">" + strText[j] + "</td>";
			}
			if(l == 3){
				resultText += "<td width = \"103\">" + strText[j] + "</td>";
			}
			
			if (m == 1) { j = j + k - 1; }
			l++;
		}
		resultText += "</tr>";
		
		if (resultText == "<tr></tr>") {
		} else {
			returnText += resultText;
		}
		
	}
	
	returnText += "</table>"
	return returnText;
}