
<?php
    function getConnection(){
        $con = mysqli_connect("localhost", "root", "Summer", "Person"); //host, username, pw, dbname
        if (mysqli_connect_errno())
        {
            header("Location: dataaccesserror.html");
        }
        return $con;
    }

    // One and only one clean up of SQL resources
    function releaseSQLResource($result){
        mysqli_free_result($result);
    }
    function runDML($dml){
        $con = getConnection();
        if($result=mysqli_query($con, $dml)){
            return true;
        }
        return false;
    }
    // Runs any valid select statement
   function runSelectSQL($query){
        $con = getConnection();
        if($result=mysqli_query($con, $query)){
            return $result;
        }
        return mysqli_error($con);
    }

?>