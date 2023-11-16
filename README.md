<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Yii 2 Advanced Project Template</h1>
    <br>
</p>

### Инструкция установки
0. sudo apt-get install -y php8.0 php8.0-opcache php8.0-cli php8.0-curl php8.0-gd php8.0-xml php8.0-mcrypt php8.0-mbstring php8.0-iconv php8.0-dom php8.0-zip php8.0-mysql
1. composer create-project --prefer-dist yiisoft/yii2-app-advanced yiistartup
2. cd yii-project
3. php init
4. Выбери для разработки цифру 0
5. Создай базу данных для проекта
6. Введи данные по БД в common-->config-->main-local ----->
   Пример:
   'components' => [
   'db' => [
   'class' => \yii\db\Connection::class,
   'dsn' => 'mysql:host=localhost;dbname=yiistartup',
   'username' => 'root',
   'password' => 'newpassword',
   'charset' => 'utf8',
   ],
7. php yii migrate
8. Или создай виртуальный хост - (127.0.0.1       yiistartup) в Апаче2 для проекта (sudo systemctl restart apache2), или через IDE PhpStorm
его вебсерве - укажи хост и порт и etc hosts укажи название  (/home/dev/Documents/mydomains/yiistartup/frontend/web)
   или в настройках пхпшторма в interpreteter options вставь это ----
   -d short_open_tag=on -d display_errors=on -d mbstring.internal_encoding=utf-8 -d opcache.revalidate_freq=0 -d memory_limit=128M -d max_input_vars=10000 -d date.timezone="Europe/Moscow" -d sendmail_path="/usr/sbin/sendmail -t -i -f noreply@noserver.ru"
9. Или в терминале набери --> php yii serve --docroot="frontend/web/" --port=8888
sudo apt install php-intl php-imagick (эта тоже команда открывает интерфейс приложения в браузере)

### Other Info and Examples
* php yii migrate/create create_contact_table




