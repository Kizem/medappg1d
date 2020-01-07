<!DOCTYPE HTML>
<html>
	<head>
        <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="design/Utilisateur.css"> 
		<title>Page Utilisateur</title>
	</head>
    
	<body>
		<!-- ENTETE -->
        <header><?php include_once('includes/header.php'); ?></header>
        <!--corp-->
        
        <table>

            <thead> <!-- En-tête du tableau -->
        <tr>
            <th> </th>
            <th>Dernière valeur</th>
            <th>Valeur minimale</th>
            <th>Valeur moyenne</th>
            <th>Valeur maximale</th>
        </tr>
            </thead>

            <tbody>
                <tr>
                    <td>Fréquence cardiaque</td>
                    <td>75</td>
                    <td>65</td>
                    <td>72</td>
                    <td>90</td>
                </tr>
                <tr>
                    <td>Température du corps</td>
                    <td>36.8</td>
                    <td>36.3</td>
                    <td>37</td>
                    <td>37.5</td>
                </tr>
                <tr>
                    <td>Mémoire visuelle</td>
                    <td>8</td>
                    <td>5</td>
                    <td>7</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Perception auditive</td>
                    <td>8.5</td>
                    <td>5</td>
                    <td>7</td>
                    <td>10</td>
                </tr>
            </tbody>    
        </table>    
       <?php tableauTestTemperature($db);tableauTestPerception($db);tableauTestFrequence($db) ?>
        <!-- FOOTER -->
        <footer><?php include_once('includes/footer.php');?>
	</body>
</html>