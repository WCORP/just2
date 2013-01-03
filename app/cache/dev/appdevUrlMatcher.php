<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // bid_create_for_user
        if ($pathinfo === '/user/bid/create') {
            return array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\BidController::bidAction',  '_route' => 'bid_create_for_user',);
        }

        // date_view
        if (0 === strpos($pathinfo, '/date/view') && preg_match('#^/date/view/(?P<id>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\DateJustController::viewAction',)), array('_route' => 'date_view'));
        }

        if (0 === strpos($pathinfo, '/venue')) {
            // venue_search
            if (rtrim($pathinfo, '/') === '/venue') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venue_search');
                }

                return array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\VenueJustController::searchAction',  '_route' => 'venue_search',);
            }

            // venue_results
            if ($pathinfo === '/venue/search') {
                return array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\VenueJustController::showAction',  '_route' => 'venue_results',);
            }

        }

        // usuario_register
        if ($pathinfo === '/register') {
            return array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\UserController::registerAction',  '_route' => 'usuario_register',);
        }

        // usuario_account_activate
        if (0 === strpos($pathinfo, '/activation') && preg_match('#^/activation/(?P<email>[^/]+)/(?P<codeActivate>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\UserController::userActiveAction',)), array('_route' => 'usuario_account_activate'));
        }

        // just2_frontend_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'just2_frontend_homepage');
            }

            return array (  '_controller' => 'Just2\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_route' => 'just2_frontend_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/auction')) {
            // auction
            if (rtrim($pathinfo, '/') === '/admin/auction') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'auction');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::indexAction',  '_route' => 'auction',);
            }

            // auction_show
            if (preg_match('#^/admin/auction/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::showAction',)), array('_route' => 'auction_show'));
            }

            // auction_new
            if ($pathinfo === '/admin/auction/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::newAction',  '_route' => 'auction_new',);
            }

            // auction_create
            if ($pathinfo === '/admin/auction/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_auction_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::createAction',  '_route' => 'auction_create',);
            }
            not_auction_create:

            // auction_edit
            if (preg_match('#^/admin/auction/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::editAction',)), array('_route' => 'auction_edit'));
            }

            // auction_update
            if (preg_match('#^/admin/auction/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_auction_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::updateAction',)), array('_route' => 'auction_update'));
            }
            not_auction_update:

            // auction_delete
            if (preg_match('#^/admin/auction/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_auction_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\AuctionController::deleteAction',)), array('_route' => 'auction_delete'));
            }
            not_auction_delete:

        }

        if (0 === strpos($pathinfo, '/admin/ocassion/category')) {
            // categoryocassion
            if (rtrim($pathinfo, '/') === '/admin/ocassion/category') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categoryocassion');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::indexAction',  '_route' => 'categoryocassion',);
            }

            // categoryocassion_show
            if (preg_match('#^/admin/ocassion/category/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::showAction',)), array('_route' => 'categoryocassion_show'));
            }

            // categoryocassion_new
            if ($pathinfo === '/admin/ocassion/category/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::newAction',  '_route' => 'categoryocassion_new',);
            }

            // categoryocassion_create
            if ($pathinfo === '/admin/ocassion/category/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoryocassion_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::createAction',  '_route' => 'categoryocassion_create',);
            }
            not_categoryocassion_create:

            // categoryocassion_edit
            if (preg_match('#^/admin/ocassion/category/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::editAction',)), array('_route' => 'categoryocassion_edit'));
            }

            // categoryocassion_update
            if (preg_match('#^/admin/ocassion/category/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoryocassion_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::updateAction',)), array('_route' => 'categoryocassion_update'));
            }
            not_categoryocassion_update:

            // categoryocassion_delete
            if (preg_match('#^/admin/ocassion/category/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_categoryocassion_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\CategoryOcassionController::deleteAction',)), array('_route' => 'categoryocassion_delete'));
            }
            not_categoryocassion_delete:

        }

        if (0 === strpos($pathinfo, '/admin/bid')) {
            // bid
            if (rtrim($pathinfo, '/') === '/admin/bid') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'bid');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::indexAction',  '_route' => 'bid',);
            }

            // bid_show
            if (preg_match('#^/admin/bid/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::showAction',)), array('_route' => 'bid_show'));
            }

            // bid_new
            if ($pathinfo === '/admin/bid/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::newAction',  '_route' => 'bid_new',);
            }

            // bid_create
            if ($pathinfo === '/admin/bid/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bid_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::createAction',  '_route' => 'bid_create',);
            }
            not_bid_create:

            // bid_edit
            if (preg_match('#^/admin/bid/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::editAction',)), array('_route' => 'bid_edit'));
            }

            // bid_update
            if (preg_match('#^/admin/bid/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bid_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::updateAction',)), array('_route' => 'bid_update'));
            }
            not_bid_update:

            // bid_delete
            if (preg_match('#^/admin/bid/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_bid_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\BidController::deleteAction',)), array('_route' => 'bid_delete'));
            }
            not_bid_delete:

        }

        if (0 === strpos($pathinfo, '/admin/reservation')) {
            // reservation
            if (rtrim($pathinfo, '/') === '/admin/reservation') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reservation');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::indexAction',  '_route' => 'reservation',);
            }

            // reservation_show
            if (preg_match('#^/admin/reservation/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::showAction',)), array('_route' => 'reservation_show'));
            }

            // reservation_new
            if ($pathinfo === '/admin/reservation/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::newAction',  '_route' => 'reservation_new',);
            }

            // reservation_create
            if ($pathinfo === '/admin/reservation/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservation_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::createAction',  '_route' => 'reservation_create',);
            }
            not_reservation_create:

            // reservation_edit
            if (preg_match('#^/admin/reservation/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::editAction',)), array('_route' => 'reservation_edit'));
            }

            // reservation_update
            if (preg_match('#^/admin/reservation/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservation_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::updateAction',)), array('_route' => 'reservation_update'));
            }
            not_reservation_update:

            // reservation_delete
            if (preg_match('#^/admin/reservation/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_reservation_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\ReservationController::deleteAction',)), array('_route' => 'reservation_delete'));
            }
            not_reservation_delete:

        }

        if (0 === strpos($pathinfo, '/admin/ocassion')) {
            // ocassion
            if (rtrim($pathinfo, '/') === '/admin/ocassion') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ocassion');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::indexAction',  '_route' => 'ocassion',);
            }

            // ocassion_show
            if (preg_match('#^/admin/ocassion/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::showAction',)), array('_route' => 'ocassion_show'));
            }

            // ocassion_new
            if ($pathinfo === '/admin/ocassion/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::newAction',  '_route' => 'ocassion_new',);
            }

            // ocassion_create
            if ($pathinfo === '/admin/ocassion/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ocassion_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::createAction',  '_route' => 'ocassion_create',);
            }
            not_ocassion_create:

            // ocassion_edit
            if (preg_match('#^/admin/ocassion/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::editAction',)), array('_route' => 'ocassion_edit'));
            }

            // ocassion_update
            if (preg_match('#^/admin/ocassion/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ocassion_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::updateAction',)), array('_route' => 'ocassion_update'));
            }
            not_ocassion_update:

            // ocassion_delete
            if (preg_match('#^/admin/ocassion/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_ocassion_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\OcassionController::deleteAction',)), array('_route' => 'ocassion_delete'));
            }
            not_ocassion_delete:

        }

        if (0 === strpos($pathinfo, '/admin/venue')) {
            // venue
            if (rtrim($pathinfo, '/') === '/admin/venue') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venue');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::indexAction',  '_route' => 'venue',);
            }

            // venue_show
            if (preg_match('#^/admin/venue/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::showAction',)), array('_route' => 'venue_show'));
            }

            // venue_new
            if ($pathinfo === '/admin/venue/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::newAction',  '_route' => 'venue_new',);
            }

            // venue_create
            if ($pathinfo === '/admin/venue/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venue_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::createAction',  '_route' => 'venue_create',);
            }
            not_venue_create:

            // venue_edit
            if (preg_match('#^/admin/venue/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::editAction',)), array('_route' => 'venue_edit'));
            }

            // venue_update
            if (preg_match('#^/admin/venue/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venue_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::updateAction',)), array('_route' => 'venue_update'));
            }
            not_venue_update:

            // venue_delete
            if (preg_match('#^/admin/venue/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_venue_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\VenueController::deleteAction',)), array('_route' => 'venue_delete'));
            }
            not_venue_delete:

        }

        if (0 === strpos($pathinfo, '/admin/date')) {
            // datejust
            if (rtrim($pathinfo, '/') === '/admin/date') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'datejust');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::indexAction',  '_route' => 'datejust',);
            }

            // datejust_show
            if (preg_match('#^/admin/date/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::showAction',)), array('_route' => 'datejust_show'));
            }

            // datejust_new
            if ($pathinfo === '/admin/date/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::newAction',  '_route' => 'datejust_new',);
            }

            // datejust_create
            if ($pathinfo === '/admin/date/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_datejust_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::createAction',  '_route' => 'datejust_create',);
            }
            not_datejust_create:

            // datejust_edit
            if (preg_match('#^/admin/date/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::editAction',)), array('_route' => 'datejust_edit'));
            }

            // datejust_update
            if (preg_match('#^/admin/date/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_datejust_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::updateAction',)), array('_route' => 'datejust_update'));
            }
            not_datejust_update:

            // datejust_delete
            if (preg_match('#^/admin/date/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_datejust_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DateJustController::deleteAction',)), array('_route' => 'datejust_delete'));
            }
            not_datejust_delete:

        }

        if (0 === strpos($pathinfo, '/admin/member')) {
            // member
            if (rtrim($pathinfo, '/') === '/admin/member') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'member');
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::indexAction',  '_route' => 'member',);
            }

            // member_show
            if (preg_match('#^/admin/member/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::showAction',)), array('_route' => 'member_show'));
            }

            // member_new
            if ($pathinfo === '/admin/member/nuevo') {
                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::newAction',  '_route' => 'member_new',);
            }

            // member_create
            if ($pathinfo === '/admin/member/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_member_create;
                }

                return array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::createAction',  '_route' => 'member_create',);
            }
            not_member_create:

            // member_edit
            if (preg_match('#^/admin/member/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::editAction',)), array('_route' => 'member_edit'));
            }

            // member_update
            if (preg_match('#^/admin/member/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_member_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::updateAction',)), array('_route' => 'member_update'));
            }
            not_member_update:

            // member_delete
            if (preg_match('#^/admin/member/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_member_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\MemberController::deleteAction',)), array('_route' => 'member_delete'));
            }
            not_member_delete:

        }

        if (0 === strpos($pathinfo, '/user')) {
            // user
            if (rtrim($pathinfo, '/') === '/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'user');
                }

                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::indexAction',  '_route' => 'user',);
            }

            // user_show
            if (preg_match('#^/user/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::showAction',)), array('_route' => 'user_show'));
            }

            // user_new
            if ($pathinfo === '/user/nuevo') {
                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::newAction',  '_route' => 'user_new',);
            }

            // user_create
            if ($pathinfo === '/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_create;
                }

                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::createAction',  '_route' => 'user_create',);
            }
            not_user_create:

            // user_edit
            if (preg_match('#^/user/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::editAction',)), array('_route' => 'user_edit'));
            }

            // user_update
            if (preg_match('#^/user/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::updateAction',)), array('_route' => 'user_update'));
            }
            not_user_update:

            // user_delete
            if (preg_match('#^/user/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_user_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::deleteAction',)), array('_route' => 'user_delete'));
            }
            not_user_delete:

        }

        // usuario_login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\UserController::loginAction',  '_route' => 'usuario_login',);
        }

        // usuario_registro
        if ($pathinfo === '/identificar') {
            return array (  '_controller' => 'JVJUsuarioBundle:Default:registro',  '_route' => 'usuario_registro',);
        }

        // usuario_perfil
        if ($pathinfo === '/perfil') {
            return array (  '_controller' => 'AutoFrontendBundle:Default:perfil',  '_route' => 'usuario_perfil',);
        }

        // usuario_login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'usuario_login_check');
        }

        // usuario_logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'usuario_logout');
        }

        if (0 === strpos($pathinfo, '/admin/user/role')) {
            // role
            if (rtrim($pathinfo, '/') === '/admin/user/role') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'role');
                }

                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::indexAction',  '_route' => 'role',);
            }

            // role_show
            if (preg_match('#^/admin/user/role/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::showAction',)), array('_route' => 'role_show'));
            }

            // role_new
            if ($pathinfo === '/admin/user/role/nuevo') {
                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::newAction',  '_route' => 'role_new',);
            }

            // role_create
            if ($pathinfo === '/admin/user/role/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_role_create;
                }

                return array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::createAction',  '_route' => 'role_create',);
            }
            not_role_create:

            // role_edit
            if (preg_match('#^/admin/user/role/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::editAction',)), array('_route' => 'role_edit'));
            }

            // role_update
            if (preg_match('#^/admin/user/role/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_role_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::updateAction',)), array('_route' => 'role_update'));
            }
            not_role_update:

            // role_delete
            if (preg_match('#^/admin/user/role/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_role_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UserBundle\\Controller\\RoleController::deleteAction',)), array('_route' => 'role_delete'));
            }
            not_role_delete:

        }

        // just2_backend_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Just2\\BackendBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'just2_backend_homepage'));
        }

        if (0 === strpos($pathinfo, '/admin/country')) {
            // country
            if (rtrim($pathinfo, '/') === '/admin/country') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'country');
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::indexAction',  '_route' => 'country',);
            }

            // country_show
            if (preg_match('#^/admin/country/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::showAction',)), array('_route' => 'country_show'));
            }

            // country_new
            if ($pathinfo === '/admin/country/nuevo') {
                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::newAction',  '_route' => 'country_new',);
            }

            // country_create
            if ($pathinfo === '/admin/country/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_country_create;
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::createAction',  '_route' => 'country_create',);
            }
            not_country_create:

            // country_edit
            if (preg_match('#^/admin/country/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::editAction',)), array('_route' => 'country_edit'));
            }

            // country_update
            if (preg_match('#^/admin/country/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_country_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::updateAction',)), array('_route' => 'country_update'));
            }
            not_country_update:

            // country_delete
            if (preg_match('#^/admin/country/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_country_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\CountryController::deleteAction',)), array('_route' => 'country_delete'));
            }
            not_country_delete:

        }

        if (0 === strpos($pathinfo, '/admin/department')) {
            // department
            if (rtrim($pathinfo, '/') === '/admin/department') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'department');
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::indexAction',  '_route' => 'department',);
            }

            // department_show
            if (preg_match('#^/admin/department/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::showAction',)), array('_route' => 'department_show'));
            }

            // department_new
            if ($pathinfo === '/admin/department/nuevo') {
                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::newAction',  '_route' => 'department_new',);
            }

            // department_create
            if ($pathinfo === '/admin/department/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_department_create;
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::createAction',  '_route' => 'department_create',);
            }
            not_department_create:

            // department_edit
            if (preg_match('#^/admin/department/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::editAction',)), array('_route' => 'department_edit'));
            }

            // department_update
            if (preg_match('#^/admin/department/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_department_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::updateAction',)), array('_route' => 'department_update'));
            }
            not_department_update:

            // department_delete
            if (preg_match('#^/admin/department/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_department_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DepartmentController::deleteAction',)), array('_route' => 'department_delete'));
            }
            not_department_delete:

        }

        if (0 === strpos($pathinfo, '/admin/district')) {
            // district
            if (rtrim($pathinfo, '/') === '/admin/district') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'district');
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::indexAction',  '_route' => 'district',);
            }

            // district_show
            if (preg_match('#^/admin/district/(?P<id>[^/]+)/ver$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::showAction',)), array('_route' => 'district_show'));
            }

            // district_new
            if ($pathinfo === '/admin/district/nuevo') {
                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::newAction',  '_route' => 'district_new',);
            }

            // district_create
            if ($pathinfo === '/admin/district/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_district_create;
                }

                return array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::createAction',  '_route' => 'district_create',);
            }
            not_district_create:

            // district_edit
            if (preg_match('#^/admin/district/(?P<id>[^/]+)/editar$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::editAction',)), array('_route' => 'district_edit'));
            }

            // district_update
            if (preg_match('#^/admin/district/(?P<id>[^/]+)/cambiar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_district_update;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::updateAction',)), array('_route' => 'district_update'));
            }
            not_district_update:

            // district_delete
            if (preg_match('#^/admin/district/(?P<id>[^/]+)/eliminar$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_district_delete;
                }

                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'JVJ\\UtilBundle\\Controller\\DistrictController::deleteAction',)), array('_route' => 'district_delete'));
            }
            not_district_delete:

        }

        // JVJPlantillaBundle_homepage
        if ($pathinfo === '/ayuda') {
            return array (  '_controller' => 'JVJ\\PlantillaBundle\\Controller\\DefaultController::helpAction',  '_route' => 'JVJPlantillaBundle_homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
