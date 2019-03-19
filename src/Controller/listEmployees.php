<?php
declare(strict_types=1);

namespace App\Controller;

use App\Api\ApiClient;
use App\Formatter\AvatarFormatChecker;
use App\Mapper\EmployeesMapper;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class listEmployees extends AbstractController
{
    const FLESH_ERROR = 'error';

    /**
     * @Route("/employees",
     *      methods={"GET"},
     *      name="controller.employees.list"
     * )
     * @param ApiClient $client
     * @return Response
     */
    public function __invoke(
        ApiClient $client
    ): Response {
        try{
            $response = $client->get('list');

            if($response->getStatusCode() !== Response::HTTP_OK) {
                //todo return user friendly message and redirect.
                $this->addFlash(self::FLESH_ERROR, 'Unable to fetch employees');
                return $this->render('base.html.twig',
                    ['employees' => []]);
            }

            $content = json_decode($response->getBody()->getContents(), true);

            $employees = EmployeesMapper::mapToCollection($content);

        } catch(\Exception $e) {
            //todo return user friendly message and redirect.
            $this->addFlash(self::FLESH_ERROR, $e->getMessage());
            return $this->render('base.html.twig',
                ['employees' => []]);
        }


        //todo AvatarFormatChecker should be part of EmployeesMapper
        return $this->render('base.html.twig',
            [
                'employees' => $employees
            ]
        );
    }
}