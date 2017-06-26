<?php


define('DB_SERVER', 'localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_DATABASE','ghumgham');

Class dbConnect
{
    public $db;
      public function __construct()
      {
        $this->db= new mysqli(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_DATABASE);

        if(!($this->db))
        {
          echo "Error:Could not connect to database.";
          
        }
       
      }
    


    /*public function dbConnection()
    {
      $this->con=new mysqli("localhost","root","","ghumgham");
      if(!$this->con)
      {
        echo"Opps!Error in database connection";
      }
      else {
        echo"Database successfully connected";
      

             }
  } */
}
    ?>