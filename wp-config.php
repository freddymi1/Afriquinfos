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
define( 'DB_NAME', 'afriquinfos' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'Freddy@123' );

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
define( 'AUTH_KEY',         'xTwVe1ZINYDZ* mwA5`&I(hC`DY~SF!k*,gDFVc@TchN2.P=aNBFubq;E.F1|nr>' );
define( 'SECURE_AUTH_KEY',  'AH!oEdiQ06krTmkQ>_<Ow_9ii*u Q05<2/Wn`jK&dhIm+fb!!P2:g:3H;qmpR!<]' );
define( 'LOGGED_IN_KEY',    'N2aA1X!,igCp]VaHYp(/7*Lh,jB2j_Q&v3W[LbElHHOj7D]^opg=UmVn{|zRPsib' );
define( 'NONCE_KEY',        'hvvM!;E=zxKoRHQZ/7GU40DVwix(piFD=.*1{OKVvrKD.UOUaD6^Ffpv^(m!lQbJ' );
define( 'AUTH_SALT',        'k4MolLW:m7x-iR*(@:?yd)xR|79ZGy:nc#]2d:K{&4If^ul]5Ph&)zdu(S7cF+{_' );
define( 'SECURE_AUTH_SALT', 'PNK7l6|e9MDo Paw!I^3=L*5 BAR0J0`_>*e^7P[.:ufkFVf[UFV!*_}fr.it7p^' );
define( 'LOGGED_IN_SALT',   'lPs!y`nU4iIPUKCr=D{%V{j6?iMlaXI>[:kBM{DUiIgO3&f9&?TWp4+*=XMb/oR|' );
define( 'NONCE_SALT',       '-1?&?.AtG1Hhr]8trwh]g<R{0`Qsz6uH|&Rv[h]FR|$d[QFf9Tw=3hOc49E9Bj0]' );
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


define('FS_METHOD', 'direct');