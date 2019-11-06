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
define( 'DB_NAME', 'finalwpp' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^2fz^nsb3{@#ywsf,ES)Z_]:Z-vc)<:Oo;UyXx5~ydR}X.i`6J6!#|3Jp)D^6567' );
define( 'SECURE_AUTH_KEY',  'y<V_IPEMSuWeL6ZVI#bGaJ97EY 3,(?AC8{vsh_G,+insG>WW8GDl_ 2}{@-ldNZ' );
define( 'LOGGED_IN_KEY',    'drTsN<!nPYWxLc?Sy<v,A-c]%On;t~ydcHxs1M%MPuvv9QE/e650qB7dlie&o&`<' );
define( 'NONCE_KEY',        'YpalLV&}gVP*X<Chp0Ts*1`w`tK:yz_;4nwooXX;hl*%ny)-oX3~{,iKK6Y+0BU_' );
define( 'AUTH_SALT',        '-M:e>*ie):fS8]Nohj&h6!8^1yOD_W=KJ0Q7x#/Y5]d8&99Sa0>2K}|K(AZf`[;7' );
define( 'SECURE_AUTH_SALT', '^PB+3]/[4<Cj:~5o(#0eNEvki9PLqqR=<^ppf>vm%W+26u/!he4EFVpkD_V(&+mL' );
define( 'LOGGED_IN_SALT',   '|Bz6}%tIp{@(r/NF*6*Rjrj~Q)HkQiQ5z+!d2I{!:A$9L&yv|3iEX+Fn<gK)u).K' );
define( 'NONCE_SALT',       '+^,l~~W.!G[rD3f>tJQy~/_pDpfhs<s]+}vZPhRp$N[9ACcd:0((T_.#J>up_LS[' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
