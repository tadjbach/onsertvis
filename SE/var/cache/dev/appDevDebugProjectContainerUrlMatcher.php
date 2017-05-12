<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/service-enchere')) {
            // se_platform_homepage
            if (rtrim($pathinfo, '/') === '/service-enchere') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'se_platform_homepage');
                }

                return array (  '_controller' => 'SE\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'se_platform_homepage',);
            }

            if (0 === strpos($pathinfo, '/service-enchere/annonce')) {
                // se_platform_advert_add
                if ($pathinfo === '/service-enchere/annonce/ajouter') {
                    return array (  '_controller' => 'SE\\PlatformBundle\\Controller\\AdvertController::addAction',  '_route' => 'se_platform_advert_add',);
                }

                // se_platform_advert_view
                if (preg_match('#^/service\\-enchere/annonce/(?P<slug>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_platform_advert_view')), array (  '_controller' => 'SE\\PlatformBundle\\Controller\\AdvertController::viewAction',));
                }

                // se_platform_advert_edit
                if (0 === strpos($pathinfo, '/service-enchere/annonce/modifier') && preg_match('#^/service\\-enchere/annonce/modifier/(?P<slug>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_platform_advert_edit')), array (  '_controller' => 'SE\\PlatformBundle\\Controller\\AdvertController::editAction',));
                }

                // se_platform_advert_delete
                if (0 === strpos($pathinfo, '/service-enchere/annonce/supprimer') && preg_match('#^/service\\-enchere/annonce/supprimer/(?P<slug>[^/]++)/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_platform_advert_delete')), array (  '_controller' => 'SE\\PlatformBundle\\Controller\\AdvertController::deleteAction',));
                }

                // se_platform_advert_list
                if (0 === strpos($pathinfo, '/service-enchere/annonces-en-cours') && preg_match('#^/service\\-enchere/annonces\\-en\\-cours(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_platform_advert_list')), array (  '_controller' => 'SE\\PlatformBundle\\Controller\\AdvertController::listAction',  'page' => 1,));
                }

            }

            // se_platform_resum
            if ($pathinfo === '/service-enchere/qui-sommes-nous') {
                return array (  '_controller' => 'SE\\PlatformBundle\\Controller\\DefaultController::resumAction',  '_route' => 'se_platform_resum',);
            }

            // se_platform_cgu
            if ($pathinfo === '/service-enchere/conditions-generales-d-utilisations') {
                return array (  '_controller' => 'SE\\PlatformBundle\\Controller\\DefaultController::cguAction',  '_route' => 'se_platform_cgu',);
            }

            // se_platform_help
            if ($pathinfo === '/service-enchere/aide') {
                return array (  '_controller' => 'SE\\PlatformBundle\\Controller\\DefaultController::helpAction',  '_route' => 'se_platform_help',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
