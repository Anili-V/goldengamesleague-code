<?php session_start(); ?>
<?php include 'header.php'; ?>
<style> 
input[type=text] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}

input[type=text]:focus {
    border: 3px solid #555;
}
</style>
<?php
    if (isset($_SESSION['s_id']) ){
        if (count($list) < 16){
            echo "<form action='comp1.php' method='POST'><center><button type='submit' name='register'>Register</button></center></form>";
        } else {
            echo "Tournament Full";    
        }
    } else {
        echo 'Please Login First';
    }
?>
<?php include 'footer.php'; ?>