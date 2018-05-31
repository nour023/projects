<?php

namespace Dwm\CatalogueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Dwm\CatalogueBundle\Entity\img;
use Dwm\CatalogueBundle\Form\imgType;

/**
 * img controller.
 *
 * @Route("/img")
 */
class imgController extends Controller
{

    /**
     * Lists all img entities.
     *
     * @Route("/", name="img")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DwmCatalogueBundle:img')->findAll();

        return array(
            'entities' => $entities,
        );
    }
    /**
     * Creates a new img entity.
     *
     * @Route("/", name="img_create")
     * @Method("POST")
     * @Template("DwmCatalogueBundle:img:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new img();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('img_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
    * Creates a form to create a img entity.
    *
    * @param img $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(img $entity)
    {
        $form = $this->createForm(new imgType(), $entity, array(
            'action' => $this->generateUrl('img_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new img entity.
     *
     * @Route("/new", name="img_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new img();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Finds and displays a img entity.
     *
     * @Route("/{id}", name="img_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:img')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find img entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing img entity.
     *
     * @Route("/{id}/edit", name="img_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:img')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find img entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
    * Creates a form to edit a img entity.
    *
    * @param img $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(img $entity)
    {
        $form = $this->createForm(new imgType(), $entity, array(
            'action' => $this->generateUrl('img_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing img entity.
     *
     * @Route("/{id}", name="img_update")
     * @Method("PUT")
     * @Template("DwmCatalogueBundle:img:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:img')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find img entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('img_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }
    /**
     * Deletes a img entity.
     *
     * @Route("/{id}", name="img_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DwmCatalogueBundle:img')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find img entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('img'));
    }

    /**
     * Creates a form to delete a img entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('img_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
