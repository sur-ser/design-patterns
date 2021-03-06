**Строитель** (англ. **Builder**) — это интерфейс для инкапсулирования механизма создания сложного объекта. Суть его заключается в том, чтобы отделить
процесс создания некоторого сложного объекта от его представления. Таким образом, можно получать различные представления
объекта, используя один и тот же "технологический" процесс. Данный шаблон очень тесно переплетается с шаблоном **Фабрика**.

**Применение:**
* алгоритм создания сложного объекта не должен зависеть от того, из каких частей состоит объект и как они стыкуются между собой;
* процесс конструирования должен обеспечивать различные представления конструируемого объекта.

Раньше мы создавали наши бургеры уже из готовых классов. Что бы показать работу этого шаблона мы изменим создание бургеров.
Разобьём весь бургер на части и потом с помощью билдера соберём тот, который нам нужен. В этом примере билдеры - это своего рода рецепты,
которые мы передали повару. А повар в свою очередь, как с ним обращаться.


**Примеры:**
* PHPUnit: Mock Builder
