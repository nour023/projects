<?php

namespace Dwm\FileBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Dwm\FileBundle\Models\Document;



class UploadController extends Controller {

   
    public function uploadArticleAction(Request $req) {
    
        $a=new \Dwm\CatalogueBundle\Entity\Article();
        $form=$this->createFormBuilder($a)
            ->add("code","text")
            ->add("libelle","text")
            ->add("prix","text")
            ->add("tva","text")
            ->add("unite","text")
            ->add("Sfamille","entity",array("class"=>"Dwm\CatalogueBundle\Entity\SousFamille","property"=>"id"))
            
            ->add("Ajouter un article","submit")
            ->getForm();
           $form->handleRequest($req);
          
        if($form->isValid()){
         
          
            $em=$this->getDoctrine()->getManager();
            $em->persist($a);
            $em->flush();
            $query = $em->createQueryBuilder();
            $query->select('P')->from('DwmCatalogueBundle:Article', 'P')->orderBy('P.id', 'DESC')->setMaxResults(1);
            $dernier_produit = $query->getQuery()->getOneOrNullResult();
            $article_id = new \Dwm\CatalogueBundle\Entity\Article();
            $article_id = $dernier_produit;
           $image1 = $req->files->get('img');
           $image2 = $req->files->get('img2');
//           $image3 = $req->files->get('img3');
//           $image4 = $req->files->get('img4');
//           $image5 = $req->files->get('img5');
//           $image6 = $req->files->get('img6');
//           $image7 = $req->files->get('img7');
//           $image8 = $req->files->get('img8');
           $image = array($image1, $image2);
                       
           for ($i = 0; $i <= 1; $i++) {

                $status = 'success';
                $uploadedURL = '';
                $message = '';
                if (($image[$i] instanceof UploadedFile) && ($image[$i]->getError() == '0')) {
                    if (($image[$i]->getSize() < 2000000000)) {
                        $originalName = $image[$i]->getClientOriginalName();
                        $name_array = explode('.', $originalName);
                        $file_type = $name_array[sizeof($name_array) - 1];
                        $valid_filetypes = array('jpg', 'jpeg', 'bmp', 'png');
                        if (in_array(strtolower($file_type), $valid_filetypes)) {


                            $document = new Document();

                            $document->setFile($image[$i]);
                            $document->setSubDirectory('offres');
                            $document->processFile();
                            $uploadedURL = $uploadedURL = $document->getUploadDirectory() . DIRECTORY_SEPARATOR . $document->getSubDirectory() . DIRECTORY_SEPARATOR . $image[$i]->getBasename();
                            $em = $this->getDoctrine()->getEntityManager();

                            $obj_image = new \Dwm\CatalogueBundle\Entity\image();
                            $obj_image->setImage($originalName);
                            $obj_image->setSrc("http://127.0.0.1/gif/offres/" . $image[$i]->getFilename());
                            $obj_image->setArticle_id($article_id);
                            $em->persist($obj_image);
                            $em->flush();
                        } else {
                            $status = 'failed';
                            $message = 'Invalid File Type';
                        }
                    } else {
                        $status = 'failed';
                        $message = 'Size exceeds limit';
                    }
                } else {
                    $status = 'failed';
                    $message = 'File Error';
                }
            }
            return  $this->redirect($this->generateUrl("pf"));
        }
   
            return $this->render('DwmCatalogueBundle:Default:addArticle.html.twig',array ('f'=> $form->createView()));
        }
    

    
}

?>
