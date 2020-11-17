<?php

namespace XeroOauth2\Controller;

use Cake\Controller\Controller;
use Cake\Event\EventInterface;

/**
 * Plugin wise base controller.
 *
 * @property \XeroOauth2\Controller\Component\XeroOauthComponent $XeroOauth
 */
class AppController extends Controller
{
    /**
     * Session object.
     *
     * @var null|\Cake\Http\Session
     */
    protected $_session = null;

    /**
     * {@inheritDoc}
     */
    public function beforeFilter(EventInterface $event)
    {
        parent::beforeFilter($event);

        $this->loadComponent('XeroOauth2.XeroOauth');

        $this->_session = $this->request->getSession();
    }
}