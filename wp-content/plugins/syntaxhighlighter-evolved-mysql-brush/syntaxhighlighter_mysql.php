<?php
/**
* Plugin Name: SyntaxHighlighter Evolved: MySQL Brush
* Description: Adds support for the MySQL language to the SyntaxHighlighter Evolved plugin.
* Author: Chris B. Kerndter
* Version: 0.1
* Author URI: http://www.kerndter.net
* Plugin URI: http://www.kerndter.net/syntaxhighlighter_mysql
*/
 
// SyntaxHighlighter Evolved doesn't do anything until early in the "init" hook, so best to wait until after that
add_action( 'init', 'syntaxhighlighter_mysql_regscript' );
 
// Tell SyntaxHighlighter Evolved about this new language/brush
add_filter( 'syntaxhighlighter_brushes', 'syntaxhighlighter_mysql_addlang' );
 
// Register the brush file with WordPress
function syntaxhighlighter_mysql_regscript() {
    wp_register_script( 'syntaxhighlighter-brush-mysql', plugins_url( 'shBrushMySql.js', __FILE__ ), array('syntaxhighlighter-core'), '1.2.5' );
}
 
// Filter SyntaxHighlighter Evolved's language array
function syntaxhighlighter_mysql_addlang( $brushes ) {
    $brushes['mysql'] = 'mysql';

    return $brushes;
}