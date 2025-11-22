# Terra Base <!-- omit in toc -->

- [Versiones](#versiones)
  - [Actualización de 2.x a 3.x](#actualización-de-2x-a-3x)
- [Requisitos](#requisitos)
- [Instalación](#instalación)
- [Configuración](#configuración)
- [Uso](#uso)
  - [Config Rewrite](#config-rewrite)
  - [Roles de usuario básicos](#roles-de-usuario-básicos)
  - [Otras configuraciones](#otras-configuraciones)
- [Contacto](#contacto)

Configuraciones y dependencias básicas comunes a todos los productos
digitales Drupal.

El módulo provee un punto de partida técnico y por sí mismo no ofrece
funcionalidades a nivel de explotación. Para la instalación de un producto
digital Drupal funcionalmente mínimo, consulte el
https://gitlab.juntadeandalucia.es/msd/terra_template.

## Versiones

Se mantienen las siguientes versiones:

- `1.x`: versión deprecada sin mantenimiento con las siguientes subramas

  - `1.0.x` : compatible con Drupal 8.x
  - `1.1.x` : compatible con Drupal 9.x

- `2.x` : versión con mantenimiento mínimo y las siguientes subramas

  - `2.0.x` : compatible con Drupal 8.x
  - `2.1.x` : compatible con Drupal 9.x

- `3.x` : versión recomendada, con mantenimiento y las siguientes subramas

  - `3.0.x` : compatible con Drupal 9.x y Drupal 10.x

### Actualización de 2.x a 3.x

En general, la mera instalación de una nueva versión mayor de una dependencia no
asegura el funcionamiento del producto digital, siendo necesario en la mayoría
de casos la revisión de la implementación de aquellas funcionalidades que
dependan del componente actualizado.

En el caso de Terra Base 3.0.x se introducen cambios mayores que deben ser
tenidos en cuenta en el portal donde se desee actualizar. Consulte los puntos a
tratar en su actualización documentados en el [registro de cambios relativo al
lanzamiento de la nueva versión](https://gitlab.juntadeandalucia.es/msd/documentacion/-/blob/main/cambios/20240515-terra_base_3.md#actualizaci%C3%B3n-desde-2x).

## Requisitos

El módulo no tiene dependencias internas ni requerimientos especiales.

## Instalación

Instalar conforme al procedimiento general. Viste https://www.drupal.org/node/1897420
para más información.

Este módulo provee de por sí una base de instalación, luego sólo es recomendable
su uso en sitios con un perfil de instalación mínimo.

## Configuración

El módulo no provee opciones de configuración específicas.

## Uso

El módulo está diseñado como base de instalación, luego no provee mecanismos
funcionales específicos.

Sin embargo, si establece un soporte y configuraciones base sobre las que se
espera que el resto de módulos y las funcionalidades del sitio trabajen.

### Config Rewrite

Las extensiones MSD/Terra pueden incorporar opciones de configuración que
alteran parcialmente a las provistas por su extensión original en el momento de
la instalación.

Este mecanismo se apoya en el [módulo contribuído Config
Rewrite](https://www.drupal.org/project/config_rewrite).

### Roles de usuario básicos

El módulo instala dos roles de usuario:

- **Súper usuario (superuser)**
  Tiene acceso pleno a todas las operaciones del
  sitio web. Debe otorgarse sólo a aquellos usuarios con permisos para alterar
  el comportamiento o configuración del sitio.

- **Administrador (administrator)**
  Orientado a usuarios con acceso a todas las
  área funcionales desde el punto de vista de explotación. Los usuarios con este
  rol podrán gestionar cualquier tipo contenido sin restricciones.

### Otras configuraciones

- módulos habituales en cualquier instalación Drupal, como por ejemplo: Better
  Exposed Filters, Token, etc. Puede consultar la lista en el archivo
  composer.json. Algnos módulos son sólo requeridos a nivel de código pero no
  son instalados por Terra Base, consulte el archivo _.info_ del módulo

## Contacto

Soporte MSD/Terra
