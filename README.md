#  Mari Nails Spa — Plataforma Boutique & Sistema de Citas

Plataforma web boutique y sistema de agendamiento rápido desarrollada para **Mari Nails Spa**, salón especializado de alta gama dirigido por la especialista **Mariana Torres** (*Técnico Profesional de Salón • 8 Años de Evolución*) en **Barquisimeto, Estado Lara, Venezuela**.

Construida bajo una arquitectura **MVC (Modelo-Vista-Controlador)** limpia, modular y desacoplada con **PHP 8**, gestión de dependencias y autocarga mediante **Composer (PSR-4)**, y diseño boutique de alta conversión optimizado para dispositivos móviles y escritorio.

---

##  Arquitectura MVC

El proyecto sigue una separación rigurosa de responsabilidades para garantizar mantenibilidad, escalabilidad y facilidad de despliegue:

```text
mari-nails-spa/
│
├── app/                                 # Lógica de la aplicación (Namespace: App\)
│   ├── Controllers/                     # Controladores HTTP
│   │   ├── HomeController.php           # Renderizado de la landing page y data
│   │   └── BookingController.php        # Procesamiento de citas y API WhatsApp
│   ├── Core/                            # Núcleo del framework MVC
│   │   ├── Controller.php               # Controlador base (render, json, redirect)
│   │   ├── Request.php                  # Manejo y sanitización de peticiones HTTP
│   │   ├── Router.php                   # Enrutador HTTP (GET, POST, HEAD)
│   │   └── View.php                     # Motor de renderizado con layouts y partials
│   ├── Helpers/                         # Funciones auxiliares globales
│   │   └── helpers.php                  # asset(), url(), config(), e(), base_url()
│   ├── Models/                          # Capa de datos y lógica de dominio
│   │   ├── Faq.php                      # Preguntas frecuentes orgánicas
│   │   ├── Gallery.php                  # Diseños de uñas, categorías y portafolio
│   │   ├── Review.php                   # Opiniones reales de clientas
│   │   └── Specialist.php               # Perfil, frase y pilares de Mariana Torres
│   └── Views/                           # Plantillas de presentación (HTML5 / PHP)
│       ├── errors/
│       │   └── 404.php                  # Vista de error de ruta no encontrada
│       ├── home/
│       │   └── index.php                # Vista principal componiendo las secciones
│       ├── layouts/
│       │   └── main.php                 # Layout maestro (HTML shell, head, assets)
│       └── partials/                    # Componentes modulares reutilizables
│           ├── booking-modal.php        # Modal de agendamiento rápido
│           ├── footer.php               # Pie de página boutique centrado
│           ├── lightbox.php             # Visor interactivo en pantalla completa
│           └── navbar.php               # Barra de navegación responsive
│
├── config/
│   └── config.php                       # Configuración central (WhatsApp, Maps, Instagram)
│
├── public/                              # Raíz pública del servidor web (Document Root)
│   ├── css/
│   │   └── styles.css                   # Sistema de diseño boutique y responsive
│   ├── images/                          # Fotografías de estudio y portafolio en HD
│   ├── js/
│   │   └── main.js                      # Control del Lightbox, formularios y WhatsApp
│   ├── favicon.svg                      # Isotipo boutique vectorial
│   ├── .htaccess                        # Reglas de reescritura Apache para public
│   └── index.php                        # Front Controller / Punto de entrada único
│
├── vendor/                              # Autocarga de Composer (PSR-4)
├── .gitignore                           # Archivos excluidos del control de versiones
├── .htaccess                            # Redirección de raíz a public/ (XAMPP / Apache)
├── composer.json                        # Definición del paquete y autoloading PSR-4
├── index.php                            # Delegación al Front Controller para XAMPP
└── README.md                            # Documentación técnica del proyecto
```

---

##  Características Destacadas

* **Arquitectura MVC con Composer (PSR-4)**: Código orientado a objetos, tipado estricto (`declare(strict_types=1);`), enrutamiento limpio y sin acoplamiento a frameworks pesados.
* **Fotografías de Mariana Torres en Alta Resolución Nativa**: Extraídas en calidad de estudio profesional (hasta 3072 × 4096 px) destacando su uniforme boutique, instrumental de precisión y micromotor.
* **Portafolio con Visor Lightbox Pantalla Completa**: Galería de diseños de uñas con pestañas de filtrado (*Acrílicas, Nail Art, Spa*), apertura modal con zoom al hacer clic, y navegación por teclado (`ESC`, flecha izquierda, flecha derecha).
* **Asistente de Cita con Día Tentativo**: Formulario interactivo que permite ingresar solicitud en texto libre y día de preferencia, con nota de aclaración (*"Día tentativo sujeto a confirmación"*) y generador automático de mensaje personalizado directo a WhatsApp.
* **Atención Exclusiva Previa Cita**: Sección central destacando la bioseguridad clínica en autoclave, insumos de primera línea y atención sin esperas.
* **Opiniones Orgánicas de Clientas**: Testimonios reales sin menciones forzadas de ubicación, priorizando la satisfacción y fidelidad.
* **Ubicación & Integración con Google Maps**: Dirección en Carrera 3, Barquisimeto, con enlace verificado a Google Maps ([https://maps.app.goo.gl/xGjdVrHkoanV1gEPA](https://maps.app.goo.gl/xGjdVrHkoanV1gEPA)) y mapa interactivo integrado.
* **Compatibilidad Dual**: Funciona directamente en subcarpetas de XAMPP (`http://localhost/mari-nails-spa/`) o apuntando el DocumentRoot a `public/` en servidores de producción (Apache, Nginx, cPanel).

---

##  Sistema de Diseño Boutique

| Token | Código HEX | Aplicación |
| :--- | :--- | :--- |
| **Palo de Rosa** | `#F5E6E8` | Fondos de tarjetas, badges sutiles y acentos delicados |
| **Dorado Metálico** | `#D4AF37` / `#B89020` | Botones principales, bordes de lujo y detalles premium |
| **Blanco Puro** | `#FFFFFF` | Superficies limpias y contraste de tarjetas |
| **Berenjena Profundo** | `#3A2E39` | Tipografía principal editorial de alto contraste |
| **WhatsApp Oficial** | `#25D366` | Llamados a la acción directos y botón flotante |

### Tipografías
* **Títulos**: `Playfair Display` & `Cormorant Garamond` (Serif editorial refinada).
* **Textos y Formularios**: `Plus Jakarta Sans` (Sans-serif moderna de alta legibilidad).

---

##  Requisitos e Instalación

### Requisitos Previos
* **PHP**: 8.0 o superior (compatible con PHP 8.1 y 8.2).
* **Composer**: 2.x instalado globalmente.
* **Servidor Web**: Apache (con `mod_rewrite` habilitado) a través de XAMPP, WAMP, LAMP o servidor integrado de PHP.

### Paso 1: Clonar el Repositorio
```bash
git clone https://github.com/Gabriellsanchezt/Mari-Nails-Spa.git
cd mari-nails-spa
```

### Paso 2: Instalar Dependencias con Composer
Genera el mapa de autocarga optimizado:
```bash
composer install
```
*(O `composer dump-autoload -o` si no instalas librerías de terceros adicionales)*.

### Paso 3: Ejecución

#### Opción A: Vía XAMPP / WAMP (Recomendada)
1. Coloca la carpeta del proyecto dentro de `C:\xampp\htdocs\mari-nails-spa`.
2. Inicia el servicio **Apache** desde el panel de control de XAMPP.
3. Abre tu navegador en:
   ```text
   http://localhost/mari-nails-spa/
   ```

#### Opción B: Vía Servidor Integrado de PHP
Ejecuta apuntando a la carpeta pública:
```bash
php -S localhost:8000 -t public
```
Abre tu navegador en:
```text
http://localhost:8000
```

---

##  Endpoints de la Aplicación

| Método | Ruta | Controlador / Acción | Descripción |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `HomeController@index` | Carga y renderizado de la landing page completa |
| `GET` | `/api/gallery` | `HomeController@galleryJson` | Retorna los ítems de portafolio en formato JSON |
| `POST` | `/api/booking` | `BookingController@store` | Recibe solicitud de cita y genera enlace a WhatsApp |

---

##  Instrucciones para Subir a GitHub

Si aún no has inicializado el repositorio Git en este proyecto, sigue estos pasos desde la terminal dentro de `C:\xampp\htdocs\mari-nails-spa`:

```bash
# 1. Inicializar el repositorio Git
git init

# 2. Agregar todos los archivos al área de preparación (staging)
git add .

# 3. Crear el primer commit con la estructura MVC
git commit -m "feat: Arquitectura MVC con Composer, diseno boutique y fotos en alta resolucion"

# 4. Renombrar la rama principal a main
git branch -M main

# 5. Vincular tu repositorio remoto de GitHub (reemplaza con tu URL real)
git remote add origin https://github.com/Gabriellsanchezt/Mari-Nails-Spa.git

# 6. Subir los cambios a GitHub
git push -u origin main
```

> [!TIP]
> El archivo `.gitignore` ya está preconfigurado para ignorar la carpeta `/vendor/`, archivos temporales y de configuración local, manteniendo el repositorio liviano y limpio.

---

##  Créditos & Autoría

* **Especialista & Fundadora**: Mariana Torres — *Mari Nails Spa*
* **Ubicación**: Barquisimeto, Estado Lara, Venezuela.
* **Instagram**: [@marinails.spa_](https://instagram.com/marinails.spa_)
* **WhatsApp Oficial**: [+58 412-0549526](https://wa.me/584120549526)

---

##  Licencia

Este proyecto está bajo la Licencia **MIT**. Consulta el archivo `LICENSE` para más información.
