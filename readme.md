# Versionamiento semántico

Para mantener el Ecosistema saludable, confiable y seguro, cada vez que se realice un cambio significativo, las actualizaciones de un paquete o microservicio, recomendamos publicar una nueva versión del paquete o microservicio con una [Versión de etiqueta] actualizada (https://git-scm.com/book/en/v2/Git-Basics-Tagging) número en el repositorio y el archivo package.json que sigue la especificación de versión semántica. Siguiendo [la semántica la especificación de versión] (https://semver.org/) ayuda a otros desarrolladores que dependen de su código a comprender el alcance de los cambios
en una versión dada, y ajustar su propio código si es necesario.


## Versionamiento semántico 2.0.0

Dado un número de versión PRINCIPAL.MENOR.PATCH, incremente el:

    PRINCIPAL cuando realiza cambios de API incompatibles, como una actualización de plataforma, una actualización del sistema de compilación, etc.
    MENOR cuando agrega funcionalidad de una manera compatible con versiones anteriores, y para la primera etiqueta nueva después de una implementación de producción.
    PATCH cuando realice correcciones de errores compatibles con versiones anteriores o cuando se actualice a una nueva versión MENOR.

Las etiquetas adicionales para los metadatos de prelanzamiento y compilación están disponibles como extensiones del formato PRINCIPAL.MENOR.PATCH.

Ejemplo:

    Etiqueta 4.50.3 desplegada a producción
    La siguiente etiqueta desplegada para la puesta en escena sería 4.51.0
    A menos que se implemente 4.51.0 en producción, la siguiente etiqueta implementada sería 4.51.1
    A menos que se implemente 4.51.1 en producción, la siguiente etiqueta implementada sería 4.51.2
    ... repita hasta que una etiqueta 4.51.x se despliegue en producción
    La siguiente etiqueta desplegada sería 4.52.0

## Incremento de versiones semánticas en paquetes publicados.

Para ayudar a los desarrolladores a que confíen en su código, le recomendamos que comience la versión de su paquete en 1.0.0 y aumente de la siguiente manera:

|           Codigo Estado            |    Ambiente      | Regla                                                               |Ejemplo de versión|
|:--------------------------------:|:-------------:|:------------------------------------------------------------------:|:-----:|
| Development - UAT releases       | Desarrollo   | Empieza con 0.0.0                                                   | 0.0.1 |
| First release                    | Nuevo producto   | Empieza con 1.0.0                                                   | 1.0.0 |
| Corrección de errores    | Lanzamiento de parche | Incrementa el tercer dígito                                          | 1.0.1 |
| Nuevas funcionalidades | Lanzamiento menor | Increment the first digit and reset middle and last digits to zero | 2.0.0 |


## Cómo se manejan las ramas

Las descripciones de cómo se versionan los commits y las ramas se pueden considerar un tipo de pseudópodo. Con eso en mente
Hay algunas "variables" comunes a las que nos referiremos:

- ramaObjetivo => la rama a la que nos dirigimos
- commitObjetivo => el commit al que nos dirigimos en ramaObjetivo

### Rama master

Los commits en master siempre serán de fusión(merge) (ya sea de un hotfix o una rama de lanzamiento) o una etiqueta. Como tal podemos simplemente tomar el mensaje del commit o el mensaje del tag.

Si intentamos compilar a partir de un commit que no es un merge ni una tag, asumamos 0.1.0

mergeVersion => el SemVer extraído de commitObjetivo.Mensaje

- mayor: `mergeVersion.Major`
- menor: `mergeVersion.Minor`
- parche: `mergeVersion.Patch`
- Prelanzamiento: 0 (tal vez contar commits más adelante)
- estabilidad: final

Etiquetas opcionales (solo cuando se realiza la transición al repositorio existente): * TagOnHeadCommit.Name = {semver} => anula la versión para ser {semver}

### Rama Develop

fechaCommitObjetivo => la fecha de commitObjetivo masterVersionCommit => la primera versión (commit de merge o tag SemVer)
en la rama master que es más antiguo que la fechaCommitObjetivo masterMergeVersion => el SemVer extraído de masterVersionCommit.Mensaje

- major: `masterMergeVersion.Major`
- menor: `masterMergeVersion.Minor` + 1 (0 si se usa la anulación anterior)
- parche: 0
- prelanzamiento: `alpha. {n}` donde n = cuántos commit `develop` está delante de masterVersionCommit.Fecha ('0' rellenado a 4 caracteres)

### Release branches

- Should branch off from: develop
- Must merge back into: develop and master
- Branch naming convention: release-{n} eg release-1.2

releaseVersion => the SemVer extracted from targetBranch.Name releaseTag => the first version tag placed on the branch. 
Note that at least one version tag is required on the branch. The recommended initial tag is {releaseVersion}.0-alpha1. 
So for a branch named release-1.2 the recommended tag would be 1.2.0-alpha1

- major: mergeVersion.Major
- minor: mergeVersion.Minor
- patch: 0
- pre-release: {releaseTag.preRelease}.{n} where n = 1 + the number of commits since releaseTag.

So on a branch named release-1.2 with a tag 1.2.0-alpha1 and 4 commits after that tag the version would be 1.2.0-alpha1.4

### Liberar ramas

- Debe derivarse de: develop
- Debe integrarse de nuevo en: develop y master
- Convención de nomenclatura de ramas: release- {n} por ejemplo, release-1.2

releaseVersion => el SemVer extraído de la ramaObejivo.nombre releaseTag => el primer tag de versión colocado en la rama.
Tenga en cuenta que se requiere al menos un tag de versión en la rama. La etiqueta inicial recomendada es {releaseVersion} .0-alpha1.
Así que para una rama llamada versión 1.2, la etiqueta recomendada sería 1.2.0-alpha1

- major: mergeVersion.Major
- minor: mergeVersion.Minor
- parche: 0
- pre-release: {releaseTag.preRelease}. {n} donde n = 1 + el número de confirmaciones desde releaseTag.

Así que en una rama llamada release-1.2 con una etiqueta 1.2.0-alpha1 y 4 confirmaciones después de esa etiqueta, la versión sería 1.2.0-alpha1.4

### Sucursales de Hotfix

Nombrado: hotfix- {numeroVersion} eg hotfix-1.2

ramaVersion => el SemVer extraído de la ramaObjetivo.Nombre

- major: mergeVersion.Major
- menor: mergeVersion.Minor
- parche: mergeVersion.Patch
- pre-release: beta {n} donde n = número de confirmaciones en la rama ('0' rellenado a 4 caracteres)

### Pull-request branches

Should branch off from: develop 
Must merge back into: develop 
Branch naming convention: anything except master, develop, 
release-{n}, or hotfix-{n}. Canonical branch name contains /pull/.

- major: masterMergeVersion.Major
- minor: masterMergeVersion.Minor + 1 (0 if the override above is used)
- patch: 0
- pre-release: alpha.pull{n} where n = the pull request number ('0' padded to 4 characters)

### Ramas Pull-request

Debe derivarse de: develop,
Debe integrarse de nuevo en: develop 
Convención de nomenclatura de ramas: cualquier cosa excepto master, develop,
release- {n}, o hotfix- {n}. El nombre de la rama canónica contiene / pull /.

- major: masterMergeVersion.Major
- menor: masterMergeVersion.Minor + 1 (0 si se usa la anulación anterior)
- parche: 0
- pre-release: alpha.pull {n} donde n = el número de pull request ('0' rellenado a 4 caracteres)

### Construcciones nocturnas

Las construcciones de desarrollo, características y solicitud de extracción se consideran construcciones nocturnas y, por lo tanto, no cumplen estrictamente con SemVer.


## Config the theme

Go to /wp-content/themes/[theme_name]/README.md
