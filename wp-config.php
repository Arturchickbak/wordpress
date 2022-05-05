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

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'books' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'admin' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         '@*DvtM qn~|Q)?RycNn^6:b?9wftK+7XIeRc.>,2y~kfSPtEILBecxReZrg7d|d:' );
define( 'SECURE_AUTH_KEY',  '^0EW2ggGS;`~.Om%G?F;i8_A(Xei]yeX|u?bSe>T}eZ!I^s~_PwxE@4)Q ] _d@+' );
define( 'LOGGED_IN_KEY',    'u[:|5NB5N,r0dw?o<WHjX<m6mZ5cVL>]ujhl!KEbp-~C(WIVnL?o?oZN1eN_~)LY' );
define( 'NONCE_KEY',        'H~zBES046ZUH-B? [.?&di)A/y85FZxPa_:Y~A;kL8iD86$c1i?OLf|#HOLx%RR9' );
define( 'AUTH_SALT',        'tW6PcE$]9V*~?CK*w#l1tEMP!NuTA@XU7y{b,$wicC=35xmHn29iEk6(ZoSK|q2&' );
define( 'SECURE_AUTH_SALT', 'DQZ.#e~GL6segC)*C/w>;1 8F@TF{QxdKQxu&@$_Ht#Ev$R^>w%.6sKVZFvo[Y:0' );
define( 'LOGGED_IN_SALT',   'g4G#%71_,~-;h5J(qY5d5>q)]posx|z%tM6JfHh1uO3Cc#^*)[v:@I&lqZN[ugGp' );
define( 'NONCE_SALT',       'EPj~Gu#[JB;wraKyD$,|g3Q!xC:P{74%(o#VEs`Y ju=v`m[7N?l&o8/(mJ0ZQ~f' );

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
