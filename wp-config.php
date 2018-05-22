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
define('AUTH_KEY',         'sKQ%KL*evE`#9y?!.B~k<s#AR P_).{y.5R3dgi6<wDNsf{Z(nH4OKMc8 DHJXo~');
define('SECURE_AUTH_KEY',  'F{0QiFa~eT(E(7^kiMHR?07IN5V}{rid0(%9(b6bSDv+Wt~E*!1yuU.Io%&T8KA/');
define('LOGGED_IN_KEY',    '8L.yySE4?+x(hAjV~UPEdO(|=%3X*pm&{%#nu@^B&5mf62E8Zapr[+LN$:oiHr7!');
define('NONCE_KEY',        'Yw$|*L:VqMo4#NGfmx;s}RI, ?Kg>f7tK58(a=yoY+ O5I4Kr8a9K38_ a5Bg:DQ');
define('AUTH_SALT',        'bePKZfDif;,+r36A|&n)(8w[CUacVN(a=&P#>6&nX}j|DoOU<I/IdI_<>(K|Qy^n');
define('SECURE_AUTH_SALT', 'a?|{a0hwaXFr[g)mpiBlYD4oGR}R{_8n#A&Z .re;.L->PdtM%RM0z.fe.}BM$ax');
define('LOGGED_IN_SALT',   '7rK_[fgv9`W*HTBL0yh*5E[FR.n}(s3-ser1is;f7lDdqC;U+ZhxfyE9wm<)Rkn#');
define('NONCE_SALT',       'f3}iow`=8{iBn8)U5uK~$|=GkZ`*$uMJKDj46u3NX?VYgNmusCKi=f]fUCMk6] W');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
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