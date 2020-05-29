<?php
define( 'WP_CACHE', true ) ;
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
define( 'DB_NAME', 'childhood' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'child_admin' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'Q/f),s|H84<yX9NP:>Xw2nuk|C`:#ra5wzV2]E`97*$gEr8s4[bj7jP@EoB2ODAn' );
define( 'SECURE_AUTH_KEY',  '=n5g-X+2F{{dY3|j(nj2*/vl 1F%MvDs|i)iC&zddpxa]Olg.iR6O9,?5J4%A~-q' );
define( 'LOGGED_IN_KEY',    'f1IUl>]%cF}S5`%jb11}Pvj 9T%|dx0?v)+tO}h^Ag~K){,@3zp)GvChDjz/Bf^(' );
define( 'NONCE_KEY',        '*fSa?Q?e^p>ao):<px }g@.vr~Q|t0>BR4_WdElXmPn5!Ziz,2YurH:x2-/aAPpk' );
define( 'AUTH_SALT',        '!V5NPmuwvR|h%LSKe#Gt9F@=/sGgsB*,Ep4b|:!B<$9}b?mMqgby98V#90RIK)j:' );
define( 'SECURE_AUTH_SALT', 'm;$Nu;^j{*g/)W<kvY;^j_NQ!8 yDb3z0>@f_xa:kjiGD[X`j3tVFs64I5{GL&:4' );
define( 'LOGGED_IN_SALT',   '3dwkv$t~urvmh1I6tqD=~^->&9o#:Voo< =EauhHp?N-s8Z7d[wfpZVNh%m{8>Sd' );
define( 'NONCE_SALT',       'rn% Efw~&8urGAp%p;UJ|wh-jF7I4w3 P}=ZA29@zBy+(5ANmJh>P;PU8N!e[R*+' );

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
