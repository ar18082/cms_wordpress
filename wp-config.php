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
define( 'DB_NAME', 'cms_wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         ' 6,SC/aJH1Oy^MJdc.gvw6u^DI{F `xS6,)L`p@t$d6(t;{>f%dR+wrE]m8#d%{[' );
define( 'SECURE_AUTH_KEY',  'lkE4X<O4|)Eo{;B{-eR4ULFE,/p|iHfv7=Y5(]%C}_7sf<|<&T~e-_d=OJXo/yHm' );
define( 'LOGGED_IN_KEY',    '}~G;^@%TTv_RX *{D;D;%Sj.vI;aIxR(1gjNQm~m]0q1z7z!J/)=p`;scBG`OVMA' );
define( 'NONCE_KEY',        'e[TW]gbiO;PS$q,;?k#MQ|/<[{6GXV;CmqeAl8? L./tY=lF]U@AsONt{^n_RPWo' );
define( 'AUTH_SALT',        'y96Nt:CD0,t/Po)a/FWv#7EIeIM<e_JHrID7_ms[mmzp8:l(IAAd`ow4A6yr>xw^' );
define( 'SECURE_AUTH_SALT', 'O<#ha22,/>>%i2@c*4n$25p|I,HV(!9Ikdt~qQhrI3j8}I1~cpH>3X6HVo-@ |UI' );
define( 'LOGGED_IN_SALT',   '9w6E:qrmM)6U635Wj ^9W,uMYAV]XWhrOr9vf,l+eIkb)q`[YH#@M5W@%AyyU[Xr' );
define( 'NONCE_SALT',       ';cx}KTfG!X*W)~XK~FyIwk6]iS5$@8FCOhP>eVjP k6c(F]jPSpBpmp]Exa}) Z{' );
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
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
