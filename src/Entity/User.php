<?php

namespace App\Entity;

use App\Repository\UserRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $nni;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=96, nullable=true)
     */
    private $gardianHierrchie;

    /**
     * @ORM\Column(type="string", length=256, nullable=true)
     */
    private $orgaEdf;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $idUniteOrga;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $connexion;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $idOrga;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $groupement;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $equipe;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $fixe;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $mobile;

    /**
     * @ORM\Column(type="string", length=64, nullable=true)
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=16, nullable=true)
     */
    private $code_postal;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="string", length=128, nullable=true)
     */
    private $referent;

    /**
     * @ORM\Column(type="integer")
     */
    private $bit;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $patronyme;

    /**
     * @ORM\Column(type="string", length=32, nullable=true)
     */
    private $prenom;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNni(): ?string
    {
        return $this->nni;
    }

    public function setNni(string $nni): self
    {
        $this->nni = $nni;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUsername(): string
    {
        return (string) $this->nni;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * This method can be removed in Symfony 6.0 - is not needed for apps that do not check user passwords.
     *
     * @see UserInterface
     */
    public function getPassword(): ?string
    {
        return null;
    }

    /**
     * This method can be removed in Symfony 6.0 - is not needed for apps that do not check user passwords.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getGardianHierrchie(): ?string
    {
        return $this->gardianHierrchie;
    }

    public function setGardianHierrchie(?string $gardianHierrchie): self
    {
        $this->gardianHierrchie = $gardianHierrchie;

        return $this;
    }

    public function getOrgaEdf(): ?string
    {
        return $this->orgaEdf;
    }

    public function setOrgaEdf(?string $orgaEdf): self
    {
        $this->orgaEdf = $orgaEdf;

        return $this;
    }

    public function getIdUniteOrga(): ?string
    {
        return $this->idUniteOrga;
    }

    public function setIdUniteOrga(?string $idUniteOrga): self
    {
        $this->idUniteOrga = $idUniteOrga;

        return $this;
    }

    public function getConnexion(): ?\DateTimeInterface
    {
        return $this->connexion;
    }

    public function setConnexion(?\DateTimeInterface $connexion): self
    {
        $this->connexion = $connexion;

        return $this;
    }

    public function getIdOrga(): ?int
    {
        return $this->idOrga;
    }

    public function setIdOrga(?int $idOrga): self
    {
        $this->idOrga = $idOrga;

        return $this;
    }

    public function getGroupement(): ?int
    {
        return $this->groupement;
    }

    public function setGroupement(?int $groupement): self
    {
        $this->groupement = $groupement;

        return $this;
    }

    public function getEquipe(): ?string
    {
        return $this->equipe;
    }

    public function setEquipe(?string $equipe): self
    {
        $this->equipe = $equipe;

        return $this;
    }

    public function getFixe(): ?string
    {
        return $this->fixe;
    }

    public function setFixe(?string $fixe): self
    {
        $this->fixe = $fixe;

        return $this;
    }

    public function getMobile(): ?string
    {
        return $this->mobile;
    }

    public function setMobile(?string $mobile): self
    {
        $this->mobile = $mobile;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->code_postal;
    }

    public function setCodePostal(?string $code_postal): self
    {
        $this->code_postal = $code_postal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getReferent(): ?string
    {
        return $this->referent;
    }

    public function setReferent(?string $referent): self
    {
        $this->referent = $referent;

        return $this;
    }

    public function getBit(): ?int
    {
        return $this->bit;
    }

    public function setBit(int $bit): self
    {
        $this->bit = $bit;

        return $this;
    }

    public function getPatronyme(): ?string
    {
        return $this->patronyme;
    }

    public function setPatronyme(?string $patronyme): self
    {
        $this->patronyme = $patronyme;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }
}
