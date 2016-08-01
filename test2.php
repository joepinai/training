<style type="text/css">
.bold {
          font-weight: bold;
     }

     td{ text-align: center; width: 200px;}
</style>

<?php
     class negeri
     {
          function malaysia() {
                return array(array('s'=>'Selangor', 'ibn'=>'Shah Alam', 'kod'=>'SGR'),
                                 array('s'=>'Johor', 'ibn'=>'Johor Bahru', 'kod'=>'JHR'),
                                 array('s'=>'Kelantan', 'ibn'=>'Kota Bharu', 'kod'=>'KEL'),
                                 array('s'=>'kedah', 'ibn'=>'Alor Setar', 'kod'=>'KDH'),
                                 array('s'=>'Melaka', 'ibn'=>'Bandar Melaka', 'kod'=>'MEL'),
                                 );               
          }
     }

     $states = new negeri;

      foreach ($states->malaysia() as $state) {
      echo "<table border='1' cellspacing='0' cellpadding='0' table align='center'>";

      if ($state['s']=='Johor' && $state['ibn'] =='Johor Bahru' && $state['kod']=='JHR'){
      echo "<tr><td class='bold'>". $state['s']. "</b></td><td class='bold'>". $state['ibn']. "</td><td class='bold'>". $state['kod']. "</td></tr>";
      }
      else
      { echo "<tr><td width=100px>". $state['s']. "</td><td width=100px>". $state['ibn']. "</td><td width=100px>". $state['kod']. "</td></tr>";}
  }
?>