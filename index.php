<?php
include 'insertdata.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="styles.css" media="all"/>
<title>WCS</title>
</head>
<body>
<?php include ('config.php'); ?>


    <!-- Header section -->
    <header>
        <h1>
            <img src="https://www.wildcodeschool.com/assets/logo_main-e4f3f744c8e717f1b7df3858dce55a86c63d4766d5d9a7f454250145f097c2fe.png" alt="Wild Code School logo" />
            Les Argonautes
        </h1>
    </header>

    <!-- Main section -->
    <main class="main-content">

    <!-- New member form -->
        <div class="new-member-wrapper">
            <h2>Ajouter un(e) Argonaute</h2>
            <form action="" method="post" class="new-member-form">
                <label for="name">Nom de l&apos;Argonaute</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Entrez le nom de l'argonaute">
                <button type="submit" name="insert">Envoyer</button>
            </form>
        </div>

        <!-- Member list -->
        <div class="member-list-wrapper">
            <h2>Membres de l'équipage</h2>
                <section class="member-list">

                <?php
                if($query_run)
                {
                    while($row = mysqli_fetch_array($query_run))
                    {
                        ?>
                            
                            <div class="member-item"><?php echo $row['name']; ?></div>                            
                        <?php
                        }
                    }
                    else
                    {
                        ?>
                            <p colspan="6">Pas encore d'entrées</p>
                        <?php
                    }
                ?>
                </section>
            </div>
    </main>

    <footer>
        <p>Réalisé par Jason en Anthestérion de l'an 515 avant JC</p>
    </footer>

</body>
</html>



