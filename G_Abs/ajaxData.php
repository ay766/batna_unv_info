<?php 
// Include the database config file 
include_once 'dbConfig.php'; 
 
if(!empty($_POST["country_id"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM modules WHERE id_promo = ".$_POST['country_id']." "; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select module</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id_mod'].'">'.$row['desg'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">modules not available</option>'; 
    } 
}
elseif(!empty($_POST["country_idd"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM enseig JOIN enseignants ON enseig.id_ens=enseignants.id_ens WHERE id_mod= ".$_POST['country_idd']." "; 
    $result = $db->query($query); 
     echo "<tr><th></th><th>ensegné par </th><th></th></tr><tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        
        while($row = $result->fetch_assoc()){ 
             echo '<tr> <td>'.$row['id_ens'].' '.'</td><td>'.$row['nom_ens'].'</td><td>'.$row['prenom_ens'].'</td></tr>';  
        } 
    }else{ 

        echo '<td colspan="3">Pas enseignants</td>'; 
    } }
    elseif(!empty($_POST["country_ide"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM etudiants WHERE id_promo = ".$_POST['country_ide']." "; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select etudiant</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id_etd'].'">'.$row['nom'].' '.$row['prenom'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">etudiants not available</option>'; 
    } 
}
 elseif(!empty($_POST["module"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM enseig,enseignants WHERE enseig.id_ens=enseignants.id_ens and id_mod = ".$_POST['module']." "; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select enseignant</option>'; 
        while($row = $result->fetch_assoc()){  
            echo '<option value="'.$row['id_ens'].'">'.$row['nom_ens'].' '.$row['prenom_ens'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">enseignants not available</option>'; 
    } 
}
    elseif(!empty($_POST["country_i"]) && !empty($_POST["annee_uni"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM enseignants WHERE annee_unive ='".$_POST['annee_uni']."'"; 
    echo $query;
    $result = $db->query($query); 
      echo '<option value="">Select enseignant</option>';
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        
        while($row = $result->fetch_assoc()){ 
             echo '<option value="'.$row['id_ens'].'">'.$row['nom_ens'].' '.$row['prenom_ens'].'</option>'; 
        } 
    }else{ 
       echo '<option value="">pas de enseignants dans cette ann_univ</option>'; 
    } }
    elseif(!empty($_POST["annee_unive"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM promo WHERE annee_unive ='".$_POST['annee_unive']."'"; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">Select promo</option>'; 
        while($row = $result->fetch_assoc()){ 
            echo '<option value="'.$row['id_promo'].'">'.$row['spec_promo'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">promo not available</option>'; 
    } }

    elseif(!empty($_POST["sqlrecherche"])){ 
    // Fetch city data based on the specific state 
    $query = $_POST['sqlrecherche']; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    echo '<tr>
    <th>nom&prenom</th>
    <th>date</th>
    <th>heure_d</th>
    <th>heure_f</th>
     <th>module</th>
    <th>enseignant</th>
    <th>etat</th>

   
  </tr>';
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
          echo  '<tr> <td>'.$row['nom'].' '.$row['prenom'].'</td>
    <td>'.$row['jour_abs'].'</td><td>'.$row['heure_d'].'</td><td>'.$row['heure_fin'].'</td><td>'.$row['desg'].'</td><td>'.$row['nom_ens'].' '.$row['prenom_ens'].'</td><td>'.$row['abs_etat'].'</tr>';
        } 
    }else{ 
         echo '
  <tr><td colspan="6">No Result<td></tr>';
    } }

//////









    elseif(!empty($_POST["a"]) && !empty($_POST["p"]) && !empty($_POST["m"])&& !empty($_POST["e"]) && !empty($_POST["ens"]) && !empty($_POST["d"]) && !empty($_POST["hd"])&& !empty($_POST["hf"]) && !empty($_POST["etat"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM absences WHERE jour_abs ='".$_POST['d']."' AND heure_d='".$_POST['hd']."'
    AND heure_fin='".$_POST['hf']."'
    AND id_promo=".$_POST['p']."
    AND id_mod=".$_POST['m']."
    AND id_ens=".$_POST['ens']."
    AND id_etd=".$_POST['e']."
    AND abs_etat='".$_POST['etat']."'"; 


    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 

echo "<script>alert(\"cette absence deja ajouté\")</script>";
        } 
    else{  
     $queryy ="insert into absences (jour_abs,heure_d,heure_fin,id_promo,id_mod,id_ens,id_etd,abs_etat) values ('".$_POST['d']."','".$_POST['hd']."','".$_POST['hf']."',".$_POST['p'].",".$_POST['m'].",".$_POST['ens'].",".$_POST['e'].",'".$_POST['etat']."')"; 

    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
  
echo "<script>alert(\" absence c'bon ajouté\")</script>";
} else {
    echo "<script>alert(\" absence n'est pas ajouté\")</script>";
}
       
    } 
}
elseif(!empty($_POST["email"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM `absences` INNER JOIN etudiants ON absences.id_promo=etudiants.id_promo and absences.id_etd=etudiants.id_etd INNER JOIN modules ON modules.id_mod=absences.id_mod INNER JOIN enseignants on absences.id_ens=enseignants.id_ens where etudiants.email ='".$_POST['email']."'"; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
  echo '<tr>
    <th>nom&prenom</th>
    <th>date</th>
    <th>heure_d</th>
    <th>heure_f</th>
     <th>module</th>
    <th>enseignant</th>
    <th>etat</th>

  </tr>';

    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){ 
          echo  '<tr> <td>'.$row['nom'].' '.$row['prenom'].'</td>
    <td>'.$row['jour_abs'].'</td><td>'.$row['heure_d'].'</td><td>'.$row['heure_fin'].'</td><td>'.$row['desg'].'</td><td>'.$row['nom_ens'].' '.$row['prenom_ens'].'</td><td>'.$row['abs_etat'].'</tr>';
        } 
    }else{ 
         echo '
  <tr><td colspan="6">No Result<td></tr>';
    }
}
   
?>