<?php

namespace GalleryBundle\Controller;

use GalleryBundle\Entity\Album;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;

class AlbumsController extends FOSRestController
{
    /**
     * 
     */
    public function getAlbumAction(Album $album)
    {
        return $album;
    }

    public function getAlbumsAction()
    {
        $em = $this->getDoctrine()->getManager();

        $albums = $em->getRepository('GalleryBundle:Album')->findAll();
        return $albums;
    }    
}
