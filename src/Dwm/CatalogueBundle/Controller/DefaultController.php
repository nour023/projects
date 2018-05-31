<?php

namespace Dwm\CatalogueBundle\Controller;

use Symfony\Component\HttpFoundation\Session\Session;
use Dwm\CatalogueBundle\Entity\Article;
use Dwm\CatalogueBundle\Entity\Famille;
use Dwm\CatalogueBundle\Entity\Fournisseur;
use Dwm\CatalogueBundle\Entity\SousFamille;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;


class DefaultController extends Controller
{
   /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
    
//    famille...

   /**
     * @Route("/listFamille",name="l")
     * @Template()
     */
    public function listFamilleAction()
    {

        
        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }
        else{
        $famille=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Famille")->findAll();
        return array('famille' => $famille);
    }
    }

    /**
     * @Route("/formFamille")
     * @Template()
     */
    public function formFamilleAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        
 
              
        $f=new Famille();
        $form=$this->createFormBuilder($f)
            ->add('code','text')
            ->add('libelle','text')
            ->add('Ajouter une famille','submit')
            ->getForm();
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($f);
            $em->flush();
            return  $this->redirect($this->generateUrl("l"));

        }
        return array('fm' => $form->createView());
    
    }
    
     /**
     * @Route("/suppFamille")
     * @Template()
     */
    public function suppFamilleAction()
    {



        $id=$_GET['i'];
        $em = $this->getDoctrine()->getEntityManager();
        while ($sf = $em->getRepository('DwmCatalogueBundle:SousFamille')->findOneBy(array('familleid'=>$id)))
                {
         while ($article=$em->getRepository('DwmCatalogueBundle:Article')->findOneBy(array('Sfamille'=>$sf->getId())))
                {
             while ($img = $em->getRepository('DwmCatalogueBundle:image')->findOneBy(array('article_id'=>$article->getId()))){
        $em->remove($img);
        $em->flush();
             }
        $em->remove($article);
        $em->flush();
        
             }
        
        $em->remove($sf);
        $em->flush();}
    
        
        
        $famille = $em->getRepository('DwmCatalogueBundle:Famille')->find($id);

        if (!$famille) {
            throw $this->createNotFoundException('No famille found for id '.$id);
        }
        $em->remove($famille);
        $em->flush();

        return $this->redirect($this->generateUrl('l'));

    }
    
        /**
     * @Route("/modifierFamille")
     * @Template()
     */
    public function modifierFamilleAction()
    
    {
            $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }
        else{

        


        $id=$_GET['i'];
        $em = $this->getDoctrine()->getEntityManager();
        $famille = $em->getRepository('DwmCatalogueBundle:Famille')->find($id);





        return array('famille' => $famille);


    }
    }
    /**
     * @Route("/modifFamille")
     * @Template()
     */
    public function modifFamilleAction()
    {



        $id=$_GET['id'];
        $code=$_GET['code'];
        $libelle=$_GET['libelle'];
        $em = $this->getDoctrine()->getEntityManager();
        $famille = $em->getRepository('DwmCatalogueBundle:Famille')->find($id);

        $famille->setCode($code);
        $famille->setlibelle($libelle);
        $em->flush();

        return $this->redirect($this->generateUrl('l'));
    }

    
    
    


//fournisseur..


    /**
     * @Route("/listFournisseur",name="fr")
     * @Template()
     */
    public function listFournisseurAction()
    {

        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }
        else{
        $fournisseur=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Fournisseur")->findAll();
        return array('fournisseur' => $fournisseur);
    }
    }
    
    /**
     * @Route("/suppFournisseur")
     * @Template()
     */
    public function suppFournisseurAction()
    {
        $id=$_GET['id'];
        $em = $this->getDoctrine()->getEntityManager();
        $fournisseur = $em->getRepository('DwmCatalogueBundle:Fournisseur')->find($id);
        $em->remove($fournisseur);
        $em->flush();
        return $this->redirect($this->generateUrl('fr'));
    }


    /**
     * @Route("/vmodifFournisseur")
     * @Template()
     */
    public function vmodifFournisseurAction()
    {
         $session = new Session();
                $session->start();
                if ($session->get('id')!=3){
                 return $this->redirect($this->generateUrl('pg'));   
                }
        else{
        $id=$_GET['i'];
        $em = $this->getDoctrine()->getEntityManager();
        $fournisseur = $em->getRepository('DwmCatalogueBundle:Fournisseur')->find($id);
        return array('fournisseur' => $fournisseur);
    }
    }

    /**
     * @Route("/modifFournisseur")
     * @Template()
     */
    public function modifFournisseurAction()
    {



        $id=$_GET['id'];
        $code=$_GET['code'];
        $libelle=$_GET['libelle'];
        $adresse=$_GET['adresse'];
        $ville=$_GET['ville'];
        $codePostal=$_GET['codePostal'];
        $Email=$_GET['Email'];
        $tel=$_GET['tel'];
        $em = $this->getDoctrine()->getEntityManager();
        $fournisseur = $em->getRepository('DwmCatalogueBundle:Fournisseur')->find($id);

        $fournisseur->setCode($code);
        $fournisseur->setlibelle($libelle);
        $fournisseur->setAdresse($adresse);
        $fournisseur->setVille($ville);
        $fournisseur->setCodePostal($codePostal);
        $fournisseur->setEmail($Email);
        $fournisseur->setTel($tel);
        $em->flush();


        

        return $this->redirect($this->generateUrl('fr'));
    }
        /**
     * @Route("/inscrit",name="insff")
     * @Template()
     */
  public function inscritAction(){
      return array();
  }
      /**
     * @Route("/inscritFournisseur")
     * @Template()
     */
    public function inscritFournisseurAction(){
        
        
        
        
        $code=$_GET['code'];
        $name=$_GET['name'];
        $libelle=$_GET['libelle'];
        $adresse=$_GET['adresse'];
        $ville=$_GET['ville'];
        $codePostal=$_GET['codepostal'];
        $Email=$_GET['email'];
        $tel=$_GET['tel'];
        $em=$this->getDoctrine()->getManager();
        
         if($fr = $em->getRepository('DwmCatalogueBundle:Fournisseur')->findOneBy(array('email'=>$Email))){
            
            $this->get('session')->getFlashBag()->add('notice', 'Vous êtes déjà inscrit! ');

                  return  $this->redirect($this->generateUrl("insff"));

        }
        
        if($fr = $em->getRepository('DwmCatalogueBundle:PreInscritF')->findOneBy(array('email'=>$Email))){
            
            $this->get('session')->getFlashBag()->add('notice', 'Vous êtes en attente ! Veuillez attendre l`acceptation .. Merci  ');

                  return  $this->redirect($this->generateUrl("test"));

        }
        
        else{
        $f=new \Dwm\CatalogueBundle\Entity\PreInscritF;
        $f->setCode($code);
        $f->setName($name);
        $f->setLibelle($libelle);
        $f->setAdresse($adresse);
        $f->setVille($ville);
        $f->setCodePostal($codePostal);
        $f->setEmail($Email);
        $f->setTel($tel);
        
        $em->persist($f);
        $em->flush();
        
        $this->get('session')->getFlashBag()->add('notice', 'Inscription faite avec succée ..Veuillez attendre un message de confirmation ! Merci   ');
        return  $this->redirect($this->generateUrl("aif")); }
    }
    
    /**
     * @Route("/afterif",name="aif")
     * @Template()
     */
    public function afterifAction()
    {
        return array();
    }
    
    
     /**
     * @Route("/PIFournisseur",name="PIF")
     * @Template()
     */
    public function PIFournisseurAction()
    {
        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }

                else {
        $fournisseur=$this->getDoctrine()->getRepository("DwmCatalogueBundle:PreInscritF")->findAll();
        return array('fournisseur' => $fournisseur);
    }
    }
    /**
     * @Route("/accepterF")
     * @Template()
     */
    function accepterFAction(){
        $id=$_GET['id'];
        
        $code=$_GET['code'];
        $name=$_GET['name'];
        $libelle=$_GET['libelle'];
        $adresse=$_GET['adresse'];
        $ville=$_GET['ville'];
        $codePostal=$_GET['codepostal'];
        $Email=$_GET['email'];
        $tel=$_GET['tel'];
        
        $fr=new \Dwm\CatalogueBundle\Entity\PreInscritF;
        $em=$this->getDoctrine()->getManager();
        $fr = $em->getRepository('DwmCatalogueBundle:PreInscritF')->find($id);
        $em->remove($fr);
        $em->flush();
        
         $f=new \Dwm\CatalogueBundle\Entity\Fournisseur;
        $f->setCode($code);
        $f->setName($name);
        $f->setLibelle($libelle);
        $f->setAdresse($adresse);
        $f->setVille($ville);
        $f->setCodePostal($codePostal);
        $f->setEmail($Email);
        $f->setTel($tel);
        $em->persist($f);
        $em->flush();
        return  $this->redirect($this->generateUrl("PIF")); 
        
    }
    /**
     * @Route("/rejeterF")
     * @Template()
     */
    function rejeterFAction(){
        $id=$_GET['id'];
        $fr=new \Dwm\CatalogueBundle\Entity\PreInscritF;
        $em=$this->getDoctrine()->getManager();
        $fr = $em->getRepository('DwmCatalogueBundle:PreInscritF')->find($id);
        $em->remove($fr);
        $em->flush();
        return  $this->redirect($this->generateUrl("PIF")); 
    }
        /**
     * @Route("/connexionf",name="cnnf")
     * @Template()
     */
    public function connexionfAction(){
        $name=$_GET['name'];
        $code=$_GET['code'];
      
        
        $em = $this->getDoctrine()->getEntityManager();
        if($fr = $em->getRepository('DwmCatalogueBundle:Fournisseur')->findOneBy(array('email'=>$name))){
            if ($fr->getCode()==$code){
                 $session = new Session();
                $session->start();
                $session->set('name', $code);
                $session->set('id',3);

                 
               return $this->redirect($this->generateUrl('pf'));
               
            }
            else {$this->get('session')->getFlashBag()->add('notice', 'Mot passe est erroné !  ');}
        
        }
            else {
                echo $this->get('session')->getFlashBag()->add('notice', 'Email introuvable !  ');
            
        }
                
        return array();
    }

       /**
     * @Route("/cnnectf",name="connectf")
     * @Template()
     */
    function cnnectfAction(){
        return array();
    }

       /**
     * @Route("/pagefournisseur",name="pf")
     * @Template()
     */
       function pagefournisseurAction(){
           
           $session = new Session();
           $session->start();
           if($session->get('id')!=3){
               
               return $this->redirect($this->generateUrl('pg'));;
           }
           else {
           $codef=$session->get('name');
          
           $em = $this->getDoctrine()->getEntityManager();
           $art=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Article")->findBy(array('code'=>$codef));
           
           
           return array('article' => $art);}
           
           
       }









//    article...

    /**
     * @Route("/listArticle",name="ar")
     * @Template()
     */
    public function listArticleAction()
    {$session = new Session();
           $session->start();
           if($session->get('id')!=4){
               
               return $this->redirect($this->generateUrl('pg'));;
           }
           else {

        $art=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Article")->findAll();
        return array('article' => $art);
    }
    }

//    /**
//     * @Route("/addArticle")
//     * @Template()
//     */
//    public function addArticleAction(\Symfony\Component\HttpFoundation\Request $request)
//    {
//        $a=new Article();
//        $imag=new \Dwm\CatalogueBundle\Entity\image(); 
//         $formimage=$this->createFormBuilder($imag)
//                 ->add("src","file")
//                 ->getForm();
//       
//              
//            $username=$formimage->get('src')->getData();
//             echo "test".$username;
//             
//        $form=$this->createFormBuilder($a)
//            ->add("code","text")
//            ->add("libelle","text")
//            ->add("prix","text")
//            ->add("tva","text")
//            ->add("unite","text")
//            ->add("Sfamille","entity",array("class"=>"Dwm\CatalogueBundle\Entity\SousFamille","property"=>"id"))
//            ->add("Add","submit")
//            ->getForm();
//        $form->handleRequest($request);
//        if($form->isValid()){
//             
//         
//         
//         
//         echo "ici";
//                     
//            $em=$this->getDoctrine()->getManager();
////            $em->persist($a);
////            $em->flush();
////            return  $this->redirect($this->generateUrl("ar"));
//        }
        

//
//        return array ('f'=> $form->createView(),'i'=>$formimage->createView());
//
//    }
    
    
        /**
     * @Route("/suppArticle")
     * @Template()
     */
    public function suppArticleAction()
    {
        $id=$_GET['id'];
        $em = $this->getDoctrine()->getEntityManager();
       

        
        while ($img = $em->getRepository('DwmCatalogueBundle:image')->findOneBy(array('article_id'=>$id))){
        $em->remove($img);
        $em->flush();}
        
        $article = $em->getRepository('DwmCatalogueBundle:Article')->find($id);
        $em->remove($article);
        $em->flush();
        return $this->redirect($this->generateUrl('pf'));
    }
    /**
     * @Route("/vmodifArticle")
     * @Template()
     */
    public function vmodifArticleAction()
    {
         $session = new Session();
           $session->start();
           if($session->get('id')!=3){
               
               return $this->redirect($this->generateUrl('pg'));;
           }
           else {
        $id=$_GET['i'];
        $em = $this->getDoctrine()->getEntityManager();
        $article = $em->getRepository('DwmCatalogueBundle:Article')->find($id);
        return array('article' => $article);
    }
    }

    /**
     * @Route("/modifArticle")
     * @Template()
     */
    public function modifArticleAction()
    {



        $id=$_GET['id'];
        $code=$_GET['code'];
        $libelle=$_GET['libelle'];
        $prix=$_GET['prix'];
        $tva=$_GET['tva'];
        $unite=$_GET['unite'];

        $em = $this->getDoctrine()->getEntityManager();
        $article = $em->getRepository('DwmCatalogueBundle:article')->find($id);

        $article->setCode($code);
        $article->setlibelle($libelle);
        $article->setPrix($prix);
        $article->setTva($tva);
        $article->setUnite($unite);

        $em->flush();


        echo $id;

        return $this->redirect($this->generateUrl('pf'));
    }
    
    
    


//sousfamille..
    /**
     * @Route("/listSousFamille",name="sf")
     * @Template()
     */
    public function listSousFamilleAction()
    {
        $session = new Session();
           $session->start();
           if($session->get('id')!=1){
               
               return $this->redirect($this->generateUrl('pg'));;
           }
           else {

        $sf=$this->getDoctrine()->getRepository("DwmCatalogueBundle:SousFamille")->findAll();
        return array('sfamille' => $sf);
    }
    }

    /**
     * @Route("/addSousFamille")
     * @Template()
     */
    public function addSousFamilleAction(\Symfony\Component\HttpFoundation\Request $request)
    {
        
        $a=new SousFamille();
        $form=$this->createFormBuilder($a)
            ->add("code","text")
            ->add("libelle","text")
            ->add("familleid","entity",array("class"=>"Dwm\CatalogueBundle\Entity\Famille","property"=>"id"))
            ->add("Ajouter une sous famille","submit")
            ->getForm();

        
         
        
        $form->handleRequest($request);
        if($form->isValid()){
            $em=$this->getDoctrine()->getManager();
            $em->persist($a);
            $em->flush();
            return  $this->redirect($this->generateUrl("sf"));
        }

        return array ('sf'=> $form->createView());

    }
        /**
     * @Route("/suppSousFamille")
     * @Template()
     */
    public function suppSousFamilleAction()
    {
        $id=$_GET['id'];
        $em = $this->getDoctrine()->getEntityManager();
        $article =new Article();
        while ($article=$em->getRepository('DwmCatalogueBundle:Article')->findOneBy(array('Sfamille'=>$id)))
                {
             while ($img = $em->getRepository('DwmCatalogueBundle:image')->findOneBy(array('article_id'=>$article->getId()))){
        $em->remove($img);
        $em->flush();}
        $em->remove($article);
        $em->flush();
        
             }
        
        
        $sfamille = $em->getRepository('DwmCatalogueBundle:SousFamille')->find($id);
        $em->remove($sfamille);
        $em->flush();
        return $this->redirect($this->generateUrl('sf'));
        return array();
    }

    /**
     * @Route("/vmodifSousFamille")
     * @Template()
     */
    public function vmodifSousFamilleAction()
    {
        $session = new Session();
           $session->start();
           if($session->get('id')!=1){
               
               return $this->redirect($this->generateUrl('pg'));;
           }
           else {
        $id=$_GET['i'];
        $em = $this->getDoctrine()->getEntityManager();
        $sfamille = $em->getRepository('DwmCatalogueBundle:SousFamille')->find($id);
        return array('sfamille' => $sfamille);
    }
    }


    /**
     * @Route("/modifSousFamille")
     * @Template()
     */
    public function modifSousFamilleAction()
    {



        $id=$_GET['id'];
        $code=$_GET['code'];
        $libelle=$_GET['libelle'];
        $em = $this->getDoctrine()->getEntityManager();
        $sfamille = $em->getRepository('DwmCatalogueBundle:SousFamille')->find($id);

        $sfamille->setCode($code);
        $sfamille->setlibelle($libelle);
        $em->flush();


        echo $id;

        return $this->redirect($this->generateUrl('sf'));
    }
    
    
    
    
    
    
    
    
    
//    menu admin..
    /**
     * @Route("/menu",name="menu")
     * @Template()
     */
    public function menuAction()
    {
        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }

      return array();
    }
   











    
    /**
     * @Route("/accueil",name="acc")
     * @Template()
     */
  public function accueilAction()
  {
     $session=new Session();
     $session->start();
      if($session->get('id')==3){
          return  $this->redirect($this->generateUrl("pf"));
    }
     if($session->get('id')==2){
          return  $this->redirect($this->generateUrl("prin"));
    }
      return array();
  }
  


  
 /**
     * @Route("/inscritf",name="insf")
     * @Template()
     */
  public function inscritfAction(){
      return array();
  }  
  
  
  //  client...
   /**
     * @Route("/inscritc",name="ic")
     * @Template()
     */
  public function inscritcAction(){
      return array();
      
  }  
  /**
     * @Route("/addclient")
     * @Template()
     */
    public function addclientAction(){
       $sexe=$_GET['sexe'];
       $adresse=$_GET['adresse'];
       $nom=$_GET['nom'];
       $prenom=$_GET['prenom'];
       $login=$_GET['login'];
       $mdp=$_GET['mdp'];
       $compte=$_GET['compte'];
       
       
       $id=$_GET['id'];
       
       $c=new \Dwm\CatalogueBundle\Entity\PreInscriptionClient();
       $em=$this->getDoctrine()->getManager();
       $cmpt=new \Dwm\CatalogueBundle\Entity\compte();
        $c = $em->getRepository('DwmCatalogueBundle:PreInscriptionClient')->find($id);
        $em->remove($c);
        $em->flush();
       
       $cl=new \Dwm\CatalogueBundle\Entity\client;
        $cl->setNom($nom);
        $cl->setPrenom($prenom);
        $cl->setAdresse($adresse);
        $cl->setSexe($sexe);
        $cl->setLogin($login);
        $cl->setMdp($mdp);        
        $em->persist($cl);
        $em->flush();
         
                
        $cmpt->setNumcompte($compte);
        $cmpt->setClient($cl);
        $cmpt->setSolde(200000);
        $em->persist($cmpt);
        $em->flush();
        
       
      return  $this->redirect($this->generateUrl("prcl"));
  } 
  

  
   /**
     * @Route("/Inscritclient")
     * @Template()
     */
    public function InscritclientAction(){
       $login=$_GET['login'];
       $em = $this->getDoctrine()->getEntityManager();
        if($client = $em->getRepository('DwmCatalogueBundle:client')->findOneBy(array('login'=>$login))){
//            echo"login existe ";
            $this->get('session')->getFlashBag()->add('notice', 'Login exist !  Veuillez choisir un autre');

                  return  $this->redirect($this->generateUrl("ic"));

        }
        
         if($clientt = $em->getRepository('DwmCatalogueBundle:PreInscriptionClient')->findOneBy(array('login'=>$login))){
//            echo"login existe ";
            $this->get('session')->getFlashBag()->add('notice', 'Vous  etes en attente !  Veuillez attendre l`acceptaion .. Merci ' );

                  return  $this->redirect($this->generateUrl("ic"));

        }
        
      else{  
      $sexe=$_GET['sexe'];
      $adresse=$_GET['adresse'];
      $nom=$_GET['nom'];
      $prenom=$_GET['prenom'];
      $compte=$_GET['compte'];
       
       $mdp=$_GET['mdp'];
       
       $cl=new \Dwm\CatalogueBundle\Entity\PreInscriptionClient;
        $cl->setNom($nom);
        $cl->setPrenom($prenom);
        $cl->setSexe($sexe);
        $cl->setAdresse($adresse);
        $cl->setLogin($login);
        $cl->setMdp($mdp);
        $cl->setCompte($compte);
        $em->persist($cl);
        $em->flush();
        
     
      return  $this->redirect($this->generateUrl("acc"));}
  } 
  
  
         /**
     * @Route("/listClient",name="cl")
     * @Template()
     */
    public function listClientAction()
    {
        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }

                else{
        $client=$this->getDoctrine()->getRepository("DwmCatalogueBundle:client")->findAll();
        return array('client' => $client);
    }
    }
    
          /**
     * @Route("/ClientEnAttente",name="prcl")
     * @Template()
     */
    public function ClientEnAttenteAction()
    {
        $session = new Session();
                $session->start();
                if ($session->get('id')!=1){
                 return $this->redirect($this->generateUrl('pg'));   
                }

                else{

        $client=$this->getDoctrine()->getRepository("DwmCatalogueBundle:PreInscriptionClient")->findAll();
        return array('client' => $client);
    }
    }
         /**
     * @Route("/rejeter")
     * @Template()
     */
         function  rejeterAction(){
             $id=$_GET['id'];
       
       $c=new \Dwm\CatalogueBundle\Entity\PreInscriptionClient();
       $em=$this->getDoctrine()->getManager();
        $c = $em->getRepository('DwmCatalogueBundle:PreInscriptionClient')->find($id);
        $em->remove($c);
        $em->flush();
         return  $this->redirect($this->generateUrl("prcl"));     
             
         }

              /**
     * @Route("/suppClient")
     * @Template()
     */    
              function suppClientAction(){
                  $id=$_GET['id'];
       
       $c=new \Dwm\CatalogueBundle\Entity\client();
       $em=$this->getDoctrine()->getManager();
        $c = $em->getRepository('DwmCatalogueBundle:client')->find($id);
        $em->remove($c);
        $em->flush();
         return  $this->redirect($this->generateUrl("cl"));   
              }

              
         
    
    
    
    
    /**
     * @Route("/connexion")
     * @Template()
     */
   public function connexionAction(){
        $login=$_GET['login'];
        $mdp=$_GET['mdp'];
      
        
        $em = $this->getDoctrine()->getEntityManager();
        if ($login=="admin"  ){
             if ($mdp=="mmmmmmmm"){
                 $session = new Session();
                $session->start();
                $session->set('id',1);
               
                return $this->redirect($this->generateUrl('menu'));
            }
            else {$this->get('session')->getFlashBag()->add('notice', 'Mot passe est erroné !  ');}
        
        }
            
        
        else if($cl = $em->getRepository('DwmCatalogueBundle:client')->findOneBy(array('login'=>$login))){
            if ($cl->getMdp()==$mdp){
                 $session = new Session();
                $session->start();
                $session->set('id',2);
               $session->set('nom',$cl->getId());
                return $this->redirect($this->generateUrl('prin'));
            }
            else {$this->get('session')->getFlashBag()->add('notice', 'Mot passe est erroné !  ');}
        
        }
            else {
                echo $this->get('session')->getFlashBag()->add('notice', 'Login introuvable !  ');
            
        }
                
        return array();
    }
      /**
     * @Route("/cnx")
     * @Template()
     */
    function cnxAction(){
        return array();
    }
    
    /**
     * @Route("/principal",name="prin")
     * @Template()
     */
   function principalAction(){
         $session = new Session();
                $session->start();
                if ($session->get('id')!=2){
                 return $this->redirect($this->generateUrl('pg'));   
                }
                return array();
   }
    /**
     * @Route("/deconnection")
     * @Template()
     */
     function deconnectionAction (){

           $session = new Session();
           $session->start();
           $session->invalidate();
           echo $session->getName();
        return $this->redirect($this->generateUrl('pg'));
    }
    

    /**
     * @Route("/panier",name="panier")
     * @Template()
     */
    function panierAction(){
        $session = new Session();
        $session->start();
        $s=$session->get('id');
                $em = $this->getDoctrine()->getEntityManager();
                           $query = $em->createQuery(
                           'SELECT i FROM DwmCatalogueBundle:image i ORDER BY i.id DESC  '
                           );

$i = $query->setMaxResults(6)->getResult(); 

  $quer = $em->createQuery(
                           'SELECT p FROM DwmCatalogueBundle:Article p ORDER BY p.id DESC  '
                           );

$p = $quer->setMaxResults(6)->getResult(); 
                               
        return array('image'=>$i,'produit'=>$p,'session'=>$s);
    }
     /**
     * @Route("/consulter")
     * @Template()
     */
    function consulterAction(){
        $session = new Session();
           $session->start();
           
          $s= $session->get('id');
//          echo $s;
        $idp=$_GET['produit'];
        $idm=$_GET['jjjj'];
        $em = $this->getDoctrine()->getEntityManager();
        $produit=$em->getRepository('DwmCatalogueBundle:Article')->findOneBy(array('id'=>$idp));
        $image=$em->getRepository('DwmCatalogueBundle:image')->findOneBy(array('id'=>$idm));
        return array('produit'=>$produit,'image'=>$image,'session'=>$s);
    }
    /**
     * @Route("/commande")
     * @Template()
     */
    function commandeAction(){
        $session = new Session();
        $session->start();
            

        $em = $this->getDoctrine()->getEntityManager();
        $idc= $session->get('nom');
        $cl=$em->getRepository('DwmCatalogueBundle:client')->findOneBy(array('id'=>$idc));
        $adr= $cl->getAdresse();
        $etat='nv';
        $idpr=$_GET['prd'];
        $qte=$_GET['qte'];
        $ar=$em->getRepository('DwmCatalogueBundle:Article')->findOneBy(array('id'=>$idpr));
        $p=$ar->getPrix();
        $prix=$p*$qte;
        $tva=$ar->getTva();
        
        
        if(!($cm=$em->getRepository('DwmCatalogueBundle:command')->findBy(array('client'=>$idc,'etatcom'=>$etat)))){
          $com=new \Dwm\CatalogueBundle\Entity\command();
          $com->setClient($cl);
          $com->setDatecmd("eee");
          $com->setDateliv("dsq");
          $com->setAdresse($adr);
          $com->setEtatcom($etat);
          $com->setTotalttc(0);
          $em->persist($com);
          $em->flush();
//        return $this->redirect($this->generateUrl('panier'));
         }

        $cm=new \Dwm\CatalogueBundle\Entity\command();
        $cm=$em->getRepository('DwmCatalogueBundle:command')->findOneBy(array('client'=>$idc,'etatcom'=>$etat));  
        $idcom=$cm->getId();
        $tt=$cm->getTotalttc();
        
        $lcm=new \Dwm\CatalogueBundle\Entity\LigneDeCommande();
        $lcm->setArticle($ar);
        $lcm->setCommande($cm);
        $lcm->setQte($qte);
        $lcm->setPrix($prix);
        $lcm->setTva($tva);
        $lcm->setRemise(0);
        $cm->setTotalttc($prix+$tt);
        $em->persist($lcm);
        $em->flush();
    
        return $this->redirect($this->generateUrl('listc'));
    }  
    
    
    
      /**
     * @Route("/listecommande",name="listc")
     * @Template()
     */
    function listecommandeAction(){
          $session = new Session();
                $session->start();
                if ($session->get('id')!=2){
                 return $this->redirect($this->generateUrl('pg'));   
                }

                else{
        $idc=$session->get('nom');
        $em = $this->getDoctrine()->getEntityManager();
        $cm=new \Dwm\CatalogueBundle\Entity\command();

        if(        $cm=$em->getRepository('DwmCatalogueBundle:command')->findOneBy(array('client'=>$idc,'etatcom'=>"nv"))  
){
        
        $lcm=new \Dwm\CatalogueBundle\Entity\lignedecommande();
        $lcm=$em->getRepository('DwmCatalogueBundle:lignedecommande')->findBy(array('commande'=>$cm));  
   
        return array('lcm'=>$lcm,'commande'=>$cm);
        }
        else{
            echo "test";
            return $this->redirect($this->generateUrl("cmmd"));
        }
    } 
    }
    /**
     * @Route("/validercm")
     * @Template()
     */
    function validercmAction(){
        $session = new Session();
        $session->start();
        $idc=$session->get('nom');
        $em = $this->getDoctrine()->getEntityManager();
        $compte=$em->getRepository('DwmCatalogueBundle:compte')->findOneBy(array('client'=>$idc));
        $com=$em->getRepository('DwmCatalogueBundle:command')->findOneBy(array('client'=>$idc,'etatcom'=>"nv"));
        if($compte->getSolde()>=$com->getTotalttc()){
        $com->setEtatcom("v");
        $compte->setSolde($compte->getSolde()-$com->getTotalttc());
        $em->persist($com);
        $em->persist($compte);
        $em->flush();
        }
        else {
        $this->get('session')->getFlashBag()->add('notice', 'Votre solde est insuffisant  ');
        return $this->redirect($this->generateUrl('listc'));
        }
         return  $this->redirect($this->generateUrl("scc"));
    }
    /**
     * @Route("/supprimerlc")
     * @Template()
     */
    function supprimerlcAction(){
         $idlcm=$_GET['lcm'];
         $idcom=$_GET['com'];
         $prix=$_GET['prix'];
        $lc=new \Dwm\CatalogueBundle\Entity\lignedecommande();
        $em=$this->getDoctrine()->getManager();
        $lc = $em->getRepository('DwmCatalogueBundle:lignedecommande')->find($idlcm);
        $com=$em->getRepository('DwmCatalogueBundle:command')->find($idcom);
        $com->setTotalttc($com->getTotalttc()-$prix);
        $em->persist($com);
        $em->remove($lc);
        $em->flush();
        return  $this->redirect($this->generateUrl("listc")); 

        
    }
    
     /**
     * @Route("/annulercm")
     * @Template()
     */
    function annulercmAction(){
  
        $idcm=$_GET['idcm'];
        $em = $this->getDoctrine()->getEntityManager();
       

        
        while ($lcm = $em->getRepository('DwmCatalogueBundle:lignedecommande')->findOneBy(array('commande'=>$idcm))){
        $em->remove($lcm);
        $em->flush();}
        
        $cm=$em->getRepository('DwmCatalogueBundle:command')->findOneBy(array('id'=>$idcm));
         $em->remove($cm);
        $em->flush();
        return $this->redirect($this->generateUrl("panier"));
    }
    
    
    
      
    
         /**
     * @Route("/recherche")
     * @Template()
     */
    function rechercheAction(Request $req){

          $var = $req->get('recherche');
       
        $famille=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Famille")->findAll();
        $sfamille=$this->getDoctrine()->getRepository("DwmCatalogueBundle:SousFamille")->findAll();
        $article=$this->getDoctrine()->getRepository("DwmCatalogueBundle:Article")->findAll();
        $image=$this->getDoctrine()->getRepository("DwmCatalogueBundle:image")->findAll();
        
return array('article'=>$article,'var'=>$var,'famille'=>$famille,'sfamille'=>$sfamille,'image'=>$image);
        
    }
    
      /**
     * @Route("/scc",name="scc")
     * @Template()
     */
    function sccAction(){
  
     return array();
    }
    
/**
     * @Route("/cmmd",name="cmmd")
     * @Template()
     */
    function cmmdAction(){
  
     return array();
    }
    /**
     * @Route("/premierpage",name="pg")
     * @Template()
     */
    function premierpageAction(){
  
     return array();
    }
    
    /**
     * @Route("/contacte")
     * @Template()
     */
    function contacteAction(){
  
     return array();
    }
    
/**
     * @Route("/test",name="test")
     * @Template()
     */
    function testAction(){
  
     return array();
    }
    }

