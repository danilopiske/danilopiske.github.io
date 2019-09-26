<?php
$path = "artes/";
$diretorio = dir($path);
 
echo "Lista de Arquivos do diretório '<strong>".$path."</strong>':<br />";
while($arquivo = $diretorio -> read()){
echo "<a href='".$path.$arquivo."'>".$arquivo."</a><br />";
echo "1";
}
$diretorio -> close();
?>

<select name="level">
<?php
    $dirname = "artes/";
    $dirhandle = opendir($dirname);
    while($file = readdir($dirhandle))
    {
    if ($file != "." && $file != "..")
    {
    if (is_file($dirname.$file))
    {
    echo "<option value='" . $file .">" . $file . "</option>"; 

    }
    else
    {
    echo "mappe: " . $file . "<br>";
    }
    }
    }
     ?> 
</select>