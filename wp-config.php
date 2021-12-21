<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'сотрудники компании' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SqwnpM$3X_N]{XJ%t6e4!$0xjVt!C[=+sxvzj}S-J[8H8bHX~z%tu/)b&BA5j+HR' );
define( 'SECURE_AUTH_KEY',  '~/#XzH(.sqGye>NSKwL^]6:_LG,h@L2fKeDqP`B%%Y.ih]ndKo2]S74<Qo?Q!f<[' );
define( 'LOGGED_IN_KEY',    ':JurCtXi[p*Ah3F+y=%Z,NwbKBuUE+DK#4S}wz[O B6qAYgfh$SiadNb(2$dmu7F' );
define( 'NONCE_KEY',        'k&6x<x]6njG?4U*)^*;0JGEfZPFZt?whc/s53_Q=Cio#lK/d8_DvN%e&KGr|5M[:' );
define( 'AUTH_SALT',        'JA:_OW^J*=1H:mJCBZ&y6W}Y~c,hM}s[yI(aOYzuiU+puzHuDwpIqlbt3Nv{_vab' );
define( 'SECURE_AUTH_SALT', '&Wr2J[a/U]VAbJ9]%sd3jrXwHTk/RVcJ4%2,Oh!`8V *!>T~F;5TMuP{0]?f9JK9' );
define( 'LOGGED_IN_SALT',   'P>hQXNzPu;Av8/;wL,+.$y1+GnMDz~a>jWM,.8E08mw?LPA&G{MatP*(Er|@0yDL' );
define( 'NONCE_SALT',       'ha;:=)3d<{=[ipQsQ3pMx:Vo@rP~x^5a1v~0`!nFW~7*Xj.A{!+h<?0:4|Mk$YkN' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */



/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
