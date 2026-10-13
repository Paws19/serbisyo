<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Serbisyo | Hire trusted Filipino workers. Find work near you.</title>
    <meta name="description"
        content="Serbisyo connects customers with Filipino contractors and freelancers, and gives skilled Filipinos a steady way to find jobs.">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,500;9..144,600;9..144,700&family=Figtree:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        :root {
            --ivory: #f8f5ed;
            --ivory-deep: #f1ece0;
            --beige: #e8e1cf;
            --forest: #1a4332;
            --forest-mid: #245c44;
            --forest-deep: #0f2e22;
            --sage: #7d9a7d;
            --charcoal: #1e2823;
            --muted: #5a665f;
            --line: #ddd5c0;
            --gold: #b8941f;
            --gold-soft: rgba(184, 148, 31, 0.12);
            --shadow-sm: 0 2px 8px rgba(15, 46, 34, 0.04);
            --shadow-md: 0 8px 28px rgba(15, 46, 34, 0.08);
            --shadow-lg: 0 16px 48px rgba(15, 46, 34, 0.12);
            --radius: 0.75rem;
            --radius-lg: 1.25rem;
            --bs-body-font-family: 'Figtree', system-ui, sans-serif;
            --bs-body-color: var(--charcoal);
            --bs-body-bg: var(--ivory);
        }

        * {
            box-sizing: border-box
        }

        body {
            font-size: 1.0625rem;
            line-height: 1.7;
            -webkit-font-smoothing: antialiased
        }

        h1,
        h2,
        h3,
        h4,
        .brand {
            font-family: 'Fraunces', Georgia, serif;
            font-weight: 600;
            letter-spacing: -0.02em;
            color: var(--forest-deep);
            line-height: 1.15
        }

        h1 {
            font-size: clamp(2.6rem, 5.8vw, 4.2rem);
            font-weight: 700;
            line-height: 1.05
        }

        h2 {
            font-size: clamp(1.9rem, 3.6vw, 2.75rem)
        }

        h3 {
            font-size: 1.35rem
        }

        .lead-sm {
            color: var(--muted);
            max-width: 36rem;
            font-size: 1.125rem;
            line-height: 1.75
        }

        section {
            padding: 6.5rem 0
        }

        .btn {
            border-radius: 0.6rem;
            font-weight: 600;
            font-size: 0.95rem;
            padding: 0.85rem 1.6rem;
            transition: all 0.22s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            letter-spacing: 0.01em
        }

        .btn-forest {
            background: var(--forest);
            color: #fff;
            border: 1px solid var(--forest);
            box-shadow: 0 2px 8px rgba(26, 67, 50, 0.2)
        }

        .btn-forest:hover,
        .btn-forest:focus {
            background: var(--forest-deep);
            color: #fff;
            transform: translateY(-2px);
            box-shadow: 0 6px 20px rgba(26, 67, 50, 0.28)
        }

        .btn-line {
            border: 1.5px solid var(--forest);
            color: var(--forest);
            background: transparent
        }

        .btn-line:hover {
            background: var(--forest);
            color: #fff;
            transform: translateY(-1px)
        }

        .btn-ivory {
            background: var(--ivory);
            color: var(--forest-deep);
            border: 1px solid transparent;
            box-shadow: var(--shadow-sm)
        }

        .btn-ivory:hover {
            background: #fff;
            color: var(--forest-deep);
            transform: translateY(-1px)
        }

        .btn-outline-light {
            border: 1.5px solid rgba(255, 255, 255, 0.45);
            color: #fff
        }

        .btn-outline-light:hover {
            background: rgba(255, 255, 255, 0.12);
            border-color: #fff;
            color: #fff
        }

        :focus-visible {
            outline: 3px solid var(--gold);
            outline-offset: 3px
        }

        /* ─── NAV ─── */
        .nav-wrap {
            background: rgba(248, 245, 237, 0.92);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(221, 213, 192, 0.6);
            position: sticky;
            top: 0;
            z-index: 100
        }

        .brand {
            font-size: 1.55rem;
            text-decoration: none;
            display: flex;
            align-items: center;
            gap: 0.6rem;
            color: var(--forest-deep)
        }

        .brand-mark {
            width: 32px;
            height: 32px;
            display: block
        }

        .nav-link {
            color: var(--charcoal);
            font-weight: 500;
            font-size: 0.95rem;
            padding: 0.4rem 0.6rem !important;
            transition: color 0.2s
        }

        .nav-link:hover {
            color: var(--forest)
        }

        /* ─── HERO ─── */
        .hero {
            padding: 5.5rem 0 6.5rem;
            position: relative;
            overflow: hidden
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -20%;
            right: -10%;
            width: 55%;
            height: 120%;
            background: radial-gradient(ellipse at center, rgba(125, 154, 125, 0.08) 0%, transparent 70%);
            pointer-events: none
        }

        .search {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius);
            padding: 0.45rem;
            display: flex;
            gap: 0.4rem;
            flex-wrap: wrap;
            max-width: 40rem;
            box-shadow: var(--shadow-md)
        }

        .search select,
        .search input {
            border: 0;
            flex: 1 1 9.5rem;
            padding: 0.8rem 1rem;
            background: transparent;
            font: inherit;
            min-width: 0;
            color: var(--charcoal)
        }

        .search select {
            border-right: 1px solid var(--line);
            color: var(--muted)
        }

        .search input::placeholder {
            color: var(--muted)
        }

        .hero-note {
            color: var(--muted);
            font-size: 0.95rem
        }

        .hero-note a {
            color: var(--forest);
            font-weight: 600;
            text-decoration: none;
            transition: color 0.2s
        }

        .hero-note a:hover {
            color: var(--forest-deep)
        }

        /* Banig visual */
        .banig {
            position: relative;
            border-radius: var(--radius-lg);
            background-color: var(--forest);
            background-image:
                repeating-linear-gradient(45deg, rgba(248, 245, 237, 0.11) 0 13px, transparent 13px 26px),
                repeating-linear-gradient(-45deg, rgba(125, 154, 125, 0.22) 0 13px, transparent 13px 26px);
            padding: 2.75rem 2rem;
            min-height: 34rem;
            overflow: hidden;
            box-shadow: var(--shadow-lg)
        }

        .banig::after {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(160deg, transparent 40%, rgba(15, 46, 34, 0.25) 100%);
            pointer-events: none
        }

        .ticket {
            position: relative;
            z-index: 1;
            background: var(--ivory);
            border-radius: 0.7rem;
            padding: 1.15rem 1.3rem;
            max-width: 21rem;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.22);
            font-size: 0.97rem;
            transition: transform 0.3s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.3s ease;
            cursor: default
        }

        .ticket:hover {
            transform: translateY(-6px) scale(1.02);
            box-shadow: 0 16px 40px rgba(0, 0, 0, 0.28)
        }

        .ticket+.ticket {
            margin-top: 1.15rem
        }

        .ticket:nth-child(1) {
            margin-left: 0
        }

        .ticket:nth-child(2) {
            margin-left: 3.8rem
        }

        .ticket:nth-child(3) {
            margin-left: 1.2rem
        }

        .ticket:nth-child(4) {
            margin-left: 2.8rem
        }

        .ticket b {
            display: block;
            color: var(--forest-deep);
            font-weight: 600;
            margin-bottom: 0.15rem
        }

        .ticket span:not(.tag) {
            color: var(--muted);
            font-size: 0.88rem
        }

        .ticket .tag {
            float: right;
            font-size: 0.75rem;
            font-weight: 600;
            letter-spacing: 0.02em;
            color: var(--forest);
            background: var(--beige);
            border-radius: 2rem;
            padding: 0.18rem 0.7rem
        }

        .ticket .tag.hired {
            background: #d1e8d1;
            color: var(--forest-deep)
        }

        .rise {
            animation: rise 0.9s 0.15s both cubic-bezier(0.22, 1, 0.36, 1)
        }

        @keyframes rise {
            from {
                opacity: 0;
                transform: translateY(20px)
            }

            to {
                opacity: 1;
                transform: none
            }
        }

        /* ─── STATS ─── */
        .stats-bar {
            background: linear-gradient(135deg, var(--forest-deep) 0%, var(--forest) 100%);
            color: #d4e0d8;
            padding: 2.25rem 0;
            position: relative
        }

        .stats-bar::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(45deg, rgba(248, 245, 237, 0.03) 0 12px, transparent 12px 24px);
            pointer-events: none
        }

        .stat-num {
            font-family: 'Fraunces', Georgia, serif;
            font-size: 2.1rem;
            font-weight: 700;
            color: #fff;
            display: block;
            letter-spacing: -0.02em
        }

        .stat-label {
            font-size: 0.88rem;
            opacity: 0.8;
            font-weight: 500
        }

        /* ─── PATHS ─── */
        .band {
            background: var(--ivory-deep)
        }

        .path-card {
            border: 1px solid var(--line);
            background: #fff;
            border-radius: var(--radius-lg);
            padding: 2.5rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm)
        }

        .path-card:hover {
            box-shadow: var(--shadow-md);
            transform: translateY(-3px)
        }

        .path-card.dark {
            background: linear-gradient(160deg, var(--forest) 0%, var(--forest-deep) 100%);
            border-color: transparent;
            color: #e0ebe3
        }

        .path-card.dark h3 {
            color: #fff
        }

        .path-card ul {
            padding-left: 1.15rem;
            margin: 1.4rem 0 2rem
        }

        .path-card li {
            margin-bottom: 0.55rem;
            line-height: 1.55
        }

        .path-label {
            display: inline-block;
            font-size: 0.78rem;
            font-weight: 600;
            letter-spacing: 0.06em;
            text-transform: uppercase;
            color: var(--sage);
            margin-bottom: 0.75rem
        }

        .path-card.dark .path-label {
            color: rgba(255, 255, 255, 0.55)
        }

        /* ─── SERVICES ─── */
        .service-card {
            border: 1px solid var(--line);
            background: #fff;
            border-radius: var(--radius);
            padding: 1.35rem 1.5rem;
            margin-bottom: 0.75rem;
            cursor: pointer;
            transition: all 0.25s ease;
            position: relative;
            box-shadow: var(--shadow-sm)
        }

        .service-card:hover,
        .service-card.active {
            border-color: var(--forest);
            background: var(--ivory);
            box-shadow: var(--shadow-md)
        }

        .service-card .svc-head {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-weight: 600;
            font-size: 1.05rem
        }

        .service-card .svc-desc {
            color: var(--muted);
            font-size: 0.9rem;
            margin-top: 0.3rem
        }

        .service-card .svc-extra {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), margin 0.3s ease;
            font-size: 0.9rem;
            color: var(--muted);
            margin-top: 0;
            line-height: 1.6
        }

        .service-card.active .svc-extra {
            max-height: 140px;
            margin-top: 0.85rem
        }

        .service-card .chev {
            transition: transform 0.3s ease;
            color: var(--forest);
            font-size: 1.1rem
        }

        .service-card.active .chev {
            transform: rotate(90deg)
        }

        /* ─── PROCESS ─── */
        .step {
            display: flex;
            gap: 1.25rem;
            margin-bottom: 2rem
        }

        .step .n {
            flex: 0 0 2.6rem;
            height: 2.6rem;
            border-radius: 50%;
            background: var(--forest);
            color: #fff;
            font-weight: 700;
            font-size: 0.95rem;
            display: grid;
            place-items: center;
            box-shadow: 0 3px 10px rgba(26, 67, 50, 0.2)
        }

        .step h4 {
            font-family: 'Figtree', system-ui, sans-serif;
            font-weight: 600;
            font-size: 1.05rem;
            margin-bottom: 0.25rem;
            color: var(--forest-deep)
        }

        .step p {
            margin: 0;
            color: var(--muted);
            font-size: 0.95rem
        }

        .track-title {
            padding-bottom: 0.85rem;
            margin-bottom: 2rem;
            border-bottom: 2.5px solid var(--forest);
            display: inline-block
        }

        /* ─── TRUST ─── */
        .fact {
            border-left: 3px solid var(--sage);
            padding-left: 1.25rem;
            height: 100%
        }

        .fact h3 {
            font-size: 1.15rem;
            margin-bottom: 0.4rem
        }

        .fact p {
            color: var(--muted);
            margin: 0;
            font-size: 0.95rem;
            line-height: 1.65
        }

        /* ─── STORIES ─── */
        .story-card {
            background: #fff;
            border: 1px solid var(--line);
            border-radius: var(--radius-lg);
            padding: 1.85rem;
            height: 100%;
            transition: all 0.3s ease;
            box-shadow: var(--shadow-sm);
            position: relative
        }

        .story-card::before {
            content: '"';
            position: absolute;
            top: 1.1rem;
            left: 1.4rem;
            font-family: 'Fraunces', Georgia, serif;
            font-size: 3.5rem;
            color: var(--gold-soft);
            line-height: 1;
            pointer-events: none
        }

        .story-card:hover {
            transform: translateY(-4px);
            box-shadow: var(--shadow-md)
        }

        .story-card .quote {
            font-style: italic;
            color: var(--charcoal);
            margin-bottom: 1.25rem;
            position: relative;
            z-index: 1;
            line-height: 1.7
        }

        .story-meta {
            font-size: 0.9rem;
            color: var(--muted)
        }

        .story-meta strong {
            color: var(--forest-deep);
            font-weight: 600
        }

        /* ─── FAQ ─── */
        .accordion {
            --bs-accordion-bg: transparent;
            --bs-accordion-border-color: var(--line);
            --bs-accordion-active-bg: var(--ivory-deep);
            --bs-accordion-active-color: var(--forest-deep);
            --bs-accordion-btn-focus-box-shadow: none;
            --bs-accordion-border-radius: var(--radius)
        }

        .accordion-item {
            border-radius: var(--radius) !important;
            margin-bottom: 0.5rem;
            overflow: hidden;
            border: 1px solid var(--line) !important
        }

        .accordion-button {
            font-weight: 600;
            font-size: 1.02rem;
            padding: 1.15rem 1.35rem
        }

        .accordion-body {
            padding: 0 1.35rem 1.25rem;
            color: var(--muted);
            line-height: 1.7
        }

        /* ─── CTA ─── */
        .cta {
            background: linear-gradient(145deg, var(--forest-deep) 0%, #163528 50%, var(--forest) 100%);
            color: #d4e0d8;
            padding: 6rem 0;
            position: relative;
            overflow: hidden
        }

        .cta::before {
            content: '';
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(45deg, rgba(248, 245, 237, 0.03) 0 14px, transparent 14px 28px),
                repeating-linear-gradient(-45deg, rgba(125, 154, 125, 0.06) 0 14px, transparent 14px 28px);
            pointer-events: none
        }

        .cta h2 {
            color: #fff
        }

        .cta p {
            opacity: 0.9;
            font-size: 1.1rem
        }

        /* ─── FOOTER ─── */
        footer {
            background: var(--charcoal);
            color: #a8b5ae;
            padding: 3.5rem 0 2.25rem;
            font-size: 0.92rem
        }

        footer a {
            color: #a8b5ae;
            text-decoration: none;
            transition: color 0.2s
        }

        footer a:hover {
            color: #fff
        }

        footer .brand {
            color: #fff;
            font-size: 1.4rem
        }

        footer h4 {
            font-family: 'Figtree', system-ui, sans-serif;
            font-weight: 600;
            font-size: 0.85rem;
            letter-spacing: 0.04em;
            text-transform: uppercase;
            color: rgba(255, 255, 255, 0.55);
            margin-bottom: 1rem
        }

        footer ul li {
            margin-bottom: 0.4rem
        }

        /* ─── RESPONSIVE ─── */
        @media (max-width: 991px) {
            section {
                padding: 4.5rem 0
            }

            .hero {
                padding: 3.5rem 0 4.5rem
            }

            .banig {
                min-height: 28rem;
                padding: 2rem 1.5rem
            }

            .ticket:nth-child(2),
            .ticket:nth-child(4) {
                margin-left: 1.4rem
            }

            .path-card {
                padding: 2rem
            }
        }

        @media (prefers-reduced-motion: reduce) {

            .rise,
            .ticket,
            .service-card,
            .path-card,
            .story-card,
            .btn {
                animation: none;
                transition: none
            }
        }
    </style>
</head>

<body>

    <header class="nav-wrap">
        <nav class="navbar navbar-expand-lg py-3">
            <div class="container">
                <a class="brand" href="{{ url('/') }}" aria-label="Serbisyo home">
                    <svg class="brand-mark" viewBox="0 0 32 32" aria-hidden="true">
                        <rect width="32" height="32" rx="8" fill="#1a4332" />
                        <path d="M8 22.5l8-12.5 8 12.5M11.5 22.5l4.5-7 4.5 7" fill="none" stroke="#f8f5ed"
                            stroke-width="2.1" stroke-linejoin="round" />
                    </svg>
                    Serbisyo
                </a>
                <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#nav"
                    aria-controls="nav" aria-expanded="false" aria-label="Toggle menu">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="nav">
                    <ul class="navbar-nav mx-auto gap-lg-2">
                        <li class="nav-item"><a class="nav-link" href="#services">Services</a></li>
                        <li class="nav-item"><a class="nav-link" href="#how">How it works</a></li>
                        <li class="nav-item"><a class="nav-link" href="#trust">Safety</a></li>
                        <li class="nav-item"><a class="nav-link" href="#stories">Stories</a></li>
                        <li class="nav-item"><a class="nav-link" href="#faq">FAQ</a></li>
                    </ul>
                    <div class="d-flex gap-2 mt-3 mt-lg-0">
                        <a class="btn btn-line" href="{{ url('/login') }}">Log in</a>
                        <a class="btn btn-forest" href="{{ url('/register') }}">Sign up free</a>
                    </div>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <!-- HERO -->
        <section class="hero">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <h1>Maghanap ng maaasahang pro.<br>O maghanap ng trabaho.</h1>
                        <p class="lead-sm mt-4 mb-4">
                            Serbisyo connects Filipino customers with local contractors and freelancers —
                            so the work gets done right, and skilled neighbors get paid fairly.
                            Built for the Philippines, by Filipinos.
                        </p>
                        <form class="search mb-3" action="{{ url('/search') }}" method="get" role="search">
                            <label class="visually-hidden" for="svc">What do you need done?</label>
                            <select id="svc" name="service">
                                <option value="">Ano ang kailangan mo?</option>
                                <option>Electrician</option>
                                <option>Plumber</option>
                                <option>Aircon technician</option>
                                <option>Computer / CCTV technician</option>
                                <option>Carpenter / Mason</option>
                                <option>House cleaner / Labada</option>
                                <option>Web & graphic designer</option>
                                <option>Virtual assistant</option>
                            </select>
                            <label class="visually-hidden" for="loc">City or town</label>
                            <input id="loc" name="location" type="text"
                                placeholder="City, municipality, or barangay">
                            <button class="btn btn-forest" type="submit">Find a pro</button>
                        </form>
                        <p class="hero-note mb-0">Looking for work instead?
                            <a href="{{ url('/register?role=provider') }}">Create your provider profile →</a>
                        </p>
                    </div>
                    <div class="col-lg-6">
                        <div class="banig rise" aria-hidden="true">
                            <div class="ticket">
                                <span class="tag">Open</span>
                                <b>Leaking kitchen faucet</b>
                                <span>Antipolo, Rizal · Needs a plumber this week</span>
                            </div>
                            <div class="ticket">
                                <span class="tag hired">Hired</span>
                                <b>Rewire two outlets</b>
                                <span>Silang, Cavite · Ate Mylene chose Kuya Dindo</span>
                            </div>
                            <div class="ticket">
                                <span class="tag">Open</span>
                                <b>Logo for a sari-sari store</b>
                                <span>Cebu City · Freelance designer wanted</span>
                            </div>
                            <div class="ticket">
                                <span class="tag">Open</span>
                                <b>Deep clean after renovation</b>
                                <span>Quezon City · 3BR house, this weekend</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STATS -->
        <div class="stats-bar">
            <div class="container">
                <div class="row text-center g-4">
                    <div class="col-6 col-md-3">
                        <span class="stat-num" data-target="1840">0</span>
                        <span class="stat-label">Jobs posted this month</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <span class="stat-num" data-target="920">0</span>
                        <span class="stat-label">Active providers</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <span class="stat-num" data-target="47">0</span>
                        <span class="stat-label">Cities & provinces</span>
                    </div>
                    <div class="col-6 col-md-3">
                        <span class="stat-num" data-target="4.8">0</span>
                        <span class="stat-label">Average rating</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- TWO PATHS -->
        <section class="band" id="audiences">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="path-card">
                            <span class="path-label">For customers</span>
                            <h3>Kailangan ko ng serbisyo</h3>
                            <p class="text-secondary mb-0">Post the job once. Compare offers from people in your area.
                                Hire the one you trust.</p>
                            <ul>
                                <li>Free to post — no hidden fees</li>
                                <li>See real profiles, past work, and neighbor reviews</li>
                                <li>Agree on the price in writing before work starts</li>
                                <li>Message in English or Filipino — whichever feels natural</li>
                            </ul>
                            <a class="btn btn-forest" href="{{ url('/register?role=client') }}">Post a job</a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="path-card dark">
                            <span class="path-label">For providers</span>
                            <h3>Gusto kong magtrabaho</h3>
                            <p class="mb-0">Whether you fix aircon, install CCTV, or design websites — put your
                                skills where customers are already looking.</p>
                            <ul>
                                <li>Build a profile with skills, rates, and service area</li>
                                <li>Get job requests from customers near you</li>
                                <li>Keep your earnings — no agency cuts on the agreed price</li>
                                <li>Grow through real reviews from real clients</li>
                            </ul>
                            <a class="btn btn-ivory" href="{{ url('/register?role=provider') }}">Create provider
                                profile</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- SERVICES -->
        <section id="services">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-5">
                        <h2>Skilled people for the jobs around your home and business</h2>
                        <p class="lead-sm mt-3">
                            From quick repairs after a storm to remote freelance work — find the trade you need.
                            Click any service below for a practical tip.
                        </p>
                        <a class="btn btn-line mt-3" href="{{ url('/services') }}">Browse all services</a>
                    </div>
                    <div class="col-lg-7">
                        <div class="service-card" data-svc>
                            <div class="svc-head">Electricians <span class="chev">→</span></div>
                            <div class="svc-desc">Wiring, outlets, lighting, breaker repair</div>
                            <div class="svc-extra">Tip: Ask if they carry TESDA or related certification and whether
                                they can show photos of recent similar work.</div>
                        </div>
                        <div class="service-card" data-svc>
                            <div class="svc-head">Plumbers <span class="chev">→</span></div>
                            <div class="svc-desc">Leaks, pipes, heaters, drainage, water pressure</div>
                            <div class="svc-extra">Common after heavy rain. Clarify if the quote includes materials
                                (PPR vs PVC) or labor only.</div>
                        </div>
                        <div class="service-card" data-svc>
                            <div class="svc-head">Aircon & appliance repair <span class="chev">→</span></div>
                            <div class="svc-desc">Cleaning, installation, troubleshooting</div>
                            <div class="svc-extra">Peak season is March–June. Ask if they use nitrogen for cleaning and
                                whether a short warranty is included.</div>
                        </div>
                        <div class="service-card" data-svc>
                            <div class="svc-head">Computer, network & CCTV <span class="chev">→</span></div>
                            <div class="svc-desc">Repairs, setup, wifi, security cameras</div>
                            <div class="svc-extra">Useful for homes and small shops. Confirm if cabling and basic
                                configuration are part of the quote.</div>
                        </div>
                        <div class="service-card" data-svc>
                            <div class="svc-head">Cleaners & household help <span class="chev">→</span></div>
                            <div class="svc-desc">General cleaning, labada, move-out, post-renovation</div>
                            <div class="svc-extra">Be clear about hours, supplies, and whether you need deep cleaning
                                or regular maintenance.</div>
                        </div>
                        <div class="service-card" data-svc>
                            <div class="svc-head">Freelancers <span class="chev">→</span></div>
                            <div class="svc-desc">Design, writing, web development, virtual assistants</div>
                            <div class="svc-extra">Look at their portfolio and past client feedback before locking in a
                                rate. Many prefer local freelancers who understand the market.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- HOW IT WORKS -->
        <section class="band" id="how">
            <div class="container">
                <h2 class="mb-5">How Serbisyo works</h2>
                <div class="row g-5">
                    <div class="col-lg-6">
                        <h3 class="track-title">For customers</h3>
                        <div class="step">
                            <div class="n">1</div>
                            <div>
                                <h4>Describe the job</h4>
                                <p>Tell us what you need, where, your preferred schedule, and rough budget. Photos help
                                    a lot.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">2</div>
                            <div>
                                <h4>Compare offers</h4>
                                <p>Pros reply with prices and availability. Check profiles, completed jobs, and real
                                    reviews from other Filipinos.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">3</div>
                            <div>
                                <h4>Hire and review</h4>
                                <p>Confirm your pick, get the work done, then leave an honest review so the next
                                    customer knows what to expect.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="track-title">For workers & freelancers</h3>
                        <div class="step">
                            <div class="n">1</div>
                            <div>
                                <h4>Set up your profile</h4>
                                <p>List your skills, experience, rates, and the cities or barangays you serve. Add
                                    photos of past work if you can.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">2</div>
                            <div>
                                <h4>Reply to requests</h4>
                                <p>Send your price and schedule to customers who need what you do. Clear and friendly
                                    communication goes a long way.</p>
                            </div>
                        </div>
                        <div class="step">
                            <div class="n">3</div>
                            <div>
                                <h4>Do great work, build your name</h4>
                                <p>Every finished job adds a review. In a country where word-of-mouth still rules, good
                                    reviews bring more work.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- TRUST -->
        <section id="trust">
            <div class="container">
                <div class="row g-5 align-items-start">
                    <div class="col-lg-5">
                        <h2>Made for Filipinos,<br>built on trust</h2>
                        <p class="lead-sm mt-3">
                            Serbisyo is open only to people in the Philippines. You deal with real neighbors who know
                            the area,
                            speak your language, and understand local prices and realities.
                        </p>
                        <p class="lead-sm mt-3">
                            In a culture where kapwa and bayanihan still matter, we designed the platform so reputation
                            is earned — not bought.
                        </p>
                    </div>
                    <div class="col-lg-7">
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Verified profiles</h3>
                                    <p>Providers confirm their identity before they can accept jobs. We look for
                                        consistent information and, when possible, government-issued ID checks.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Real reviews only</h3>
                                    <p>Only customers who actually hired through Serbisyo can leave a review. No fake
                                        stars, no paid testimonials.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Clear pricing upfront</h3>
                                    <p>Agree on the rate before work begins. No surprise charges later. What you both
                                        confirm is what gets paid.</p>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="fact">
                                    <h3>Local support</h3>
                                    <p>Questions or a dispute? Our team replies in English or Filipino and understands
                                        how things work on the ground.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- STORIES -->
        <section class="band" id="stories">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-8">
                        <h2>Stories from the barangay</h2>
                        <p class="lead-sm mt-2">Real people, real work, real feedback.</p>
                    </div>
                </div>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="story-card">
                            <p class="quote">“Na-hire ko si Kuya Rico for our aircon cleaning. On time, malinis ang
                                trabaho, at maganda ang presyo. May review na rin siya from previous clients — helpful
                                talaga.”</p>
                            <div class="story-meta">
                                <strong>Maricar D.</strong><br>
                                Quezon City · Aircon cleaning
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="story-card">
                            <p class="quote">“I’m a freelance graphic designer. Through Serbisyo I got three local
                                clients in two months — a bakery logo, a menu, and a small e-commerce site. Mas personal
                                kaysa sa big platforms.”</p>
                            <div class="story-meta">
                                <strong>Paolo S.</strong><br>
                                Cebu City · Freelance designer
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="story-card">
                            <p class="quote">“After the last typhoon, kailangan namin ng electrician ASAP. Within a
                                day may offers na. Chose someone with good reviews nearby. Worked out well.”</p>
                            <div class="story-meta">
                                <strong>Jessa & family</strong><br>
                                Antipolo, Rizal · Electrical repair
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- FAQ -->
        <section id="faq">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4">
                        <h2>Questions people ask</h2>
                        <p class="lead-sm mt-3">Still unsure? These are the ones we hear most often.</p>
                    </div>
                    <div class="col-lg-8">
                        <div class="accordion" id="faqs">
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#q1" aria-expanded="true" aria-controls="q1">
                                        Is Serbisyo free to join?
                                    </button>
                                </h3>
                                <div id="q1" class="accordion-collapse collapse show" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        Yes. Signing up and posting jobs is free. Providers can create a profile and
                                        browse requests at no cost.
                                        We believe skilled Filipinos should not have to pay just to look for work.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q2" aria-expanded="false"
                                        aria-controls="q2">
                                        Who can use Serbisyo?
                                    </button>
                                </h3>
                                <div id="q2" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        Serbisyo is for Filipinos and for work done in the Philippines. You will confirm
                                        this when you sign up.
                                        This keeps the community local, relevant, and easier to trust.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q3" aria-expanded="false"
                                        aria-controls="q3">
                                        How do I know a worker is reliable?
                                    </button>
                                </h3>
                                <div id="q3" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        Check their verified badge, number of completed jobs, and customer reviews.
                                        You can also message them with questions before you hire. Look for clear
                                        communication and consistent past feedback —
                                        the same things you would check when asking a kapitbahay for a recommendation.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q4" aria-expanded="false"
                                        aria-controls="q4">
                                        Can I find remote freelance work too?
                                    </button>
                                </h3>
                                <div id="q4" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        Yes. Designers, writers, developers, and virtual assistants can list their
                                        services and work with customers anywhere in the Philippines.
                                        Many small businesses prefer hiring local freelancers who understand the market
                                        and can communicate easily.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q5" aria-expanded="false"
                                        aria-controls="q5">
                                        What if the job goes wrong?
                                    </button>
                                </h3>
                                <div id="q5" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        Contact support from your job page. We review both sides and help reach a fair
                                        resolution.
                                        Clear written agreements and good communication upfront prevent most problems —
                                        but when issues arise, we are here to help.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h3 class="accordion-header">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#q6" aria-expanded="false"
                                        aria-controls="q6">
                                        Do you take a cut from the agreed price?
                                    </button>
                                </h3>
                                <div id="q6" class="accordion-collapse collapse" data-bs-parent="#faqs">
                                    <div class="accordion-body">
                                        No hidden cuts on the price you and the provider agree on. We want the full
                                        value of the work to stay between the customer and the worker.
                                        That is one of the reasons many providers prefer Serbisyo over traditional
                                        agencies.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- CTA -->
        <section class="cta">
            <div class="container position-relative">
                <div class="row align-items-center g-4">
                    <div class="col-lg-8">
                        <h2>Ready to get started?</h2>
                        <p class="mb-0 mt-2">
                            Join Serbisyo today. Hire someone you can trust — or start getting jobs from people who need
                            exactly what you do.
                        </p>
                    </div>
                    <div class="col-lg-4 d-flex gap-2 flex-wrap justify-content-lg-end">
                        <a class="btn btn-ivory" href="{{ url('/register?role=client') }}">Post a job</a>
                        <a class="btn btn-outline-light" href="{{ url('/register?role=provider') }}">Find work</a>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <footer>
        <div class="container">
            <div class="row g-4">
                <div class="col-md-5">
                    <span class="brand mb-2 d-inline-block">Serbisyo</span>
                    <p class="mb-0" style="max-width:22rem">
                        Connecting Filipino customers with Filipino workers and freelancers.
                        Built with kapwa in mind.
                    </p>
                </div>
                <div class="col-6 col-md-3">
                    <h4>Platform</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ url('/services') }}">Browse services</a></li>
                        <li><a href="{{ url('/register?role=provider') }}">Become a provider</a></li>
                        <li><a href="#how">How it works</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-4">
                    <h4>Company</h4>
                    <ul class="list-unstyled mb-0">
                        <li><a href="{{ url('/about') }}">About</a></li>
                        <li><a href="{{ url('/contact') }}">Contact</a></li>
                        <li><a href="{{ url('/terms') }}">Terms</a></li>
                        <li><a href="{{ url('/privacy') }}">Privacy</a></li>
                    </ul>
                </div>
            </div>
            <hr class="border-secondary my-4 opacity-25">
            <p class="mb-0">&copy; {{ date('Y') }} Serbisyo. Made in the Philippines.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Interactive service cards
        document.querySelectorAll('[data-svc]').forEach(card => {
            card.addEventListener('click', () => {
                const isActive = card.classList.contains('active');
                document.querySelectorAll('[data-svc]').forEach(c => c.classList.remove('active'));
                if (!isActive) card.classList.add('active');
            });
        });

        // Animated counters
        const animateCounters = () => {
            const counters = document.querySelectorAll('.stat-num');
            const duration = 1700;
            counters.forEach(counter => {
                const target = parseFloat(counter.getAttribute('data-target'));
                const isDecimal = target % 1 !== 0;
                const startTime = performance.now();

                const update = (now) => {
                    const progress = Math.min((now - startTime) / duration, 1);
                    const ease = 1 - Math.pow(1 - progress, 3);
                    const value = target * ease;
                    counter.textContent = isDecimal ? value.toFixed(1) : Math.floor(value).toLocaleString();
                    if (progress < 1) requestAnimationFrame(update);
                    else counter.textContent = isDecimal ? target.toFixed(1) : target.toLocaleString();
                };
                requestAnimationFrame(update);
            });
        };

        const statsBar = document.querySelector('.stats-bar');
        if (statsBar) {
            const observer = new IntersectionObserver((entries) => {
                if (entries[0].isIntersecting) {
                    animateCounters();
                    observer.disconnect();
                }
            }, {
                threshold: 0.35
            });
            observer.observe(statsBar);
        }
    </script>
</body>

</html>
