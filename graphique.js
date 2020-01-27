function tracerGraphique(donn, type,infoDonnee,i){
	donn.splice(0, 1);
	var incrementDiv=i;
	var nomDuTest=type;
	if(nomDuTest=="Pouls"){
		nomDuTest="Pouls (BpM)";
	}
	if(nomDuTest=="Temperature"){
		nomDuTest="Temperature (°C)";
	}
	var donneeFinale= [ ];
	var min;
	var max;
	var moyenne;
	//boucle for qui fait le formatage attendu par google chart
	for(i=0;i<donn.length;i++){
		score= parseInt(donn[i][1],10);
		if(i==0){
			min=score;
			max=score;
			moyenne=score;
		}
		else{
			if(score>max){
				max=score;
			}
			else if(score<min){
				min=score;
			}
			moyenne+=score;
		}
		//split de la date
		laDate=donn[i][0].split("-");
		a=laDate[0];//annee
		m=laDate[1];
		j=laDate[2];//jour
		donneeFinale[i]=[new Date(a,m,j),score];//formatage
	}
	moyenne=moyenne/i;
	a = document.createElement("DIV");//on cree un div pour les valeurs max min et moyenne
	a.setAttribute("id", "valeurMoyenne");
	a.setAttribute("class", "donnee");
	b=document.createElement("p");
	b.innerHTML = "<strong>"+"Valeur moyenne : " + moyenne +"</strong>";
	a.appendChild(b);
	infoDonnee.appendChild(a);
	a = document.createElement("DIV");
	a.setAttribute("id", "valeurMin");
	a.setAttribute("class", "donnee");
	b=document.createElement("p");
	b.innerHTML = "<strong>"+"Valeur minimal : " + min +"</strong>";
	a.appendChild(b);
	infoDonnee.appendChild(a);
	a = document.createElement("DIV");
	a.setAttribute("id", "valeurMax");
	a.setAttribute("class", "donnee");
	b=document.createElement("p");
	b.innerHTML = "<strong>"+"Valeur maximal : " + max +"</strong>";
	a.appendChild(b);
	infoDonnee.appendChild(a);

//google chart
	google.charts.load('current', {'packages':['corechart']});
	      google.charts.setOnLoadCallback(drawChart);

	      function drawChart() {

	        var data = new google.visualization.DataTable();
	        data.addColumn('date', 'Time of Day');
	        data.addColumn('number', nomDuTest);
	        data.addRows(donneeFinale);
	        var options = {
	          theme: 'material',
          		tooltip: { isHtml: true},
	          title: 'Résultat des tests de ' + nomDuTest,
	          width: 900,
	          height: 500,
	          //tooltip: { isHtml: true },

	          hAxis: {
	            format: 'dd MMM, yyyy',
	            gridlines: {count: 15}
	          },
	          vAxis: {
	            gridlines: {color: 'none'},
	            minValue: 0
	          }
	        };

	        var chart = new google.visualization.LineChart(document.getElementById('chart_div'+incrementDiv));
	        chart.options={
	        	cssClassNames : {
                 headerRow :'tableChartHeaderRow',
                 hoverTableRow : 'tableChartHeaderRowHighlightedState'
             }
         		};


	        chart.draw(data, options);
	      }
	      
}