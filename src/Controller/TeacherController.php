<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TeacherController extends AbstractController
{
    /**
     * @Route("/teacher", name="app_teacher")
     */
    public function index(): Response
    {
        return $this->render('teacher/index.html.twig', [
            'controller_name' => 'TeacherController',
        ]);
    }
    
    public function showteacher(){
        return new Response("show teacher");
    }
    #[Route('/showTeacher',name:'show_teacher')]
    
    public function showTeacherWithName($name)
    {
        return new Response('Bonjour'.$name);
    }
    #[route('/showTWIG',name:'show_teacher_twig')]
    public function showTWIG()
    {
        $title='Liste of teachers';
        $teachers = [
            ['id' => 1, 'name' => 'teacher1', 'nb_classe' => 4],
            ['id' => 2, 'name' => 'teacher2', 'nb_classe' => 6],
            ['id' => 3, 'name' => 'teacher3', 'nb_classe' => 5],
        ];
      
        return $this->render('teacher/show.html.twig',['t'=>$title,'tt'=>$teacher]);
    }
}
