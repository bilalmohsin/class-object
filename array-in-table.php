<?php
 
 $arr = [
     [1,"Bilal","Mohsin","Male","Lahore"],
     [2,"Salman","Ali","Male","Shahdara"],
     [3,"Saira","Rehmat","Female","Lhr"],
     [1,"Bilal","Mohsin","Male","Lahore"],
     [2,"Salman","Ali","Male","Shahdara"],
     [3,"Saira","Rehmat","Female","Lhr"]
 ];
 
 ?>
  <style>
         table {
             width: 10%;
             border-collapse: collapse;
         }
         table, th, td {
             border: 1px solid black;
         }
         th, td {
             padding: 10px;
             text-align: left;
         }
     </style>
 <table>
         <thead>
             <tr>
                 <th>Id</th>
                 <th>Name</th>
                 <th>L.Name</th>
                 <th>Gender</th>
                 <th>Address</th>
             </tr>
         </thead>
         <?php
         // Get array element using foreach loop
         foreach($arr as $x){
            echo "<tr>";
            foreach($x as $y){
                echo "<td>";
                echo $y;
                echo "</td>";
            }
            echo "</tr>";
         }
         // Get array element using for loop
//  for ($i=0;$i<count($arr);$i++){
//      echo "<tr>";
//       for ($j=0;$j<count($arr[$i]);$j++){
//          echo "<td>";
//           print_r( $arr[$i][$j]);
//           echo "</td>";
//       }
//       echo "</tr>";
//      }   
 ?>  
 