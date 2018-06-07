var animacaoFrame = 0;

const animacaoUrso = [
	'https://raw.githubusercontent.com/gabrieldarezzo/helpjs-ravi/master/images/chara-1.png',
	'https://raw.githubusercontent.com/gabrieldarezzo/helpjs-ravi/master/images/chara-2.png',
	'https://raw.githubusercontent.com/gabrieldarezzo/helpjs-ravi/master/images/chara-3.png',
];

setInterval(function(){
	document.getElementById("urso-img").src = animacaoUrso[animacaoFrame];
	
	animacaoFrame++;
	if(animacaoFrame > 2) {
		animacaoFrame = 0;
	}
}, 200);