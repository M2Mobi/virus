<?php

/**
 * This file contains a home controller class.
 *
 * PHP Version 5.4
 *
 * @category   Controller
 * @package    Virus
 * @subpackage Home
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 * @copyright  2013-2014, M2Mobi BV, Amsterdam, The Netherlands
 * @license    http://lunr.nl/LICENSE MIT License
 */

namespace Virus\Home;

use Lunr\Corona\Controller;
use Lunr\Corona\HttpCode;

/**
 * Home controller class
 *
 * @category   Controller
 * @package    Virus
 * @subpackage Home
 * @author     Heinz Wiesinger <heinz@m2mobi.com>
 */
class HomeController extends Controller
{

    /**
     * Constructor.
     *
     * @param \Lunr\Core\ConfigServiceLocator $locator Shared instance of the Service Locator
     */
    public function __construct($locator)
    {
        parent::__construct($locator->request(), $locator->response());
    }

    /**
     * Destructor.
     */
    public function __destruct()
    {
        parent::__destruct();
    }

    /**
     * Default method.
     *
     * @return void
     */
    public function index()
    {
        $this->set_result(HttpCode::OK);

        $this->response->add_response_data('title', 'Ground Zero');
        $this->response->view = 'homeview';
    }

}

?>
