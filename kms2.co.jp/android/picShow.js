var actChk = new Array(5) ; // �摜�\�������s�ς݂��̃`�F�b�N�p 0=�����s�A1=���s��
//--------------------------------------
// info.html����X�V�f�[�^���擾
//--------------------------------------
function infoGet(){
	var innerId // �}���ꏊ
	
	// actChk��������
	for(iii=0; iii < actChk.length; iii++){
		actChk[iii] = 0;
	}
	
	// ���m�点�̓��e���擾
	var obj = info.document.getElementsByTagName('div');
	
	// New�摜�AUpdate�摜�\������
	for(var i = 0; i < obj.length; i++){
		// �S�ẴA�v���ŉ摜�\���������s���Ă���ꍇ�͏I��
		var num = 0;
		for(iii=0; iii < actChk.length; iii++){
			num += actChk[iii];
		}
		if(num == actChk.length){
			return;
		}
		
		// �N���X����"smlfont"�͑ΏۊO�Ȃ̂ŏ��O�A����ȊO�͏���������
		if(obj[i].className != "smlfont"){
			newPic(obj[i].innerHTML);
		}
	}
	
	// Soon�摜�\������
	for(iii=0; iii < actChk.length; iii++){
		// �摜�\�����������Ă��Ȃ��Ȃ�Soon�摜��\��
		if(actChk[iii] == 0){
			innerId = "app" + iii;
			document.getElementById(innerId).innerHTML = '<img src="soon.png" alt="�쐬��">';
		}
	}
}
//--------------------------------------
// �e�A�v���̗��ɉ摜��\�����鏈��
//--------------------------------------
function newPic(str){
	var str1;
	var str2;
	var tod; // ���ݓ�
	var upd; // �A�b�v�f�[�g��
	var innerId // �}���ꏊ
	var appNum // �A�v���ԍ�
	
	tod = new Date();
	
	// �擾������������X�V���A�A�v�����A�X�V���e�ɕ�����
	str1 = str.split(" ");
	
	// ���������ʂ�3��菭�Ȃ��Ȃ�ΏۊO�Ȃ̂ŏ������I������
	if(str1.length < 3){
		return;
	}
	
	// �X�V���𕪂���
	str2 = str1[0].split("/");
	
	// �X�V����Date�^�Ƃ��Ď擾����
	upd = new Date(str2[0] ,str2[1]-1 ,str2[2]);
	
	// �A�v�����̑��݃`�F�b�N
	appNum = appName(str1[1]);
	
	// appNum��"-1"�̏ꍇ�̓A�v�������݂��Ă��Ȃ��̂ŏ������I������
	if(appNum == -1){
		return;
	}
	
	// �X�V�����̂�90�������Ȃ�new�摜���o������������
	if((tod-upd)/86400000 < 90){
		// �摜�\�������ςȂ珈�����I��
		if(actChk[appNum] == 1){
			return;
		}
		
		// �摜�̑}���ꏊ������ID���쐬
		innerId = "app" + appNum;
		
		// �V�K�o�^�Ȃ�New�摜�A�X�V�Ȃ�Update�摜��\������
		for(iii=2; iii < str1.length; iii++){
			if(str1[iii].indexOf("�V�K") >= 0){
				document.getElementById(innerId).innerHTML = '<img src="new.png" alt="�V�K">';
				
				// �����σt���O�𗧂Ă�
				actChk[appNum] = 1
			}else if(str1[iii].indexOf("�X�V") >= 0){
				document.getElementById(innerId).innerHTML = '<img src="update.png" alt="�X�V">';
				
				// �����σt���O�𗧂Ă�
				actChk[appNum] = 1
			}
		}
	}else{
		// �����σt���O�𗧂Ă�
		actChk[appNum] = 1;
	}
}
//--------------------------------------
// �A�v���������݂��邩�`�F�b�N���A����Ȃ�ԍ���Ԃ�
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
