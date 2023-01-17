$conn = oci_connect('user-name', 'password', '//localhost:1521/XE');

or: Oracle-JDBC:
OracleDataSource ods = new OracleDataSource();
SQL: ods.setURL("jdbc:oracle:thin@host:1521:XE","user-name","password");
PL/SQL: ods.setURL("jdbc:oracle:thin:user-name/password@host:1521/XE");
Connection conn = ods.getConnection();


To use this Oracle Call Interface (OCI) connection, once php is installed:
Go to php.ini file ( in this case in C:\WINDOWS\ directory), and uncomment
- Uncomment extension=php_oci8.dll (delete the ;)
- Then start the Apache.

Test your connection with this:
<?php
 $conn = oci_connect('User-name', 'password', '//host:1521/XE');
 if (!$conn) {
     echo 'The Oracle connection failed.';
     exit();
 } else {
     echo 'The connection to Oracle succeed.';
 }
 ?>

Here is an example (phys_search.php) allowing the connection to the XE Oracle database
and Physicists table. The form used gives two text area to search for a physicist
by entering her/his first and last names (or some first initials).

Save the file in a directoy related web server (http://localhost:8033/PLSQL/)
and double-click on the phys_search.php file