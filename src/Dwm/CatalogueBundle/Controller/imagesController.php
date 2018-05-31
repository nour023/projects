<?php

namespace Dwm\CatalogueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dwm\CatalogueBundle\Entity\images;
use Dwm\CatalogueBundle\Form\imagesType;

/**
 * images controller.
 *
 */
class imagesController extends Controller
{

    /**
     * Lists all images entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DwmCatalogueBundle:images')->findAll();

        return $this->render('DwmCatalogueBundle:images:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new images entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new images();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('images_show', array('id' => $entity->getId())));
        }

        return $this->render('DwmCatalogueBundle:images:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a images entity.
    *
    * @param images $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(images $entity)
    {
        $form = $this->createForm(new imagesType(), $entity, array(
            'action' => $this->generateUrl('images_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new images entity.
     *
     */
    public function newAction()
    {
        $entity = new images();
        $form   = $this->createCreateForm($entity);

        return $this->render('DwmCatalogueBundle:images:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a images entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:images')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find images entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DwmCatalogueBundle:images:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing images entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:images')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find images entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DwmCatalogueBundle:images:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a images entity.
    *
    * @param images $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(images $entity)
    {
        $form = $this->createForm(new imagesType(), $entity, array(
            'action' => $this->generateUrl('images_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing images entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:images')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find images entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('images_edit', array('id' => $id)));
        }

        return $this->render('DwmCatalogueBundle:images:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a images entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DwmCatalogueBundle:images')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find images entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('images'));
    }

    /**
     * Creates a form to delete a images entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('images_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
