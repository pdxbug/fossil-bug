<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;
use App\Model\Entity\Article;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler', [
            'enableBeforeRedirect' => false,
        ]);
        $this->loadComponent('Flash');

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeRender(Event $event)
    {
        if (!empty($this->viewVars['page']) && $this->viewVars['page'] == 'home') {
            $this->loadModel('Articles');
            $articles = $this->Articles->getArticles();

            $this->set(compact('articles'));
        }
    }

    public function sitemap(){
       $this->viewBuilder()->layout('sitemap');
       $this->RequestHandler->respondAs('xml');
       //todo: when have blog set up, use https://trinitytuts.com/tips/create-xml-sitemap-cakephp-3/ to update xml on pages/blog/categories
       // $articles = $this->Categories->find('all', array('conditions'=>array('status'=>1)));
       // $pages = $this->Pages->find('all', array('conditions'=>array('status'=>1)));
       $this->set(compact('articles', 'pages'));
       $this->viewBuilder()->setLayout('sitemap');
       $this->render('/sitemap');
    }
}
