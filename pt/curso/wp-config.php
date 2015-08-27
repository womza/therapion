<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'therapio_pt_curso');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'therapio_pt');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'kurssi_pt');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ';7{%-k63cP>Kiv $AP!Vf5/L%BMw[I^lORV!8<3HQCKPQ#g0*BiMFDbZIcKzo*Z3');
define('SECURE_AUTH_KEY',  'M;/!J+sH5Z$-QMMwP9gRNmG693Q:VmPcgy6{+?HOVj5M?ep^%sC%/5aSJ)-nd]ut');
define('LOGGED_IN_KEY',    'mf)f~bJh>SK.nNnz8i:J<0/Fr|3nc3/FcJ)o?&;e+KDv/3V7$c;fWAIh$9g;uz?T');
define('NONCE_KEY',        '7);hD-r-DY2z@-UnzujqU9DD[i6e&(qLKB@RWRE=R@QO^Oo}!Y}>enSE/@HM*l/|');
define('AUTH_SALT',        '^l |lB!;Zp{Vy+ak&|ReJnBaXquyOPG8>Zm9hHz;?Py=jGrL3(CdRBt} 3|97,f+');
define('SECURE_AUTH_SALT', '<s7Ar7|7I++2sI_u2uZt1eA9ZY?qFw#]%b(OPfbtXHi|o7cG:,kT(vbOYVhP%[DD');
define('LOGGED_IN_SALT',   'GUoGa)IC:u]T/Lw$P=+14j-I<Cb{ExND.04`[wz0!iX>A:fi|N-3OunRqrIZb*+7');
define('NONCE_SALT',       'g$@$=/W+|.8?j-fJ&zv<:Mc$)N8SXkzX((k~<K|^~d+{pY(ve _Cu[$Lvc`bR7y|');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * O idioma localizado do WordPress é o inglês por padrão.
 *
 * Altere esta definição para localizar o WordPress. Um arquivo MO correspondente ao
 * idioma escolhido deve ser instalado em wp-content/languages. Por exemplo, instale
 * pt_BR.mo em wp-content/languages e altere WPLANG para 'pt_BR' para habilitar o suporte
 * ao português do Brasil.
 */
define('WPLANG', 'pt_BR');

/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');
