<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($rawPathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
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

        // espace_platform_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'espace_platform_homepage');
            }

            return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::show_offreAction',  '_route' => 'espace_platform_homepage',);
        }

        if (0 === strpos($pathinfo, '/offre')) {
            // EP_n_offre
            if ('/offre/new' === $pathinfo) {
                return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::n_offreAction',  '_route' => 'EP_n_offre',);
            }

            if (0 === strpos($pathinfo, '/offre/s')) {
                // EP_show_offre
                if ('/offre/show' === $pathinfo) {
                    return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::show_offreAction',  '_route' => 'EP_show_offre',);
                }

                // EP_search_offre
                if ('/offre/search' === $pathinfo) {
                    return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::search_offreAction',  '_route' => 'EP_search_offre',);
                }

                // EP_entro_offre_soumis
                if (0 === strpos($pathinfo, '/offre/soumis') && preg_match('#^/offre/soumis/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_entro_offre_soumis')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::soumisAction',));
                }

            }

            // EP_update_offre
            if (0 === strpos($pathinfo, '/offre/update') && preg_match('#^/offre/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_update_offre')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::update_offreAction',));
            }

            if (0 === strpos($pathinfo, '/offre/d')) {
                // EP_delete_offre
                if (0 === strpos($pathinfo, '/offre/delete') && preg_match('#^/offre/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_delete_offre')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::delete_offreAction',));
                }

                // EP_details_offre
                if (0 === strpos($pathinfo, '/offre/details') && preg_match('#^/offre/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_details_offre')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::detailsAction',));
                }

                // EP_offre_dupliquer
                if (0 === strpos($pathinfo, '/offre/dupliquer') && preg_match('#^/offre/dupliquer/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_offre_dupliquer')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::dupliquerAction',));
                }

            }

            // EP_apply_offre
            if (0 === strpos($pathinfo, '/offre/apply') && preg_match('#^/offre/apply/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_apply_offre')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::applyAction',));
            }

            // EP_entro_offre_archiver
            if (0 === strpos($pathinfo, '/offre/archiver') && preg_match('#^/offre/archiver/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_entro_offre_archiver')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::archiverAction',));
            }

            // EP_in_apply_offre
            if (0 === strpos($pathinfo, '/offre/in_apply') && preg_match('#^/offre/in_apply/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_in_apply_offre')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::in_applyAction',));
            }

            // EP_candidats_offre_show
            if (0 === strpos($pathinfo, '/offre/candidats') && preg_match('#^/offre/candidats/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_candidats_offre_show')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::show_candidatsAction',));
            }

            // EP_admin_offre_valider
            if (0 === strpos($pathinfo, '/offre/valider') && preg_match('#^/offre/valider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_admin_offre_valider')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::validerAction',));
            }

            // EP_admin_offre_refuser
            if (0 === strpos($pathinfo, '/offre/refuser') && preg_match('#^/offre/refuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_admin_offre_refuser')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\OffreController::refuserAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/task')) {
            // EP_n_task
            if ('/task/new' === $pathinfo) {
                return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\TaskController::newAction',  '_route' => 'EP_n_task',);
            }

            // EP_show_task
            if ('/task/show' === $pathinfo) {
                return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\TaskController::showAction',  '_route' => 'EP_show_task',);
            }

            // EP_task_edit
            if (0 === strpos($pathinfo, '/task/edit') && preg_match('#^/task/edit/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EP_task_edit')), array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\TaskController::editAction',));
            }

        }

        // EP_cvtheque_search
        if ('/cvtheque' === $pathinfo) {
            return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\CvthequeController::searchAction',  '_route' => 'EP_cvtheque_search',);
        }

        if (0 === strpos($pathinfo, '/candidat')) {
            // espace_details_candidat
            if (0 === strpos($pathinfo, '/candidat/details') && preg_match('#^/candidat/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_details_candidat')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\EtudiantController::detailsAction',));
            }

            // EU_new_etudiantCV
            if (preg_match('#^/candidat/(?P<id>[^/]++)/new/CV$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EU_new_etudiantCV')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\EtudiantController::edit_CVAction',));
            }

            // EU_create_CV
            if (preg_match('#^/candidat/(?P<id>[^/]++)/create/CV$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EU_create_CV')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\EtudiantController::create_CVAction',));
            }

            // EU_download_CV
            if (preg_match('#^/candidat/(?P<id>[^/]++)/download/CV$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EU_download_CV')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\EtudiantController::download_CvAction',));
            }

        }

        // espace_user_homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'espace_user_homepage');
            }

            return array (  '_controller' => 'Espace\\PlatformBundle\\Controller\\DefaultController::indexAction',  '_route' => 'espace_user_homepage',);
        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // espace_show_user
            if ('/admin/user/show' === $pathinfo) {
                return array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::show_userAction',  '_route' => 'espace_show_user',);
            }

            // EU_valider_user
            if (0 === strpos($pathinfo, '/admin/user/valider') && preg_match('#^/admin/user/valider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EU_valider_user')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::valider_userAction',));
            }

            // EU_devalider_user
            if (0 === strpos($pathinfo, '/admin/user/devalider') && preg_match('#^/admin/user/devalider/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'EU_devalider_user')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::devalider_userAction',));
            }

            // espace_delete_user
            if (0 === strpos($pathinfo, '/admin/user/delete') && preg_match('#^/admin/user/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_delete_user')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::delete_userAction',));
            }

        }

        // EU_new_alumni
        if ('/alumni/new' === $pathinfo) {
            return array (  '_controller' => 'Espace\\UserBundle\\Controller\\AlumniController::n_alumniAction',  '_route' => 'EU_new_alumni',);
        }

        if (0 === strpos($pathinfo, '/e')) {
            // espace_details_entreprise
            if (0 === strpos($pathinfo, '/entreprise/details') && preg_match('#^/entreprise/details/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_details_entreprise')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\EntrepriseController::detailsAction',));
            }

            // EU_new_entreprise
            if ('/entreprise/new' === $pathinfo) {
                return array (  '_controller' => 'Espace\\UserBundle\\Controller\\EntrepriseController::n_entrepriseAction',  '_route' => 'EU_new_entreprise',);
            }

            // EU_new_etudiant
            if ('/etudiant/new' === $pathinfo) {
                return array (  '_controller' => 'Espace\\UserBundle\\Controller\\EtudiantController::n_etudiantAction',  '_route' => 'EU_new_etudiant',);
            }

        }

        // espace_show_register
        if ('/inscription' === $pathinfo) {
            return array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::types_profilAction',  '_route' => 'espace_show_register',);
        }

        // espace_update_user
        if (0 === strpos($pathinfo, '/user/update') && preg_match('#^/user/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'espace_update_user')), array (  '_controller' => 'Espace\\UserBundle\\Controller\\UserController::update_userAction',));
        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/login')) {
            // login
            if ('/login' === $pathinfo) {
                return array (  '_controller' => 'Espace\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login',);
            }

            // login_check
            if ('/login_check' === $pathinfo) {
                return array('_route' => 'login_check');
            }

        }

        // logout
        if ('/logout' === $pathinfo) {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
