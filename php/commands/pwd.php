<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "PWD Command";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main class="sideNav">
    <section>
        <?php include($path."inc/side_nav.php") ?>
    </section>
    <section>
        <h2>Common Commands & Syntax:</h2>
        <p>
            Note: Commands are case sensitive
            <br>
            pwd - This command prints what directory you are currently in.
        </p>
        <p>
            <a href="<?php echo $path; ?>commands/ls.php">Previous Page</a>
            <a href="./cd.php">Next Page</a>
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>