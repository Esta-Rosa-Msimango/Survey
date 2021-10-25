<?php
    require "head.php";
?>
    <body>
        <div class="box">
            <form action="fill.php" method="post">
                    <button class="btn1" type="submit">Fill out survey</button>
            </form>    
            <form action="back/result.script.php" method="post">
                    <button class="btn2" type="submit">View survey results</button>
            </form>
        </div>
    </body>
</html>