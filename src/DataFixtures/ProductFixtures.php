<?php

namespace App\DataFixtures;

use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Persistence\ObjectManager;

class ProductFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager): void
    {
        $programs = [
            ["name" => "WARA'TAIL", "price" => 10.00, "detail" =>
            "Boisson énergisante à l'Awara...", "image" => "waraTail.png",
            "categoryReference" => "Energisants Naturels"],
            ["name" => "WASSAÏ'TAIL", "price" => 10.50, "detail" =>
            "Boisson énergisante au Wassaï...", "image" => "wassaiTail.png",
            "categoryReference" => "Energisants Naturels"],
            ["name" => "PANGA ROUJ'", "price" => 10.25, "detail" =>
            "Panga (Attention en créole guyanais)...", "image" => "pangaRouj.png",
            "categoryReference" => "Fruits Locaux Epices"],
            ["name" => "ICE COFFEE GINGER", "price" => 10.00, "detail" =>
            "Café glacé guyanais parfumé au Gingembre...", "image" =>
            "iceCoffeeGinger.png", "categoryReference" => "Mariages Saveurs Uniques"],
            ["name" => "MACOCI", "price" => 10.75, "detail" =>
            "Punch Coco sans Alcool bien crémeux...", "image" => "macoci.png",
            "categoryReference" => "Fruits Locaux Epices"],
            ["name" => "MORINAS", "price" => 10.50, "detail" =>
            "Boisson rafraîchissante à l'Ananas débordant...", "image" => "morinas.png",
            "categoryReference" => "Fraicheur sublimée"],
            ["name" => "MÉLOJAH GINGER", "price" => 10.25, "detail" =>
            "Boisson bien rafraîchissante bien parfumée...", "image" =>
            "melojaGinger.png", "categoryReference" => "Energisants Naturels"],
            ["name" => "HOT PAPA CHÉWI", "price" => 10.50, "detail" =>
            "Boisson bien chaleureuse avec son côté piquant...", "image" =>
            "hotPapaChewi.png", "categoryReference" => "Chaleur Epices"],
            ["name" => "SOLOJAH", "price" => 10.25, "detail" =>
            "Boisson débordant de 'peps' : à la fois frais et acidulé...", "image" =>
            "solojah.png", "categoryReference" => "Fruits Locaux Epices"],
            ["name" => "PAPAYER PÉYI", "price" => 10.50, "detail" =>
            "Boisson hyper rafraîchissante à la Papaye Solo...", "image" =>
            "papayerPeyi.png", "categoryReference" => "Fruits d'excellences"],
            ["name" => "THÉ PÉYI DORÉ", "price" => 10.75, "detail" =>
            "Boisson hyper rafraîchissante, parfumée au Maracudja...", "image" =>
            "thePeyiDore.png", "categoryReference" => "Mariages Saveurs Uniques"],
            ["name" => "HOT BLOOD", "price" => 10.75, "detail" =>
            "Boisson bien rafraîchissante bien parfumée avec sa Cerise Péyi...",
            "image" => "hotBlood.png", "categoryReference" => "Chaleur Epices"],
            ["name" => "YANA START", "price" => 10.25, "detail" =>
            "Boisson débordante de fraîcheur avec sa Mangue verte...", "image" =>
            "yanaStart.png", "categoryReference" => "Fruits d'excellences"],
        ];
        foreach ($programs as $productData) {
            $product = new Product();
            $product->setName($productData['name']);
            $product->setPrice($productData['price']);
            $product->setDetail($productData['detail']);
            $product->setImage($productData['image']);
            $categoryReference = $this->getReference('category_' . $productData['categoryReference']);
            $product->setCategory($categoryReference);
            // $product->setCategory($productData['category']);
            $manager->persist($product);
            $this->addReference('product_' . $productData['name'], $product);
        }
        $manager->flush();
    }
    public function getDependencies(): array
    {
        return [
            CategoryFixtures::class,
        ];
    }
}
