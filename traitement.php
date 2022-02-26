<?php 
session_start();
	try{
		$db = new PDO('mysql:host=localhost; dbname=db_gesco; charset=utf8', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
	}catch(Exception $e){
		die('ERROR: '.$e->getMessage());
	}

	// traitement pour register.php
	if(isset($_POST['prenom_inscrip']) AND isset($_POST['nom_inscrip']) AND isset($_POST['email_inscrip']) AND isset($_POST['password_inscrip']) AND isset($_POST['repeat_inscrip'])){

		$prenom = htmlspecialchars($_POST['prenom_inscrip']);
		$nom = htmlspecialchars($_POST['nom_inscrip']);
		$email = htmlspecialchars($_POST['email_inscrip']);
		$password = htmlspecialchars($_POST['password_inscrip']);
		$repeat = htmlspecialchars($_POST['repeat_inscrip']);
		if($password != $repeat){
			header('Location: register.php?error');
		}
		else{
			$req = $db->prepare('INSERT INTO membre_gesco(prenom_membre, nom_membre, adresse_mail_membre, password_membre, date_inscription_membre) VALUES(:prenom,:nom,:email,:password,NOW())');
			$retour = $req->execute(array('nom'=>$nom, 'prenom'=>$prenom, 'email'=>$email, 'password'=>password_hash($password, PASSWORD_DEFAULT)));
			if($retour){
				header('Location: login.php');
			}
		}
	}

	// traitement pour login.php
	else if(isset($_POST['email_login']) AND isset($_POST['password_login'])){
		$email = htmlspecialchars($_POST['email_login']);
		$password = htmlspecialchars($_POST['password_login']);

		$req = $db->query('SELECT * FROM membre_gesco');
		$existe = false;
		while (($data = $req->fetch())){
			if($data['adresse_mail_membre'] == $email AND password_verify($password, $data['password_membre']) == true){
				$_SESSION['id_membre'] = $data['id_membre'];
				$_SESSION['nom_membre'] = $data['nom_membre'];
				$_SESSION['prenom_membre'] = $data['prenom_membre'];
				$_SESSION['email'] = $data['adresse_mail_membre'];
				$_SESSION['password'] =  $data['password_membre'];
				$_SESSION['password_no_hash'] = $password;
				$_SESSION['date_inscription'] = $data['date_inscription_membre'];
				$existe = true;
				break;
			}
		}
		if($existe == true){
			if(isset($_POST['souvenir']) AND $_POST['souvenir'] == "souvenir"){
				setcookie('souvenir_log', 'je me souviens de toi', time()+30*24*60*60);
				setcookie('email_login', $email, time()+30*24*60*60);
				setcookie('password_login', $password, time()+30*24*60*60);
				setcookie('id_membre', $data['id_membre'], time()+30*24*60*60);
				setcookie('nom_membre', $data['nom_membre'], time()+30*24*60*60);
				setcookie('prenom_membre', $data['prenom_membre'], time()+30*24*60*60);
				setcookie('password_no_hash', $password, time()+30*24*60*60);
				setcookie('date_inscription', $data['date_inscription_membre'], time()+30*24*60*60);
			}
			header('Location: choix-ecole.php');
		}
		else{
			header('Location: login.php?error');
		}	
	}

	// traitement pour choix-ecole.php
	else if(isset($_POST['choix_ecole'])){
		session_start();
		$choix_ecole = $_POST['choix_ecole'];
		if($choix_ecole == ""){
			header('Location: choix-ecole.php');
		}

		$req = $db->prepare('SELECT id_ecole, type_ecole FROM ecole_gesco WHERE nom_ecole=:nom_ecole');
		$req->execute(array('nom_ecole'=>$choix_ecole));
		$data = $req->fetch();

		$_SESSION['id_ecole'] = $data['id_ecole'];
		$_SESSION['nom_ecole'] = $choix_ecole;
		$_SESSION['type_ecole'] = $data['type_ecole'];

		if(isset($_POST['preference_ecole']) AND $_POST['preference_ecole'] == 'oui'){
			setcookie('preference_ecole', 'j\'aime cet ecole', time()+30*24*60*60);

			setcookie('nom_ecole', $choix_ecole, time()+30*24*60*60);
			setcookie('id_ecole', $data['id_ecole'], time()+30*24*60*60);
			setcookie('type_ecole', $data['type_ecole'], time()+30*24*60*60);
		}
		if(isset($_SESSION['setting'])){
			header('Location: choix-annee-connect.php');
		}
		else{
			header('Location: choix-annee-login.php');
		}
		
	}

	// traitement pour creation-ecole.php
	else if(isset($_POST['nom_ecole']) AND isset($_POST['type_ecole'])){
		if(isset($_SESSION['id_membre'])){
			$nom_ecole = htmlspecialchars($_POST['nom_ecole']);
			$type_ecole = htmlspecialchars($_POST['type_ecole']);
			$id_membre_ecole = $_SESSION['id_membre'];

			$req = $db->prepare('INSERT INTO ecole_gesco(id_membre, nom_ecole, etat_ecole, type_ecole) VALUES(:id_membre, :nom_ecole, :etat_ecole, :type_ecole)');
			$req->execute(array('id_membre'=>$id_membre_ecole,'nom_ecole'=>$nom_ecole,'etat_ecole'=>1,'type_ecole'=>$type_ecole));
			$req = $db->prepare('SELECT id_ecole FROM ecole_gesco WHERE nom_ecole=:nom_ecole');
			$req->execute(array('nom_ecole'=>$nom_ecole));
			$data = $req->fetch();
			$_SESSION['id_ecole'] = $data['id_ecole'];

			header('Location: choix-ecole.php');
		}
		else{
			header('Location: login.php');
		}
	}
	// traitement pour modifier.php
	else if(isset($_POST['prenom_modif']) AND isset($_POST['nom_modif']) AND isset($_POST['email_modif']) AND isset($_POST['password_modif']) AND isset($_POST['nom_ecole_modif']) AND isset($_POST['type_ecole_modif']) AND isset($_POST['annee_depart_modif']) AND isset($_POST['annee_fin_modif'])){
		$id_ecole = $_SESSION['id_ecole'];
		$id_membre =$_SESSION['id_membre'];
		$id_annee_scolaire = $_SESSION['id_annee_scolaire'];

		$prenom_modif = htmlspecialchars($_POST['prenom_modif']);
		$nom_modif = htmlspecialchars($_POST['nom_modif']);
		$email_modif = htmlspecialchars($_POST['email_modif']);
		$password_modif = password_hash($_POST['password_modif'], PASSWORD_DEFAULT);
		$nom_ecole_modif = htmlspecialchars($_POST['nom_ecole_modif']);
		$type_ecole_modif = htmlspecialchars($_POST['type_ecole_modif']);
		$annee_depart_modif = $_POST['annee_depart_modif'];
		$annee_fin_modif = $_POST['annee_fin_modif'];
		$first_year_modif = date("Y",strtotime($annee_depart_modif));
		$last_year_modif = date("Y",strtotime($annee_fin_modif));

		if($prenom_modif != "" AND $nom_modif != "" AND $email_modif != "" AND $password_modif != "" AND $nom_ecole_modif != "" AND $annee_depart_modif != 0 AND $annee_fin_modif != 0){
			$req = $db->prepare('SELECT adresse_mail_membre, password_membre FROM membre_gesco WHERE id_membre = :id_membre');
			$req->execute(array('id_membre'=>$id_membre));
			$data = $req->fetch();
			if($email_modif != $data['adresse_mail_membre'] || password_verify($_POST['password_modif'],$data['password_membre']) == false){

				$req = $db->prepare('UPDATE membre_gesco SET prenom_membre=:prenom_membre, nom_membre=:nom_membre, adresse_mail_membre=:email_membre, password_membre=:password_membre WHERE id_membre=:id_membre');
				$req->execute(array('prenom_membre'=>$prenom_modif,'nom_membre'=>$nom_modif,'email_membre'=>$email_modif,'password_membre'=>$password_modif,'id_membre'=>$id_membre));

				$req1 = $db->prepare('UPDATE ecole_gesco SET type_ecole=:type_ecole_modif, nom_ecole=:nom_ecole_modif WHERE id_ecole=:id_ecole');
				$req1->execute(array('type_ecole_modif'=>$type_ecole_modif,'nom_ecole_modif'=>$nom_ecole_modif,'id_ecole'=>$id_ecole));

				$req2 = $db->prepare('UPDATE annee_scolaire_gesco SET annee_depart=:annee_depart, annee_fin=:annee_fin, annee_scolaire=:annee_scolaire WHERE id_annee_scolaire=:id_annee_scolaire');
				$req2->execute(array('id_annee_scolaire'=>$id_annee_scolaire,'annee_depart'=>$annee_depart_modif, 'annee_fin'=>$annee_fin_modif,'annee_scolaire'=>$annee_depart_modif.'-'.$annee_fin_modif));

				$req = $db->prepare('SELECT * FROM membre_gesco WHERE id_membre=:id_membre');
				$req->execute(array('id_membre'=>$id_membre));
				$data = $req->fetch();
				$_SESSION['id_membre'] = $data['id_membre'];
				$_SESSION['nom_membre'] = $data['nom_membre'];
				$_SESSION['prenom_membre'] = $data['prenom_membre'];
				$_SESSION['email'] = $data['adresse_mail_membre'];
				$_SESSION['password'] =  $data['password_membre'];
				$_SESSION['password_no_hash'] = $_POST['password_modif'];
				$_SESSION['date_inscription'] = $data['date_inscription_membre'];

				$req1 = $db->prepare('SELECT id_ecole, type_ecole, nom_ecole FROM ecole_gesco WHERE id_ecole=:id_ecole');
				$req1->execute(array('id_ecole'=>$id_ecole));
				$data1 = $req1->fetch();
				$_SESSION['id_ecole'] = $data1['id_ecole'];
				$_SESSION['nom_ecole'] = $data1['nom_ecole'];
				$_SESSION['type_ecole'] = $data1['type_ecole'];

				$req2 = $db->prepare('SELECT * FROM annee_scolaire_gesco WHERE id_annee_scolaire=:id_annee_scolaire');
				$req2->execute(array('id_annee_scolaire'=>$id_annee_scolaire));
				$data2 = $req2->fetch();
				$_SESSION['id_annee_scolaire'] = $data2['id_annee_scolaire'];
				$_SESSION['annee_depart'] = $data2['annee_depart'];
				$_SESSION['annee_fin'] = $data2['annee_fin'];
				$_SESSION['annee_scolaire'] = date("Y",strtotime($data2['annee_depart'])).'-'.date("Y",strtotime($data2['annee_fin']));

				header('Location: login.php');

			}
			else{
				$req = $db->prepare('UPDATE membre_gesco SET prenom_membre=:prenom_membre, nom_membre=:nom_membre, adresse_mail_membre=:email_membre, password_membre=:password_membre WHERE id_membre=:id_membre');
				$req->execute(array('prenom_membre'=>$prenom_modif,'nom_membre'=>$nom_modif,'email_membre'=>$email_modif,'password_membre'=>$password_modif,'id_membre'=>$id_membre));

				$req1 = $db->prepare('UPDATE ecole_gesco SET type_ecole=:type_ecole_modif, nom_ecole=:nom_ecole_modif WHERE id_ecole=:id_ecole');
				$req1->execute(array('type_ecole_modif'=>$type_ecole_modif,'nom_ecole_modif'=>$nom_ecole_modif,'id_ecole'=>$id_ecole));

				$req2 = $db->prepare('UPDATE annee_scolaire_gesco SET annee_depart=:annee_depart, annee_fin=:annee_fin, annee_scolaire=:annee_scolaire WHERE id_annee_scolaire=:id_annee_scolaire');
				$req2->execute(array('id_annee_scolaire'=>$id_annee_scolaire,'annee_depart'=>$annee_depart_modif, 'annee_fin'=>$annee_fin_modif,'annee_scolaire'=>$first_year_modif.'-'.$last_year_modif));

				$req = $db->prepare('SELECT * FROM membre_gesco WHERE id_membre=:id_membre');
				$req->execute(array('id_membre'=>$id_membre));
				$data = $req->fetch();
				$_SESSION['id_membre'] = $data['id_membre'];
				$_SESSION['nom_membre'] = $data['nom_membre'];
				$_SESSION['prenom_membre'] = $data['prenom_membre'];
				$_SESSION['email'] = $data['adresse_mail_membre'];
				$_SESSION['password'] =  $data['password_membre'];
				$_SESSION['password_no_hash'] = $_POST['password_modif'];
				$_SESSION['date_inscription'] = $data['date_inscription_membre'];

				$req1 = $db->prepare('SELECT id_ecole, type_ecole, nom_ecole FROM ecole_gesco WHERE id_ecole=:id_ecole');
				$req1->execute(array('id_ecole'=>$id_ecole));
				$data1 = $req1->fetch();
				$_SESSION['id_ecole'] = $data1['id_ecole'];
				$_SESSION['nom_ecole'] = $data1['nom_ecole'];
				$_SESSION['type_ecole'] = $data1['type_ecole'];

				$req2 = $db->prepare('SELECT * FROM annee_scolaire_gesco WHERE id_annee_scolaire=:id_annee_scolaire');
				$req2->execute(array('id_annee_scolaire'=>$id_annee_scolaire));
				$data2 = $req2->fetch();
				$_SESSION['annee_depart'] = $data2['annee_depart'];
				$_SESSION['annee_fin'] = $data2['annee_fin'];
				$_SESSION['annee_scolaire'] = date("Y",strtotime($data2['annee_depart'])).'-'.date("Y",strtotime($data2['annee_fin']));



				header('Location: index.php');
			}
		}
	}

	// traitement pour choix-annee.php
	else if(isset($_POST['choix_annee'])){
		session_start();
		$choix_annee = $_POST['choix_annee'];
		if($choix_annee == ""){
			if(isset($_SESSION['setting'])){
				header('Location: choix-annee-connect.php');
			}
			else{
				header('Location: choix-annee-login.php');
			}
			
		}

		$req = $db->prepare('SELECT * FROM annee_scolaire_gesco WHERE annee_scolaire=:annee_scolaire');
		$req->execute(array('annee_scolaire'=>$choix_annee));
		$data = $req->fetch();

		$_SESSION['id_annee_scolaire'] = $data['id_annee_scolaire'];
		$_SESSION['annee_depart'] = $data['annee_depart'];
		$_SESSION['annee_fin'] = $data['annee_fin'];
		$_SESSION['annee_scolaire'] = $choix_annee;

		if(isset($_POST['preference_annee']) AND $_POST['preference_annee'] == 'oui'){
			setcookie('preference_annee', 'j\'aprecie cet année', time()+30*24*60*60);

			setcookie('id_annee_scolaire', $data['id_annee_scolaire'], time()+30*24*60*60);
			setcookie('annee_depart', $data['annee_fin'], time()+30*24*60*60);
			setcookie('annee_fin', $data['annee_fin'], time()+30*24*60*60);
			setcookie('annee_scolaire', $data['annee_scolaire'], time()+30*24*60*60);
		}
		if(isset($_POST['start_year']) AND $_POST['start_year'] == 'oui'){
			setcookie('start_year', 'je suis l\'année en cour',12*30*24*60*60);
		}
		header('Location: index.php');
	}

	// traitement pour creation-annee.php
	else if(isset($_POST['annee_depart']) AND isset($_POST['annee_fin'])){
		if(isset($_SESSION['id_membre'])){
			$id_ecole = $_SESSION['id_ecole'];
			$annee_depart = htmlspecialchars($_POST['annee_depart']);
			$annee_fin = htmlspecialchars($_POST['annee_fin']);

			$first_year = (int)$first_year_test = date("Y",strtotime($annee_depart));
			$last_year = (int)$last_year_test = date("Y",strtotime($annee_fin));

			if($first_year == 0 || $last_year == 0){
				switch($_SESSION['lien']){
					case 'creation-annee.php':
						header('Location: creation-annee.php?error');
						break;
					case 'gestion-annee.php':
						header('Location: gestion-annee.php?error');
						break;
					default:
						echo 'ERROR: FICHIER INTROUVABLE';
				}
			}
			else if($first_year > $last_year){
				switch($_SESSION['lien']){
					case 'creation-annee.php':
						header('Location: creation-annee.php?error');
						break;
					case 'gestion-annee.php':
						header('Location: gestion-annee.php?error');
						break;
					default:
						echo 'ERROR: FICHIER INTROUVABLE';
				}
			}
			else if($first_year == $last_year){
				switch($_SESSION['lien']){
					case 'creation-annee.php':
						header('Location: creation-annee.php?error');
						break;
					case 'gestion-annee.php':
						header('Location: gestion-annee.php?error');
						break;
					default:
						echo 'ERROR: FICHIER INTROUVABLE';
				}
			}
			else if(($last_year-$first_year)!=1){
				switch($_SESSION['lien']){
					case 'creation-annee.php':
						header('Location: creation-annee.php?error');
						break;
					case 'gestion-annee.php':
						header('Location: gestion-annee.php?error');
						break;
					default:
						echo 'ERROR: FICHIER INTROUVABLE';
				}
			}
			else{
				$req = $db->query('SELECT annee_scolaire FROM annee_scolaire_gesco');
				$existe = false;
				while($data = $req->fetch()){
					if($data['annee_scolaire'] == $first_year_test.'-'.$last_year_test){
						$existe = true;
						break;
					}
				}
				if($existe == true){
					if(isset($_SESSION['lien'])){
						switch($_SESSION['lien']){
							case 'gestion-annee.php':
								header('Location: gestion-annee?error');
								break;
							case 'creation-annee.php':
								header('Location: creation-annee?error');
							default:
								echo 'ERROR: FICHIER INTROUVABLE ';
								echo $_SESSION['lien'];
								break;
						}
					}
				}
				else{
					$req = $db->prepare('INSERT INTO annee_scolaire_gesco(id_ecole, annee_depart, annee_fin, annee_scolaire, etat_annee) VALUES(:id_ecole,:annee_depart,:annee_fin,:annee_scolaire,:etat_annee)');
					$req->execute(array('id_ecole'=>$id_ecole,'annee_depart'=>$annee_depart,'annee_fin'=>$annee_fin,'annee_scolaire'=>$first_year.'-'.$last_year,'etat_annee'=>0));
					switch($_SESSION['lien']){
						case 'setting.php':
							header('Location: choix-anne-connect.php');
							break;
						case 'gestion-annee.php':
							header('Location: gestion-annee.php');
							break;
						default:
							header('Location: choix-annee-login.php');
					}
				}				
			}
		}

		else{
			header('Location: login.php');
		}
		
	}
	//traitement pour gestion-annee.php modification
	else if(isset($_POST['identify'] AND isset($_POST['annee_depart_modify'] AND isset($_POST['annee_fin_modify'])))){
		echo 'Identify: '.$_POST['identify'].'<br>';
		echo 'Identify: '.$_POST['annee_depart_modify'].'<br>';
		echo 'Identify: '.$_POST['annee_fin_modify'].'<br>';
	}
	//traitement pour forgot-password.php
	else if(isset($_POST['forgot_email'])){
		$forgot_email = htmlspecialchars($_POST['forgot_email']);
		$existe = false;
		$req = $db->query('SELECT adresse_mail_membre FROM membre_gesco');
		while(($data = $req->fetch()) && $existe == false){
			if($forgot_email == $data['adresse_mail_membre']){
				$existe = true;
			}
		}
		if($existe == true){
			$_SESSION['forgot_email'] = $forgot_email;
			header('Location: change-password.php');
		}
		else{
			header('Location: forgot-password.php?error');
		}
	}
	//traitement pour change-password.php
	else if(isset($_POST['forgot_password'])){
			session_start();
			$forgot_email = $_SESSION['forgot_email'];
			$new_password = htmlspecialchars($_POST['forgot_password']);
			$new_password = password_hash($new_password, PASSWORD_DEFAULT);
			$req = $db->prepare('UPDATE membre_gesco SET password_membre=:new_password WHERE adresse_mail_membre=:forgot_email');
			$req->execute(array('new_password'=>$new_password, 'forgot_email'=>$forgot_email));
			header('Location: login.php');
		
	}
	//traitement pour la deconnexion
	else if(isset($_GET['logout'])){
		session_start();
		$_SESSION = array();
		session_destroy();

		setcookie('souvenir_log', '');
		setcookie('email_login','');
		setcookie('password_login','');
		setcookie('id_membre','');
		setcookie('nom_membre','');
		setcookie('prenom_membre','');
		setcookie('password_no_hash','');
		setcookie('data_inscription','');
		setcookie('preference_ecole','');
		setcookie('nom_ecole','');
		setcookie('id_ecole','');
		setcookie('type_ecole','');
		setcookie('preference_annee','');
		setcookie('id_annee_scolaire','');
		setcookie('annee_depart','');
		setcookie('annee_fin','');
		setcookie('annee_scolaire','');


		header('Location: login.php');
	}
 ?>