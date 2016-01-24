<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Student;  

use Symfony\Component\Form\Extension\Core\Type\TextType;


class StudentController extends Controller
{
    /**
     * @Route("/student/", name="student_home")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->redirectToRoute('student_view');
    }


 /**
     * @Route("/student/view/{id}", name="student_view")
     */
    public function viewAction($id, Request $request)
    {
        $student =  Student::getOne($id);
      




        return $this->render('student/view.html.twig', array('student' =>$student));  

    }


}
