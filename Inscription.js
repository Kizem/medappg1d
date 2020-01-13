function sameMdp(divmdp2,Inputmdp1, Inputmdp2) {
	//var mdp2=Inputmdp2.getAttribute('value');
	var mdp1, mdp2;
    Inputmdp2.addEventListener("input", function(e) {
    	//mdp1=Inputmdp1.value;
    	mdp2=this.value;
	    if(mdp2 && mdp1){
	    	a = document.createElement("p");
	    	
	    	a.setAttribute("id", "texteMdpDifferent");
	    	if(mdp2==mdp1){
	    		
	    		a.innerHTML="Mots de passe identiques &#10004;";
	    		a.setAttribute("class", "vert");
	    	}
	    	else{
	    		a.innerHTML="Mots de passe differents &#10008;";
	    		a.setAttribute("class", "rouge");
	    	}
	    	var x = document.getElementById("texteMdpDifferent");
	    	
	    	if (x) {
	    		x.remove();
	    	}
	    	
	    	divmdp2.appendChild(a);
	    }
	});
	Inputmdp1.addEventListener("input", function(e) {
		mdp1=this.value;

	});

}
function securiteMdp(divmdp1,Inputmdp1){
	var carSpeciaux = 'âäãçéìïòôöõùûüñ &*?!:;,\t#~"^¨%$£?²¤§%*()]{}<>|\\/`\'';
	var numero='1234567890';
	var minuscule='azertyuiopqsdfghjklmwxcvbn';
	var majuscule='AZERTYUIOPQSDFGHJKLMWXCVBN';
	var carSpeciauxB=false;
	var numeroB=false;
	var minusculeB=false;
	var majusculeB=false;
	Inputmdp1.addEventListener("input", function(e) {
		mdp1=this.value;
		var carSpeciauxB=false;
	    var numeroB=false;
		var minusculeB=false;
		var majusculeB=false;
		for(var i=0; i<mdp1.length;i++){
			if(carSpeciaux.indexOf(mdp1.charAt(i))>-1){
				carSpeciauxB=true;
			}
			
			if(numero.indexOf(mdp1.charAt(i))>-1){
				numeroB=true;
			}
			
			if(minuscule.indexOf(mdp1.charAt(i))>-1){
				minusculeB=true;
			}
			
			if(majuscule.indexOf(mdp1.charAt(i))>-1){
				majusculeB=true;
			}
			
		}
		a = document.createElement("p");
	    	
	    a.setAttribute("id", "forceMdp");
		if(carSpeciauxB && numeroB && minusculeB && majusculeB){
			a.innerHTML="Force du mot de passe : fort &#128170;";
	    	a.setAttribute("class", "fort");
		}
		else if(numeroB && minusculeB && majusculeB || carSpeciauxB && minusculeB && majusculeB || numeroB && carSpeciauxB && majusculeB ||numeroB && minusculeB && carSpeciauxB){
			a.innerHTML="Force du mot de passe : avancé &#10004;";
	    	a.setAttribute("class", "avancé");
		}
		else if(carSpeciauxB && numeroB ||minusculeB && majusculeB || carSpeciauxB && majusculeB ||minusculeB && carSpeciauxB ||numeroB && majusculeB ||minusculeB && numeroB ){
			a.innerHTML="Force du mot de passe : moyen &#10008;";
	    	a.setAttribute("class", "moyen");
		}
		else {
			a.innerHTML="Force du mot de passe : faible &#10008;";
	    	a.setAttribute("class", "faible");
		}


		var x = document.getElementById("forceMdp");
	    	
	    if (x) {
	    	x.remove();
	    }
	    divmdp1.appendChild(a);

	});
}