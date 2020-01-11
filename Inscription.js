function sameMdp(Inputmdp1, Inputmdp2) {
    var mdp1=Inputmdp1.getAttribute('value');
    var mdp2=Inputmdp2.getAttribute('value');
    if(mdp2 && mdp1){
    	a = document.createElement("p");
    	a.setAttribute("class", "texteMdpDifferent");
    	if(mdp2==mdp1){
    		a.innerHTML="Mots de passe identiques";
    	}
    	else{
    		a.innerHTML="Mots de passe differents";
    	}

    	this.parentNode.appendChild(a);
    }

}