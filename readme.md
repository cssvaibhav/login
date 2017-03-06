/**
 * ************************************************
 * 	 DEVELOPED BY : VAIBHAV KISHORSINGH PARDESHI
 *   CREATED DATE : 6 March 2017
 * ***********************************************
 *-----------------------------------------------
 * STEPS TO USE:
 *-----------------------------------------------
 * 1. Download the login folder and place it in your project root folder
 * 2. Include the namespace in your projects file as -
 *	   namespace login;
 *	   use login\login as loginClass;
 * 3. Provide following variables to loginClass constructor
 *		I.   Connection Object 
 *		II.  Table Name
 *  	III. Username Column's name
 *  	III. Password Column's name
 *		e.g. $log = new loginClass($mysqli,$table,$columnUser,$columnPassword);
 * 4. Call the validate function of Login Class as -
 *		e.g. $log->validate($username,$password)
 * 5. Response :
 *	  I.  If success : Returns Array of columns corrosponding to $username and $password.
 *	  II. If error or invalide: Returns FALSE or NULL.
 *---------------------------------------------------
 * 
 * ASSUMPTIONS :
 *---------------------------------------------------
 * 1. PASSWORD COLUMN IN DATABASE IS HASHED using password_hash() function
 * 2. PHP VERSION 5.5 or GREATER
 * --------------------------------------------------
 */
