**Компоновщик** (англ. **Composite pattern**) — структурный шаблон проектирования, объединяющий объекты в древовидную
структуру для представления иерархии от частного к целому. Компоновщик позволяет клиентам обращаться
к отдельным объектам и к группам объектов одинаково.

Очень простой шаблон. Будем создавать HTML документ для отправки нашему менеджеру. У нас есть один интерфейс
для всех компонентов HTML документа. Это даёт нам возможность обращаться ко всем компонентам одним и тем же способом.
Для наглядности реализуем интерфейс двумя абстрактными классами:

* **Composite** - родительский компонент, у которого есть наследники;
* **Leaf** - конечный элемент. Наследников иметь не может.

В тесте(**CompositeTest**) приведён пример постройки HTML документа.
