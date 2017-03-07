# Login

Helps to validate login by passing connection object,table name, username and password column name

# Installation & Usage: 
###For Simple PHP Application :
	1. Download the login folder and place it in your project root folder.	
	2. Include the file login.php in your project as -
		  include_once "login/login.php";
 	3. Provide following variables to login class's constructor
		I.   Connection Object 
		II.  Table Name
  		III. Username Column's name
  		IV.  Password Column's name
		e.g. $log = new loginClass($mysqli,$table,$columnUser,$columnPassword);
 	4. Call the validate function of Login Class as -
		e.g. $log->validate($username,$password)
 	5. Response :
		  I.  If success : Returns Array of columns corrosponding to $username and $password.
	 	 II. If error or invalide: Returns FALSE or NULL.

###For CodeIgniter Application :
	1. Download the login folder and paste it in the 'application/third_party' folder of your project
	2. Include the file in your project by using constructor as 
		include APPPATH . 'third_party/login/login.php';
	3. Provide following variables to login class's constructor
		I.   Connection Object 
		II.  Table Name
  		III. Username Column's name
  		IV.  Password Column's name
		e.g. $log = new loginClass($mysqli,$table,$columnUser,$columnPassword);
 	4. Call the validateCI function of Login Class as -
		e.g. $log->validateCI($username,$password)
 	5. Response :
		  I.  If success : Returns Array of columns corrosponding to $username and $password.
	 	 II. If error or invalide: Returns FALSE or NULL.
    
# Requirements :
1. Password column in Database must be Hashed using password_hash() function
2. PHP version must be 5.5 or Greater
