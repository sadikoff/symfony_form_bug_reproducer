<?php
    
namespace App\Controller;

use App\Form\ColorType;
use App\Model\Color;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    public function index() 
    {
        $form = $this->createForm(ColorType::class, new Color());
        
        return $this->render('default/index.html.twig', [
            'form' => $form->createView()
        ]); 
    }
}
