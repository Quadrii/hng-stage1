<?php
    $pick = mysqli_connect('localhost', 'root', 'adegokee');
    if (!$pick) {
        die("Database Connection Failed" . mysqli_error($pick));
    }

     
    $select_database = mysqli_select_db($pick, 'practise');
        if (!$pick) {
        die("Unable To Select database" . mysqli_error($pick));
    }


    $get = "SELECT * FROM luck ORDER by ID";
   $get_result = mysqli_query($pick, $get);


   while($list = mysqli_fetch_array($get_result, MYSQLI_ASSOC))
    {
      $fname = $list['firstname'];
      $lname = $list['lastname'];
      $email = $list['mail'];
      $date = $list['date'];
      
      echo "  <div>
          Name: $fname<br />
          Email: $lname<br />
          email: $email<br />
          Date: $date
        </div>
      ";
    }

    mysqli_close($pick);
?>