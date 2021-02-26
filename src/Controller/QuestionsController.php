<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use App\Entity\Question;
use App\Entity\Reponse;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\RedirectResponse;


class QuestionsController extends AbstractController
{
    /**
     * @Route("/{name}/{questionsNbr}/{questionIndex}/{id}", name="product_show")
     */
    
    public function questions($name,$questionsNbr,$questionIndex,$id)
    {
        
        $repository = $this->getDoctrine()->getRepository(Question::class);
        $questions = $repository->findBy(
            array('idCategorie' => $id)
        );
        
        $repository = $this->getDoctrine()->getRepository(Reponse::class);
        $responses = $repository->findBy(
            array('idQuestion' => $questions[$questionIndex])
        );
        return $this->render('number.html.twig', [
            'questions' => $questions[$questionIndex],
            'responses' => $responses,
            'name' => $name,
            'questionsNbr' => $questionsNbr,
            'id' => $id,
            'nextQuestion' => $questionIndex,
            'responseGiven' => null,
            'responseExpected' => null,
            'ip' => $_SERVER['REMOTE_ADDR'],
        ]);
    }
    /**
     * @Route("/{name}/{questionsNbr}/{questionIndex}/{id}/check/{questionId}", name="k")
     */
    
    public function check($name,$questionsNbr,$questionIndex,$id,$questionId)
    {
        
        $repository = $this->getDoctrine()->getRepository(Question::class);
        $questions = $repository->findBy(
            array('idCategorie' => $id)
        );
        
        $repository = $this->getDoctrine()->getRepository(Reponse::class);
        $responses = $repository->findBy(
            array('idQuestion' => $questions[$questionIndex])
        );
        
        $responsesGiven = $repository->findBy(
            array('idQuestion' => $questions[$questionIndex],
            'id' => $questionId,
            'reponseExpected' => "1")
        );
        if (!$responsesGiven) {
            $responsesExpected = $repository->findBy(
                array('idQuestion' => $questions[$questionIndex],
                'reponseExpected' => "1")
            );
            return $this->render('number.html.twig', [
                'questions' => $questions[$questionIndex],
                'responses' => $responses,
                'name' => $name,
                'questionsNbr' => $questionsNbr,
                'id' => $id,
                'nextQuestion' => $questionIndex+1,
                'responseGiven' => false,
                'responseExpected' => $responsesExpected,
                'check' => true,
                'ip' => $_SERVER['REMOTE_ADDR'],
                ]);
            }
        else{
            
            return $this->render('number.html.twig', [
                'questions' => $questions[$questionIndex],
                'responses' => $responses,
                'name' => $name,
                'questionsNbr' => $questionsNbr,
                'id' => $id,
                'nextQuestion' => $questionIndex+1,
                'responseGiven' => true,
                'responseExpected' => null,
                'check' => true,
                'ip' => $_SERVER['REMOTE_ADDR'],
            ]);
        }
    }
}