<?php

namespace App\Controller;

use App\Service\MyService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/default", name="default")
     *
     * @param MyService $myService
     *
     * @return JsonResponse
     */
    public function index(MyService $myService)
    {
        $myService->setDataBy('test', ['property' => 'value']);

        return $this->json([
            'message' => $myService->getDataByKey('test'),
            'path' => 'src/Controller/DefaultController.php',
        ]);
    }
}
