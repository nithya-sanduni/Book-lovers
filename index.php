<!DOCTYPE html>
<html>
<body>
<?php
           $name= $email= $gender="";
             if($_SERVER["REQUEST_METHODE"]=="POST")
             {
                  $name=test_input($_POST["name"]);
                  $email=test_input($_POST["email"]);
                  $gender=test_input($_POST["gender"]);
                     }
                 function test_input($data){
                 $data=trim($data);
                 $data=stripslashes($data);
                 $data=htmlspecialchars($data);
                  return $data;
                 } 
                 ?>
		        <form method="post" action=" <?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?> 
			    name:-<input type="text" id="name" name="name"style="width:100%">
				</br></br>
				Email:-<input type="email" id="email" name="email" style="width:100%; height:50px;color:#e6e8fa"></br></br>
				Gender:-</br></br>
                <input type="radio" id="gender" name="gender" value="female">Female</br>
                <input type="radio" id="gender" name="gender" value="male">Male</br></br>
                     <fieldset>
                        <button type="submit" id="form-submit" class="button">
                          Submit
                        </button>
                      </fieldset> </form>
                    </div>
					</div>
					<?php
					echo"<h1>Your Inputs</h1>";
					echo $name;
					echo "</br>"
					echo $email;
				    echo "</br>"
					echo $gender;
					?>
					</body></html>