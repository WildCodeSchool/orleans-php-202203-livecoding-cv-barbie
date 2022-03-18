<?php 
    require 'trainings.php';
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Barbie</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <header>
        <nav>
            <h1>Barbie</h1>
            <div class="items" id="items">
                <a href="#trainings">Mes formations</a>
                <a href="#xp">Mes expériences</a>
                <a href="#contact">Contact</a>
            </div>

            <a class="burger" href="#items">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z" />
                </svg>
            </a>
            <a class="close" href="#"></a>
        </nav>
    </header>
    <main>
        <section id="trainings">
            <h1>Mes formations</h1>
            <div class="trainings">
                <?php foreach($trainings as $training) { ?>
                    <div class="training">
                        <h2><?php echo $training['school']; ?></h2>
                        <div><?php echo $training['date']; ?></div>
                        <p><?php echo $training['description']; ?></p>
                    </div>
                <?php } ?>
            </div>
        </section>
        <section id="xp">
            <h1>Mes expériences</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, iure? Dolorum ipsam sit labore quos voluptatum minus, libero laboriosam ipsum repellat! Aliquam possimus ipsa consequatur placeat cupiditate nesciunt veniam non.</p>
        </section>
        <section id="contact">
            <h1>Contact</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus, iure? Dolorum ipsam sit labore quos voluptatum minus, libero laboriosam ipsum repellat! Aliquam possimus ipsa consequatur placeat cupiditate nesciunt veniam non.</p>
        </section>
    </main>
    <footer></footer>
</body>

</html>