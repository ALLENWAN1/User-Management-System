<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class srcDevDebugProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;
    private $defaultLocale;

    public function __construct(RequestContext $context, LoggerInterface $logger = null, string $defaultLocale = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        $this->defaultLocale = $defaultLocale;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'HomePage' => array(array(), array('_controller' => 'App\\Controller\\IndexController::index'), array(), array(array('text', '/')), array(), array()),
        'ProductProductPage' => array(array(), array('_controller' => 'App\\Controller\\ProductController::index'), array(), array(array('text', '/product/')), array(), array()),
        'Productapp_product_product_edit' => array(array('product_id', 'page'), array('_controller' => 'App\\Controller\\ProductController::product_edit'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'product_id'), array('text', '/product/edit')), array(), array()),
        'PurchaseHistoryPage' => array(array(), array('_controller' => 'App\\Controller\\PurchaseController::purchase_show'), array(), array(array('text', '/purchasehistory/')), array(), array()),
        'ProductShowPage' => array(array('tracking_id', 'page'), array('_controller' => 'App\\Controller\\TrackingController::show'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'tracking_id'), array('text', '/tracking')), array(), array()),
        'ProductTrackingPage' => array(array(), array('_controller' => 'App\\Controller\\TrackingController::index'), array(), array(array('text', '/tracking/data')), array(), array()),
        'ProductProductEdit' => array(array('tracking_id', 'page'), array('_controller' => 'App\\Controller\\TrackingController::tracking_delete'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'tracking_id'), array('text', '/tracking/delete')), array(), array()),
        'Productapp_tracking_tracking_edit' => array(array('tracking_id', 'page'), array('_controller' => 'App\\Controller\\TrackingController::tracking_edit'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'tracking_id'), array('text', '/tracking/edit')), array(), array()),
        'UserRegisterPage' => array(array(), array('_controller' => 'App\\Controller\\UserController::user_register'), array(), array(array('text', '/registration/user_register')), array(), array()),
        'UserconfirmPage' => array(array('token'), array('_controller' => 'App\\Controller\\UserController::registration_confirm'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/registration/user_confirm')), array(), array()),
        'CreateBaseUserPage' => array(array(), array('_controller' => 'App\\Controller\\UserController::create_base_user'), array(), array(array('text', '/user/create_base_user')), array(), array()),
        'UserListUsersPage' => array(array(), array('_controller' => 'App\\Controller\\UserController::userList_users'), array(), array(array('text', '/userList/users')), array(), array()),
        'UserListSellersPage' => array(array(), array('_controller' => 'App\\Controller\\UserController::userList_sellers'), array(), array(array('text', '/userList/sellers')), array(), array()),
        'UserListAdminsPage' => array(array(), array('_controller' => 'App\\Controller\\UserController::userList_admins'), array(), array(array('text', '/userList/admins')), array(), array()),
        'app_user_userlist_edit' => array(array('user_id', 'page'), array('_controller' => 'App\\Controller\\UserController::userList_edit'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'user_id'), array('text', '/userList/edit')), array(), array()),
        'app_user_userlist_delete' => array(array('user_id', 'page'), array('_controller' => 'App\\Controller\\UserController::userList_delete'), array(), array(array('variable', '', '[^/]++', 'page'), array('text', '&'), array('variable', '/', '[^/]+', 'user_id'), array('text', '/userList/delete')), array(), array()),
        '_twig_error_test' => array(array('code', '_format'), array('_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code' => '\\d+'), array(array('variable', '.', '[^/]++', '_format'), array('variable', '/', '\\d+', 'code'), array('text', '/_error')), array(), array()),
        '_wdt' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::toolbarAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_wdt')), array(), array()),
        '_profiler_home' => array(array(), array('_controller' => 'web_profiler.controller.profiler::homeAction'), array(), array(array('text', '/_profiler/')), array(), array()),
        '_profiler_search' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchAction'), array(), array(array('text', '/_profiler/search')), array(), array()),
        '_profiler_search_bar' => array(array(), array('_controller' => 'web_profiler.controller.profiler::searchBarAction'), array(), array(array('text', '/_profiler/search_bar')), array(), array()),
        '_profiler_phpinfo' => array(array(), array('_controller' => 'web_profiler.controller.profiler::phpinfoAction'), array(), array(array('text', '/_profiler/phpinfo')), array(), array()),
        '_profiler_search_results' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array(), array(array('text', '/search/results'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_open_file' => array(array(), array('_controller' => 'web_profiler.controller.profiler::openAction'), array(), array(array('text', '/_profiler/open')), array(), array()),
        '_profiler' => array(array('token'), array('_controller' => 'web_profiler.controller.profiler::panelAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_router' => array(array('token'), array('_controller' => 'web_profiler.controller.router::panelAction'), array(), array(array('text', '/router'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::showAction'), array(), array(array('text', '/exception'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        '_profiler_exception_css' => array(array('token'), array('_controller' => 'web_profiler.controller.exception::cssAction'), array(), array(array('text', '/exception.css'), array('variable', '/', '[^/]++', 'token'), array('text', '/_profiler')), array(), array()),
        'homepage' => array(array(), array('_controller' => 'App\\Controller\\IndexController::index'), array(), array(array('text', '/')), array(), array()),
        'userpage' => array(array(), array('_controller' => 'App\\Controller\\UserController::index'), array(), array(array('text', '/user')), array(), array()),
        'fos_user_security_login' => array(array(), array('_controller' => 'fos_user.security.controller:loginAction'), array(), array(array('text', '/login')), array(), array()),
        'fos_user_security_check' => array(array(), array('_controller' => 'fos_user.security.controller:checkAction'), array(), array(array('text', '/login_check')), array(), array()),
        'fos_user_security_logout' => array(array(), array('_controller' => 'fos_user.security.controller:logoutAction'), array(), array(array('text', '/logout')), array(), array()),
        'fos_user_profile_show' => array(array(), array('_controller' => 'fos_user.profile.controller:showAction'), array(), array(array('text', '/profile/')), array(), array()),
        'fos_user_profile_edit' => array(array(), array('_controller' => 'fos_user.profile.controller:editAction'), array(), array(array('text', '/profile/edit')), array(), array()),
        'fos_user_registration_register' => array(array(), array('_controller' => 'fos_user.registration.controller:registerAction'), array(), array(array('text', '/register/')), array(), array()),
        'fos_user_registration_check_email' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::checkEmailAction'), array(), array(array('text', '/register/check-email')), array(), array()),
        'fos_user_registration_confirm' => array(array('token'), array('_controller' => 'App\\Controller\\RegistrationController::confirmAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/register/confirm')), array(), array()),
        'fos_user_registration_confirmed' => array(array(), array('_controller' => 'App\\Controller\\RegistrationController::confirmedAction'), array(), array(array('text', '/register/confirmed')), array(), array()),
        'fos_user_resetting_request' => array(array(), array('_controller' => 'fos_user.resetting.controller:requestAction'), array(), array(array('text', '/resetting/request')), array(), array()),
        'fos_user_resetting_send_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:sendEmailAction'), array(), array(array('text', '/resetting/send-email')), array(), array()),
        'fos_user_resetting_check_email' => array(array(), array('_controller' => 'fos_user.resetting.controller:checkEmailAction'), array(), array(array('text', '/resetting/check-email')), array(), array()),
        'fos_user_resetting_reset' => array(array('token'), array('_controller' => 'fos_user.resetting.controller:resetAction'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/resetting/reset')), array(), array()),
        'fos_user_change_password' => array(array(), array('_controller' => 'fos_user.change_password.controller:changePasswordAction'), array(), array(array('text', '/profile/change-password')), array(), array()),
        'registration_confirm' => array(array('token'), array('_controller' => 'App\\Controller\\UserController::registration_confirm'), array(), array(array('variable', '/', '[^/]++', 'token'), array('text', '/registration/user_confirm')), array(), array()),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        $locale = $parameters['_locale']
            ?? $this->context->getParameter('_locale')
            ?: $this->defaultLocale;

        if (null !== $locale && (self::$declaredRoutes[$name.'.'.$locale][1]['_canonical_route'] ?? null) === $name) {
            unset($parameters['_locale']);
            $name .= '.'.$locale;
        } elseif (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
