<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiResource;
use App\Repository\PublicacionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicacionRepository::class)]
#[ApiResource]
class Publicacion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $Tipo = null;

    #[ORM\Column(length: 255)]
    private ?string $Categoria = null;

    #[ORM\Column(length: 255)]
    private ?string $Titulo = null;

    #[ORM\Column(length: 1024)]
    private ?string $Contenido = null;

    #[ORM\Column(length: 255)]
    private ?string $Usuario = null;

    #[ORM\Column(length: 255)]
    private ?string $Localidad = null;

    #[ORM\Column(length: 255)]
    private ?string $Provincia = null;

    #[ORM\Column(type: Types::ARRAY, nullable: true)]
    private ?array $Claves = null;

    #[ORM\Column]
    private ?int $Tiempo = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Caducidad = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->Tipo;
    }

    public function setTipo(string $Tipo): static
    {
        $this->Tipo = $Tipo;

        return $this;
    }

    public function getCategoria(): ?string
    {
        return $this->Categoria;
    }

    public function setCategoria(string $Categoria): static
    {
        $this->Categoria = $Categoria;

        return $this;
    }

    public function getTitulo(): ?string
    {
        return $this->Titulo;
    }

    public function setTitulo(string $Titulo): static
    {
        $this->Titulo = $Titulo;

        return $this;
    }

    public function getContenido(): ?string
    {
        return $this->Contenido;
    }

    public function setContenido(string $Contenido): static
    {
        $this->Contenido = $Contenido;

        return $this;
    }

    public function getUsuario(): ?string
    {
        return $this->Usuario;
    }

    public function setUsuario(string $Usuario): static
    {
        $this->Usuario = $Usuario;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->Localidad;
    }

    public function setLocalidad(string $Localidad): static
    {
        $this->Localidad = $Localidad;

        return $this;
    }

    public function getProvincia(): ?string
    {
        return $this->Provincia;
    }

    public function setProvincia(string $Provincia): static
    {
        $this->Provincia = $Provincia;

        return $this;
    }

    public function getClaves(): ?array
    {
        return $this->Claves;
    }

    public function setClaves(?array $Claves): static
    {
        $this->Claves = $Claves;

        return $this;
    }

    public function getTiempo(): ?int
    {
        return $this->Tiempo;
    }

    public function setTiempo(int $Tiempo): static
    {
        $this->Tiempo = $Tiempo;

        return $this;
    }

    public function getCaducidad(): ?\DateTimeInterface
    {
        return $this->Caducidad;
    }

    public function setCaducidad(\DateTimeInterface $Caducidad): static
    {
        $this->Caducidad = $Caducidad;

        return $this;
    }
}
