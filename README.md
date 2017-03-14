# php-mvc-structure

## Description
This project allows you to have an **MVC** (**M**odel, **V**iew, **C**ontroller) structure in PHP.
The script uses controllers to bind service variables to (view)models and then renders the view including these viewmodels.

## Folder structure
* /api
* /boot
* /classes
* /controllers
* /helpers
* /logs
* /models
* /services
* /viewmodels
* /web

## Classes and components
### API

API classes inherit the base class __API__ and should be named like this: **[a-z0-9]api.php**

### BootModule
The BootModule class is responsible for auto loading classes, connecting to the database, starting sessions and routing. Application settings can be changed in the **settings.php** file.

### Controllers
Controllers are the main components of your application. They bind service results to (view)models and renders the view.
Controllers inherit the base class __Controller__.
They are stored in the __/controllers__ folder and should be named like this: **[a-z0-9]controller.php**

### Models
Models are stored in the __/models__ folder and should be named like this: **[a-z0-9]model.php**

### ViewModels
ViewModels are stored in the __/viewmodels__ folder and should be named like this: **[a-z0-9]viewmodel.php**

### Views
Views are basically what your users see and interact with. They contain HTML tags and JavaScript scripts. Views should not contain any business logic.
They are stored in the __/web__ folder and should have the extension **.php**.

### Services
Services contain your website's business logic.
Services are stored in the __/services__ folder and should be named like this: **[a-z0-9]service.php**