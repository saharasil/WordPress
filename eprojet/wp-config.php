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
define( 'DB_NAME', 'eprojet' );

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
define( 'AUTH_KEY',         '+=9G0#EUUi1?4Qf)+l<[K*LIz*z(R5:Np=:.WpJm{TKK<yzlg}5p[CMR!zOuXCHL' );
define( 'SECURE_AUTH_KEY',  '*~9|IyY8nNR.Jn?B7zReefNF;ipJ=/.d75=XQ|Yn{*WgF-Hh*0 *(o/$:#trYAV9' );
define( 'LOGGED_IN_KEY',    '#q}]xRK^sTGgl>VZ``k7L/,nzLf$Tc@$9.e)Jc82#ssS6A|M~B{>@G02EIz=<iw/' );
define( 'NONCE_KEY',        'RoE6=tc_T^YK-PI k4HH3.y^]?e*ksx7$_N`[Npe!:S8ZK{]MxLA=k{x6r/G {P|' );
define( 'AUTH_SALT',        '`?=6t<d^O%B>gpj;}je$<-2:P5!+7P]1>f[S`*6r{y:G|]zEe-QRuSmPCs$tC>Tt' );
define( 'SECURE_AUTH_SALT', '|<_!JL!xkeCA_SdF NM$qR%d}pkJGq7oYsP%`mQI@&pKfOi37E[?:v2V!Kco4aNl' );
define( 'LOGGED_IN_SALT',   'g(M[fmOvrB*dTqu1f=N3L%3M-V+#9Rz(M. :C%u4grASn{{O/j.Eg$&?Y|#&G4`K' );
define( 'NONCE_SALT',       '!Z*P>Ety?R]U3Z[0DGv9oM lAId9>KZ39nD|WLg~Yd9l=&=Eu+k1^YAQ%XOQawet' );
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

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
