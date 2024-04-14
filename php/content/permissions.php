<?php
    session_start();
    $_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

    $title = "Permissions";
    $path = "../";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main>
    <section id="singular">
        <h2> Permissions: </h2>
        <p>
            In the UNIX environment, file and directory permissions are categorized by user (creator), group, and other (everyone else).  Each category is then
            either given or restriced access to read (r), write (w), and/or x (execute).  When access is given, the corresponding letter(s) will be visible;
            otherwise, the letter(s) will be replaced by a dash.  Refer to Commands & Syntax chmod for additional information.    
        </p>
    </section>
</main>

<?php
    include($path."inc/footer.php");
?>