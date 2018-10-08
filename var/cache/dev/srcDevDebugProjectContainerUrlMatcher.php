<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = $allowSchemes = array();
        if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
            return $ret;
        }
        if ($allow) {
            throw new MethodNotAllowedException(array_keys($allow));
        }
        if (!in_array($this->context->getMethod(), array('HEAD', 'GET'), true)) {
            // no-op
        } elseif ($allowSchemes) {
            redirect_scheme:
            $scheme = $this->context->getScheme();
            $this->context->setScheme(key($allowSchemes));
            try {
                if ($ret = $this->doMatch($pathinfo)) {
                    return $this->redirect($pathinfo, $ret['_route'], $this->context->getScheme()) + $ret;
                }
            } finally {
                $this->context->setScheme($scheme);
            }
        } elseif ('/' !== $pathinfo) {
            $pathinfo = '/' !== $pathinfo[-1] ? $pathinfo.'/' : substr($pathinfo, 0, -1);
            if ($ret = $this->doMatch($pathinfo, $allow, $allowSchemes)) {
                return $this->redirect($pathinfo, $ret['_route']) + $ret;
            }
            if ($allowSchemes) {
                goto redirect_scheme;
            }
        }

        throw new ResourceNotFoundException();
    }

    private function doMatch(string $rawPathinfo, array &$allow = array(), array &$allowSchemes = array()): ?array
    {
        $allow = $allowSchemes = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $requestMethod = $canonicalMethod = $context->getMethod();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }

        switch ($pathinfo) {
            case '/':
                // HomePage
                return array('_route' => 'HomePage', '_controller' => 'App\\Controller\\IndexController::index');
                // homepage
                return array('_route' => 'homepage', '_controller' => 'App\\Controller\\IndexController::index');
                break;
            default:
                $routes = array(
                    '/product/' => array(array('_route' => 'ProductProductPage', '_controller' => 'App\\Controller\\ProductController::index'), null, null, null),
                    '/purchasehistory/' => array(array('_route' => 'PurchaseHistoryPage', '_controller' => 'App\\Controller\\PurchaseController::purchase_show'), null, null, null),
                    '/tracking/data' => array(array('_route' => 'ProductTrackingPage', '_controller' => 'App\\Controller\\TrackingController::index'), null, null, null),
                    '/registration/user_register' => array(array('_route' => 'UserRegisterPage', '_controller' => 'App\\Controller\\UserController::user_register'), null, null, null),
                    '/user/create_base_user' => array(array('_route' => 'CreateBaseUserPage', '_controller' => 'App\\Controller\\UserController::create_base_user'), null, null, null),
                    '/userList/users' => array(array('_route' => 'UserListUsersPage', '_controller' => 'App\\Controller\\UserController::userList_users'), null, null, null),
                    '/userList/sellers' => array(array('_route' => 'UserListSellersPage', '_controller' => 'App\\Controller\\UserController::userList_sellers'), null, null, null),
                    '/userList/admins' => array(array('_route' => 'UserListAdminsPage', '_controller' => 'App\\Controller\\UserController::userList_admins'), null, null, null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
                    '/user' => array(array('_route' => 'userpage', '_controller' => 'App\\Controller\\UserController::index'), null, null, null),
                    '/login' => array(array('_route' => 'fos_user_security_login', '_controller' => 'fos_user.security.controller:loginAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/login_check' => array(array('_route' => 'fos_user_security_check', '_controller' => 'fos_user.security.controller:checkAction'), null, array('POST' => 0), null),
                    '/logout' => array(array('_route' => 'fos_user_security_logout', '_controller' => 'fos_user.security.controller:logoutAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/profile/' => array(array('_route' => 'fos_user_profile_show', '_controller' => 'fos_user.profile.controller:showAction'), null, array('GET' => 0), null),
                    '/profile/edit' => array(array('_route' => 'fos_user_profile_edit', '_controller' => 'fos_user.profile.controller:editAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/' => array(array('_route' => 'fos_user_registration_register', '_controller' => 'fos_user.registration.controller:registerAction'), null, array('GET' => 0, 'POST' => 1), null),
                    '/register/check-email' => array(array('_route' => 'fos_user_registration_check_email', '_controller' => 'App\\Controller\\RegistrationController::checkEmailAction'), null, array('GET' => 0), null),
                    '/register/confirmed' => array(array('_route' => 'fos_user_registration_confirmed', '_controller' => 'App\\Controller\\RegistrationController::confirmedAction'), null, array('GET' => 0), null),
                    '/resetting/request' => array(array('_route' => 'fos_user_resetting_request', '_controller' => 'fos_user.resetting.controller:requestAction'), null, array('GET' => 0), null),
                    '/resetting/send-email' => array(array('_route' => 'fos_user_resetting_send_email', '_controller' => 'fos_user.resetting.controller:sendEmailAction'), null, array('POST' => 0), null),
                    '/resetting/check-email' => array(array('_route' => 'fos_user_resetting_check_email', '_controller' => 'fos_user.resetting.controller:checkEmailAction'), null, array('GET' => 0), null),
                    '/profile/change-password' => array(array('_route' => 'fos_user_change_password', '_controller' => 'fos_user.change_password.controller:changePasswordAction'), null, array('GET' => 0, 'POST' => 1), null),
                );

                if (!isset($routes[$pathinfo])) {
                    break;
                }
                list($ret, $requiredHost, $requiredMethods, $requiredSchemes) = $routes[$pathinfo];

                $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                    if ($hasRequiredScheme) {
                        $allow += $requiredMethods;
                    }
                    break;
                }
                if (!$hasRequiredScheme) {
                    $allowSchemes += $requiredSchemes;
                    break;
                }

                return $ret;
        }

        $matchedPathinfo = $pathinfo;
        $regexList = array(
            0 => '{^(?'
                    .'|/product/edit/([^/]+)&([^/]++)(*:37)'
                    .'|/tracking/(?'
                        .'|([^/]+)&([^/]++)(*:73)'
                        .'|delete/([^/]+)&([^/]++)(*:103)'
                        .'|edit/([^/]+)&([^/]++)(*:132)'
                    .')'
                    .'|/re(?'
                        .'|gist(?'
                            .'|ration/user_confirm/([^/]++)(?'
                                .'|(*:185)'
                            .')'
                            .'|er/confirm/([^/]++)(*:213)'
                        .')'
                        .'|setting/reset/([^/]++)(*:244)'
                    .')'
                    .'|/userList/(?'
                        .'|edit/([^/]+)&([^/]++)(*:287)'
                        .'|delete/([^/]+)&([^/]++)(*:318)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:358)'
                        .'|wdt/([^/]++)(*:378)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:424)'
                                .'|router(*:438)'
                                .'|exception(?'
                                    .'|(*:458)'
                                    .'|\\.css(*:471)'
                                .')'
                            .')'
                            .'|(*:481)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    case 185:
                        $matches = array('token' => $matches[1] ?? null);

                        // UserconfirmPage
                        return $this->mergeDefaults(array('_route' => 'UserconfirmPage') + $matches, array('_controller' => 'App\\Controller\\UserController::registration_confirm'));

                        // registration_confirm
                        return $this->mergeDefaults(array('_route' => 'registration_confirm') + $matches, array('_controller' => 'App\\Controller\\UserController::registration_confirm'));

                        break;
                    default:
                        $routes = array(
                            37 => array(array('_route' => 'Productapp_product_product_edit', '_controller' => 'App\\Controller\\ProductController::product_edit'), array('product_id', 'page'), null, null),
                            73 => array(array('_route' => 'ProductShowPage', '_controller' => 'App\\Controller\\TrackingController::show'), array('tracking_id', 'page'), null, null),
                            103 => array(array('_route' => 'ProductProductEdit', '_controller' => 'App\\Controller\\TrackingController::tracking_delete'), array('tracking_id', 'page'), null, null),
                            132 => array(array('_route' => 'Productapp_tracking_tracking_edit', '_controller' => 'App\\Controller\\TrackingController::tracking_edit'), array('tracking_id', 'page'), null, null),
                            213 => array(array('_route' => 'fos_user_registration_confirm', '_controller' => 'App\\Controller\\RegistrationController::confirmAction'), array('token'), array('GET' => 0), null),
                            244 => array(array('_route' => 'fos_user_resetting_reset', '_controller' => 'fos_user.resetting.controller:resetAction'), array('token'), array('GET' => 0, 'POST' => 1), null),
                            287 => array(array('_route' => 'app_user_userlist_edit', '_controller' => 'App\\Controller\\UserController::userList_edit'), array('user_id', 'page'), null, null),
                            318 => array(array('_route' => 'app_user_userlist_delete', '_controller' => 'App\\Controller\\UserController::userList_delete'), array('user_id', 'page'), null, null),
                            358 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            378 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            424 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            438 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            458 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            471 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            481 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
                        );

                        list($ret, $vars, $requiredMethods, $requiredSchemes) = $routes[$m];

                        foreach ($vars as $i => $v) {
                            if (isset($matches[1 + $i])) {
                                $ret[$v] = $matches[1 + $i];
                            }
                        }

                        $hasRequiredScheme = !$requiredSchemes || isset($requiredSchemes[$context->getScheme()]);
                        if ($requiredMethods && !isset($requiredMethods[$canonicalMethod]) && !isset($requiredMethods[$requestMethod])) {
                            if ($hasRequiredScheme) {
                                $allow += $requiredMethods;
                            }
                            break;
                        }
                        if (!$hasRequiredScheme) {
                            $allowSchemes += $requiredSchemes;
                            break;
                        }

                        return $ret;
                }

                if (481 === $m) {
                    break;
                }
                $regex = substr_replace($regex, 'F', $m - $offset, 1 + strlen($m));
                $offset += strlen($m);
            }
        }
        if ('/' === $pathinfo && !$allow) {
            throw new Symfony\Component\Routing\Exception\NoConfigurationException();
        }

        return null;
    }
}
