<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'Wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Skaoune88');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'IX_7Iv|+wT^b6POy0:5]w  }hRn0cSE1`u-EWvTl5iOFyqroK^Fe.KRR)pnQF[Gr');
define('SECURE_AUTH_KEY',  'H%Qa#oMu&rpNSih8qa@C~A_ {-zpZ/nm1i` -]Asn#(IPj=%Bx!SH,0_f|D8^!p~');
define('LOGGED_IN_KEY',    ';R!yJpR#M^~n*K-y9m*z?bWTQBhB*AqlD}?^9[Kfh1^,88xd!SB)qH=hFJF9X*.o');
define('NONCE_KEY',        '9|IyFN3v!F(#b_KnN:1YED2};nW!Zs%tkT0v},<#u}mf1ww2Wct/Vo2;9A<]HG~$');
define('AUTH_SALT',        'Herym@c,]0?l|p8/?ZPFI2usMg}eAXYaJ`DJe>38=CRL?+o>}?-+Or*n^mnp e#T');
define('SECURE_AUTH_SALT', '.6[Jyd{F].Z-EBNiDt;1t`H?|o2=.E L5R~q!>ga|YmsX%GNpu0sN02vP_(/01Xo');
define('LOGGED_IN_SALT',   '}TqsQmtxk>QYT+@5D%?On4MNhI>5Nn(WVE]B]T@`sF$5+||We/<euhV8u?IU42K}');
define('NONCE_SALT',       'FV_R>#[37tv5,Bl|]<np:#Fb&V:?14.qISTiKZY,M/_C-`vGtp,r,nsS2LX)C0T5');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');