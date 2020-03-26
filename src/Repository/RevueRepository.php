<?php

namespace App\Repository;

use App\DOM_html\simple_html_dom;

use App\Entity\Revue;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Revue|null find($id, $lockMode = null, $lockVersion = null)
 * @method Revue|null findOneBy(array $criteria, array $orderBy = null)
 * @method Revue[]    findAll()
 * @method Revue[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RevueRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Revue::class);
    }

    function sjr_parsing()
    {
        //connexion à la base de données
        $db = $this->getEntityManager()->getConnection();
        
        //parsing_revue(25501, $db);
        $requeteListeDesID = "SELECT id_revue FROM revue";
        $stmt = $db->prepare($requeteListeDesID);
        $stmt->execute();
        $listeDesID = $stmt->fetchAll();
        
        foreach ($listeDesID as $idSJR) 
        {
            if ($idSJR[0] != NULL) $this->parsing_revue($idSJR[0], $db);
        }
    }

    function parsing_revue($idRevueSJR, $bdd){


        // détermination de la page source
        $html = file_get_html('https://www.scimagojr.com/journalsearch.php?q='.$idRevueSJR.'&tip=sid');

        // Titre de la revue
        $titre = $html->find('title', 0)->innertext;
        $titre=str_replace("'","\'",$titre);
        $titre=str_replace("–","-",$titre);
        $titre=str_replace("Ä","A",$titre);
        $titre=utf8_encode($titre);
        //echo 'Titre : ' . $titre . '<br>';

        // H-INDEX
        $hindex = $html->find('div.hindexnumber', 0)->innertext;
        //echo 'H-INDEX : ' . $hindex . '<br>';

        // LIEN VERS L'IMAGE RECAP
        $widget = $html->find('img.imgwidget', 0)->src;
        //echo 'Lien vers l\'image récap : ' . $widget . '<br>';

        // SJR
        $listeSJR = $html->find('div.cellcontent', 1)->find('td');
        $sjr = end($listeSJR)->innertext;
        //echo 'SJR : ' . $sjr . '<br>';

        // EDITEUR
        $editeur = $html->find('a[title="view all publisher\'s journals"]', 0)->innertext;
        $editeur=str_replace("'","\'",$editeur);
        if ($editeur == "") $editeur = "NC";
        //echo 'Nom de l\'éditeur : ' . $editeur . '<br>';

        // LIEN VERS LA REVUE
        if (isset($html->find('a[id="question_journal"]', 0)->href)){
            $lien = $html->find('a[id="question_journal"]', 0)->href;
            //echo 'Lien vers la revue : ' . $lien . '<br><br>';
        }
        else{
            $lien = "NC";
            //echo $lien.'<br><br>';
        }
        // hIndex=$hindex enlevé dans la requête car non présent dans la table revue, , sjr=$sjr 
        $sql = "UPDATE revue SET titreRevue='$titre', widgetRecap='$widget', editeur='$editeur', urlSiteRevue='$lien' WHERE idRevue=$idRevueSJR";
        $stmt = $bdd->prepare($sql);
        $stmt->execute();
    }

}
