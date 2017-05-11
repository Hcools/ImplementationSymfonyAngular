<?php
namespace NotepadBundle\Controller;
use NotepadBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\BadRequestHttpException;
use NotepadBundle\Entity\Note;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use NotepadBundle\Form\NoteType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * @Route("/notepad/api")
 */
class APIController extends Controller
{

    /**
     * @Route("/notes/{note}")
     * @Method({"OPTIONS"})
     */
    public function getNotesCrossOriginAction(Note $note)
    {
        return $this->getCrossOriginResponse('GET, PUT, POST, DELETE, OPTIONS');
    }

    /*
     * Notes API
     */
    /**
     * @Route("/notes")
     * @Method({"GET", "OPTIONS"})
     */
    public function allNotesAction(Request $request)
    {
        $allowed_methods = 'GET, OPTIONS';
        if ($request->isMethod('OPTIONS')) {
            return $this->getCrossOriginResponse($allowed_methods);
        }

        $note_repository = $this->getDoctrine()
            ->getRepository('NotepadBundle:Note');
        $notes = $note_repository->findBy(
            array(),
            array('date' => 'desc')
        );

        $notes_array = array();
        foreach ($notes as $note) {
            $notes_array[] = $note->toArray();
        }

        return $this->setCrossOriginResponse(
            new JsonResponse($notes_array),
            $allowed_methods
        );
    }

    /**
     * @Route("/notes/{note}")
     * @Method({"GET"})
     */
    public function getNotesAction(Note $note)
    {
        return $this->setCrossOriginResponse(
            new JsonResponse($note->toArray()),
            'GET, PUT, DELETE, OPTIONS'
        );
    }
    /**
     * @Route("/categories/{category}/notes")
     * @Method({"POST", "OPTIONS"})
     */
    public function newNoteAction(Request $request, Category $category)
    {
        $allowed_methods = 'POST, OPTIONS';
        if ($request->isMethod('OPTIONS')) {
            return $this->getCrossOriginResponse($allowed_methods);
        }

        $content = $request->getContent();
        $validator = $this->get('validator');
        if (empty($content)) { $msg = "Content is empty";
            return new JsonResponse(['error' => $msg]);
        }
        $note_data = json_decode($content, true);
        if (!$note_data) { $msg = "Content is not a valid json";
            return new JsonResponse(['error' => $msg]);
        }

        $note = new Note();
        if (array_key_exists('title', $note_data))
            $note->setTitle($note_data['title']);
        if (array_key_exists('date', $note_data))
            $note->setDate(new \DateTime($note_data['date']));
        if (array_key_exists('content', $note_data))
            $note->setContent($note_data['content']);
        $note->setCategory($category);
        $errors = $validator->validate($note);
        if (count($errors) > 0) {
            $response_array['error'] = "Note is not valid";
            return new JsonResponse($response_array);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();
        return $this->setCrossOriginResponse(
            new JsonResponse($note->toArray()),
            $allowed_methods
        );
    }

    /**
     * @Route("/notes/{note}")
     * @Method({"PUT"})
     */
    public function editNoteAction(Request $request, Note $note)
    {
        $content = $request->getContent();
        $validator = $this->get('validator');
        if (empty($content)) {
            $msg = "Content is empty";
            return new JsonResponse(['error' => $msg]);
        }

        $note_data = json_decode($content, true);
        if (!$note_data) {
            $msg = "Content is not a valid json";
            return new JsonResponse(['error' => $msg]);
        }

        $category_repository = $this->getDoctrine()
            ->getRepository('NotepadBundle:Category');
        if (array_key_exists('title', $note_data))
            $note->setTitle($note_data['title']);
        if (array_key_exists('date', $note_data))
            $note->setDate(new \DateTime($note_data['date']));
        if (array_key_exists('content', $note_data))
            $note->setContent($note_data['content']);
        if (array_key_exists('category', $note_data)) {
            if (array_key_exists('id', $note_data['category']))
                $category = $category_repository->find(
                    $note_data['category']['id']
                );
            if (!empty($category))
                $note->setCategory($category);
        }
        $errors = $validator->validate($note);
        if (count($errors) > 0) { $response_array['error'] = "Note is not valid";
            return new JsonResponse($response_array);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($note);
        $em->flush();
        return $this->setCrossOriginResponse(
            new JsonResponse($note->toArray()),
            'GET, PUT,POST, DELETE, OPTIONS'
        );
    }
    /**
     * @Route("/notes/{note}")
     * @Method({"DELETE"})
     */
    public function deleteNotesAction(Note $note)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($note);
        $em->flush();
        return $this->setCrossOriginResponse(
            new JsonResponse(['sucess' => true]),
            'GET, PUT, DELETE, OPTIONS'
        );
    }
    /*
     * Categories API
     */
    /**
     * @Route("/categories")
     * @Method({"OPTIONS"})
     */
    public function getAllCategoriesCrossOriginAction()
    {

        return $this->getCrossOriginResponse('GET, PUT, DELETE, OPTIONS');

    }
    /**
     * @Route("/categories/{category}")
     * @Method({"OPTIONS"})
     */
    public function getCategoriesCrossOriginAction(Category $category)
    {
        return $this->getCrossOriginResponse('GET, PUT, DELETE, OPTIONS');
    }
    /**
     * @Route("/categories")
     * @Method({"GET"})
     */
    public function allCategoriesAction()
    {
        $repository = $this->getDoctrine()
            ->getRepository('NotepadBundle:Category');
        $categories = $repository->findAll();
        $categories_array = array();
        foreach ($categories as $category) {
            $categories_array[] = $category->toArray();

         }
        return $this->setCrossOriginResponse(
          new JsonResponse($categories_array),'GET, POST, OPTIONS');
    }
    /**
     * @Route("/categories/{category}")
     * @Method({"GET"})
     */
    public function getCategoriesAction(Category $category)
    {
        return $this->setCrossOriginResponse(
            new JsonResponse($category->toArray()),
            'GET, PUT, DELETE, OPTIONS'
        );
    }
    /**
     * @Route("/categories")
     * @Method({"POST"})
     */
    public function newCategoriesAction(Request $request)
    {
        $content = $request->getContent();
        $validator = $this->get('validator');
        if (empty($content)) {
            $msg = "Content is empty";
            return new JsonResponse(['error' => $msg]);
        }
        $category_data = json_decode($content, true);
        if (!$category_data) { $msg = "Content is not a valid json";
            return new JsonResponse(['error' => $msg]);
        }
        $category = new Category();
        if (array_key_exists('name', $category_data))
            $category->setName($category_data['name']);
        $errors = $validator->validate($category);
        if (count($errors) > 0) {  $response_array['error'] = "Category is not valid";
             return new JsonResponse($response_array);
        }
        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();
        return $this->setCrossOriginResponse(
            new JsonResponse($category->toArray()),
            'GET, POST, OPTIONS'
        );
    }
    /**
     * @Route("/categories/{category}")
     * @Method({"PUT"})
     */
    public function editCategoriesAction(Request $request, Category $category)
    {
        $content = $request->getContent();
        $validator = $this->get('validator');

        if (empty($content)) { $msg = "Content is empty";
             return new JsonResponse(['error' => $msg]);
        }

        $category_data = json_decode($content, true);
        if (!$category_data) { $msg = "Content is not a valid json";
             return new JsonResponse(['error' => $msg]);
        }

        if (array_key_exists('name', $category_data))
            $category->setName($category_data['name']);
        $errors = $validator->validate($category);

        if (count($errors) > 0) {  $response_array['error'] = "Note is not valid";
            return new JsonResponse($response_array); }

        $em = $this->getDoctrine()->getManager();
        $em->persist($category);
        $em->flush();

        return $this->setCrossOriginResponse(
            new JsonResponse($category->toArray()),
            'GET, PUT, DELETE, OPTIONS'
        );
    }
    /**
     * @Route("/categories/{category}")
     * @Method({"DELETE"})
     */
    public function deleteCategoriesAction(Category $category)
    {
        $em = $this->getDoctrine()->getManager();
        $em->remove($category);
        $em->flush();
        return $this->setCrossOriginResponse(
            new JsonResponse(['sucess' => true]),
            'GET,  DELETE, PUT, OPTIONS'
        );
    }
    /**
     *
     * Cross-Origin
     *  Accept formatted arguments and return admissible methods
     *
     */
    private function getCrossOriginResponse($methods)
    {
        $response = new Response();
        $response->headers->set('Content-Type', 'application/text');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", "GET, POST, PUT, DELETE, OPTIONS");
        return $response;
    }
    private function setCrossOriginResponse($response, $method)
    {
        $response->headers->set('Content-Type', 'application/json');
        $response->headers->set('Access-Control-Allow-Origin', '*');
        $response->headers->set("Access-Control-Allow-Methods", $method);
        return $response;
    }

}
