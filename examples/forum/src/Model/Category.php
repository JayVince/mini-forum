<?php

namespace App\Model;

use Cda0521Framework\Database\Sql\SqlDatabaseHandler;
use Cda0521Framework\Database\Sql\Table;
use Cda0521Framework\Database\Sql\Column;
use Cda0521Framework\Database\AbstractModel;

#[Table('category')]
class Category extends AbstractModel
{

     /**
      * 
      */
     #[Column('cat_id')]
     protected ?int $id;
     /**
      * 
      */
     #[Column('cat_name')]
     protected string $name;
     /**
      * 
      */
     #[Column('cat_img')]
     protected string $catImage;
     /**
      * 
      */
     #[Column('cat_description')]
     protected string $description;
     /**
      * 
      */
     #[Column('cat_date_created')]
     protected \DateTime $createDate;

     public function __construct(
          ?int $id = null,
          string $name = "",
          string $catImage = "",
          string $description = "",
          ?string $createDate = null
     ) {
          $this->id = $id;
          $this->name = $name;
          $this->catImage = $catImage;
          $this->description = $description;

          if (is_null($createDate)) {
               $this->createDate = new \DateTime();
          } else {
               $this->createDate = new \DateTime($createDate);
          }
     }

     /**
      * Get identifiant en base de données
      *
      * @return  int|null
      */
     public function getId()
     {
          return $this->id;
     }

     /**
      * Get nom de la  catégorie
      *
      * @return  string
      */
     public function getName()
     {
          return $this->name;
     }

     /**
      * Get nom de la  catégorie
      *
      * @return  string
      */
     public function getCatImage()
     {
          return $this->catImage;
     }

     /**
      * Get description de la  catégorie
      *
      * @return  string
      */
     public function getDescription()
     {
          return $this->description;
     }

     /**
      * Get date de création catégorie
      *
      * @return  \DateTime
      */
     public function getCreateDate()
     {
          return $this->createDate;
     }

     /**
      * Set date creation de la Catégorie
      *
      * @param  \DateTime  $createDate
      *
      * @return  self
      */
     public function setCreateDate(\DateTime $createDate)
     {
          $this->createDate = $createDate;

          return $this;
     }

     /**
      * Retourne tous les threads de la catégorie sélectionnée
      *
      * @return  array
      */
     public function getThread()
     {
          return Thread::findWhere('thread_cat_id', $this->id);
     }
}
