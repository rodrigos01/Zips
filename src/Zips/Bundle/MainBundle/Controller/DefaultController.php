<?php

namespace Zips\Bundle\MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {
  
  private function getZipList($sql) {
    $stmt = $this->getDoctrine()->getManager()->getConnection()->prepare($sql);
    if($stmt->execute()) {
      if($stmt->columnCount() > 0) {
        return $stmt->fetchAll();
      }
    } else {
      throw new DBALException($stmt->errorInfo(), $stmt->errorCode());
    }
  }

  public function indexAction() {
    
    $sql = "select pa1.dataUpado data, p.id id, p.nome nome, s.nome site, aa.nome atual, pa.nome proximo, p.finalizado, p.revisaoSolicitada, pa1.aprovado  from ((Pacotes p inner join Sites s on p.idSite=s.id) inner join (Pacotes_Ambientes pa1 inner join Ambientes aa on pa1.idAmbiente=aa.id) on p.id=pa1.idPacote) inner join (Pacotes_Ambientes pa2 inner join Ambientes pa on pa2.idAmbiente=pa.id) on p.id=pa2.idPacote where p.finalizado=0 and pa1.upado=1 and (pa1.dataUpado=(select max(dataUpado) from Pacotes_Ambientes where idPacote=p.id)) and pa2.aprovado=0 order by pa1.dataUpado desc";
    
    return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle" => "Início", "zipList" => $this->getZipList($sql)));
  }

  public function abertosAction() {
    return $this->indexAction();
  }

  public function finalizadosAction() {
    $sql = "select pa1.dataUpado data, p.id id, p.nome nome, s.nome site, aa.nome atual, pa.nome proximo, p.finalizado, p.revisaoSolicitada, pa1.aprovado  from ((Pacotes p inner join Sites s on p.idSite=s.id) inner join (Pacotes_Ambientes pa1 inner join Ambientes aa on pa1.idAmbiente=aa.id) on p.id=pa1.idPacote) inner join (Pacotes_Ambientes pa2 inner join Ambientes pa on pa2.idAmbiente=pa.id) on p.id=pa2.idPacote where p.finalizado=1 and pa1.upado=1 and (pa1.dataUpado=(select max(dataUpado) from Pacotes_Ambientes where idPacote=p.id)) and (pa2.aprovado=0 or pa2.upado=0 or pa2.idAmbiente=pa1.idAmbiente) group by p.id order by pa1.dataUpado desc";
    
    return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle" => "Finalizados", "zipList" => $this->getZipList($sql)));
  }

  public function meusZipsAction() {
    return $this->render('ZipsMainBundle:Default:index.html.twig', array("pageTitle" => "Meus Zips", "zipList" => array()));
  }

  public function configuracoesAction() {
    return $this->render('ZipsMainBundle:Default:config.html.twig');
  }

  public function logoutAction() {
    
  }

}
