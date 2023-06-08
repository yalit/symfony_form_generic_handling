<?php

namespace App\Controller;

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
}
