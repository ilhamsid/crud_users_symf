<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'property_info.serializer_extractor' shared service.

include_once $this->targetDirs[3].'\\vendor\\symfony\\property-info\\Extractor\\SerializerExtractor.php';

return $this->privates['property_info.serializer_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\SerializerExtractor(($this->privates['serializer.mapping.class_metadata_factory'] ?? $this->load('getSerializer_Mapping_ClassMetadataFactoryService.php')));
