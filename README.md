# Proyecto WordPress – Tueste Norte

Este repositorio contiene el **tema hijo** utilizado para el proyecto “Tueste Norte”, desarrollado en WordPress.  
Incluye las plantillas necesarias para mostrar la ficha de cada café mediante campos personalizados creados con **Advanced Custom Fields (ACF)**.

## 📌 Contenido del repositorio

- `style.css` – Declaración del tema hijo y estilos básicos.
- `functions.php` – Carga del tema padre y funciones necesarias.
- `single.php` – Plantilla personalizada para mostrar la ficha completa de cada café.
- `footer.php` – Pie de página del tema hijo.

## ☕ Funcionalidad del proyecto

El proyecto implementa:

- Categoría personalizada **Cafés**
- Grupo de campos ACF llamado **Ficha del café**, con:
  - Origen  
  - Notas de cata  
  - Nivel de tueste  
  - Intensidad  
  - Precio  
  - Tipo de grano  
- Plantilla `single.php` que muestra todos los campos ACF en la ficha del café.
- Entrada de prueba “Café ejemplo” para validar la plantilla.

## 🛠 Requisitos para ejecutar el proyecto

1. Instalar WordPress.
2. Activar el tema padre y el tema hijo incluido en este repositorio.
3. Instalar el plugin **Advanced Custom Fields**.
4. Crear la categoría **Cafés**.
5. Crear el grupo de campos ACF según la estructura del proyecto.
6. Crear una entrada dentro de la categoría *Cafés* y rellenar los campos.
7. Visitar la ficha del café en el frontend.

## 📷 Capturas

Incluye aquí las capturas del proyecto funcionando para facilitar la evaluación.

## 👨‍🏫 Evaluación

Este repositorio contiene todo el código necesario para evaluar el proyecto solicitado:  
**tema hijo + plantillas + estructura ACF documentada**.
