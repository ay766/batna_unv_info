 <?php 
// Include the database config file 
include 'dbConfig.php'; 




$return_arr = array();

$query = "SELECT * FROM etudiants ";
 $result = $db->query($query); 
 if($result->num_rows > 0){ 
 	$myfile = fopen("j.json", "w") or die("Unable to open file!");
 	$text="";
fwrite($myfile,"[");
while($row = $result->fetch_assoc()){
$name = $row['nom'];
    $id = $row['id_etd'];

    $return_arr= array($name,$id);
    $ret[]= $return_arr;

    $text=$text.",[".$name.",".$id."]";


}
 $str1 = substr($text,1);
fwrite($myfile,$str1);
fwrite($myfile,"]");
fclose($myfile);
$date = '2020-03-28 18:52:30';
 
//Convert it into a Unix timestamp using strtotime.
$timestamp = strtotime($date)*1000;
 
//Print it out.
 echo json_encode("s") ;
}
// Encoding array in JSON format



















?>



