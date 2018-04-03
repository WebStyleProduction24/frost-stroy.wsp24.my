<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define('DB_NAME', 'frost');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|&LV~y#6WYJ}?(Ys97k-&FMX`r38cFzn`-s)]~VmZx~HgIJ?.G3K%P[OjE!?>7jG');
define('SECURE_AUTH_KEY',  'SZF8%9p}oAk};pE&pQ53Y{RHFNz8OQ*xokC*ojQaAZc0DL_Ix#q%{BhF$Y(cS8`F');
define('LOGGED_IN_KEY',    ')+G<1kW(<PSO?G8:B#Iv.IY&z{)0f^is{WT*=~Mn]$<+YSlJWq|z6Yzc+S]_q(=&');
define('NONCE_KEY',        'zu+B&ncqD-m0DF#K0igM/uijmxs(oJdZArjvaB7pmm^RJ3WpsFMu&o@M@vS{A$.h');
define('AUTH_SALT',        '$N^pG5TeRvOr)f<6;BI%R#$&gA%Y{vj&`1w:~2q:=p^wHUuF~3I:ojS?8gm;fpVh');
define('SECURE_AUTH_SALT', 'iw{UkC[C&lFS)jKWvF2k=*IT0`&|yCH[Jm$-s7Q_ =]Q1]K5*/WZQ:.xz2E!/@H[');
define('LOGGED_IN_SALT',   's/#c:kZD*Tj$e[Pqw,^lv2]; f nESxbDiG+O3%mg)9Nk+nIQd3Roqz<<wBK4/i&');
define('NONCE_SALT',       '1xDQVxl9PY+79w`V~A_ !&6)Q`h1$1ARY: l+Np}Jeq<9ex,+G=[kr(9B?c/Oi0Q');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
