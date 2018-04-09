<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Data;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Datum controller.
 *
 */
class DataController extends BaseController
{
    protected $send_status = [
        0 => 'to be reminded',
        1 => 'remind succeeded',
        2 => 'remind falied'
    ];
    /**
     * Lists all datum entities.
     * @Route("/data/index")
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$datas = $em->getRepository('AppBundle:Data')->findAll();
        $datas = $em->getRepository('AppBundle:Data')->findBy(['status' => 1]);
        foreach ($datas as $index => $data) {
            $data->setCreateTime(date('Y-m-d H:i', $data->getCreateTime()));
            $data->setUpdateTime(date('Y-m-d H:i', $data->getUpdateTime()));
            $data->setContent(mb_substr($data->getContent(),0,10,'utf-8'));
            $mail = $em->getRepository('AppBundle:mail')->findOneBy(['status' => 1, 'contentId' => $data->getId()]);
            $data->sendTime = !empty($mail) ? date('Y-m-d H:i', $mail->getSendTime()) : '';
            $data->sendStatus = (!empty($mail) && array_key_exists($mail->getSendStatus(), $this->send_status)) ? $this->send_status[$mail->getSendStatus()] : '';
        }

        return $this->render('data/index.html.twig', array(
            'datas' => $datas,
        ));
    }

    /**
     * Creates a new datum entity.
     *
     */
    public function newAction(Request $request)
    {
        $datum = new Data();
        $form = $this->createForm('AppBundle\Form\DataNew', $datum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $this->setDefaultParam($datum, "create");
            $em->persist($datum);
            $em->flush();

            return $this->redirectToRoute('data_show', array('id' => $datum->getId()));
        }

        return $this->render('data/new.html.twig', array(
            'datum' => $datum,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a datum entity.
     *
     */
    public function showAction(Data $datum)
    {
        $deleteForm = $this->createDeleteForm($datum);
        $datum->setCreateTime(date('Y-m-d H:i:s', $datum->getCreateTime()));
        $datum->setUpdateTime(date('Y-m-d H:i:s', $datum->getUpdateTime()));

        return $this->render('data/show.html.twig', array(
            'datum' => $datum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing datum entity.
     *
     */
    public function editAction(Request $request, Data $datum)
    {
        $deleteForm = $this->createDeleteForm($datum);
        $editForm = $this->createForm('AppBundle\Form\DataNew', $datum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->setDefaultParam($datum,"update");
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('data_edit', array('id' => $datum->getId()));
        }

        return $this->render('data/edit.html.twig', array(
            'datum' => $datum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * softdelete
     * Deletes a datum entity.
     *
     */
    public function deleteAction(Request $request, Data $datum)
    {
        $form = $this->createDeleteForm($datum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $editForm = $this->createForm('AppBundle\Form\DataType', $datum);
            $editForm->handleRequest($request);
            $data = $editForm->getData();
            $data->setStatus(0);
            $data->setUpdateTime(time());
            $editForm->setData($data);
            $this->getDoctrine()->getManager()->flush();
        }

        return $this->redirectToRoute('data_index');
    }

    /**
     * Creates a form to delete a datum entity.
     *
     * @param Data $datum The datum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Data $datum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('data_delete', array('id' => $datum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }

}
