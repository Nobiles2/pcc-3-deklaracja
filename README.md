# pcc-3-deklaracja

Klasy umożliwiające budowę Deklaracji PCC3 i automatyczną budowę xml za pomocą JMS_Serializer

### Instalacja
``
composer require kch/pcc-3-deklaracja
``

#### Użycie klas z biblioteki
Wymagany jest jms/serializer do obsługi klas

``
composer require jms/serializer
``

```php
$serializerBuilder = SerializerBuilder::create();
$serializerBuilder->addMetadataDir('PCC3\metadata', 'KCH\PCC3'); # ścieżka do katalogu z metadata oraz NameSpace
$serializerBuilder->configureHandlers(function (HandlerRegistryInterface $handlerRegistry) use ($serializerBuilder) {
    $serializerBuilder->addDefaultHandlers();
    $handlerRegistry->registerSubscribingHandler(new BaseTypesHandler());
    $handlerRegistry->registerSubscribingHandler(new XmlSchemaDateHandler());
});

$serializerBuilder = $serializerBuilder->build();
$deklaracja = $serializerBuilder->deserialize('......xml deklaracji......', 'KCH\PCC3\Deklaracja', 'xml');
$xml = $serializerBuilder->serialize($deklaracja,'xml');
```
### Ponowne wygenerowanie plików klas PCC3
Ta funkcjonalność będzie wykorzystywana tylko przy aktualizacji deklaracji

``
vendor/bin/xsd2php convert ./config.yml ./schemat.xsd
``

## Autor
Jonkisz Paweł 