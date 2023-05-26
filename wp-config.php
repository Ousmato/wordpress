<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'ousmato' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'ic1JYZ8#c{F:h~(F58+.9]4>3Z~EMxR1R}f)c)#R$yc$>rRX.I=K iV=#dGnGPqG' );
define( 'SECURE_AUTH_KEY',  'CHnwwtw6]+wm5:M1*lQF#H4OlVRq<h8wUv`>cZM%ZWo%R.T7@oV ;l|MgG*/#hNQ' );
define( 'LOGGED_IN_KEY',    '5nzz%&Qbs .SY0d&TL2i6aV=Dn-IAW|*C}YI_|H~Zqvq&4M(JqP&Z0-;_gMx.Qj/' );
define( 'NONCE_KEY',        ')R31vv=&!uGD$OHObvP;oB!nQ#_Ny$aRr5.:NiC+;cW`kt:l.$17t;(d!c,:HH5W' );
define( 'AUTH_SALT',        'xXo.rPk5HZRC6l[91Xxn^p/KmP1sagg$23cWF6OGA1tn-QS1LHP$*mAh5`Ul$~*S' );
define( 'SECURE_AUTH_SALT', '(3:,A5M}rX,M[=s)JBW2U.`[e.P>[)ZjokN11[&C4V!F%`.!D;6Yl2|HYkte|#o@' );
define( 'LOGGED_IN_SALT',   ',*-w}y|E;g1jNfM61qx#Lwm`nhU71HzcLVG)uk#rn_5D^/maoTNo{J>6m4U,-lpm' );
define( 'NONCE_SALT',       ':[,C;])i%BonLGR*v3gh?*:x<<Y):~:L+]V;Po6jf)9DXlz)yAx>6d7V+*((V|x:' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
