<?php
/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2011                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

function autoriser_controlerurls_menu_dist($faire, $type='', $id=0, $qui = NULL, $opt = NULL){
	return (
		isset($GLOBALS['meta']['urls_activer_controle'])
		AND $GLOBALS['meta']['urls_activer_controle']=='oui'
	  AND $qui['statut']=='0minirezo'
	  AND !$qui['restreint']);
}


?>