**Реестр** (англ. **Registry**) - данный шаблон предназначен для хранения записей, которые в него помещают и соответственно
возвращения этих записей (_по ключу_) если они потребуются.

Как на нормальном предприятии, когда у нас появляется новый работник - в бухгалтерии появляется новая запись с его данными.
Журнал работников и есть **Реестр**, а каждый объект информации работника - запись в реестре. 
**Реестр** нередко является **Одиночкой**, однако это не всегда должно быть именно так. Например, мы можем заводить
в бухгалтерии несколько журналов. В одном работники от "А" до "М". В другом от "Н" до "Я". Каждый такой журнал будет
**Реестром**, но не **Одиночкой**, потому как журналов уже 2.

**Примечание**:
Заметим что **Реестр** очень похож на **Мультитон** и **Пул объектов**. Сам шаблон **Реестр** не являются
_"порождающим шаблоном"_ в полном смысле этого термина, однако его удобно рассматривать именно во взаимосвязи с ними.
В отличие от **Мультитона** и **Пула**, он не умеет порождать новые сущности. **Реестр** - это хранилище!