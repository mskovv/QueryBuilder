<b>QueryBuilder</b> - построитель запросов. Этот компонент необходим для упрощения создания и выполнения MYSQL запросов.
При инициализации класса, в него необходимо передать подключение через драйвер PDO, встроеннный в PHP
(<b>пример</b> $pdo = new PDO(mysql:dbname=querybulder;host=localhost', 'admin', 'root').
<b>Методы компонента :</b>
1. getOne($table, $id) - возвращает запись, которую необходимо получить из указанной таблицы, принимает идентификатор необходимой записи.
2. getAll($table) - возвращает массив всех полей и значений из параметризованной таблицы базы данных.
3. create($table, $data) - создаёт новую запись в базе данных, данные необходимо передать в виде массива в параметры метода. 
4. delete($table, $id) - удаляет запись из базы, согло идентификатору записи.
5. update($table, $data, $id) - обновляет значения в параметризованной таблице, согласно идентификатору необходимой для обновления записи, данные принимаются в виде массива.

<b>Для ознакомления с компонентом можно выполнить команду GIT CLONE данного репозитория и запустить на своём сервере. </b>
В примере реализовано небольшое ознакомительное веб-приложение, реализующее CRUD операции. В репозитории присутствует дамп базы данных для тестового использования.
