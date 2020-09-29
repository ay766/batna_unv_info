
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>enseigné</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!-- 
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE 
	DESIGNED & DEVELOPED by FREEHTML5.CO
		
	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,300' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Superfish -->
	<link rel="stylesheet" href="css/superfish.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">
	<!-- CS Select -->
	<link rel="stylesheet" href="css/cs-select.css">
	<link rel="stylesheet" href="css/cs-skin-border.css">
	
	<link rel="stylesheet" href="css/style.css">

<style type="text/css">
	table, th, td {

  border: 1px solid black;
  border-collapse: collapse;
  padding: 15px;
  text-align: center;
  color: #000;}
  #fh5co-search-map .search-property {
  width: 100%;
  float: left;
  background: #44C662; }
@media screen and (max-width: 768px) {
  #fh5co-search-map .search-property {
    width: 100%;
    float: left; } }
#fh5co-search-map .s-holder {
  width: 90%;
  margin: 0 auto;
  padding: 2em 0; }
#fh5co-search-map .s-holder h2 {
  color: #fff; }
#fh5co-search-map .s-holder .input-field, #fh5co-search-map .s-holder section {
  width: 350px;
  float: left;
  margin-bottom: 20px; }
#fh5co-search-map .s-holder label {
  width: 300px;
  float: left;
  color: #fff;
  }
@media screen and (max-width: 768px) {
  #fh5co-search-map .s-holder label {
    font-size: 13px;
    margin-top: 13px; } }
#fh5co-search-map .s-holder input {
	height: 20px;
  padding: 24px 10px !important;
  font-weight: 700;
  font-size: 12px; }
#fh5co-search-map .s-holder input[type="text"]::-webkit-input-placeholder {
  /* Chrome/Opera/Safari */
  color: #44C662 !important; }
#fh5co-search-map .s-holder input[type="text"]::-moz-placeholder {
  /* Firefox 19+ */
  color: #44C662 !important; }
#fh5co-search-map .s-holder input[type="text"]:-ms-input-placeholder {
  /* IE 10+ */
  color: #44C662 !important; }
#fh5co-search-map .s-holder input[type="text"]:-moz-placeholder {
  /* Firefox 18- */
  color: #44C662 !important; }
#fh5co-search-map .s-holder input[type="text"], #fh5co-search-map .s-holder .cs-select {
  width: 75% !important;
  float: left;
  background: #fff !important;
  border: none;
  -webkit-border-radius: 0;
  -moz-border-radius: 0;
  -ms-border-radius: 0;
  border-radius: 0; }
#fh5co-search-map .s-holder .wide {
  width: 60% !important;
  float: right; }
#fh5co-search-map .s-holder .wide .cs-select-half {
  width: 48% !important;
  float: left; }
#fh5co-search-map .s-holder .wide .cs-select-half:last-child {
  float: right; }
#fh5co-search-map .s-holder .btn {
  width: 60%;
  float: right;
  background: #000;
  -webkit-border-radius: 2px;
  -moz-border-radius: 2px;
  -ms-border-radius: 2px;
  border-radius: 2px; }
#fh5co-search-map .map {
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center center;
  position: relative;
  width: 66.5%;
  float: right; }

 
</style>
	<!-- Modernizr JS -->
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
     	var id_enss = $('#city').val();
     	var id_modd = $('#state').val();
     	if (id_enss && id_modd ){
     	
$.ajax({
                type:'POST',
                url:'ajaxDataadd.php',
         
                data:{id_enss:id_enss ,id_modd:id_modd},
                success:function(html){
                    $('#tablerech').html(html);
                }
            });  }
else{
	alert("champs obligatoire");
}
    });

     $('#country').on('change', function(){
        var country_id = $(this).val();
        if(country_id ){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_id='+country_id,
                success:function(html){
                    $('#state').html(html);
                }
            }); 
        }else{
            $('#state').html('<option value="">Select promo first</option>');
                            $('#city').html('<option value="">Select module first</option>');

        }
    });
    $('#annee_unive').on('change', function(){
        var annee_unive = $(this).val();
        if(annee_unive){
        	$('#country').html('<option value="">Select ann_univ first</option>');
             $('#state').html('<option value="">Select promo first</option>');
            $('#city').html('<option value="">Select module first</option>');
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'annee_unive='+annee_unive,
                success:function(html){
                    $('#country').html(html);
                }
            }); 
            $('city').val("");
        }else{
            $('#country').html('<option value="">Select ann_univ first</option>');
             $('#state').html('<option value="">Select promo first</option>');
            $('#city').html('<option value="">Select module first</option>');
          
        }
    });
    $('#state').on('change', function(){
        var country_idd = $(this).val();
        if(country_idd){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:'country_idd='+country_idd,
                success:function(html){
                    $('#tablerech').html(html);
                }
            }); 
        }else{
            $('#city').html('<option value="">Select module first</option>');
        }
    });
     $('#state').on('change', function(){
        var country_idd = $(this).val();
        var annee_uni=$('#annee_unive').val();
        if(country_idd){
            $.ajax({
                type:'POST',
                url:'ajaxData.php',
                data:{country_i:country_idd,annee_uni:annee_uni},
                success:function(html){
                    $('#city').html(html);
                }
            }); 
        }else{
           
        }
    });
    
});
</script>

	</head>
	<body>

		  <?php 
    // Include the database config file 
    include_once 'dbConfig.php'; 
     
    // Fetch all the country data 
    $query = "SELECT * FROM promo order by id_promo asc"; 
    $result = $db->query($query); 
?>
		<div id="fh5co-wrapper">
		<div id="fh5co-page">

		<header id="fh5co-header-section" class="sticky-banner">
			<div class="container">
				<div class="nav-header">
					<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
					<h1 id="fh5co-logo"><a href="index.html"><i class="icon-home"></i>BatnaUnv<span>ABS</span></a></h1>
					<!-- START #fh5co-menu-wrap -->
					<nav id="fh5co-menu-wrap" role="navigation">
						<ul class="sf-menu" id="fh5co-primary-menu">
							<li><a href="aabs.php">Nouvelle Absence</a></li>
							<li class="active"><a href="index.php">Accueil</a></li>
							<li>
								<a  class="fh5co-sub-ddown">Actions</a>
								<ul class="fh5co-sub-menu">
								<li><a href="apromo.php">Ajouté Promotion</a></li>
									<li><a href="aetd.php">Ajouté Etudiant</a></li>
									<li><a href="aensg.php">Ajouté Enseignants</a></li>
									<li><a href="amod.php">Ajouté Modules</a></li>
									<li><a href="enseig.php">Ajouté ensegnié</a></li>
									<li><a href="#">Justifir Une Absence</a></li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</header>

		<!-- end:header-top -->

	

		<div id="fh5co-search-map">

			<div class="search-property">
				<div class="s-holder">
					<h2>Enseigné</h2>
						
						
							<form action="" method="post">
						<div class="col-xxs-12 col-xs-12">
								<section>
								<label for="class">ann_univ :</label>
								<select required="" id="annee_unive" name="state" >
									<option value="">choisis ann_univ</option>
									<option value="2019/2020">2019/2020</option>
									<option value="2020/2021">2020/2021</option>
									<option value="2021/2022">2021/2022</option>
									<option value="2022/2023">2022/2023</option>
									<option value="2023/2024">2023/2024</option>
									<option value="2024/2025">2024/2025</option>
								</select>
							</section>
							<section>
								<label for="class">Promo :</label>
								<select id="country" name="country" required="" >
   								 <option value="" disabled selected>Select ann_univ first</option>
								</select>
							</section>
							<section>
								<label for="class">modules :</label>
								<select id="state" name="state" >
									<option disabled selected value="">Select promo first</option>
								</select>
							</section>
							<section>
								<label for="class">etudiant :</label>
								<select id="city" name="city" >
									<option disabled selected value="" >Select promo first</option>
								</select>
							</section>
						</div>
						</div>
						<div class="col-xxs-12 col-xs-12 text-center">
							<input type="button" id="rech" name="submit" value="Ajouté" class="btn btn-primary btn-lg" style="margin-bottom: 10px;" />
						</div>
</form>
						</div>		
					</div>
				</div>
			</div>
			<div class="map" style="background-image: url(images/cover_bg_1.jpg);">
			</div>
			<div><table id="tablerech" style="border-width: 1px;  border-style: solid; margin-top:20px; margin-bottom: 30px; margin-left: 10px; width: 90%"> <tr><th></th><th>ensegné par </th><th></th></tr><tr><th>id_ens</th>   <th>Nom</th>  <th>Prenom</th></tr>
 
 </table> </div>
		</div>

	

		
		<footer>
			<div id="footer">
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-md-3">
							<h3 class="section-title"> BatnaUnv ABS</h3>
							<p>ce site web développé par l'etudiant <a>Mokhtari Aymen</a> à but de améliorer et informatisé l'ancien methode de gestion des absences.</p>
						</div>
						
						<div class="col-md-3 col-md-push-1">
							<h3 class="section-title">Links</h3>
							<ul>
								<li><a href="aabs.php">Nouvelle Absence</a></li>
								<li><a href="apromo.php">Ajouté Promotion</a></li>
									<li><a href="aetd.php">Ajouté Etudiant</a></li>
									<li><a href="aensg.php">Ajouté Enseignants</a></li>
									<li><a href="amod.php">Ajouté Modules</a></li>
									<li><a href="enseig.php">Ajouté ensegnié</a></li>
									<li><a href="#">Justifir Une Absence</a></li>
							</ul>
						</div>

						<div class="col-md-3">
				
				
					<div class="row">
						<div class="col-md-12">
							<p class="fh5co-social-icons">
								<a ><i class="icon-facebook2"></i></a>
								<a href=""><i class="icon-dribbble2"></i></a>
							</p>
							<p>Copyright 2020 <a>BatnaUnv</a>. All Rights Reserved. </p>
						</div>
					</div>
				</div>
			</div>
		</footer>


	

	</div>
	<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/sticky.js"></script>
	<!-- Superfish -->
	<script src="js/hoverIntent.js"></script>
	<script src="js/superfish.js"></script>
	<!-- Flexslider -->
	<script src="js/jquery.flexslider-min.js"></script>
	<!-- Date Picker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	<!-- CS Select -->
	<script src="js/classie.js"></script>
	<script src="js/selectFx.js"></script>

	
	<!-- Main JS -->
	<script src="js/main.js"></script>

	</body>
</html>

