# Silva Financial Inc. - Basic Layout

Este es el layout básico para el sitio web de Silva Financial Inc., una empresa de servicios de bookkeeping profesional para pequeñas empresas.

## 🚀 Características

- **Diseño Responsive**: Optimizado para todos los dispositivos (xs, sm, md, lg, xl)
- **Sistema de Breakpoints**: Inspirado en Every1Drives con breakpoints cortos
- **Colores Intuit**: Paleta de colores inspirada en Intuit (azules y verdes profesionales)
- **Gulp Workflow**: Compilación automática de Sass, optimización de imágenes y JavaScript
- **Componentes Reutilizables**: Botones, cards, formularios y más
- **Accesibilidad**: Cumple con estándares de accesibilidad web

## 📁 Estructura del Proyecto

```
basic-layout/
├── src/
│   ├── scss/
│   │   ├── base/
│   │   │   ├── _variables.scss      # Variables de colores, tipografía, espaciado
│   │   │   ├── _breakpoints.scss    # Sistema de breakpoints
│   │   │   ├── _reset.scss          # Reset CSS moderno
│   │   │   └── _typography.scss     # Estilos de tipografía
│   │   ├── components/
│   │   │   ├── _buttons.scss        # Estilos de botones
│   │   │   └── _cards.scss          # Estilos de cards
│   │   ├── layout/
│   │   │   ├── _grid.scss           # Sistema de grid
│   │   │   ├── _header.scss         # Estilos del header
│   │   │   └── _footer.scss         # Estilos del footer
│   │   ├── pages/
│   │   │   ├── _home.scss           # Estilos de la página home
│   │   │   ├── _about.scss          # Estilos de la página about
│   │   │   ├── _contact.scss        # Estilos de la página contact
│   │   │   ├── _blog.scss           # Estilos de blog
│   │   │   ├── _404.scss            # Estilos de página 404
│   │   │   └── _thank-you.scss      # Estilos de página thank you
│   │   ├── utilities/
│   │   │   └── _utilities.scss      # Clases utilitarias
│   │   └── main.scss                # Archivo principal que importa todo
│   ├── js/
│   │   └── main.js                  # JavaScript principal
│   ├── images/                      # Imágenes fuente
│   └── html/                        # Archivos HTML
│       ├── index.html               # Página principal
│       ├── about.html               # Página nosotros
│       ├── contact.html             # Página contacto
│       ├── blog.html                # Página blog
│       ├── 404.html                 # Página 404
│       └── thank-you.html           # Página thank you
├── dist/                            # Archivos compilados
│   ├── css/
│   ├── js/
│   └── images/
├── gulpfile.js                      # Configuración de Gulp
├── package.json                     # Dependencias del proyecto
└── README.md                        # Este archivo
```

## 🛠️ Instalación

1. **Instalar dependencias**:
   ```bash
   npm install
   ```

2. **Ejecutar en modo desarrollo**:
   ```bash
   npm run dev
   ```
   Esto iniciará el watch mode de Gulp que compilará automáticamente los archivos cuando detecte cambios.

3. **Compilar para producción**:
   ```bash
   npm run build
   ```

## 🎨 Sistema de Breakpoints

El proyecto utiliza un sistema de breakpoints inspirado en Every1Drives:

```scss
$breakpoints: (
  xs: 0,        // Dispositivos ultra pequeños
  sm: 576px,    // Móviles
  md: 768px,    // Tablets
  lg: 992px,    // Laptops
  xl: 1200px,   // Desktops
  xxl: 1400px   // Pantallas grandes
);
```

### Uso en SCSS:
```scss
// Mobile first
.my-element {
  font-size: 16px;
  
  @include media-up(md) {
    font-size: 18px;
  }
  
  @include media-up(lg) {
    font-size: 20px;
  }
}
```

## 🎨 Paleta de Colores

Inspirada en Intuit, la paleta incluye:

### Colores Primarios
- **Azul Principal**: `#0077C5`
- **Azul Oscuro**: `#005A9C`
- **Azul Claro**: `#E6F3FF`

### Colores Secundarios
- **Verde Principal**: `#00A651`
- **Verde Oscuro**: `#008A3C`
- **Verde Claro**: `#E6F7ED`

### Colores Neutros
- **Gris 900**: `#202124` (Texto principal)
- **Gris 700**: `#5F6368` (Texto secundario)
- **Gris 500**: `#9AA0A6` (Texto muted)
- **Gris 100**: `#F1F3F4` (Fondo secundario)

## 📱 Páginas Incluidas

1. **Home** (`index.html`) - Página principal con hero, servicios, precios y CTA
2. **About** (`about.html`) - Información sobre la empresa y equipo
3. **Contact** (`contact.html`) - Formulario de contacto e información
4. **Blog** (`blog.html`) - Lista de artículos del blog
5. **404** (`404.html`) - Página de error 404
6. **Thank You** (`thank-you.html`) - Página de agradecimiento

## 🧩 Componentes Disponibles

### Botones
```html
<a href="#" class="btn btn-primary">Botón Primario</a>
<a href="#" class="btn btn-secondary">Botón Secundario</a>
<a href="#" class="btn btn-outline">Botón Outline</a>
```

### Cards
```html
<div class="card">
  <div class="card-body">
    <h3 class="card-title">Título</h3>
    <p class="card-text">Contenido de la card</p>
  </div>
</div>
```

### Grid System
```html
<div class="container">
  <div class="row">
    <div class="col-md-6">Columna 1</div>
    <div class="col-md-6">Columna 2</div>
  </div>
</div>
```

## 🔧 Comandos Disponibles

- `npm run dev` - Modo desarrollo con watch
- `npm run build` - Compilación para producción
- `npm start` - Alias para `npm run dev`

## 📝 Próximos Pasos

1. **Agregar más páginas** según sea necesario
2. **Optimizar imágenes** y agregar más contenido
3. **Integrar con Calendly** para citas
4. **Agregar formularios funcionales** con validación
5. **Convertir a tema de WordPress** cuando esté listo

## 🤝 Contribución

Para contribuir al proyecto:

1. Haz tus cambios en la carpeta `src/`
2. Ejecuta `npm run build` para compilar
3. Revisa los cambios en la carpeta `dist/`
4. Haz commit de tus cambios

## 📞 Contacto

Para preguntas sobre este proyecto, contacta a Gabriel Coronado.

---

**Nota**: Este es un layout básico para desarrollo. Para producción, se convertirá en un tema de WordPress con funcionalidades adicionales.

