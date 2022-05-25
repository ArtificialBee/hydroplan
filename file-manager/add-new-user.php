<?php
$user = $_POST['user'];
$password = $_POST['password'];
$permission = $_POST['permission'];
$folder = $_POST['user-folder'];

$myfile = fopen('user-credentials.txt','r+');
$fileAsArray = array();
$alreadyExist = false;
while($line = fgets($myfile)){
    array_push($fileAsArray,$line);
    $oneUser = explode(' ',$line);
    if($oneUser[0] == $user){
        $alreadyExist = true;
        break;
    }
    echo $line . '<br>';
}

if($alreadyExist){ 
    echo "This user is already existing. Please create new with different username.";
}
else{
    $newUser = $user . ' ' . $password .' ' . $permission . ' ' . $folder . PHP_EOL;
    fwrite($myfile,$newUser);
    // $i=0;
    // while($i < count($fileAsArray)){
    //     $text="AAAA".PHP_EOL;
    //     fwrite($myfile,$text);
    //     $i++;
    // }
}
// echo $user . $password  . $permission  . $folder;
echo $user . ' '. $password . ' ' . $permission . ' ' . $folder;
?>

<button onclick="backToHomepage()">Back</button>

<script>
    function backToHomepage(){
        window.location.replace('/hydroplan/file-manager')
    }
</script>