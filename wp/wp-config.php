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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'moto' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'Gn3@Gf*ay+nr1#N#)??OY=rm0A.5[t)O^Zyv24!`5DAE{~T=Qd#r9P61MZLmfp~O' );
define( 'SECURE_AUTH_KEY',  'ViMG=LuT)gOu&|ko[IPB7>qYc**N^j8yUQ`F^26,g2.Cs$RBe-w#2R!E`,Q7N3cN' );
define( 'LOGGED_IN_KEY',    'EQg1Udl1vIioE=1m!CGY]?k{h5o{e3Wmm9(`ehQ?I[oSuQ!(zS3Zc!gQ>Cu(KERZ' );
define( 'NONCE_KEY',        '@< [|o(S^s!YE{(OZOzXao0xZei1;/|qx&fB?~N4zg6VBq]-I0J*Z8yf|Ca,yLv]' );
define( 'AUTH_SALT',        '(Ioi!6>c;|B+;iSdR9u~ 7n|U&SB(pk)f{N5vX}4qEllRx,N#5I+~F P9Cd7RaKd' );
define( 'SECURE_AUTH_SALT', 'LwS< b=iAp97*BK&+~ijpTimnQl)KSl^h1!6h#tTv?*_?77@l7]4TyvL,jG.*Bq/' );
define( 'LOGGED_IN_SALT',   'djO@y,Vhg:WkyksX4TXg[Ei#@eAlWkyGcH&M;Q0i&^?vs#dM~E,w|NbqqXW_YqNp' );
define( 'NONCE_SALT',       'rh(.##(#T}Qm6]L1#Bsc)Q0%f=O+a8s~sr!7ng>)w7joDZG4Cm^=4%>&e./V<</u' );

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
