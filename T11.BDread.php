    <?php require_once('./menu.php')?>

    <?php require_once('./lang/detectlang.php')?>


    <div class="container">
        <h1>Lire BD</h1>

        <?php
        require_once('./dblogin.php');
        $query= $bdd->query('SELECT * FROM tuser');
        $reponse = $query->fetchAll();
        $query->closeCursor();

        $query= $bdd->query('SELECT count(id_user) AS nbuser FROM tuser');
        $total = $query->fetch();
        //var_dump($total);
        $query->closeCursor();



        //var_dump($reponse);?>
        <a href="T12.BDDetails.php?userid=new">
            <button class="btn btn-primary my-3">Ajouter un nouvel utilisateur</button>
        </a>

        
        
        <table class="table table-striped bg-success">

        <thead>
        <tr>
            <th data-sort="int">Total : <?=$total['nbuser'] ?></th>
            <th data-sort="string">Login</th>
            <th data-sort="string">Email</th>
            <th data-sort="string">Password</th>
            <th data-sort="string">Newsletter</th>
            


        </tr>
        </thead>
        

        <?php foreach($reponse as $enr){

            ?>
            <tr>
            <td data-sort-value="<?=$enr['id_user']?>"> <a href="T12.BDDetails.php?userid=<?=$enr['id_user'] ?>"> <?=$enr['id_user'] ?></a>  </td>
            <td data-sort-value="<?=$enr['use_login'] ?>"> <?=$enr['use_login'] ?> </td>
            <td data-sort-value="<?=$enr['use_email'] ?>"> <?=$enr['use_email'] ?> </td>
            <td data-sort-value="<?=$enr['use_password'] ?>"> <?=$enr['use_password'] ?> </td>
            <td data-sort-value="<?=$enr['use_newsletter'] ?>"> <?=$enr['use_newsletter']=='1' ? "yes" : "no" ?> </td>

            </tr>
            <?php
        }


        ?>
        </table>

        
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