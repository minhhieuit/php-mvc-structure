# php-mvc-structure

## Description
This project allows you to have a simple **MVC** (**M**odel, **V**iew, **C**ontroller) structure in PHP.

## Classes and components

### BootModule
The BootModule class is responsible for auto loading classes, starting sessions and URL routing. Application settings can be changed in the **config.php** file.

### Controllers
Controllers are the main components of your application. They bind values to (view)models and render the view.
Controllers inherit the base class __ControllerBase__.
They are stored in the __/controllers__ folder and should be named like this: **[a-z0-9]controller.php**.

### Models
Models are stored in the __/models__ folder.

### View models
View models are stored in the __/viewmodels__ folder and should be named like this: **[a-z0-9]viewmodel.php**.

### Views
Views are basically what your users see and interact with. They contain HTML tags and JavaScript scripts. Views should not contain any business logic.
They are stored in the __/views__ folder and should have the extension **.php**. Images, CSS and scripts can be stored in __/web__.

### Services
Services contain your website's business logic.
Services are stored in the __/services__ folder and should be named like this: **[a-z0-9]service.php**