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