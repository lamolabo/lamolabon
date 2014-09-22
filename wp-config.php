<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、MySQL、テーブル接頭辞、秘密鍵、言語、ABSPATH の設定を含みます。
 * より詳しい情報は {@link http://wpdocs.sourceforge.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86 
 * wp-config.php の編集} を参照してください。MySQL の設定情報はホスティング先より入手できます。
 *
 * このファイルはインストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さず、このファイルを "wp-config.php" という名前でコピーして直接編集し値を
 * 入力してもかまいません。
 *
 * @package WordPress
 */

// 注意: 
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.sourceforge.jp/Codex:%E8%AB%87%E8%A9%B1%E5%AE%A4 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define('DB_NAME', 'lamolabon');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'root');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', '');

/** MySQL のホスト名 */
define('DB_HOST', '192.168.33.51');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'c|KZF/7tGR|EFFz!L*ro#r)RP>h]2yk?)qdOb4o#*yO(U>i+K5iIB;4}t,:|[?2T');
define('SECURE_AUTH_KEY',  'k}1c[M]Q2|fm_|Z@a,<:%@<8Omz4vX[SLp-yVQ^q@L_mL+md_<EmXA(--$YM*1i{');
define('LOGGED_IN_KEY',    '+TSP]?a[J&XEKNoYk7[+COr&]r,$QJ+Q?R+`s`[mGpq!sCb}LT5Y!V7L0G#_gTG7');
define('NONCE_KEY',        'Qigbu^H,LzWNIqvd-qX!B+:&y8=P2C|5`:3heAw+9o~gu_lT}e3xT0Gb#=Pou50t');
define('AUTH_SALT',        'FpY{BoP^j&_0]n#y/R 2:d!3[JcBEm.P5R+]nR8YRn=o8@$7~1k6kp-$S%XTHY#?');
define('SECURE_AUTH_SALT', 'uy+4Rbxi Vg/4n--.|(vPC|%rx@h?fyB#/89e-+0S`-r>twg82F2!%q($J8ce-9g');
define('LOGGED_IN_SALT',   '8<hY.-`RvF%r|,T)&8HmnYp/w?!8ff_W7|-j-I!Da<8hFk0KCrU=Qg}Z+(l9@#r-');
define('NONCE_SALT',       'Btrs_7%4+L+xJ1MyMZ%OXiCRhwO9u+O`+#;;}|:~rS^rgF:f[OMFyz+j[A~E$M{?');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'wp_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
