<?php
namespace Album\Controller;

use Zend\Mvc\Controller\ActionController,
    Zend\View\Model\ViewModel;
    Album\Model\AlbumTable;

class AlbumController extends ActionController
{
    protected $albumTable;

    public function indexAction()
    {
    }

    public function addAction()
    {
    }

    public function editAction()
    {
    }

    public function deleteAction()
    {
    }

    public function setAlbumTable(AlbumTable $albumTable)
    {
        $this->albumTable = $albumTable;
        return $this;
    }
}

