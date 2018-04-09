<?php

namespace AppBundle\Controller;

use AppBundle\Entity\mail;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Mail controller.
 *
 */
class mailController extends BaseController
{
    /**
     * Lists all mail entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        //$mails = $em->getRepository('AppBundle:mail')->findAll();
        $mails = $em->getRepository('AppBundle:mail')->findBy(['status' => 1]);
        foreach ($mails as $index => $mail) {
            $mail->setCreateTime(date('Y-m-d H:i:s', $mail->getCreateTime()));
            $mail->setUpdateTime(date('Y-m-d H:i:s', $mail->getUpdateTime()));
            $mail->setSendTime(date('Y-m-d H:i:s', $mail->getSendTime()));
        }

        return $this->render('mail/index.html.twig', array(
            'mails' => $mails,
        ));
    }

    /**
     * Creates a new mail entity.
     *
     */
    public function newAction(Request $request)
    {
        $contentId = $request->get('content_id');
        if (empty($contentId)) {
            return $this->redirectToRoute('data_index');
        }
        $mail = new Mail();
        $form = $this->createForm('AppBundle\Form\mailNew', $mail);
        $form->handleRequest($request);

        $em = $this->getDoctrine()->getManager();
        $mailHistory = $em->getRepository('AppBundle:mail')->findOneBy(['status' => 1, 'contentId' => $contentId]);

        if (!empty($mailHistory)) {
            return $this->redirectToRoute('mail_edit',array('id' => $mailHistory->getId()));
        }

        if ($form->isSubmitted() && $form->isValid()) {
            /*$validator = $this->get('validator');
            $errors = $validator->validate($mail);
            if (count($errors) > 0) {
                return $this->render('author/validation.html.twig', array(
                    'errors' => $errors,
                ));
            }*/
            $sendTime = strtotime($mail->getSendTime());

            if (time()>$sendTime) {
                //echo "<script>alert('send time should greater than current time')</script>";
                //echo "<script>var html = '<ul><li>send time should greater than current time</li></ul>';$('#appbundle_mail').append(html);<script>";
                return $this->render('mail/new.html.twig', array(
                    'mail' => $mail,
                    'form' => $form->createView(),
                    'validateSendTime' => "send time should greater than current time"
                ));
            }
            $em = $this->getDoctrine()->getManager();
            $this->setDefaultParam($mail, "create");
            $mail->setContentId($contentId);
            $mail->setSendStatus(0);
            $mail->setSendTime($sendTime);
            $em->persist($mail);
            $em->flush();

            return $this->redirectToRoute('data_index');
            //return $this->redirectToRoute('mail_show', array('id' => $mail->getId()));
        }

        return $this->render('mail/new.html.twig', array(
            'mail' => $mail,
            'form' => $form->createView(),
            'validateSendTime' => ""
        ));
    }

    /**
     * Finds and displays a mail entity.
     *
     */
    public function showAction(mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);
        $mail->setSendTime(date('Y-m-d H:i', $mail->getSendTime()));
        return $this->render('mail/show.html.twig', array(
            'mail' => $mail,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing mail entity.
     *
     */
    public function editAction(Request $request, mail $mail)
    {
        $deleteForm = $this->createDeleteForm($mail);
        $mail->setSendTime(date('Y-m-d H:i', $mail->getSendTime()));
        $editForm = $this->createForm('AppBundle\Form\mailShow', $mail);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $sendTime = strtotime($mail->getSendTime());

            if (time()>$sendTime) {
                echo "<script>alert('send time should greater than current time')</script>";
                return $this->render('mail/edit.html.twig', array(
                    'mail' => $mail,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
                ));
            }
            $this->setDefaultParam($mail,"update");
            $mail->setSendTime(strtotime($mail->getSendTime()));
            $mail->setSendStatus(0);
            $this->getDoctrine()->getManager()->flush();
            return $this->redirectToRoute('data_index');

            //return $this->redirectToRoute('mail_edit', array('id' => $mail->getId()));
        }


        return $this->render('mail/edit.html.twig', array(
            'mail' => $mail,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a mail entity.
     *
     */
    public function deleteAction(Request $request, mail $mail)
    {
        $form = $this->createDeleteForm($mail);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $editForm = $this->createForm('AppBundle\Form\mailShow', $mail);
            $editForm->handleRequest($request);
            $data = $editForm->getData();
            $data->setStatus(0);
            $editForm->setData($data);
            $this->getDoctrine()->getManager()->flush();
            /*$em->remove($mail);
            $em->flush();*/
        }

        return $this->redirectToRoute('data_index');
        //return $this->redirectToRoute('mail_index');
    }

    /**
     * Creates a form to delete a mail entity.
     *
     * @param mail $mail The mail entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(mail $mail)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('mail_delete', array('id' => $mail->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
