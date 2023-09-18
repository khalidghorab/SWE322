<html>
    
    <body>
    <title>lab 4 </title>
        
        <style>
        
        table, th, td {
        border: 1px solid black;
        font-size: 20px;
            width: auto;
}
            
         li{
        font-size : 20px ; 
        color: coral;
                
            }
        
        
        
        
        </style>
    <?php  
    
$classmates = array("Faisal", "Khalid", "Abdulaziz");
        
echo "<h3>SWE 322 classmates :  </h3>";

    $length = count($classmates);
    
for($x = 0; $x < $length; $x++) {
  echo "<li>$classmates[$x]</li>";
  echo "<br>";
}
        

echo "<hr>";
        
echo "<h3>Couses I took  : </h3>";
        
$cource= array (
    "CIS 103" => "Programing Fundamentals 1",
    "CIS 104" => "Programing Fundamentals 2",
    "CIS 210" => "Fondation of webdesign",
    
);
      echo "<table>
  <tr>
    <th>Course code </th>
    <th>Course name </th>
  </tr>" ;
          
foreach($cource as $code => $value ){

  echo"<tr>
    <td>$code </td>
    <td>$value</td> 
  </tr>";
  
};
        


/* Khalid Ghorab*/   

        
        ?>
</body>

</html> 
