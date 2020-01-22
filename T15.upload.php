<?php require_once('./menu.php')?>

<?php require_once('./lang/detectlang.php')?>

<?php 

  
    $dossier="upload/";
    ?> <pre><?= var_dump($_FILES); ?> <pre> <?php
    $fichier=$dossier.basename($_FILES["file"]["name"]);

    $nouveaunom=bin2hex(openssl_random_pseudo_bytes(16));
    $extensionsautorisees=array("JPG","jpg","PNG","png","GIF","gif","JPEG","jpeg");
    $taillemax="5000000";

    $fichier=$dossier. $nouveaunom;

    //on récupère les infos du fichier qu'on nous a transmis

    $fileupload=$_FILES["file"];
    $nomtemporaire=$fileupload["tmp_name"];
    $tailleactuelle=$fileupload["size"];
    $extension=pathinfo($fileupload['name'], PATHINFO_EXTENSION);

    $uploadOK=1;

    if($nomtemporaire=="" AND $tailleactuelle==0){
        $uploadOK=0;
        echo "Fichier non valide";
    }
    if(file_exists($fichier.'.'.$extension)){
        echo "Le fichier existe sur le serveur";
        $uploadOK=0;
    }

    if ($uploadOK==1){
        if($tailleactuelle<$taillemax){
            if (in_array($extension,$extensionsautorisees)){
                if(move_uploaded_file($nomtemporaire,$dossier.$nouveaunom.'.'.$extension)){
                    echo "Fichier uploadé";
                    ?>
                    <a href="<?= $fichier ?>" target="_blank">Ouvrir l'image</a>
                    <?php
                }else
                    echo "Erreur d'upload";
                }
            }else{
                echo "Mauvaise extension";
            }
        }else{
            echo "Taille incorrecte";
        }

    
// }else{



    
?>
<div class="container">
    <h1>Upload</h1>
    <form action="T15.upload.php" method="post" enctype="multipart/form-data">

        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text">Upload</span>
            </div>
            <div class="custom-file">
                <input type="file" class="custom-file-input" id="file" name="file">
                <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
            </div>
        </div>
        <button type="submit" class="btn btn-warning" value ="Upload Image" name="btUpload">Upload Image </button>

</div>

<div id = "images" class="row view-group">
<p> test </p>

<?php 
$dossier="upload";

$fichiers=scandir($dossier);

foreach($fichiers as $fichier){
    if(($fichier==".") || ($fichier=="..") || is_dir($fichier)){
        
    }else{
        ?> <img src="<?= $dossier . '/'. $fichier ?>"><?php
    }
}


?>

</div>


<footer class="footer font-small blue pt-4">
    <div class="container-fluid text-center text-md-left">
        <div class="row">
            <div class="col-md-6 mt-md0 mt-3">
                <h5 class="text-uppercase">Footer Content</h5>
                <p>EPS Péruwelz - &copy; 20<?php echo date("y");?> Delcampe Amory.</p>

            </div>
        </div>
    </div>
    
</footer>

<?php // } 
?>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="jquery/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/stupidtable/1.1.3/stupidtable.min.js"></script>
<script>
$("table").stupidtable();


</script>
</body>

</html>