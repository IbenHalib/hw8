<?php

namespace Vadim\GuestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Gedmo\Mapping\Annotation as Gedmo;


/**
 * Post
 * @ORM\Entity
 * @ORM\Table(name="post")
  */
class Post
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=128, nullable=true)
     * @Assert\NotBlank
     * @Assert\Regex(pattern="/^[a-z]+$/i", message="name can contain only latin letters.")
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=128)
     * @Assert\NotBlank
     * @Assert\Email
     */

    /**
     * @Gedmo\Slug(fields={"name"})
     * @ORM\Column(length=128, unique=true)
     */
    private $slug;


    protected $email;

    /**
     * @var string
     *
     * @ORM\Column(name="post", type="text")
     * @Assert\NotBlank
     * @Assert\Length(min="100")
     */
    protected $post;

    /**
     * @return mixed
     */


    /**
     * @var datetime $created
     *
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="date")
     */
    private $created;

    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getPost()
    {
        return $this->post;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $post
     */
    public function setPost($post)
    {
        $this->post = $post;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * @return \Vadim\GuestBundle\Entity\datetime
     */
    public function getCreated()
    {
        return $this->created;
    }



}