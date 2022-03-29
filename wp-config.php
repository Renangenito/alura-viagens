<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'alura' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '2Z}zp-AX$pzl0h:D1UVf`P>T31@OyO^,_mC&f[{8nxz7S6[%V~DqtOXPbh)owB}>' );
define( 'SECURE_AUTH_KEY',  'p1eiK58CSRU|<o/3hS]u;Bx}D+;?DB-aQX32l03fss1M1[=b} kES0<j!w0(GN k' );
define( 'LOGGED_IN_KEY',    '@1 o{b@UafN5-+YS1W*?;K1@n_$)zMK[Q0(u4ukrL2.J(v0-.y|_.>F.`#]q^0[p' );
define( 'NONCE_KEY',        '# ~|*q_2Ot.+9+WxB:|8Oa}XxADK{ss:SijTg]3JwwBp<Y>oVQ:Ps*`m)Unimgn&' );
define( 'AUTH_SALT',        'pfxcny,w[%P~y<U<nD3&2BiV.cr~x7TLJ~^-yPsyFf)T?fQ,]DLW/aP`NMjTh,Z4' );
define( 'SECURE_AUTH_SALT', 'fQf)rXw~wUY> Z.b1[k=.t86^dGJTizAV?VJ%}]a[ujbYNl?zLi:7QPT#E8+fyK9' );
define( 'LOGGED_IN_SALT',   '>E}@.~p-eyS9g`B?1#c}xSo(.f])TRU o#5wy]` HPUx{}d?3Pl}F_`a?rFQ2} ~' );
define( 'NONCE_SALT',       'QcOPAq~wJDjTk04LuD<hJ.5HbXK&(*01^RF!q64@OPe+N0lz s>fMEcNb%oHy=1n' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Adicione valores personalizados entre esta linha até "Isto é tudo". */



/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
