# project-structure-example

## Project structure:
### 1. Core part of application
- `Console/` --- All general console command are located here
- `Http/` --- All http stuff is located here (e.g. `Controllers`, `Requests`, `Responses`, `Middlewares`, etc.)
- `Modules/` --- Codebase has a modular system. Each module is a subdomain of the application. Modules are separately located in different folders (e.g. `Modules/Segmentation`). Each module represents a small part of the application. This approach separates a huge portion of code into less complex pieces. It brings more convenience, decouples functionality on different contexts, makes code more readable and scalable, and it is a primary step in directions of well-structured monolith applications and microservices.

### 2. Bootstrap
- `bootstrap/app.php` --- Bootstrap application file 
### 3. Configurations
- `configs/{core_config_name}.php` --- Core configurations are located in `configs` folder
- `configs/modules/{module_name}.php` --- Modules' configurations are presented separately in file with concrete module name (e.g. `payment.php`) and located in `configs/modules/` folder 
### 4. Routes
Separated by access context:
- `routes/admin/{module_name.php}` --- Admin panel routes
- `routes/api/{module_name.php}` --- API routes
- `routes/callbacks/{module_name.php}` --- Webhook receivers
- `routes/web.php` --- Default Laravel web routes

## Teams and responsibilities
E.g. Team `PMT` is responsible for some modules. And in these example it is responsible for `Payments` module. Then team's codebase will be the next list of files & folders:
    
    # Modules
    app/Modules/Payments/*.php
    
    # Routes
    routes/{admin,api,callback}/payments.php
    routes/web.php

    # Console
    app/Console/Commands/Payments/*.php
    
    # Http
    app/Http/Requests/{Admin,Api,Callback,Dev}/Payments/*.php
    app/Http/Responses/{Admin,Api,Callback,Dev}/Payments/*.php
    app/Http/Controllers/{Admin,Api,Callback,Dev}/Payments/*.php
    app/Http/Controllers/Middlewares/*.php
    
    # Configs
    conmfig/{core_config_name}.php
    configs/modules/payments.php