
<?php

// ** MySQL settings - You can get this info from your web host ** //


/** The name of the database for WordPress */
define( 'DB_NAME', 'WP_DB' );
/** MySQL database username */
define( 'DB_USER', 'root' );



/** MySQL database password */
define( 'DB_PASSWORD', 'souhail01' );



/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

define ( 'DB_CHARSET' , 'utf8mb4');
define ( 'DB_COLLATE' , '' );

define('AUTH_KEY',         ')ef?,b|,o{$?@+-.T7g5a?T}iwbTZZ:uAs/9Z wkdIE|^%m<oFyI@GNkX{ 6!bKM');
define('SECURE_AUTH_KEY',  '#|c|Hdmcfw1N%JSCP#+E|SVTczufE}bI;i|lZ2O>3EzK+BMDFDu+|CP%_D- 7swM');
define('LOGGED_IN_KEY',    '~mS4Gg =+hy{&d L,euf+Am]./~^H--apT91D`9`Fa!:-E*(+%gPTaoz$>B;nT4g');
define('NONCE_KEY',        'TJVZn*TiGm&(!!gc=m-8SZ?NrqwT8IH`-=1C+|h3Kq/+-<@U8p| PDR-t7/gZ3QH');
define('AUTH_SALT',        'Za*C]?>xwmU*7F4%+isF=M=-wPyN7ot)F2l]Lb3/,=ps3u~^*sG2R6Fefqv}^#!U');
define('SECURE_AUTH_SALT', 'd!1i6p)u{#I*mSyO0(?|3-kC5|US8|/3y!;lvg!f=^Os?%Yb+$To@:c-S%m0F8WR');
define('LOGGED_IN_SALT',   'EstG`:N=({Vd#MJrzu<@t+w{<>eG{lU.D|zMiU*g2eBXixym{9:Z`rXN||:K{B?-');
define('NONCE_SALT',       '? 9J[:[F3]_Zh- LSH1QCNQhEa0#y_5%6g{-fzgMGO}&O3R!r*d|fi$Qb(I)4eP+');

$table_prefix = 'WP_DB';

define ( 'WP_DEBUG', false );

/** WordPress absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');  