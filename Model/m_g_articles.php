<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=emballe_pese;charset=utf8', 'root', 'MonMySQL');
}
catch (Exception $e)
{
	die('Erreur : '. $e->getMessage());
}
$tab = array();
if(!empty($search)&&!empty($search_f)){
		if($trier =="prix_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f' AND A.nom='$search'
							  ORDER BY A.Prix_achat DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f' AND A.nom='$search'
							  ORDER BY A.Prix_achat ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f' AND A.nom='$search'
							  ORDER BY A.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f' AND A.nom='$search'
							  ORDER BY A.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f' AND A.nom='$search'");
	}
}else if(!empty($search_f)){
	if($trier =="prix_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f'
							  ORDER BY A.Prix_achat DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f'
							  ORDER BY A.Prix_achat ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f'
							  ORDER BY A.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f'
							  ORDER BY A.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label,A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.Fermier='$search_f'");
	}

}else if(empty($search)){
	if($trier =="prix_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0
							  ORDER BY A.Prix_achat DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0
							  ORDER BY A.Prix_achat ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0
							  ORDER BY A.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0
							  ORDER BY A.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0");
	}
}else{
	if($trier =="prix_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.nom='$search'
							  ORDER BY A.Prix_achat DESC");
	}else if($trier =="prix_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.nom='$search'
							  ORDER BY A.Prix_achat ASC");
	}else if($trier =="name_c"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.nom='$search'
							  ORDER BY A.Nom ASC");
	}else if($trier =="name_d"){
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							   WHERE A.Qte_restantes > 0 AND A.nom='$search'
							  ORDER BY A.Nom DESC");
	}else{
		$recov = $bdd->query("SELECT A.Nom, A.Composition, A.DLC, A.Date_crea,A.Prix_achat,A.Unite,A.Fermier,L.Label, A.Statut,A.id_article,A.Qte_restantes
							  FROM Article A JOIN Label L
							  ON A.Label = L.id_label
							  WHERE A.Qte_restantes > 0 AND A.nom='$search'");
	}
}
if(!empty($recov)){
	while ($donnees = $recov->fetch()){
	array_push($tab,$donnees);
	}
}
	$recov->closeCursor();
?>
