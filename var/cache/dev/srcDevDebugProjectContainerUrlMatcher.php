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
            default:
                $routes = array(
                    '/acteur/' => array(array('_route' => 'acteur_index', '_controller' => 'App\\Controller\\ActeurController::index'), null, array('GET' => 0), null),
                    '/acteur/new' => array(array('_route' => 'acteur_new', '_controller' => 'App\\Controller\\ActeurController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/film/' => array(array('_route' => 'film_index', '_controller' => 'App\\Controller\\FilmController::index'), null, array('GET' => 0), null),
                    '/film/new' => array(array('_route' => 'film_new', '_controller' => 'App\\Controller\\FilmController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/genre/' => array(array('_route' => 'genre_index', '_controller' => 'App\\Controller\\GenreController::index'), null, array('GET' => 0), null),
                    '/genre/new' => array(array('_route' => 'genre_new', '_controller' => 'App\\Controller\\GenreController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/realisateur/' => array(array('_route' => 'realisateur_index', '_controller' => 'App\\Controller\\RealisateurController::index'), null, array('GET' => 0), null),
                    '/realisateur/new' => array(array('_route' => 'realisateur_new', '_controller' => 'App\\Controller\\RealisateurController::new'), null, array('GET' => 0, 'POST' => 1), null),
                    '/_profiler/' => array(array('_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'), null, null, null),
                    '/_profiler/search' => array(array('_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'), null, null, null),
                    '/_profiler/search_bar' => array(array('_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'), null, null, null),
                    '/_profiler/phpinfo' => array(array('_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'), null, null, null),
                    '/_profiler/open' => array(array('_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'), null, null, null),
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
                    .'|/acteur/([^/]++)(?'
                        .'|(*:26)'
                        .'|/edit(*:38)'
                        .'|(*:45)'
                    .')'
                    .'|/film/([^/]++)(?'
                        .'|(*:70)'
                        .'|/edit(*:82)'
                        .'|(*:89)'
                    .')'
                    .'|/genre/([^/]++)(?'
                        .'|(*:115)'
                        .'|/edit(*:128)'
                        .'|(*:136)'
                    .')'
                    .'|/realisateur/([^/]++)(?'
                        .'|(*:169)'
                        .'|/edit(*:182)'
                        .'|(*:190)'
                    .')'
                    .'|/_(?'
                        .'|error/(\\d+)(?:\\.([^/]++))?(*:230)'
                        .'|wdt/([^/]++)(*:250)'
                        .'|profiler/([^/]++)(?'
                            .'|/(?'
                                .'|search/results(*:296)'
                                .'|router(*:310)'
                                .'|exception(?'
                                    .'|(*:330)'
                                    .'|\\.css(*:343)'
                                .')'
                            .')'
                            .'|(*:353)'
                        .')'
                    .')'
                .')$}sD',
        );

        foreach ($regexList as $offset => $regex) {
            while (preg_match($regex, $matchedPathinfo, $matches)) {
                switch ($m = (int) $matches['MARK']) {
                    default:
                        $routes = array(
                            26 => array(array('_route' => 'acteur_show', '_controller' => 'App\\Controller\\ActeurController::show'), array('idActeur'), array('GET' => 0), null),
                            38 => array(array('_route' => 'acteur_edit', '_controller' => 'App\\Controller\\ActeurController::edit'), array('idActeur'), array('GET' => 0, 'POST' => 1), null),
                            45 => array(array('_route' => 'acteur_delete', '_controller' => 'App\\Controller\\ActeurController::delete'), array('idActeur'), array('DELETE' => 0), null),
                            70 => array(array('_route' => 'film_show', '_controller' => 'App\\Controller\\FilmController::show'), array('idFilm'), array('GET' => 0), null),
                            82 => array(array('_route' => 'film_edit', '_controller' => 'App\\Controller\\FilmController::edit'), array('idFilm'), array('GET' => 0, 'POST' => 1), null),
                            89 => array(array('_route' => 'film_delete', '_controller' => 'App\\Controller\\FilmController::delete'), array('idFilm'), array('DELETE' => 0), null),
                            115 => array(array('_route' => 'genre_show', '_controller' => 'App\\Controller\\GenreController::show'), array('idGenre'), array('GET' => 0), null),
                            128 => array(array('_route' => 'genre_edit', '_controller' => 'App\\Controller\\GenreController::edit'), array('idGenre'), array('GET' => 0, 'POST' => 1), null),
                            136 => array(array('_route' => 'genre_delete', '_controller' => 'App\\Controller\\GenreController::delete'), array('idGenre'), array('DELETE' => 0), null),
                            169 => array(array('_route' => 'realisateur_show', '_controller' => 'App\\Controller\\RealisateurController::show'), array('idRealisateur'), array('GET' => 0), null),
                            182 => array(array('_route' => 'realisateur_edit', '_controller' => 'App\\Controller\\RealisateurController::edit'), array('idRealisateur'), array('GET' => 0, 'POST' => 1), null),
                            190 => array(array('_route' => 'realisateur_delete', '_controller' => 'App\\Controller\\RealisateurController::delete'), array('idRealisateur'), array('DELETE' => 0), null),
                            230 => array(array('_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'), array('code', '_format'), null, null),
                            250 => array(array('_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'), array('token'), null, null),
                            296 => array(array('_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'), array('token'), null, null),
                            310 => array(array('_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'), array('token'), null, null),
                            330 => array(array('_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception::showAction'), array('token'), null, null),
                            343 => array(array('_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception::cssAction'), array('token'), null, null),
                            353 => array(array('_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'), array('token'), null, null),
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

                if (353 === $m) {
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
