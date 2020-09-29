
<!--
Author: Colorli
Author URL: https://colorlib.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/styleregitre.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover:not(.active) {
  background-color: #111;
}

.active {
  background-color: #4CAF50;
}
table, th, td {

  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
  font-weight: bold;
  text-align: center;
  color: #000;}
</style>
<script src="js/modernizr-2.6.2.min.js"></script>
  <!-- FOR IE9 below -->
  <!--[if lt IE 9]>
  <script src="js/respond.min.js"></script>
  <![endif]-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script>
$(document).ready(function(){
    //      data:'nom_etd='+nom_etd+'prenom_etd='+prenom_etd+'id_pro='+id_pro,
       $('#rech').on('click', function(){
        var email = $('#email').val();
        if(email){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'email='+email,
                success:function(html){
                   $('#tablerech').html(html);
                }
            }); 
        }else{
            alert("champs obligatoire");

        }
    });

     
    
});
</script>


</head>
<body>
  <!-- main -->
<ul>
  <li style="float:right"><a class="active" href="#about">Employé</a></li>
</ul>

  <div class="main-w3layouts wrapper">

    <h1>Suivi Mes Absences</h1>
    <div class="main-agileinfo">
      <div class="agileits-top">
          <input class="text email" id="email" type="text" name="email" placeholder="Entré Votre Email" required="">
          <input type="button" id="rech" value="Recherche">
      </div>
    </div>
    <!-- copyright -->
    <div class="colorlibcopy-agile">
      <p>© 2019.All rights reserved | BatnaUNV | Mokhtari Aymen </p>
    </div>
    <div><table id="tablerech"  style="border-width: 1px;  border-style: solid; margin-top:20px; margin-bottom: 30px; margin-left: 10px; width: 90%"> <tr>
    <th>nom&prenom</th>
    <th>date</th>
    <th>heure_d</th>
    <th>heure_f</th>
     <th>module</th>
    <th>enseignant</th>

   
  </tr>
  
 </table> </div>
    <!-- //copyright -->
    <ul class="colorlib-bubbles">
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
      <li></li>
    </ul>
  </div>
  <!-- //main -->
</body>
</html>


