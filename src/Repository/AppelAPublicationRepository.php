<?php

namespace App\Repository;

use App\Data\SearchData;
use App\parsing\emerald_parsing;
use App\DOM_html\simple_html_dom;

use App\Entity\Appelapublication;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\DBAL\DBALException;
use Knp\Component\Pager\Pagination\PaginationInterface;
use Knp\Component\Pager\PaginatorInterface;

/**
 * @method AppelAPublication|null find($id, $lockMode = null, $lockVersion = null)
 * @method AppelAPublication|null findOneBy(array $criteria, array $orderBy = null)
 * @method AppelAPublication[]    findAll()
 * @method AppelAPublication[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class AppelAPublicationRepository extends ServiceEntityRepository
{
    /**
     * @var PaginatorInterface
    */
    private $paginator;

    public function __construct(ManagerRegistry $registry, PaginatorInterface $paginator)
    {
        parent::__construct($registry, Appelapublication::class);
        $this->paginator = $paginator;
    }

    /**
     * affichage des calls
     * @return PaginationInterface
    */
    public function afficheAppelAPublication(SearchData $search): PaginationInterface
    {
        $query = $this->createQueryBuilder('p')
          ->select('p');

       // $sql = 'SELECT * FROM appelAPublication ORDER BY datePublication';

        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
            10
        );
    }

    /**
     * Recupere les calls en lien avec une recherche
     * @return PaginationInterface
    */
    public function findSearch(SearchData $search): PaginationInterface
    {
        $query = $this
            ->createQueryBuilder('p')
            ->select('p');

        if(!empty($search->q))
        {
            $query = $query
                ->andWhere('p.titreappel LIKE :q')
                ->orWhere('p.sourcecall LIKE :q')
                ->orWhere('p.titrerevuetrouve LIKE :q')
                ->setParameter('q', "%{$search->q}%");
        }

        if(!empty($search->categories))
        {
            $query = $query
                ->andWhere('p.categories.id IN (:categories)')
                ->setParameter('categories', $search->categories);
        }


        $query = $query->getQuery();
        return $this->paginator->paginate(
            $query,
            $search->page,
            10
        );

    }

    public function remplissageBDEmerald(Emerald_parsing $xml)
    {
        $conn = $this->getEntityManager()->getConnection();
        foreach ($xml->xml->channel->item as $value) {

            //attribution des variables et enleve les apo
            $title = str_replace("'", " ", $value->title);
            $link = str_replace("'", " ", $value->link);
            //$description = $this->resume($value->link);
            $datePu = date("Y-m-d");
            //récupere la date de fin depuis la description avec les expression réguliere
            preg_match("`([0-9]*[a-z]* [a-zA-Z]* [0-9]{4})`", $value->description, $res_regex);
            $datefin = $res_regex[1];
            $datefin = strtotime($datefin);
            $datefin = date('Y-m-d',$datefin);
            //récupere le nom de la revu pour pouvoire récuperer lid
            preg_match("`(from (.*), final)`", $value->description, $res_regex2);
            $revue = $res_regex2[2];
            //on récupere l'identifiant depuis le nom de la revu, on fait appel à une fonction externe
            $idRevue = $this->chaine_perc($revue);
            if($idRevue != null){
                $idRevue = max($idRevue);
                $idRevue = $idRevue['idRevue'];
            }else{
                $idRevue = 2848;
            }

        
            $existsql = "SELECT EXISTS( SELECT * FROM appelAPublication WHERE titreAppel = '$title' AND lien = '$link' AND dateFinSoumission = '$datefin')";
        
            $stmt = $conn->prepare($existsql);
            $stmt->execute();
            $count = $stmt->fetch();

            foreach($count as $value)
            {
                $tmp = $value;
            }
            

            // if pour savoir si la requete retourne qlq chose
            if ($tmp == "0"){
                //sinon on insert lappel dans la base
                $sql = "INSERT INTO appelAPublication ( titreAppel,lien,dateFinSoumission,datePublication, idRevue, titreRevueTrouve, sourceCall)VALUES ('$title', '$link', '$datefin', '$datePu', '$idRevue', '$revue', 'emerald')";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
            }
        }
    }


    //Gérer la connexion à la base de données + l'appel dans le AppelAPublicatioRepository
    function chaine_perc($str){

        $idcom = $this->getEntityManager()->getConnection();

        $tab_des_id = [];
        $i=0;
        $q = strtolower(trim($this->enleverCaracteresSpeciaux($str)));
        $query = "SELECT id_revue,titre_revue FROM revue";
        $result = $idcom->query($query);
            while ($row = $result->fetch()) {
                similar_text($q, strtolower(enleverCaracteresSpeciaux($row['titreRevue'])), $perc);
                if($perc > 80){
                    $tab_des_id[$i] = array('id_revue'=>$row['idRevue'],'titre_revue'=>$row['titreRevue'],'perc'=>round($perc,2));
                    $i++;
                }
            }
            return $tab_des_id;
        $idcom = null;
 
    }

    function enleverCaracteresSpeciaux($text) {
        $utf8 = array(
        '/[áàâãªä]/u' => 'a',
        '/[ÁÀÂÃÄ]/u' => 'A',
        '/[ÍÌÎÏ]/u' => 'I',
        '/[íìîï]/u' => 'i',
        '/[éèêë]/u' => 'e',
        '/[ÉÈÊË]/u' => 'E',
        '/[óòôõºö]/u' => 'o',
        '/[ÓÒÔÕÖ]/u' => 'O',
        '/[úùûü]/u' => 'u',
        '/[ÚÙÛÜ]/u' => 'U',
        '/[!:;,*@]/u' => '',
        '/ç/' => 'c',
        '/Ç/' => 'C',
        '/ñ/' => 'n',
        '/Ñ/' => 'N',
        '//' => '', // conversion d'un tiret UTF-8 en un tiret simple
        '/[«»]/u' => ' ', // guillemet double
        '/ /' => ' ', // espace insécable (équiv. à 0x160)
    
        );
        return preg_replace(array_keys($utf8), array_values($utf8), $text);
    }
/*
    function resume($lien){
    
        $html = $this->file_get_html($lien);
    
        $text = "";
        foreach($html->find('div[id="pgSectionCn"] p') as $e){

            $text = $text.$e->innertext;
        }
        $tab = array("<span>","<p>");
        $text = strip_tags_content($text, "<span>");
        $text = strip_tags($text);
        $text = str_replace("&nbsp;", " ", $text);
        $text = str_replace("'", "", $text);
        $rest = substr($text, 0, 1000);
    
        return $rest;
    }
*/
}