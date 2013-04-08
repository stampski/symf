<?php

namespace Acme\StampBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Acme\StampBundle\Entity\Test;
use Acme\StampBundle\Form\TestType;

/**
 * Test controller.
 *
 */
class TestController extends Controller
{
    /**
     * Lists all Test entities.
     *
     */
    public function indexAction(Request $request)
    {
        $kom = $this->komunikaty($request);
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AcmeStampBundle:Test')->findAll();

        return $this->render('AcmeStampBundle:Test:index.html.twig', array(
            'entities' => $entities,
            'kom'      => $kom
        ));
    }

    /**
     * Creates a new Test entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Test();
        $form = $this->createForm(new TestType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('test_show', array('id' => $entity->getId())).'?o=dodok');
        }

        return $this->render('AcmeStampBundle:Test:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ).'?o=dodnokpola');
    }

    /**
     * Displays a form to create a new Test entity.
     *
     */
    public function newAction(Request $request)
    {
        $kom = $this->komunikaty($request);
        $entity = new Test();
        $form   = $this->createForm(new TestType(), $entity);

        return $this->render('AcmeStampBundle:Test:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
            'kom'    => $kom
        ));
    }

    /**
     * Finds and displays a Test entity.
     *
     */
    public function showAction(Request $request, $id)
    {
        $kom = $this->komunikaty($request);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeStampBundle:Test')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeStampBundle:Test:show.html.twig', array(
            'entity'      => $entity,
            'kom'         => $kom,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to edit an existing Test entity.
     *
     */
    public function editAction(Request $request, $id)
    {
        $kom = $this->komunikaty($request);
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeStampBundle:Test')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $editForm = $this->createForm(new TestType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AcmeStampBundle:Test:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
            'kom'         => $kom
        ));
    }

    /**
     * Edits an existing Test entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AcmeStampBundle:Test')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Test entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new TestType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('test_edit', array('id' => $id)).'?o=updok');
        }

        return $this->render('AcmeStampBundle:Test:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ).'?o=upnokpola');
    }

    /**
     * Deletes a Test entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AcmeStampBundle:Test')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Test entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('test').'?o=usunok');
    }

    /**
     * Creates a form to delete a Test entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }

    /**
     * Tworzy tablicę komunikatów
     * 
     * @param Request $req - obiekt Request
     * @param array $tabela - OPCJA - już istniejąca tabela alertów
     */

    private function komunikaty($req, $tabela = false) {
        $wynik = array();
        $op = $req->query->get('o');

        if($tabela && is_array($tabela)) $wynik = $tabela;


        if(strlen($op) > 0) {
            switch($op) {
                case "dodok":
                $t['typ'] = "alert alert-success";
                $t['tresc'] = "Pomyślnie dodano wpis.";
                $wynik[] = $t;
                break;

                case "dodnokpola":
                $t['typ'] = "alert alert-error";
                $t['tresc'] = "Błąd! Proszę poprawić pola formularza.";
                $wynik[] = $t;
                break;

                case "usunok":
                $t['typ'] = "alert alert-success";
                $t['tresc'] = "Pomyślnie usunięto wpis.";
                $wynik[] = $t;
                break;

                case "updok":
                $t['typ'] = "alert alert-success";
                $t['tresc'] = "Pomyślnie zaktualizowano wpis";
                $wynik[] = $t;
                break;

                case "upnokpola":
                $t['typ'] = "alert alert-error";
                $t['tresc'] = "Błąd! Proszę poprawić pola formularza.";
                $wynik[] = $t;
                break;
            }
        }

        return $wynik;
    }

}
