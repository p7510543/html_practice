Sample Hits :
<?php
$conn = mysqli_connect(
        'localhost',
        'sample',
        'password',
        'sample'
);
$qry = 'SELECT * FROM hits WHERE page=0;';
$result = mysqli_query($conn, $qry);
$row = mysqli_fetch_array($result);
$hits = $row['hits'] + 1;
$qry = "UPDATE hits SET hits=$hits WHERE page=0;";
mysqli_query($conn, $qry);
echo $hits;
?>
<br/>
<a href="/">Home</a>
