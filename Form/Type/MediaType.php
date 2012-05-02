<?php

namespace Kunstmaan\MediaPagePartBundle\Form\Type;

use Symfony\Component\Form\FormBuilder;
use Symfony\Bridge\Doctrine\RegistryInterface;
use Symfony\Bridge\Doctrine\Form\ChoiceList\EntityChoiceList;
use Symfony\Bridge\Doctrine\Form\EventListener\MergeCollectionListener;
use Symfony\Bridge\Doctrine\Form\DataTransformer\EntitiesToArrayTransformer;
use Symfony\Bridge\Doctrine\Form\DataTransformer\EntityToIdTransformer;
use Symfony\Component\Form\AbstractType;

class MediaType extends AbstractType {
	protected $objectManager;

	public function __construct($objectManager) {
		$this->objectManager = $objectManager;
	}

	public function buildForm(FormBuilder $builder, array $options) {
		$builder->prependClientTransformer(new IdToMediaTransformer($this->objectManager, $options['current_value_container']));
	}

	public function getDefaultOptions(array $options) {
		$defaultOptions = array(
            'em'                => null,
            'class'             => null,
            'property'          => null,
            'query_builder'     => null,
            'choices'           => null,
			'chooserpath'		=> null,
        );

        $options = array_replace($defaultOptions, $options);

        if (!isset($options['current_value_container'])) {
            $defaultOptions['current_value_container'] = new CurrentValueContainer();
        }

        return $defaultOptions;
	}

	public function getParent(array $options) {
		return 'field';
	}

	public function getName() {
		return 'media';
	}
}
