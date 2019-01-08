<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link href="styles/site.css" rel="stylesheet">
    <script src="scripts/jquery.js"></script>
    <script src="scripts/site.js"></script>
    <title>Онлайн магазин</title>
</head>
<body>
<header>
    <div id="headerInside">
        <div id="logo"></div>
        <div id="companyName">Brand</div>
        <div id="navWrap">
            <a href="/">
                Главная
            </a>
            <a href="index.php?page=shop">
                Магазин
            </a>
        </div>
    </div>
</header>

<div id="content">
    <?php
        $goods = [
            [
                'id' => 1,
                'name' => 'Iphone',
                'desc' => 'Идейные соображения высшего порядка, а также дальнейшее развитие различных форм деятельности влечет за собой процесс внедрения и модернизации позиций, занимаемых участниками в отношении поставленных задач. Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности позволяет выполнять важные задания по разработке направлений прогрессивного развития. Идейные соображения высшего порядка, а также новая модель организационной деятельности способствует подготовки и реализации форм развития. Не следует, однако забывать, что консультация с широким активом позволяет выполнять важные задания по разработке позиций, занимаемых участниками в отношении поставленных задач. Равным образом постоянное информационно-пропагандистское обеспечение нашей деятельности влечет за собой процесс внедрения и модернизации форм развития. Разнообразный и богатый опыт постоянный количественный рост и сфера нашей активности представляет собой интересный эксперимент проверки системы обучения кадров, соответствует насущным потребностям.',
                'img' => '/images/goods/iphone.jpg',
                'price' => '2000 $'
            ],
            [
                'id' => 2,
                'name' => 'HTC',
                'desc' => 'Идейные соображения высшего порядка, а также укрепление и развитие структуры влечет за собой процесс внедрения и модернизации дальнейших направлений развития. Равным образом начало повседневной работы по формированию позиции обеспечивает широкому кругу (специалистов) участие в формировании форм развития. Таким образом реализация намеченных плановых заданий влечет за собой процесс внедрения и модернизации соответствующий условий активизации.',
                'img' => '/images/goods/htc.jpg',
                'price' => '1200 $'
            ],
            [
                'id' => 3,
                'name' => 'Samsung',
                'desc' => 'Равным образом укрепление и развитие структуры играет важную роль в формировании направлений прогрессивного развития. Разнообразный и богатый опыт реализация намеченных плановых заданий требуют определения и уточнения существенных финансовых и административных условий.',
                'img' => '/images/goods/samsung.jpg',
                'price'=> '1400 $'
            ],
        ];

        $page = $_GET['page'];
        if (!isset($page)) {
            require ('templates/main.php');
        } elseif ($page == 'shop') {
            require ('templates/shop.php');
        } elseif ($page == 'product') {
            $id = $_GET['id'];
            $good = [];
            foreach ($goods as $product) {
                if ($product['id'] == $id) {
                    $good = $product;
                    break;
                }
            }
            require ('templates/openProduct.php');
        }
        
    ?>
</div>

<footer>
    <div id="footerInside">

        <div id="contacts">
            <div class="contactWrap">
                <img src="images/envelope.svg" class="contactIcon">
                info@brandshop.ru
            </div>
            <div class="contactWrap">
                <img src="images/phone-call.svg" class="contactIcon">
                8 800 555 00 00
            </div>
            <div class="contactWrap">
                <img src="images/placeholder.svg" class="contactIcon">
                Москва, пр-т Ленина, д. 1 офис 304
            </div>
        </div>

        <div id="footerNav">
            <a href="/">Главная</a>
            <a href="index.php?page=shop">Магазин</a>
        </div>

        <div id="social">
            <img class="socialItem" src="images/vk-social-logotype.svg">
            <img class="socialItem" src="images/google-plus-social-logotype.svg">
            <img class="socialItem" src="images/facebook-logo.svg">
        </div>

        <div id="copyrights">&copy; Brandshop</div>
    </div>
</footer>

</body>
</html>