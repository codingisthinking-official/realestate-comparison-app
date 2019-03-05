<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'serializer' shared service.

$a = ($this->privates['serializer.mapping.cache_class_metadata_factory'] ?? $this->load('getSerializer_Mapping_CacheClassMetadataFactoryService.php'));

return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer([0 => new \FOS\RestBundle\Serializer\Normalizer\FormErrorNormalizer(), 1 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 2 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 3 => new \Symfony\Component\Serializer\Normalizer\ConstraintViolationListNormalizer(), 4 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 5 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 6 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 7 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($a, new \Symfony\Component\Serializer\NameConverter\MetadataAwareNameConverter($a), ($this->privates['property_accessor'] ?? $this->load('getPropertyAccessorService.php')), new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.serializer_extractor'] ?? $this->load('getPropertyInfo_SerializerExtractorService.php'));
    yield 1 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
    yield 2 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
}, 3), new RewindableGenerator(function () {
    yield 0 => ($this->privates['doctrine.orm.default_entity_manager.property_info_extractor'] ?? $this->load('getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php'));
    yield 1 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
    yield 2 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
}, 3), new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.php_doc_extractor'] ?? ($this->privates['property_info.php_doc_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\PhpDocExtractor()));
}, 1), new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
}, 1), new RewindableGenerator(function () {
    yield 0 => ($this->privates['property_info.reflection_extractor'] ?? ($this->privates['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()));
}, 1)), new \Symfony\Component\Serializer\Mapping\ClassDiscriminatorFromClassMetadata($a))], [0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder()]);
