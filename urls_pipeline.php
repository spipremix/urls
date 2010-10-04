<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2009                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/


function urls_affiche_milieu($flux){
	if ($flux['args']['exec']=='configurer_avancees')
	  $flux['data'] .= recuperer_fond('prive/squelettes/inclure/configurer',array('configurer'=>'configurer_type_urls'));

	return $flux;
}

function urls_boite_infos($flux){
	$type = $flux['args']['type'];
	if ($id = intval($flux['args']['id']))
		$flux['data'] .= icone_horizontale(_T('urls:icone_controler_urls'), generer_url_ecrire('controler_urls',"id_objet=$id&type=$type"), "", "url-24.png", false);
	return $flux;
}
?>