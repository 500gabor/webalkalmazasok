<?php
/**
 * A WordPress fő konfigurációs állománya
 *
 * Ebben a fájlban a következő beállításokat lehet megtenni: MySQL beállítások
 * tábla előtagok, titkos kulcsok, a WordPress nyelve, és ABSPATH.
 * További információ a fájl lehetséges opcióiról angolul itt található:
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 *  A MySQL beállításokat a szolgáltatónktól kell kérni.
 *
 * Ebből a fájlból készül el a telepítési folyamat közben a wp-config.php
 * állomány. Nem kötelező a webes telepítés használata, elegendő átnevezni
 * "wp-config.php" névre, és kitölteni az értékeket.
 *
 * @package WordPress
 */

// ** MySQL beállítások - Ezeket a szolgálatótól lehet beszerezni ** //
/** Adatbázis neve */
define( 'DB_NAME', 'a22d5d' );

/** MySQL felhasználónév */
define( 'DB_USER', 'root' );

/** MySQL jelszó. */
define( 'DB_PASSWORD', '' );

/** MySQL  kiszolgáló neve */
define( 'DB_HOST', 'localhost' );

/** Az adatbázis karakter kódolása */
define( 'DB_CHARSET', 'utf8mb4' );

/** Az adatbázis egybevetése */
define('DB_COLLATE', '');

/**#@+
 * Bejelentkezést tikosító kulcsok
 *
 * Változtassuk meg a lenti konstansok értékét egy-egy tetszóleges mondatra.
 * Generálhatunk is ilyen kulcsokat a {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org titkos kulcs szolgáltatásával}
 * Ezeknek a kulcsoknak a módosításával bármikor kiléptethető az összes bejelentkezett felhasználó az oldalról.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY', 'Xm9>8)BE$7_<#OI3D,]F~`*Hes12u[FM(,HRX}[X,9nY]wS0fT#>f61jksM[)C{w' );
define( 'SECURE_AUTH_KEY', 'akM`]*nt]H)Ak_?ztVEu}{GNcYZ= C2M5`Ib?H3b$GVJ57n*;s-3hC/eQ u7LD!H' );
define( 'LOGGED_IN_KEY', '2/os3+XFW0@V^3r|{/c5)C^lj:~ NT-z$6JSu>PXma`sGBRO}RApBa1~/}O?~$)l' );
define( 'NONCE_KEY', 'Zujy*;,Ilp.j>5e0v+Yq;o4fof=5v2E` (MrNN%uW5=`RADuQr]2/F}3B|-.$`,N' );
define( 'AUTH_SALT',        'y020A9Cz;::kkeR-(RXlRyld7#;[/%sA1+5 TU0x4R%3}io@Cpx``zP1pbqL>v(q' );
define( 'SECURE_AUTH_SALT', 'X+OuSFTn]IzpYge6*H(c^=-J|t`{?$+ ~q9as Xj$zE;^d)u- X*L7s}|q)3^![~' );
define( 'LOGGED_IN_SALT',   '0UC7wPAX|^X+u]W%-p/2S=?mi+/GM~neJrr8=I3M_ucIqr|![/XbS8GYk;e58e<B' );
define( 'NONCE_SALT',       'CR3/Q@[AT1m;l^6+5>m/2(TATVWoS-jQ,z/<c`MD[QV3]DL2_85/z{2cLQa7Or99' );

/**#@-*/

/**
 * WordPress-adatbázis tábla előtag.
 *
 * Több blogot is telepíthetünk egy adatbázisba, ha valamennyinek egyedi
 * előtagot adunk. Csak számokat, betűket és alulvonásokat adhatunk meg.
 */
$table_prefix = 'wp_';

/**
 * Fejlesztőknek: WordPress hibakereső mód.
 *
 * Engedélyezzük ezt a megjegyzések megjelenítéséhez a fejlesztés során.
 * Erősen ajánlott, hogy a bővítmény- és sablonfejlesztők használják a WP_DEBUG
 * konstansot.
 */
define('WP_DEBUG', false);

/* Ennyi volt, kellemes blogolást! */
/* That's all, stop editing! Happy publishing. */

/** A WordPress könyvtár abszolút elérési útja. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Betöltjük a WordPress változókat és szükséges fájlokat. */
require_once(ABSPATH . 'wp-settings.php');
