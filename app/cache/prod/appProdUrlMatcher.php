<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // acme_stamp_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'acme_stamp_homepage')), array (  '_controller' => 'Acme\\StampBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/test')) {
            // test
            if (rtrim($pathinfo, '/') === '/test') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'test');
                }

                return array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::indexAction',  '_route' => 'test',);
            }

            // test_show
            if (preg_match('#^/test/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_show')), array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::showAction',));
            }

            // test_new
            if ($pathinfo === '/test/new') {
                return array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::newAction',  '_route' => 'test_new',);
            }

            // test_create
            if ($pathinfo === '/test/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_test_create;
                }

                return array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::createAction',  '_route' => 'test_create',);
            }
            not_test_create:

            // test_edit
            if (preg_match('#^/test/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_edit')), array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::editAction',));
            }

            // test_update
            if (preg_match('#^/test/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_test_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_update')), array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::updateAction',));
            }
            not_test_update:

            // test_delete
            if (preg_match('#^/test/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_test_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'test_delete')), array (  '_controller' => 'Acme\\StampBundle\\Controller\\TestController::deleteAction',));
            }
            not_test_delete:

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
