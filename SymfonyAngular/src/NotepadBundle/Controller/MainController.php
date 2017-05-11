<?php

namespace NotepadBundle\Controller;

use NotepadBundle\Entity\Category;
use NotepadBundle\Entity\Note;
use NotepadBundle\Form\CategoryType;
use NotepadBundle\Form\NoteType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * @Route("/notepad")
 */
class MainController extends Controller
{
  //-----------------------------------
  //redirection to the main page
  //-----------------------------------

  /**
   * @Route("/")
   */
  public function indexAction()
  {
      return $this->redirectToRoute('notepadnotelist');
  }

//-------------------------------------
//note management
//-------------------------------------

/**
 * @Route("/note/list", name="notepadnotelist")
 * @Method({"GET", "POST"})
 */
public function listAction(Request $request)
{
    $note_repository = $this->getDoctrine()
        ->getRepository('NotepadBundle:Note');

    $all_notes = $note_repository->findAll();
    $notes = array();
    $search_term = "";

    if ($request->getMethod() === 'POST') {
        $search_term = $request->request->get('srch');
        if (!empty($search_term)) {
            foreach ($all_notes as $note) {
                $dom = new \DOMDocument();
                $dom->loadXML($note->getXMLContent());
                $xpath = new \DOMXpath($dom);
                $elements = $xpath->evaluate("/note/tag");
                foreach ($elements as $element) {
                    if ($element->nodeValue === $search_term)
                        $notes[] = $note;
                }
            }
        } else {
            $notes = $all_notes;
        }
    }

    if ($request->getMethod() === 'GET')
        $notes = $all_notes;

    return $this->render(
        'NotepadBundle:view:listnote.html.twig',
        array(
            'notes' => $notes,
            'search' => $search_term,
        ));
    }

  /**
   * @Route("/note/new", name="notepadnotenew")
   */
  public function newNoteAction(Request $request)
  {
      return $this->editNoteAction($request, new Note());
  }

  /**
   * @Route("/note/edit/{note}", name="notepadeditnote")
   */
  public function editNoteAction(Request $request, Note $note)
  {
      $form = $this->createForm(NoteType::class, $note);

      $form->handleRequest($request);

      if ($form->isSubmitted() && $form->isValid()) {
          $note = $form->getData();

          $em = $this->getDoctrine()->getManager();
          $em->persist($note);
          $em->flush();

          return $this->redirectToRoute('notepadnotelist');
      }

      return $this->render(
          'NotepadBundle:view:newnote.html.twig',
          array(
              'form' => $form->createView(),
            ));
    }

  /**
   * @Route("/note/delete/{note}", name="notepaddeletenote")
   */
  public function deleteNoteAction(Note $note)
  {
      $em = $this->getDoctrine()->getManager();
      $em->remove($note);
      $em->flush();

      return $this->redirectToRoute('notepadnotelist');
  }

//-------------------------------------
//catégory management
//-------------------------------------

  /**
   * @Route("/category/list", name="notepadCategorylist")
   */
  public function listCategoryAction()
  {
      $this->get('session')->getFlashBag()->set('error2', 'Tag introuvable');

      $category_repository = $this->getDoctrine()->getRepository('NotepadBundle:Category');

      $categories = $category_repository->findAll();

      $categorylist = $this->render(
          'NotepadBundle:view:listcategory.html.twig',
          array(
              'categories' => $categories,
          ));
      return $categorylist;

  }

    /**
     * @Route("/category/new", name="notepadcategorynew")
     */
    public function newCategoryAction(Request $request)
    {
        return $this->editCategoryAction($request, new Category());
    }

    /**
     * @Route("/category/edit/{category}", name="notepadeditcategory")
     */
    public function editCategoryAction(Request $request, Category $category)
    {
        $form = $this->createForm(CategoryType::class, $category);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $category = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($category);
            $em->flush();

            return $this->redirectToRoute('notepadCategorylist');
        }
        return $this->render(
            'NotepadBundle:view:newcategory.html.twig',
            array('form' => $form->createView()));
    }

    /**
     * @Route("/category/delete/{category}", name="notepaddeletecategory")
     */
    public function deleteAction(Category $category)
    {
        $em = $this->getDoctrine()->getManager();

        if ($category->getNotes()->isEmpty()) {
            $em->remove($category);
            $em->flush();
        } else {
          $this->get('session')->getFlashBag()->set('error',
           'suppression impossible, note encore liée a cette catégorie');
          return $this->redirectToRoute('notepadCategorylist');
        }
        $this->get('session')->getFlashBag()->set('yolo', 'Note bien supprimée');
        return $this->redirectToRoute('notepadCategorylist');
    }
}
