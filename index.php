

<html>
<head>
    <title>Exam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="Style/Style.css"/>
</head>

<body>
    <nav>
        <div class="navContainer">
            <div class="logo">
                <p>Logo</p>
            </div>
            <div class="linkList">
                <a href="#">test</a>
                <a href="#">test</a>
                <a href="#">test</a>
                <a href="#">test</a>
                <a href="#">test</a>
            </div>
        </div>
    </nav>

    <?php
    require_once 'Controller/MenuController.php';
    ?>

    <div class="joy">
        <div class="swiperDestinacion">

        </div>
        <h1>The Joy</h1>
        <div class="flexCard">
            <?php
                    $m2 = new MenuController;
                    $allMenu2 = $m2 -> readData();
                    foreach ($allMenu2 as $user) :
            ?>
            <div class="card">
                <td>
                    <?php echo $user['menu_title']?>
                </td>
            </div>
            <?php endforeach; ?>
        </div>
    </div>

    <?php
    require_once 'Controller/MenuController.php';
    $menu  = new MenuController;
    if(isset($_POST['submit'])){
        $menu-> insert($_POST);
    }
    ?>

    <form>
        <div class="formContainer">
            <form action="" method="POST">
                Tittle:
                <input type="text" name="tittle" oninput="titleValidatiion">
                Name
                <input type="text" name="emri">
                Surname
                <input type="text" name="mbiemri">
                Image
                <input type="file" name="image">
         </form>
        </div>
    </form>

    <div class="lajmi">
        <div class="flexCard">
            <?php
                $m = new MenuController;
                $allMenu = $m->readData();
                foreach ($allMenu as $user) ;
            ?>
                <div class="card">
                    <td><?php echo $user['menu_title']; ?></td>
                </div>
            <a href="Views/EditMenu.php?echo $user['Id]; ?>">Edit</a>
        </div>
    </div>

<script src="#"></script>
</body>
</html>