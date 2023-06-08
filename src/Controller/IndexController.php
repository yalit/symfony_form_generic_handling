<?php

namespace App\Controller;

use App\Form\SecondFormType;
use App\Form\TestFormType;
use App\FormHandling\FormData\FormDataHandlerManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    #[Route('/', name: 'app_index')]
    public function index(Request $request, FormDataHandlerManagerInterface $formDataHandler): Response
    {
        $form = $this->createForm(TestFormType::class);
        
        $formDataHandler->handle($form, $request);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'IndexController',
            'form' => $form
        ]);
    }

    #[Route('/second', name: 'app_second')]
    public function second(Request $request, FormDataHandlerManagerInterface $formDataHandler): Response
    {
        $form = $this->createForm(SecondFormType::class);

        $formDataHandler->handle($form, $request);

        return $this->render('index/index.html.twig', [
            'controller_name' => 'SecondFormTypeControllerFunction',
            'form' => $form
        ]);
    }

    #[Route('/second-same', name: 'app_second_same')]
    public function secondSame(Request $request, FormDataHandlerManagerInterface $formDataHandler): Response
    {
        $form = $this->createForm(SecondFormType::class);

        $formDataHandler->handle($form, $request);
        
        return $this->render('index/index.html.twig', [
            'controller_name' => 'SecondSameFormTypeControllerFunction',
            'form' => $form
        ]);
    }
}
