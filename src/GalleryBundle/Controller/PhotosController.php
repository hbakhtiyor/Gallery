<?php

namespace GalleryBundle\Controller;

use GalleryBundle\Entity\Photo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;

class PhotosController extends FOSRestController
{
    /**
     * 
     */
    public function getPhotoAction(Photo $photo)
    {
        return $photo;
    }

    public function getPhotosAction()
    {
        $em = $this->getDoctrine()->getManager();

        $photos = $em->getRepository('GalleryBundle:Photo')->findAll();

        return $photos;
    }    
}
