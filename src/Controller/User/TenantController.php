<?php

namespace App\Controller\User;

use App\Entity\Tenant\Category;
use App\Entity\User\Tenant;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class TenantController extends AbstractController
{
    /**
     * @Route("/", name="user_tenants")
     */
    public function indexAction(): Response
    {
        return $this->render('user/tenant/index.html.twig');
    }

    /**
     * @Route("/tenants")
     */
    public function getTenantsAction()
    {
        $em = $this->getDoctrine()->getManager();
        $tenants = $em->getRepository(Tenant::class)->findAll();

        return new JsonResponse(['tenants' => $tenants]);
    }
}
