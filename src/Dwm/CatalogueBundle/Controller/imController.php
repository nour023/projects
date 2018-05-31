<?php

namespace Dwm\CatalogueBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Dwm\CatalogueBundle\Entity\im;
use Dwm\CatalogueBundle\Form\imType;

/**
 * im controller.
 *
 */
class imController extends Controller
{

    /**
     * Lists all im entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('DwmCatalogueBundle:im')->findAll();

        return $this->render('DwmCatalogueBundle:im:index.html.twig', array(
            'entities' => $entities,
        ));
    }
    /**
     * Creates a new im entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity = new im();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('im_show', array('id' => $entity->getId())));
        }

        return $this->render('DwmCatalogueBundle:im:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
    * Creates a form to create a im entity.
    *
    * @param im $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createCreateForm(im $entity)
    {
        $form = $this->createForm(new imType(), $entity, array(
            'action' => $this->generateUrl('im_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Create'));

        return $form;
    }

    /**
     * Displays a form to create a new im entity.
     *
     */
    public function newAction()
    {
        $entity = new im();
        $form   = $this->createCreateForm($entity);

        return $this->render('DwmCatalogueBundle:im:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Finds and displays a im entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:im')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find im entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DwmCatalogueBundle:im:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing im entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:im')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find im entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('DwmCatalogueBundle:im:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
    * Creates a form to edit a im entity.
    *
    * @param im $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(im $entity)
    {
        $form = $this->createForm(new imType(), $entity, array(
            'action' => $this->generateUrl('im_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }
    /**
     * Edits an existing im entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('DwmCatalogueBundle:im')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find im entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('im_edit', array('id' => $id)));
        }

        return $this->render('DwmCatalogueBundle:im:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }
    /**
     * Deletes a im entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('DwmCatalogueBundle:im')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find im entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('im'));
    }

    /**
     * Creates a form to delete a im entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('im_delete', array('id' => $id)))
            ->setMethod('DELETE')
            ->add('submit', 'submit', array('label' => 'Delete'))
            ->getForm()
        ;
    }
}
