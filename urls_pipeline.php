<?php

/***************************************************************************\
 *  SPIP, Systeme de publication pour l'internet                           *
 *                                                                         *
 *  Copyright (c) 2001-2018                                                *
 *  Arnaud Martin, Antoine Pitrou, Philippe Riviere, Emmanuel Saint-James  *
 *                                                                         *
 *  Ce programme est un logiciel libre distribue sous licence GNU/GPL.     *
 *  Pour plus de details voir le fichier COPYING.txt ou l'aide en ligne.   *
\***************************************************************************/

if (!defined('_ECRIRE_INC_VERSION')) {
	return;
}

function urls_afficher_fiche_objet($flux) {
	if (isset($GLOBALS['meta']['urls_activer_controle'])
		and $GLOBALS['meta']['urls_activer_controle'] == 'oui'
		and $objet = $flux['args']['type']
		and $id_objet = $flux['args']['id']
		and objet_info($objet, 'page')
	) {
		$p = strpos($flux['data'], 'fiche_objet');
		$p = strpos($flux['data'], '<!--/hd-->', $p);
		//$p = strrpos(substr($flux['data'],0,$p),'<div');

		$res = recuperer_fond('prive/objets/editer/url', array('id_objet' => $id_objet, 'objet' => $objet),
			array('ajax' => true));
		$flux['data'] = substr_replace($flux['data'], $res, $p, 0);
	}

	return $flux;
}
