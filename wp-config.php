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
define('DB_NAME', 'wordpress');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'D&trn$J_O`biO<cc#(N,9`ZKEPu,P5_JDpEt<?p-}Qg hgxwF|/>unlw^2%>yksn');
define('SECURE_AUTH_KEY',  'k@*q%2M#DdT?lDd|,[A:n6^|K%qhoY/w{F8(9L-X>g*HEor8zy[0B0<?PS5i/_Q4');
define('LOGGED_IN_KEY',    'Ps)czLVyoTHc5{szGzM{Dyo508Eke^!YC[yyJ:G4H_!bIW_k8)r.NO`e{^/aWOj4');
define('NONCE_KEY',        '<Ab0!g@-kf/npN+h>wwB`j<B=n%c.?/L,ASt|T|$A>]%,ME*l~/e(}m,E%G3{&xX');
define('AUTH_SALT',        'pB9.mO1,Xs)|td~:rkQ+MP3J(oeIoQ;vr:o&0< T~DdY)8oR>w1@{Di%,@egf,H#');
define('SECURE_AUTH_SALT', 'Ud%}W] QzEr-mjYd=Jf(nGp6 -3smXGx(S|u)+d@{tvQi%:CZY9X1Lg9AHn ,aFD');
define('LOGGED_IN_SALT',   '{@W9YS*QpLmwOE`fY_.:@`7~c}~iA_|0~Hjiaf1aRw1JwFnxgIFOSBq1xJZ$R&:v');
define('NONCE_SALT',       'T^=q~ThpG(xn.r%RT3bko@OR,^Q|s[ Q@@6c2];22H1<X3q!fnb:By9C[^WgkWg(');

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
