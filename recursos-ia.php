<?php session_start(); ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recursos de IA - IA Educativa</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/recursos.css">
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
                    <a href="recursos-ia.php" class="nav-link active">
                        <i class="fas fa-book"></i> Recursos de IA
                    </a>
                </li>
                <li class="nav-item">
                    <a href="cursos-ia.php" class="nav-link">
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
    <section class="resources-hero">
        <div class="container">
            <div class="hero-content">
                <h1><i class="fas fa-book-open"></i> Biblioteca de Recursos de IA</h1>
                <p>Descubre una colección completa de recursos educativos sobre Inteligencia Artificial</p>
                
                <!-- Buscador -->
               
                
        <div class="header-content">
            <nav class="header-nav">
                <a href="#articles" class="nav-link active">Artículos</a>
                <a href="#videos" class="nav-link active">Videos</a>
                <a href="#docs" class="nav-link active">Documentación</a>
                <a href="#books" class="nav-link active">Libros</a>
            </nav>
        </div>
       </div>
        </div>
    </section>

    <section class="resources-section">
        <div class="container">
            
            <?php
            $recursos = [
                'articles' => [
                    'titulo' => 'Artículos y Blogs',
                    'icono' => 'fas fa-newspaper',
                    'items' => [
                        [
                            'titulo' => 'Introducción a la Inteligencia Artificial',
                            'descripcion' => 'Una guía completa para principiantes sobre los conceptos fundamentales de la IA.',
                            'autor' => 'MIT Technology Review',
                            'fecha' => '2024-01-15',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => '15 min'
                        ],
                        [
                            'titulo' => 'Machine Learning: Algoritmos y Aplicaciones',
                            'descripcion' => 'Exploración profunda de los algoritmos de ML más utilizados en la industria.',
                            'autor' => 'Google AI Blog',
                            'fecha' => '2024-02-10',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => '25 min'
                        ],
                        [
                            'titulo' => 'Ética en Inteligencia Artificial',
                            'descripcion' => 'Consideraciones éticas y responsabilidad en el desarrollo de sistemas de IA.',
                            'autor' => 'Stanford HAI',
                            'fecha' => '2024-01-28',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => '20 min'
                        ],
                        [
                            'titulo' => 'Deep Learning para Visión Computacional',
                            'descripcion' => 'Técnicas avanzadas de deep learning aplicadas al procesamiento de imágenes.',
                            'autor' => 'OpenAI Research',
                            'fecha' => '2024-02-05',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => '30 min'
                        ]
                    ]
                ],
                'videos' => [
                    'titulo' => 'Videos Educativos',
                    'icono' => 'fas fa-video',
                    'items' => [
                        [
                            'titulo' => 'IA Explicada en 10 Minutos',
                            'descripcion' => 'Video introductorio que explica los conceptos básicos de la IA de manera simple.',
                            'autor' => 'Dot CSV',
                            'fecha' => '2024-01-20',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => '10 min'
                        ],
                        [
                            'titulo' => 'Redes Neuronales desde Cero',
                            'descripcion' => 'Tutorial completo sobre cómo funcionan las redes neuronales.',
                            'autor' => '3Blue1Brown',
                            'fecha' => '2024-01-12',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => '45 min'
                        ],
                        [
                            'titulo' => 'ChatGPT y Modelos de Lenguaje',
                            'descripcion' => 'Explicación detallada de cómo funcionan los modelos de lenguaje como GPT.',
                            'autor' => 'Andrej Karpathy',
                            'fecha' => '2024-02-01',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => '60 min'
                        ],
                        [
                            'titulo' => 'IA en la Medicina Moderna',
                            'descripcion' => 'Aplicaciones actuales y futuras de la IA en el campo médico.',
                            'autor' => 'TED Talks',
                            'fecha' => '2024-01-25',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => '18 min'
                        ]
                    ]
                ],
                
                'docs' => [
                    'titulo' => 'Documentación Técnica',
                    'icono' => 'fas fa-file-alt',
                    'items' => [
                        [
                            'titulo' => 'Documentación de TensorFlow',
                            'descripcion' => 'Guías oficiales y referencias de API para TensorFlow.',
                            'autor' => 'Google',
                            'fecha' => '2024-02-12',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => 'Referencia'
                        ],
                        [
                            'titulo' => 'PyTorch Tutorials',
                            'descripcion' => 'Tutoriales oficiales y documentación completa de PyTorch.',
                            'autor' => 'Meta AI',
                            'fecha' => '2024-02-08',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => 'Referencia'
                        ],
                        [
                            'titulo' => 'Scikit-learn User Guide',
                            'descripcion' => 'Guía completa para machine learning con Python.',
                            'autor' => 'Scikit-learn',
                            'fecha' => '2024-01-18',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => 'Referencia'
                        ],
                        [
                            'titulo' => 'OpenAI API Documentation',
                            'descripcion' => 'Documentación oficial para integrar modelos de OpenAI.',
                            'autor' => 'OpenAI',
                            'fecha' => '2024-02-14',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => 'Referencia'
                        ]
                    ]
                ],
                'books' => [
                    'titulo' => 'Libros y eBooks',
                    'icono' => 'fas fa-book',
                    'items' => [
                        [
                            'titulo' => 'Hands-On Machine Learning',
                            'descripcion' => 'Guía práctica para machine learning con Scikit-Learn y TensorFlow.',
                            'autor' => 'Aurélien Géron',
                            'fecha' => '2023-12-01',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => '600 páginas'
                        ],
                        [
                            'titulo' => 'Pattern Recognition and Machine Learning',
                            'descripcion' => 'Texto fundamental sobre reconocimiento de patrones y ML.',
                            'autor' => 'Christopher Bishop',
                            'fecha' => '2023-11-15',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => '738 páginas'
                        ],
                        [
                            'titulo' => 'Deep Learning',
                            'descripcion' => 'El libro definitivo sobre deep learning por los pioneros del campo.',
                            'autor' => 'Ian Goodfellow, Yoshua Bengio, Aaron Courville',
                            'fecha' => '2023-10-20',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => '800 páginas'
                        ],
                        [
                            'titulo' => 'AI for Everyone',
                            'descripcion' => 'Introducción accesible a la IA para no técnicos.',
                            'autor' => 'Andrew Ng',
                            'fecha' => '2024-01-05',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => '200 páginas'
                        ]
                    ]
                ],
                'datasets' => [
                    'titulo' => 'Datasets y Bases de Datos',
                    'icono' => 'fas fa-database',
                    'items' => [
                        [
                            'titulo' => 'ImageNet',
                            'descripcion' => 'Base de datos masiva de imágenes para entrenamiento de modelos de visión.',
                            'autor' => 'Stanford Vision Lab',
                            'fecha' => '2024-01-01',
                            'url' => '',
                            'nivel' => 'Intermedio',
                            'tiempo' => '14M imágenes'
                        ],
                        [
                            'titulo' => 'Common Crawl',
                            'descripcion' => 'Archivo abierto de la web para entrenamiento de modelos de lenguaje.',
                            'autor' => 'Common Crawl Foundation',
                            'fecha' => '2024-02-01',
                            'url' => '',
                            'nivel' => 'Avanzado',
                            'tiempo' => 'Petabytes'
                        ],
                        [
                            'titulo' => 'Kaggle Datasets',
                            'descripcion' => 'Colección de datasets para competencias y práctica de ML.',
                            'autor' => 'Kaggle Community',
                            'fecha' => '2024-02-10',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => '50K+ datasets'
                        ],
                        [
                            'titulo' => 'UCI ML Repository',
                            'descripcion' => 'Repositorio clásico de datasets para machine learning.',
                            'autor' => 'UC Irvine',
                            'fecha' => '2024-01-15',
                            'url' => '',
                            'nivel' => 'Principiante',
                            'tiempo' => '500+ datasets'
                        ]
                    ]
                ]
            ];
            ?>

            <!-- Estadísticas de Recursos -->
            <div class="resources-stats">
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-newspaper"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($recursos['articles']['items']); ?></h3>
                        <p>Artículos</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-video"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($recursos['videos']['items']); ?></h3>
                        <p>Videos</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($recursos['docs']['items']); ?></h3>
                        <p>Documentacion</p>
                    </div>
                </div>
                <div class="stat-card">
                    <div class="stat-icon">
                        <i class="fas fa-book"></i>
                    </div>
                    <div class="stat-info">
                        <h3><?php echo count($recursos['books']['items']); ?></h3>
                        <p>Libros</p>
                    </div>
                </div>
            </div>

            <?php foreach ($recursos as $categoriaId => $categoria): ?>
    <div id="<?= $categoriaId ?>" class="resource-block" style="padding: 80px 0;">
        <div class="container">
            <div class="category-header">
                <h2><i class="<?= $categoria['icono'] ?>"></i> <?= $categoria['titulo'] ?></h2>
                <span class="category-count"><?= count($categoria['items']) ?> recursos</span>
            </div>
            <div class="resources-cards">
                <?php foreach ($categoria['items'] as $recurso): ?>
                    <div class="resource-card" data-category="<?= $categoriaId ?>" data-level="<?= strtolower($recurso['nivel']) ?>">
                        <div class="resource-header">
                            <div class="resource-type">
                                <i class="<?= $categoria['icono'] ?>"></i>
                                <?= $recurso['autor'] ?>
                            </div>
                            <span class="resource-level level-<?= strtolower($recurso['nivel']) ?>">
                                <?= $recurso['nivel'] ?>
                            </span>
                        </div>
                        <div class="resource-content">
                            <h3><?= $recurso['titulo'] ?></h3>
                            <p><?= $recurso['descripcion'] ?></p>
                            <div class="resource-meta">
                                <div class="meta-item"><i class="fas fa-calendar-alt"></i> <span><?= $recurso['fecha'] ?></span></div>
                                <div class="meta-item"><i class="fas fa-clock"></i> <span><?= $recurso['tiempo'] ?></span></div>
                            </div>
                        </div>
                        <div class="resource-actions">
                            <a href="<?= $recurso['url'] ?: '#' ?>" class="btn-primary" target="_blank">
                                <i class="fas fa-external-link-alt"></i> Ver recurso
                            </a>
                            <button class="btn-secondary favorite-btn" data-title="<?= $recurso['titulo'] ?>">
                                <i class="far fa-heart"></i>
                            </button>
                            <button class="btn-secondary share-btn" data-title="<?= $recurso['titulo'] ?>" data-url="<?= $recurso['url'] ?>">
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
                    <h3>No se encontraron recursos</h3>
                    <p>Intenta con otros términos de búsqueda o cambia los filtros.</p>
                    <button class="btn-primary" onclick="clearFilters()">
                        <i class="fas fa-refresh"></i> Limpiar Filtros
                    </button>
                </div>
            </div>
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
