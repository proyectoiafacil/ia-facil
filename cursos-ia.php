<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos de IA - IA Educativa</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/cursos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navegación -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="nav-logo">
                <i class="fas fa-graduation-cap"></i>
                <span>IA Educativa</span>
            </div>
            <ul class="nav-menu">
                <li class="nav-item">
                    <a href="inicio.php" class="nav-link">
                        <i class="fas fa-home"></i> Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a href="tipos-ia.php" class="nav-link">
                        <i class="fas fa-robot"></i> Tipos de IA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="recursos-ia.php" class="nav-link">
                        <i class="fas fa-book"></i> Recursos de IA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cursos-ia.php" class="nav-link active">
                        <i class="fas fa-chalkboard-teacher"></i> Cursos de IA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="creditos.php" class="nav-link">
                        <i class="fas fa-info-circle"></i> Créditos
                    </a>
                </li>
            </ul>
            <div class="user-menu">
    <i class="fas fa-user-circle fa-2x" onclick="toggleUserMenu()"></i>
    <div id="userDropdown" class="user-dropdown hidden">
        <p><?php echo isset($_SESSION['user_nombre']) ? '👋 ' . $_SESSION['user_nombre'] : 'Invitado'; ?></p>
        <a href="logout.php"><i class="fas fa-sign-out-alt"></i> Cerrar Sesión</a>
    </div>
</div>

            <div class="hamburger">
                <span class="bar"></span>
                <span class="bar"></span>
                <span class="bar"></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="courses-hero">
        <div class="container">
            <div class="hero-content">
                <h1><i class="fas fa-chalkboard-teacher"></i> Cursos y Conferencias de IA</h1>
                <p>Aprende Inteligencia Artificial con los mejores cursos gratuitos y conferencias subtituladas</p>
                  

            <div class="header-content">
                <nav class="header-nav">
                    <a href="#free" class="nav-link active">Gratuitos</a>
                    <a href="#platform" class="nav-link active">Plataformas</a>
                 <a href="#conference" class="nav-link active">Conferencias</a>
                 <a href="#certificate" class="nav-link active">Certificados</a>
                </nav>
        </div>
        
            </div>
        </div>
    </section>

    <!-- Cursos Section -->
    <section class="courses-section">
        <div class="container">
            
            <?php
            $cursos = [
                'free' => [
                    'titulo' => 'Cursos Gratuitos',
                    'icono' => 'fas fa-gift',
                    'items' => [
                        [
                            'titulo' => 'Introducción a la Inteligencia Artificial',
                            'descripcion' => 'Curso introductorio que cubre los conceptos básicos de la IA, machine learning y deep learning.',
                            'instructor' => 'Andrew Ng',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-01-15',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'duracion' => '4 semanas',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés',
                            'imagen' => 'curso-intro-ia.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'Fundamentos de Machine Learning',
                            'descripcion' => 'Aprende los algoritmos fundamentales de machine learning y cómo implementarlos con Python.',
                            'instructor' => 'José Portilla',
                            'plataforma' => 'Udemy',
                            'fecha' => '2024-02-10',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'duracion' => '10 horas',
                            'idioma' => 'Español',
                            'subtitulos' => 'Español, Inglés',
                            'imagen' => 'curso-ml-fundamentos.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'Deep Learning con TensorFlow',
                            'descripcion' => 'Curso práctico sobre redes neuronales y deep learning utilizando TensorFlow y Keras.',
                            'instructor' => 'Google AI',
                            'plataforma' => 'Google Developers',
                            'fecha' => '2024-01-28',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '15 horas',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Francés',
                            'imagen' => 'curso-tensorflow.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'Procesamiento de Lenguaje Natural',
                            'descripcion' => 'Introducción al NLP con aplicaciones prácticas en análisis de texto y sentiment analysis.',
                            'instructor' => 'Stanford Online',
                            'plataforma' => 'YouTube',
                            'fecha' => '2024-02-05',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '20 horas',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Inglés, Español',
                            'imagen' => 'curso-nlp.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ]
                    ]
                ],
                'platform' => [
                    'titulo' => 'Cursos en Plataformas',
                    'icono' => 'fas fa-university',
                    'items' => [
                        [
                            'titulo' => 'Especialización en Machine Learning',
                            'descripcion' => 'Serie de cursos que cubren todos los aspectos del machine learning, desde los fundamentos hasta técnicas avanzadas.',
                            'instructor' => 'Andrew Ng',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-01-20',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '3 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Portugués',
                            'imagen' => 'curso-ml-especialization.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'Deep Learning Specialization',
                            'descripcion' => 'Domina las técnicas de deep learning y construye tu carrera en IA con esta especialización completa.',
                            'instructor' => 'Andrew Ng',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-01-12',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '3 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Chino',
                            'imagen' => 'curso-dl-especialization.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'Inteligencia Artificial: Refuerzo y Aprendizaje',
                            'descripcion' => 'Curso avanzado sobre aprendizaje por refuerzo y sus aplicaciones en robótica e IA.',
                            'instructor' => 'David Silver',
                            'plataforma' => 'edX',
                            'fecha' => '2024-02-01',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'duracion' => '8 semanas',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Inglés, Español',
                            'imagen' => 'curso-reinforcement.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'Inteligencia Artificial para Todos',
                            'descripcion' => 'Curso diseñado para no técnicos que quieren entender la IA y su impacto en los negocios.',
                            'instructor' => 'Andrew Ng',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-01-25',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'duracion' => '4 semanas',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Árabe',
                            'imagen' => 'curso-ai-for-everyone.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ]
                    ]
                ],
                'conference' => [
                    'titulo' => 'Conferencias y Charlas',
                    'icono' => 'fas fa-microphone-alt',
                    'items' => [
                        [
                            'titulo' => 'El Futuro de la IA',
                            'descripcion' => 'Conferencia sobre las tendencias futuras en IA y su impacto en la sociedad.',
                            'instructor' => 'Sam Altman',
                            'plataforma' => 'TED Talks',
                            'fecha' => '2024-02-12',
                            'url' => '',
                            'nivel' => 'Todos',
                            'duracion' => '18 minutos',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Francés, Alemán',
                            'imagen' => 'conferencia-futuro-ia.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'Ética en la Inteligencia Artificial',
                            'descripcion' => 'Charla sobre los dilemas éticos y responsabilidades en el desarrollo de sistemas de IA.',
                            'instructor' => 'Kate Crawford',
                            'plataforma' => 'TED Talks',
                            'fecha' => '2024-02-08',
                            'url' => '',
                            'nivel' => 'Todos',
                            'duracion' => '15 minutos',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Portugués',
                            'imagen' => 'conferencia-etica-ia.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'Cómo la IA Está Cambiando la Medicina',
                            'descripcion' => 'Conferencia sobre las aplicaciones revolucionarias de la IA en el campo médico.',
                            'instructor' => 'Eric Topol',
                            'plataforma' => 'TEDMED',
                            'fecha' => '2024-01-18',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '20 minutos',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés',
                            'imagen' => 'conferencia-ia-medicina.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ],
                        [
                            'titulo' => 'El Impacto de la IA en el Futuro del Trabajo',
                            'descripcion' => 'Análisis sobre cómo la IA transformará el mercado laboral y las habilidades necesarias para el futuro.',
                            'instructor' => 'Kai-Fu Lee',
                            'plataforma' => 'TED Talks',
                            'fecha' => '2024-02-14',
                            'url' => '',
                            'nivel' => 'Todos',
                            'duracion' => '14 minutos',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Chino',
                            'imagen' => 'conferencia-ia-trabajo.jpg',
                            'gratis' => true,
                            'certificado' => false
                        ]
                    ]
                ],
                'certificate' => [
                    'titulo' => 'Programas con Certificación',
                    'icono' => 'fas fa-certificate',
                    'items' => [
                        [
                            'titulo' => 'Certificación Profesional en Data Science',
                            'descripcion' => 'Programa completo que cubre estadísticas, machine learning y visualización de datos.',
                            'instructor' => 'IBM',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-01-01',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '6 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés',
                            'imagen' => 'certificacion-data-science.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'TensorFlow Developer Certificate',
                            'descripcion' => 'Preparación para la certificación oficial de desarrollador de TensorFlow de Google.',
                            'instructor' => 'Google',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-02-10',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'duracion' => '3 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Inglés',
                            'imagen' => 'certificacion-tensorflow.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'Especialista en IA y Machine Learning',
                            'descripcion' => 'Programa de certificación profesional que cubre todos los aspectos de la IA moderna.',
                            'instructor' => 'Microsoft',
                            'plataforma' => 'edX',
                            'fecha' => '2024-01-30',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'duracion' => '6 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés',
                            'imagen' => 'certificacion-microsoft-ai.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ],
                        [
                            'titulo' => 'Certificación en Deep Learning',
                            'descripcion' => 'Programa intensivo que cubre redes neuronales, CNN, RNN y transformers.',
                            'instructor' => 'DeepLearning.AI',
                            'plataforma' => 'Coursera',
                            'fecha' => '2024-02-15',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'duracion' => '4 meses',
                            'idioma' => 'Inglés',
                            'subtitulos' => 'Español, Inglés, Chino',
                            'imagen' => 'certificacion-deep-learning.jpg',
                            'gratis' => false,
                            'certificado' => true
                        ]
                    ]
                ]
            ];
            ?>

            <!-- Estadísticas de Cursos -->
            <div class="courses-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-gift"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($cursos['free']['items']); ?></h3>
                        <p>Cursos Gratuitos</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-university"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($cursos['platform']['items']); ?></h3>
                        <p>Cursos en Plataformas</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-microphone-alt"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($cursos['conference']['items']); ?></h3>
                        <p>Conferencias</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-certificate"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($cursos['certificate']['items']); ?></h3>
                        <p>Certificaciones</p>
                    </div>
                </div>
            </div>


            <?php foreach ($cursos as $id => $categoria): ?>
  <div id="<?= $id ?>" class="scroll-block" style="padding: 80px 0;">
    <div class="container">
      <div class="category-header">
        <h2><i class="<?= $categoria['icono'] ?>"></i> <?= $categoria['titulo'] ?></h2>
        <span class="category-count"><?= count($categoria['items']) ?> cursos</span>
      </div>

      <div class="courses-cards">
        <?php foreach ($categoria['items'] as $curso): ?>
          <div class="course-card" data-nivel="<?= strtolower($curso['nivel']) ?>">
            <div class="course-image">
              <img src="assets/img/<?= $curso['imagen'] ?>" alt="<?= $curso['titulo'] ?>">
              <div class="course-badges">
                <?php if ($curso['gratis']): ?>
                  <span class="badge badge-free">Gratis</span>
                <?php endif; ?>
                <?php if ($curso['certificado']): ?>
                  <span class="badge badge-certificate">Certificado</span>
                <?php endif; ?>
                <span class="badge badge-level"><?= $curso['nivel'] ?></span>
              </div>
            </div>
            <div class="course-content">
              <h3><?= $curso['titulo'] ?></h3>
              <p class="course-description"><?= $curso['descripcion'] ?></p>
              <div class="course-meta">
                <div class="meta-item"><i class="fas fa-chalkboard-teacher"></i> <?= $curso['instructor'] ?></div>
                <div class="meta-item"><i class="fas fa-globe"></i> <?= $curso['idioma'] ?></div>
                <div class="meta-item"><i class="fas fa-clock"></i> <?= $curso['duracion'] ?></div>
                <div class="meta-item"><i class="fas fa-play-circle"></i> <?= $curso['plataforma'] ?></div>
              </div>
            </div>
            <div class="course-actions">
              <a href="<?= $curso['url'] ?: '#' ?>" class="btn-primary" target="_blank">
                <i class="fas fa-external-link-alt"></i> Ver Curso
              </a>
              <button class="btn-secondary favorite-btn" data-title="<?= $curso['titulo'] ?>">
                <i class="far fa-heart"></i>
              </button>
              <button class="btn-secondary share-btn" data-title="<?= $curso['titulo'] ?>" data-url="<?= $curso['url'] ?>">
                <i class="fas fa-share-alt"></i>
              </button>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
<?php endforeach; ?>

            <!-- Mensaje cuando no hay resultados -->
            <div class="no-results" id="noResults" style="display: none;">
                <div class="no-results-content">
                    <i class="fas fa-search"></i>
                    <h3>No se encontraron cursos</h3>
                    <p>Intenta con otros términos de búsqueda o cambia los filtros.</p>
                    <button class="btn-primary" onclick="clearFilters()">
                        <i class="fas fa-refresh"></i> Limpiar Filtros
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!-- Plataformas Section -->
    <section class="platforms-section">
        <div class="container">
            <div class="section-header">
                <h2>Plataformas Recomendadas</h2>
                <p>Las mejores plataformas para aprender Inteligencia Artificial</p>
            </div>
            
            <div class="platforms-grid">
                <div class="platform-card">
                    <div class="platform-logo">
                        <img src="/placeholder.svg?height=80&width=200" alt="Coursera">
                    </div>
                    <h3>Coursera</h3>
                    <p>Cursos y especializaciones de las mejores universidades y empresas del mundo.</p>
                    <a href="https://www.coursera.org/browse/data-science/machine-learning" target="_blank" class="platform-link">
                        Ver cursos <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                
                <div class="platform-card">
                    <div class="platform-logo">
                        <img src="/placeholder.svg?height=80&width=200" alt="Udemy">
                    </div>
                    <h3>Udemy</h3>
                    <p>Cursos prácticos creados por expertos en la industria de la IA.</p>
                    <a href="https://www.udemy.com/topic/artificial-intelligence/" target="_blank" class="platform-link">
                        Ver cursos <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="platform-card">
                    <div class="platform-logo">
                        <img src="/placeholder.svg?height=80&width=200" alt="YouTube">
                    </div>
                    <h3>YouTube</h3>
                    <p>Tutoriales gratuitos y conferencias completas sobre IA y machine learning.</p>
                    <a href="https://www.youtube.com/results?search_query=artificial+intelligence+course" target="_blank" class="platform-link">
                        Ver videos <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                <div class="platform-card">
                    <div class="platform-logo">
                        <img src="/placeholder.svg?height=80&width=200" alt="TED">
                    </div>
                    <h3>TED Talks</h3>
                    <p>Conferencias inspiradoras sobre el futuro de la IA y su impacto en la sociedad.</p>
                    <a href="https://www.ted.com/topics/artificial+intelligence" target="_blank" class="platform-link">
                        Ver charlas <i class="fas fa-arrow-right"></i>
                    </a>
                </div>
                
                
    </section>

    

   
    

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <div class="footer-logo">
                        <i class="fas fa-graduation-cap"></i>
                        <span>IA Educativa</span>
                    </div>
                    <p>Promoviendo la Inteligencia Artificial en la educación para un futuro más inteligente y accesible.</p>
                </div>
                <div class="footer-section">
                    <h3>Enlaces Rápidos</h3>
                    <ul>
                        <li><a href="index.php">Inicio</a></li>
                        <li><a href="tipos-ia.php">Tipos de IA</a></li>
                        <li><a href="recursos-ia.php">Recursos</a></li>
                        <li><a href="cursos-ia.php">Cursos</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Contacto</h3>
                    <p><i class="fas fa-envelope"></i> proyectoiafacil@gmail.com</p>
                    <p><i class="fas fa-phone"></i> +1 (555) 123-4567</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 IA Educativa. Todos los derechos reservados.</p>
            </div>
        </div>
    </footer>

    <script src="js/recursos.js"></script>
    
</body>
</html>
