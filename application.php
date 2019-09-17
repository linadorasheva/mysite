<!DOCTYPE html>
<html>
<head>
  <title>mysite</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Roboto:400,500&display=swap" rel="stylesheet">
</head>
<body>
 <header class="page-header container">
    <h1 class="page-header__title">Angelina Dorasheva</h1>
    <h3 class="page-header__subtitle">Front-end developer</h3>
    <nav class="main-nav">
      <ul class="main-nav__list">
        <li class="main-nav__item"><a class="main-nav__link" href="index.html">Home</a></li>
        <li class="main-nav__item"><a class="main-nav__link" href="works.html">Works</a></li>
      </ul>
      <button class="main-nav__btn-wrapper" type="button">
        <span class="main-nav__btn">menu</span>
      </button>
    </nav>
  </header>
  <?php

$sendto   = "dorasheva.a@gmail.com"; // почта, на которую будет приходить письмо
$username = $_POST['name'];   // сохраняем в переменную данные полученные из поля c именем
$usertel = $_POST['telephone']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usermail = $_POST['email']; // сохраняем в переменную данные полученные из поля c адресом электронной почты

$usermetro = $_POST['metro'];   // сохраняем в переменную данные полученные из поля c именем
$useraddress = $_POST['address']; // сохраняем в переменную данные полученные из поля c телефонным номером
$userentrance = $_POST['entrance']; // сохраняем в переменную данные полученные из поля c адресом электронной почты
$userfloor = $_POST['floor'];   // сохраняем в переменную данные полученные из поля c именем
$userkey = $_POST['key']; // сохраняем в переменную данные полученные из поля c телефонным номером

$userdate = $_POST['date']; // сохраняем в переменную данные полученные из поля c телефонным номером
$usertime =$_POST ['time']; // сохраняем данные из выпадающего списка

$usercomments =$_POST ['comments']; // сохраняем данные из выпадающего списка
$summa =$_POST ['summa']; // холодильник


// $userhoover = '';
//   if (empty($_POST["hoover"]))
//   {
//      $userhoover = "Пылесос не нужен";
//   }
//   elseif (!empty($_POST["hoover"]) && is_array($_POST["hoover"]))
//   {
//      $userhoover = "Пылесос нужен";
//   }

// Формирование заголовка письма
$subject  = "Заявка на уборку";
$headers  = "From: " . strip_tags($usermail) . "\r\n";
$headers .= "Reply-To: ". strip_tags($usermail) . "\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/html;charset=utf-8 \r\n";

// Формирование тела письма
$msg  = "<html><body style='font-family:Arial,sans-serif;'>";
$msg .= "<h2 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Заявка</h2>\r\n";
$msg .= "<p><strong>От кого:</strong> ".$username."</p>\r\n";
$msg .= "<p><strong>Почта:</strong> ".$usermail."</p>\r\n";
$msg .= "<p><strong>Телефон:</strong> ".$usertel."</p>\r\n";

$msg .= "<p><strong>Метро:</strong> ".$usermetro."</p>\r\n";
$msg .= "<p><strong>Адрес:</strong> ".$useraddress."</p>\r\n";
$msg .= "<p><strong>Подъезд:</strong> ".$userentrance."</p>\r\n";
$msg .= "<p><strong>Этаж:</strong> ".$userfloor."</p>\r\n";
$msg .= "<p><strong>Домофон:</strong> ".$userkey."</p>\r\n";
$msg .= "<p><strong>Дата:</strong> ".$userdate."</p>\r\n";
$msg .= "<p><strong>Время:</strong> ".$usertime."</p>\r\n";
$msg .= "<p><strong>Комментарии:</strong> ".$usercomments."</p>\r\n";
// $msg .= "<p><strong>Пылесос:<br/> </strong> ".$userhoover."</p>\r\n";
$msg .= "<p><strong>Услуги :</strong> ".$summa."</p>\r\n";
$msg .= "</body></html>";

// отправка сообщения
if(@mail($sendto, $subject, $msg, $headers)) {
  echo '<main>
  <div class="promo-block promo-block--send">
    <div class="container">
      <div class="promo-block__wrapper promo-block__wrapper--send">
        <div class="send">
            <h1 class="send__title">Ваш заказ принят!</h1>
            <p class="send__text">Наш менеджер свяжется с Вами в течении 10 минут!</p>
          </div>
      </div>
    </div>
  </div>
</main>';
} else {
  echo '<main>
  <div class="promo-block promo-block--send">
    <div class="container">
      <div class="promo-block__wrapper promo-block__wrapper--send">
        <div class="send">
            <h1 class="send__title send__title--error">Произошла ошибка!</h1>
            <p class="send__text">Пожалуйста обновите страницу и попробуйте еще раз.</p>
          </div>
      </div>
    </div>
  </div>
</main>';
}

?>
  <footer class="page-footer page-footer--works">
    <h3 class="page-footer__title">I'm here:</h3>
    <div class="social">
      <a class="social__link" href="https://wa.me/79999075633" target="_blank">WhatsApp</a>
      <a class="social__link social__link--telegram" href="http://t-do.ru/linadorasheva" target="_blank">telegram</a>
      <a class="social__link social__link--linkedin" href="http://linkedin.com/in/dorasheva" target="_blank">LinkedIn</a>
      <a class="social__link social__link--email" href="mailto:dorasheva.a@gmail.com" target="_blank">Email</a>
    </div>
    <p class="copyright">
      created by</br>
      © <a class="copyright__link" href="http://linadorasheva.ru/" target="_blank">linadorasheva</a>, 2019
    </p>
  </footer>
  <script src="js/script.js"></script>
</body>
</html>
