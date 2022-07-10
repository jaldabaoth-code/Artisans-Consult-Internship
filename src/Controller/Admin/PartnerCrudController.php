<?php

namespace App\Controller\Admin;

use App\Entity\Partner;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use Vich\UploaderBundle\Form\Type\VichImageType;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Field\UrlField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextareaField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class PartnerCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Partner::class;
    } 

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInSingular('Partenaire')
            ->setEntityLabelInPlural('Partenaires')
        ;
    }
    
    public function configureFields(string $pageName): iterable
    {
        return [
            TextareaField::new('logoFile', $label = "Logo")
                ->setFormType(VichImageType::class)
                ->setFormTypeOption('allow_delete', false)
                ->onlyOnForms(),
            ImageField::new('logo', $label = "Logo")
                ->setBasePath('/images/logoFiles')
                ->hideOnForm(),
            TextField::new('name', $label = "Titre"),
            UrlField::new('link', $label = "Lien web"),
            TexteditorField::new('description', $label = "Description"),
            ChoiceField::new('category', $label="Catégorie")
                ->setChoices([
                    'partenaires' => 'private',
                    'infos utiles' => 'public'
                ])
                ->setFormTypeOption('expanded', true)
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions->add(Crud::PAGE_INDEX, 'detail');
    }
}
