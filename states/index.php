<!DOCTYPE html>
<html>

<head>
<style>

  body {
    background-color: #80bfff;
  }

  hr {
   border:1.5px solid blue;
  }
</style>

        <h1 style="text-align:center;font-family:garamond;color:blue;font-size:90px;text-shadow:2px 1px gray;">State Flags</h1><br><br>
        <?php

        $state_list = array("Alabama","Alaska", "Arizona", "Arkansas", "California", "Colorado", "Connecticut", "Delaware", "Florida", "Georgia", "Hawaii", "Idaho", "Illinois", "Indiana", "Iowa", "Kansas", "Kentucky", "Louisiana", "Maine", "Maryland", "Massachusetts", "Michigan", "Minnesota", "Mississippi", "Missouri", "Montana","Nebraska","Nevada","New Hampshire","New Jersey","New Mexico","New York","North Carolina","North Dakota","Ohio", "Oklahoma", "Oregon", "Pennsylvania", "Rhode Island", "South Carolina", "South Dakota","Tennessee", "Texas", "Utah", "Vermont", "Virginia", "Washington", "West Virginia", "Wisconsin", "Wyoming");

        $counter = 1;

        echo '<table><tr>';

        foreach ($state_list as $state) {
          $state = preg_replace('/\s+/','_',$state);
          $statelow= strtolower($state);   
        ?>
        <td><div><a href="files/<?=$statelow?>.html"> <img src="http://lesson.jaxcode.webfactional.com/stateflags/<?=$state?>.svg.png" style="margin-left:25px;width:350px;height:200px;"></a></div>
          <div><a style="margin-left:25px; font-size:25px;margin-bottom:50px;" href="files/<?=$statelow?>.html" > Click to learn more about <?=$state?></a></div><br><br><br></td>


        <?
        $counter++;

        if($counter > 3) {
          echo '</tr><tr>';
          $counter = 1;
        }

        }


        foreach ($state_list as $state) {
          $state = preg_replace('/\s+/','_',$state);
          $statelow= strtolower($state);    
        $myfile = fopen("files/".$statelow.".html", "w") or die("Unable to open file!");
        $mystring=<<<EOT

      fwrite($myfile, $mystring);
      fclose($myfile);
      } 

      ?>
</body>
</html>
