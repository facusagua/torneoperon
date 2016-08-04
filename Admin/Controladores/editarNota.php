<?php 
include 'security.php';
    include '../../conections/database.php';
    mysqli_select_db($enlace,$dataBase);
    $id_not= $_GET['id_not'];
    $nTitulo = $_GET['nTitulo'];
    $nDescripcion = $_GET['nDescripcion'];
    $nTema = $_GET['nTema'];
    $nCategorias = $_GET['nCategorias'];
    $nTexto = $_GET['nTexto'];
    if(isset($_GET['nTags'])){
        $nTags = $_GET['nTags'];  
    }
    $existTema  = "SELECT * FROM temas WHERE tema_descripcion = '$nTema'";
    $sqlTema = mysqli_query($enlace,$existTema);
    $numTema = mysqli_num_rows($sqlTema);
    if($numTema == '0'){   
        $insertTema = "INSERT INTO temas (tema_descripcion) VALUES ('$nTema')";
        $sqlTema = mysqli_query($enlace,$insertTema);
        $idTema = mysqli_insert_id($enlace);
    }
    else{
        $rowTema = mysqli_fetch_array($sqlTema, MYSQLI_ASSOC);
        $idTema = $rowTema['id_tem'];
    }
    $insertDB = "UPDATE noticias SET not_titulo='$nTitulo',not_descripcion='$nDescripcion',not_publicacion='$nTexto',not_tema='$idTema',not_tags='$nTags' WHERE id_noti='$id_not'";
    $sqlEq = mysqli_query($enlace,$insertDB);
    $delCat = "DELETE FROM noticias_categorias WHERE id_notc='$id_not'";
    $sqldelCat = mysqli_query($enlace,$delCat);
    for ($i=0;$i<count($nCategorias);$i++)    
    {     
        $insertNC = "INSERT INTO noticias_categorias (id_notc,id_catn) VALUES ('$id_not','$nCategorias[$i]')";
        $sqlEq = mysqli_query($enlace,$insertNC);
    } 
    if(isset($_GET['nVideoU'])){
        if($_GET['nVideoU'] != ""){
        $nVideoU = $_GET['nVideoU'];
        $saveVid = "https://www.youtube.com/embed/".$nVideoU;    
        $insertNC = "INSERT INTO videos (id_publi,url) VALUES ('$id_not','$saveVid')";
        $sqlEq = mysqli_query($enlace,$insertNC);
        }
    }
    if(isset($_GET['nVideoD'])){
        if($_GET['nVideoD'] != ""){
        $nVideoD = $_GET['nVideoD'];
        $saveVid = "https://www.youtube.com/embed/".$nVideoD;    
        $insertNC = "INSERT INTO videos (id_publi,url) VALUES ('$id_not','$saveVid')";
        $sqlEq = mysqli_query($enlace,$insertNC);}
    }
    if(isset($_GET['nVideoT'])){
        if($_GET['nVideoT'] != ""){
        $nVideoT = $_GET['nVideoT'];
        $saveVid = "https://www.youtube.com/embed/".$nVideoT;    
        $insertNC = "INSERT INTO videos (id_publi,url) VALUES ('$id_not','$saveVid')";
        $sqlEq = mysqli_query($enlace,$insertNC);}
    }
    if(isset($_GET['nVideoC'])){
        if($_GET['nVideoC'] != ""){
        $nVideoC = $_GET['nVideoC'];
        $saveVid = "https://www.youtube.com/embed/".$nVideoC;    
        $insertNC = "INSERT INTO videos (id_publi,url) VALUES ('$id_not','$saveVid')";
        $sqlEq = mysqli_query($enlace,$insertNC);}
    }
header("Location: ../publicaciones.php");
?>