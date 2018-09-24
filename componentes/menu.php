 <?php
        $informacao = 1;
        $Dados      = wp_nav_menu(array("echo" => false)); ///wp_nav_menu(array("echo" => false));
        $dt         = explode("<ul class=\"sub-menu\">", $Dados);
        $total      = count($dt);
        $menu;
        foreach ($dt as $d):
            if ($total === $informacao) {
                $d    .= "";
                /* &#9776; */
                $menu .= str_replace(""
                        . "<ul class=\"sub-menu\">", "<input type='checkbox' class='hamburguer' id='hamburguer_" . $informacao . "'>"
                        . "<label class=\"labelH\"  for='hamburguer_" . $informacao . "'>&#x25Bc; </label> <ul class=\"sub-menu\">", $d);
                $d    = "";
            } else {
                $d    .= "<ul class=\"sub-menu\">";
                $menu .= str_replace(""
                        . "<ul class=\"sub-menu\">", "<input type='checkbox' class='hamburguer' id='hamburguer_" . $informacao . "'>"
                        . "<label class=\"labelH\" for='hamburguer_" . $informacao . "'>&#x25Bc;</label> <ul class=\"sub-menu\">", $d);
                $d    = "";
            }
            $informacao++;
        endforeach;
        ?>
        <!--------------------->
        <nav class="horizontal">
            <?php echo $menu; ?>
        </nav>
        <!--------------------->