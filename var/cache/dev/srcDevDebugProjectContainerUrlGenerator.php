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
        'acteur_index' => array(array(), array('_controller' => 'App\\Controller\\ActeurController::index'), array(), array(array('text', '/acteur/')), array(), array()),
        'acteur_new' => array(array(), array('_controller' => 'App\\Controller\\ActeurController::new'), array(), array(array('text', '/acteur/new')), array(), array()),
        'acteur_show' => array(array('idActeur'), array('_controller' => 'App\\Controller\\ActeurController::show'), array(), array(array('variable', '/', '[^/]++', 'idActeur'), array('text', '/acteur')), array(), array()),
        'acteur_edit' => array(array('idActeur'), array('_controller' => 'App\\Controller\\ActeurController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'idActeur'), array('text', '/acteur')), array(), array()),
        'acteur_delete' => array(array('idActeur'), array('_controller' => 'App\\Controller\\ActeurController::delete'), array(), array(array('variable', '/', '[^/]++', 'idActeur'), array('text', '/acteur')), array(), array()),
        'film_index' => array(array(), array('_controller' => 'App\\Controller\\FilmController::index'), array(), array(array('text', '/film/')), array(), array()),
        'film_new' => array(array(), array('_controller' => 'App\\Controller\\FilmController::new'), array(), array(array('text', '/film/new')), array(), array()),
        'film_show' => array(array('idFilm'), array('_controller' => 'App\\Controller\\FilmController::show'), array(), array(array('variable', '/', '[^/]++', 'idFilm'), array('text', '/film')), array(), array()),
        'film_edit' => array(array('idFilm'), array('_controller' => 'App\\Controller\\FilmController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'idFilm'), array('text', '/film')), array(), array()),
        'film_delete' => array(array('idFilm'), array('_controller' => 'App\\Controller\\FilmController::delete'), array(), array(array('variable', '/', '[^/]++', 'idFilm'), array('text', '/film')), array(), array()),
        'genre_index' => array(array(), array('_controller' => 'App\\Controller\\GenreController::index'), array(), array(array('text', '/genre/')), array(), array()),
        'genre_new' => array(array(), array('_controller' => 'App\\Controller\\GenreController::new'), array(), array(array('text', '/genre/new')), array(), array()),
        'genre_show' => array(array('idGenre'), array('_controller' => 'App\\Controller\\GenreController::show'), array(), array(array('variable', '/', '[^/]++', 'idGenre'), array('text', '/genre')), array(), array()),
        'genre_edit' => array(array('idGenre'), array('_controller' => 'App\\Controller\\GenreController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'idGenre'), array('text', '/genre')), array(), array()),
        'genre_delete' => array(array('idGenre'), array('_controller' => 'App\\Controller\\GenreController::delete'), array(), array(array('variable', '/', '[^/]++', 'idGenre'), array('text', '/genre')), array(), array()),
        'realisateur_index' => array(array(), array('_controller' => 'App\\Controller\\RealisateurController::index'), array(), array(array('text', '/realisateur/')), array(), array()),
        'realisateur_new' => array(array(), array('_controller' => 'App\\Controller\\RealisateurController::new'), array(), array(array('text', '/realisateur/new')), array(), array()),
        'realisateur_show' => array(array('idRealisateur'), array('_controller' => 'App\\Controller\\RealisateurController::show'), array(), array(array('variable', '/', '[^/]++', 'idRealisateur'), array('text', '/realisateur')), array(), array()),
        'realisateur_edit' => array(array('idRealisateur'), array('_controller' => 'App\\Controller\\RealisateurController::edit'), array(), array(array('text', '/edit'), array('variable', '/', '[^/]++', 'idRealisateur'), array('text', '/realisateur')), array(), array()),
        'realisateur_delete' => array(array('idRealisateur'), array('_controller' => 'App\\Controller\\RealisateurController::delete'), array(), array(array('variable', '/', '[^/]++', 'idRealisateur'), array('text', '/realisateur')), array(), array()),
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
