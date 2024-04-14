<?php
    $title = "Unix";
    $path = "./";
    include($path."inc/header.php");
    include($path."inc/nav.php");
?>
        
<main class="HomepageMain">
    <div class="HomepageContent">
        <div class="UNIX_History">
            <h2>UNIX History:</h2>
            <p>
                Unix has gone through many iterations over the ages, but its early stages can be traced back to the 1960s.
            </p>
            <h2>MULTICS:</h2>
            <p>
                MULTICS came into being with the goal of creating the most advanced computer system that utilized time sharing. This effort was a group effort between members of General Electric, Massachusetts Institute of Technology and Bell Laboratories. However, Bell Laboratories would eventually pull out of the project in 1969. A key member of Bell Laboratories would like the idea behind MULTICS and eventually a simpler version would be made.
            </p>
            <h2>Birth of UNIX:</h2>
            <p>
                After just leaving the project, A member of the Bell laboratories would still take interest in the MULTICS project. His name was Ken Thompson. He liked the idea of MULTICS but thought it was too complex and decided there could be an easier solution to what MULTICS failed to achieve. In the same year that Bell laboratories left the project, Ken Thompson would create his first version of Unix called UNICS. This stood for Uniplexed Operating and Computing System. The name would stick but would eventually be shortened to Unix.
                <br><br>
                Ken Thompson would team up with Dennis Richtie would help rewrite Unix in order for it to be compatible with C. Unix would go through to have several different versions created, creating a divide when the Seventh Edition was released in 1978. This created a split between two different branches of UNIX, one being SVR4 and BSD.
            </p>
        </div>

        <div class="HomepageIMG">
            <img src="HomepageIMG.jpg" alt="HomepageIMG" width="100%">
        </div>
    </div>
</main>

<?php
    include($path."inc/footer.php");
?>