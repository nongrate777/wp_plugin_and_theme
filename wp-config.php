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
define( 'DB_NAME', 'testwork' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wordpress' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         ';pIJ_peGpXaUA_Jp SnUIxQE`p7pbI?+pY,RiI+OqT7)D:E+I=ADj%Fc7+I6{+m?' );
define( 'SECURE_AUTH_KEY',  '8 sKL{8({P@AVJgDE+J0kyxad}O>G1O^?S}l^Ph~$JI4P(Bvxd_*c+IkEOj.{<1p' );
define( 'LOGGED_IN_KEY',    '`w@!mbW9W5W?$q->FczIhZT1$ Po9Hg*~o)bw_t]2j:dE!JD>k0LJ&DTk{NE]NWX' );
define( 'NONCE_KEY',        'v}EQJT5W5T~&#9FT33Dxb:=ORo:Ls/$!d|ug%qMyzNr%Z:w:>38!y.ImH|(Bn_`C' );
define( 'AUTH_SALT',        'Xz6&G-J*S?eY.F/D&yse(]jdO41&?H4&DZvo(J1|*}<hJe$[1/qil9t*[d L`.V@' );
define( 'SECURE_AUTH_SALT', '-Kd[/cO$9S<^f[APM;o3)&SV}9.MRx_X`M.#Lm;%w~C!Kx9_pNt)3cmsxkm.N|UR' );
define( 'LOGGED_IN_SALT',   'cKZg^ {S&m?[(B+iw|Rp)F*nGUw+k9^u,8sV!YJGrOQekB+Di*9P4.Gp>(9D;)EY' );
define( 'NONCE_SALT',       '+3(g%sLtaBd.)wxok.NZa+7ayA{cxDK5Jv@]e|2F=HG95?$rEU|oG?^, A}]8,4*' );

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
