<nav class="Top">
    <div class="LogoCon">
        <img src="<?php echo $path; ?>inc/images/Logo.png" alt="UNIX Logo" width="100" height="100">
    </div>
    <div class="PageName">
        <h1><?php echo $title; ?></h1>
    </div>
    <div class="SearchBar">
        <form action="<?php echo $path; ?>search_results.php" name="search_query" method="GET">
            <input class="SearchBox" type="text" name="search_query" placeholder=" Search...">
            <button class="SearchButton" type="Search"><i class="fa fa-search"></i></button>
        </form>
    </div>
</nav>
<nav class="Bottom">
    <ul id="menu">
        <li <?php if($title == "Unix"){ echo 'class="active parent"'; } ?>class="parent"><a href="<?php echo $path; ?>index.php">Home</a>

        <li <?php if($title == "Filesystem" or $title == "Permissions" or $title == "Terminal" or $title == "Commands" or $title == "CAT Command" or $title == "CD Command" or $title == "CHMOD Command" or $title == "CP Command" or $title == "LS Command" or $title == "MKDIR Command" or $title == "MV Command" or $title == "PWD Command" or $title == "RM Command"){ echo 'class="active parent"'; }?>class="parent"><a>Content</a>
            <ul class="child">
                <li class="parent"><a href="<?php echo $path; ?>content/filesystem.php">File System<span class="expand">»</span></a>
                    <ul class="child">
                        <li <?php if($title == "Filesystem"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>content/filesystem.php" nowrap>Directories</a></li>
                        <li <?php if($title == "Permissions"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>content/permissions" nowrap>Permissions</a></li>
                    </ul>
                </li>
                <li class="parent"><a>Commands<span class="expand">»</span></a>
                    <ul class="child">
                        <li <?php if($title == "Terminal"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>content/terminal.php" nowrap>Terminal</a></li>
                        <li <?php if($title == "Commands"){ echo 'class="active"'; } ?>><a href="<?php echo $path; ?>content/commands.php" nowrap>Commands & Syntax</a></li>
                    </ul>
                </li>
            </ul>
        </li>
        <li class="parent"><a href="<?php echo $path; ?>commands/terminal.php">Terminal Practice</a>
    </ul>
</nav>
