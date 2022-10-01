function daf(){
	let body=document.body;
	let icon=document.getElementById('dlicon');
	icon.classList.toggle("fa-moon");
	icon.classList.toggle("fa-sun");
   body.classList.toggle("darkmode");

   let dicon=document.getElementById('dlicon');
   dicon.classList.toggle("fa-moon");
   dicon.classList.toggle("fa-sun");
   
}

var money_min=document.getElementById("money_min")
var money_max=document.getElementById("money_min")
var ran_min=document.getElementById("ran-min")
var ran_max=document.getElementById("ran-max")

money_max.value=ran_max.value;
ran_min.oninput=function (){
	money_min.value=ran_min.value; 
	
}
Document.write(ran_max);

window.addEventListener('scroll', reveal);

function reveal(){
	var reveals = document.querySelectorAll('.reveal');
	
	for(var i = 0; i < reveals.length; i++){
		
		var windowheight = window.innerHeight;
		var revealtop = reveals[i].getBoundingClientRect().top;
		
		var revealpoint =5;
		if(revealtop < windowheight - revealpoint){
			reveals[i].classList.add('active');
		}
		else{
			reveals[i].classList.remove('active');
		}
	}
}