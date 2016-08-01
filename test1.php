<style type="text/css">
.bold {
          font-weight: bold;
     }

     td{ text-align: center; width: 200px;}
</style>

<?php
echo "Malaysia State" ;

  $states = array("Selangor", "Johor", "kedah", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Perak", "Perlis", "Pulau Pinang",  "Sabah", "Sarawak", "Terengganu");
  $ibunegeri = array("Shah Alam", "Johor Bahru", "Alor Setar", "Kota Bahru", "Bandar Melaka", "Seremban", "Kuantan", "Ipoh", "Kangar", "Georgetown",  "Kota Kinabalu", "Kuching", "Kuala Terengganu");
  $shortname = array("SGR", "JHR", "KDH", "KTN", "MLK", "NSN", "PHG", "PRK", "PLS", "PNG",  "SBH", "SWK", "TRG");
  $num = 0;
  do{
      echo "<table border='1' cellspacing='0' cellpadding='0'>";

      if ($states[$num]=='Johor' && $ibunegeri[$num] =='Johor Bahru' && $shortname[$num]=='JHR'){
      echo "<tr><td class='bold'>". $states[$num]. "</b></td><td class='bold'>". $ibunegeri[$num]. "</td><td class='bold'>". $shortname[$num]. "</td></tr>";
      }
      else
      { echo "<tr><td width=100px>". $states[$num]. "</td><td width=100px>". $ibunegeri[$num]. "</td><td width=100px>". $shortname[$num]. "</td></tr>";}

      $num++;
  }while($num <= 12);
            echo "</table>";
?>