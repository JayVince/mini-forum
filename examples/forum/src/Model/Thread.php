<?php

namespace App\Model;

use Cda0521Framework\Database\Sql\Table;
use Cda0521Framework\Database\Sql\Column;
use Cda0521Framework\Database\AbstractModel;

#[Table('thread')]
class Thread extends AbstractModel
{

     /**
      * 
      */
     #[Column('thread_id')]
     protected ?int $id;
     /**
      * 
      */
     #[Column('thread_title')]
     protected string $threadTitle;
     /**
      * 
      */
     #[Column('thread_content')]
     protected string $threadContent;
     /**
      * 
      */
     #[Column('thread_cat_id')]
     protected int $categoryId;
     /**
      * 
      */
     #[Column('thread_user_id')]
     protected int $userId;
     /**
      * 
      */
     #[Column('thread_date')]
     protected \DateTime $threadDate;

     public function __construct(
          ?int $id = null,
          string $threadTitle = "",
          string $threadContent = "",
          ?int $categoryId = null,
          ?int $userId = null,
          ?string $threadDate = null
     ) {
          $this->id = $id;
          $this->threadTitle = $threadTitle;
          $this->threadContent = $threadContent;
          $this->categoryId = $categoryId;
          $this->userId = $userId;

          if (is_null($threadDate)) {
               $this->threadDate = new \DateTime();
          } else {
               $this->threadDate = new \DateTime($threadDate);
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
      * Get titre du thread
      *
      * @return  string
      */
     public function getThreadTitle()
     {
          return $this->threadTitle;
     }

     /**
      * Get contenu du thread
      *
      * @return  string
      */
     public function getThreadContent()
     {
          return $this->threadContent;
     }

     /**
      * Get date de création du thread
      *
      * @return  \DateTime
      */
     public function getThreadDate()
     {
          return $this->threadDate;
     }

     /**
      * Set date creation du thread
      *
      * @param  \DateTime  $createDate
      *
      * @return  self
      */
     public function setThreadDate(\DateTime $threadDate)
     {
          $this->threadDate = $threadDate;

          return $this;
     }

     /**
      * Get categorie
      *
      * @return  Category
      */
     public function getCategory(): ?Category
     {
          // dd($this->categoryId);
          return Category::findById($this->categoryId);
          
     }

     /**
      * Set categorie
      *
      * @param  Category $category Nouvelle categorie
      *
      * @return  self
      */
     public function setCategory(?Category $category)
     {
          if (is_null($category)) {
               $this->categoryId = null;
          }

          $this->categoryId = $category->getId();

          return $this;
     }

     // /**
     //  * Get user
     //  *
     //  * @return  User
     //  */
     // public function getUser(): ?User
     // {
     //      return User::findById($this->userId);
     // }

     // /**
     //  * Set user
     //  *
     //  * @param  User  $userId  Nouvel utilisateur
     //  *
     //  * @return  self
     //  */
     // public function setUserId(?User $user)
     // {
     //      if (is_null($user)) {
     //           $this->userId = null;
     //      }

     //      $this->userId = $user->getId();

     //      return $this;
     // }
}
