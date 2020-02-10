<?php


namespace App\Form;

use App\Data\SearchData;
use App\Entity\Categorie;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SearchForm extends AbstractType
{
    //Formulaire de filtre
    public function buildForm(FormBuilderInterface $builder, array $option)
    {
        $builder
            ->add('q', TextType::class, [
                    'label' => false,
                    'required' => false,
                    'attr' => [
                        'placeholder' => 'Mot-clé'
                    ]
            ])
            ->add('categories', EntityType::class, [
                'label' => false,
                'required' => false,
                'class' => Categorie::class,
                'expanded' => true,
                'multiple' => true
            ])
        ;
    }

    //Recherche passe par l'URL avec la methode GET
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => SearchData::class,
            'method' => 'GET',
            'csrf_protection' => false
        ]);
    }

    //Pour avoir une URL propre
    public function getBlockPrefix()
    {
        return  '';
    }

}
