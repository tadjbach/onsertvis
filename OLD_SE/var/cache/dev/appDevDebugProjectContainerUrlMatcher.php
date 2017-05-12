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

        if (0 === strpos($pathinfo, '/demande')) {
            // se_auction_advert_list
            if (0 === strpos($pathinfo, '/demande/liste') && preg_match('#^/demande/liste(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_list')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::listAction',  'page' => 1,));
            }

            // se_auction_advert_view
            if (preg_match('#^/demande/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_view')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::viewAction',));
            }

            // se_auction_advert_add
            if ($pathinfo === '/demande/deposer') {
                return array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::addAction',  '_route' => 'se_auction_advert_add',);
            }

            // se_auction_advert_edit
            if (0 === strpos($pathinfo, '/demande/modifier') && preg_match('#^/demande/modifier/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_edit')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::editAction',));
            }

            // se_auction_advert_delete
            if (0 === strpos($pathinfo, '/demande/supprimer') && preg_match('#^/demande/supprimer/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_delete')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/mes-')) {
            // se_auction_advert_list_by_user
            if (0 === strpos($pathinfo, '/mes-demandes') && preg_match('#^/mes\\-demandes(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_list_by_user')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::listByUserAction',  'page' => 1,));
            }

            if (0 === strpos($pathinfo, '/mes-encheres')) {
                // se_auction_auction_list_by_user_proposed
                if (0 === strpos($pathinfo, '/mes-encheres/proposees') && preg_match('#^/mes\\-encheres/proposees(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_auction_list_by_user_proposed')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::listProposedAction',  'page' => 1,));
                }

                // se_auction_auction_list_by_user_receive
                if (0 === strpos($pathinfo, '/mes-encheres/recues') && preg_match('#^/mes\\-encheres/recues(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_auction_list_by_user_receive')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::listReceiveAction',  'page' => 1,));
                }

            }

        }

        // se_auction_list_auction_by_advert
        if (0 === strpos($pathinfo, '/encheres-recues') && preg_match('#^/encheres\\-recues/(?P<advertId>[^/]++)(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_list_auction_by_advert')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::listAction',  'page' => 1,));
        }

        if (0 === strpos($pathinfo, '/mes-encheres')) {
            // se_auction_auction_list_by_user_terminated
            if (0 === strpos($pathinfo, '/mes-encheres/terminees') && preg_match('#^/mes\\-encheres/terminees(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_auction_list_by_user_terminated')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::listTerminatedAction',  'page' => 1,));
            }

            // se_auction_auction_list_by_user
            if (preg_match('#^/mes\\-encheres(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_auction_list_by_user')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::listProposedAction',  'page' => 1,));
            }

        }

        // se_auction_add
        if (0 === strpos($pathinfo, '/demande/propser-enchere') && preg_match('#^/demande/propser\\-enchere/(?P<advertId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_add')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::addAction',));
        }

        // se_auction_auction_accept
        if (0 === strpos($pathinfo, '/accepter-enchere') && preg_match('#^/accepter\\-enchere/(?P<auctionId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_auction_accept')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AuctionController::acceptAction',));
        }

        // se_auction_message_list
        if (0 === strpos($pathinfo, '/mes-messages') && preg_match('#^/mes\\-messages/(?P<advertId>[^/]++)(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_message_list')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\MessageController::listAction',  'page' => 1,));
        }

        // se_auction_message_add
        if (0 === strpos($pathinfo, '/contact/envoi-message') && preg_match('#^/contact/envoi\\-message/(?P<advertId>[^/]++)/(?P<senderId>[^/]++)/(?P<receiveId>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_message_add')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\MessageController::addAction',));
        }

        if (0 === strpos($pathinfo, '/mes')) {
            if (0 === strpos($pathinfo, '/message-')) {
                // se_auction_advert_message_list
                if (0 === strpos($pathinfo, '/message-recues') && preg_match('#^/message\\-recues/(?P<advertId>[^/]++)/(?P<senderId>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_advert_message_list')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\MessageController::listConversationAction',));
                }

                // se_auction_user_message_list
                if (0 === strpos($pathinfo, '/message-envoyes') && preg_match('#^/message\\-envoyes(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_user_message_list')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\MessageController::listMessageSendAction',  'page' => 1,));
                }

            }

            // se_auction_comment_list
            if (0 === strpos($pathinfo, '/mes-commentaires') && preg_match('#^/mes\\-commentaires(?:/(?P<page>\\d*))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_comment_list')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\CommentController::listAction',  'page' => 1,));
            }

        }

        if (0 === strpos($pathinfo, '/contact')) {
            // se_auction_comment_add
            if (0 === strpos($pathinfo, '/contact/ajouter-comment') && preg_match('#^/contact/ajouter\\-comment/(?P<advertId>[^/]++)/(?P<auctionUserId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_comment_add')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\CommentController::addAction',));
            }

            // se_auction_comment_edit
            if (0 === strpos($pathinfo, '/contact/modifier-comment') && preg_match('#^/contact/modifier\\-comment/(?P<advertId>[^/]++)/(?P<auctionUserId>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_auction_comment_edit')), array (  '_controller' => 'SE\\AuctionBundle\\Controller\\CommentController::editAction',));
            }

        }

        // se_user_view
        if (0 === strpos($pathinfo, '/encherisseur/profile') && preg_match('#^/encherisseur/profile/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'se_user_view')), array (  '_controller' => 'SE\\UserBundle\\Controller\\ProfileController::viewAction',));
        }

        if (0 === strpos($pathinfo, '/demande/liste/get')) {
            // se_dpt_by_region
            if ($pathinfo === '/demande/liste/getdptbyregion') {
                return array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::getDptByRegionAction',  '_route' => 'se_dpt_by_region',);
            }

            // se_city_by_dpt_region
            if ($pathinfo === '/demande/liste/getcitybydptandregion') {
                return array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::getCityByRegionAndDptAction',  '_route' => 'se_city_by_dpt_region',);
            }

            // se_cp_by_city
            if ($pathinfo === '/demande/liste/getpostalcodebycity') {
                return array (  '_controller' => 'SE\\AuctionBundle\\Controller\\AdvertController::getPostalCodeByCityAction',  '_route' => 'se_cp_by_city',);
            }

        }

        // se_postalcode
        if ($pathinfo === '/getpostalcode') {
            return array (  '_controller' => 'SE\\PortalBundle\\Controller\\PostalCodeController::getPostalCodeAction',  '_route' => 'se_postalcode',);
        }

        // se_layout_allpage
        if ($pathinfo === '/allPage') {
            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::allPageAction',  '_route' => 'se_layout_allpage',);
        }

        // se_layout_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'se_layout_homepage');
            }

            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::indexAction',  '_route' => 'se_layout_homepage',);
        }

        if (0 === strpos($pathinfo, '/conditions-generales-d')) {
            // se_layout_cgu
            if ($pathinfo === '/conditions-generales-d-utilisations') {
                return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::cguAction',  '_route' => 'se_layout_cgu',);
            }

            // se_layout_cgv
            if ($pathinfo === '/conditions-generales-de-vente') {
                return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::cgvAction',  '_route' => 'se_layout_cgv',);
            }

        }

        // se_layout_contact
        if ($pathinfo === '/nous-contacter') {
            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::contactusAction',  '_route' => 'se_layout_contact',);
        }

        // se_layout_help
        if ($pathinfo === '/aide') {
            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::helpAction',  '_route' => 'se_layout_help',);
        }

        // se_layout_join
        if ($pathinfo === '/nous-rejoindre') {
            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::joinusAction',  '_route' => 'se_layout_join',);
        }

        // se_layout_resum
        if ($pathinfo === '/qui-sommes-nous') {
            return array (  '_controller' => 'SE\\LayoutBundle\\Controller\\DefaultController::resumAction',  '_route' => 'se_layout_resum',);
        }

        // se_portal_account_dashboard
        if ($pathinfo === '/tableau-de-bord') {
            return array (  '_controller' => 'SE\\PortalBundle\\Controller\\AccountController::dashboardAction',  '_route' => 'se_portal_account_dashboard',);
        }

        if (0 === strpos($pathinfo, '/mo')) {
            // se_portal_account_profile
            if ($pathinfo === '/mon-profil') {
                return array (  '_controller' => 'SE\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'se_portal_account_profile',);
            }

            // se_portal_account_profile_edit
            if ($pathinfo === '/modifier-mon-profil') {
                return array (  '_controller' => 'SE\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'se_portal_account_profile_edit',);
            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'SE\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'SE\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'SE\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'SE\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'SE\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'SE\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'SE\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'SE\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'SE\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
