<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'julieooghe');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         's^IW|w=dC<p]lt(rX#L@r>GIUP.k[Q(cy.uLt2:iE~F:|a~:L8L5y/6/2IU-XAhV');
define('SECURE_AUTH_KEY',  '0Xe[E[V-fUxL,vxrM1X8$+-ZM)7c8QQ~8gJVyR.8Uup{rh5yR+L_cZ-~mJjH<%!@');
define('LOGGED_IN_KEY',    '>p[xbQ(_xqb@T*[RM2#+keR7Ek1igw(?7}GgE~~}Wxq`;A_F.%{&lmw66:dLZM(%');
define('NONCE_KEY',        'jqQ/ZadUtR+f*Vw+8;VKA&5}nbwM9!cI]x<Y4kA6c&^@8eN+8Uq4o!3@/.(BUit`');
define('AUTH_SALT',        '`6QZ%gee_hW%t{0)EL8I(:s:SwZgnKG-b%~$]uHo_/1Xq+[`IO{P(l+WpnooIemt');
define('SECURE_AUTH_SALT', 'Ft{*AqMrb l?L88T%3=&(w@`,0w+kOP`z;Oa7]FFYj_ <b!;tt~%A`gZc3{(r9KT');
define('LOGGED_IN_SALT',   '=hzzH4z=P+|ii68F[HN{R|9lpur7{,a+[d+I[lcl)+ (r k(A~CQBmxM*qWe&y?3');
define('NONCE_SALT',       'j}r)XKtr_?PM[q8;4:OrJ-3ch2>,tstjvN[Z+?*(Oh|Lo7zA*j0?WF!+a]EH||Cm');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp_';

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');