<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100&family=Ruslan+Display&display=swap"
        rel="stylesheet">
    <title>СНТ Сосна</title>
    <link rel="stylesheet" href="../style/style.css">
    <style>
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      text-align: left;
      background-color: #fff;
      -webkit-text-size-adjust: 100%;
      -webkit-tap-highlight-color: rgba(0, 0, 0, 0);
    }

    button {
      display: inline-flex;
      align-items: center;
      font-weight: 400;
      line-height: 1.5;
      color: #000;
      text-decoration: none;
      cursor: pointer;
      user-select: none;
      background-color: #f5f5f5;
      border: 1px solid #f5f5f5;
      padding: .375rem .75rem;
      font-size: 1rem;
      border-radius: .25rem;
      transition: background-color .15s ease-in-out, border-color .15s ease-in-out;
    }

    button:hover {
      color: #000;
      background-color: #eee;
      border-color: #eee;
    }

    button:focus {
      color: #000;
      background-color: #eee;
      border-color: #eee;
      box-shadow: 0 0 0 0.25rem rgba(158, 158, 158, 0.5);
    }

    button:disabled {
      pointer-events: none;
      opacity: 0.65;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
    }

    input[type="text"] {
      display: block;
      width: 100%;
      padding: .375rem .75rem;
      font-size: 1rem;
      font-weight: 400;
      line-height: 1.5;
      color: #212529;
      background-color: #fff;
      background-clip: padding-box;
      border: 1px solid #ced4da;
      appearance: none;
      border-radius: .25rem;
      transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
    }

    input[type="text"]:focus {
      color: #212529;
      background-color: #fff;
      border-color: #86b7fe;
      outline: 0;
      box-shadow: 0 0 0 0.25rem rgb(13 110 253 / 25%);
    }

    input.is-invalid {
      border-color: #dc3545;
      padding-right: calc(1.5em + .75rem);
      background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
      background-repeat: no-repeat;
      background-position: right calc(.375em + .1875rem) center;
      background-size: calc(.75em + .375rem) calc(.75em + .375rem);
      background-color: #fff;
    }

    .invalid-feedback {
      display: none;
      width: 100%;
      margin-top: .25rem;
      font-size: .875em;
      color: #dc3545;
    }

    .is-invalid~.invalid-feedback {
      display: block;
    }
  </style>
</head>

<body>
    <!-- !HEADER -->
    <header>
        <div class="header">
            <div class="container">
                <div class="header__inner">
                    <nav class="nav">
                        <a class="nav__link" href="news.php">новости</a>
                        <a class="nav__link active" href="#">форум</a>
                        <a class="nav__link" href="#">полезная информация</a>
                        <a href="../index.php"><img class="img__logo" src="../image/logo.png" alt="logo"></a>
                        <a class="nav__link" href="#">контакты</a>
                        <a class="nav__link" href="#">галерея</a>
                        <a class="nav__link" href="#">участки на продажу</a>
                    </nav>
                </div>
            </div>
        </div>
        <div class="personal__account">
            <a href="personalAccount.php">
                <div class="circle">
                    <img src="../image/user.png" alt="личный кабинет">
                </div>
            </a>
        </div>
    </header>
    <!-- !HEADER end -->
    <main>
        <section>
            <div class="container">
                <h2 class="create__h2"><img src="../image/iconLeft.png" alt="стрелка влево">Конструктор темы</h2>

                <div class="create__news">
                    <div class="form-result d-none">Форма успешно отправлена!</div>
                   <form id="form" action="/assets/php/process-form.php" method="post" novalidate>
                        <label for="">Название темы</label>
                        <input class="create__input1" type="text" placeholder="Краткое название темы которую хотите обсудить">
                        <label for="">Описание темы</label>
                        <textarea name="" id="" cols="10" rows="5" placeholder="Подробное описание темы которую хотите обсудить"></textarea>
                    <div class="captcha">
        <div class="captcha__image-reload">
          <img class="captcha__image" src="/assets/php/captcha.php" width="132" alt="captcha">
          <button type="button" class="captcha__refresh"></button>
        </div>
        
      </div>
      <!-- Кнопка "Отправить" -->
      <button class="button__create" type="submit" value="Создать тему">Отправить</button>
                        <!--input class="button__create" type="submit" value="Создать тему"-->
                    </form>
                </div>
            </div>
        </section>
    </main>

    <!-- !FOOTER -->
    <footer>
        <div class="container">
            <div class="block__footer">
                <div class="footer__text">
                    <a href="news.php" class="footer__point">Новости</a>
                    <div class="footer__content">
                        <a href="#">Информация</a>
                        <a href="#">Мероприятия</a>
                        <a href="#">Должники</a>
                    </div>
                </div>
                <div class="footer__text">
                    <a href="#" class="footer__point active">Форум</a>
                    <div class="footer__content">
                        <a href="#">Вопросы</a>
                        <a href="#">Голосования</a>
                        <a href="#">Остальные темы</a>
                    </div>
                </div>
                <div class="footer__text">
                    <a href="#" class="footer__point">Полезная информация</a>
                    <div class="footer__content">
                        <a href="#">Полезные контакты</a>
                        <a href="#">Расписание автобусов</a>
                        <a href="#">Документы СНТ</a>
                    </div>
                </div>
                <div><a href="../index.php"><img src="../image/logo.png" alt="логотип"></a></div>
                <div class="footer__text">
                    <a href="#" class="footer__point">Контакты</a>
                    <div class="footer__content">
                        <a href="#">Карта</a>
                        <a href="#">Управление</a>
                        <a href="#">Техподдержка</a>
                    </div>
                </div>
                <div class="footer__text">
                    <a href="#" class="footer__point">Галерея</a>
                </div>
                <div class="footer__text">
                    <a href="#" class="footer__point">Участки на продажу</a>
                    <div class="footer__content">
                        <a href="#">Личные</a><br>
                        <a href="#">Бесхозные</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- !FOOTER end-->
</body>

</html>