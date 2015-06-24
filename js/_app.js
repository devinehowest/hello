var lyrics = [];
var devine = [];

(function(){

	var skills = [];

	function loadSkills(){
		var xhr = new XMLHttpRequest();
		xhr.addEventListener('load', function(){
			var data = JSON.parse(xhr.responseText);
			skills = data.skills;
			displaySkills();
		});
		xhr.open('GET', 'data/skills.json');
		xhr.send();
	}

	function init(){
		console.log("hello(); is the function you're looking for")
		console.log("also try credits();")
		loadSkills();
	}

	function displaySkills(){

		[].forEach.call(document.querySelectorAll('.skill'), function(el){
			el.parentNode.removeChild(el);
		});

		var __skills = document.querySelector('.skills');
		var __add = document.querySelector('.add');
		for(var i = 0;i < skills.length;i++){
			var __li = document.createElement('li');
			__li.classList.add('skill');
			__li.innerText = skills[i];
			__skills.insertBefore(__li, __add);
		}
	}
	
	init();

})();

init2();

function init2(){

	var xhr = new XMLHttpRequest();
	xhr.addEventListener('load', function(){
		var data = xhr.responseText;
		lyrics = data.split(';\n');
	});
	xhr.open('GET', 'data/lyrics.csv');
	xhr.send();

	var xhr2 = new XMLHttpRequest();
	xhr2.addEventListener('load', function(){
		var data = xhr2.responseText;
		devine = data.split('\n');
	});
	xhr2.open('GET', 'data/devine.csv');
	xhr2.send();

}

window.hello = function(){
	document.querySelector('audio').play();
	for(var i = 0;i < lyrics.length;i ++){
		setTimeout(window.logLyric, i * 500, i)
	}
}

window.credits = function(){
	for(var i = 0;i < devine.length;i ++){
		setTimeout(window.logCredit, i * 100, i)
	}
}

window.logLyric = function(id){
	console.log(lyrics[id]);
}

window.logCredit = function(id){
	console.log(devine[id]);
}