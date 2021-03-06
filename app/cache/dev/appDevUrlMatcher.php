<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
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

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // new_article
        if ($pathinfo === '/newArticle') {
            return array (  '_controller' => 'Dwm\\FileBundle\\Controller\\UploadController::uploadArticleAction',  '_route' => 'new_article',);
        }

        // dwm_catalogue_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'dwm_catalogue_default_index')), array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::indexAction',));
        }

        // l
        if ($pathinfo === '/listFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listFamilleAction',  '_route' => 'l',);
        }

        // dwm_catalogue_default_formfamille
        if ($pathinfo === '/formFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::formFamilleAction',  '_route' => 'dwm_catalogue_default_formfamille',);
        }

        // dwm_catalogue_default_suppfamille
        if ($pathinfo === '/suppFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::suppFamilleAction',  '_route' => 'dwm_catalogue_default_suppfamille',);
        }

        if (0 === strpos($pathinfo, '/modif')) {
            // dwm_catalogue_default_modifierfamille
            if ($pathinfo === '/modifierFamille') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::modifierFamilleAction',  '_route' => 'dwm_catalogue_default_modifierfamille',);
            }

            // dwm_catalogue_default_modiffamille
            if ($pathinfo === '/modifFamille') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::modifFamilleAction',  '_route' => 'dwm_catalogue_default_modiffamille',);
            }

        }

        // fr
        if ($pathinfo === '/listFournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listFournisseurAction',  '_route' => 'fr',);
        }

        // dwm_catalogue_default_suppfournisseur
        if ($pathinfo === '/suppFournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::suppFournisseurAction',  '_route' => 'dwm_catalogue_default_suppfournisseur',);
        }

        // dwm_catalogue_default_vmodiffournisseur
        if ($pathinfo === '/vmodifFournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::vmodifFournisseurAction',  '_route' => 'dwm_catalogue_default_vmodiffournisseur',);
        }

        // dwm_catalogue_default_modiffournisseur
        if ($pathinfo === '/modifFournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::modifFournisseurAction',  '_route' => 'dwm_catalogue_default_modiffournisseur',);
        }

        if (0 === strpos($pathinfo, '/inscrit')) {
            // insff
            if ($pathinfo === '/inscrit') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::inscritAction',  '_route' => 'insff',);
            }

            // dwm_catalogue_default_inscritfournisseur
            if ($pathinfo === '/inscritFournisseur') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::inscritFournisseurAction',  '_route' => 'dwm_catalogue_default_inscritfournisseur',);
            }

        }

        // aif
        if ($pathinfo === '/afterif') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::afterifAction',  '_route' => 'aif',);
        }

        // PIF
        if ($pathinfo === '/PIFournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::PIFournisseurAction',  '_route' => 'PIF',);
        }

        // dwm_catalogue_default_accepterf
        if ($pathinfo === '/accepterF') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::accepterFAction',  '_route' => 'dwm_catalogue_default_accepterf',);
        }

        // dwm_catalogue_default_rejeterf
        if ($pathinfo === '/rejeterF') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::rejeterFAction',  '_route' => 'dwm_catalogue_default_rejeterf',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // cnnf
            if ($pathinfo === '/connexionf') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::connexionfAction',  '_route' => 'cnnf',);
            }

            // connectf
            if ($pathinfo === '/cnnectf') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::cnnectfAction',  '_route' => 'connectf',);
            }

        }

        // pf
        if ($pathinfo === '/pagefournisseur') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::pagefournisseurAction',  '_route' => 'pf',);
        }

        // ar
        if ($pathinfo === '/listArticle') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listArticleAction',  '_route' => 'ar',);
        }

        // dwm_catalogue_default_supparticle
        if ($pathinfo === '/suppArticle') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::suppArticleAction',  '_route' => 'dwm_catalogue_default_supparticle',);
        }

        // dwm_catalogue_default_vmodifarticle
        if ($pathinfo === '/vmodifArticle') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::vmodifArticleAction',  '_route' => 'dwm_catalogue_default_vmodifarticle',);
        }

        // dwm_catalogue_default_modifarticle
        if ($pathinfo === '/modifArticle') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::modifArticleAction',  '_route' => 'dwm_catalogue_default_modifarticle',);
        }

        // sf
        if ($pathinfo === '/listSousFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listSousFamilleAction',  '_route' => 'sf',);
        }

        // dwm_catalogue_default_addsousfamille
        if ($pathinfo === '/addSousFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::addSousFamilleAction',  '_route' => 'dwm_catalogue_default_addsousfamille',);
        }

        // dwm_catalogue_default_suppsousfamille
        if ($pathinfo === '/suppSousFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::suppSousFamilleAction',  '_route' => 'dwm_catalogue_default_suppsousfamille',);
        }

        // dwm_catalogue_default_vmodifsousfamille
        if ($pathinfo === '/vmodifSousFamille') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::vmodifSousFamilleAction',  '_route' => 'dwm_catalogue_default_vmodifsousfamille',);
        }

        if (0 === strpos($pathinfo, '/m')) {
            // dwm_catalogue_default_modifsousfamille
            if ($pathinfo === '/modifSousFamille') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::modifSousFamilleAction',  '_route' => 'dwm_catalogue_default_modifsousfamille',);
            }

            // menu
            if ($pathinfo === '/menu') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::menuAction',  '_route' => 'menu',);
            }

        }

        // acc
        if ($pathinfo === '/accueil') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::accueilAction',  '_route' => 'acc',);
        }

        if (0 === strpos($pathinfo, '/inscrit')) {
            // insf
            if ($pathinfo === '/inscritf') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::inscritfAction',  '_route' => 'insf',);
            }

            // ic
            if ($pathinfo === '/inscritc') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::inscritcAction',  '_route' => 'ic',);
            }

        }

        // dwm_catalogue_default_addclient
        if ($pathinfo === '/addclient') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::addclientAction',  '_route' => 'dwm_catalogue_default_addclient',);
        }

        // dwm_catalogue_default_inscritclient
        if ($pathinfo === '/Inscritclient') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::InscritclientAction',  '_route' => 'dwm_catalogue_default_inscritclient',);
        }

        // cl
        if ($pathinfo === '/listClient') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listClientAction',  '_route' => 'cl',);
        }

        // prcl
        if ($pathinfo === '/ClientEnAttente') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::ClientEnAttenteAction',  '_route' => 'prcl',);
        }

        // dwm_catalogue_default_rejeter
        if ($pathinfo === '/rejeter') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::rejeterAction',  '_route' => 'dwm_catalogue_default_rejeter',);
        }

        // dwm_catalogue_default_suppclient
        if ($pathinfo === '/suppClient') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::suppClientAction',  '_route' => 'dwm_catalogue_default_suppclient',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // dwm_catalogue_default_connexion
            if ($pathinfo === '/connexion') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::connexionAction',  '_route' => 'dwm_catalogue_default_connexion',);
            }

            // dwm_catalogue_default_cnx
            if ($pathinfo === '/cnx') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::cnxAction',  '_route' => 'dwm_catalogue_default_cnx',);
            }

        }

        // prin
        if ($pathinfo === '/principal') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::principalAction',  '_route' => 'prin',);
        }

        // dwm_catalogue_default_deconnection
        if ($pathinfo === '/deconnection') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::deconnectionAction',  '_route' => 'dwm_catalogue_default_deconnection',);
        }

        // panier
        if ($pathinfo === '/panier') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::panierAction',  '_route' => 'panier',);
        }

        if (0 === strpos($pathinfo, '/co')) {
            // dwm_catalogue_default_consulter
            if ($pathinfo === '/consulter') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::consulterAction',  '_route' => 'dwm_catalogue_default_consulter',);
            }

            // dwm_catalogue_default_commande
            if ($pathinfo === '/commande') {
                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::commandeAction',  '_route' => 'dwm_catalogue_default_commande',);
            }

        }

        // listc
        if ($pathinfo === '/listecommande') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::listecommandeAction',  '_route' => 'listc',);
        }

        // dwm_catalogue_default_validercm
        if ($pathinfo === '/validercm') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::validercmAction',  '_route' => 'dwm_catalogue_default_validercm',);
        }

        // dwm_catalogue_default_supprimerlc
        if ($pathinfo === '/supprimerlc') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::supprimerlcAction',  '_route' => 'dwm_catalogue_default_supprimerlc',);
        }

        // dwm_catalogue_default_annulercm
        if ($pathinfo === '/annulercm') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::annulercmAction',  '_route' => 'dwm_catalogue_default_annulercm',);
        }

        // dwm_catalogue_default_recherche
        if ($pathinfo === '/recherche') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::rechercheAction',  '_route' => 'dwm_catalogue_default_recherche',);
        }

        // scc
        if ($pathinfo === '/scc') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::sccAction',  '_route' => 'scc',);
        }

        // cmmd
        if ($pathinfo === '/cmmd') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::cmmdAction',  '_route' => 'cmmd',);
        }

        // pg
        if ($pathinfo === '/premierpage') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::premierpageAction',  '_route' => 'pg',);
        }

        // dwm_catalogue_default_contacte
        if ($pathinfo === '/contacte') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::contacteAction',  '_route' => 'dwm_catalogue_default_contacte',);
        }

        // test
        if ($pathinfo === '/test') {
            return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\DefaultController::testAction',  '_route' => 'test',);
        }

        if (0 === strpos($pathinfo, '/img')) {
            // img
            if (rtrim($pathinfo, '/') === '/img') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_img;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'img');
                }

                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::indexAction',  '_route' => 'img',);
            }
            not_img:

            // img_create
            if ($pathinfo === '/img/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_img_create;
                }

                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::createAction',  '_route' => 'img_create',);
            }
            not_img_create:

            // img_new
            if ($pathinfo === '/img/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_img_new;
                }

                return array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::newAction',  '_route' => 'img_new',);
            }
            not_img_new:

            // img_show
            if (preg_match('#^/img/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_img_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'img_show')), array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::showAction',));
            }
            not_img_show:

            // img_edit
            if (preg_match('#^/img/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_img_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'img_edit')), array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::editAction',));
            }
            not_img_edit:

            // img_update
            if (preg_match('#^/img/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_img_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'img_update')), array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::updateAction',));
            }
            not_img_update:

            // img_delete
            if (preg_match('#^/img/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_img_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'img_delete')), array (  '_controller' => 'Dwm\\CatalogueBundle\\Controller\\imgController::deleteAction',));
            }
            not_img_delete:

        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
