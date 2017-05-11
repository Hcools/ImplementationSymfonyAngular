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

        if (0 === strpos($pathinfo, '/notepad')) {
            if (0 === strpos($pathinfo, '/notepad/api')) {
                // notepad_api_searchnotes
                if (0 === strpos($pathinfo, '/notepad/api/tag') && preg_match('#^/notepad/api/tag/(?P<search>[^/]++)/notes$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_notepad_api_searchnotes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_searchnotes')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::searchNotesAction',));
                }
                not_notepad_api_searchnotes:

                if (0 === strpos($pathinfo, '/notepad/api/notes')) {
                    // notepad_api_allnotes
                    if ($pathinfo === '/notepad/api/notes') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_notepad_api_allnotes;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::allNotesAction',  '_route' => 'notepad_api_allnotes',);
                    }
                    not_notepad_api_allnotes:

                    // notepad_api_getnotes
                    if (preg_match('#^/notepad/api/notes/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_notepad_api_getnotes;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_getnotes')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::getNotesAction',));
                    }
                    not_notepad_api_getnotes:

                    // notepad_api_editnote
                    if (preg_match('#^/notepad/api/notes/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_notepad_api_editnote;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_editnote')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::editNoteAction',));
                    }
                    not_notepad_api_editnote:

                }

                // notepad_api_newnote
                if (0 === strpos($pathinfo, '/notepad/api/categories') && preg_match('#^/notepad/api/categories/(?P<category>[^/]++)/notes$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_notepad_api_newnote;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_newnote')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::newNoteAction',));
                }
                not_notepad_api_newnote:

                // notepad_api_deletenotes
                if (0 === strpos($pathinfo, '/notepad/api/notes') && preg_match('#^/notepad/api/notes/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_notepad_api_deletenotes;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_deletenotes')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::deleteNotesAction',));
                }
                not_notepad_api_deletenotes:

                if (0 === strpos($pathinfo, '/notepad/api/categories')) {
                    // notepad_api_allcategories
                    if ($pathinfo === '/notepad/api/categories') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_notepad_api_allcategories;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::allCategoriesAction',  '_route' => 'notepad_api_allcategories',);
                    }
                    not_notepad_api_allcategories:

                    // notepad_api_getcategories
                    if (preg_match('#^/notepad/api/categories/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_notepad_api_getcategories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_getcategories')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::getCategoriesAction',));
                    }
                    not_notepad_api_getcategories:

                    // notepad_api_newcategories
                    if ($pathinfo === '/notepad/api/categories') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_notepad_api_newcategories;
                        }

                        return array (  '_controller' => 'NotepadBundle\\Controller\\APIController::newCategoriesAction',  '_route' => 'notepad_api_newcategories',);
                    }
                    not_notepad_api_newcategories:

                    // notepad_api_editcategories
                    if (preg_match('#^/notepad/api/categories/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'PUT') {
                            $allow[] = 'PUT';
                            goto not_notepad_api_editcategories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_editcategories')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::editCategoriesAction',));
                    }
                    not_notepad_api_editcategories:

                    // notepad_api_deletecategories
                    if (preg_match('#^/notepad/api/categories/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'DELETE') {
                            $allow[] = 'DELETE';
                            goto not_notepad_api_deletecategories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepad_api_deletecategories')), array (  '_controller' => 'NotepadBundle\\Controller\\APIController::deleteCategoriesAction',));
                    }
                    not_notepad_api_deletecategories:

                }

            }

            // notepad_main_index
            if (rtrim($pathinfo, '/') === '/notepad') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'notepad_main_index');
                }

                return array (  '_controller' => 'NotepadBundle\\Controller\\MainController::indexAction',  '_route' => 'notepad_main_index',);
            }

            if (0 === strpos($pathinfo, '/notepad/note')) {
                // notepadnotelist
                if ($pathinfo === '/notepad/note/list') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_notepadnotelist;
                    }

                    return array (  '_controller' => 'NotepadBundle\\Controller\\MainController::listAction',  '_route' => 'notepadnotelist',);
                }
                not_notepadnotelist:

                // notepadnotenew
                if ($pathinfo === '/notepad/note/new') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\MainController::newNoteAction',  '_route' => 'notepadnotenew',);
                }

                // notepadeditnote
                if (0 === strpos($pathinfo, '/notepad/note/edit') && preg_match('#^/notepad/note/edit/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepadeditnote')), array (  '_controller' => 'NotepadBundle\\Controller\\MainController::editNoteAction',));
                }

                // notepaddeletenote
                if (0 === strpos($pathinfo, '/notepad/note/delete') && preg_match('#^/notepad/note/delete/(?P<note>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepaddeletenote')), array (  '_controller' => 'NotepadBundle\\Controller\\MainController::deleteNoteAction',));
                }

            }

            if (0 === strpos($pathinfo, '/notepad/category')) {
                // notepadCategorylist
                if ($pathinfo === '/notepad/category/list') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\MainController::listCategoryAction',  '_route' => 'notepadCategorylist',);
                }

                // notepadcategorynew
                if ($pathinfo === '/notepad/category/new') {
                    return array (  '_controller' => 'NotepadBundle\\Controller\\MainController::newCategoryAction',  '_route' => 'notepadcategorynew',);
                }

                // notepadeditcategory
                if (0 === strpos($pathinfo, '/notepad/category/edit') && preg_match('#^/notepad/category/edit/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepadeditcategory')), array (  '_controller' => 'NotepadBundle\\Controller\\MainController::editCategoryAction',));
                }

                // notepaddeletecategory
                if (0 === strpos($pathinfo, '/notepad/category/delete') && preg_match('#^/notepad/category/delete/(?P<category>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'notepaddeletecategory')), array (  '_controller' => 'NotepadBundle\\Controller\\MainController::deleteAction',));
                }

            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
