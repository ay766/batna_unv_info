 <?php 
// Include the database config file 
include_once 'dbConfig.php'; 


if(!empty($_POST["annee_unive"]) && !empty($_POST["spec_promo"])){ 
    // Fetch state data based on the specific country 
    $query = "SELECT * FROM promo WHERE spec_promo ='".$_POST['spec_promo']."' AND annee_unive='".$_POST['annee_unive']."'"; 
    $result = $db->query($query); 
     
    // Generate HTML of state options list 
    if($result->num_rows > 0){ 


 $querye = "SELECT * FROM promo WHERE annee_unive ='".$_POST['annee_unive']."' order by id_promo asc"; 
    $resulte = $db->query($querye); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_promotion</th> <th>specication_promotion</th><th>années universitaire</th></tr>";
    if($resulte->num_rows > 0){ 
        while($rowe = $resulte->fetch_assoc()){  
           echo '<tr> <td>'.$rowe['id_promo'].' '.'</td><td>'.$rowe['spec_promo'].'</td><td>'.$rowe['annee_unive'].'</td></tr>';
        } 
    }else{ 
        echo '<td colspan="3">Pas promotions</td>'; 
    }
echo "<script>alert(\"cette promotion deja ajouté\")</script>";

        } 
    else{  
     $queryy ="insert into promo (spec_promo,annee_unive) values ('".$_POST['spec_promo']."','".$_POST['annee_unive']."')"; 
    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
       $quer = "SELECT * FROM promo WHERE annee_unive ='".$_POST['annee_unive']."' order by id_promo asc"; 
    $resultt = $db->query($quer); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_etd</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resultt->num_rows > 0){ 
        while($rowe = $resultt->fetch_assoc()){  
           echo '<tr> <td>'.$rowe['id_promo'].' '.'</td><td>'.$rowe['spec_promo'].'</td><td>'.$rowe['annee_unive'].'</td></tr>';
        } 
    }else{ 
        echo '<td colspan="3">Pas pas promotion</td>'; 
    }
echo "<script>alert(\" promotion c'bon ajouté\")</script>";
} else {
    echo "<script>alert(\" promo pas ajouté\")</script>";
}
       
    } 
}elseif(!empty($_POST["annee_unive"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM promo WHERE annee_unive = '".$_POST['annee_unive']."' order by id_promo asc"; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
        echo '<option value="">choisis la Promotion</option>'; 
        while($row = $result->fetch_assoc()){ 
            echo '<option value="'.$row['id_promo'].'">'.$row['spec_promo'].'</option>'; 
        } 
    }else{ 
        echo '<option value="">promo not available</option>'; 
    } }
    elseif(!empty($_POST["annee_univeselect"])){ 

    // Fetch city data based on the specific state 
    $query = "SELECT * FROM promo WHERE annee_unive = '".$_POST['annee_univeselect']."' order by id_promo asc"; 
    $result = $db->query($query); 
     echo " <tr><th>id_etd</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    // Generate HTML of city options list 
    if($result->num_rows > 0){ 
       
        while($row = $result->fetch_assoc()){ 
             echo '<tr> <td>'.$row['id_promo'].' '.'</td><td>'.$row['spec_promo'].'</td><td>'.$row['annee_unive'].'</td></tr>';
        } 
    }else{ 
       echo '<td colspan="3">Pas pas promotion</td>';  
    } }

 elseif(!empty($_POST["promotionetd"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM etudiants WHERE id_promo =".$_POST['promotionetd'].""; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_etd</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<tr> <td>'.$row['id_etd'].' '.'</td><td>'.$row['nom'].'</td><td>'.$row['prenom'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas etudiants</td>'; 
    }  }
    elseif(!empty($_POST["promotion"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM enseignants WHERE annee_unive ='".$_POST['promotion']."'"; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<tr> <td>'.$row['id_ens'].' '.'</td><td>'.$row['nom_ens'].'</td><td>'.$row['prenom_ens'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas enseignants</td>'; 
    }  }
     elseif(!empty($_POST["promotionm"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM modules WHERE id_promo =".$_POST['promotionm'].""; 
    $result = $db->query($query); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_module</th>   <th>designation</th>  </tr>";
    if($result->num_rows > 0){ 
        while($row = $result->fetch_assoc()){  
            echo '<tr> <td>'.$row['id_mod'].' '.'</td><td>'.$row['desg'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas modules</td>'; 
    }  }

      elseif(!empty($_POST["nom_etd"]) && !empty($_POST["prenom_etd"]) && !empty($_POST["id_pro"])&& !empty($_POST["email_etd"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM etudiants WHERE nom = '".$_POST['nom_etd']."'AND prenom = '".$_POST['prenom_etd']."'AND id_promo =".$_POST['id_pro'].""; 
     $result = $db->query($query);
    if($result->num_rows > 0){ 

        $querye = "SELECT * FROM etudiants WHERE id_promo = ".$_POST['id_pro'].""; 
    $resulte = $db->query($querye); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_etd</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resulte->num_rows > 0){ 
        while($rowe = $resulte->fetch_assoc()){  
            echo '<tr> <td>'.$rowe['id_etd'].' '.'</td><td>'.$rowe['nom'].'</td><td>'.$rowe['prenom'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas etudiants</td>'; 
    }
echo "<script>alert(\"cette etudiant deja ajouté\")</script>";

        } 
    else{  
     $queryy ="insert into etudiants (id_promo,nom,prenom,email) values (".$_POST['id_pro'].",'".$_POST['nom_etd']."','".$_POST['prenom_etd']."','".$_POST['email_etd']."')"; 
    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
         $quer = "SELECT * FROM etudiants WHERE id_promo = ".$_POST['id_pro'].""; 
    $resultt = $db->query($quer); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_etd</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resultt->num_rows > 0){ 
        while($roww = $resultt->fetch_assoc()){  
            echo '<tr> <td>'.$roww['id_etd'].' '.'</td><td>'.$roww['nom'].'</td><td>'.$roww['prenom'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas etudiants</td>'; 
    }
echo "<script>alert(\" etudiant c'bon ajouté\")</script>";

} else {
    echo "<script>alert(\" etudiant pas ajouté\")</script>";

}
       
    }  }

elseif(!empty($_POST["nom_ens"]) && !empty($_POST["prenom_ens"]) && !empty($_POST["annee_univer"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM enseignants WHERE nom_ens = '".$_POST['nom_ens']."'AND prenom_ens = '".$_POST['prenom_ens']."'AND annee_unive ='".$_POST['annee_univer']."'"; 
     $result = $db->query($query);
    if($result->num_rows > 0){ 

        $querye = "SELECT * FROM enseignants WHERE annee_unive ='".$_POST['annee_univer']."'"; 
    $resulte = $db->query($querye); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resulte->num_rows > 0){ 
        while($rowe = $resulte->fetch_assoc()){  
            echo '<tr> <td>'.$rowe['id_ens'].' '.'</td><td>'.$rowe['nom_ens'].'</td><td>'.$rowe['prenom_ens'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas enseignants</td>'; 
    }
echo "<script>alert(\"cette enseignant deja ajouté\")</script>";

        } 
    else{  
     $queryy ="insert into enseignants (nom_ens,prenom_ens,annee_unive) values ('".$_POST['nom_ens']."','".$_POST['prenom_ens']."','".$_POST['annee_univer']."')"; 
    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
         $quer = "SELECT * FROM enseignants WHERE annee_unive ='".$_POST['annee_univer']."'"; 
    $resultt = $db->query($quer); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resultt->num_rows > 0){ 
        while($roww = $resultt->fetch_assoc()){  
            echo '<tr> <td>'.$roww['id_ens'].' '.'</td><td>'.$roww['nom_ens'].'</td><td>'.$roww['prenom_ens'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas enseignants</td>'; 
    }
echo "<script>alert(\" enseignant c'bon ajouté\")</script>";

} else {
    echo "<script>alert(\"  enseignant pas ajouté\")</script>";

}
       
    }  }

     elseif(!empty($_POST["desg"]) && !empty($_POST["id_promodu"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM modules WHERE desg = '".$_POST['desg']."'AND id_promo = ".$_POST['id_promodu'].""; 
     $result = $db->query($query);
    if($result->num_rows > 0){ 

        $querye = "SELECT * FROM modules WHERE id_promo = ".$_POST['id_promodu'].""; 
    $resulte = $db->query($querye); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_module</th>   <th>designation</th> </tr>";
    if($resulte->num_rows > 0){ 
        while($rowe = $resulte->fetch_assoc()){  
            echo '<tr> <td>'.$rowe['id_mod'].' '.'</td><td>'.$rowe['desg'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas modules</td>'; 
    }
echo "<script>alert(\"cette modules deja ajouté\")</script>";

        } 
    else{  
     $queryy ="insert into modules (id_promo,desg) values (".$_POST['id_promodu'].",'".$_POST['desg']."')"; 
    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
         $quer = "SELECT * FROM modules WHERE id_promo = ".$_POST['id_promodu'].""; 
    $resultt = $db->query($quer); 
     
    // Generate HTML of city options list 
    echo " <tr><th>id_module</th>  <th>designation</th></tr>";
    if($resultt->num_rows > 0){ 
        while($roww = $resultt->fetch_assoc()){  
            echo '<tr> <td>'.$roww['id_mod'].' '.'</td><td>'.$roww['desg'].'</td></tr>'; 
        } 
    }else{ 
        echo '<td colspan="3">Pas modules</td>'; 
    }
echo "<script>alert(\" module c'bon ajouté\")</script>";

} else {
    echo "<script>alert(\" module pas ajouté\")</script>";

}
       
    }  }

     elseif(!empty($_POST["id_enss"]) && !empty($_POST["id_modd"])){ 
    // Fetch city data based on the specific state 
    $query = "SELECT * FROM enseig WHERE id_ens = '".$_POST['id_enss']."'AND id_mod = ".$_POST['id_modd'].""; 
     $result = $db->query($query);
    if($result->num_rows > 0){ 

        $querye = "SELECT * FROM enseig JOIN enseignants ON enseig.id_ens=enseignants.id_ens WHERE id_mod= ".$_POST['id_modd']." "; 
    $resulte = $db->query($querye); 
     
    // Generate HTML of city options list 
    echo "<tr><th></th><th>ensegné par </th><th></th></tr><tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resulte->num_rows > 0){ 
        echo $querye;
        while($rowe = $resulte->fetch_assoc()){  
           echo '<tr> <td>'.$rowe['id_ens'].' '.'</td><td>'.$rowe['nom_ens'].'</td><td>'.$rowe['prenom_ens'].'</td></tr>';  
        } 
    }else{ 
        echo '<td colspan="3">Pas enseignants</td>'; 
    }
echo "<script>alert(\"deja enseginé ajouté\")</script>";

        } 
    else{  
     $queryy ="insert into enseig (id_mod,id_ens) values (".$_POST['id_modd'].",'".$_POST['id_enss']."')"; 
    // Generate HTML of city options list 
       if ($db->query($queryy) === TRUE) {
         $quer = "SELECT * FROM enseig JOIN enseignants ON enseig.id_ens=enseignants.id_ens WHERE id_mod= ".$_POST['id_modd'].""; 
    $resultt = $db->query($quer); 
     
    // Generate HTML of city options list 
     echo "<tr><th></th><th>ensegné par </th><th></th></tr><tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>";
    if($resultt->num_rows > 0){ 
        while($roww = $resultt->fetch_assoc()){  
           echo '<tr> <td>'.$roww['id_ens'].' '.'</td><td>'.$roww['nom_ens'].'</td><td>'.$roww['prenom_ens'].'</td></tr>';  
        } 
    }else{ 
       echo '<td colspan="3">Pas enseignants</td>'; 
    }
echo "<script>alert(\" c'bon ajouté\")</script>";

} else {
    echo "<script>alert(\" pas ajouté\")</script>";

}
       
    }  }

    ?>
