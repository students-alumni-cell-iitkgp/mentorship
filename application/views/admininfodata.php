
<head>
    <style>
       td {
            border: 1px solid black ;
        }

    </style>
</head>

 <center><table> <tr><td style="text-align: center" colspan="5"><h1>Mentors</h1> </td></tr>
         <tr><td>Name</td><td>Email</td><td>Dep</td><td>Number of mentee</td><td> Passout year</td></tr>
         <?php


         for ($i=0;$i<sizeof($result);$i++) {
             if ($result[$i]->passout_year != '')
             echo '<tr><td>'.$result[$i]->name.'</td><td>'.$result[$i]->email.'</td><td>'.$result[$i]->department.'</td><td>'.$result[$i]->no_of_mentees.'</td><td> '.$result[$i]->passout_year.'</td></tr>';
}

?>

     </table></center>
<center><table> <tr><td style="text-align: center" colspan="6"><h1>Mentees</h1> </td></tr>
        <tr><td>Name</td><td>Email</td><td>Dep</td><td>Hall</td><td>Roll number</td><td>join year</td></tr>
        <?php


        for ($i=0;$i<sizeof($result);$i++) {
            if ($result[$i]->passout_year == '')
            echo '<tr><td>'.$result[$i]->name.'</td><td>'.$result[$i]->email.'</td><td>'.$result[$i]->department.'</td><td>'.$result[$i]->hall.'</td><td> '.$result[$i]->roll.'</td><td> '.$result[$i]->join_year.'</td></tr>';
        }

        ?>

    </table></center>










<?php



/**
 * Created by PhpStorm.
 * User: naoh
 * Date: 3/9/2017
 * Time: 8:15 AM
 */