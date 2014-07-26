
<?php
    function getConnection(){
        $connection = mysqli_connect("localhost", "admin", "", "test"); //host, username, pw, dbname
        if (mysqli_connect_errno())
        {
            header("Location: dataaccesserror.html");
        }
        return $connection;
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