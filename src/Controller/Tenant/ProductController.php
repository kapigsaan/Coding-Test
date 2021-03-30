<?php

namespace App\Controller\Tenant;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/user")
 */
class ProductController extends AbstractController
{
    /**
     * @Route("/tenant/product", name="user_tenant_product")
     */
    public function index(): Response
    {
        return $this->render('tenant/product/index.html.twig', [
            'controller_name' => 'ProductController',
        ]);
    }

    /**
     * @Route("/categories")
     */
    public function getCategoriesAction(Request $request)
    {
        $id = $request->query->get('tenant');
        $em = $this->getDoctrine()->getManager();
        $tenant = $em->getRepository(Tenant::class)->find($id);

        if (!$tenant) {
            return new JsonResponse(['error' => 'This tenant cannot be found.'], 404);
        }

        $tenantDb = $tenant->getTenantDb();
        $em2 = $this->getDoctrine()->getManager($tenantDb);
        $categories = $em2->getRepository(Category::class)->findAll();

        return new JsonResponse(['categories' => $categories]);
    }
}
