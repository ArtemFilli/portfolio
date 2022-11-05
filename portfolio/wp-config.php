<?php
define( 'WP_CACHE', true );

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
define( 'DB_NAME', 'portfolio' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'User' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '9nw-ZHW-TPb-4QE' );

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
define( 'AUTH_KEY',         'm3==<SsQJ2>AL0%8FV|3`gx[~F4(74yA;9!WcyhzFX!2&4YKL?NesCcJ=v!!9_jT' );
define( 'SECURE_AUTH_KEY',  'd.ZJzGI.S4:JF`8vjKv<Q/hum=R%H)E_TB$[8.k%T`5~2mf<DQ9@ccns*n)FGTFb' );
define( 'LOGGED_IN_KEY',    '#8mhoY?E~ThVNCEA0+N|P_@1%_Y#D@8YHeeTV.l5;S`C7(/qVek/y}N |JZMZaRG' );
define( 'NONCE_KEY',        'gt6#f!im@*}db|}b>%?liNe_UOFC0 }xOX{z7Xa.vD[F68#@VRRw,zDEk?fT(*],' );
define( 'AUTH_SALT',        'aza!oA-9&Ydk#u; ESzhh=u[i`-6YpG}NPY;x/:;$aLXh=Fi*TQ(48Q_n t/{tlF' );
define( 'SECURE_AUTH_SALT', 'F7O{;b0l;G93:^=@FH2<>jFECzIr[ik`9.>2V:5ktpx#QM{Zku(mjJ%9x;}}qa]:' );
define( 'LOGGED_IN_SALT',   'u{di.hUGXb9odY6_P<$^w*Ll^dij~j?/wm|csii*5Y4w*([)ok/vU}4%Bw7F#ISu' );
define( 'NONCE_SALT',       '>ko!4Zl<C&hT0)eX8e[<s7]np+4yDBqXVo*Zb,sY>hxSP+M7]Jc!`JvA*UM`thWW' );

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
