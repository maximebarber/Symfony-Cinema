<?php

namespace App\Controller;

use App\Entity\Acteur;
use App\Form\ActeurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/acteur")
 */
class ActeurController extends Controller
{
    /**
     * @Route("/", name="acteur_index", methods="GET")
     */
    public function index(): Response
    {
        $acteurs = $this->getDoctrine()
            ->getRepository(Acteur::class)
            ->findAll();

        return $this->render('acteur/index.html.twig', ['acteurs' => $acteurs]);
    }

    /**
     * @Route("/new", name="acteur_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $acteur = new Acteur();
        $form = $this->createForm(ActeurType::class, $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($acteur);
            $em->flush();

            return $this->redirectToRoute('acteur_index');
        }

        return $this->render('acteur/new.html.twig', [
            'acteur' => $acteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idActeur}", name="acteur_show", methods="GET")
     */
    public function show(Acteur $acteur): Response
    {
        return $this->render('acteur/show.html.twig', ['acteur' => $acteur]);
    }

    /**
     * @Route("/{idActeur}/edit", name="acteur_edit", methods="GET|POST")
     */
    public function edit(Request $request, Acteur $acteur): Response
    {
        $form = $this->createForm(ActeurType::class, $acteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('acteur_edit', ['idActeur' => $acteur->getIdActeur()]);
        }

        return $this->render('acteur/edit.html.twig', [
            'acteur' => $acteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idActeur}", name="acteur_delete", methods="DELETE")
     */
    public function delete(Request $request, Acteur $acteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$acteur->getIdActeur(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($acteur);
            $em->flush();
        }

        return $this->redirectToRoute('acteur_index');
    }
}
