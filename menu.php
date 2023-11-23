<html>

<head>
    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>
<style>

</style>
<header class="p-3 mb-3 border-bottom">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <a href="index.php" class="d-flex align-items-center mb-2 mb-lg-0 text-decoration-none">
                    <img src="logo.png" alt="ВСТК" style="width: 131px;">
                </a>
            </div>
            <div class="col-6 text-center d-flex align-items-center">
                <div class="input-group">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Все категории</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Все категории</a></li>
                        <li><a class="dropdown-item" href="#">Аксессуары для красоты</a></li>
                        <li><a class="dropdown-item" href="#">Арамаподарки</a></li>
                    </ul>
                    <input type="text" class="form-control" placeholder="Поиск среди товаров выбранной категории">
                    <input type="button" class="btn btn-danger" value="Поиск">
                </div>
            </div>
            <div class="col d-flex justify-content-end align-items-center">
                <div class="row">
                    <div class="col-auto">
                        Семушева Наталья Андреевна
                    </div>
                    <div class="col-auto">
                        <img src="User.jpg" alt="mdo" width="32" height="32" class="rounded-circle">
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
<header class="pt-0 p-3 mb-3 border-bottom">
    <div class="row text-center">
        <div class="col"></div>
        <div class="col d-flex justify-content-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle nav-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                    Каталог товаров
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item active" href="#" aria-current="page">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <a class="nav-link px-2 <?php if ($active == 1) {
                                        echo "link-secondary";
                                    } else {
                                        echo "link-body-emphasis";
                                    } ?>" href="sotr.php">Сотрудники</a>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle nav-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                    Акции
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item active" href="#" aria-current="page">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <a class="nav-link px-2 <?php if ($active == 2) {
                                        echo "link-secondary";
                                    } else {
                                        echo "link-body-emphasis";
                                    } ?>" href="info.php">О компании</a>
        </div>
        <div class="col d-flex justify-content-center">
            <div class="dropdown">
                <a href="#" class="d-flex align-items-center col-lg-4 mb-2 mb-lg-0 link-body-emphasis text-decoration-none dropdown-toggle nav-link px-2" data-bs-toggle="dropdown" aria-expanded="false">
                    Клиентам
                </a>
                <ul class="dropdown-menu text-small shadow">
                    <li><a class="dropdown-item active" href="#" aria-current="page">1</a></li>
                    <li><a class="dropdown-item" href="#">2</a></li>
                    <li><a class="dropdown-item" href="#">3</a></li>
                    <li><a class="dropdown-item" href="#">4</a></li>
                    <li><a class="dropdown-item" href="#">5</a></li>
                    <li><a class="dropdown-item" href="#">6</a></li>
                </ul>
            </div>
        </div>
        <div class="col">
            <a class="nav-link px-2 link-body-emphasis" href="">Наличие на складе</a>
        </div>
        <div class="col">
            <a class="nav-link px-2 link-body-emphasis" href="">Контакты</a>
        </div>
        <div class="col">
            <a class="nav-link px-2 link-body-emphasis" href="">Доставки</a>
        </div>
        <div class="col"></div>
    </div>

</header>

</html>