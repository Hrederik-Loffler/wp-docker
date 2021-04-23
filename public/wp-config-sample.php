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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'wp-database' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'user' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'password' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'wp-mysql' );

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
define( 'AUTH_KEY',         '8pT!@q~uQC@ee$)$YP*V j_RU)~dl]E4nHv!KKgB=4#}vZ}ojTXX!x9Ieit?h9TD' );
define( 'SECURE_AUTH_KEY',  'ss+110:9fp=HnBy14,,`n[CR`<,K&T3<n}>L(!Qn~ZZlfG0^BldF<}&%b[|oYt6#' );
define( 'LOGGED_IN_KEY',    'PF#-BPhG1QLZKT8f|cW*s_l5IRzQYC={)]M:s&1Hf}!)%*![lp,/BH]Cd[M#!Jeg' );
define( 'NONCE_KEY',        'J2J ReI^hW[0%S@(u,pB:~fzA4;_NEg*%?;<Ort*MeJ56{fM1Kp*qUR,@WSI5;r[' );
define( 'AUTH_SALT',        'ea~6!D#-gHzTKF#PS>G(kB`8e|Wi@Pm(+:~5dNfD}Kj)rLU!I9l</zX>cX4$E8*0' );
define( 'SECURE_AUTH_SALT', '_U*#OJG*@Y$IT.2dewJa|=gP=B!t}osBt^&OX&TSG*ZNqH?11ha Ap]v}w_Vzlzc' );
define( 'LOGGED_IN_SALT',   '[_ET)]{(Lfuy4<%m`~&JzxO*0#zeQC|$iFVmg|~o6E8y@Oy:%A-Yh DY>cIv1CS]' );
define( 'NONCE_SALT',       'Q0V$=:yaMppUQO<)T44mNxZB5;*bcw9Q9qs;U|-3YsTt-6l08RbDB;~=^%am6qOZ' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
