<body>
    <div class="container">
        <?php
        require_once("menu.php");
        switch ($menuItem) {
            case 'home':
                require_once("home.php");
                break;
                case 'autok':
                    require_once("autok.php");
                    break;
                    case 'keszito':
                        require_once("keszito.php");
                        break;
                default:
                echo "üdvözöllek az oldalon";
                break;
        }
        ?>
        
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>
</html>