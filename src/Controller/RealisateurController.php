<?php

namespace App\Controller;

use App\Entity\Realisateur;
use App\Form\RealisateurType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/realisateur")
 */
class RealisateurController extends Controller
{
    /**
     * @Route("/", name="realisateur_index", methods="GET")
     */
    public function index(): Response
    {
        $realisateurs = $this->getDoctrine()
            ->getRepository(Realisateur::class)
            ->findAll();

        return $this->render('realisateur/index.html.twig', ['realisateurs' => $realisateurs]);
    }

    /**
     * @Route("/new", name="realisateur_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $realisateur = new Realisateur();
        $form = $this->createForm(RealisateurType::class, $realisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($realisateur);
            $em->flush();

            return $this->redirectToRoute('realisateur_index');
        }

        return $this->render('realisateur/new.html.twig', [
            'realisateur' => $realisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRealisateur}", name="realisateur_show", methods="GET")
     */
    public function show(Realisateur $realisateur): Response
    {
        return $this->render('realisateur/show.html.twig', ['realisateur' => $realisateur]);
    }

    /**
     * @Route("/{idRealisateur}/edit", name="realisateur_edit", methods="GET|POST")
     */
    public function edit(Request $request, Realisateur $realisateur): Response
    {
        $form = $this->createForm(RealisateurType::class, $realisateur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('realisateur_edit', ['idRealisateur' => $realisateur->getIdRealisateur()]);
        }

        return $this->render('realisateur/edit.html.twig', [
            'realisateur' => $realisateur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{idRealisateur}", name="realisateur_delete", methods="DELETE")
     */
    public function delete(Request $request, Realisateur $realisateur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$realisateur->getIdRealisateur(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($realisateur);
            $em->flush();
        }

        return $this->redirectToRoute('realisateur_index');
    }
}
