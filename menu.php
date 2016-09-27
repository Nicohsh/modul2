<!-- Nedenfor ses et PHP-tag hvor vores tidligere-nævnte variabel "$curpage" blive brugt. Jeg bruger den således med en conditional statement der afgør at hvis noget har en sandt/falsk tilstand, skal variablen er sand, så echo'er den en class der hedder "active" der gør det muligt for os at vise vores valgte side  -->
<nav>
    <ul>
        <li><a href="p1.php" <?php if ($curpage == 'p1.php'){echo 'class="active"';}?>>PAGE 1</a></li>
        <li><a href="p2.php" <?php if ($curpage == 'p2.php'){echo 'class="active"';}?>>PAGE 2</a></li>
        <li><a href="p3.php" <?php if ($curpage == 'p3.php'){echo 'class="active"';}?>>PAGE 3</a></li>
        <li><a href="p4.php" <?php if ($curpage == 'p4.php'){echo 'class="active"';}?>>PAGE 4</a></li>
    </ul>
</nav>