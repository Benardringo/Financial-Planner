<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "financial";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
} 


// sql to create table

$a = "CREATE TABLE ARTICLE
(
  Article_id INT NOT NULL AUTO_INCREMENT,
  Article_title VARCHAR(50) NOT NULL,
  Article_picture VARCHAR(50) NOT NULL,
  short_desc txt NOT NULL,
  long_desc txt NOT NULL,
  PRIMARY KEY (Article_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$b = "CREATE TABLE user
(
  User_id INT NOT NULL AUTO_INCREMENT,
  first_name VARCHAR(50) NOT NULL,
  Last_name VARCHAR(50) NOT NULL,
  Email VARCHAR(50) NOT NULL,
  gender VARCHAR(10) NOT NULL,
  Password VARCHAR(50) NOT NULL,
  PRIMARY KEY (User_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$c = "CREATE TABLE BUDGET
(
  Budget_name VARCHAR(50) NOT NULL,
  balance INT NOT NULL,
  budget_id INT NOT NULL AUTO_INCREMENT,
  User_id INT NOT NULL,
  PRIMARY KEY (budget_id),
  FOREIGN KEY (User_id) REFERENCES user(User_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$d = "CREATE TABLE EXPENSE
(
  expense_id INT NOT NULL AUTO_INCREMENT,
  amount INT NOT NULL,
  category VARCHAR(50) NOT NULL,
  expense_name VARCHAR(50) NOT NULL,
  PRIMARY KEY (expense_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$e = "CREATE TABLE TRUSTED_BY
(
  Name INT NOT NULL AUTO_INCREMENT,
  logo VARCHAR(50) NOT NULL,
  Description VARCHAR(50) NOT NULL,
  PRIMARY KEY (Name),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$f="CREATE TABLE HAS
(
  budget_id INT NOT NULL,
  expense_id INT NOT NULL,
  PRIMARY KEY (budget_id, expense_id),
  FOREIGN KEY (budget_id) REFERENCES BUDGET(budget_id),
  FOREIGN KEY (expense_id) REFERENCES EXPENSE(expense_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$g = "CREATE TABLE ADD_ARTICLE
(
  User_id INT NOT NULL,
  Article_id INT NOT NULL,
  PRIMARY KEY (User_id, Article_id),
  FOREIGN KEY (User_id) REFERENCES user(User_id),
  FOREIGN KEY (Article_id) REFERENCES ARTICLE(Article_id),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

$h = "CREATE TABLE CREATE_BUDGET
(
  User_id INT NOT NULL,
  Name INT NOT NULL,
  PRIMARY KEY (User_id, Name),
  FOREIGN KEY (User_id) REFERENCES user(User_id),
  FOREIGN KEY (Name) REFERENCES TRUSTED_BY(Name),
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";
$tables = [$a, $b, $c, $d, $e, $f, $g, $h];


foreach($tables as $k => $sql){
    $query = @$conn->query($sql);

    if(!$query)
       $errors[] = "Table $k : Creation failed ($conn->error)";
    else
       $errors[] = "Table $k : Creation done";
}


foreach($errors as $msg) {
   echo "$msg <br>";
}

?>
