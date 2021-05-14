<?PHP

if(!is_dir("images")) mkdir("images");

//scandir faz a 
foreach (scandir("images") as $item){
    if (!in_array($item, array(".", ".."))){
        unlink("images/" . $item);
    }
}

echo "Ok";

?>