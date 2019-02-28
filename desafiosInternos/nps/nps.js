var npsScoreArr = {
	bad : [0, 1, 2, 3, 4, 5, 6],
	mid : [7, 8],
	happy : [9, 10],
};

var npsFullBlock = '';

for(typeNps in npsScoreArr) {
	npsScoreArr[typeNps].map(function(npsScore) {
		var npsBlockHtml = `
		<div class="nps-block" data-nps="${npsScore}">
			<img src="${typeNps}.png" />
			<div class="score">${npsScore}</div>
		</div>
		`;
		npsFullBlock = npsFullBlock + npsBlockHtml;
	});
}
document.getElementById("nps-div").innerHTML = npsFullBlock;


function cleanOpactiy() {
	var fields = document.getElementsByClassName("nps-block");
	for (var i = 0; i < fields.length; i++) {
		fields[i].style.opacity = 1;
	}
}

function cleanClass() {
	var fields = document.getElementsByClassName("nps-block");
	for (var i = 0; i < fields.length; i++) {
		fields[i].className = 'nps-block';
	}
}

var fields = document.getElementsByClassName("nps-block");

for (var i = 0; i < fields.length; i++) {
	fields[i].addEventListener('mouseout',  function() {
		cleanOpactiy();		
	}, false);
}

for (var i = 0; i < fields.length; i++) {
	fields[i].addEventListener('mouseover',  function() {
		cleanOpactiy();
		this.style.opacity = 0.5;
	}, false);
}


for (var i = 0; i < fields.length; i++) {
	fields[i].addEventListener('click',  function() {
		cleanClass();
		this.className = 'nps-block nps-block-click';
		alert(this.dataset.nps)
	}, false);
}

/*
'bad.png'
'mid.png'
'happy.png'
*/
