<?php
// ============================================================
//  PORTFOLIO CONFIG — Edit only this section
// ============================================================

$profile = [
    'name'      => 'Prince Aaron Gajes',
    'initials'  => 'PAG',
    'slug'      => 'pag.dev',
    'role'      => 'UI/UX Designer & Frontend Developer',
    'school'    => 'Polytechnic University of the Philippines – STBC',
    'year'      => '2nd Year IT Student',
    'bio'       => "I bridge the gap between beautiful design and clean code. My toolkit centers on Figma for crafting user-centered designs, and HTML, CSS, and JavaScript for bringing them to life in the browser.\n\nI'm driven by the belief that great design should feel invisible — intuitive, accessible, and purposeful.",
    'email'     => 'gjsaaron8@gmail.com',
    'github'    => 'https://github.com/gjsaaron',
    'linkedin'  => 'https://linkedin.com/in/gjsaaron',
    'available' => true,
];

$stats = [
    ['number' => '3+',  'label' => 'Projects Shipped'],
    ['number' => '2nd', 'label' => 'Year IT Student'],
    ['number' => '∞',   'label' => 'Hours in Figma'],
    ['number' => 'PUP', 'label' => 'STBC Campus'],
];

$skills = [
    ['name' => 'Figma',             'level' => 'high'],
    ['name' => 'HTML5',             'level' => 'high'],
    ['name' => 'CSS3',              'level' => 'high'],
    ['name' => 'JavaScript',        'level' => 'high'],
    ['name' => 'UI Design',         'level' => 'high'],
    ['name' => 'UX Research',       'level' => 'mid'],
    ['name' => 'Prototyping',       'level' => 'high'],
    ['name' => 'Wireframing',       'level' => 'high'],
    ['name' => 'Responsive Design', 'level' => 'high'],
    ['name' => 'Design Systems',    'level' => 'mid'],
    ['name' => 'User Flows',        'level' => 'mid'],
    ['name' => 'Git & GitHub',      'level' => 'mid'],
    ['name' => 'Accessibility',     'level' => 'mid'],
    ['name' => 'Typography',        'level' => 'high'],
    ['name' => 'Color Theory',      'level' => 'high'],
    ['name' => 'Bootstrap',         'level' => 'mid'],
];

$projects = [
    [
        'num'      => '001',
        'title'    => 'Your Best Project Title',
        'type'     => 'UI/UX Design · Frontend',
        'desc'     => "A brief description of what this project is about — who it's for, what problem it solves, and what your role was. Keep it punchy and specific. Replace this with the real thing.",
        'stack'    => ['Figma', 'HTML', 'CSS', 'JavaScript'],
        'link'     => '#',
        'github'   => '#',
        'featured' => true,
    ],
    [
        'num'      => '002',
        'title'    => 'Second Project Title',
        'type'     => 'E-Commerce',
        'desc'     => 'An E-commerce website project',
        'stack'    => ['HTML', 'Bootstrap', 'CSS', 'JavaScript'],
        'link'     => 'https://gjsaaron.github.io/E-COMM/vault93-diecast-home.html',
        'github'   => 'https://github.com/gjsaaron/E-COMM',
        'featured' => false,
    ],
    [
        'num'      => '003',
        'title'    => 'Third Project Title',
        'type'     => 'Frontend Development',
        'desc'     => 'Short description of the project — the design challenge, the solution, and the outcome.',
        'stack'    => ['HTML', 'CSS', 'JavaScript'],
        'link'     => '#',
        'github'   => '#',
        'featured' => false,
    ],
    [
        'num'      => '004',
        'title'    => 'Fourth Project Title',
        'type'     => 'UI/UX Design · Frontend',
        'desc'     => 'Short description of the project — the design challenge, the solution, and the outcome.',
        'stack'    => ['Figma', 'HTML', 'Bootstrap'],
        'link'     => '#',
        'github'   => '#',
        'featured' => false,
    ],
];

$marquee_items = ['UI Design', 'UX Research', 'Figma', 'HTML / CSS / JS', 'Prototyping', 'Wireframing', 'Frontend Dev', 'Responsive Design'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($profile['name']) ?> — Portfolio</title>
    <meta name="description" content="<?= htmlspecialchars($profile['role']) ?>">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;700;800&family=DM+Mono:wght@400;500&display=swap" rel="stylesheet">

    <style>
        /* ── Variables ── */
        :root {
            --bg: #060606;
            --bg2: #0d0d0d;
            --accent: #CAFF00;
            --text: #F0EFE8;
            --muted: #55554E;
            --border: #1C1C18;
            --card: #0f0f0f;
            --syne: 'Syne', sans-serif;
            --mono: 'DM Mono', monospace;
        }

        /* ── Reset & base ── */
        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html {
            scroll-behavior: smooth;
            font-size: 16px;
        }

        body {
            background: var(--bg);
            color: var(--text);
            font-family: var(--syne);
            overflow-x: hidden;
        }

        a {
            text-decoration: none;
        }

        p {
            margin: 0;
        }

        /* ── Subtle grid bg ── */
        body::before {
            content: '';
            position: fixed;
            inset: 0;
            background-image:
                linear-gradient(rgba(255, 255, 255, .015) 1px, transparent 1px),
                linear-gradient(90deg, rgba(255, 255, 255, .015) 1px, transparent 1px);
            background-size: 64px 64px;
            pointer-events: none;
            z-index: 0;
        }

        /* ── Custom cursor ── */
        #js-cursor {
            position: fixed;
            width: 10px;
            height: 10px;
            background: var(--accent);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9999;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
            transition: width .18s ease, height .18s ease;
            mix-blend-mode: difference;
        }

        #js-cursor-ring {
            position: fixed;
            width: 38px;
            height: 38px;
            border: 1px solid rgba(202, 255, 0, .3);
            border-radius: 50%;
            pointer-events: none;
            z-index: 9998;
            top: 0;
            left: 0;
            transform: translate(-50%, -50%);
        }

        @media (hover: none) {

            #js-cursor,
            #js-cursor-ring {
                display: none;
            }
        }

        /* ── Navbar ── */
        .site-nav {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            z-index: 500;
            background: rgba(6, 6, 6, .93);
            backdrop-filter: blur(16px);
            border-bottom: 1px solid var(--border);
            padding: 1.1rem 0;
        }

        .nav-brand {
            font-family: var(--mono);
            font-size: .8rem;
            color: var(--accent);
            letter-spacing: .1em;
        }

        .nav-brand:hover {
            color: var(--accent);
        }

        .nav-items {
            display: flex;
            align-items: center;
            gap: 2.2rem;
            list-style: none;
        }

        .nav-items a {
            font-family: var(--mono);
            font-size: .68rem;
            letter-spacing: .16em;
            text-transform: uppercase;
            color: var(--muted);
            position: relative;
            transition: color .2s;
        }

        .nav-items a::after {
            content: '';
            position: absolute;
            bottom: -3px;
            left: 0;
            width: 0;
            height: 1px;
            background: var(--accent);
            transition: width .25s;
        }

        .nav-items a:hover,
        .nav-items a.active {
            color: var(--text);
        }

        .nav-items a:hover::after,
        .nav-items a.active::after {
            width: 100%;
        }

        .nav-toggle {
            background: none;
            border: 1px solid var(--border);
            color: var(--muted);
            padding: .3rem .55rem;
            display: none;
        }

        .nav-toggle:focus {
            outline: none;
        }

        @media (max-width: 767px) {
            .nav-toggle {
                display: block;
            }

            .nav-items {
                display: none;
                flex-direction: column;
                align-items: flex-start;
                gap: 1.2rem;
                position: absolute;
                top: 100%;
                left: 0;
                right: 0;
                background: rgba(6, 6, 6, .97);
                border-bottom: 1px solid var(--border);
                padding: 1.5rem 1.5rem;
            }

            .nav-items.open {
                display: flex;
            }
        }

        /* ── Section base ── */
        section {
            position: relative;
            z-index: 1;
        }

        .section-pad {
            padding: 7rem 0;
        }

        .section-border {
            border-top: 1px solid var(--border);
        }

        /* ── Label ── */
        .sec-label {
            font-family: var(--mono);
            font-size: .62rem;
            letter-spacing: .22em;
            text-transform: uppercase;
            color: var(--accent);
            display: flex;
            align-items: center;
            gap: .7rem;
            margin-bottom: 1.4rem;
        }

        .sec-label::before {
            content: '';
            width: 20px;
            height: 1px;
            background: var(--accent);
            flex-shrink: 0;
        }

        /* ── Hero ── */
        #hero {
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 8rem 0 5rem;
        }

        .hero-name {
            font-size: clamp(4rem, 11vw, 11rem);
            font-weight: 800;
            line-height: .88;
            letter-spacing: -.03em;
            text-transform: uppercase;
        }

        .hero-name .name-stroke {
            color: transparent;
            -webkit-text-stroke: 1px rgba(240, 239, 232, .2);
            display: block;
        }

        .hero-sub {
            font-family: var(--mono);
            font-size: .8rem;
            color: var(--muted);
            line-height: 1.9;
        }

        .hero-sub strong {
            color: var(--text);
            font-weight: 500;
        }

        .hero-divider {
            width: 44px;
            height: 1px;
            background: var(--accent);
            margin: 1.8rem 0;
        }

        .status-pill {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            font-family: var(--mono);
            font-size: .6rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--accent);
            border: 1px solid rgba(202, 255, 0, .28);
            padding: .4rem .9rem;
        }

        .status-dot {
            width: 6px;
            height: 6px;
            background: var(--accent);
            border-radius: 50%;
            animation: blink 2.2s infinite;
        }

        @keyframes blink {

            0%,
            100% {
                opacity: 1;
            }

            50% {
                opacity: .25;
            }
        }

        .btn-filled {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: var(--accent);
            color: #000;
            font-family: var(--mono);
            font-size: .7rem;
            font-weight: 500;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .85rem 1.7rem;
            border: 2px solid var(--accent);
            transition: background .2s, color .2s, transform .2s;
        }

        .btn-filled:hover {
            background: transparent;
            color: var(--accent);
            transform: translateY(-2px);
        }

        .btn-outline-acc {
            display: inline-flex;
            align-items: center;
            gap: .5rem;
            background: transparent;
            color: var(--text);
            font-family: var(--mono);
            font-size: .7rem;
            letter-spacing: .12em;
            text-transform: uppercase;
            padding: .85rem 1.7rem;
            border: 1px solid var(--border);
            transition: border-color .2s, color .2s;
        }

        .btn-outline-acc:hover {
            border-color: var(--muted);
            color: var(--text);
        }

        .scroll-hint {
            font-family: var(--mono);
            font-size: .6rem;
            letter-spacing: .18em;
            text-transform: uppercase;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: .6rem;
            writing-mode: vertical-rl;
            transform: rotate(180deg);
        }

        .scroll-hint::after {
            content: '';
            width: 1px;
            height: 52px;
            background: var(--muted);
        }

        /* ── Marquee ── */
        .marquee-section {
            background: var(--bg2);
            border-top: 1px solid var(--border);
            border-bottom: 1px solid var(--border);
            padding: .85rem 0;
            overflow: hidden;
        }

        .marquee-track {
            display: flex;
            width: max-content;
            animation: marquee 22s linear infinite;
        }

        .marquee-track:hover {
            animation-play-state: paused;
        }

        .marquee-item {
            font-family: var(--mono);
            font-size: .68rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            padding: 0 2rem;
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 2rem;
        }

        .marquee-dot {
            color: var(--accent);
            font-size: .9rem;
            line-height: 1;
        }

        @keyframes marquee {
            from {
                transform: translateX(0);
            }

            to {
                transform: translateX(-50%);
            }
        }

        /* ── About stats ── */
        .stats-box {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 1px;
            background: var(--border);
            border: 1px solid var(--border);
            margin-top: 2.5rem;
        }

        .stat-cell {
            background: var(--card);
            padding: 1.4rem 1.5rem;
        }

        .stat-number {
            font-size: 2.1rem;
            font-weight: 800;
            letter-spacing: -.03em;
            color: var(--accent);
            line-height: 1;
        }

        .stat-label {
            font-family: var(--mono);
            font-size: .6rem;
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--muted);
            margin-top: .35rem;
        }

        .about-text {
            font-family: var(--mono);
            font-size: .8rem;
            color: var(--muted);
            line-height: 2.1;
        }

        .about-text strong {
            color: var(--text);
            font-weight: 500;
        }

        .about-heading {
            font-size: clamp(2rem, 4vw, 3.8rem);
            font-weight: 800;
            line-height: 1;
            letter-spacing: -.03em;
        }

        .about-heading .stroke {
            color: transparent;
            -webkit-text-stroke: 1px rgba(240, 239, 232, .22);
        }

        /* ── Skills ── */
        .sec-heading {
            font-size: clamp(2.2rem, 4.5vw, 4.5rem);
            font-weight: 800;
            letter-spacing: -.03em;
            line-height: .94;
        }

        /* skills use Bootstrap row g-0 with manual borders */
        .skills-row {
            border: 1px solid var(--border);
        }

        .skill-col {
            border-bottom: 1px solid var(--border);
        }

        /* every odd col on md+ gets a right border */
        @media (min-width: 768px) {
            .skill-col:nth-child(odd) {
                border-right: 1px solid var(--border);
            }
        }

        @media (min-width: 992px) {
            .skill-col {
                border-right: 1px solid var(--border);
            }

            .skill-col:nth-child(4n) {
                border-right: none;
            }
        }

        .skill-cell {
            background: var(--card);
            padding: 1rem 1.3rem;
            font-family: var(--mono);
            font-size: .76rem;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: .5rem;
            height: 100%;
            transition: background .2s, color .2s;
            position: relative;
            overflow: hidden;
        }

        .skill-cell::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--accent);
            transition: width .3s;
        }

        .skill-cell:hover {
            background: #151510;
            color: var(--text);
        }

        .skill-cell:hover::after {
            width: 100%;
        }

        .skill-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            margin-left: auto;
            flex-shrink: 0;
        }

        .skill-dot.high {
            background: var(--accent);
        }

        .skill-dot.mid {
            background: var(--muted);
        }

        .legend {
            font-family: var(--mono);
            font-size: .6rem;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: .4rem;
        }

        .legend-dot {
            width: 6px;
            height: 6px;
            border-radius: 50%;
            flex-shrink: 0;
        }

        /* ── Projects ── */
        /* Bootstrap row g-0 + manual borders for grid-line look */
        .projects-row {
            border: 1px solid var(--border);
        }

        .proj-col {
            border-bottom: 1px solid var(--border);
        }

        .proj-col:last-child {
            border-bottom: none;
        }

        @media (min-width: 768px) {

            /* For pairs of non-featured cols, left one gets right border */
            .proj-col.half:nth-of-type(odd) {
                border-right: 1px solid var(--border);
            }
        }

        .project-card {
            background: var(--card);
            padding: 2.2rem;
            color: var(--text);
            display: flex;
            flex-direction: column;
            gap: .85rem;
            height: 100%;
            position: relative;
            transition: background .22s;
        }

        .project-card .card-arrow {
            position: absolute;
            top: 1.8rem;
            right: 1.8rem;
            color: var(--muted);
            font-size: 1rem;
            transition: color .2s, transform .2s;
        }

        .project-card:hover {
            background: #141410;
        }

        .project-card:hover .card-arrow {
            color: var(--accent);
            transform: translate(2px, -2px);
        }

        .project-card:hover .stack-pill {
            border-color: rgba(202, 255, 0, .2);
            color: var(--accent);
        }

        .proj-num {
            font-family: var(--mono);
            font-size: .6rem;
            color: var(--accent);
            letter-spacing: .2em;
        }

        .proj-type {
            font-family: var(--mono);
            font-size: .65rem;
            color: var(--muted);
            letter-spacing: .1em;
        }

        .proj-title {
            font-size: 1.35rem;
            font-weight: 700;
            line-height: 1.2;
            letter-spacing: -.02em;
        }

        .proj-desc {
            font-family: var(--mono);
            font-size: .74rem;
            color: var(--muted);
            line-height: 1.95;
            flex: 1;
        }

        .stack-pills {
            display: flex;
            flex-wrap: wrap;
            gap: .3rem;
        }

        .stack-pill {
            font-family: var(--mono);
            font-size: .58rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--muted);
            border: 1px solid var(--border);
            padding: .18rem .55rem;
            transition: border-color .2s, color .2s;
        }

        .proj-links {
            display: flex;
            gap: 1.2rem;
            padding-top: .9rem;
            border-top: 1px solid var(--border);
            margin-top: auto;
        }

        .proj-link {
            font-family: var(--mono);
            font-size: .62rem;
            letter-spacing: .1em;
            text-transform: uppercase;
            color: var(--muted);
            display: flex;
            align-items: center;
            gap: .3rem;
            transition: color .2s;
        }

        .proj-link:hover {
            color: var(--accent);
        }

        /* Featured card — larger title, two-col layout on md+ */
        .project-card.featured .proj-title {
            font-size: clamp(1.6rem, 2.8vw, 2.2rem);
        }

        /* ── Contact ── */
        .contact-heading {
            font-size: clamp(2.8rem, 6vw, 6rem);
            font-weight: 800;
            letter-spacing: -.03em;
            line-height: .92;
        }

        .contact-heading .acc {
            color: var(--accent);
        }

        .contact-item {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1.15rem 0;
            border-bottom: 1px solid var(--border);
            color: var(--text);
            transition: color .2s;
        }

        .contact-item:first-of-type {
            border-top: 1px solid var(--border);
        }

        a.contact-item:hover .contact-val {
            color: var(--accent);
        }

        a.contact-item:hover .ci-arrow {
            color: var(--accent);
            transform: translate(3px, -3px);
        }

        .contact-lbl {
            font-family: var(--mono);
            font-size: .58rem;
            letter-spacing: .2em;
            text-transform: uppercase;
            color: var(--muted);
            margin-bottom: .1rem;
        }

        .contact-val {
            font-family: var(--mono);
            font-size: .8rem;
            color: var(--text);
            transition: color .2s;
        }

        .ci-arrow {
            color: var(--muted);
            font-size: .8rem;
            flex-shrink: 0;
            transition: color .2s, transform .2s;
        }

        /* ── Footer ── */
        footer {
            border-top: 1px solid var(--border);
            padding: 1.8rem 0;
            position: relative;
            z-index: 1;
        }

        .foot-text {
            font-family: var(--mono);
            font-size: .63rem;
            color: var(--muted);
            letter-spacing: .08em;
        }

        .foot-text .acc {
            color: var(--accent);
        }

        /* ── Reveal animations ── */
        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .65s ease, transform .65s ease;
        }

        .reveal.on {
            opacity: 1;
            transform: none;
        }

        .reveal-d1 {
            transition-delay: .1s;
        }

        .reveal-d2 {
            transition-delay: .2s;
        }

        .reveal-d3 {
            transition-delay: .32s;
        }

        /* ── Hero load animations ── */
        .anim-up {
            opacity: 0;
            animation: animUp .8s cubic-bezier(.16, 1, .3, 1) forwards;
        }

        .anim-up-d1 {
            animation-delay: .15s;
        }

        .anim-up-d2 {
            animation-delay: .3s;
        }

        .anim-up-d3 {
            animation-delay: .5s;
        }

        .anim-up-d4 {
            animation-delay: .7s;
        }

        @keyframes animUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: none;
            }
        }

        /* ── Misc ── */
        @media (max-width: 767px) {
            #hero {
                padding: 7rem 0 4rem;
            }

            .section-pad {
                padding: 5rem 0;
            }
        }
    </style>
</head>

<body>

    <div id="js-cursor"></div>
    <div id="js-cursor-ring"></div>

    <!-- ═══════════════════════════════ NAVBAR ══════════════════════════════ -->
    <header class="site-nav">
        <div class="container d-flex justify-content-between align-items-center">
            <a href="#hero" class="nav-brand"><?= htmlspecialchars($profile['slug']) ?></a>
            <button class="nav-toggle" id="navToggle" aria-label="Menu">
                <i class="bi bi-list" style="font-size:1.2rem;"></i>
            </button>
            <nav>
                <ul class="nav-items" id="navItems">
                    <li><a href="#about">About</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#projects">Work</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- ═══════════════════════════════ HERO ════════════════════════════════ -->
    <section id="hero">
        <div class="container">
            <div class="row align-items-end gy-5">

                <div class="col-lg-10">
                    <!-- eyebrow -->
                    <div class="sec-label anim-up anim-up-d1">
                        <?= htmlspecialchars($profile['role']) ?>
                    </div>

                    <!-- big name -->
                    <?php
                    $parts = explode(' ', $profile['name']);
                    $firstName = array_shift($parts);
                    $rest = implode(' ', $parts);
                    ?>
                    <div class="hero-name anim-up anim-up-d2">
                        <span class="d-block"><?= htmlspecialchars(strtoupper($firstName)) ?></span>
                        <span class="name-stroke"><?= htmlspecialchars(strtoupper($rest)) ?>.</span>
                    </div>

                    <!-- tagline -->
                    <div class="anim-up anim-up-d3">
                        <div class="hero-divider"></div>
                        <p class="hero-sub">
                            <strong><?= htmlspecialchars($profile['year']) ?></strong> ·
                            <?= htmlspecialchars($profile['school']) ?><br>
                            Building interfaces that feel as good as they look.
                        </p>
                    </div>

                    <!-- CTAs -->
                    <div class="d-flex flex-wrap gap-3 mt-4 anim-up anim-up-d4">
                        <a href="#projects" class="btn-filled">View Work <i class="bi bi-arrow-down"></i></a>
                        <a href="#contact" class="btn-outline-acc">Get In Touch</a>
                    </div>
                </div>

                <!-- side scroll hint + status -->
                <div class="col-lg-2 d-none d-lg-flex flex-column align-items-end gap-4 anim-up anim-up-d4">
                    <?php if ($profile['available']): ?>
                        <div class="status-pill">
                            <div class="status-dot"></div>
                            Available
                        </div>
                    <?php endif; ?>
                    <div class="scroll-hint">scroll</div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═════════════════════════════ MARQUEE ═══════════════════════════════ -->
    <div class="marquee-section">
        <div class="marquee-track">
            <?php for ($r = 0; $r < 2; $r++): ?>
                <?php foreach ($marquee_items as $item): ?>
                    <span class="marquee-item">
                        <?= htmlspecialchars($item) ?>
                        <span class="marquee-dot">·</span>
                    </span>
                <?php endforeach; ?>
            <?php endfor; ?>
        </div>
    </div>

    <!-- ═══════════════════════════════ ABOUT ═══════════════════════════════ -->
    <section id="about" class="section-pad section-border">
        <div class="container">
            <div class="row align-items-center gy-5">

                <!-- Heading -->
                <div class="col-lg-5 reveal">
                    <div class="sec-label">About</div>
                    <h2 class="about-heading">
                        Designing<br>
                        with <span class="stroke">purpose,</span><br>
                        building with<br>craft.
                    </h2>
                </div>

                <!-- Bio + stats -->
                <div class="col-lg-6 offset-lg-1 reveal reveal-d1">
                    <?php foreach (explode("\n\n", $profile['bio']) as $para): ?>
                        <p class="about-text mb-3"><?= nl2br(htmlspecialchars($para)) ?></p>
                    <?php endforeach; ?>

                    <div class="stats-box">
                        <?php foreach ($stats as $s): ?>
                            <div class="stat-cell">
                                <div class="stat-number"><?= htmlspecialchars($s['number']) ?></div>
                                <div class="stat-label"><?= htmlspecialchars($s['label']) ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- ═══════════════════════════════ SKILLS ══════════════════════════════ -->
    <section id="skills" class="section-pad section-border">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-6 reveal">
                    <div class="sec-label">Skills</div>
                    <h2 class="sec-heading">WHAT I<br>BRING.</h2>
                </div>
            </div>

            <div class="row g-0 skills-row reveal reveal-d1">
                <?php foreach ($skills as $skill): ?>
                    <div class="col-6 col-md-6 col-lg-3 skill-col">
                        <div class="skill-cell">
                            <?= htmlspecialchars($skill['name']) ?>
                            <span class="skill-dot <?= htmlspecialchars($skill['level']) ?>"></span>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="d-flex gap-4 mt-3 reveal reveal-d2">
                <span class="legend">
                    <span class="legend-dot" style="background:var(--accent);"></span>Proficient
                </span>
                <span class="legend">
                    <span class="legend-dot" style="background:var(--muted);"></span>Learning
                </span>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════ PROJECTS ═════════════════════════════ -->
    <section id="projects" class="section-pad section-border">
        <div class="container">

            <div class="row mb-5">
                <div class="col-lg-6 reveal">
                    <div class="sec-label">Work</div>
                    <h2 class="sec-heading">SELECTED<br>PROJECTS.</h2>
                </div>
            </div>

            <div class="row g-0 projects-row">
                <?php foreach ($projects as $i => $proj): ?>

                    <?php if ($proj['featured']): ?>
                        <!-- Featured full-width -->
                        <div class="col-12 proj-col reveal">
                            <div class="project-card featured">
                                <i class="bi bi-arrow-up-right card-arrow"></i>
                                <div class="row gy-4">
                                    <div class="col-md-7">
                                        <div class="proj-num"><?= htmlspecialchars($proj['num']) ?> — Featured</div>
                                        <h3 class="proj-title mt-2"><?= htmlspecialchars($proj['title']) ?></h3>
                                        <p class="proj-desc"><?= htmlspecialchars($proj['desc']) ?></p>
                                    </div>
                                    <div class="col-md-5 d-flex flex-column justify-content-end">
                                        <div class="stack-pills mb-3">
                                            <?php foreach ($proj['stack'] as $tag): ?>
                                                <span class="stack-pill"><?= htmlspecialchars($tag) ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                        <div class="proj-links">
                                            <a href="<?= htmlspecialchars($proj['link']) ?>" class="proj-link" onclick="event.stopPropagation()">
                                                <i class="bi bi-box-arrow-up-right"></i> Live
                                            </a>
                                            <a href="<?= htmlspecialchars($proj['github']) ?>" class="proj-link" onclick="event.stopPropagation()">
                                                <i class="bi bi-github"></i> Code
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php else:
                        $delay = ['reveal-d1', 'reveal-d2', 'reveal-d3'][($i - 1) % 3];
                    ?>
                        <!-- Half-width card -->
                        <div class="col-md-6 proj-col half reveal <?= $delay ?>">
                            <a href="<?= htmlspecialchars($proj['link']) ?>" class="project-card d-flex flex-column" style="text-decoration:none;">
                                <i class="bi bi-arrow-up-right card-arrow"></i>
                                <div class="proj-num"><?= htmlspecialchars($proj['num']) ?></div>
                                <div class="proj-type"><?= htmlspecialchars($proj['type']) ?></div>
                                <h3 class="proj-title"><?= htmlspecialchars($proj['title']) ?></h3>
                                <p class="proj-desc"><?= htmlspecialchars($proj['desc']) ?></p>
                                <div class="stack-pills">
                                    <?php foreach ($proj['stack'] as $tag): ?>
                                        <span class="stack-pill"><?= htmlspecialchars($tag) ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <div class="proj-links">
                                    <span class="proj-link" onclick="event.stopPropagation()">
                                        <i class="bi bi-box-arrow-up-right"></i> Live
                                    </span>
                                    <a href="<?= htmlspecialchars($proj['github']) ?>" class="proj-link" onclick="event.stopPropagation()">
                                        <i class="bi bi-github"></i> Code
                                    </a>
                                </div>
                            </a>
                        </div>
                    <?php endif; ?>

                <?php endforeach; ?>
            </div>

        </div>
    </section>

    <!-- ══════════════════════════════ CONTACT ══════════════════════════════ -->
    <section id="contact" class="section-pad section-border">
        <div class="container">
            <div class="row gy-5 align-items-start">

                <div class="col-lg-5 reveal">
                    <div class="sec-label">Contact</div>
                    <h2 class="contact-heading mb-4">
                        Let's<br>build<br>something<br>
                        <span class="acc">great.</span>
                    </h2>
                    <a href="mailto:<?= htmlspecialchars($profile['email']) ?>" class="btn-filled">
                        Say Hello <i class="bi bi-arrow-right"></i>
                    </a>
                </div>

                <div class="col-lg-6 offset-lg-1 reveal reveal-d1">

                    <a href="mailto:<?= htmlspecialchars($profile['email']) ?>" class="contact-item d-flex">
                        <div>
                            <div class="contact-lbl">Email</div>
                            <div class="contact-val"><?= htmlspecialchars($profile['email']) ?></div>
                        </div>
                        <i class="bi bi-arrow-up-right ci-arrow ms-auto"></i>
                    </a>

                    <a href="<?= htmlspecialchars($profile['github']) ?>" target="_blank" rel="noopener" class="contact-item d-flex">
                        <div>
                            <div class="contact-lbl">GitHub</div>
                            <div class="contact-val"><?= htmlspecialchars($profile['github']) ?></div>
                        </div>
                        <i class="bi bi-arrow-up-right ci-arrow ms-auto"></i>
                    </a>

                    <a href="<?= htmlspecialchars($profile['linkedin']) ?>" target="_blank" rel="noopener" class="contact-item d-flex">
                        <div>
                            <div class="contact-lbl">LinkedIn</div>
                            <div class="contact-val"><?= htmlspecialchars($profile['linkedin']) ?></div>
                        </div>
                        <i class="bi bi-arrow-up-right ci-arrow ms-auto"></i>
                    </a>

                    <div class="contact-item d-flex">
                        <div>
                            <div class="contact-lbl">School</div>
                            <div class="contact-val"><?= htmlspecialchars($profile['school']) ?></div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- ════════════════════════════════ FOOTER ═════════════════════════════ -->
    <footer>
        <div class="container d-flex justify-content-between flex-wrap gap-2">
            <p class="foot-text">&copy; <?= date('Y') ?> <?= htmlspecialchars($profile['name']) ?>. All rights reserved.</p>
            <p class="foot-text">Designed &amp; built by <span class="acc"><?= htmlspecialchars($profile['initials']) ?></span></p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        (function() {
            'use strict';

            /* ── Custom cursor ──────────────────────────────── */
            const cursorDot = document.getElementById('js-cursor');
            const cursorRing = document.getElementById('js-cursor-ring');
            let mouseX = 0,
                mouseY = 0,
                ringX = 0,
                ringY = 0;

            document.addEventListener('mousemove', function(e) {
                mouseX = e.clientX;
                mouseY = e.clientY;
                cursorDot.style.left = mouseX + 'px';
                cursorDot.style.top = mouseY + 'px';
            });

            (function animRing() {
                ringX += (mouseX - ringX) * 0.12;
                ringY += (mouseY - ringY) * 0.12;
                cursorRing.style.left = ringX + 'px';
                cursorRing.style.top = ringY + 'px';
                requestAnimationFrame(animRing);
            })();

            document.querySelectorAll('a, button, .skill-cell, .project-card').forEach(function(el) {
                el.addEventListener('mouseenter', function() {
                    cursorDot.style.width = '20px';
                    cursorDot.style.height = '20px';
                    cursorRing.style.width = '56px';
                    cursorRing.style.height = '56px';
                });
                el.addEventListener('mouseleave', function() {
                    cursorDot.style.width = '10px';
                    cursorDot.style.height = '10px';
                    cursorRing.style.width = '38px';
                    cursorRing.style.height = '38px';
                });
            });

            /* ── Scroll reveal ──────────────────────────────── */
            var revealEls = document.querySelectorAll('.reveal');
            var revealObs = new IntersectionObserver(function(entries) {
                entries.forEach(function(entry) {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('on');
                        revealObs.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.08
            });
            revealEls.forEach(function(el) {
                revealObs.observe(el);
            });

            /* ── Active nav highlight ───────────────────────── */
            var sections = document.querySelectorAll('section[id]');
            var navAnchors = document.querySelectorAll('.nav-items a');
            window.addEventListener('scroll', function() {
                var scrollPos = window.scrollY;
                var activeSec = '';
                sections.forEach(function(sec) {
                    if (scrollPos >= sec.offsetTop - 150) activeSec = sec.id;
                });
                navAnchors.forEach(function(a) {
                    if (a.getAttribute('href') === '#' + activeSec) {
                        a.classList.add('active');
                    } else {
                        a.classList.remove('active');
                    }
                });
            }, {
                passive: true
            });

            /* ── Mobile nav toggle ──────────────────────────── */
            var navToggle = document.getElementById('navToggle');
            var navItems = document.getElementById('navItems');
            navToggle.addEventListener('click', function() {
                navItems.classList.toggle('open');
            });
            navAnchors.forEach(function(a) {
                a.addEventListener('click', function() {
                    navItems.classList.remove('open');
                });
            });

        })();
    </script>
</body>

</html>