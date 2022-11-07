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
define( 'DB_NAME', 'wplocal' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'wplocal' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'voitelrulid98' );

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
define( 'AUTH_KEY',         'f(PKCM]P=Z*2Ge@.gw%AGO:]|]MtrezMS8$S?0t6C^Ka]N>-euA{=L<kVqsc2@^f' );
define( 'SECURE_AUTH_KEY',  'Ui *X7z5fdvLesI0~vf&aC?f1L=d>P@tD26p~,N.wvF!fH8)Zsg$Z$UAwGg*Y2Di' );
define( 'LOGGED_IN_KEY',    'K7;rAWL50+XtJ^/IR|(@>YY H9PnF+WnR-YpYW6-=R>LJ.5qr[tuOuL0U5Gaas*H' );
define( 'NONCE_KEY',        '#>pmf]RI2H5IzIaoet[0H8JpUQ{ESifm:Z}wJsMXm+B8fQ{Ou+E(Gha0_buUaN G' );
define( 'AUTH_SALT',        'pVI&FiSdZShe`g-UjYLj>TS+ow,;j0(.Yg{oS u]|yjh4R=|<{T~j6K|n&20} 1A' );
define( 'SECURE_AUTH_SALT', '@[TvsO/1wj&@RS#jFcpj;6S[4MMue,B5ggMYe*DLV<ioROh2G*^|*1kRyq3:Ix]K' );
define( 'LOGGED_IN_SALT',   '8*|)e9.U;?ZD}zpd >%mF]}nI,H;]+-33Wt;{R._#[y8%3jKe91/y!Sj0Ty.!72.' );
define( 'NONCE_SALT',       'z/~|)SSg#8nhSK^3+F{3 mtXN4>Y}0 uQd0(UA&EQi@#CYn 9$4af#0;q|3Vo<}W' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wpc_';

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
