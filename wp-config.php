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
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         '@m%VpMqY|qt.Xu?&m_C*]NuCeY$@Wy&b%E.J/woAtXvJfgKO3i/XT+sxrc${ePw]');
define('SECURE_AUTH_KEY',  ',KYNxX1,XvjX]q,`4Jf!v%Oy?/7@c{o6PaX/n*K0A^~Ur)JxjC+~3!Z#::1Ft27-');
define('LOGGED_IN_KEY',    'YUBMF!sM}2+ygZ4Z=VV_QWs.kBtvaYZ%?C/BR|z{=@ X_sh?jnBz_9ms4%>(O(Jx');
define('NONCE_KEY',        'x,/!@FK{=z*H8rc3VLWogA8hY+MC-1ky-ypmbPx`{n>6N@#uvZ`,D24$Bejl/B0O');
define('AUTH_SALT',        '@T9lTq`*tVhHb8tT4O&m<0xQe~Luv`s?wf#D:JE#v~3(l%}M@rH/J`DaW93jsCBR');
define('SECURE_AUTH_SALT', '>T~t1X(|am{7<|YHs/0cA)#+%4QVg>ino0c-bT|oZ3E91wOxcf[rk!5*VoesWOtH');
define('LOGGED_IN_SALT',   'F(l6$20SC[(U}_!+Y5czXElw6(:N+<gy*P>-6?7&o!H{^^ANQ.=RU!2VI7s#f(pC');
define('NONCE_SALT',       '(bs:mc9#.~Sfj@+A*NqmqnP* +$|+%1tXr&u~9/|+xNF_OUao7+V_1Yu.co-|j76');
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