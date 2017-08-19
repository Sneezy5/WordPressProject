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
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'a2T8%i`4}rL!cdJku}*=b_8P8/$O7{/kYfX:_UElOy)1/}sPT7n],}.Lo~S#+u*Q');
define('SECURE_AUTH_KEY',  'P_L#/)g0@pd2M9[2Lv]w_xp8PcXrZC.vCg892*G$,6ncrWfS;Pf`I]=$Cc%YnM,{');
define('LOGGED_IN_KEY',    'cadzPNi]zWMusV39{@) Y5cpG~QvxBXjPa(cI2hZU9t2(/DatG.V#[uhi*5.M)EI');
define('NONCE_KEY',        'AL5O@]wGa9Zrh}WP$/df[87EgZ?@KD=UE7uK~XVl1Iajw1TJ;wh:Pn,.j!TJQkS@');
define('AUTH_SALT',        'WZ!%&pzc0MXCj!y?(q=8s~E|,%/Y|/T<A8Riw=ci2=@nAwa|3QwOo5 q&;c4^Ot<');
define('SECURE_AUTH_SALT', '0t=v46r$+I!yV=v)luSYDSB#HcQ)Ja]v{ZqEOmJ;,Y<G`TUbAVM0rjRK`mUnWR|$');
define('LOGGED_IN_SALT',   'cIVvJKt?0Ma4K#pE;MU3TpQ#1]dz0Ah+SgFCY1&HZD[=cpUh@51g!32vTdm;_Sv]');
define('NONCE_SALT',       '!4x:aIH+QAv7;n|/gpAT=RLHcoYm:O`ycF93sFT-Uhg$~TT/Vv~{BHt{^e.l^OSp');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'snwp_';

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