<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'derive' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'explorateur' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Ereul9Aeng' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'h--4Azw;e[HR|f?mKONdY0!VbD/b Goh6]C)~V$B|tr]Ui-[NL1Pc.pY3k@IYWIr');
define('SECURE_AUTH_KEY',  'x%f)eQ%!0|;gY/9~;WeE1<*6r>JJHifGLj80bVV/V^?-bZ92%i{M1X1+b8q`Nt}2');
define('LOGGED_IN_KEY',    'oRbMSc7A{N^l+U{_Z]AsJb0=L8;BS_x-@X5l)|THHl|-OA!bhgk*lE#rB,F2>~Eg');
define('NONCE_KEY',        'u5k}%)sQC]WvL[MJ,dz0[M%UoOH!68!kz#n`Mu!*aJB<$!ps-9NkEAE26<AfIt%|');
define('AUTH_SALT',        'LzM)5HRBmz9t$9`FQk{1[/_($<NDSf:V`U89#s[`4D_n{_m^U<##%,.b_/Az.$U|');
define('SECURE_AUTH_SALT', '>rMa0Y+*V)O$R!F71HaIRNS$u|8l%jwGtuTSVq#9wN;J[N>[MtxuU)?lc,73*/mC');
define('LOGGED_IN_SALT',   '7xx:U<[cb_~? e7mHsCIxh&rk|[iSO<X][mCmG5 -@{@-vPC8j;,J*:&z3J!-jAS');
define('NONCE_SALT',       '-&t eR|{DQ`u!%55{?kc&3J7+O}wUhJnF9Dnaf5q&-)OQaXEWa$ZDbD<aoKAfO8<');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

define( 'FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
