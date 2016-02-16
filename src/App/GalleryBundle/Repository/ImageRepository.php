<?php

namespace App\GalleryBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * ImageRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ImageRepository extends EntityRepository
{
    public function getQueryForPaginatorByAlbumId($albumId)
    {
        return $this->createQueryBuilder('i')
            ->where('i.album_id = :albumId')
            ->setParameter('albumId', $albumId)
            ->getQuery();
    }

    public function getImagesSrcByAlbumIdAndLimit($albumId, $limit)
    {
        return $this->createQueryBuilder('i')
            ->select('i.src')
            ->where('i.album_id = :albumId')
            ->setParameter('albumId', $albumId)
            ->setMaxResults($limit)
            ->getQuery()
            ->getResult();
    }
}
